<?php
/**
  * Include to load Quinta which extends QApplication class, configurations and the QCodo framework
  * and local Quinta configurations which can be set in core/quinta_config.php.
  * Note: This assumes that this file and Quinta.class.php are in the same directory - adjust as needed.
  * Note also that (at least under linux ..) this works even if a symlink is what is actually accessed.
 */
	require(dirname(__FILE__) . '/../includes/quinta/Quinta.class.php');

// if you want to restrict access uncomment this:
//    Quinta::CheckRemoteAdmin();

   /// PageController takes over after IndexPage is finished ..
//	require( __QUINTA_CORE_CONTROLLERS__ . "/PageController.class.php");

	/**
	* IndexPage is the central controller class of Quinta - it handles all URL
	* requests and loads the PageController for the request. It is essentially the
	* "One Form to rule them all" - the entire CMS is derived from access to
	* this class. It should be named index.php with the corresponding template
	* index.tpl.php and placed in the directory configured as __QUINTA_ROOT__ in
	* Quinta.class.php (required above). The page view to load is determined by
	* the section of the request URL immediately following index.php - it
	* defaults to "Home" if the string is empty.
	*
	* See the class PageController for subsequent control logic - PageController loads the
	* ContentBlockControllers which then handle MenuControllers, ContentItemControllers and
	* Modules associated with each ContentBlock.
	*
	* NOTE: Possible architectural change: Move static globals and some init
	*       things from here and some other init and configuration things from
	*       QApplication to a Class Quinta (extends QApplication). The main idea
	*       is to get all initialization and configurations along with all
	*       subsequent global data in one place and also decouple Quinta from
	*       the QCodo tree so that we can drop into place without disturbing
	*       anything, allowing for updates on both and a simpler installation.
	*       update: partially done, see class Quinta
	*
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.1
	*
	*@package Quinta
	*@subpackage Classes
	*/
	class IndexPage extends QForm{
		/**
		* @var boolean blnAjaxOk - if true we use AJAX, if not we issue server calls
		*/
		public static $blnAjaxOk = false;
		/**
		* MainWindow provides a point of reference for Quinta Modules to access Control arrays in the
		* managing QForm. (currently unused .. may be removed)
		* @var MainWindow MainWindow - the global reference to the index QForm object
		*/
		public static $MainWindow;
		/**
		* NOTE: any account always has a single shopping cart, it will retain any items in it
		* until they either check out or remove them.
		* @var ShoppingCart objShoppingCart - self explanatory ..
		*/
		public static $objShoppingCart;
		/**
		* @var Account objAccount - the currently logged in account, null if not logged in
		*/
		public static $objAccount;
		/**
		* @var string strPageRequest - the name of the current page, Page object is loaded from the database
		*/
		public static $strPageRequest;
		/**
		*  This string contains parameters that may be parsed by modules on the Page, eg. after "Products"
		* we might have nothing (""), activating the product list module or "234" activating the product view for that
		* product Id. The original request was http://www.mysite.com/index.php/Products/234 - "Products" is stored
		* in PageRequest, 234 is stored here in PageParameters.
		* @var string strPageParameters - everything after the Page name, ie parameters for the Page
		*/
		public static $strPageParameters;
		/**
		* @var array aryStyleSheets - an array of CSS stylesheets to be inserted into the HEAD for the PageController
		*/
		protected $aryStyleSheets;
		/**
		* @var array aryJavaScripts - an array of JavaScript files to be inserted into the HEAD for the PageController
		*/
		protected $aryJavaScripts;
		/**
		* @var string strPreferedStyleSheet - CSS stylesheet to be flagged as prefered into the HEAD for the PageController
		*/
		protected $strPreferedStyleSheet;
		/**
		* @var array aryCssDirectories - relative paths to the possible directories containing stylesheets
		*/
		protected $aryCssDirectories = array(
								__QUINTA_CORE_CSS__,
								__QUINTA_CONTRIB_CSS__,
								__QUINTA_LOCAL_CSS__,
							   );
		/**
		* @var array aryJavaScriptDirectories - absolute paths to the possible directories containing javascript files
		*/
		protected $aryJavaScriptDirectories = array(
								__QUINTA_LOCAL_JS__,
								__QUINTA_CONTRIB_JS__,
								__QUINTA_CORE_JS__,
							   );
		/**
		* @var array aryModuleDirectories - absolute paths to the possible directories containing modules
		*/
		protected $aryModuleDirectories = array(
								__QUINTA_LOCAL_MODULES__,
								__QUINTA_CONTRIB_MODULES__,
								__QUINTA_CORE_MODULES__,
							   );

		/**
		* @var string defaultStyleSheet - default CSS stylesheet
		*/
		protected $defaultStyleSheet = 'quinta.css';
		/**
		* @var Page objPage - the Page object from the database for this request
		*/
		protected $objPage;
		/**
		* @var PageController objPageController - the PageController display object, renders ContentBlocks
		*/
		protected $objPageController;

		/**
		* This array is initilized by the module loader in ContentBlockController
		* @todo - figure out how to make this work. (Note: i suspect a clone in QForm may be breaking this ..)
		*@var array ActiveModules - an array of references to modules which have been loaded.
		*/
		public $ActiveModules;

		//experimental thinking - ignore at will ..
		protected function __construct(){
			parent::__construct();
			self::$MainWindow = $this;
		}
		/**
		* This function runs on all requests - full POST, URL links, or Ajax requests, ie. always.
		* Form_Create below runs only on page loads - ie. not for Ajax calls.
		* Thus, we set the important global data up here: request string, login state, shopping cart.
		* This ensures that these are set when an action returns the form state.
		*/
		protected function Form_Run(){
			//Ok, figure out what page we are
			$aryRequest = explode('/', Quinta::$PathInfo);
			//remove scriptname (index.php)
			array_shift($aryRequest);
			//store page name
			self::$strPageRequest = array_shift($aryRequest);
			//store extra parameters
			self::$strPageParameters = implode( '/', $aryRequest);

			//Then check / set login status
			if( ! isset($_SESSION['AccountLogin']) ){
				//timed out .. redirect home (avoid qcodo exception)
				if(self::$objAccount instanceof Account){
					self::$objAccount = null;
					Quinta::Redirect(__QUINTA_SUBDIRECTORY__ . '/index.php/Home');
				}
				self::$objAccount = null;
			}else{
				self::$objAccount = unserialize( $_SESSION['AccountLogin'] );
				if( ! self::$objAccount instanceof Account ){
					unset($_SESSION['AccountLogin']);
					self::$objAccount = null;
					Quinta::Redirect(__QUINTA_SUBDIRECTORY__ . '/index.php/Home');
				}
			}

			///@todo - only set up Shopping cart if ecommerce is enabled ..
			// set up the user's Shopping cart if the user is logged in
			if(self::$objAccount instanceof Account && ! self::$objShoppingCart instanceof ShoppingCart)
			{
				$objShoppingCart = ShoppingCart::LoadByAccountId(self::$objAccount->Id);
			// still no cart? ok, they have just signed up, make a new cart for them
				if(!$objShoppingCart){
					$objShoppingCart = new ShoppingCart();
					$objShoppingCart->AccountId = self::$objAccount->Id;
					$objShoppingCart->Save();
				}
				self::$objShoppingCart = $objShoppingCart;
			}
			// turn off AJAX for known problem browsers ..
			if( Quinta::IsBrowser( QBrowserType::InternetExplorer_6_0 )
				|| Quinta::IsBrowser( QBrowserType::Safari ))
//				|| Quinta::IsBrowser( QBrowserType::Opera ))
				self::$blnAjaxOk = false;
			else
				self::$blnAjaxOk = true;
		}
		protected function Form_Create(){
			//redirect to include index.php and start out with our url scheme

			if( empty(Quinta::$ScriptName ) )
				Quinta::Redirect(__QUINTA_SUBDIRECTORY__ . '/index.php/Home');
			elseif( empty(self::$strPageRequest) )
				self::$strPageRequest = "Home";

			// Now get the Page row from the database ..
			$this->objPage = Page::LoadByName(self::$strPageRequest);
			// @todo  implement 404 page not found .. for now, we just go home.
			if(!$this->objPage ){
				self::$strPageRequest = "Home";
				$this->objPage = Page::LoadByName(self::$strPageRequest);
			}

			if( $this->objPage){
			   // $this->loadModules();
				$this->objPageController = new PageController( $this, $this->objPage );
				$this->aryStyleSheets = StyleSheet::LoadArrayByPage( $this->objPage->Id );
				if(!empty($this->aryStyleSheets))
					$this->strPreferedStyleSheet = $this->aryStyleSheets[0];
				else
					$this->aryStyleSheets[0] = $this->defaultStyleSheet;
			}
			else
				$this->strPreferedStyleSheet = $this->defaultStyleSheet;
			/**
			* Find stylesheets - we look first in core assets, then contrib and
			* finally cascade to local. If none is found we fly naked just to be obvious ..
			*/
			if(is_array($this->aryStyleSheets) )
				foreach($this->aryStyleSheets as $filename){
					foreach( $this->aryCssDirectories as $basedir ){
						$strUrl = $basedir . '/' . $filename;
						if(file_exists(__WWWROOT__ . $strUrl))
							$this->aryStyleSheets[] = $strUrl;
					}
				}

			$this->aryJavaScripts = JavaScript::LoadArrayByPage( $this->objPage->Id );

			if(is_array($this->aryJavaScripts) )
				foreach($this->aryJavaScripts as $objJavaScript){
					foreach( $this->aryJavaScriptDirectories as $basedir ){
						$strUrl = $basedir . '/' . $objJavaScript->Filename;
						if(file_exists(__WWWROOT__ . $strUrl)){
							$this->aryJavaScripts[] = $strUrl;
							break;
						}
					}
				}
			$this->objDefaultWaitIcon = new QWaitIcon($this);
		}

		/**
		 * This Form_Validate event handler allows you to specify any custom Form Validation rules.
		 * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
		 * NOTE: Currently disabled to avoid conflicts with validation in modules
		 * @todo work out what to do about this, since the whole CMS is essentially one form we
		 * need a more coherant system for event and signal handling ..
		 */
		protected function Form_Validate(){
			// By default, we report that Custom Validations passed
			$blnToReturn = true;
/*
			$blnFocused = false;
			foreach ($this->GetErrorControls() as $objControl) {
				// Set Focus to the top-most invalid control
				if (!$blnFocused) {
					$objControl->Focus();
					$blnFocused = true;
				}

				// Blink on ALL invalid controls
				$objControl->Blink();
			}
*/
			return $blnToReturn;
		}

		protected function handleUrl(){
			$aryRequest = explode('/', self::$strPageRequest);
			self::$strPageRequest = array_shift($aryRequest);
			self::$strPageParameters = implode( '/', $aryRequest);
		}

		/**
		* This function returns a reference to an active module if it is in the list. Otherwise, it returns null
		* You must pass the name of the module to return.
		* WARNING: BROKEN - do not use.
		* @todo - figure out how to make this work. (Note: i suspect a clone in QForm may be breaking this ..)
		*
		*@param string strModuleName
		* @return object SomeModule or null
		*/
		public function GetActiveModule($strModuleName){
			if( is_array($this->ActiveModules))
				foreach( $this->ActiveModules as $objModuleView ){
					$strTestName = get_class( $objModuleView );
					if( $strTestName == $strModuleName )
						return $objModuleView;
				}
			return null;
		}
		public function AddActiveModule($objModule){
			$this->ActiveModules[] = $objModule;
		}

		/**
		* Loads any modules associated with content blocks on the requested page.
		* Note that the order of loading is local, then contrib, then core. This only runs
		* on the first form access (including redirects to ourself ) - might speed things
		* up a bit, otherwise Quinta::Autoload will take care of loading.
		* @todo  test to see which is faster - currently unused.
		*/
		protected function loadModules()
		{
			$aryContentBlocks = $this->objPage->GetContentBlockArray();
			foreach($aryContentBlocks as $objContentBlock){
				$aryModules = $objContentBlock->GetModuleArray();
				foreach($aryModules as $objModule){
					$strClassFileName = $objModule->ClassName . '.class.php';
					foreach( $this->aryModuleDirectories as $strDir ){
						$strIncludeUri = $strDir . '/' . $strClassFileName;
						if( file_exists($strIncludeUri) ){
							require_once($strIncludeUri);
							break;
						}
					}
				}
			}
		}

		//Note - these are unused currently, but left as a reminder for possible future
		// architectural change - essentially we could make almost anything a panel
		// (anywhere?) with ajax/server calls for display management...
		public function HidePanel(QPanel $objPanel){
			if( true === $objPanel->Visible)
				 $objPanel->Visible = false;
		}

		public function ShowPanel(QPanel $objPanel = null){
			if ($objPanel){
				$objPanel->SetParentControl($this);
				if( false === $objPanel->Visible)
					$objPanel->Visible = true;
			}
		}

		public function __get($strName){
			switch ($strName){
				case 'PageTitle':
					return $this->objPage->Title;
				case 'StyleSheetPath':
					return $this->strStyleSheetPath;
				case 'PreferedStyleSheet':
					return $this->strPreferedStyleSheet;
				case 'PageRequest':
					return self::$strPageRequest ;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		public function __set($strName, $mixValue){
			switch ($strName){
			 case 'PreferedStyleSheet':
				 try {
					 return ($this->strPreferedStyleSheet = QType::Cast($mixValue, QType::String));
				 } catch (QInvalidCastException $objExc) {
					 $objExc->IncrementOffset();
					 throw $objExc;
				 }

				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

	IndexPage::Run('IndexPage', "index.tpl.php");
?>