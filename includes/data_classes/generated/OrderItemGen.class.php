<?php
    /**
     * The abstract OrderItemGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the OrderItem subclass which
     * extends this OrderItemGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the OrderItem class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property integer $OrderId the value for intOrderId (PK)
     * @property integer $ProductId the value for intProductId (PK)
     * @property integer $Quantity the value for intQuantity (Not Null)
     * @property integer $StatusId the value for intStatusId (Not Null)
     * @property Order $Order the value for the Order object referenced by intOrderId (PK)
     * @property Product $Product the value for the Product object referenced by intProductId (PK)
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class OrderItemGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK column order_item.order_id
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
         * Protected member variable that maps to the database PK column order_item.product_id
         * @var integer intProductId
         *
         */
        protected $intProductId = null;


        /**
         * Protected internal member variable that stores the original version of the PK column value (if restored)
         * Used by Save() to update a PK column during UPDATE
         * @var integer __intProductId;
         */
        protected $__intProductId;

        /**
         * Protected member variable that maps to the database column order_item.quantity
         * @var integer intQuantity
         *
         */
        protected $intQuantity = null;


        /**
         * Protected member variable that maps to the database column order_item.status_id
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
         * in the database column order_item.order_id.
         *
         * NOTE: Always use the Order property getter to correctly retrieve this Order object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Order objOrder
         */
        protected $objOrder;

        /**
         * Protected member variable that contains the object pointed by the reference
         * in the database column order_item.product_id.
         *
         * NOTE: Always use the Product property getter to correctly retrieve this Product object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Product objProduct
         */
        protected $objProduct;



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
         * Load a OrderItem from PK Info
         * @param integer $intOrderId
         * @param integer $intProductId
         * @return OrderItem
         */
        public static function Load($intOrderId, $intProductId) {
            // Use QuerySingle to Perform the Query
            return OrderItem::QuerySingle(
                QQ::AndCondition(
                QQ::Equal(QQN::OrderItem()->OrderId, $intOrderId),
                QQ::Equal(QQN::OrderItem()->ProductId, $intProductId)
                )
            );
        }

        /**
         * Load all OrderItems
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return OrderItem[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call OrderItem::QueryArray to perform the LoadAll query
            try {
                return OrderItem::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all OrderItems
         * @return int
         */
        public static function CountAll() {
            // Call OrderItem::QueryCount to perform the CountAll query
            return OrderItem::QueryCount(QQ::All());
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
            $objDatabase = OrderItem::GetDatabase();

            // Create/Build out the QueryBuilder object with OrderItem-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'order_item');
            OrderItem::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('order_item');

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
         * Static Qcodo Query method to query for a single OrderItem object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return OrderItem the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = OrderItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new OrderItem object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return OrderItem::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of OrderItem objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return OrderItem[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = OrderItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return OrderItem::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of OrderItem objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = OrderItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = OrderItem::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'order_item_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with OrderItem-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                OrderItem::GetSelectFields($objQueryBuilder);
                OrderItem::GetFromFields($objQueryBuilder);

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
            return OrderItem::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this OrderItem
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'order_item';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'order_id', $strAliasPrefix . 'order_id');
            $objBuilder->AddSelectItem($strTableName, 'product_id', $strAliasPrefix . 'product_id');
            $objBuilder->AddSelectItem($strTableName, 'quantity', $strAliasPrefix . 'quantity');
            $objBuilder->AddSelectItem($strTableName, 'status_id', $strAliasPrefix . 'status_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a OrderItem from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this OrderItem::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return OrderItem
        */
        public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
            // If blank row, return null
            if (!$objDbRow)
                return null;


            // Create a new instance of the OrderItem object
            $objToReturn = new OrderItem();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'order_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'order_id'] : $strAliasPrefix . 'order_id';
            $objToReturn->intOrderId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $objToReturn->__intOrderId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'product_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'product_id'] : $strAliasPrefix . 'product_id';
            $objToReturn->intProductId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $objToReturn->__intProductId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'quantity', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantity'] : $strAliasPrefix . 'quantity';
            $objToReturn->intQuantity = $objDbRow->GetColumn($strAliasName, 'Integer');
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
                $strAliasPrefix = 'order_item__';

            // Check for Order Early Binding
            $strAlias = $strAliasPrefix . 'order_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objOrder = Order::InstantiateDbRow($objDbRow, $strAliasPrefix . 'order_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

            // Check for Product Early Binding
            $strAlias = $strAliasPrefix . 'product_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objProduct = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            return $objToReturn;
        }

        /**
         * Instantiate an array of OrderItems from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return OrderItem[]
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
                    $objItem = OrderItem::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = OrderItem::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single OrderItem object,
         * by OrderId, ProductId Index(es)
         * @param integer $intOrderId
         * @param integer $intProductId
         * @return OrderItem
        */
        public static function LoadByOrderIdProductId($intOrderId, $intProductId) {
            return OrderItem::QuerySingle(
                QQ::AndCondition(
                QQ::Equal(QQN::OrderItem()->OrderId, $intOrderId),
                QQ::Equal(QQN::OrderItem()->ProductId, $intProductId)
                )
            );
        }
            
        /**
         * Load a single OrderItem object,
         * by ProductId, OrderId Index(es)
         * @param integer $intProductId
         * @param integer $intOrderId
         * @return OrderItem
        */
        public static function LoadByProductIdOrderId($intProductId, $intOrderId) {
            return OrderItem::QuerySingle(
                QQ::AndCondition(
                QQ::Equal(QQN::OrderItem()->ProductId, $intProductId),
                QQ::Equal(QQN::OrderItem()->OrderId, $intOrderId)
                )
            );
        }
            
        /**
         * Load an array of OrderItem objects,
         * by OrderId Index(es)
         * @param integer $intOrderId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return OrderItem[]
        */
        public static function LoadArrayByOrderId($intOrderId, $objOptionalClauses = null) {
            // Call OrderItem::QueryArray to perform the LoadArrayByOrderId query
            try {
                return OrderItem::QueryArray(
                    QQ::Equal(QQN::OrderItem()->OrderId, $intOrderId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count OrderItems
         * by OrderId Index(es)
         * @param integer $intOrderId
         * @return int
        */
        public static function CountByOrderId($intOrderId) {
            // Call OrderItem::QueryCount to perform the CountByOrderId query
            return OrderItem::QueryCount(
                QQ::Equal(QQN::OrderItem()->OrderId, $intOrderId)
            );
        }
            
        /**
         * Load an array of OrderItem objects,
         * by ProductId Index(es)
         * @param integer $intProductId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return OrderItem[]
        */
        public static function LoadArrayByProductId($intProductId, $objOptionalClauses = null) {
            // Call OrderItem::QueryArray to perform the LoadArrayByProductId query
            try {
                return OrderItem::QueryArray(
                    QQ::Equal(QQN::OrderItem()->ProductId, $intProductId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count OrderItems
         * by ProductId Index(es)
         * @param integer $intProductId
         * @return int
        */
        public static function CountByProductId($intProductId) {
            // Call OrderItem::QueryCount to perform the CountByProductId query
            return OrderItem::QueryCount(
                QQ::Equal(QQN::OrderItem()->ProductId, $intProductId)
            );
        }
            
        /**
         * Load an array of OrderItem objects,
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return OrderItem[]
        */
        public static function LoadArrayByStatusId($intStatusId, $objOptionalClauses = null) {
            // Call OrderItem::QueryArray to perform the LoadArrayByStatusId query
            try {
                return OrderItem::QueryArray(
                    QQ::Equal(QQN::OrderItem()->StatusId, $intStatusId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count OrderItems
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @return int
        */
        public static function CountByStatusId($intStatusId) {
            // Call OrderItem::QueryCount to perform the CountByStatusId query
            return OrderItem::QueryCount(
                QQ::Equal(QQN::OrderItem()->StatusId, $intStatusId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this OrderItem
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return void
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = OrderItem::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `order_item` (
                            `order_id`,
                            `product_id`,
                            `quantity`,
                            `status_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->intOrderId) . ',
                            ' . $objDatabase->SqlVariable($this->intProductId) . ',
                            ' . $objDatabase->SqlVariable($this->intQuantity) . ',
                            ' . $objDatabase->SqlVariable($this->intStatusId) . '
                        )
                    ');


                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `order_item`
                        SET
                            `order_id` = ' . $objDatabase->SqlVariable($this->intOrderId) . ',
                            `product_id` = ' . $objDatabase->SqlVariable($this->intProductId) . ',
                            `quantity` = ' . $objDatabase->SqlVariable($this->intQuantity) . ',
                            `status_id` = ' . $objDatabase->SqlVariable($this->intStatusId) . '
                        WHERE
                            `order_id` = ' . $objDatabase->SqlVariable($this->__intOrderId) . ' AND
                            `product_id` = ' . $objDatabase->SqlVariable($this->__intProductId) . '
                    ');
                }

            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Update __blnRestored and any Non-Identity PK Columns (if applicable)
            $this->__blnRestored = true;
            $this->__intOrderId = $this->intOrderId;
            $this->__intProductId = $this->intProductId;


            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this OrderItem
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intOrderId)) || (is_null($this->intProductId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this OrderItem with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = OrderItem::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_item`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intOrderId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($this->intProductId) . '');
        }

        /**
         * Delete all OrderItems
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = OrderItem::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_item`');
        }

        /**
         * Truncate order_item table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = OrderItem::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `order_item`');
        }

        /**
         * Reload this OrderItem from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved OrderItem object.');

            // Reload the Object
            $objReloaded = OrderItem::Load($this->intOrderId, $this->intProductId);

            // Update $this's local variables to match
            $this->OrderId = $objReloaded->OrderId;
            $this->__intOrderId = $this->intOrderId;
            $this->ProductId = $objReloaded->ProductId;
            $this->__intProductId = $this->intProductId;
            $this->intQuantity = $objReloaded->intQuantity;
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
                case 'OrderId':
                    /**
                     * Gets the value for intOrderId (PK)
                     * @return integer
                     */
                    return $this->intOrderId;

                case 'ProductId':
                    /**
                     * Gets the value for intProductId (PK)
                     * @return integer
                     */
                    return $this->intProductId;

                case 'Quantity':
                    /**
                     * Gets the value for intQuantity (Not Null)
                     * @return integer
                     */
                    return $this->intQuantity;

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

                case 'Product':
                    /**
                     * Gets the value for the Product object referenced by intProductId (PK)
                     * @return Product
                     */
                    try {
                        if ((!$this->objProduct) && (!is_null($this->intProductId)))
                            $this->objProduct = Product::Load($this->intProductId);
                        return $this->objProduct;
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

                case 'ProductId':
                    /**
                     * Sets the value for intProductId (PK)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objProduct = null;
                        return ($this->intProductId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Quantity':
                    /**
                     * Sets the value for intQuantity (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intQuantity = QType::Cast($mixValue, QType::Integer));
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
                            throw new QCallerException('Unable to set an unsaved Order for this OrderItem');

                        // Update Local Member Variables
                        $this->objOrder = $mixValue;
                        $this->intOrderId = $mixValue->Id;

                        // Return $mixValue
                        return $mixValue;
                    }
                    break;

                case 'Product':
                    /**
                     * Sets the value for the Product object referenced by intProductId (PK)
                     * @param Product $mixValue
                     * @return Product
                     */
                    if (is_null($mixValue)) {
                        $this->intProductId = null;
                        $this->objProduct = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a Product object
                        try {
                            $mixValue = QType::Cast($mixValue, 'Product');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED Product object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved Product for this OrderItem');

                        // Update Local Member Variables
                        $this->objProduct = $mixValue;
                        $this->intProductId = $mixValue->Id;

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

    class QQNodeOrderItem extends QQNode {
        protected $strTableName = 'order_item';
        protected $strPrimaryKey = 'order_id';
        protected $strClassName = 'OrderItem';
        public function __get($strName) {
            switch ($strName) {
                case 'OrderId':
                    return new QQNode('order_id', 'OrderId', 'integer', $this);
                case 'Order':
                    return new QQNodeOrder('order_id', 'Order', 'integer', $this);
                case 'ProductId':
                    return new QQNode('product_id', 'ProductId', 'integer', $this);
                case 'Product':
                    return new QQNodeProduct('product_id', 'Product', 'integer', $this);
                case 'Quantity':
                    return new QQNode('quantity', 'Quantity', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);

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

    class QQReverseReferenceNodeOrderItem extends QQReverseReferenceNode {
        protected $strTableName = 'order_item';
        protected $strPrimaryKey = 'order_id';
        protected $strClassName = 'OrderItem';
        public function __get($strName) {
            switch ($strName) {
                case 'OrderId':
                    return new QQNode('order_id', 'OrderId', 'integer', $this);
                case 'Order':
                    return new QQNodeOrder('order_id', 'Order', 'integer', $this);
                case 'ProductId':
                    return new QQNode('product_id', 'ProductId', 'integer', $this);
                case 'Product':
                    return new QQNodeProduct('product_id', 'Product', 'integer', $this);
                case 'Quantity':
                    return new QQNode('quantity', 'Quantity', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);

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