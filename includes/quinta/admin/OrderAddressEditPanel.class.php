<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the OrderAddress class.  It uses the code-generated
	 * OrderAddressMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a OrderAddress columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both order_address_edit.php AND
	 * order_address_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package Quinta CMS
	 * @subpackage AdminUI
	 */
	class OrderAddressEditPanel extends QPanel {
		// Local instance of the OrderAddressMetaControl
		protected $mctOrderAddress;

		// Controls for OrderAddress's Data Fields
		public $lblId;
		public $lstOrder;
		public $txtNamePrefix;
		public $txtFirstName;
		public $txtMiddleName;
		public $txtLastName;
		public $txtNameSuffix;
		public $txtCompany;
		public $txtStreet1;
		public $txtStreet2;
		public $txtSuburb;
		public $txtCity;
		public $txtCounty;
		public $lstZone;
		public $lstCountry;
		public $txtPostalCode;
		public $lstType;
		public $lblCreationDate;
		public $lblLastModification;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'OrderAddressEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the OrderAddressMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctOrderAddress = OrderAddressMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on OrderAddress's data fields
			$this->lblId = $this->mctOrderAddress->lblId_Create();
			$this->lstOrder = $this->mctOrderAddress->lstOrder_Create();
			$this->txtNamePrefix = $this->mctOrderAddress->txtNamePrefix_Create();
			$this->txtFirstName = $this->mctOrderAddress->txtFirstName_Create();
			$this->txtMiddleName = $this->mctOrderAddress->txtMiddleName_Create();
			$this->txtLastName = $this->mctOrderAddress->txtLastName_Create();
			$this->txtNameSuffix = $this->mctOrderAddress->txtNameSuffix_Create();
			$this->txtCompany = $this->mctOrderAddress->txtCompany_Create();
			$this->txtStreet1 = $this->mctOrderAddress->txtStreet1_Create();
			$this->txtStreet2 = $this->mctOrderAddress->txtStreet2_Create();
			$this->txtSuburb = $this->mctOrderAddress->txtSuburb_Create();
			$this->txtCity = $this->mctOrderAddress->txtCity_Create();
			$this->txtCounty = $this->mctOrderAddress->txtCounty_Create();
			$this->lstZone = $this->mctOrderAddress->lstZone_Create();
			$this->lstCountry = $this->mctOrderAddress->lstCountry_Create();
			$this->txtPostalCode = $this->mctOrderAddress->txtPostalCode_Create();
			$this->lstType = $this->mctOrderAddress->lstType_Create();
			$this->lblCreationDate = $this->mctOrderAddress->lblCreationDate_Create();
			$this->lblLastModification = $this->mctOrderAddress->lblLastModification_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('OrderAddress') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctOrderAddress->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the OrderAddressMetaControl
			$this->mctOrderAddress->SaveOrderAddress();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the OrderAddressMetaControl
			$this->mctOrderAddress->DeleteOrderAddress();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	}
?>