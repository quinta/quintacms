<?php
    /**
     * The abstract TrackingNumberGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the TrackingNumber subclass which
     * extends this TrackingNumberGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the TrackingNumber class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property integer $OrderId the value for intOrderId (PK)
     * @property string $Number the value for strNumber (PK)
     * @property Order $Order the value for the Order object referenced by intOrderId (PK)
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class TrackingNumberGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK column tracking_number.order_id
         * @var integer intOrderId
         *
         */
        protected $intOrderId = null;


        /**
         * Protected internal member variable that stores the original version of the PK column value (if restored)
         * Used by Save() to update a PK column during UPDATE
         * @var integer __intOrderId;
         */
        protected $__intOrderId;

        /**
         * Protected member variable that maps to the database PK column tracking_number.number
         * @var string strNumber
         *
         */
        protected $strNumber = null;
        const NumberMaxLength = 64;


        /**
         * Protected internal member variable that stores the original version of the PK column value (if restored)
         * Used by Save() to update a PK column during UPDATE
         * @var string __strNumber;
         */
        protected $__strNumber;

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
         * in the database column tracking_number.order_id.
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
         * Load a TrackingNumber from PK Info
         * @param integer $intOrderId
         * @param string $strNumber
         * @return TrackingNumber
         */
        public static function Load($intOrderId, $strNumber) {
            // Use QuerySingle to Perform the Query
            return TrackingNumber::QuerySingle(
                QQ::AndCondition(
                QQ::Equal(QQN::TrackingNumber()->OrderId, $intOrderId),
                QQ::Equal(QQN::TrackingNumber()->Number, $strNumber)
                )
            );
        }

        /**
         * Load all TrackingNumbers
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return TrackingNumber[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call TrackingNumber::QueryArray to perform the LoadAll query
            try {
                return TrackingNumber::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all TrackingNumbers
         * @return int
         */
        public static function CountAll() {
            // Call TrackingNumber::QueryCount to perform the CountAll query
            return TrackingNumber::QueryCount(QQ::All());
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
            $objDatabase = TrackingNumber::GetDatabase();

            // Create/Build out the QueryBuilder object with TrackingNumber-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'tracking_number');
            TrackingNumber::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('tracking_number');

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
         * Static Qcodo Query method to query for a single TrackingNumber object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return TrackingNumber the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = TrackingNumber::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new TrackingNumber object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return TrackingNumber::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of TrackingNumber objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return TrackingNumber[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = TrackingNumber::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return TrackingNumber::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of TrackingNumber objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = TrackingNumber::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = TrackingNumber::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'tracking_number_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with TrackingNumber-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                TrackingNumber::GetSelectFields($objQueryBuilder);
                TrackingNumber::GetFromFields($objQueryBuilder);

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
            return TrackingNumber::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this TrackingNumber
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'tracking_number';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'order_id', $strAliasPrefix . 'order_id');
            $objBuilder->AddSelectItem($strTableName, 'number', $strAliasPrefix . 'number');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a TrackingNumber from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this TrackingNumber::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return TrackingNumber
        */
        public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
            // If blank row, return null
            if (!$objDbRow)
                return null;


            // Create a new instance of the TrackingNumber object
            $objToReturn = new TrackingNumber();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'order_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'order_id'] : $strAliasPrefix . 'order_id';
            $objToReturn->intOrderId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $objToReturn->__intOrderId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'number', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'number'] : $strAliasPrefix . 'number';
            $objToReturn->strNumber = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $objToReturn->__strNumber = $objDbRow->GetColumn($strAliasName, 'VarChar');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'tracking_number__';

            // Check for Order Early Binding
            $strAlias = $strAliasPrefix . 'order_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objOrder = Order::InstantiateDbRow($objDbRow, $strAliasPrefix . 'order_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            return $objToReturn;
        }

        /**
         * Instantiate an array of TrackingNumbers from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return TrackingNumber[]
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
                    $objItem = TrackingNumber::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = TrackingNumber::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single TrackingNumber object,
         * by OrderId, Number Index(es)
         * @param integer $intOrderId
         * @param string $strNumber
         * @return TrackingNumber
        */
        public static function LoadByOrderIdNumber($intOrderId, $strNumber) {
            return TrackingNumber::QuerySingle(
                QQ::AndCondition(
                QQ::Equal(QQN::TrackingNumber()->OrderId, $intOrderId),
                QQ::Equal(QQN::TrackingNumber()->Number, $strNumber)
                )
            );
        }
            
        /**
         * Load an array of TrackingNumber objects,
         * by OrderId Index(es)
         * @param integer $intOrderId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return TrackingNumber[]
        */
        public static function LoadArrayByOrderId($intOrderId, $objOptionalClauses = null) {
            // Call TrackingNumber::QueryArray to perform the LoadArrayByOrderId query
            try {
                return TrackingNumber::QueryArray(
                    QQ::Equal(QQN::TrackingNumber()->OrderId, $intOrderId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count TrackingNumbers
         * by OrderId Index(es)
         * @param integer $intOrderId
         * @return int
        */
        public static function CountByOrderId($intOrderId) {
            // Call TrackingNumber::QueryCount to perform the CountByOrderId query
            return TrackingNumber::QueryCount(
                QQ::Equal(QQN::TrackingNumber()->OrderId, $intOrderId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this TrackingNumber
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return void
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = TrackingNumber::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `tracking_number` (
                            `order_id`,
                            `number`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->intOrderId) . ',
                            ' . $objDatabase->SqlVariable($this->strNumber) . '
                        )
                    ');


                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `tracking_number`
                        SET
                            `order_id` = ' . $objDatabase->SqlVariable($this->intOrderId) . ',
                            `number` = ' . $objDatabase->SqlVariable($this->strNumber) . '
                        WHERE
                            `order_id` = ' . $objDatabase->SqlVariable($this->__intOrderId) . ' AND
                            `number` = ' . $objDatabase->SqlVariable($this->__strNumber) . '
                    ');
                }

            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Update __blnRestored and any Non-Identity PK Columns (if applicable)
            $this->__blnRestored = true;
            $this->__intOrderId = $this->intOrderId;
            $this->__strNumber = $this->strNumber;


            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this TrackingNumber
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intOrderId)) || (is_null($this->strNumber)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this TrackingNumber with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = TrackingNumber::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `tracking_number`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intOrderId) . ' AND
                    `number` = ' . $objDatabase->SqlVariable($this->strNumber) . '');
        }

        /**
         * Delete all TrackingNumbers
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = TrackingNumber::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `tracking_number`');
        }

        /**
         * Truncate tracking_number table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = TrackingNumber::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `tracking_number`');
        }

        /**
         * Reload this TrackingNumber from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved TrackingNumber object.');

            // Reload the Object
            $objReloaded = TrackingNumber::Load($this->intOrderId, $this->strNumber);

            // Update $this's local variables to match
            $this->OrderId = $objReloaded->OrderId;
            $this->__intOrderId = $this->intOrderId;
            $this->strNumber = $objReloaded->strNumber;
            $this->__strNumber = $this->strNumber;
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
                case 'OrderId':
                    /**
                     * Gets the value for intOrderId (PK)
                     * @return integer
                     */
                    return $this->intOrderId;

                case 'Number':
                    /**
                     * Gets the value for strNumber (PK)
                     * @return string
                     */
                    return $this->strNumber;


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Order':
                    /**
                     * Gets the value for the Order object referenced by intOrderId (PK)
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
                     * Sets the value for intOrderId (PK)
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

                case 'Number':
                    /**
                     * Sets the value for strNumber (PK)
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strNumber = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Order':
                    /**
                     * Sets the value for the Order object referenced by intOrderId (PK)
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
                            throw new QCallerException('Unable to set an unsaved Order for this TrackingNumber');

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

    class QQNodeTrackingNumber extends QQNode {
        protected $strTableName = 'tracking_number';
        protected $strPrimaryKey = 'order_id';
        protected $strClassName = 'TrackingNumber';
        public function __get($strName) {
            switch ($strName) {
                case 'OrderId':
                    return new QQNode('order_id', 'OrderId', 'integer', $this);
                case 'Order':
                    return new QQNodeOrder('order_id', 'Order', 'integer', $this);
                case 'Number':
                    return new QQNode('number', 'Number', 'string', $this);

                case '_PrimaryKeyNode':
                    return new QQNodeOrder('order_id', 'OrderId', 'integer', $this);
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

    class QQReverseReferenceNodeTrackingNumber extends QQReverseReferenceNode {
        protected $strTableName = 'tracking_number';
        protected $strPrimaryKey = 'order_id';
        protected $strClassName = 'TrackingNumber';
        public function __get($strName) {
            switch ($strName) {
                case 'OrderId':
                    return new QQNode('order_id', 'OrderId', 'integer', $this);
                case 'Order':
                    return new QQNodeOrder('order_id', 'Order', 'integer', $this);
                case 'Number':
                    return new QQNode('number', 'Number', 'string', $this);

                case '_PrimaryKeyNode':
                    return new QQNodeOrder('order_id', 'OrderId', 'integer', $this);
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