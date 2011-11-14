<?php
	// This is the "recommended" version of configuration.inc.php, without any comments, and restructured in a way
	// that should make sense for most pro-users of Qcodo.

	// While it is recommended (for ease of code readability) to use this version of configuration.inc.php-dist,
	// the configuration.inc.php-full version could potentially be more useful for newer users of Qcodo as it has
	// comments inline within the file.

	// To use, simply rename or copy this file to includes/configuration.inc.php, and begin making modifications
	// to the configuration constants as it makes sense for your PHP and docroot installation.

	define('SERVER_INSTANCE', 'dev');

	switch (SERVER_INSTANCE) {
		case 'test':
		case 'stage':
		case 'prod':
		case 'dev':
// 			define ('__DOCROOT__', '/var/www');
// 			define ('__SUBDIRECTORY__', '/quinta');
			define ('__VIRTUAL_DIRECTORY__', '');

			define('__DOCROOT__', rtrim($_SERVER['DOCUMENT_ROOT'], '/'));
			//if Qcodo's "www/" is the docroot, just leave _SUBDIRECTORY__ empty
			if (file_exists(__DOCROOT__ . '/../includes/configuration.inc.php')){
				define('__SUBDIRECTORY__', '');
			} else {
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
					if (file_exists( __DOCROOT__ . $strDirStack . '/../includes/configuration.inc.php')) {
						define('__SUBDIRECTORY__', $strDirStack);
						break;
					}
				}
			}
			define('DB_CONNECTION_1', serialize(array(
				'adapter' => 'MySqli5',
				'server' => 'localhost',
				'port' => null,
				'database' => 'quintacmstest',
				'username' => 'quintadbutest',
				'password' => 'quintadbptest',
				'profiling' => false)));
			break;
	}

	define('ALLOW_REMOTE_ADMIN', false);
	define ('__URL_REWRITE__', 'none');

	define ('__DEVTOOLS_CLI__', __DOCROOT__ . __SUBDIRECTORY__ . '/../cli');
	define ('__INCLUDES__', __DOCROOT__ .  __SUBDIRECTORY__ . '/../includes');
	define ('__QCODO__', __INCLUDES__ . '/qcodo');
	define ('__QCODO_CORE__', __INCLUDES__ . '/qcodo/_core');
	define ('__DATA_CLASSES__', __INCLUDES__ . '/data_classes');
	define ('__DATAGEN_CLASSES__', __INCLUDES__ . '/data_classes/generated');
	define ('__DATA_META_CONTROLS__', __INCLUDES__ . '/data_meta_controls');
	define ('__DATAGEN_META_CONTROLS__', __INCLUDES__ . '/data_meta_controls/generated');

	define('__ERROR_LOG__', __DOCROOT__ . '/../error_log');
	define('__QCODO_LOG__', __DOCROOT__ . '/../log');
	define('__TEST_CASES__', __DOCROOT__ . '/../tests');

	define ('__FORM_DRAFTS__', __SUBDIRECTORY__ . '/drafts');
	define ('__PANEL_DRAFTS__', __SUBDIRECTORY__ . '/drafts/dashboard');

	// Examples and Devtools are deprecated as of 0.4.0, but these constants are still here to
	// support any QPM packages that may still want to use them
	define ('__DEVTOOLS__', null);
	define ('__EXAMPLES__', null);

	define ('__JS_ASSETS__', __SUBDIRECTORY__ . '/assets/js');
	define ('__CSS_ASSETS__', __SUBDIRECTORY__ . '/assets/css');
	define ('__IMAGE_ASSETS__', __SUBDIRECTORY__ . '/assets/images');
	define ('__PHP_ASSETS__', __SUBDIRECTORY__ . '/assets/php');

	if (!ini_get('date.timezone'))
		date_default_timezone_set('America/Los_Angeles');

	define('ERROR_LOG_FLAG', false);
//	define('ERROR_FRIENDLY_PAGE_PATH', '/absolute/path/to/friendly_error_page.html');
//	define('ERROR_FRIENDLY_AJAX_MESSAGE', 'Oops!  An error has occurred.\r\n\r\nThe error was logged, and we will take a look into this right away.');

	define('QCODO_LOG_LEVEL', 6);
?>