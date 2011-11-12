<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("ORDERTOTALSCONTROLLER.CLASS.PHP")){
define("ORDERTOTALSCONTROLLER.CLASS.PHP",1);


/**
* Class OrderTotalsController - display totals summary for an order.
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.1
*
*@package Quinta
* @subpackage Modules
*/
	class OrderTotalsController extends QPanel{
		protected $objOrder;

		protected $blnShowTitle;
		
		public $lblSubTotal;
		public $lblTax;
		public $lblShipping;
		public $lblHandling;
		public $lblGrandTotal;

		public function __construct($objParentObject,
													 $objOrder,
													 $blnShowTitle = true,      
													 $strControlId = null)
		{
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->blnShowTitle = $blnShowTitle;
					 
			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/OrderTotalsController.tpl.php';
			$this->lblSubTotal = new QLabel($this);
			$this->lblTax = new QLabel($this);
			$this->lblShipping = new QLabel($this);
			$this->lblHandling = new QLabel($this);
			$this->lblGrandTotal = new QLabel($this);
			
			$this->SetTotals($objOrder);              
		}
		
		public function SetTotals($objOrder){
			$this->objOrder =& $objOrder;
			$this->lblSubTotal->Text = money_format('%n', $objOrder->ProductTotalCharged);
			if($objOrder->Tax > 0)
				$this->lblTax->Text = money_format('%n', $objOrder->Tax);
			if($objOrder->ShippingCharged > 0)
				$this->lblShipping->Text = money_format('%n', $objOrder->ShippingCharged);
			if($objOrder->HandlingCharged > 0)
				$this->lblHandling->Text = money_format('%n', $objOrder->HandlingCharged);
			$fltTotal = $objOrder->ProductTotalCharged
						  + $objOrder->ShippingCharged
						  + $objOrder->HandlingCharged
						  + $objOrder->Tax;
			$this->lblGrandTotal->Text = money_format('%n', $fltTotal);
		}
		
		public function __get($strName){
			switch ($strName){
				case 'ShowTitle':
					return $this->blnShowTitle ;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}//end class
 }//end define   
?>