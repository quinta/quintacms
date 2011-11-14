<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the Account class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single Account object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a AccountMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read Account $Account the actual Account data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QLabel $RegistrationDateControl
     * property-read QLabel $RegistrationDateLabel
     * property QTextBox $UsernameControl
     * property-read QLabel $UsernameLabel
     * property QTextBox $PasswordControl
     * property-read QLabel $PasswordLabel
     * property QTextBox $NotesControl
     * property-read QLabel $NotesLabel
     * property QLabel $LastLoginControl
     * property-read QLabel $LastLoginLabel
     * property QIntegerTextBox $LoginCountControl
     * property-read QLabel $LoginCountLabel
     * property QCheckBox $OnlineControl
     * property-read QLabel $OnlineLabel
     * property QCheckBox $OnetimePasswordControl
     * property-read QLabel $OnetimePasswordLabel
     * property QCheckBox $ValidPasswordControl
     * property-read QLabel $ValidPasswordLabel
     * property QListBox $TypeIdControl
     * property-read QLabel $TypeIdLabel
     * property QListBox $StatusIdControl
     * property-read QLabel $StatusIdLabel
     * property QListBox $PersonIdControl
     * property-read QLabel $PersonIdLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class AccountMetaControlGen extends QBaseClass {
        // General Variables
        protected $objAccount;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of Account's individual data fields
        protected $lblId;
        protected $lblRegistrationDate;
        protected $txtUsername;
        protected $txtPassword;
        protected $txtNotes;
        protected $lblLastLogin;
        protected $txtLoginCount;
        protected $chkOnline;
        protected $chkOnetimePassword;
        protected $chkValidPassword;
        protected $lstType;
        protected $lstStatus;
        protected $lstPerson;

        // Controls that allow the viewing of Account's individual data fields
        protected $lblUsername;
        protected $lblPassword;
        protected $lblNotes;
        protected $lblLoginCount;
        protected $lblOnline;
        protected $lblOnetimePassword;
        protected $lblValidPassword;
        protected $lblTypeId;
        protected $lblStatusId;
        protected $lblPersonId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * AccountMetaControl to edit a single Account object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single Account object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this AccountMetaControl
         * @param Account $objAccount new or existing Account object
         */
         public function __construct($objParentObject, Account $objAccount) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this AccountMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked Account object
            $this->objAccount = $objAccount;

            // Figure out if we're Editing or Creating New
            if ($this->objAccount->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this AccountMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing Account object creation - defaults to CreateOrEdit
         * @return AccountMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objAccount = Account::Load($intId);

                // Account was found -- return it!
                if ($objAccount)
                    return new AccountMetaControl($objParentObject, $objAccount);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a Account object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new AccountMetaControl($objParentObject, new Account());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this AccountMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Account object creation - defaults to CreateOrEdit
         * @return AccountMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return AccountMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this AccountMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Account object creation - defaults to CreateOrEdit
         * @return AccountMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return AccountMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objAccount->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
        }

        /**
         * Create and setup QLabel lblRegistrationDate
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblRegistrationDate_Create($strControlId = null) {
            $this->lblRegistrationDate = new QLabel($this->objParentObject, $strControlId);
            $this->lblRegistrationDate->Name = QApplication::Translate('Registration Date');
            if ($this->blnEditMode)
                $this->lblRegistrationDate->Text = $this->objAccount->RegistrationDate;
            else
                $this->lblRegistrationDate->Text = 'N/A';
            return $this->lblRegistrationDate;
        }

        /**
         * Create and setup QTextBox txtUsername
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtUsername_Create($strControlId = null) {
            $this->txtUsername = new QTextBox($this->objParentObject, $strControlId);
            $this->txtUsername->Name = QApplication::Translate('Username');
            $this->txtUsername->Text = $this->objAccount->Username;
            $this->txtUsername->Required = true;
            $this->txtUsername->MaxLength = Account::UsernameMaxLength;
            return $this->txtUsername;
        }

        /**
         * Create and setup QLabel lblUsername
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblUsername_Create($strControlId = null) {
            $this->lblUsername = new QLabel($this->objParentObject, $strControlId);
            $this->lblUsername->Name = QApplication::Translate('Username');
            $this->lblUsername->Text = $this->objAccount->Username;
            $this->lblUsername->Required = true;
            return $this->lblUsername;
        }

        /**
         * Create and setup QTextBox txtPassword
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtPassword_Create($strControlId = null) {
            $this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
            $this->txtPassword->Name = QApplication::Translate('Password');
            $this->txtPassword->Text = $this->objAccount->Password;
            $this->txtPassword->Required = true;
            $this->txtPassword->MaxLength = Account::PasswordMaxLength;
            return $this->txtPassword;
        }

        /**
         * Create and setup QLabel lblPassword
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblPassword_Create($strControlId = null) {
            $this->lblPassword = new QLabel($this->objParentObject, $strControlId);
            $this->lblPassword->Name = QApplication::Translate('Password');
            $this->lblPassword->Text = $this->objAccount->Password;
            $this->lblPassword->Required = true;
            return $this->lblPassword;
        }

        /**
         * Create and setup QTextBox txtNotes
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtNotes_Create($strControlId = null) {
            $this->txtNotes = new QTextBox($this->objParentObject, $strControlId);
            $this->txtNotes->Name = QApplication::Translate('Notes');
            $this->txtNotes->Text = $this->objAccount->Notes;
            $this->txtNotes->TextMode = QTextMode::MultiLine;
            return $this->txtNotes;
        }

        /**
         * Create and setup QLabel lblNotes
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblNotes_Create($strControlId = null) {
            $this->lblNotes = new QLabel($this->objParentObject, $strControlId);
            $this->lblNotes->Name = QApplication::Translate('Notes');
            $this->lblNotes->Text = $this->objAccount->Notes;
            return $this->lblNotes;
        }

        /**
         * Create and setup QLabel lblLastLogin
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblLastLogin_Create($strControlId = null) {
            $this->lblLastLogin = new QLabel($this->objParentObject, $strControlId);
            $this->lblLastLogin->Name = QApplication::Translate('Last Login');
            if ($this->blnEditMode)
                $this->lblLastLogin->Text = $this->objAccount->LastLogin;
            else
                $this->lblLastLogin->Text = 'N/A';
            return $this->lblLastLogin;
        }

        /**
         * Create and setup QIntegerTextBox txtLoginCount
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtLoginCount_Create($strControlId = null) {
            $this->txtLoginCount = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtLoginCount->Name = QApplication::Translate('Login Count');
            $this->txtLoginCount->Text = $this->objAccount->LoginCount;
            return $this->txtLoginCount;
        }

        /**
         * Create and setup QLabel lblLoginCount
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblLoginCount_Create($strControlId = null, $strFormat = null) {
            $this->lblLoginCount = new QLabel($this->objParentObject, $strControlId);
            $this->lblLoginCount->Name = QApplication::Translate('Login Count');
            $this->lblLoginCount->Text = $this->objAccount->LoginCount;
            $this->lblLoginCount->Format = $strFormat;
            return $this->lblLoginCount;
        }

        /**
         * Create and setup QCheckBox chkOnline
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkOnline_Create($strControlId = null) {
            $this->chkOnline = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkOnline->Name = QApplication::Translate('Online');
            $this->chkOnline->Checked = $this->objAccount->Online;
            return $this->chkOnline;
        }

        /**
         * Create and setup QLabel lblOnline
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblOnline_Create($strControlId = null) {
            $this->lblOnline = new QLabel($this->objParentObject, $strControlId);
            $this->lblOnline->Name = QApplication::Translate('Online');
            $this->lblOnline->Text = ($this->objAccount->Online) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblOnline;
        }

        /**
         * Create and setup QCheckBox chkOnetimePassword
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkOnetimePassword_Create($strControlId = null) {
            $this->chkOnetimePassword = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkOnetimePassword->Name = QApplication::Translate('Onetime Password');
            $this->chkOnetimePassword->Checked = $this->objAccount->OnetimePassword;
            return $this->chkOnetimePassword;
        }

        /**
         * Create and setup QLabel lblOnetimePassword
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblOnetimePassword_Create($strControlId = null) {
            $this->lblOnetimePassword = new QLabel($this->objParentObject, $strControlId);
            $this->lblOnetimePassword->Name = QApplication::Translate('Onetime Password');
            $this->lblOnetimePassword->Text = ($this->objAccount->OnetimePassword) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblOnetimePassword;
        }

        /**
         * Create and setup QCheckBox chkValidPassword
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkValidPassword_Create($strControlId = null) {
            $this->chkValidPassword = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkValidPassword->Name = QApplication::Translate('Valid Password');
            $this->chkValidPassword->Checked = $this->objAccount->ValidPassword;
            return $this->chkValidPassword;
        }

        /**
         * Create and setup QLabel lblValidPassword
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblValidPassword_Create($strControlId = null) {
            $this->lblValidPassword = new QLabel($this->objParentObject, $strControlId);
            $this->lblValidPassword->Name = QApplication::Translate('Valid Password');
            $this->lblValidPassword->Text = ($this->objAccount->ValidPassword) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblValidPassword;
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
            foreach (AccountType::$NameArray as $intId => $strValue)
                $this->lstType->AddItem(new QListItem($strValue, $intId, $this->objAccount->TypeId == $intId));
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
            $this->lblTypeId->Text = ($this->objAccount->TypeId) ? AccountType::$NameArray[$this->objAccount->TypeId] : null;
            $this->lblTypeId->Required = true;
            return $this->lblTypeId;
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
            foreach (AccountStatusType::$NameArray as $intId => $strValue)
                $this->lstStatus->AddItem(new QListItem($strValue, $intId, $this->objAccount->StatusId == $intId));
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
            $this->lblStatusId->Text = ($this->objAccount->StatusId) ? AccountStatusType::$NameArray[$this->objAccount->StatusId] : null;
            $this->lblStatusId->Required = true;
            return $this->lblStatusId;
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
                if (($this->objAccount->Person) && ($this->objAccount->Person->Id == $objPerson->Id))
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
            $this->lblPersonId->Text = ($this->objAccount->Person) ? $this->objAccount->Person->__toString() : null;
            $this->lblPersonId->Required = true;
            return $this->lblPersonId;
        }



        /**
         * Refresh this MetaControl with Data from the local Account object.
         * @param boolean $blnReload reload Account from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objAccount->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objAccount->Id;

            if ($this->lblRegistrationDate) if ($this->blnEditMode) $this->lblRegistrationDate->Text = $this->objAccount->RegistrationDate;

            if ($this->txtUsername) $this->txtUsername->Text = $this->objAccount->Username;
            if ($this->lblUsername) $this->lblUsername->Text = $this->objAccount->Username;

            if ($this->txtPassword) $this->txtPassword->Text = $this->objAccount->Password;
            if ($this->lblPassword) $this->lblPassword->Text = $this->objAccount->Password;

            if ($this->txtNotes) $this->txtNotes->Text = $this->objAccount->Notes;
            if ($this->lblNotes) $this->lblNotes->Text = $this->objAccount->Notes;

            if ($this->lblLastLogin) if ($this->blnEditMode) $this->lblLastLogin->Text = $this->objAccount->LastLogin;

            if ($this->txtLoginCount) $this->txtLoginCount->Text = $this->objAccount->LoginCount;
            if ($this->lblLoginCount) $this->lblLoginCount->Text = $this->objAccount->LoginCount;

            if ($this->chkOnline) $this->chkOnline->Checked = $this->objAccount->Online;
            if ($this->lblOnline) $this->lblOnline->Text = ($this->objAccount->Online) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkOnetimePassword) $this->chkOnetimePassword->Checked = $this->objAccount->OnetimePassword;
            if ($this->lblOnetimePassword) $this->lblOnetimePassword->Text = ($this->objAccount->OnetimePassword) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkValidPassword) $this->chkValidPassword->Checked = $this->objAccount->ValidPassword;
            if ($this->lblValidPassword) $this->lblValidPassword->Text = ($this->objAccount->ValidPassword) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->lstType) $this->lstType->SelectedValue = $this->objAccount->TypeId;
            if ($this->lblTypeId) $this->lblTypeId->Text = ($this->objAccount->TypeId) ? AccountType::$NameArray[$this->objAccount->TypeId] : null;

            if ($this->lstStatus) $this->lstStatus->SelectedValue = $this->objAccount->StatusId;
            if ($this->lblStatusId) $this->lblStatusId->Text = ($this->objAccount->StatusId) ? AccountStatusType::$NameArray[$this->objAccount->StatusId] : null;

            if ($this->lstPerson) {
                    $this->lstPerson->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstPerson->AddItem(QApplication::Translate('- Select One -'), null);
                $objPersonArray = Person::LoadAll();
                if ($objPersonArray) foreach ($objPersonArray as $objPerson) {
                    $objListItem = new QListItem($objPerson->__toString(), $objPerson->Id);
                    if (($this->objAccount->Person) && ($this->objAccount->Person->Id == $objPerson->Id))
                        $objListItem->Selected = true;
                    $this->lstPerson->AddItem($objListItem);
                }
            }
            if ($this->lblPersonId) $this->lblPersonId->Text = ($this->objAccount->Person) ? $this->objAccount->Person->__toString() : null;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC ACCOUNT OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's Account instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveAccount() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtUsername) $this->objAccount->Username = $this->txtUsername->Text;
                if ($this->txtPassword) $this->objAccount->Password = $this->txtPassword->Text;
                if ($this->txtNotes) $this->objAccount->Notes = $this->txtNotes->Text;
                if ($this->txtLoginCount) $this->objAccount->LoginCount = $this->txtLoginCount->Text;
                if ($this->chkOnline) $this->objAccount->Online = $this->chkOnline->Checked;
                if ($this->chkOnetimePassword) $this->objAccount->OnetimePassword = $this->chkOnetimePassword->Checked;
                if ($this->chkValidPassword) $this->objAccount->ValidPassword = $this->chkValidPassword->Checked;
                if ($this->lstType) $this->objAccount->TypeId = $this->lstType->SelectedValue;
                if ($this->lstStatus) $this->objAccount->StatusId = $this->lstStatus->SelectedValue;
                if ($this->lstPerson) $this->objAccount->PersonId = $this->lstPerson->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the Account object
                $this->objAccount->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's Account instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteAccount() {
            $this->objAccount->Delete();
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
                case 'Account': return $this->objAccount;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to Account fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'RegistrationDateControl':
                    if (!$this->lblRegistrationDate) return $this->lblRegistrationDate_Create();
                    return $this->lblRegistrationDate;
                case 'RegistrationDateLabel':
                    if (!$this->lblRegistrationDate) return $this->lblRegistrationDate_Create();
                    return $this->lblRegistrationDate;
                case 'UsernameControl':
                    if (!$this->txtUsername) return $this->txtUsername_Create();
                    return $this->txtUsername;
                case 'UsernameLabel':
                    if (!$this->lblUsername) return $this->lblUsername_Create();
                    return $this->lblUsername;
                case 'PasswordControl':
                    if (!$this->txtPassword) return $this->txtPassword_Create();
                    return $this->txtPassword;
                case 'PasswordLabel':
                    if (!$this->lblPassword) return $this->lblPassword_Create();
                    return $this->lblPassword;
                case 'NotesControl':
                    if (!$this->txtNotes) return $this->txtNotes_Create();
                    return $this->txtNotes;
                case 'NotesLabel':
                    if (!$this->lblNotes) return $this->lblNotes_Create();
                    return $this->lblNotes;
                case 'LastLoginControl':
                    if (!$this->lblLastLogin) return $this->lblLastLogin_Create();
                    return $this->lblLastLogin;
                case 'LastLoginLabel':
                    if (!$this->lblLastLogin) return $this->lblLastLogin_Create();
                    return $this->lblLastLogin;
                case 'LoginCountControl':
                    if (!$this->txtLoginCount) return $this->txtLoginCount_Create();
                    return $this->txtLoginCount;
                case 'LoginCountLabel':
                    if (!$this->lblLoginCount) return $this->lblLoginCount_Create();
                    return $this->lblLoginCount;
                case 'OnlineControl':
                    if (!$this->chkOnline) return $this->chkOnline_Create();
                    return $this->chkOnline;
                case 'OnlineLabel':
                    if (!$this->lblOnline) return $this->lblOnline_Create();
                    return $this->lblOnline;
                case 'OnetimePasswordControl':
                    if (!$this->chkOnetimePassword) return $this->chkOnetimePassword_Create();
                    return $this->chkOnetimePassword;
                case 'OnetimePasswordLabel':
                    if (!$this->lblOnetimePassword) return $this->lblOnetimePassword_Create();
                    return $this->lblOnetimePassword;
                case 'ValidPasswordControl':
                    if (!$this->chkValidPassword) return $this->chkValidPassword_Create();
                    return $this->chkValidPassword;
                case 'ValidPasswordLabel':
                    if (!$this->lblValidPassword) return $this->lblValidPassword_Create();
                    return $this->lblValidPassword;
                case 'TypeIdControl':
                    if (!$this->lstType) return $this->lstType_Create();
                    return $this->lstType;
                case 'TypeIdLabel':
                    if (!$this->lblTypeId) return $this->lblTypeId_Create();
                    return $this->lblTypeId;
                case 'StatusIdControl':
                    if (!$this->lstStatus) return $this->lstStatus_Create();
                    return $this->lstStatus;
                case 'StatusIdLabel':
                    if (!$this->lblStatusId) return $this->lblStatusId_Create();
                    return $this->lblStatusId;
                case 'PersonIdControl':
                    if (!$this->lstPerson) return $this->lstPerson_Create();
                    return $this->lstPerson;
                case 'PersonIdLabel':
                    if (!$this->lblPersonId) return $this->lblPersonId_Create();
                    return $this->lblPersonId;
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
                    // Controls that point to Account fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'RegistrationDateControl':
                        return ($this->lblRegistrationDate = QType::Cast($mixValue, 'QControl'));
                    case 'UsernameControl':
                        return ($this->txtUsername = QType::Cast($mixValue, 'QControl'));
                    case 'PasswordControl':
                        return ($this->txtPassword = QType::Cast($mixValue, 'QControl'));
                    case 'NotesControl':
                        return ($this->txtNotes = QType::Cast($mixValue, 'QControl'));
                    case 'LastLoginControl':
                        return ($this->lblLastLogin = QType::Cast($mixValue, 'QControl'));
                    case 'LoginCountControl':
                        return ($this->txtLoginCount = QType::Cast($mixValue, 'QControl'));
                    case 'OnlineControl':
                        return ($this->chkOnline = QType::Cast($mixValue, 'QControl'));
                    case 'OnetimePasswordControl':
                        return ($this->chkOnetimePassword = QType::Cast($mixValue, 'QControl'));
                    case 'ValidPasswordControl':
                        return ($this->chkValidPassword = QType::Cast($mixValue, 'QControl'));
                    case 'TypeIdControl':
                        return ($this->lstType = QType::Cast($mixValue, 'QControl'));
                    case 'StatusIdControl':
                        return ($this->lstStatus = QType::Cast($mixValue, 'QControl'));
                    case 'PersonIdControl':
                        return ($this->lstPerson = QType::Cast($mixValue, 'QControl'));
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