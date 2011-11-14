<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the ShippingRate class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single ShippingRate object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a ShippingRateMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read ShippingRate $ShippingRate the actual ShippingRate data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QLabel $CreationDateControl
     * property-read QLabel $CreationDateLabel
     * property QFloatTextBox $RateControl
     * property-read QLabel $RateLabel
     * property QListBox $ZoneIdControl
     * property-read QLabel $ZoneIdLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class ShippingRateMetaControlGen extends QBaseClass {
        // General Variables
        protected $objShippingRate;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of ShippingRate's individual data fields
        protected $lblId;
        protected $lblCreationDate;
        protected $txtRate;
        protected $lstZone;

        // Controls that allow the viewing of ShippingRate's individual data fields
        protected $lblRate;
        protected $lblZoneId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * ShippingRateMetaControl to edit a single ShippingRate object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single ShippingRate object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShippingRateMetaControl
         * @param ShippingRate $objShippingRate new or existing ShippingRate object
         */
         public function __construct($objParentObject, ShippingRate $objShippingRate) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this ShippingRateMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked ShippingRate object
            $this->objShippingRate = $objShippingRate;

            // Figure out if we're Editing or Creating New
            if ($this->objShippingRate->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this ShippingRateMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing ShippingRate object creation - defaults to CreateOrEdit
         * @return ShippingRateMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objShippingRate = ShippingRate::Load($intId);

                // ShippingRate was found -- return it!
                if ($objShippingRate)
                    return new ShippingRateMetaControl($objParentObject, $objShippingRate);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a ShippingRate object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new ShippingRateMetaControl($objParentObject, new ShippingRate());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShippingRateMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ShippingRate object creation - defaults to CreateOrEdit
         * @return ShippingRateMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return ShippingRateMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShippingRateMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ShippingRate object creation - defaults to CreateOrEdit
         * @return ShippingRateMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return ShippingRateMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objShippingRate->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
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
                $this->lblCreationDate->Text = $this->objShippingRate->CreationDate;
            else
                $this->lblCreationDate->Text = 'N/A';
            return $this->lblCreationDate;
        }

        /**
         * Create and setup QFloatTextBox txtRate
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtRate_Create($strControlId = null) {
            $this->txtRate = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtRate->Name = QApplication::Translate('Rate');
            $this->txtRate->Text = $this->objShippingRate->Rate;
            $this->txtRate->Required = true;
            return $this->txtRate;
        }

        /**
         * Create and setup QLabel lblRate
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblRate_Create($strControlId = null, $strFormat = null) {
            $this->lblRate = new QLabel($this->objParentObject, $strControlId);
            $this->lblRate->Name = QApplication::Translate('Rate');
            $this->lblRate->Text = $this->objShippingRate->Rate;
            $this->lblRate->Required = true;
            $this->lblRate->Format = $strFormat;
            return $this->lblRate;
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
                $this->lstZone->AddItem(new QListItem($strValue, $intId, $this->objShippingRate->ZoneId == $intId));
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
            $this->lblZoneId->Text = ($this->objShippingRate->ZoneId) ? ZoneType::$NameArray[$this->objShippingRate->ZoneId] : null;
            $this->lblZoneId->Required = true;
            return $this->lblZoneId;
        }



        /**
         * Refresh this MetaControl with Data from the local ShippingRate object.
         * @param boolean $blnReload reload ShippingRate from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objShippingRate->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objShippingRate->Id;

            if ($this->lblCreationDate) if ($this->blnEditMode) $this->lblCreationDate->Text = $this->objShippingRate->CreationDate;

            if ($this->txtRate) $this->txtRate->Text = $this->objShippingRate->Rate;
            if ($this->lblRate) $this->lblRate->Text = $this->objShippingRate->Rate;

            if ($this->lstZone) $this->lstZone->SelectedValue = $this->objShippingRate->ZoneId;
            if ($this->lblZoneId) $this->lblZoneId->Text = ($this->objShippingRate->ZoneId) ? ZoneType::$NameArray[$this->objShippingRate->ZoneId] : null;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC SHIPPINGRATE OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's ShippingRate instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveShippingRate() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtRate) $this->objShippingRate->Rate = $this->txtRate->Text;
                if ($this->lstZone) $this->objShippingRate->ZoneId = $this->lstZone->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the ShippingRate object
                $this->objShippingRate->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's ShippingRate instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteShippingRate() {
            $this->objShippingRate->Delete();
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
                case 'ShippingRate': return $this->objShippingRate;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to ShippingRate fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'CreationDateControl':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'CreationDateLabel':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'RateControl':
                    if (!$this->txtRate) return $this->txtRate_Create();
                    return $this->txtRate;
                case 'RateLabel':
                    if (!$this->lblRate) return $this->lblRate_Create();
                    return $this->lblRate;
                case 'ZoneIdControl':
                    if (!$this->lstZone) return $this->lstZone_Create();
                    return $this->lstZone;
                case 'ZoneIdLabel':
                    if (!$this->lblZoneId) return $this->lblZoneId_Create();
                    return $this->lblZoneId;
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
                    // Controls that point to ShippingRate fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'CreationDateControl':
                        return ($this->lblCreationDate = QType::Cast($mixValue, 'QControl'));
                    case 'RateControl':
                        return ($this->txtRate = QType::Cast($mixValue, 'QControl'));
                    case 'ZoneIdControl':
                        return ($this->lstZone = QType::Cast($mixValue, 'QControl'));
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