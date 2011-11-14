<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the PaymentMethod class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single PaymentMethod object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a PaymentMethodMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read PaymentMethod $PaymentMethod the actual PaymentMethod data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $TitleControl
     * property-read QLabel $TitleLabel
     * property QTextBox $ServiceProviderControl
     * property-read QLabel $ServiceProviderLabel
     * property QTextBox $ServiceTypeControl
     * property-read QLabel $ServiceTypeLabel
     * property QTextBox $ActionClassNameControl
     * property-read QLabel $ActionClassNameLabel
     * property QTextBox $DescriptionControl
     * property-read QLabel $DescriptionLabel
     * property QTextBox $ImageUriControl
     * property-read QLabel $ImageUriLabel
     * property QCheckBox $ActiveControl
     * property-read QLabel $ActiveLabel
     * property QCheckBox $RequiresCcNumberControl
     * property-read QLabel $RequiresCcNumberLabel
     * property QCheckBox $SaveCcNumberControl
     * property-read QLabel $SaveCcNumberLabel
     * property QCheckBox $TestModeControl
     * property-read QLabel $TestModeLabel
     * property QIntegerTextBox $SortOrderControl
     * property-read QLabel $SortOrderLabel
     * property QListBox $PaymentTypeIdControl
     * property-read QLabel $PaymentTypeIdLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class PaymentMethodMetaControlGen extends QBaseClass {
        // General Variables
        protected $objPaymentMethod;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of PaymentMethod's individual data fields
        protected $lblId;
        protected $txtTitle;
        protected $txtServiceProvider;
        protected $txtServiceType;
        protected $txtActionClassName;
        protected $txtDescription;
        protected $txtImageUri;
        protected $chkActive;
        protected $chkRequiresCcNumber;
        protected $chkSaveCcNumber;
        protected $chkTestMode;
        protected $txtSortOrder;
        protected $lstPaymentType;

        // Controls that allow the viewing of PaymentMethod's individual data fields
        protected $lblTitle;
        protected $lblServiceProvider;
        protected $lblServiceType;
        protected $lblActionClassName;
        protected $lblDescription;
        protected $lblImageUri;
        protected $lblActive;
        protected $lblRequiresCcNumber;
        protected $lblSaveCcNumber;
        protected $lblTestMode;
        protected $lblSortOrder;
        protected $lblPaymentTypeId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * PaymentMethodMetaControl to edit a single PaymentMethod object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single PaymentMethod object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PaymentMethodMetaControl
         * @param PaymentMethod $objPaymentMethod new or existing PaymentMethod object
         */
         public function __construct($objParentObject, PaymentMethod $objPaymentMethod) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this PaymentMethodMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked PaymentMethod object
            $this->objPaymentMethod = $objPaymentMethod;

            // Figure out if we're Editing or Creating New
            if ($this->objPaymentMethod->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this PaymentMethodMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing PaymentMethod object creation - defaults to CreateOrEdit
         * @return PaymentMethodMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objPaymentMethod = PaymentMethod::Load($intId);

                // PaymentMethod was found -- return it!
                if ($objPaymentMethod)
                    return new PaymentMethodMetaControl($objParentObject, $objPaymentMethod);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a PaymentMethod object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new PaymentMethodMetaControl($objParentObject, new PaymentMethod());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PaymentMethodMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing PaymentMethod object creation - defaults to CreateOrEdit
         * @return PaymentMethodMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return PaymentMethodMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PaymentMethodMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing PaymentMethod object creation - defaults to CreateOrEdit
         * @return PaymentMethodMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return PaymentMethodMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objPaymentMethod->Id;
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
            $this->txtTitle->Text = $this->objPaymentMethod->Title;
            $this->txtTitle->MaxLength = PaymentMethod::TitleMaxLength;
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
            $this->lblTitle->Text = $this->objPaymentMethod->Title;
            return $this->lblTitle;
        }

        /**
         * Create and setup QTextBox txtServiceProvider
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtServiceProvider_Create($strControlId = null) {
            $this->txtServiceProvider = new QTextBox($this->objParentObject, $strControlId);
            $this->txtServiceProvider->Name = QApplication::Translate('Service Provider');
            $this->txtServiceProvider->Text = $this->objPaymentMethod->ServiceProvider;
            $this->txtServiceProvider->MaxLength = PaymentMethod::ServiceProviderMaxLength;
            return $this->txtServiceProvider;
        }

        /**
         * Create and setup QLabel lblServiceProvider
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblServiceProvider_Create($strControlId = null) {
            $this->lblServiceProvider = new QLabel($this->objParentObject, $strControlId);
            $this->lblServiceProvider->Name = QApplication::Translate('Service Provider');
            $this->lblServiceProvider->Text = $this->objPaymentMethod->ServiceProvider;
            return $this->lblServiceProvider;
        }

        /**
         * Create and setup QTextBox txtServiceType
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtServiceType_Create($strControlId = null) {
            $this->txtServiceType = new QTextBox($this->objParentObject, $strControlId);
            $this->txtServiceType->Name = QApplication::Translate('Service Type');
            $this->txtServiceType->Text = $this->objPaymentMethod->ServiceType;
            $this->txtServiceType->MaxLength = PaymentMethod::ServiceTypeMaxLength;
            return $this->txtServiceType;
        }

        /**
         * Create and setup QLabel lblServiceType
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblServiceType_Create($strControlId = null) {
            $this->lblServiceType = new QLabel($this->objParentObject, $strControlId);
            $this->lblServiceType->Name = QApplication::Translate('Service Type');
            $this->lblServiceType->Text = $this->objPaymentMethod->ServiceType;
            return $this->lblServiceType;
        }

        /**
         * Create and setup QTextBox txtActionClassName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtActionClassName_Create($strControlId = null) {
            $this->txtActionClassName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtActionClassName->Name = QApplication::Translate('Action Class Name');
            $this->txtActionClassName->Text = $this->objPaymentMethod->ActionClassName;
            $this->txtActionClassName->MaxLength = PaymentMethod::ActionClassNameMaxLength;
            return $this->txtActionClassName;
        }

        /**
         * Create and setup QLabel lblActionClassName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblActionClassName_Create($strControlId = null) {
            $this->lblActionClassName = new QLabel($this->objParentObject, $strControlId);
            $this->lblActionClassName->Name = QApplication::Translate('Action Class Name');
            $this->lblActionClassName->Text = $this->objPaymentMethod->ActionClassName;
            return $this->lblActionClassName;
        }

        /**
         * Create and setup QTextBox txtDescription
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtDescription_Create($strControlId = null) {
            $this->txtDescription = new QTextBox($this->objParentObject, $strControlId);
            $this->txtDescription->Name = QApplication::Translate('Description');
            $this->txtDescription->Text = $this->objPaymentMethod->Description;
            $this->txtDescription->TextMode = QTextMode::MultiLine;
            return $this->txtDescription;
        }

        /**
         * Create and setup QLabel lblDescription
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblDescription_Create($strControlId = null) {
            $this->lblDescription = new QLabel($this->objParentObject, $strControlId);
            $this->lblDescription->Name = QApplication::Translate('Description');
            $this->lblDescription->Text = $this->objPaymentMethod->Description;
            return $this->lblDescription;
        }

        /**
         * Create and setup QTextBox txtImageUri
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtImageUri_Create($strControlId = null) {
            $this->txtImageUri = new QTextBox($this->objParentObject, $strControlId);
            $this->txtImageUri->Name = QApplication::Translate('Image Uri');
            $this->txtImageUri->Text = $this->objPaymentMethod->ImageUri;
            $this->txtImageUri->MaxLength = PaymentMethod::ImageUriMaxLength;
            return $this->txtImageUri;
        }

        /**
         * Create and setup QLabel lblImageUri
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblImageUri_Create($strControlId = null) {
            $this->lblImageUri = new QLabel($this->objParentObject, $strControlId);
            $this->lblImageUri->Name = QApplication::Translate('Image Uri');
            $this->lblImageUri->Text = $this->objPaymentMethod->ImageUri;
            return $this->lblImageUri;
        }

        /**
         * Create and setup QCheckBox chkActive
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkActive_Create($strControlId = null) {
            $this->chkActive = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkActive->Name = QApplication::Translate('Active');
            $this->chkActive->Checked = $this->objPaymentMethod->Active;
            return $this->chkActive;
        }

        /**
         * Create and setup QLabel lblActive
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblActive_Create($strControlId = null) {
            $this->lblActive = new QLabel($this->objParentObject, $strControlId);
            $this->lblActive->Name = QApplication::Translate('Active');
            $this->lblActive->Text = ($this->objPaymentMethod->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblActive;
        }

        /**
         * Create and setup QCheckBox chkRequiresCcNumber
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkRequiresCcNumber_Create($strControlId = null) {
            $this->chkRequiresCcNumber = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkRequiresCcNumber->Name = QApplication::Translate('Requires Cc Number');
            $this->chkRequiresCcNumber->Checked = $this->objPaymentMethod->RequiresCcNumber;
            return $this->chkRequiresCcNumber;
        }

        /**
         * Create and setup QLabel lblRequiresCcNumber
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblRequiresCcNumber_Create($strControlId = null) {
            $this->lblRequiresCcNumber = new QLabel($this->objParentObject, $strControlId);
            $this->lblRequiresCcNumber->Name = QApplication::Translate('Requires Cc Number');
            $this->lblRequiresCcNumber->Text = ($this->objPaymentMethod->RequiresCcNumber) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblRequiresCcNumber;
        }

        /**
         * Create and setup QCheckBox chkSaveCcNumber
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkSaveCcNumber_Create($strControlId = null) {
            $this->chkSaveCcNumber = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkSaveCcNumber->Name = QApplication::Translate('Save Cc Number');
            $this->chkSaveCcNumber->Checked = $this->objPaymentMethod->SaveCcNumber;
            return $this->chkSaveCcNumber;
        }

        /**
         * Create and setup QLabel lblSaveCcNumber
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblSaveCcNumber_Create($strControlId = null) {
            $this->lblSaveCcNumber = new QLabel($this->objParentObject, $strControlId);
            $this->lblSaveCcNumber->Name = QApplication::Translate('Save Cc Number');
            $this->lblSaveCcNumber->Text = ($this->objPaymentMethod->SaveCcNumber) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblSaveCcNumber;
        }

        /**
         * Create and setup QCheckBox chkTestMode
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkTestMode_Create($strControlId = null) {
            $this->chkTestMode = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkTestMode->Name = QApplication::Translate('Test Mode');
            $this->chkTestMode->Checked = $this->objPaymentMethod->TestMode;
            return $this->chkTestMode;
        }

        /**
         * Create and setup QLabel lblTestMode
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblTestMode_Create($strControlId = null) {
            $this->lblTestMode = new QLabel($this->objParentObject, $strControlId);
            $this->lblTestMode->Name = QApplication::Translate('Test Mode');
            $this->lblTestMode->Text = ($this->objPaymentMethod->TestMode) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblTestMode;
        }

        /**
         * Create and setup QIntegerTextBox txtSortOrder
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtSortOrder_Create($strControlId = null) {
            $this->txtSortOrder = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtSortOrder->Name = QApplication::Translate('Sort Order');
            $this->txtSortOrder->Text = $this->objPaymentMethod->SortOrder;
            return $this->txtSortOrder;
        }

        /**
         * Create and setup QLabel lblSortOrder
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblSortOrder_Create($strControlId = null, $strFormat = null) {
            $this->lblSortOrder = new QLabel($this->objParentObject, $strControlId);
            $this->lblSortOrder->Name = QApplication::Translate('Sort Order');
            $this->lblSortOrder->Text = $this->objPaymentMethod->SortOrder;
            $this->lblSortOrder->Format = $strFormat;
            return $this->lblSortOrder;
        }

        /**
         * Create and setup QListBox lstPaymentType
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstPaymentType_Create($strControlId = null) {
            $this->lstPaymentType = new QListBox($this->objParentObject, $strControlId);
            $this->lstPaymentType->Name = QApplication::Translate('Payment Type');
            $this->lstPaymentType->Required = true;
            foreach (PaymentType::$NameArray as $intId => $strValue)
                $this->lstPaymentType->AddItem(new QListItem($strValue, $intId, $this->objPaymentMethod->PaymentTypeId == $intId));
            return $this->lstPaymentType;
        }

        /**
         * Create and setup QLabel lblPaymentTypeId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblPaymentTypeId_Create($strControlId = null) {
            $this->lblPaymentTypeId = new QLabel($this->objParentObject, $strControlId);
            $this->lblPaymentTypeId->Name = QApplication::Translate('Payment Type');
            $this->lblPaymentTypeId->Text = ($this->objPaymentMethod->PaymentTypeId) ? PaymentType::$NameArray[$this->objPaymentMethod->PaymentTypeId] : null;
            $this->lblPaymentTypeId->Required = true;
            return $this->lblPaymentTypeId;
        }



        /**
         * Refresh this MetaControl with Data from the local PaymentMethod object.
         * @param boolean $blnReload reload PaymentMethod from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objPaymentMethod->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objPaymentMethod->Id;

            if ($this->txtTitle) $this->txtTitle->Text = $this->objPaymentMethod->Title;
            if ($this->lblTitle) $this->lblTitle->Text = $this->objPaymentMethod->Title;

            if ($this->txtServiceProvider) $this->txtServiceProvider->Text = $this->objPaymentMethod->ServiceProvider;
            if ($this->lblServiceProvider) $this->lblServiceProvider->Text = $this->objPaymentMethod->ServiceProvider;

            if ($this->txtServiceType) $this->txtServiceType->Text = $this->objPaymentMethod->ServiceType;
            if ($this->lblServiceType) $this->lblServiceType->Text = $this->objPaymentMethod->ServiceType;

            if ($this->txtActionClassName) $this->txtActionClassName->Text = $this->objPaymentMethod->ActionClassName;
            if ($this->lblActionClassName) $this->lblActionClassName->Text = $this->objPaymentMethod->ActionClassName;

            if ($this->txtDescription) $this->txtDescription->Text = $this->objPaymentMethod->Description;
            if ($this->lblDescription) $this->lblDescription->Text = $this->objPaymentMethod->Description;

            if ($this->txtImageUri) $this->txtImageUri->Text = $this->objPaymentMethod->ImageUri;
            if ($this->lblImageUri) $this->lblImageUri->Text = $this->objPaymentMethod->ImageUri;

            if ($this->chkActive) $this->chkActive->Checked = $this->objPaymentMethod->Active;
            if ($this->lblActive) $this->lblActive->Text = ($this->objPaymentMethod->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkRequiresCcNumber) $this->chkRequiresCcNumber->Checked = $this->objPaymentMethod->RequiresCcNumber;
            if ($this->lblRequiresCcNumber) $this->lblRequiresCcNumber->Text = ($this->objPaymentMethod->RequiresCcNumber) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkSaveCcNumber) $this->chkSaveCcNumber->Checked = $this->objPaymentMethod->SaveCcNumber;
            if ($this->lblSaveCcNumber) $this->lblSaveCcNumber->Text = ($this->objPaymentMethod->SaveCcNumber) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkTestMode) $this->chkTestMode->Checked = $this->objPaymentMethod->TestMode;
            if ($this->lblTestMode) $this->lblTestMode->Text = ($this->objPaymentMethod->TestMode) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->txtSortOrder) $this->txtSortOrder->Text = $this->objPaymentMethod->SortOrder;
            if ($this->lblSortOrder) $this->lblSortOrder->Text = $this->objPaymentMethod->SortOrder;

            if ($this->lstPaymentType) $this->lstPaymentType->SelectedValue = $this->objPaymentMethod->PaymentTypeId;
            if ($this->lblPaymentTypeId) $this->lblPaymentTypeId->Text = ($this->objPaymentMethod->PaymentTypeId) ? PaymentType::$NameArray[$this->objPaymentMethod->PaymentTypeId] : null;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC PAYMENTMETHOD OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's PaymentMethod instance,
         * updating only the fields which have had a control created for it.
         */
        public function SavePaymentMethod() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtTitle) $this->objPaymentMethod->Title = $this->txtTitle->Text;
                if ($this->txtServiceProvider) $this->objPaymentMethod->ServiceProvider = $this->txtServiceProvider->Text;
                if ($this->txtServiceType) $this->objPaymentMethod->ServiceType = $this->txtServiceType->Text;
                if ($this->txtActionClassName) $this->objPaymentMethod->ActionClassName = $this->txtActionClassName->Text;
                if ($this->txtDescription) $this->objPaymentMethod->Description = $this->txtDescription->Text;
                if ($this->txtImageUri) $this->objPaymentMethod->ImageUri = $this->txtImageUri->Text;
                if ($this->chkActive) $this->objPaymentMethod->Active = $this->chkActive->Checked;
                if ($this->chkRequiresCcNumber) $this->objPaymentMethod->RequiresCcNumber = $this->chkRequiresCcNumber->Checked;
                if ($this->chkSaveCcNumber) $this->objPaymentMethod->SaveCcNumber = $this->chkSaveCcNumber->Checked;
                if ($this->chkTestMode) $this->objPaymentMethod->TestMode = $this->chkTestMode->Checked;
                if ($this->txtSortOrder) $this->objPaymentMethod->SortOrder = $this->txtSortOrder->Text;
                if ($this->lstPaymentType) $this->objPaymentMethod->PaymentTypeId = $this->lstPaymentType->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the PaymentMethod object
                $this->objPaymentMethod->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's PaymentMethod instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeletePaymentMethod() {
            $this->objPaymentMethod->Delete();
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
                case 'PaymentMethod': return $this->objPaymentMethod;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to PaymentMethod fields -- will be created dynamically if not yet created
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
                case 'ServiceProviderControl':
                    if (!$this->txtServiceProvider) return $this->txtServiceProvider_Create();
                    return $this->txtServiceProvider;
                case 'ServiceProviderLabel':
                    if (!$this->lblServiceProvider) return $this->lblServiceProvider_Create();
                    return $this->lblServiceProvider;
                case 'ServiceTypeControl':
                    if (!$this->txtServiceType) return $this->txtServiceType_Create();
                    return $this->txtServiceType;
                case 'ServiceTypeLabel':
                    if (!$this->lblServiceType) return $this->lblServiceType_Create();
                    return $this->lblServiceType;
                case 'ActionClassNameControl':
                    if (!$this->txtActionClassName) return $this->txtActionClassName_Create();
                    return $this->txtActionClassName;
                case 'ActionClassNameLabel':
                    if (!$this->lblActionClassName) return $this->lblActionClassName_Create();
                    return $this->lblActionClassName;
                case 'DescriptionControl':
                    if (!$this->txtDescription) return $this->txtDescription_Create();
                    return $this->txtDescription;
                case 'DescriptionLabel':
                    if (!$this->lblDescription) return $this->lblDescription_Create();
                    return $this->lblDescription;
                case 'ImageUriControl':
                    if (!$this->txtImageUri) return $this->txtImageUri_Create();
                    return $this->txtImageUri;
                case 'ImageUriLabel':
                    if (!$this->lblImageUri) return $this->lblImageUri_Create();
                    return $this->lblImageUri;
                case 'ActiveControl':
                    if (!$this->chkActive) return $this->chkActive_Create();
                    return $this->chkActive;
                case 'ActiveLabel':
                    if (!$this->lblActive) return $this->lblActive_Create();
                    return $this->lblActive;
                case 'RequiresCcNumberControl':
                    if (!$this->chkRequiresCcNumber) return $this->chkRequiresCcNumber_Create();
                    return $this->chkRequiresCcNumber;
                case 'RequiresCcNumberLabel':
                    if (!$this->lblRequiresCcNumber) return $this->lblRequiresCcNumber_Create();
                    return $this->lblRequiresCcNumber;
                case 'SaveCcNumberControl':
                    if (!$this->chkSaveCcNumber) return $this->chkSaveCcNumber_Create();
                    return $this->chkSaveCcNumber;
                case 'SaveCcNumberLabel':
                    if (!$this->lblSaveCcNumber) return $this->lblSaveCcNumber_Create();
                    return $this->lblSaveCcNumber;
                case 'TestModeControl':
                    if (!$this->chkTestMode) return $this->chkTestMode_Create();
                    return $this->chkTestMode;
                case 'TestModeLabel':
                    if (!$this->lblTestMode) return $this->lblTestMode_Create();
                    return $this->lblTestMode;
                case 'SortOrderControl':
                    if (!$this->txtSortOrder) return $this->txtSortOrder_Create();
                    return $this->txtSortOrder;
                case 'SortOrderLabel':
                    if (!$this->lblSortOrder) return $this->lblSortOrder_Create();
                    return $this->lblSortOrder;
                case 'PaymentTypeIdControl':
                    if (!$this->lstPaymentType) return $this->lstPaymentType_Create();
                    return $this->lstPaymentType;
                case 'PaymentTypeIdLabel':
                    if (!$this->lblPaymentTypeId) return $this->lblPaymentTypeId_Create();
                    return $this->lblPaymentTypeId;
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
                    // Controls that point to PaymentMethod fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'TitleControl':
                        return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
                    case 'ServiceProviderControl':
                        return ($this->txtServiceProvider = QType::Cast($mixValue, 'QControl'));
                    case 'ServiceTypeControl':
                        return ($this->txtServiceType = QType::Cast($mixValue, 'QControl'));
                    case 'ActionClassNameControl':
                        return ($this->txtActionClassName = QType::Cast($mixValue, 'QControl'));
                    case 'DescriptionControl':
                        return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
                    case 'ImageUriControl':
                        return ($this->txtImageUri = QType::Cast($mixValue, 'QControl'));
                    case 'ActiveControl':
                        return ($this->chkActive = QType::Cast($mixValue, 'QControl'));
                    case 'RequiresCcNumberControl':
                        return ($this->chkRequiresCcNumber = QType::Cast($mixValue, 'QControl'));
                    case 'SaveCcNumberControl':
                        return ($this->chkSaveCcNumber = QType::Cast($mixValue, 'QControl'));
                    case 'TestModeControl':
                        return ($this->chkTestMode = QType::Cast($mixValue, 'QControl'));
                    case 'SortOrderControl':
                        return ($this->txtSortOrder = QType::Cast($mixValue, 'QControl'));
                    case 'PaymentTypeIdControl':
                        return ($this->lstPaymentType = QType::Cast($mixValue, 'QControl'));
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