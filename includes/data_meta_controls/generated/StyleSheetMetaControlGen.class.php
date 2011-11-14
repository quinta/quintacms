<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the StyleSheet class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single StyleSheet object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a StyleSheetMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read StyleSheet $StyleSheet the actual StyleSheet data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QTextBox $DescriptionControl
     * property-read QLabel $DescriptionLabel
     * property QTextBox $FilenameControl
     * property-read QLabel $FilenameLabel
     * property QTextBox $TypeControl
     * property-read QLabel $TypeLabel
     * property QListBox $PageControl
     * property-read QLabel $PageLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class StyleSheetMetaControlGen extends QBaseClass {
        // General Variables
        protected $objStyleSheet;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of StyleSheet's individual data fields
        protected $lblId;
        protected $txtName;
        protected $txtDescription;
        protected $txtFilename;
        protected $txtType;

        // Controls that allow the viewing of StyleSheet's individual data fields
        protected $lblName;
        protected $lblDescription;
        protected $lblFilename;
        protected $lblType;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstPages;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblPages;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * StyleSheetMetaControl to edit a single StyleSheet object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single StyleSheet object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this StyleSheetMetaControl
         * @param StyleSheet $objStyleSheet new or existing StyleSheet object
         */
         public function __construct($objParentObject, StyleSheet $objStyleSheet) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this StyleSheetMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked StyleSheet object
            $this->objStyleSheet = $objStyleSheet;

            // Figure out if we're Editing or Creating New
            if ($this->objStyleSheet->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this StyleSheetMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing StyleSheet object creation - defaults to CreateOrEdit
         * @return StyleSheetMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objStyleSheet = StyleSheet::Load($intId);

                // StyleSheet was found -- return it!
                if ($objStyleSheet)
                    return new StyleSheetMetaControl($objParentObject, $objStyleSheet);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a StyleSheet object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new StyleSheetMetaControl($objParentObject, new StyleSheet());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this StyleSheetMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing StyleSheet object creation - defaults to CreateOrEdit
         * @return StyleSheetMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return StyleSheetMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this StyleSheetMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing StyleSheet object creation - defaults to CreateOrEdit
         * @return StyleSheetMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return StyleSheetMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objStyleSheet->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
        }

        /**
         * Create and setup QTextBox txtName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtName_Create($strControlId = null) {
            $this->txtName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtName->Name = QApplication::Translate('Name');
            $this->txtName->Text = $this->objStyleSheet->Name;
            $this->txtName->MaxLength = StyleSheet::NameMaxLength;
            return $this->txtName;
        }

        /**
         * Create and setup QLabel lblName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblName_Create($strControlId = null) {
            $this->lblName = new QLabel($this->objParentObject, $strControlId);
            $this->lblName->Name = QApplication::Translate('Name');
            $this->lblName->Text = $this->objStyleSheet->Name;
            return $this->lblName;
        }

        /**
         * Create and setup QTextBox txtDescription
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtDescription_Create($strControlId = null) {
            $this->txtDescription = new QTextBox($this->objParentObject, $strControlId);
            $this->txtDescription->Name = QApplication::Translate('Description');
            $this->txtDescription->Text = $this->objStyleSheet->Description;
            $this->txtDescription->MaxLength = StyleSheet::DescriptionMaxLength;
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
            $this->lblDescription->Text = $this->objStyleSheet->Description;
            return $this->lblDescription;
        }

        /**
         * Create and setup QTextBox txtFilename
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtFilename_Create($strControlId = null) {
            $this->txtFilename = new QTextBox($this->objParentObject, $strControlId);
            $this->txtFilename->Name = QApplication::Translate('Filename');
            $this->txtFilename->Text = $this->objStyleSheet->Filename;
            $this->txtFilename->MaxLength = StyleSheet::FilenameMaxLength;
            return $this->txtFilename;
        }

        /**
         * Create and setup QLabel lblFilename
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblFilename_Create($strControlId = null) {
            $this->lblFilename = new QLabel($this->objParentObject, $strControlId);
            $this->lblFilename->Name = QApplication::Translate('Filename');
            $this->lblFilename->Text = $this->objStyleSheet->Filename;
            return $this->lblFilename;
        }

        /**
         * Create and setup QTextBox txtType
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtType_Create($strControlId = null) {
            $this->txtType = new QTextBox($this->objParentObject, $strControlId);
            $this->txtType->Name = QApplication::Translate('Type');
            $this->txtType->Text = $this->objStyleSheet->Type;
            return $this->txtType;
        }

        /**
         * Create and setup QLabel lblType
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblType_Create($strControlId = null) {
            $this->lblType = new QLabel($this->objParentObject, $strControlId);
            $this->lblType->Name = QApplication::Translate('Type');
            $this->lblType->Text = $this->objStyleSheet->Type;
            return $this->lblType;
        }

        /**
         * Create and setup QListBox lstPages
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstPages_Create($strControlId = null) {
            $this->lstPages = new QListBox($this->objParentObject, $strControlId);
            $this->lstPages->Name = QApplication::Translate('Pages');
            $this->lstPages->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objStyleSheet->GetPageArray();
            $objPageArray = Page::LoadAll();
            if ($objPageArray) foreach ($objPageArray as $objPage) {
                $objListItem = new QListItem($objPage->__toString(), $objPage->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objPage->Id)
                        $objListItem->Selected = true;
                }
                $this->lstPages->AddItem($objListItem);
            }
            return $this->lstPages;
        }

        /**
         * Create and setup QLabel lblPages
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblPages_Create($strControlId = null, $strGlue = ', ') {
            $this->lblPages = new QLabel($this->objParentObject, $strControlId);
            $this->lblPages->Name = QApplication::Translate('Pages');
            
            $objAssociatedArray = $this->objStyleSheet->GetPageArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblPages->Text = implode($strGlue, $strItems);
            return $this->lblPages;
        }



        /**
         * Refresh this MetaControl with Data from the local StyleSheet object.
         * @param boolean $blnReload reload StyleSheet from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objStyleSheet->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objStyleSheet->Id;

            if ($this->txtName) $this->txtName->Text = $this->objStyleSheet->Name;
            if ($this->lblName) $this->lblName->Text = $this->objStyleSheet->Name;

            if ($this->txtDescription) $this->txtDescription->Text = $this->objStyleSheet->Description;
            if ($this->lblDescription) $this->lblDescription->Text = $this->objStyleSheet->Description;

            if ($this->txtFilename) $this->txtFilename->Text = $this->objStyleSheet->Filename;
            if ($this->lblFilename) $this->lblFilename->Text = $this->objStyleSheet->Filename;

            if ($this->txtType) $this->txtType->Text = $this->objStyleSheet->Type;
            if ($this->lblType) $this->lblType->Text = $this->objStyleSheet->Type;

            if ($this->lstPages) {
                $this->lstPages->RemoveAllItems();
                $objAssociatedArray = $this->objStyleSheet->GetPageArray();
                $objPageArray = Page::LoadAll();
                if ($objPageArray) foreach ($objPageArray as $objPage) {
                    $objListItem = new QListItem($objPage->__toString(), $objPage->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objPage->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstPages->AddItem($objListItem);
                }
            }
            if ($this->lblPages) {
                $objAssociatedArray = $this->objStyleSheet->GetPageArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblPages->Text = implode($strGlue, $strItems);
            }

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////

        protected function lstPages_Update() {
            if ($this->lstPages) {
                $this->objStyleSheet->UnassociateAllPages();
                $objSelectedListItems = $this->lstPages->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objStyleSheet->AssociatePage(Page::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC STYLESHEET OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's StyleSheet instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveStyleSheet() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objStyleSheet->Name = $this->txtName->Text;
                if ($this->txtDescription) $this->objStyleSheet->Description = $this->txtDescription->Text;
                if ($this->txtFilename) $this->objStyleSheet->Filename = $this->txtFilename->Text;
                if ($this->txtType) $this->objStyleSheet->Type = $this->txtType->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the StyleSheet object
                $this->objStyleSheet->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstPages_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's StyleSheet instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteStyleSheet() {
            $this->objStyleSheet->UnassociateAllPages();
            $this->objStyleSheet->Delete();
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
                case 'StyleSheet': return $this->objStyleSheet;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to StyleSheet fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'NameControl':
                    if (!$this->txtName) return $this->txtName_Create();
                    return $this->txtName;
                case 'NameLabel':
                    if (!$this->lblName) return $this->lblName_Create();
                    return $this->lblName;
                case 'DescriptionControl':
                    if (!$this->txtDescription) return $this->txtDescription_Create();
                    return $this->txtDescription;
                case 'DescriptionLabel':
                    if (!$this->lblDescription) return $this->lblDescription_Create();
                    return $this->lblDescription;
                case 'FilenameControl':
                    if (!$this->txtFilename) return $this->txtFilename_Create();
                    return $this->txtFilename;
                case 'FilenameLabel':
                    if (!$this->lblFilename) return $this->lblFilename_Create();
                    return $this->lblFilename;
                case 'TypeControl':
                    if (!$this->txtType) return $this->txtType_Create();
                    return $this->txtType;
                case 'TypeLabel':
                    if (!$this->lblType) return $this->lblType_Create();
                    return $this->lblType;
                case 'PageControl':
                    if (!$this->lstPages) return $this->lstPages_Create();
                    return $this->lstPages;
                case 'PageLabel':
                    if (!$this->lblPages) return $this->lblPages_Create();
                    return $this->lblPages;
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
                    // Controls that point to StyleSheet fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'DescriptionControl':
                        return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
                    case 'FilenameControl':
                        return ($this->txtFilename = QType::Cast($mixValue, 'QControl'));
                    case 'TypeControl':
                        return ($this->txtType = QType::Cast($mixValue, 'QControl'));
                    case 'PageControl':
                        return ($this->lstPages = QType::Cast($mixValue, 'QControl'));
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