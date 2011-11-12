<?php
	require(__DATAGEN_CLASSES__ . '/MenuTypeGen.class.php');

	/**
	 * The MenuType class defined here contains any
	 * customized code for the MenuType enumerated type. 
	 * 
	 * It represents the enumerated values found in the "menu_type" table in the database,
	 * and extends from the code generated abstract MenuTypeGen
	 * class, which contains all the values extracted from the database.
	 * 
	 * Type classes which are generally used to attach a type to data object.
	 * However, they may be used as simple database indepedant enumerated type.
	 * 
	 * @package Quinta
	 * @subpackage ORM
	 */
	abstract class MenuType extends MenuTypeGen {
	}
?>