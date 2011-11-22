<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("CHECKOUTEDITMODULE.CLASS.PHP")){
define("CHECKOUTEDITMODULE.CLASS.PHP",1);

/**
* Class CheckOutEditModule - a module providing the modiflable display of order information
*
* This class displays the list of items in an Order with modiflable quantity fields, and two
* address fields (shipping and billing) that may also be modified. It also displays the totals
* for the Order including an estimated shipping charge based on the default shipping address
* and the cheapest method available for that address.
* 
* This class is displayed by the CheckOutModule for the first part of the check out process. It
* presents the user with a view of the items in the Order, Addresses, and a selection of shipping
* and payment methods. Each of these may be modified here.
* 
*
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.3
*
*@package Quinta
* @subpackage Modules
*/
	class CheckOutEditModule extends QPanel{
		/**
		* ContentBlock contains the data and main functions for the check out module.
		* @var CheckOutModule - both the DOM parent object and the control block passed to submodules
		*/
		protected $objControlBlock;
		protected $objShippingAddress;
		protected $objBillingAddress;
		/**
		* This module shows a panel containing the items on the order with modifiable quantity fields
		* and a remove button.
		* @var CheckOutItemListModule - lists order items
		*/
		public $objCheckOutItemListModule;
		/**
		* @var CheckOutTotalsController - module to display shipping, handling and total price for order
		*/
		public $objCheckOutTotalsController;
		/**
		* This module shows a panel containing the address for the order
		* @var AddressController
		*/
		public $objShippingAddressController;
		public $objBillingAddressController;
		/**
		* This module shows a panel for editting the addresses for the order. It is called with a parameter
		* to determine which of the addresses to edit (Billing | Shipping)
		* @var AddressController
		*/
		public $objAddressEditPanel;
		
		/**
		* @var QButton control buttons to edit the address fields
		*/
		public $btnChangeShipping;
		public $btnChangeBilling;
		
		/**
		* This is here only because technically PayPal requires that you have two points of entry into their
		* scheme .. one is supposed to be on the "shopping cart page" - that is a pain to set up and putting
		* it here makes more sense as we want to offer shipping options. Besides, I don't like the idea
		* of sending the customer to approve a payment amount and _then_ adding shipping - too sleazy
		* for my troublesome sense of ethics ...
		* @var QImageButton button to show on the first panel to support PayPal Express Checkout
		*/
		public $btnPayPalExpressButton;
		
		/**
		* Module constructor
		* NOTE: This module ignores the required extra parameters ..
		*@param ContentBlock - parent controller object.
		*@param mixed - extra parameters, ignored
		*/
		public function __construct( CheckOutModule $objControlBlock, $mixParameters=null){

			try {
				parent::__construct($objControlBlock);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->objControlBlock =& $objControlBlock;
			$this->objShippingAddress =& $this->objControlBlock->objShippingAddress;
			$this->objBillingAddress =& $this->objControlBlock->objBillingAddress;
			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/CheckOutEditModule.tpl.php';
			
			$this->objCheckOutItemListModule = new CheckOutItemListModule($this, $objControlBlock);
			$this->objCheckOutItemListModule->initItemList($objControlBlock->aryOrderItems);
			
			$this->objShippingAddressController = new AddressController($this,
																							  $this->objShippingAddress->Id,
																							  'ShippingAddress: ',
																							  'ShippingAddressController'
																							  );
			$this->objBillingAddressController = new AddressController($this,
																							$this->objBillingAddress->Id,
																							'BillingAddress: ',
																							'BillingAddressController'
																							);

			$this->objShippingAddressController->AutoRenderChildren = true;
			$this->objBillingAddressController->AutoRenderChildren = true;
			
			$this->objCheckOutTotalsController = new CheckOutTotalsController($this);
			// grab shipping charges from shipping module if possible..
			if( $this->objControlBlock->ShippingModule instanceof ShippingModule
				&& $this->objControlBlock->ShippingMethod instanceof ShippingMethod)
				$this->objCheckOutTotalsController->ShippingCharge = $this->objShippingModule->SelectedMethod->Rate;
			else
				$this->objCheckOutTotalsController->ShippingCharge = 0;                
			/// @todo make handling charge configurable.
			$this->objCheckOutTotalsController->HandlingCharge = 10.0;            
			$this->objCheckOutTotalsController->TotalItemsCharge = $this->objCheckOutItemListModule->ItemsTotalPrice;
			
			$this->objCheckOutTotalsController->RefreshTotal();
			
			$this->btnChangeShipping = new QButton($this->objShippingAddressController);
			$this->btnChangeShipping->Text = Quinta::Translate('Change');
			if(IndexPage::$blnAjaxOk)
				$this->btnChangeShipping->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnChangeAddress_Click'));
			else
				$this->btnChangeShipping->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnChangeAddress_Click'));
			$this->btnChangeShipping->ActionParameter = 'Shipping';
			$this->btnChangeShipping->CausesValidation = $this;
			
			$this->btnChangeBilling = new QButton($this->objBillingAddressController);
			$this->btnChangeBilling->Text = Quinta::Translate('Change');
			if(IndexPage::$blnAjaxOk)
				$this->btnChangeBilling->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnChangeAddress_Click'));
			else
				$this->btnChangeBilling->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnChangeAddress_Click'));
			$this->btnChangeBilling->ActionParameter = 'Billing';
			$this->btnChangeBilling->CausesValidation = $this;
		}
		
		public function btnChangeAddress_Click($strFormId, $strControlId, $strParameters){
			$aryParameters = explode(',',$strParameters);
			switch($aryParameters[0]){
				case 'Billing':
					$this->ShowAddressEditPanel($this->objBillingAddress->Id);
					break;
				case 'Shipping':
					$this->ShowAddressEditPanel($this->objShippingAddress->Id);
					break;
				case 'New':
					$this->ShowAddressEditPanel();
					break;
				default:
					throw new QCallerException('Unknown Address change - ' . $aryParameters[0] );
			}
		}
		/**
		* Shows the panel to the selected shipping address, hiding all the others.
		*/
		public function ShowAddressEditPanel($intAddressId=null){
			$this->objCheckOutItemListModule->Visible = false;
			$this->objShippingAddressController->Visible = false;
			$this->objBillingAddressController->Visible = false;
			$this->objControlBlock->btnContinue->Visible = false;
			$this->objControlBlock->ShippingModule->Visible = false;
			$this->objAddressEditPanel = new AccountAddressEditPanel($this, $this, 'CloseAddressEditPanel', $intAddressId );
			//set a template that doesn't show the delete button ..
			$this->objAddressEditPanel->Template = __QUINTA_CORE_VIEWS__ .  '/CheckOutAddressEditPanel.tpl.php';
			$this->objAddressEditPanel->Visible = true;            
		}
		/**
		* Closes the address editting panel, updates the addresses and shows the CheckOutEditModule again.
		*@todo  implement reloading the address data, for now its just a brute force kludge to update the page.
		*/
		public function CloseAddressEditPanel($blnUpdatesMade){
			Quinta::Redirect(__QUINTA_SUBDIRECTORY__ . '/index.php/CheckOut');
/*
			$this->objAddressEditPanel->Visible = false;
			// update the addresses            
			$this->objShippingAddressController = new AddressController($this, $this->objShippingAddress->Id, 'ShippingAddress: ', 'ShippingAddressController' );
			$this->objBillingAddressController = new AddressController($this, $this->objBillingAddress->Id, 'BillingAddress: ', 'BillingAddressController' );
			$this->objShippingAddressController->Visible = true;
			$this->objBillingAddressController->Visible = true;
			$this->objCheckOutItemListModule->Visible = true;
*/
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
		public function __get($strName){
			switch ($strName){
				//Note: this (like all __get magic) returns a copy ..)
				case 'ItemListModule':
					return $this->objCheckOutItemListModule ;
				case 'ShoppingCart':
					return $this->objShoppingCart ;
				case 'ShippingAddress':
					return $this->objShippingAddress ;
				case 'BillingAddress':
					return $this->objBillingAddress ;
				case 'Account':
					return IndexPage::$objAccount ;
				case 'TotalItemsCharge':
					return $this->objCheckOutTotalsController->ShippingCharge ;
				case 'ShippingCharge':
					return $this->objCheckOutTotalsController->ShippingCharge ;
				case 'HandlingCharge':
					return $this->objCheckOutTotalsController->HandlingCharge ;
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
				case 'ShippingCharge':
					return ($this->objCheckOutTotalsController->ShippingCharge = $mixValue);
				case 'TotalItemsCharge':
					return ($this->objCheckOutTotalsController->TotalItemsCharge = $mixValue);

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