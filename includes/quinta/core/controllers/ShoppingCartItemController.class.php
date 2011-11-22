<?php
	/**
	* ShoppingCartItemController - provides a panel for the display of a single item in the cart
	*
	* This class displays the shopping cart item with a field for adjusting the quantity
	*
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.3
	*
	* @package Quinta
	* @subpackage Classes
	 */

	class ShoppingCartItemController extends QPanel{
		protected $objControlBlock;
		// Local instance of the ShoppingCartItem
		protected $objShoppingCartItem;
		protected $objProduct;      
		protected $fltItemTotal;
		
		public $ctlProductImage;
		
		public $lblProductName;
		public $lblDimensions;
		public $lblItemPrice;
		public $lblTotalPrice;
		
		public $btnRemove;

		public $txtQuantity;
		
		public function __construct($objControlBlock, ShoppingCartItem $objShoppingCartItem){

			$this->objControlBlock = $objControlBlock;
			$this->objShoppingCartItem = $objShoppingCartItem;
			
			try {
				parent::__construct($objControlBlock);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/ShoppingCartItemView.tpl.php';

			$this->objProduct = Product::Load($this->objShoppingCartItem->ProductId);
			
			$this->lblProductName = new QLabel($this);
			$this->lblProductName->HtmlEntities = false;
			$this->lblProductName->Text = '<a href="'. __QUINTA_SUBDIRECTORY__ . '/index.php/Products/'
															   . $this->objProduct->Id . '">' . $this->objProduct->Model . '</a>';

			$this->ctlProductImage = new ProductImageLabel($this, $this->objProduct->Id, ImageSizeType::Thumb, 48, 48);
			
			$strHeight = number_format( $this->objProduct->Height , 2 );
			$strWidth = number_format( $this->objProduct->Width , 2 );
			$this->lblDimensions = new QLabel($this);
			$this->lblDimensions->Text =  $strHeight . ' x ' . $strWidth;

			$this->btnRemove = new QImageButton($this);
			$this->btnRemove->ImageUrl = __QUINTA_CORE_IMAGES__ . '/square_button_small_grey.gif';
			$this->btnRemove->ActionParameter = $this->objProduct->Id;
			$strWarning = Quinta::Translate('Are you SURE you want to remove this item') . ' ?';
			$this->btnRemove->AddAction(new QClickEvent(), new QConfirmAction($strWarning));
			if(IndexPage::$blnAjaxOk)
				$this->btnRemove->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnRemoveItem_Click'));
			else
				$this->btnRemove->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnRemoveItem_Click'));
			
			$this->lblItemPrice = new QLabel($this);
			$this->lblItemPrice->CssClass = 'ItemPrice';
			$this->lblItemPrice->Text = money_format('%n',$this->objProduct->RetailPrice);
			
			$this->txtQuantity = new QIntegerTextBox($this);
			$this->txtQuantity->CssClass = 'ProductQtyBox';
			$this->txtQuantity->Text = $this->objShoppingCartItem->Quantity;
			$this->txtQuantity->Minimum = 0;
			$this->txtQuantity->Maximum = MAX_PRODUCT_QUANTITY;
			$this->txtQuantity->CausesValidation = $this->txtQuantity;
			if(IndexPage::$blnAjaxOk)
				$this->txtQuantity->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'InitTotal') );
			else
				$this->txtQuantity->AddAction(new QChangeEvent(), new QServerControlAction($this, 'InitTotal') );
			
			$this->fltItemTotal = $this->objProduct->RetailPrice * $this->objShoppingCartItem->Quantity;
			$this->lblTotalPrice = new QLabel($this);
			$this->lblTotalPrice->CssClass = 'ItemTotal';
			$this->lblTotalPrice->Text = money_format('%n', $this->fltItemTotal );
			
		}
		/**
		*@param string strFormId - the main QForm's identifier
		*@param string strControlId - the calling Control's id
		*@param string strParameters - ingored, as are the above ..
		*/
		public function InitTotal( $strFormId, $strControlId, $strParameters){
			$this->objShoppingCartItem->Quantity = $this->txtQuantity->Text;
			$this->fltItemTotal = $this->objProduct->RetailPrice * $this->objShoppingCartItem->Quantity;
			$this->lblTotalPrice->Text = money_format('%n', $this->fltItemTotal );
			$this->objControlBlock->RefreshTotals();
		}
		/**
		* This removes the item when the user clicks the remove button - Note that the
		* ShoppingCart function also refreshes the page (a quick fix to redraw the items ..)
		*/        
		public function btnRemoveItem_Click($strFormId, $strControlId, $intProductId){
			IndexPage::$objShoppingCart->RemoveItem($intProductId);
		}
		
		public function __get($strName){
			switch ($strName){
				case 'ShoppingCartItem':
					return $this->objShoppingCartItem ;
				case 'Quantity':
					return $this->txtQuantity->Text ;
				case 'ItemTotal':
					return $this->fltItemTotal ;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
		
	}
?>