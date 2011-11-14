<?php
    /**
     * The abstract PaypalTransactionGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the PaypalTransaction subclass which
     * extends this PaypalTransactionGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the PaypalTransaction class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property integer $OrderId the value for intOrderId (Not Null)
     * @property string $CorrelationId the value for strCorrelationId 
     * @property string $TransactionId the value for strTransactionId 
     * @property string $PpToken the value for strPpToken 
     * @property string $PayerId the value for strPayerId 
     * @property string $PayerStatus the value for strPayerStatus 
     * @property string $PaymentStatus the value for strPaymentStatus 
     * @property string $AckReturned the value for strAckReturned 
     * @property string $ApiAction the value for strApiAction 
     * @property QDateTime $TimeStamp the value for dttTimeStamp 
     * @property string $ApiVersion the value for strApiVersion 
     * @property string $Messages the value for strMessages 
     * @property double $Amount the value for fltAmount 
     * @property double $PpFee the value for fltPpFee 
     * @property integer $PaymentMethodId the value for intPaymentMethodId (Not Null)
     * @property Order $Order the value for the Order object referenced by intOrderId (Not Null)
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class PaypalTransactionGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column paypal_transaction.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column paypal_transaction.order_id
         * @var integer intOrderId
         *
         */
        protected $intOrderId = null;


        /**
         * Protected member variable that maps to the database column paypal_transaction.correlation_id
         * @var string strCorrelationId
         *
         */
        protected $strCorrelationId = null;
        const CorrelationIdMaxLength = 128;


        /**
         * Protected member variable that maps to the database column paypal_transaction.transaction_id
         * @var string strTransactionId
         *
         */
        protected $strTransactionId = null;
        const TransactionIdMaxLength = 128;


        /**
         * Protected member variable that maps to the database column paypal_transaction.pp_token
         * @var string strPpToken
         *
         */
        protected $strPpToken = null;
        const PpTokenMaxLength = 128;


        /**
         * Protected member variable that maps to the database column paypal_transaction.payer_id
         * @var string strPayerId
         *
         */
        protected $strPayerId = null;
        const PayerIdMaxLength = 128;


        /**
         * Protected member variable that maps to the database column paypal_transaction.payer_status
         * @var string strPayerStatus
         *
         */
        protected $strPayerStatus = null;
        const PayerStatusMaxLength = 128;


        /**
         * Protected member variable that maps to the database column paypal_transaction.payment_status
         * @var string strPaymentStatus
         *
         */
        protected $strPaymentStatus = null;
        const PaymentStatusMaxLength = 128;


        /**
         * Protected member variable that maps to the database column paypal_transaction.ack_returned
         * @var string strAckReturned
         *
         */
        protected $strAckReturned = null;
        const AckReturnedMaxLength = 32;


        /**
         * Protected member variable that maps to the database column paypal_transaction.api_action
         * @var string strApiAction
         *
         */
        protected $strApiAction = null;
        const ApiActionMaxLength = 32;


        /**
         * Protected member variable that maps to the database column paypal_transaction.time_stamp
         * @var QDateTime dttTimeStamp
         *
         */
        protected $dttTimeStamp = null;


        /**
         * Protected member variable that maps to the database column paypal_transaction.api_version
         * @var string strApiVersion
         *
         */
        protected $strApiVersion = null;
        const ApiVersionMaxLength = 4;


        /**
         * Protected member variable that maps to the database column paypal_transaction.messages
         * @var string strMessages
         *
         */
        protected $strMessages = null;


        /**
         * Protected member variable that maps to the database column paypal_transaction.amount
         * @var double fltAmount
         *
         */
        protected $fltAmount = null;


        /**
         * Protected member variable that maps to the database column paypal_transaction.pp_fee
         * @var double fltPpFee
         *
         */
        protected $fltPpFee = null;


        /**
         * Protected member variable that maps to the database column paypal_transaction.payment_method_id
         * @var integer intPaymentMethodId
         *
         */
        protected $intPaymentMethodId = null;


        /**
         * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
         * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
         * GetVirtualAttribute.
         * @var string[] $__strVirtualAttributeArray
         */
        protected $__strVirtualAttributeArray = array();

        /**
         * Protected internal member variable that specifies whether or not this object is Restored from the database.
         * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
         * @var bool __blnRestored;
         */
        protected $__blnRestored;

        
        ///////////////////////////////
        // PROTECTED MEMBER OBJECTS
        ///////////////////////////////

        /**
         * Protected member variable that contains the object pointed by the reference
         * in the database column paypal_transaction.order_id.
         *
         * NOTE: Always use the Order property getter to correctly retrieve this Order object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Order objOrder
         */
        protected $objOrder;



        ///////////////////////////////
        // CLASS-WIDE LOAD AND COUNT METHODS
        ///////////////////////////////

        /**
         * Static method to retrieve the Database object that owns this class.
         * @return QDatabaseBase reference to the Database object that can query this class
         */
        public static function GetDatabase() {
            return QApplication::$Database[1];
        }

        /**
         * Load a PaypalTransaction from PK Info
         * @param integer $intId
         * @return PaypalTransaction
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return PaypalTransaction::QuerySingle(
                QQ::Equal(QQN::PaypalTransaction()->Id, $intId)
            );
        }

        /**
         * Load all PaypalTransactions
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return PaypalTransaction[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call PaypalTransaction::QueryArray to perform the LoadAll query
            try {
                return PaypalTransaction::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all PaypalTransactions
         * @return int
         */
        public static function CountAll() {
            // Call PaypalTransaction::QueryCount to perform the CountAll query
            return PaypalTransaction::QueryCount(QQ::All());
        }


        ///////////////////////////////
        // QCODO QUERY-RELATED METHODS
        ///////////////////////////////

        /**
         * Internally called method to assist with calling Qcodo Query for this class
         * on load methods.
         * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
         * @param boolean $blnCountOnly only select a rowcount
         * @return string the query statement
         */
        protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
            // Get the Database Object for this Class
            $objDatabase = PaypalTransaction::GetDatabase();

            // Create/Build out the QueryBuilder object with PaypalTransaction-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'paypal_transaction');
            PaypalTransaction::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('paypal_transaction');

            // Set "CountOnly" option (if applicable)
            if ($blnCountOnly)
                $objQueryBuilder->SetCountOnlyFlag();

            // Apply Any Conditions
            if ($objConditions)
                try {
                    $objConditions->UpdateQueryBuilder($objQueryBuilder);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            // Iterate through all the Optional Clauses (if any) and perform accordingly
            if ($objOptionalClauses) {
                if ($objOptionalClauses instanceof QQClause)
                    $objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
                else if (is_array($objOptionalClauses))
                    foreach ($objOptionalClauses as $objClause)
                        $objClause->UpdateQueryBuilder($objQueryBuilder);
                else
                    throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
            }

            // Get the SQL Statement
            $strQuery = $objQueryBuilder->GetStatement();

            // Prepare the Statement with the Query Parameters (if applicable)
            if ($mixParameterArray) {
                if (is_array($mixParameterArray)) {
                    if (count($mixParameterArray))
                        $strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

                    // Ensure that there are no other Unresolved Named Parameters
                    if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
                        throw new QCallerException('Unresolved named parameters in the query');
                } else
                    throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
            }

            // Return the Objects
            return $strQuery;
        }

        /**
         * Static Qcodo Query method to query for a single PaypalTransaction object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return PaypalTransaction the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = PaypalTransaction::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new PaypalTransaction object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return PaypalTransaction::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of PaypalTransaction objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return PaypalTransaction[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = PaypalTransaction::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return PaypalTransaction::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of PaypalTransaction objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = PaypalTransaction::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and return the row_count
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);

            // Figure out if the query is using GroupBy
            $blnGrouped = false;

            if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
                if ($objClause instanceof QQGroupBy) {
                    $blnGrouped = true;
                    break;
                }
            }

            if ($blnGrouped)
                // Groups in this query - return the count of Groups (which is the count of all rows)
                return $objDbResult->CountRows();
            else {
                // No Groups - return the sql-calculated count(*) value
                $strDbRow = $objDbResult->FetchRow();
                return QType::Cast($strDbRow[0], QType::Integer);
            }
        }

/*      public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
            // Get the Database Object for this Class
            $objDatabase = PaypalTransaction::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'paypal_transaction_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with PaypalTransaction-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                PaypalTransaction::GetSelectFields($objQueryBuilder);
                PaypalTransaction::GetFromFields($objQueryBuilder);

                // Ensure the Passed-in Conditions is a string
                try {
                    $strConditions = QType::Cast($strConditions, QType::String);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

                // Create the Conditions object, and apply it
                $objConditions = eval('return ' . $strConditions . ';');

                // Apply Any Conditions
                if ($objConditions)
                    $objConditions->UpdateQueryBuilder($objQueryBuilder);

                // Get the SQL Statement
                $strQuery = $objQueryBuilder->GetStatement();

                // Save the SQL Statement in the Cache
                $objCache->SaveData($strQuery);
            }

            // Prepare the Statement with the Parameters
            if ($mixParameterArray)
                $strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objDatabase->Query($strQuery);
            return PaypalTransaction::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this PaypalTransaction
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'paypal_transaction';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'order_id', $strAliasPrefix . 'order_id');
            $objBuilder->AddSelectItem($strTableName, 'correlation_id', $strAliasPrefix . 'correlation_id');
            $objBuilder->AddSelectItem($strTableName, 'transaction_id', $strAliasPrefix . 'transaction_id');
            $objBuilder->AddSelectItem($strTableName, 'pp_token', $strAliasPrefix . 'pp_token');
            $objBuilder->AddSelectItem($strTableName, 'payer_id', $strAliasPrefix . 'payer_id');
            $objBuilder->AddSelectItem($strTableName, 'payer_status', $strAliasPrefix . 'payer_status');
            $objBuilder->AddSelectItem($strTableName, 'payment_status', $strAliasPrefix . 'payment_status');
            $objBuilder->AddSelectItem($strTableName, 'ack_returned', $strAliasPrefix . 'ack_returned');
            $objBuilder->AddSelectItem($strTableName, 'api_action', $strAliasPrefix . 'api_action');
            $objBuilder->AddSelectItem($strTableName, 'time_stamp', $strAliasPrefix . 'time_stamp');
            $objBuilder->AddSelectItem($strTableName, 'api_version', $strAliasPrefix . 'api_version');
            $objBuilder->AddSelectItem($strTableName, 'messages', $strAliasPrefix . 'messages');
            $objBuilder->AddSelectItem($strTableName, 'amount', $strAliasPrefix . 'amount');
            $objBuilder->AddSelectItem($strTableName, 'pp_fee', $strAliasPrefix . 'pp_fee');
            $objBuilder->AddSelectItem($strTableName, 'payment_method_id', $strAliasPrefix . 'payment_method_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a PaypalTransaction from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this PaypalTransaction::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return PaypalTransaction
        */
        public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
            // If blank row, return null
            if (!$objDbRow)
                return null;


            // Create a new instance of the PaypalTransaction object
            $objToReturn = new PaypalTransaction();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'order_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'order_id'] : $strAliasPrefix . 'order_id';
            $objToReturn->intOrderId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'correlation_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'correlation_id'] : $strAliasPrefix . 'correlation_id';
            $objToReturn->strCorrelationId = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'transaction_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'transaction_id'] : $strAliasPrefix . 'transaction_id';
            $objToReturn->strTransactionId = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'pp_token', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'pp_token'] : $strAliasPrefix . 'pp_token';
            $objToReturn->strPpToken = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'payer_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'payer_id'] : $strAliasPrefix . 'payer_id';
            $objToReturn->strPayerId = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'payer_status', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'payer_status'] : $strAliasPrefix . 'payer_status';
            $objToReturn->strPayerStatus = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'payment_status', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'payment_status'] : $strAliasPrefix . 'payment_status';
            $objToReturn->strPaymentStatus = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'ack_returned', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ack_returned'] : $strAliasPrefix . 'ack_returned';
            $objToReturn->strAckReturned = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'api_action', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'api_action'] : $strAliasPrefix . 'api_action';
            $objToReturn->strApiAction = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'time_stamp', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'time_stamp'] : $strAliasPrefix . 'time_stamp';
            $objToReturn->dttTimeStamp = $objDbRow->GetColumn($strAliasName, 'DateTime');
            $strAliasName = array_key_exists($strAliasPrefix . 'api_version', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'api_version'] : $strAliasPrefix . 'api_version';
            $objToReturn->strApiVersion = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'messages', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'messages'] : $strAliasPrefix . 'messages';
            $objToReturn->strMessages = $objDbRow->GetColumn($strAliasName, 'Blob');
            $strAliasName = array_key_exists($strAliasPrefix . 'amount', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'amount'] : $strAliasPrefix . 'amount';
            $objToReturn->fltAmount = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'pp_fee', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'pp_fee'] : $strAliasPrefix . 'pp_fee';
            $objToReturn->fltPpFee = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'payment_method_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'payment_method_id'] : $strAliasPrefix . 'payment_method_id';
            $objToReturn->intPaymentMethodId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'paypal_transaction__';

            // Check for Order Early Binding
            $strAlias = $strAliasPrefix . 'order_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objOrder = Order::InstantiateDbRow($objDbRow, $strAliasPrefix . 'order_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            return $objToReturn;
        }

        /**
         * Instantiate an array of PaypalTransactions from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return PaypalTransaction[]
         */
        public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
            $objToReturn = array();
            
            if (!$strColumnAliasArray)
                $strColumnAliasArray = array();

            // If blank resultset, then return empty array
            if (!$objDbResult)
                return $objToReturn;

            // Load up the return array with each row
            if ($strExpandAsArrayNodes) {
                $objLastRowItem = null;
                while ($objDbRow = $objDbResult->GetNextRow()) {
                    $objItem = PaypalTransaction::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = PaypalTransaction::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single PaypalTransaction object,
         * by Id Index(es)
         * @param integer $intId
         * @return PaypalTransaction
        */
        public static function LoadById($intId) {
            return PaypalTransaction::QuerySingle(
                QQ::Equal(QQN::PaypalTransaction()->Id, $intId)
            );
        }
            
        /**
         * Load an array of PaypalTransaction objects,
         * by CorrelationId Index(es)
         * @param string $strCorrelationId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return PaypalTransaction[]
        */
        public static function LoadArrayByCorrelationId($strCorrelationId, $objOptionalClauses = null) {
            // Call PaypalTransaction::QueryArray to perform the LoadArrayByCorrelationId query
            try {
                return PaypalTransaction::QueryArray(
                    QQ::Equal(QQN::PaypalTransaction()->CorrelationId, $strCorrelationId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count PaypalTransactions
         * by CorrelationId Index(es)
         * @param string $strCorrelationId
         * @return int
        */
        public static function CountByCorrelationId($strCorrelationId) {
            // Call PaypalTransaction::QueryCount to perform the CountByCorrelationId query
            return PaypalTransaction::QueryCount(
                QQ::Equal(QQN::PaypalTransaction()->CorrelationId, $strCorrelationId)
            );
        }
            
        /**
         * Load an array of PaypalTransaction objects,
         * by OrderId Index(es)
         * @param integer $intOrderId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return PaypalTransaction[]
        */
        public static function LoadArrayByOrderId($intOrderId, $objOptionalClauses = null) {
            // Call PaypalTransaction::QueryArray to perform the LoadArrayByOrderId query
            try {
                return PaypalTransaction::QueryArray(
                    QQ::Equal(QQN::PaypalTransaction()->OrderId, $intOrderId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count PaypalTransactions
         * by OrderId Index(es)
         * @param integer $intOrderId
         * @return int
        */
        public static function CountByOrderId($intOrderId) {
            // Call PaypalTransaction::QueryCount to perform the CountByOrderId query
            return PaypalTransaction::QueryCount(
                QQ::Equal(QQN::PaypalTransaction()->OrderId, $intOrderId)
            );
        }
            
        /**
         * Load an array of PaypalTransaction objects,
         * by PaymentMethodId Index(es)
         * @param integer $intPaymentMethodId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return PaypalTransaction[]
        */
        public static function LoadArrayByPaymentMethodId($intPaymentMethodId, $objOptionalClauses = null) {
            // Call PaypalTransaction::QueryArray to perform the LoadArrayByPaymentMethodId query
            try {
                return PaypalTransaction::QueryArray(
                    QQ::Equal(QQN::PaypalTransaction()->PaymentMethodId, $intPaymentMethodId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count PaypalTransactions
         * by PaymentMethodId Index(es)
         * @param integer $intPaymentMethodId
         * @return int
        */
        public static function CountByPaymentMethodId($intPaymentMethodId) {
            // Call PaypalTransaction::QueryCount to perform the CountByPaymentMethodId query
            return PaypalTransaction::QueryCount(
                QQ::Equal(QQN::PaypalTransaction()->PaymentMethodId, $intPaymentMethodId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this PaypalTransaction
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = PaypalTransaction::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `paypal_transaction` (
                            `order_id`,
                            `correlation_id`,
                            `transaction_id`,
                            `pp_token`,
                            `payer_id`,
                            `payer_status`,
                            `payment_status`,
                            `ack_returned`,
                            `api_action`,
                            `time_stamp`,
                            `api_version`,
                            `messages`,
                            `amount`,
                            `pp_fee`,
                            `payment_method_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->intOrderId) . ',
                            ' . $objDatabase->SqlVariable($this->strCorrelationId) . ',
                            ' . $objDatabase->SqlVariable($this->strTransactionId) . ',
                            ' . $objDatabase->SqlVariable($this->strPpToken) . ',
                            ' . $objDatabase->SqlVariable($this->strPayerId) . ',
                            ' . $objDatabase->SqlVariable($this->strPayerStatus) . ',
                            ' . $objDatabase->SqlVariable($this->strPaymentStatus) . ',
                            ' . $objDatabase->SqlVariable($this->strAckReturned) . ',
                            ' . $objDatabase->SqlVariable($this->strApiAction) . ',
                            ' . $objDatabase->SqlVariable($this->dttTimeStamp) . ',
                            ' . $objDatabase->SqlVariable($this->strApiVersion) . ',
                            ' . $objDatabase->SqlVariable($this->strMessages) . ',
                            ' . $objDatabase->SqlVariable($this->fltAmount) . ',
                            ' . $objDatabase->SqlVariable($this->fltPpFee) . ',
                            ' . $objDatabase->SqlVariable($this->intPaymentMethodId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('paypal_transaction', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `paypal_transaction`
                        SET
                            `order_id` = ' . $objDatabase->SqlVariable($this->intOrderId) . ',
                            `correlation_id` = ' . $objDatabase->SqlVariable($this->strCorrelationId) . ',
                            `transaction_id` = ' . $objDatabase->SqlVariable($this->strTransactionId) . ',
                            `pp_token` = ' . $objDatabase->SqlVariable($this->strPpToken) . ',
                            `payer_id` = ' . $objDatabase->SqlVariable($this->strPayerId) . ',
                            `payer_status` = ' . $objDatabase->SqlVariable($this->strPayerStatus) . ',
                            `payment_status` = ' . $objDatabase->SqlVariable($this->strPaymentStatus) . ',
                            `ack_returned` = ' . $objDatabase->SqlVariable($this->strAckReturned) . ',
                            `api_action` = ' . $objDatabase->SqlVariable($this->strApiAction) . ',
                            `time_stamp` = ' . $objDatabase->SqlVariable($this->dttTimeStamp) . ',
                            `api_version` = ' . $objDatabase->SqlVariable($this->strApiVersion) . ',
                            `messages` = ' . $objDatabase->SqlVariable($this->strMessages) . ',
                            `amount` = ' . $objDatabase->SqlVariable($this->fltAmount) . ',
                            `pp_fee` = ' . $objDatabase->SqlVariable($this->fltPpFee) . ',
                            `payment_method_id` = ' . $objDatabase->SqlVariable($this->intPaymentMethodId) . '
                        WHERE
                            `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                    ');
                }

            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Update __blnRestored and any Non-Identity PK Columns (if applicable)
            $this->__blnRestored = true;


            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this PaypalTransaction
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this PaypalTransaction with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = PaypalTransaction::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `paypal_transaction`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all PaypalTransactions
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = PaypalTransaction::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `paypal_transaction`');
        }

        /**
         * Truncate paypal_transaction table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = PaypalTransaction::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `paypal_transaction`');
        }

        /**
         * Reload this PaypalTransaction from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved PaypalTransaction object.');

            // Reload the Object
            $objReloaded = PaypalTransaction::Load($this->intId);

            // Update $this's local variables to match
            $this->OrderId = $objReloaded->OrderId;
            $this->strCorrelationId = $objReloaded->strCorrelationId;
            $this->strTransactionId = $objReloaded->strTransactionId;
            $this->strPpToken = $objReloaded->strPpToken;
            $this->strPayerId = $objReloaded->strPayerId;
            $this->strPayerStatus = $objReloaded->strPayerStatus;
            $this->strPaymentStatus = $objReloaded->strPaymentStatus;
            $this->strAckReturned = $objReloaded->strAckReturned;
            $this->strApiAction = $objReloaded->strApiAction;
            $this->dttTimeStamp = $objReloaded->dttTimeStamp;
            $this->strApiVersion = $objReloaded->strApiVersion;
            $this->strMessages = $objReloaded->strMessages;
            $this->fltAmount = $objReloaded->fltAmount;
            $this->fltPpFee = $objReloaded->fltPpFee;
            $this->intPaymentMethodId = $objReloaded->intPaymentMethodId;
        }


        ////////////////////
        // GETTORS AND SETTORS
        ////////////////////

        /**
         * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
         * @param string $strName
         * @return string
         */
        public function GetVirtualAttribute($strName)
        {
            if (array_key_exists($strName, $this->__strVirtualAttributeArray))
                return $this->__strVirtualAttributeArray[$strName];
            return null;
        }

                /**
         * Override method to perform a property "Get"
         * This will get the value of $strName
         *
         * @param string $strName Name of the property to get
         * @return mixed
         */
        public function __get($strName)
        {
            switch ($strName)
            {
                ///////////////////
                // Member Variables
                ///////////////////
                case 'Id':
                    /**
                     * Gets the value for intId (Read-Only PK)
                     * @return integer
                     */
                    return $this->intId;

                case 'OrderId':
                    /**
                     * Gets the value for intOrderId (Not Null)
                     * @return integer
                     */
                    return $this->intOrderId;

                case 'CorrelationId':
                    /**
                     * Gets the value for strCorrelationId 
                     * @return string
                     */
                    return $this->strCorrelationId;

                case 'TransactionId':
                    /**
                     * Gets the value for strTransactionId 
                     * @return string
                     */
                    return $this->strTransactionId;

                case 'PpToken':
                    /**
                     * Gets the value for strPpToken 
                     * @return string
                     */
                    return $this->strPpToken;

                case 'PayerId':
                    /**
                     * Gets the value for strPayerId 
                     * @return string
                     */
                    return $this->strPayerId;

                case 'PayerStatus':
                    /**
                     * Gets the value for strPayerStatus 
                     * @return string
                     */
                    return $this->strPayerStatus;

                case 'PaymentStatus':
                    /**
                     * Gets the value for strPaymentStatus 
                     * @return string
                     */
                    return $this->strPaymentStatus;

                case 'AckReturned':
                    /**
                     * Gets the value for strAckReturned 
                     * @return string
                     */
                    return $this->strAckReturned;

                case 'ApiAction':
                    /**
                     * Gets the value for strApiAction 
                     * @return string
                     */
                    return $this->strApiAction;

                case 'TimeStamp':
                    /**
                     * Gets the value for dttTimeStamp 
                     * @return QDateTime
                     */
                    return $this->dttTimeStamp;

                case 'ApiVersion':
                    /**
                     * Gets the value for strApiVersion 
                     * @return string
                     */
                    return $this->strApiVersion;

                case 'Messages':
                    /**
                     * Gets the value for strMessages 
                     * @return string
                     */
                    return $this->strMessages;

                case 'Amount':
                    /**
                     * Gets the value for fltAmount 
                     * @return double
                     */
                    return $this->fltAmount;

                case 'PpFee':
                    /**
                     * Gets the value for fltPpFee 
                     * @return double
                     */
                    return $this->fltPpFee;

                case 'PaymentMethodId':
                    /**
                     * Gets the value for intPaymentMethodId (Not Null)
                     * @return integer
                     */
                    return $this->intPaymentMethodId;


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Order':
                    /**
                     * Gets the value for the Order object referenced by intOrderId (Not Null)
                     * @return Order
                     */
                    try {
                        if ((!$this->objOrder) && (!is_null($this->intOrderId)))
                            $this->objOrder = Order::Load($this->intOrderId);
                        return $this->objOrder;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////


                case '__Restored':
                    return $this->__blnRestored;

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
            switch ($strName) {
                ///////////////////
                // Member Variables
                ///////////////////
                case 'OrderId':
                    /**
                     * Sets the value for intOrderId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objOrder = null;
                        return ($this->intOrderId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'CorrelationId':
                    /**
                     * Sets the value for strCorrelationId 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strCorrelationId = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'TransactionId':
                    /**
                     * Sets the value for strTransactionId 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strTransactionId = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'PpToken':
                    /**
                     * Sets the value for strPpToken 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strPpToken = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'PayerId':
                    /**
                     * Sets the value for strPayerId 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strPayerId = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'PayerStatus':
                    /**
                     * Sets the value for strPayerStatus 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strPayerStatus = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'PaymentStatus':
                    /**
                     * Sets the value for strPaymentStatus 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strPaymentStatus = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'AckReturned':
                    /**
                     * Sets the value for strAckReturned 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strAckReturned = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ApiAction':
                    /**
                     * Sets the value for strApiAction 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strApiAction = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'TimeStamp':
                    /**
                     * Sets the value for dttTimeStamp 
                     * @param QDateTime $mixValue
                     * @return QDateTime
                     */
                    try {
                        return ($this->dttTimeStamp = QType::Cast($mixValue, QType::DateTime));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ApiVersion':
                    /**
                     * Sets the value for strApiVersion 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strApiVersion = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Messages':
                    /**
                     * Sets the value for strMessages 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strMessages = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Amount':
                    /**
                     * Sets the value for fltAmount 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltAmount = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'PpFee':
                    /**
                     * Sets the value for fltPpFee 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltPpFee = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'PaymentMethodId':
                    /**
                     * Sets the value for intPaymentMethodId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intPaymentMethodId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Order':
                    /**
                     * Sets the value for the Order object referenced by intOrderId (Not Null)
                     * @param Order $mixValue
                     * @return Order
                     */
                    if (is_null($mixValue)) {
                        $this->intOrderId = null;
                        $this->objOrder = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a Order object
                        try {
                            $mixValue = QType::Cast($mixValue, 'Order');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED Order object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved Order for this PaypalTransaction');

                        // Update Local Member Variables
                        $this->objOrder = $mixValue;
                        $this->intOrderId = $mixValue->Id;

                        // Return $mixValue
                        return $mixValue;
                    }
                    break;

                default:
                    try {
                        return parent::__set($strName, $mixValue);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }

        ///////////////////////////////
        // ASSOCIATED OBJECTS' METHODS
        ///////////////////////////////




    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodePaypalTransaction extends QQNode {
        protected $strTableName = 'paypal_transaction';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'PaypalTransaction';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'OrderId':
                    return new QQNode('order_id', 'OrderId', 'integer', $this);
                case 'Order':
                    return new QQNodeOrder('order_id', 'Order', 'integer', $this);
                case 'CorrelationId':
                    return new QQNode('correlation_id', 'CorrelationId', 'string', $this);
                case 'TransactionId':
                    return new QQNode('transaction_id', 'TransactionId', 'string', $this);
                case 'PpToken':
                    return new QQNode('pp_token', 'PpToken', 'string', $this);
                case 'PayerId':
                    return new QQNode('payer_id', 'PayerId', 'string', $this);
                case 'PayerStatus':
                    return new QQNode('payer_status', 'PayerStatus', 'string', $this);
                case 'PaymentStatus':
                    return new QQNode('payment_status', 'PaymentStatus', 'string', $this);
                case 'AckReturned':
                    return new QQNode('ack_returned', 'AckReturned', 'string', $this);
                case 'ApiAction':
                    return new QQNode('api_action', 'ApiAction', 'string', $this);
                case 'TimeStamp':
                    return new QQNode('time_stamp', 'TimeStamp', 'QDateTime', $this);
                case 'ApiVersion':
                    return new QQNode('api_version', 'ApiVersion', 'string', $this);
                case 'Messages':
                    return new QQNode('messages', 'Messages', 'string', $this);
                case 'Amount':
                    return new QQNode('amount', 'Amount', 'double', $this);
                case 'PpFee':
                    return new QQNode('pp_fee', 'PpFee', 'double', $this);
                case 'PaymentMethodId':
                    return new QQNode('payment_method_id', 'PaymentMethodId', 'integer', $this);

                case '_PrimaryKeyNode':
                    return new QQNode('id', 'Id', 'integer', $this);
                default:
                    try {
                        return parent::__get($strName);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }
    }

    class QQReverseReferenceNodePaypalTransaction extends QQReverseReferenceNode {
        protected $strTableName = 'paypal_transaction';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'PaypalTransaction';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'OrderId':
                    return new QQNode('order_id', 'OrderId', 'integer', $this);
                case 'Order':
                    return new QQNodeOrder('order_id', 'Order', 'integer', $this);
                case 'CorrelationId':
                    return new QQNode('correlation_id', 'CorrelationId', 'string', $this);
                case 'TransactionId':
                    return new QQNode('transaction_id', 'TransactionId', 'string', $this);
                case 'PpToken':
                    return new QQNode('pp_token', 'PpToken', 'string', $this);
                case 'PayerId':
                    return new QQNode('payer_id', 'PayerId', 'string', $this);
                case 'PayerStatus':
                    return new QQNode('payer_status', 'PayerStatus', 'string', $this);
                case 'PaymentStatus':
                    return new QQNode('payment_status', 'PaymentStatus', 'string', $this);
                case 'AckReturned':
                    return new QQNode('ack_returned', 'AckReturned', 'string', $this);
                case 'ApiAction':
                    return new QQNode('api_action', 'ApiAction', 'string', $this);
                case 'TimeStamp':
                    return new QQNode('time_stamp', 'TimeStamp', 'QDateTime', $this);
                case 'ApiVersion':
                    return new QQNode('api_version', 'ApiVersion', 'string', $this);
                case 'Messages':
                    return new QQNode('messages', 'Messages', 'string', $this);
                case 'Amount':
                    return new QQNode('amount', 'Amount', 'double', $this);
                case 'PpFee':
                    return new QQNode('pp_fee', 'PpFee', 'double', $this);
                case 'PaymentMethodId':
                    return new QQNode('payment_method_id', 'PaymentMethodId', 'integer', $this);

                case '_PrimaryKeyNode':
                    return new QQNode('id', 'Id', 'integer', $this);
                default:
                    try {
                        return parent::__get($strName);
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }
            }
        }
    }

?>