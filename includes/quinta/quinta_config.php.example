<?php

//This file must always be included for any QuintaCMS files to run
define('QUINTACMS', 1);
define('QUINTA_VERSION', '0.3');

/* * **********         Quinta CMS configuration                ************ */

/**
 * Attempt to set the base directories - if this does not work for you
 * comment out the autoconfiguration and uncomment and set the
 * following for your setup:
 *  define('__WWWROOT__', '/var/www/quinta');
 *  define ('__QUINTA_SUBDIRECTORY__', '');
 */

/// _Relative_ location of the Quinta tree for discovery .. absolute is defined below
define('__QUINTA_INCLUDES__', '/../includes/quinta');

if (!defined('__WWWROOT__') || !defined('__QUINTA_SUBDIRECTORY__')) {
	define('__WWWROOT__', rtrim($_SERVER['DOCUMENT_ROOT'], '/'));
	//if Quinta is in the docroot, just leave __QUINTA_SUBDIRECTORY__ empty
	if (file_exists(__WWWROOT__ . __QUINTA_INCLUDES__ . '/Quinta.class.php'))
		define('__QUINTA_SUBDIRECTORY__', '');
	else {
		//attempt to find the sub directory from the script executing:
		$strScriptname = $_SERVER['SCRIPT_NAME'];
		$pos = strrpos($strScriptname, '/');
		//remove scriptname itself ..
		$strSubdir = substr($strScriptname, 0, $pos);
		$arySubdirs = explode('/', trim($strSubdir));
		//remove empty first cell ..
		array_shift($arySubdirs);
		$strDirStack = '';
		//check each subdirectory for Quinta class file ..
		foreach ($arySubdirs as $strPart) {
			$strDirStack .= '/' . $strPart;
			if (file_exists(__WWWROOT__ . $strDirStack . __QUINTA_INCLUDES__ . '/Quinta.class.php')) {
				define('__QUINTA_SUBDIRECTORY__', $strDirStack);
				break;
			}
		}
		//Quinta installation will catch this ..
		if (!defined('__QUINTA_SUBDIRECTORY__'))
			throw new Exception('Base directory autoconfiguration failed. Please set manually.');
	}
}

define('__QUINTA_WWWROOT__', __WWWROOT__ . __QUINTA_SUBDIRECTORY__);
$thisdir = dirname(__FILE__);
define('__QUINTA_ABSROOT__', $thisdir . '/../..' );
define('__QUINTA_LIBDIR__', __QUINTA_ABSROOT__ . '/includes/quinta');
define('__QUINTA_DBDIR__', __QUINTA_ABSROOT__ . '/database');

/**
 *                        ----------------------- Quinta CMS directories -------------------------------
 *
 *  The Quinta directory structure is designed to support separation between core, contributed
 * and local code to make isolation and independant updates clean. The core/ directory is
 * maintained in the main Quinta repository and may be checked out and updated by itself,
 * the contrib directory is maintained as the Quinta contributed code repository and local is
 * delegated to local custom code for a site. Each of these contains the same substructure:
 *  - assets: images, css and javascript files
 *  - classes: class files and other files
 *  - modules: module class files - this is where the module loader looks for registered modules
 *  - templates: template files used by classes in the other directories. These represent the final
 *           stage of the View and may be altered
 *  - orm: ORM object classes for the data model. Base classes for these may be placed
 *           under orm/static for non-generated or orm/generated for QCodo generated classes.
 *           Classes under orm/ will be autoloaded by Quinta.
 *       Note: you must configure QCodo code generation to use these directories - or you can
 *           also use the standard QCodo default directories under qcodoroot/includes
 *  The autoloader also makes it possible to have a local version of a class that overrides the
 * core version - local classes will be loaded first, then contrib, then core. The same applies
 * for Javascripts and in CSS loading cascades in the reverse direction.
 */
