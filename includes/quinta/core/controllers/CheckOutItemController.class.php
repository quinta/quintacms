<?php

	/**
	* CheckOutItemController - provides a panel for the display of a single item in an Order
	*
	* This class displays the Order item with a field for adjusting the quantity and an
	* optional thumbnail image of the item.
	*
	* If Modifiable is false the quantity field is a label and not adjustable, if true it is an
	* input field allowing the user to change the quantity of the item.
	*
	*@todo
	*   - implement image support
	*   - base class most of this and use for ShoppingCartItemController as well, perhaps renaming to
	*   the more generic term OrderItemView; this needs to provide functionality like a DataGrid
	*   keeping an array of columns with AddColumn(foo) ..
	*
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.3
	*
	* @package Quinta
	* @subpackage Classes
	 */

	class CheckOutItemController extends QPanel{
		/**
		* @var QPanel objControlBlock - DOM parent .. usually a CheckOutItemListModule
		*/
		protected $objControlBlock;
		/**
		* @var Product objProduct - local instance of the Product item
		*/
		protected $objProduct;
		/**
		* @var boolean blnModifiable - if true, the quantity fields are rendered as input, otherwise as labels
		*/
		protected $blnModifiable;
		/**
		* @var float fltItemTotal - total price of this line item (*quantity)
		*/
		protected $fltItemTotal;
		/**
		* Note: this is public to avoid an obscure php bug that may have dissappeared by the
		* time you see this .. fixme if possible.
		* @var OrderItem objOrderItem - Local instance of the OrderItem
		*/
		public $objOrderItem;

		public $ctlProductImage;

		public $lblProductName;
		public $lblItemPrice;
		public $lblTotalPrice;

		public $lblQuantity;
		public $txtQuantity;

		/**
		*
		*@param QPanel objParentObject - the panel in which this item view is rendered.
		*@param OrderItem objOrderItem - the order item to be displayed
		*@param boolean blnModifiable - quantity may be modified if true
		*/
		public function __construct($objParentObject, $objOrderItem, $blnModifiable=true){

			try {
				parent::__construct($objParentObject);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			$this->objControlBlock =& $objParentObject;
			$this->objOrderItem =& $objOrderItem;
			$this->blnModifiable = $blnModifiable;

			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/CheckOutItemView.tpl.php';

			$this->objProduct = Product::Load($this->objOrderItem->ProductId);

			$this->lblProductName = new QLabel($this);
			$this->lblProductName->CssClass = 'ProductName';
			$this->lblProductName->Text = $this->objProduct->Model;

			$this->lblItemPrice = new QLabel($this);
			$this->lblItemPrice->CssClass = 'ItemPrice';

			$this->lblItemPrice->Text = money_format('%n',$this->objProduct->RetailPrice);

			$this->lblTotalPrice = new QLabel($this);
			$this->lblTotalPrice->CssClass = 'ItemTotal';

			$this->fltItemTotal = $this->objProduct->RetailPrice * $this->objOrderItem->Quantity;
			$this->lblTotalPrice->Text = money_format('%n', $this->fltItemTotal );

			if($blnModifiable)
			{
				$this->txtQuantity = new QIntegerTextBox($this);
				$this->txtQuantity->Text = $this->objOrderItem->Quantity;
				$this->txtQuantity->CssClass = 'ProductQtyBox';
				if(IndexPage::$blnAjaxOk)
					$this->txtQuantity->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'InitTotal') );
				else
					$this->txtQuantity->AddAction(new QChangeEvent(), new QServerControlAction($this, 'InitTotal') );
			}
			else
			{
				$this->lblQuantity = new QLabel($this);
				$this->lblQuantity->Text = $this->objOrderItem->Quantity;
			}
		}
		/**
		*@param string strFormId - the main QForm's identifier
		*@param string strControlId - the calling Control's id
		*@param string strParameters - ingored, as are the above ..
		*/
		public function InitTotal( $strFormId, $strControlId, $strParameters){
			$this->objOrderItem->Quantity = $this->txtQuantity->Text;

			$this->fltItemTotal = $this->objProduct->RetailPrice * $this->objOrderItem->Quantity;
			$this->lblTotalPrice->Text = money_format('%n', $this->fltItemTotal );
			$this->MarkAsModified();
			$this->Refresh();
			if($this->objControlBlock instanceof CheckOutItemListModule ){
				$this->objControlBlock->MarkAsModified();
				$this->objControlBlock->RefreshTotalPrice();
			}
		}

		public function __get($strName){
			switch ($strName){
				case 'Modifiable':
					return $this->blnModifiable ;
				case 'OrderItem':
					return $this->objOrderItem ;
				case 'ItemTotal':
					return $this->fltItemTotal ;
				//if user modified this differs from the quantity in the OrderItem
				case 'Quantity':
					if($this->blnModifiable)
						return $this->txtQuantity->Text ;
					else
						return $this->lblQuantity->Text;
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