<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("SHOPPINGCARTVIEWMODULE.CLASS.PHP")){
define("SHOPPINGCARTVIEWMODULE.CLASS.PHP",1);

/** Class ShoppingCartViewModule - provides display/modification of the list of items in an order
*
*  ShoppingCartViewModule is a center page module displayed on the ShoppingCart page.
* It shows a detailed list of the items in an Order with quantity modification fields and a
* button to go directly to the CheckOut page.
*
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.3
* @package Quinta
* @subpackage Modules
*
*/
	class ShoppingCartViewModule extends QPanel{
		/**
		* @var ContentBlock objParentObject - the DOM parent,
		*/
		protected $objParentObject;
		/**
		* @var Order objOrder - order created from cart items for account,
		*/
		protected $objOrder;
		/**
		* @var ShoppingCart objShoppingCart - local reference to the current user's cart
		*/
		protected $objShoppingCart;
		/**
		* @var float fltItemsTotalPrice - the total of all the line items in the cart, aka subtotal
		*/
		protected $fltItemsTotalPrice;
		/**
		* @var boolean blnLoggedIn - indicate if the user is logged in.
		*/
		protected $blnLoggedIn = false;
		/**
		* @var array ShoppingCartItems - a list of products as cart item Views.
		*/
		public $aryShoppingCartItemControllers = array();
		/**
		* @var OrderTotalsController objOrderTotalsController - panel that displays the order summary ..
		*/
		public $objOrderTotalsController;
		
		///Controls ..
		/**
		* @var QLabel lblMessage - a text label to relay messages to the user
		*/
		public $lblMessage;
		/**
		* @var QLabel lblProgressBar - a progress bar depicting the first (Shopping cart) stage of checkout
		 */
		public $lblProgressBar;
		
		public $btnSave;
		public $btnCheckOut;
				
		public function __construct( ContentBlockController $objParentObject, $intShoppingCartId=null){
			$this->objParentObject =& $objParentObject;
			$this->objShoppingCart =& IndexPage::$objShoppingCart;
			try {
				parent::__construct($this->objParentObject);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}                                   
			$this->Template = __QUINTA_CORE_VIEWS__ . '/ShoppingCartViewModule.tpl.php';
						
			// if not logged in show nothing ..
			if( ! IndexPage::$objAccount instanceof Account )
				return;
			else
				$this->blnLoggedIn = true;
				
			$this->aryShoppingCartItemControllers = array();
			
			$this->fltItemsTotalPrice = 0;
			if($this->objShoppingCart instanceof ShoppingCart ){
				foreach ( $this->objShoppingCart->GetShoppingCartItemArray() as $objShoppingCartItem ){
					$objItemView = new ShoppingCartItemController( $this, $objShoppingCartItem );
					$this->aryShoppingCartItemControllers[] = $objItemView;
				}                
				$this->objOrder = $this->objShoppingCart->CreateNewOrder(true);
				if($this->objOrder instanceof Order)
					$this->objOrderTotalsController = new OrderTotalsController($this, $this->objOrder);
			}

			$this->lblMessage = new QLabel($this);
			$this->lblProgressBar = new QLabel($this);
			$this->lblProgressBar->HtmlEntities = false;
			$this->lblProgressBar->CssClass = 'ProgressBarShoppingCart';

			$this->lblProgressBar->Text = sprintf('<span class="heading">%s</span><span class="label">%s</span>
																	   <span class="label">%s</span><span class="label">%s</span>
																	   <span class="label">%s</span><span class="label">%s</span>',
																		STORE_NAME . ' ' . Quinta::Translate('Checkout Process') . ':',
																		Quinta::Translate('cart'),
																		Quinta::Translate('shipping'),
																		Quinta::Translate('payment'),
																		Quinta::Translate('review order'),
																		Quinta::Translate('receipt'));

			$this->btnSave = new QButton($this);
			$this->btnSave->Text = Quinta::Translate('Update');
			if(IndexPage::$blnAjaxOk)
				$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			else
				$this->btnSave->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = QCausesValidation::SiblingsAndChildren;
			
			$this->btnCheckOut = new QLabel($this);
			$this->btnCheckOut->AddCssClass('button');
			$this->btnCheckOut->HtmlEntities = false;
			$this->btnCheckOut->Text = '<a href="https://' . Quinta::$ServerName . __QUINTA_SUBDIRECTORY__ . '/index.php/CheckOut">'
															 .  Quinta::Translate('CheckOut') . '</a>';

/* yes, it would be nice to make sure that we saved, but IE cannot redirect correctly to https 
so we must use a hard link until somebody figures out a way around this.
			$this->btnCheckOut->Text = Quinta::Translate('CheckOut');
			if(IndexPage::$blnAjaxOk)
				$this->btnCheckOut->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCheckOut_Click'));
			else
				$this->btnCheckOut->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnCheckOut_Click'));
*/
		}
		
		public function RefreshTotals(){
			if( ! $this->objOrder instanceof Order )
				return;
			$this->fltItemsTotalPrice = 0;
			foreach($this->aryShoppingCartItemControllers as $objItemView)
				$this->fltItemsTotalPrice += $objItemView->ItemTotal;
			$this->objOrder->ProductTotalCharged = $this->fltItemsTotalPrice;
			$this->objOrderTotalsController->SetTotals($this->objOrder);
		}
		
		public function btnSave_Click($strFormId, $strControlId, $strParameter){
			foreach($this->aryShoppingCartItemControllers as &$objItemView){
				$objItemView->ShoppingCartItem->Quantity = $objItemView->Quantity;
				if($objItemView->Quantity <= 0)
					$objItemView->ShoppingCartItem->Delete();
				else
					$objItemView->ShoppingCartItem->Save();
			}
			$this->objShoppingCart->Reload();
			$this->RefreshTotals();
			$this->lblMessage->Text = Quinta::Translate('Shopping Cart Saved') . '!';
		}
		
	   //Note: unused due to IE ssl redirect incompetence ..
		public function btnCheckOut_Click($strFormId, $strControlId, $strParameter){
			foreach($this->aryShoppingCartItemControllers as &$objItemView){
				$objItemView->ShoppingCartItem->Quantity = $objItemView->Quantity;
				$objItemView->ShoppingCartItem->Save();
			}
			Quinta::Redirect('https://' . Quinta::$ServerName . __QUINTA_SUBDIRECTORY__ . '/index.php/CheckOut');
		}
				
		public function __get($strName){
			switch ($strName){
				case 'ShoppingCart':
					return $this->objShoppingCart ;
				case 'ItemsTotalPrice':
					return $this->fltItemsTotalPrice ;
				case 'Tax':
					return $this->objOrder->Tax;
				case 'LoggedIn':
					return $this->blnLoggedIn;
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
				case 'ShoppingCart':
					try {
						return ($this->objShoppingCart = QType::Cast($mixValue, 'ShoppingCart'));
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
	}// end class
 }//end define shield   
?>