<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the Module class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single Module object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a ModuleMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read Module $Module the actual Module data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QTextBox $CssclassControl
     * property-read QLabel $CssclassLabel
     * property QTextBox $TitleControl
     * property-read QLabel $TitleLabel
     * property QTextBox $DescriptionControl
     * property-read QLabel $DescriptionLabel
     * property QTextBox $ClassNameControl
     * property-read QLabel $ClassNameLabel
     * property QCheckBox $ShowTitleControl
     * property-read QLabel $ShowTitleLabel
     * property QCheckBox $ShowDescriptionControl
     * property-read QLabel $ShowDescriptionLabel
     * property QListBox $ContentBlockIdControl
     * property-read QLabel $ContentBlockIdLabel
     * property QListBox $ParentModuleIdControl
     * property-read QLabel $ParentModuleIdLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class ModuleMetaControlGen extends QBaseClass {
        // General Variables
        protected $objModule;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of Module's individual data fields
        protected $lblId;
        protected $txtName;
        protected $txtCssclass;
        protected $txtTitle;
        protected $txtDescription;
        protected $txtClassName;
        protected $chkShowTitle;
        protected $chkShowDescription;
        protected $lstContentBlock;
        protected $lstParentModule;

        // Controls that allow the viewing of Module's individual data fields
        protected $lblName;
        protected $lblCssclass;
        protected $lblTitle;
        protected $lblDescription;
        protected $lblClassName;
        protected $lblShowTitle;
        protected $lblShowDescription;
        protected $lblContentBlockId;
        protected $lblParentModuleId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * ModuleMetaControl to edit a single Module object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single Module object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ModuleMetaControl
         * @param Module $objModule new or existing Module object
         */
         public function __construct($objParentObject, Module $objModule) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this ModuleMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked Module object
            $this->objModule = $objModule;

            // Figure out if we're Editing or Creating New
            if ($this->objModule->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this ModuleMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing Module object creation - defaults to CreateOrEdit
         * @return ModuleMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objModule = Module::Load($intId);

                // Module was found -- return it!
                if ($objModule)
                    return new ModuleMetaControl($objParentObject, $objModule);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a Module object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new ModuleMetaControl($objParentObject, new Module());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ModuleMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Module object creation - defaults to CreateOrEdit
         * @return ModuleMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return ModuleMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ModuleMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Module object creation - defaults to CreateOrEdit
         * @return ModuleMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return ModuleMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objModule->Id;
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
            $this->txtName->Text = $this->objModule->Name;
            $this->txtName->Required = true;
            $this->txtName->MaxLength = Module::NameMaxLength;
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
            $this->lblName->Text = $this->objModule->Name;
            $this->lblName->Required = true;
            return $this->lblName;
        }

        /**
         * Create and setup QTextBox txtCssclass
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCssclass_Create($strControlId = null) {
            $this->txtCssclass = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCssclass->Name = QApplication::Translate('Cssclass');
            $this->txtCssclass->Text = $this->objModule->Cssclass;
            $this->txtCssclass->MaxLength = Module::CssclassMaxLength;
            return $this->txtCssclass;
        }

        /**
         * Create and setup QLabel lblCssclass
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCssclass_Create($strControlId = null) {
            $this->lblCssclass = new QLabel($this->objParentObject, $strControlId);
            $this->lblCssclass->Name = QApplication::Translate('Cssclass');
            $this->lblCssclass->Text = $this->objModule->Cssclass;
            return $this->lblCssclass;
        }

        /**
         * Create and setup QTextBox txtTitle
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtTitle_Create($strControlId = null) {
            $this->txtTitle = new QTextBox($this->objParentObject, $strControlId);
            $this->txtTitle->Name = QApplication::Translate('Title');
            $this->txtTitle->Text = $this->objModule->Title;
            $this->txtTitle->MaxLength = Module::TitleMaxLength;
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
            $this->lblTitle->Text = $this->objModule->Title;
            return $this->lblTitle;
        }

        /**
         * Create and setup QTextBox txtDescription
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtDescription_Create($strControlId = null) {
            $this->txtDescription = new QTextBox($this->objParentObject, $strControlId);
            $this->txtDescription->Name = QApplication::Translate('Description');
            $this->txtDescription->Text = $this->objModule->Description;
            $this->txtDescription->MaxLength = Module::DescriptionMaxLength;
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
            $this->lblDescription->Text = $this->objModule->Description;
            return $this->lblDescription;
        }

        /**
         * Create and setup QTextBox txtClassName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtClassName_Create($strControlId = null) {
            $this->txtClassName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtClassName->Name = QApplication::Translate('Class Name');
            $this->txtClassName->Text = $this->objModule->ClassName;
            $this->txtClassName->MaxLength = Module::ClassNameMaxLength;
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
            $this->lblClassName->Text = $this->objModule->ClassName;
            return $this->lblClassName;
        }

        /**
         * Create and setup QCheckBox chkShowTitle
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkShowTitle_Create($strControlId = null) {
            $this->chkShowTitle = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkShowTitle->Name = QApplication::Translate('Show Title');
            $this->chkShowTitle->Checked = $this->objModule->ShowTitle;
            return $this->chkShowTitle;
        }

        /**
         * Create and setup QLabel lblShowTitle
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblShowTitle_Create($strControlId = null) {
            $this->lblShowTitle = new QLabel($this->objParentObject, $strControlId);
            $this->lblShowTitle->Name = QApplication::Translate('Show Title');
            $this->lblShowTitle->Text = ($this->objModule->ShowTitle) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblShowTitle;
        }

        /**
         * Create and setup QCheckBox chkShowDescription
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkShowDescription_Create($strControlId = null) {
            $this->chkShowDescription = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkShowDescription->Name = QApplication::Translate('Show Description');
            $this->chkShowDescription->Checked = $this->objModule->ShowDescription;
            return $this->chkShowDescription;
        }

        /**
         * Create and setup QLabel lblShowDescription
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblShowDescription_Create($strControlId = null) {
            $this->lblShowDescription = new QLabel($this->objParentObject, $strControlId);
            $this->lblShowDescription->Name = QApplication::Translate('Show Description');
            $this->lblShowDescription->Text = ($this->objModule->ShowDescription) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblShowDescription;
        }

        /**
         * Create and setup QListBox lstContentBlock
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstContentBlock_Create($strControlId = null) {
            $this->lstContentBlock = new QListBox($this->objParentObject, $strControlId);
            $this->lstContentBlock->Name = QApplication::Translate('Content Block');
            $this->lstContentBlock->AddItem(QApplication::Translate('- Select One -'), null);
            $objContentBlockArray = ContentBlock::LoadAll();
            if ($objContentBlockArray) foreach ($objContentBlockArray as $objContentBlock) {
                $objListItem = new QListItem($objContentBlock->__toString(), $objContentBlock->Id);
                if (($this->objModule->ContentBlock) && ($this->objModule->ContentBlock->Id == $objContentBlock->Id))
                    $objListItem->Selected = true;
                $this->lstContentBlock->AddItem($objListItem);
            }
            return $this->lstContentBlock;
        }

        /**
         * Create and setup QLabel lblContentBlockId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblContentBlockId_Create($strControlId = null) {
            $this->lblContentBlockId = new QLabel($this->objParentObject, $strControlId);
            $this->lblContentBlockId->Name = QApplication::Translate('Content Block');
            $this->lblContentBlockId->Text = ($this->objModule->ContentBlock) ? $this->objModule->ContentBlock->__toString() : null;
            return $this->lblContentBlockId;
        }

        /**
         * Create and setup QListBox lstParentModule
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstParentModule_Create($strControlId = null) {
            $this->lstParentModule = new QListBox($this->objParentObject, $strControlId);
            $this->lstParentModule->Name = QApplication::Translate('Parent Module');
            $this->lstParentModule->AddItem(QApplication::Translate('- Select One -'), null);
            $objParentModuleArray = Module::LoadAll();
            if ($objParentModuleArray) foreach ($objParentModuleArray as $objParentModule) {
                $objListItem = new QListItem($objParentModule->__toString(), $objParentModule->Id);
                if (($this->objModule->ParentModule) && ($this->objModule->ParentModule->Id == $objParentModule->Id))
                    $objListItem->Selected = true;
                $this->lstParentModule->AddItem($objListItem);
            }
            return $this->lstParentModule;
        }

        /**
         * Create and setup QLabel lblParentModuleId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblParentModuleId_Create($strControlId = null) {
            $this->lblParentModuleId = new QLabel($this->objParentObject, $strControlId);
            $this->lblParentModuleId->Name = QApplication::Translate('Parent Module');
            $this->lblParentModuleId->Text = ($this->objModule->ParentModule) ? $this->objModule->ParentModule->__toString() : null;
            return $this->lblParentModuleId;
        }



        /**
         * Refresh this MetaControl with Data from the local Module object.
         * @param boolean $blnReload reload Module from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objModule->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objModule->Id;

            if ($this->txtName) $this->txtName->Text = $this->objModule->Name;
            if ($this->lblName) $this->lblName->Text = $this->objModule->Name;

            if ($this->txtCssclass) $this->txtCssclass->Text = $this->objModule->Cssclass;
            if ($this->lblCssclass) $this->lblCssclass->Text = $this->objModule->Cssclass;

            if ($this->txtTitle) $this->txtTitle->Text = $this->objModule->Title;
            if ($this->lblTitle) $this->lblTitle->Text = $this->objModule->Title;

            if ($this->txtDescription) $this->txtDescription->Text = $this->objModule->Description;
            if ($this->lblDescription) $this->lblDescription->Text = $this->objModule->Description;

            if ($this->txtClassName) $this->txtClassName->Text = $this->objModule->ClassName;
            if ($this->lblClassName) $this->lblClassName->Text = $this->objModule->ClassName;

            if ($this->chkShowTitle) $this->chkShowTitle->Checked = $this->objModule->ShowTitle;
            if ($this->lblShowTitle) $this->lblShowTitle->Text = ($this->objModule->ShowTitle) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkShowDescription) $this->chkShowDescription->Checked = $this->objModule->ShowDescription;
            if ($this->lblShowDescription) $this->lblShowDescription->Text = ($this->objModule->ShowDescription) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->lstContentBlock) {
                    $this->lstContentBlock->RemoveAllItems();
                $this->lstContentBlock->AddItem(QApplication::Translate('- Select One -'), null);
                $objContentBlockArray = ContentBlock::LoadAll();
                if ($objContentBlockArray) foreach ($objContentBlockArray as $objContentBlock) {
                    $objListItem = new QListItem($objContentBlock->__toString(), $objContentBlock->Id);
                    if (($this->objModule->ContentBlock) && ($this->objModule->ContentBlock->Id == $objContentBlock->Id))
                        $objListItem->Selected = true;
                    $this->lstContentBlock->AddItem($objListItem);
                }
            }
            if ($this->lblContentBlockId) $this->lblContentBlockId->Text = ($this->objModule->ContentBlock) ? $this->objModule->ContentBlock->__toString() : null;

            if ($this->lstParentModule) {
                    $this->lstParentModule->RemoveAllItems();
                $this->lstParentModule->AddItem(QApplication::Translate('- Select One -'), null);
                $objParentModuleArray = Module::LoadAll();
                if ($objParentModuleArray) foreach ($objParentModuleArray as $objParentModule) {
                    $objListItem = new QListItem($objParentModule->__toString(), $objParentModule->Id);
                    if (($this->objModule->ParentModule) && ($this->objModule->ParentModule->Id == $objParentModule->Id))
                        $objListItem->Selected = true;
                    $this->lstParentModule->AddItem($objListItem);
                }
            }
            if ($this->lblParentModuleId) $this->lblParentModuleId->Text = ($this->objModule->ParentModule) ? $this->objModule->ParentModule->__toString() : null;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC MODULE OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's Module instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveModule() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objModule->Name = $this->txtName->Text;
                if ($this->txtCssclass) $this->objModule->Cssclass = $this->txtCssclass->Text;
                if ($this->txtTitle) $this->objModule->Title = $this->txtTitle->Text;
                if ($this->txtDescription) $this->objModule->Description = $this->txtDescription->Text;
                if ($this->txtClassName) $this->objModule->ClassName = $this->txtClassName->Text;
                if ($this->chkShowTitle) $this->objModule->ShowTitle = $this->chkShowTitle->Checked;
                if ($this->chkShowDescription) $this->objModule->ShowDescription = $this->chkShowDescription->Checked;
                if ($this->lstContentBlock) $this->objModule->ContentBlockId = $this->lstContentBlock->SelectedValue;
                if ($this->lstParentModule) $this->objModule->ParentModuleId = $this->lstParentModule->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the Module object
                $this->objModule->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's Module instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteModule() {
            $this->objModule->Delete();
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
                case 'Module': return $this->objModule;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to Module fields -- will be created dynamically if not yet created
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
                case 'CssclassControl':
                    if (!$this->txtCssclass) return $this->txtCssclass_Create();
                    return $this->txtCssclass;
                case 'CssclassLabel':
                    if (!$this->lblCssclass) return $this->lblCssclass_Create();
                    return $this->lblCssclass;
                case 'TitleControl':
                    if (!$this->txtTitle) return $this->txtTitle_Create();
                    return $this->txtTitle;
                case 'TitleLabel':
                    if (!$this->lblTitle) return $this->lblTitle_Create();
                    return $this->lblTitle;
                case 'DescriptionControl':
                    if (!$this->txtDescription) return $this->txtDescription_Create();
                    return $this->txtDescription;
                case 'DescriptionLabel':
                    if (!$this->lblDescription) return $this->lblDescription_Create();
                    return $this->lblDescription;
                case 'ClassNameControl':
                    if (!$this->txtClassName) return $this->txtClassName_Create();
                    return $this->txtClassName;
                case 'ClassNameLabel':
                    if (!$this->lblClassName) return $this->lblClassName_Create();
                    return $this->lblClassName;
                case 'ShowTitleControl':
                    if (!$this->chkShowTitle) return $this->chkShowTitle_Create();
                    return $this->chkShowTitle;
                case 'ShowTitleLabel':
                    if (!$this->lblShowTitle) return $this->lblShowTitle_Create();
                    return $this->lblShowTitle;
                case 'ShowDescriptionControl':
                    if (!$this->chkShowDescription) return $this->chkShowDescription_Create();
                    return $this->chkShowDescription;
                case 'ShowDescriptionLabel':
                    if (!$this->lblShowDescription) return $this->lblShowDescription_Create();
                    return $this->lblShowDescription;
                case 'ContentBlockIdControl':
                    if (!$this->lstContentBlock) return $this->lstContentBlock_Create();
                    return $this->lstContentBlock;
                case 'ContentBlockIdLabel':
                    if (!$this->lblContentBlockId) return $this->lblContentBlockId_Create();
                    return $this->lblContentBlockId;
                case 'ParentModuleIdControl':
                    if (!$this->lstParentModule) return $this->lstParentModule_Create();
                    return $this->lstParentModule;
                case 'ParentModuleIdLabel':
                    if (!$this->lblParentModuleId) return $this->lblParentModuleId_Create();
                    return $this->lblParentModuleId;
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
                    // Controls that point to Module fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'CssclassControl':
                        return ($this->txtCssclass = QType::Cast($mixValue, 'QControl'));
                    case 'TitleControl':
                        return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
                    case 'DescriptionControl':
                        return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
                    case 'ClassNameControl':
                        return ($this->txtClassName = QType::Cast($mixValue, 'QControl'));
                    case 'ShowTitleControl':
                        return ($this->chkShowTitle = QType::Cast($mixValue, 'QControl'));
                    case 'ShowDescriptionControl':
                        return ($this->chkShowDescription = QType::Cast($mixValue, 'QControl'));
                    case 'ContentBlockIdControl':
                        return ($this->lstContentBlock = QType::Cast($mixValue, 'QControl'));
                    case 'ParentModuleIdControl':
                        return ($this->lstParentModule = QType::Cast($mixValue, 'QControl'));
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