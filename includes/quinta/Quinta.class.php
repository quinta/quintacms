<?php

if (!defined('QUINTA.CLASS.PHP')){
define('QUINTA.CLASS.PHP',1);

	/**
	 * Include Quinta configurations - this assumes that this config file is in the same directory, you
	 * can adjust this here if you prefer to put either somewhere else.
	 */
	require(dirname(__FILE__) . '/quinta_config.php');

	/**
	 * Include to pull in the QCodo framework and configuration - this also runs
	 * QApplication.class.php ..
	 */
	require(__QCODO_ROOT__  . '/includes/prepend.inc.php');
	
	/**
	 * The Quinta class is an abstract class that statically provides global
	 * information and global utilities for the entire CMS application. Since
	 * it inherits QApplication, it also provides the connection to the QCodo
	 * framework.
	 *
	 * Custom constants for Quinta CMS, as well as global variables and global
	 * methods are declared statically here. Additional initializations for the CMS
	 * should also be here - but remember, QApplication has already been initialized
	 * in prepend.inc.php so do not use parent::
	 *
	 * This may also be used to override QApplication (eg. for BrowserType ..)
	 *
	 *@todo  move things from IndexPage to here ..
	 *@package Quinta
	 * @subpackage Classes
	 */
	abstract class Quinta extends QApplication
	{
		/**
		 *  @var string IsSsl true if $_SERVER['HTTPS'] is set, indicating the request was secure
		 */
		public static $IsSsl = false;
		/**
		 *  @var string ServerName contains $_SERVER['SERVER_NAME']
		 */
		public static $ServerName;
		/**
		 *  @var string ServerPort contains $_SERVER['SERVER_PORT'], the port webserver listens on
		 */
		public static $ServerPort;

		/**
		*  @var array QuintaClasses - a map array of classes to filenames used by the autoloader.
		*/
		public static $QuintaClasses = array();
		
		/**
		 *  @var array QuintaIncludePaths - a map array of paths to be searched by the autoloader.
		 */
		public static $QuintaIncludePaths = array(
			__QUINTA_LOCAL_CONTROLLERS__,
			__QUINTA_LOCAL_MODULES__,
			__QUINTA_LOCAL_MODELS__,
			__QUINTA_LOCAL_METACONTROLS__,
			__QUINTA_CONTRIB_CONTROLLERS__,
			__QUINTA_CONTRIB_MODULES__,
			__QUINTA_CONTRIB_MODELS__,
			__QUINTA_CONTRIB_METACONTROLS__,
			__QUINTA_CORE_CONTROLLERS__,
			__QUINTA_CORE_MODULES__,
			__QUINTA_CORE_MODELS__,
			__QUINTA_CORE_METACONTROLS__,
			__QUINTA_CORE_UTILITIES__,
			);


		public static  $SupportEmailLink;

		/**
		 * Initialize Quinta data, setting autoloader data, servername and other misc ..
		 */
		public static function Init()
		{
			spl_autoload_register(array('Quinta', 'Autoload'), true, true);
			// set the Form state handler to use SESSION ..
			QForm::$FormStateHandler = 'QSessionFormStateHandler';
			Quinta::$ServerName = $_SERVER['SERVER_NAME'];
			Quinta::$ServerPort = $_SERVER['SERVER_PORT'];
			Quinta::$SupportEmailLink = ' <a href="mailto:' . STORE_EMAIL_ADDRESS . '">' . STORE_EMAIL_ADDRESS . '</a> ';

			$strSsl =  array_key_exists( 'HTTPS', $_SERVER) ? $_SERVER['HTTPS'] : '';
			if(!empty($strSsl))
				Quinta::$IsSsl = true;
							
			///@todo make me international ..
			setlocale(LC_MONETARY, 'en_US');
			
			//load an array of filenames for quick autoloading
			/// @todo change this to just look on demand ..see Autoload
			foreach( self::$QuintaIncludePaths as $strPath){
				if (is_dir($strPath)){
					if ($dh = opendir($strPath)){
						while (($strFileName = readdir($dh)) !== false){
							$pos = strrpos( $strFileName, '.class.php' );
							if(false === $pos || true == strpos( $strFileName , '~' ) )
								continue;
							$strClassName = substr( $strFileName, 0, $pos );
							if( ! array_key_exists(strtolower($strClassName), self::$QuintaClasses) )
								self::$QuintaClasses[strtolower($strClassName)] = $strPath . '/' . $strFileName;
						}
						closedir($dh);
					}
				}
			}
		}

		/**
		 * This is called by the PHP5 Autoloader.  This method overrides the
		 * one in QApplication - if Quinta fails to load the class, we attempt
		 * to load it from QApplication classes here
		 * @todo change this to just look on demand ..
		 * @return void
		 */
		public static function Autoload($strClassName){
			//some Qcodo generated QQ classes go in the same file as the ORM class ..
			$aryQcodoPrefixes = array(
							'QQNode',
							);
			//work around for QCodo classes in same file ..
			foreach($aryQcodoPrefixes as $strPrefix)
				if( false !== strpos( $strClassName, $strPrefix ) )
					$strClassName = substr( $strClassName, strlen( $strPrefix ) );
			
			// first check Quinta directories ..
			if(array_key_exists(strtolower($strClassName), Quinta::$QuintaClasses) )
			{
				require_once(Quinta::$QuintaClasses[strtolower($strClassName)]);
				return true;
			}
			// Otherwise use the Qcodo Autoloader
			if (parent::Autoload($strClassName))
				return true;
			return false;
		}

		/**
		 * This will redirect the user to a new web location.  This can be a relative or absolute web path, or it
		 * can be an entire URL. This overrides the QApplication::Redirect to work for offsite redirects and to
		 * support browsers like Opera and Safari that do not accept document.location assigns.
		 *
		 *  - any string starting with / is assumed to be local.
		 *  - any string with http:// or https:// is assumed to be offsite.
		 *
		 *@todo - support SEO friendly URLS .. and ssl (buggy, needs time ..)
		 *
		 *@param string strLocation - the URL to which the user is redirected
		 * @return void
		 */
		public static function Redirect($strLocation, $blnUseSsl=false)
		{
		   //ob_clean();
		   $strProtocol = '';
			
			if($blnUseSsl)
				$strProtocol =  'https://';
			else    
				$strProtocol =  'http://';
				
			if( false !== strpos( $strLocation, 'http://' ) || false !== strpos( $strLocation, 'https://' ) ){

				/* candidate:
				if (!headers_sent())
				{
					header('Location: '. $strLocation );
				} else {
					$strOutPut = '<script type="text/javascript">window.location.href="'. $strLocation . '";</script>';
					$strOutPut .= '<noscript><meta http-equiv="refresh" content="0;url=' . $strLocation . '" /></noscript>';
					_p($strOutPut);
					exit;
				}
*/
				ob_clean();
				header('Location: ' . $strLocation);
				if( Quinta::IsBrowser(QBrowserType::InternetExplorer ) )
					header('Connection: close');
			}elseif( Quinta::IsBrowser( QBrowserType::Opera) || Quinta::IsBrowser( QBrowserType::Safari) ){
				//these two do not support document.location redirects ..??
				ob_clean();
//                header('Location: ' . $strProtocol  . Quinta::$ServerName . $strLocation);
				header('Location: ' . $strLocation);
			}else
				parent::Redirect($strLocation);
			exit;
		}
		
		/**
		* Quinta access control
		* Note: this is only a sketch of an idea, in the event of a real access control you will be notified ..
		* ie. THIS DOES NOTHING YET. And it will definitely change.
		*@todo  implement access control
		*/
		public static function CheckAccess($aryAllowGroups){
			return false;
			if(sizeof($aryAllowGroups) == 0)
				return true;
			$blnLoggedIn = false;
			$objAccount = null;
			$objPerson = null;
			$aryUsergroups = array();

			$blnAllow = false;

			if( isset($_SESSION) && isset($_SESSION['AccountLogin']) )
			{
				$objAccount = unserialize($_SESSION['AccountLogin']);
				if( $objAccount instanceof Account )
				{
					$blnLoggedIn = true;
					$objPerson = $objAccount->Person;
				}
			}
			if($blnLoggedIn && $objPerson)
				$aryUsergroups = $objPerson->GetUsergroupArray();
			foreach( $aryUsergroups as $objGroup )
				if(in_array($aryAllowGroups, $objGroup->Name ))
					$blnAllow = true;
			return $blnAllow;
		}
		
	}//end class

	//now initialize Quinta data
	Quinta::Init();
}//end define
   
?>
