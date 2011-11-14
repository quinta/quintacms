<?php
    /**
     * The abstract PageGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the Page subclass which
     * extends this PageGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the Page class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property-read string $CreationDate the value for strCreationDate (Read-Only Timestamp)
     * @property-read string $LastModification the value for strLastModification (Read-Only Timestamp)
     * @property string $Name the value for strName (Unique)
     * @property string $Title the value for strTitle 
     * @property string $Uri the value for strUri 
     * @property boolean $HasHeader the value for blnHasHeader (Not Null)
     * @property boolean $HasLeftColumn the value for blnHasLeftColumn (Not Null)
     * @property boolean $HasRightColumn the value for blnHasRightColumn (Not Null)
     * @property boolean $HasFooter the value for blnHasFooter (Not Null)
     * @property integer $TypeId the value for intTypeId 
     * @property integer $DocTypeId the value for intDocTypeId (Not Null)
     * @property integer $StatusId the value for intStatusId (Not Null)
     * @property-read ContentBlock $_ContentBlock the value for the private _objContentBlock (Read-Only) if set due to an expansion on the content_block_page_assn association table
     * @property-read ContentBlock[] $_ContentBlockArray the value for the private _objContentBlockArray (Read-Only) if set due to an ExpandAsArray on the content_block_page_assn association table
     * @property-read ContentCategory $_ContentCategory the value for the private _objContentCategory (Read-Only) if set due to an expansion on the page_content_category_assn association table
     * @property-read ContentCategory[] $_ContentCategoryArray the value for the private _objContentCategoryArray (Read-Only) if set due to an ExpandAsArray on the page_content_category_assn association table
     * @property-read HtmlMetaTag $_HtmlMetaTag the value for the private _objHtmlMetaTag (Read-Only) if set due to an expansion on the page_html_meta_tag_assn association table
     * @property-read HtmlMetaTag[] $_HtmlMetaTagArray the value for the private _objHtmlMetaTagArray (Read-Only) if set due to an ExpandAsArray on the page_html_meta_tag_assn association table
     * @property-read JavaScript $_JavaScript the value for the private _objJavaScript (Read-Only) if set due to an expansion on the page_java_script_assn association table
     * @property-read JavaScript[] $_JavaScriptArray the value for the private _objJavaScriptArray (Read-Only) if set due to an ExpandAsArray on the page_java_script_assn association table
     * @property-read StyleSheet $_StyleSheet the value for the private _objStyleSheet (Read-Only) if set due to an expansion on the page_style_sheet_assn association table
     * @property-read StyleSheet[] $_StyleSheetArray the value for the private _objStyleSheetArray (Read-Only) if set due to an ExpandAsArray on the page_style_sheet_assn association table
     * @property-read Usergroup $_Usergroup the value for the private _objUsergroup (Read-Only) if set due to an expansion on the page_usergroup_assn association table
     * @property-read Usergroup[] $_UsergroupArray the value for the private _objUsergroupArray (Read-Only) if set due to an ExpandAsArray on the page_usergroup_assn association table
     * @property-read MenuItem $_MenuItem the value for the private _objMenuItem (Read-Only) if set due to an expansion on the menu_item.page_id reverse relationship
     * @property-read MenuItem[] $_MenuItemArray the value for the private _objMenuItemArray (Read-Only) if set due to an ExpandAsArray on the menu_item.page_id reverse relationship
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class PageGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column page.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column page.creation_date
         * @var string strCreationDate
         *
         */
        protected $strCreationDate = null;


        /**
         * Protected member variable that maps to the database column page.last_modification
         * @var string strLastModification
         *
         */
        protected $strLastModification = null;


        /**
         * Protected member variable that maps to the database column page.name
         * @var string strName
         *
         */
        protected $strName = null;
        const NameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column page.title
         * @var string strTitle
         *
         */
        protected $strTitle = null;
        const TitleMaxLength = 256;


        /**
         * Protected member variable that maps to the database column page.uri
         * @var string strUri
         *
         */
        protected $strUri = null;
        const UriMaxLength = 256;


        /**
         * Protected member variable that maps to the database column page.has_header
         * @var boolean blnHasHeader
         *
         */
        protected $blnHasHeader = null;


        /**
         * Protected member variable that maps to the database column page.has_left_column
         * @var boolean blnHasLeftColumn
         *
         */
        protected $blnHasLeftColumn = null;


        /**
         * Protected member variable that maps to the database column page.has_right_column
         * @var boolean blnHasRightColumn
         *
         */
        protected $blnHasRightColumn = null;


        /**
         * Protected member variable that maps to the database column page.has_footer
         * @var boolean blnHasFooter
         *
         */
        protected $blnHasFooter = null;


        /**
         * Protected member variable that maps to the database column page.type_id
         * @var integer intTypeId
         *
         */
        protected $intTypeId = null;


        /**
         * Protected member variable that maps to the database column page.doc_type_id
         * @var integer intDocTypeId
         *
         */
        protected $intDocTypeId = null;


        /**
         * Protected member variable that maps to the database column page.status_id
         * @var integer intStatusId
         *
         */
        protected $intStatusId = null;


        /**
         * Private member variable that stores a reference to a single ContentBlock object
         * (of type ContentBlock), if this Page object was restored with
         * an expansion on the content_block_page_assn association table.
         * @var ContentBlock _objContentBlock;
         */
        private $_objContentBlock;

        /**
         * Private member variable that stores a reference to an array of ContentBlock objects
         * (of type ContentBlock[]), if this Page object was restored with
         * an ExpandAsArray on the content_block_page_assn association table.
         * @var ContentBlock[] _objContentBlockArray;
         */
        private $_objContentBlockArray = array();

        /**
         * Private member variable that stores a reference to a single ContentCategory object
         * (of type ContentCategory), if this Page object was restored with
         * an expansion on the page_content_category_assn association table.
         * @var ContentCategory _objContentCategory;
         */
        private $_objContentCategory;

        /**
         * Private member variable that stores a reference to an array of ContentCategory objects
         * (of type ContentCategory[]), if this Page object was restored with
         * an ExpandAsArray on the page_content_category_assn association table.
         * @var ContentCategory[] _objContentCategoryArray;
         */
        private $_objContentCategoryArray = array();

        /**
         * Private member variable that stores a reference to a single HtmlMetaTag object
         * (of type HtmlMetaTag), if this Page object was restored with
         * an expansion on the page_html_meta_tag_assn association table.
         * @var HtmlMetaTag _objHtmlMetaTag;
         */
        private $_objHtmlMetaTag;

        /**
         * Private member variable that stores a reference to an array of HtmlMetaTag objects
         * (of type HtmlMetaTag[]), if this Page object was restored with
         * an ExpandAsArray on the page_html_meta_tag_assn association table.
         * @var HtmlMetaTag[] _objHtmlMetaTagArray;
         */
        private $_objHtmlMetaTagArray = array();

        /**
         * Private member variable that stores a reference to a single JavaScript object
         * (of type JavaScript), if this Page object was restored with
         * an expansion on the page_java_script_assn association table.
         * @var JavaScript _objJavaScript;
         */
        private $_objJavaScript;

        /**
         * Private member variable that stores a reference to an array of JavaScript objects
         * (of type JavaScript[]), if this Page object was restored with
         * an ExpandAsArray on the page_java_script_assn association table.
         * @var JavaScript[] _objJavaScriptArray;
         */
        private $_objJavaScriptArray = array();

        /**
         * Private member variable that stores a reference to a single StyleSheet object
         * (of type StyleSheet), if this Page object was restored with
         * an expansion on the page_style_sheet_assn association table.
         * @var StyleSheet _objStyleSheet;
         */
        private $_objStyleSheet;

        /**
         * Private member variable that stores a reference to an array of StyleSheet objects
         * (of type StyleSheet[]), if this Page object was restored with
         * an ExpandAsArray on the page_style_sheet_assn association table.
         * @var StyleSheet[] _objStyleSheetArray;
         */
        private $_objStyleSheetArray = array();

        /**
         * Private member variable that stores a reference to a single Usergroup object
         * (of type Usergroup), if this Page object was restored with
         * an expansion on the page_usergroup_assn association table.
         * @var Usergroup _objUsergroup;
         */
        private $_objUsergroup;

        /**
         * Private member variable that stores a reference to an array of Usergroup objects
         * (of type Usergroup[]), if this Page object was restored with
         * an ExpandAsArray on the page_usergroup_assn association table.
         * @var Usergroup[] _objUsergroupArray;
         */
        private $_objUsergroupArray = array();

        /**
         * Private member variable that stores a reference to a single MenuItem object
         * (of type MenuItem), if this Page object was restored with
         * an expansion on the menu_item association table.
         * @var MenuItem _objMenuItem;
         */
        private $_objMenuItem;

        /**
         * Private member variable that stores a reference to an array of MenuItem objects
         * (of type MenuItem[]), if this Page object was restored with
         * an ExpandAsArray on the menu_item association table.
         * @var MenuItem[] _objMenuItemArray;
         */
        private $_objMenuItemArray = array();

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
         * Load a Page from PK Info
         * @param integer $intId
         * @return Page
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return Page::QuerySingle(
                QQ::Equal(QQN::Page()->Id, $intId)
            );
        }

        /**
         * Load all Pages
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Page[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call Page::QueryArray to perform the LoadAll query
            try {
                return Page::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all Pages
         * @return int
         */
        public static function CountAll() {
            // Call Page::QueryCount to perform the CountAll query
            return Page::QueryCount(QQ::All());
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
            $objDatabase = Page::GetDatabase();

            // Create/Build out the QueryBuilder object with Page-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'page');
            Page::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('page');

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
         * Static Qcodo Query method to query for a single Page object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Page the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Page::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new Page object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Page::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of Page objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Page[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Page::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Page::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of Page objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Page::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = Page::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'page_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Page-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                Page::GetSelectFields($objQueryBuilder);
                Page::GetFromFields($objQueryBuilder);

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
            return Page::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this Page
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'page';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'creation_date', $strAliasPrefix . 'creation_date');
            $objBuilder->AddSelectItem($strTableName, 'last_modification', $strAliasPrefix . 'last_modification');
            $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
            $objBuilder->AddSelectItem($strTableName, 'uri', $strAliasPrefix . 'uri');
            $objBuilder->AddSelectItem($strTableName, 'has_header', $strAliasPrefix . 'has_header');
            $objBuilder->AddSelectItem($strTableName, 'has_left_column', $strAliasPrefix . 'has_left_column');
            $objBuilder->AddSelectItem($strTableName, 'has_right_column', $strAliasPrefix . 'has_right_column');
            $objBuilder->AddSelectItem($strTableName, 'has_footer', $strAliasPrefix . 'has_footer');
            $objBuilder->AddSelectItem($strTableName, 'type_id', $strAliasPrefix . 'type_id');
            $objBuilder->AddSelectItem($strTableName, 'doc_type_id', $strAliasPrefix . 'doc_type_id');
            $objBuilder->AddSelectItem($strTableName, 'status_id', $strAliasPrefix . 'status_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a Page from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this Page::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return Page
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
                    $strAliasPrefix = 'page__';

                $strAlias = $strAliasPrefix . 'contentblock__content_block_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objContentBlockArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objContentBlockArray[$intPreviousChildItemCount - 1];
                        $objChildItem = ContentBlock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentblock__content_block_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objContentBlockArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objContentBlockArray[] = ContentBlock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentblock__content_block_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'contentcategory__content_category_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objContentCategoryArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objContentCategoryArray[$intPreviousChildItemCount - 1];
                        $objChildItem = ContentCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentcategory__content_category_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objContentCategoryArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objContentCategoryArray[] = ContentCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentcategory__content_category_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'htmlmetatag__html_meta_tag_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objHtmlMetaTagArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objHtmlMetaTagArray[$intPreviousChildItemCount - 1];
                        $objChildItem = HtmlMetaTag::InstantiateDbRow($objDbRow, $strAliasPrefix . 'htmlmetatag__html_meta_tag_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objHtmlMetaTagArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objHtmlMetaTagArray[] = HtmlMetaTag::InstantiateDbRow($objDbRow, $strAliasPrefix . 'htmlmetatag__html_meta_tag_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'javascript__java_script_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objJavaScriptArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objJavaScriptArray[$intPreviousChildItemCount - 1];
                        $objChildItem = JavaScript::InstantiateDbRow($objDbRow, $strAliasPrefix . 'javascript__java_script_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objJavaScriptArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objJavaScriptArray[] = JavaScript::InstantiateDbRow($objDbRow, $strAliasPrefix . 'javascript__java_script_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'stylesheet__style_sheet_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objStyleSheetArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objStyleSheetArray[$intPreviousChildItemCount - 1];
                        $objChildItem = StyleSheet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stylesheet__style_sheet_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objStyleSheetArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objStyleSheetArray[] = StyleSheet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stylesheet__style_sheet_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

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


                $strAlias = $strAliasPrefix . 'menuitem__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objMenuItemArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objMenuItemArray[$intPreviousChildItemCount - 1];
                        $objChildItem = MenuItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuitem__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objMenuItemArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objMenuItemArray[] = MenuItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'page__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the Page object
            $objToReturn = new Page();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'creation_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'creation_date'] : $strAliasPrefix . 'creation_date';
            $objToReturn->strCreationDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'last_modification', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'last_modification'] : $strAliasPrefix . 'last_modification';
            $objToReturn->strLastModification = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
            $objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'title'] : $strAliasPrefix . 'title';
            $objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'uri', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'uri'] : $strAliasPrefix . 'uri';
            $objToReturn->strUri = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'has_header', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'has_header'] : $strAliasPrefix . 'has_header';
            $objToReturn->blnHasHeader = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'has_left_column', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'has_left_column'] : $strAliasPrefix . 'has_left_column';
            $objToReturn->blnHasLeftColumn = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'has_right_column', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'has_right_column'] : $strAliasPrefix . 'has_right_column';
            $objToReturn->blnHasRightColumn = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'has_footer', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'has_footer'] : $strAliasPrefix . 'has_footer';
            $objToReturn->blnHasFooter = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'type_id'] : $strAliasPrefix . 'type_id';
            $objToReturn->intTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'doc_type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'doc_type_id'] : $strAliasPrefix . 'doc_type_id';
            $objToReturn->intDocTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'status_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'status_id'] : $strAliasPrefix . 'status_id';
            $objToReturn->intStatusId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'page__';



            // Check for ContentBlock Virtual Binding
            $strAlias = $strAliasPrefix . 'contentblock__content_block_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objContentBlockArray[] = ContentBlock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentblock__content_block_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objContentBlock = ContentBlock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentblock__content_block_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for ContentCategory Virtual Binding
            $strAlias = $strAliasPrefix . 'contentcategory__content_category_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objContentCategoryArray[] = ContentCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentcategory__content_category_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objContentCategory = ContentCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentcategory__content_category_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for HtmlMetaTag Virtual Binding
            $strAlias = $strAliasPrefix . 'htmlmetatag__html_meta_tag_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objHtmlMetaTagArray[] = HtmlMetaTag::InstantiateDbRow($objDbRow, $strAliasPrefix . 'htmlmetatag__html_meta_tag_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objHtmlMetaTag = HtmlMetaTag::InstantiateDbRow($objDbRow, $strAliasPrefix . 'htmlmetatag__html_meta_tag_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for JavaScript Virtual Binding
            $strAlias = $strAliasPrefix . 'javascript__java_script_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objJavaScriptArray[] = JavaScript::InstantiateDbRow($objDbRow, $strAliasPrefix . 'javascript__java_script_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objJavaScript = JavaScript::InstantiateDbRow($objDbRow, $strAliasPrefix . 'javascript__java_script_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for StyleSheet Virtual Binding
            $strAlias = $strAliasPrefix . 'stylesheet__style_sheet_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objStyleSheetArray[] = StyleSheet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stylesheet__style_sheet_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objStyleSheet = StyleSheet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stylesheet__style_sheet_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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


            // Check for MenuItem Virtual Binding
            $strAlias = $strAliasPrefix . 'menuitem__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objMenuItemArray[] = MenuItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objMenuItem = MenuItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }

        /**
         * Instantiate an array of Pages from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return Page[]
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
                    $objItem = Page::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = Page::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single Page object,
         * by Id Index(es)
         * @param integer $intId
         * @return Page
        */
        public static function LoadById($intId) {
            return Page::QuerySingle(
                QQ::Equal(QQN::Page()->Id, $intId)
            );
        }
            
        /**
         * Load a single Page object,
         * by Name Index(es)
         * @param string $strName
         * @return Page
        */
        public static function LoadByName($strName) {
            return Page::QuerySingle(
                QQ::Equal(QQN::Page()->Name, $strName)
            );
        }
            
        /**
         * Load an array of Page objects,
         * by DocTypeId Index(es)
         * @param integer $intDocTypeId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Page[]
        */
        public static function LoadArrayByDocTypeId($intDocTypeId, $objOptionalClauses = null) {
            // Call Page::QueryArray to perform the LoadArrayByDocTypeId query
            try {
                return Page::QueryArray(
                    QQ::Equal(QQN::Page()->DocTypeId, $intDocTypeId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Pages
         * by DocTypeId Index(es)
         * @param integer $intDocTypeId
         * @return int
        */
        public static function CountByDocTypeId($intDocTypeId) {
            // Call Page::QueryCount to perform the CountByDocTypeId query
            return Page::QueryCount(
                QQ::Equal(QQN::Page()->DocTypeId, $intDocTypeId)
            );
        }
            
        /**
         * Load an array of Page objects,
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Page[]
        */
        public static function LoadArrayByTypeId($intTypeId, $objOptionalClauses = null) {
            // Call Page::QueryArray to perform the LoadArrayByTypeId query
            try {
                return Page::QueryArray(
                    QQ::Equal(QQN::Page()->TypeId, $intTypeId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Pages
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @return int
        */
        public static function CountByTypeId($intTypeId) {
            // Call Page::QueryCount to perform the CountByTypeId query
            return Page::QueryCount(
                QQ::Equal(QQN::Page()->TypeId, $intTypeId)
            );
        }
            
        /**
         * Load an array of Page objects,
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Page[]
        */
        public static function LoadArrayByStatusId($intStatusId, $objOptionalClauses = null) {
            // Call Page::QueryArray to perform the LoadArrayByStatusId query
            try {
                return Page::QueryArray(
                    QQ::Equal(QQN::Page()->StatusId, $intStatusId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Pages
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @return int
        */
        public static function CountByStatusId($intStatusId) {
            // Call Page::QueryCount to perform the CountByStatusId query
            return Page::QueryCount(
                QQ::Equal(QQN::Page()->StatusId, $intStatusId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////
            /**
         * Load an array of ContentBlock objects for a given ContentBlock
         * via the content_block_page_assn table
         * @param integer $intContentBlockId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Page[]
        */
        public static function LoadArrayByContentBlock($intContentBlockId, $objOptionalClauses = null) {
            // Call Page::QueryArray to perform the LoadArrayByContentBlock query
            try {
                return Page::QueryArray(
                    QQ::Equal(QQN::Page()->ContentBlock->ContentBlockId, $intContentBlockId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Pages for a given ContentBlock
         * via the content_block_page_assn table
         * @param integer $intContentBlockId
         * @return int
        */
        public static function CountByContentBlock($intContentBlockId) {
            return Page::QueryCount(
                QQ::Equal(QQN::Page()->ContentBlock->ContentBlockId, $intContentBlockId)
            );
        }
            /**
         * Load an array of ContentCategory objects for a given ContentCategory
         * via the page_content_category_assn table
         * @param integer $intContentCategoryId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Page[]
        */
        public static function LoadArrayByContentCategory($intContentCategoryId, $objOptionalClauses = null) {
            // Call Page::QueryArray to perform the LoadArrayByContentCategory query
            try {
                return Page::QueryArray(
                    QQ::Equal(QQN::Page()->ContentCategory->ContentCategoryId, $intContentCategoryId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Pages for a given ContentCategory
         * via the page_content_category_assn table
         * @param integer $intContentCategoryId
         * @return int
        */
        public static function CountByContentCategory($intContentCategoryId) {
            return Page::QueryCount(
                QQ::Equal(QQN::Page()->ContentCategory->ContentCategoryId, $intContentCategoryId)
            );
        }
            /**
         * Load an array of HtmlMetaTag objects for a given HtmlMetaTag
         * via the page_html_meta_tag_assn table
         * @param integer $intHtmlMetaTagId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Page[]
        */
        public static function LoadArrayByHtmlMetaTag($intHtmlMetaTagId, $objOptionalClauses = null) {
            // Call Page::QueryArray to perform the LoadArrayByHtmlMetaTag query
            try {
                return Page::QueryArray(
                    QQ::Equal(QQN::Page()->HtmlMetaTag->HtmlMetaTagId, $intHtmlMetaTagId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Pages for a given HtmlMetaTag
         * via the page_html_meta_tag_assn table
         * @param integer $intHtmlMetaTagId
         * @return int
        */
        public static function CountByHtmlMetaTag($intHtmlMetaTagId) {
            return Page::QueryCount(
                QQ::Equal(QQN::Page()->HtmlMetaTag->HtmlMetaTagId, $intHtmlMetaTagId)
            );
        }
            /**
         * Load an array of JavaScript objects for a given JavaScript
         * via the page_java_script_assn table
         * @param integer $intJavaScriptId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Page[]
        */
        public static function LoadArrayByJavaScript($intJavaScriptId, $objOptionalClauses = null) {
            // Call Page::QueryArray to perform the LoadArrayByJavaScript query
            try {
                return Page::QueryArray(
                    QQ::Equal(QQN::Page()->JavaScript->JavaScriptId, $intJavaScriptId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Pages for a given JavaScript
         * via the page_java_script_assn table
         * @param integer $intJavaScriptId
         * @return int
        */
        public static function CountByJavaScript($intJavaScriptId) {
            return Page::QueryCount(
                QQ::Equal(QQN::Page()->JavaScript->JavaScriptId, $intJavaScriptId)
            );
        }
            /**
         * Load an array of StyleSheet objects for a given StyleSheet
         * via the page_style_sheet_assn table
         * @param integer $intStyleSheetId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Page[]
        */
        public static function LoadArrayByStyleSheet($intStyleSheetId, $objOptionalClauses = null) {
            // Call Page::QueryArray to perform the LoadArrayByStyleSheet query
            try {
                return Page::QueryArray(
                    QQ::Equal(QQN::Page()->StyleSheet->StyleSheetId, $intStyleSheetId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Pages for a given StyleSheet
         * via the page_style_sheet_assn table
         * @param integer $intStyleSheetId
         * @return int
        */
        public static function CountByStyleSheet($intStyleSheetId) {
            return Page::QueryCount(
                QQ::Equal(QQN::Page()->StyleSheet->StyleSheetId, $intStyleSheetId)
            );
        }
            /**
         * Load an array of Usergroup objects for a given Usergroup
         * via the page_usergroup_assn table
         * @param integer $intUsergroupId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Page[]
        */
        public static function LoadArrayByUsergroup($intUsergroupId, $objOptionalClauses = null) {
            // Call Page::QueryArray to perform the LoadArrayByUsergroup query
            try {
                return Page::QueryArray(
                    QQ::Equal(QQN::Page()->Usergroup->UsergroupId, $intUsergroupId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Pages for a given Usergroup
         * via the page_usergroup_assn table
         * @param integer $intUsergroupId
         * @return int
        */
        public static function CountByUsergroup($intUsergroupId) {
            return Page::QueryCount(
                QQ::Equal(QQN::Page()->Usergroup->UsergroupId, $intUsergroupId)
            );
        }


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this Page
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `page` (
                            `name`,
                            `title`,
                            `uri`,
                            `has_header`,
                            `has_left_column`,
                            `has_right_column`,
                            `has_footer`,
                            `type_id`,
                            `doc_type_id`,
                            `status_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strName) . ',
                            ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            ' . $objDatabase->SqlVariable($this->strUri) . ',
                            ' . $objDatabase->SqlVariable($this->blnHasHeader) . ',
                            ' . $objDatabase->SqlVariable($this->blnHasLeftColumn) . ',
                            ' . $objDatabase->SqlVariable($this->blnHasRightColumn) . ',
                            ' . $objDatabase->SqlVariable($this->blnHasFooter) . ',
                            ' . $objDatabase->SqlVariable($this->intTypeId) . ',
                            ' . $objDatabase->SqlVariable($this->intDocTypeId) . ',
                            ' . $objDatabase->SqlVariable($this->intStatusId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('page', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `creation_date`
                            FROM
                                `page`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strCreationDate)
                            throw new QOptimisticLockingException('Page');
                    }
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `last_modification`
                            FROM
                                `page`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strLastModification)
                            throw new QOptimisticLockingException('Page');
                    }

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `page`
                        SET
                            `name` = ' . $objDatabase->SqlVariable($this->strName) . ',
                            `title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            `uri` = ' . $objDatabase->SqlVariable($this->strUri) . ',
                            `has_header` = ' . $objDatabase->SqlVariable($this->blnHasHeader) . ',
                            `has_left_column` = ' . $objDatabase->SqlVariable($this->blnHasLeftColumn) . ',
                            `has_right_column` = ' . $objDatabase->SqlVariable($this->blnHasRightColumn) . ',
                            `has_footer` = ' . $objDatabase->SqlVariable($this->blnHasFooter) . ',
                            `type_id` = ' . $objDatabase->SqlVariable($this->intTypeId) . ',
                            `doc_type_id` = ' . $objDatabase->SqlVariable($this->intDocTypeId) . ',
                            `status_id` = ' . $objDatabase->SqlVariable($this->intStatusId) . '
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
                    `page`
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
                    `page`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
                        
            $objRow = $objResult->FetchArray();
            $this->strLastModification = $objRow[0];

            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this Page
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this Page with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all Pages
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page`');
        }

        /**
         * Truncate page table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `page`');
        }

        /**
         * Reload this Page from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved Page object.');

            // Reload the Object
            $objReloaded = Page::Load($this->intId);

            // Update $this's local variables to match
            $this->strCreationDate = $objReloaded->strCreationDate;
            $this->strLastModification = $objReloaded->strLastModification;
            $this->strName = $objReloaded->strName;
            $this->strTitle = $objReloaded->strTitle;
            $this->strUri = $objReloaded->strUri;
            $this->blnHasHeader = $objReloaded->blnHasHeader;
            $this->blnHasLeftColumn = $objReloaded->blnHasLeftColumn;
            $this->blnHasRightColumn = $objReloaded->blnHasRightColumn;
            $this->blnHasFooter = $objReloaded->blnHasFooter;
            $this->TypeId = $objReloaded->TypeId;
            $this->DocTypeId = $objReloaded->DocTypeId;
            $this->StatusId = $objReloaded->StatusId;
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

                case 'Uri':
                    /**
                     * Gets the value for strUri 
                     * @return string
                     */
                    return $this->strUri;

                case 'HasHeader':
                    /**
                     * Gets the value for blnHasHeader (Not Null)
                     * @return boolean
                     */
                    return $this->blnHasHeader;

                case 'HasLeftColumn':
                    /**
                     * Gets the value for blnHasLeftColumn (Not Null)
                     * @return boolean
                     */
                    return $this->blnHasLeftColumn;

                case 'HasRightColumn':
                    /**
                     * Gets the value for blnHasRightColumn (Not Null)
                     * @return boolean
                     */
                    return $this->blnHasRightColumn;

                case 'HasFooter':
                    /**
                     * Gets the value for blnHasFooter (Not Null)
                     * @return boolean
                     */
                    return $this->blnHasFooter;

                case 'TypeId':
                    /**
                     * Gets the value for intTypeId 
                     * @return integer
                     */
                    return $this->intTypeId;

                case 'DocTypeId':
                    /**
                     * Gets the value for intDocTypeId (Not Null)
                     * @return integer
                     */
                    return $this->intDocTypeId;

                case 'StatusId':
                    /**
                     * Gets the value for intStatusId (Not Null)
                     * @return integer
                     */
                    return $this->intStatusId;


                ///////////////////
                // Member Objects
                ///////////////////

                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_ContentBlock':
                    /**
                     * Gets the value for the private _objContentBlock (Read-Only)
                     * if set due to an expansion on the content_block_page_assn association table
                     * @return ContentBlock
                     */
                    return $this->_objContentBlock;

                case '_ContentBlockArray':
                    /**
                     * Gets the value for the private _objContentBlockArray (Read-Only)
                     * if set due to an ExpandAsArray on the content_block_page_assn association table
                     * @return ContentBlock[]
                     */
                    return (array) $this->_objContentBlockArray;

                case '_ContentCategory':
                    /**
                     * Gets the value for the private _objContentCategory (Read-Only)
                     * if set due to an expansion on the page_content_category_assn association table
                     * @return ContentCategory
                     */
                    return $this->_objContentCategory;

                case '_ContentCategoryArray':
                    /**
                     * Gets the value for the private _objContentCategoryArray (Read-Only)
                     * if set due to an ExpandAsArray on the page_content_category_assn association table
                     * @return ContentCategory[]
                     */
                    return (array) $this->_objContentCategoryArray;

                case '_HtmlMetaTag':
                    /**
                     * Gets the value for the private _objHtmlMetaTag (Read-Only)
                     * if set due to an expansion on the page_html_meta_tag_assn association table
                     * @return HtmlMetaTag
                     */
                    return $this->_objHtmlMetaTag;

                case '_HtmlMetaTagArray':
                    /**
                     * Gets the value for the private _objHtmlMetaTagArray (Read-Only)
                     * if set due to an ExpandAsArray on the page_html_meta_tag_assn association table
                     * @return HtmlMetaTag[]
                     */
                    return (array) $this->_objHtmlMetaTagArray;

                case '_JavaScript':
                    /**
                     * Gets the value for the private _objJavaScript (Read-Only)
                     * if set due to an expansion on the page_java_script_assn association table
                     * @return JavaScript
                     */
                    return $this->_objJavaScript;

                case '_JavaScriptArray':
                    /**
                     * Gets the value for the private _objJavaScriptArray (Read-Only)
                     * if set due to an ExpandAsArray on the page_java_script_assn association table
                     * @return JavaScript[]
                     */
                    return (array) $this->_objJavaScriptArray;

                case '_StyleSheet':
                    /**
                     * Gets the value for the private _objStyleSheet (Read-Only)
                     * if set due to an expansion on the page_style_sheet_assn association table
                     * @return StyleSheet
                     */
                    return $this->_objStyleSheet;

                case '_StyleSheetArray':
                    /**
                     * Gets the value for the private _objStyleSheetArray (Read-Only)
                     * if set due to an ExpandAsArray on the page_style_sheet_assn association table
                     * @return StyleSheet[]
                     */
                    return (array) $this->_objStyleSheetArray;

                case '_Usergroup':
                    /**
                     * Gets the value for the private _objUsergroup (Read-Only)
                     * if set due to an expansion on the page_usergroup_assn association table
                     * @return Usergroup
                     */
                    return $this->_objUsergroup;

                case '_UsergroupArray':
                    /**
                     * Gets the value for the private _objUsergroupArray (Read-Only)
                     * if set due to an ExpandAsArray on the page_usergroup_assn association table
                     * @return Usergroup[]
                     */
                    return (array) $this->_objUsergroupArray;

                case '_MenuItem':
                    /**
                     * Gets the value for the private _objMenuItem (Read-Only)
                     * if set due to an expansion on the menu_item.page_id reverse relationship
                     * @return MenuItem
                     */
                    return $this->_objMenuItem;

                case '_MenuItemArray':
                    /**
                     * Gets the value for the private _objMenuItemArray (Read-Only)
                     * if set due to an ExpandAsArray on the menu_item.page_id reverse relationship
                     * @return MenuItem[]
                     */
                    return (array) $this->_objMenuItemArray;


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

                case 'Uri':
                    /**
                     * Sets the value for strUri 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strUri = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'HasHeader':
                    /**
                     * Sets the value for blnHasHeader (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnHasHeader = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'HasLeftColumn':
                    /**
                     * Sets the value for blnHasLeftColumn (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnHasLeftColumn = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'HasRightColumn':
                    /**
                     * Sets the value for blnHasRightColumn (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnHasRightColumn = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'HasFooter':
                    /**
                     * Sets the value for blnHasFooter (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnHasFooter = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'TypeId':
                    /**
                     * Sets the value for intTypeId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intTypeId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'DocTypeId':
                    /**
                     * Sets the value for intDocTypeId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intDocTypeId = QType::Cast($mixValue, QType::Integer));
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

            
        
        // Related Objects' Methods for MenuItem
        //-------------------------------------------------------------------

        /**
         * Gets all associated MenuItems as an array of MenuItem objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return MenuItem[]
        */ 
        public function GetMenuItemArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return MenuItem::LoadArrayByPageId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated MenuItems
         * @return int
        */ 
        public function CountMenuItems() {
            if ((is_null($this->intId)))
                return 0;

            return MenuItem::CountByPageId($this->intId);
        }

        /**
         * Associates a MenuItem
         * @param MenuItem $objMenuItem
         * @return void
        */ 
        public function AssociateMenuItem(MenuItem $objMenuItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenuItem on this unsaved Page.');
            if ((is_null($objMenuItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenuItem on this Page with an unsaved MenuItem.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `menu_item`
                SET
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objMenuItem->Id) . '
            ');
        }

        /**
         * Unassociates a MenuItem
         * @param MenuItem $objMenuItem
         * @return void
        */ 
        public function UnassociateMenuItem(MenuItem $objMenuItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuItem on this unsaved Page.');
            if ((is_null($objMenuItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuItem on this Page with an unsaved MenuItem.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `menu_item`
                SET
                    `page_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objMenuItem->Id) . ' AND
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all MenuItems
         * @return void
        */ 
        public function UnassociateAllMenuItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuItem on this unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `menu_item`
                SET
                    `page_id` = null
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated MenuItem
         * @param MenuItem $objMenuItem
         * @return void
        */ 
        public function DeleteAssociatedMenuItem(MenuItem $objMenuItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuItem on this unsaved Page.');
            if ((is_null($objMenuItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuItem on this Page with an unsaved MenuItem.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_item`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objMenuItem->Id) . ' AND
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated MenuItems
         * @return void
        */ 
        public function DeleteAllMenuItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuItem on this unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_item`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        // Related Many-to-Many Objects' Methods for ContentBlock
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated ContentBlocks as an array of ContentBlock objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentBlock[]
        */ 
        public function GetContentBlockArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return ContentBlock::LoadArrayByPage($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated ContentBlocks
         * @return int
        */ 
        public function CountContentBlocks() {
            if ((is_null($this->intId)))
                return 0;

            return ContentBlock::CountByPage($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific ContentBlock
         * @param ContentBlock $objContentBlock
         * @return bool
        */
        public function IsContentBlockAssociated(ContentBlock $objContentBlock) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentBlockAssociated on this unsaved Page.');
            if ((is_null($objContentBlock->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentBlockAssociated on this Page with an unsaved ContentBlock.');

            $intRowCount = Page::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Page()->Id, $this->intId),
                    QQ::Equal(QQN::Page()->ContentBlock->ContentBlockId, $objContentBlock->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a ContentBlock
         * @param ContentBlock $objContentBlock
         * @return void
        */ 
        public function AssociateContentBlock(ContentBlock $objContentBlock) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentBlock on this unsaved Page.');
            if ((is_null($objContentBlock->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentBlock on this Page with an unsaved ContentBlock.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `content_block_page_assn` (
                    `page_id`,
                    `content_block_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objContentBlock->Id) . '
                )
            ');
        }

        /**
         * Unassociates a ContentBlock
         * @param ContentBlock $objContentBlock
         * @return void
        */ 
        public function UnassociateContentBlock(ContentBlock $objContentBlock) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentBlock on this unsaved Page.');
            if ((is_null($objContentBlock->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentBlock on this Page with an unsaved ContentBlock.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_block_page_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `content_block_id` = ' . $objDatabase->SqlVariable($objContentBlock->Id) . '
            ');
        }

        /**
         * Unassociates all ContentBlocks
         * @return void
        */ 
        public function UnassociateAllContentBlocks() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllContentBlockArray on this unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_block_page_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }
            
        // Related Many-to-Many Objects' Methods for ContentCategory
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated ContentCategories as an array of ContentCategory objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentCategory[]
        */ 
        public function GetContentCategoryArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return ContentCategory::LoadArrayByPage($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated ContentCategories
         * @return int
        */ 
        public function CountContentCategories() {
            if ((is_null($this->intId)))
                return 0;

            return ContentCategory::CountByPage($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific ContentCategory
         * @param ContentCategory $objContentCategory
         * @return bool
        */
        public function IsContentCategoryAssociated(ContentCategory $objContentCategory) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentCategoryAssociated on this unsaved Page.');
            if ((is_null($objContentCategory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentCategoryAssociated on this Page with an unsaved ContentCategory.');

            $intRowCount = Page::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Page()->Id, $this->intId),
                    QQ::Equal(QQN::Page()->ContentCategory->ContentCategoryId, $objContentCategory->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a ContentCategory
         * @param ContentCategory $objContentCategory
         * @return void
        */ 
        public function AssociateContentCategory(ContentCategory $objContentCategory) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentCategory on this unsaved Page.');
            if ((is_null($objContentCategory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentCategory on this Page with an unsaved ContentCategory.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `page_content_category_assn` (
                    `page_id`,
                    `content_category_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objContentCategory->Id) . '
                )
            ');
        }

        /**
         * Unassociates a ContentCategory
         * @param ContentCategory $objContentCategory
         * @return void
        */ 
        public function UnassociateContentCategory(ContentCategory $objContentCategory) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentCategory on this unsaved Page.');
            if ((is_null($objContentCategory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentCategory on this Page with an unsaved ContentCategory.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_content_category_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `content_category_id` = ' . $objDatabase->SqlVariable($objContentCategory->Id) . '
            ');
        }

        /**
         * Unassociates all ContentCategories
         * @return void
        */ 
        public function UnassociateAllContentCategories() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllContentCategoryArray on this unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_content_category_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }
            
        // Related Many-to-Many Objects' Methods for HtmlMetaTag
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated HtmlMetaTags as an array of HtmlMetaTag objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return HtmlMetaTag[]
        */ 
        public function GetHtmlMetaTagArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return HtmlMetaTag::LoadArrayByPage($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated HtmlMetaTags
         * @return int
        */ 
        public function CountHtmlMetaTags() {
            if ((is_null($this->intId)))
                return 0;

            return HtmlMetaTag::CountByPage($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific HtmlMetaTag
         * @param HtmlMetaTag $objHtmlMetaTag
         * @return bool
        */
        public function IsHtmlMetaTagAssociated(HtmlMetaTag $objHtmlMetaTag) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsHtmlMetaTagAssociated on this unsaved Page.');
            if ((is_null($objHtmlMetaTag->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsHtmlMetaTagAssociated on this Page with an unsaved HtmlMetaTag.');

            $intRowCount = Page::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Page()->Id, $this->intId),
                    QQ::Equal(QQN::Page()->HtmlMetaTag->HtmlMetaTagId, $objHtmlMetaTag->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a HtmlMetaTag
         * @param HtmlMetaTag $objHtmlMetaTag
         * @return void
        */ 
        public function AssociateHtmlMetaTag(HtmlMetaTag $objHtmlMetaTag) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateHtmlMetaTag on this unsaved Page.');
            if ((is_null($objHtmlMetaTag->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateHtmlMetaTag on this Page with an unsaved HtmlMetaTag.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `page_html_meta_tag_assn` (
                    `page_id`,
                    `html_meta_tag_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objHtmlMetaTag->Id) . '
                )
            ');
        }

        /**
         * Unassociates a HtmlMetaTag
         * @param HtmlMetaTag $objHtmlMetaTag
         * @return void
        */ 
        public function UnassociateHtmlMetaTag(HtmlMetaTag $objHtmlMetaTag) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateHtmlMetaTag on this unsaved Page.');
            if ((is_null($objHtmlMetaTag->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateHtmlMetaTag on this Page with an unsaved HtmlMetaTag.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_html_meta_tag_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `html_meta_tag_id` = ' . $objDatabase->SqlVariable($objHtmlMetaTag->Id) . '
            ');
        }

        /**
         * Unassociates all HtmlMetaTags
         * @return void
        */ 
        public function UnassociateAllHtmlMetaTags() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllHtmlMetaTagArray on this unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_html_meta_tag_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }
            
        // Related Many-to-Many Objects' Methods for JavaScript
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated JavaScripts as an array of JavaScript objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return JavaScript[]
        */ 
        public function GetJavaScriptArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return JavaScript::LoadArrayByPage($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated JavaScripts
         * @return int
        */ 
        public function CountJavaScripts() {
            if ((is_null($this->intId)))
                return 0;

            return JavaScript::CountByPage($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific JavaScript
         * @param JavaScript $objJavaScript
         * @return bool
        */
        public function IsJavaScriptAssociated(JavaScript $objJavaScript) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsJavaScriptAssociated on this unsaved Page.');
            if ((is_null($objJavaScript->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsJavaScriptAssociated on this Page with an unsaved JavaScript.');

            $intRowCount = Page::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Page()->Id, $this->intId),
                    QQ::Equal(QQN::Page()->JavaScript->JavaScriptId, $objJavaScript->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a JavaScript
         * @param JavaScript $objJavaScript
         * @return void
        */ 
        public function AssociateJavaScript(JavaScript $objJavaScript) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateJavaScript on this unsaved Page.');
            if ((is_null($objJavaScript->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateJavaScript on this Page with an unsaved JavaScript.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `page_java_script_assn` (
                    `page_id`,
                    `java_script_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objJavaScript->Id) . '
                )
            ');
        }

        /**
         * Unassociates a JavaScript
         * @param JavaScript $objJavaScript
         * @return void
        */ 
        public function UnassociateJavaScript(JavaScript $objJavaScript) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateJavaScript on this unsaved Page.');
            if ((is_null($objJavaScript->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateJavaScript on this Page with an unsaved JavaScript.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_java_script_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `java_script_id` = ' . $objDatabase->SqlVariable($objJavaScript->Id) . '
            ');
        }

        /**
         * Unassociates all JavaScripts
         * @return void
        */ 
        public function UnassociateAllJavaScripts() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllJavaScriptArray on this unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_java_script_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }
            
        // Related Many-to-Many Objects' Methods for StyleSheet
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated StyleSheets as an array of StyleSheet objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return StyleSheet[]
        */ 
        public function GetStyleSheetArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return StyleSheet::LoadArrayByPage($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated StyleSheets
         * @return int
        */ 
        public function CountStyleSheets() {
            if ((is_null($this->intId)))
                return 0;

            return StyleSheet::CountByPage($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific StyleSheet
         * @param StyleSheet $objStyleSheet
         * @return bool
        */
        public function IsStyleSheetAssociated(StyleSheet $objStyleSheet) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsStyleSheetAssociated on this unsaved Page.');
            if ((is_null($objStyleSheet->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsStyleSheetAssociated on this Page with an unsaved StyleSheet.');

            $intRowCount = Page::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Page()->Id, $this->intId),
                    QQ::Equal(QQN::Page()->StyleSheet->StyleSheetId, $objStyleSheet->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a StyleSheet
         * @param StyleSheet $objStyleSheet
         * @return void
        */ 
        public function AssociateStyleSheet(StyleSheet $objStyleSheet) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateStyleSheet on this unsaved Page.');
            if ((is_null($objStyleSheet->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateStyleSheet on this Page with an unsaved StyleSheet.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `page_style_sheet_assn` (
                    `page_id`,
                    `style_sheet_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objStyleSheet->Id) . '
                )
            ');
        }

        /**
         * Unassociates a StyleSheet
         * @param StyleSheet $objStyleSheet
         * @return void
        */ 
        public function UnassociateStyleSheet(StyleSheet $objStyleSheet) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStyleSheet on this unsaved Page.');
            if ((is_null($objStyleSheet->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStyleSheet on this Page with an unsaved StyleSheet.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_style_sheet_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `style_sheet_id` = ' . $objDatabase->SqlVariable($objStyleSheet->Id) . '
            ');
        }

        /**
         * Unassociates all StyleSheets
         * @return void
        */ 
        public function UnassociateAllStyleSheets() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllStyleSheetArray on this unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_style_sheet_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
                return Usergroup::LoadArrayByPage($this->intId, $objOptionalClauses);
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

            return Usergroup::CountByPage($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific Usergroup
         * @param Usergroup $objUsergroup
         * @return bool
        */
        public function IsUsergroupAssociated(Usergroup $objUsergroup) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsUsergroupAssociated on this unsaved Page.');
            if ((is_null($objUsergroup->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsUsergroupAssociated on this Page with an unsaved Usergroup.');

            $intRowCount = Page::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Page()->Id, $this->intId),
                    QQ::Equal(QQN::Page()->Usergroup->UsergroupId, $objUsergroup->Id)
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
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsergroup on this unsaved Page.');
            if ((is_null($objUsergroup->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsergroup on this Page with an unsaved Usergroup.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `page_usergroup_assn` (
                    `page_id`,
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsergroup on this unsaved Page.');
            if ((is_null($objUsergroup->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsergroup on this Page with an unsaved Usergroup.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_usergroup_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `usergroup_id` = ' . $objDatabase->SqlVariable($objUsergroup->Id) . '
            ');
        }

        /**
         * Unassociates all Usergroups
         * @return void
        */ 
        public function UnassociateAllUsergroups() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllUsergroupArray on this unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = Page::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `page_usergroup_assn`
                WHERE
                    `page_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }



    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodePageContentBlock extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'contentblock';

        protected $strTableName = 'content_block_page_assn';
        protected $strPrimaryKey = 'page_id';
        protected $strClassName = 'ContentBlock';

        public function __get($strName) {
            switch ($strName) {
                case 'ContentBlockId':
                    return new QQNode('content_block_id', 'ContentBlockId', 'integer', $this);
                case 'ContentBlock':
                    return new QQNodeContentBlock('content_block_id', 'ContentBlockId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeContentBlock('content_block_id', 'ContentBlockId', 'integer', $this);
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

    class QQNodePageContentCategory extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'contentcategory';

        protected $strTableName = 'page_content_category_assn';
        protected $strPrimaryKey = 'page_id';
        protected $strClassName = 'ContentCategory';

        public function __get($strName) {
            switch ($strName) {
                case 'ContentCategoryId':
                    return new QQNode('content_category_id', 'ContentCategoryId', 'integer', $this);
                case 'ContentCategory':
                    return new QQNodeContentCategory('content_category_id', 'ContentCategoryId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeContentCategory('content_category_id', 'ContentCategoryId', 'integer', $this);
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

    class QQNodePageHtmlMetaTag extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'htmlmetatag';

        protected $strTableName = 'page_html_meta_tag_assn';
        protected $strPrimaryKey = 'page_id';
        protected $strClassName = 'HtmlMetaTag';

        public function __get($strName) {
            switch ($strName) {
                case 'HtmlMetaTagId':
                    return new QQNode('html_meta_tag_id', 'HtmlMetaTagId', 'integer', $this);
                case 'HtmlMetaTag':
                    return new QQNodeHtmlMetaTag('html_meta_tag_id', 'HtmlMetaTagId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeHtmlMetaTag('html_meta_tag_id', 'HtmlMetaTagId', 'integer', $this);
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

    class QQNodePageJavaScript extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'javascript';

        protected $strTableName = 'page_java_script_assn';
        protected $strPrimaryKey = 'page_id';
        protected $strClassName = 'JavaScript';

        public function __get($strName) {
            switch ($strName) {
                case 'JavaScriptId':
                    return new QQNode('java_script_id', 'JavaScriptId', 'integer', $this);
                case 'JavaScript':
                    return new QQNodeJavaScript('java_script_id', 'JavaScriptId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeJavaScript('java_script_id', 'JavaScriptId', 'integer', $this);
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

    class QQNodePageStyleSheet extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'stylesheet';

        protected $strTableName = 'page_style_sheet_assn';
        protected $strPrimaryKey = 'page_id';
        protected $strClassName = 'StyleSheet';

        public function __get($strName) {
            switch ($strName) {
                case 'StyleSheetId':
                    return new QQNode('style_sheet_id', 'StyleSheetId', 'integer', $this);
                case 'StyleSheet':
                    return new QQNodeStyleSheet('style_sheet_id', 'StyleSheetId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeStyleSheet('style_sheet_id', 'StyleSheetId', 'integer', $this);
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

    class QQNodePageUsergroup extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'usergroup';

        protected $strTableName = 'page_usergroup_assn';
        protected $strPrimaryKey = 'page_id';
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

    class QQNodePage extends QQNode {
        protected $strTableName = 'page';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Page';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'LastModification':
                    return new QQNode('last_modification', 'LastModification', 'string', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'Uri':
                    return new QQNode('uri', 'Uri', 'string', $this);
                case 'HasHeader':
                    return new QQNode('has_header', 'HasHeader', 'boolean', $this);
                case 'HasLeftColumn':
                    return new QQNode('has_left_column', 'HasLeftColumn', 'boolean', $this);
                case 'HasRightColumn':
                    return new QQNode('has_right_column', 'HasRightColumn', 'boolean', $this);
                case 'HasFooter':
                    return new QQNode('has_footer', 'HasFooter', 'boolean', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'DocTypeId':
                    return new QQNode('doc_type_id', 'DocTypeId', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'ContentBlock':
                    return new QQNodePageContentBlock($this);
                case 'ContentCategory':
                    return new QQNodePageContentCategory($this);
                case 'HtmlMetaTag':
                    return new QQNodePageHtmlMetaTag($this);
                case 'JavaScript':
                    return new QQNodePageJavaScript($this);
                case 'StyleSheet':
                    return new QQNodePageStyleSheet($this);
                case 'Usergroup':
                    return new QQNodePageUsergroup($this);
                case 'MenuItem':
                    return new QQReverseReferenceNodeMenuItem($this, 'menuitem', 'reverse_reference', 'page_id');

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

    class QQReverseReferenceNodePage extends QQReverseReferenceNode {
        protected $strTableName = 'page';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Page';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'LastModification':
                    return new QQNode('last_modification', 'LastModification', 'string', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'Uri':
                    return new QQNode('uri', 'Uri', 'string', $this);
                case 'HasHeader':
                    return new QQNode('has_header', 'HasHeader', 'boolean', $this);
                case 'HasLeftColumn':
                    return new QQNode('has_left_column', 'HasLeftColumn', 'boolean', $this);
                case 'HasRightColumn':
                    return new QQNode('has_right_column', 'HasRightColumn', 'boolean', $this);
                case 'HasFooter':
                    return new QQNode('has_footer', 'HasFooter', 'boolean', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'DocTypeId':
                    return new QQNode('doc_type_id', 'DocTypeId', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'ContentBlock':
                    return new QQNodePageContentBlock($this);
                case 'ContentCategory':
                    return new QQNodePageContentCategory($this);
                case 'HtmlMetaTag':
                    return new QQNodePageHtmlMetaTag($this);
                case 'JavaScript':
                    return new QQNodePageJavaScript($this);
                case 'StyleSheet':
                    return new QQNodePageStyleSheet($this);
                case 'Usergroup':
                    return new QQNodePageUsergroup($this);
                case 'MenuItem':
                    return new QQReverseReferenceNodeMenuItem($this, 'menuitem', 'reverse_reference', 'page_id');

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