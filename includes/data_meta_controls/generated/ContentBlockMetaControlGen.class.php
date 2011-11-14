<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the ContentBlock class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single ContentBlock object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a ContentBlockMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read ContentBlock $ContentBlock the actual ContentBlock data class being edited
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
     * property QCheckBox $ShowTitleControl
     * property-read QLabel $ShowTitleLabel
     * property QCheckBox $ShowDescriptionControl
     * property-read QLabel $ShowDescriptionLabel
     * property QCheckBox $CollapsableControl
     * property-read QLabel $CollapsableLabel
     * property QIntegerTextBox $SortOrderControl
     * property-read QLabel $SortOrderLabel
     * property QIntegerTextBox $ParentContentBlockIdControl
     * property-read QLabel $ParentContentBlockIdLabel
     * property QIntegerTextBox $LocationIdControl
     * property-read QLabel $LocationIdLabel
     * property QListBox $PageControl
     * property-read QLabel $PageLabel
     * property QListBox $ContentItemControl
     * property-read QLabel $ContentItemLabel
     * property QListBox $MenuControl
     * property-read QLabel $MenuLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class ContentBlockMetaControlGen extends QBaseClass {
        // General Variables
        protected $objContentBlock;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of ContentBlock's individual data fields
        protected $lblId;
        protected $txtName;
        protected $txtCssclass;
        protected $txtTitle;
        protected $txtDescription;
        protected $chkShowTitle;
        protected $chkShowDescription;
        protected $chkCollapsable;
        protected $txtSortOrder;
        protected $txtParentContentBlockId;
        protected $txtLocationId;

        // Controls that allow the viewing of ContentBlock's individual data fields
        protected $lblName;
        protected $lblCssclass;
        protected $lblTitle;
        protected $lblDescription;
        protected $lblShowTitle;
        protected $lblShowDescription;
        protected $lblCollapsable;
        protected $lblSortOrder;
        protected $lblParentContentBlockId;
        protected $lblLocationId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstPages;
        protected $lstContentItems;
        protected $lstMenus;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblPages;
        protected $lblContentItems;
        protected $lblMenus;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * ContentBlockMetaControl to edit a single ContentBlock object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single ContentBlock object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentBlockMetaControl
         * @param ContentBlock $objContentBlock new or existing ContentBlock object
         */
         public function __construct($objParentObject, ContentBlock $objContentBlock) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this ContentBlockMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked ContentBlock object
            $this->objContentBlock = $objContentBlock;

            // Figure out if we're Editing or Creating New
            if ($this->objContentBlock->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentBlockMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing ContentBlock object creation - defaults to CreateOrEdit
         * @return ContentBlockMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objContentBlock = ContentBlock::Load($intId);

                // ContentBlock was found -- return it!
                if ($objContentBlock)
                    return new ContentBlockMetaControl($objParentObject, $objContentBlock);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a ContentBlock object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new ContentBlockMetaControl($objParentObject, new ContentBlock());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentBlockMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ContentBlock object creation - defaults to CreateOrEdit
         * @return ContentBlockMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return ContentBlockMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentBlockMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ContentBlock object creation - defaults to CreateOrEdit
         * @return ContentBlockMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return ContentBlockMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objContentBlock->Id;
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
            $this->txtName->Text = $this->objContentBlock->Name;
            $this->txtName->MaxLength = ContentBlock::NameMaxLength;
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
            $this->lblName->Text = $this->objContentBlock->Name;
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
            $this->txtCssclass->Text = $this->objContentBlock->Cssclass;
            $this->txtCssclass->MaxLength = ContentBlock::CssclassMaxLength;
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
            $this->lblCssclass->Text = $this->objContentBlock->Cssclass;
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
            $this->txtTitle->Text = $this->objContentBlock->Title;
            $this->txtTitle->MaxLength = ContentBlock::TitleMaxLength;
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
            $this->lblTitle->Text = $this->objContentBlock->Title;
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
            $this->txtDescription->Text = $this->objContentBlock->Description;
            $this->txtDescription->MaxLength = ContentBlock::DescriptionMaxLength;
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
            $this->lblDescription->Text = $this->objContentBlock->Description;
            return $this->lblDescription;
        }

        /**
         * Create and setup QCheckBox chkShowTitle
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkShowTitle_Create($strControlId = null) {
            $this->chkShowTitle = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkShowTitle->Name = QApplication::Translate('Show Title');
            $this->chkShowTitle->Checked = $this->objContentBlock->ShowTitle;
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
            $this->lblShowTitle->Text = ($this->objContentBlock->ShowTitle) ? QApplication::Translate('Yes') : QApplication::Translate('No');
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
            $this->chkShowDescription->Checked = $this->objContentBlock->ShowDescription;
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
            $this->lblShowDescription->Text = ($this->objContentBlock->ShowDescription) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblShowDescription;
        }

        /**
         * Create and setup QCheckBox chkCollapsable
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkCollapsable_Create($strControlId = null) {
            $this->chkCollapsable = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkCollapsable->Name = QApplication::Translate('Collapsable');
            $this->chkCollapsable->Checked = $this->objContentBlock->Collapsable;
            return $this->chkCollapsable;
        }

        /**
         * Create and setup QLabel lblCollapsable
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCollapsable_Create($strControlId = null) {
            $this->lblCollapsable = new QLabel($this->objParentObject, $strControlId);
            $this->lblCollapsable->Name = QApplication::Translate('Collapsable');
            $this->lblCollapsable->Text = ($this->objContentBlock->Collapsable) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblCollapsable;
        }

        /**
         * Create and setup QIntegerTextBox txtSortOrder
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtSortOrder_Create($strControlId = null) {
            $this->txtSortOrder = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtSortOrder->Name = QApplication::Translate('Sort Order');
            $this->txtSortOrder->Text = $this->objContentBlock->SortOrder;
            $this->txtSortOrder->Required = true;
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
            $this->lblSortOrder->Text = $this->objContentBlock->SortOrder;
            $this->lblSortOrder->Required = true;
            $this->lblSortOrder->Format = $strFormat;
            return $this->lblSortOrder;
        }

        /**
         * Create and setup QIntegerTextBox txtParentContentBlockId
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtParentContentBlockId_Create($strControlId = null) {
            $this->txtParentContentBlockId = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtParentContentBlockId->Name = QApplication::Translate('Parent Content Block Id');
            $this->txtParentContentBlockId->Text = $this->objContentBlock->ParentContentBlockId;
            return $this->txtParentContentBlockId;
        }

        /**
         * Create and setup QLabel lblParentContentBlockId
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblParentContentBlockId_Create($strControlId = null, $strFormat = null) {
            $this->lblParentContentBlockId = new QLabel($this->objParentObject, $strControlId);
            $this->lblParentContentBlockId->Name = QApplication::Translate('Parent Content Block Id');
            $this->lblParentContentBlockId->Text = $this->objContentBlock->ParentContentBlockId;
            $this->lblParentContentBlockId->Format = $strFormat;
            return $this->lblParentContentBlockId;
        }

        /**
         * Create and setup QIntegerTextBox txtLocationId
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtLocationId_Create($strControlId = null) {
            $this->txtLocationId = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtLocationId->Name = QApplication::Translate('Location Id');
            $this->txtLocationId->Text = $this->objContentBlock->LocationId;
            $this->txtLocationId->Required = true;
            return $this->txtLocationId;
        }

        /**
         * Create and setup QLabel lblLocationId
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblLocationId_Create($strControlId = null, $strFormat = null) {
            $this->lblLocationId = new QLabel($this->objParentObject, $strControlId);
            $this->lblLocationId->Name = QApplication::Translate('Location Id');
            $this->lblLocationId->Text = $this->objContentBlock->LocationId;
            $this->lblLocationId->Required = true;
            $this->lblLocationId->Format = $strFormat;
            return $this->lblLocationId;
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
            $objAssociatedArray = $this->objContentBlock->GetPageArray();
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
            
            $objAssociatedArray = $this->objContentBlock->GetPageArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblPages->Text = implode($strGlue, $strItems);
            return $this->lblPages;
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
            $objAssociatedArray = $this->objContentBlock->GetContentItemArray();
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
            
            $objAssociatedArray = $this->objContentBlock->GetContentItemArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblContentItems->Text = implode($strGlue, $strItems);
            return $this->lblContentItems;
        }

        /**
         * Create and setup QListBox lstMenus
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstMenus_Create($strControlId = null) {
            $this->lstMenus = new QListBox($this->objParentObject, $strControlId);
            $this->lstMenus->Name = QApplication::Translate('Menus');
            $this->lstMenus->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objContentBlock->GetMenuArray();
            $objMenuArray = Menu::LoadAll();
            if ($objMenuArray) foreach ($objMenuArray as $objMenu) {
                $objListItem = new QListItem($objMenu->__toString(), $objMenu->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objMenu->Id)
                        $objListItem->Selected = true;
                }
                $this->lstMenus->AddItem($objListItem);
            }
            return $this->lstMenus;
        }

        /**
         * Create and setup QLabel lblMenus
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblMenus_Create($strControlId = null, $strGlue = ', ') {
            $this->lblMenus = new QLabel($this->objParentObject, $strControlId);
            $this->lblMenus->Name = QApplication::Translate('Menus');
            
            $objAssociatedArray = $this->objContentBlock->GetMenuArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblMenus->Text = implode($strGlue, $strItems);
            return $this->lblMenus;
        }



        /**
         * Refresh this MetaControl with Data from the local ContentBlock object.
         * @param boolean $blnReload reload ContentBlock from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objContentBlock->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objContentBlock->Id;

            if ($this->txtName) $this->txtName->Text = $this->objContentBlock->Name;
            if ($this->lblName) $this->lblName->Text = $this->objContentBlock->Name;

            if ($this->txtCssclass) $this->txtCssclass->Text = $this->objContentBlock->Cssclass;
            if ($this->lblCssclass) $this->lblCssclass->Text = $this->objContentBlock->Cssclass;

            if ($this->txtTitle) $this->txtTitle->Text = $this->objContentBlock->Title;
            if ($this->lblTitle) $this->lblTitle->Text = $this->objContentBlock->Title;

            if ($this->txtDescription) $this->txtDescription->Text = $this->objContentBlock->Description;
            if ($this->lblDescription) $this->lblDescription->Text = $this->objContentBlock->Description;

            if ($this->chkShowTitle) $this->chkShowTitle->Checked = $this->objContentBlock->ShowTitle;
            if ($this->lblShowTitle) $this->lblShowTitle->Text = ($this->objContentBlock->ShowTitle) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkShowDescription) $this->chkShowDescription->Checked = $this->objContentBlock->ShowDescription;
            if ($this->lblShowDescription) $this->lblShowDescription->Text = ($this->objContentBlock->ShowDescription) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkCollapsable) $this->chkCollapsable->Checked = $this->objContentBlock->Collapsable;
            if ($this->lblCollapsable) $this->lblCollapsable->Text = ($this->objContentBlock->Collapsable) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->txtSortOrder) $this->txtSortOrder->Text = $this->objContentBlock->SortOrder;
            if ($this->lblSortOrder) $this->lblSortOrder->Text = $this->objContentBlock->SortOrder;

            if ($this->txtParentContentBlockId) $this->txtParentContentBlockId->Text = $this->objContentBlock->ParentContentBlockId;
            if ($this->lblParentContentBlockId) $this->lblParentContentBlockId->Text = $this->objContentBlock->ParentContentBlockId;

            if ($this->txtLocationId) $this->txtLocationId->Text = $this->objContentBlock->LocationId;
            if ($this->lblLocationId) $this->lblLocationId->Text = $this->objContentBlock->LocationId;

            if ($this->lstPages) {
                $this->lstPages->RemoveAllItems();
                $objAssociatedArray = $this->objContentBlock->GetPageArray();
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
                $objAssociatedArray = $this->objContentBlock->GetPageArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblPages->Text = implode($strGlue, $strItems);
            }

            if ($this->lstContentItems) {
                $this->lstContentItems->RemoveAllItems();
                $objAssociatedArray = $this->objContentBlock->GetContentItemArray();
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
                $objAssociatedArray = $this->objContentBlock->GetContentItemArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblContentItems->Text = implode($strGlue, $strItems);
            }

            if ($this->lstMenus) {
                $this->lstMenus->RemoveAllItems();
                $objAssociatedArray = $this->objContentBlock->GetMenuArray();
                $objMenuArray = Menu::LoadAll();
                if ($objMenuArray) foreach ($objMenuArray as $objMenu) {
                    $objListItem = new QListItem($objMenu->__toString(), $objMenu->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objMenu->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstMenus->AddItem($objListItem);
                }
            }
            if ($this->lblMenus) {
                $objAssociatedArray = $this->objContentBlock->GetMenuArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblMenus->Text = implode($strGlue, $strItems);
            }

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////

        protected function lstPages_Update() {
            if ($this->lstPages) {
                $this->objContentBlock->UnassociateAllPages();
                $objSelectedListItems = $this->lstPages->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objContentBlock->AssociatePage(Page::Load($objListItem->Value));
                }
            }
        }

        protected function lstContentItems_Update() {
            if ($this->lstContentItems) {
                $this->objContentBlock->UnassociateAllContentItems();
                $objSelectedListItems = $this->lstContentItems->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objContentBlock->AssociateContentItem(ContentItem::Load($objListItem->Value));
                }
            }
        }

        protected function lstMenus_Update() {
            if ($this->lstMenus) {
                $this->objContentBlock->UnassociateAllMenus();
                $objSelectedListItems = $this->lstMenus->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objContentBlock->AssociateMenu(Menu::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC CONTENTBLOCK OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's ContentBlock instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveContentBlock() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objContentBlock->Name = $this->txtName->Text;
                if ($this->txtCssclass) $this->objContentBlock->Cssclass = $this->txtCssclass->Text;
                if ($this->txtTitle) $this->objContentBlock->Title = $this->txtTitle->Text;
                if ($this->txtDescription) $this->objContentBlock->Description = $this->txtDescription->Text;
                if ($this->chkShowTitle) $this->objContentBlock->ShowTitle = $this->chkShowTitle->Checked;
                if ($this->chkShowDescription) $this->objContentBlock->ShowDescription = $this->chkShowDescription->Checked;
                if ($this->chkCollapsable) $this->objContentBlock->Collapsable = $this->chkCollapsable->Checked;
                if ($this->txtSortOrder) $this->objContentBlock->SortOrder = $this->txtSortOrder->Text;
                if ($this->txtParentContentBlockId) $this->objContentBlock->ParentContentBlockId = $this->txtParentContentBlockId->Text;
                if ($this->txtLocationId) $this->objContentBlock->LocationId = $this->txtLocationId->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the ContentBlock object
                $this->objContentBlock->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstPages_Update();
                $this->lstContentItems_Update();
                $this->lstMenus_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's ContentBlock instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteContentBlock() {
            $this->objContentBlock->UnassociateAllPages();
            $this->objContentBlock->UnassociateAllContentItems();
            $this->objContentBlock->UnassociateAllMenus();
            $this->objContentBlock->Delete();
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
                case 'ContentBlock': return $this->objContentBlock;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to ContentBlock fields -- will be created dynamically if not yet created
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
                case 'CollapsableControl':
                    if (!$this->chkCollapsable) return $this->chkCollapsable_Create();
                    return $this->chkCollapsable;
                case 'CollapsableLabel':
                    if (!$this->lblCollapsable) return $this->lblCollapsable_Create();
                    return $this->lblCollapsable;
                case 'SortOrderControl':
                    if (!$this->txtSortOrder) return $this->txtSortOrder_Create();
                    return $this->txtSortOrder;
                case 'SortOrderLabel':
                    if (!$this->lblSortOrder) return $this->lblSortOrder_Create();
                    return $this->lblSortOrder;
                case 'ParentContentBlockIdControl':
                    if (!$this->txtParentContentBlockId) return $this->txtParentContentBlockId_Create();
                    return $this->txtParentContentBlockId;
                case 'ParentContentBlockIdLabel':
                    if (!$this->lblParentContentBlockId) return $this->lblParentContentBlockId_Create();
                    return $this->lblParentContentBlockId;
                case 'LocationIdControl':
                    if (!$this->txtLocationId) return $this->txtLocationId_Create();
                    return $this->txtLocationId;
                case 'LocationIdLabel':
                    if (!$this->lblLocationId) return $this->lblLocationId_Create();
                    return $this->lblLocationId;
                case 'PageControl':
                    if (!$this->lstPages) return $this->lstPages_Create();
                    return $this->lstPages;
                case 'PageLabel':
                    if (!$this->lblPages) return $this->lblPages_Create();
                    return $this->lblPages;
                case 'ContentItemControl':
                    if (!$this->lstContentItems) return $this->lstContentItems_Create();
                    return $this->lstContentItems;
                case 'ContentItemLabel':
                    if (!$this->lblContentItems) return $this->lblContentItems_Create();
                    return $this->lblContentItems;
                case 'MenuControl':
                    if (!$this->lstMenus) return $this->lstMenus_Create();
                    return $this->lstMenus;
                case 'MenuLabel':
                    if (!$this->lblMenus) return $this->lblMenus_Create();
                    return $this->lblMenus;
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
                    // Controls that point to ContentBlock fields
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
                    case 'ShowTitleControl':
                        return ($this->chkShowTitle = QType::Cast($mixValue, 'QControl'));
                    case 'ShowDescriptionControl':
                        return ($this->chkShowDescription = QType::Cast($mixValue, 'QControl'));
                    case 'CollapsableControl':
                        return ($this->chkCollapsable = QType::Cast($mixValue, 'QControl'));
                    case 'SortOrderControl':
                        return ($this->txtSortOrder = QType::Cast($mixValue, 'QControl'));
                    case 'ParentContentBlockIdControl':
                        return ($this->txtParentContentBlockId = QType::Cast($mixValue, 'QControl'));
                    case 'LocationIdControl':
                        return ($this->txtLocationId = QType::Cast($mixValue, 'QControl'));
                    case 'PageControl':
                        return ($this->lstPages = QType::Cast($mixValue, 'QControl'));
                    case 'ContentItemControl':
                        return ($this->lstContentItems = QType::Cast($mixValue, 'QControl'));
                    case 'MenuControl':
                        return ($this->lstMenus = QType::Cast($mixValue, 'QControl'));
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