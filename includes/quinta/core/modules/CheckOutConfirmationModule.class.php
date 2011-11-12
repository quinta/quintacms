<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("CHECKOUTCONFIRMATIONMODULE.CLASS.PHP")){
define("CHECKOUTCONFIRMATIONMODULE.CLASS.PHP",1);

/**
* Class CheckOutConfirmationModule - provides display of order information for review during checkout
*@author Erik Winn <sidewalksoftware@gmail.com>
*
* 
*@version 0.1
*
*@package Quinta
* @subpackage Modules
*/

	class CheckOutConfirmationModule extends QPanel{
		/**
		*@var CheckOutModule objControlBlock - the main control block for the check out module
		*/
		protected $objControlBlock;
		/**
		*@var Order objOrder - local reference to the order
		*/
		protected $objOrder;
		/**
		* @var array CheckOutItems - a list of products as cart items.
		*/
		public $aryCheckOutItemControllers;
		/**
		* @var OrderTotalsController - module to display shipping, handling and total price for order
		*/
		public $objOrderTotalsController;
		/**
		* @var AddressController objShippingAddressController - display for the shipping address
		*/
		public $objShippingAddressController;
		/**
		* @var AddressController objBillingAddressController - display for the billing address
		*/
		public $objBillingAddressController;
		/**
		* @var QPanel pnlPaymentMethod - panel to display information about the selected method
		*/
		public $pnlPaymentMethod;
		/**
		* @var QPanel pnlShippinggMethod - panel to display information about the selected method
		*/
		public $pnlShippingMethod;
		/**
		* Note that this is initialized by CheckOutModule based on payment status
		* @var QLabel lblMessage - used to display the message of confirmed or declined payment.
		*/
		public $lblMessage;
		
		/**
		* Module constructor
		*@param QPanel pnlParentObject - the DOM parent
		*@param CheckOutModule  objControlBlock - parent controller module.
		*@param Order objOrder - the Order being reviewed.
		*/
		public function __construct( QPanel $pnlParentObject, $objControlBlock, Order $objOrder){
		
			try {
				parent::__construct($pnlParentObject, 'CheckOutConfirmationModule');
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->objControlBlock =& $objControlBlock;
			$this->objOrder =& $objOrder;
						
			$this->AutoRenderChildren = true;
			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/CheckOutConfirmationModule.tpl.php';
			
			$this->lblMessage = new QLabel($this);
			$this->lblMessage->HtmlEntities = false; 

			$this->init();
		}
		
		protected function init(){
			$this->aryCheckOutItemControllers = array();
			//construct the list of items
			$aryOrderItems = $this->objOrder->GetNewOrderItemsArray();
			foreach( $aryOrderItems as $objOrderItem)
			{
				$objItemView = new CheckOutItemController( $this, $objOrderItem, false );
				$this->aryCheckOutItemControllers[] = $objItemView;
			}

			$this->objOrderTotalsController = new OrderTotalsController($this, $this->objOrder, false);
			
			$this->objShippingAddressController = new AddressController($this,
																							  $this->objOrder->ShippingAddressId,
																							  'ShippingAddress: ');
			$this->objShippingAddressController->CssClass = 'ShippingAddressReview';
			$this->objShippingAddressController->AutoRenderChildren = true;
			
			$this->objBillingAddressController = new AddressController($this,
																							$this->objOrder->BillingAddressId,
																							'BillingAddress: ');
			$this->objBillingAddressController->CssClass = 'BillingAddressReview';
			$this->objBillingAddressController->AutoRenderChildren = true;
			
			if($this->objControlBlock->PaymentMethod instanceof PaymentMethod){
				$objPaymentMethod = $this->objControlBlock->PaymentMethod;
				
				$this->pnlPaymentMethod = new QPanel($this);
				$this->pnlPaymentMethod->HtmlEntities = false;            
				$this->pnlPaymentMethod->CssClass = 'PaymentMethodReview';
				$this->pnlPaymentMethod->AutoRenderChildren = true;
				
				$strText =  '<div class="heading">' . Quinta::Translate('Payment Method') . ':</div>';
				$strText .= sprintf( '<div class="heading"> %s </div> <br /> %s ',
																		$objPaymentMethod->Title,
																		$objPaymentMethod->Description );
				$this->pnlPaymentMethod->Text = $strText;            
			}
			
			if($this->objControlBlock->ShippingMethod instanceof ShippingMethod){
				$objShippingMethod = $this->objControlBlock->ShippingMethod;
				
				$this->pnlShippingMethod = new QPanel($this);
				$this->pnlShippingMethod->HtmlEntities = false;
				$this->pnlShippingMethod->CssClass = 'ShippingMethodReview';
				$this->pnlShippingMethod->AutoRenderChildren = true;
				
				$strText = '<div class="heading">' . Quinta::Translate('Shipping Method') . ': </div>';
				$strText .= sprintf( '<div class="heading"> %s </div> <br /> %s ',
																		$objShippingMethod->Title,
																		$objShippingMethod->Description );
				$this->pnlShippingMethod->Text = $strText;                
			}
		}
		
		public function __get($strName){
			switch ($strName){
				case 'Order':
					return $this->objOrder ;
				case 'Message':
					return $this->lblMessage->Text ;
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
				case 'Order':
					try {
						return ($this->objOrder = QType::Cast($mixValue, 'Order' ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'Message':
					try {
						return ($this->lblMessage->Text = QType::Cast($mixValue, QType::String ));
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