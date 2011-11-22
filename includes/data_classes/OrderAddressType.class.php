<?php
	require(__DATAGEN_CLASSES__ . '/OrderAddressTypeGen.class.php');

	/**
	 * The OrderAddressType class defined here contains any
	 * customized code for the OrderAddressType enumerated type. 
	 * 
	 * It represents the enumerated values found in the "order_address_type" table in the database,
	 * and extends from the code generated abstract OrderAddressTypeGen
	 * class, which contains all the values extracted from the database.
	 * 
	 * Type classes which are generally used to attach a type to data object.
	 * However, they may be used as simple database indepedant enumerated type.
	 * 
	 * @package Quinta CMS
	 * @subpackage Models
	 */
	abstract class OrderAddressType extends OrderAddressTypeGen {
	}
?>