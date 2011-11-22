<?php

	/**
	* This class provides a panel in which to list orders
	* from within a user account owned by that user.
	*
	*@version 0.3
	*
	* @package Quinta
	* @subpackage Classes
	*
	*/

	class AccountOrderListPanel extends QPanel{
		// Local instance of the Meta DataGrid to list Orders
		public $dtgOrders;
		// A local Paginator to facilitate data binding on the DataGrid
		public $objPaginator;

		//button and the view link for the item in the grid list
		public $btnCreateNew;
		public $pxyView;

		protected $objControlBlock;

		// Callback Method Names - these are in the control block
		protected $strSetEditPanelMethod;
		protected $strCloseEditPanelMethod;

		public function __construct( $objParentObject,
									 $objControlBlock,
									 $strSetEditPanelMethod,
									 $strCloseEditPanelMethod,
									 $strControlId = null )
		{
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->objControlBlock = $objControlBlock;

			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			$this->Template = __QUINTA_CORE_VIEWS__ .  '/AccountOrderListPanel.tpl.php';

			$this->dtgOrders = new OrderDataGrid($this);
			$this->dtgOrders->SetDataBinder('AccountOrderDataBinder', $this);
			$this->dtgOrders->CssClass = 'datagrid';
			$this->dtgOrders->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination
			$this->objPaginator = new QPaginator($this->dtgOrders);
			$this->dtgOrders->Paginator = $this->objPaginator;
			$this->dtgOrders->ItemsPerPage = 20;

			$this->pxyView = new QControlProxy($this);
			if(IndexPage::$blnAjaxOk)
				$this->pxyView->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyView_Click'));
			else
				$this->pxyView->AddAction(new QClickEvent(), new QServerControlAction($this, 'pxyView_Click'));

			$this->dtgOrders->MetaAddProxyColumn($this->pxyView, 'Id', '<?= $_ITEM->Id ?>', Quinta::Translate('Order'));

			$this->dtgOrders->MetaAddTypeColumn('StatusId', 'OrderStatusType');

			$this->dtgOrders->MetaAddColumn('CreationDate');
			$this->dtgOrders->GetColumn(2)->Name = Quinta::Translate('Ordered');

			$strOrderTotalParam = '<?= money_format("%n", $_ITEM->ProductTotalCharged '
												 . ' + $_ITEM->ShippingCharged '
												 . ' + $_ITEM->HandlingCharged '
												 . ' + $_ITEM->Tax ) ?>';
			$objOrderTotalColumn = new QDataGridColumn(Quinta::Translate('Order Total'), $strOrderTotalParam );
			$this->dtgOrders->AddColumn($objOrderTotalColumn);


			// Column sizes will need to be tweaked to use these:
			// $this->dtgOrders->MetaAddColumn('TrackingNumber');
			// $this->dtgOrders->MetaAddColumn('LastModification');
			// $this->dtgOrders->GetColumn(3)->Name = Quinta::Translate('Last Change');
			// $this->dtgOrders->MetaAddColumn('ShippingCity');

			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = Quinta::Translate('Create a New') . ' ' . Quinta::Translate('Order');
			if(IndexPage::$blnAjaxOk)
				$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
			else
				$this->btnCreateNew->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyView_Click($strFormId, $strControlId, $intOrderId){
			$objEditPanel = new AccountOrderViewPanel($this,
													  $this->objControlBlock,
													  $this->strCloseEditPanelMethod,
													  $intOrderId);

			$strShowMethod = $this->strSetEditPanelMethod;
			$this->objControlBlock->$strShowMethod($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter){
			$objEditPanel = new AccountOrderViewPanel($this, $this->objControlBlock,
													  $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objControlBlock->$strMethodName($objEditPanel);
		}
		/**
		* This binds the Datagrid data retrieval to this Person, the orders listed in the Datagrid will be those
		* associated with this user in the database.
		*
		* If a paginator is set on this DataBinder, it will use it.  If not, then no pagination will be used.
		* It will also perform any sorting requested in by clicking on the column titles in the Datagrid.
		*/
		public function AccountOrderDataBinder(){
			if ($this->objPaginator)
				$this->dtgOrders->TotalItemCount = Order::CountByAccountId($this->objControlBlock->Account->Id) ;

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
				$this->objControlBlock->Account->Id, $objClauses
				);
		}

	}
?>