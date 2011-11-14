<?php
    /**
     * The abstract AccountGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the Account subclass which
     * extends this AccountGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the Account class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property-read string $RegistrationDate the value for strRegistrationDate (Read-Only Timestamp)
     * @property string $Username the value for strUsername (Unique)
     * @property string $Password the value for strPassword (Not Null)
     * @property string $Notes the value for strNotes 
     * @property-read string $LastLogin the value for strLastLogin (Read-Only Timestamp)
     * @property integer $LoginCount the value for intLoginCount 
     * @property boolean $Online the value for blnOnline (Not Null)
     * @property boolean $OnetimePassword the value for blnOnetimePassword (Not Null)
     * @property boolean $ValidPassword the value for blnValidPassword (Not Null)
     * @property integer $TypeId the value for intTypeId (Not Null)
     * @property integer $StatusId the value for intStatusId (Not Null)
     * @property integer $PersonId the value for intPersonId (Unique)
     * @property Person $Person the value for the Person object referenced by intPersonId (Unique)
     * @property-read Order $_Order the value for the private _objOrder (Read-Only) if set due to an expansion on the order.account_id reverse relationship
     * @property-read Order[] $_OrderArray the value for the private _objOrderArray (Read-Only) if set due to an ExpandAsArray on the order.account_id reverse relationship
     * @property-read ShoppingCart $_ShoppingCart the value for the private _objShoppingCart (Read-Only) if set due to an expansion on the shopping_cart.account_id reverse relationship
     * @property-read ShoppingCart[] $_ShoppingCartArray the value for the private _objShoppingCartArray (Read-Only) if set due to an ExpandAsArray on the shopping_cart.account_id reverse relationship
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class AccountGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column account.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column account.registration_date
         * @var string strRegistrationDate
         *
         */
        protected $strRegistrationDate = null;


        /**
         * Protected member variable that maps to the database column account.username
         * @var string strUsername
         *
         */
        protected $strUsername = null;
        const UsernameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column account.password
         * @var string strPassword
         *
         */
        protected $strPassword = null;
        const PasswordMaxLength = 128;


        /**
         * Protected member variable that maps to the database column account.notes
         * @var string strNotes
         *
         */
        protected $strNotes = null;


        /**
         * Protected member variable that maps to the database column account.last_login
         * @var string strLastLogin
         *
         */
        protected $strLastLogin = null;


        /**
         * Protected member variable that maps to the database column account.login_count
         * @var integer intLoginCount
         *
         */
        protected $intLoginCount = null;


        /**
         * Protected member variable that maps to the database column account.online
         * @var boolean blnOnline
         *
         */
        protected $blnOnline = null;


        /**
         * Protected member variable that maps to the database column account.onetime_password
         * @var boolean blnOnetimePassword
         *
         */
        protected $blnOnetimePassword = null;


        /**
         * Protected member variable that maps to the database column account.valid_password
         * @var boolean blnValidPassword
         *
         */
        protected $blnValidPassword = null;


        /**
         * Protected member variable that maps to the database column account.type_id
         * @var integer intTypeId
         *
         */
        protected $intTypeId = null;


        /**
         * Protected member variable that maps to the database column account.status_id
         * @var integer intStatusId
         *
         */
        protected $intStatusId = null;


        /**
         * Protected member variable that maps to the database column account.person_id
         * @var integer intPersonId
         *
         */
        protected $intPersonId = null;


        /**
         * Private member variable that stores a reference to a single Order object
         * (of type Order), if this Account object was restored with
         * an expansion on the order association table.
         * @var Order _objOrder;
         */
        private $_objOrder;

        /**
         * Private member variable that stores a reference to an array of Order objects
         * (of type Order[]), if this Account object was restored with
         * an ExpandAsArray on the order association table.
         * @var Order[] _objOrderArray;
         */
        private $_objOrderArray = array();

        /**
         * Private member variable that stores a reference to a single ShoppingCart object
         * (of type ShoppingCart), if this Account object was restored with
         * an expansion on the shopping_cart association table.
         * @var ShoppingCart _objShoppingCart;
         */
        private $_objShoppingCart;

        /**
         * Private member variable that stores a reference to an array of ShoppingCart objects
         * (of type ShoppingCart[]), if this Account object was restored with
         * an ExpandAsArray on the shopping_cart association table.
         * @var ShoppingCart[] _objShoppingCartArray;
         */
        private $_objShoppingCartArray = array();

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
         * in the database column account.person_id.
         *
         * NOTE: Always use the Person property getter to correctly retrieve this Person object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Person objPerson
         */
        protected $objPerson;



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
         * Load a Account from PK Info
         * @param integer $intId
         * @return Account
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return Account::QuerySingle(
                QQ::Equal(QQN::Account()->Id, $intId)
            );
        }

        /**
         * Load all Accounts
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Account[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call Account::QueryArray to perform the LoadAll query
            try {
                return Account::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all Accounts
         * @return int
         */
        public static function CountAll() {
            // Call Account::QueryCount to perform the CountAll query
            return Account::QueryCount(QQ::All());
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
            $objDatabase = Account::GetDatabase();

            // Create/Build out the QueryBuilder object with Account-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'account');
            Account::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('account');

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
         * Static Qcodo Query method to query for a single Account object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Account the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new Account object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Account::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of Account objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Account[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Account::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of Account objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Account::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = Account::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'account_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Account-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                Account::GetSelectFields($objQueryBuilder);
                Account::GetFromFields($objQueryBuilder);

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
            return Account::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this Account
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'account';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'registration_date', $strAliasPrefix . 'registration_date');
            $objBuilder->AddSelectItem($strTableName, 'username', $strAliasPrefix . 'username');
            $objBuilder->AddSelectItem($strTableName, 'password', $strAliasPrefix . 'password');
            $objBuilder->AddSelectItem($strTableName, 'notes', $strAliasPrefix . 'notes');
            $objBuilder->AddSelectItem($strTableName, 'last_login', $strAliasPrefix . 'last_login');
            $objBuilder->AddSelectItem($strTableName, 'login_count', $strAliasPrefix . 'login_count');
            $objBuilder->AddSelectItem($strTableName, 'online', $strAliasPrefix . 'online');
            $objBuilder->AddSelectItem($strTableName, 'onetime_password', $strAliasPrefix . 'onetime_password');
            $objBuilder->AddSelectItem($strTableName, 'valid_password', $strAliasPrefix . 'valid_password');
            $objBuilder->AddSelectItem($strTableName, 'type_id', $strAliasPrefix . 'type_id');
            $objBuilder->AddSelectItem($strTableName, 'status_id', $strAliasPrefix . 'status_id');
            $objBuilder->AddSelectItem($strTableName, 'person_id', $strAliasPrefix . 'person_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a Account from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this Account::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return Account
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
                    $strAliasPrefix = 'account__';


                $strAlias = $strAliasPrefix . 'order__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objOrderArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objOrderArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Order::InstantiateDbRow($objDbRow, $strAliasPrefix . 'order__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objOrderArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objOrderArray[] = Order::InstantiateDbRow($objDbRow, $strAliasPrefix . 'order__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'shoppingcart__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objShoppingCartArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objShoppingCartArray[$intPreviousChildItemCount - 1];
                        $objChildItem = ShoppingCart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcart__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objShoppingCartArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objShoppingCartArray[] = ShoppingCart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcart__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'account__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the Account object
            $objToReturn = new Account();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'registration_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'registration_date'] : $strAliasPrefix . 'registration_date';
            $objToReturn->strRegistrationDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'username', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'username'] : $strAliasPrefix . 'username';
            $objToReturn->strUsername = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'password', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'password'] : $strAliasPrefix . 'password';
            $objToReturn->strPassword = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'notes', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'notes'] : $strAliasPrefix . 'notes';
            $objToReturn->strNotes = $objDbRow->GetColumn($strAliasName, 'Blob');
            $strAliasName = array_key_exists($strAliasPrefix . 'last_login', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'last_login'] : $strAliasPrefix . 'last_login';
            $objToReturn->strLastLogin = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'login_count', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'login_count'] : $strAliasPrefix . 'login_count';
            $objToReturn->intLoginCount = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'online', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'online'] : $strAliasPrefix . 'online';
            $objToReturn->blnOnline = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'onetime_password', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'onetime_password'] : $strAliasPrefix . 'onetime_password';
            $objToReturn->blnOnetimePassword = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'valid_password', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'valid_password'] : $strAliasPrefix . 'valid_password';
            $objToReturn->blnValidPassword = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'type_id'] : $strAliasPrefix . 'type_id';
            $objToReturn->intTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'status_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'status_id'] : $strAliasPrefix . 'status_id';
            $objToReturn->intStatusId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'person_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'person_id'] : $strAliasPrefix . 'person_id';
            $objToReturn->intPersonId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'account__';

            // Check for Person Early Binding
            $strAlias = $strAliasPrefix . 'person_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objPerson = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'person_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            // Check for Order Virtual Binding
            $strAlias = $strAliasPrefix . 'order__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objOrderArray[] = Order::InstantiateDbRow($objDbRow, $strAliasPrefix . 'order__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objOrder = Order::InstantiateDbRow($objDbRow, $strAliasPrefix . 'order__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for ShoppingCart Virtual Binding
            $strAlias = $strAliasPrefix . 'shoppingcart__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objShoppingCartArray[] = ShoppingCart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcart__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objShoppingCart = ShoppingCart::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcart__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }

        /**
         * Instantiate an array of Accounts from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return Account[]
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
                    $objItem = Account::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = Account::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single Account object,
         * by Id Index(es)
         * @param integer $intId
         * @return Account
        */
        public static function LoadById($intId) {
            return Account::QuerySingle(
                QQ::Equal(QQN::Account()->Id, $intId)
            );
        }
            
        /**
         * Load a single Account object,
         * by Username Index(es)
         * @param string $strUsername
         * @return Account
        */
        public static function LoadByUsername($strUsername) {
            return Account::QuerySingle(
                QQ::Equal(QQN::Account()->Username, $strUsername)
            );
        }
            
        /**
         * Load a single Account object,
         * by PersonId Index(es)
         * @param integer $intPersonId
         * @return Account
        */
        public static function LoadByPersonId($intPersonId) {
            return Account::QuerySingle(
                QQ::Equal(QQN::Account()->PersonId, $intPersonId)
            );
        }
            
        /**
         * Load an array of Account objects,
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Account[]
        */
        public static function LoadArrayByTypeId($intTypeId, $objOptionalClauses = null) {
            // Call Account::QueryArray to perform the LoadArrayByTypeId query
            try {
                return Account::QueryArray(
                    QQ::Equal(QQN::Account()->TypeId, $intTypeId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Accounts
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @return int
        */
        public static function CountByTypeId($intTypeId) {
            // Call Account::QueryCount to perform the CountByTypeId query
            return Account::QueryCount(
                QQ::Equal(QQN::Account()->TypeId, $intTypeId)
            );
        }
            
        /**
         * Load an array of Account objects,
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Account[]
        */
        public static function LoadArrayByStatusId($intStatusId, $objOptionalClauses = null) {
            // Call Account::QueryArray to perform the LoadArrayByStatusId query
            try {
                return Account::QueryArray(
                    QQ::Equal(QQN::Account()->StatusId, $intStatusId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Accounts
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @return int
        */
        public static function CountByStatusId($intStatusId) {
            // Call Account::QueryCount to perform the CountByStatusId query
            return Account::QueryCount(
                QQ::Equal(QQN::Account()->StatusId, $intStatusId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this Account
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `account` (
                            `username`,
                            `password`,
                            `notes`,
                            `login_count`,
                            `online`,
                            `onetime_password`,
                            `valid_password`,
                            `type_id`,
                            `status_id`,
                            `person_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strUsername) . ',
                            ' . $objDatabase->SqlVariable($this->strPassword) . ',
                            ' . $objDatabase->SqlVariable($this->strNotes) . ',
                            ' . $objDatabase->SqlVariable($this->intLoginCount) . ',
                            ' . $objDatabase->SqlVariable($this->blnOnline) . ',
                            ' . $objDatabase->SqlVariable($this->blnOnetimePassword) . ',
                            ' . $objDatabase->SqlVariable($this->blnValidPassword) . ',
                            ' . $objDatabase->SqlVariable($this->intTypeId) . ',
                            ' . $objDatabase->SqlVariable($this->intStatusId) . ',
                            ' . $objDatabase->SqlVariable($this->intPersonId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('account', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `registration_date`
                            FROM
                                `account`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strRegistrationDate)
                            throw new QOptimisticLockingException('Account');
                    }
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `last_login`
                            FROM
                                `account`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strLastLogin)
                            throw new QOptimisticLockingException('Account');
                    }

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `account`
                        SET
                            `username` = ' . $objDatabase->SqlVariable($this->strUsername) . ',
                            `password` = ' . $objDatabase->SqlVariable($this->strPassword) . ',
                            `notes` = ' . $objDatabase->SqlVariable($this->strNotes) . ',
                            `login_count` = ' . $objDatabase->SqlVariable($this->intLoginCount) . ',
                            `online` = ' . $objDatabase->SqlVariable($this->blnOnline) . ',
                            `onetime_password` = ' . $objDatabase->SqlVariable($this->blnOnetimePassword) . ',
                            `valid_password` = ' . $objDatabase->SqlVariable($this->blnValidPassword) . ',
                            `type_id` = ' . $objDatabase->SqlVariable($this->intTypeId) . ',
                            `status_id` = ' . $objDatabase->SqlVariable($this->intStatusId) . ',
                            `person_id` = ' . $objDatabase->SqlVariable($this->intPersonId) . '
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
                    `registration_date`
                FROM
                    `account`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
                        
            $objRow = $objResult->FetchArray();
            $this->strRegistrationDate = $objRow[0];
            // Update Local Timestamp
            $objResult = $objDatabase->Query('
                SELECT
                    `last_login`
                FROM
                    `account`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
                        
            $objRow = $objResult->FetchArray();
            $this->strLastLogin = $objRow[0];

            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this Account
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this Account with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `account`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all Accounts
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `account`');
        }

        /**
         * Truncate account table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `account`');
        }

        /**
         * Reload this Account from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved Account object.');

            // Reload the Object
            $objReloaded = Account::Load($this->intId);

            // Update $this's local variables to match
            $this->strRegistrationDate = $objReloaded->strRegistrationDate;
            $this->strUsername = $objReloaded->strUsername;
            $this->strPassword = $objReloaded->strPassword;
            $this->strNotes = $objReloaded->strNotes;
            $this->strLastLogin = $objReloaded->strLastLogin;
            $this->intLoginCount = $objReloaded->intLoginCount;
            $this->blnOnline = $objReloaded->blnOnline;
            $this->blnOnetimePassword = $objReloaded->blnOnetimePassword;
            $this->blnValidPassword = $objReloaded->blnValidPassword;
            $this->TypeId = $objReloaded->TypeId;
            $this->StatusId = $objReloaded->StatusId;
            $this->PersonId = $objReloaded->PersonId;
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

                case 'RegistrationDate':
                    /**
                     * Gets the value for strRegistrationDate (Read-Only Timestamp)
                     * @return string
                     */
                    return $this->strRegistrationDate;

                case 'Username':
                    /**
                     * Gets the value for strUsername (Unique)
                     * @return string
                     */
                    return $this->strUsername;

                case 'Password':
                    /**
                     * Gets the value for strPassword (Not Null)
                     * @return string
                     */
                    return $this->strPassword;

                case 'Notes':
                    /**
                     * Gets the value for strNotes 
                     * @return string
                     */
                    return $this->strNotes;

                case 'LastLogin':
                    /**
                     * Gets the value for strLastLogin (Read-Only Timestamp)
                     * @return string
                     */
                    return $this->strLastLogin;

                case 'LoginCount':
                    /**
                     * Gets the value for intLoginCount 
                     * @return integer
                     */
                    return $this->intLoginCount;

                case 'Online':
                    /**
                     * Gets the value for blnOnline (Not Null)
                     * @return boolean
                     */
                    return $this->blnOnline;

                case 'OnetimePassword':
                    /**
                     * Gets the value for blnOnetimePassword (Not Null)
                     * @return boolean
                     */
                    return $this->blnOnetimePassword;

                case 'ValidPassword':
                    /**
                     * Gets the value for blnValidPassword (Not Null)
                     * @return boolean
                     */
                    return $this->blnValidPassword;

                case 'TypeId':
                    /**
                     * Gets the value for intTypeId (Not Null)
                     * @return integer
                     */
                    return $this->intTypeId;

                case 'StatusId':
                    /**
                     * Gets the value for intStatusId (Not Null)
                     * @return integer
                     */
                    return $this->intStatusId;

                case 'PersonId':
                    /**
                     * Gets the value for intPersonId (Unique)
                     * @return integer
                     */
                    return $this->intPersonId;


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Person':
                    /**
                     * Gets the value for the Person object referenced by intPersonId (Unique)
                     * @return Person
                     */
                    try {
                        if ((!$this->objPerson) && (!is_null($this->intPersonId)))
                            $this->objPerson = Person::Load($this->intPersonId);
                        return $this->objPerson;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_Order':
                    /**
                     * Gets the value for the private _objOrder (Read-Only)
                     * if set due to an expansion on the order.account_id reverse relationship
                     * @return Order
                     */
                    return $this->_objOrder;

                case '_OrderArray':
                    /**
                     * Gets the value for the private _objOrderArray (Read-Only)
                     * if set due to an ExpandAsArray on the order.account_id reverse relationship
                     * @return Order[]
                     */
                    return (array) $this->_objOrderArray;

                case '_ShoppingCart':
                    /**
                     * Gets the value for the private _objShoppingCart (Read-Only)
                     * if set due to an expansion on the shopping_cart.account_id reverse relationship
                     * @return ShoppingCart
                     */
                    return $this->_objShoppingCart;

                case '_ShoppingCartArray':
                    /**
                     * Gets the value for the private _objShoppingCartArray (Read-Only)
                     * if set due to an ExpandAsArray on the shopping_cart.account_id reverse relationship
                     * @return ShoppingCart[]
                     */
                    return (array) $this->_objShoppingCartArray;


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
                case 'Username':
                    /**
                     * Sets the value for strUsername (Unique)
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strUsername = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Password':
                    /**
                     * Sets the value for strPassword (Not Null)
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strPassword = QType::Cast($mixValue, QType::String));
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

                case 'LoginCount':
                    /**
                     * Sets the value for intLoginCount 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intLoginCount = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Online':
                    /**
                     * Sets the value for blnOnline (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnOnline = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'OnetimePassword':
                    /**
                     * Sets the value for blnOnetimePassword (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnOnetimePassword = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ValidPassword':
                    /**
                     * Sets the value for blnValidPassword (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnValidPassword = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'TypeId':
                    /**
                     * Sets the value for intTypeId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intTypeId = QType::Cast($mixValue, QType::Integer));
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

                case 'PersonId':
                    /**
                     * Sets the value for intPersonId (Unique)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objPerson = null;
                        return ($this->intPersonId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Person':
                    /**
                     * Sets the value for the Person object referenced by intPersonId (Unique)
                     * @param Person $mixValue
                     * @return Person
                     */
                    if (is_null($mixValue)) {
                        $this->intPersonId = null;
                        $this->objPerson = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a Person object
                        try {
                            $mixValue = QType::Cast($mixValue, 'Person');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED Person object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved Person for this Account');

                        // Update Local Member Variables
                        $this->objPerson = $mixValue;
                        $this->intPersonId = $mixValue->Id;

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

            
        
        // Related Objects' Methods for Order
        //-------------------------------------------------------------------

        /**
         * Gets all associated Orders as an array of Order objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Order[]
        */ 
        public function GetOrderArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Order::LoadArrayByAccountId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated Orders
         * @return int
        */ 
        public function CountOrders() {
            if ((is_null($this->intId)))
                return 0;

            return Order::CountByAccountId($this->intId);
        }

        /**
         * Associates a Order
         * @param Order $objOrder
         * @return void
        */ 
        public function AssociateOrder(Order $objOrder) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrder on this unsaved Account.');
            if ((is_null($objOrder->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrder on this Account with an unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order`
                SET
                    `account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrder->Id) . '
            ');
        }

        /**
         * Unassociates a Order
         * @param Order $objOrder
         * @return void
        */ 
        public function UnassociateOrder(Order $objOrder) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved Account.');
            if ((is_null($objOrder->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this Account with an unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order`
                SET
                    `account_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrder->Id) . ' AND
                    `account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all Orders
         * @return void
        */ 
        public function UnassociateAllOrders() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved Account.');

            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order`
                SET
                    `account_id` = null
                WHERE
                    `account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated Order
         * @param Order $objOrder
         * @return void
        */ 
        public function DeleteAssociatedOrder(Order $objOrder) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved Account.');
            if ((is_null($objOrder->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this Account with an unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrder->Id) . ' AND
                    `account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated Orders
         * @return void
        */ 
        public function DeleteAllOrders() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved Account.');

            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order`
                WHERE
                    `account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for ShoppingCart
        //-------------------------------------------------------------------

        /**
         * Gets all associated ShoppingCarts as an array of ShoppingCart objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ShoppingCart[]
        */ 
        public function GetShoppingCartArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return ShoppingCart::LoadArrayByAccountId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated ShoppingCarts
         * @return int
        */ 
        public function CountShoppingCarts() {
            if ((is_null($this->intId)))
                return 0;

            return ShoppingCart::CountByAccountId($this->intId);
        }

        /**
         * Associates a ShoppingCart
         * @param ShoppingCart $objShoppingCart
         * @return void
        */ 
        public function AssociateShoppingCart(ShoppingCart $objShoppingCart) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateShoppingCart on this unsaved Account.');
            if ((is_null($objShoppingCart->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateShoppingCart on this Account with an unsaved ShoppingCart.');

            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `shopping_cart`
                SET
                    `account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objShoppingCart->Id) . '
            ');
        }

        /**
         * Unassociates a ShoppingCart
         * @param ShoppingCart $objShoppingCart
         * @return void
        */ 
        public function UnassociateShoppingCart(ShoppingCart $objShoppingCart) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCart on this unsaved Account.');
            if ((is_null($objShoppingCart->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCart on this Account with an unsaved ShoppingCart.');

            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `shopping_cart`
                SET
                    `account_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objShoppingCart->Id) . ' AND
                    `account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all ShoppingCarts
         * @return void
        */ 
        public function UnassociateAllShoppingCarts() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCart on this unsaved Account.');

            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `shopping_cart`
                SET
                    `account_id` = null
                WHERE
                    `account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated ShoppingCart
         * @param ShoppingCart $objShoppingCart
         * @return void
        */ 
        public function DeleteAssociatedShoppingCart(ShoppingCart $objShoppingCart) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCart on this unsaved Account.');
            if ((is_null($objShoppingCart->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCart on this Account with an unsaved ShoppingCart.');

            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shopping_cart`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objShoppingCart->Id) . ' AND
                    `account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated ShoppingCarts
         * @return void
        */ 
        public function DeleteAllShoppingCarts() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCart on this unsaved Account.');

            // Get the Database Object for this Class
            $objDatabase = Account::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shopping_cart`
                WHERE
                    `account_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }




    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeAccount extends QQNode {
        protected $strTableName = 'account';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Account';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'RegistrationDate':
                    return new QQNode('registration_date', 'RegistrationDate', 'string', $this);
                case 'Username':
                    return new QQNode('username', 'Username', 'string', $this);
                case 'Password':
                    return new QQNode('password', 'Password', 'string', $this);
                case 'Notes':
                    return new QQNode('notes', 'Notes', 'string', $this);
                case 'LastLogin':
                    return new QQNode('last_login', 'LastLogin', 'string', $this);
                case 'LoginCount':
                    return new QQNode('login_count', 'LoginCount', 'integer', $this);
                case 'Online':
                    return new QQNode('online', 'Online', 'boolean', $this);
                case 'OnetimePassword':
                    return new QQNode('onetime_password', 'OnetimePassword', 'boolean', $this);
                case 'ValidPassword':
                    return new QQNode('valid_password', 'ValidPassword', 'boolean', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'PersonId':
                    return new QQNode('person_id', 'PersonId', 'integer', $this);
                case 'Person':
                    return new QQNodePerson('person_id', 'Person', 'integer', $this);
                case 'Order':
                    return new QQReverseReferenceNodeOrder($this, 'order', 'reverse_reference', 'account_id');
                case 'ShoppingCart':
                    return new QQReverseReferenceNodeShoppingCart($this, 'shoppingcart', 'reverse_reference', 'account_id');

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

    class QQReverseReferenceNodeAccount extends QQReverseReferenceNode {
        protected $strTableName = 'account';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Account';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'RegistrationDate':
                    return new QQNode('registration_date', 'RegistrationDate', 'string', $this);
                case 'Username':
                    return new QQNode('username', 'Username', 'string', $this);
                case 'Password':
                    return new QQNode('password', 'Password', 'string', $this);
                case 'Notes':
                    return new QQNode('notes', 'Notes', 'string', $this);
                case 'LastLogin':
                    return new QQNode('last_login', 'LastLogin', 'string', $this);
                case 'LoginCount':
                    return new QQNode('login_count', 'LoginCount', 'integer', $this);
                case 'Online':
                    return new QQNode('online', 'Online', 'boolean', $this);
                case 'OnetimePassword':
                    return new QQNode('onetime_password', 'OnetimePassword', 'boolean', $this);
                case 'ValidPassword':
                    return new QQNode('valid_password', 'ValidPassword', 'boolean', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'PersonId':
                    return new QQNode('person_id', 'PersonId', 'integer', $this);
                case 'Person':
                    return new QQNodePerson('person_id', 'Person', 'integer', $this);
                case 'Order':
                    return new QQReverseReferenceNodeOrder($this, 'order', 'reverse_reference', 'account_id');
                case 'ShoppingCart':
                    return new QQReverseReferenceNodeShoppingCart($this, 'shoppingcart', 'reverse_reference', 'account_id');

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