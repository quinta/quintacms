<?php
    /**
     * The abstract PaymentMethodGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the PaymentMethod subclass which
     * extends this PaymentMethodGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the PaymentMethod class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Title the value for strTitle 
     * @property string $ServiceProvider the value for strServiceProvider 
     * @property string $ServiceType the value for strServiceType 
     * @property string $ActionClassName the value for strActionClassName 
     * @property string $Description the value for strDescription 
     * @property string $ImageUri the value for strImageUri 
     * @property boolean $Active the value for blnActive 
     * @property boolean $RequiresCcNumber the value for blnRequiresCcNumber 
     * @property boolean $SaveCcNumber the value for blnSaveCcNumber 
     * @property boolean $TestMode the value for blnTestMode 
     * @property integer $SortOrder the value for intSortOrder 
     * @property integer $PaymentTypeId the value for intPaymentTypeId (Not Null)
     * @property-read Order $_Order the value for the private _objOrder (Read-Only) if set due to an expansion on the order.payment_method_id reverse relationship
     * @property-read Order[] $_OrderArray the value for the private _objOrderArray (Read-Only) if set due to an ExpandAsArray on the order.payment_method_id reverse relationship
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class PaymentMethodGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column payment_method.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column payment_method.title
         * @var string strTitle
         *
         */
        protected $strTitle = null;
        const TitleMaxLength = 128;


        /**
         * Protected member variable that maps to the database column payment_method.service_provider
         * @var string strServiceProvider
         *
         */
        protected $strServiceProvider = null;
        const ServiceProviderMaxLength = 128;


        /**
         * Protected member variable that maps to the database column payment_method.service_type
         * @var string strServiceType
         *
         */
        protected $strServiceType = null;
        const ServiceTypeMaxLength = 128;


        /**
         * Protected member variable that maps to the database column payment_method.action_class_name
         * @var string strActionClassName
         *
         */
        protected $strActionClassName = null;
        const ActionClassNameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column payment_method.description
         * @var string strDescription
         *
         */
        protected $strDescription = null;


        /**
         * Protected member variable that maps to the database column payment_method.image_uri
         * @var string strImageUri
         *
         */
        protected $strImageUri = null;
        const ImageUriMaxLength = 128;


        /**
         * Protected member variable that maps to the database column payment_method.active
         * @var boolean blnActive
         *
         */
        protected $blnActive = null;


        /**
         * Protected member variable that maps to the database column payment_method.requires_cc_number
         * @var boolean blnRequiresCcNumber
         *
         */
        protected $blnRequiresCcNumber = null;


        /**
         * Protected member variable that maps to the database column payment_method.save_cc_number
         * @var boolean blnSaveCcNumber
         *
         */
        protected $blnSaveCcNumber = null;


        /**
         * Protected member variable that maps to the database column payment_method.test_mode
         * @var boolean blnTestMode
         *
         */
        protected $blnTestMode = null;


        /**
         * Protected member variable that maps to the database column payment_method.sort_order
         * @var integer intSortOrder
         *
         */
        protected $intSortOrder = null;


        /**
         * Protected member variable that maps to the database column payment_method.payment_type_id
         * @var integer intPaymentTypeId
         *
         */
        protected $intPaymentTypeId = null;


        /**
         * Private member variable that stores a reference to a single Order object
         * (of type Order), if this PaymentMethod object was restored with
         * an expansion on the order association table.
         * @var Order _objOrder;
         */
        private $_objOrder;

        /**
         * Private member variable that stores a reference to an array of Order objects
         * (of type Order[]), if this PaymentMethod object was restored with
         * an ExpandAsArray on the order association table.
         * @var Order[] _objOrderArray;
         */
        private $_objOrderArray = array();

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
         * Load a PaymentMethod from PK Info
         * @param integer $intId
         * @return PaymentMethod
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return PaymentMethod::QuerySingle(
                QQ::Equal(QQN::PaymentMethod()->Id, $intId)
            );
        }

        /**
         * Load all PaymentMethods
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return PaymentMethod[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call PaymentMethod::QueryArray to perform the LoadAll query
            try {
                return PaymentMethod::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all PaymentMethods
         * @return int
         */
        public static function CountAll() {
            // Call PaymentMethod::QueryCount to perform the CountAll query
            return PaymentMethod::QueryCount(QQ::All());
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
            $objDatabase = PaymentMethod::GetDatabase();

            // Create/Build out the QueryBuilder object with PaymentMethod-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'payment_method');
            PaymentMethod::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('payment_method');

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
         * Static Qcodo Query method to query for a single PaymentMethod object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return PaymentMethod the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = PaymentMethod::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new PaymentMethod object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return PaymentMethod::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of PaymentMethod objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return PaymentMethod[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = PaymentMethod::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return PaymentMethod::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of PaymentMethod objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = PaymentMethod::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = PaymentMethod::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'payment_method_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with PaymentMethod-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                PaymentMethod::GetSelectFields($objQueryBuilder);
                PaymentMethod::GetFromFields($objQueryBuilder);

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
            return PaymentMethod::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this PaymentMethod
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'payment_method';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
            $objBuilder->AddSelectItem($strTableName, 'service_provider', $strAliasPrefix . 'service_provider');
            $objBuilder->AddSelectItem($strTableName, 'service_type', $strAliasPrefix . 'service_type');
            $objBuilder->AddSelectItem($strTableName, 'action_class_name', $strAliasPrefix . 'action_class_name');
            $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
            $objBuilder->AddSelectItem($strTableName, 'image_uri', $strAliasPrefix . 'image_uri');
            $objBuilder->AddSelectItem($strTableName, 'active', $strAliasPrefix . 'active');
            $objBuilder->AddSelectItem($strTableName, 'requires_cc_number', $strAliasPrefix . 'requires_cc_number');
            $objBuilder->AddSelectItem($strTableName, 'save_cc_number', $strAliasPrefix . 'save_cc_number');
            $objBuilder->AddSelectItem($strTableName, 'test_mode', $strAliasPrefix . 'test_mode');
            $objBuilder->AddSelectItem($strTableName, 'sort_order', $strAliasPrefix . 'sort_order');
            $objBuilder->AddSelectItem($strTableName, 'payment_type_id', $strAliasPrefix . 'payment_type_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a PaymentMethod from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this PaymentMethod::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return PaymentMethod
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
                    $strAliasPrefix = 'payment_method__';


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

                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'payment_method__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the PaymentMethod object
            $objToReturn = new PaymentMethod();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'title'] : $strAliasPrefix . 'title';
            $objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'service_provider', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'service_provider'] : $strAliasPrefix . 'service_provider';
            $objToReturn->strServiceProvider = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'service_type', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'service_type'] : $strAliasPrefix . 'service_type';
            $objToReturn->strServiceType = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'action_class_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'action_class_name'] : $strAliasPrefix . 'action_class_name';
            $objToReturn->strActionClassName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'description'] : $strAliasPrefix . 'description';
            $objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
            $strAliasName = array_key_exists($strAliasPrefix . 'image_uri', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'image_uri'] : $strAliasPrefix . 'image_uri';
            $objToReturn->strImageUri = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'active', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'active'] : $strAliasPrefix . 'active';
            $objToReturn->blnActive = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'requires_cc_number', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'requires_cc_number'] : $strAliasPrefix . 'requires_cc_number';
            $objToReturn->blnRequiresCcNumber = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'save_cc_number', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'save_cc_number'] : $strAliasPrefix . 'save_cc_number';
            $objToReturn->blnSaveCcNumber = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'test_mode', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'test_mode'] : $strAliasPrefix . 'test_mode';
            $objToReturn->blnTestMode = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'sort_order', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'sort_order'] : $strAliasPrefix . 'sort_order';
            $objToReturn->intSortOrder = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'payment_type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'payment_type_id'] : $strAliasPrefix . 'payment_type_id';
            $objToReturn->intPaymentTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'payment_method__';




            // Check for Order Virtual Binding
            $strAlias = $strAliasPrefix . 'order__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objOrderArray[] = Order::InstantiateDbRow($objDbRow, $strAliasPrefix . 'order__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objOrder = Order::InstantiateDbRow($objDbRow, $strAliasPrefix . 'order__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }

        /**
         * Instantiate an array of PaymentMethods from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return PaymentMethod[]
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
                    $objItem = PaymentMethod::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = PaymentMethod::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single PaymentMethod object,
         * by Id Index(es)
         * @param integer $intId
         * @return PaymentMethod
        */
        public static function LoadById($intId) {
            return PaymentMethod::QuerySingle(
                QQ::Equal(QQN::PaymentMethod()->Id, $intId)
            );
        }
            
        /**
         * Load an array of PaymentMethod objects,
         * by PaymentTypeId Index(es)
         * @param integer $intPaymentTypeId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return PaymentMethod[]
        */
        public static function LoadArrayByPaymentTypeId($intPaymentTypeId, $objOptionalClauses = null) {
            // Call PaymentMethod::QueryArray to perform the LoadArrayByPaymentTypeId query
            try {
                return PaymentMethod::QueryArray(
                    QQ::Equal(QQN::PaymentMethod()->PaymentTypeId, $intPaymentTypeId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count PaymentMethods
         * by PaymentTypeId Index(es)
         * @param integer $intPaymentTypeId
         * @return int
        */
        public static function CountByPaymentTypeId($intPaymentTypeId) {
            // Call PaymentMethod::QueryCount to perform the CountByPaymentTypeId query
            return PaymentMethod::QueryCount(
                QQ::Equal(QQN::PaymentMethod()->PaymentTypeId, $intPaymentTypeId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this PaymentMethod
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = PaymentMethod::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `payment_method` (
                            `title`,
                            `service_provider`,
                            `service_type`,
                            `action_class_name`,
                            `description`,
                            `image_uri`,
                            `active`,
                            `requires_cc_number`,
                            `save_cc_number`,
                            `test_mode`,
                            `sort_order`,
                            `payment_type_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            ' . $objDatabase->SqlVariable($this->strServiceProvider) . ',
                            ' . $objDatabase->SqlVariable($this->strServiceType) . ',
                            ' . $objDatabase->SqlVariable($this->strActionClassName) . ',
                            ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            ' . $objDatabase->SqlVariable($this->strImageUri) . ',
                            ' . $objDatabase->SqlVariable($this->blnActive) . ',
                            ' . $objDatabase->SqlVariable($this->blnRequiresCcNumber) . ',
                            ' . $objDatabase->SqlVariable($this->blnSaveCcNumber) . ',
                            ' . $objDatabase->SqlVariable($this->blnTestMode) . ',
                            ' . $objDatabase->SqlVariable($this->intSortOrder) . ',
                            ' . $objDatabase->SqlVariable($this->intPaymentTypeId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('payment_method', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `payment_method`
                        SET
                            `title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            `service_provider` = ' . $objDatabase->SqlVariable($this->strServiceProvider) . ',
                            `service_type` = ' . $objDatabase->SqlVariable($this->strServiceType) . ',
                            `action_class_name` = ' . $objDatabase->SqlVariable($this->strActionClassName) . ',
                            `description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            `image_uri` = ' . $objDatabase->SqlVariable($this->strImageUri) . ',
                            `active` = ' . $objDatabase->SqlVariable($this->blnActive) . ',
                            `requires_cc_number` = ' . $objDatabase->SqlVariable($this->blnRequiresCcNumber) . ',
                            `save_cc_number` = ' . $objDatabase->SqlVariable($this->blnSaveCcNumber) . ',
                            `test_mode` = ' . $objDatabase->SqlVariable($this->blnTestMode) . ',
                            `sort_order` = ' . $objDatabase->SqlVariable($this->intSortOrder) . ',
                            `payment_type_id` = ' . $objDatabase->SqlVariable($this->intPaymentTypeId) . '
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
         * Delete this PaymentMethod
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this PaymentMethod with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = PaymentMethod::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `payment_method`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all PaymentMethods
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = PaymentMethod::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `payment_method`');
        }

        /**
         * Truncate payment_method table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = PaymentMethod::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `payment_method`');
        }

        /**
         * Reload this PaymentMethod from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved PaymentMethod object.');

            // Reload the Object
            $objReloaded = PaymentMethod::Load($this->intId);

            // Update $this's local variables to match
            $this->strTitle = $objReloaded->strTitle;
            $this->strServiceProvider = $objReloaded->strServiceProvider;
            $this->strServiceType = $objReloaded->strServiceType;
            $this->strActionClassName = $objReloaded->strActionClassName;
            $this->strDescription = $objReloaded->strDescription;
            $this->strImageUri = $objReloaded->strImageUri;
            $this->blnActive = $objReloaded->blnActive;
            $this->blnRequiresCcNumber = $objReloaded->blnRequiresCcNumber;
            $this->blnSaveCcNumber = $objReloaded->blnSaveCcNumber;
            $this->blnTestMode = $objReloaded->blnTestMode;
            $this->intSortOrder = $objReloaded->intSortOrder;
            $this->PaymentTypeId = $objReloaded->PaymentTypeId;
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

                case 'Title':
                    /**
                     * Gets the value for strTitle 
                     * @return string
                     */
                    return $this->strTitle;

                case 'ServiceProvider':
                    /**
                     * Gets the value for strServiceProvider 
                     * @return string
                     */
                    return $this->strServiceProvider;

                case 'ServiceType':
                    /**
                     * Gets the value for strServiceType 
                     * @return string
                     */
                    return $this->strServiceType;

                case 'ActionClassName':
                    /**
                     * Gets the value for strActionClassName 
                     * @return string
                     */
                    return $this->strActionClassName;

                case 'Description':
                    /**
                     * Gets the value for strDescription 
                     * @return string
                     */
                    return $this->strDescription;

                case 'ImageUri':
                    /**
                     * Gets the value for strImageUri 
                     * @return string
                     */
                    return $this->strImageUri;

                case 'Active':
                    /**
                     * Gets the value for blnActive 
                     * @return boolean
                     */
                    return $this->blnActive;

                case 'RequiresCcNumber':
                    /**
                     * Gets the value for blnRequiresCcNumber 
                     * @return boolean
                     */
                    return $this->blnRequiresCcNumber;

                case 'SaveCcNumber':
                    /**
                     * Gets the value for blnSaveCcNumber 
                     * @return boolean
                     */
                    return $this->blnSaveCcNumber;

                case 'TestMode':
                    /**
                     * Gets the value for blnTestMode 
                     * @return boolean
                     */
                    return $this->blnTestMode;

                case 'SortOrder':
                    /**
                     * Gets the value for intSortOrder 
                     * @return integer
                     */
                    return $this->intSortOrder;

                case 'PaymentTypeId':
                    /**
                     * Gets the value for intPaymentTypeId (Not Null)
                     * @return integer
                     */
                    return $this->intPaymentTypeId;


                ///////////////////
                // Member Objects
                ///////////////////

                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_Order':
                    /**
                     * Gets the value for the private _objOrder (Read-Only)
                     * if set due to an expansion on the order.payment_method_id reverse relationship
                     * @return Order
                     */
                    return $this->_objOrder;

                case '_OrderArray':
                    /**
                     * Gets the value for the private _objOrderArray (Read-Only)
                     * if set due to an ExpandAsArray on the order.payment_method_id reverse relationship
                     * @return Order[]
                     */
                    return (array) $this->_objOrderArray;


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
                case 'Title':
                    /**
                     * Sets the value for strTitle 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strTitle = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ServiceProvider':
                    /**
                     * Sets the value for strServiceProvider 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strServiceProvider = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ServiceType':
                    /**
                     * Sets the value for strServiceType 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strServiceType = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ActionClassName':
                    /**
                     * Sets the value for strActionClassName 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strActionClassName = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Description':
                    /**
                     * Sets the value for strDescription 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strDescription = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ImageUri':
                    /**
                     * Sets the value for strImageUri 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strImageUri = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Active':
                    /**
                     * Sets the value for blnActive 
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnActive = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'RequiresCcNumber':
                    /**
                     * Sets the value for blnRequiresCcNumber 
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnRequiresCcNumber = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'SaveCcNumber':
                    /**
                     * Sets the value for blnSaveCcNumber 
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnSaveCcNumber = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'TestMode':
                    /**
                     * Sets the value for blnTestMode 
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnTestMode = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'SortOrder':
                    /**
                     * Sets the value for intSortOrder 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intSortOrder = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'PaymentTypeId':
                    /**
                     * Sets the value for intPaymentTypeId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intPaymentTypeId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ///////////////////
                // Member Objects
                ///////////////////
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
                return Order::LoadArrayByPaymentMethodId($this->intId, $objOptionalClauses);
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

            return Order::CountByPaymentMethodId($this->intId);
        }

        /**
         * Associates a Order
         * @param Order $objOrder
         * @return void
        */ 
        public function AssociateOrder(Order $objOrder) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrder on this unsaved PaymentMethod.');
            if ((is_null($objOrder->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrder on this PaymentMethod with an unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = PaymentMethod::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order`
                SET
                    `payment_method_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved PaymentMethod.');
            if ((is_null($objOrder->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this PaymentMethod with an unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = PaymentMethod::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order`
                SET
                    `payment_method_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrder->Id) . ' AND
                    `payment_method_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all Orders
         * @return void
        */ 
        public function UnassociateAllOrders() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved PaymentMethod.');

            // Get the Database Object for this Class
            $objDatabase = PaymentMethod::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order`
                SET
                    `payment_method_id` = null
                WHERE
                    `payment_method_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated Order
         * @param Order $objOrder
         * @return void
        */ 
        public function DeleteAssociatedOrder(Order $objOrder) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved PaymentMethod.');
            if ((is_null($objOrder->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this PaymentMethod with an unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = PaymentMethod::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrder->Id) . ' AND
                    `payment_method_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated Orders
         * @return void
        */ 
        public function DeleteAllOrders() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved PaymentMethod.');

            // Get the Database Object for this Class
            $objDatabase = PaymentMethod::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order`
                WHERE
                    `payment_method_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }




    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodePaymentMethod extends QQNode {
        protected $strTableName = 'payment_method';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'PaymentMethod';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'ServiceProvider':
                    return new QQNode('service_provider', 'ServiceProvider', 'string', $this);
                case 'ServiceType':
                    return new QQNode('service_type', 'ServiceType', 'string', $this);
                case 'ActionClassName':
                    return new QQNode('action_class_name', 'ActionClassName', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'ImageUri':
                    return new QQNode('image_uri', 'ImageUri', 'string', $this);
                case 'Active':
                    return new QQNode('active', 'Active', 'boolean', $this);
                case 'RequiresCcNumber':
                    return new QQNode('requires_cc_number', 'RequiresCcNumber', 'boolean', $this);
                case 'SaveCcNumber':
                    return new QQNode('save_cc_number', 'SaveCcNumber', 'boolean', $this);
                case 'TestMode':
                    return new QQNode('test_mode', 'TestMode', 'boolean', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'PaymentTypeId':
                    return new QQNode('payment_type_id', 'PaymentTypeId', 'integer', $this);
                case 'Order':
                    return new QQReverseReferenceNodeOrder($this, 'order', 'reverse_reference', 'payment_method_id');

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

    class QQReverseReferenceNodePaymentMethod extends QQReverseReferenceNode {
        protected $strTableName = 'payment_method';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'PaymentMethod';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'ServiceProvider':
                    return new QQNode('service_provider', 'ServiceProvider', 'string', $this);
                case 'ServiceType':
                    return new QQNode('service_type', 'ServiceType', 'string', $this);
                case 'ActionClassName':
                    return new QQNode('action_class_name', 'ActionClassName', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'ImageUri':
                    return new QQNode('image_uri', 'ImageUri', 'string', $this);
                case 'Active':
                    return new QQNode('active', 'Active', 'boolean', $this);
                case 'RequiresCcNumber':
                    return new QQNode('requires_cc_number', 'RequiresCcNumber', 'boolean', $this);
                case 'SaveCcNumber':
                    return new QQNode('save_cc_number', 'SaveCcNumber', 'boolean', $this);
                case 'TestMode':
                    return new QQNode('test_mode', 'TestMode', 'boolean', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'PaymentTypeId':
                    return new QQNode('payment_type_id', 'PaymentTypeId', 'integer', $this);
                case 'Order':
                    return new QQReverseReferenceNodeOrder($this, 'order', 'reverse_reference', 'payment_method_id');

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