<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the ShippingMethod class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single ShippingMethod object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a ShippingMethodMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read ShippingMethod $ShippingMethod the actual ShippingMethod data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $TitleControl
     * property-read QLabel $TitleLabel
     * property QTextBox $CarrierControl
     * property-read QLabel $CarrierLabel
     * property QTextBox $ServiceTypeControl
     * property-read QLabel $ServiceTypeLabel
     * property QTextBox $ClassNameControl
     * property-read QLabel $ClassNameLabel
     * property QTextBox $TransitTimeControl
     * property-read QLabel $TransitTimeLabel
     * property QTextBox $DescriptionControl
     * property-read QLabel $DescriptionLabel
     * property QTextBox $ImageFilenameControl
     * property-read QLabel $ImageFilenameLabel
     * property QCheckBox $ActiveControl
     * property-read QLabel $ActiveLabel
     * property QCheckBox $IsInternationalControl
     * property-read QLabel $IsInternationalLabel
     * property QCheckBox $TestModeControl
     * property-read QLabel $TestModeLabel
     * property QIntegerTextBox $SortOrderControl
     * property-read QLabel $SortOrderLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class ShippingMethodMetaControlGen extends QBaseClass {
        // General Variables
        protected $objShippingMethod;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of ShippingMethod's individual data fields
        protected $lblId;
        protected $txtTitle;
        protected $txtCarrier;
        protected $txtServiceType;
        protected $txtClassName;
        protected $txtTransitTime;
        protected $txtDescription;
        protected $txtImageFilename;
        protected $chkActive;
        protected $chkIsInternational;
        protected $chkTestMode;
        protected $txtSortOrder;

        // Controls that allow the viewing of ShippingMethod's individual data fields
        protected $lblTitle;
        protected $lblCarrier;
        protected $lblServiceType;
        protected $lblClassName;
        protected $lblTransitTime;
        protected $lblDescription;
        protected $lblImageFilename;
        protected $lblActive;
        protected $lblIsInternational;
        protected $lblTestMode;
        protected $lblSortOrder;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * ShippingMethodMetaControl to edit a single ShippingMethod object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single ShippingMethod object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShippingMethodMetaControl
         * @param ShippingMethod $objShippingMethod new or existing ShippingMethod object
         */
         public function __construct($objParentObject, ShippingMethod $objShippingMethod) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this ShippingMethodMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked ShippingMethod object
            $this->objShippingMethod = $objShippingMethod;

            // Figure out if we're Editing or Creating New
            if ($this->objShippingMethod->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this ShippingMethodMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing ShippingMethod object creation - defaults to CreateOrEdit
         * @return ShippingMethodMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objShippingMethod = ShippingMethod::Load($intId);

                // ShippingMethod was found -- return it!
                if ($objShippingMethod)
                    return new ShippingMethodMetaControl($objParentObject, $objShippingMethod);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a ShippingMethod object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new ShippingMethodMetaControl($objParentObject, new ShippingMethod());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShippingMethodMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ShippingMethod object creation - defaults to CreateOrEdit
         * @return ShippingMethodMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return ShippingMethodMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShippingMethodMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ShippingMethod object creation - defaults to CreateOrEdit
         * @return ShippingMethodMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return ShippingMethodMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objShippingMethod->Id;
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
            $this->txtTitle->Text = $this->objShippingMethod->Title;
            $this->txtTitle->MaxLength = ShippingMethod::TitleMaxLength;
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
            $this->lblTitle->Text = $this->objShippingMethod->Title;
            return $this->lblTitle;
        }

        /**
         * Create and setup QTextBox txtCarrier
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCarrier_Create($strControlId = null) {
            $this->txtCarrier = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCarrier->Name = QApplication::Translate('Carrier');
            $this->txtCarrier->Text = $this->objShippingMethod->Carrier;
            $this->txtCarrier->MaxLength = ShippingMethod::CarrierMaxLength;
            return $this->txtCarrier;
        }

        /**
         * Create and setup QLabel lblCarrier
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCarrier_Create($strControlId = null) {
            $this->lblCarrier = new QLabel($this->objParentObject, $strControlId);
            $this->lblCarrier->Name = QApplication::Translate('Carrier');
            $this->lblCarrier->Text = $this->objShippingMethod->Carrier;
            return $this->lblCarrier;
        }

        /**
         * Create and setup QTextBox txtServiceType
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtServiceType_Create($strControlId = null) {
            $this->txtServiceType = new QTextBox($this->objParentObject, $strControlId);
            $this->txtServiceType->Name = QApplication::Translate('Service Type');
            $this->txtServiceType->Text = $this->objShippingMethod->ServiceType;
            $this->txtServiceType->MaxLength = ShippingMethod::ServiceTypeMaxLength;
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
            $this->lblServiceType->Text = $this->objShippingMethod->ServiceType;
            return $this->lblServiceType;
        }

        /**
         * Create and setup QTextBox txtClassName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtClassName_Create($strControlId = null) {
            $this->txtClassName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtClassName->Name = QApplication::Translate('Class Name');
            $this->txtClassName->Text = $this->objShippingMethod->ClassName;
            $this->txtClassName->MaxLength = ShippingMethod::ClassNameMaxLength;
            return $this->txtClassName;
        }

        /**
         * Create and setup QLabel lblClassName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblClassName_Create($strControlId = null) {
            $this->lblClassName = new QLabel($this->objParentObject, $strControlId);
            $this->lblClassName->Name = QApplication::Translate('Class Name');
            $this->lblClassName->Text = $this->objShippingMethod->ClassName;
            return $this->lblClassName;
        }

        /**
         * Create and setup QTextBox txtTransitTime
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtTransitTime_Create($strControlId = null) {
            $this->txtTransitTime = new QTextBox($this->objParentObject, $strControlId);
            $this->txtTransitTime->Name = QApplication::Translate('Transit Time');
            $this->txtTransitTime->Text = $this->objShippingMethod->TransitTime;
            $this->txtTransitTime->MaxLength = ShippingMethod::TransitTimeMaxLength;
            return $this->txtTransitTime;
        }

        /**
         * Create and setup QLabel lblTransitTime
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblTransitTime_Create($strControlId = null) {
            $this->lblTransitTime = new QLabel($this->objParentObject, $strControlId);
            $this->lblTransitTime->Name = QApplication::Translate('Transit Time');
            $this->lblTransitTime->Text = $this->objShippingMethod->TransitTime;
            return $this->lblTransitTime;
        }

        /**
         * Create and setup QTextBox txtDescription
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtDescription_Create($strControlId = null) {
            $this->txtDescription = new QTextBox($this->objParentObject, $strControlId);
            $this->txtDescription->Name = QApplication::Translate('Description');
            $this->txtDescription->Text = $this->objShippingMethod->Description;
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
            $this->lblDescription->Text = $this->objShippingMethod->Description;
            return $this->lblDescription;
        }

        /**
         * Create and setup QTextBox txtImageFilename
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtImageFilename_Create($strControlId = null) {
            $this->txtImageFilename = new QTextBox($this->objParentObject, $strControlId);
            $this->txtImageFilename->Name = QApplication::Translate('Image Filename');
            $this->txtImageFilename->Text = $this->objShippingMethod->ImageFilename;
            $this->txtImageFilename->MaxLength = ShippingMethod::ImageFilenameMaxLength;
            return $this->txtImageFilename;
        }

        /**
         * Create and setup QLabel lblImageFilename
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblImageFilename_Create($strControlId = null) {
            $this->lblImageFilename = new QLabel($this->objParentObject, $strControlId);
            $this->lblImageFilename->Name = QApplication::Translate('Image Filename');
            $this->lblImageFilename->Text = $this->objShippingMethod->ImageFilename;
            return $this->lblImageFilename;
        }

        /**
         * Create and setup QCheckBox chkActive
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkActive_Create($strControlId = null) {
            $this->chkActive = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkActive->Name = QApplication::Translate('Active');
            $this->chkActive->Checked = $this->objShippingMethod->Active;
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
            $this->lblActive->Text = ($this->objShippingMethod->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblActive;
        }

        /**
         * Create and setup QCheckBox chkIsInternational
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkIsInternational_Create($strControlId = null) {
            $this->chkIsInternational = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkIsInternational->Name = QApplication::Translate('Is International');
            $this->chkIsInternational->Checked = $this->objShippingMethod->IsInternational;
            return $this->chkIsInternational;
        }

        /**
         * Create and setup QLabel lblIsInternational
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblIsInternational_Create($strControlId = null) {
            $this->lblIsInternational = new QLabel($this->objParentObject, $strControlId);
            $this->lblIsInternational->Name = QApplication::Translate('Is International');
            $this->lblIsInternational->Text = ($this->objShippingMethod->IsInternational) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblIsInternational;
        }

        /**
         * Create and setup QCheckBox chkTestMode
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkTestMode_Create($strControlId = null) {
            $this->chkTestMode = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkTestMode->Name = QApplication::Translate('Test Mode');
            $this->chkTestMode->Checked = $this->objShippingMethod->TestMode;
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
            $this->lblTestMode->Text = ($this->objShippingMethod->TestMode) ? QApplication::Translate('Yes') : QApplication::Translate('No');
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
            $this->txtSortOrder->Text = $this->objShippingMethod->SortOrder;
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
            $this->lblSortOrder->Text = $this->objShippingMethod->SortOrder;
            $this->lblSortOrder->Format = $strFormat;
            return $this->lblSortOrder;
        }



        /**
         * Refresh this MetaControl with Data from the local ShippingMethod object.
         * @param boolean $blnReload reload ShippingMethod from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objShippingMethod->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objShippingMethod->Id;

            if ($this->txtTitle) $this->txtTitle->Text = $this->objShippingMethod->Title;
            if ($this->lblTitle) $this->lblTitle->Text = $this->objShippingMethod->Title;

            if ($this->txtCarrier) $this->txtCarrier->Text = $this->objShippingMethod->Carrier;
            if ($this->lblCarrier) $this->lblCarrier->Text = $this->objShippingMethod->Carrier;

            if ($this->txtServiceType) $this->txtServiceType->Text = $this->objShippingMethod->ServiceType;
            if ($this->lblServiceType) $this->lblServiceType->Text = $this->objShippingMethod->ServiceType;

            if ($this->txtClassName) $this->txtClassName->Text = $this->objShippingMethod->ClassName;
            if ($this->lblClassName) $this->lblClassName->Text = $this->objShippingMethod->ClassName;

            if ($this->txtTransitTime) $this->txtTransitTime->Text = $this->objShippingMethod->TransitTime;
            if ($this->lblTransitTime) $this->lblTransitTime->Text = $this->objShippingMethod->TransitTime;

            if ($this->txtDescription) $this->txtDescription->Text = $this->objShippingMethod->Description;
            if ($this->lblDescription) $this->lblDescription->Text = $this->objShippingMethod->Description;

            if ($this->txtImageFilename) $this->txtImageFilename->Text = $this->objShippingMethod->ImageFilename;
            if ($this->lblImageFilename) $this->lblImageFilename->Text = $this->objShippingMethod->ImageFilename;

            if ($this->chkActive) $this->chkActive->Checked = $this->objShippingMethod->Active;
            if ($this->lblActive) $this->lblActive->Text = ($this->objShippingMethod->Active) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkIsInternational) $this->chkIsInternational->Checked = $this->objShippingMethod->IsInternational;
            if ($this->lblIsInternational) $this->lblIsInternational->Text = ($this->objShippingMethod->IsInternational) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkTestMode) $this->chkTestMode->Checked = $this->objShippingMethod->TestMode;
            if ($this->lblTestMode) $this->lblTestMode->Text = ($this->objShippingMethod->TestMode) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->txtSortOrder) $this->txtSortOrder->Text = $this->objShippingMethod->SortOrder;
            if ($this->lblSortOrder) $this->lblSortOrder->Text = $this->objShippingMethod->SortOrder;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC SHIPPINGMETHOD OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's ShippingMethod instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveShippingMethod() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtTitle) $this->objShippingMethod->Title = $this->txtTitle->Text;
                if ($this->txtCarrier) $this->objShippingMethod->Carrier = $this->txtCarrier->Text;
                if ($this->txtServiceType) $this->objShippingMethod->ServiceType = $this->txtServiceType->Text;
                if ($this->txtClassName) $this->objShippingMethod->ClassName = $this->txtClassName->Text;
                if ($this->txtTransitTime) $this->objShippingMethod->TransitTime = $this->txtTransitTime->Text;
                if ($this->txtDescription) $this->objShippingMethod->Description = $this->txtDescription->Text;
                if ($this->txtImageFilename) $this->objShippingMethod->ImageFilename = $this->txtImageFilename->Text;
                if ($this->chkActive) $this->objShippingMethod->Active = $this->chkActive->Checked;
                if ($this->chkIsInternational) $this->objShippingMethod->IsInternational = $this->chkIsInternational->Checked;
                if ($this->chkTestMode) $this->objShippingMethod->TestMode = $this->chkTestMode->Checked;
                if ($this->txtSortOrder) $this->objShippingMethod->SortOrder = $this->txtSortOrder->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the ShippingMethod object
                $this->objShippingMethod->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's ShippingMethod instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteShippingMethod() {
            $this->objShippingMethod->Delete();
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
                case 'ShippingMethod': return $this->objShippingMethod;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to ShippingMethod fields -- will be created dynamically if not yet created
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
                case 'CarrierControl':
                    if (!$this->txtCarrier) return $this->txtCarrier_Create();
                    return $this->txtCarrier;
                case 'CarrierLabel':
                    if (!$this->lblCarrier) return $this->lblCarrier_Create();
                    return $this->lblCarrier;
                case 'ServiceTypeControl':
                    if (!$this->txtServiceType) return $this->txtServiceType_Create();
                    return $this->txtServiceType;
                case 'ServiceTypeLabel':
                    if (!$this->lblServiceType) return $this->lblServiceType_Create();
                    return $this->lblServiceType;
                case 'ClassNameControl':
                    if (!$this->txtClassName) return $this->txtClassName_Create();
                    return $this->txtClassName;
                case 'ClassNameLabel':
                    if (!$this->lblClassName) return $this->lblClassName_Create();
                    return $this->lblClassName;
                case 'TransitTimeControl':
                    if (!$this->txtTransitTime) return $this->txtTransitTime_Create();
                    return $this->txtTransitTime;
                case 'TransitTimeLabel':
                    if (!$this->lblTransitTime) return $this->lblTransitTime_Create();
                    return $this->lblTransitTime;
                case 'DescriptionControl':
                    if (!$this->txtDescription) return $this->txtDescription_Create();
                    return $this->txtDescription;
                case 'DescriptionLabel':
                    if (!$this->lblDescription) return $this->lblDescription_Create();
                    return $this->lblDescription;
                case 'ImageFilenameControl':
                    if (!$this->txtImageFilename) return $this->txtImageFilename_Create();
                    return $this->txtImageFilename;
                case 'ImageFilenameLabel':
                    if (!$this->lblImageFilename) return $this->lblImageFilename_Create();
                    return $this->lblImageFilename;
                case 'ActiveControl':
                    if (!$this->chkActive) return $this->chkActive_Create();
                    return $this->chkActive;
                case 'ActiveLabel':
                    if (!$this->lblActive) return $this->lblActive_Create();
                    return $this->lblActive;
                case 'IsInternationalControl':
                    if (!$this->chkIsInternational) return $this->chkIsInternational_Create();
                    return $this->chkIsInternational;
                case 'IsInternationalLabel':
                    if (!$this->lblIsInternational) return $this->lblIsInternational_Create();
                    return $this->lblIsInternational;
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
                    // Controls that point to ShippingMethod fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'TitleControl':
                        return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
                    case 'CarrierControl':
                        return ($this->txtCarrier = QType::Cast($mixValue, 'QControl'));
                    case 'ServiceTypeControl':
                        return ($this->txtServiceType = QType::Cast($mixValue, 'QControl'));
                    case 'ClassNameControl':
                        return ($this->txtClassName = QType::Cast($mixValue, 'QControl'));
                    case 'TransitTimeControl':
                        return ($this->txtTransitTime = QType::Cast($mixValue, 'QControl'));
                    case 'DescriptionControl':
                        return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
                    case 'ImageFilenameControl':
                        return ($this->txtImageFilename = QType::Cast($mixValue, 'QControl'));
                    case 'ActiveControl':
                        return ($this->chkActive = QType::Cast($mixValue, 'QControl'));
                    case 'IsInternationalControl':
                        return ($this->chkIsInternational = QType::Cast($mixValue, 'QControl'));
                    case 'TestModeControl':
                        return ($this->chkTestMode = QType::Cast($mixValue, 'QControl'));
                    case 'SortOrderControl':
                        return ($this->txtSortOrder = QType::Cast($mixValue, 'QControl'));
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