<?php
    /**
     * The abstract ShoppingCartGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the ShoppingCart subclass which
     * extends this ShoppingCartGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ShoppingCart class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property-read string $CreationDate the value for strCreationDate (Read-Only Timestamp)
     * @property-read string $LastModification the value for strLastModification (Read-Only Timestamp)
     * @property integer $AccountId the value for intAccountId (Not Null)
     * @property Account $Account the value for the Account object referenced by intAccountId (Not Null)
     * @property-read ShoppingCartItem $_ShoppingCartItem the value for the private _objShoppingCartItem (Read-Only) if set due to an expansion on the shopping_cart_item.shopping_cart_id reverse relationship
     * @property-read ShoppingCartItem[] $_ShoppingCartItemArray the value for the private _objShoppingCartItemArray (Read-Only) if set due to an ExpandAsArray on the shopping_cart_item.shopping_cart_id reverse relationship
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class ShoppingCartGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column shopping_cart.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column shopping_cart.creation_date
         * @var string strCreationDate
         *
         */
        protected $strCreationDate = null;


        /**
         * Protected member variable that maps to the database column shopping_cart.last_modification
         * @var string strLastModification
         *
         */
        protected $strLastModification = null;


        /**
         * Protected member variable that maps to the database column shopping_cart.account_id
         * @var integer intAccountId
         *
         */
        protected $intAccountId = null;


        /**
         * Private member variable that stores a reference to a single ShoppingCartItem object
         * (of type ShoppingCartItem), if this ShoppingCart object was restored with
         * an expansion on the shopping_cart_item association table.
         * @var ShoppingCartItem _objShoppingCartItem;
         */
        private $_objShoppingCartItem;

        /**
         * Private member variable that stores a reference to an array of ShoppingCartItem objects
         * (of type ShoppingCartItem[]), if this ShoppingCart object was restored with
         * an ExpandAsArray on the shopping_cart_item association table.
         * @var ShoppingCartItem[] _objShoppingCartItemArray;
         */
        private $_objShoppingCartItemArray = array();

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
         * in the database column shopping_cart.account_id.
         *
         * NOTE: Always use the Account property getter to correctly retrieve this Account object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Account objAccount
         */
        protected $objAccount;



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
         * Load a ShoppingCart from PK Info
         * @param integer $intId
         * @return ShoppingCart
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return ShoppingCart::QuerySingle(
                QQ::Equal(QQN::ShoppingCart()->Id, $intId)
            );
        }

        /**
         * Load all ShoppingCarts
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ShoppingCart[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call ShoppingCart::QueryArray to perform the LoadAll query
            try {
                return ShoppingCart::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all ShoppingCarts
         * @return int
         */
        public static function CountAll() {
            // Call ShoppingCart::QueryCount to perform the CountAll query
            return ShoppingCart::QueryCount(QQ::All());
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
            $objDatabase = ShoppingCart::GetDatabase();

            // Create/Build out the QueryBuilder object with ShoppingCart-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'shopping_cart');
            ShoppingCart::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('shopping_cart');

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
         * Static Qcodo Query method to query for a single ShoppingCart object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ShoppingCart the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ShoppingCart::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new ShoppingCart object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ShoppingCart::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of ShoppingCart objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ShoppingCart[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ShoppingCart::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ShoppingCart::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of ShoppingCart objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ShoppingCart::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = ShoppingCart::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'shopping_cart_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ShoppingCart-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                ShoppingCart::GetSelectFields($objQueryBuilder);
                ShoppingCart::GetFromFields($objQueryBuilder);

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
            return ShoppingCart::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this ShoppingCart
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'shopping_cart';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'creation_date', $strAliasPrefix . 'creation_date');
            $objBuilder->AddSelectItem($strTableName, 'last_modification', $strAliasPrefix . 'last_modification');
            $objBuilder->AddSelectItem($strTableName, 'account_id', $strAliasPrefix . 'account_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a ShoppingCart from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this ShoppingCart::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return ShoppingCart
        */
        public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
            // If blank row, return null
            if (!$objDbRow)
                return null;

            // See if we're doing an array expansion on the previous item
            $strAlias = $strAliasPrefix . 'id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
                ($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

                // We are.  Now, prepare to check for ExpandAsArray clauses
                $blnExpandedViaArray = false;
                if (!$strAliasPrefix)
                    $strAliasPrefix = 'shopping_cart__';


                $strAlias = $strAliasPrefix . 'shoppingcartitem__shopping_cart_id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objShoppingCartItemArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objShoppingCartItemArray[$intPreviousChildItemCount - 1];
                        $objChildItem = ShoppingCartItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcartitem__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objShoppingCartItemArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objShoppingCartItemArray[] = ShoppingCartItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcartitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'shopping_cart__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the ShoppingCart object
            $objToReturn = new ShoppingCart();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'creation_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'creation_date'] : $strAliasPrefix . 'creation_date';
            $objToReturn->strCreationDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'last_modification', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'last_modification'] : $strAliasPrefix . 'last_modification';
            $objToReturn->strLastModification = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'account_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'account_id'] : $strAliasPrefix . 'account_id';
            $objToReturn->intAccountId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'shopping_cart__';

            // Check for Account Early Binding
            $strAlias = $strAliasPrefix . 'account_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objAccount = Account::InstantiateDbRow($objDbRow, $strAliasPrefix . 'account_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            // Check for ShoppingCartItem Virtual Binding
            $strAlias = $strAliasPrefix . 'shoppingcartitem__shopping_cart_id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objShoppingCartItemArray[] = ShoppingCartItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcartitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objShoppingCartItem = ShoppingCartItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcartitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }

        /**
         * Instantiate an array of ShoppingCarts from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return ShoppingCart[]
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
                    $objItem = ShoppingCart::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = ShoppingCart::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single ShoppingCart object,
         * by Id Index(es)
         * @param integer $intId
         * @return ShoppingCart
        */
        public static function LoadById($intId) {
            return ShoppingCart::QuerySingle(
                QQ::Equal(QQN::ShoppingCart()->Id, $intId)
            );
        }
            
        /**
         * Load an array of ShoppingCart objects,
         * by AccountId Index(es)
         * @param integer $intAccountId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ShoppingCart[]
        */
        public static function LoadArrayByAccountId($intAccountId, $objOptionalClauses = null) {
            // Call ShoppingCart::QueryArray to perform the LoadArrayByAccountId query
            try {
                return ShoppingCart::QueryArray(
                    QQ::Equal(QQN::ShoppingCart()->AccountId, $intAccountId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ShoppingCarts
         * by AccountId Index(es)
         * @param integer $intAccountId
         * @return int
        */
        public static function CountByAccountId($intAccountId) {
            // Call ShoppingCart::QueryCount to perform the CountByAccountId query
            return ShoppingCart::QueryCount(
                QQ::Equal(QQN::ShoppingCart()->AccountId, $intAccountId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this ShoppingCart
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = ShoppingCart::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `shopping_cart` (
                            `account_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->intAccountId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('shopping_cart', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `creation_date`
                            FROM
                                `shopping_cart`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strCreationDate)
                            throw new QOptimisticLockingException('ShoppingCart');
                    }
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `last_modification`
                            FROM
                                `shopping_cart`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strLastModification)
                            throw new QOptimisticLockingException('ShoppingCart');
                    }

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `shopping_cart`
                        SET
                            `account_id` = ' . $objDatabase->SqlVariable($this->intAccountId) . '
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
                    `shopping_cart`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
                        
            $objRow = $objResult->FetchArray();
            $this->strCreationDate = $objRow[0];
            // Update Local Timestamp
            $objResult = $objDatabase->Query('
                SELECT
                    `last_modification`
                FROM
                    `shopping_cart`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
                        
            $objRow = $objResult->FetchArray();
            $this->strLastModification = $objRow[0];

            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this ShoppingCart
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this ShoppingCart with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = ShoppingCart::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shopping_cart`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all ShoppingCarts
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = ShoppingCart::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shopping_cart`');
        }

        /**
         * Truncate shopping_cart table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = ShoppingCart::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `shopping_cart`');
        }

        /**
         * Reload this ShoppingCart from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved ShoppingCart object.');

            // Reload the Object
            $objReloaded = ShoppingCart::Load($this->intId);

            // Update $this's local variables to match
            $this->strCreationDate = $objReloaded->strCreationDate;
            $this->strLastModification = $objReloaded->strLastModification;
            $this->AccountId = $objReloaded->AccountId;
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

                case 'CreationDate':
                    /**
                     * Gets the value for strCreationDate (Read-Only Timestamp)
                     * @return string
                     */
                    return $this->strCreationDate;

                case 'LastModification':
                    /**
                     * Gets the value for strLastModification (Read-Only Timestamp)
                     * @return string
                     */
                    return $this->strLastModification;

                case 'AccountId':
                    /**
                     * Gets the value for intAccountId (Not Null)
                     * @return integer
                     */
                    return $this->intAccountId;


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Account':
                    /**
                     * Gets the value for the Account object referenced by intAccountId (Not Null)
                     * @return Account
                     */
                    try {
                        if ((!$this->objAccount) && (!is_null($this->intAccountId)))
                            $this->objAccount = Account::Load($this->intAccountId);
                        return $this->objAccount;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_ShoppingCartItem':
                    /**
                     * Gets the value for the private _objShoppingCartItem (Read-Only)
                     * if set due to an expansion on the shopping_cart_item.shopping_cart_id reverse relationship
                     * @return ShoppingCartItem
                     */
                    return $this->_objShoppingCartItem;

                case '_ShoppingCartItemArray':
                    /**
                     * Gets the value for the private _objShoppingCartItemArray (Read-Only)
                     * if set due to an ExpandAsArray on the shopping_cart_item.shopping_cart_id reverse relationship
                     * @return ShoppingCartItem[]
                     */
                    return (array) $this->_objShoppingCartItemArray;


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
                case 'AccountId':
                    /**
                     * Sets the value for intAccountId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objAccount = null;
                        return ($this->intAccountId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Account':
                    /**
                     * Sets the value for the Account object referenced by intAccountId (Not Null)
                     * @param Account $mixValue
                     * @return Account
                     */
                    if (is_null($mixValue)) {
                        $this->intAccountId = null;
                        $this->objAccount = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a Account object
                        try {
                            $mixValue = QType::Cast($mixValue, 'Account');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED Account object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved Account for this ShoppingCart');

                        // Update Local Member Variables
                        $this->objAccount = $mixValue;
                        $this->intAccountId = $mixValue->Id;

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

            
        
        // Related Objects' Methods for ShoppingCartItem
        //-------------------------------------------------------------------

        /**
         * Gets all associated ShoppingCartItems as an array of ShoppingCartItem objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ShoppingCartItem[]
        */ 
        public function GetShoppingCartItemArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return ShoppingCartItem::LoadArrayByShoppingCartId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated ShoppingCartItems
         * @return int
        */ 
        public function CountShoppingCartItems() {
            if ((is_null($this->intId)))
                return 0;

            return ShoppingCartItem::CountByShoppingCartId($this->intId);
        }

        /**
         * Associates a ShoppingCartItem
         * @param ShoppingCartItem $objShoppingCartItem
         * @return void
        */ 
        public function AssociateShoppingCartItem(ShoppingCartItem $objShoppingCartItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateShoppingCartItem on this unsaved ShoppingCart.');
            if ((is_null($objShoppingCartItem->ShoppingCartId)) || (is_null($objShoppingCartItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateShoppingCartItem on this ShoppingCart with an unsaved ShoppingCartItem.');

            // Get the Database Object for this Class
            $objDatabase = ShoppingCart::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `shopping_cart_item`
                SET
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ShoppingCartId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ProductId) . '
            ');
        }

        /**
         * Unassociates a ShoppingCartItem
         * @param ShoppingCartItem $objShoppingCartItem
         * @return void
        */ 
        public function UnassociateShoppingCartItem(ShoppingCartItem $objShoppingCartItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this unsaved ShoppingCart.');
            if ((is_null($objShoppingCartItem->ShoppingCartId)) || (is_null($objShoppingCartItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this ShoppingCart with an unsaved ShoppingCartItem.');

            // Get the Database Object for this Class
            $objDatabase = ShoppingCart::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `shopping_cart_item`
                SET
                    `shopping_cart_id` = null
                WHERE
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ShoppingCartId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ProductId) . ' AND
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all ShoppingCartItems
         * @return void
        */ 
        public function UnassociateAllShoppingCartItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this unsaved ShoppingCart.');

            // Get the Database Object for this Class
            $objDatabase = ShoppingCart::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `shopping_cart_item`
                SET
                    `shopping_cart_id` = null
                WHERE
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated ShoppingCartItem
         * @param ShoppingCartItem $objShoppingCartItem
         * @return void
        */ 
        public function DeleteAssociatedShoppingCartItem(ShoppingCartItem $objShoppingCartItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this unsaved ShoppingCart.');
            if ((is_null($objShoppingCartItem->ShoppingCartId)) || (is_null($objShoppingCartItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this ShoppingCart with an unsaved ShoppingCartItem.');

            // Get the Database Object for this Class
            $objDatabase = ShoppingCart::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shopping_cart_item`
                WHERE
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ShoppingCartId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ProductId) . ' AND
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated ShoppingCartItems
         * @return void
        */ 
        public function DeleteAllShoppingCartItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this unsaved ShoppingCart.');

            // Get the Database Object for this Class
            $objDatabase = ShoppingCart::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shopping_cart_item`
                WHERE
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }




    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeShoppingCart extends QQNode {
        protected $strTableName = 'shopping_cart';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ShoppingCart';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'LastModification':
                    return new QQNode('last_modification', 'LastModification', 'string', $this);
                case 'AccountId':
                    return new QQNode('account_id', 'AccountId', 'integer', $this);
                case 'Account':
                    return new QQNodeAccount('account_id', 'Account', 'integer', $this);
                case 'ShoppingCartItem':
                    return new QQReverseReferenceNodeShoppingCartItem($this, 'shoppingcartitem', 'reverse_reference', 'shopping_cart_id');

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

    class QQReverseReferenceNodeShoppingCart extends QQReverseReferenceNode {
        protected $strTableName = 'shopping_cart';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ShoppingCart';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'LastModification':
                    return new QQNode('last_modification', 'LastModification', 'string', $this);
                case 'AccountId':
                    return new QQNode('account_id', 'AccountId', 'integer', $this);
                case 'Account':
                    return new QQNodeAccount('account_id', 'Account', 'integer', $this);
                case 'ShoppingCartItem':
                    return new QQReverseReferenceNodeShoppingCartItem($this, 'shoppingcartitem', 'reverse_reference', 'shopping_cart_id');

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