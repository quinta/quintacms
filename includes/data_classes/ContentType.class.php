<?php
	require(__DATAGEN_CLASSES__ . '/ContentTypeGen.class.php');

	/**
	 * The ContentType class defined here contains any
	 * customized code for the ContentType enumerated type. 
	 * 
	 * It represents the enumerated values found in the "content_type" table in the database,
	 * and extends from the code generated abstract ContentTypeGen
	 * class, which contains all the values extracted from the database.
	 * 
	 * Type classes which are generally used to attach a type to data object.
	 * However, they may be used as simple database indepedant enumerated type.
	 * 
	 * @package Quinta CMS
	 * @subpackage Models
	 */
	abstract class ContentType extends ContentTypeGen {
	}
?>