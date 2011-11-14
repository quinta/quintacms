<?php
    /**
     * The abstract PersonGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the Person subclass which
     * extends this PersonGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the Person class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $NamePrefix the value for strNamePrefix 
     * @property string $FirstName the value for strFirstName (Not Null)
     * @property string $MiddleName the value for strMiddleName 
     * @property string $LastName the value for strLastName (Not Null)
     * @property string $NameSuffix the value for strNameSuffix 
     * @property string $NickName the value for strNickName 
     * @property string $AvatarUri the value for strAvatarUri 
     * @property string $CompanyName the value for strCompanyName 
     * @property integer $OwnerPersonId the value for intOwnerPersonId 
     * @property boolean $IsVirtual the value for blnIsVirtual 
     * @property Person $OwnerPerson the value for the Person object referenced by intOwnerPersonId 
     * @property Account $Account the value for the Account object that uniquely references this Person
     * @property-read Usergroup $_Usergroup the value for the private _objUsergroup (Read-Only) if set due to an expansion on the person_usergroup_assn association table
     * @property-read Usergroup[] $_UsergroupArray the value for the private _objUsergroupArray (Read-Only) if set due to an ExpandAsArray on the person_usergroup_assn association table
     * @property-read Address $_Address the value for the private _objAddress (Read-Only) if set due to an expansion on the address.person_id reverse relationship
     * @property-read Address[] $_AddressArray the value for the private _objAddressArray (Read-Only) if set due to an ExpandAsArray on the address.person_id reverse relationship
     * @property-read ContentItem $_ContentItemAsCreator the value for the private _objContentItemAsCreator (Read-Only) if set due to an expansion on the content_item.creator_id reverse relationship
     * @property-read ContentItem[] $_ContentItemAsCreatorArray the value for the private _objContentItemAsCreatorArray (Read-Only) if set due to an ExpandAsArray on the content_item.creator_id reverse relationship
     * @property-read EmailAddress $_EmailAddress the value for the private _objEmailAddress (Read-Only) if set due to an expansion on the email_address.person_id reverse relationship
     * @property-read EmailAddress[] $_EmailAddressArray the value for the private _objEmailAddressArray (Read-Only) if set due to an ExpandAsArray on the email_address.person_id reverse relationship
     * @property-read Person $_PersonAsOwner the value for the private _objPersonAsOwner (Read-Only) if set due to an expansion on the person.owner_person_id reverse relationship
     * @property-read Person[] $_PersonAsOwnerArray the value for the private _objPersonAsOwnerArray (Read-Only) if set due to an ExpandAsArray on the person.owner_person_id reverse relationship
     * @property-read PhoneNumber $_PhoneNumber the value for the private _objPhoneNumber (Read-Only) if set due to an expansion on the phone_number.person_id reverse relationship
     * @property-read PhoneNumber[] $_PhoneNumberArray the value for the private _objPhoneNumberArray (Read-Only) if set due to an ExpandAsArray on the phone_number.person_id reverse relationship
     * @property-read Product $_ProductAsManufacturer the value for the private _objProductAsManufacturer (Read-Only) if set due to an expansion on the product.manufacturer_id reverse relationship
     * @property-read Product[] $_ProductAsManufacturerArray the value for the private _objProductAsManufacturerArray (Read-Only) if set due to an ExpandAsArray on the product.manufacturer_id reverse relationship
     * @property-read Product $_ProductAsSupplier the value for the private _objProductAsSupplier (Read-Only) if set due to an expansion on the product.supplier_id reverse relationship
     * @property-read Product[] $_ProductAsSupplierArray the value for the private _objProductAsSupplierArray (Read-Only) if set due to an ExpandAsArray on the product.supplier_id reverse relationship
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class PersonGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column person.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column person.name_prefix
         * @var string strNamePrefix
         *
         */
        protected $strNamePrefix = null;
        const NamePrefixMaxLength = 32;


        /**
         * Protected member variable that maps to the database column person.first_name
         * @var string strFirstName
         *
         */
        protected $strFirstName = null;
        const FirstNameMaxLength = 256;


        /**
         * Protected member variable that maps to the database column person.middle_name
         * @var string strMiddleName
         *
         */
        protected $strMiddleName = null;
        const MiddleNameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column person.last_name
         * @var string strLastName
         *
         */
        protected $strLastName = null;
        const LastNameMaxLength = 256;


        /**
         * Protected member variable that maps to the database column person.name_suffix
         * @var string strNameSuffix
         *
         */
        protected $strNameSuffix = null;
        const NameSuffixMaxLength = 32;


        /**
         * Protected member variable that maps to the database column person.nick_name
         * @var string strNickName
         *
         */
        protected $strNickName = null;
        const NickNameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column person.avatar_uri
         * @var string strAvatarUri
         *
         */
        protected $strAvatarUri = null;
        const AvatarUriMaxLength = 256;


        /**
         * Protected member variable that maps to the database column person.company_name
         * @var string strCompanyName
         *
         */
        protected $strCompanyName = null;
        const CompanyNameMaxLength = 256;


        /**
         * Protected member variable that maps to the database column person.owner_person_id
         * @var integer intOwnerPersonId
         *
         */
        protected $intOwnerPersonId = null;


        /**
         * Protected member variable that maps to the database column person.is_virtual
         * @var boolean blnIsVirtual
         *
         */
        protected $blnIsVirtual = null;


        /**
         * Private member variable that stores a reference to a single Usergroup object
         * (of type Usergroup), if this Person object was restored with
         * an expansion on the person_usergroup_assn association table.
         * @var Usergroup _objUsergroup;
         */
        private $_objUsergroup;

        /**
         * Private member variable that stores a reference to an array of Usergroup objects
         * (of type Usergroup[]), if this Person object was restored with
         * an ExpandAsArray on the person_usergroup_assn association table.
         * @var Usergroup[] _objUsergroupArray;
         */
        private $_objUsergroupArray = array();

        /**
         * Private member variable that stores a reference to a single Address object
         * (of type Address), if this Person object was restored with
         * an expansion on the address association table.
         * @var Address _objAddress;
         */
        private $_objAddress;

        /**
         * Private member variable that stores a reference to an array of Address objects
         * (of type Address[]), if this Person object was restored with
         * an ExpandAsArray on the address association table.
         * @var Address[] _objAddressArray;
         */
        private $_objAddressArray = array();

        /**
         * Private member variable that stores a reference to a single ContentItemAsCreator object
         * (of type ContentItem), if this Person object was restored with
         * an expansion on the content_item association table.
         * @var ContentItem _objContentItemAsCreator;
         */
        private $_objContentItemAsCreator;

        /**
         * Private member variable that stores a reference to an array of ContentItemAsCreator objects
         * (of type ContentItem[]), if this Person object was restored with
         * an ExpandAsArray on the content_item association table.
         * @var ContentItem[] _objContentItemAsCreatorArray;
         */
        private $_objContentItemAsCreatorArray = array();

        /**
         * Private member variable that stores a reference to a single EmailAddress object
         * (of type EmailAddress), if this Person object was restored with
         * an expansion on the email_address association table.
         * @var EmailAddress _objEmailAddress;
         */
        private $_objEmailAddress;

        /**
         * Private member variable that stores a reference to an array of EmailAddress objects
         * (of type EmailAddress[]), if this Person object was restored with
         * an ExpandAsArray on the email_address association table.
         * @var EmailAddress[] _objEmailAddressArray;
         */
        private $_objEmailAddressArray = array();

        /**
         * Private member variable that stores a reference to a single PersonAsOwner object
         * (of type Person), if this Person object was restored with
         * an expansion on the person association table.
         * @var Person _objPersonAsOwner;
         */
        private $_objPersonAsOwner;

        /**
         * Private member variable that stores a reference to an array of PersonAsOwner objects
         * (of type Person[]), if this Person object was restored with
         * an ExpandAsArray on the person association table.
         * @var Person[] _objPersonAsOwnerArray;
         */
        private $_objPersonAsOwnerArray = array();

        /**
         * Private member variable that stores a reference to a single PhoneNumber object
         * (of type PhoneNumber), if this Person object was restored with
         * an expansion on the phone_number association table.
         * @var PhoneNumber _objPhoneNumber;
         */
        private $_objPhoneNumber;

        /**
         * Private member variable that stores a reference to an array of PhoneNumber objects
         * (of type PhoneNumber[]), if this Person object was restored with
         * an ExpandAsArray on the phone_number association table.
         * @var PhoneNumber[] _objPhoneNumberArray;
         */
        private $_objPhoneNumberArray = array();

        /**
         * Private member variable that stores a reference to a single ProductAsManufacturer object
         * (of type Product), if this Person object was restored with
         * an expansion on the product association table.
         * @var Product _objProductAsManufacturer;
         */
        private $_objProductAsManufacturer;

        /**
         * Private member variable that stores a reference to an array of ProductAsManufacturer objects
         * (of type Product[]), if this Person object was restored with
         * an ExpandAsArray on the product association table.
         * @var Product[] _objProductAsManufacturerArray;
         */
        private $_objProductAsManufacturerArray = array();

        /**
         * Private member variable that stores a reference to a single ProductAsSupplier object
         * (of type Product), if this Person object was restored with
         * an expansion on the product association table.
         * @var Product _objProductAsSupplier;
         */
        private $_objProductAsSupplier;

        /**
         * Private member variable that stores a reference to an array of ProductAsSupplier objects
         * (of type Product[]), if this Person object was restored with
         * an ExpandAsArray on the product association table.
         * @var Product[] _objProductAsSupplierArray;
         */
        private $_objProductAsSupplierArray = array();

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
         * in the database column person.owner_person_id.
         *
         * NOTE: Always use the OwnerPerson property getter to correctly retrieve this Person object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Person objOwnerPerson
         */
        protected $objOwnerPerson;

        /**
         * Protected member variable that contains the object which points to
         * this object by the reference in the unique database column account.person_id.
         *
         * NOTE: Always use the Account property getter to correctly retrieve this Account object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Account objAccount
         */
        protected $objAccount;
        
        /**
         * Used internally to manage whether the adjoined Account object
         * needs to be updated on save.
         * 
         * NOTE: Do not manually update this value 
         */
        protected $blnDirtyAccount;



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
         * Load a Person from PK Info
         * @param integer $intId
         * @return Person
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return Person::QuerySingle(
                QQ::Equal(QQN::Person()->Id, $intId)
            );
        }

        /**
         * Load all People
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Person[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call Person::QueryArray to perform the LoadAll query
            try {
                return Person::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all People
         * @return int
         */
        public static function CountAll() {
            // Call Person::QueryCount to perform the CountAll query
            return Person::QueryCount(QQ::All());
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
            $objDatabase = Person::GetDatabase();

            // Create/Build out the QueryBuilder object with Person-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'person');
            Person::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('person');

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
         * Static Qcodo Query method to query for a single Person object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Person the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Person::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new Person object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Person::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of Person objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Person[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Person::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Person::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of Person objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Person::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = Person::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'person_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Person-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                Person::GetSelectFields($objQueryBuilder);
                Person::GetFromFields($objQueryBuilder);

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
            return Person::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this Person
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'person';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'name_prefix', $strAliasPrefix . 'name_prefix');
            $objBuilder->AddSelectItem($strTableName, 'first_name', $strAliasPrefix . 'first_name');
            $objBuilder->AddSelectItem($strTableName, 'middle_name', $strAliasPrefix . 'middle_name');
            $objBuilder->AddSelectItem($strTableName, 'last_name', $strAliasPrefix . 'last_name');
            $objBuilder->AddSelectItem($strTableName, 'name_suffix', $strAliasPrefix . 'name_suffix');
            $objBuilder->AddSelectItem($strTableName, 'nick_name', $strAliasPrefix . 'nick_name');
            $objBuilder->AddSelectItem($strTableName, 'avatar_uri', $strAliasPrefix . 'avatar_uri');
            $objBuilder->AddSelectItem($strTableName, 'company_name', $strAliasPrefix . 'company_name');
            $objBuilder->AddSelectItem($strTableName, 'owner_person_id', $strAliasPrefix . 'owner_person_id');
            $objBuilder->AddSelectItem($strTableName, 'is_virtual', $strAliasPrefix . 'is_virtual');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a Person from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this Person::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return Person
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
                    $strAliasPrefix = 'person__';

                $strAlias = $strAliasPrefix . 'usergroup__usergroup_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objUsergroupArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objUsergroupArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Usergroup::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usergroup__usergroup_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objUsergroupArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objUsergroupArray[] = Usergroup::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usergroup__usergroup_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }


                $strAlias = $strAliasPrefix . 'address__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objAddressArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objAddressArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objAddressArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'contentitemascreator__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objContentItemAsCreatorArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objContentItemAsCreatorArray[$intPreviousChildItemCount - 1];
                        $objChildItem = ContentItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentitemascreator__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objContentItemAsCreatorArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objContentItemAsCreatorArray[] = ContentItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentitemascreator__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'emailaddress__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objEmailAddressArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objEmailAddressArray[$intPreviousChildItemCount - 1];
                        $objChildItem = EmailAddress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'emailaddress__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objEmailAddressArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objEmailAddressArray[] = EmailAddress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'emailaddress__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'personasowner__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objPersonAsOwnerArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objPersonAsOwnerArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'personasowner__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objPersonAsOwnerArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objPersonAsOwnerArray[] = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'personasowner__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'phonenumber__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objPhoneNumberArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objPhoneNumberArray[$intPreviousChildItemCount - 1];
                        $objChildItem = PhoneNumber::InstantiateDbRow($objDbRow, $strAliasPrefix . 'phonenumber__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objPhoneNumberArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objPhoneNumberArray[] = PhoneNumber::InstantiateDbRow($objDbRow, $strAliasPrefix . 'phonenumber__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'productasmanufacturer__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objProductAsManufacturerArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objProductAsManufacturerArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productasmanufacturer__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objProductAsManufacturerArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objProductAsManufacturerArray[] = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productasmanufacturer__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'productassupplier__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objProductAsSupplierArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objProductAsSupplierArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productassupplier__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objProductAsSupplierArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objProductAsSupplierArray[] = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productassupplier__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'person__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the Person object
            $objToReturn = new Person();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'name_prefix', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name_prefix'] : $strAliasPrefix . 'name_prefix';
            $objToReturn->strNamePrefix = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'first_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'first_name'] : $strAliasPrefix . 'first_name';
            $objToReturn->strFirstName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'middle_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'middle_name'] : $strAliasPrefix . 'middle_name';
            $objToReturn->strMiddleName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'last_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'last_name'] : $strAliasPrefix . 'last_name';
            $objToReturn->strLastName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'name_suffix', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name_suffix'] : $strAliasPrefix . 'name_suffix';
            $objToReturn->strNameSuffix = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'nick_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nick_name'] : $strAliasPrefix . 'nick_name';
            $objToReturn->strNickName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'avatar_uri', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'avatar_uri'] : $strAliasPrefix . 'avatar_uri';
            $objToReturn->strAvatarUri = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'company_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'company_name'] : $strAliasPrefix . 'company_name';
            $objToReturn->strCompanyName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'owner_person_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'owner_person_id'] : $strAliasPrefix . 'owner_person_id';
            $objToReturn->intOwnerPersonId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'is_virtual', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'is_virtual'] : $strAliasPrefix . 'is_virtual';
            $objToReturn->blnIsVirtual = $objDbRow->GetColumn($strAliasName, 'Bit');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'person__';

            // Check for OwnerPerson Early Binding
            $strAlias = $strAliasPrefix . 'owner_person_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objOwnerPerson = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'owner_person_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);


            // Check for Account Unique ReverseReference Binding
            $strAlias = $strAliasPrefix . 'account__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if ($objDbRow->ColumnExists($strAliasName)) {
                if (!is_null($objDbRow->GetColumn($strAliasName)))
                    $objToReturn->objAccount = Account::InstantiateDbRow($objDbRow, $strAliasPrefix . 'account__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    // We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
                    // Let's set to FALSE so that the object knows not to try and re-query again
                    $objToReturn->objAccount = false;
            }


            // Check for Usergroup Virtual Binding
            $strAlias = $strAliasPrefix . 'usergroup__usergroup_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objUsergroupArray[] = Usergroup::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usergroup__usergroup_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objUsergroup = Usergroup::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usergroup__usergroup_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }


            // Check for Address Virtual Binding
            $strAlias = $strAliasPrefix . 'address__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objAddressArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objAddress = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for ContentItemAsCreator Virtual Binding
            $strAlias = $strAliasPrefix . 'contentitemascreator__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objContentItemAsCreatorArray[] = ContentItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentitemascreator__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objContentItemAsCreator = ContentItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentitemascreator__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for EmailAddress Virtual Binding
            $strAlias = $strAliasPrefix . 'emailaddress__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objEmailAddressArray[] = EmailAddress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'emailaddress__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objEmailAddress = EmailAddress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'emailaddress__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for PersonAsOwner Virtual Binding
            $strAlias = $strAliasPrefix . 'personasowner__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objPersonAsOwnerArray[] = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'personasowner__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objPersonAsOwner = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'personasowner__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for PhoneNumber Virtual Binding
            $strAlias = $strAliasPrefix . 'phonenumber__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objPhoneNumberArray[] = PhoneNumber::InstantiateDbRow($objDbRow, $strAliasPrefix . 'phonenumber__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objPhoneNumber = PhoneNumber::InstantiateDbRow($objDbRow, $strAliasPrefix . 'phonenumber__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for ProductAsManufacturer Virtual Binding
            $strAlias = $strAliasPrefix . 'productasmanufacturer__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objProductAsManufacturerArray[] = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productasmanufacturer__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objProductAsManufacturer = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productasmanufacturer__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for ProductAsSupplier Virtual Binding
            $strAlias = $strAliasPrefix . 'productassupplier__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objProductAsSupplierArray[] = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productassupplier__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objProductAsSupplier = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productassupplier__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }

        /**
         * Instantiate an array of People from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return Person[]
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
                    $objItem = Person::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = Person::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single Person object,
         * by Id Index(es)
         * @param integer $intId
         * @return Person
        */
        public static function LoadById($intId) {
            return Person::QuerySingle(
                QQ::Equal(QQN::Person()->Id, $intId)
            );
        }
            
        /**
         * Load an array of Person objects,
         * by FirstName Index(es)
         * @param string $strFirstName
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Person[]
        */
        public static function LoadArrayByFirstName($strFirstName, $objOptionalClauses = null) {
            // Call Person::QueryArray to perform the LoadArrayByFirstName query
            try {
                return Person::QueryArray(
                    QQ::Equal(QQN::Person()->FirstName, $strFirstName),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count People
         * by FirstName Index(es)
         * @param string $strFirstName
         * @return int
        */
        public static function CountByFirstName($strFirstName) {
            // Call Person::QueryCount to perform the CountByFirstName query
            return Person::QueryCount(
                QQ::Equal(QQN::Person()->FirstName, $strFirstName)
            );
        }
            
        /**
         * Load an array of Person objects,
         * by LastName Index(es)
         * @param string $strLastName
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Person[]
        */
        public static function LoadArrayByLastName($strLastName, $objOptionalClauses = null) {
            // Call Person::QueryArray to perform the LoadArrayByLastName query
            try {
                return Person::QueryArray(
                    QQ::Equal(QQN::Person()->LastName, $strLastName),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count People
         * by LastName Index(es)
         * @param string $strLastName
         * @return int
        */
        public static function CountByLastName($strLastName) {
            // Call Person::QueryCount to perform the CountByLastName query
            return Person::QueryCount(
                QQ::Equal(QQN::Person()->LastName, $strLastName)
            );
        }
            
        /**
         * Load an array of Person objects,
         * by OwnerPersonId Index(es)
         * @param integer $intOwnerPersonId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Person[]
        */
        public static function LoadArrayByOwnerPersonId($intOwnerPersonId, $objOptionalClauses = null) {
            // Call Person::QueryArray to perform the LoadArrayByOwnerPersonId query
            try {
                return Person::QueryArray(
                    QQ::Equal(QQN::Person()->OwnerPersonId, $intOwnerPersonId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count People
         * by OwnerPersonId Index(es)
         * @param integer $intOwnerPersonId
         * @return int
        */
        public static function CountByOwnerPersonId($intOwnerPersonId) {
            // Call Person::QueryCount to perform the CountByOwnerPersonId query
            return Person::QueryCount(
                QQ::Equal(QQN::Person()->OwnerPersonId, $intOwnerPersonId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////
            /**
         * Load an array of Usergroup objects for a given Usergroup
         * via the person_usergroup_assn table
         * @param integer $intUsergroupId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Person[]
        */
        public static function LoadArrayByUsergroup($intUsergroupId, $objOptionalClauses = null) {
            // Call Person::QueryArray to perform the LoadArrayByUsergroup query
            try {
                return Person::QueryArray(
                    QQ::Equal(QQN::Person()->Usergroup->UsergroupId, $intUsergroupId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count People for a given Usergroup
         * via the person_usergroup_assn table
         * @param integer $intUsergroupId
         * @return int
        */
        public static function CountByUsergroup($intUsergroupId) {
            return Person::QueryCount(
                QQ::Equal(QQN::Person()->Usergroup->UsergroupId, $intUsergroupId)
            );
        }


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this Person
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `person` (
                            `name_prefix`,
                            `first_name`,
                            `middle_name`,
                            `last_name`,
                            `name_suffix`,
                            `nick_name`,
                            `avatar_uri`,
                            `company_name`,
                            `owner_person_id`,
                            `is_virtual`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strNamePrefix) . ',
                            ' . $objDatabase->SqlVariable($this->strFirstName) . ',
                            ' . $objDatabase->SqlVariable($this->strMiddleName) . ',
                            ' . $objDatabase->SqlVariable($this->strLastName) . ',
                            ' . $objDatabase->SqlVariable($this->strNameSuffix) . ',
                            ' . $objDatabase->SqlVariable($this->strNickName) . ',
                            ' . $objDatabase->SqlVariable($this->strAvatarUri) . ',
                            ' . $objDatabase->SqlVariable($this->strCompanyName) . ',
                            ' . $objDatabase->SqlVariable($this->intOwnerPersonId) . ',
                            ' . $objDatabase->SqlVariable($this->blnIsVirtual) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('person', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `person`
                        SET
                            `name_prefix` = ' . $objDatabase->SqlVariable($this->strNamePrefix) . ',
                            `first_name` = ' . $objDatabase->SqlVariable($this->strFirstName) . ',
                            `middle_name` = ' . $objDatabase->SqlVariable($this->strMiddleName) . ',
                            `last_name` = ' . $objDatabase->SqlVariable($this->strLastName) . ',
                            `name_suffix` = ' . $objDatabase->SqlVariable($this->strNameSuffix) . ',
                            `nick_name` = ' . $objDatabase->SqlVariable($this->strNickName) . ',
                            `avatar_uri` = ' . $objDatabase->SqlVariable($this->strAvatarUri) . ',
                            `company_name` = ' . $objDatabase->SqlVariable($this->strCompanyName) . ',
                            `owner_person_id` = ' . $objDatabase->SqlVariable($this->intOwnerPersonId) . ',
                            `is_virtual` = ' . $objDatabase->SqlVariable($this->blnIsVirtual) . '
                        WHERE
                            `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                    ');
                }

        
        
                // Update the adjoined Account object (if applicable)
                // TODO: Make this into hard-coded SQL queries
                if ($this->blnDirtyAccount) {
                    // Unassociate the old one (if applicable)
                    if ($objAssociated = Account::LoadByPersonId($this->intId)) {
                        $objAssociated->PersonId = null;
                        $objAssociated->Save();
                    }

                    // Associate the new one (if applicable)
                    if ($this->objAccount) {
                        $this->objAccount->PersonId = $this->intId;
                        $this->objAccount->Save();
                    }

                    // Reset the "Dirty" flag
                    $this->blnDirtyAccount = false;
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
         * Delete this Person
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this Person with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            
            
            // Update the adjoined Account object (if applicable) and perform a delete

            // Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
            // you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
            if ($objAssociated = Account::LoadByPersonId($this->intId)) {
                $objAssociated->Delete();
            }

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `person`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all People
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `person`');
        }

        /**
         * Truncate person table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `person`');
        }

        /**
         * Reload this Person from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved Person object.');

            // Reload the Object
            $objReloaded = Person::Load($this->intId);

            // Update $this's local variables to match
            $this->strNamePrefix = $objReloaded->strNamePrefix;
            $this->strFirstName = $objReloaded->strFirstName;
            $this->strMiddleName = $objReloaded->strMiddleName;
            $this->strLastName = $objReloaded->strLastName;
            $this->strNameSuffix = $objReloaded->strNameSuffix;
            $this->strNickName = $objReloaded->strNickName;
            $this->strAvatarUri = $objReloaded->strAvatarUri;
            $this->strCompanyName = $objReloaded->strCompanyName;
            $this->OwnerPersonId = $objReloaded->OwnerPersonId;
            $this->blnIsVirtual = $objReloaded->blnIsVirtual;
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

                case 'NamePrefix':
                    /**
                     * Gets the value for strNamePrefix 
                     * @return string
                     */
                    return $this->strNamePrefix;

                case 'FirstName':
                    /**
                     * Gets the value for strFirstName (Not Null)
                     * @return string
                     */
                    return $this->strFirstName;

                case 'MiddleName':
                    /**
                     * Gets the value for strMiddleName 
                     * @return string
                     */
                    return $this->strMiddleName;

                case 'LastName':
                    /**
                     * Gets the value for strLastName (Not Null)
                     * @return string
                     */
                    return $this->strLastName;

                case 'NameSuffix':
                    /**
                     * Gets the value for strNameSuffix 
                     * @return string
                     */
                    return $this->strNameSuffix;

                case 'NickName':
                    /**
                     * Gets the value for strNickName 
                     * @return string
                     */
                    return $this->strNickName;

                case 'AvatarUri':
                    /**
                     * Gets the value for strAvatarUri 
                     * @return string
                     */
                    return $this->strAvatarUri;

                case 'CompanyName':
                    /**
                     * Gets the value for strCompanyName 
                     * @return string
                     */
                    return $this->strCompanyName;

                case 'OwnerPersonId':
                    /**
                     * Gets the value for intOwnerPersonId 
                     * @return integer
                     */
                    return $this->intOwnerPersonId;

                case 'IsVirtual':
                    /**
                     * Gets the value for blnIsVirtual 
                     * @return boolean
                     */
                    return $this->blnIsVirtual;


                ///////////////////
                // Member Objects
                ///////////////////
                case 'OwnerPerson':
                    /**
                     * Gets the value for the Person object referenced by intOwnerPersonId 
                     * @return Person
                     */
                    try {
                        if ((!$this->objOwnerPerson) && (!is_null($this->intOwnerPersonId)))
                            $this->objOwnerPerson = Person::Load($this->intOwnerPersonId);
                        return $this->objOwnerPerson;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

        
        
                case 'Account':
                    /**
                     * Gets the value for the Account object that uniquely references this Person
                     * by objAccount (Unique)
                     * @return Account
                     */
                    try {
                        if ($this->objAccount === false)
                            // We've attempted early binding -- and the reverse reference object does not exist
                            return null;
                        if (!$this->objAccount)
                            $this->objAccount = Account::LoadByPersonId($this->intId);
                        return $this->objAccount;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_Usergroup':
                    /**
                     * Gets the value for the private _objUsergroup (Read-Only)
                     * if set due to an expansion on the person_usergroup_assn association table
                     * @return Usergroup
                     */
                    return $this->_objUsergroup;

                case '_UsergroupArray':
                    /**
                     * Gets the value for the private _objUsergroupArray (Read-Only)
                     * if set due to an ExpandAsArray on the person_usergroup_assn association table
                     * @return Usergroup[]
                     */
                    return (array) $this->_objUsergroupArray;

                case '_Address':
                    /**
                     * Gets the value for the private _objAddress (Read-Only)
                     * if set due to an expansion on the address.person_id reverse relationship
                     * @return Address
                     */
                    return $this->_objAddress;

                case '_AddressArray':
                    /**
                     * Gets the value for the private _objAddressArray (Read-Only)
                     * if set due to an ExpandAsArray on the address.person_id reverse relationship
                     * @return Address[]
                     */
                    return (array) $this->_objAddressArray;

                case '_ContentItemAsCreator':
                    /**
                     * Gets the value for the private _objContentItemAsCreator (Read-Only)
                     * if set due to an expansion on the content_item.creator_id reverse relationship
                     * @return ContentItem
                     */
                    return $this->_objContentItemAsCreator;

                case '_ContentItemAsCreatorArray':
                    /**
                     * Gets the value for the private _objContentItemAsCreatorArray (Read-Only)
                     * if set due to an ExpandAsArray on the content_item.creator_id reverse relationship
                     * @return ContentItem[]
                     */
                    return (array) $this->_objContentItemAsCreatorArray;

                case '_EmailAddress':
                    /**
                     * Gets the value for the private _objEmailAddress (Read-Only)
                     * if set due to an expansion on the email_address.person_id reverse relationship
                     * @return EmailAddress
                     */
                    return $this->_objEmailAddress;

                case '_EmailAddressArray':
                    /**
                     * Gets the value for the private _objEmailAddressArray (Read-Only)
                     * if set due to an ExpandAsArray on the email_address.person_id reverse relationship
                     * @return EmailAddress[]
                     */
                    return (array) $this->_objEmailAddressArray;

                case '_PersonAsOwner':
                    /**
                     * Gets the value for the private _objPersonAsOwner (Read-Only)
                     * if set due to an expansion on the person.owner_person_id reverse relationship
                     * @return Person
                     */
                    return $this->_objPersonAsOwner;

                case '_PersonAsOwnerArray':
                    /**
                     * Gets the value for the private _objPersonAsOwnerArray (Read-Only)
                     * if set due to an ExpandAsArray on the person.owner_person_id reverse relationship
                     * @return Person[]
                     */
                    return (array) $this->_objPersonAsOwnerArray;

                case '_PhoneNumber':
                    /**
                     * Gets the value for the private _objPhoneNumber (Read-Only)
                     * if set due to an expansion on the phone_number.person_id reverse relationship
                     * @return PhoneNumber
                     */
                    return $this->_objPhoneNumber;

                case '_PhoneNumberArray':
                    /**
                     * Gets the value for the private _objPhoneNumberArray (Read-Only)
                     * if set due to an ExpandAsArray on the phone_number.person_id reverse relationship
                     * @return PhoneNumber[]
                     */
                    return (array) $this->_objPhoneNumberArray;

                case '_ProductAsManufacturer':
                    /**
                     * Gets the value for the private _objProductAsManufacturer (Read-Only)
                     * if set due to an expansion on the product.manufacturer_id reverse relationship
                     * @return Product
                     */
                    return $this->_objProductAsManufacturer;

                case '_ProductAsManufacturerArray':
                    /**
                     * Gets the value for the private _objProductAsManufacturerArray (Read-Only)
                     * if set due to an ExpandAsArray on the product.manufacturer_id reverse relationship
                     * @return Product[]
                     */
                    return (array) $this->_objProductAsManufacturerArray;

                case '_ProductAsSupplier':
                    /**
                     * Gets the value for the private _objProductAsSupplier (Read-Only)
                     * if set due to an expansion on the product.supplier_id reverse relationship
                     * @return Product
                     */
                    return $this->_objProductAsSupplier;

                case '_ProductAsSupplierArray':
                    /**
                     * Gets the value for the private _objProductAsSupplierArray (Read-Only)
                     * if set due to an ExpandAsArray on the product.supplier_id reverse relationship
                     * @return Product[]
                     */
                    return (array) $this->_objProductAsSupplierArray;


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
                case 'NamePrefix':
                    /**
                     * Sets the value for strNamePrefix 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strNamePrefix = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'FirstName':
                    /**
                     * Sets the value for strFirstName (Not Null)
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strFirstName = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'MiddleName':
                    /**
                     * Sets the value for strMiddleName 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strMiddleName = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'LastName':
                    /**
                     * Sets the value for strLastName (Not Null)
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strLastName = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'NameSuffix':
                    /**
                     * Sets the value for strNameSuffix 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strNameSuffix = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'NickName':
                    /**
                     * Sets the value for strNickName 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strNickName = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'AvatarUri':
                    /**
                     * Sets the value for strAvatarUri 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strAvatarUri = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'CompanyName':
                    /**
                     * Sets the value for strCompanyName 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strCompanyName = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'OwnerPersonId':
                    /**
                     * Sets the value for intOwnerPersonId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objOwnerPerson = null;
                        return ($this->intOwnerPersonId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'IsVirtual':
                    /**
                     * Sets the value for blnIsVirtual 
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnIsVirtual = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ///////////////////
                // Member Objects
                ///////////////////
                case 'OwnerPerson':
                    /**
                     * Sets the value for the Person object referenced by intOwnerPersonId 
                     * @param Person $mixValue
                     * @return Person
                     */
                    if (is_null($mixValue)) {
                        $this->intOwnerPersonId = null;
                        $this->objOwnerPerson = null;
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
                            throw new QCallerException('Unable to set an unsaved OwnerPerson for this Person');

                        // Update Local Member Variables
                        $this->objOwnerPerson = $mixValue;
                        $this->intOwnerPersonId = $mixValue->Id;

                        // Return $mixValue
                        return $mixValue;
                    }
                    break;

                case 'Account':
                    /**
                     * Sets the value for the Account object referenced by objAccount (Unique)
                     * @param Account $mixValue
                     * @return Account
                     */
                    if (is_null($mixValue)) {
                        $this->objAccount = null;

                        // Make sure we update the adjoined Account object the next time we call Save()
                        $this->blnDirtyAccount = true;

                        return null;
                    } else {
                        // Make sure $mixValue actually is a Account object
                        try {
                            $mixValue = QType::Cast($mixValue, 'Account');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        }

                        // Are we setting objAccount to a DIFFERENT $mixValue?
                        if ((!$this->Account) || ($this->Account->Id != $mixValue->Id)) {
                            // Yes -- therefore, set the "Dirty" flag to true
                            // to make sure we update the adjoined Account object the next time we call Save()
                            $this->blnDirtyAccount = true;

                            // Update Local Member Variable
                            $this->objAccount = $mixValue;
                        } else {
                            // Nope -- therefore, make no changes
                        }

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

            
        
        // Related Objects' Methods for Address
        //-------------------------------------------------------------------

        /**
         * Gets all associated Addresses as an array of Address objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Address[]
        */ 
        public function GetAddressArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Address::LoadArrayByPersonId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated Addresses
         * @return int
        */ 
        public function CountAddresses() {
            if ((is_null($this->intId)))
                return 0;

            return Address::CountByPersonId($this->intId);
        }

        /**
         * Associates a Address
         * @param Address $objAddress
         * @return void
        */ 
        public function AssociateAddress(Address $objAddress) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddress on this unsaved Person.');
            if ((is_null($objAddress->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddress on this Person with an unsaved Address.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `address`
                SET
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objAddress->Id) . '
            ');
        }

        /**
         * Unassociates a Address
         * @param Address $objAddress
         * @return void
        */ 
        public function UnassociateAddress(Address $objAddress) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');
            if ((is_null($objAddress->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this Person with an unsaved Address.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `address`
                SET
                    `person_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objAddress->Id) . ' AND
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all Addresses
         * @return void
        */ 
        public function UnassociateAllAddresses() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `address`
                SET
                    `person_id` = null
                WHERE
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated Address
         * @param Address $objAddress
         * @return void
        */ 
        public function DeleteAssociatedAddress(Address $objAddress) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');
            if ((is_null($objAddress->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this Person with an unsaved Address.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `address`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objAddress->Id) . ' AND
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated Addresses
         * @return void
        */ 
        public function DeleteAllAddresses() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `address`
                WHERE
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for ContentItemAsCreator
        //-------------------------------------------------------------------

        /**
         * Gets all associated ContentItemsAsCreator as an array of ContentItem objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentItem[]
        */ 
        public function GetContentItemAsCreatorArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return ContentItem::LoadArrayByCreatorId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated ContentItemsAsCreator
         * @return int
        */ 
        public function CountContentItemsAsCreator() {
            if ((is_null($this->intId)))
                return 0;

            return ContentItem::CountByCreatorId($this->intId);
        }

        /**
         * Associates a ContentItemAsCreator
         * @param ContentItem $objContentItem
         * @return void
        */ 
        public function AssociateContentItemAsCreator(ContentItem $objContentItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentItemAsCreator on this unsaved Person.');
            if ((is_null($objContentItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentItemAsCreator on this Person with an unsaved ContentItem.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `content_item`
                SET
                    `creator_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objContentItem->Id) . '
            ');
        }

        /**
         * Unassociates a ContentItemAsCreator
         * @param ContentItem $objContentItem
         * @return void
        */ 
        public function UnassociateContentItemAsCreator(ContentItem $objContentItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentItemAsCreator on this unsaved Person.');
            if ((is_null($objContentItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentItemAsCreator on this Person with an unsaved ContentItem.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `content_item`
                SET
                    `creator_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objContentItem->Id) . ' AND
                    `creator_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all ContentItemsAsCreator
         * @return void
        */ 
        public function UnassociateAllContentItemsAsCreator() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentItemAsCreator on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `content_item`
                SET
                    `creator_id` = null
                WHERE
                    `creator_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated ContentItemAsCreator
         * @param ContentItem $objContentItem
         * @return void
        */ 
        public function DeleteAssociatedContentItemAsCreator(ContentItem $objContentItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentItemAsCreator on this unsaved Person.');
            if ((is_null($objContentItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentItemAsCreator on this Person with an unsaved ContentItem.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objContentItem->Id) . ' AND
                    `creator_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated ContentItemsAsCreator
         * @return void
        */ 
        public function DeleteAllContentItemsAsCreator() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentItemAsCreator on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item`
                WHERE
                    `creator_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for EmailAddress
        //-------------------------------------------------------------------

        /**
         * Gets all associated EmailAddresses as an array of EmailAddress objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return EmailAddress[]
        */ 
        public function GetEmailAddressArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return EmailAddress::LoadArrayByPersonId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated EmailAddresses
         * @return int
        */ 
        public function CountEmailAddresses() {
            if ((is_null($this->intId)))
                return 0;

            return EmailAddress::CountByPersonId($this->intId);
        }

        /**
         * Associates a EmailAddress
         * @param EmailAddress $objEmailAddress
         * @return void
        */ 
        public function AssociateEmailAddress(EmailAddress $objEmailAddress) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateEmailAddress on this unsaved Person.');
            if ((is_null($objEmailAddress->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateEmailAddress on this Person with an unsaved EmailAddress.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `email_address`
                SET
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objEmailAddress->Id) . '
            ');
        }

        /**
         * Unassociates a EmailAddress
         * @param EmailAddress $objEmailAddress
         * @return void
        */ 
        public function UnassociateEmailAddress(EmailAddress $objEmailAddress) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEmailAddress on this unsaved Person.');
            if ((is_null($objEmailAddress->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEmailAddress on this Person with an unsaved EmailAddress.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `email_address`
                SET
                    `person_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objEmailAddress->Id) . ' AND
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all EmailAddresses
         * @return void
        */ 
        public function UnassociateAllEmailAddresses() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEmailAddress on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `email_address`
                SET
                    `person_id` = null
                WHERE
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated EmailAddress
         * @param EmailAddress $objEmailAddress
         * @return void
        */ 
        public function DeleteAssociatedEmailAddress(EmailAddress $objEmailAddress) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEmailAddress on this unsaved Person.');
            if ((is_null($objEmailAddress->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEmailAddress on this Person with an unsaved EmailAddress.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `email_address`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objEmailAddress->Id) . ' AND
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated EmailAddresses
         * @return void
        */ 
        public function DeleteAllEmailAddresses() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEmailAddress on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `email_address`
                WHERE
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for PersonAsOwner
        //-------------------------------------------------------------------

        /**
         * Gets all associated PeopleAsOwner as an array of Person objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Person[]
        */ 
        public function GetPersonAsOwnerArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Person::LoadArrayByOwnerPersonId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated PeopleAsOwner
         * @return int
        */ 
        public function CountPeopleAsOwner() {
            if ((is_null($this->intId)))
                return 0;

            return Person::CountByOwnerPersonId($this->intId);
        }

        /**
         * Associates a PersonAsOwner
         * @param Person $objPerson
         * @return void
        */ 
        public function AssociatePersonAsOwner(Person $objPerson) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePersonAsOwner on this unsaved Person.');
            if ((is_null($objPerson->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePersonAsOwner on this Person with an unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `person`
                SET
                    `owner_person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objPerson->Id) . '
            ');
        }

        /**
         * Unassociates a PersonAsOwner
         * @param Person $objPerson
         * @return void
        */ 
        public function UnassociatePersonAsOwner(Person $objPerson) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePersonAsOwner on this unsaved Person.');
            if ((is_null($objPerson->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePersonAsOwner on this Person with an unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `person`
                SET
                    `owner_person_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objPerson->Id) . ' AND
                    `owner_person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all PeopleAsOwner
         * @return void
        */ 
        public function UnassociateAllPeopleAsOwner() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePersonAsOwner on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `person`
                SET
                    `owner_person_id` = null
                WHERE
                    `owner_person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated PersonAsOwner
         * @param Person $objPerson
         * @return void
        */ 
        public function DeleteAssociatedPersonAsOwner(Person $objPerson) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePersonAsOwner on this unsaved Person.');
            if ((is_null($objPerson->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePersonAsOwner on this Person with an unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `person`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objPerson->Id) . ' AND
                    `owner_person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated PeopleAsOwner
         * @return void
        */ 
        public function DeleteAllPeopleAsOwner() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePersonAsOwner on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `person`
                WHERE
                    `owner_person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for PhoneNumber
        //-------------------------------------------------------------------

        /**
         * Gets all associated PhoneNumbers as an array of PhoneNumber objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return PhoneNumber[]
        */ 
        public function GetPhoneNumberArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return PhoneNumber::LoadArrayByPersonId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated PhoneNumbers
         * @return int
        */ 
        public function CountPhoneNumbers() {
            if ((is_null($this->intId)))
                return 0;

            return PhoneNumber::CountByPersonId($this->intId);
        }

        /**
         * Associates a PhoneNumber
         * @param PhoneNumber $objPhoneNumber
         * @return void
        */ 
        public function AssociatePhoneNumber(PhoneNumber $objPhoneNumber) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePhoneNumber on this unsaved Person.');
            if ((is_null($objPhoneNumber->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePhoneNumber on this Person with an unsaved PhoneNumber.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `phone_number`
                SET
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objPhoneNumber->Id) . '
            ');
        }

        /**
         * Unassociates a PhoneNumber
         * @param PhoneNumber $objPhoneNumber
         * @return void
        */ 
        public function UnassociatePhoneNumber(PhoneNumber $objPhoneNumber) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePhoneNumber on this unsaved Person.');
            if ((is_null($objPhoneNumber->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePhoneNumber on this Person with an unsaved PhoneNumber.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `phone_number`
                SET
                    `person_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objPhoneNumber->Id) . ' AND
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all PhoneNumbers
         * @return void
        */ 
        public function UnassociateAllPhoneNumbers() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePhoneNumber on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `phone_number`
                SET
                    `person_id` = null
                WHERE
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated PhoneNumber
         * @param PhoneNumber $objPhoneNumber
         * @return void
        */ 
        public function DeleteAssociatedPhoneNumber(PhoneNumber $objPhoneNumber) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePhoneNumber on this unsaved Person.');
            if ((is_null($objPhoneNumber->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePhoneNumber on this Person with an unsaved PhoneNumber.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `phone_number`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objPhoneNumber->Id) . ' AND
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated PhoneNumbers
         * @return void
        */ 
        public function DeleteAllPhoneNumbers() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePhoneNumber on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `phone_number`
                WHERE
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for ProductAsManufacturer
        //-------------------------------------------------------------------

        /**
         * Gets all associated ProductsAsManufacturer as an array of Product objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */ 
        public function GetProductAsManufacturerArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Product::LoadArrayByManufacturerId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated ProductsAsManufacturer
         * @return int
        */ 
        public function CountProductsAsManufacturer() {
            if ((is_null($this->intId)))
                return 0;

            return Product::CountByManufacturerId($this->intId);
        }

        /**
         * Associates a ProductAsManufacturer
         * @param Product $objProduct
         * @return void
        */ 
        public function AssociateProductAsManufacturer(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProductAsManufacturer on this unsaved Person.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProductAsManufacturer on this Person with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `product`
                SET
                    `manufacturer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objProduct->Id) . '
            ');
        }

        /**
         * Unassociates a ProductAsManufacturer
         * @param Product $objProduct
         * @return void
        */ 
        public function UnassociateProductAsManufacturer(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsManufacturer on this unsaved Person.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsManufacturer on this Person with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `product`
                SET
                    `manufacturer_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objProduct->Id) . ' AND
                    `manufacturer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all ProductsAsManufacturer
         * @return void
        */ 
        public function UnassociateAllProductsAsManufacturer() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsManufacturer on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `product`
                SET
                    `manufacturer_id` = null
                WHERE
                    `manufacturer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated ProductAsManufacturer
         * @param Product $objProduct
         * @return void
        */ 
        public function DeleteAssociatedProductAsManufacturer(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsManufacturer on this unsaved Person.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsManufacturer on this Person with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objProduct->Id) . ' AND
                    `manufacturer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated ProductsAsManufacturer
         * @return void
        */ 
        public function DeleteAllProductsAsManufacturer() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsManufacturer on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product`
                WHERE
                    `manufacturer_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for ProductAsSupplier
        //-------------------------------------------------------------------

        /**
         * Gets all associated ProductsAsSupplier as an array of Product objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */ 
        public function GetProductAsSupplierArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Product::LoadArrayBySupplierId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated ProductsAsSupplier
         * @return int
        */ 
        public function CountProductsAsSupplier() {
            if ((is_null($this->intId)))
                return 0;

            return Product::CountBySupplierId($this->intId);
        }

        /**
         * Associates a ProductAsSupplier
         * @param Product $objProduct
         * @return void
        */ 
        public function AssociateProductAsSupplier(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProductAsSupplier on this unsaved Person.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProductAsSupplier on this Person with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `product`
                SET
                    `supplier_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objProduct->Id) . '
            ');
        }

        /**
         * Unassociates a ProductAsSupplier
         * @param Product $objProduct
         * @return void
        */ 
        public function UnassociateProductAsSupplier(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsSupplier on this unsaved Person.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsSupplier on this Person with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `product`
                SET
                    `supplier_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objProduct->Id) . ' AND
                    `supplier_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all ProductsAsSupplier
         * @return void
        */ 
        public function UnassociateAllProductsAsSupplier() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsSupplier on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `product`
                SET
                    `supplier_id` = null
                WHERE
                    `supplier_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated ProductAsSupplier
         * @param Product $objProduct
         * @return void
        */ 
        public function DeleteAssociatedProductAsSupplier(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsSupplier on this unsaved Person.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsSupplier on this Person with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objProduct->Id) . ' AND
                    `supplier_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated ProductsAsSupplier
         * @return void
        */ 
        public function DeleteAllProductsAsSupplier() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsSupplier on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product`
                WHERE
                    `supplier_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        // Related Many-to-Many Objects' Methods for Usergroup
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated Usergroups as an array of Usergroup objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Usergroup[]
        */ 
        public function GetUsergroupArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Usergroup::LoadArrayByPerson($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated Usergroups
         * @return int
        */ 
        public function CountUsergroups() {
            if ((is_null($this->intId)))
                return 0;

            return Usergroup::CountByPerson($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific Usergroup
         * @param Usergroup $objUsergroup
         * @return bool
        */
        public function IsUsergroupAssociated(Usergroup $objUsergroup) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsUsergroupAssociated on this unsaved Person.');
            if ((is_null($objUsergroup->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsUsergroupAssociated on this Person with an unsaved Usergroup.');

            $intRowCount = Person::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Person()->Id, $this->intId),
                    QQ::Equal(QQN::Person()->Usergroup->UsergroupId, $objUsergroup->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a Usergroup
         * @param Usergroup $objUsergroup
         * @return void
        */ 
        public function AssociateUsergroup(Usergroup $objUsergroup) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsergroup on this unsaved Person.');
            if ((is_null($objUsergroup->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsergroup on this Person with an unsaved Usergroup.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `person_usergroup_assn` (
                    `person_id`,
                    `usergroup_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objUsergroup->Id) . '
                )
            ');
        }

        /**
         * Unassociates a Usergroup
         * @param Usergroup $objUsergroup
         * @return void
        */ 
        public function UnassociateUsergroup(Usergroup $objUsergroup) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsergroup on this unsaved Person.');
            if ((is_null($objUsergroup->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsergroup on this Person with an unsaved Usergroup.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `person_usergroup_assn`
                WHERE
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `usergroup_id` = ' . $objDatabase->SqlVariable($objUsergroup->Id) . '
            ');
        }

        /**
         * Unassociates all Usergroups
         * @return void
        */ 
        public function UnassociateAllUsergroups() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllUsergroupArray on this unsaved Person.');

            // Get the Database Object for this Class
            $objDatabase = Person::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `person_usergroup_assn`
                WHERE
                    `person_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }



    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodePersonUsergroup extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'usergroup';

        protected $strTableName = 'person_usergroup_assn';
        protected $strPrimaryKey = 'person_id';
        protected $strClassName = 'Usergroup';

        public function __get($strName) {
            switch ($strName) {
                case 'UsergroupId':
                    return new QQNode('usergroup_id', 'UsergroupId', 'integer', $this);
                case 'Usergroup':
                    return new QQNodeUsergroup('usergroup_id', 'UsergroupId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeUsergroup('usergroup_id', 'UsergroupId', 'integer', $this);
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

    class QQNodePerson extends QQNode {
        protected $strTableName = 'person';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Person';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'NamePrefix':
                    return new QQNode('name_prefix', 'NamePrefix', 'string', $this);
                case 'FirstName':
                    return new QQNode('first_name', 'FirstName', 'string', $this);
                case 'MiddleName':
                    return new QQNode('middle_name', 'MiddleName', 'string', $this);
                case 'LastName':
                    return new QQNode('last_name', 'LastName', 'string', $this);
                case 'NameSuffix':
                    return new QQNode('name_suffix', 'NameSuffix', 'string', $this);
                case 'NickName':
                    return new QQNode('nick_name', 'NickName', 'string', $this);
                case 'AvatarUri':
                    return new QQNode('avatar_uri', 'AvatarUri', 'string', $this);
                case 'CompanyName':
                    return new QQNode('company_name', 'CompanyName', 'string', $this);
                case 'OwnerPersonId':
                    return new QQNode('owner_person_id', 'OwnerPersonId', 'integer', $this);
                case 'OwnerPerson':
                    return new QQNodePerson('owner_person_id', 'OwnerPerson', 'integer', $this);
                case 'IsVirtual':
                    return new QQNode('is_virtual', 'IsVirtual', 'boolean', $this);
                case 'Usergroup':
                    return new QQNodePersonUsergroup($this);
                case 'Account':
                    return new QQReverseReferenceNodeAccount($this, 'account', 'reverse_reference', 'person_id', 'Account');
                case 'Address':
                    return new QQReverseReferenceNodeAddress($this, 'address', 'reverse_reference', 'person_id');
                case 'ContentItemAsCreator':
                    return new QQReverseReferenceNodeContentItem($this, 'contentitemascreator', 'reverse_reference', 'creator_id');
                case 'EmailAddress':
                    return new QQReverseReferenceNodeEmailAddress($this, 'emailaddress', 'reverse_reference', 'person_id');
                case 'PersonAsOwner':
                    return new QQReverseReferenceNodePerson($this, 'personasowner', 'reverse_reference', 'owner_person_id');
                case 'PhoneNumber':
                    return new QQReverseReferenceNodePhoneNumber($this, 'phonenumber', 'reverse_reference', 'person_id');
                case 'ProductAsManufacturer':
                    return new QQReverseReferenceNodeProduct($this, 'productasmanufacturer', 'reverse_reference', 'manufacturer_id');
                case 'ProductAsSupplier':
                    return new QQReverseReferenceNodeProduct($this, 'productassupplier', 'reverse_reference', 'supplier_id');

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

    class QQReverseReferenceNodePerson extends QQReverseReferenceNode {
        protected $strTableName = 'person';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Person';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'NamePrefix':
                    return new QQNode('name_prefix', 'NamePrefix', 'string', $this);
                case 'FirstName':
                    return new QQNode('first_name', 'FirstName', 'string', $this);
                case 'MiddleName':
                    return new QQNode('middle_name', 'MiddleName', 'string', $this);
                case 'LastName':
                    return new QQNode('last_name', 'LastName', 'string', $this);
                case 'NameSuffix':
                    return new QQNode('name_suffix', 'NameSuffix', 'string', $this);
                case 'NickName':
                    return new QQNode('nick_name', 'NickName', 'string', $this);
                case 'AvatarUri':
                    return new QQNode('avatar_uri', 'AvatarUri', 'string', $this);
                case 'CompanyName':
                    return new QQNode('company_name', 'CompanyName', 'string', $this);
                case 'OwnerPersonId':
                    return new QQNode('owner_person_id', 'OwnerPersonId', 'integer', $this);
                case 'OwnerPerson':
                    return new QQNodePerson('owner_person_id', 'OwnerPerson', 'integer', $this);
                case 'IsVirtual':
                    return new QQNode('is_virtual', 'IsVirtual', 'boolean', $this);
                case 'Usergroup':
                    return new QQNodePersonUsergroup($this);
                case 'Account':
                    return new QQReverseReferenceNodeAccount($this, 'account', 'reverse_reference', 'person_id', 'Account');
                case 'Address':
                    return new QQReverseReferenceNodeAddress($this, 'address', 'reverse_reference', 'person_id');
                case 'ContentItemAsCreator':
                    return new QQReverseReferenceNodeContentItem($this, 'contentitemascreator', 'reverse_reference', 'creator_id');
                case 'EmailAddress':
                    return new QQReverseReferenceNodeEmailAddress($this, 'emailaddress', 'reverse_reference', 'person_id');
                case 'PersonAsOwner':
                    return new QQReverseReferenceNodePerson($this, 'personasowner', 'reverse_reference', 'owner_person_id');
                case 'PhoneNumber':
                    return new QQReverseReferenceNodePhoneNumber($this, 'phonenumber', 'reverse_reference', 'person_id');
                case 'ProductAsManufacturer':
                    return new QQReverseReferenceNodeProduct($this, 'productasmanufacturer', 'reverse_reference', 'manufacturer_id');
                case 'ProductAsSupplier':
                    return new QQReverseReferenceNodeProduct($this, 'productassupplier', 'reverse_reference', 'supplier_id');

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