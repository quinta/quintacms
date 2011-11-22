<?php
if(!defined('QUINTACMS') ) die("No quinta.");
	
	/**
	* ProductItemController - provides a panel for the display of a single Product
	*    
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*
	*@version 0.3
	*
	* @package Quinta
	* @subpackage Controllers
	 */
	class ProductItemController extends QPanel{
		private $objControlBlock;		
		// Local instance of the ProductMetaControl
		protected $mctProduct;

		// Controls for Product's Data Fields
		public $lblId;
		public $lblManufacturer;
		public $lblSupplier;
		public $lblCreationDate;
		public $lblName;
		public $lblModel;
		public $lblShortDescription;
		public $lblLongDescription;
		public $lblMsrp;
		public $lblWholesalePrice;
		public $lblRetailPrice;
		public $lblWeight;
		public $lblHeight;
		public $lblWidth;
		public $lblDepth;
		public $lblType;
		public $lblViewCount;

		public $lblProductCategoriesAsCategory;
		public $lblParentProductsAsRelated;
		public $lblProductsAsRelated;
		
		public $ctlImageLabel;

		public $btnBack;
		public $btnAddToCart;

		public $strImageLink;
		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject,
													  $objControlBlock,
													  $strClosePanelMethod,
													  $intProductId = null,
													  $strControlId = null)
		{
			
			$this->objControlBlock =& $objControlBlock;

			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/ProductItemView.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			$this->mctProduct = ProductMetaControl::Create($this, $intProductId);

			$this->lblId = $this->mctProduct->lblId_Create();
			$this->lblManufacturer = $this->mctProduct->lblManufacturer_Create();
			$this->lblSupplier = $this->mctProduct->lblSupplier_Create();
			$this->lblCreationDate = $this->mctProduct->lblCreationDate_Create();
			$this->lblName = $this->mctProduct->lblName_Create();
			$this->lblModel = $this->mctProduct->lblModel_Create();
			$this->lblShortDescription = $this->mctProduct->lblShortDescription_Create();
			$this->lblLongDescription = $this->mctProduct->lblLongDescription_Create();
			$this->lblLongDescription->HtmlEntities = false;
			
/*
			$this->lblMsrp = $this->mctProduct->lblMsrp_Create();
			$this->lblWholesalePrice = $this->mctProduct->lblWholesalePrice_Create();
*/
			
			$this->lblRetailPrice = $this->mctProduct->lblRetailPrice_Create();
			$this->lblWeight = $this->mctProduct->lblWeight_Create();
			$this->lblHeight = $this->mctProduct->lblHeight_Create();
			$this->lblWidth = $this->mctProduct->lblWidth_Create();
			$this->lblDepth = $this->mctProduct->lblDepth_Create();
			
			$this->lblType = $this->mctProduct->lblType_Create();
			$this->lblProductCategoriesAsCategory = $this->mctProduct->lblProductCategoriesAsCategory_Create();
			$this->lblParentProductsAsRelated = $this->mctProduct->lblParentProductsAsRelated_Create();
			$this->lblProductsAsRelated = $this->mctProduct->lblProductsAsRelated_Create();

			$this->btnBack = new QButton($this);
			$this->btnBack->Text = Quinta::Translate('Back');
			if(IndexPage::$blnAjaxOk)
				$this->btnBack->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnBack_Click'));
			else
				$this->btnBack->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnBack_Click'));
			
			$this->btnAddToCart = new QButton($this);
			$this->btnAddToCart->Text = Quinta::Translate('Add to Cart');
			if(IndexPage::$blnAjaxOk)
				$this->btnAddToCart->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnAddToCart_Click'));
			else
				$this->btnAddToCart->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnAddToCart_Click'));
			$this->btnAddToCart->ActionParameter = $intProductId;

			$this->ctlImageLabel = new ProductImageLabel( $this, $intProductId );
		}

		public function btnBack_Click($strFormId, $strControlId, $strParameter){
			$strMethod = $this->strClosePanelMethod;
			//close indicating no changes
			$this->objControlBlock->$strMethod(false);
		}
		
		public function btnAddToCart_Click($strFormId, $strControlId, $intProductId){
			if($intProductId && IndexPage::$objShoppingCart instanceof ShoppingCart )
				IndexPage::$objShoppingCart->AddItem($intProductId);
		}

	}
?>