<?php
require_once('../../includes/prepend.inc.php');
require_once('ImportOsCommerce.class.php');

/**
* This utility imports an OsCommerce database into Quinta ..
*
* Note: currently you must set the values for the OsCommerce database to import.
*@todo - allow setting the database configs ..
*
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.1
*
*@package Quinta
*/
	define(DB_SERVER,'your_osc_database_server');
	define(DB_DATABASE,'your_osc_database_name');
	define(DB_SERVER_USERNAME,'your_osc_username');
	define(DB_SERVER_PASSWORD,'your_oce_password');

	$objImporter = new ImportOsCommerce();
	
	$objImporter->Run();
?>