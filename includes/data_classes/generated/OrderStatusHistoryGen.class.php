<?php
    /**
     * The abstract OrderStatusHistoryGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the OrderStatusHistory subclass which
     * extends this OrderStatusHistoryGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the OrderStatusHistory class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property integer $OrderId the value for intOrderId (Not Null)
     * @property-read string $Date the value for strDate (Read-Only Timestamp)
     * @property string $Notes the value for strNotes 
     * @property integer $StatusId the value for intStatusId (Not Null)
     * @property Order $Order the value for the Order object referenced by intOrderId (Not Null)
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class OrderStatusHistoryGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column order_status_history.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column order_status_history.order_id
         * @var integer intOrderId
         *
         */
        protected $intOrderId = null;


        /**
         * Protected member variable that maps to the database column order_status_history.date
         * @var string strDate
         *
         */
        protected $strDate = null;


        /**
         * Protected member variable that maps to the database column order_status_history.notes
         * @var string strNotes
         *
         */
        protected $strNotes = null;


        /**
         * Protected member variable that maps to the database column order_status_history.status_id
         * @var integer intStatusId
         *
         */
        protected $intStatusId = null;


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
         * in the database column order_status_history.order_id.
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
         * Load a OrderStatusHistory from PK Info
         * @param integer $intId
         * @return OrderStatusHistory
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return OrderStatusHistory::QuerySingle(
                QQ::Equal(QQN::OrderStatusHistory()->Id, $intId)
            );
        }

        /**
         * Load all OrderStatusHistories
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return OrderStatusHistory[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call OrderStatusHistory::QueryArray to perform the LoadAll query
            try {
                return OrderStatusHistory::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all OrderStatusHistories
         * @return int
         */
        public static function CountAll() {
            // Call OrderStatusHistory::QueryCount to perform the CountAll query
            return OrderStatusHistory::QueryCount(QQ::All());
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
            $objDatabase = OrderStatusHistory::GetDatabase();

            // Create/Build out the QueryBuilder object with OrderStatusHistory-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'order_status_history');
            OrderStatusHistory::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('order_status_history');

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
         * Static Qcodo Query method to query for a single OrderStatusHistory object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return OrderStatusHistory the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = OrderStatusHistory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new OrderStatusHistory object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return OrderStatusHistory::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of OrderStatusHistory objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return OrderStatusHistory[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = OrderStatusHistory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return OrderStatusHistory::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of OrderStatusHistory objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = OrderStatusHistory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = OrderStatusHistory::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'order_status_history_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with OrderStatusHistory-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                OrderStatusHistory::GetSelectFields($objQueryBuilder);
                OrderStatusHistory::GetFromFields($objQueryBuilder);

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
            return OrderStatusHistory::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this OrderStatusHistory
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'order_status_history';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'order_id', $strAliasPrefix . 'order_id');
            $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
            $objBuilder->AddSelectItem($strTableName, 'notes', $strAliasPrefix . 'notes');
            $objBuilder->AddSelectItem($strTableName, 'status_id', $strAliasPrefix . 'status_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a OrderStatusHistory from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this OrderStatusHistory::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return OrderStatusHistory
        */
        public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
            // If blank row, return null
            if (!$objDbRow)
                return null;


            // Create a new instance of the OrderStatusHistory object
            $objToReturn = new OrderStatusHistory();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'order_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'order_id'] : $strAliasPrefix . 'order_id';
            $objToReturn->intOrderId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'date'] : $strAliasPrefix . 'date';
            $objToReturn->strDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'notes', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'notes'] : $strAliasPrefix . 'notes';
            $objToReturn->strNotes = $objDbRow->GetColumn($strAliasName, 'Blob');
            $strAliasName = array_key_exists($strAliasPrefix . 'status_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'status_id'] : $strAliasPrefix . 'status_id';
            $objToReturn->intStatusId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'order_status_history__';

            // Check for Order Early Binding
            $strAlias = $strAliasPrefix . 'order_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objOrder = Order::InstantiateDbRow($objDbRow, $strAliasPrefix . 'order_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            return $objToReturn;
        }

        /**
         * Instantiate an array of OrderStatusHistories from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return OrderStatusHistory[]
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
                    $objItem = OrderStatusHistory::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = OrderStatusHistory::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single OrderStatusHistory object,
         * by Id Index(es)
         * @param integer $intId
         * @return OrderStatusHistory
        */
        public static function LoadById($intId) {
            return OrderStatusHistory::QuerySingle(
                QQ::Equal(QQN::OrderStatusHistory()->Id, $intId)
            );
        }
            
        /**
         * Load an array of OrderStatusHistory objects,
         * by OrderId Index(es)
         * @param integer $intOrderId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return OrderStatusHistory[]
        */
        public static function LoadArrayByOrderId($intOrderId, $objOptionalClauses = null) {
            // Call OrderStatusHistory::QueryArray to perform the LoadArrayByOrderId query
            try {
                return OrderStatusHistory::QueryArray(
                    QQ::Equal(QQN::OrderStatusHistory()->OrderId, $intOrderId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count OrderStatusHistories
         * by OrderId Index(es)
         * @param integer $intOrderId
         * @return int
        */
        public static function CountByOrderId($intOrderId) {
            // Call OrderStatusHistory::QueryCount to perform the CountByOrderId query
            return OrderStatusHistory::QueryCount(
                QQ::Equal(QQN::OrderStatusHistory()->OrderId, $intOrderId)
            );
        }
            
        /**
         * Load an array of OrderStatusHistory objects,
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return OrderStatusHistory[]
        */
        public static function LoadArrayByStatusId($intStatusId, $objOptionalClauses = null) {
            // Call OrderStatusHistory::QueryArray to perform the LoadArrayByStatusId query
            try {
                return OrderStatusHistory::QueryArray(
                    QQ::Equal(QQN::OrderStatusHistory()->StatusId, $intStatusId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count OrderStatusHistories
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @return int
        */
        public static function CountByStatusId($intStatusId) {
            // Call OrderStatusHistory::QueryCount to perform the CountByStatusId query
            return OrderStatusHistory::QueryCount(
                QQ::Equal(QQN::OrderStatusHistory()->StatusId, $intStatusId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this OrderStatusHistory
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = OrderStatusHistory::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `order_status_history` (
                            `order_id`,
                            `notes`,
                            `status_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->intOrderId) . ',
                            ' . $objDatabase->SqlVariable($this->strNotes) . ',
                            ' . $objDatabase->SqlVariable($this->intStatusId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('order_status_history', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `date`
                            FROM
                                `order_status_history`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strDate)
                            throw new QOptimisticLockingException('OrderStatusHistory');
                    }

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `order_status_history`
                        SET
                            `order_id` = ' . $objDatabase->SqlVariable($this->intOrderId) . ',
                            `notes` = ' . $objDatabase->SqlVariable($this->strNotes) . ',
                            `status_id` = ' . $objDatabase->SqlVariable($this->intStatusId) . '
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
                    `date`
                FROM
                    `order_status_history`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
                        
            $objRow = $objResult->FetchArray();
            $this->strDate = $objRow[0];

            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this OrderStatusHistory
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this OrderStatusHistory with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = OrderStatusHistory::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_status_history`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all OrderStatusHistories
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = OrderStatusHistory::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_status_history`');
        }

        /**
         * Truncate order_status_history table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = OrderStatusHistory::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `order_status_history`');
        }

        /**
         * Reload this OrderStatusHistory from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved OrderStatusHistory object.');

            // Reload the Object
            $objReloaded = OrderStatusHistory::Load($this->intId);

            // Update $this's local variables to match
            $this->OrderId = $objReloaded->OrderId;
            $this->strDate = $objReloaded->strDate;
            $this->strNotes = $objReloaded->strNotes;
            $this->StatusId = $objReloaded->StatusId;
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

                case 'Date':
                    /**
                     * Gets the value for strDate (Read-Only Timestamp)
                     * @return string
                     */
                    return $this->strDate;

                case 'Notes':
                    /**
                     * Gets the value for strNotes 
                     * @return string
                     */
                    return $this->strNotes;

                case 'StatusId':
                    /**
                     * Gets the value for intStatusId (Not Null)
                     * @return integer
                     */
                    return $this->intStatusId;


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

                case 'Notes':
                    /**
                     * Sets the value for strNotes 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strNotes = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'StatusId':
                    /**
                     * Sets the value for intStatusId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intStatusId = QType::Cast($mixValue, QType::Integer));
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
                            throw new QCallerException('Unable to set an unsaved Order for this OrderStatusHistory');

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

    class QQNodeOrderStatusHistory extends QQNode {
        protected $strTableName = 'order_status_history';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'OrderStatusHistory';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'OrderId':
                    return new QQNode('order_id', 'OrderId', 'integer', $this);
                case 'Order':
                    return new QQNodeOrder('order_id', 'Order', 'integer', $this);
                case 'Date':
                    return new QQNode('date', 'Date', 'string', $this);
                case 'Notes':
                    return new QQNode('notes', 'Notes', 'string', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);

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

    class QQReverseReferenceNodeOrderStatusHistory extends QQReverseReferenceNode {
        protected $strTableName = 'order_status_history';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'OrderStatusHistory';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'OrderId':
                    return new QQNode('order_id', 'OrderId', 'integer', $this);
                case 'Order':
                    return new QQNodeOrder('order_id', 'Order', 'integer', $this);
                case 'Date':
                    return new QQNode('date', 'Date', 'string', $this);
                case 'Notes':
                    return new QQNode('notes', 'Notes', 'string', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);

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