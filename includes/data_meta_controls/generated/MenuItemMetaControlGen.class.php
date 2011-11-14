<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the MenuItem class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single MenuItem object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a MenuItemMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read MenuItem $MenuItem the actual MenuItem data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QTextBox $CssClassControl
     * property-read QLabel $CssClassLabel
     * property QTextBox $LabelControl
     * property-read QLabel $LabelLabel
     * property QTextBox $UriControl
     * property-read QLabel $UriLabel
     * property QCheckBox $IsLocalControl
     * property-read QLabel $IsLocalLabel
     * property QCheckBox $IsSslControl
     * property-read QLabel $IsSslLabel
     * property QIntegerTextBox $SortOrderControl
     * property-read QLabel $SortOrderLabel
     * property QListBox $StatusIdControl
     * property-read QLabel $StatusIdLabel
     * property QListBox $TypeIdControl
     * property-read QLabel $TypeIdLabel
     * property QListBox $PageIdControl
     * property-read QLabel $PageIdLabel
     * property QListBox $MenuControl
     * property-read QLabel $MenuLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class MenuItemMetaControlGen extends QBaseClass {
        // General Variables
        protected $objMenuItem;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of MenuItem's individual data fields
        protected $lblId;
        protected $txtName;
        protected $txtCssClass;
        protected $txtLabel;
        protected $txtUri;
        protected $chkIsLocal;
        protected $chkIsSsl;
        protected $txtSortOrder;
        protected $lstStatus;
        protected $lstType;
        protected $lstPage;

        // Controls that allow the viewing of MenuItem's individual data fields
        protected $lblName;
        protected $lblCssClass;
        protected $lblLabel;
        protected $lblUri;
        protected $lblIsLocal;
        protected $lblIsSsl;
        protected $lblSortOrder;
        protected $lblStatusId;
        protected $lblTypeId;
        protected $lblPageId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstMenus;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblMenus;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * MenuItemMetaControl to edit a single MenuItem object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single MenuItem object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this MenuItemMetaControl
         * @param MenuItem $objMenuItem new or existing MenuItem object
         */
         public function __construct($objParentObject, MenuItem $objMenuItem) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this MenuItemMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked MenuItem object
            $this->objMenuItem = $objMenuItem;

            // Figure out if we're Editing or Creating New
            if ($this->objMenuItem->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this MenuItemMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing MenuItem object creation - defaults to CreateOrEdit
         * @return MenuItemMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objMenuItem = MenuItem::Load($intId);

                // MenuItem was found -- return it!
                if ($objMenuItem)
                    return new MenuItemMetaControl($objParentObject, $objMenuItem);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a MenuItem object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new MenuItemMetaControl($objParentObject, new MenuItem());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this MenuItemMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing MenuItem object creation - defaults to CreateOrEdit
         * @return MenuItemMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return MenuItemMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this MenuItemMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing MenuItem object creation - defaults to CreateOrEdit
         * @return MenuItemMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return MenuItemMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objMenuItem->Id;
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
            $this->txtName->Text = $this->objMenuItem->Name;
            $this->txtName->Required = true;
            $this->txtName->MaxLength = MenuItem::NameMaxLength;
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
            $this->lblName->Text = $this->objMenuItem->Name;
            $this->lblName->Required = true;
            return $this->lblName;
        }

        /**
         * Create and setup QTextBox txtCssClass
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCssClass_Create($strControlId = null) {
            $this->txtCssClass = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCssClass->Name = QApplication::Translate('Css Class');
            $this->txtCssClass->Text = $this->objMenuItem->CssClass;
            $this->txtCssClass->MaxLength = MenuItem::CssClassMaxLength;
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
            $this->lblCssClass->Text = $this->objMenuItem->CssClass;
            return $this->lblCssClass;
        }

        /**
         * Create and setup QTextBox txtLabel
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtLabel_Create($strControlId = null) {
            $this->txtLabel = new QTextBox($this->objParentObject, $strControlId);
            $this->txtLabel->Name = QApplication::Translate('Label');
            $this->txtLabel->Text = $this->objMenuItem->Label;
            $this->txtLabel->MaxLength = MenuItem::LabelMaxLength;
            return $this->txtLabel;
        }

        /**
         * Create and setup QLabel lblLabel
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblLabel_Create($strControlId = null) {
            $this->lblLabel = new QLabel($this->objParentObject, $strControlId);
            $this->lblLabel->Name = QApplication::Translate('Label');
            $this->lblLabel->Text = $this->objMenuItem->Label;
            return $this->lblLabel;
        }

        /**
         * Create and setup QTextBox txtUri
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtUri_Create($strControlId = null) {
            $this->txtUri = new QTextBox($this->objParentObject, $strControlId);
            $this->txtUri->Name = QApplication::Translate('Uri');
            $this->txtUri->Text = $this->objMenuItem->Uri;
            $this->txtUri->Required = true;
            $this->txtUri->MaxLength = MenuItem::UriMaxLength;
            return $this->txtUri;
        }

        /**
         * Create and setup QLabel lblUri
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblUri_Create($strControlId = null) {
            $this->lblUri = new QLabel($this->objParentObject, $strControlId);
            $this->lblUri->Name = QApplication::Translate('Uri');
            $this->lblUri->Text = $this->objMenuItem->Uri;
            $this->lblUri->Required = true;
            return $this->lblUri;
        }

        /**
         * Create and setup QCheckBox chkIsLocal
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkIsLocal_Create($strControlId = null) {
            $this->chkIsLocal = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkIsLocal->Name = QApplication::Translate('Is Local');
            $this->chkIsLocal->Checked = $this->objMenuItem->IsLocal;
            return $this->chkIsLocal;
        }

        /**
         * Create and setup QLabel lblIsLocal
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblIsLocal_Create($strControlId = null) {
            $this->lblIsLocal = new QLabel($this->objParentObject, $strControlId);
            $this->lblIsLocal->Name = QApplication::Translate('Is Local');
            $this->lblIsLocal->Text = ($this->objMenuItem->IsLocal) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblIsLocal;
        }

        /**
         * Create and setup QCheckBox chkIsSsl
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkIsSsl_Create($strControlId = null) {
            $this->chkIsSsl = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkIsSsl->Name = QApplication::Translate('Is Ssl');
            $this->chkIsSsl->Checked = $this->objMenuItem->IsSsl;
            return $this->chkIsSsl;
        }

        /**
         * Create and setup QLabel lblIsSsl
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblIsSsl_Create($strControlId = null) {
            $this->lblIsSsl = new QLabel($this->objParentObject, $strControlId);
            $this->lblIsSsl->Name = QApplication::Translate('Is Ssl');
            $this->lblIsSsl->Text = ($this->objMenuItem->IsSsl) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblIsSsl;
        }

        /**
         * Create and setup QIntegerTextBox txtSortOrder
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtSortOrder_Create($strControlId = null) {
            $this->txtSortOrder = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtSortOrder->Name = QApplication::Translate('Sort Order');
            $this->txtSortOrder->Text = $this->objMenuItem->SortOrder;
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
            $this->lblSortOrder->Text = $this->objMenuItem->SortOrder;
            $this->lblSortOrder->Required = true;
            $this->lblSortOrder->Format = $strFormat;
            return $this->lblSortOrder;
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
                $this->lstStatus->AddItem(new QListItem($strValue, $intId, $this->objMenuItem->StatusId == $intId));
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
            $this->lblStatusId->Text = ($this->objMenuItem->StatusId) ? MenuStatusType::$NameArray[$this->objMenuItem->StatusId] : null;
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
            foreach (MenuItemType::$NameArray as $intId => $strValue)
                $this->lstType->AddItem(new QListItem($strValue, $intId, $this->objMenuItem->TypeId == $intId));
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
            $this->lblTypeId->Text = ($this->objMenuItem->TypeId) ? MenuItemType::$NameArray[$this->objMenuItem->TypeId] : null;
            $this->lblTypeId->Required = true;
            return $this->lblTypeId;
        }

        /**
         * Create and setup QListBox lstPage
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstPage_Create($strControlId = null) {
            $this->lstPage = new QListBox($this->objParentObject, $strControlId);
            $this->lstPage->Name = QApplication::Translate('Page');
            $this->lstPage->AddItem(QApplication::Translate('- Select One -'), null);
            $objPageArray = Page::LoadAll();
            if ($objPageArray) foreach ($objPageArray as $objPage) {
                $objListItem = new QListItem($objPage->__toString(), $objPage->Id);
                if (($this->objMenuItem->Page) && ($this->objMenuItem->Page->Id == $objPage->Id))
                    $objListItem->Selected = true;
                $this->lstPage->AddItem($objListItem);
            }
            return $this->lstPage;
        }

        /**
         * Create and setup QLabel lblPageId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblPageId_Create($strControlId = null) {
            $this->lblPageId = new QLabel($this->objParentObject, $strControlId);
            $this->lblPageId->Name = QApplication::Translate('Page');
            $this->lblPageId->Text = ($this->objMenuItem->Page) ? $this->objMenuItem->Page->__toString() : null;
            return $this->lblPageId;
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
            $objAssociatedArray = $this->objMenuItem->GetMenuArray();
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
            
            $objAssociatedArray = $this->objMenuItem->GetMenuArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblMenus->Text = implode($strGlue, $strItems);
            return $this->lblMenus;
        }



        /**
         * Refresh this MetaControl with Data from the local MenuItem object.
         * @param boolean $blnReload reload MenuItem from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objMenuItem->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objMenuItem->Id;

            if ($this->txtName) $this->txtName->Text = $this->objMenuItem->Name;
            if ($this->lblName) $this->lblName->Text = $this->objMenuItem->Name;

            if ($this->txtCssClass) $this->txtCssClass->Text = $this->objMenuItem->CssClass;
            if ($this->lblCssClass) $this->lblCssClass->Text = $this->objMenuItem->CssClass;

            if ($this->txtLabel) $this->txtLabel->Text = $this->objMenuItem->Label;
            if ($this->lblLabel) $this->lblLabel->Text = $this->objMenuItem->Label;

            if ($this->txtUri) $this->txtUri->Text = $this->objMenuItem->Uri;
            if ($this->lblUri) $this->lblUri->Text = $this->objMenuItem->Uri;

            if ($this->chkIsLocal) $this->chkIsLocal->Checked = $this->objMenuItem->IsLocal;
            if ($this->lblIsLocal) $this->lblIsLocal->Text = ($this->objMenuItem->IsLocal) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkIsSsl) $this->chkIsSsl->Checked = $this->objMenuItem->IsSsl;
            if ($this->lblIsSsl) $this->lblIsSsl->Text = ($this->objMenuItem->IsSsl) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->txtSortOrder) $this->txtSortOrder->Text = $this->objMenuItem->SortOrder;
            if ($this->lblSortOrder) $this->lblSortOrder->Text = $this->objMenuItem->SortOrder;

            if ($this->lstStatus) $this->lstStatus->SelectedValue = $this->objMenuItem->StatusId;
            if ($this->lblStatusId) $this->lblStatusId->Text = ($this->objMenuItem->StatusId) ? MenuStatusType::$NameArray[$this->objMenuItem->StatusId] : null;

            if ($this->lstType) $this->lstType->SelectedValue = $this->objMenuItem->TypeId;
            if ($this->lblTypeId) $this->lblTypeId->Text = ($this->objMenuItem->TypeId) ? MenuItemType::$NameArray[$this->objMenuItem->TypeId] : null;

            if ($this->lstPage) {
                    $this->lstPage->RemoveAllItems();
                $this->lstPage->AddItem(QApplication::Translate('- Select One -'), null);
                $objPageArray = Page::LoadAll();
                if ($objPageArray) foreach ($objPageArray as $objPage) {
                    $objListItem = new QListItem($objPage->__toString(), $objPage->Id);
                    if (($this->objMenuItem->Page) && ($this->objMenuItem->Page->Id == $objPage->Id))
                        $objListItem->Selected = true;
                    $this->lstPage->AddItem($objListItem);
                }
            }
            if ($this->lblPageId) $this->lblPageId->Text = ($this->objMenuItem->Page) ? $this->objMenuItem->Page->__toString() : null;

            if ($this->lstMenus) {
                $this->lstMenus->RemoveAllItems();
                $objAssociatedArray = $this->objMenuItem->GetMenuArray();
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
                $objAssociatedArray = $this->objMenuItem->GetMenuArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblMenus->Text = implode($strGlue, $strItems);
            }

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////

        protected function lstMenus_Update() {
            if ($this->lstMenus) {
                $this->objMenuItem->UnassociateAllMenus();
                $objSelectedListItems = $this->lstMenus->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objMenuItem->AssociateMenu(Menu::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC MENUITEM OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's MenuItem instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveMenuItem() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objMenuItem->Name = $this->txtName->Text;
                if ($this->txtCssClass) $this->objMenuItem->CssClass = $this->txtCssClass->Text;
                if ($this->txtLabel) $this->objMenuItem->Label = $this->txtLabel->Text;
                if ($this->txtUri) $this->objMenuItem->Uri = $this->txtUri->Text;
                if ($this->chkIsLocal) $this->objMenuItem->IsLocal = $this->chkIsLocal->Checked;
                if ($this->chkIsSsl) $this->objMenuItem->IsSsl = $this->chkIsSsl->Checked;
                if ($this->txtSortOrder) $this->objMenuItem->SortOrder = $this->txtSortOrder->Text;
                if ($this->lstStatus) $this->objMenuItem->StatusId = $this->lstStatus->SelectedValue;
                if ($this->lstType) $this->objMenuItem->TypeId = $this->lstType->SelectedValue;
                if ($this->lstPage) $this->objMenuItem->PageId = $this->lstPage->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the MenuItem object
                $this->objMenuItem->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstMenus_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's MenuItem instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteMenuItem() {
            $this->objMenuItem->UnassociateAllMenus();
            $this->objMenuItem->Delete();
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
                case 'MenuItem': return $this->objMenuItem;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to MenuItem fields -- will be created dynamically if not yet created
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
                case 'CssClassControl':
                    if (!$this->txtCssClass) return $this->txtCssClass_Create();
                    return $this->txtCssClass;
                case 'CssClassLabel':
                    if (!$this->lblCssClass) return $this->lblCssClass_Create();
                    return $this->lblCssClass;
                case 'LabelControl':
                    if (!$this->txtLabel) return $this->txtLabel_Create();
                    return $this->txtLabel;
                case 'LabelLabel':
                    if (!$this->lblLabel) return $this->lblLabel_Create();
                    return $this->lblLabel;
                case 'UriControl':
                    if (!$this->txtUri) return $this->txtUri_Create();
                    return $this->txtUri;
                case 'UriLabel':
                    if (!$this->lblUri) return $this->lblUri_Create();
                    return $this->lblUri;
                case 'IsLocalControl':
                    if (!$this->chkIsLocal) return $this->chkIsLocal_Create();
                    return $this->chkIsLocal;
                case 'IsLocalLabel':
                    if (!$this->lblIsLocal) return $this->lblIsLocal_Create();
                    return $this->lblIsLocal;
                case 'IsSslControl':
                    if (!$this->chkIsSsl) return $this->chkIsSsl_Create();
                    return $this->chkIsSsl;
                case 'IsSslLabel':
                    if (!$this->lblIsSsl) return $this->lblIsSsl_Create();
                    return $this->lblIsSsl;
                case 'SortOrderControl':
                    if (!$this->txtSortOrder) return $this->txtSortOrder_Create();
                    return $this->txtSortOrder;
                case 'SortOrderLabel':
                    if (!$this->lblSortOrder) return $this->lblSortOrder_Create();
                    return $this->lblSortOrder;
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
                case 'PageIdControl':
                    if (!$this->lstPage) return $this->lstPage_Create();
                    return $this->lstPage;
                case 'PageIdLabel':
                    if (!$this->lblPageId) return $this->lblPageId_Create();
                    return $this->lblPageId;
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
                    // Controls that point to MenuItem fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'CssClassControl':
                        return ($this->txtCssClass = QType::Cast($mixValue, 'QControl'));
                    case 'LabelControl':
                        return ($this->txtLabel = QType::Cast($mixValue, 'QControl'));
                    case 'UriControl':
                        return ($this->txtUri = QType::Cast($mixValue, 'QControl'));
                    case 'IsLocalControl':
                        return ($this->chkIsLocal = QType::Cast($mixValue, 'QControl'));
                    case 'IsSslControl':
                        return ($this->chkIsSsl = QType::Cast($mixValue, 'QControl'));
                    case 'SortOrderControl':
                        return ($this->txtSortOrder = QType::Cast($mixValue, 'QControl'));
                    case 'StatusIdControl':
                        return ($this->lstStatus = QType::Cast($mixValue, 'QControl'));
                    case 'TypeIdControl':
                        return ($this->lstType = QType::Cast($mixValue, 'QControl'));
                    case 'PageIdControl':
                        return ($this->lstPage = QType::Cast($mixValue, 'QControl'));
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