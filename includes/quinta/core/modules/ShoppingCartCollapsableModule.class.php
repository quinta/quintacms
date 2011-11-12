<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("SHOPPINGCARTCOLLASPABLEMODULE.CLASS.PHP")){
define("SHOPPINGCARTCOLLASPABLEMODULE.CLASS.PHP",1);

/**
* Class ShoppingCartCollapsableModule - mini shopping cart display
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*  This module provides the mini cart view for items in the shopping cart.
* It is created by default for any user that signs in. An account has one
* shopping cart, when checkout occurs the items are removed from the
* cart when the order is created.
*
* This mini view is collapsable and contains a hyperlinked list of the items
* in the cart, clicking on an item redirects the user to the product page, clicking
* on the "View Cart" button redirects the user to a full cart view page.
*
* Note: this class extends the QCollapsablePanel found in quinta/contrib/classes
* which is a modified version of the original found at qcodo.com
*
*@todo
*   - add total price (incl. shipping) estimates
* 
*@version 0.1
*
*@package Quinta
* @subpackage Modules
*/
	class ShoppingCartCollapsableModule extends QCollapsablePanel{
		/**
		*@var ContentBlockController - objControlBlock the controlling block for the module
		*/
		protected $objControlBlock;
		/**
		* @var Module objModule - local reference or instance of the module ORM object
		*/
		protected $objModule;

		//Local ORM objects
		protected $objAccount;
		protected $objShoppingCart;

		protected $intItemCount = 0;
		
		public $btnCheckOut;
		public $btnViewCart;

		/**
		* Module constructor
		*@param ContentBlockController - objContentBlock parent controller object.
		*@param object objModule - the module displayed
		*/
		public function __construct( ContentBlockController $objControlBlock, $objModule){
			
			$this->objControlBlock =& $objControlBlock;
			$this->objModule =& $objModule;
			
			try {
				parent::__construct($this->objControlBlock, 'CartModule', true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/ShoppingCartCollapsableModule.tpl.php';

			$this->objAccount =& IndexPage::$objAccount;
			$this->objShoppingCart =& IndexPage::$objShoppingCart;
//                $this->pnlHeader->Text = 'Shopping Cart';
			$this->ExpandedImageUri = 'twisty_expanded.png';
			$this->CollapsedImageUri = 'twisty_collapsed.png';
			
			if($this->objAccount instanceof Account)
				$this->init();
		}

		protected function init(){
				$this->intItemCount = ShoppingCartItem::CountByShoppingCartId($this->objShoppingCart->Id);
				if($this->intItemCount > 0){
					$this->CreateItemList();
					$this->btnCheckOut = new QButton($this->pnlBody);
					$this->btnCheckOut->Text = Quinta::Translate('CheckOut');
					if(IndexPage::$blnAjaxOk)
						$this->btnCheckOut->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCheckOut_Click'));
					else
						$this->btnCheckOut->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnCheckOut_Click'));
						
					$this->btnViewCart = new QButton($this->pnlBody);
					$this->btnViewCart->Text = Quinta::Translate('ViewCart');
					if(IndexPage::$blnAjaxOk)
						$this->btnViewCart->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnViewCart_Click'));
					else
						$this->btnViewCart->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnViewCart_Click'));
				}
				else
					$this->Body->Text = Quinta::Translate('There are no items in your cart.');
		}
		
		protected function CreateItemList(){
			foreach( $this->objShoppingCart->GetShoppingCartItemArray() as $objItem ){
				$objProduct = Product::Load($objItem->ProductId);
				$intQuantity = $objItem->Quantity;
				$pnlCartItem = new QPanel($this->pnlBody);
				
				$href = __QUINTA_SUBDIRECTORY__ . '/index.php/Products/' . $objProduct->Id ;
				$pnlCartItem->Text =  '<a href="' . $href . '">' . $objProduct->Model . "</a> ({$intQuantity})";
				$pnlCartItem->CssClass = 'ShoppingCartItem';

/* another way to do this as an Ajax call
				$pnlCartItem->Text = $intQuantity . ' ' . $objProduct->Model;
				$pnlCartItem->ActionParameter = $objProduct->Id;
				$pnlCartItem->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'CartItem_Click'));
*/                
			}
			$this->Expanded = true;
		}
		public function RefreshCart(){
			if($this->objShoppingCart instanceof ShoppingCart){
				$this->MarkAsModified();
				$this->RemoveChildControls(true);
				$this->init();
			}
		}
		public function CartItem_Click($strFormId, $strControlId, $intProductId){
			Qapplication::Redirect( __QUINTA_SUBDIRECTORY__ . '/index.php/Products/' . $intProductId );
		}

		public function btnCheckOut_Click($strFormId, $strControlId, $strParameter){
			Quinta::Redirect(__QUINTA_SUBDIRECTORY__ . '/index.php/CheckOut');
		}

		public function btnViewCart_Click($strFormId, $strControlId, $strParameter){
			Quinta::Redirect(__QUINTA_SUBDIRECTORY__ . '/index.php/ShoppingCart');
		}

		public function __get($strName){
			switch ($strName){
				case 'ClassName':
					return $this->objModule->ClassName ;
				case 'Module':
					return $this->objModule ;
				case 'Account':
					return $this->objAccount ;
				case 'ShoppingCart':
					return $this->objShoppingCart ;
				case 'ItemCount':
					return $this->intItemCount ;
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
				case 'Account':
					try {
						return ($this->objAccount = QType::Cast($mixValue, 'Account' ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'ShoppingCart':
					try {
						return ($this->objShoppingCart = QType::Cast($mixValue, 'ShoppingCart' ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ItemCount':
					try {
						return ($this->intItemCount = QType::Cast($mixValue, Qtype::Integer ));
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