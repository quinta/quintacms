<?php
    /**
     * The abstract ContentCategoryGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the ContentCategory subclass which
     * extends this ContentCategoryGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ContentCategory class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Name the value for strName (Unique)
     * @property string $Title the value for strTitle 
     * @property string $Description the value for strDescription 
     * @property string $ImageUri the value for strImageUri 
     * @property integer $ParentContentCategoryId the value for intParentContentCategoryId 
     * @property-read ContentItem $_ContentItem the value for the private _objContentItem (Read-Only) if set due to an expansion on the content_item_content_category_assn association table
     * @property-read ContentItem[] $_ContentItemArray the value for the private _objContentItemArray (Read-Only) if set due to an ExpandAsArray on the content_item_content_category_assn association table
     * @property-read Page $_Page the value for the private _objPage (Read-Only) if set due to an expansion on the page_content_category_assn association table
     * @property-read Page[] $_PageArray the value for the private _objPageArray (Read-Only) if set due to an ExpandAsArray on the page_content_category_assn association table
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class ContentCategoryGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column content_category.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column content_category.name
         * @var string strName
         *
         */
        protected $strName = null;
        const NameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column content_category.title
         * @var string strTitle
         *
         */
        protected $strTitle = null;
        const TitleMaxLength = 128;


        /**
         * Protected member variable that maps to the database column content_category.description
         * @var string strDescription
         *
         */
        protected $strDescription = null;
        const DescriptionMaxLength = 256;


        /**
         * Protected member variable that maps to the database column content_category.image_uri
         * @var string strImageUri
         *
         */
        protected $strImageUri = null;
        const ImageUriMaxLength = 256;


        /**
         * Protected member variable that maps to the database column content_category.parent_content_category_id
         * @var integer intParentContentCategoryId
         *
         */
        protected $intParentContentCategoryId = null;


        /**
         * Private member variable that stores a reference to a single ContentItem object
         * (of type ContentItem), if this ContentCategory object was restored with
         * an expansion on the content_item_content_category_assn association table.
         * @var ContentItem _objContentItem;
         */
        private $_objContentItem;

        /**
         * Private member variable that stores a reference to an array of ContentItem objects
         * (of type ContentItem[]), if this ContentCategory object was restored with
         * an ExpandAsArray on the content_item_content_category_assn association table.
         * @var ContentItem[] _objContentItemArray;
         */
        private $_objContentItemArray = array();

        /**
         * Private member variable that stores a reference to a single Page object
         * (of type Page), if this ContentCategory object was restored with
         * an expansion on the page_content_category_assn association table.
         * @var Page _objPage;
         */
        private $_objPage;

        /**
         * Private member variable that stores a reference to an array of Page objects
         * (of type Page[]), if this ContentCategory object was restored with
         * an ExpandAsArray on the page_content_category_assn association table.
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
         * Load a ContentCategory from PK Info
         * @param integer $intId
         * @return ContentCategory
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return ContentCategory::QuerySingle(
                QQ::Equal(QQN::ContentCategory()->Id, $intId)
            );
        }

        /**
         * Load all ContentCategories
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentCategory[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call ContentCategory::QueryArray to perform the LoadAll query
            try {
                return ContentCategory::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all ContentCategories
         * @return int
         */
        public static function CountAll() {
            // Call ContentCategory::QueryCount to perform the CountAll query
            return ContentCategory::QueryCount(QQ::All());
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
            $objDatabase = ContentCategory::GetDatabase();

            // Create/Build out the QueryBuilder object with ContentCategory-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'content_category');
            ContentCategory::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('content_category');

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
         * Static Qcodo Query method to query for a single ContentCategory object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ContentCategory the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ContentCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new ContentCategory object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ContentCategory::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of ContentCategory objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ContentCategory[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ContentCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ContentCategory::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of ContentCategory objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ContentCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = ContentCategory::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'content_category_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ContentCategory-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                ContentCategory::GetSelectFields($objQueryBuilder);
                ContentCategory::GetFromFields($objQueryBuilder);

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
            return ContentCategory::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this ContentCategory
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'content_category';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
            $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
            $objBuilder->AddSelectItem($strTableName, 'image_uri', $strAliasPrefix . 'image_uri');
            $objBuilder->AddSelectItem($strTableName, 'parent_content_category_id', $strAliasPrefix . 'parent_content_category_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a ContentCategory from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this ContentCategory::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return ContentCategory
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
                    $strAliasPrefix = 'content_category__';

                $strAlias = $strAliasPrefix . 'contentitem__content_item_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objContentItemArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objContentItemArray[$intPreviousChildItemCount - 1];
                        $objChildItem = ContentItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentitem__content_item_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objContentItemArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objContentItemArray[] = ContentItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentitem__content_item_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

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
                else if ($strAliasPrefix == 'content_category__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the ContentCategory object
            $objToReturn = new ContentCategory();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
            $objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'title'] : $strAliasPrefix . 'title';
            $objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'description'] : $strAliasPrefix . 'description';
            $objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'image_uri', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'image_uri'] : $strAliasPrefix . 'image_uri';
            $objToReturn->strImageUri = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'parent_content_category_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'parent_content_category_id'] : $strAliasPrefix . 'parent_content_category_id';
            $objToReturn->intParentContentCategoryId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'content_category__';



            // Check for ContentItem Virtual Binding
            $strAlias = $strAliasPrefix . 'contentitem__content_item_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objContentItemArray[] = ContentItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentitem__content_item_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objContentItem = ContentItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentitem__content_item_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

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
         * Instantiate an array of ContentCategories from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return ContentCategory[]
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
                    $objItem = ContentCategory::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = ContentCategory::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single ContentCategory object,
         * by Id Index(es)
         * @param integer $intId
         * @return ContentCategory
        */
        public static function LoadById($intId) {
            return ContentCategory::QuerySingle(
                QQ::Equal(QQN::ContentCategory()->Id, $intId)
            );
        }
            
        /**
         * Load a single ContentCategory object,
         * by Name Index(es)
         * @param string $strName
         * @return ContentCategory
        */
        public static function LoadByName($strName) {
            return ContentCategory::QuerySingle(
                QQ::Equal(QQN::ContentCategory()->Name, $strName)
            );
        }
            
        /**
         * Load an array of ContentCategory objects,
         * by ParentContentCategoryId Index(es)
         * @param integer $intParentContentCategoryId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentCategory[]
        */
        public static function LoadArrayByParentContentCategoryId($intParentContentCategoryId, $objOptionalClauses = null) {
            // Call ContentCategory::QueryArray to perform the LoadArrayByParentContentCategoryId query
            try {
                return ContentCategory::QueryArray(
                    QQ::Equal(QQN::ContentCategory()->ParentContentCategoryId, $intParentContentCategoryId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentCategories
         * by ParentContentCategoryId Index(es)
         * @param integer $intParentContentCategoryId
         * @return int
        */
        public static function CountByParentContentCategoryId($intParentContentCategoryId) {
            // Call ContentCategory::QueryCount to perform the CountByParentContentCategoryId query
            return ContentCategory::QueryCount(
                QQ::Equal(QQN::ContentCategory()->ParentContentCategoryId, $intParentContentCategoryId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////
            /**
         * Load an array of ContentItem objects for a given ContentItem
         * via the content_item_content_category_assn table
         * @param integer $intContentItemId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentCategory[]
        */
        public static function LoadArrayByContentItem($intContentItemId, $objOptionalClauses = null) {
            // Call ContentCategory::QueryArray to perform the LoadArrayByContentItem query
            try {
                return ContentCategory::QueryArray(
                    QQ::Equal(QQN::ContentCategory()->ContentItem->ContentItemId, $intContentItemId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentCategories for a given ContentItem
         * via the content_item_content_category_assn table
         * @param integer $intContentItemId
         * @return int
        */
        public static function CountByContentItem($intContentItemId) {
            return ContentCategory::QueryCount(
                QQ::Equal(QQN::ContentCategory()->ContentItem->ContentItemId, $intContentItemId)
            );
        }
            /**
         * Load an array of Page objects for a given Page
         * via the page_content_category_assn table
         * @param integer $intPageId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentCategory[]
        */
        public static function LoadArrayByPage($intPageId, $objOptionalClauses = null) {
            // Call ContentCategory::QueryArray to perform the LoadArrayByPage query
            try {
                return ContentCategory::QueryArray(
                    QQ::Equal(QQN::ContentCategory()->Page->PageId, $intPageId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentCategories for a given Page
         * via the page_content_category_assn table
         * @param integer $intPageId
         * @return int
        */
        public static function CountByPage($intPageId) {
            return ContentCategory::QueryCount(
                QQ::Equal(QQN::ContentCategory()->Page->PageId, $intPageId)
            );
        }


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this ContentCategory
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = ContentCategory::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `content_category` (
                            `name`,
                            `title`,
                            `description`,
                            `image_uri`,
                            `parent_content_category_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strName) . ',
                            ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            ' . $objDatabase->SqlVariable($this->strImageUri) . ',
                            ' . $objDatabase->SqlVariable($this->intParentContentCategoryId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('content_category', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `content_category`
                        SET
                            `name` = ' . $objDatabase->SqlVariable($this->strName) . ',
                            `title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            `description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            `image_uri` = ' . $objDatabase->SqlVariable($this->strImageUri) . ',
                            `parent_content_category_id` = ' . $objDatabase->SqlVariable($this->intParentContentCategoryId) . '
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
         * Delete this ContentCategory
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this ContentCategory with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = ContentCategory::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_category`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all ContentCategories
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = ContentCategory::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_category`');
        }

        /**
         * Truncate content_category table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = ContentCategory::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `content_category`');
        }

        /**
         * Reload this ContentCategory from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved ContentCategory object.');

            // Reload the Object
            $objReloaded = ContentCategory::Load($this->intId);

            // Update $this's local variables to match
            $this->strName = $objReloaded->strName;
            $this->strTitle = $objReloaded->strTitle;
            $this->strDescription = $objReloaded->strDescription;
            $this->strImageUri = $objReloaded->strImageUri;
            $this->intParentContentCategoryId = $objReloaded->intParentContentCategoryId;
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
                     * Gets the value for strName (Unique)
                     * @return string
                     */
                    return $this->strName;

                case 'Title':
                    /**
                     * Gets the value for strTitle 
                     * @return string
                     */
                    return $this->strTitle;

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

                case 'ParentContentCategoryId':
                    /**
                     * Gets the value for intParentContentCategoryId 
                     * @return integer
                     */
                    return $this->intParentContentCategoryId;


                ///////////////////
                // Member Objects
                ///////////////////

                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_ContentItem':
                    /**
                     * Gets the value for the private _objContentItem (Read-Only)
                     * if set due to an expansion on the content_item_content_category_assn association table
                     * @return ContentItem
                     */
                    return $this->_objContentItem;

                case '_ContentItemArray':
                    /**
                     * Gets the value for the private _objContentItemArray (Read-Only)
                     * if set due to an ExpandAsArray on the content_item_content_category_assn association table
                     * @return ContentItem[]
                     */
                    return (array) $this->_objContentItemArray;

                case '_Page':
                    /**
                     * Gets the value for the private _objPage (Read-Only)
                     * if set due to an expansion on the page_content_category_assn association table
                     * @return Page
                     */
                    return $this->_objPage;

                case '_PageArray':
                    /**
                     * Gets the value for the private _objPageArray (Read-Only)
                     * if set due to an ExpandAsArray on the page_content_category_assn association table
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
                     * Sets the value for strName (Unique)
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strName = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

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

                case 'ParentContentCategoryId':
                    /**
                     * Sets the value for intParentContentCategoryId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intParentContentCategoryId = QType::Cast($mixValue, QType::Integer));
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

            
        // Related Many-to-Many Objects' Methods for ContentItem
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated ContentItems as an array of ContentItem objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentItem[]
        */ 
        public function GetContentItemArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return ContentItem::LoadArrayByContentCategory($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated ContentItems
         * @return int
        */ 
        public function CountContentItems() {
            if ((is_null($this->intId)))
                return 0;

            return ContentItem::CountByContentCategory($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific ContentItem
         * @param ContentItem $objContentItem
         * @return bool
        */
        public function IsContentItemAssociated(ContentItem $objContentItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentItemAssociated on this unsaved ContentCategory.');
            if ((is_null($objContentItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentItemAssociated on this ContentCategory with an unsaved ContentItem.');

            $intRowCount = ContentCategory::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::ContentCategory()->Id, $this->intId),
                    QQ::Equal(QQN::ContentCategory()->ContentItem->ContentItemId, $objContentItem->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a ContentItem
         * @param ContentItem $objContentItem
         * @return void
        */ 
        public function AssociateContentItem(ContentItem $objContentItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentItem on this unsaved ContentCategory.');
            if ((is_null($objContentItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentItem on this ContentCategory with an unsaved ContentItem.');

            // Get the Database Object for this Class
            $objDatabase = ContentCategory::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `content_item_content_category_assn` (
                    `content_category_id`,
                    `content_item_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objContentItem->Id) . '
                )
            ');
        }

        /**
         * Unassociates a ContentItem
         * @param ContentItem $objContentItem
         * @return void
        */ 
        public function UnassociateContentItem(ContentItem $objContentItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentItem on this unsaved ContentCategory.');
            if ((is_null($objContentItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentItem on this ContentCategory with an unsaved ContentItem.');

            // Get the Database Object for this Class
            $objDatabase = ContentCategory::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item_content_category_assn`
                WHERE
                    `content_category_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `content_item_id` = ' . $objDatabase->SqlVariable($objContentItem->Id) . '
            ');
        }

        /**
         * Unassociates all ContentItems
         * @return void
        */ 
        public function UnassociateAllContentItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllContentItemArray on this unsaved ContentCategory.');

            // Get the Database Object for this Class
            $objDatabase = ContentCategory::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item_content_category_assn`
                WHERE
                    `content_category_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }
            
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
                return Page::LoadArrayByContentCategory($this->intId, $objOptionalClauses);
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

            return Page::CountByContentCategory($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific Page
         * @param Page $objPage
         * @return bool
        */
        public function IsPageAssociated(Page $objPage) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsPageAssociated on this unsaved ContentCategory.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsPageAssociated on this ContentCategory with an unsaved Page.');

            $intRowCount = ContentCategory::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::ContentCategory()->Id, $this->intId),
                    QQ::Equal(QQN::ContentCategory()->Page->PageId, $objPage->Id)
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
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePage on this unsaved ContentCategory.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePage on this ContentCategory with an unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = ContentCategory::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `page_content_category_assn` (
                    `content_category_id`,
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePage on this unsaved ContentCategory.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePage on this ContentCategory with an unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = ContentCategory::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_content_category_assn`
                WHERE
                    `content_category_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `page_id` = ' . $objDatabase->SqlVariable($objPage->Id) . '
            ');
        }

        /**
         * Unassociates all Pages
         * @return void
        */ 
        public function UnassociateAllPages() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllPageArray on this unsaved ContentCategory.');

            // Get the Database Object for this Class
            $objDatabase = ContentCategory::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_content_category_assn`
                WHERE
                    `content_category_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }



    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeContentCategoryContentItem extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'contentitem';

        protected $strTableName = 'content_item_content_category_assn';
        protected $strPrimaryKey = 'content_category_id';
        protected $strClassName = 'ContentItem';

        public function __get($strName) {
            switch ($strName) {
                case 'ContentItemId':
                    return new QQNode('content_item_id', 'ContentItemId', 'integer', $this);
                case 'ContentItem':
                    return new QQNodeContentItem('content_item_id', 'ContentItemId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeContentItem('content_item_id', 'ContentItemId', 'integer', $this);
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

    class QQNodeContentCategoryPage extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'page';

        protected $strTableName = 'page_content_category_assn';
        protected $strPrimaryKey = 'content_category_id';
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

    class QQNodeContentCategory extends QQNode {
        protected $strTableName = 'content_category';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ContentCategory';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'ImageUri':
                    return new QQNode('image_uri', 'ImageUri', 'string', $this);
                case 'ParentContentCategoryId':
                    return new QQNode('parent_content_category_id', 'ParentContentCategoryId', 'integer', $this);
                case 'ContentItem':
                    return new QQNodeContentCategoryContentItem($this);
                case 'Page':
                    return new QQNodeContentCategoryPage($this);

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

    class QQReverseReferenceNodeContentCategory extends QQReverseReferenceNode {
        protected $strTableName = 'content_category';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ContentCategory';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'ImageUri':
                    return new QQNode('image_uri', 'ImageUri', 'string', $this);
                case 'ParentContentCategoryId':
                    return new QQNode('parent_content_category_id', 'ParentContentCategoryId', 'integer', $this);
                case 'ContentItem':
                    return new QQNodeContentCategoryContentItem($this);
                case 'Page':
                    return new QQNodeContentCategoryPage($this);

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