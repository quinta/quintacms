<?php
	require(__DATAGEN_CLASSES__ . '/ZoneTypeGen.class.php');

	/**
	 * The ZoneType class defined here contains any
	 * customized code for the ZoneType enumerated type. 
	 * 
	 * It represents the enumerated values found in the "zone_type" table in the database,
	 * and extends from the code generated abstract ZoneTypeGen
	 * class, which contains all the values extracted from the database.
	 * 
	 * Type classes which are generally used to attach a type to data object.
	 * However, they may be used as simple database indepedant enumerated type.
	 * 
	 * @package Quinta CMS
	 * @subpackage DataObjects
	 */
	abstract class ZoneType extends ZoneTypeGen {
	}
?>