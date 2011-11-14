<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the Order class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single Order object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a OrderMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read Order $Order the actual Order data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QListBox $AccountIdControl
     * property-read QLabel $AccountIdLabel
     * property QLabel $CreationDateControl
     * property-read QLabel $CreationDateLabel
     * property QLabel $LastModificationControl
     * property-read QLabel $LastModificationLabel
     * property QDateTimePicker $CompletionDateControl
     * property-read QLabel $CompletionDateLabel
     * property QFloatTextBox $ProductTotalCostControl
     * property-read QLabel $ProductTotalCostLabel
     * property QFloatTextBox $ShippingCostControl
     * property-read QLabel $ShippingCostLabel
     * property QFloatTextBox $ShippingChargedControl
     * property-read QLabel $ShippingChargedLabel
     * property QFloatTextBox $HandlingCostControl
     * property-read QLabel $HandlingCostLabel
     * property QFloatTextBox $HandlingChargedControl
     * property-read QLabel $HandlingChargedLabel
     * property QFloatTextBox $TaxControl
     * property-read QLabel $TaxLabel
     * property QFloatTextBox $ProductTotalChargedControl
     * property-read QLabel $ProductTotalChargedLabel
     * property QTextBox $NotesControl
     * property-read QLabel $NotesLabel
     * property QListBox $ShippingMethodIdControl
     * property-read QLabel $ShippingMethodIdLabel
     * property QListBox $PaymentMethodIdControl
     * property-read QLabel $PaymentMethodIdLabel
     * property QListBox $StatusIdControl
     * property-read QLabel $StatusIdLabel
     * property QListBox $TypeIdControl
     * property-read QLabel $TypeIdLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class OrderMetaControlGen extends QBaseClass {
        // General Variables
        protected $objOrder;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of Order's individual data fields
        protected $lblId;
        protected $lstAccount;
        protected $lblCreationDate;
        protected $lblLastModification;
        protected $calCompletionDate;
        protected $txtProductTotalCost;
        protected $txtShippingCost;
        protected $txtShippingCharged;
        protected $txtHandlingCost;
        protected $txtHandlingCharged;
        protected $txtTax;
        protected $txtProductTotalCharged;
        protected $txtNotes;
        protected $lstShippingMethod;
        protected $lstPaymentMethod;
        protected $lstStatus;
        protected $lstType;

        // Controls that allow the viewing of Order's individual data fields
        protected $lblAccountId;
        protected $lblCompletionDate;
        protected $lblProductTotalCost;
        protected $lblShippingCost;
        protected $lblShippingCharged;
        protected $lblHandlingCost;
        protected $lblHandlingCharged;
        protected $lblTax;
        protected $lblProductTotalCharged;
        protected $lblNotes;
        protected $lblShippingMethodId;
        protected $lblPaymentMethodId;
        protected $lblStatusId;
        protected $lblTypeId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * OrderMetaControl to edit a single Order object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single Order object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderMetaControl
         * @param Order $objOrder new or existing Order object
         */
         public function __construct($objParentObject, Order $objOrder) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this OrderMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked Order object
            $this->objOrder = $objOrder;

            // Figure out if we're Editing or Creating New
            if ($this->objOrder->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing Order object creation - defaults to CreateOrEdit
         * @return OrderMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objOrder = Order::Load($intId);

                // Order was found -- return it!
                if ($objOrder)
                    return new OrderMetaControl($objParentObject, $objOrder);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a Order object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new OrderMetaControl($objParentObject, new Order());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Order object creation - defaults to CreateOrEdit
         * @return OrderMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return OrderMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Order object creation - defaults to CreateOrEdit
         * @return OrderMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return OrderMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objOrder->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
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
                if (($this->objOrder->Account) && ($this->objOrder->Account->Id == $objAccount->Id))
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
            $this->lblAccountId->Text = ($this->objOrder->Account) ? $this->objOrder->Account->__toString() : null;
            $this->lblAccountId->Required = true;
            return $this->lblAccountId;
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
                $this->lblCreationDate->Text = $this->objOrder->CreationDate;
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
                $this->lblLastModification->Text = $this->objOrder->LastModification;
            else
                $this->lblLastModification->Text = 'N/A';
            return $this->lblLastModification;
        }

        /**
         * Create and setup QDateTimePicker calCompletionDate
         * @param string $strControlId optional ControlId to use
         * @return QDateTimePicker
         */
        public function calCompletionDate_Create($strControlId = null) {
            $this->calCompletionDate = new QDateTimePicker($this->objParentObject, $strControlId);
            $this->calCompletionDate->Name = QApplication::Translate('Completion Date');
            $this->calCompletionDate->DateTime = $this->objOrder->CompletionDate;
            $this->calCompletionDate->DateTimePickerType = QDateTimePickerType::DateTime;
            return $this->calCompletionDate;
        }

        /**
         * Create and setup QLabel lblCompletionDate
         * @param string $strControlId optional ControlId to use
         * @param string $strDateTimeFormat optional DateTimeFormat to use
         * @return QLabel
         */
        public function lblCompletionDate_Create($strControlId = null, $strDateTimeFormat = null) {
            $this->lblCompletionDate = new QLabel($this->objParentObject, $strControlId);
            $this->lblCompletionDate->Name = QApplication::Translate('Completion Date');
            $this->strCompletionDateDateTimeFormat = $strDateTimeFormat;
            $this->lblCompletionDate->Text = $this->objOrder->CompletionDate->__toString($strDateTimeFormat);
            return $this->lblCompletionDate;
        }

        protected $strCompletionDateDateTimeFormat;

        /**
         * Create and setup QFloatTextBox txtProductTotalCost
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtProductTotalCost_Create($strControlId = null) {
            $this->txtProductTotalCost = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtProductTotalCost->Name = QApplication::Translate('Product Total Cost');
            $this->txtProductTotalCost->Text = $this->objOrder->ProductTotalCost;
            return $this->txtProductTotalCost;
        }

        /**
         * Create and setup QLabel lblProductTotalCost
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblProductTotalCost_Create($strControlId = null, $strFormat = null) {
            $this->lblProductTotalCost = new QLabel($this->objParentObject, $strControlId);
            $this->lblProductTotalCost->Name = QApplication::Translate('Product Total Cost');
            $this->lblProductTotalCost->Text = $this->objOrder->ProductTotalCost;
            $this->lblProductTotalCost->Format = $strFormat;
            return $this->lblProductTotalCost;
        }

        /**
         * Create and setup QFloatTextBox txtShippingCost
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtShippingCost_Create($strControlId = null) {
            $this->txtShippingCost = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtShippingCost->Name = QApplication::Translate('Shipping Cost');
            $this->txtShippingCost->Text = $this->objOrder->ShippingCost;
            return $this->txtShippingCost;
        }

        /**
         * Create and setup QLabel lblShippingCost
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblShippingCost_Create($strControlId = null, $strFormat = null) {
            $this->lblShippingCost = new QLabel($this->objParentObject, $strControlId);
            $this->lblShippingCost->Name = QApplication::Translate('Shipping Cost');
            $this->lblShippingCost->Text = $this->objOrder->ShippingCost;
            $this->lblShippingCost->Format = $strFormat;
            return $this->lblShippingCost;
        }

        /**
         * Create and setup QFloatTextBox txtShippingCharged
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtShippingCharged_Create($strControlId = null) {
            $this->txtShippingCharged = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtShippingCharged->Name = QApplication::Translate('Shipping Charged');
            $this->txtShippingCharged->Text = $this->objOrder->ShippingCharged;
            return $this->txtShippingCharged;
        }

        /**
         * Create and setup QLabel lblShippingCharged
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblShippingCharged_Create($strControlId = null, $strFormat = null) {
            $this->lblShippingCharged = new QLabel($this->objParentObject, $strControlId);
            $this->lblShippingCharged->Name = QApplication::Translate('Shipping Charged');
            $this->lblShippingCharged->Text = $this->objOrder->ShippingCharged;
            $this->lblShippingCharged->Format = $strFormat;
            return $this->lblShippingCharged;
        }

        /**
         * Create and setup QFloatTextBox txtHandlingCost
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtHandlingCost_Create($strControlId = null) {
            $this->txtHandlingCost = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtHandlingCost->Name = QApplication::Translate('Handling Cost');
            $this->txtHandlingCost->Text = $this->objOrder->HandlingCost;
            return $this->txtHandlingCost;
        }

        /**
         * Create and setup QLabel lblHandlingCost
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblHandlingCost_Create($strControlId = null, $strFormat = null) {
            $this->lblHandlingCost = new QLabel($this->objParentObject, $strControlId);
            $this->lblHandlingCost->Name = QApplication::Translate('Handling Cost');
            $this->lblHandlingCost->Text = $this->objOrder->HandlingCost;
            $this->lblHandlingCost->Format = $strFormat;
            return $this->lblHandlingCost;
        }

        /**
         * Create and setup QFloatTextBox txtHandlingCharged
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtHandlingCharged_Create($strControlId = null) {
            $this->txtHandlingCharged = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtHandlingCharged->Name = QApplication::Translate('Handling Charged');
            $this->txtHandlingCharged->Text = $this->objOrder->HandlingCharged;
            return $this->txtHandlingCharged;
        }

        /**
         * Create and setup QLabel lblHandlingCharged
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblHandlingCharged_Create($strControlId = null, $strFormat = null) {
            $this->lblHandlingCharged = new QLabel($this->objParentObject, $strControlId);
            $this->lblHandlingCharged->Name = QApplication::Translate('Handling Charged');
            $this->lblHandlingCharged->Text = $this->objOrder->HandlingCharged;
            $this->lblHandlingCharged->Format = $strFormat;
            return $this->lblHandlingCharged;
        }

        /**
         * Create and setup QFloatTextBox txtTax
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtTax_Create($strControlId = null) {
            $this->txtTax = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtTax->Name = QApplication::Translate('Tax');
            $this->txtTax->Text = $this->objOrder->Tax;
            return $this->txtTax;
        }

        /**
         * Create and setup QLabel lblTax
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblTax_Create($strControlId = null, $strFormat = null) {
            $this->lblTax = new QLabel($this->objParentObject, $strControlId);
            $this->lblTax->Name = QApplication::Translate('Tax');
            $this->lblTax->Text = $this->objOrder->Tax;
            $this->lblTax->Format = $strFormat;
            return $this->lblTax;
        }

        /**
         * Create and setup QFloatTextBox txtProductTotalCharged
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtProductTotalCharged_Create($strControlId = null) {
            $this->txtProductTotalCharged = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtProductTotalCharged->Name = QApplication::Translate('Product Total Charged');
            $this->txtProductTotalCharged->Text = $this->objOrder->ProductTotalCharged;
            return $this->txtProductTotalCharged;
        }

        /**
         * Create and setup QLabel lblProductTotalCharged
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblProductTotalCharged_Create($strControlId = null, $strFormat = null) {
            $this->lblProductTotalCharged = new QLabel($this->objParentObject, $strControlId);
            $this->lblProductTotalCharged->Name = QApplication::Translate('Product Total Charged');
            $this->lblProductTotalCharged->Text = $this->objOrder->ProductTotalCharged;
            $this->lblProductTotalCharged->Format = $strFormat;
            return $this->lblProductTotalCharged;
        }

        /**
         * Create and setup QTextBox txtNotes
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtNotes_Create($strControlId = null) {
            $this->txtNotes = new QTextBox($this->objParentObject, $strControlId);
            $this->txtNotes->Name = QApplication::Translate('Notes');
            $this->txtNotes->Text = $this->objOrder->Notes;
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
            $this->lblNotes->Text = $this->objOrder->Notes;
            return $this->lblNotes;
        }

        /**
         * Create and setup QListBox lstShippingMethod
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstShippingMethod_Create($strControlId = null) {
            $this->lstShippingMethod = new QListBox($this->objParentObject, $strControlId);
            $this->lstShippingMethod->Name = QApplication::Translate('Shipping Method');
            $this->lstShippingMethod->AddItem(QApplication::Translate('- Select One -'), null);
            $objShippingMethodArray = ShippingMethod::LoadAll();
            if ($objShippingMethodArray) foreach ($objShippingMethodArray as $objShippingMethod) {
                $objListItem = new QListItem($objShippingMethod->__toString(), $objShippingMethod->Id);
                if (($this->objOrder->ShippingMethod) && ($this->objOrder->ShippingMethod->Id == $objShippingMethod->Id))
                    $objListItem->Selected = true;
                $this->lstShippingMethod->AddItem($objListItem);
            }
            return $this->lstShippingMethod;
        }

        /**
         * Create and setup QLabel lblShippingMethodId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblShippingMethodId_Create($strControlId = null) {
            $this->lblShippingMethodId = new QLabel($this->objParentObject, $strControlId);
            $this->lblShippingMethodId->Name = QApplication::Translate('Shipping Method');
            $this->lblShippingMethodId->Text = ($this->objOrder->ShippingMethod) ? $this->objOrder->ShippingMethod->__toString() : null;
            return $this->lblShippingMethodId;
        }

        /**
         * Create and setup QListBox lstPaymentMethod
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstPaymentMethod_Create($strControlId = null) {
            $this->lstPaymentMethod = new QListBox($this->objParentObject, $strControlId);
            $this->lstPaymentMethod->Name = QApplication::Translate('Payment Method');
            $this->lstPaymentMethod->AddItem(QApplication::Translate('- Select One -'), null);
            $objPaymentMethodArray = PaymentMethod::LoadAll();
            if ($objPaymentMethodArray) foreach ($objPaymentMethodArray as $objPaymentMethod) {
                $objListItem = new QListItem($objPaymentMethod->__toString(), $objPaymentMethod->Id);
                if (($this->objOrder->PaymentMethod) && ($this->objOrder->PaymentMethod->Id == $objPaymentMethod->Id))
                    $objListItem->Selected = true;
                $this->lstPaymentMethod->AddItem($objListItem);
            }
            return $this->lstPaymentMethod;
        }

        /**
         * Create and setup QLabel lblPaymentMethodId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblPaymentMethodId_Create($strControlId = null) {
            $this->lblPaymentMethodId = new QLabel($this->objParentObject, $strControlId);
            $this->lblPaymentMethodId->Name = QApplication::Translate('Payment Method');
            $this->lblPaymentMethodId->Text = ($this->objOrder->PaymentMethod) ? $this->objOrder->PaymentMethod->__toString() : null;
            return $this->lblPaymentMethodId;
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
            foreach (OrderStatusType::$NameArray as $intId => $strValue)
                $this->lstStatus->AddItem(new QListItem($strValue, $intId, $this->objOrder->StatusId == $intId));
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
            $this->lblStatusId->Text = ($this->objOrder->StatusId) ? OrderStatusType::$NameArray[$this->objOrder->StatusId] : null;
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
            $this->lstType->AddItem(QApplication::Translate('- Select One -'), null);
            foreach (OrderType::$NameArray as $intId => $strValue)
                $this->lstType->AddItem(new QListItem($strValue, $intId, $this->objOrder->TypeId == $intId));
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
            $this->lblTypeId->Text = ($this->objOrder->TypeId) ? OrderType::$NameArray[$this->objOrder->TypeId] : null;
            return $this->lblTypeId;
        }



        /**
         * Refresh this MetaControl with Data from the local Order object.
         * @param boolean $blnReload reload Order from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objOrder->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objOrder->Id;

            if ($this->lstAccount) {
                    $this->lstAccount->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstAccount->AddItem(QApplication::Translate('- Select One -'), null);
                $objAccountArray = Account::LoadAll();
                if ($objAccountArray) foreach ($objAccountArray as $objAccount) {
                    $objListItem = new QListItem($objAccount->__toString(), $objAccount->Id);
                    if (($this->objOrder->Account) && ($this->objOrder->Account->Id == $objAccount->Id))
                        $objListItem->Selected = true;
                    $this->lstAccount->AddItem($objListItem);
                }
            }
            if ($this->lblAccountId) $this->lblAccountId->Text = ($this->objOrder->Account) ? $this->objOrder->Account->__toString() : null;

            if ($this->lblCreationDate) if ($this->blnEditMode) $this->lblCreationDate->Text = $this->objOrder->CreationDate;

            if ($this->lblLastModification) if ($this->blnEditMode) $this->lblLastModification->Text = $this->objOrder->LastModification;

            if ($this->calCompletionDate) $this->calCompletionDate->DateTime = $this->objOrder->CompletionDate;
            if ($this->lblCompletionDate) $this->lblCompletionDate->Text = $this->objOrder->CompletionDate->__toString($this->strCompletionDateDateTimeFormat);

            if ($this->txtProductTotalCost) $this->txtProductTotalCost->Text = $this->objOrder->ProductTotalCost;
            if ($this->lblProductTotalCost) $this->lblProductTotalCost->Text = $this->objOrder->ProductTotalCost;

            if ($this->txtShippingCost) $this->txtShippingCost->Text = $this->objOrder->ShippingCost;
            if ($this->lblShippingCost) $this->lblShippingCost->Text = $this->objOrder->ShippingCost;

            if ($this->txtShippingCharged) $this->txtShippingCharged->Text = $this->objOrder->ShippingCharged;
            if ($this->lblShippingCharged) $this->lblShippingCharged->Text = $this->objOrder->ShippingCharged;

            if ($this->txtHandlingCost) $this->txtHandlingCost->Text = $this->objOrder->HandlingCost;
            if ($this->lblHandlingCost) $this->lblHandlingCost->Text = $this->objOrder->HandlingCost;

            if ($this->txtHandlingCharged) $this->txtHandlingCharged->Text = $this->objOrder->HandlingCharged;
            if ($this->lblHandlingCharged) $this->lblHandlingCharged->Text = $this->objOrder->HandlingCharged;

            if ($this->txtTax) $this->txtTax->Text = $this->objOrder->Tax;
            if ($this->lblTax) $this->lblTax->Text = $this->objOrder->Tax;

            if ($this->txtProductTotalCharged) $this->txtProductTotalCharged->Text = $this->objOrder->ProductTotalCharged;
            if ($this->lblProductTotalCharged) $this->lblProductTotalCharged->Text = $this->objOrder->ProductTotalCharged;

            if ($this->txtNotes) $this->txtNotes->Text = $this->objOrder->Notes;
            if ($this->lblNotes) $this->lblNotes->Text = $this->objOrder->Notes;

            if ($this->lstShippingMethod) {
                    $this->lstShippingMethod->RemoveAllItems();
                $this->lstShippingMethod->AddItem(QApplication::Translate('- Select One -'), null);
                $objShippingMethodArray = ShippingMethod::LoadAll();
                if ($objShippingMethodArray) foreach ($objShippingMethodArray as $objShippingMethod) {
                    $objListItem = new QListItem($objShippingMethod->__toString(), $objShippingMethod->Id);
                    if (($this->objOrder->ShippingMethod) && ($this->objOrder->ShippingMethod->Id == $objShippingMethod->Id))
                        $objListItem->Selected = true;
                    $this->lstShippingMethod->AddItem($objListItem);
                }
            }
            if ($this->lblShippingMethodId) $this->lblShippingMethodId->Text = ($this->objOrder->ShippingMethod) ? $this->objOrder->ShippingMethod->__toString() : null;

            if ($this->lstPaymentMethod) {
                    $this->lstPaymentMethod->RemoveAllItems();
                $this->lstPaymentMethod->AddItem(QApplication::Translate('- Select One -'), null);
                $objPaymentMethodArray = PaymentMethod::LoadAll();
                if ($objPaymentMethodArray) foreach ($objPaymentMethodArray as $objPaymentMethod) {
                    $objListItem = new QListItem($objPaymentMethod->__toString(), $objPaymentMethod->Id);
                    if (($this->objOrder->PaymentMethod) && ($this->objOrder->PaymentMethod->Id == $objPaymentMethod->Id))
                        $objListItem->Selected = true;
                    $this->lstPaymentMethod->AddItem($objListItem);
                }
            }
            if ($this->lblPaymentMethodId) $this->lblPaymentMethodId->Text = ($this->objOrder->PaymentMethod) ? $this->objOrder->PaymentMethod->__toString() : null;

            if ($this->lstStatus) $this->lstStatus->SelectedValue = $this->objOrder->StatusId;
            if ($this->lblStatusId) $this->lblStatusId->Text = ($this->objOrder->StatusId) ? OrderStatusType::$NameArray[$this->objOrder->StatusId] : null;

            if ($this->lstType) $this->lstType->SelectedValue = $this->objOrder->TypeId;
            if ($this->lblTypeId) $this->lblTypeId->Text = ($this->objOrder->TypeId) ? OrderType::$NameArray[$this->objOrder->TypeId] : null;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC ORDER OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's Order instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveOrder() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstAccount) $this->objOrder->AccountId = $this->lstAccount->SelectedValue;
                if ($this->calCompletionDate) $this->objOrder->CompletionDate = $this->calCompletionDate->DateTime;
                if ($this->txtProductTotalCost) $this->objOrder->ProductTotalCost = $this->txtProductTotalCost->Text;
                if ($this->txtShippingCost) $this->objOrder->ShippingCost = $this->txtShippingCost->Text;
                if ($this->txtShippingCharged) $this->objOrder->ShippingCharged = $this->txtShippingCharged->Text;
                if ($this->txtHandlingCost) $this->objOrder->HandlingCost = $this->txtHandlingCost->Text;
                if ($this->txtHandlingCharged) $this->objOrder->HandlingCharged = $this->txtHandlingCharged->Text;
                if ($this->txtTax) $this->objOrder->Tax = $this->txtTax->Text;
                if ($this->txtProductTotalCharged) $this->objOrder->ProductTotalCharged = $this->txtProductTotalCharged->Text;
                if ($this->txtNotes) $this->objOrder->Notes = $this->txtNotes->Text;
                if ($this->lstShippingMethod) $this->objOrder->ShippingMethodId = $this->lstShippingMethod->SelectedValue;
                if ($this->lstPaymentMethod) $this->objOrder->PaymentMethodId = $this->lstPaymentMethod->SelectedValue;
                if ($this->lstStatus) $this->objOrder->StatusId = $this->lstStatus->SelectedValue;
                if ($this->lstType) $this->objOrder->TypeId = $this->lstType->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the Order object
                $this->objOrder->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's Order instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteOrder() {
            $this->objOrder->Delete();
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
                case 'Order': return $this->objOrder;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to Order fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'AccountIdControl':
                    if (!$this->lstAccount) return $this->lstAccount_Create();
                    return $this->lstAccount;
                case 'AccountIdLabel':
                    if (!$this->lblAccountId) return $this->lblAccountId_Create();
                    return $this->lblAccountId;
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
                case 'CompletionDateControl':
                    if (!$this->calCompletionDate) return $this->calCompletionDate_Create();
                    return $this->calCompletionDate;
                case 'CompletionDateLabel':
                    if (!$this->lblCompletionDate) return $this->lblCompletionDate_Create();
                    return $this->lblCompletionDate;
                case 'ProductTotalCostControl':
                    if (!$this->txtProductTotalCost) return $this->txtProductTotalCost_Create();
                    return $this->txtProductTotalCost;
                case 'ProductTotalCostLabel':
                    if (!$this->lblProductTotalCost) return $this->lblProductTotalCost_Create();
                    return $this->lblProductTotalCost;
                case 'ShippingCostControl':
                    if (!$this->txtShippingCost) return $this->txtShippingCost_Create();
                    return $this->txtShippingCost;
                case 'ShippingCostLabel':
                    if (!$this->lblShippingCost) return $this->lblShippingCost_Create();
                    return $this->lblShippingCost;
                case 'ShippingChargedControl':
                    if (!$this->txtShippingCharged) return $this->txtShippingCharged_Create();
                    return $this->txtShippingCharged;
                case 'ShippingChargedLabel':
                    if (!$this->lblShippingCharged) return $this->lblShippingCharged_Create();
                    return $this->lblShippingCharged;
                case 'HandlingCostControl':
                    if (!$this->txtHandlingCost) return $this->txtHandlingCost_Create();
                    return $this->txtHandlingCost;
                case 'HandlingCostLabel':
                    if (!$this->lblHandlingCost) return $this->lblHandlingCost_Create();
                    return $this->lblHandlingCost;
                case 'HandlingChargedControl':
                    if (!$this->txtHandlingCharged) return $this->txtHandlingCharged_Create();
                    return $this->txtHandlingCharged;
                case 'HandlingChargedLabel':
                    if (!$this->lblHandlingCharged) return $this->lblHandlingCharged_Create();
                    return $this->lblHandlingCharged;
                case 'TaxControl':
                    if (!$this->txtTax) return $this->txtTax_Create();
                    return $this->txtTax;
                case 'TaxLabel':
                    if (!$this->lblTax) return $this->lblTax_Create();
                    return $this->lblTax;
                case 'ProductTotalChargedControl':
                    if (!$this->txtProductTotalCharged) return $this->txtProductTotalCharged_Create();
                    return $this->txtProductTotalCharged;
                case 'ProductTotalChargedLabel':
                    if (!$this->lblProductTotalCharged) return $this->lblProductTotalCharged_Create();
                    return $this->lblProductTotalCharged;
                case 'NotesControl':
                    if (!$this->txtNotes) return $this->txtNotes_Create();
                    return $this->txtNotes;
                case 'NotesLabel':
                    if (!$this->lblNotes) return $this->lblNotes_Create();
                    return $this->lblNotes;
                case 'ShippingMethodIdControl':
                    if (!$this->lstShippingMethod) return $this->lstShippingMethod_Create();
                    return $this->lstShippingMethod;
                case 'ShippingMethodIdLabel':
                    if (!$this->lblShippingMethodId) return $this->lblShippingMethodId_Create();
                    return $this->lblShippingMethodId;
                case 'PaymentMethodIdControl':
                    if (!$this->lstPaymentMethod) return $this->lstPaymentMethod_Create();
                    return $this->lstPaymentMethod;
                case 'PaymentMethodIdLabel':
                    if (!$this->lblPaymentMethodId) return $this->lblPaymentMethodId_Create();
                    return $this->lblPaymentMethodId;
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
                    // Controls that point to Order fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'AccountIdControl':
                        return ($this->lstAccount = QType::Cast($mixValue, 'QControl'));
                    case 'CreationDateControl':
                        return ($this->lblCreationDate = QType::Cast($mixValue, 'QControl'));
                    case 'LastModificationControl':
                        return ($this->lblLastModification = QType::Cast($mixValue, 'QControl'));
                    case 'CompletionDateControl':
                        return ($this->calCompletionDate = QType::Cast($mixValue, 'QControl'));
                    case 'ProductTotalCostControl':
                        return ($this->txtProductTotalCost = QType::Cast($mixValue, 'QControl'));
                    case 'ShippingCostControl':
                        return ($this->txtShippingCost = QType::Cast($mixValue, 'QControl'));
                    case 'ShippingChargedControl':
                        return ($this->txtShippingCharged = QType::Cast($mixValue, 'QControl'));
                    case 'HandlingCostControl':
                        return ($this->txtHandlingCost = QType::Cast($mixValue, 'QControl'));
                    case 'HandlingChargedControl':
                        return ($this->txtHandlingCharged = QType::Cast($mixValue, 'QControl'));
                    case 'TaxControl':
                        return ($this->txtTax = QType::Cast($mixValue, 'QControl'));
                    case 'ProductTotalChargedControl':
                        return ($this->txtProductTotalCharged = QType::Cast($mixValue, 'QControl'));
                    case 'NotesControl':
                        return ($this->txtNotes = QType::Cast($mixValue, 'QControl'));
                    case 'ShippingMethodIdControl':
                        return ($this->lstShippingMethod = QType::Cast($mixValue, 'QControl'));
                    case 'PaymentMethodIdControl':
                        return ($this->lstPaymentMethod = QType::Cast($mixValue, 'QControl'));
                    case 'StatusIdControl':
                        return ($this->lstStatus = QType::Cast($mixValue, 'QControl'));
                    case 'TypeIdControl':
                        return ($this->lstType = QType::Cast($mixValue, 'QControl'));
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