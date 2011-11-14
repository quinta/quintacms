<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the ShoppingCart class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single ShoppingCart object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a ShoppingCartMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read ShoppingCart $ShoppingCart the actual ShoppingCart data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QLabel $CreationDateControl
     * property-read QLabel $CreationDateLabel
     * property QLabel $LastModificationControl
     * property-read QLabel $LastModificationLabel
     * property QListBox $AccountIdControl
     * property-read QLabel $AccountIdLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class ShoppingCartMetaControlGen extends QBaseClass {
        // General Variables
        protected $objShoppingCart;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of ShoppingCart's individual data fields
        protected $lblId;
        protected $lblCreationDate;
        protected $lblLastModification;
        protected $lstAccount;

        // Controls that allow the viewing of ShoppingCart's individual data fields
        protected $lblAccountId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * ShoppingCartMetaControl to edit a single ShoppingCart object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single ShoppingCart object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShoppingCartMetaControl
         * @param ShoppingCart $objShoppingCart new or existing ShoppingCart object
         */
         public function __construct($objParentObject, ShoppingCart $objShoppingCart) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this ShoppingCartMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked ShoppingCart object
            $this->objShoppingCart = $objShoppingCart;

            // Figure out if we're Editing or Creating New
            if ($this->objShoppingCart->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this ShoppingCartMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing ShoppingCart object creation - defaults to CreateOrEdit
         * @return ShoppingCartMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objShoppingCart = ShoppingCart::Load($intId);

                // ShoppingCart was found -- return it!
                if ($objShoppingCart)
                    return new ShoppingCartMetaControl($objParentObject, $objShoppingCart);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a ShoppingCart object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new ShoppingCartMetaControl($objParentObject, new ShoppingCart());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShoppingCartMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ShoppingCart object creation - defaults to CreateOrEdit
         * @return ShoppingCartMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return ShoppingCartMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShoppingCartMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ShoppingCart object creation - defaults to CreateOrEdit
         * @return ShoppingCartMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return ShoppingCartMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objShoppingCart->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
        }

        /**
         * Create and setup QLabel lblCreationDate
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCreationDate_Create($strControlId = null) {
            $this->lblCreationDate = new QLabel($this->objParentObject, $strControlId);
            $this->lblCreationDate->Name = QApplication::Translate('Creation Date');
            if ($this->blnEditMode)
                $this->lblCreationDate->Text = $this->objShoppingCart->CreationDate;
            else
                $this->lblCreationDate->Text = 'N/A';
            return $this->lblCreationDate;
        }

        /**
         * Create and setup QLabel lblLastModification
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblLastModification_Create($strControlId = null) {
            $this->lblLastModification = new QLabel($this->objParentObject, $strControlId);
            $this->lblLastModification->Name = QApplication::Translate('Last Modification');
            if ($this->blnEditMode)
                $this->lblLastModification->Text = $this->objShoppingCart->LastModification;
            else
                $this->lblLastModification->Text = 'N/A';
            return $this->lblLastModification;
        }

        /**
         * Create and setup QListBox lstAccount
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstAccount_Create($strControlId = null) {
            $this->lstAccount = new QListBox($this->objParentObject, $strControlId);
            $this->lstAccount->Name = QApplication::Translate('Account');
            $this->lstAccount->Required = true;
            if (!$this->blnEditMode)
                $this->lstAccount->AddItem(QApplication::Translate('- Select One -'), null);
            $objAccountArray = Account::LoadAll();
            if ($objAccountArray) foreach ($objAccountArray as $objAccount) {
                $objListItem = new QListItem($objAccount->__toString(), $objAccount->Id);
                if (($this->objShoppingCart->Account) && ($this->objShoppingCart->Account->Id == $objAccount->Id))
                    $objListItem->Selected = true;
                $this->lstAccount->AddItem($objListItem);
            }
            return $this->lstAccount;
        }

        /**
         * Create and setup QLabel lblAccountId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblAccountId_Create($strControlId = null) {
            $this->lblAccountId = new QLabel($this->objParentObject, $strControlId);
            $this->lblAccountId->Name = QApplication::Translate('Account');
            $this->lblAccountId->Text = ($this->objShoppingCart->Account) ? $this->objShoppingCart->Account->__toString() : null;
            $this->lblAccountId->Required = true;
            return $this->lblAccountId;
        }



        /**
         * Refresh this MetaControl with Data from the local ShoppingCart object.
         * @param boolean $blnReload reload ShoppingCart from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objShoppingCart->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objShoppingCart->Id;

            if ($this->lblCreationDate) if ($this->blnEditMode) $this->lblCreationDate->Text = $this->objShoppingCart->CreationDate;

            if ($this->lblLastModification) if ($this->blnEditMode) $this->lblLastModification->Text = $this->objShoppingCart->LastModification;

            if ($this->lstAccount) {
                    $this->lstAccount->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstAccount->AddItem(QApplication::Translate('- Select One -'), null);
                $objAccountArray = Account::LoadAll();
                if ($objAccountArray) foreach ($objAccountArray as $objAccount) {
                    $objListItem = new QListItem($objAccount->__toString(), $objAccount->Id);
                    if (($this->objShoppingCart->Account) && ($this->objShoppingCart->Account->Id == $objAccount->Id))
                        $objListItem->Selected = true;
                    $this->lstAccount->AddItem($objListItem);
                }
            }
            if ($this->lblAccountId) $this->lblAccountId->Text = ($this->objShoppingCart->Account) ? $this->objShoppingCart->Account->__toString() : null;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC SHOPPINGCART OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's ShoppingCart instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveShoppingCart() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstAccount) $this->objShoppingCart->AccountId = $this->lstAccount->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the ShoppingCart object
                $this->objShoppingCart->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's ShoppingCart instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteShoppingCart() {
            $this->objShoppingCart->Delete();
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
                case 'ShoppingCart': return $this->objShoppingCart;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to ShoppingCart fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'CreationDateControl':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'CreationDateLabel':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'LastModificationControl':
                    if (!$this->lblLastModification) return $this->lblLastModification_Create();
                    return $this->lblLastModification;
                case 'LastModificationLabel':
                    if (!$this->lblLastModification) return $this->lblLastModification_Create();
                    return $this->lblLastModification;
                case 'AccountIdControl':
                    if (!$this->lstAccount) return $this->lstAccount_Create();
                    return $this->lstAccount;
                case 'AccountIdLabel':
                    if (!$this->lblAccountId) return $this->lblAccountId_Create();
                    return $this->lblAccountId;
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
                    // Controls that point to ShoppingCart fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'CreationDateControl':
                        return ($this->lblCreationDate = QType::Cast($mixValue, 'QControl'));
                    case 'LastModificationControl':
                        return ($this->lblLastModification = QType::Cast($mixValue, 'QControl'));
                    case 'AccountIdControl':
                        return ($this->lstAccount = QType::Cast($mixValue, 'QControl'));
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