<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the Usergroup class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single Usergroup object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a UsergroupMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read Usergroup $Usergroup the actual Usergroup data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QListBox $ContentItemControl
     * property-read QLabel $ContentItemLabel
     * property QListBox $PageControl
     * property-read QLabel $PageLabel
     * property QListBox $PersonControl
     * property-read QLabel $PersonLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class UsergroupMetaControlGen extends QBaseClass {
        // General Variables
        protected $objUsergroup;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of Usergroup's individual data fields
        protected $lblId;
        protected $txtName;

        // Controls that allow the viewing of Usergroup's individual data fields
        protected $lblName;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstContentItems;
        protected $lstPages;
        protected $lstPeople;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblContentItems;
        protected $lblPages;
        protected $lblPeople;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * UsergroupMetaControl to edit a single Usergroup object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single Usergroup object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this UsergroupMetaControl
         * @param Usergroup $objUsergroup new or existing Usergroup object
         */
         public function __construct($objParentObject, Usergroup $objUsergroup) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this UsergroupMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked Usergroup object
            $this->objUsergroup = $objUsergroup;

            // Figure out if we're Editing or Creating New
            if ($this->objUsergroup->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this UsergroupMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing Usergroup object creation - defaults to CreateOrEdit
         * @return UsergroupMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objUsergroup = Usergroup::Load($intId);

                // Usergroup was found -- return it!
                if ($objUsergroup)
                    return new UsergroupMetaControl($objParentObject, $objUsergroup);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a Usergroup object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new UsergroupMetaControl($objParentObject, new Usergroup());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this UsergroupMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Usergroup object creation - defaults to CreateOrEdit
         * @return UsergroupMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return UsergroupMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this UsergroupMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Usergroup object creation - defaults to CreateOrEdit
         * @return UsergroupMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return UsergroupMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objUsergroup->Id;
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
            $this->txtName->Text = $this->objUsergroup->Name;
            $this->txtName->MaxLength = Usergroup::NameMaxLength;
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
            $this->lblName->Text = $this->objUsergroup->Name;
            return $this->lblName;
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
            $objAssociatedArray = $this->objUsergroup->GetContentItemArray();
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
            
            $objAssociatedArray = $this->objUsergroup->GetContentItemArray();
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
            $objAssociatedArray = $this->objUsergroup->GetPageArray();
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
            
            $objAssociatedArray = $this->objUsergroup->GetPageArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblPages->Text = implode($strGlue, $strItems);
            return $this->lblPages;
        }

        /**
         * Create and setup QListBox lstPeople
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstPeople_Create($strControlId = null) {
            $this->lstPeople = new QListBox($this->objParentObject, $strControlId);
            $this->lstPeople->Name = QApplication::Translate('People');
            $this->lstPeople->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objUsergroup->GetPersonArray();
            $objPersonArray = Person::LoadAll();
            if ($objPersonArray) foreach ($objPersonArray as $objPerson) {
                $objListItem = new QListItem($objPerson->__toString(), $objPerson->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objPerson->Id)
                        $objListItem->Selected = true;
                }
                $this->lstPeople->AddItem($objListItem);
            }
            return $this->lstPeople;
        }

        /**
         * Create and setup QLabel lblPeople
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblPeople_Create($strControlId = null, $strGlue = ', ') {
            $this->lblPeople = new QLabel($this->objParentObject, $strControlId);
            $this->lblPeople->Name = QApplication::Translate('People');
            
            $objAssociatedArray = $this->objUsergroup->GetPersonArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblPeople->Text = implode($strGlue, $strItems);
            return $this->lblPeople;
        }



        /**
         * Refresh this MetaControl with Data from the local Usergroup object.
         * @param boolean $blnReload reload Usergroup from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objUsergroup->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objUsergroup->Id;

            if ($this->txtName) $this->txtName->Text = $this->objUsergroup->Name;
            if ($this->lblName) $this->lblName->Text = $this->objUsergroup->Name;

            if ($this->lstContentItems) {
                $this->lstContentItems->RemoveAllItems();
                $objAssociatedArray = $this->objUsergroup->GetContentItemArray();
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
                $objAssociatedArray = $this->objUsergroup->GetContentItemArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblContentItems->Text = implode($strGlue, $strItems);
            }

            if ($this->lstPages) {
                $this->lstPages->RemoveAllItems();
                $objAssociatedArray = $this->objUsergroup->GetPageArray();
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
                $objAssociatedArray = $this->objUsergroup->GetPageArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblPages->Text = implode($strGlue, $strItems);
            }

            if ($this->lstPeople) {
                $this->lstPeople->RemoveAllItems();
                $objAssociatedArray = $this->objUsergroup->GetPersonArray();
                $objPersonArray = Person::LoadAll();
                if ($objPersonArray) foreach ($objPersonArray as $objPerson) {
                    $objListItem = new QListItem($objPerson->__toString(), $objPerson->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objPerson->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstPeople->AddItem($objListItem);
                }
            }
            if ($this->lblPeople) {
                $objAssociatedArray = $this->objUsergroup->GetPersonArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblPeople->Text = implode($strGlue, $strItems);
            }

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////

        protected function lstContentItems_Update() {
            if ($this->lstContentItems) {
                $this->objUsergroup->UnassociateAllContentItems();
                $objSelectedListItems = $this->lstContentItems->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objUsergroup->AssociateContentItem(ContentItem::Load($objListItem->Value));
                }
            }
        }

        protected function lstPages_Update() {
            if ($this->lstPages) {
                $this->objUsergroup->UnassociateAllPages();
                $objSelectedListItems = $this->lstPages->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objUsergroup->AssociatePage(Page::Load($objListItem->Value));
                }
            }
        }

        protected function lstPeople_Update() {
            if ($this->lstPeople) {
                $this->objUsergroup->UnassociateAllPeople();
                $objSelectedListItems = $this->lstPeople->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objUsergroup->AssociatePerson(Person::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC USERGROUP OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's Usergroup instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveUsergroup() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objUsergroup->Name = $this->txtName->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the Usergroup object
                $this->objUsergroup->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstContentItems_Update();
                $this->lstPages_Update();
                $this->lstPeople_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's Usergroup instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteUsergroup() {
            $this->objUsergroup->UnassociateAllContentItems();
            $this->objUsergroup->UnassociateAllPages();
            $this->objUsergroup->UnassociateAllPeople();
            $this->objUsergroup->Delete();
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
                case 'Usergroup': return $this->objUsergroup;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to Usergroup fields -- will be created dynamically if not yet created
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
                case 'PersonControl':
                    if (!$this->lstPeople) return $this->lstPeople_Create();
                    return $this->lstPeople;
                case 'PersonLabel':
                    if (!$this->lblPeople) return $this->lblPeople_Create();
                    return $this->lblPeople;
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
                    // Controls that point to Usergroup fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'ContentItemControl':
                        return ($this->lstContentItems = QType::Cast($mixValue, 'QControl'));
                    case 'PageControl':
                        return ($this->lstPages = QType::Cast($mixValue, 'QControl'));
                    case 'PersonControl':
                        return ($this->lstPeople = QType::Cast($mixValue, 'QControl'));
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