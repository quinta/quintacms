<?php
    /**
     * The abstract JavaScriptGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the JavaScript subclass which
     * extends this JavaScriptGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the JavaScript class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Name the value for strName 
     * @property string $Description the value for strDescription 
     * @property string $Filename the value for strFilename 
     * @property-read Page $_Page the value for the private _objPage (Read-Only) if set due to an expansion on the page_java_script_assn association table
     * @property-read Page[] $_PageArray the value for the private _objPageArray (Read-Only) if set due to an ExpandAsArray on the page_java_script_assn association table
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class JavaScriptGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column java_script.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column java_script.name
         * @var string strName
         *
         */
        protected $strName = null;
        const NameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column java_script.description
         * @var string strDescription
         *
         */
        protected $strDescription = null;
        const DescriptionMaxLength = 256;


        /**
         * Protected member variable that maps to the database column java_script.filename
         * @var string strFilename
         *
         */
        protected $strFilename = null;
        const FilenameMaxLength = 128;


        /**
         * Private member variable that stores a reference to a single Page object
         * (of type Page), if this JavaScript object was restored with
         * an expansion on the page_java_script_assn association table.
         * @var Page _objPage;
         */
        private $_objPage;

        /**
         * Private member variable that stores a reference to an array of Page objects
         * (of type Page[]), if this JavaScript object was restored with
         * an ExpandAsArray on the page_java_script_assn association table.
         * @var Page[] _objPageArray;
         */
        private $_objPageArray = array();

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
         * Load a JavaScript from PK Info
         * @param integer $intId
         * @return JavaScript
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return JavaScript::QuerySingle(
                QQ::Equal(QQN::JavaScript()->Id, $intId)
            );
        }

        /**
         * Load all JavaScripts
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return JavaScript[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call JavaScript::QueryArray to perform the LoadAll query
            try {
                return JavaScript::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all JavaScripts
         * @return int
         */
        public static function CountAll() {
            // Call JavaScript::QueryCount to perform the CountAll query
            return JavaScript::QueryCount(QQ::All());
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
            $objDatabase = JavaScript::GetDatabase();

            // Create/Build out the QueryBuilder object with JavaScript-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'java_script');
            JavaScript::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('java_script');

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
         * Static Qcodo Query method to query for a single JavaScript object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return JavaScript the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = JavaScript::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new JavaScript object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return JavaScript::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of JavaScript objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return JavaScript[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = JavaScript::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return JavaScript::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of JavaScript objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = JavaScript::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = JavaScript::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'java_script_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with JavaScript-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                JavaScript::GetSelectFields($objQueryBuilder);
                JavaScript::GetFromFields($objQueryBuilder);

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
            return JavaScript::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this JavaScript
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'java_script';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
            $objBuilder->AddSelectItem($strTableName, 'filename', $strAliasPrefix . 'filename');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a JavaScript from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this JavaScript::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return JavaScript
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
                    $strAliasPrefix = 'java_script__';

                $strAlias = $strAliasPrefix . 'page__page_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objPageArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objPageArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Page::InstantiateDbRow($objDbRow, $strAliasPrefix . 'page__page_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objPageArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objPageArray[] = Page::InstantiateDbRow($objDbRow, $strAliasPrefix . 'page__page_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }


                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'java_script__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the JavaScript object
            $objToReturn = new JavaScript();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
            $objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'description'] : $strAliasPrefix . 'description';
            $objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'filename', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'filename'] : $strAliasPrefix . 'filename';
            $objToReturn->strFilename = $objDbRow->GetColumn($strAliasName, 'VarChar');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'java_script__';



            // Check for Page Virtual Binding
            $strAlias = $strAliasPrefix . 'page__page_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objPageArray[] = Page::InstantiateDbRow($objDbRow, $strAliasPrefix . 'page__page_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objPage = Page::InstantiateDbRow($objDbRow, $strAliasPrefix . 'page__page_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }


            return $objToReturn;
        }

        /**
         * Instantiate an array of JavaScripts from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return JavaScript[]
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
                    $objItem = JavaScript::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = JavaScript::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single JavaScript object,
         * by Id Index(es)
         * @param integer $intId
         * @return JavaScript
        */
        public static function LoadById($intId) {
            return JavaScript::QuerySingle(
                QQ::Equal(QQN::JavaScript()->Id, $intId)
            );
        }
            
        /**
         * Load an array of JavaScript objects,
         * by Name Index(es)
         * @param string $strName
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return JavaScript[]
        */
        public static function LoadArrayByName($strName, $objOptionalClauses = null) {
            // Call JavaScript::QueryArray to perform the LoadArrayByName query
            try {
                return JavaScript::QueryArray(
                    QQ::Equal(QQN::JavaScript()->Name, $strName),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count JavaScripts
         * by Name Index(es)
         * @param string $strName
         * @return int
        */
        public static function CountByName($strName) {
            // Call JavaScript::QueryCount to perform the CountByName query
            return JavaScript::QueryCount(
                QQ::Equal(QQN::JavaScript()->Name, $strName)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////
            /**
         * Load an array of Page objects for a given Page
         * via the page_java_script_assn table
         * @param integer $intPageId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return JavaScript[]
        */
        public static function LoadArrayByPage($intPageId, $objOptionalClauses = null) {
            // Call JavaScript::QueryArray to perform the LoadArrayByPage query
            try {
                return JavaScript::QueryArray(
                    QQ::Equal(QQN::JavaScript()->Page->PageId, $intPageId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count JavaScripts for a given Page
         * via the page_java_script_assn table
         * @param integer $intPageId
         * @return int
        */
        public static function CountByPage($intPageId) {
            return JavaScript::QueryCount(
                QQ::Equal(QQN::JavaScript()->Page->PageId, $intPageId)
            );
        }


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this JavaScript
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = JavaScript::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `java_script` (
                            `name`,
                            `description`,
                            `filename`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strName) . ',
                            ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            ' . $objDatabase->SqlVariable($this->strFilename) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('java_script', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `java_script`
                        SET
                            `name` = ' . $objDatabase->SqlVariable($this->strName) . ',
                            `description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            `filename` = ' . $objDatabase->SqlVariable($this->strFilename) . '
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
         * Delete this JavaScript
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this JavaScript with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = JavaScript::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `java_script`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all JavaScripts
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = JavaScript::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `java_script`');
        }

        /**
         * Truncate java_script table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = JavaScript::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `java_script`');
        }

        /**
         * Reload this JavaScript from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved JavaScript object.');

            // Reload the Object
            $objReloaded = JavaScript::Load($this->intId);

            // Update $this's local variables to match
            $this->strName = $objReloaded->strName;
            $this->strDescription = $objReloaded->strDescription;
            $this->strFilename = $objReloaded->strFilename;
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

                case 'Name':
                    /**
                     * Gets the value for strName 
                     * @return string
                     */
                    return $this->strName;

                case 'Description':
                    /**
                     * Gets the value for strDescription 
                     * @return string
                     */
                    return $this->strDescription;

                case 'Filename':
                    /**
                     * Gets the value for strFilename 
                     * @return string
                     */
                    return $this->strFilename;


                ///////////////////
                // Member Objects
                ///////////////////

                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_Page':
                    /**
                     * Gets the value for the private _objPage (Read-Only)
                     * if set due to an expansion on the page_java_script_assn association table
                     * @return Page
                     */
                    return $this->_objPage;

                case '_PageArray':
                    /**
                     * Gets the value for the private _objPageArray (Read-Only)
                     * if set due to an ExpandAsArray on the page_java_script_assn association table
                     * @return Page[]
                     */
                    return (array) $this->_objPageArray;


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
                case 'Name':
                    /**
                     * Sets the value for strName 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strName = QType::Cast($mixValue, QType::String));
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

                case 'Filename':
                    /**
                     * Sets the value for strFilename 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strFilename = QType::Cast($mixValue, QType::String));
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

            
        // Related Many-to-Many Objects' Methods for Page
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated Pages as an array of Page objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Page[]
        */ 
        public function GetPageArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Page::LoadArrayByJavaScript($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated Pages
         * @return int
        */ 
        public function CountPages() {
            if ((is_null($this->intId)))
                return 0;

            return Page::CountByJavaScript($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific Page
         * @param Page $objPage
         * @return bool
        */
        public function IsPageAssociated(Page $objPage) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsPageAssociated on this unsaved JavaScript.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsPageAssociated on this JavaScript with an unsaved Page.');

            $intRowCount = JavaScript::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::JavaScript()->Id, $this->intId),
                    QQ::Equal(QQN::JavaScript()->Page->PageId, $objPage->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a Page
         * @param Page $objPage
         * @return void
        */ 
        public function AssociatePage(Page $objPage) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePage on this unsaved JavaScript.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePage on this JavaScript with an unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = JavaScript::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `page_java_script_assn` (
                    `java_script_id`,
                    `page_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objPage->Id) . '
                )
            ');
        }

        /**
         * Unassociates a Page
         * @param Page $objPage
         * @return void
        */ 
        public function UnassociatePage(Page $objPage) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePage on this unsaved JavaScript.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePage on this JavaScript with an unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = JavaScript::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_java_script_assn`
                WHERE
                    `java_script_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `page_id` = ' . $objDatabase->SqlVariable($objPage->Id) . '
            ');
        }

        /**
         * Unassociates all Pages
         * @return void
        */ 
        public function UnassociateAllPages() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllPageArray on this unsaved JavaScript.');

            // Get the Database Object for this Class
            $objDatabase = JavaScript::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_java_script_assn`
                WHERE
                    `java_script_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }



    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeJavaScriptPage extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'page';

        protected $strTableName = 'page_java_script_assn';
        protected $strPrimaryKey = 'java_script_id';
        protected $strClassName = 'Page';

        public function __get($strName) {
            switch ($strName) {
                case 'PageId':
                    return new QQNode('page_id', 'PageId', 'integer', $this);
                case 'Page':
                    return new QQNodePage('page_id', 'PageId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodePage('page_id', 'PageId', 'integer', $this);
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

    class QQNodeJavaScript extends QQNode {
        protected $strTableName = 'java_script';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'JavaScript';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'Filename':
                    return new QQNode('filename', 'Filename', 'string', $this);
                case 'Page':
                    return new QQNodeJavaScriptPage($this);

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

    class QQReverseReferenceNodeJavaScript extends QQReverseReferenceNode {
        protected $strTableName = 'java_script';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'JavaScript';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'Filename':
                    return new QQNode('filename', 'Filename', 'string', $this);
                case 'Page':
                    return new QQNodeJavaScriptPage($this);

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