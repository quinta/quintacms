<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the AuthorizeNetTransaction class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single AuthorizeNetTransaction object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a AuthorizeNetTransactionMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read AuthorizeNetTransaction $AuthorizeNetTransaction the actual AuthorizeNetTransaction data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QListBox $OrderIdControl
     * property-read QLabel $OrderIdLabel
     * property QLabel $CreationDateControl
     * property-read QLabel $CreationDateLabel
     * property QTextBox $ResponseCodeControl
     * property-read QLabel $ResponseCodeLabel
     * property QTextBox $ResponseSubcodeControl
     * property-read QLabel $ResponseSubcodeLabel
     * property QTextBox $ResponseReasonCodeControl
     * property-read QLabel $ResponseReasonCodeLabel
     * property QTextBox $ResponseReasonTextControl
     * property-read QLabel $ResponseReasonTextLabel
     * property QTextBox $AuthorizationCodeControl
     * property-read QLabel $AuthorizationCodeLabel
     * property QTextBox $TransactionIdControl
     * property-read QLabel $TransactionIdLabel
     * property QTextBox $TransactionTypeControl
     * property-read QLabel $TransactionTypeLabel
     * property QFloatTextBox $AmountControl
     * property-read QLabel $AmountLabel
     * property QTextBox $AvsResponseCodeControl
     * property-read QLabel $AvsResponseCodeLabel
     * property QTextBox $CcvResponseCodeControl
     * property-read QLabel $CcvResponseCodeLabel
     * property QTextBox $CavResponseCodeControl
     * property-read QLabel $CavResponseCodeLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class AuthorizeNetTransactionMetaControlGen extends QBaseClass {
        // General Variables
        protected $objAuthorizeNetTransaction;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of AuthorizeNetTransaction's individual data fields
        protected $lblId;
        protected $lstOrder;
        protected $lblCreationDate;
        protected $txtResponseCode;
        protected $txtResponseSubcode;
        protected $txtResponseReasonCode;
        protected $txtResponseReasonText;
        protected $txtAuthorizationCode;
        protected $txtTransactionId;
        protected $txtTransactionType;
        protected $txtAmount;
        protected $txtAvsResponseCode;
        protected $txtCcvResponseCode;
        protected $txtCavResponseCode;

        // Controls that allow the viewing of AuthorizeNetTransaction's individual data fields
        protected $lblOrderId;
        protected $lblResponseCode;
        protected $lblResponseSubcode;
        protected $lblResponseReasonCode;
        protected $lblResponseReasonText;
        protected $lblAuthorizationCode;
        protected $lblTransactionId;
        protected $lblTransactionType;
        protected $lblAmount;
        protected $lblAvsResponseCode;
        protected $lblCcvResponseCode;
        protected $lblCavResponseCode;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * AuthorizeNetTransactionMetaControl to edit a single AuthorizeNetTransaction object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single AuthorizeNetTransaction object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this AuthorizeNetTransactionMetaControl
         * @param AuthorizeNetTransaction $objAuthorizeNetTransaction new or existing AuthorizeNetTransaction object
         */
         public function __construct($objParentObject, AuthorizeNetTransaction $objAuthorizeNetTransaction) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this AuthorizeNetTransactionMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked AuthorizeNetTransaction object
            $this->objAuthorizeNetTransaction = $objAuthorizeNetTransaction;

            // Figure out if we're Editing or Creating New
            if ($this->objAuthorizeNetTransaction->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this AuthorizeNetTransactionMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing AuthorizeNetTransaction object creation - defaults to CreateOrEdit
         * @return AuthorizeNetTransactionMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objAuthorizeNetTransaction = AuthorizeNetTransaction::Load($intId);

                // AuthorizeNetTransaction was found -- return it!
                if ($objAuthorizeNetTransaction)
                    return new AuthorizeNetTransactionMetaControl($objParentObject, $objAuthorizeNetTransaction);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a AuthorizeNetTransaction object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new AuthorizeNetTransactionMetaControl($objParentObject, new AuthorizeNetTransaction());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this AuthorizeNetTransactionMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing AuthorizeNetTransaction object creation - defaults to CreateOrEdit
         * @return AuthorizeNetTransactionMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return AuthorizeNetTransactionMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this AuthorizeNetTransactionMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing AuthorizeNetTransaction object creation - defaults to CreateOrEdit
         * @return AuthorizeNetTransactionMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return AuthorizeNetTransactionMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objAuthorizeNetTransaction->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
        }

        /**
         * Create and setup QListBox lstOrder
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstOrder_Create($strControlId = null) {
            $this->lstOrder = new QListBox($this->objParentObject, $strControlId);
            $this->lstOrder->Name = QApplication::Translate('Order');
            $this->lstOrder->Required = true;
            if (!$this->blnEditMode)
                $this->lstOrder->AddItem(QApplication::Translate('- Select One -'), null);
            $objOrderArray = Order::LoadAll();
            if ($objOrderArray) foreach ($objOrderArray as $objOrder) {
                $objListItem = new QListItem($objOrder->__toString(), $objOrder->Id);
                if (($this->objAuthorizeNetTransaction->Order) && ($this->objAuthorizeNetTransaction->Order->Id == $objOrder->Id))
                    $objListItem->Selected = true;
                $this->lstOrder->AddItem($objListItem);
            }
            return $this->lstOrder;
        }

        /**
         * Create and setup QLabel lblOrderId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblOrderId_Create($strControlId = null) {
            $this->lblOrderId = new QLabel($this->objParentObject, $strControlId);
            $this->lblOrderId->Name = QApplication::Translate('Order');
            $this->lblOrderId->Text = ($this->objAuthorizeNetTransaction->Order) ? $this->objAuthorizeNetTransaction->Order->__toString() : null;
            $this->lblOrderId->Required = true;
            return $this->lblOrderId;
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
                $this->lblCreationDate->Text = $this->objAuthorizeNetTransaction->CreationDate;
            else
                $this->lblCreationDate->Text = 'N/A';
            return $this->lblCreationDate;
        }

        /**
         * Create and setup QTextBox txtResponseCode
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtResponseCode_Create($strControlId = null) {
            $this->txtResponseCode = new QTextBox($this->objParentObject, $strControlId);
            $this->txtResponseCode->Name = QApplication::Translate('Response Code');
            $this->txtResponseCode->Text = $this->objAuthorizeNetTransaction->ResponseCode;
            $this->txtResponseCode->MaxLength = AuthorizeNetTransaction::ResponseCodeMaxLength;
            return $this->txtResponseCode;
        }

        /**
         * Create and setup QLabel lblResponseCode
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblResponseCode_Create($strControlId = null) {
            $this->lblResponseCode = new QLabel($this->objParentObject, $strControlId);
            $this->lblResponseCode->Name = QApplication::Translate('Response Code');
            $this->lblResponseCode->Text = $this->objAuthorizeNetTransaction->ResponseCode;
            return $this->lblResponseCode;
        }

        /**
         * Create and setup QTextBox txtResponseSubcode
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtResponseSubcode_Create($strControlId = null) {
            $this->txtResponseSubcode = new QTextBox($this->objParentObject, $strControlId);
            $this->txtResponseSubcode->Name = QApplication::Translate('Response Subcode');
            $this->txtResponseSubcode->Text = $this->objAuthorizeNetTransaction->ResponseSubcode;
            $this->txtResponseSubcode->MaxLength = AuthorizeNetTransaction::ResponseSubcodeMaxLength;
            return $this->txtResponseSubcode;
        }

        /**
         * Create and setup QLabel lblResponseSubcode
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblResponseSubcode_Create($strControlId = null) {
            $this->lblResponseSubcode = new QLabel($this->objParentObject, $strControlId);
            $this->lblResponseSubcode->Name = QApplication::Translate('Response Subcode');
            $this->lblResponseSubcode->Text = $this->objAuthorizeNetTransaction->ResponseSubcode;
            return $this->lblResponseSubcode;
        }

        /**
         * Create and setup QTextBox txtResponseReasonCode
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtResponseReasonCode_Create($strControlId = null) {
            $this->txtResponseReasonCode = new QTextBox($this->objParentObject, $strControlId);
            $this->txtResponseReasonCode->Name = QApplication::Translate('Response Reason Code');
            $this->txtResponseReasonCode->Text = $this->objAuthorizeNetTransaction->ResponseReasonCode;
            $this->txtResponseReasonCode->MaxLength = AuthorizeNetTransaction::ResponseReasonCodeMaxLength;
            return $this->txtResponseReasonCode;
        }

        /**
         * Create and setup QLabel lblResponseReasonCode
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblResponseReasonCode_Create($strControlId = null) {
            $this->lblResponseReasonCode = new QLabel($this->objParentObject, $strControlId);
            $this->lblResponseReasonCode->Name = QApplication::Translate('Response Reason Code');
            $this->lblResponseReasonCode->Text = $this->objAuthorizeNetTransaction->ResponseReasonCode;
            return $this->lblResponseReasonCode;
        }

        /**
         * Create and setup QTextBox txtResponseReasonText
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtResponseReasonText_Create($strControlId = null) {
            $this->txtResponseReasonText = new QTextBox($this->objParentObject, $strControlId);
            $this->txtResponseReasonText->Name = QApplication::Translate('Response Reason Text');
            $this->txtResponseReasonText->Text = $this->objAuthorizeNetTransaction->ResponseReasonText;
            $this->txtResponseReasonText->TextMode = QTextMode::MultiLine;
            return $this->txtResponseReasonText;
        }

        /**
         * Create and setup QLabel lblResponseReasonText
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblResponseReasonText_Create($strControlId = null) {
            $this->lblResponseReasonText = new QLabel($this->objParentObject, $strControlId);
            $this->lblResponseReasonText->Name = QApplication::Translate('Response Reason Text');
            $this->lblResponseReasonText->Text = $this->objAuthorizeNetTransaction->ResponseReasonText;
            return $this->lblResponseReasonText;
        }

        /**
         * Create and setup QTextBox txtAuthorizationCode
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtAuthorizationCode_Create($strControlId = null) {
            $this->txtAuthorizationCode = new QTextBox($this->objParentObject, $strControlId);
            $this->txtAuthorizationCode->Name = QApplication::Translate('Authorization Code');
            $this->txtAuthorizationCode->Text = $this->objAuthorizeNetTransaction->AuthorizationCode;
            $this->txtAuthorizationCode->MaxLength = AuthorizeNetTransaction::AuthorizationCodeMaxLength;
            return $this->txtAuthorizationCode;
        }

        /**
         * Create and setup QLabel lblAuthorizationCode
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblAuthorizationCode_Create($strControlId = null) {
            $this->lblAuthorizationCode = new QLabel($this->objParentObject, $strControlId);
            $this->lblAuthorizationCode->Name = QApplication::Translate('Authorization Code');
            $this->lblAuthorizationCode->Text = $this->objAuthorizeNetTransaction->AuthorizationCode;
            return $this->lblAuthorizationCode;
        }

        /**
         * Create and setup QTextBox txtTransactionId
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtTransactionId_Create($strControlId = null) {
            $this->txtTransactionId = new QTextBox($this->objParentObject, $strControlId);
            $this->txtTransactionId->Name = QApplication::Translate('Transaction Id');
            $this->txtTransactionId->Text = $this->objAuthorizeNetTransaction->TransactionId;
            $this->txtTransactionId->MaxLength = AuthorizeNetTransaction::TransactionIdMaxLength;
            return $this->txtTransactionId;
        }

        /**
         * Create and setup QLabel lblTransactionId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblTransactionId_Create($strControlId = null) {
            $this->lblTransactionId = new QLabel($this->objParentObject, $strControlId);
            $this->lblTransactionId->Name = QApplication::Translate('Transaction Id');
            $this->lblTransactionId->Text = $this->objAuthorizeNetTransaction->TransactionId;
            return $this->lblTransactionId;
        }

        /**
         * Create and setup QTextBox txtTransactionType
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtTransactionType_Create($strControlId = null) {
            $this->txtTransactionType = new QTextBox($this->objParentObject, $strControlId);
            $this->txtTransactionType->Name = QApplication::Translate('Transaction Type');
            $this->txtTransactionType->Text = $this->objAuthorizeNetTransaction->TransactionType;
            $this->txtTransactionType->MaxLength = AuthorizeNetTransaction::TransactionTypeMaxLength;
            return $this->txtTransactionType;
        }

        /**
         * Create and setup QLabel lblTransactionType
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblTransactionType_Create($strControlId = null) {
            $this->lblTransactionType = new QLabel($this->objParentObject, $strControlId);
            $this->lblTransactionType->Name = QApplication::Translate('Transaction Type');
            $this->lblTransactionType->Text = $this->objAuthorizeNetTransaction->TransactionType;
            return $this->lblTransactionType;
        }

        /**
         * Create and setup QFloatTextBox txtAmount
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtAmount_Create($strControlId = null) {
            $this->txtAmount = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtAmount->Name = QApplication::Translate('Amount');
            $this->txtAmount->Text = $this->objAuthorizeNetTransaction->Amount;
            return $this->txtAmount;
        }

        /**
         * Create and setup QLabel lblAmount
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblAmount_Create($strControlId = null, $strFormat = null) {
            $this->lblAmount = new QLabel($this->objParentObject, $strControlId);
            $this->lblAmount->Name = QApplication::Translate('Amount');
            $this->lblAmount->Text = $this->objAuthorizeNetTransaction->Amount;
            $this->lblAmount->Format = $strFormat;
            return $this->lblAmount;
        }

        /**
         * Create and setup QTextBox txtAvsResponseCode
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtAvsResponseCode_Create($strControlId = null) {
            $this->txtAvsResponseCode = new QTextBox($this->objParentObject, $strControlId);
            $this->txtAvsResponseCode->Name = QApplication::Translate('Avs Response Code');
            $this->txtAvsResponseCode->Text = $this->objAuthorizeNetTransaction->AvsResponseCode;
            $this->txtAvsResponseCode->MaxLength = AuthorizeNetTransaction::AvsResponseCodeMaxLength;
            return $this->txtAvsResponseCode;
        }

        /**
         * Create and setup QLabel lblAvsResponseCode
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblAvsResponseCode_Create($strControlId = null) {
            $this->lblAvsResponseCode = new QLabel($this->objParentObject, $strControlId);
            $this->lblAvsResponseCode->Name = QApplication::Translate('Avs Response Code');
            $this->lblAvsResponseCode->Text = $this->objAuthorizeNetTransaction->AvsResponseCode;
            return $this->lblAvsResponseCode;
        }

        /**
         * Create and setup QTextBox txtCcvResponseCode
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCcvResponseCode_Create($strControlId = null) {
            $this->txtCcvResponseCode = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCcvResponseCode->Name = QApplication::Translate('Ccv Response Code');
            $this->txtCcvResponseCode->Text = $this->objAuthorizeNetTransaction->CcvResponseCode;
            $this->txtCcvResponseCode->MaxLength = AuthorizeNetTransaction::CcvResponseCodeMaxLength;
            return $this->txtCcvResponseCode;
        }

        /**
         * Create and setup QLabel lblCcvResponseCode
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCcvResponseCode_Create($strControlId = null) {
            $this->lblCcvResponseCode = new QLabel($this->objParentObject, $strControlId);
            $this->lblCcvResponseCode->Name = QApplication::Translate('Ccv Response Code');
            $this->lblCcvResponseCode->Text = $this->objAuthorizeNetTransaction->CcvResponseCode;
            return $this->lblCcvResponseCode;
        }

        /**
         * Create and setup QTextBox txtCavResponseCode
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCavResponseCode_Create($strControlId = null) {
            $this->txtCavResponseCode = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCavResponseCode->Name = QApplication::Translate('Cav Response Code');
            $this->txtCavResponseCode->Text = $this->objAuthorizeNetTransaction->CavResponseCode;
            $this->txtCavResponseCode->MaxLength = AuthorizeNetTransaction::CavResponseCodeMaxLength;
            return $this->txtCavResponseCode;
        }

        /**
         * Create and setup QLabel lblCavResponseCode
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCavResponseCode_Create($strControlId = null) {
            $this->lblCavResponseCode = new QLabel($this->objParentObject, $strControlId);
            $this->lblCavResponseCode->Name = QApplication::Translate('Cav Response Code');
            $this->lblCavResponseCode->Text = $this->objAuthorizeNetTransaction->CavResponseCode;
            return $this->lblCavResponseCode;
        }



        /**
         * Refresh this MetaControl with Data from the local AuthorizeNetTransaction object.
         * @param boolean $blnReload reload AuthorizeNetTransaction from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objAuthorizeNetTransaction->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objAuthorizeNetTransaction->Id;

            if ($this->lstOrder) {
                    $this->lstOrder->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstOrder->AddItem(QApplication::Translate('- Select One -'), null);
                $objOrderArray = Order::LoadAll();
                if ($objOrderArray) foreach ($objOrderArray as $objOrder) {
                    $objListItem = new QListItem($objOrder->__toString(), $objOrder->Id);
                    if (($this->objAuthorizeNetTransaction->Order) && ($this->objAuthorizeNetTransaction->Order->Id == $objOrder->Id))
                        $objListItem->Selected = true;
                    $this->lstOrder->AddItem($objListItem);
                }
            }
            if ($this->lblOrderId) $this->lblOrderId->Text = ($this->objAuthorizeNetTransaction->Order) ? $this->objAuthorizeNetTransaction->Order->__toString() : null;

            if ($this->lblCreationDate) if ($this->blnEditMode) $this->lblCreationDate->Text = $this->objAuthorizeNetTransaction->CreationDate;

            if ($this->txtResponseCode) $this->txtResponseCode->Text = $this->objAuthorizeNetTransaction->ResponseCode;
            if ($this->lblResponseCode) $this->lblResponseCode->Text = $this->objAuthorizeNetTransaction->ResponseCode;

            if ($this->txtResponseSubcode) $this->txtResponseSubcode->Text = $this->objAuthorizeNetTransaction->ResponseSubcode;
            if ($this->lblResponseSubcode) $this->lblResponseSubcode->Text = $this->objAuthorizeNetTransaction->ResponseSubcode;

            if ($this->txtResponseReasonCode) $this->txtResponseReasonCode->Text = $this->objAuthorizeNetTransaction->ResponseReasonCode;
            if ($this->lblResponseReasonCode) $this->lblResponseReasonCode->Text = $this->objAuthorizeNetTransaction->ResponseReasonCode;

            if ($this->txtResponseReasonText) $this->txtResponseReasonText->Text = $this->objAuthorizeNetTransaction->ResponseReasonText;
            if ($this->lblResponseReasonText) $this->lblResponseReasonText->Text = $this->objAuthorizeNetTransaction->ResponseReasonText;

            if ($this->txtAuthorizationCode) $this->txtAuthorizationCode->Text = $this->objAuthorizeNetTransaction->AuthorizationCode;
            if ($this->lblAuthorizationCode) $this->lblAuthorizationCode->Text = $this->objAuthorizeNetTransaction->AuthorizationCode;

            if ($this->txtTransactionId) $this->txtTransactionId->Text = $this->objAuthorizeNetTransaction->TransactionId;
            if ($this->lblTransactionId) $this->lblTransactionId->Text = $this->objAuthorizeNetTransaction->TransactionId;

            if ($this->txtTransactionType) $this->txtTransactionType->Text = $this->objAuthorizeNetTransaction->TransactionType;
            if ($this->lblTransactionType) $this->lblTransactionType->Text = $this->objAuthorizeNetTransaction->TransactionType;

            if ($this->txtAmount) $this->txtAmount->Text = $this->objAuthorizeNetTransaction->Amount;
            if ($this->lblAmount) $this->lblAmount->Text = $this->objAuthorizeNetTransaction->Amount;

            if ($this->txtAvsResponseCode) $this->txtAvsResponseCode->Text = $this->objAuthorizeNetTransaction->AvsResponseCode;
            if ($this->lblAvsResponseCode) $this->lblAvsResponseCode->Text = $this->objAuthorizeNetTransaction->AvsResponseCode;

            if ($this->txtCcvResponseCode) $this->txtCcvResponseCode->Text = $this->objAuthorizeNetTransaction->CcvResponseCode;
            if ($this->lblCcvResponseCode) $this->lblCcvResponseCode->Text = $this->objAuthorizeNetTransaction->CcvResponseCode;

            if ($this->txtCavResponseCode) $this->txtCavResponseCode->Text = $this->objAuthorizeNetTransaction->CavResponseCode;
            if ($this->lblCavResponseCode) $this->lblCavResponseCode->Text = $this->objAuthorizeNetTransaction->CavResponseCode;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC AUTHORIZENETTRANSACTION OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's AuthorizeNetTransaction instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveAuthorizeNetTransaction() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstOrder) $this->objAuthorizeNetTransaction->OrderId = $this->lstOrder->SelectedValue;
                if ($this->txtResponseCode) $this->objAuthorizeNetTransaction->ResponseCode = $this->txtResponseCode->Text;
                if ($this->txtResponseSubcode) $this->objAuthorizeNetTransaction->ResponseSubcode = $this->txtResponseSubcode->Text;
                if ($this->txtResponseReasonCode) $this->objAuthorizeNetTransaction->ResponseReasonCode = $this->txtResponseReasonCode->Text;
                if ($this->txtResponseReasonText) $this->objAuthorizeNetTransaction->ResponseReasonText = $this->txtResponseReasonText->Text;
                if ($this->txtAuthorizationCode) $this->objAuthorizeNetTransaction->AuthorizationCode = $this->txtAuthorizationCode->Text;
                if ($this->txtTransactionId) $this->objAuthorizeNetTransaction->TransactionId = $this->txtTransactionId->Text;
                if ($this->txtTransactionType) $this->objAuthorizeNetTransaction->TransactionType = $this->txtTransactionType->Text;
                if ($this->txtAmount) $this->objAuthorizeNetTransaction->Amount = $this->txtAmount->Text;
                if ($this->txtAvsResponseCode) $this->objAuthorizeNetTransaction->AvsResponseCode = $this->txtAvsResponseCode->Text;
                if ($this->txtCcvResponseCode) $this->objAuthorizeNetTransaction->CcvResponseCode = $this->txtCcvResponseCode->Text;
                if ($this->txtCavResponseCode) $this->objAuthorizeNetTransaction->CavResponseCode = $this->txtCavResponseCode->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the AuthorizeNetTransaction object
                $this->objAuthorizeNetTransaction->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's AuthorizeNetTransaction instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteAuthorizeNetTransaction() {
            $this->objAuthorizeNetTransaction->Delete();
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
                case 'AuthorizeNetTransaction': return $this->objAuthorizeNetTransaction;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to AuthorizeNetTransaction fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'OrderIdControl':
                    if (!$this->lstOrder) return $this->lstOrder_Create();
                    return $this->lstOrder;
                case 'OrderIdLabel':
                    if (!$this->lblOrderId) return $this->lblOrderId_Create();
                    return $this->lblOrderId;
                case 'CreationDateControl':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'CreationDateLabel':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'ResponseCodeControl':
                    if (!$this->txtResponseCode) return $this->txtResponseCode_Create();
                    return $this->txtResponseCode;
                case 'ResponseCodeLabel':
                    if (!$this->lblResponseCode) return $this->lblResponseCode_Create();
                    return $this->lblResponseCode;
                case 'ResponseSubcodeControl':
                    if (!$this->txtResponseSubcode) return $this->txtResponseSubcode_Create();
                    return $this->txtResponseSubcode;
                case 'ResponseSubcodeLabel':
                    if (!$this->lblResponseSubcode) return $this->lblResponseSubcode_Create();
                    return $this->lblResponseSubcode;
                case 'ResponseReasonCodeControl':
                    if (!$this->txtResponseReasonCode) return $this->txtResponseReasonCode_Create();
                    return $this->txtResponseReasonCode;
                case 'ResponseReasonCodeLabel':
                    if (!$this->lblResponseReasonCode) return $this->lblResponseReasonCode_Create();
                    return $this->lblResponseReasonCode;
                case 'ResponseReasonTextControl':
                    if (!$this->txtResponseReasonText) return $this->txtResponseReasonText_Create();
                    return $this->txtResponseReasonText;
                case 'ResponseReasonTextLabel':
                    if (!$this->lblResponseReasonText) return $this->lblResponseReasonText_Create();
                    return $this->lblResponseReasonText;
                case 'AuthorizationCodeControl':
                    if (!$this->txtAuthorizationCode) return $this->txtAuthorizationCode_Create();
                    return $this->txtAuthorizationCode;
                case 'AuthorizationCodeLabel':
                    if (!$this->lblAuthorizationCode) return $this->lblAuthorizationCode_Create();
                    return $this->lblAuthorizationCode;
                case 'TransactionIdControl':
                    if (!$this->txtTransactionId) return $this->txtTransactionId_Create();
                    return $this->txtTransactionId;
                case 'TransactionIdLabel':
                    if (!$this->lblTransactionId) return $this->lblTransactionId_Create();
                    return $this->lblTransactionId;
                case 'TransactionTypeControl':
                    if (!$this->txtTransactionType) return $this->txtTransactionType_Create();
                    return $this->txtTransactionType;
                case 'TransactionTypeLabel':
                    if (!$this->lblTransactionType) return $this->lblTransactionType_Create();
                    return $this->lblTransactionType;
                case 'AmountControl':
                    if (!$this->txtAmount) return $this->txtAmount_Create();
                    return $this->txtAmount;
                case 'AmountLabel':
                    if (!$this->lblAmount) return $this->lblAmount_Create();
                    return $this->lblAmount;
                case 'AvsResponseCodeControl':
                    if (!$this->txtAvsResponseCode) return $this->txtAvsResponseCode_Create();
                    return $this->txtAvsResponseCode;
                case 'AvsResponseCodeLabel':
                    if (!$this->lblAvsResponseCode) return $this->lblAvsResponseCode_Create();
                    return $this->lblAvsResponseCode;
                case 'CcvResponseCodeControl':
                    if (!$this->txtCcvResponseCode) return $this->txtCcvResponseCode_Create();
                    return $this->txtCcvResponseCode;
                case 'CcvResponseCodeLabel':
                    if (!$this->lblCcvResponseCode) return $this->lblCcvResponseCode_Create();
                    return $this->lblCcvResponseCode;
                case 'CavResponseCodeControl':
                    if (!$this->txtCavResponseCode) return $this->txtCavResponseCode_Create();
                    return $this->txtCavResponseCode;
                case 'CavResponseCodeLabel':
                    if (!$this->lblCavResponseCode) return $this->lblCavResponseCode_Create();
                    return $this->lblCavResponseCode;
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
                    // Controls that point to AuthorizeNetTransaction fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'OrderIdControl':
                        return ($this->lstOrder = QType::Cast($mixValue, 'QControl'));
                    case 'CreationDateControl':
                        return ($this->lblCreationDate = QType::Cast($mixValue, 'QControl'));
                    case 'ResponseCodeControl':
                        return ($this->txtResponseCode = QType::Cast($mixValue, 'QControl'));
                    case 'ResponseSubcodeControl':
                        return ($this->txtResponseSubcode = QType::Cast($mixValue, 'QControl'));
                    case 'ResponseReasonCodeControl':
                        return ($this->txtResponseReasonCode = QType::Cast($mixValue, 'QControl'));
                    case 'ResponseReasonTextControl':
                        return ($this->txtResponseReasonText = QType::Cast($mixValue, 'QControl'));
                    case 'AuthorizationCodeControl':
                        return ($this->txtAuthorizationCode = QType::Cast($mixValue, 'QControl'));
                    case 'TransactionIdControl':
                        return ($this->txtTransactionId = QType::Cast($mixValue, 'QControl'));
                    case 'TransactionTypeControl':
                        return ($this->txtTransactionType = QType::Cast($mixValue, 'QControl'));
                    case 'AmountControl':
                        return ($this->txtAmount = QType::Cast($mixValue, 'QControl'));
                    case 'AvsResponseCodeControl':
                        return ($this->txtAvsResponseCode = QType::Cast($mixValue, 'QControl'));
                    case 'CcvResponseCodeControl':
                        return ($this->txtCcvResponseCode = QType::Cast($mixValue, 'QControl'));
                    case 'CavResponseCodeControl':
                        return ($this->txtCavResponseCode = QType::Cast($mixValue, 'QControl'));
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