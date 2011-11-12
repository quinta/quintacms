<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("CHECKOUTITEMLISTMODULE.CLASS.PHP")){
define("CHECKOUTITEMLISTMODULE.CLASS.PHP",1);
	 

/** Class CheckOutItemListModule - provides display/modification of the list of items in an order
	*
	*  CheckOutItemListModule is a center page module displayed on the Checkout page.
	* It shows a detailed list of the items in an Order with quantity modification fields.
	* 
	* NOTE: You must call initItemList() to initialize the list and the totals - this allows for AJAX refreshing
	* between panels when quantities are modified.
	*
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.1
	*
	* @package Quinta
	* @subpackage Views
	*
	*/
	class CheckOutItemListModule extends QPanel
	{
		protected $objControlBlock;
		protected $objCheckOutEditModule;
		
		protected $fltItemsTotalPrice;
		/**
		* @var array CheckOutItems - a list of products as cart items.
		*/
		public $aryCheckOutItemControllers;

		protected $blnModifiable;
				
		/**
		*@param QPanel objParentObject a reference to the CheckOutEditModule, DOM parent
		*@param QPanel objControlBlock a reference to the main CheckOutModule
		*@param bool blnModifiable - if true the quantity is modifiable
		*/
		public function __construct($objParentObject, $objControlBlock, $blnModifiable=true){

			try {
				parent::__construct($objParentObject);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			// a reference to the main CheckOutModule
			$this->objControlBlock =& $objControlBlock;
			// a reference to the immediate parent
			$this->objCheckOutEditModule =& $objParentObject;
			//lets avoid foreach complaint in template if there are no items ..
			$this->aryCheckOutItemControllers = array();
			$this->blnModifiable = $blnModifiable;         
									
			$this->Template = __QUINTA_CORE_VIEWS__ . '/CheckOutItemListModule.tpl.php';
			$this->fltItemsTotalPrice = 0;
			
		}
		
		/**
		* This function initializes the item list display and and the total price. It may be called to
		* refresh the list and totals at any time after instantiation.
		*@param array aryOrderItems - an array of OrderItems from which to create a list view
		*/
		public function initItemList($aryOrderItems){
			$this->fltItemsTotalPrice = 0;
			$this->aryCheckOutItemControllers = array();
			//construct the list of items
			foreach($aryOrderItems as $objOrderItem){
				$objItemView = new CheckOutItemController( $this, $objOrderItem, $this->blnModifiable );
				$this->fltItemsTotalPrice += $objItemView->ItemTotal;
				$this->aryCheckOutItemControllers[] = $objItemView;
			}
		}      
		public function RefreshTotalPrice(){
			$this->fltItemsTotalPrice = 0;
			foreach($this->aryCheckOutItemControllers as $objItemView)
				$this->fltItemsTotalPrice += $objItemView->ItemTotal;
			if($this->objCheckOutEditModule instanceof CheckOutEditModule)
				$this->objCheckOutEditModule->TotalItemsCharge = $this->fltItemsTotalPrice;
		}
			  
		public function __get($strName){
			switch ($strName){
				case 'ItemsTotalPrice':
					return $this->fltItemsTotalPrice ;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
		
	}// end class
 }//end define shield   
?>