<?php
	/**
	* AccountOrderEditPanel - provides a panel for user viewing and modification of a specific
	* order
	*
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.1
	* @package Quinta
	* @subpackage Classes
	 */
	class AccountOrderEditPanel extends QPanel{
		// Local instance of the OrderMetaControl
		protected $mctOrder;

		protected $objControlBlock;

		// Controls for Order's Data Fields
		public $lblId;
		public $lstAccount;
		public $lblCreationDate;
		public $lblLastModificationDate;
		public $lblCompletionDate;
		public $txtShippingCost;
		public $txtProductTotalCost;
		public $txtShippingCharged;
		public $txtHandlingCharged;
		public $txtTax;
		public $txtProductTotalCharged;
		public $txtShippingNamePrefix;
		public $txtShippingFirstName;
		public $txtShippingMiddleName;
		public $txtShippingLastName;
		public $txtShippingNameSuffix;
		public $txtShippingStreet1;
		public $txtShippingStreet2;
		public $txtShippingSuburb;
		public $txtShippingCounty;
		public $txtShippingCity;
		public $lstShippingZone;
		public $lstShippingCountry;
		public $txtShippingPostalCode;
		public $txtBillingNamePrefix;
		public $txtBillingFirstName;
		public $txtBillingMiddleName;
		public $txtBillingLastName;
		public $txtBillingNameSuffix;
		public $txtBillingStreet1;
		public $txtBillingStreet2;
		public $txtBillingSuburb;
		public $txtBillingCounty;
		public $txtBillingCity;
		public $lstBillingZone;
		public $lstBillingCountry;
		public $txtBillingPostalCode;
		public $txtNotes;
		public $lstShippingMethod;
		public $lstStatus;

		// Other Controls
		public $btnSave;
		public $btnBack;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject,
									$objControlBlock,
									$strClosePanelMethod,
									$intId = null,
									$strControlId = null)
		{

			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->objControlBlock =& $objControlBlock;

			$this->strTemplate = __QUINTA_CORE_VIEWS__ .  '/AccountOrderEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			$this->mctOrder = OrderMetaControl::Create($this, $intId);

			$this->lblId = $this->mctOrder->lblId_Create();
			$this->lstAccount = $this->mctOrder->lstAccount_Create();
			$this->lblCreationDate = $this->mctOrder->lblCreationDate_Create();
			$this->lblLastModificationDate = $this->mctOrder->lblLastModificationDate_Create();
			$this->lblCompletionDate = $this->mctOrder->lblCompletionDate_Create();
			$this->txtShippingCost = $this->mctOrder->txtShippingCost_Create();
			$this->txtProductTotalCost = $this->mctOrder->txtProductTotalCost_Create();
			$this->txtShippingCharged = $this->mctOrder->txtShippingCharged_Create();
			$this->txtHandlingCharged = $this->mctOrder->txtHandlingCharged_Create();
			$this->txtTax = $this->mctOrder->txtTax_Create();
			$this->txtProductTotalCharged = $this->mctOrder->txtProductTotalCharged_Create();
			$this->txtShippingNamePrefix = $this->mctOrder->txtShippingNamePrefix_Create();
			$this->txtShippingFirstName = $this->mctOrder->txtShippingFirstName_Create();
			$this->txtShippingMiddleName = $this->mctOrder->txtShippingMiddleName_Create();
			$this->txtShippingLastName = $this->mctOrder->txtShippingLastName_Create();
			$this->txtShippingNameSuffix = $this->mctOrder->txtShippingNameSuffix_Create();
			$this->txtShippingStreet1 = $this->mctOrder->txtShippingStreet1_Create();
			$this->txtShippingStreet2 = $this->mctOrder->txtShippingStreet2_Create();
			$this->txtShippingSuburb = $this->mctOrder->txtShippingSuburb_Create();
			$this->txtShippingCounty = $this->mctOrder->txtShippingCounty_Create();
			$this->txtShippingCity = $this->mctOrder->txtShippingCity_Create();
			$this->lstShippingZone = $this->mctOrder->lstShippingZone_Create();
			$this->lstShippingCountry = $this->mctOrder->lstShippingCountry_Create();
			$this->txtShippingPostalCode = $this->mctOrder->txtShippingPostalCode_Create();
			$this->txtBillingNamePrefix = $this->mctOrder->txtBillingNamePrefix_Create();
			$this->txtBillingFirstName = $this->mctOrder->txtBillingFirstName_Create();
			$this->txtBillingMiddleName = $this->mctOrder->txtBillingMiddleName_Create();
			$this->txtBillingLastName = $this->mctOrder->txtBillingLastName_Create();
			$this->txtBillingNameSuffix = $this->mctOrder->txtBillingNameSuffix_Create();
			$this->txtBillingStreet1 = $this->mctOrder->txtBillingStreet1_Create();
			$this->txtBillingStreet2 = $this->mctOrder->txtBillingStreet2_Create();
			$this->txtBillingSuburb = $this->mctOrder->txtBillingSuburb_Create();
			$this->txtBillingCounty = $this->mctOrder->txtBillingCounty_Create();
			$this->txtBillingCity = $this->mctOrder->txtBillingCity_Create();
			$this->lstBillingZone = $this->mctOrder->lstBillingZone_Create();
			$this->lstBillingCountry = $this->mctOrder->lstBillingCountry_Create();
			$this->txtBillingPostalCode = $this->mctOrder->txtBillingPostalCode_Create();
			$this->txtNotes = $this->mctOrder->txtNotes_Create();
			$this->lstShippingMethod = $this->mctOrder->lstShippingMethod_Create();
			$this->lstStatus = $this->mctOrder->lstStatus_Create();

			$this->btnSave = new QButton($this);
			$this->btnSave->Text = Quinta::Translate('Save');
			if(IndexPage::$blnAjaxOk)
				$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			else
				$this->btnSave->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnBack = new QButton($this);
			$this->btnBack->Text = Quinta::Translate('Back');
			if(IndexPage::$blnAjaxOk)
				$this->btnBack->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnBack_Click'));
			else
				$this->btnBack->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnBack_Click'));

		}

		public function btnSave_Click($strFormId, $strControlId, $strParameter){
			$this->mctOrder->SaveOrder();
			$this->CloseSelf(true);
		}

		public function btnBack_Click($strFormId, $strControlId, $strParameter){
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade){
			$strMethod = $this->strClosePanelMethod;
			$this->objControlBlock->$strMethod($blnChangesMade);
		}
	}
?>