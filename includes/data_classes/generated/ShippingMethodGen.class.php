<?php
    /**
     * The abstract ShippingMethodGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the ShippingMethod subclass which
     * extends this ShippingMethodGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ShippingMethod class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Title the value for strTitle 
     * @property string $Carrier the value for strCarrier 
     * @property string $ServiceType the value for strServiceType 
     * @property string $ClassName the value for strClassName 
     * @property string $TransitTime the value for strTransitTime 
     * @property string $Description the value for strDescription 
     * @property string $ImageFilename the value for strImageFilename 
     * @property boolean $Active the value for blnActive 
     * @property boolean $IsInternational the value for blnIsInternational 
     * @property boolean $TestMode the value for blnTestMode 
     * @property integer $SortOrder the value for intSortOrder 
     * @property-read Order $_Order the value for the private _objOrder (Read-Only) if set due to an expansion on the order.shipping_method_id reverse relationship
     * @property-read Order[] $_OrderArray the value for the private _objOrderArray (Read-Only) if set due to an ExpandAsArray on the order.shipping_method_id reverse relationship
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class ShippingMethodGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column shipping_method.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column shipping_method.title
         * @var string strTitle
         *
         */
        protected $strTitle = null;
        const TitleMaxLength = 128;


        /**
         * Protected member variable that maps to the database column shipping_method.carrier
         * @var string strCarrier
         *
         */
        protected $strCarrier = null;
        const CarrierMaxLength = 128;


        /**
         * Protected member variable that maps to the database column shipping_method.service_type
         * @var string strServiceType
         *
         */
        protected $strServiceType = null;
        const ServiceTypeMaxLength = 128;


        /**
         * Protected member variable that maps to the database column shipping_method.class_name
         * @var string strClassName
         *
         */
        protected $strClassName = null;
        const ClassNameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column shipping_method.transit_time
         * @var string strTransitTime
         *
         */
        protected $strTransitTime = null;
        const TransitTimeMaxLength = 16;


        /**
         * Protected member variable that maps to the database column shipping_method.description
         * @var string strDescription
         *
         */
        protected $strDescription = null;


        /**
         * Protected member variable that maps to the database column shipping_method.image_filename
         * @var string strImageFilename
         *
         */
        protected $strImageFilename = null;
        const ImageFilenameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column shipping_method.active
         * @var boolean blnActive
         *
         */
        protected $blnActive = null;


        /**
         * Protected member variable that maps to the database column shipping_method.is_international
         * @var boolean blnIsInternational
         *
         */
        protected $blnIsInternational = null;


        /**
         * Protected member variable that maps to the database column shipping_method.test_mode
         * @var boolean blnTestMode
         *
         */
        protected $blnTestMode = null;


        /**
         * Protected member variable that maps to the database column shipping_method.sort_order
         * @var integer intSortOrder
         *
         */
        protected $intSortOrder = null;


        /**
         * Private member variable that stores a reference to a single Order object
         * (of type Order), if this ShippingMethod object was restored with
         * an expansion on the order association table.
         * @var Order _objOrder;
         */
        private $_objOrder;

        /**
         * Private member variable that stores a reference to an array of Order objects
         * (of type Order[]), if this ShippingMethod object was restored with
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
         * Load a ShippingMethod from PK Info
         * @param integer $intId
         * @return ShippingMethod
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return ShippingMethod::QuerySingle(
                QQ::Equal(QQN::ShippingMethod()->Id, $intId)
            );
        }

        /**
         * Load all ShippingMethods
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ShippingMethod[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call ShippingMethod::QueryArray to perform the LoadAll query
            try {
                return ShippingMethod::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all ShippingMethods
         * @return int
         */
        public static function CountAll() {
            // Call ShippingMethod::QueryCount to perform the CountAll query
            return ShippingMethod::QueryCount(QQ::All());
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
            $objDatabase = ShippingMethod::GetDatabase();

            // Create/Build out the QueryBuilder object with ShippingMethod-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'shipping_method');
            ShippingMethod::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('shipping_method');

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
         * Static Qcodo Query method to query for a single ShippingMethod object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ShippingMethod the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ShippingMethod::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new ShippingMethod object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ShippingMethod::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of ShippingMethod objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ShippingMethod[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ShippingMethod::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ShippingMethod::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of ShippingMethod objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ShippingMethod::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = ShippingMethod::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'shipping_method_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ShippingMethod-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                ShippingMethod::GetSelectFields($objQueryBuilder);
                ShippingMethod::GetFromFields($objQueryBuilder);

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
            return ShippingMethod::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this ShippingMethod
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'shipping_method';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
            $objBuilder->AddSelectItem($strTableName, 'carrier', $strAliasPrefix . 'carrier');
            $objBuilder->AddSelectItem($strTableName, 'service_type', $strAliasPrefix . 'service_type');
            $objBuilder->AddSelectItem($strTableName, 'class_name', $strAliasPrefix . 'class_name');
            $objBuilder->AddSelectItem($strTableName, 'transit_time', $strAliasPrefix . 'transit_time');
            $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
            $objBuilder->AddSelectItem($strTableName, 'image_filename', $strAliasPrefix . 'image_filename');
            $objBuilder->AddSelectItem($strTableName, 'active', $strAliasPrefix . 'active');
            $objBuilder->AddSelectItem($strTableName, 'is_international', $strAliasPrefix . 'is_international');
            $objBuilder->AddSelectItem($strTableName, 'test_mode', $strAliasPrefix . 'test_mode');
            $objBuilder->AddSelectItem($strTableName, 'sort_order', $strAliasPrefix . 'sort_order');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a ShippingMethod from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this ShippingMethod::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return ShippingMethod
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
                    $strAliasPrefix = 'shipping_method__';


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
                else if ($strAliasPrefix == 'shipping_method__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the ShippingMethod object
            $objToReturn = new ShippingMethod();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'title'] : $strAliasPrefix . 'title';
            $objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'carrier', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'carrier'] : $strAliasPrefix . 'carrier';
            $objToReturn->strCarrier = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'service_type', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'service_type'] : $strAliasPrefix . 'service_type';
            $objToReturn->strServiceType = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'class_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'class_name'] : $strAliasPrefix . 'class_name';
            $objToReturn->strClassName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'transit_time', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'transit_time'] : $strAliasPrefix . 'transit_time';
            $objToReturn->strTransitTime = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'description'] : $strAliasPrefix . 'description';
            $objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
            $strAliasName = array_key_exists($strAliasPrefix . 'image_filename', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'image_filename'] : $strAliasPrefix . 'image_filename';
            $objToReturn->strImageFilename = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'active', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'active'] : $strAliasPrefix . 'active';
            $objToReturn->blnActive = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'is_international', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'is_international'] : $strAliasPrefix . 'is_international';
            $objToReturn->blnIsInternational = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'test_mode', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'test_mode'] : $strAliasPrefix . 'test_mode';
            $objToReturn->blnTestMode = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'sort_order', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'sort_order'] : $strAliasPrefix . 'sort_order';
            $objToReturn->intSortOrder = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'shipping_method__';




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
         * Instantiate an array of ShippingMethods from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return ShippingMethod[]
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
                    $objItem = ShippingMethod::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = ShippingMethod::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single ShippingMethod object,
         * by Id Index(es)
         * @param integer $intId
         * @return ShippingMethod
        */
        public static function LoadById($intId) {
            return ShippingMethod::QuerySingle(
                QQ::Equal(QQN::ShippingMethod()->Id, $intId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this ShippingMethod
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = ShippingMethod::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `shipping_method` (
                            `title`,
                            `carrier`,
                            `service_type`,
                            `class_name`,
                            `transit_time`,
                            `description`,
                            `image_filename`,
                            `active`,
                            `is_international`,
                            `test_mode`,
                            `sort_order`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            ' . $objDatabase->SqlVariable($this->strCarrier) . ',
                            ' . $objDatabase->SqlVariable($this->strServiceType) . ',
                            ' . $objDatabase->SqlVariable($this->strClassName) . ',
                            ' . $objDatabase->SqlVariable($this->strTransitTime) . ',
                            ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            ' . $objDatabase->SqlVariable($this->strImageFilename) . ',
                            ' . $objDatabase->SqlVariable($this->blnActive) . ',
                            ' . $objDatabase->SqlVariable($this->blnIsInternational) . ',
                            ' . $objDatabase->SqlVariable($this->blnTestMode) . ',
                            ' . $objDatabase->SqlVariable($this->intSortOrder) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('shipping_method', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `shipping_method`
                        SET
                            `title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            `carrier` = ' . $objDatabase->SqlVariable($this->strCarrier) . ',
                            `service_type` = ' . $objDatabase->SqlVariable($this->strServiceType) . ',
                            `class_name` = ' . $objDatabase->SqlVariable($this->strClassName) . ',
                            `transit_time` = ' . $objDatabase->SqlVariable($this->strTransitTime) . ',
                            `description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            `image_filename` = ' . $objDatabase->SqlVariable($this->strImageFilename) . ',
                            `active` = ' . $objDatabase->SqlVariable($this->blnActive) . ',
                            `is_international` = ' . $objDatabase->SqlVariable($this->blnIsInternational) . ',
                            `test_mode` = ' . $objDatabase->SqlVariable($this->blnTestMode) . ',
                            `sort_order` = ' . $objDatabase->SqlVariable($this->intSortOrder) . '
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
         * Delete this ShippingMethod
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this ShippingMethod with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = ShippingMethod::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shipping_method`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all ShippingMethods
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = ShippingMethod::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shipping_method`');
        }

        /**
         * Truncate shipping_method table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = ShippingMethod::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `shipping_method`');
        }

        /**
         * Reload this ShippingMethod from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved ShippingMethod object.');

            // Reload the Object
            $objReloaded = ShippingMethod::Load($this->intId);

            // Update $this's local variables to match
            $this->strTitle = $objReloaded->strTitle;
            $this->strCarrier = $objReloaded->strCarrier;
            $this->strServiceType = $objReloaded->strServiceType;
            $this->strClassName = $objReloaded->strClassName;
            $this->strTransitTime = $objReloaded->strTransitTime;
            $this->strDescription = $objReloaded->strDescription;
            $this->strImageFilename = $objReloaded->strImageFilename;
            $this->blnActive = $objReloaded->blnActive;
            $this->blnIsInternational = $objReloaded->blnIsInternational;
            $this->blnTestMode = $objReloaded->blnTestMode;
            $this->intSortOrder = $objReloaded->intSortOrder;
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

                case 'Carrier':
                    /**
                     * Gets the value for strCarrier 
                     * @return string
                     */
                    return $this->strCarrier;

                case 'ServiceType':
                    /**
                     * Gets the value for strServiceType 
                     * @return string
                     */
                    return $this->strServiceType;

                case 'ClassName':
                    /**
                     * Gets the value for strClassName 
                     * @return string
                     */
                    return $this->strClassName;

                case 'TransitTime':
                    /**
                     * Gets the value for strTransitTime 
                     * @return string
                     */
                    return $this->strTransitTime;

                case 'Description':
                    /**
                     * Gets the value for strDescription 
                     * @return string
                     */
                    return $this->strDescription;

                case 'ImageFilename':
                    /**
                     * Gets the value for strImageFilename 
                     * @return string
                     */
                    return $this->strImageFilename;

                case 'Active':
                    /**
                     * Gets the value for blnActive 
                     * @return boolean
                     */
                    return $this->blnActive;

                case 'IsInternational':
                    /**
                     * Gets the value for blnIsInternational 
                     * @return boolean
                     */
                    return $this->blnIsInternational;

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
                     * if set due to an expansion on the order.shipping_method_id reverse relationship
                     * @return Order
                     */
                    return $this->_objOrder;

                case '_OrderArray':
                    /**
                     * Gets the value for the private _objOrderArray (Read-Only)
                     * if set due to an ExpandAsArray on the order.shipping_method_id reverse relationship
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

                case 'Carrier':
                    /**
                     * Sets the value for strCarrier 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strCarrier = QType::Cast($mixValue, QType::String));
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

                case 'ClassName':
                    /**
                     * Sets the value for strClassName 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strClassName = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'TransitTime':
                    /**
                     * Sets the value for strTransitTime 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strTransitTime = QType::Cast($mixValue, QType::String));
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

                case 'ImageFilename':
                    /**
                     * Sets the value for strImageFilename 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strImageFilename = QType::Cast($mixValue, QType::String));
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

                case 'IsInternational':
                    /**
                     * Sets the value for blnIsInternational 
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnIsInternational = QType::Cast($mixValue, QType::Boolean));
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
                return Order::LoadArrayByShippingMethodId($this->intId, $objOptionalClauses);
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

            return Order::CountByShippingMethodId($this->intId);
        }

        /**
         * Associates a Order
         * @param Order $objOrder
         * @return void
        */ 
        public function AssociateOrder(Order $objOrder) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrder on this unsaved ShippingMethod.');
            if ((is_null($objOrder->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrder on this ShippingMethod with an unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = ShippingMethod::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order`
                SET
                    `shipping_method_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved ShippingMethod.');
            if ((is_null($objOrder->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this ShippingMethod with an unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = ShippingMethod::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order`
                SET
                    `shipping_method_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrder->Id) . ' AND
                    `shipping_method_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all Orders
         * @return void
        */ 
        public function UnassociateAllOrders() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved ShippingMethod.');

            // Get the Database Object for this Class
            $objDatabase = ShippingMethod::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order`
                SET
                    `shipping_method_id` = null
                WHERE
                    `shipping_method_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated Order
         * @param Order $objOrder
         * @return void
        */ 
        public function DeleteAssociatedOrder(Order $objOrder) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved ShippingMethod.');
            if ((is_null($objOrder->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this ShippingMethod with an unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = ShippingMethod::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrder->Id) . ' AND
                    `shipping_method_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated Orders
         * @return void
        */ 
        public function DeleteAllOrders() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrder on this unsaved ShippingMethod.');

            // Get the Database Object for this Class
            $objDatabase = ShippingMethod::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order`
                WHERE
                    `shipping_method_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }




    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeShippingMethod extends QQNode {
        protected $strTableName = 'shipping_method';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ShippingMethod';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'Carrier':
                    return new QQNode('carrier', 'Carrier', 'string', $this);
                case 'ServiceType':
                    return new QQNode('service_type', 'ServiceType', 'string', $this);
                case 'ClassName':
                    return new QQNode('class_name', 'ClassName', 'string', $this);
                case 'TransitTime':
                    return new QQNode('transit_time', 'TransitTime', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'ImageFilename':
                    return new QQNode('image_filename', 'ImageFilename', 'string', $this);
                case 'Active':
                    return new QQNode('active', 'Active', 'boolean', $this);
                case 'IsInternational':
                    return new QQNode('is_international', 'IsInternational', 'boolean', $this);
                case 'TestMode':
                    return new QQNode('test_mode', 'TestMode', 'boolean', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'Order':
                    return new QQReverseReferenceNodeOrder($this, 'order', 'reverse_reference', 'shipping_method_id');

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

    class QQReverseReferenceNodeShippingMethod extends QQReverseReferenceNode {
        protected $strTableName = 'shipping_method';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ShippingMethod';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'Carrier':
                    return new QQNode('carrier', 'Carrier', 'string', $this);
                case 'ServiceType':
                    return new QQNode('service_type', 'ServiceType', 'string', $this);
                case 'ClassName':
                    return new QQNode('class_name', 'ClassName', 'string', $this);
                case 'TransitTime':
                    return new QQNode('transit_time', 'TransitTime', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'ImageFilename':
                    return new QQNode('image_filename', 'ImageFilename', 'string', $this);
                case 'Active':
                    return new QQNode('active', 'Active', 'boolean', $this);
                case 'IsInternational':
                    return new QQNode('is_international', 'IsInternational', 'boolean', $this);
                case 'TestMode':
                    return new QQNode('test_mode', 'TestMode', 'boolean', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'Order':
                    return new QQReverseReferenceNodeOrder($this, 'order', 'reverse_reference', 'shipping_method_id');

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