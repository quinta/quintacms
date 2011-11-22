<?php
	/**
	* AccountOrderViewPanel - provides a panel for user viewing  a specific
	* order in the user account area.
	*
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.3
	*
	* @package Quinta
	* @subpackage Classes
	 */
	class AccountOrderViewPanel extends QPanel{
		/**
		* @var QPanel objControlBlock - the DOM parent panel
		*/
		protected $objControlBlock;
		/**
		* @var Order objOrder - local reference to the  order
		*/
		public $objOrder;
		/**
		* @var OrderTotalsController - module to display shipping, handling and total price for order
		*/
		public $objOrderTotalsController;
		/**
		* @var AddressController objShippingAddressController - display for the shipping address
		*/
		public $objShippingAddressController;
		/**
		* @var AddressController objBillingAddressController - display for the billing address
		*/
		public $objBillingAddressController;
		/**
		* @var QPanel pnlPaymentMethod - panel to display information about the selected method
		*/
		public $pnlPaymentMethod;
		/**
		* @var QPanel pnlShippinggMethod - panel to display information about the selected method
		*/
		public $pnlShippingMethod;
		/**
		* @var QDataGrid dtgOrderItems - datagrid for displaying the order items
		*/
		public $dtgOrderItems;
		/**
		* @var QDataGrid dtgOrderStatusHistory - datagrid for displaying the order history
		*/
		public $dtgOrderStatusHistory;
		/**
		* @var QControlProxy pxyProductName - a proxy for making the product column active (clickable)
		*/
		public $pxyProductName;
		/**
		* @var string strTrackingNumbers - tracking numbers for order shipping
		*/
		public $strTrackingNumbers;
		/**
		* @var QPaginator paginator for the order history items
		*/
		public $objOrderStatusHistoryPaginator;
		public $objOrderItemsPaginator;

		// Other Controls
		public $btnBack;

		// Callback
		protected $strClosePanelMethod;


		public function __construct($objParentObject,
									$objControlBlock,
									$strClosePanelMethod,
									$intOrderId = null,
									$strControlId = null)
		{

			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->objControlBlock =& $objControlBlock;

			$this->strTemplate = __QUINTA_CORE_VIEWS__ .  '/AccountOrderViewPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;
			$this->objOrder = Order::Load($intOrderId);

			$aryNumbers = TrackingNumber::LoadArrayByOrderId($this->objOrder->Id);
			if(!empty($aryNumbers))
				foreach($aryNumbers as $objNumber ){
					if('' != $this->strTrackingNumbers)
						$this->strTrackingNumbers .= ', ';

					$this->strTrackingNumbers .= $objNumber->Number;
				}

			$this->dtgOrderItems = new OrderItemDataGrid($this);
			$this->dtgOrderItems->SetDataBinder('OrderItemsDataBinder', $this);
			$this->dtgOrderItems->CssClass = 'datagrid';
			$this->dtgOrderItems->AlternateRowStyle->CssClass = 'alternate';
/*
			$this->objOrderItemsPaginator = new QPaginator($this->dtgOrderItems);
			$this->dtgOrderItems->Paginator = $this->objOrderItemsPaginator;
			$this->dtgOrderItems->ItemsPerPage = 20;
*/

			$this->pxyProductName = new QControlProxy($this);
			if(IndexPage::$blnAjaxOk)
				$this->pxyProductName->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyProductName_Click'));
			else
				$this->pxyProductName->AddAction(new QClickEvent(), new QServerControlAction($this, 'pxyProductName_Click'));

/*            $this->dtgOrderItems->MetaAddProxyColumn($this->pxyProductName, QQN::OrderItem()->Product, '<?= $_ITEM->Product ?>');*/
			$this->dtgOrderItems->MetaAddProxyColumn( $this->pxyProductName, QQN::OrderItem()->Product);

			$this->dtgOrderItems->MetaAddColumn(QQN::OrderItem()->Product->RetailPrice);
			$this->dtgOrderItems->MetaAddColumn('Quantity');

			$dtgTotalColumn = new QDataGridColumn('Total', '<?= money_format("%n", $_ITEM->Product->RetailPrice * $_ITEM->Quantity ) ?>');

			$this->dtgOrderItems->AddColumn($dtgTotalColumn);

			$this->dtgOrderStatusHistory = new OrderStatusHistoryDataGrid($this);
			$this->dtgOrderStatusHistory->SetDataBinder('OrderStatusHistoryDataBinder', $this);
			$this->dtgOrderStatusHistory->CssClass = 'datagrid';
			$this->dtgOrderStatusHistory->AlternateRowStyle->CssClass = 'alternate';

			$this->objOrderStatusHistoryPaginator = new QPaginator($this->dtgOrderStatusHistory);
			$this->dtgOrderStatusHistory->Paginator = $this->objOrderStatusHistoryPaginator;
			$this->dtgOrderStatusHistory->ItemsPerPage = 4;

			$this->dtgOrderStatusHistory->MetaAddColumn('Date');
			$this->dtgOrderStatusHistory->MetaAddTypeColumn('StatusId', 'OrderStatusType');
			$this->dtgOrderStatusHistory->MetaAddColumn('Notes');

			$this->objOrderTotalsController = new OrderTotalsController($this, $this->objOrder, false);

			$this->objShippingAddressController = new AddressController($this,
																							  $this->objOrder->GetShippingAddress()->Id,
																							  'ShippingAddress: ');
			$this->objShippingAddressController->CssClass = 'ShippingAddressReview';
			$this->objShippingAddressController->AutoRenderChildren = true;

			$this->objBillingAddressController = new AddressController($this,
																							$this->objOrder->GetBillingAddress()->Id,
																							'BillingAddress: ');
			$this->objBillingAddressController->CssClass = 'BillingAddressReview';
			$this->objBillingAddressController->AutoRenderChildren = true;

			if($this->objOrder->PaymentMethodId){
				$objPaymentMethod = PaymentMethod::LoadById( $this->objOrder->PaymentMethodId );

				$this->pnlPaymentMethod = new QPanel($this);
				$this->pnlPaymentMethod->HtmlEntities = false;
				$this->pnlPaymentMethod->CssClass = 'PaymentMethodReview';
				$this->pnlPaymentMethod->AutoRenderChildren = true;

				$strText =  '<div class="heading">' . Quinta::Translate('Payment Method') . ':</div>'
								.  sprintf( '<div class="heading"> %s </div> <br /> %s ',
																		$objPaymentMethod->Title,
																		$objPaymentMethod->Description
																	);
				$this->pnlPaymentMethod->Text = $strText;
			}

			if($this->objOrder->ShippingMethodId){
				$objShippingMethod = ShippingMethod::LoadById( $this->objOrder->ShippingMethodId );

				$this->pnlShippingMethod = new QPanel($this);
				$this->pnlShippingMethod->HtmlEntities = false;
				$this->pnlShippingMethod->CssClass = 'ShippingMethodReview';
				$this->pnlShippingMethod->AutoRenderChildren = true;

				$strText =  '<div class="heading">' . Quinta::Translate('Shipping Method') . ':</div>'
								.  sprintf( '<div class="heading"> %s </div> <br /> %s ',
																		$objShippingMethod->Title,
																		$objShippingMethod->Description
																	);
				$this->pnlShippingMethod->Text = $strText;
			}


			$this->btnBack = new QButton($this);
			$this->btnBack->Text = Quinta::Translate('Back');
			if(IndexPage::$blnAjaxOk)
				$this->btnBack->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnBack_Click'));
			else
				$this->btnBack->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnBack_Click'));

		}


		/**
		* This binds the OrderItemDatagrid data retrieval to this Order, the items listed in the Datagrid will be those
		* associated with this order in the database.
		*
		* If a paginator is set on this DataBinder, it will use it.  If not, then no pagination will be used.
		* It will also perform any sorting requested in by clicking on the column titles in the Datagrid.
		*/
		public function OrderItemsDataBinder(){
			if ($this->objOrderItemsPaginator)
				$this->dtgOrderItems->TotalItemCount = OrderItem::CountByOrderId($this->objOrder->Id) ;

			$objClauses = array();

			if ($objClause = $this->dtgOrderItems->OrderByClause)
				array_push($objClauses, $objClause);

			if ($objClause = $this->dtgOrderItems->LimitClause)
				array_push($objClauses, $objClause);

//            array_push($objClauses, QQ::OrderBy(QQN::Order()->CreationDate, false) );

			$this->dtgOrderItems->DataSource = OrderItem::LoadArrayByOrderId($this->objOrder->Id, $objClauses);
		}

		/**
		* This binds the OrderStatusHistoryDatagrid data retrieval to this Order, the items listed in the Datagrid will be those
		* associated with this order in the database.
		*
		* If a paginator is set on this DataBinder, it will use it.  If not, then no pagination will be used.
		* It will also perform any sorting requested in by clicking on the column titles in the Datagrid.
		*/
		public function OrderStatusHistoryDataBinder(){
			if ($this->objOrderStatusHistoryPaginator)
				$this->dtgOrderStatusHistory->TotalItemCount = OrderStatusHistory::CountByOrderId($this->objOrder->Id) ;

			$objClauses = array();

			if ($objClause = $this->dtgOrderStatusHistory->OrderByClause)
				array_push($objClauses, $objClause);

			if ($objClause = $this->dtgOrderStatusHistory->LimitClause)
				array_push($objClauses, $objClause);

			array_push($objClauses, QQ::OrderBy(QQN::OrderStatusHistory()->Date, false) );

			$this->dtgOrderStatusHistory->DataSource = OrderStatusHistory::LoadArrayByOrderId($this->objOrder->Id, $objClauses);
		}

		public function pxyProductName_Click($strFormId, $strControlId, $strParameters){
			$pos = strpos( $strParameters, ',' );
			$intProductId = substr( $strParameters, 0, $pos );

			Quinta::Redirect( __QUINTA_SUBDIRECTORY__ . '/index.php/Products/' . $intProductId );
		}

		public function btnBack_Click($strFormId, $strControlId, $strParameter){
			$this->CloseSelf(false);
		}

		protected function CloseSelf($blnChangesMade){
			$strMethod = $this->strClosePanelMethod;
			$this->objControlBlock->$strMethod($blnChangesMade);
		}
	}
?>