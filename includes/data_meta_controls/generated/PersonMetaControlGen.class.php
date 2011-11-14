<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the Person class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single Person object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a PersonMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read Person $Person the actual Person data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NamePrefixControl
     * property-read QLabel $NamePrefixLabel
     * property QTextBox $FirstNameControl
     * property-read QLabel $FirstNameLabel
     * property QTextBox $MiddleNameControl
     * property-read QLabel $MiddleNameLabel
     * property QTextBox $LastNameControl
     * property-read QLabel $LastNameLabel
     * property QTextBox $NameSuffixControl
     * property-read QLabel $NameSuffixLabel
     * property QTextBox $NickNameControl
     * property-read QLabel $NickNameLabel
     * property QTextBox $AvatarUriControl
     * property-read QLabel $AvatarUriLabel
     * property QTextBox $CompanyNameControl
     * property-read QLabel $CompanyNameLabel
     * property QListBox $OwnerPersonIdControl
     * property-read QLabel $OwnerPersonIdLabel
     * property QCheckBox $IsVirtualControl
     * property-read QLabel $IsVirtualLabel
     * property QListBox $AccountControl
     * property-read QLabel $AccountLabel
     * property QListBox $UsergroupControl
     * property-read QLabel $UsergroupLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class PersonMetaControlGen extends QBaseClass {
        // General Variables
        protected $objPerson;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of Person's individual data fields
        protected $lblId;
        protected $txtNamePrefix;
        protected $txtFirstName;
        protected $txtMiddleName;
        protected $txtLastName;
        protected $txtNameSuffix;
        protected $txtNickName;
        protected $txtAvatarUri;
        protected $txtCompanyName;
        protected $lstOwnerPerson;
        protected $chkIsVirtual;

        // Controls that allow the viewing of Person's individual data fields
        protected $lblNamePrefix;
        protected $lblFirstName;
        protected $lblMiddleName;
        protected $lblLastName;
        protected $lblNameSuffix;
        protected $lblNickName;
        protected $lblAvatarUri;
        protected $lblCompanyName;
        protected $lblOwnerPersonId;
        protected $lblIsVirtual;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstAccount;
        protected $lstUsergroups;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblAccount;
        protected $lblUsergroups;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * PersonMetaControl to edit a single Person object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single Person object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PersonMetaControl
         * @param Person $objPerson new or existing Person object
         */
         public function __construct($objParentObject, Person $objPerson) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this PersonMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked Person object
            $this->objPerson = $objPerson;

            // Figure out if we're Editing or Creating New
            if ($this->objPerson->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this PersonMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing Person object creation - defaults to CreateOrEdit
         * @return PersonMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objPerson = Person::Load($intId);

                // Person was found -- return it!
                if ($objPerson)
                    return new PersonMetaControl($objParentObject, $objPerson);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a Person object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new PersonMetaControl($objParentObject, new Person());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PersonMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Person object creation - defaults to CreateOrEdit
         * @return PersonMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return PersonMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PersonMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Person object creation - defaults to CreateOrEdit
         * @return PersonMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return PersonMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objPerson->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
        }

        /**
         * Create and setup QTextBox txtNamePrefix
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtNamePrefix_Create($strControlId = null) {
            $this->txtNamePrefix = new QTextBox($this->objParentObject, $strControlId);
            $this->txtNamePrefix->Name = QApplication::Translate('Name Prefix');
            $this->txtNamePrefix->Text = $this->objPerson->NamePrefix;
            $this->txtNamePrefix->MaxLength = Person::NamePrefixMaxLength;
            return $this->txtNamePrefix;
        }

        /**
         * Create and setup QLabel lblNamePrefix
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblNamePrefix_Create($strControlId = null) {
            $this->lblNamePrefix = new QLabel($this->objParentObject, $strControlId);
            $this->lblNamePrefix->Name = QApplication::Translate('Name Prefix');
            $this->lblNamePrefix->Text = $this->objPerson->NamePrefix;
            return $this->lblNamePrefix;
        }

        /**
         * Create and setup QTextBox txtFirstName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtFirstName_Create($strControlId = null) {
            $this->txtFirstName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtFirstName->Name = QApplication::Translate('First Name');
            $this->txtFirstName->Text = $this->objPerson->FirstName;
            $this->txtFirstName->Required = true;
            $this->txtFirstName->MaxLength = Person::FirstNameMaxLength;
            return $this->txtFirstName;
        }

        /**
         * Create and setup QLabel lblFirstName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblFirstName_Create($strControlId = null) {
            $this->lblFirstName = new QLabel($this->objParentObject, $strControlId);
            $this->lblFirstName->Name = QApplication::Translate('First Name');
            $this->lblFirstName->Text = $this->objPerson->FirstName;
            $this->lblFirstName->Required = true;
            return $this->lblFirstName;
        }

        /**
         * Create and setup QTextBox txtMiddleName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtMiddleName_Create($strControlId = null) {
            $this->txtMiddleName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtMiddleName->Name = QApplication::Translate('Middle Name');
            $this->txtMiddleName->Text = $this->objPerson->MiddleName;
            $this->txtMiddleName->MaxLength = Person::MiddleNameMaxLength;
            return $this->txtMiddleName;
        }

        /**
         * Create and setup QLabel lblMiddleName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblMiddleName_Create($strControlId = null) {
            $this->lblMiddleName = new QLabel($this->objParentObject, $strControlId);
            $this->lblMiddleName->Name = QApplication::Translate('Middle Name');
            $this->lblMiddleName->Text = $this->objPerson->MiddleName;
            return $this->lblMiddleName;
        }

        /**
         * Create and setup QTextBox txtLastName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtLastName_Create($strControlId = null) {
            $this->txtLastName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtLastName->Name = QApplication::Translate('Last Name');
            $this->txtLastName->Text = $this->objPerson->LastName;
            $this->txtLastName->Required = true;
            $this->txtLastName->MaxLength = Person::LastNameMaxLength;
            return $this->txtLastName;
        }

        /**
         * Create and setup QLabel lblLastName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblLastName_Create($strControlId = null) {
            $this->lblLastName = new QLabel($this->objParentObject, $strControlId);
            $this->lblLastName->Name = QApplication::Translate('Last Name');
            $this->lblLastName->Text = $this->objPerson->LastName;
            $this->lblLastName->Required = true;
            return $this->lblLastName;
        }

        /**
         * Create and setup QTextBox txtNameSuffix
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtNameSuffix_Create($strControlId = null) {
            $this->txtNameSuffix = new QTextBox($this->objParentObject, $strControlId);
            $this->txtNameSuffix->Name = QApplication::Translate('Name Suffix');
            $this->txtNameSuffix->Text = $this->objPerson->NameSuffix;
            $this->txtNameSuffix->MaxLength = Person::NameSuffixMaxLength;
            return $this->txtNameSuffix;
        }

        /**
         * Create and setup QLabel lblNameSuffix
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblNameSuffix_Create($strControlId = null) {
            $this->lblNameSuffix = new QLabel($this->objParentObject, $strControlId);
            $this->lblNameSuffix->Name = QApplication::Translate('Name Suffix');
            $this->lblNameSuffix->Text = $this->objPerson->NameSuffix;
            return $this->lblNameSuffix;
        }

        /**
         * Create and setup QTextBox txtNickName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtNickName_Create($strControlId = null) {
            $this->txtNickName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtNickName->Name = QApplication::Translate('Nick Name');
            $this->txtNickName->Text = $this->objPerson->NickName;
            $this->txtNickName->MaxLength = Person::NickNameMaxLength;
            return $this->txtNickName;
        }

        /**
         * Create and setup QLabel lblNickName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblNickName_Create($strControlId = null) {
            $this->lblNickName = new QLabel($this->objParentObject, $strControlId);
            $this->lblNickName->Name = QApplication::Translate('Nick Name');
            $this->lblNickName->Text = $this->objPerson->NickName;
            return $this->lblNickName;
        }

        /**
         * Create and setup QTextBox txtAvatarUri
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtAvatarUri_Create($strControlId = null) {
            $this->txtAvatarUri = new QTextBox($this->objParentObject, $strControlId);
            $this->txtAvatarUri->Name = QApplication::Translate('Avatar Uri');
            $this->txtAvatarUri->Text = $this->objPerson->AvatarUri;
            $this->txtAvatarUri->MaxLength = Person::AvatarUriMaxLength;
            return $this->txtAvatarUri;
        }

        /**
         * Create and setup QLabel lblAvatarUri
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblAvatarUri_Create($strControlId = null) {
            $this->lblAvatarUri = new QLabel($this->objParentObject, $strControlId);
            $this->lblAvatarUri->Name = QApplication::Translate('Avatar Uri');
            $this->lblAvatarUri->Text = $this->objPerson->AvatarUri;
            return $this->lblAvatarUri;
        }

        /**
         * Create and setup QTextBox txtCompanyName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCompanyName_Create($strControlId = null) {
            $this->txtCompanyName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCompanyName->Name = QApplication::Translate('Company Name');
            $this->txtCompanyName->Text = $this->objPerson->CompanyName;
            $this->txtCompanyName->MaxLength = Person::CompanyNameMaxLength;
            return $this->txtCompanyName;
        }

        /**
         * Create and setup QLabel lblCompanyName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCompanyName_Create($strControlId = null) {
            $this->lblCompanyName = new QLabel($this->objParentObject, $strControlId);
            $this->lblCompanyName->Name = QApplication::Translate('Company Name');
            $this->lblCompanyName->Text = $this->objPerson->CompanyName;
            return $this->lblCompanyName;
        }

        /**
         * Create and setup QListBox lstOwnerPerson
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstOwnerPerson_Create($strControlId = null) {
            $this->lstOwnerPerson = new QListBox($this->objParentObject, $strControlId);
            $this->lstOwnerPerson->Name = QApplication::Translate('Owner Person');
            $this->lstOwnerPerson->AddItem(QApplication::Translate('- Select One -'), null);
            $objOwnerPersonArray = Person::LoadAll();
            if ($objOwnerPersonArray) foreach ($objOwnerPersonArray as $objOwnerPerson) {
                $objListItem = new QListItem($objOwnerPerson->__toString(), $objOwnerPerson->Id);
                if (($this->objPerson->OwnerPerson) && ($this->objPerson->OwnerPerson->Id == $objOwnerPerson->Id))
                    $objListItem->Selected = true;
                $this->lstOwnerPerson->AddItem($objListItem);
            }
            return $this->lstOwnerPerson;
        }

        /**
         * Create and setup QLabel lblOwnerPersonId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblOwnerPersonId_Create($strControlId = null) {
            $this->lblOwnerPersonId = new QLabel($this->objParentObject, $strControlId);
            $this->lblOwnerPersonId->Name = QApplication::Translate('Owner Person');
            $this->lblOwnerPersonId->Text = ($this->objPerson->OwnerPerson) ? $this->objPerson->OwnerPerson->__toString() : null;
            return $this->lblOwnerPersonId;
        }

        /**
         * Create and setup QCheckBox chkIsVirtual
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkIsVirtual_Create($strControlId = null) {
            $this->chkIsVirtual = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkIsVirtual->Name = QApplication::Translate('Is Virtual');
            $this->chkIsVirtual->Checked = $this->objPerson->IsVirtual;
            return $this->chkIsVirtual;
        }

        /**
         * Create and setup QLabel lblIsVirtual
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblIsVirtual_Create($strControlId = null) {
            $this->lblIsVirtual = new QLabel($this->objParentObject, $strControlId);
            $this->lblIsVirtual->Name = QApplication::Translate('Is Virtual');
            $this->lblIsVirtual->Text = ($this->objPerson->IsVirtual) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblIsVirtual;
        }

        /**
         * Create and setup QListBox lstAccount
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstAccount_Create($strControlId = null) {
            $this->lstAccount = new QListBox($this->objParentObject, $strControlId);
            $this->lstAccount->Name = QApplication::Translate('Account');
            $this->lstAccount->AddItem(QApplication::Translate('- Select One -'), null);
            $objAccountArray = Account::LoadAll();
            if ($objAccountArray) foreach ($objAccountArray as $objAccount) {
                $objListItem = new QListItem($objAccount->__toString(), $objAccount->Id);
                if ($objAccount->PersonId == $this->objPerson->Id)
                    $objListItem->Selected = true;
                $this->lstAccount->AddItem($objListItem);
            }
            // Because Account's Account is not null, if a value is already selected, it cannot be changed.
            if ($this->lstAccount->SelectedValue)
                $this->lstAccount->Enabled = false;
            return $this->lstAccount;
        }

        /**
         * Create and setup QLabel lblAccount
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblAccount_Create($strControlId = null) {
            $this->lblAccount = new QLabel($this->objParentObject, $strControlId);
            $this->lblAccount->Name = QApplication::Translate('Account');
            $this->lblAccount->Text = ($this->objPerson->Account) ? $this->objPerson->Account->__toString() : null;
            return $this->lblAccount;
        }

        /**
         * Create and setup QListBox lstUsergroups
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstUsergroups_Create($strControlId = null) {
            $this->lstUsergroups = new QListBox($this->objParentObject, $strControlId);
            $this->lstUsergroups->Name = QApplication::Translate('Usergroups');
            $this->lstUsergroups->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objPerson->GetUsergroupArray();
            $objUsergroupArray = Usergroup::LoadAll();
            if ($objUsergroupArray) foreach ($objUsergroupArray as $objUsergroup) {
                $objListItem = new QListItem($objUsergroup->__toString(), $objUsergroup->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objUsergroup->Id)
                        $objListItem->Selected = true;
                }
                $this->lstUsergroups->AddItem($objListItem);
            }
            return $this->lstUsergroups;
        }

        /**
         * Create and setup QLabel lblUsergroups
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblUsergroups_Create($strControlId = null, $strGlue = ', ') {
            $this->lblUsergroups = new QLabel($this->objParentObject, $strControlId);
            $this->lblUsergroups->Name = QApplication::Translate('Usergroups');
            
            $objAssociatedArray = $this->objPerson->GetUsergroupArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblUsergroups->Text = implode($strGlue, $strItems);
            return $this->lblUsergroups;
        }



        /**
         * Refresh this MetaControl with Data from the local Person object.
         * @param boolean $blnReload reload Person from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objPerson->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objPerson->Id;

            if ($this->txtNamePrefix) $this->txtNamePrefix->Text = $this->objPerson->NamePrefix;
            if ($this->lblNamePrefix) $this->lblNamePrefix->Text = $this->objPerson->NamePrefix;

            if ($this->txtFirstName) $this->txtFirstName->Text = $this->objPerson->FirstName;
            if ($this->lblFirstName) $this->lblFirstName->Text = $this->objPerson->FirstName;

            if ($this->txtMiddleName) $this->txtMiddleName->Text = $this->objPerson->MiddleName;
            if ($this->lblMiddleName) $this->lblMiddleName->Text = $this->objPerson->MiddleName;

            if ($this->txtLastName) $this->txtLastName->Text = $this->objPerson->LastName;
            if ($this->lblLastName) $this->lblLastName->Text = $this->objPerson->LastName;

            if ($this->txtNameSuffix) $this->txtNameSuffix->Text = $this->objPerson->NameSuffix;
            if ($this->lblNameSuffix) $this->lblNameSuffix->Text = $this->objPerson->NameSuffix;

            if ($this->txtNickName) $this->txtNickName->Text = $this->objPerson->NickName;
            if ($this->lblNickName) $this->lblNickName->Text = $this->objPerson->NickName;

            if ($this->txtAvatarUri) $this->txtAvatarUri->Text = $this->objPerson->AvatarUri;
            if ($this->lblAvatarUri) $this->lblAvatarUri->Text = $this->objPerson->AvatarUri;

            if ($this->txtCompanyName) $this->txtCompanyName->Text = $this->objPerson->CompanyName;
            if ($this->lblCompanyName) $this->lblCompanyName->Text = $this->objPerson->CompanyName;

            if ($this->lstOwnerPerson) {
                    $this->lstOwnerPerson->RemoveAllItems();
                $this->lstOwnerPerson->AddItem(QApplication::Translate('- Select One -'), null);
                $objOwnerPersonArray = Person::LoadAll();
                if ($objOwnerPersonArray) foreach ($objOwnerPersonArray as $objOwnerPerson) {
                    $objListItem = new QListItem($objOwnerPerson->__toString(), $objOwnerPerson->Id);
                    if (($this->objPerson->OwnerPerson) && ($this->objPerson->OwnerPerson->Id == $objOwnerPerson->Id))
                        $objListItem->Selected = true;
                    $this->lstOwnerPerson->AddItem($objListItem);
                }
            }
            if ($this->lblOwnerPersonId) $this->lblOwnerPersonId->Text = ($this->objPerson->OwnerPerson) ? $this->objPerson->OwnerPerson->__toString() : null;

            if ($this->chkIsVirtual) $this->chkIsVirtual->Checked = $this->objPerson->IsVirtual;
            if ($this->lblIsVirtual) $this->lblIsVirtual->Text = ($this->objPerson->IsVirtual) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->lstAccount) {
                $this->lstAccount->RemoveAllItems();
                $this->lstAccount->AddItem(QApplication::Translate('- Select One -'), null);
                $objAccountArray = Account::LoadAll();
                if ($objAccountArray) foreach ($objAccountArray as $objAccount) {
                    $objListItem = new QListItem($objAccount->__toString(), $objAccount->Id);
                    if ($objAccount->PersonId == $this->objPerson->Id)
                        $objListItem->Selected = true;
                    $this->lstAccount->AddItem($objListItem);
                }
                // Because Account's Account is not null, if a value is already selected, it cannot be changed.
                if ($this->lstAccount->SelectedValue)
                    $this->lstAccount->Enabled = false;
                else
                    $this->lstAccount->Enabled = true;
            }
            if ($this->lblAccount) $this->lblAccount->Text = ($this->objPerson->Account) ? $this->objPerson->Account->__toString() : null;

            if ($this->lstUsergroups) {
                $this->lstUsergroups->RemoveAllItems();
                $objAssociatedArray = $this->objPerson->GetUsergroupArray();
                $objUsergroupArray = Usergroup::LoadAll();
                if ($objUsergroupArray) foreach ($objUsergroupArray as $objUsergroup) {
                    $objListItem = new QListItem($objUsergroup->__toString(), $objUsergroup->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objUsergroup->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstUsergroups->AddItem($objListItem);
                }
            }
            if ($this->lblUsergroups) {
                $objAssociatedArray = $this->objPerson->GetUsergroupArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblUsergroups->Text = implode($strGlue, $strItems);
            }

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////

        protected function lstUsergroups_Update() {
            if ($this->lstUsergroups) {
                $this->objPerson->UnassociateAllUsergroups();
                $objSelectedListItems = $this->lstUsergroups->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objPerson->AssociateUsergroup(Usergroup::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC PERSON OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's Person instance,
         * updating only the fields which have had a control created for it.
         */
        public function SavePerson() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtNamePrefix) $this->objPerson->NamePrefix = $this->txtNamePrefix->Text;
                if ($this->txtFirstName) $this->objPerson->FirstName = $this->txtFirstName->Text;
                if ($this->txtMiddleName) $this->objPerson->MiddleName = $this->txtMiddleName->Text;
                if ($this->txtLastName) $this->objPerson->LastName = $this->txtLastName->Text;
                if ($this->txtNameSuffix) $this->objPerson->NameSuffix = $this->txtNameSuffix->Text;
                if ($this->txtNickName) $this->objPerson->NickName = $this->txtNickName->Text;
                if ($this->txtAvatarUri) $this->objPerson->AvatarUri = $this->txtAvatarUri->Text;
                if ($this->txtCompanyName) $this->objPerson->CompanyName = $this->txtCompanyName->Text;
                if ($this->lstOwnerPerson) $this->objPerson->OwnerPersonId = $this->lstOwnerPerson->SelectedValue;
                if ($this->chkIsVirtual) $this->objPerson->IsVirtual = $this->chkIsVirtual->Checked;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it
                if ($this->lstAccount) $this->objPerson->Account = Account::Load($this->lstAccount->SelectedValue);

                // Save the Person object
                $this->objPerson->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstUsergroups_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's Person instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeletePerson() {
            $this->objPerson->UnassociateAllUsergroups();
            $this->objPerson->Delete();
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
                case 'Person': return $this->objPerson;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to Person fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'NamePrefixControl':
                    if (!$this->txtNamePrefix) return $this->txtNamePrefix_Create();
                    return $this->txtNamePrefix;
                case 'NamePrefixLabel':
                    if (!$this->lblNamePrefix) return $this->lblNamePrefix_Create();
                    return $this->lblNamePrefix;
                case 'FirstNameControl':
                    if (!$this->txtFirstName) return $this->txtFirstName_Create();
                    return $this->txtFirstName;
                case 'FirstNameLabel':
                    if (!$this->lblFirstName) return $this->lblFirstName_Create();
                    return $this->lblFirstName;
                case 'MiddleNameControl':
                    if (!$this->txtMiddleName) return $this->txtMiddleName_Create();
                    return $this->txtMiddleName;
                case 'MiddleNameLabel':
                    if (!$this->lblMiddleName) return $this->lblMiddleName_Create();
                    return $this->lblMiddleName;
                case 'LastNameControl':
                    if (!$this->txtLastName) return $this->txtLastName_Create();
                    return $this->txtLastName;
                case 'LastNameLabel':
                    if (!$this->lblLastName) return $this->lblLastName_Create();
                    return $this->lblLastName;
                case 'NameSuffixControl':
                    if (!$this->txtNameSuffix) return $this->txtNameSuffix_Create();
                    return $this->txtNameSuffix;
                case 'NameSuffixLabel':
                    if (!$this->lblNameSuffix) return $this->lblNameSuffix_Create();
                    return $this->lblNameSuffix;
                case 'NickNameControl':
                    if (!$this->txtNickName) return $this->txtNickName_Create();
                    return $this->txtNickName;
                case 'NickNameLabel':
                    if (!$this->lblNickName) return $this->lblNickName_Create();
                    return $this->lblNickName;
                case 'AvatarUriControl':
                    if (!$this->txtAvatarUri) return $this->txtAvatarUri_Create();
                    return $this->txtAvatarUri;
                case 'AvatarUriLabel':
                    if (!$this->lblAvatarUri) return $this->lblAvatarUri_Create();
                    return $this->lblAvatarUri;
                case 'CompanyNameControl':
                    if (!$this->txtCompanyName) return $this->txtCompanyName_Create();
                    return $this->txtCompanyName;
                case 'CompanyNameLabel':
                    if (!$this->lblCompanyName) return $this->lblCompanyName_Create();
                    return $this->lblCompanyName;
                case 'OwnerPersonIdControl':
                    if (!$this->lstOwnerPerson) return $this->lstOwnerPerson_Create();
                    return $this->lstOwnerPerson;
                case 'OwnerPersonIdLabel':
                    if (!$this->lblOwnerPersonId) return $this->lblOwnerPersonId_Create();
                    return $this->lblOwnerPersonId;
                case 'IsVirtualControl':
                    if (!$this->chkIsVirtual) return $this->chkIsVirtual_Create();
                    return $this->chkIsVirtual;
                case 'IsVirtualLabel':
                    if (!$this->lblIsVirtual) return $this->lblIsVirtual_Create();
                    return $this->lblIsVirtual;
                case 'AccountControl':
                    if (!$this->lstAccount) return $this->lstAccount_Create();
                    return $this->lstAccount;
                case 'AccountLabel':
                    if (!$this->lblAccount) return $this->lblAccount_Create();
                    return $this->lblAccount;
                case 'UsergroupControl':
                    if (!$this->lstUsergroups) return $this->lstUsergroups_Create();
                    return $this->lstUsergroups;
                case 'UsergroupLabel':
                    if (!$this->lblUsergroups) return $this->lblUsergroups_Create();
                    return $this->lblUsergroups;
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
                    // Controls that point to Person fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NamePrefixControl':
                        return ($this->txtNamePrefix = QType::Cast($mixValue, 'QControl'));
                    case 'FirstNameControl':
                        return ($this->txtFirstName = QType::Cast($mixValue, 'QControl'));
                    case 'MiddleNameControl':
                        return ($this->txtMiddleName = QType::Cast($mixValue, 'QControl'));
                    case 'LastNameControl':
                        return ($this->txtLastName = QType::Cast($mixValue, 'QControl'));
                    case 'NameSuffixControl':
                        return ($this->txtNameSuffix = QType::Cast($mixValue, 'QControl'));
                    case 'NickNameControl':
                        return ($this->txtNickName = QType::Cast($mixValue, 'QControl'));
                    case 'AvatarUriControl':
                        return ($this->txtAvatarUri = QType::Cast($mixValue, 'QControl'));
                    case 'CompanyNameControl':
                        return ($this->txtCompanyName = QType::Cast($mixValue, 'QControl'));
                    case 'OwnerPersonIdControl':
                        return ($this->lstOwnerPerson = QType::Cast($mixValue, 'QControl'));
                    case 'IsVirtualControl':
                        return ($this->chkIsVirtual = QType::Cast($mixValue, 'QControl'));
                    case 'AccountControl':
                        return ($this->lstAccount = QType::Cast($mixValue, 'QControl'));
                    case 'UsergroupControl':
                        return ($this->lstUsergroups = QType::Cast($mixValue, 'QControl'));
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