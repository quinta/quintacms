<?php
if(!defined('QUINTACMS') ) die('No Quinta.');

if (!defined("PAYPALNVPACTION.CLASS.PHP")){
define("PAYPALNVPACTION.CLASS.PHP",1);

/**
* Class PayByMailAction - Pay by mail (check or money order)
*
* This class provides an option for the customer to pay with a check or money order
* by mail. The order status has already been set to Pending so no further action is taken until the
* status is changed manually. Really this class is just a place holder for the logic so that we
* can create the option to select it. 
*
*NOTE: This action does NOT approve the transaction - therefor no order status will change
* when it returns and no order_totals will be inserted.
*
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.3
*
*@package Quinta
* @subpackage Classes
*/

	class PayByMailAction extends PaymentActionBase{
		/**
		* PayByMailAction Constructor
		*
		* @param Order objOrder - the Order to process
		*/
		public function __construct(Order $objOrder){
			try {
				parent::__construct($objOrder);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
		
		/**
		* There is nothing to do with this payment method - all processing waits until we receive
		* a check and then must be completed via the adminstration interface. The Order has been
		* saved already as "Pending" - but we set it again here to trigger an email to the customer.
		*@return bool true on success
		*/        
		public function Process(){
			$this->blnApproved = true;
			$this->objOrder->SetStatus(OrderStatusType::Pending);
			IndexPage::$objShoppingCart->DeleteAllShoppingCartItems();
			return true;
		}        
		public function PreProcess(){ return true;}
		public function PostProcess(){ return true;}
		protected function handleResponse(){}
		protected function createPOSTRequest(){}
		protected function createGETRequest(){}
	}//end class
}//end define

?>