///Base of the Quinta tree - Note that this _includes_ the subdirectory for the absolute path
/// ASSETS of any kind are relative and must build off ONLY __QUINTA_SUBDIRECTORY__
/// - see below.
///Quinta core absolute directories
define('__QUINTA_CORE__', __QUINTA_LIBDIR__ . '/core');
define('__QUINTA_CORE_CONTROLLERS__', __QUINTA_CORE__ . '/controllers');
define('__QUINTA_CORE_METACONTROLS__', __QUINTA_CORE_CONTROLLERS__ . '/meta_controls');
define('__QUINTA_CORE_MODULES__', __QUINTA_CORE__ . '/modules');
define('__QUINTA_CORE_MODELS__', __QUINTA_CORE__ . '/models');
define('__QUINTA_CORE_VIEWS__', __QUINTA_CORE__ . '/views');
define('__QUINTA_CORE_UTILITIES__', __QUINTA_CORE__ . '/utilities');
///Contributed and non-core code directories
define('__QUINTA_CONTRIB__', __QUINTA_LIBDIR__ . '/contrib');
define('__QUINTA_CONTRIB_CONTROLLERS__', __QUINTA_CONTRIB__ . '/controllers');
define('__QUINTA_CONTRIB_METACONTROLS__', __QUINTA_CONTRIB_CONTROLLERS__ . '/meta_controls');
define('__QUINTA_CONTRIB_MODULES__', __QUINTA_CONTRIB__ . '/modules');
define('__QUINTA_CONTRIB_MODELS__', __QUINTA_CONTRIB__ . '/models');
define('__QUINTA_CONTRIB_VIEWS__', __QUINTA_CONTRIB__ . '/views');
///Local code directories
define('__QUINTA_LOCAL__', __QUINTA_LIBDIR__ . '/local');
define('__QUINTA_LOCAL_CLASSES__', __QUINTA_LOCAL__ . '/controllers');
define('__QUINTA_LOCAL_MODULES__', __QUINTA_LOCAL__ . '/modules');
define('__QUINTA_LOCAL_MODELS__', __QUINTA_LOCAL__ . '/models');
define('__QUINTA_LOCAL_METACONTROLS__', __QUINTA_LOCAL__ . '/meta_controls');
define('__QUINTA_LOCAL_VIEWS__', __QUINTA_LOCAL__ . '/views');

///core relative directories
define('__QUINTA_CORE_ASSETS__', __QUINTA_SUBDIRECTORY__ . '/assets');
define('__QUINTA_CORE_IMAGES__', __QUINTA_CORE_ASSETS__ . '/images');
define('__QUINTA_CORE_JS__', __QUINTA_CORE_ASSETS__ . '/js');
define('__QUINTA_CORE_CSS__', __QUINTA_CORE_ASSETS__ . '/css');
///contrib relative directories
define('__QUINTA_CONTRIB_ASSETS__', __QUINTA_SUBDIRECTORY__ . '/contrib/assets');
define('__QUINTA_CONTRIB_IMAGES__', __QUINTA_CONTRIB_ASSETS__ . '/images');
define('__QUINTA_CONTRIB_JS__', __QUINTA_CONTRIB_ASSETS__ . '/js');
define('__QUINTA_CONTRIB_CSS__', __QUINTA_CONTRIB_ASSETS__ . '/css');
///local relative directories
define('__QUINTA_LOCAL_ASSETS__', __QUINTA_SUBDIRECTORY__ . '/local/assets');
define('__QUINTA_LOCAL_IMAGES__', __QUINTA_LOCAL_ASSETS__ . '/images');
define('__QUINTA_LOCAL_JS__', __QUINTA_LOCAL_ASSETS__ . '/js');
define('__QUINTA_LOCAL_CSS__', __QUINTA_LOCAL_ASSETS__ . '/css');

/**
 * Base of the QCodo tree - this is required to run Quinta CMS - it is the one thing
 * you may need to configure. If the Quinta CMS and QCodo directories are together
 * (ie. Quinta root == QCodo's wwwroot), you can simply uncomment the second line,
 *  otherwise you must specify the location of QCodo's root (the directory called "wwwroot"
 * in the distribution) as shown in the first line.
 */
