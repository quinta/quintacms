<?php
    /**
     * The abstract AddressGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the Address subclass which
     * extends this AddressGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the Address class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Title the value for strTitle 
     * @property integer $PersonId the value for intPersonId (Not Null)
     * @property string $Street1 the value for strStreet1 
     * @property string $Street2 the value for strStreet2 
     * @property string $Suburb the value for strSuburb 
     * @property string $City the value for strCity 
     * @property string $County the value for strCounty 
     * @property integer $ZoneId the value for intZoneId (Not Null)
     * @property integer $CountryId the value for intCountryId (Not Null)
     * @property string $PostalCode the value for strPostalCode 
     * @property boolean $IsCurrent the value for blnIsCurrent (Not Null)
     * @property integer $TypeId the value for intTypeId (Not Null)
     * @property-read string $CreationDate the value for strCreationDate (Read-Only Timestamp)
     * @property-read string $LastModification the value for strLastModification (Read-Only Timestamp)
     * @property Person $Person the value for the Person object referenced by intPersonId (Not Null)
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class AddressGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column address.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column address.title
         * @var string strTitle
         *
         */
        protected $strTitle = null;
        const TitleMaxLength = 256;


        /**
         * Protected member variable that maps to the database column address.person_id
         * @var integer intPersonId
         *
         */
        protected $intPersonId = null;


        /**
         * Protected member variable that maps to the database column address.street_1
         * @var string strStreet1
         *
         */
        protected $strStreet1 = null;
        const Street1MaxLength = 256;


        /**
         * Protected member variable that maps to the database column address.street_2
         * @var string strStreet2
         *
         */
        protected $strStreet2 = null;
        const Street2MaxLength = 256;


        /**
         * Protected member variable that maps to the database column address.suburb
         * @var string strSuburb
         *
         */
        protected $strSuburb = null;
        const SuburbMaxLength = 256;


        /**
         * Protected member variable that maps to the database column address.city
         * @var string strCity
         *
         */
        protected $strCity = null;
        const CityMaxLength = 256;


        /**
         * Protected member variable that maps to the database column address.county
         * @var string strCounty
         *
         */
        protected $strCounty = null;
        const CountyMaxLength = 256;


        /**
         * Protected member variable that maps to the database column address.zone_id
         * @var integer intZoneId
         *
         */
        protected $intZoneId = null;


        /**
         * Protected member variable that maps to the database column address.country_id
         * @var integer intCountryId
         *
         */
        protected $intCountryId = null;


        /**
         * Protected member variable that maps to the database column address.postal_code
         * @var string strPostalCode
         *
         */
        protected $strPostalCode = null;
        const PostalCodeMaxLength = 32;


        /**
         * Protected member variable that maps to the database column address.is_current
         * @var boolean blnIsCurrent
         *
         */
        protected $blnIsCurrent = null;


        /**
         * Protected member variable that maps to the database column address.type_id
         * @var integer intTypeId
         *
         */
        protected $intTypeId = null;


        /**
         * Protected member variable that maps to the database column address.creation_date
         * @var string strCreationDate
         *
         */
        protected $strCreationDate = null;


        /**
         * Protected member variable that maps to the database column address.last_modification
         * @var string strLastModification
         *
         */
        protected $strLastModification = null;


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
         * in the database column address.person_id.
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
         * Load a Address from PK Info
         * @param integer $intId
         * @return Address
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return Address::QuerySingle(
                QQ::Equal(QQN::Address()->Id, $intId)
            );
        }

        /**
         * Load all Addresses
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Address[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call Address::QueryArray to perform the LoadAll query
            try {
                return Address::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all Addresses
         * @return int
         */
        public static function CountAll() {
            // Call Address::QueryCount to perform the CountAll query
            return Address::QueryCount(QQ::All());
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
            $objDatabase = Address::GetDatabase();

            // Create/Build out the QueryBuilder object with Address-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'address');
            Address::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('address');

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
         * Static Qcodo Query method to query for a single Address object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Address the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new Address object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Address::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of Address objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Address[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Address::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of Address objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = Address::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'address_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Address-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                Address::GetSelectFields($objQueryBuilder);
                Address::GetFromFields($objQueryBuilder);

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
            return Address::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this Address
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'address';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
            $objBuilder->AddSelectItem($strTableName, 'person_id', $strAliasPrefix . 'person_id');
            $objBuilder->AddSelectItem($strTableName, 'street_1', $strAliasPrefix . 'street_1');
            $objBuilder->AddSelectItem($strTableName, 'street_2', $strAliasPrefix . 'street_2');
            $objBuilder->AddSelectItem($strTableName, 'suburb', $strAliasPrefix . 'suburb');
            $objBuilder->AddSelectItem($strTableName, 'city', $strAliasPrefix . 'city');
            $objBuilder->AddSelectItem($strTableName, 'county', $strAliasPrefix . 'county');
            $objBuilder->AddSelectItem($strTableName, 'zone_id', $strAliasPrefix . 'zone_id');
            $objBuilder->AddSelectItem($strTableName, 'country_id', $strAliasPrefix . 'country_id');
            $objBuilder->AddSelectItem($strTableName, 'postal_code', $strAliasPrefix . 'postal_code');
            $objBuilder->AddSelectItem($strTableName, 'is_current', $strAliasPrefix . 'is_current');
            $objBuilder->AddSelectItem($strTableName, 'type_id', $strAliasPrefix . 'type_id');
            $objBuilder->AddSelectItem($strTableName, 'creation_date', $strAliasPrefix . 'creation_date');
            $objBuilder->AddSelectItem($strTableName, 'last_modification', $strAliasPrefix . 'last_modification');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a Address from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this Address::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return Address
        */
        public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
            // If blank row, return null
            if (!$objDbRow)
                return null;


            // Create a new instance of the Address object
            $objToReturn = new Address();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'title'] : $strAliasPrefix . 'title';
            $objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'person_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'person_id'] : $strAliasPrefix . 'person_id';
            $objToReturn->intPersonId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'street_1', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'street_1'] : $strAliasPrefix . 'street_1';
            $objToReturn->strStreet1 = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'street_2', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'street_2'] : $strAliasPrefix . 'street_2';
            $objToReturn->strStreet2 = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'suburb', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'suburb'] : $strAliasPrefix . 'suburb';
            $objToReturn->strSuburb = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'city', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'city'] : $strAliasPrefix . 'city';
            $objToReturn->strCity = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'county', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'county'] : $strAliasPrefix . 'county';
            $objToReturn->strCounty = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'zone_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'zone_id'] : $strAliasPrefix . 'zone_id';
            $objToReturn->intZoneId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'country_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'country_id'] : $strAliasPrefix . 'country_id';
            $objToReturn->intCountryId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'postal_code', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'postal_code'] : $strAliasPrefix . 'postal_code';
            $objToReturn->strPostalCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'is_current', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'is_current'] : $strAliasPrefix . 'is_current';
            $objToReturn->blnIsCurrent = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'type_id'] : $strAliasPrefix . 'type_id';
            $objToReturn->intTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'creation_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'creation_date'] : $strAliasPrefix . 'creation_date';
            $objToReturn->strCreationDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'last_modification', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'last_modification'] : $strAliasPrefix . 'last_modification';
            $objToReturn->strLastModification = $objDbRow->GetColumn($strAliasName, 'VarChar');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'address__';

            // Check for Person Early Binding
            $strAlias = $strAliasPrefix . 'person_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objPerson = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'person_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            return $objToReturn;
        }

        /**
         * Instantiate an array of Addresses from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return Address[]
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
                    $objItem = Address::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = Address::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single Address object,
         * by Id Index(es)
         * @param integer $intId
         * @return Address
        */
        public static function LoadById($intId) {
            return Address::QuerySingle(
                QQ::Equal(QQN::Address()->Id, $intId)
            );
        }
            
        /**
         * Load an array of Address objects,
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Address[]
        */
        public static function LoadArrayByTypeId($intTypeId, $objOptionalClauses = null) {
            // Call Address::QueryArray to perform the LoadArrayByTypeId query
            try {
                return Address::QueryArray(
                    QQ::Equal(QQN::Address()->TypeId, $intTypeId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Addresses
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @return int
        */
        public static function CountByTypeId($intTypeId) {
            // Call Address::QueryCount to perform the CountByTypeId query
            return Address::QueryCount(
                QQ::Equal(QQN::Address()->TypeId, $intTypeId)
            );
        }
            
        /**
         * Load an array of Address objects,
         * by ZoneId Index(es)
         * @param integer $intZoneId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Address[]
        */
        public static function LoadArrayByZoneId($intZoneId, $objOptionalClauses = null) {
            // Call Address::QueryArray to perform the LoadArrayByZoneId query
            try {
                return Address::QueryArray(
                    QQ::Equal(QQN::Address()->ZoneId, $intZoneId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Addresses
         * by ZoneId Index(es)
         * @param integer $intZoneId
         * @return int
        */
        public static function CountByZoneId($intZoneId) {
            // Call Address::QueryCount to perform the CountByZoneId query
            return Address::QueryCount(
                QQ::Equal(QQN::Address()->ZoneId, $intZoneId)
            );
        }
            
        /**
         * Load an array of Address objects,
         * by CountryId Index(es)
         * @param integer $intCountryId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Address[]
        */
        public static function LoadArrayByCountryId($intCountryId, $objOptionalClauses = null) {
            // Call Address::QueryArray to perform the LoadArrayByCountryId query
            try {
                return Address::QueryArray(
                    QQ::Equal(QQN::Address()->CountryId, $intCountryId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Addresses
         * by CountryId Index(es)
         * @param integer $intCountryId
         * @return int
        */
        public static function CountByCountryId($intCountryId) {
            // Call Address::QueryCount to perform the CountByCountryId query
            return Address::QueryCount(
                QQ::Equal(QQN::Address()->CountryId, $intCountryId)
            );
        }
            
        /**
         * Load an array of Address objects,
         * by PersonId Index(es)
         * @param integer $intPersonId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Address[]
        */
        public static function LoadArrayByPersonId($intPersonId, $objOptionalClauses = null) {
            // Call Address::QueryArray to perform the LoadArrayByPersonId query
            try {
                return Address::QueryArray(
                    QQ::Equal(QQN::Address()->PersonId, $intPersonId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Addresses
         * by PersonId Index(es)
         * @param integer $intPersonId
         * @return int
        */
        public static function CountByPersonId($intPersonId) {
            // Call Address::QueryCount to perform the CountByPersonId query
            return Address::QueryCount(
                QQ::Equal(QQN::Address()->PersonId, $intPersonId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this Address
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = Address::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `address` (
                            `title`,
                            `person_id`,
                            `street_1`,
                            `street_2`,
                            `suburb`,
                            `city`,
                            `county`,
                            `zone_id`,
                            `country_id`,
                            `postal_code`,
                            `is_current`,
                            `type_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            ' . $objDatabase->SqlVariable($this->intPersonId) . ',
                            ' . $objDatabase->SqlVariable($this->strStreet1) . ',
                            ' . $objDatabase->SqlVariable($this->strStreet2) . ',
                            ' . $objDatabase->SqlVariable($this->strSuburb) . ',
                            ' . $objDatabase->SqlVariable($this->strCity) . ',
                            ' . $objDatabase->SqlVariable($this->strCounty) . ',
                            ' . $objDatabase->SqlVariable($this->intZoneId) . ',
                            ' . $objDatabase->SqlVariable($this->intCountryId) . ',
                            ' . $objDatabase->SqlVariable($this->strPostalCode) . ',
                            ' . $objDatabase->SqlVariable($this->blnIsCurrent) . ',
                            ' . $objDatabase->SqlVariable($this->intTypeId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('address', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `creation_date`
                            FROM
                                `address`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strCreationDate)
                            throw new QOptimisticLockingException('Address');
                    }
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `last_modification`
                            FROM
                                `address`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strLastModification)
                            throw new QOptimisticLockingException('Address');
                    }

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `address`
                        SET
                            `title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            `person_id` = ' . $objDatabase->SqlVariable($this->intPersonId) . ',
                            `street_1` = ' . $objDatabase->SqlVariable($this->strStreet1) . ',
                            `street_2` = ' . $objDatabase->SqlVariable($this->strStreet2) . ',
                            `suburb` = ' . $objDatabase->SqlVariable($this->strSuburb) . ',
                            `city` = ' . $objDatabase->SqlVariable($this->strCity) . ',
                            `county` = ' . $objDatabase->SqlVariable($this->strCounty) . ',
                            `zone_id` = ' . $objDatabase->SqlVariable($this->intZoneId) . ',
                            `country_id` = ' . $objDatabase->SqlVariable($this->intCountryId) . ',
                            `postal_code` = ' . $objDatabase->SqlVariable($this->strPostalCode) . ',
                            `is_current` = ' . $objDatabase->SqlVariable($this->blnIsCurrent) . ',
                            `type_id` = ' . $objDatabase->SqlVariable($this->intTypeId) . '
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
                    `address`
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
                    `address`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
                        
            $objRow = $objResult->FetchArray();
            $this->strLastModification = $objRow[0];

            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this Address
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this Address with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = Address::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `address`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all Addresses
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = Address::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `address`');
        }

        /**
         * Truncate address table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = Address::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `address`');
        }

        /**
         * Reload this Address from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved Address object.');

            // Reload the Object
            $objReloaded = Address::Load($this->intId);

            // Update $this's local variables to match
            $this->strTitle = $objReloaded->strTitle;
            $this->PersonId = $objReloaded->PersonId;
            $this->strStreet1 = $objReloaded->strStreet1;
            $this->strStreet2 = $objReloaded->strStreet2;
            $this->strSuburb = $objReloaded->strSuburb;
            $this->strCity = $objReloaded->strCity;
            $this->strCounty = $objReloaded->strCounty;
            $this->ZoneId = $objReloaded->ZoneId;
            $this->CountryId = $objReloaded->CountryId;
            $this->strPostalCode = $objReloaded->strPostalCode;
            $this->blnIsCurrent = $objReloaded->blnIsCurrent;
            $this->TypeId = $objReloaded->TypeId;
            $this->strCreationDate = $objReloaded->strCreationDate;
            $this->strLastModification = $objReloaded->strLastModification;
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

                case 'PersonId':
                    /**
                     * Gets the value for intPersonId (Not Null)
                     * @return integer
                     */
                    return $this->intPersonId;

                case 'Street1':
                    /**
                     * Gets the value for strStreet1 
                     * @return string
                     */
                    return $this->strStreet1;

                case 'Street2':
                    /**
                     * Gets the value for strStreet2 
                     * @return string
                     */
                    return $this->strStreet2;

                case 'Suburb':
                    /**
                     * Gets the value for strSuburb 
                     * @return string
                     */
                    return $this->strSuburb;

                case 'City':
                    /**
                     * Gets the value for strCity 
                     * @return string
                     */
                    return $this->strCity;

                case 'County':
                    /**
                     * Gets the value for strCounty 
                     * @return string
                     */
                    return $this->strCounty;

                case 'ZoneId':
                    /**
                     * Gets the value for intZoneId (Not Null)
                     * @return integer
                     */
                    return $this->intZoneId;

                case 'CountryId':
                    /**
                     * Gets the value for intCountryId (Not Null)
                     * @return integer
                     */
                    return $this->intCountryId;

                case 'PostalCode':
                    /**
                     * Gets the value for strPostalCode 
                     * @return string
                     */
                    return $this->strPostalCode;

                case 'IsCurrent':
                    /**
                     * Gets the value for blnIsCurrent (Not Null)
                     * @return boolean
                     */
                    return $this->blnIsCurrent;

                case 'TypeId':
                    /**
                     * Gets the value for intTypeId (Not Null)
                     * @return integer
                     */
                    return $this->intTypeId;

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


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Person':
                    /**
                     * Gets the value for the Person object referenced by intPersonId (Not Null)
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

                case 'PersonId':
                    /**
                     * Sets the value for intPersonId (Not Null)
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

                case 'Street1':
                    /**
                     * Sets the value for strStreet1 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strStreet1 = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Street2':
                    /**
                     * Sets the value for strStreet2 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strStreet2 = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Suburb':
                    /**
                     * Sets the value for strSuburb 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strSuburb = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'City':
                    /**
                     * Sets the value for strCity 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strCity = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'County':
                    /**
                     * Sets the value for strCounty 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strCounty = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ZoneId':
                    /**
                     * Sets the value for intZoneId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intZoneId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'CountryId':
                    /**
                     * Sets the value for intCountryId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intCountryId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'PostalCode':
                    /**
                     * Sets the value for strPostalCode 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strPostalCode = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'IsCurrent':
                    /**
                     * Sets the value for blnIsCurrent (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnIsCurrent = QType::Cast($mixValue, QType::Boolean));
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


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Person':
                    /**
                     * Sets the value for the Person object referenced by intPersonId (Not Null)
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
                            throw new QCallerException('Unable to set an unsaved Person for this Address');

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




    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeAddress extends QQNode {
        protected $strTableName = 'address';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Address';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'PersonId':
                    return new QQNode('person_id', 'PersonId', 'integer', $this);
                case 'Person':
                    return new QQNodePerson('person_id', 'Person', 'integer', $this);
                case 'Street1':
                    return new QQNode('street_1', 'Street1', 'string', $this);
                case 'Street2':
                    return new QQNode('street_2', 'Street2', 'string', $this);
                case 'Suburb':
                    return new QQNode('suburb', 'Suburb', 'string', $this);
                case 'City':
                    return new QQNode('city', 'City', 'string', $this);
                case 'County':
                    return new QQNode('county', 'County', 'string', $this);
                case 'ZoneId':
                    return new QQNode('zone_id', 'ZoneId', 'integer', $this);
                case 'CountryId':
                    return new QQNode('country_id', 'CountryId', 'integer', $this);
                case 'PostalCode':
                    return new QQNode('postal_code', 'PostalCode', 'string', $this);
                case 'IsCurrent':
                    return new QQNode('is_current', 'IsCurrent', 'boolean', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'LastModification':
                    return new QQNode('last_modification', 'LastModification', 'string', $this);

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

    class QQReverseReferenceNodeAddress extends QQReverseReferenceNode {
        protected $strTableName = 'address';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Address';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'PersonId':
                    return new QQNode('person_id', 'PersonId', 'integer', $this);
                case 'Person':
                    return new QQNodePerson('person_id', 'Person', 'integer', $this);
                case 'Street1':
                    return new QQNode('street_1', 'Street1', 'string', $this);
                case 'Street2':
                    return new QQNode('street_2', 'Street2', 'string', $this);
                case 'Suburb':
                    return new QQNode('suburb', 'Suburb', 'string', $this);
                case 'City':
                    return new QQNode('city', 'City', 'string', $this);
                case 'County':
                    return new QQNode('county', 'County', 'string', $this);
                case 'ZoneId':
                    return new QQNode('zone_id', 'ZoneId', 'integer', $this);
                case 'CountryId':
                    return new QQNode('country_id', 'CountryId', 'integer', $this);
                case 'PostalCode':
                    return new QQNode('postal_code', 'PostalCode', 'string', $this);
                case 'IsCurrent':
                    return new QQNode('is_current', 'IsCurrent', 'boolean', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'LastModification':
                    return new QQNode('last_modification', 'LastModification', 'string', $this);

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