<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the AuthorizeNetTransaction class.  It uses the code-generated
	 * AuthorizeNetTransactionMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a AuthorizeNetTransaction columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both authorize_net_transaction_edit.php AND
	 * authorize_net_transaction_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package Quinta CMS
	 * @subpackage Drafts
	 */
	class AuthorizeNetTransactionEditPanel extends QPanel {
		// Local instance of the AuthorizeNetTransactionMetaControl
		protected $mctAuthorizeNetTransaction;

		// Controls for AuthorizeNetTransaction's Data Fields
		public $lblId;
		public $lstOrder;
		public $lblCreationDate;
		public $txtResponseCode;
		public $txtResponseSubcode;
		public $txtResponseReasonCode;
		public $txtResponseReasonText;
		public $txtAuthorizationCode;
		public $txtTransactionId;
		public $txtTransactionType;
		public $txtAmount;
		public $txtAvsResponseCode;
		public $txtCcvResponseCode;
		public $txtCavResponseCode;

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
			$this->strTemplate = 'AuthorizeNetTransactionEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the AuthorizeNetTransactionMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctAuthorizeNetTransaction = AuthorizeNetTransactionMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on AuthorizeNetTransaction's data fields
			$this->lblId = $this->mctAuthorizeNetTransaction->lblId_Create();
			$this->lstOrder = $this->mctAuthorizeNetTransaction->lstOrder_Create();
			$this->lblCreationDate = $this->mctAuthorizeNetTransaction->lblCreationDate_Create();
			$this->txtResponseCode = $this->mctAuthorizeNetTransaction->txtResponseCode_Create();
			$this->txtResponseSubcode = $this->mctAuthorizeNetTransaction->txtResponseSubcode_Create();
			$this->txtResponseReasonCode = $this->mctAuthorizeNetTransaction->txtResponseReasonCode_Create();
			$this->txtResponseReasonText = $this->mctAuthorizeNetTransaction->txtResponseReasonText_Create();
			$this->txtAuthorizationCode = $this->mctAuthorizeNetTransaction->txtAuthorizationCode_Create();
			$this->txtTransactionId = $this->mctAuthorizeNetTransaction->txtTransactionId_Create();
			$this->txtTransactionType = $this->mctAuthorizeNetTransaction->txtTransactionType_Create();
			$this->txtAmount = $this->mctAuthorizeNetTransaction->txtAmount_Create();
			$this->txtAvsResponseCode = $this->mctAuthorizeNetTransaction->txtAvsResponseCode_Create();
			$this->txtCcvResponseCode = $this->mctAuthorizeNetTransaction->txtCcvResponseCode_Create();
			$this->txtCavResponseCode = $this->mctAuthorizeNetTransaction->txtCavResponseCode_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('AuthorizeNetTransaction') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctAuthorizeNetTransaction->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the AuthorizeNetTransactionMetaControl
			$this->mctAuthorizeNetTransaction->SaveAuthorizeNetTransaction();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the AuthorizeNetTransactionMetaControl
			$this->mctAuthorizeNetTransaction->DeleteAuthorizeNetTransaction();
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