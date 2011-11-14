<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the OrderAddress class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single OrderAddress object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a OrderAddressMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read OrderAddress $OrderAddress the actual OrderAddress data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QListBox $OrderIdControl
     * property-read QLabel $OrderIdLabel
     * property QTextBox $NamePrefixControl
     * property-read QLabel $NamePrefixLabel
     * property QTextBox $FirstNameControl
     * property-read QLabel $FirstNameLabel
     * property QTextBox $MiddleNameControl
     * property-read QLabel $MiddleNameLabel
     * property QTextBox $LastNameControl
     * property-read QLabel $LastNameLabel
     * property QTextBox $NameSuffixControl
     * property-read QLabel $NameSuffixLabel
     * property QTextBox $CompanyControl
     * property-read QLabel $CompanyLabel
     * property QTextBox $Street1Control
     * property-read QLabel $Street1Label
     * property QTextBox $Street2Control
     * property-read QLabel $Street2Label
     * property QTextBox $SuburbControl
     * property-read QLabel $SuburbLabel
     * property QTextBox $CityControl
     * property-read QLabel $CityLabel
     * property QTextBox $CountyControl
     * property-read QLabel $CountyLabel
     * property QListBox $ZoneIdControl
     * property-read QLabel $ZoneIdLabel
     * property QListBox $CountryIdControl
     * property-read QLabel $CountryIdLabel
     * property QTextBox $PostalCodeControl
     * property-read QLabel $PostalCodeLabel
     * property QListBox $TypeIdControl
     * property-read QLabel $TypeIdLabel
     * property QLabel $CreationDateControl
     * property-read QLabel $CreationDateLabel
     * property QLabel $LastModificationControl
     * property-read QLabel $LastModificationLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class OrderAddressMetaControlGen extends QBaseClass {
        // General Variables
        protected $objOrderAddress;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of OrderAddress's individual data fields
        protected $lblId;
        protected $lstOrder;
        protected $txtNamePrefix;
        protected $txtFirstName;
        protected $txtMiddleName;
        protected $txtLastName;
        protected $txtNameSuffix;
        protected $txtCompany;
        protected $txtStreet1;
        protected $txtStreet2;
        protected $txtSuburb;
        protected $txtCity;
        protected $txtCounty;
        protected $lstZone;
        protected $lstCountry;
        protected $txtPostalCode;
        protected $lstType;
        protected $lblCreationDate;
        protected $lblLastModification;

        // Controls that allow the viewing of OrderAddress's individual data fields
        protected $lblOrderId;
        protected $lblNamePrefix;
        protected $lblFirstName;
        protected $lblMiddleName;
        protected $lblLastName;
        protected $lblNameSuffix;
        protected $lblCompany;
        protected $lblStreet1;
        protected $lblStreet2;
        protected $lblSuburb;
        protected $lblCity;
        protected $lblCounty;
        protected $lblZoneId;
        protected $lblCountryId;
        protected $lblPostalCode;
        protected $lblTypeId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * OrderAddressMetaControl to edit a single OrderAddress object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single OrderAddress object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderAddressMetaControl
         * @param OrderAddress $objOrderAddress new or existing OrderAddress object
         */
         public function __construct($objParentObject, OrderAddress $objOrderAddress) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this OrderAddressMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked OrderAddress object
            $this->objOrderAddress = $objOrderAddress;

            // Figure out if we're Editing or Creating New
            if ($this->objOrderAddress->__Restored) {
                $this->strTitleVerb = QApplication::Translate('Edit');
                $this->blnEditMode = true;
            } else {
                $this->strTitleVerb = QApplication::Translate('Create');
                $this->blnEditMode = false;
            }
         }

        /**
         * Static Helper Method to Create using PK arguments
         * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
         * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
         * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
         * edit, or if we are also allowed to create a new one, etc.
         * 
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderAddressMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing OrderAddress object creation - defaults to CreateOrEdit
         * @return OrderAddressMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objOrderAddress = OrderAddress::Load($intId);

                // OrderAddress was found -- return it!
                if ($objOrderAddress)
                    return new OrderAddressMetaControl($objParentObject, $objOrderAddress);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a OrderAddress object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new OrderAddressMetaControl($objParentObject, new OrderAddress());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderAddressMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing OrderAddress object creation - defaults to CreateOrEdit
         * @return OrderAddressMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return OrderAddressMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderAddressMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing OrderAddress object creation - defaults to CreateOrEdit
         * @return OrderAddressMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return OrderAddressMetaControl::Create($objParentObject, $intId, $intCreateType);
        }



        ///////////////////////////////////////////////
        // PUBLIC CREATE and REFRESH METHODS
        ///////////////////////////////////////////////

        /**
         * Create and setup QLabel lblId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblId_Create($strControlId = null) {
            $this->lblId = new QLabel($this->objParentObject, $strControlId);
            $this->lblId->Name = QApplication::Translate('Id');
            if ($this->blnEditMode)
                $this->lblId->Text = $this->objOrderAddress->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
        }

        /**
         * Create and setup QListBox lstOrder
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstOrder_Create($strControlId = null) {
            $this->lstOrder = new QListBox($this->objParentObject, $strControlId);
            $this->lstOrder->Name = QApplication::Translate('Order');
            $this->lstOrder->Required = true;
            if (!$this->blnEditMode)
                $this->lstOrder->AddItem(QApplication::Translate('- Select One -'), null);
            $objOrderArray = Order::LoadAll();
            if ($objOrderArray) foreach ($objOrderArray as $objOrder) {
                $objListItem = new QListItem($objOrder->__toString(), $objOrder->Id);
                if (($this->objOrderAddress->Order) && ($this->objOrderAddress->Order->Id == $objOrder->Id))
                    $objListItem->Selected = true;
                $this->lstOrder->AddItem($objListItem);
            }
            return $this->lstOrder;
        }

        /**
         * Create and setup QLabel lblOrderId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblOrderId_Create($strControlId = null) {
            $this->lblOrderId = new QLabel($this->objParentObject, $strControlId);
            $this->lblOrderId->Name = QApplication::Translate('Order');
            $this->lblOrderId->Text = ($this->objOrderAddress->Order) ? $this->objOrderAddress->Order->__toString() : null;
            $this->lblOrderId->Required = true;
            return $this->lblOrderId;
        }

        /**
         * Create and setup QTextBox txtNamePrefix
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtNamePrefix_Create($strControlId = null) {
            $this->txtNamePrefix = new QTextBox($this->objParentObject, $strControlId);
            $this->txtNamePrefix->Name = QApplication::Translate('Name Prefix');
            $this->txtNamePrefix->Text = $this->objOrderAddress->NamePrefix;
            $this->txtNamePrefix->MaxLength = OrderAddress::NamePrefixMaxLength;
            return $this->txtNamePrefix;
        }

        /**
         * Create and setup QLabel lblNamePrefix
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblNamePrefix_Create($strControlId = null) {
            $this->lblNamePrefix = new QLabel($this->objParentObject, $strControlId);
            $this->lblNamePrefix->Name = QApplication::Translate('Name Prefix');
            $this->lblNamePrefix->Text = $this->objOrderAddress->NamePrefix;
            return $this->lblNamePrefix;
        }

        /**
         * Create and setup QTextBox txtFirstName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtFirstName_Create($strControlId = null) {
            $this->txtFirstName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtFirstName->Name = QApplication::Translate('First Name');
            $this->txtFirstName->Text = $this->objOrderAddress->FirstName;
            $this->txtFirstName->MaxLength = OrderAddress::FirstNameMaxLength;
            return $this->txtFirstName;
        }

        /**
         * Create and setup QLabel lblFirstName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblFirstName_Create($strControlId = null) {
            $this->lblFirstName = new QLabel($this->objParentObject, $strControlId);
            $this->lblFirstName->Name = QApplication::Translate('First Name');
            $this->lblFirstName->Text = $this->objOrderAddress->FirstName;
            return $this->lblFirstName;
        }

        /**
         * Create and setup QTextBox txtMiddleName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtMiddleName_Create($strControlId = null) {
            $this->txtMiddleName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtMiddleName->Name = QApplication::Translate('Middle Name');
            $this->txtMiddleName->Text = $this->objOrderAddress->MiddleName;
            $this->txtMiddleName->MaxLength = OrderAddress::MiddleNameMaxLength;
            return $this->txtMiddleName;
        }

        /**
         * Create and setup QLabel lblMiddleName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblMiddleName_Create($strControlId = null) {
            $this->lblMiddleName = new QLabel($this->objParentObject, $strControlId);
            $this->lblMiddleName->Name = QApplication::Translate('Middle Name');
            $this->lblMiddleName->Text = $this->objOrderAddress->MiddleName;
            return $this->lblMiddleName;
        }

        /**
         * Create and setup QTextBox txtLastName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtLastName_Create($strControlId = null) {
            $this->txtLastName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtLastName->Name = QApplication::Translate('Last Name');
            $this->txtLastName->Text = $this->objOrderAddress->LastName;
            $this->txtLastName->MaxLength = OrderAddress::LastNameMaxLength;
            return $this->txtLastName;
        }

        /**
         * Create and setup QLabel lblLastName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblLastName_Create($strControlId = null) {
            $this->lblLastName = new QLabel($this->objParentObject, $strControlId);
            $this->lblLastName->Name = QApplication::Translate('Last Name');
            $this->lblLastName->Text = $this->objOrderAddress->LastName;
            return $this->lblLastName;
        }

        /**
         * Create and setup QTextBox txtNameSuffix
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtNameSuffix_Create($strControlId = null) {
            $this->txtNameSuffix = new QTextBox($this->objParentObject, $strControlId);
            $this->txtNameSuffix->Name = QApplication::Translate('Name Suffix');
            $this->txtNameSuffix->Text = $this->objOrderAddress->NameSuffix;
            $this->txtNameSuffix->MaxLength = OrderAddress::NameSuffixMaxLength;
            return $this->txtNameSuffix;
        }

        /**
         * Create and setup QLabel lblNameSuffix
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblNameSuffix_Create($strControlId = null) {
            $this->lblNameSuffix = new QLabel($this->objParentObject, $strControlId);
            $this->lblNameSuffix->Name = QApplication::Translate('Name Suffix');
            $this->lblNameSuffix->Text = $this->objOrderAddress->NameSuffix;
            return $this->lblNameSuffix;
        }

        /**
         * Create and setup QTextBox txtCompany
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCompany_Create($strControlId = null) {
            $this->txtCompany = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCompany->Name = QApplication::Translate('Company');
            $this->txtCompany->Text = $this->objOrderAddress->Company;
            $this->txtCompany->MaxLength = OrderAddress::CompanyMaxLength;
            return $this->txtCompany;
        }

        /**
         * Create and setup QLabel lblCompany
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCompany_Create($strControlId = null) {
            $this->lblCompany = new QLabel($this->objParentObject, $strControlId);
            $this->lblCompany->Name = QApplication::Translate('Company');
            $this->lblCompany->Text = $this->objOrderAddress->Company;
            return $this->lblCompany;
        }

        /**
         * Create and setup QTextBox txtStreet1
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtStreet1_Create($strControlId = null) {
            $this->txtStreet1 = new QTextBox($this->objParentObject, $strControlId);
            $this->txtStreet1->Name = QApplication::Translate('Street 1');
            $this->txtStreet1->Text = $this->objOrderAddress->Street1;
            $this->txtStreet1->MaxLength = OrderAddress::Street1MaxLength;
            return $this->txtStreet1;
        }

        /**
         * Create and setup QLabel lblStreet1
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblStreet1_Create($strControlId = null) {
            $this->lblStreet1 = new QLabel($this->objParentObject, $strControlId);
            $this->lblStreet1->Name = QApplication::Translate('Street 1');
            $this->lblStreet1->Text = $this->objOrderAddress->Street1;
            return $this->lblStreet1;
        }

        /**
         * Create and setup QTextBox txtStreet2
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtStreet2_Create($strControlId = null) {
            $this->txtStreet2 = new QTextBox($this->objParentObject, $strControlId);
            $this->txtStreet2->Name = QApplication::Translate('Street 2');
            $this->txtStreet2->Text = $this->objOrderAddress->Street2;
            $this->txtStreet2->MaxLength = OrderAddress::Street2MaxLength;
            return $this->txtStreet2;
        }

        /**
         * Create and setup QLabel lblStreet2
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblStreet2_Create($strControlId = null) {
            $this->lblStreet2 = new QLabel($this->objParentObject, $strControlId);
            $this->lblStreet2->Name = QApplication::Translate('Street 2');
            $this->lblStreet2->Text = $this->objOrderAddress->Street2;
            return $this->lblStreet2;
        }

        /**
         * Create and setup QTextBox txtSuburb
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtSuburb_Create($strControlId = null) {
            $this->txtSuburb = new QTextBox($this->objParentObject, $strControlId);
            $this->txtSuburb->Name = QApplication::Translate('Suburb');
            $this->txtSuburb->Text = $this->objOrderAddress->Suburb;
            $this->txtSuburb->MaxLength = OrderAddress::SuburbMaxLength;
            return $this->txtSuburb;
        }

        /**
         * Create and setup QLabel lblSuburb
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblSuburb_Create($strControlId = null) {
            $this->lblSuburb = new QLabel($this->objParentObject, $strControlId);
            $this->lblSuburb->Name = QApplication::Translate('Suburb');
            $this->lblSuburb->Text = $this->objOrderAddress->Suburb;
            return $this->lblSuburb;
        }

        /**
         * Create and setup QTextBox txtCity
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCity_Create($strControlId = null) {
            $this->txtCity = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCity->Name = QApplication::Translate('City');
            $this->txtCity->Text = $this->objOrderAddress->City;
            $this->txtCity->MaxLength = OrderAddress::CityMaxLength;
            return $this->txtCity;
        }

        /**
         * Create and setup QLabel lblCity
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCity_Create($strControlId = null) {
            $this->lblCity = new QLabel($this->objParentObject, $strControlId);
            $this->lblCity->Name = QApplication::Translate('City');
            $this->lblCity->Text = $this->objOrderAddress->City;
            return $this->lblCity;
        }

        /**
         * Create and setup QTextBox txtCounty
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCounty_Create($strControlId = null) {
            $this->txtCounty = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCounty->Name = QApplication::Translate('County');
            $this->txtCounty->Text = $this->objOrderAddress->County;
            $this->txtCounty->MaxLength = OrderAddress::CountyMaxLength;
            return $this->txtCounty;
        }

        /**
         * Create and setup QLabel lblCounty
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCounty_Create($strControlId = null) {
            $this->lblCounty = new QLabel($this->objParentObject, $strControlId);
            $this->lblCounty->Name = QApplication::Translate('County');
            $this->lblCounty->Text = $this->objOrderAddress->County;
            return $this->lblCounty;
        }

        /**
         * Create and setup QListBox lstZone
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstZone_Create($strControlId = null) {
            $this->lstZone = new QListBox($this->objParentObject, $strControlId);
            $this->lstZone->Name = QApplication::Translate('Zone');
            $this->lstZone->Required = true;
            foreach (ZoneType::$NameArray as $intId => $strValue)
                $this->lstZone->AddItem(new QListItem($strValue, $intId, $this->objOrderAddress->ZoneId == $intId));
            return $this->lstZone;
        }

        /**
         * Create and setup QLabel lblZoneId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblZoneId_Create($strControlId = null) {
            $this->lblZoneId = new QLabel($this->objParentObject, $strControlId);
            $this->lblZoneId->Name = QApplication::Translate('Zone');
            $this->lblZoneId->Text = ($this->objOrderAddress->ZoneId) ? ZoneType::$NameArray[$this->objOrderAddress->ZoneId] : null;
            $this->lblZoneId->Required = true;
            return $this->lblZoneId;
        }

        /**
         * Create and setup QListBox lstCountry
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstCountry_Create($strControlId = null) {
            $this->lstCountry = new QListBox($this->objParentObject, $strControlId);
            $this->lstCountry->Name = QApplication::Translate('Country');
            $this->lstCountry->Required = true;
            foreach (CountryType::$NameArray as $intId => $strValue)
                $this->lstCountry->AddItem(new QListItem($strValue, $intId, $this->objOrderAddress->CountryId == $intId));
            return $this->lstCountry;
        }

        /**
         * Create and setup QLabel lblCountryId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCountryId_Create($strControlId = null) {
            $this->lblCountryId = new QLabel($this->objParentObject, $strControlId);
            $this->lblCountryId->Name = QApplication::Translate('Country');
            $this->lblCountryId->Text = ($this->objOrderAddress->CountryId) ? CountryType::$NameArray[$this->objOrderAddress->CountryId] : null;
            $this->lblCountryId->Required = true;
            return $this->lblCountryId;
        }

        /**
         * Create and setup QTextBox txtPostalCode
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtPostalCode_Create($strControlId = null) {
            $this->txtPostalCode = new QTextBox($this->objParentObject, $strControlId);
            $this->txtPostalCode->Name = QApplication::Translate('Postal Code');
            $this->txtPostalCode->Text = $this->objOrderAddress->PostalCode;
            $this->txtPostalCode->MaxLength = OrderAddress::PostalCodeMaxLength;
            return $this->txtPostalCode;
        }

        /**
         * Create and setup QLabel lblPostalCode
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblPostalCode_Create($strControlId = null) {
            $this->lblPostalCode = new QLabel($this->objParentObject, $strControlId);
            $this->lblPostalCode->Name = QApplication::Translate('Postal Code');
            $this->lblPostalCode->Text = $this->objOrderAddress->PostalCode;
            return $this->lblPostalCode;
        }

        /**
         * Create and setup QListBox lstType
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstType_Create($strControlId = null) {
            $this->lstType = new QListBox($this->objParentObject, $strControlId);
            $this->lstType->Name = QApplication::Translate('Type');
            $this->lstType->Required = true;
            foreach (OrderAddressType::$NameArray as $intId => $strValue)
                $this->lstType->AddItem(new QListItem($strValue, $intId, $this->objOrderAddress->TypeId == $intId));
            return $this->lstType;
        }

        /**
         * Create and setup QLabel lblTypeId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblTypeId_Create($strControlId = null) {
            $this->lblTypeId = new QLabel($this->objParentObject, $strControlId);
            $this->lblTypeId->Name = QApplication::Translate('Type');
            $this->lblTypeId->Text = ($this->objOrderAddress->TypeId) ? OrderAddressType::$NameArray[$this->objOrderAddress->TypeId] : null;
            $this->lblTypeId->Required = true;
            return $this->lblTypeId;
        }

        /**
         * Create and setup QLabel lblCreationDate
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCreationDate_Create($strControlId = null) {
            $this->lblCreationDate = new QLabel($this->objParentObject, $strControlId);
            $this->lblCreationDate->Name = QApplication::Translate('Creation Date');
            if ($this->blnEditMode)
                $this->lblCreationDate->Text = $this->objOrderAddress->CreationDate;
            else
                $this->lblCreationDate->Text = 'N/A';
            return $this->lblCreationDate;
        }

        /**
         * Create and setup QLabel lblLastModification
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblLastModification_Create($strControlId = null) {
            $this->lblLastModification = new QLabel($this->objParentObject, $strControlId);
            $this->lblLastModification->Name = QApplication::Translate('Last Modification');
            if ($this->blnEditMode)
                $this->lblLastModification->Text = $this->objOrderAddress->LastModification;
            else
                $this->lblLastModification->Text = 'N/A';
            return $this->lblLastModification;
        }



        /**
         * Refresh this MetaControl with Data from the local OrderAddress object.
         * @param boolean $blnReload reload OrderAddress from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objOrderAddress->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objOrderAddress->Id;

            if ($this->lstOrder) {
                    $this->lstOrder->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstOrder->AddItem(QApplication::Translate('- Select One -'), null);
                $objOrderArray = Order::LoadAll();
                if ($objOrderArray) foreach ($objOrderArray as $objOrder) {
                    $objListItem = new QListItem($objOrder->__toString(), $objOrder->Id);
                    if (($this->objOrderAddress->Order) && ($this->objOrderAddress->Order->Id == $objOrder->Id))
                        $objListItem->Selected = true;
                    $this->lstOrder->AddItem($objListItem);
                }
            }
            if ($this->lblOrderId) $this->lblOrderId->Text = ($this->objOrderAddress->Order) ? $this->objOrderAddress->Order->__toString() : null;

            if ($this->txtNamePrefix) $this->txtNamePrefix->Text = $this->objOrderAddress->NamePrefix;
            if ($this->lblNamePrefix) $this->lblNamePrefix->Text = $this->objOrderAddress->NamePrefix;

            if ($this->txtFirstName) $this->txtFirstName->Text = $this->objOrderAddress->FirstName;
            if ($this->lblFirstName) $this->lblFirstName->Text = $this->objOrderAddress->FirstName;

            if ($this->txtMiddleName) $this->txtMiddleName->Text = $this->objOrderAddress->MiddleName;
            if ($this->lblMiddleName) $this->lblMiddleName->Text = $this->objOrderAddress->MiddleName;

            if ($this->txtLastName) $this->txtLastName->Text = $this->objOrderAddress->LastName;
            if ($this->lblLastName) $this->lblLastName->Text = $this->objOrderAddress->LastName;

            if ($this->txtNameSuffix) $this->txtNameSuffix->Text = $this->objOrderAddress->NameSuffix;
            if ($this->lblNameSuffix) $this->lblNameSuffix->Text = $this->objOrderAddress->NameSuffix;

            if ($this->txtCompany) $this->txtCompany->Text = $this->objOrderAddress->Company;
            if ($this->lblCompany) $this->lblCompany->Text = $this->objOrderAddress->Company;

            if ($this->txtStreet1) $this->txtStreet1->Text = $this->objOrderAddress->Street1;
            if ($this->lblStreet1) $this->lblStreet1->Text = $this->objOrderAddress->Street1;

            if ($this->txtStreet2) $this->txtStreet2->Text = $this->objOrderAddress->Street2;
            if ($this->lblStreet2) $this->lblStreet2->Text = $this->objOrderAddress->Street2;

            if ($this->txtSuburb) $this->txtSuburb->Text = $this->objOrderAddress->Suburb;
            if ($this->lblSuburb) $this->lblSuburb->Text = $this->objOrderAddress->Suburb;

            if ($this->txtCity) $this->txtCity->Text = $this->objOrderAddress->City;
            if ($this->lblCity) $this->lblCity->Text = $this->objOrderAddress->City;

            if ($this->txtCounty) $this->txtCounty->Text = $this->objOrderAddress->County;
            if ($this->lblCounty) $this->lblCounty->Text = $this->objOrderAddress->County;

            if ($this->lstZone) $this->lstZone->SelectedValue = $this->objOrderAddress->ZoneId;
            if ($this->lblZoneId) $this->lblZoneId->Text = ($this->objOrderAddress->ZoneId) ? ZoneType::$NameArray[$this->objOrderAddress->ZoneId] : null;

            if ($this->lstCountry) $this->lstCountry->SelectedValue = $this->objOrderAddress->CountryId;
            if ($this->lblCountryId) $this->lblCountryId->Text = ($this->objOrderAddress->CountryId) ? CountryType::$NameArray[$this->objOrderAddress->CountryId] : null;

            if ($this->txtPostalCode) $this->txtPostalCode->Text = $this->objOrderAddress->PostalCode;
            if ($this->lblPostalCode) $this->lblPostalCode->Text = $this->objOrderAddress->PostalCode;

            if ($this->lstType) $this->lstType->SelectedValue = $this->objOrderAddress->TypeId;
            if ($this->lblTypeId) $this->lblTypeId->Text = ($this->objOrderAddress->TypeId) ? OrderAddressType::$NameArray[$this->objOrderAddress->TypeId] : null;

            if ($this->lblCreationDate) if ($this->blnEditMode) $this->lblCreationDate->Text = $this->objOrderAddress->CreationDate;

            if ($this->lblLastModification) if ($this->blnEditMode) $this->lblLastModification->Text = $this->objOrderAddress->LastModification;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC ORDERADDRESS OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's OrderAddress instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveOrderAddress() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstOrder) $this->objOrderAddress->OrderId = $this->lstOrder->SelectedValue;
                if ($this->txtNamePrefix) $this->objOrderAddress->NamePrefix = $this->txtNamePrefix->Text;
                if ($this->txtFirstName) $this->objOrderAddress->FirstName = $this->txtFirstName->Text;
                if ($this->txtMiddleName) $this->objOrderAddress->MiddleName = $this->txtMiddleName->Text;
                if ($this->txtLastName) $this->objOrderAddress->LastName = $this->txtLastName->Text;
                if ($this->txtNameSuffix) $this->objOrderAddress->NameSuffix = $this->txtNameSuffix->Text;
                if ($this->txtCompany) $this->objOrderAddress->Company = $this->txtCompany->Text;
                if ($this->txtStreet1) $this->objOrderAddress->Street1 = $this->txtStreet1->Text;
                if ($this->txtStreet2) $this->objOrderAddress->Street2 = $this->txtStreet2->Text;
                if ($this->txtSuburb) $this->objOrderAddress->Suburb = $this->txtSuburb->Text;
                if ($this->txtCity) $this->objOrderAddress->City = $this->txtCity->Text;
                if ($this->txtCounty) $this->objOrderAddress->County = $this->txtCounty->Text;
                if ($this->lstZone) $this->objOrderAddress->ZoneId = $this->lstZone->SelectedValue;
                if ($this->lstCountry) $this->objOrderAddress->CountryId = $this->lstCountry->SelectedValue;
                if ($this->txtPostalCode) $this->objOrderAddress->PostalCode = $this->txtPostalCode->Text;
                if ($this->lstType) $this->objOrderAddress->TypeId = $this->lstType->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the OrderAddress object
                $this->objOrderAddress->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's OrderAddress instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteOrderAddress() {
            $this->objOrderAddress->Delete();
        }       



        ///////////////////////////////////////////////
        // PUBLIC GETTERS and SETTERS
        ///////////////////////////////////////////////

        /**
         * Override method to perform a property "Get"
         * This will get the value of $strName
         *
         * @param string $strName Name of the property to get
         * @return mixed
         */
        public function __get($strName) {
            switch ($strName) {
                // General MetaControlVariables
                case 'OrderAddress': return $this->objOrderAddress;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to OrderAddress fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'OrderIdControl':
                    if (!$this->lstOrder) return $this->lstOrder_Create();
                    return $this->lstOrder;
                case 'OrderIdLabel':
                    if (!$this->lblOrderId) return $this->lblOrderId_Create();
                    return $this->lblOrderId;
                case 'NamePrefixControl':
                    if (!$this->txtNamePrefix) return $this->txtNamePrefix_Create();
                    return $this->txtNamePrefix;
                case 'NamePrefixLabel':
                    if (!$this->lblNamePrefix) return $this->lblNamePrefix_Create();
                    return $this->lblNamePrefix;
                case 'FirstNameControl':
                    if (!$this->txtFirstName) return $this->txtFirstName_Create();
                    return $this->txtFirstName;
                case 'FirstNameLabel':
                    if (!$this->lblFirstName) return $this->lblFirstName_Create();
                    return $this->lblFirstName;
                case 'MiddleNameControl':
                    if (!$this->txtMiddleName) return $this->txtMiddleName_Create();
                    return $this->txtMiddleName;
                case 'MiddleNameLabel':
                    if (!$this->lblMiddleName) return $this->lblMiddleName_Create();
                    return $this->lblMiddleName;
                case 'LastNameControl':
                    if (!$this->txtLastName) return $this->txtLastName_Create();
                    return $this->txtLastName;
                case 'LastNameLabel':
                    if (!$this->lblLastName) return $this->lblLastName_Create();
                    return $this->lblLastName;
                case 'NameSuffixControl':
                    if (!$this->txtNameSuffix) return $this->txtNameSuffix_Create();
                    return $this->txtNameSuffix;
                case 'NameSuffixLabel':
                    if (!$this->lblNameSuffix) return $this->lblNameSuffix_Create();
                    return $this->lblNameSuffix;
                case 'CompanyControl':
                    if (!$this->txtCompany) return $this->txtCompany_Create();
                    return $this->txtCompany;
                case 'CompanyLabel':
                    if (!$this->lblCompany) return $this->lblCompany_Create();
                    return $this->lblCompany;
                case 'Street1Control':
                    if (!$this->txtStreet1) return $this->txtStreet1_Create();
                    return $this->txtStreet1;
                case 'Street1Label':
                    if (!$this->lblStreet1) return $this->lblStreet1_Create();
                    return $this->lblStreet1;
                case 'Street2Control':
                    if (!$this->txtStreet2) return $this->txtStreet2_Create();
                    return $this->txtStreet2;
                case 'Street2Label':
                    if (!$this->lblStreet2) return $this->lblStreet2_Create();
                    return $this->lblStreet2;
                case 'SuburbControl':
                    if (!$this->txtSuburb) return $this->txtSuburb_Create();
                    return $this->txtSuburb;
                case 'SuburbLabel':
                    if (!$this->lblSuburb) return $this->lblSuburb_Create();
                    return $this->lblSuburb;
                case 'CityControl':
                    if (!$this->txtCity) return $this->txtCity_Create();
                    return $this->txtCity;
                case 'CityLabel':
                    if (!$this->lblCity) return $this->lblCity_Create();
                    return $this->lblCity;
                case 'CountyControl':
                    if (!$this->txtCounty) return $this->txtCounty_Create();
                    return $this->txtCounty;
                case 'CountyLabel':
                    if (!$this->lblCounty) return $this->lblCounty_Create();
                    return $this->lblCounty;
                case 'ZoneIdControl':
                    if (!$this->lstZone) return $this->lstZone_Create();
                    return $this->lstZone;
                case 'ZoneIdLabel':
                    if (!$this->lblZoneId) return $this->lblZoneId_Create();
                    return $this->lblZoneId;
                case 'CountryIdControl':
                    if (!$this->lstCountry) return $this->lstCountry_Create();
                    return $this->lstCountry;
                case 'CountryIdLabel':
                    if (!$this->lblCountryId) return $this->lblCountryId_Create();
                    return $this->lblCountryId;
                case 'PostalCodeControl':
                    if (!$this->txtPostalCode) return $this->txtPostalCode_Create();
                    return $this->txtPostalCode;
                case 'PostalCodeLabel':
                    if (!$this->lblPostalCode) return $this->lblPostalCode_Create();
                    return $this->lblPostalCode;
                case 'TypeIdControl':
                    if (!$this->lstType) return $this->lstType_Create();
                    return $this->lstType;
                case 'TypeIdLabel':
                    if (!$this->lblTypeId) return $this->lblTypeId_Create();
                    return $this->lblTypeId;
                case 'CreationDateControl':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'CreationDateLabel':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'LastModificationControl':
                    if (!$this->lblLastModification) return $this->lblLastModification_Create();
                    return $this->lblLastModification;
                case 'LastModificationLabel':
                    if (!$this->lblLastModification) return $this->lblLastModification_Create();
                    return $this->lblLastModification;
                default:
                    try {
                        return parent::__get($strName);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

        /**
         * Override method to perform a property "Set"
         * This will set the property $strName to be $mixValue
         *
         * @param string $strName Name of the property to set
         * @param string $mixValue New value of the property
         * @return mixed
         */
        public function __set($strName, $mixValue) {
            try {
                switch ($strName) {
                    // Controls that point to OrderAddress fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'OrderIdControl':
                        return ($this->lstOrder = QType::Cast($mixValue, 'QControl'));
                    case 'NamePrefixControl':
                        return ($this->txtNamePrefix = QType::Cast($mixValue, 'QControl'));
                    case 'FirstNameControl':
                        return ($this->txtFirstName = QType::Cast($mixValue, 'QControl'));
                    case 'MiddleNameControl':
                        return ($this->txtMiddleName = QType::Cast($mixValue, 'QControl'));
                    case 'LastNameControl':
                        return ($this->txtLastName = QType::Cast($mixValue, 'QControl'));
                    case 'NameSuffixControl':
                        return ($this->txtNameSuffix = QType::Cast($mixValue, 'QControl'));
                    case 'CompanyControl':
                        return ($this->txtCompany = QType::Cast($mixValue, 'QControl'));
                    case 'Street1Control':
                        return ($this->txtStreet1 = QType::Cast($mixValue, 'QControl'));
                    case 'Street2Control':
                        return ($this->txtStreet2 = QType::Cast($mixValue, 'QControl'));
                    case 'SuburbControl':
                        return ($this->txtSuburb = QType::Cast($mixValue, 'QControl'));
                    case 'CityControl':
                        return ($this->txtCity = QType::Cast($mixValue, 'QControl'));
                    case 'CountyControl':
                        return ($this->txtCounty = QType::Cast($mixValue, 'QControl'));
                    case 'ZoneIdControl':
                        return ($this->lstZone = QType::Cast($mixValue, 'QControl'));
                    case 'CountryIdControl':
                        return ($this->lstCountry = QType::Cast($mixValue, 'QControl'));
                    case 'PostalCodeControl':
                        return ($this->txtPostalCode = QType::Cast($mixValue, 'QControl'));
                    case 'TypeIdControl':
                        return ($this->lstType = QType::Cast($mixValue, 'QControl'));
                    case 'CreationDateControl':
                        return ($this->lblCreationDate = QType::Cast($mixValue, 'QControl'));
                    case 'LastModificationControl':
                        return ($this->lblLastModification = QType::Cast($mixValue, 'QControl'));
                    default:
                        return parent::__set($strName, $mixValue);
                }
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }
    }
?>