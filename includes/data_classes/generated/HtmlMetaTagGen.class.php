<?php
    /**
     * The abstract HtmlMetaTagGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the HtmlMetaTag subclass which
     * extends this HtmlMetaTagGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the HtmlMetaTag class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Name the value for strName 
     * @property string $Content the value for strContent 
     * @property string $Type the value for strType 
     * @property-read Page $_Page the value for the private _objPage (Read-Only) if set due to an expansion on the page_html_meta_tag_assn association table
     * @property-read Page[] $_PageArray the value for the private _objPageArray (Read-Only) if set due to an ExpandAsArray on the page_html_meta_tag_assn association table
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class HtmlMetaTagGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column html_meta_tag.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column html_meta_tag.name
         * @var string strName
         *
         */
        protected $strName = null;
        const NameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column html_meta_tag.content
         * @var string strContent
         *
         */
        protected $strContent = null;
        const ContentMaxLength = 256;


        /**
         * Protected member variable that maps to the database column html_meta_tag.type
         * @var string strType
         *
         */
        protected $strType = null;


        /**
         * Private member variable that stores a reference to a single Page object
         * (of type Page), if this HtmlMetaTag object was restored with
         * an expansion on the page_html_meta_tag_assn association table.
         * @var Page _objPage;
         */
        private $_objPage;

        /**
         * Private member variable that stores a reference to an array of Page objects
         * (of type Page[]), if this HtmlMetaTag object was restored with
         * an ExpandAsArray on the page_html_meta_tag_assn association table.
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
         * Load a HtmlMetaTag from PK Info
         * @param integer $intId
         * @return HtmlMetaTag
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return HtmlMetaTag::QuerySingle(
                QQ::Equal(QQN::HtmlMetaTag()->Id, $intId)
            );
        }

        /**
         * Load all HtmlMetaTags
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return HtmlMetaTag[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call HtmlMetaTag::QueryArray to perform the LoadAll query
            try {
                return HtmlMetaTag::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all HtmlMetaTags
         * @return int
         */
        public static function CountAll() {
            // Call HtmlMetaTag::QueryCount to perform the CountAll query
            return HtmlMetaTag::QueryCount(QQ::All());
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
            $objDatabase = HtmlMetaTag::GetDatabase();

            // Create/Build out the QueryBuilder object with HtmlMetaTag-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'html_meta_tag');
            HtmlMetaTag::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('html_meta_tag');

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
         * Static Qcodo Query method to query for a single HtmlMetaTag object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return HtmlMetaTag the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = HtmlMetaTag::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new HtmlMetaTag object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return HtmlMetaTag::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of HtmlMetaTag objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return HtmlMetaTag[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = HtmlMetaTag::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return HtmlMetaTag::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of HtmlMetaTag objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = HtmlMetaTag::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = HtmlMetaTag::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'html_meta_tag_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with HtmlMetaTag-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                HtmlMetaTag::GetSelectFields($objQueryBuilder);
                HtmlMetaTag::GetFromFields($objQueryBuilder);

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
            return HtmlMetaTag::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this HtmlMetaTag
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'html_meta_tag';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            $objBuilder->AddSelectItem($strTableName, 'content', $strAliasPrefix . 'content');
            $objBuilder->AddSelectItem($strTableName, 'type', $strAliasPrefix . 'type');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a HtmlMetaTag from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this HtmlMetaTag::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return HtmlMetaTag
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
                    $strAliasPrefix = 'html_meta_tag__';

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
                else if ($strAliasPrefix == 'html_meta_tag__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the HtmlMetaTag object
            $objToReturn = new HtmlMetaTag();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
            $objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'content', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'content'] : $strAliasPrefix . 'content';
            $objToReturn->strContent = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'type', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'type'] : $strAliasPrefix . 'type';
            $objToReturn->strType = $objDbRow->GetColumn($strAliasName, 'VarChar');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'html_meta_tag__';



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
         * Instantiate an array of HtmlMetaTags from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return HtmlMetaTag[]
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
                    $objItem = HtmlMetaTag::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = HtmlMetaTag::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single HtmlMetaTag object,
         * by Id Index(es)
         * @param integer $intId
         * @return HtmlMetaTag
        */
        public static function LoadById($intId) {
            return HtmlMetaTag::QuerySingle(
                QQ::Equal(QQN::HtmlMetaTag()->Id, $intId)
            );
        }
            
        /**
         * Load an array of HtmlMetaTag objects,
         * by Name Index(es)
         * @param string $strName
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return HtmlMetaTag[]
        */
        public static function LoadArrayByName($strName, $objOptionalClauses = null) {
            // Call HtmlMetaTag::QueryArray to perform the LoadArrayByName query
            try {
                return HtmlMetaTag::QueryArray(
                    QQ::Equal(QQN::HtmlMetaTag()->Name, $strName),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count HtmlMetaTags
         * by Name Index(es)
         * @param string $strName
         * @return int
        */
        public static function CountByName($strName) {
            // Call HtmlMetaTag::QueryCount to perform the CountByName query
            return HtmlMetaTag::QueryCount(
                QQ::Equal(QQN::HtmlMetaTag()->Name, $strName)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////
            /**
         * Load an array of Page objects for a given Page
         * via the page_html_meta_tag_assn table
         * @param integer $intPageId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return HtmlMetaTag[]
        */
        public static function LoadArrayByPage($intPageId, $objOptionalClauses = null) {
            // Call HtmlMetaTag::QueryArray to perform the LoadArrayByPage query
            try {
                return HtmlMetaTag::QueryArray(
                    QQ::Equal(QQN::HtmlMetaTag()->Page->PageId, $intPageId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count HtmlMetaTags for a given Page
         * via the page_html_meta_tag_assn table
         * @param integer $intPageId
         * @return int
        */
        public static function CountByPage($intPageId) {
            return HtmlMetaTag::QueryCount(
                QQ::Equal(QQN::HtmlMetaTag()->Page->PageId, $intPageId)
            );
        }


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this HtmlMetaTag
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = HtmlMetaTag::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `html_meta_tag` (
                            `name`,
                            `content`,
                            `type`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strName) . ',
                            ' . $objDatabase->SqlVariable($this->strContent) . ',
                            ' . $objDatabase->SqlVariable($this->strType) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('html_meta_tag', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `html_meta_tag`
                        SET
                            `name` = ' . $objDatabase->SqlVariable($this->strName) . ',
                            `content` = ' . $objDatabase->SqlVariable($this->strContent) . ',
                            `type` = ' . $objDatabase->SqlVariable($this->strType) . '
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
         * Delete this HtmlMetaTag
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this HtmlMetaTag with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = HtmlMetaTag::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `html_meta_tag`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all HtmlMetaTags
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = HtmlMetaTag::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `html_meta_tag`');
        }

        /**
         * Truncate html_meta_tag table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = HtmlMetaTag::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `html_meta_tag`');
        }

        /**
         * Reload this HtmlMetaTag from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved HtmlMetaTag object.');

            // Reload the Object
            $objReloaded = HtmlMetaTag::Load($this->intId);

            // Update $this's local variables to match
            $this->strName = $objReloaded->strName;
            $this->strContent = $objReloaded->strContent;
            $this->strType = $objReloaded->strType;
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

                case 'Content':
                    /**
                     * Gets the value for strContent 
                     * @return string
                     */
                    return $this->strContent;

                case 'Type':
                    /**
                     * Gets the value for strType 
                     * @return string
                     */
                    return $this->strType;


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
                     * if set due to an expansion on the page_html_meta_tag_assn association table
                     * @return Page
                     */
                    return $this->_objPage;

                case '_PageArray':
                    /**
                     * Gets the value for the private _objPageArray (Read-Only)
                     * if set due to an ExpandAsArray on the page_html_meta_tag_assn association table
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

                case 'Content':
                    /**
                     * Sets the value for strContent 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strContent = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Type':
                    /**
                     * Sets the value for strType 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strType = QType::Cast($mixValue, QType::String));
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
                return Page::LoadArrayByHtmlMetaTag($this->intId, $objOptionalClauses);
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

            return Page::CountByHtmlMetaTag($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific Page
         * @param Page $objPage
         * @return bool
        */
        public function IsPageAssociated(Page $objPage) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsPageAssociated on this unsaved HtmlMetaTag.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsPageAssociated on this HtmlMetaTag with an unsaved Page.');

            $intRowCount = HtmlMetaTag::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::HtmlMetaTag()->Id, $this->intId),
                    QQ::Equal(QQN::HtmlMetaTag()->Page->PageId, $objPage->Id)
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
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePage on this unsaved HtmlMetaTag.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePage on this HtmlMetaTag with an unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = HtmlMetaTag::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `page_html_meta_tag_assn` (
                    `html_meta_tag_id`,
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePage on this unsaved HtmlMetaTag.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePage on this HtmlMetaTag with an unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = HtmlMetaTag::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_html_meta_tag_assn`
                WHERE
                    `html_meta_tag_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `page_id` = ' . $objDatabase->SqlVariable($objPage->Id) . '
            ');
        }

        /**
         * Unassociates all Pages
         * @return void
        */ 
        public function UnassociateAllPages() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllPageArray on this unsaved HtmlMetaTag.');

            // Get the Database Object for this Class
            $objDatabase = HtmlMetaTag::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_html_meta_tag_assn`
                WHERE
                    `html_meta_tag_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }



    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeHtmlMetaTagPage extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'page';

        protected $strTableName = 'page_html_meta_tag_assn';
        protected $strPrimaryKey = 'html_meta_tag_id';
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

    class QQNodeHtmlMetaTag extends QQNode {
        protected $strTableName = 'html_meta_tag';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'HtmlMetaTag';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Content':
                    return new QQNode('content', 'Content', 'string', $this);
                case 'Type':
                    return new QQNode('type', 'Type', 'string', $this);
                case 'Page':
                    return new QQNodeHtmlMetaTagPage($this);

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

    class QQReverseReferenceNodeHtmlMetaTag extends QQReverseReferenceNode {
        protected $strTableName = 'html_meta_tag';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'HtmlMetaTag';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Content':
                    return new QQNode('content', 'Content', 'string', $this);
                case 'Type':
                    return new QQNode('type', 'Type', 'string', $this);
                case 'Page':
                    return new QQNodeHtmlMetaTagPage($this);

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