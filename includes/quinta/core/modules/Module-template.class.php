<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("someMODULE.CLASS.PHP")){
define("someMODULE.CLASS.PHP",1);

/**
* Class SomeModule - provides modifiable display of data 
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.3
*
*@package Quinta
* @subpackage Modules
*/
class SomeModule extends QPanel{
		/**
		* @var ContentBlockController objContentBlock - the content block to which this module is assigned
		*/
		protected $objContentBlock;        
		/**
		* @var SomeClass objSomeClass - local reference or instance of some relevant object ..
		*/
		protected $objSomeClass;
		/**
		* Module constructor
		* NOTE: When loaded as a module registered in the database, the parameters will be
		* a reference to the Module ORM object.
		*@param ContentBlock - parent controller object.
		*@param mixed - extra parameters for the displayed module
		*/
		public function __construct( ContentBlockController $objContentBlock, $mixParameters=null){
			//Parent should always be a ContentBlockController
			$this->objContentBlock =& $objContentBlock;
			
			try {
				parent::__construct($this->objContentBlock);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/SomeModule.tpl.php';
		}
		/**
		 * This Function is called when any input is sent - on failure the
		 * fields are redrawn with optional error messages.
		 */
		public function Validate(){
			$blnToReturn = true;
			// validate input here
			return $blnToReturn;
		}

		/**
		* Event Handling
		*/
		public function btnDoSomething_Click($strFormId, $strControlId, $strParameter){
			Quinta::Redirect(__QUINTA_SUBDIRECTORY__ . '/index.php/Home');
		}
		
		public function __get($strName){
			switch ($strName){
				case 'SomeClass':
					return $this->objSomeClass ;
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
				case 'SomeClass':
					try {
						return ($this->objSomeClass = QType::Cast($mixValue, 'SomeClass' ));
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
		
  }//end class
}//end define
?>