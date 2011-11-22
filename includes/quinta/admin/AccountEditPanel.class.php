<?php
	/** @brief A panel for editing Account information
	 *
	 * This panel presents the information associated with an account
	 * in the CMS.
	 * 
	 * @package Quinta
	 * @subpackage AdminUI
	 */
	class AccountEditPanel extends QPanel {
		protected $mctAccount;
		protected $objAccount;
		protected $pnlListPanel;
		//Controls for listing orders associated with this account
		public $dtgOrders;
		public $objPaginator;
		public $pxyViewOrder;
		// Controls for Account's Data Fields
		public $lblId;
		public $lblRegistrationDate;
		public $txtUsername;
		public $txtPassword;
		public $txtNotes;
		public $lblLastLogin;
		public $txtLoginCount;
		public $chkOnline;
		public $chkOnetimePassword;
		public $chkValidPassword;
		public $lstType;
		public $lstStatus;
		public $lblPerson;
		// Action controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intId = null, $strControlId = null){
			$this->pnlListPanel =& $objParentObject;

			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			$this->strTemplate = 'AccountEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;
			$this->mctAccount = AccountMetaControl::Create($this, $intId);
			$this->objAccount =& $this->mctAccount->Account;

			$this->lblId = $this->mctAccount->lblId_Create();
			$this->lblRegistrationDate = $this->mctAccount->lblRegistrationDate_Create();
			$this->txtUsername = $this->mctAccount->txtUsername_Create();
			$this->txtPassword = $this->mctAccount->txtPassword_Create();
			$this->txtPassword->Required = false;
			$this->txtNotes = $this->mctAccount->txtNotes_Create();
			$this->lblLastLogin = $this->mctAccount->lblLastLogin_Create();
			$this->txtLoginCount = $this->mctAccount->txtLoginCount_Create();
			$this->chkOnline = $this->mctAccount->chkOnline_Create();
			$this->chkOnetimePassword = $this->mctAccount->chkOnetimePassword_Create();
			$this->chkValidPassword = $this->mctAccount->chkValidPassword_Create();
			$this->lstType = $this->mctAccount->lstType_Create();
			$this->lstStatus = $this->mctAccount->lstStatus_Create();
			$this->lblPerson = $this->mctAccount->lblPersonId_Create();

			// Create a Meta DataGrid to list the Orders for the Account
			$this->dtgOrders = new OrderDataGrid($this);
			$this->dtgOrders->SetDataBinder('AccountOrderDataBinder', $this);

			$this->dtgOrders->CssClass = 'datagrid';
			$this->dtgOrders->AlternateRowStyle->CssClass = 'alternate';
			$this->objPaginator = new QPaginator($this->dtgOrders);
			$this->dtgOrders->Paginator = $this->objPaginator;
			$this->dtgOrders->ItemsPerPage = 25;

			$this->pxyViewOrder = new QControlProxy($this);
			$this->pxyViewOrder->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyViewOrder_Click'));

			$this->dtgOrders->MetaAddProxyColumn($this->pxyViewOrder, 'Id');
			$this->dtgOrders->MetaAddColumn('CreationDate');
			$this->dtgOrders->MetaAddColumn('LastModification');
			$this->dtgOrders->MetaAddColumn('CompletionDate');
			$this->dtgOrders->MetaAddColumn(QQN::Order()->ShippingMethod);
			$this->dtgOrders->MetaAddColumn(QQN::Order()->PaymentMethod);
			$this->dtgOrders->MetaAddTypeColumn('StatusId', 'OrderStatusType');

			$strOrderTotalParam = '<?= money_format("%n", $_ITEM->ProductTotalCharged '
												 . ' + $_ITEM->ShippingCharged '
												 . ' + $_ITEM->HandlingCharged '
												 . ' + $_ITEM->Tax ) ?>';
			$objOrderTotalColumn = new QDataGridColumn('Order Total', $strOrderTotalParam );
			$this->dtgOrders->AddColumn($objOrderTotalColumn);

			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Account') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctAccount->EditMode;
		}
		/**
		* This binds the Datagrid data retrieval to this Account, the orders listed in the Datagrid will be those
		* associated with this account in the database.
		*
		* If a paginator is set on this DataBinder, it will use it.  If not, then no pagination will be used.
		* It will also perform any sorting requested in by clicking on the column titles in the Datagrid.
		*/
		public function AccountOrderDataBinder(){
			if ($this->objPaginator)
				$this->dtgOrders->TotalItemCount = Order::CountByAccountId($this->objAccount->Id);
			$objClauses = array();
			// If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
			// the OrderByClause to the $objClauses array - this is in the datagrid if the user clicks on column title
			if ($objClause = $this->dtgOrders->OrderByClause)
				array_push($objClauses, $objClause);
			// Add the LimitClause information, as well
			if ($objClause = $this->dtgOrders->LimitClause)
				array_push($objClauses, $objClause);
			array_push($objClauses, QQ::OrderBy(QQN::Order()->CreationDate, false) );
			$this->dtgOrders->DataSource = Order::LoadArrayByAccountId(
						$this->objAccount->Id, $objClauses
					);
		}

		/**
		* @brief Callback to view an order in the list
		*
		*@todo - fix this ..
		* 
		* @param strFormId ...
		* @param strControlId ...
		* @param strParameter ...
		* @return void
		**/
		public function pxyViewOrder_Click($strFormId, $strControlId, $strParameter){
			$strParameterArray = explode(',', $strParameter);

//            $objEditPanel = new OrderEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);
//            $objEditPanel = new OrderEditPanel($this, 'CloseEditPane', $strParameterArray[0]);
			$objEditPanel = new OrderEditPanel($this->pnlListPanel , 'CloseEditPane', $strParameter);

//            $strMethodName = $this->strSetEditPanelMethod;
//            $this->objForm->$strMethodName($objEditPanel);
			$this->objForm->SetEditPane($objEditPanel);
		}

		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			$this->mctAccount->SaveAccount();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			$this->mctAccount->DeleteAccount();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	}
?>