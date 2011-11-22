<?php
	require(__DATAGEN_CLASSES__ . '/ProductStatusTypeGen.class.php');

	/**
	 * The ProductStatusType class defined here contains any
	 * customized code for the ProductStatusType enumerated type. 
	 * 
	 * It represents the enumerated values found in the "product_status_type" table in the database,
	 * and extends from the code generated abstract ProductStatusTypeGen
	 * class, which contains all the values extracted from the database.
	 * 
	 * Type classes which are generally used to attach a type to data object.
	 * However, they may be used as simple database indepedant enumerated type.
	 * 
	 * @package Quinta CMS
	 * @subpackage Models
	 */
	abstract class ProductStatusType extends ProductStatusTypeGen {
	}
?>