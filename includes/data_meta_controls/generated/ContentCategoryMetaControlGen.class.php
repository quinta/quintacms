<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the ContentCategory class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single ContentCategory object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a ContentCategoryMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read ContentCategory $ContentCategory the actual ContentCategory data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QTextBox $TitleControl
     * property-read QLabel $TitleLabel
     * property QTextBox $DescriptionControl
     * property-read QLabel $DescriptionLabel
     * property QTextBox $ImageUriControl
     * property-read QLabel $ImageUriLabel
     * property QIntegerTextBox $ParentContentCategoryIdControl
     * property-read QLabel $ParentContentCategoryIdLabel
     * property QListBox $ContentItemControl
     * property-read QLabel $ContentItemLabel
     * property QListBox $PageControl
     * property-read QLabel $PageLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class ContentCategoryMetaControlGen extends QBaseClass {
        // General Variables
        protected $objContentCategory;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of ContentCategory's individual data fields
        protected $lblId;
        protected $txtName;
        protected $txtTitle;
        protected $txtDescription;
        protected $txtImageUri;
        protected $txtParentContentCategoryId;

        // Controls that allow the viewing of ContentCategory's individual data fields
        protected $lblName;
        protected $lblTitle;
        protected $lblDescription;
        protected $lblImageUri;
        protected $lblParentContentCategoryId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstContentItems;
        protected $lstPages;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblContentItems;
        protected $lblPages;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * ContentCategoryMetaControl to edit a single ContentCategory object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single ContentCategory object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentCategoryMetaControl
         * @param ContentCategory $objContentCategory new or existing ContentCategory object
         */
         public function __construct($objParentObject, ContentCategory $objContentCategory) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this ContentCategoryMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked ContentCategory object
            $this->objContentCategory = $objContentCategory;

            // Figure out if we're Editing or Creating New
            if ($this->objContentCategory->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentCategoryMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing ContentCategory object creation - defaults to CreateOrEdit
         * @return ContentCategoryMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objContentCategory = ContentCategory::Load($intId);

                // ContentCategory was found -- return it!
                if ($objContentCategory)
                    return new ContentCategoryMetaControl($objParentObject, $objContentCategory);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a ContentCategory object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new ContentCategoryMetaControl($objParentObject, new ContentCategory());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentCategoryMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ContentCategory object creation - defaults to CreateOrEdit
         * @return ContentCategoryMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return ContentCategoryMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentCategoryMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ContentCategory object creation - defaults to CreateOrEdit
         * @return ContentCategoryMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return ContentCategoryMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objContentCategory->Id;
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
            $this->txtName->Text = $this->objContentCategory->Name;
            $this->txtName->MaxLength = ContentCategory::NameMaxLength;
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
            $this->lblName->Text = $this->objContentCategory->Name;
            return $this->lblName;
        }

        /**
         * Create and setup QTextBox txtTitle
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtTitle_Create($strControlId = null) {
            $this->txtTitle = new QTextBox($this->objParentObject, $strControlId);
            $this->txtTitle->Name = QApplication::Translate('Title');
            $this->txtTitle->Text = $this->objContentCategory->Title;
            $this->txtTitle->MaxLength = ContentCategory::TitleMaxLength;
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
            $this->lblTitle->Text = $this->objContentCategory->Title;
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
            $this->txtDescription->Text = $this->objContentCategory->Description;
            $this->txtDescription->MaxLength = ContentCategory::DescriptionMaxLength;
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
            $this->lblDescription->Text = $this->objContentCategory->Description;
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
            $this->txtImageUri->Text = $this->objContentCategory->ImageUri;
            $this->txtImageUri->MaxLength = ContentCategory::ImageUriMaxLength;
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
            $this->lblImageUri->Text = $this->objContentCategory->ImageUri;
            return $this->lblImageUri;
        }

        /**
         * Create and setup QIntegerTextBox txtParentContentCategoryId
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtParentContentCategoryId_Create($strControlId = null) {
            $this->txtParentContentCategoryId = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtParentContentCategoryId->Name = QApplication::Translate('Parent Content Category Id');
            $this->txtParentContentCategoryId->Text = $this->objContentCategory->ParentContentCategoryId;
            return $this->txtParentContentCategoryId;
        }

        /**
         * Create and setup QLabel lblParentContentCategoryId
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblParentContentCategoryId_Create($strControlId = null, $strFormat = null) {
            $this->lblParentContentCategoryId = new QLabel($this->objParentObject, $strControlId);
            $this->lblParentContentCategoryId->Name = QApplication::Translate('Parent Content Category Id');
            $this->lblParentContentCategoryId->Text = $this->objContentCategory->ParentContentCategoryId;
            $this->lblParentContentCategoryId->Format = $strFormat;
            return $this->lblParentContentCategoryId;
        }

        /**
         * Create and setup QListBox lstContentItems
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstContentItems_Create($strControlId = null) {
            $this->lstContentItems = new QListBox($this->objParentObject, $strControlId);
            $this->lstContentItems->Name = QApplication::Translate('Content Items');
            $this->lstContentItems->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objContentCategory->GetContentItemArray();
            $objContentItemArray = ContentItem::LoadAll();
            if ($objContentItemArray) foreach ($objContentItemArray as $objContentItem) {
                $objListItem = new QListItem($objContentItem->__toString(), $objContentItem->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objContentItem->Id)
                        $objListItem->Selected = true;
                }
                $this->lstContentItems->AddItem($objListItem);
            }
            return $this->lstContentItems;
        }

        /**
         * Create and setup QLabel lblContentItems
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblContentItems_Create($strControlId = null, $strGlue = ', ') {
            $this->lblContentItems = new QLabel($this->objParentObject, $strControlId);
            $this->lblContentItems->Name = QApplication::Translate('Content Items');
            
            $objAssociatedArray = $this->objContentCategory->GetContentItemArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblContentItems->Text = implode($strGlue, $strItems);
            return $this->lblContentItems;
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
            $objAssociatedArray = $this->objContentCategory->GetPageArray();
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
            
            $objAssociatedArray = $this->objContentCategory->GetPageArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblPages->Text = implode($strGlue, $strItems);
            return $this->lblPages;
        }



        /**
         * Refresh this MetaControl with Data from the local ContentCategory object.
         * @param boolean $blnReload reload ContentCategory from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objContentCategory->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objContentCategory->Id;

            if ($this->txtName) $this->txtName->Text = $this->objContentCategory->Name;
            if ($this->lblName) $this->lblName->Text = $this->objContentCategory->Name;

            if ($this->txtTitle) $this->txtTitle->Text = $this->objContentCategory->Title;
            if ($this->lblTitle) $this->lblTitle->Text = $this->objContentCategory->Title;

            if ($this->txtDescription) $this->txtDescription->Text = $this->objContentCategory->Description;
            if ($this->lblDescription) $this->lblDescription->Text = $this->objContentCategory->Description;

            if ($this->txtImageUri) $this->txtImageUri->Text = $this->objContentCategory->ImageUri;
            if ($this->lblImageUri) $this->lblImageUri->Text = $this->objContentCategory->ImageUri;

            if ($this->txtParentContentCategoryId) $this->txtParentContentCategoryId->Text = $this->objContentCategory->ParentContentCategoryId;
            if ($this->lblParentContentCategoryId) $this->lblParentContentCategoryId->Text = $this->objContentCategory->ParentContentCategoryId;

            if ($this->lstContentItems) {
                $this->lstContentItems->RemoveAllItems();
                $objAssociatedArray = $this->objContentCategory->GetContentItemArray();
                $objContentItemArray = ContentItem::LoadAll();
                if ($objContentItemArray) foreach ($objContentItemArray as $objContentItem) {
                    $objListItem = new QListItem($objContentItem->__toString(), $objContentItem->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objContentItem->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstContentItems->AddItem($objListItem);
                }
            }
            if ($this->lblContentItems) {
                $objAssociatedArray = $this->objContentCategory->GetContentItemArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblContentItems->Text = implode($strGlue, $strItems);
            }

            if ($this->lstPages) {
                $this->lstPages->RemoveAllItems();
                $objAssociatedArray = $this->objContentCategory->GetPageArray();
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
                $objAssociatedArray = $this->objContentCategory->GetPageArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblPages->Text = implode($strGlue, $strItems);
            }

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////

        protected function lstContentItems_Update() {
            if ($this->lstContentItems) {
                $this->objContentCategory->UnassociateAllContentItems();
                $objSelectedListItems = $this->lstContentItems->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objContentCategory->AssociateContentItem(ContentItem::Load($objListItem->Value));
                }
            }
        }

        protected function lstPages_Update() {
            if ($this->lstPages) {
                $this->objContentCategory->UnassociateAllPages();
                $objSelectedListItems = $this->lstPages->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objContentCategory->AssociatePage(Page::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC CONTENTCATEGORY OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's ContentCategory instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveContentCategory() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objContentCategory->Name = $this->txtName->Text;
                if ($this->txtTitle) $this->objContentCategory->Title = $this->txtTitle->Text;
                if ($this->txtDescription) $this->objContentCategory->Description = $this->txtDescription->Text;
                if ($this->txtImageUri) $this->objContentCategory->ImageUri = $this->txtImageUri->Text;
                if ($this->txtParentContentCategoryId) $this->objContentCategory->ParentContentCategoryId = $this->txtParentContentCategoryId->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the ContentCategory object
                $this->objContentCategory->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstContentItems_Update();
                $this->lstPages_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's ContentCategory instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteContentCategory() {
            $this->objContentCategory->UnassociateAllContentItems();
            $this->objContentCategory->UnassociateAllPages();
            $this->objContentCategory->Delete();
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
                case 'ContentCategory': return $this->objContentCategory;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to ContentCategory fields -- will be created dynamically if not yet created
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
                case 'ImageUriControl':
                    if (!$this->txtImageUri) return $this->txtImageUri_Create();
                    return $this->txtImageUri;
                case 'ImageUriLabel':
                    if (!$this->lblImageUri) return $this->lblImageUri_Create();
                    return $this->lblImageUri;
                case 'ParentContentCategoryIdControl':
                    if (!$this->txtParentContentCategoryId) return $this->txtParentContentCategoryId_Create();
                    return $this->txtParentContentCategoryId;
                case 'ParentContentCategoryIdLabel':
                    if (!$this->lblParentContentCategoryId) return $this->lblParentContentCategoryId_Create();
                    return $this->lblParentContentCategoryId;
                case 'ContentItemControl':
                    if (!$this->lstContentItems) return $this->lstContentItems_Create();
                    return $this->lstContentItems;
                case 'ContentItemLabel':
                    if (!$this->lblContentItems) return $this->lblContentItems_Create();
                    return $this->lblContentItems;
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
                    // Controls that point to ContentCategory fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'TitleControl':
                        return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
                    case 'DescriptionControl':
                        return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
                    case 'ImageUriControl':
                        return ($this->txtImageUri = QType::Cast($mixValue, 'QControl'));
                    case 'ParentContentCategoryIdControl':
                        return ($this->txtParentContentCategoryId = QType::Cast($mixValue, 'QControl'));
                    case 'ContentItemControl':
                        return ($this->lstContentItems = QType::Cast($mixValue, 'QControl'));
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