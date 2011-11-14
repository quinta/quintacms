<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the PhoneNumber class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single PhoneNumber object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a PhoneNumberMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read PhoneNumber $PhoneNumber the actual PhoneNumber data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NumberControl
     * property-read QLabel $NumberLabel
     * property QListBox $PersonIdControl
     * property-read QLabel $PersonIdLabel
     * property QIntegerTextBox $IsPrimaryControl
     * property-read QLabel $IsPrimaryLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class PhoneNumberMetaControlGen extends QBaseClass {
        // General Variables
        protected $objPhoneNumber;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of PhoneNumber's individual data fields
        protected $lblId;
        protected $txtNumber;
        protected $lstPerson;
        protected $txtIsPrimary;

        // Controls that allow the viewing of PhoneNumber's individual data fields
        protected $lblNumber;
        protected $lblPersonId;
        protected $lblIsPrimary;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * PhoneNumberMetaControl to edit a single PhoneNumber object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single PhoneNumber object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PhoneNumberMetaControl
         * @param PhoneNumber $objPhoneNumber new or existing PhoneNumber object
         */
         public function __construct($objParentObject, PhoneNumber $objPhoneNumber) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this PhoneNumberMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked PhoneNumber object
            $this->objPhoneNumber = $objPhoneNumber;

            // Figure out if we're Editing or Creating New
            if ($this->objPhoneNumber->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this PhoneNumberMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing PhoneNumber object creation - defaults to CreateOrEdit
         * @return PhoneNumberMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objPhoneNumber = PhoneNumber::Load($intId);

                // PhoneNumber was found -- return it!
                if ($objPhoneNumber)
                    return new PhoneNumberMetaControl($objParentObject, $objPhoneNumber);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a PhoneNumber object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new PhoneNumberMetaControl($objParentObject, new PhoneNumber());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PhoneNumberMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing PhoneNumber object creation - defaults to CreateOrEdit
         * @return PhoneNumberMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return PhoneNumberMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PhoneNumberMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing PhoneNumber object creation - defaults to CreateOrEdit
         * @return PhoneNumberMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return PhoneNumberMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objPhoneNumber->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
        }

        /**
         * Create and setup QTextBox txtNumber
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtNumber_Create($strControlId = null) {
            $this->txtNumber = new QTextBox($this->objParentObject, $strControlId);
            $this->txtNumber->Name = QApplication::Translate('Number');
            $this->txtNumber->Text = $this->objPhoneNumber->Number;
            $this->txtNumber->Required = true;
            $this->txtNumber->MaxLength = PhoneNumber::NumberMaxLength;
            return $this->txtNumber;
        }

        /**
         * Create and setup QLabel lblNumber
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblNumber_Create($strControlId = null) {
            $this->lblNumber = new QLabel($this->objParentObject, $strControlId);
            $this->lblNumber->Name = QApplication::Translate('Number');
            $this->lblNumber->Text = $this->objPhoneNumber->Number;
            $this->lblNumber->Required = true;
            return $this->lblNumber;
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
                if (($this->objPhoneNumber->Person) && ($this->objPhoneNumber->Person->Id == $objPerson->Id))
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
            $this->lblPersonId->Text = ($this->objPhoneNumber->Person) ? $this->objPhoneNumber->Person->__toString() : null;
            $this->lblPersonId->Required = true;
            return $this->lblPersonId;
        }

        /**
         * Create and setup QIntegerTextBox txtIsPrimary
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtIsPrimary_Create($strControlId = null) {
            $this->txtIsPrimary = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtIsPrimary->Name = QApplication::Translate('Is Primary');
            $this->txtIsPrimary->Text = $this->objPhoneNumber->IsPrimary;
            return $this->txtIsPrimary;
        }

        /**
         * Create and setup QLabel lblIsPrimary
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblIsPrimary_Create($strControlId = null, $strFormat = null) {
            $this->lblIsPrimary = new QLabel($this->objParentObject, $strControlId);
            $this->lblIsPrimary->Name = QApplication::Translate('Is Primary');
            $this->lblIsPrimary->Text = $this->objPhoneNumber->IsPrimary;
            $this->lblIsPrimary->Format = $strFormat;
            return $this->lblIsPrimary;
        }



        /**
         * Refresh this MetaControl with Data from the local PhoneNumber object.
         * @param boolean $blnReload reload PhoneNumber from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objPhoneNumber->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objPhoneNumber->Id;

            if ($this->txtNumber) $this->txtNumber->Text = $this->objPhoneNumber->Number;
            if ($this->lblNumber) $this->lblNumber->Text = $this->objPhoneNumber->Number;

            if ($this->lstPerson) {
                    $this->lstPerson->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstPerson->AddItem(QApplication::Translate('- Select One -'), null);
                $objPersonArray = Person::LoadAll();
                if ($objPersonArray) foreach ($objPersonArray as $objPerson) {
                    $objListItem = new QListItem($objPerson->__toString(), $objPerson->Id);
                    if (($this->objPhoneNumber->Person) && ($this->objPhoneNumber->Person->Id == $objPerson->Id))
                        $objListItem->Selected = true;
                    $this->lstPerson->AddItem($objListItem);
                }
            }
            if ($this->lblPersonId) $this->lblPersonId->Text = ($this->objPhoneNumber->Person) ? $this->objPhoneNumber->Person->__toString() : null;

            if ($this->txtIsPrimary) $this->txtIsPrimary->Text = $this->objPhoneNumber->IsPrimary;
            if ($this->lblIsPrimary) $this->lblIsPrimary->Text = $this->objPhoneNumber->IsPrimary;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC PHONENUMBER OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's PhoneNumber instance,
         * updating only the fields which have had a control created for it.
         */
        public function SavePhoneNumber() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtNumber) $this->objPhoneNumber->Number = $this->txtNumber->Text;
                if ($this->lstPerson) $this->objPhoneNumber->PersonId = $this->lstPerson->SelectedValue;
                if ($this->txtIsPrimary) $this->objPhoneNumber->IsPrimary = $this->txtIsPrimary->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the PhoneNumber object
                $this->objPhoneNumber->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's PhoneNumber instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeletePhoneNumber() {
            $this->objPhoneNumber->Delete();
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
                case 'PhoneNumber': return $this->objPhoneNumber;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to PhoneNumber fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'NumberControl':
                    if (!$this->txtNumber) return $this->txtNumber_Create();
                    return $this->txtNumber;
                case 'NumberLabel':
                    if (!$this->lblNumber) return $this->lblNumber_Create();
                    return $this->lblNumber;
                case 'PersonIdControl':
                    if (!$this->lstPerson) return $this->lstPerson_Create();
                    return $this->lstPerson;
                case 'PersonIdLabel':
                    if (!$this->lblPersonId) return $this->lblPersonId_Create();
                    return $this->lblPersonId;
                case 'IsPrimaryControl':
                    if (!$this->txtIsPrimary) return $this->txtIsPrimary_Create();
                    return $this->txtIsPrimary;
                case 'IsPrimaryLabel':
                    if (!$this->lblIsPrimary) return $this->lblIsPrimary_Create();
                    return $this->lblIsPrimary;
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
                    // Controls that point to PhoneNumber fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NumberControl':
                        return ($this->txtNumber = QType::Cast($mixValue, 'QControl'));
                    case 'PersonIdControl':
                        return ($this->lstPerson = QType::Cast($mixValue, 'QControl'));
                    case 'IsPrimaryControl':
                        return ($this->txtIsPrimary = QType::Cast($mixValue, 'QControl'));
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