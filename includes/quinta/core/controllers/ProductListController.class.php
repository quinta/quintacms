<?php
if(!defined('QUINTACMS') ) die("No quinta.");
	
	/**
	* ProductListView - provides a panel for the display of a list of Products
	*    
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.1
	*
	* @package Quinta
	* @subpackage Classes
	 */
	class ProductListView extends QPanel{
		private $objControlBlock;
		private $objAccount;
						
		// Local instance of the Meta DataGrid to list Products
		public $dtgProducts;

		public $pxtViewItem;
		public $pxyAddToCart;

		// Callback Method Names
		protected $strSetItemViewMethod;
		protected $strCloseItemViewMethod;
		
		public function __construct($objParentObject,
													  $objControlBlock,
													  $strSetItemViewMethod,
													  $strCloseItemViewMethod,
													  $strControlId = null)
		{
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			$this->objControlBlock =& $objControlBlock;

			$this->objAccount = IndexPage::$objAccount;

			// Record Method Callbacks
			$this->strSetItemViewMethod = $strSetItemViewMethod;
			$this->strCloseItemViewMethod = $strCloseItemViewMethod;

			$this->Template =__QUINTA_CORE_VIEWS__ . '/ProductListView.tpl.php';

			$this->dtgProducts = new ProductDataGrid($this);

			$this->dtgProducts->CssClass = 'datagrid';
			$this->dtgProducts->AlternateRowStyle->CssClass = 'alternate';

			$this->dtgProducts->Paginator = new QPaginator($this->dtgProducts);
			$this->dtgProducts->ItemsPerPage = 15;

			$this->pxtViewItem = new QControlProxy($this);
			if(IndexPage::$blnAjaxOk)
				$this->pxtViewItem->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxtViewItem_Click'));
			else
				$this->pxtViewItem->AddAction(new QClickEvent(), new QServerControlAction($this, 'pxtViewItem_Click'));
			$this->dtgProducts->MetaAddEditProxyColumn($this->pxtViewItem, 'View', 'View');
					
			$this->dtgProducts->MetaAddColumn('Id');
			$this->dtgProducts->MetaAddColumn('Name');
			$this->dtgProducts->MetaAddColumn('Model');
			$this->dtgProducts->MetaAddColumn('RetailPrice');

/*other possible columns:
			$this->dtgProducts->MetaAddColumn(QQN::Product()->Manufacturer);
			$this->dtgProducts->MetaAddColumn(QQN::Product()->Supplier);
			$this->dtgProducts->MetaAddColumn('CreationDate');
			$this->dtgProducts->MetaAddColumn('ShortDescription');
			$this->dtgProducts->MetaAddColumn('LongDescription');
			$this->dtgProducts->MetaAddColumn('Msrp');
			$this->dtgProducts->MetaAddColumn('WholesalePrice');
			$this->dtgProducts->MetaAddColumn('Cost');
			$this->dtgProducts->MetaAddColumn('Weight');
			$this->dtgProducts->MetaAddColumn('Height');
			$this->dtgProducts->MetaAddColumn('Width');
			$this->dtgProducts->MetaAddColumn('Depth');
			$this->dtgProducts->MetaAddColumn('IsVirtual');
			$this->dtgProducts->MetaAddTypeColumn('TypeId', 'ProductType');
*/            
			$this->pxyAddToCart = new QControlProxy($this);
			if(IndexPage::$blnAjaxOk)
				$this->pxyAddToCart->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyAddToCart_Click'));
			else
				$this->pxyAddToCart->AddAction(new QClickEvent(), new QServerControlAction($this, 'pxyAddToCart_Click'));
			$this->dtgProducts->MetaAddEditProxyColumn($this->pxyAddToCart, 'Add To Cart', '');
			
		}
		/**
		* This function accepts an Id for a Product item to view, called when user clicks "View"
		* in the list item.
		* The Product is displayed in a separate panel by the ControlBlock
		*
		*@param string strFormId - contains the CSS id of the main QForm (ie. IndexPage)
		*@param string strControlId - contains the CSS id of the calling control (ie. the datagrid )
		*@param integer intProductId - contains the id of the Product to add
		*@return void
		*/
		public function pxtViewItem_Click($strFormId, $strControlId, $intProductId){
			$objItemView = new ProductItemController($this,
																		$this->objControlBlock,
																		$this->strCloseItemViewMethod,
																		$intProductId);

			$strMethodName = $this->strSetItemViewMethod;
			$this->objControlBlock->$strMethodName($objItemView);
		}
		/**
		* This function accepts an Id for a Product to add to the shopping cart, called when user clicks "Add to Cart"
		* in the list item.
		* The Product is then added to the cart as a ShoppingCartItem. If a ShoppingCartItem already exists
		* for this product, the quantity is incremented.
		*
		*
		*@param string strFormId - contains the CSS id of the main QForm (ie. IndexPage)
		*@param string strControlId - contains the CSS id of the calling control (ie. the datagrid )
		*@param integer intProductId - contains the id of the Product to add
		*@return void
		*/
		public function pxyAddToCart_Click($strFormId, $strControlId, $intProductId){
			if($intProductId && IndexPage::$objShoppingCart instanceof ShoppingCart )
				IndexPage::$objShoppingCart->AddItem($intProductId);
		}
	}
?>