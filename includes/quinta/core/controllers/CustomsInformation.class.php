<?php
if(!defined('QUINTACMS') ) die('No Quinta.');

if (!defined("CUSTOMSINFORMATION.CLASS.PHP")){
define("CUSTOMSINFORMATION.CLASS.PHP",1);

/**
* Class CustomsInformation - container for information in a customs declaration for a line item
*
*
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@package Quinta
* @subpackage CMS
*/

	class CustomsInformation{
		/**
		*@var string strDescription - describes the Item
		*/
		protected $strDescription;
		/**
		*@var integer intQuantity ..
		*/
		protected $intQuantity;
		/**
		*@var float fltWeight - item weight in ounces (aggregate).
		*/
		protected $fltWeight;
		/**
		*@var float fltValue - normally the final sale price of the item (aggregate)
		*/
		protected $fltValue;
		/**
		* Defaults to the store address ..
		*@var string strOriginCountry - the country of origin for the shipment
		*/
		protected $strOriginCountry = STORE_COUNTRY;

		public function __get($strName){
			switch ($strName){
				case 'Description':
					return $this->strDescription ;
				case 'OriginCountry':
					return $this->strOriginCountry ;
				case 'Quantity':
					return $this->intQuantity ;
				case 'Weight':
					return $this->fltWeight ;
				case 'Value':
					return $this->fltValue ;
				default:
					throw new QCallerException('CustomsInformation::__get() Unknown property: ' . $strName);
			}
		}

		public function __set($strName, $mixValue){
			switch ($strName){
				case 'Description':
					try {
						return ($this->strDescription = QType::Cast($mixValue, QType::String ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'OriginCountry':
					try {
						return ($this->strOriginCountry = QType::Cast($mixValue, QType::String ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'Quantity':
					try {
						return ($this->intQuantity = QType::Cast($mixValue, QType::Integer ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'Value':
					try {
						return ($this->fltValue = QType::Cast($mixValue, QType::Float ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'Weight':
					try {
						return ($this->fltWeight = QType::Cast($mixValue, QType::Float ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
						throw new QCallerException('CustomsInformation::__get() Unknown property: ' . $strName);
/*                    try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}*/
			}
		}

	}//end class
}//end define

?>