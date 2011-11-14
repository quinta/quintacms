<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the Menu class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single Menu object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a MenuMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read Menu $Menu the actual Menu data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QTextBox $TitleControl
     * property-read QLabel $TitleLabel
     * property QTextBox $CssClassControl
     * property-read QLabel $CssClassLabel
     * property QIntegerTextBox $SortOrderControl
     * property-read QLabel $SortOrderLabel
     * property QCheckBox $ShowTitleControl
     * property-read QLabel $ShowTitleLabel
     * property QListBox $ParentMenuItemIdControl
     * property-read QLabel $ParentMenuItemIdLabel
     * property QListBox $StatusIdControl
     * property-read QLabel $StatusIdLabel
     * property QListBox $TypeIdControl
     * property-read QLabel $TypeIdLabel
     * property QListBox $ContentBlockControl
     * property-read QLabel $ContentBlockLabel
     * property QListBox $MenuItemControl
     * property-read QLabel $MenuItemLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class MenuMetaControlGen extends QBaseClass {
        // General Variables
        protected $objMenu;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of Menu's individual data fields
        protected $lblId;
        protected $txtName;
        protected $txtTitle;
        protected $txtCssClass;
        protected $txtSortOrder;
        protected $chkShowTitle;
        protected $lstParentMenuItem;
        protected $lstStatus;
        protected $lstType;

        // Controls that allow the viewing of Menu's individual data fields
        protected $lblName;
        protected $lblTitle;
        protected $lblCssClass;
        protected $lblSortOrder;
        protected $lblShowTitle;
        protected $lblParentMenuItemId;
        protected $lblStatusId;
        protected $lblTypeId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstContentBlocks;
        protected $lstMenuItems;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblContentBlocks;
        protected $lblMenuItems;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * MenuMetaControl to edit a single Menu object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single Menu object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this MenuMetaControl
         * @param Menu $objMenu new or existing Menu object
         */
         public function __construct($objParentObject, Menu $objMenu) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this MenuMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked Menu object
            $this->objMenu = $objMenu;

            // Figure out if we're Editing or Creating New
            if ($this->objMenu->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this MenuMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing Menu object creation - defaults to CreateOrEdit
         * @return MenuMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objMenu = Menu::Load($intId);

                // Menu was found -- return it!
                if ($objMenu)
                    return new MenuMetaControl($objParentObject, $objMenu);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a Menu object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new MenuMetaControl($objParentObject, new Menu());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this MenuMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Menu object creation - defaults to CreateOrEdit
         * @return MenuMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return MenuMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this MenuMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Menu object creation - defaults to CreateOrEdit
         * @return MenuMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return MenuMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objMenu->Id;
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
            $this->txtName->Text = $this->objMenu->Name;
            $this->txtName->Required = true;
            $this->txtName->MaxLength = Menu::NameMaxLength;
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
            $this->lblName->Text = $this->objMenu->Name;
            $this->lblName->Required = true;
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
            $this->txtTitle->Text = $this->objMenu->Title;
            $this->txtTitle->MaxLength = Menu::TitleMaxLength;
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
            $this->lblTitle->Text = $this->objMenu->Title;
            return $this->lblTitle;
        }

        /**
         * Create and setup QTextBox txtCssClass
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCssClass_Create($strControlId = null) {
            $this->txtCssClass = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCssClass->Name = QApplication::Translate('Css Class');
            $this->txtCssClass->Text = $this->objMenu->CssClass;
            $this->txtCssClass->MaxLength = Menu::CssClassMaxLength;
            return $this->txtCssClass;
        }

        /**
         * Create and setup QLabel lblCssClass
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCssClass_Create($strControlId = null) {
            $this->lblCssClass = new QLabel($this->objParentObject, $strControlId);
            $this->lblCssClass->Name = QApplication::Translate('Css Class');
            $this->lblCssClass->Text = $this->objMenu->CssClass;
            return $this->lblCssClass;
        }

        /**
         * Create and setup QIntegerTextBox txtSortOrder
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtSortOrder_Create($strControlId = null) {
            $this->txtSortOrder = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtSortOrder->Name = QApplication::Translate('Sort Order');
            $this->txtSortOrder->Text = $this->objMenu->SortOrder;
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
            $this->lblSortOrder->Text = $this->objMenu->SortOrder;
            $this->lblSortOrder->Format = $strFormat;
            return $this->lblSortOrder;
        }

        /**
         * Create and setup QCheckBox chkShowTitle
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkShowTitle_Create($strControlId = null) {
            $this->chkShowTitle = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkShowTitle->Name = QApplication::Translate('Show Title');
            $this->chkShowTitle->Checked = $this->objMenu->ShowTitle;
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
            $this->lblShowTitle->Text = ($this->objMenu->ShowTitle) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblShowTitle;
        }

        /**
         * Create and setup QListBox lstParentMenuItem
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstParentMenuItem_Create($strControlId = null) {
            $this->lstParentMenuItem = new QListBox($this->objParentObject, $strControlId);
            $this->lstParentMenuItem->Name = QApplication::Translate('Parent Menu Item');
            $this->lstParentMenuItem->AddItem(QApplication::Translate('- Select One -'), null);
            $objParentMenuItemArray = MenuItem::LoadAll();
            if ($objParentMenuItemArray) foreach ($objParentMenuItemArray as $objParentMenuItem) {
                $objListItem = new QListItem($objParentMenuItem->__toString(), $objParentMenuItem->Id);
                if (($this->objMenu->ParentMenuItem) && ($this->objMenu->ParentMenuItem->Id == $objParentMenuItem->Id))
                    $objListItem->Selected = true;
                $this->lstParentMenuItem->AddItem($objListItem);
            }
            return $this->lstParentMenuItem;
        }

        /**
         * Create and setup QLabel lblParentMenuItemId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblParentMenuItemId_Create($strControlId = null) {
            $this->lblParentMenuItemId = new QLabel($this->objParentObject, $strControlId);
            $this->lblParentMenuItemId->Name = QApplication::Translate('Parent Menu Item');
            $this->lblParentMenuItemId->Text = ($this->objMenu->ParentMenuItem) ? $this->objMenu->ParentMenuItem->__toString() : null;
            return $this->lblParentMenuItemId;
        }

        /**
         * Create and setup QListBox lstStatus
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstStatus_Create($strControlId = null) {
            $this->lstStatus = new QListBox($this->objParentObject, $strControlId);
            $this->lstStatus->Name = QApplication::Translate('Status');
            $this->lstStatus->Required = true;
            foreach (MenuStatusType::$NameArray as $intId => $strValue)
                $this->lstStatus->AddItem(new QListItem($strValue, $intId, $this->objMenu->StatusId == $intId));
            return $this->lstStatus;
        }

        /**
         * Create and setup QLabel lblStatusId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblStatusId_Create($strControlId = null) {
            $this->lblStatusId = new QLabel($this->objParentObject, $strControlId);
            $this->lblStatusId->Name = QApplication::Translate('Status');
            $this->lblStatusId->Text = ($this->objMenu->StatusId) ? MenuStatusType::$NameArray[$this->objMenu->StatusId] : null;
            $this->lblStatusId->Required = true;
            return $this->lblStatusId;
        }

        /**
         * Create and setup QListBox lstType
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstType_Create($strControlId = null) {
            $this->lstType = new QListBox($this->objParentObject, $strControlId);
            $this->lstType->Name = QApplication::Translate('Type');
            $this->lstType->Required = true;
            foreach (MenuType::$NameArray as $intId => $strValue)
                $this->lstType->AddItem(new QListItem($strValue, $intId, $this->objMenu->TypeId == $intId));
            return $this->lstType;
        }

        /**
         * Create and setup QLabel lblTypeId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblTypeId_Create($strControlId = null) {
            $this->lblTypeId = new QLabel($this->objParentObject, $strControlId);
            $this->lblTypeId->Name = QApplication::Translate('Type');
            $this->lblTypeId->Text = ($this->objMenu->TypeId) ? MenuType::$NameArray[$this->objMenu->TypeId] : null;
            $this->lblTypeId->Required = true;
            return $this->lblTypeId;
        }

        /**
         * Create and setup QListBox lstContentBlocks
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstContentBlocks_Create($strControlId = null) {
            $this->lstContentBlocks = new QListBox($this->objParentObject, $strControlId);
            $this->lstContentBlocks->Name = QApplication::Translate('Content Blocks');
            $this->lstContentBlocks->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objMenu->GetContentBlockArray();
            $objContentBlockArray = ContentBlock::LoadAll();
            if ($objContentBlockArray) foreach ($objContentBlockArray as $objContentBlock) {
                $objListItem = new QListItem($objContentBlock->__toString(), $objContentBlock->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objContentBlock->Id)
                        $objListItem->Selected = true;
                }
                $this->lstContentBlocks->AddItem($objListItem);
            }
            return $this->lstContentBlocks;
        }

        /**
         * Create and setup QLabel lblContentBlocks
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblContentBlocks_Create($strControlId = null, $strGlue = ', ') {
            $this->lblContentBlocks = new QLabel($this->objParentObject, $strControlId);
            $this->lblContentBlocks->Name = QApplication::Translate('Content Blocks');
            
            $objAssociatedArray = $this->objMenu->GetContentBlockArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblContentBlocks->Text = implode($strGlue, $strItems);
            return $this->lblContentBlocks;
        }

        /**
         * Create and setup QListBox lstMenuItems
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstMenuItems_Create($strControlId = null) {
            $this->lstMenuItems = new QListBox($this->objParentObject, $strControlId);
            $this->lstMenuItems->Name = QApplication::Translate('Menu Items');
            $this->lstMenuItems->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objMenu->GetMenuItemArray();
            $objMenuItemArray = MenuItem::LoadAll();
            if ($objMenuItemArray) foreach ($objMenuItemArray as $objMenuItem) {
                $objListItem = new QListItem($objMenuItem->__toString(), $objMenuItem->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objMenuItem->Id)
                        $objListItem->Selected = true;
                }
                $this->lstMenuItems->AddItem($objListItem);
            }
            return $this->lstMenuItems;
        }

        /**
         * Create and setup QLabel lblMenuItems
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblMenuItems_Create($strControlId = null, $strGlue = ', ') {
            $this->lblMenuItems = new QLabel($this->objParentObject, $strControlId);
            $this->lblMenuItems->Name = QApplication::Translate('Menu Items');
            
            $objAssociatedArray = $this->objMenu->GetMenuItemArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblMenuItems->Text = implode($strGlue, $strItems);
            return $this->lblMenuItems;
        }



        /**
         * Refresh this MetaControl with Data from the local Menu object.
         * @param boolean $blnReload reload Menu from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objMenu->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objMenu->Id;

            if ($this->txtName) $this->txtName->Text = $this->objMenu->Name;
            if ($this->lblName) $this->lblName->Text = $this->objMenu->Name;

            if ($this->txtTitle) $this->txtTitle->Text = $this->objMenu->Title;
            if ($this->lblTitle) $this->lblTitle->Text = $this->objMenu->Title;

            if ($this->txtCssClass) $this->txtCssClass->Text = $this->objMenu->CssClass;
            if ($this->lblCssClass) $this->lblCssClass->Text = $this->objMenu->CssClass;

            if ($this->txtSortOrder) $this->txtSortOrder->Text = $this->objMenu->SortOrder;
            if ($this->lblSortOrder) $this->lblSortOrder->Text = $this->objMenu->SortOrder;

            if ($this->chkShowTitle) $this->chkShowTitle->Checked = $this->objMenu->ShowTitle;
            if ($this->lblShowTitle) $this->lblShowTitle->Text = ($this->objMenu->ShowTitle) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->lstParentMenuItem) {
                    $this->lstParentMenuItem->RemoveAllItems();
                $this->lstParentMenuItem->AddItem(QApplication::Translate('- Select One -'), null);
                $objParentMenuItemArray = MenuItem::LoadAll();
                if ($objParentMenuItemArray) foreach ($objParentMenuItemArray as $objParentMenuItem) {
                    $objListItem = new QListItem($objParentMenuItem->__toString(), $objParentMenuItem->Id);
                    if (($this->objMenu->ParentMenuItem) && ($this->objMenu->ParentMenuItem->Id == $objParentMenuItem->Id))
                        $objListItem->Selected = true;
                    $this->lstParentMenuItem->AddItem($objListItem);
                }
            }
            if ($this->lblParentMenuItemId) $this->lblParentMenuItemId->Text = ($this->objMenu->ParentMenuItem) ? $this->objMenu->ParentMenuItem->__toString() : null;

            if ($this->lstStatus) $this->lstStatus->SelectedValue = $this->objMenu->StatusId;
            if ($this->lblStatusId) $this->lblStatusId->Text = ($this->objMenu->StatusId) ? MenuStatusType::$NameArray[$this->objMenu->StatusId] : null;

            if ($this->lstType) $this->lstType->SelectedValue = $this->objMenu->TypeId;
            if ($this->lblTypeId) $this->lblTypeId->Text = ($this->objMenu->TypeId) ? MenuType::$NameArray[$this->objMenu->TypeId] : null;

            if ($this->lstContentBlocks) {
                $this->lstContentBlocks->RemoveAllItems();
                $objAssociatedArray = $this->objMenu->GetContentBlockArray();
                $objContentBlockArray = ContentBlock::LoadAll();
                if ($objContentBlockArray) foreach ($objContentBlockArray as $objContentBlock) {
                    $objListItem = new QListItem($objContentBlock->__toString(), $objContentBlock->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objContentBlock->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstContentBlocks->AddItem($objListItem);
                }
            }
            if ($this->lblContentBlocks) {
                $objAssociatedArray = $this->objMenu->GetContentBlockArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblContentBlocks->Text = implode($strGlue, $strItems);
            }

            if ($this->lstMenuItems) {
                $this->lstMenuItems->RemoveAllItems();
                $objAssociatedArray = $this->objMenu->GetMenuItemArray();
                $objMenuItemArray = MenuItem::LoadAll();
                if ($objMenuItemArray) foreach ($objMenuItemArray as $objMenuItem) {
                    $objListItem = new QListItem($objMenuItem->__toString(), $objMenuItem->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objMenuItem->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstMenuItems->AddItem($objListItem);
                }
            }
            if ($this->lblMenuItems) {
                $objAssociatedArray = $this->objMenu->GetMenuItemArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblMenuItems->Text = implode($strGlue, $strItems);
            }

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////

        protected function lstContentBlocks_Update() {
            if ($this->lstContentBlocks) {
                $this->objMenu->UnassociateAllContentBlocks();
                $objSelectedListItems = $this->lstContentBlocks->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objMenu->AssociateContentBlock(ContentBlock::Load($objListItem->Value));
                }
            }
        }

        protected function lstMenuItems_Update() {
            if ($this->lstMenuItems) {
                $this->objMenu->UnassociateAllMenuItems();
                $objSelectedListItems = $this->lstMenuItems->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objMenu->AssociateMenuItem(MenuItem::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC MENU OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's Menu instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveMenu() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objMenu->Name = $this->txtName->Text;
                if ($this->txtTitle) $this->objMenu->Title = $this->txtTitle->Text;
                if ($this->txtCssClass) $this->objMenu->CssClass = $this->txtCssClass->Text;
                if ($this->txtSortOrder) $this->objMenu->SortOrder = $this->txtSortOrder->Text;
                if ($this->chkShowTitle) $this->objMenu->ShowTitle = $this->chkShowTitle->Checked;
                if ($this->lstParentMenuItem) $this->objMenu->ParentMenuItemId = $this->lstParentMenuItem->SelectedValue;
                if ($this->lstStatus) $this->objMenu->StatusId = $this->lstStatus->SelectedValue;
                if ($this->lstType) $this->objMenu->TypeId = $this->lstType->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the Menu object
                $this->objMenu->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstContentBlocks_Update();
                $this->lstMenuItems_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's Menu instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteMenu() {
            $this->objMenu->UnassociateAllContentBlocks();
            $this->objMenu->UnassociateAllMenuItems();
            $this->objMenu->Delete();
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
                case 'Menu': return $this->objMenu;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to Menu fields -- will be created dynamically if not yet created
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
                case 'CssClassControl':
                    if (!$this->txtCssClass) return $this->txtCssClass_Create();
                    return $this->txtCssClass;
                case 'CssClassLabel':
                    if (!$this->lblCssClass) return $this->lblCssClass_Create();
                    return $this->lblCssClass;
                case 'SortOrderControl':
                    if (!$this->txtSortOrder) return $this->txtSortOrder_Create();
                    return $this->txtSortOrder;
                case 'SortOrderLabel':
                    if (!$this->lblSortOrder) return $this->lblSortOrder_Create();
                    return $this->lblSortOrder;
                case 'ShowTitleControl':
                    if (!$this->chkShowTitle) return $this->chkShowTitle_Create();
                    return $this->chkShowTitle;
                case 'ShowTitleLabel':
                    if (!$this->lblShowTitle) return $this->lblShowTitle_Create();
                    return $this->lblShowTitle;
                case 'ParentMenuItemIdControl':
                    if (!$this->lstParentMenuItem) return $this->lstParentMenuItem_Create();
                    return $this->lstParentMenuItem;
                case 'ParentMenuItemIdLabel':
                    if (!$this->lblParentMenuItemId) return $this->lblParentMenuItemId_Create();
                    return $this->lblParentMenuItemId;
                case 'StatusIdControl':
                    if (!$this->lstStatus) return $this->lstStatus_Create();
                    return $this->lstStatus;
                case 'StatusIdLabel':
                    if (!$this->lblStatusId) return $this->lblStatusId_Create();
                    return $this->lblStatusId;
                case 'TypeIdControl':
                    if (!$this->lstType) return $this->lstType_Create();
                    return $this->lstType;
                case 'TypeIdLabel':
                    if (!$this->lblTypeId) return $this->lblTypeId_Create();
                    return $this->lblTypeId;
                case 'ContentBlockControl':
                    if (!$this->lstContentBlocks) return $this->lstContentBlocks_Create();
                    return $this->lstContentBlocks;
                case 'ContentBlockLabel':
                    if (!$this->lblContentBlocks) return $this->lblContentBlocks_Create();
                    return $this->lblContentBlocks;
                case 'MenuItemControl':
                    if (!$this->lstMenuItems) return $this->lstMenuItems_Create();
                    return $this->lstMenuItems;
                case 'MenuItemLabel':
                    if (!$this->lblMenuItems) return $this->lblMenuItems_Create();
                    return $this->lblMenuItems;
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
                    // Controls that point to Menu fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'TitleControl':
                        return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
                    case 'CssClassControl':
                        return ($this->txtCssClass = QType::Cast($mixValue, 'QControl'));
                    case 'SortOrderControl':
                        return ($this->txtSortOrder = QType::Cast($mixValue, 'QControl'));
                    case 'ShowTitleControl':
                        return ($this->chkShowTitle = QType::Cast($mixValue, 'QControl'));
                    case 'ParentMenuItemIdControl':
                        return ($this->lstParentMenuItem = QType::Cast($mixValue, 'QControl'));
                    case 'StatusIdControl':
                        return ($this->lstStatus = QType::Cast($mixValue, 'QControl'));
                    case 'TypeIdControl':
                        return ($this->lstType = QType::Cast($mixValue, 'QControl'));
                    case 'ContentBlockControl':
                        return ($this->lstContentBlocks = QType::Cast($mixValue, 'QControl'));
                    case 'MenuItemControl':
                        return ($this->lstMenuItems = QType::Cast($mixValue, 'QControl'));
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