define('__QCODO_ROOT__', __QUINTA_ABSROOT__);

/**
 * Extend the PHP include path - this makes it unnecessary to modify php.ini, you can
 * also add extra paths to search here. This also ensures that we load our files first in
 * case of conflicts. The final include is for QCodo for if it is bundled with Quinta.
 */
set_include_path(__QUINTA_CORE_CONTROLLERS__ . PATH_SEPARATOR
	. __QUINTA_CORE_MODULES__ . PATH_SEPARATOR
	. __QUINTA_CORE_UTILITIES__ . PATH_SEPARATOR
	. __QUINTA_CONTRIB_CONTROLLERS__ . PATH_SEPARATOR
	. __QUINTA_CONTRIB_MODULES__ . PATH_SEPARATOR
	. __QUINTA_LOCAL_CLASSES__ . PATH_SEPARATOR
	. __QUINTA_LOCAL_MODULES__ . PATH_SEPARATOR
	//this is for QCodo if bundled ..
	. __QCODO_ROOT__ . PATH_SEPARATOR
	. get_include_path()
);
/**
 * Module configurations - these are local values for modules.
 * TODO: create a scheme for storing these in the database - this is a quick fix
 * due to current time constraints, ideally we should probably move these to the
 * database (encrypted). First we need an interface for entering them, then store in db ..
 *
 */
///USPS shipping ..change me for use!
define('USPS_USERID', 'get from USPS');
///Endicia Label service .. Note: the test values can also be set to the production values
/// and test mode will be active against the production server.
define('ENDICIA_TESTDOMAIN', 'www.envmgr.com');
define('ENDICIA_TESTREQUESTER_ID', 'get from Endicia');
define('ENDICIA_TESTREQUEST_ID', 'get from Endicia');
define('ENDICIA_TESTACCOUNT_ID', 'get from Endicia');
define('ENDICIA_TESTPASSWORD', 'get from Endicia');

define('ENDICIA_DOMAIN', 'labelserver.endicia.com');
define('ENDICIA_REQUESTER_ID', 'get from Endicia');
define('ENDICIA_REQUEST_ID', 'get from Endicia');
define('ENDICIA_ACCOUNT_ID', 'get from Endicia');
define('ENDICIA_PASSWORD', 'get from Endicia');

define('ENDICIA_RECREDIT_AMOUNT', 100);
define('ENDICIA_ACCOUNT_MIN', 100);
define('ENDICIA_AUTO_RECREDIT', false);
///default mail piece type/shape
define('ENDICIA_MAILPIECE_SHAPE', 'FlatRateEnvelope');
define('ENDICIA_CGI_URL', '/LabelService/EwsLabelService.asmx/');

///FedEx shipping ..
define('FEDEX_TESTKEY', 'developer key');
define('FEDEX_TESTPASSWORD', 'developer password');
define('FEDEX_TESTACCOUNT_NUMBER', 'developer number');
define('FEDEX_TESTMETER_NUMBER', 'developer number');

define('FEDEX_KEY', 'get from FedEx');
define('FEDEX_PASSWORD', 'get from FedEx');
define('FEDEX_ACCOUNT_NUMBER', 'get from FedEx');
define('FEDEX_METER_NUMBER', 'get from FedEx');

/**
 * Payment methods
 */
