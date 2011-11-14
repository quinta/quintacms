<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the Address class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single Address object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a AddressMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read Address $Address the actual Address data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $TitleControl
     * property-read QLabel $TitleLabel
     * property QListBox $PersonIdControl
     * property-read QLabel $PersonIdLabel
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
     * property QCheckBox $IsCurrentControl
     * property-read QLabel $IsCurrentLabel
     * property QListBox $TypeIdControl
     * property-read QLabel $TypeIdLabel
     * property QLabel $CreationDateControl
     * property-read QLabel $CreationDateLabel
     * property QLabel $LastModificationControl
     * property-read QLabel $LastModificationLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class AddressMetaControlGen extends QBaseClass {
        // General Variables
        protected $objAddress;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of Address's individual data fields
        protected $lblId;
        protected $txtTitle;
        protected $lstPerson;
        protected $txtStreet1;
        protected $txtStreet2;
        protected $txtSuburb;
        protected $txtCity;
        protected $txtCounty;
        protected $lstZone;
        protected $lstCountry;
        protected $txtPostalCode;
        protected $chkIsCurrent;
        protected $lstType;
        protected $lblCreationDate;
        protected $lblLastModification;

        // Controls that allow the viewing of Address's individual data fields
        protected $lblTitle;
        protected $lblPersonId;
        protected $lblStreet1;
        protected $lblStreet2;
        protected $lblSuburb;
        protected $lblCity;
        protected $lblCounty;
        protected $lblZoneId;
        protected $lblCountryId;
        protected $lblPostalCode;
        protected $lblIsCurrent;
        protected $lblTypeId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * AddressMetaControl to edit a single Address object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single Address object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this AddressMetaControl
         * @param Address $objAddress new or existing Address object
         */
         public function __construct($objParentObject, Address $objAddress) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this AddressMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked Address object
            $this->objAddress = $objAddress;

            // Figure out if we're Editing or Creating New
            if ($this->objAddress->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this AddressMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing Address object creation - defaults to CreateOrEdit
         * @return AddressMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objAddress = Address::Load($intId);

                // Address was found -- return it!
                if ($objAddress)
                    return new AddressMetaControl($objParentObject, $objAddress);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a Address object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new AddressMetaControl($objParentObject, new Address());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this AddressMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Address object creation - defaults to CreateOrEdit
         * @return AddressMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return AddressMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this AddressMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Address object creation - defaults to CreateOrEdit
         * @return AddressMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return AddressMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objAddress->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
        }

        /**
         * Create and setup QTextBox txtTitle
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtTitle_Create($strControlId = null) {
            $this->txtTitle = new QTextBox($this->objParentObject, $strControlId);
            $this->txtTitle->Name = QApplication::Translate('Title');
            $this->txtTitle->Text = $this->objAddress->Title;
            $this->txtTitle->MaxLength = Address::TitleMaxLength;
            return $this->txtTitle;
        }

        /**
         * Create and setup QLabel lblTitle
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblTitle_Create($strControlId = null) {
            $this->lblTitle = new QLabel($this->objParentObject, $strControlId);
            $this->lblTitle->Name = QApplication::Translate('Title');
            $this->lblTitle->Text = $this->objAddress->Title;
            return $this->lblTitle;
        }

        /**
         * Create and setup QListBox lstPerson
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstPerson_Create($strControlId = null) {
            $this->lstPerson = new QListBox($this->objParentObject, $strControlId);
            $this->lstPerson->Name = QApplication::Translate('Person');
            $this->lstPerson->Required = true;
            if (!$this->blnEditMode)
                $this->lstPerson->AddItem(QApplication::Translate('- Select One -'), null);
            $objPersonArray = Person::LoadAll();
            if ($objPersonArray) foreach ($objPersonArray as $objPerson) {
                $objListItem = new QListItem($objPerson->__toString(), $objPerson->Id);
                if (($this->objAddress->Person) && ($this->objAddress->Person->Id == $objPerson->Id))
                    $objListItem->Selected = true;
                $this->lstPerson->AddItem($objListItem);
            }
            return $this->lstPerson;
        }

        /**
         * Create and setup QLabel lblPersonId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblPersonId_Create($strControlId = null) {
            $this->lblPersonId = new QLabel($this->objParentObject, $strControlId);
            $this->lblPersonId->Name = QApplication::Translate('Person');
            $this->lblPersonId->Text = ($this->objAddress->Person) ? $this->objAddress->Person->__toString() : null;
            $this->lblPersonId->Required = true;
            return $this->lblPersonId;
        }

        /**
         * Create and setup QTextBox txtStreet1
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtStreet1_Create($strControlId = null) {
            $this->txtStreet1 = new QTextBox($this->objParentObject, $strControlId);
            $this->txtStreet1->Name = QApplication::Translate('Street 1');
            $this->txtStreet1->Text = $this->objAddress->Street1;
            $this->txtStreet1->MaxLength = Address::Street1MaxLength;
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
            $this->lblStreet1->Text = $this->objAddress->Street1;
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
            $this->txtStreet2->Text = $this->objAddress->Street2;
            $this->txtStreet2->MaxLength = Address::Street2MaxLength;
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
            $this->lblStreet2->Text = $this->objAddress->Street2;
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
            $this->txtSuburb->Text = $this->objAddress->Suburb;
            $this->txtSuburb->MaxLength = Address::SuburbMaxLength;
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
            $this->lblSuburb->Text = $this->objAddress->Suburb;
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
            $this->txtCity->Text = $this->objAddress->City;
            $this->txtCity->MaxLength = Address::CityMaxLength;
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
            $this->lblCity->Text = $this->objAddress->City;
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
            $this->txtCounty->Text = $this->objAddress->County;
            $this->txtCounty->MaxLength = Address::CountyMaxLength;
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
            $this->lblCounty->Text = $this->objAddress->County;
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
                $this->lstZone->AddItem(new QListItem($strValue, $intId, $this->objAddress->ZoneId == $intId));
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
            $this->lblZoneId->Text = ($this->objAddress->ZoneId) ? ZoneType::$NameArray[$this->objAddress->ZoneId] : null;
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
                $this->lstCountry->AddItem(new QListItem($strValue, $intId, $this->objAddress->CountryId == $intId));
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
            $this->lblCountryId->Text = ($this->objAddress->CountryId) ? CountryType::$NameArray[$this->objAddress->CountryId] : null;
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
            $this->txtPostalCode->Text = $this->objAddress->PostalCode;
            $this->txtPostalCode->MaxLength = Address::PostalCodeMaxLength;
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
            $this->lblPostalCode->Text = $this->objAddress->PostalCode;
            return $this->lblPostalCode;
        }

        /**
         * Create and setup QCheckBox chkIsCurrent
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkIsCurrent_Create($strControlId = null) {
            $this->chkIsCurrent = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkIsCurrent->Name = QApplication::Translate('Is Current');
            $this->chkIsCurrent->Checked = $this->objAddress->IsCurrent;
            return $this->chkIsCurrent;
        }

        /**
         * Create and setup QLabel lblIsCurrent
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblIsCurrent_Create($strControlId = null) {
            $this->lblIsCurrent = new QLabel($this->objParentObject, $strControlId);
            $this->lblIsCurrent->Name = QApplication::Translate('Is Current');
            $this->lblIsCurrent->Text = ($this->objAddress->IsCurrent) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblIsCurrent;
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
            foreach (AddressType::$NameArray as $intId => $strValue)
                $this->lstType->AddItem(new QListItem($strValue, $intId, $this->objAddress->TypeId == $intId));
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
            $this->lblTypeId->Text = ($this->objAddress->TypeId) ? AddressType::$NameArray[$this->objAddress->TypeId] : null;
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
                $this->lblCreationDate->Text = $this->objAddress->CreationDate;
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
                $this->lblLastModification->Text = $this->objAddress->LastModification;
            else
                $this->lblLastModification->Text = 'N/A';
            return $this->lblLastModification;
        }



        /**
         * Refresh this MetaControl with Data from the local Address object.
         * @param boolean $blnReload reload Address from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objAddress->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objAddress->Id;

            if ($this->txtTitle) $this->txtTitle->Text = $this->objAddress->Title;
            if ($this->lblTitle) $this->lblTitle->Text = $this->objAddress->Title;

            if ($this->lstPerson) {
                    $this->lstPerson->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstPerson->AddItem(QApplication::Translate('- Select One -'), null);
                $objPersonArray = Person::LoadAll();
                if ($objPersonArray) foreach ($objPersonArray as $objPerson) {
                    $objListItem = new QListItem($objPerson->__toString(), $objPerson->Id);
                    if (($this->objAddress->Person) && ($this->objAddress->Person->Id == $objPerson->Id))
                        $objListItem->Selected = true;
                    $this->lstPerson->AddItem($objListItem);
                }
            }
            if ($this->lblPersonId) $this->lblPersonId->Text = ($this->objAddress->Person) ? $this->objAddress->Person->__toString() : null;

            if ($this->txtStreet1) $this->txtStreet1->Text = $this->objAddress->Street1;
            if ($this->lblStreet1) $this->lblStreet1->Text = $this->objAddress->Street1;

            if ($this->txtStreet2) $this->txtStreet2->Text = $this->objAddress->Street2;
            if ($this->lblStreet2) $this->lblStreet2->Text = $this->objAddress->Street2;

            if ($this->txtSuburb) $this->txtSuburb->Text = $this->objAddress->Suburb;
            if ($this->lblSuburb) $this->lblSuburb->Text = $this->objAddress->Suburb;

            if ($this->txtCity) $this->txtCity->Text = $this->objAddress->City;
            if ($this->lblCity) $this->lblCity->Text = $this->objAddress->City;

            if ($this->txtCounty) $this->txtCounty->Text = $this->objAddress->County;
            if ($this->lblCounty) $this->lblCounty->Text = $this->objAddress->County;

            if ($this->lstZone) $this->lstZone->SelectedValue = $this->objAddress->ZoneId;
            if ($this->lblZoneId) $this->lblZoneId->Text = ($this->objAddress->ZoneId) ? ZoneType::$NameArray[$this->objAddress->ZoneId] : null;

            if ($this->lstCountry) $this->lstCountry->SelectedValue = $this->objAddress->CountryId;
            if ($this->lblCountryId) $this->lblCountryId->Text = ($this->objAddress->CountryId) ? CountryType::$NameArray[$this->objAddress->CountryId] : null;

            if ($this->txtPostalCode) $this->txtPostalCode->Text = $this->objAddress->PostalCode;
            if ($this->lblPostalCode) $this->lblPostalCode->Text = $this->objAddress->PostalCode;

            if ($this->chkIsCurrent) $this->chkIsCurrent->Checked = $this->objAddress->IsCurrent;
            if ($this->lblIsCurrent) $this->lblIsCurrent->Text = ($this->objAddress->IsCurrent) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->lstType) $this->lstType->SelectedValue = $this->objAddress->TypeId;
            if ($this->lblTypeId) $this->lblTypeId->Text = ($this->objAddress->TypeId) ? AddressType::$NameArray[$this->objAddress->TypeId] : null;

            if ($this->lblCreationDate) if ($this->blnEditMode) $this->lblCreationDate->Text = $this->objAddress->CreationDate;

            if ($this->lblLastModification) if ($this->blnEditMode) $this->lblLastModification->Text = $this->objAddress->LastModification;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC ADDRESS OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's Address instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveAddress() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtTitle) $this->objAddress->Title = $this->txtTitle->Text;
                if ($this->lstPerson) $this->objAddress->PersonId = $this->lstPerson->SelectedValue;
                if ($this->txtStreet1) $this->objAddress->Street1 = $this->txtStreet1->Text;
                if ($this->txtStreet2) $this->objAddress->Street2 = $this->txtStreet2->Text;
                if ($this->txtSuburb) $this->objAddress->Suburb = $this->txtSuburb->Text;
                if ($this->txtCity) $this->objAddress->City = $this->txtCity->Text;
                if ($this->txtCounty) $this->objAddress->County = $this->txtCounty->Text;
                if ($this->lstZone) $this->objAddress->ZoneId = $this->lstZone->SelectedValue;
                if ($this->lstCountry) $this->objAddress->CountryId = $this->lstCountry->SelectedValue;
                if ($this->txtPostalCode) $this->objAddress->PostalCode = $this->txtPostalCode->Text;
                if ($this->chkIsCurrent) $this->objAddress->IsCurrent = $this->chkIsCurrent->Checked;
                if ($this->lstType) $this->objAddress->TypeId = $this->lstType->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the Address object
                $this->objAddress->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's Address instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteAddress() {
            $this->objAddress->Delete();
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
                case 'Address': return $this->objAddress;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to Address fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'TitleControl':
                    if (!$this->txtTitle) return $this->txtTitle_Create();
                    return $this->txtTitle;
                case 'TitleLabel':
                    if (!$this->lblTitle) return $this->lblTitle_Create();
                    return $this->lblTitle;
                case 'PersonIdControl':
                    if (!$this->lstPerson) return $this->lstPerson_Create();
                    return $this->lstPerson;
                case 'PersonIdLabel':
                    if (!$this->lblPersonId) return $this->lblPersonId_Create();
                    return $this->lblPersonId;
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
                case 'IsCurrentControl':
                    if (!$this->chkIsCurrent) return $this->chkIsCurrent_Create();
                    return $this->chkIsCurrent;
                case 'IsCurrentLabel':
                    if (!$this->lblIsCurrent) return $this->lblIsCurrent_Create();
                    return $this->lblIsCurrent;
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
                    // Controls that point to Address fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'TitleControl':
                        return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
                    case 'PersonIdControl':
                        return ($this->lstPerson = QType::Cast($mixValue, 'QControl'));
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
                    case 'IsCurrentControl':
                        return ($this->chkIsCurrent = QType::Cast($mixValue, 'QControl'));
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