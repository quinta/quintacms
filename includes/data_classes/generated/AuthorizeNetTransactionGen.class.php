<?php
    /**
     * The abstract AuthorizeNetTransactionGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the AuthorizeNetTransaction subclass which
     * extends this AuthorizeNetTransactionGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the AuthorizeNetTransaction class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property integer $OrderId the value for intOrderId (Not Null)
     * @property-read string $CreationDate the value for strCreationDate (Read-Only Timestamp)
     * @property string $ResponseCode the value for strResponseCode 
     * @property string $ResponseSubcode the value for strResponseSubcode 
     * @property string $ResponseReasonCode the value for strResponseReasonCode 
     * @property string $ResponseReasonText the value for strResponseReasonText 
     * @property string $AuthorizationCode the value for strAuthorizationCode 
     * @property string $TransactionId the value for strTransactionId 
     * @property string $TransactionType the value for strTransactionType 
     * @property double $Amount the value for fltAmount 
     * @property string $AvsResponseCode the value for strAvsResponseCode 
     * @property string $CcvResponseCode the value for strCcvResponseCode 
     * @property string $CavResponseCode the value for strCavResponseCode 
     * @property Order $Order the value for the Order object referenced by intOrderId (Not Null)
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class AuthorizeNetTransactionGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column authorize_net_transaction.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.order_id
         * @var integer intOrderId
         *
         */
        protected $intOrderId = null;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.creation_date
         * @var string strCreationDate
         *
         */
        protected $strCreationDate = null;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.response_code
         * @var string strResponseCode
         *
         */
        protected $strResponseCode = null;
        const ResponseCodeMaxLength = 8;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.response_subcode
         * @var string strResponseSubcode
         *
         */
        protected $strResponseSubcode = null;
        const ResponseSubcodeMaxLength = 8;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.response_reason_code
         * @var string strResponseReasonCode
         *
         */
        protected $strResponseReasonCode = null;
        const ResponseReasonCodeMaxLength = 8;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.response_reason_text
         * @var string strResponseReasonText
         *
         */
        protected $strResponseReasonText = null;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.authorization_code
         * @var string strAuthorizationCode
         *
         */
        protected $strAuthorizationCode = null;
        const AuthorizationCodeMaxLength = 8;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.transaction_id
         * @var string strTransactionId
         *
         */
        protected $strTransactionId = null;
        const TransactionIdMaxLength = 128;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.transaction_type
         * @var string strTransactionType
         *
         */
        protected $strTransactionType = null;
        const TransactionTypeMaxLength = 128;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.amount
         * @var double fltAmount
         *
         */
        protected $fltAmount = null;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.avs_response_code
         * @var string strAvsResponseCode
         *
         */
        protected $strAvsResponseCode = null;
        const AvsResponseCodeMaxLength = 8;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.ccv_response_code
         * @var string strCcvResponseCode
         *
         */
        protected $strCcvResponseCode = null;
        const CcvResponseCodeMaxLength = 8;


        /**
         * Protected member variable that maps to the database column authorize_net_transaction.cav_response_code
         * @var string strCavResponseCode
         *
         */
        protected $strCavResponseCode = null;
        const CavResponseCodeMaxLength = 8;


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
         * in the database column authorize_net_transaction.order_id.
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
         * Load a AuthorizeNetTransaction from PK Info
         * @param integer $intId
         * @return AuthorizeNetTransaction
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return AuthorizeNetTransaction::QuerySingle(
                QQ::Equal(QQN::AuthorizeNetTransaction()->Id, $intId)
            );
        }

        /**
         * Load all AuthorizeNetTransactions
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return AuthorizeNetTransaction[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call AuthorizeNetTransaction::QueryArray to perform the LoadAll query
            try {
                return AuthorizeNetTransaction::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all AuthorizeNetTransactions
         * @return int
         */
        public static function CountAll() {
            // Call AuthorizeNetTransaction::QueryCount to perform the CountAll query
            return AuthorizeNetTransaction::QueryCount(QQ::All());
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
            $objDatabase = AuthorizeNetTransaction::GetDatabase();

            // Create/Build out the QueryBuilder object with AuthorizeNetTransaction-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'authorize_net_transaction');
            AuthorizeNetTransaction::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('authorize_net_transaction');

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
         * Static Qcodo Query method to query for a single AuthorizeNetTransaction object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return AuthorizeNetTransaction the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = AuthorizeNetTransaction::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new AuthorizeNetTransaction object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return AuthorizeNetTransaction::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of AuthorizeNetTransaction objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return AuthorizeNetTransaction[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = AuthorizeNetTransaction::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return AuthorizeNetTransaction::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of AuthorizeNetTransaction objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = AuthorizeNetTransaction::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = AuthorizeNetTransaction::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'authorize_net_transaction_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with AuthorizeNetTransaction-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                AuthorizeNetTransaction::GetSelectFields($objQueryBuilder);
                AuthorizeNetTransaction::GetFromFields($objQueryBuilder);

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
            return AuthorizeNetTransaction::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this AuthorizeNetTransaction
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'authorize_net_transaction';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'order_id', $strAliasPrefix . 'order_id');
            $objBuilder->AddSelectItem($strTableName, 'creation_date', $strAliasPrefix . 'creation_date');
            $objBuilder->AddSelectItem($strTableName, 'response_code', $strAliasPrefix . 'response_code');
            $objBuilder->AddSelectItem($strTableName, 'response_subcode', $strAliasPrefix . 'response_subcode');
            $objBuilder->AddSelectItem($strTableName, 'response_reason_code', $strAliasPrefix . 'response_reason_code');
            $objBuilder->AddSelectItem($strTableName, 'response_reason_text', $strAliasPrefix . 'response_reason_text');
            $objBuilder->AddSelectItem($strTableName, 'authorization_code', $strAliasPrefix . 'authorization_code');
            $objBuilder->AddSelectItem($strTableName, 'transaction_id', $strAliasPrefix . 'transaction_id');
            $objBuilder->AddSelectItem($strTableName, 'transaction_type', $strAliasPrefix . 'transaction_type');
            $objBuilder->AddSelectItem($strTableName, 'amount', $strAliasPrefix . 'amount');
            $objBuilder->AddSelectItem($strTableName, 'avs_response_code', $strAliasPrefix . 'avs_response_code');
            $objBuilder->AddSelectItem($strTableName, 'ccv_response_code', $strAliasPrefix . 'ccv_response_code');
            $objBuilder->AddSelectItem($strTableName, 'cav_response_code', $strAliasPrefix . 'cav_response_code');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a AuthorizeNetTransaction from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this AuthorizeNetTransaction::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return AuthorizeNetTransaction
        */
        public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
            // If blank row, return null
            if (!$objDbRow)
                return null;


            // Create a new instance of the AuthorizeNetTransaction object
            $objToReturn = new AuthorizeNetTransaction();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'order_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'order_id'] : $strAliasPrefix . 'order_id';
            $objToReturn->intOrderId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'creation_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'creation_date'] : $strAliasPrefix . 'creation_date';
            $objToReturn->strCreationDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'response_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'response_code'] : $strAliasPrefix . 'response_code';
            $objToReturn->strResponseCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'response_subcode', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'response_subcode'] : $strAliasPrefix . 'response_subcode';
            $objToReturn->strResponseSubcode = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'response_reason_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'response_reason_code'] : $strAliasPrefix . 'response_reason_code';
            $objToReturn->strResponseReasonCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'response_reason_text', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'response_reason_text'] : $strAliasPrefix . 'response_reason_text';
            $objToReturn->strResponseReasonText = $objDbRow->GetColumn($strAliasName, 'Blob');
            $strAliasName = array_key_exists($strAliasPrefix . 'authorization_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'authorization_code'] : $strAliasPrefix . 'authorization_code';
            $objToReturn->strAuthorizationCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'transaction_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'transaction_id'] : $strAliasPrefix . 'transaction_id';
            $objToReturn->strTransactionId = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'transaction_type', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'transaction_type'] : $strAliasPrefix . 'transaction_type';
            $objToReturn->strTransactionType = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'amount', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'amount'] : $strAliasPrefix . 'amount';
            $objToReturn->fltAmount = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'avs_response_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'avs_response_code'] : $strAliasPrefix . 'avs_response_code';
            $objToReturn->strAvsResponseCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'ccv_response_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ccv_response_code'] : $strAliasPrefix . 'ccv_response_code';
            $objToReturn->strCcvResponseCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'cav_response_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cav_response_code'] : $strAliasPrefix . 'cav_response_code';
            $objToReturn->strCavResponseCode = $objDbRow->GetColumn($strAliasName, 'VarChar');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'authorize_net_transaction__';

            // Check for Order Early Binding
            $strAlias = $strAliasPrefix . 'order_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objOrder = Order::InstantiateDbRow($objDbRow, $strAliasPrefix . 'order_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            return $objToReturn;
        }

        /**
         * Instantiate an array of AuthorizeNetTransactions from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return AuthorizeNetTransaction[]
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
                    $objItem = AuthorizeNetTransaction::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = AuthorizeNetTransaction::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single AuthorizeNetTransaction object,
         * by Id Index(es)
         * @param integer $intId
         * @return AuthorizeNetTransaction
        */
        public static function LoadById($intId) {
            return AuthorizeNetTransaction::QuerySingle(
                QQ::Equal(QQN::AuthorizeNetTransaction()->Id, $intId)
            );
        }
            
        /**
         * Load an array of AuthorizeNetTransaction objects,
         * by TransactionId Index(es)
         * @param string $strTransactionId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return AuthorizeNetTransaction[]
        */
        public static function LoadArrayByTransactionId($strTransactionId, $objOptionalClauses = null) {
            // Call AuthorizeNetTransaction::QueryArray to perform the LoadArrayByTransactionId query
            try {
                return AuthorizeNetTransaction::QueryArray(
                    QQ::Equal(QQN::AuthorizeNetTransaction()->TransactionId, $strTransactionId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count AuthorizeNetTransactions
         * by TransactionId Index(es)
         * @param string $strTransactionId
         * @return int
        */
        public static function CountByTransactionId($strTransactionId) {
            // Call AuthorizeNetTransaction::QueryCount to perform the CountByTransactionId query
            return AuthorizeNetTransaction::QueryCount(
                QQ::Equal(QQN::AuthorizeNetTransaction()->TransactionId, $strTransactionId)
            );
        }
            
        /**
         * Load an array of AuthorizeNetTransaction objects,
         * by OrderId Index(es)
         * @param integer $intOrderId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return AuthorizeNetTransaction[]
        */
        public static function LoadArrayByOrderId($intOrderId, $objOptionalClauses = null) {
            // Call AuthorizeNetTransaction::QueryArray to perform the LoadArrayByOrderId query
            try {
                return AuthorizeNetTransaction::QueryArray(
                    QQ::Equal(QQN::AuthorizeNetTransaction()->OrderId, $intOrderId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count AuthorizeNetTransactions
         * by OrderId Index(es)
         * @param integer $intOrderId
         * @return int
        */
        public static function CountByOrderId($intOrderId) {
            // Call AuthorizeNetTransaction::QueryCount to perform the CountByOrderId query
            return AuthorizeNetTransaction::QueryCount(
                QQ::Equal(QQN::AuthorizeNetTransaction()->OrderId, $intOrderId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this AuthorizeNetTransaction
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = AuthorizeNetTransaction::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `authorize_net_transaction` (
                            `order_id`,
                            `response_code`,
                            `response_subcode`,
                            `response_reason_code`,
                            `response_reason_text`,
                            `authorization_code`,
                            `transaction_id`,
                            `transaction_type`,
                            `amount`,
                            `avs_response_code`,
                            `ccv_response_code`,
                            `cav_response_code`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->intOrderId) . ',
                            ' . $objDatabase->SqlVariable($this->strResponseCode) . ',
                            ' . $objDatabase->SqlVariable($this->strResponseSubcode) . ',
                            ' . $objDatabase->SqlVariable($this->strResponseReasonCode) . ',
                            ' . $objDatabase->SqlVariable($this->strResponseReasonText) . ',
                            ' . $objDatabase->SqlVariable($this->strAuthorizationCode) . ',
                            ' . $objDatabase->SqlVariable($this->strTransactionId) . ',
                            ' . $objDatabase->SqlVariable($this->strTransactionType) . ',
                            ' . $objDatabase->SqlVariable($this->fltAmount) . ',
                            ' . $objDatabase->SqlVariable($this->strAvsResponseCode) . ',
                            ' . $objDatabase->SqlVariable($this->strCcvResponseCode) . ',
                            ' . $objDatabase->SqlVariable($this->strCavResponseCode) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('authorize_net_transaction', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `creation_date`
                            FROM
                                `authorize_net_transaction`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strCreationDate)
                            throw new QOptimisticLockingException('AuthorizeNetTransaction');
                    }

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `authorize_net_transaction`
                        SET
                            `order_id` = ' . $objDatabase->SqlVariable($this->intOrderId) . ',
                            `response_code` = ' . $objDatabase->SqlVariable($this->strResponseCode) . ',
                            `response_subcode` = ' . $objDatabase->SqlVariable($this->strResponseSubcode) . ',
                            `response_reason_code` = ' . $objDatabase->SqlVariable($this->strResponseReasonCode) . ',
                            `response_reason_text` = ' . $objDatabase->SqlVariable($this->strResponseReasonText) . ',
                            `authorization_code` = ' . $objDatabase->SqlVariable($this->strAuthorizationCode) . ',
                            `transaction_id` = ' . $objDatabase->SqlVariable($this->strTransactionId) . ',
                            `transaction_type` = ' . $objDatabase->SqlVariable($this->strTransactionType) . ',
                            `amount` = ' . $objDatabase->SqlVariable($this->fltAmount) . ',
                            `avs_response_code` = ' . $objDatabase->SqlVariable($this->strAvsResponseCode) . ',
                            `ccv_response_code` = ' . $objDatabase->SqlVariable($this->strCcvResponseCode) . ',
                            `cav_response_code` = ' . $objDatabase->SqlVariable($this->strCavResponseCode) . '
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

            // Update Local Timestamp
            $objResult = $objDatabase->Query('
                SELECT
                    `creation_date`
                FROM
                    `authorize_net_transaction`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
                        
            $objRow = $objResult->FetchArray();
            $this->strCreationDate = $objRow[0];

            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this AuthorizeNetTransaction
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this AuthorizeNetTransaction with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = AuthorizeNetTransaction::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `authorize_net_transaction`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all AuthorizeNetTransactions
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = AuthorizeNetTransaction::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `authorize_net_transaction`');
        }

        /**
         * Truncate authorize_net_transaction table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = AuthorizeNetTransaction::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `authorize_net_transaction`');
        }

        /**
         * Reload this AuthorizeNetTransaction from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved AuthorizeNetTransaction object.');

            // Reload the Object
            $objReloaded = AuthorizeNetTransaction::Load($this->intId);

            // Update $this's local variables to match
            $this->OrderId = $objReloaded->OrderId;
            $this->strCreationDate = $objReloaded->strCreationDate;
            $this->strResponseCode = $objReloaded->strResponseCode;
            $this->strResponseSubcode = $objReloaded->strResponseSubcode;
            $this->strResponseReasonCode = $objReloaded->strResponseReasonCode;
            $this->strResponseReasonText = $objReloaded->strResponseReasonText;
            $this->strAuthorizationCode = $objReloaded->strAuthorizationCode;
            $this->strTransactionId = $objReloaded->strTransactionId;
            $this->strTransactionType = $objReloaded->strTransactionType;
            $this->fltAmount = $objReloaded->fltAmount;
            $this->strAvsResponseCode = $objReloaded->strAvsResponseCode;
            $this->strCcvResponseCode = $objReloaded->strCcvResponseCode;
            $this->strCavResponseCode = $objReloaded->strCavResponseCode;
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

                case 'CreationDate':
                    /**
                     * Gets the value for strCreationDate (Read-Only Timestamp)
                     * @return string
                     */
                    return $this->strCreationDate;

                case 'ResponseCode':
                    /**
                     * Gets the value for strResponseCode 
                     * @return string
                     */
                    return $this->strResponseCode;

                case 'ResponseSubcode':
                    /**
                     * Gets the value for strResponseSubcode 
                     * @return string
                     */
                    return $this->strResponseSubcode;

                case 'ResponseReasonCode':
                    /**
                     * Gets the value for strResponseReasonCode 
                     * @return string
                     */
                    return $this->strResponseReasonCode;

                case 'ResponseReasonText':
                    /**
                     * Gets the value for strResponseReasonText 
                     * @return string
                     */
                    return $this->strResponseReasonText;

                case 'AuthorizationCode':
                    /**
                     * Gets the value for strAuthorizationCode 
                     * @return string
                     */
                    return $this->strAuthorizationCode;

                case 'TransactionId':
                    /**
                     * Gets the value for strTransactionId 
                     * @return string
                     */
                    return $this->strTransactionId;

                case 'TransactionType':
                    /**
                     * Gets the value for strTransactionType 
                     * @return string
                     */
                    return $this->strTransactionType;

                case 'Amount':
                    /**
                     * Gets the value for fltAmount 
                     * @return double
                     */
                    return $this->fltAmount;

                case 'AvsResponseCode':
                    /**
                     * Gets the value for strAvsResponseCode 
                     * @return string
                     */
                    return $this->strAvsResponseCode;

                case 'CcvResponseCode':
                    /**
                     * Gets the value for strCcvResponseCode 
                     * @return string
                     */
                    return $this->strCcvResponseCode;

                case 'CavResponseCode':
                    /**
                     * Gets the value for strCavResponseCode 
                     * @return string
                     */
                    return $this->strCavResponseCode;


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

                case 'ResponseCode':
                    /**
                     * Sets the value for strResponseCode 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strResponseCode = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ResponseSubcode':
                    /**
                     * Sets the value for strResponseSubcode 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strResponseSubcode = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ResponseReasonCode':
                    /**
                     * Sets the value for strResponseReasonCode 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strResponseReasonCode = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ResponseReasonText':
                    /**
                     * Sets the value for strResponseReasonText 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strResponseReasonText = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'AuthorizationCode':
                    /**
                     * Sets the value for strAuthorizationCode 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strAuthorizationCode = QType::Cast($mixValue, QType::String));
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

                case 'TransactionType':
                    /**
                     * Sets the value for strTransactionType 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strTransactionType = QType::Cast($mixValue, QType::String));
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

                case 'AvsResponseCode':
                    /**
                     * Sets the value for strAvsResponseCode 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strAvsResponseCode = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'CcvResponseCode':
                    /**
                     * Sets the value for strCcvResponseCode 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strCcvResponseCode = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'CavResponseCode':
                    /**
                     * Sets the value for strCavResponseCode 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strCavResponseCode = QType::Cast($mixValue, QType::String));
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
                            throw new QCallerException('Unable to set an unsaved Order for this AuthorizeNetTransaction');

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

    class QQNodeAuthorizeNetTransaction extends QQNode {
        protected $strTableName = 'authorize_net_transaction';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'AuthorizeNetTransaction';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'OrderId':
                    return new QQNode('order_id', 'OrderId', 'integer', $this);
                case 'Order':
                    return new QQNodeOrder('order_id', 'Order', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'ResponseCode':
                    return new QQNode('response_code', 'ResponseCode', 'string', $this);
                case 'ResponseSubcode':
                    return new QQNode('response_subcode', 'ResponseSubcode', 'string', $this);
                case 'ResponseReasonCode':
                    return new QQNode('response_reason_code', 'ResponseReasonCode', 'string', $this);
                case 'ResponseReasonText':
                    return new QQNode('response_reason_text', 'ResponseReasonText', 'string', $this);
                case 'AuthorizationCode':
                    return new QQNode('authorization_code', 'AuthorizationCode', 'string', $this);
                case 'TransactionId':
                    return new QQNode('transaction_id', 'TransactionId', 'string', $this);
                case 'TransactionType':
                    return new QQNode('transaction_type', 'TransactionType', 'string', $this);
                case 'Amount':
                    return new QQNode('amount', 'Amount', 'double', $this);
                case 'AvsResponseCode':
                    return new QQNode('avs_response_code', 'AvsResponseCode', 'string', $this);
                case 'CcvResponseCode':
                    return new QQNode('ccv_response_code', 'CcvResponseCode', 'string', $this);
                case 'CavResponseCode':
                    return new QQNode('cav_response_code', 'CavResponseCode', 'string', $this);

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

    class QQReverseReferenceNodeAuthorizeNetTransaction extends QQReverseReferenceNode {
        protected $strTableName = 'authorize_net_transaction';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'AuthorizeNetTransaction';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'OrderId':
                    return new QQNode('order_id', 'OrderId', 'integer', $this);
                case 'Order':
                    return new QQNodeOrder('order_id', 'Order', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'ResponseCode':
                    return new QQNode('response_code', 'ResponseCode', 'string', $this);
                case 'ResponseSubcode':
                    return new QQNode('response_subcode', 'ResponseSubcode', 'string', $this);
                case 'ResponseReasonCode':
                    return new QQNode('response_reason_code', 'ResponseReasonCode', 'string', $this);
                case 'ResponseReasonText':
                    return new QQNode('response_reason_text', 'ResponseReasonText', 'string', $this);
                case 'AuthorizationCode':
                    return new QQNode('authorization_code', 'AuthorizationCode', 'string', $this);
                case 'TransactionId':
                    return new QQNode('transaction_id', 'TransactionId', 'string', $this);
                case 'TransactionType':
                    return new QQNode('transaction_type', 'TransactionType', 'string', $this);
                case 'Amount':
                    return new QQNode('amount', 'Amount', 'double', $this);
                case 'AvsResponseCode':
                    return new QQNode('avs_response_code', 'AvsResponseCode', 'string', $this);
                case 'CcvResponseCode':
                    return new QQNode('ccv_response_code', 'CcvResponseCode', 'string', $this);
                case 'CavResponseCode':
                    return new QQNode('cav_response_code', 'CavResponseCode', 'string', $this);

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