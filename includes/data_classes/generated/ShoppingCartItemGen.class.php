<?php
    /**
     * The abstract ShoppingCartItemGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the ShoppingCartItem subclass which
     * extends this ShoppingCartItemGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ShoppingCartItem class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property integer $ShoppingCartId the value for intShoppingCartId (PK)
     * @property integer $ProductId the value for intProductId (PK)
     * @property integer $Quantity the value for intQuantity (Not Null)
     * @property ShoppingCart $ShoppingCart the value for the ShoppingCart object referenced by intShoppingCartId (PK)
     * @property Product $Product the value for the Product object referenced by intProductId (PK)
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class ShoppingCartItemGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK column shopping_cart_item.shopping_cart_id
         * @var integer intShoppingCartId
         *
         */
        protected $intShoppingCartId = null;


        /**
         * Protected internal member variable that stores the original version of the PK column value (if restored)
         * Used by Save() to update a PK column during UPDATE
         * @var integer __intShoppingCartId;
         */
        protected $__intShoppingCartId;

        /**
         * Protected member variable that maps to the database PK column shopping_cart_item.product_id
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
         * Protected member variable that maps to the database column shopping_cart_item.quantity
         * @var integer intQuantity
         *
         */
        protected $intQuantity = null;


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
         * in the database column shopping_cart_item.shopping_cart_id.
         *
         * NOTE: Always use the ShoppingCart property getter to correctly retrieve this ShoppingCart object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var ShoppingCart objShoppingCart
         */
        protected $objShoppingCart;

        /**
         * Protected member variable that contains the object pointed by the reference
         * in the database column shopping_cart_item.product_id.
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
         * Load a ShoppingCartItem from PK Info
         * @param integer $intShoppingCartId
         * @param integer $intProductId
         * @return ShoppingCartItem
         */
        public static function Load($intShoppingCartId, $intProductId) {
            // Use QuerySingle to Perform the Query
            return ShoppingCartItem::QuerySingle(
                QQ::AndCondition(
                QQ::Equal(QQN::ShoppingCartItem()->ShoppingCartId, $intShoppingCartId),
                QQ::Equal(QQN::ShoppingCartItem()->ProductId, $intProductId)
                )
            );
        }

        /**
         * Load all ShoppingCartItems
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ShoppingCartItem[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call ShoppingCartItem::QueryArray to perform the LoadAll query
            try {
                return ShoppingCartItem::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all ShoppingCartItems
         * @return int
         */
        public static function CountAll() {
            // Call ShoppingCartItem::QueryCount to perform the CountAll query
            return ShoppingCartItem::QueryCount(QQ::All());
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
            $objDatabase = ShoppingCartItem::GetDatabase();

            // Create/Build out the QueryBuilder object with ShoppingCartItem-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'shopping_cart_item');
            ShoppingCartItem::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('shopping_cart_item');

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
         * Static Qcodo Query method to query for a single ShoppingCartItem object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ShoppingCartItem the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ShoppingCartItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new ShoppingCartItem object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ShoppingCartItem::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of ShoppingCartItem objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ShoppingCartItem[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ShoppingCartItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ShoppingCartItem::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of ShoppingCartItem objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ShoppingCartItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = ShoppingCartItem::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'shopping_cart_item_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ShoppingCartItem-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                ShoppingCartItem::GetSelectFields($objQueryBuilder);
                ShoppingCartItem::GetFromFields($objQueryBuilder);

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
            return ShoppingCartItem::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this ShoppingCartItem
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'shopping_cart_item';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'shopping_cart_id', $strAliasPrefix . 'shopping_cart_id');
            $objBuilder->AddSelectItem($strTableName, 'product_id', $strAliasPrefix . 'product_id');
            $objBuilder->AddSelectItem($strTableName, 'quantity', $strAliasPrefix . 'quantity');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a ShoppingCartItem from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this ShoppingCartItem::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return ShoppingCartItem
        */
        public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
            // If blank row, return null
            if (!$objDbRow)
                return null;


            // Create a new instance of the ShoppingCartItem object
            $objToReturn = new ShoppingCartItem();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'shopping_cart_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'shopping_cart_id'] : $strAliasPrefix . 'shopping_cart_id';
            $objToReturn->intShoppingCartId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $objToReturn->__intShoppingCartId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'product_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'product_id'] : $strAliasPrefix . 'product_id';
            $objToReturn->intProductId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $objToReturn->__intProductId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'quantity', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'quantity'] : $strAliasPrefix . 'quantity';
            $objToReturn->intQuantity = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'shopping_cart_item__';

            // Check for ShoppingCart Early Binding
            $strAlias = $strAliasPrefix . 'shopping_cart_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objShoppingCart = ShoppingCart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shopping_cart_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

            // Check for Product Early Binding
            $strAlias = $strAliasPrefix . 'product_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objProduct = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            return $objToReturn;
        }

        /**
         * Instantiate an array of ShoppingCartItems from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return ShoppingCartItem[]
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
                    $objItem = ShoppingCartItem::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = ShoppingCartItem::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single ShoppingCartItem object,
         * by ShoppingCartId, ProductId Index(es)
         * @param integer $intShoppingCartId
         * @param integer $intProductId
         * @return ShoppingCartItem
        */
        public static function LoadByShoppingCartIdProductId($intShoppingCartId, $intProductId) {
            return ShoppingCartItem::QuerySingle(
                QQ::AndCondition(
                QQ::Equal(QQN::ShoppingCartItem()->ShoppingCartId, $intShoppingCartId),
                QQ::Equal(QQN::ShoppingCartItem()->ProductId, $intProductId)
                )
            );
        }
            
        /**
         * Load a single ShoppingCartItem object,
         * by ProductId, ShoppingCartId Index(es)
         * @param integer $intProductId
         * @param integer $intShoppingCartId
         * @return ShoppingCartItem
        */
        public static function LoadByProductIdShoppingCartId($intProductId, $intShoppingCartId) {
            return ShoppingCartItem::QuerySingle(
                QQ::AndCondition(
                QQ::Equal(QQN::ShoppingCartItem()->ProductId, $intProductId),
                QQ::Equal(QQN::ShoppingCartItem()->ShoppingCartId, $intShoppingCartId)
                )
            );
        }
            
        /**
         * Load an array of ShoppingCartItem objects,
         * by ShoppingCartId Index(es)
         * @param integer $intShoppingCartId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ShoppingCartItem[]
        */
        public static function LoadArrayByShoppingCartId($intShoppingCartId, $objOptionalClauses = null) {
            // Call ShoppingCartItem::QueryArray to perform the LoadArrayByShoppingCartId query
            try {
                return ShoppingCartItem::QueryArray(
                    QQ::Equal(QQN::ShoppingCartItem()->ShoppingCartId, $intShoppingCartId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ShoppingCartItems
         * by ShoppingCartId Index(es)
         * @param integer $intShoppingCartId
         * @return int
        */
        public static function CountByShoppingCartId($intShoppingCartId) {
            // Call ShoppingCartItem::QueryCount to perform the CountByShoppingCartId query
            return ShoppingCartItem::QueryCount(
                QQ::Equal(QQN::ShoppingCartItem()->ShoppingCartId, $intShoppingCartId)
            );
        }
            
        /**
         * Load an array of ShoppingCartItem objects,
         * by ProductId Index(es)
         * @param integer $intProductId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ShoppingCartItem[]
        */
        public static function LoadArrayByProductId($intProductId, $objOptionalClauses = null) {
            // Call ShoppingCartItem::QueryArray to perform the LoadArrayByProductId query
            try {
                return ShoppingCartItem::QueryArray(
                    QQ::Equal(QQN::ShoppingCartItem()->ProductId, $intProductId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ShoppingCartItems
         * by ProductId Index(es)
         * @param integer $intProductId
         * @return int
        */
        public static function CountByProductId($intProductId) {
            // Call ShoppingCartItem::QueryCount to perform the CountByProductId query
            return ShoppingCartItem::QueryCount(
                QQ::Equal(QQN::ShoppingCartItem()->ProductId, $intProductId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this ShoppingCartItem
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return void
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = ShoppingCartItem::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `shopping_cart_item` (
                            `shopping_cart_id`,
                            `product_id`,
                            `quantity`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->intShoppingCartId) . ',
                            ' . $objDatabase->SqlVariable($this->intProductId) . ',
                            ' . $objDatabase->SqlVariable($this->intQuantity) . '
                        )
                    ');


                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `shopping_cart_item`
                        SET
                            `shopping_cart_id` = ' . $objDatabase->SqlVariable($this->intShoppingCartId) . ',
                            `product_id` = ' . $objDatabase->SqlVariable($this->intProductId) . ',
                            `quantity` = ' . $objDatabase->SqlVariable($this->intQuantity) . '
                        WHERE
                            `shopping_cart_id` = ' . $objDatabase->SqlVariable($this->__intShoppingCartId) . ' AND
                            `product_id` = ' . $objDatabase->SqlVariable($this->__intProductId) . '
                    ');
                }

            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Update __blnRestored and any Non-Identity PK Columns (if applicable)
            $this->__blnRestored = true;
            $this->__intShoppingCartId = $this->intShoppingCartId;
            $this->__intProductId = $this->intProductId;


            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this ShoppingCartItem
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intShoppingCartId)) || (is_null($this->intProductId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this ShoppingCartItem with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = ShoppingCartItem::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shopping_cart_item`
                WHERE
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($this->intShoppingCartId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($this->intProductId) . '');
        }

        /**
         * Delete all ShoppingCartItems
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = ShoppingCartItem::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shopping_cart_item`');
        }

        /**
         * Truncate shopping_cart_item table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = ShoppingCartItem::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `shopping_cart_item`');
        }

        /**
         * Reload this ShoppingCartItem from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved ShoppingCartItem object.');

            // Reload the Object
            $objReloaded = ShoppingCartItem::Load($this->intShoppingCartId, $this->intProductId);

            // Update $this's local variables to match
            $this->ShoppingCartId = $objReloaded->ShoppingCartId;
            $this->__intShoppingCartId = $this->intShoppingCartId;
            $this->ProductId = $objReloaded->ProductId;
            $this->__intProductId = $this->intProductId;
            $this->intQuantity = $objReloaded->intQuantity;
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
                case 'ShoppingCartId':
                    /**
                     * Gets the value for intShoppingCartId (PK)
                     * @return integer
                     */
                    return $this->intShoppingCartId;

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


                ///////////////////
                // Member Objects
                ///////////////////
                case 'ShoppingCart':
                    /**
                     * Gets the value for the ShoppingCart object referenced by intShoppingCartId (PK)
                     * @return ShoppingCart
                     */
                    try {
                        if ((!$this->objShoppingCart) && (!is_null($this->intShoppingCartId)))
                            $this->objShoppingCart = ShoppingCart::Load($this->intShoppingCartId);
                        return $this->objShoppingCart;
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
                case 'ShoppingCartId':
                    /**
                     * Sets the value for intShoppingCartId (PK)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objShoppingCart = null;
                        return ($this->intShoppingCartId = QType::Cast($mixValue, QType::Integer));
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


                ///////////////////
                // Member Objects
                ///////////////////
                case 'ShoppingCart':
                    /**
                     * Sets the value for the ShoppingCart object referenced by intShoppingCartId (PK)
                     * @param ShoppingCart $mixValue
                     * @return ShoppingCart
                     */
                    if (is_null($mixValue)) {
                        $this->intShoppingCartId = null;
                        $this->objShoppingCart = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a ShoppingCart object
                        try {
                            $mixValue = QType::Cast($mixValue, 'ShoppingCart');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED ShoppingCart object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved ShoppingCart for this ShoppingCartItem');

                        // Update Local Member Variables
                        $this->objShoppingCart = $mixValue;
                        $this->intShoppingCartId = $mixValue->Id;

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
                            throw new QCallerException('Unable to set an unsaved Product for this ShoppingCartItem');

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

    class QQNodeShoppingCartItem extends QQNode {
        protected $strTableName = 'shopping_cart_item';
        protected $strPrimaryKey = 'shopping_cart_id';
        protected $strClassName = 'ShoppingCartItem';
        public function __get($strName) {
            switch ($strName) {
                case 'ShoppingCartId':
                    return new QQNode('shopping_cart_id', 'ShoppingCartId', 'integer', $this);
                case 'ShoppingCart':
                    return new QQNodeShoppingCart('shopping_cart_id', 'ShoppingCart', 'integer', $this);
                case 'ProductId':
                    return new QQNode('product_id', 'ProductId', 'integer', $this);
                case 'Product':
                    return new QQNodeProduct('product_id', 'Product', 'integer', $this);
                case 'Quantity':
                    return new QQNode('quantity', 'Quantity', 'integer', $this);

                case '_PrimaryKeyNode':
                    return new QQNodeShoppingCart('shopping_cart_id', 'ShoppingCartId', 'integer', $this);
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

    class QQReverseReferenceNodeShoppingCartItem extends QQReverseReferenceNode {
        protected $strTableName = 'shopping_cart_item';
        protected $strPrimaryKey = 'shopping_cart_id';
        protected $strClassName = 'ShoppingCartItem';
        public function __get($strName) {
            switch ($strName) {
                case 'ShoppingCartId':
                    return new QQNode('shopping_cart_id', 'ShoppingCartId', 'integer', $this);
                case 'ShoppingCart':
                    return new QQNodeShoppingCart('shopping_cart_id', 'ShoppingCart', 'integer', $this);
                case 'ProductId':
                    return new QQNode('product_id', 'ProductId', 'integer', $this);
                case 'Product':
                    return new QQNodeProduct('product_id', 'Product', 'integer', $this);
                case 'Quantity':
                    return new QQNode('quantity', 'Quantity', 'integer', $this);

                case '_PrimaryKeyNode':
                    return new QQNodeShoppingCart('shopping_cart_id', 'ShoppingCartId', 'integer', $this);
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