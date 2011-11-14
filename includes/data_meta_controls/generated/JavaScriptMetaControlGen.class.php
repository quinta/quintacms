<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the JavaScript class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single JavaScript object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a JavaScriptMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read JavaScript $JavaScript the actual JavaScript data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QTextBox $DescriptionControl
     * property-read QLabel $DescriptionLabel
     * property QTextBox $FilenameControl
     * property-read QLabel $FilenameLabel
     * property QListBox $PageControl
     * property-read QLabel $PageLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class JavaScriptMetaControlGen extends QBaseClass {
        // General Variables
        protected $objJavaScript;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of JavaScript's individual data fields
        protected $lblId;
        protected $txtName;
        protected $txtDescription;
        protected $txtFilename;

        // Controls that allow the viewing of JavaScript's individual data fields
        protected $lblName;
        protected $lblDescription;
        protected $lblFilename;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstPages;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblPages;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * JavaScriptMetaControl to edit a single JavaScript object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single JavaScript object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this JavaScriptMetaControl
         * @param JavaScript $objJavaScript new or existing JavaScript object
         */
         public function __construct($objParentObject, JavaScript $objJavaScript) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this JavaScriptMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked JavaScript object
            $this->objJavaScript = $objJavaScript;

            // Figure out if we're Editing or Creating New
            if ($this->objJavaScript->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this JavaScriptMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing JavaScript object creation - defaults to CreateOrEdit
         * @return JavaScriptMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objJavaScript = JavaScript::Load($intId);

                // JavaScript was found -- return it!
                if ($objJavaScript)
                    return new JavaScriptMetaControl($objParentObject, $objJavaScript);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a JavaScript object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new JavaScriptMetaControl($objParentObject, new JavaScript());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this JavaScriptMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing JavaScript object creation - defaults to CreateOrEdit
         * @return JavaScriptMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return JavaScriptMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this JavaScriptMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing JavaScript object creation - defaults to CreateOrEdit
         * @return JavaScriptMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return JavaScriptMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objJavaScript->Id;
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
            $this->txtName->Text = $this->objJavaScript->Name;
            $this->txtName->MaxLength = JavaScript::NameMaxLength;
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
            $this->lblName->Text = $this->objJavaScript->Name;
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
            $this->txtDescription->Text = $this->objJavaScript->Description;
            $this->txtDescription->MaxLength = JavaScript::DescriptionMaxLength;
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
            $this->lblDescription->Text = $this->objJavaScript->Description;
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
            $this->txtFilename->Text = $this->objJavaScript->Filename;
            $this->txtFilename->MaxLength = JavaScript::FilenameMaxLength;
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
            $this->lblFilename->Text = $this->objJavaScript->Filename;
            return $this->lblFilename;
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
            $objAssociatedArray = $this->objJavaScript->GetPageArray();
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
            
            $objAssociatedArray = $this->objJavaScript->GetPageArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblPages->Text = implode($strGlue, $strItems);
            return $this->lblPages;
        }



        /**
         * Refresh this MetaControl with Data from the local JavaScript object.
         * @param boolean $blnReload reload JavaScript from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objJavaScript->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objJavaScript->Id;

            if ($this->txtName) $this->txtName->Text = $this->objJavaScript->Name;
            if ($this->lblName) $this->lblName->Text = $this->objJavaScript->Name;

            if ($this->txtDescription) $this->txtDescription->Text = $this->objJavaScript->Description;
            if ($this->lblDescription) $this->lblDescription->Text = $this->objJavaScript->Description;

            if ($this->txtFilename) $this->txtFilename->Text = $this->objJavaScript->Filename;
            if ($this->lblFilename) $this->lblFilename->Text = $this->objJavaScript->Filename;

            if ($this->lstPages) {
                $this->lstPages->RemoveAllItems();
                $objAssociatedArray = $this->objJavaScript->GetPageArray();
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
                $objAssociatedArray = $this->objJavaScript->GetPageArray();
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
                $this->objJavaScript->UnassociateAllPages();
                $objSelectedListItems = $this->lstPages->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objJavaScript->AssociatePage(Page::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC JAVASCRIPT OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's JavaScript instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveJavaScript() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objJavaScript->Name = $this->txtName->Text;
                if ($this->txtDescription) $this->objJavaScript->Description = $this->txtDescription->Text;
                if ($this->txtFilename) $this->objJavaScript->Filename = $this->txtFilename->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the JavaScript object
                $this->objJavaScript->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstPages_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's JavaScript instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteJavaScript() {
            $this->objJavaScript->UnassociateAllPages();
            $this->objJavaScript->Delete();
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
                case 'JavaScript': return $this->objJavaScript;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to JavaScript fields -- will be created dynamically if not yet created
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
                    // Controls that point to JavaScript fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'DescriptionControl':
                        return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
                    case 'FilenameControl':
                        return ($this->txtFilename = QType::Cast($mixValue, 'QControl'));
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