<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the AuthorizeNetTransaction class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of AuthorizeNetTransaction objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this AuthorizeNetTransactionListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package Quinta CMS
	 * @subpackage AdminUI
	 * 
	 */
	class AuthorizeNetTransactionListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list AuthorizeNetTransactions
		public $dtgAuthorizeNetTransactions;

		// Other public QControls in this panel
		public $btnCreateNew;
		public $pxyEdit;

		// Callback Method Names
		protected $strSetEditPanelMethod;
		protected $strCloseEditPanelMethod;
		
		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Record Method Callbacks
			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			// Setup the Template
			$this->Template = 'AuthorizeNetTransactionListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgAuthorizeNetTransactions = new AuthorizeNetTransactionDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgAuthorizeNetTransactions->CssClass = 'datagrid';
			$this->dtgAuthorizeNetTransactions->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgAuthorizeNetTransactions->Paginator = new QPaginator($this->dtgAuthorizeNetTransactions);
			$this->dtgAuthorizeNetTransactions->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgAuthorizeNetTransactions->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for authorize_net_transaction's properties, or you
			// can traverse down QQN::authorize_net_transaction() to display fields that are down the hierarchy)
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('Id');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn(QQN::AuthorizeNetTransaction()->Order);
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('CreationDate');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('ResponseCode');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('ResponseSubcode');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('ResponseReasonCode');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('ResponseReasonText');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('AuthorizationCode');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('TransactionId');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('TransactionType');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('Amount');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('AvsResponseCode');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('CcvResponseCode');
			$this->dtgAuthorizeNetTransactions->MetaAddColumn('CavResponseCode');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('AuthorizeNetTransaction');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new AuthorizeNetTransactionEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new AuthorizeNetTransactionEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>