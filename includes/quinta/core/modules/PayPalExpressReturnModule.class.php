<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("PAYPALEXPRESSRETURNMODULE.CLASS.PHP")){
define("PAYPALEXPRESSRETURNMODULE.CLASS.PHP",1);

/**
* Class PayPalExpressReturnModule - provides the return URL actions to complete a
* PayPay Express Checkout transaction.
*
* This module contains the actions performed to complete a PayPal transaction when
* the customer is returned to this site after approving the payment at paypal.com. It
* must be registered in the database as a module and assigned to a ContentBlock on
* the page name given as the RETURNURL or CANCELURL to PayPal. This module will
* determine the type of action to take based on the page name, so they must be named
* either PayPalExpressReturn or PayPalExpressCancel.
*
*  For the PayPal payment action, all of the actions normally completed in the CheckOutModule
* by simpler methods are completed here - ie. Payment status is determined and if approved
* PaymentAction::completeOrder() is called, saving the status, totals and sending the email.
* In the case of a delayed payment (eg. echecks), a message is displayed and no further
* action is taken - the final steps are then to be completed by PayPalIPNAction which will
* respond to payment notification and complete the order when/if it is approved.
*
*@todo
*   - display messages; confirmation, delay or cancellation. to show
*   - add button or options to continue ..? (they could just use the menu ..)
*
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.3
*
*@package Quinta
* @subpackage Modules
*/
class PayPalExpressReturnModule extends CheckOutConfirmationModule {
		/**
		* This instance of the order is recreated from the database when the user is returned to our site.
		* Although this may change, currently the order id is passed as a GET value from paypal. this is
		* not entirely secure, we may need to tighten this up, not clear how yet ...
		*@todo
		*   - load order safely, see comment above ..
		*   - handle cancelations ..
		*
		*@var Order objOrder - recreated instance of the order to be completed (or removed)
		*/
		protected $objOrder;
		/**
		* This is a PayPalExpressCheckoutAction - we use the final calls only.
		*@var PaymentAction objPaymentAction - the payment action employed
		*/
		protected $objPaymentAction;
		/**
		* This label is used in the template to show whatever message is appropriate for the status
		* of the payment transaction. 
		*@var QLabel lblMessages - displays messages regarding order payment status
		*/
//        public $lblMessages;		
		/**
		* Module constructor
		* NOTE: This module ignores the required extra parameters ..
		*@param QPanel - objContentBlock parent controller object.
		*@param mixed - extra parameters, ignored
		*/
		public function __construct( QPanel $objContentBlock, $mixParameters=null){
			$objOrder = Order::LoadById($_REQUEST['orderid']);
			if(!$objOrder)
				throw new QCallerException('PayPal Return error for order ' . $_REQUEST['orderid']);
			
			try {
				parent::__construct($objContentBlock, $objContentBlock, $objOrder);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			//reset the template
//            $this->strTemplate = __QUINTA_CORE_VIEWS__ . '/PayPalExpressReturnModule.tpl.php';
			if( IndexPage::$strPageRequest == 'PayPalExpressReturn')
				$this->handleCompletion();
			elseif( IndexPage::$strPageRequest == 'PayPalExpressCancel')
				$this->handleCancellation();
		}
		/**
		* This overrides the display initialization in CheckOutConfirmationModule
		*/       
		protected function init(){
			$this->aryCheckOutItemControllers = array();
			//construct the list of items
			$aryOrderItems = $this->objOrder->GetOrderItemArray();
			foreach( $aryOrderItems as $objOrderItem){
				$objItemView = new CheckOutItemController( $this, $objOrderItem, false );
				$this->aryCheckOutItemControllers[] = $objItemView;
			}

			$this->objOrderTotalsController = new OrderTotalsController($this, $this->objOrder, false);
			$intShippingAddressId = $this->objOrder->GetShippingAddress()->Id;
			$intBillingAddressId = $this->objOrder->GetBillingAddress()->Id;
			$this->objShippingAddressController = new AddressController($this,
																							  $intShippingAddressId,
																							  'ShippingAddress: ');
																							  
			$this->objShippingAddressController->CssClass = 'ShippingAddressReview';
			$this->objShippingAddressController->AutoRenderChildren = true;
			
			$this->objBillingAddressController = new AddressController($this,
																							$intBillingAddressId,
																							'BillingAddress: ');
			$this->objBillingAddressController->CssClass = 'BillingAddressReview';
			$this->objBillingAddressController->AutoRenderChildren = true;
			
			if($this->objOrder->PaymentMethodId){
				$objPaymentMethod = PaymentMethod::Load($this->objOrder->PaymentMethodId);
				$this->pnlPaymentMethod = new QPanel($this);
				$this->pnlPaymentMethod->HtmlEntities = false;            
				$this->pnlPaymentMethod->CssClass = 'PaymentMethodReview';
				$this->pnlPaymentMethod->AutoRenderChildren = true;
				
				$strText =  '<div class="heading">' . Quinta::Translate('Payment Method') . ':</div>'
								.  sprintf( '<div class="heading"> %s </div> <br /> %s ',
																		$objPaymentMethod->Title,
																		$objPaymentMethod->Description
																	);
				$this->pnlPaymentMethod->Text = $strText;            
			}
			
			if($this->objOrder->ShippingMethodId){
				$objShippingMethod = ShippingMethod::Load($this->objOrder->ShippingMethodId);
				$this->pnlShippingMethod = new QPanel($this);
				$this->pnlShippingMethod->HtmlEntities = false;
				$this->pnlShippingMethod->CssClass = 'ShippingMethodReview';
				$this->pnlShippingMethod->AutoRenderChildren = true;
				
				$strText = '<div class="heading">' . Quinta::Translate('Shipping Method') . ':</div>'
								.  sprintf( '<div class="heading"> %s </div> <br /> %s ',
																		$objShippingMethod->Title,
																		$objShippingMethod->Description
																	);
				$this->pnlShippingMethod->Text = $strText;                
			}
		}

		/**
		* This function handles a successful return from PayPal.
		*@todo
		*   - load order safely, this is a quick cludge that needs work ..
		*   - make order completion messages configurable, error, approved and pending ..
		*/
		public function handleCompletion(){
			$this->objPaymentAction = new PayPalExpressCheckoutAction($this->objOrder);
			
			$this->objPaymentAction->getExpressCheckoutDetails();
			$this->objPaymentAction->doExpressCheckoutPayment();

			$blnIsPending = ( 'PENDING' == strtoupper($this->objPaymentAction->PaypalTransaction->PaymentStatus));
			
			$strApprovedText = '<div class="heading">' . Quinta::Translate("Thank You for your purchase") . '! </div>';
			$strApprovedText .= '<p>' . Quinta::Translate('Your Order Number is') . ':  ' . $this->objOrder->Id . ' </p>';
			if( $blnIsPending)
				$strApprovedText .= '<p>' . Quinta::Translate('Your PayPal payment is being approved - it will be processed as soon as it has been approved.') . ' </p>';
			
			$strApprovedText .= '<p>' . Quinta::Translate('We will email you shortly with a confirmation of your order') . '.</p><p> '
						  . Quinta::Translate('Please make sure that you have given a correct email address with which to contact you') . '. </p>';
			
			$strDeclinedText = '<p>' . Quinta::Translate("We're Sorry - Your payment has been declined") . '. </p>';
			
			$strErrorMessage = '';
			if($this->objPaymentAction->HasErrors)
				$strErrorMessage =  '<p>' . Quinta::Translate('Oops, there was an error during the transaction!') . ' </p><p>'
								. $this->objPaymentAction->Errors . '</p><p>' . $this->objPaymentAction->StatusText . '</p>';
			
			if($this->objPaymentAction->Approved || $blnIsPending)            
				$this->lblMessage->Text = $strApprovedText;
			else
				$this->lblMessage->Text = $strDeclinedText;
			
			if($this->objPaymentAction->HasErrors)
				$this->lblMessage->Text .= $strErrorMessage;
				
			//clear the shopping cart here for pending payments .. completeOrder() only does this if approved.
			if( !$this->objPaymentAction->HasErrors && ( $this->objPaymentAction->Approved || $blnIsPending) )
				IndexPage::$objShoppingCart->DeleteAllShoppingCartItems();
			
			//all ok? then finish up .. otherwise we'll wait for IPN to complete the order.
			if($this->objPaymentAction->Approved)
				$this->objPaymentAction->completeOrder();
		}
		
		/**
		* This fuction handles cancelation returns from PayPal, ie, if the user does not complete payment
		* process but hits "Cancel" at paypal ..
		*/
		public function handleCancellation(){
/*            $objOrderStatusHistory = new OrderStatusHistory();
			$objOrderStatusHistory->OrderId = $this->objOrder->Id;
			$objOrderStatusHistory->StatusId = OrderStatusType::Cancelled;
			$objOrderStatusHistory->Save();         */
			$this->objOrder->Delete();
			Quinta::Redirect(__QUINTA_SUBDIRECTORY__ . '/index.php/CheckOut');
		}
		
		public function Validate(){return true;}
		
		public function __get($strName){
			switch ($strName){
				case 'Order':
					return $this->objOrder ;
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