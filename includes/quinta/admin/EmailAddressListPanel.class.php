<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the EmailAddress class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of EmailAddress objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this EmailAddressListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 * 
	 * @package Quinta CMS
	 * @subpackage Drafts
	 * 
	 */
	class EmailAddressListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list EmailAddresses
		public $dtgEmailAddresses;

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
			$this->Template = 'EmailAddressListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgEmailAddresses = new EmailAddressDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgEmailAddresses->CssClass = 'datagrid';
			$this->dtgEmailAddresses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgEmailAddresses->Paginator = new QPaginator($this->dtgEmailAddresses);
			$this->dtgEmailAddresses->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgEmailAddresses->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for email_address's properties, or you
			// can traverse down QQN::email_address() to display fields that are down the hierarchy)
			$this->dtgEmailAddresses->MetaAddColumn('Id');
			$this->dtgEmailAddresses->MetaAddColumn('Url');
			$this->dtgEmailAddresses->MetaAddColumn(QQN::EmailAddress()->Person);
			$this->dtgEmailAddresses->MetaAddColumn('IsPrimary');

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('EmailAddress');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new EmailAddressEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new EmailAddressEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>