<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the PaypalTransaction class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single PaypalTransaction object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a PaypalTransactionMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read PaypalTransaction $PaypalTransaction the actual PaypalTransaction data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QListBox $OrderIdControl
     * property-read QLabel $OrderIdLabel
     * property QTextBox $CorrelationIdControl
     * property-read QLabel $CorrelationIdLabel
     * property QTextBox $TransactionIdControl
     * property-read QLabel $TransactionIdLabel
     * property QTextBox $PpTokenControl
     * property-read QLabel $PpTokenLabel
     * property QTextBox $PayerIdControl
     * property-read QLabel $PayerIdLabel
     * property QTextBox $PayerStatusControl
     * property-read QLabel $PayerStatusLabel
     * property QTextBox $PaymentStatusControl
     * property-read QLabel $PaymentStatusLabel
     * property QTextBox $AckReturnedControl
     * property-read QLabel $AckReturnedLabel
     * property QTextBox $ApiActionControl
     * property-read QLabel $ApiActionLabel
     * property QDateTimePicker $TimeStampControl
     * property-read QLabel $TimeStampLabel
     * property QTextBox $ApiVersionControl
     * property-read QLabel $ApiVersionLabel
     * property QTextBox $MessagesControl
     * property-read QLabel $MessagesLabel
     * property QFloatTextBox $AmountControl
     * property-read QLabel $AmountLabel
     * property QFloatTextBox $PpFeeControl
     * property-read QLabel $PpFeeLabel
     * property QIntegerTextBox $PaymentMethodIdControl
     * property-read QLabel $PaymentMethodIdLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class PaypalTransactionMetaControlGen extends QBaseClass {
        // General Variables
        protected $objPaypalTransaction;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of PaypalTransaction's individual data fields
        protected $lblId;
        protected $lstOrder;
        protected $txtCorrelationId;
        protected $txtTransactionId;
        protected $txtPpToken;
        protected $txtPayerId;
        protected $txtPayerStatus;
        protected $txtPaymentStatus;
        protected $txtAckReturned;
        protected $txtApiAction;
        protected $calTimeStamp;
        protected $txtApiVersion;
        protected $txtMessages;
        protected $txtAmount;
        protected $txtPpFee;
        protected $txtPaymentMethodId;

        // Controls that allow the viewing of PaypalTransaction's individual data fields
        protected $lblOrderId;
        protected $lblCorrelationId;
        protected $lblTransactionId;
        protected $lblPpToken;
        protected $lblPayerId;
        protected $lblPayerStatus;
        protected $lblPaymentStatus;
        protected $lblAckReturned;
        protected $lblApiAction;
        protected $lblTimeStamp;
        protected $lblApiVersion;
        protected $lblMessages;
        protected $lblAmount;
        protected $lblPpFee;
        protected $lblPaymentMethodId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * PaypalTransactionMetaControl to edit a single PaypalTransaction object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single PaypalTransaction object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PaypalTransactionMetaControl
         * @param PaypalTransaction $objPaypalTransaction new or existing PaypalTransaction object
         */
         public function __construct($objParentObject, PaypalTransaction $objPaypalTransaction) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this PaypalTransactionMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked PaypalTransaction object
            $this->objPaypalTransaction = $objPaypalTransaction;

            // Figure out if we're Editing or Creating New
            if ($this->objPaypalTransaction->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this PaypalTransactionMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing PaypalTransaction object creation - defaults to CreateOrEdit
         * @return PaypalTransactionMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objPaypalTransaction = PaypalTransaction::Load($intId);

                // PaypalTransaction was found -- return it!
                if ($objPaypalTransaction)
                    return new PaypalTransactionMetaControl($objParentObject, $objPaypalTransaction);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a PaypalTransaction object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new PaypalTransactionMetaControl($objParentObject, new PaypalTransaction());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PaypalTransactionMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing PaypalTransaction object creation - defaults to CreateOrEdit
         * @return PaypalTransactionMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return PaypalTransactionMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PaypalTransactionMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing PaypalTransaction object creation - defaults to CreateOrEdit
         * @return PaypalTransactionMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return PaypalTransactionMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objPaypalTransaction->Id;
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
                if (($this->objPaypalTransaction->Order) && ($this->objPaypalTransaction->Order->Id == $objOrder->Id))
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
            $this->lblOrderId->Text = ($this->objPaypalTransaction->Order) ? $this->objPaypalTransaction->Order->__toString() : null;
            $this->lblOrderId->Required = true;
            return $this->lblOrderId;
        }

        /**
         * Create and setup QTextBox txtCorrelationId
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCorrelationId_Create($strControlId = null) {
            $this->txtCorrelationId = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCorrelationId->Name = QApplication::Translate('Correlation Id');
            $this->txtCorrelationId->Text = $this->objPaypalTransaction->CorrelationId;
            $this->txtCorrelationId->MaxLength = PaypalTransaction::CorrelationIdMaxLength;
            return $this->txtCorrelationId;
        }

        /**
         * Create and setup QLabel lblCorrelationId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCorrelationId_Create($strControlId = null) {
            $this->lblCorrelationId = new QLabel($this->objParentObject, $strControlId);
            $this->lblCorrelationId->Name = QApplication::Translate('Correlation Id');
            $this->lblCorrelationId->Text = $this->objPaypalTransaction->CorrelationId;
            return $this->lblCorrelationId;
        }

        /**
         * Create and setup QTextBox txtTransactionId
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtTransactionId_Create($strControlId = null) {
            $this->txtTransactionId = new QTextBox($this->objParentObject, $strControlId);
            $this->txtTransactionId->Name = QApplication::Translate('Transaction Id');
            $this->txtTransactionId->Text = $this->objPaypalTransaction->TransactionId;
            $this->txtTransactionId->MaxLength = PaypalTransaction::TransactionIdMaxLength;
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
            $this->lblTransactionId->Text = $this->objPaypalTransaction->TransactionId;
            return $this->lblTransactionId;
        }

        /**
         * Create and setup QTextBox txtPpToken
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtPpToken_Create($strControlId = null) {
            $this->txtPpToken = new QTextBox($this->objParentObject, $strControlId);
            $this->txtPpToken->Name = QApplication::Translate('Pp Token');
            $this->txtPpToken->Text = $this->objPaypalTransaction->PpToken;
            $this->txtPpToken->MaxLength = PaypalTransaction::PpTokenMaxLength;
            return $this->txtPpToken;
        }

        /**
         * Create and setup QLabel lblPpToken
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblPpToken_Create($strControlId = null) {
            $this->lblPpToken = new QLabel($this->objParentObject, $strControlId);
            $this->lblPpToken->Name = QApplication::Translate('Pp Token');
            $this->lblPpToken->Text = $this->objPaypalTransaction->PpToken;
            return $this->lblPpToken;
        }

        /**
         * Create and setup QTextBox txtPayerId
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtPayerId_Create($strControlId = null) {
            $this->txtPayerId = new QTextBox($this->objParentObject, $strControlId);
            $this->txtPayerId->Name = QApplication::Translate('Payer Id');
            $this->txtPayerId->Text = $this->objPaypalTransaction->PayerId;
            $this->txtPayerId->MaxLength = PaypalTransaction::PayerIdMaxLength;
            return $this->txtPayerId;
        }

        /**
         * Create and setup QLabel lblPayerId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblPayerId_Create($strControlId = null) {
            $this->lblPayerId = new QLabel($this->objParentObject, $strControlId);
            $this->lblPayerId->Name = QApplication::Translate('Payer Id');
            $this->lblPayerId->Text = $this->objPaypalTransaction->PayerId;
            return $this->lblPayerId;
        }

        /**
         * Create and setup QTextBox txtPayerStatus
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtPayerStatus_Create($strControlId = null) {
            $this->txtPayerStatus = new QTextBox($this->objParentObject, $strControlId);
            $this->txtPayerStatus->Name = QApplication::Translate('Payer Status');
            $this->txtPayerStatus->Text = $this->objPaypalTransaction->PayerStatus;
            $this->txtPayerStatus->MaxLength = PaypalTransaction::PayerStatusMaxLength;
            return $this->txtPayerStatus;
        }

        /**
         * Create and setup QLabel lblPayerStatus
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblPayerStatus_Create($strControlId = null) {
            $this->lblPayerStatus = new QLabel($this->objParentObject, $strControlId);
            $this->lblPayerStatus->Name = QApplication::Translate('Payer Status');
            $this->lblPayerStatus->Text = $this->objPaypalTransaction->PayerStatus;
            return $this->lblPayerStatus;
        }

        /**
         * Create and setup QTextBox txtPaymentStatus
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtPaymentStatus_Create($strControlId = null) {
            $this->txtPaymentStatus = new QTextBox($this->objParentObject, $strControlId);
            $this->txtPaymentStatus->Name = QApplication::Translate('Payment Status');
            $this->txtPaymentStatus->Text = $this->objPaypalTransaction->PaymentStatus;
            $this->txtPaymentStatus->MaxLength = PaypalTransaction::PaymentStatusMaxLength;
            return $this->txtPaymentStatus;
        }

        /**
         * Create and setup QLabel lblPaymentStatus
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblPaymentStatus_Create($strControlId = null) {
            $this->lblPaymentStatus = new QLabel($this->objParentObject, $strControlId);
            $this->lblPaymentStatus->Name = QApplication::Translate('Payment Status');
            $this->lblPaymentStatus->Text = $this->objPaypalTransaction->PaymentStatus;
            return $this->lblPaymentStatus;
        }

        /**
         * Create and setup QTextBox txtAckReturned
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtAckReturned_Create($strControlId = null) {
            $this->txtAckReturned = new QTextBox($this->objParentObject, $strControlId);
            $this->txtAckReturned->Name = QApplication::Translate('Ack Returned');
            $this->txtAckReturned->Text = $this->objPaypalTransaction->AckReturned;
            $this->txtAckReturned->MaxLength = PaypalTransaction::AckReturnedMaxLength;
            return $this->txtAckReturned;
        }

        /**
         * Create and setup QLabel lblAckReturned
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblAckReturned_Create($strControlId = null) {
            $this->lblAckReturned = new QLabel($this->objParentObject, $strControlId);
            $this->lblAckReturned->Name = QApplication::Translate('Ack Returned');
            $this->lblAckReturned->Text = $this->objPaypalTransaction->AckReturned;
            return $this->lblAckReturned;
        }

        /**
         * Create and setup QTextBox txtApiAction
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtApiAction_Create($strControlId = null) {
            $this->txtApiAction = new QTextBox($this->objParentObject, $strControlId);
            $this->txtApiAction->Name = QApplication::Translate('Api Action');
            $this->txtApiAction->Text = $this->objPaypalTransaction->ApiAction;
            $this->txtApiAction->MaxLength = PaypalTransaction::ApiActionMaxLength;
            return $this->txtApiAction;
        }

        /**
         * Create and setup QLabel lblApiAction
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblApiAction_Create($strControlId = null) {
            $this->lblApiAction = new QLabel($this->objParentObject, $strControlId);
            $this->lblApiAction->Name = QApplication::Translate('Api Action');
            $this->lblApiAction->Text = $this->objPaypalTransaction->ApiAction;
            return $this->lblApiAction;
        }

        /**
         * Create and setup QDateTimePicker calTimeStamp
         * @param string $strControlId optional ControlId to use
         * @return QDateTimePicker
         */
        public function calTimeStamp_Create($strControlId = null) {
            $this->calTimeStamp = new QDateTimePicker($this->objParentObject, $strControlId);
            $this->calTimeStamp->Name = QApplication::Translate('Time Stamp');
            $this->calTimeStamp->DateTime = $this->objPaypalTransaction->TimeStamp;
            $this->calTimeStamp->DateTimePickerType = QDateTimePickerType::DateTime;
            return $this->calTimeStamp;
        }

        /**
         * Create and setup QLabel lblTimeStamp
         * @param string $strControlId optional ControlId to use
         * @param string $strDateTimeFormat optional DateTimeFormat to use
         * @return QLabel
         */
        public function lblTimeStamp_Create($strControlId = null, $strDateTimeFormat = null) {
            $this->lblTimeStamp = new QLabel($this->objParentObject, $strControlId);
            $this->lblTimeStamp->Name = QApplication::Translate('Time Stamp');
            $this->strTimeStampDateTimeFormat = $strDateTimeFormat;
            $this->lblTimeStamp->Text = $this->objPaypalTransaction->TimeStamp->__toString($strDateTimeFormat);
            return $this->lblTimeStamp;
        }

        protected $strTimeStampDateTimeFormat;

        /**
         * Create and setup QTextBox txtApiVersion
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtApiVersion_Create($strControlId = null) {
            $this->txtApiVersion = new QTextBox($this->objParentObject, $strControlId);
            $this->txtApiVersion->Name = QApplication::Translate('Api Version');
            $this->txtApiVersion->Text = $this->objPaypalTransaction->ApiVersion;
            $this->txtApiVersion->MaxLength = PaypalTransaction::ApiVersionMaxLength;
            return $this->txtApiVersion;
        }

        /**
         * Create and setup QLabel lblApiVersion
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblApiVersion_Create($strControlId = null) {
            $this->lblApiVersion = new QLabel($this->objParentObject, $strControlId);
            $this->lblApiVersion->Name = QApplication::Translate('Api Version');
            $this->lblApiVersion->Text = $this->objPaypalTransaction->ApiVersion;
            return $this->lblApiVersion;
        }

        /**
         * Create and setup QTextBox txtMessages
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtMessages_Create($strControlId = null) {
            $this->txtMessages = new QTextBox($this->objParentObject, $strControlId);
            $this->txtMessages->Name = QApplication::Translate('Messages');
            $this->txtMessages->Text = $this->objPaypalTransaction->Messages;
            $this->txtMessages->TextMode = QTextMode::MultiLine;
            return $this->txtMessages;
        }

        /**
         * Create and setup QLabel lblMessages
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblMessages_Create($strControlId = null) {
            $this->lblMessages = new QLabel($this->objParentObject, $strControlId);
            $this->lblMessages->Name = QApplication::Translate('Messages');
            $this->lblMessages->Text = $this->objPaypalTransaction->Messages;
            return $this->lblMessages;
        }

        /**
         * Create and setup QFloatTextBox txtAmount
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtAmount_Create($strControlId = null) {
            $this->txtAmount = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtAmount->Name = QApplication::Translate('Amount');
            $this->txtAmount->Text = $this->objPaypalTransaction->Amount;
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
            $this->lblAmount->Text = $this->objPaypalTransaction->Amount;
            $this->lblAmount->Format = $strFormat;
            return $this->lblAmount;
        }

        /**
         * Create and setup QFloatTextBox txtPpFee
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtPpFee_Create($strControlId = null) {
            $this->txtPpFee = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtPpFee->Name = QApplication::Translate('Pp Fee');
            $this->txtPpFee->Text = $this->objPaypalTransaction->PpFee;
            return $this->txtPpFee;
        }

        /**
         * Create and setup QLabel lblPpFee
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblPpFee_Create($strControlId = null, $strFormat = null) {
            $this->lblPpFee = new QLabel($this->objParentObject, $strControlId);
            $this->lblPpFee->Name = QApplication::Translate('Pp Fee');
            $this->lblPpFee->Text = $this->objPaypalTransaction->PpFee;
            $this->lblPpFee->Format = $strFormat;
            return $this->lblPpFee;
        }

        /**
         * Create and setup QIntegerTextBox txtPaymentMethodId
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtPaymentMethodId_Create($strControlId = null) {
            $this->txtPaymentMethodId = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtPaymentMethodId->Name = QApplication::Translate('Payment Method Id');
            $this->txtPaymentMethodId->Text = $this->objPaypalTransaction->PaymentMethodId;
            $this->txtPaymentMethodId->Required = true;
            return $this->txtPaymentMethodId;
        }

        /**
         * Create and setup QLabel lblPaymentMethodId
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblPaymentMethodId_Create($strControlId = null, $strFormat = null) {
            $this->lblPaymentMethodId = new QLabel($this->objParentObject, $strControlId);
            $this->lblPaymentMethodId->Name = QApplication::Translate('Payment Method Id');
            $this->lblPaymentMethodId->Text = $this->objPaypalTransaction->PaymentMethodId;
            $this->lblPaymentMethodId->Required = true;
            $this->lblPaymentMethodId->Format = $strFormat;
            return $this->lblPaymentMethodId;
        }



        /**
         * Refresh this MetaControl with Data from the local PaypalTransaction object.
         * @param boolean $blnReload reload PaypalTransaction from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objPaypalTransaction->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objPaypalTransaction->Id;

            if ($this->lstOrder) {
                    $this->lstOrder->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstOrder->AddItem(QApplication::Translate('- Select One -'), null);
                $objOrderArray = Order::LoadAll();
                if ($objOrderArray) foreach ($objOrderArray as $objOrder) {
                    $objListItem = new QListItem($objOrder->__toString(), $objOrder->Id);
                    if (($this->objPaypalTransaction->Order) && ($this->objPaypalTransaction->Order->Id == $objOrder->Id))
                        $objListItem->Selected = true;
                    $this->lstOrder->AddItem($objListItem);
                }
            }
            if ($this->lblOrderId) $this->lblOrderId->Text = ($this->objPaypalTransaction->Order) ? $this->objPaypalTransaction->Order->__toString() : null;

            if ($this->txtCorrelationId) $this->txtCorrelationId->Text = $this->objPaypalTransaction->CorrelationId;
            if ($this->lblCorrelationId) $this->lblCorrelationId->Text = $this->objPaypalTransaction->CorrelationId;

            if ($this->txtTransactionId) $this->txtTransactionId->Text = $this->objPaypalTransaction->TransactionId;
            if ($this->lblTransactionId) $this->lblTransactionId->Text = $this->objPaypalTransaction->TransactionId;

            if ($this->txtPpToken) $this->txtPpToken->Text = $this->objPaypalTransaction->PpToken;
            if ($this->lblPpToken) $this->lblPpToken->Text = $this->objPaypalTransaction->PpToken;

            if ($this->txtPayerId) $this->txtPayerId->Text = $this->objPaypalTransaction->PayerId;
            if ($this->lblPayerId) $this->lblPayerId->Text = $this->objPaypalTransaction->PayerId;

            if ($this->txtPayerStatus) $this->txtPayerStatus->Text = $this->objPaypalTransaction->PayerStatus;
            if ($this->lblPayerStatus) $this->lblPayerStatus->Text = $this->objPaypalTransaction->PayerStatus;

            if ($this->txtPaymentStatus) $this->txtPaymentStatus->Text = $this->objPaypalTransaction->PaymentStatus;
            if ($this->lblPaymentStatus) $this->lblPaymentStatus->Text = $this->objPaypalTransaction->PaymentStatus;

            if ($this->txtAckReturned) $this->txtAckReturned->Text = $this->objPaypalTransaction->AckReturned;
            if ($this->lblAckReturned) $this->lblAckReturned->Text = $this->objPaypalTransaction->AckReturned;

            if ($this->txtApiAction) $this->txtApiAction->Text = $this->objPaypalTransaction->ApiAction;
            if ($this->lblApiAction) $this->lblApiAction->Text = $this->objPaypalTransaction->ApiAction;

            if ($this->calTimeStamp) $this->calTimeStamp->DateTime = $this->objPaypalTransaction->TimeStamp;
            if ($this->lblTimeStamp) $this->lblTimeStamp->Text = $this->objPaypalTransaction->TimeStamp->__toString($this->strTimeStampDateTimeFormat);

            if ($this->txtApiVersion) $this->txtApiVersion->Text = $this->objPaypalTransaction->ApiVersion;
            if ($this->lblApiVersion) $this->lblApiVersion->Text = $this->objPaypalTransaction->ApiVersion;

            if ($this->txtMessages) $this->txtMessages->Text = $this->objPaypalTransaction->Messages;
            if ($this->lblMessages) $this->lblMessages->Text = $this->objPaypalTransaction->Messages;

            if ($this->txtAmount) $this->txtAmount->Text = $this->objPaypalTransaction->Amount;
            if ($this->lblAmount) $this->lblAmount->Text = $this->objPaypalTransaction->Amount;

            if ($this->txtPpFee) $this->txtPpFee->Text = $this->objPaypalTransaction->PpFee;
            if ($this->lblPpFee) $this->lblPpFee->Text = $this->objPaypalTransaction->PpFee;

            if ($this->txtPaymentMethodId) $this->txtPaymentMethodId->Text = $this->objPaypalTransaction->PaymentMethodId;
            if ($this->lblPaymentMethodId) $this->lblPaymentMethodId->Text = $this->objPaypalTransaction->PaymentMethodId;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC PAYPALTRANSACTION OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's PaypalTransaction instance,
         * updating only the fields which have had a control created for it.
         */
        public function SavePaypalTransaction() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstOrder) $this->objPaypalTransaction->OrderId = $this->lstOrder->SelectedValue;
                if ($this->txtCorrelationId) $this->objPaypalTransaction->CorrelationId = $this->txtCorrelationId->Text;
                if ($this->txtTransactionId) $this->objPaypalTransaction->TransactionId = $this->txtTransactionId->Text;
                if ($this->txtPpToken) $this->objPaypalTransaction->PpToken = $this->txtPpToken->Text;
                if ($this->txtPayerId) $this->objPaypalTransaction->PayerId = $this->txtPayerId->Text;
                if ($this->txtPayerStatus) $this->objPaypalTransaction->PayerStatus = $this->txtPayerStatus->Text;
                if ($this->txtPaymentStatus) $this->objPaypalTransaction->PaymentStatus = $this->txtPaymentStatus->Text;
                if ($this->txtAckReturned) $this->objPaypalTransaction->AckReturned = $this->txtAckReturned->Text;
                if ($this->txtApiAction) $this->objPaypalTransaction->ApiAction = $this->txtApiAction->Text;
                if ($this->calTimeStamp) $this->objPaypalTransaction->TimeStamp = $this->calTimeStamp->DateTime;
                if ($this->txtApiVersion) $this->objPaypalTransaction->ApiVersion = $this->txtApiVersion->Text;
                if ($this->txtMessages) $this->objPaypalTransaction->Messages = $this->txtMessages->Text;
                if ($this->txtAmount) $this->objPaypalTransaction->Amount = $this->txtAmount->Text;
                if ($this->txtPpFee) $this->objPaypalTransaction->PpFee = $this->txtPpFee->Text;
                if ($this->txtPaymentMethodId) $this->objPaypalTransaction->PaymentMethodId = $this->txtPaymentMethodId->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the PaypalTransaction object
                $this->objPaypalTransaction->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's PaypalTransaction instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeletePaypalTransaction() {
            $this->objPaypalTransaction->Delete();
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
                case 'PaypalTransaction': return $this->objPaypalTransaction;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to PaypalTransaction fields -- will be created dynamically if not yet created
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
                case 'CorrelationIdControl':
                    if (!$this->txtCorrelationId) return $this->txtCorrelationId_Create();
                    return $this->txtCorrelationId;
                case 'CorrelationIdLabel':
                    if (!$this->lblCorrelationId) return $this->lblCorrelationId_Create();
                    return $this->lblCorrelationId;
                case 'TransactionIdControl':
                    if (!$this->txtTransactionId) return $this->txtTransactionId_Create();
                    return $this->txtTransactionId;
                case 'TransactionIdLabel':
                    if (!$this->lblTransactionId) return $this->lblTransactionId_Create();
                    return $this->lblTransactionId;
                case 'PpTokenControl':
                    if (!$this->txtPpToken) return $this->txtPpToken_Create();
                    return $this->txtPpToken;
                case 'PpTokenLabel':
                    if (!$this->lblPpToken) return $this->lblPpToken_Create();
                    return $this->lblPpToken;
                case 'PayerIdControl':
                    if (!$this->txtPayerId) return $this->txtPayerId_Create();
                    return $this->txtPayerId;
                case 'PayerIdLabel':
                    if (!$this->lblPayerId) return $this->lblPayerId_Create();
                    return $this->lblPayerId;
                case 'PayerStatusControl':
                    if (!$this->txtPayerStatus) return $this->txtPayerStatus_Create();
                    return $this->txtPayerStatus;
                case 'PayerStatusLabel':
                    if (!$this->lblPayerStatus) return $this->lblPayerStatus_Create();
                    return $this->lblPayerStatus;
                case 'PaymentStatusControl':
                    if (!$this->txtPaymentStatus) return $this->txtPaymentStatus_Create();
                    return $this->txtPaymentStatus;
                case 'PaymentStatusLabel':
                    if (!$this->lblPaymentStatus) return $this->lblPaymentStatus_Create();
                    return $this->lblPaymentStatus;
                case 'AckReturnedControl':
                    if (!$this->txtAckReturned) return $this->txtAckReturned_Create();
                    return $this->txtAckReturned;
                case 'AckReturnedLabel':
                    if (!$this->lblAckReturned) return $this->lblAckReturned_Create();
                    return $this->lblAckReturned;
                case 'ApiActionControl':
                    if (!$this->txtApiAction) return $this->txtApiAction_Create();
                    return $this->txtApiAction;
                case 'ApiActionLabel':
                    if (!$this->lblApiAction) return $this->lblApiAction_Create();
                    return $this->lblApiAction;
                case 'TimeStampControl':
                    if (!$this->calTimeStamp) return $this->calTimeStamp_Create();
                    return $this->calTimeStamp;
                case 'TimeStampLabel':
                    if (!$this->lblTimeStamp) return $this->lblTimeStamp_Create();
                    return $this->lblTimeStamp;
                case 'ApiVersionControl':
                    if (!$this->txtApiVersion) return $this->txtApiVersion_Create();
                    return $this->txtApiVersion;
                case 'ApiVersionLabel':
                    if (!$this->lblApiVersion) return $this->lblApiVersion_Create();
                    return $this->lblApiVersion;
                case 'MessagesControl':
                    if (!$this->txtMessages) return $this->txtMessages_Create();
                    return $this->txtMessages;
                case 'MessagesLabel':
                    if (!$this->lblMessages) return $this->lblMessages_Create();
                    return $this->lblMessages;
                case 'AmountControl':
                    if (!$this->txtAmount) return $this->txtAmount_Create();
                    return $this->txtAmount;
                case 'AmountLabel':
                    if (!$this->lblAmount) return $this->lblAmount_Create();
                    return $this->lblAmount;
                case 'PpFeeControl':
                    if (!$this->txtPpFee) return $this->txtPpFee_Create();
                    return $this->txtPpFee;
                case 'PpFeeLabel':
                    if (!$this->lblPpFee) return $this->lblPpFee_Create();
                    return $this->lblPpFee;
                case 'PaymentMethodIdControl':
                    if (!$this->txtPaymentMethodId) return $this->txtPaymentMethodId_Create();
                    return $this->txtPaymentMethodId;
                case 'PaymentMethodIdLabel':
                    if (!$this->lblPaymentMethodId) return $this->lblPaymentMethodId_Create();
                    return $this->lblPaymentMethodId;
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
                    // Controls that point to PaypalTransaction fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'OrderIdControl':
                        return ($this->lstOrder = QType::Cast($mixValue, 'QControl'));
                    case 'CorrelationIdControl':
                        return ($this->txtCorrelationId = QType::Cast($mixValue, 'QControl'));
                    case 'TransactionIdControl':
                        return ($this->txtTransactionId = QType::Cast($mixValue, 'QControl'));
                    case 'PpTokenControl':
                        return ($this->txtPpToken = QType::Cast($mixValue, 'QControl'));
                    case 'PayerIdControl':
                        return ($this->txtPayerId = QType::Cast($mixValue, 'QControl'));
                    case 'PayerStatusControl':
                        return ($this->txtPayerStatus = QType::Cast($mixValue, 'QControl'));
                    case 'PaymentStatusControl':
                        return ($this->txtPaymentStatus = QType::Cast($mixValue, 'QControl'));
                    case 'AckReturnedControl':
                        return ($this->txtAckReturned = QType::Cast($mixValue, 'QControl'));
                    case 'ApiActionControl':
                        return ($this->txtApiAction = QType::Cast($mixValue, 'QControl'));
                    case 'TimeStampControl':
                        return ($this->calTimeStamp = QType::Cast($mixValue, 'QControl'));
                    case 'ApiVersionControl':
                        return ($this->txtApiVersion = QType::Cast($mixValue, 'QControl'));
                    case 'MessagesControl':
                        return ($this->txtMessages = QType::Cast($mixValue, 'QControl'));
                    case 'AmountControl':
                        return ($this->txtAmount = QType::Cast($mixValue, 'QControl'));
                    case 'PpFeeControl':
                        return ($this->txtPpFee = QType::Cast($mixValue, 'QControl'));
                    case 'PaymentMethodIdControl':
                        return ($this->txtPaymentMethodId = QType::Cast($mixValue, 'QControl'));
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