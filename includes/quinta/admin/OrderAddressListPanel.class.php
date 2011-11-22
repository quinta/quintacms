<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the OrderAddress class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of OrderAddress objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this OrderAddressListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package Quinta CMS
	 * @subpackage AdminUI
	 * 
	 */
	class OrderAddressListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list OrderAddresses
		public $dtgOrderAddresses;

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
			$this->Template = 'OrderAddressListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgOrderAddresses = new OrderAddressDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgOrderAddresses->CssClass = 'datagrid';
			$this->dtgOrderAddresses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgOrderAddresses->Paginator = new QPaginator($this->dtgOrderAddresses);
			$this->dtgOrderAddresses->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgOrderAddresses->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for order_address's properties, or you
			// can traverse down QQN::order_address() to display fields that are down the hierarchy)
			$this->dtgOrderAddresses->MetaAddColumn('Id');
			$this->dtgOrderAddresses->MetaAddColumn(QQN::OrderAddress()->Order);
			$this->dtgOrderAddresses->MetaAddColumn('NamePrefix');
			$this->dtgOrderAddresses->MetaAddColumn('FirstName');
			$this->dtgOrderAddresses->MetaAddColumn('MiddleName');
			$this->dtgOrderAddresses->MetaAddColumn('LastName');
			$this->dtgOrderAddresses->MetaAddColumn('NameSuffix');
			$this->dtgOrderAddresses->MetaAddColumn('Company');
			$this->dtgOrderAddresses->MetaAddColumn('Street1');
			$this->dtgOrderAddresses->MetaAddColumn('Street2');
			$this->dtgOrderAddresses->MetaAddColumn('Suburb');
			$this->dtgOrderAddresses->MetaAddColumn('City');
			$this->dtgOrderAddresses->MetaAddColumn('County');
			$this->dtgOrderAddresses->MetaAddTypeColumn('ZoneId', 'ZoneType');
			$this->dtgOrderAddresses->MetaAddTypeColumn('CountryId', 'CountryType');
			$this->dtgOrderAddresses->MetaAddColumn('PostalCode');
			$this->dtgOrderAddresses->MetaAddTypeColumn('TypeId', 'OrderAddressType');
			$this->dtgOrderAddresses->MetaAddColumn('CreationDate');
			$this->dtgOrderAddresses->MetaAddColumn('LastModification');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('OrderAddress');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new OrderAddressEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new OrderAddressEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>