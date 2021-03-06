<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("ADDRESSSELECTIONMODULE.CLASS.PHP")){
define("ADDRESSSELECTIONMODULE.CLASS.PHP",1);
	/**
	* AddressSelectionModule - provides a panel for selecting an address
	* This panel also offers options in the selection to add or edit an address. When the "Add" option
	* is selected in the dropdown list, the fields are converted to text boxes and the save button
	* appears. If the "Edit" option is selected the text boxes will contain the currently displayed
	* values for modification.
	*    
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.3
	*
	* @package Quinta
	* @subpackage Modules
	*/
	class AddressSelectionModule extends QPanel{
		// Local instance of the AddressMetaControl
		protected $mctAddress;

		protected $objAddress;
		
		protected $objControlBlock;
		
		protected $objAccount;
		
		protected $blnModifiable;
		
		protected $intCurrentAddressId;
		
		protected $strRefreshAddressCallback;

		public $lstMyAddresses;
		
		// Controls that allow the viewing of Address's individual data fields
		public $lblTitle;
		public $lblPersonId;
		public $lblStreet1;
		public $lblStreet2;
		public $lblSuburb;
		public $lblCity;
		public $lblCounty;
		public $lblZoneId;
		public $lblCountryId;
		public $lblPostalCode;
		public $lblIsCurrent;
		public $lblTypeId;
		// Controls that allow the editing of Address's individual data fields
		public $txtTitle;
		public $lstMyPeople;
		public $txtStreet1;
		public $txtStreet2;
		public $txtSuburb;
		public $txtCity;
		public $txtCounty;
		public $lstZone;
		public $lstCountry;
		public $txtPostalCode;
		public $lstType;

		public $btnSave;
		public $btnCancel;

		public $objWaitIcon;
		
		public function __construct($objControlBlock,
														$strRefreshAddressCallback,
														$intAddressId = null,
														$blnModifiable = false,
														$strControlId = null)
		{
			try {
				parent::__construct($objControlBlock, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->objAccount =& IndexPage::$objAccount;
					  
			$this->objControlBlock =& $objControlBlock;
			
			$this->intCurrentAddressId = $intAddressId;
			
			$this->blnModifiable = $blnModifiable;
			
			$this->strRefreshAddressCallback = $strRefreshAddressCallback;
			
			$this->strTemplate = __QUINTA_CORE_VIEWS__ .  '/AddressSelectionModule.tpl.php';

			$this->mctAddress = AddressMetaControl::Create($this, $intAddressId);
			
			$this->objAddress =& $this->mctAddress->Address;
			
			$this->objWaitIcon = new QWaitIcon($this);

			$this->init($intAddressId, $blnModifiable);

		}
		public function init( $intAddressId, $blnModifiable){
			if( $blnModifiable || ! $intAddressId){
				$this->txtTitle = $this->mctAddress->txtTitle_Create();
				$this->lstMyPeople = $this->mctAddress->lstMyPeople_Create($this->objAccount->PersonId);
				$this->lstMyPeople->Name = Quinta::Translate('Address for') . ' :';
				$this->txtStreet1 = $this->mctAddress->txtStreet1_Create();
				$this->txtStreet1->Name = Quinta::Translate('Street') . ' :';
				$this->txtStreet2 = $this->mctAddress->txtStreet2_Create();
				$this->txtStreet2->Name = Quinta::Translate('Street 2 or Apt') . '.# :';
				$this->txtSuburb = $this->mctAddress->txtSuburb_Create();
				$this->txtSuburb->Name = Quinta::Translate('Suburb') . ' :';
				$this->txtCity = $this->mctAddress->txtCity_Create();
				$this->txtCity->Name = Quinta::Translate('City') . ' :';
				$this->txtCounty = $this->mctAddress->txtCounty_Create();
				$this->txtCounty->Name = Quinta::Translate('County/District') . ' :';
				$this->lstZone = $this->mctAddress->lstZone_Create();
				$this->lstZone->Name = Quinta::Translate('State/Province') . ' :';
				$this->lstCountry = $this->mctAddress->lstCountry_Create();
				$this->lstCountry->Name = Quinta::Translate('Country') . ' :';
				$this->txtPostalCode = $this->mctAddress->txtPostalCode_Create();
				$this->txtPostalCode->Name = Quinta::Translate('Zip/Postal Code') . ' :';
				$this->lstType = $this->mctAddress->lstType_Create();
				$this->lstType->Name = Quinta::Translate('Type of Address') . ' :';
				
				//create buttons to save modifications ..
				$this->btnSave = new QButton($this);
				$this->btnSave->Text = QApplication::Translate('Save');
				if(IndexPage::$blnAjaxOk)
					$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click', $this->objWaitIcon));
				else
					$this->btnSave->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSave_Click', $this->objWaitIcon));
				$this->btnSave->CausesValidation = $this;

				$this->btnCancel = new QButton($this);
				$this->btnCancel->Text = QApplication::Translate('Cancel');
				if(IndexPage::$blnAjaxOk)
					$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click', $this->objWaitIcon));
				else
					$this->btnCancel->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnCancel_Click', $this->objWaitIcon));
			}else{
				$this->lstMyAddresses = $this->mctAddress->lstMyAddresses_Create($this->objAccount);
				
				$this->lstMyAddresses->AddItem('Edit','Edit');
				$this->lstMyAddresses->AddItem('New','New');
				
				if(IndexPage::$blnAjaxOk)
					$this->lstMyAddresses->AddAction(new QChangeEvent(), new QAjaxControlAction($this, 'lstMyAddresses_Selected', $this->objWaitIcon) );
				else
					$this->lstMyAddresses->AddAction(new QChangeEvent(), new QServerControlAction($this, 'lstMyAddresses_Selected', $this->objWaitIcon) );
				$this->lstMyAddresses->ActionParameter = $intAddressId;
				
				$this->lblPersonId = $this->mctAddress->lblPersonId_Create();
				$this->lblPersonId->Name = Quinta::Translate('Address for') . ' :';
				$this->lblStreet1 = $this->mctAddress->lblStreet1_Create();
				$this->lblStreet1->Name = Quinta::Translate('Street') . ' :';
				$this->lblStreet2 = $this->mctAddress->lblStreet2_Create();
				$this->lblStreet2->Name = Quinta::Translate('Street 2 or Apt') . '.# :';
				$this->lblSuburb = $this->mctAddress->lblSuburb_Create();
				$this->lblSuburb->Name = Quinta::Translate('Suburb') . ' :';
				$this->lblCity = $this->mctAddress->lblCity_Create();
				$this->lblCity->Name = Quinta::Translate('City') . ' :';
				$this->lblCounty = $this->mctAddress->lblCounty_Create();
				$this->lblCounty->Name = Quinta::Translate('County/District') . ' :';
				$this->lblZoneId = $this->mctAddress->lblZoneId_Create();
				$this->lblZoneId->Name = Quinta::Translate('State/Province') . ' :';
				$this->lblCountryId = $this->mctAddress->lblCountryId_Create();
				$this->lblCountryId->Name = Quinta::Translate('Country') . ' :';
				$this->lblPostalCode = $this->mctAddress->lblPostalCode_Create();
				$this->lblPostalCode->Name = Quinta::Translate('Zip/Postal Code') . ' :';
				$this->lblTypeId = $this->mctAddress->lblTypeId_Create();
				$this->lblTypeId->Name = Quinta::Translate('Type of Address') . ' :';
			}
		}
		/**
		* This function is called when the user selects an Item from the address list. The parameter that
		* passed is the id of the origianally displayed address. The selected address is obtained directly
		* from the listbox and objAddress is set to be this address before issueing the callback.
		*/     
		public function lstMyAddresses_Selected($strFormId, $strControlId, $intAddressId){                
			$strCallback = $this->strRefreshAddressCallback;
			$strAction = $this->lstMyAddresses->SelectedValue;
			
			if(! is_numeric($strAction) )
				$this->objControlBlock->$strCallback($this->intCurrentAddressId, $strAction);
			else{
				$objAddress = Address::Load($strAction);
				if($objAddress instanceof Address)
					$this->objAddress = $objAddress;
				$this->objControlBlock->$strCallback($strAction);
			}
		}
		
		public function btnSave_Click($strFormId, $strControlId, $strParameter){
			$strCallback = $this->strRefreshAddressCallback;
			$this->mctAddress->SaveAddress();
			$this->objAddress = $this->mctAddress->Address;
			$this->objControlBlock->$strCallback($this->mctAddress->Address->Id, 'Save');
		}

		public function btnCancel_Click($strFormId, $strControlId, $intAddressId){
			$strCallback = $this->strRefreshAddressCallback;
			$this->objControlBlock->$strCallback($this->intCurrentAddressId);
		}

		public function __get($strName){
			switch ($strName){
				case 'Modifiable':
					return $this->blnModifiable;
				case 'Address':
					return $this->objAddress;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}//end class
 }//end define   
?>