/*    /// PayPal EWP - unimplemented (requires FORM POST ... use IFRAME ??)
  define("PAYPAL_DEV_CENTRAL", "developer");
  define("PAYPAL_ENV", "sandbox");
  ///Note: these are testing values by default, from the PP SDK ..
  define("PAYPAL_EWP_USERNAME", "sdk-three_api1.sdk.com");
  define("PAYPAL_EWP_PASSWORD", "QFZCWN5HZM8VBG7Q");
  define("PAYPAL_SIGNATURE", "A.d9eRKfd1yVkRrtmMfCFLTqa6M9AyodL0SJkhYztxUi8W9pCXF6.4NI");
  define("PAYPAL_EMAIL_ADDRESS", "sdk-seller@sdk.com");
  define("PAYPAL_IDENTITY_TOKEN", "G5JgcRdmlYUwnHcYSEXI2rFuQ5yv-Ei19fMFWn30aDkZAoKt_7LTuufYXUa");
  define("PAYPAL_EWP_CERT_PATH", "cert/sdk-ewp-cert.pem");
  define("PAYPAL_EWP_PRIVATE_KEY_PATH", "cert/sdk-ewp-key.pem");
  define("PAYPAL_EWP_PRIVATE_KEY_PWD", "password");
  define("PAYPAL_CERT_ID", "KJAERUGBLVF6Y");
  define("PAYPAL_CERT_PATH", "cert/sandbox-cert.pem");
  define("PAYPAL_BUTTON_IMAGE_URL", "https://www.paypal.com/en_US/i/btn/x-click-but23.gif");
  define("PAYPAL_IPN_LOG", "paypal-ipn.log");
 */

/// PayPal Express / NVP
define('PAYPAL_REDIRECT_TESTURL', 'https://www.sandbox.paypal.com');
define('PAYPAL_REDIRECT_URL', 'https://www.paypal.com');
define('PAYPAL_NVP_TESTURL', 'https://api-3t.sandbox.paypal.com');
define('PAYPAL_NVP_URL', 'https://api-3t.paypal.com');
///Note: these are testing values by default, from the PayPal SDK, adjust for real account ..
define('PAYPAL_NVP_USERNAME', 'sdk-three_api1.sdk.com');
define('PAYPAL_NVP_PASSWORD', 'QFZCWN5HZM8VBG7Q');
define('PAYPAL_NVP_SIGNATURE', 'A.d9eRKfd1yVkRrtmMfCFLTqa6M9AyodL0SJkhYztxUi8W9pCXF6.4NI');

///Authorize.net AIM
define('AUTHORIZENET_AIM_USERNAME', 'get from authorize.net');
define('AUTHORIZENET_AIM_TRANSACTIONKEY', 'get from authorize.net');
define('AUTHORIZENET_AIM_URL', 'secure.authorize.net');
define('AUTHORIZENET_AIM_TESTUSERNAME', 'get from authorize.net');
define('AUTHORIZENET_AIM_TESTTRANSACTIONKEY', 'get from authorize.net');
define('AUTHORIZENET_AIM_TESTURL', 'test.authorize.net');

/**
 * Webstore settings - Note, this might be better as Account #1 in the database ..
 */
define('STORE_EMAIL_ADDRESS', '');
define('STORE_OWNER', '');
define('STORE_ADDRESS1', '');
define('STORE_ADDRESS2', '');
define('STORE_CITY', '');
define('STORE_COUNTY', '');
define('STORE_STATE', '');
define('STORE_POSTAL_CODE', '');
define('STORE_COUNTRY', '');
define('STORE_PHONE', '');
define('STORE_FAX', '');
define('STORE_NAME', 'My Store');

/// Default description sent to payment providers ..
define('DEFAULT_ORDER_DESCRIPTION', 'storename product');

///Defaults for providers - these will be selected by default at checkout.
/// Note: you can disable defaults by merely leaving these empty.
define('DEFAULT_PAYMENT_PROVIDER', 'Authorize.net');
define('DEFAULT_PAYMENT_SERVICE', 'Credit Card');
define('DEFAULT_SHIPPING_CARRIER', 'USPS');
define('DEFAULT_SHIPPING_SERVICE', 'PRIORITY');

/**
 * Which page to redirect to after login
 */
define('LOGIN_REDIRECT', '/index.php/AccountHome');

/**
 * Miscelleneous defaults
 */
define('MAX_PRODUCT_QUANTITY', 1000);
define('DEFAULT_SHIPPING_RATE', 2);
?>