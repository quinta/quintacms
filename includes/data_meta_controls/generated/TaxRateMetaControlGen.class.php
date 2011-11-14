<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the TaxRate class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single TaxRate object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a TaxRateMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read TaxRate $TaxRate the actual TaxRate data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QListBox $ZoneIdControl
     * property-read QLabel $ZoneIdLabel
     * property QFloatTextBox $RateControl
     * property-read QLabel $RateLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class TaxRateMetaControlGen extends QBaseClass {
        // General Variables
        protected $objTaxRate;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of TaxRate's individual data fields
        protected $lblId;
        protected $lstZone;
        protected $txtRate;

        // Controls that allow the viewing of TaxRate's individual data fields
        protected $lblZoneId;
        protected $lblRate;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * TaxRateMetaControl to edit a single TaxRate object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single TaxRate object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this TaxRateMetaControl
         * @param TaxRate $objTaxRate new or existing TaxRate object
         */
         public function __construct($objParentObject, TaxRate $objTaxRate) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this TaxRateMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked TaxRate object
            $this->objTaxRate = $objTaxRate;

            // Figure out if we're Editing or Creating New
            if ($this->objTaxRate->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this TaxRateMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing TaxRate object creation - defaults to CreateOrEdit
         * @return TaxRateMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objTaxRate = TaxRate::Load($intId);

                // TaxRate was found -- return it!
                if ($objTaxRate)
                    return new TaxRateMetaControl($objParentObject, $objTaxRate);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a TaxRate object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new TaxRateMetaControl($objParentObject, new TaxRate());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this TaxRateMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing TaxRate object creation - defaults to CreateOrEdit
         * @return TaxRateMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return TaxRateMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this TaxRateMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing TaxRate object creation - defaults to CreateOrEdit
         * @return TaxRateMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return TaxRateMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objTaxRate->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
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
                $this->lstZone->AddItem(new QListItem($strValue, $intId, $this->objTaxRate->ZoneId == $intId));
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
            $this->lblZoneId->Text = ($this->objTaxRate->ZoneId) ? ZoneType::$NameArray[$this->objTaxRate->ZoneId] : null;
            $this->lblZoneId->Required = true;
            return $this->lblZoneId;
        }

        /**
         * Create and setup QFloatTextBox txtRate
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtRate_Create($strControlId = null) {
            $this->txtRate = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtRate->Name = QApplication::Translate('Rate');
            $this->txtRate->Text = $this->objTaxRate->Rate;
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
            $this->lblRate->Text = $this->objTaxRate->Rate;
            $this->lblRate->Required = true;
            $this->lblRate->Format = $strFormat;
            return $this->lblRate;
        }



        /**
         * Refresh this MetaControl with Data from the local TaxRate object.
         * @param boolean $blnReload reload TaxRate from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objTaxRate->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objTaxRate->Id;

            if ($this->lstZone) $this->lstZone->SelectedValue = $this->objTaxRate->ZoneId;
            if ($this->lblZoneId) $this->lblZoneId->Text = ($this->objTaxRate->ZoneId) ? ZoneType::$NameArray[$this->objTaxRate->ZoneId] : null;

            if ($this->txtRate) $this->txtRate->Text = $this->objTaxRate->Rate;
            if ($this->lblRate) $this->lblRate->Text = $this->objTaxRate->Rate;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC TAXRATE OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's TaxRate instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveTaxRate() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstZone) $this->objTaxRate->ZoneId = $this->lstZone->SelectedValue;
                if ($this->txtRate) $this->objTaxRate->Rate = $this->txtRate->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the TaxRate object
                $this->objTaxRate->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's TaxRate instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteTaxRate() {
            $this->objTaxRate->Delete();
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
                case 'TaxRate': return $this->objTaxRate;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to TaxRate fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'ZoneIdControl':
                    if (!$this->lstZone) return $this->lstZone_Create();
                    return $this->lstZone;
                case 'ZoneIdLabel':
                    if (!$this->lblZoneId) return $this->lblZoneId_Create();
                    return $this->lblZoneId;
                case 'RateControl':
                    if (!$this->txtRate) return $this->txtRate_Create();
                    return $this->txtRate;
                case 'RateLabel':
                    if (!$this->lblRate) return $this->lblRate_Create();
                    return $this->lblRate;
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
                    // Controls that point to TaxRate fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'ZoneIdControl':
                        return ($this->lstZone = QType::Cast($mixValue, 'QControl'));
                    case 'RateControl':
                        return ($this->txtRate = QType::Cast($mixValue, 'QControl'));
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