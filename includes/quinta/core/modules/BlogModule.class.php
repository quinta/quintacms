<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("BLOGMODULE.CLASS.PHP")){
define("BLOGMODULE.CLASS.PHP",1);

/**
* Class BlogModule - provides module that loads content items of type "BlogPost"
* 
* To use this module, assign it to a content block and create content items that have the
* content type set to BlogPost. This module will display the most recent 10 posts sorted
* by date descending.
*
* This class can also be used independently by instantiating the class. It accepts optional
* parameters for the type of content item to display and the number of items.
*
*@author Erik Winn <sidewalksoftware@gmail.com>
* 
*@version 0.3
*@package Quinta
* @subpackage Modules
*/
	class BlogModule extends QPanel{
		/**
		* @var ContentBlockController objContentBlock - the content block to which this module is assigned
		*/
		protected $objContentBlock;        
		/**
		* @var array aryContentItems ContentItems to be displayed
		*/
		protected $aryContentItems;
		/**
		* @var array aryContentItemControllers ContentItemControllers to be displayed
		*/
		public $aryContentItemControllers;
		/**
		* Module constructor
		* NOTE: When loaded as a module registered in the database, the parameters will be
		* a reference to the Module ORM object.
		*@param ContentBlock - parent controller object.
		*@param mixed - extra parameters for the displayed module
		*@param integer - optional content type to display
		*@param integer - optional number of posts to display
		*/
		public function __construct( ContentBlockController $objContentBlock,
													 $mixParameters = null,
													 $intContentType=ContentType::BlogPost,
													 $intLimit=10)
		{
			//Parent should always be a ContentBlockController
			$this->objContentBlock =& $objContentBlock;
			
			try {
				parent::__construct($this->objContentBlock);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/BlogModule.tpl.php';

			$objConditions = QQ::AndCondition(
										QQ::Equal(QQN::ContentItem()->TypeId, $intContentType),
										QQ::Equal(QQN::ContentItem()->StatusId, ContentStatusType::Published)
																	 );
			$aryClauses = QQ::Clause(
					QQ::OrderBy(QQN::ContentItem()->CreationDate, false),
					QQ::LimitInfo($intLimit));
			
			$this->aryContentItems =  ContentItem::QueryArray($objConditions, $aryClauses);
			
			foreach ( $this->aryContentItems as $objContentItem ){
				$objContentItemController = new ContentItemController( $this, $objContentItem );
				$objContentItemController->AddCssClass($objContentItem->Type);
				$this->aryContentItemControllers[] = $objContentItemController;
			}
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
/*                case 'SomeClass':
					return $this->objSomeClass ;*/
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
//                 case 'SomeClass':
//                     try {
//                         return ($this->objSomeClass = QType::Cast($mixValue, 'SomeClass' ));
//                     } catch (QInvalidCastException $objExc) {
//                         $objExc->IncrementOffset();
//                         throw $objExc;
//                     }

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