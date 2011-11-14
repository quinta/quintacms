<?php
    /**
     * The abstract ContentBlockGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the ContentBlock subclass which
     * extends this ContentBlockGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ContentBlock class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Name the value for strName (Unique)
     * @property string $Cssclass the value for strCssclass 
     * @property string $Title the value for strTitle 
     * @property string $Description the value for strDescription 
     * @property boolean $ShowTitle the value for blnShowTitle (Not Null)
     * @property boolean $ShowDescription the value for blnShowDescription (Not Null)
     * @property boolean $Collapsable the value for blnCollapsable (Not Null)
     * @property integer $SortOrder the value for intSortOrder (Not Null)
     * @property integer $ParentContentBlockId the value for intParentContentBlockId 
     * @property integer $LocationId the value for intLocationId (Not Null)
     * @property-read Page $_Page the value for the private _objPage (Read-Only) if set due to an expansion on the content_block_page_assn association table
     * @property-read Page[] $_PageArray the value for the private _objPageArray (Read-Only) if set due to an ExpandAsArray on the content_block_page_assn association table
     * @property-read ContentItem $_ContentItem the value for the private _objContentItem (Read-Only) if set due to an expansion on the content_item_content_block_assn association table
     * @property-read ContentItem[] $_ContentItemArray the value for the private _objContentItemArray (Read-Only) if set due to an ExpandAsArray on the content_item_content_block_assn association table
     * @property-read Menu $_Menu the value for the private _objMenu (Read-Only) if set due to an expansion on the menu_content_block_assn association table
     * @property-read Menu[] $_MenuArray the value for the private _objMenuArray (Read-Only) if set due to an ExpandAsArray on the menu_content_block_assn association table
     * @property-read Module $_Module the value for the private _objModule (Read-Only) if set due to an expansion on the module.content_block_id reverse relationship
     * @property-read Module[] $_ModuleArray the value for the private _objModuleArray (Read-Only) if set due to an ExpandAsArray on the module.content_block_id reverse relationship
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class ContentBlockGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column content_block.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column content_block.name
         * @var string strName
         *
         */
        protected $strName = null;
        const NameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column content_block.cssclass
         * @var string strCssclass
         *
         */
        protected $strCssclass = null;
        const CssclassMaxLength = 128;


        /**
         * Protected member variable that maps to the database column content_block.title
         * @var string strTitle
         *
         */
        protected $strTitle = null;
        const TitleMaxLength = 128;


        /**
         * Protected member variable that maps to the database column content_block.description
         * @var string strDescription
         *
         */
        protected $strDescription = null;
        const DescriptionMaxLength = 256;


        /**
         * Protected member variable that maps to the database column content_block.show_title
         * @var boolean blnShowTitle
         *
         */
        protected $blnShowTitle = null;


        /**
         * Protected member variable that maps to the database column content_block.show_description
         * @var boolean blnShowDescription
         *
         */
        protected $blnShowDescription = null;


        /**
         * Protected member variable that maps to the database column content_block.collapsable
         * @var boolean blnCollapsable
         *
         */
        protected $blnCollapsable = null;


        /**
         * Protected member variable that maps to the database column content_block.sort_order
         * @var integer intSortOrder
         *
         */
        protected $intSortOrder = null;


        /**
         * Protected member variable that maps to the database column content_block.parent_content_block_id
         * @var integer intParentContentBlockId
         *
         */
        protected $intParentContentBlockId = null;


        /**
         * Protected member variable that maps to the database column content_block.location_id
         * @var integer intLocationId
         *
         */
        protected $intLocationId = null;


        /**
         * Private member variable that stores a reference to a single Page object
         * (of type Page), if this ContentBlock object was restored with
         * an expansion on the content_block_page_assn association table.
         * @var Page _objPage;
         */
        private $_objPage;

        /**
         * Private member variable that stores a reference to an array of Page objects
         * (of type Page[]), if this ContentBlock object was restored with
         * an ExpandAsArray on the content_block_page_assn association table.
         * @var Page[] _objPageArray;
         */
        private $_objPageArray = array();

        /**
         * Private member variable that stores a reference to a single ContentItem object
         * (of type ContentItem), if this ContentBlock object was restored with
         * an expansion on the content_item_content_block_assn association table.
         * @var ContentItem _objContentItem;
         */
        private $_objContentItem;

        /**
         * Private member variable that stores a reference to an array of ContentItem objects
         * (of type ContentItem[]), if this ContentBlock object was restored with
         * an ExpandAsArray on the content_item_content_block_assn association table.
         * @var ContentItem[] _objContentItemArray;
         */
        private $_objContentItemArray = array();

        /**
         * Private member variable that stores a reference to a single Menu object
         * (of type Menu), if this ContentBlock object was restored with
         * an expansion on the menu_content_block_assn association table.
         * @var Menu _objMenu;
         */
        private $_objMenu;

        /**
         * Private member variable that stores a reference to an array of Menu objects
         * (of type Menu[]), if this ContentBlock object was restored with
         * an ExpandAsArray on the menu_content_block_assn association table.
         * @var Menu[] _objMenuArray;
         */
        private $_objMenuArray = array();

        /**
         * Private member variable that stores a reference to a single Module object
         * (of type Module), if this ContentBlock object was restored with
         * an expansion on the module association table.
         * @var Module _objModule;
         */
        private $_objModule;

        /**
         * Private member variable that stores a reference to an array of Module objects
         * (of type Module[]), if this ContentBlock object was restored with
         * an ExpandAsArray on the module association table.
         * @var Module[] _objModuleArray;
         */
        private $_objModuleArray = array();

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
         * Load a ContentBlock from PK Info
         * @param integer $intId
         * @return ContentBlock
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return ContentBlock::QuerySingle(
                QQ::Equal(QQN::ContentBlock()->Id, $intId)
            );
        }

        /**
         * Load all ContentBlocks
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentBlock[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call ContentBlock::QueryArray to perform the LoadAll query
            try {
                return ContentBlock::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all ContentBlocks
         * @return int
         */
        public static function CountAll() {
            // Call ContentBlock::QueryCount to perform the CountAll query
            return ContentBlock::QueryCount(QQ::All());
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
            $objDatabase = ContentBlock::GetDatabase();

            // Create/Build out the QueryBuilder object with ContentBlock-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'content_block');
            ContentBlock::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('content_block');

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
         * Static Qcodo Query method to query for a single ContentBlock object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ContentBlock the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ContentBlock::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new ContentBlock object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ContentBlock::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of ContentBlock objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ContentBlock[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ContentBlock::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ContentBlock::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of ContentBlock objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ContentBlock::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = ContentBlock::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'content_block_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ContentBlock-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                ContentBlock::GetSelectFields($objQueryBuilder);
                ContentBlock::GetFromFields($objQueryBuilder);

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
            return ContentBlock::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this ContentBlock
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'content_block';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            $objBuilder->AddSelectItem($strTableName, 'cssclass', $strAliasPrefix . 'cssclass');
            $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
            $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
            $objBuilder->AddSelectItem($strTableName, 'show_title', $strAliasPrefix . 'show_title');
            $objBuilder->AddSelectItem($strTableName, 'show_description', $strAliasPrefix . 'show_description');
            $objBuilder->AddSelectItem($strTableName, 'collapsable', $strAliasPrefix . 'collapsable');
            $objBuilder->AddSelectItem($strTableName, 'sort_order', $strAliasPrefix . 'sort_order');
            $objBuilder->AddSelectItem($strTableName, 'parent_content_block_id', $strAliasPrefix . 'parent_content_block_id');
            $objBuilder->AddSelectItem($strTableName, 'location_id', $strAliasPrefix . 'location_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a ContentBlock from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this ContentBlock::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return ContentBlock
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
                    $strAliasPrefix = 'content_block__';

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

                $strAlias = $strAliasPrefix . 'menu__menu_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objMenuArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objMenuArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu__menu_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objMenuArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objMenuArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu__menu_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }


                $strAlias = $strAliasPrefix . 'module__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objModuleArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objModuleArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Module::InstantiateDbRow($objDbRow, $strAliasPrefix . 'module__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objModuleArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objModuleArray[] = Module::InstantiateDbRow($objDbRow, $strAliasPrefix . 'module__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'content_block__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the ContentBlock object
            $objToReturn = new ContentBlock();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
            $objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'cssclass', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cssclass'] : $strAliasPrefix . 'cssclass';
            $objToReturn->strCssclass = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'title'] : $strAliasPrefix . 'title';
            $objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'description'] : $strAliasPrefix . 'description';
            $objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'show_title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'show_title'] : $strAliasPrefix . 'show_title';
            $objToReturn->blnShowTitle = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'show_description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'show_description'] : $strAliasPrefix . 'show_description';
            $objToReturn->blnShowDescription = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'collapsable', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'collapsable'] : $strAliasPrefix . 'collapsable';
            $objToReturn->blnCollapsable = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'sort_order', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'sort_order'] : $strAliasPrefix . 'sort_order';
            $objToReturn->intSortOrder = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'parent_content_block_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'parent_content_block_id'] : $strAliasPrefix . 'parent_content_block_id';
            $objToReturn->intParentContentBlockId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'location_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'location_id'] : $strAliasPrefix . 'location_id';
            $objToReturn->intLocationId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'content_block__';



            // Check for Page Virtual Binding
            $strAlias = $strAliasPrefix . 'page__page_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objPageArray[] = Page::InstantiateDbRow($objDbRow, $strAliasPrefix . 'page__page_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objPage = Page::InstantiateDbRow($objDbRow, $strAliasPrefix . 'page__page_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for ContentItem Virtual Binding
            $strAlias = $strAliasPrefix . 'contentitem__content_item_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objContentItemArray[] = ContentItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentitem__content_item_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objContentItem = ContentItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentitem__content_item_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for Menu Virtual Binding
            $strAlias = $strAliasPrefix . 'menu__menu_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objMenuArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu__menu_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objMenu = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu__menu_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }


            // Check for Module Virtual Binding
            $strAlias = $strAliasPrefix . 'module__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objModuleArray[] = Module::InstantiateDbRow($objDbRow, $strAliasPrefix . 'module__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objModule = Module::InstantiateDbRow($objDbRow, $strAliasPrefix . 'module__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }

        /**
         * Instantiate an array of ContentBlocks from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return ContentBlock[]
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
                    $objItem = ContentBlock::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = ContentBlock::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single ContentBlock object,
         * by Id Index(es)
         * @param integer $intId
         * @return ContentBlock
        */
        public static function LoadById($intId) {
            return ContentBlock::QuerySingle(
                QQ::Equal(QQN::ContentBlock()->Id, $intId)
            );
        }
            
        /**
         * Load a single ContentBlock object,
         * by Name Index(es)
         * @param string $strName
         * @return ContentBlock
        */
        public static function LoadByName($strName) {
            return ContentBlock::QuerySingle(
                QQ::Equal(QQN::ContentBlock()->Name, $strName)
            );
        }
            
        /**
         * Load an array of ContentBlock objects,
         * by ParentContentBlockId Index(es)
         * @param integer $intParentContentBlockId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentBlock[]
        */
        public static function LoadArrayByParentContentBlockId($intParentContentBlockId, $objOptionalClauses = null) {
            // Call ContentBlock::QueryArray to perform the LoadArrayByParentContentBlockId query
            try {
                return ContentBlock::QueryArray(
                    QQ::Equal(QQN::ContentBlock()->ParentContentBlockId, $intParentContentBlockId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentBlocks
         * by ParentContentBlockId Index(es)
         * @param integer $intParentContentBlockId
         * @return int
        */
        public static function CountByParentContentBlockId($intParentContentBlockId) {
            // Call ContentBlock::QueryCount to perform the CountByParentContentBlockId query
            return ContentBlock::QueryCount(
                QQ::Equal(QQN::ContentBlock()->ParentContentBlockId, $intParentContentBlockId)
            );
        }
            
        /**
         * Load an array of ContentBlock objects,
         * by LocationId Index(es)
         * @param integer $intLocationId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentBlock[]
        */
        public static function LoadArrayByLocationId($intLocationId, $objOptionalClauses = null) {
            // Call ContentBlock::QueryArray to perform the LoadArrayByLocationId query
            try {
                return ContentBlock::QueryArray(
                    QQ::Equal(QQN::ContentBlock()->LocationId, $intLocationId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentBlocks
         * by LocationId Index(es)
         * @param integer $intLocationId
         * @return int
        */
        public static function CountByLocationId($intLocationId) {
            // Call ContentBlock::QueryCount to perform the CountByLocationId query
            return ContentBlock::QueryCount(
                QQ::Equal(QQN::ContentBlock()->LocationId, $intLocationId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////
            /**
         * Load an array of Page objects for a given Page
         * via the content_block_page_assn table
         * @param integer $intPageId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentBlock[]
        */
        public static function LoadArrayByPage($intPageId, $objOptionalClauses = null) {
            // Call ContentBlock::QueryArray to perform the LoadArrayByPage query
            try {
                return ContentBlock::QueryArray(
                    QQ::Equal(QQN::ContentBlock()->Page->PageId, $intPageId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentBlocks for a given Page
         * via the content_block_page_assn table
         * @param integer $intPageId
         * @return int
        */
        public static function CountByPage($intPageId) {
            return ContentBlock::QueryCount(
                QQ::Equal(QQN::ContentBlock()->Page->PageId, $intPageId)
            );
        }
            /**
         * Load an array of ContentItem objects for a given ContentItem
         * via the content_item_content_block_assn table
         * @param integer $intContentItemId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentBlock[]
        */
        public static function LoadArrayByContentItem($intContentItemId, $objOptionalClauses = null) {
            // Call ContentBlock::QueryArray to perform the LoadArrayByContentItem query
            try {
                return ContentBlock::QueryArray(
                    QQ::Equal(QQN::ContentBlock()->ContentItem->ContentItemId, $intContentItemId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentBlocks for a given ContentItem
         * via the content_item_content_block_assn table
         * @param integer $intContentItemId
         * @return int
        */
        public static function CountByContentItem($intContentItemId) {
            return ContentBlock::QueryCount(
                QQ::Equal(QQN::ContentBlock()->ContentItem->ContentItemId, $intContentItemId)
            );
        }
            /**
         * Load an array of Menu objects for a given Menu
         * via the menu_content_block_assn table
         * @param integer $intMenuId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentBlock[]
        */
        public static function LoadArrayByMenu($intMenuId, $objOptionalClauses = null) {
            // Call ContentBlock::QueryArray to perform the LoadArrayByMenu query
            try {
                return ContentBlock::QueryArray(
                    QQ::Equal(QQN::ContentBlock()->Menu->MenuId, $intMenuId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentBlocks for a given Menu
         * via the menu_content_block_assn table
         * @param integer $intMenuId
         * @return int
        */
        public static function CountByMenu($intMenuId) {
            return ContentBlock::QueryCount(
                QQ::Equal(QQN::ContentBlock()->Menu->MenuId, $intMenuId)
            );
        }


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this ContentBlock
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `content_block` (
                            `name`,
                            `cssclass`,
                            `title`,
                            `description`,
                            `show_title`,
                            `show_description`,
                            `collapsable`,
                            `sort_order`,
                            `parent_content_block_id`,
                            `location_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strName) . ',
                            ' . $objDatabase->SqlVariable($this->strCssclass) . ',
                            ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            ' . $objDatabase->SqlVariable($this->blnShowTitle) . ',
                            ' . $objDatabase->SqlVariable($this->blnShowDescription) . ',
                            ' . $objDatabase->SqlVariable($this->blnCollapsable) . ',
                            ' . $objDatabase->SqlVariable($this->intSortOrder) . ',
                            ' . $objDatabase->SqlVariable($this->intParentContentBlockId) . ',
                            ' . $objDatabase->SqlVariable($this->intLocationId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('content_block', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `content_block`
                        SET
                            `name` = ' . $objDatabase->SqlVariable($this->strName) . ',
                            `cssclass` = ' . $objDatabase->SqlVariable($this->strCssclass) . ',
                            `title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            `description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            `show_title` = ' . $objDatabase->SqlVariable($this->blnShowTitle) . ',
                            `show_description` = ' . $objDatabase->SqlVariable($this->blnShowDescription) . ',
                            `collapsable` = ' . $objDatabase->SqlVariable($this->blnCollapsable) . ',
                            `sort_order` = ' . $objDatabase->SqlVariable($this->intSortOrder) . ',
                            `parent_content_block_id` = ' . $objDatabase->SqlVariable($this->intParentContentBlockId) . ',
                            `location_id` = ' . $objDatabase->SqlVariable($this->intLocationId) . '
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
         * Delete this ContentBlock
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this ContentBlock with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_block`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all ContentBlocks
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_block`');
        }

        /**
         * Truncate content_block table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `content_block`');
        }

        /**
         * Reload this ContentBlock from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved ContentBlock object.');

            // Reload the Object
            $objReloaded = ContentBlock::Load($this->intId);

            // Update $this's local variables to match
            $this->strName = $objReloaded->strName;
            $this->strCssclass = $objReloaded->strCssclass;
            $this->strTitle = $objReloaded->strTitle;
            $this->strDescription = $objReloaded->strDescription;
            $this->blnShowTitle = $objReloaded->blnShowTitle;
            $this->blnShowDescription = $objReloaded->blnShowDescription;
            $this->blnCollapsable = $objReloaded->blnCollapsable;
            $this->intSortOrder = $objReloaded->intSortOrder;
            $this->intParentContentBlockId = $objReloaded->intParentContentBlockId;
            $this->intLocationId = $objReloaded->intLocationId;
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

                case 'Cssclass':
                    /**
                     * Gets the value for strCssclass 
                     * @return string
                     */
                    return $this->strCssclass;

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

                case 'ShowTitle':
                    /**
                     * Gets the value for blnShowTitle (Not Null)
                     * @return boolean
                     */
                    return $this->blnShowTitle;

                case 'ShowDescription':
                    /**
                     * Gets the value for blnShowDescription (Not Null)
                     * @return boolean
                     */
                    return $this->blnShowDescription;

                case 'Collapsable':
                    /**
                     * Gets the value for blnCollapsable (Not Null)
                     * @return boolean
                     */
                    return $this->blnCollapsable;

                case 'SortOrder':
                    /**
                     * Gets the value for intSortOrder (Not Null)
                     * @return integer
                     */
                    return $this->intSortOrder;

                case 'ParentContentBlockId':
                    /**
                     * Gets the value for intParentContentBlockId 
                     * @return integer
                     */
                    return $this->intParentContentBlockId;

                case 'LocationId':
                    /**
                     * Gets the value for intLocationId (Not Null)
                     * @return integer
                     */
                    return $this->intLocationId;


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
                     * if set due to an expansion on the content_block_page_assn association table
                     * @return Page
                     */
                    return $this->_objPage;

                case '_PageArray':
                    /**
                     * Gets the value for the private _objPageArray (Read-Only)
                     * if set due to an ExpandAsArray on the content_block_page_assn association table
                     * @return Page[]
                     */
                    return (array) $this->_objPageArray;

                case '_ContentItem':
                    /**
                     * Gets the value for the private _objContentItem (Read-Only)
                     * if set due to an expansion on the content_item_content_block_assn association table
                     * @return ContentItem
                     */
                    return $this->_objContentItem;

                case '_ContentItemArray':
                    /**
                     * Gets the value for the private _objContentItemArray (Read-Only)
                     * if set due to an ExpandAsArray on the content_item_content_block_assn association table
                     * @return ContentItem[]
                     */
                    return (array) $this->_objContentItemArray;

                case '_Menu':
                    /**
                     * Gets the value for the private _objMenu (Read-Only)
                     * if set due to an expansion on the menu_content_block_assn association table
                     * @return Menu
                     */
                    return $this->_objMenu;

                case '_MenuArray':
                    /**
                     * Gets the value for the private _objMenuArray (Read-Only)
                     * if set due to an ExpandAsArray on the menu_content_block_assn association table
                     * @return Menu[]
                     */
                    return (array) $this->_objMenuArray;

                case '_Module':
                    /**
                     * Gets the value for the private _objModule (Read-Only)
                     * if set due to an expansion on the module.content_block_id reverse relationship
                     * @return Module
                     */
                    return $this->_objModule;

                case '_ModuleArray':
                    /**
                     * Gets the value for the private _objModuleArray (Read-Only)
                     * if set due to an ExpandAsArray on the module.content_block_id reverse relationship
                     * @return Module[]
                     */
                    return (array) $this->_objModuleArray;


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

                case 'Cssclass':
                    /**
                     * Sets the value for strCssclass 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strCssclass = QType::Cast($mixValue, QType::String));
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

                case 'ShowTitle':
                    /**
                     * Sets the value for blnShowTitle (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnShowTitle = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ShowDescription':
                    /**
                     * Sets the value for blnShowDescription (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnShowDescription = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Collapsable':
                    /**
                     * Sets the value for blnCollapsable (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnCollapsable = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'SortOrder':
                    /**
                     * Sets the value for intSortOrder (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intSortOrder = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ParentContentBlockId':
                    /**
                     * Sets the value for intParentContentBlockId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intParentContentBlockId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'LocationId':
                    /**
                     * Sets the value for intLocationId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intLocationId = QType::Cast($mixValue, QType::Integer));
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

            
        
        // Related Objects' Methods for Module
        //-------------------------------------------------------------------

        /**
         * Gets all associated Modules as an array of Module objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Module[]
        */ 
        public function GetModuleArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Module::LoadArrayByContentBlockId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated Modules
         * @return int
        */ 
        public function CountModules() {
            if ((is_null($this->intId)))
                return 0;

            return Module::CountByContentBlockId($this->intId);
        }

        /**
         * Associates a Module
         * @param Module $objModule
         * @return void
        */ 
        public function AssociateModule(Module $objModule) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateModule on this unsaved ContentBlock.');
            if ((is_null($objModule->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateModule on this ContentBlock with an unsaved Module.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `module`
                SET
                    `content_block_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objModule->Id) . '
            ');
        }

        /**
         * Unassociates a Module
         * @param Module $objModule
         * @return void
        */ 
        public function UnassociateModule(Module $objModule) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModule on this unsaved ContentBlock.');
            if ((is_null($objModule->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModule on this ContentBlock with an unsaved Module.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `module`
                SET
                    `content_block_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objModule->Id) . ' AND
                    `content_block_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all Modules
         * @return void
        */ 
        public function UnassociateAllModules() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModule on this unsaved ContentBlock.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `module`
                SET
                    `content_block_id` = null
                WHERE
                    `content_block_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated Module
         * @param Module $objModule
         * @return void
        */ 
        public function DeleteAssociatedModule(Module $objModule) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModule on this unsaved ContentBlock.');
            if ((is_null($objModule->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModule on this ContentBlock with an unsaved Module.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `module`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objModule->Id) . ' AND
                    `content_block_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated Modules
         * @return void
        */ 
        public function DeleteAllModules() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateModule on this unsaved ContentBlock.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `module`
                WHERE
                    `content_block_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
                return Page::LoadArrayByContentBlock($this->intId, $objOptionalClauses);
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

            return Page::CountByContentBlock($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific Page
         * @param Page $objPage
         * @return bool
        */
        public function IsPageAssociated(Page $objPage) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsPageAssociated on this unsaved ContentBlock.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsPageAssociated on this ContentBlock with an unsaved Page.');

            $intRowCount = ContentBlock::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::ContentBlock()->Id, $this->intId),
                    QQ::Equal(QQN::ContentBlock()->Page->PageId, $objPage->Id)
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
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePage on this unsaved ContentBlock.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePage on this ContentBlock with an unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `content_block_page_assn` (
                    `content_block_id`,
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePage on this unsaved ContentBlock.');
            if ((is_null($objPage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePage on this ContentBlock with an unsaved Page.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_block_page_assn`
                WHERE
                    `content_block_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `page_id` = ' . $objDatabase->SqlVariable($objPage->Id) . '
            ');
        }

        /**
         * Unassociates all Pages
         * @return void
        */ 
        public function UnassociateAllPages() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllPageArray on this unsaved ContentBlock.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_block_page_assn`
                WHERE
                    `content_block_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }
            
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
                return ContentItem::LoadArrayByContentBlock($this->intId, $objOptionalClauses);
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

            return ContentItem::CountByContentBlock($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific ContentItem
         * @param ContentItem $objContentItem
         * @return bool
        */
        public function IsContentItemAssociated(ContentItem $objContentItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentItemAssociated on this unsaved ContentBlock.');
            if ((is_null($objContentItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentItemAssociated on this ContentBlock with an unsaved ContentItem.');

            $intRowCount = ContentBlock::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::ContentBlock()->Id, $this->intId),
                    QQ::Equal(QQN::ContentBlock()->ContentItem->ContentItemId, $objContentItem->Id)
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
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentItem on this unsaved ContentBlock.');
            if ((is_null($objContentItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentItem on this ContentBlock with an unsaved ContentItem.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `content_item_content_block_assn` (
                    `content_block_id`,
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentItem on this unsaved ContentBlock.');
            if ((is_null($objContentItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentItem on this ContentBlock with an unsaved ContentItem.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item_content_block_assn`
                WHERE
                    `content_block_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `content_item_id` = ' . $objDatabase->SqlVariable($objContentItem->Id) . '
            ');
        }

        /**
         * Unassociates all ContentItems
         * @return void
        */ 
        public function UnassociateAllContentItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllContentItemArray on this unsaved ContentBlock.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item_content_block_assn`
                WHERE
                    `content_block_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }
            
        // Related Many-to-Many Objects' Methods for Menu
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated Menus as an array of Menu objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Menu[]
        */ 
        public function GetMenuArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Menu::LoadArrayByContentBlock($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated Menus
         * @return int
        */ 
        public function CountMenus() {
            if ((is_null($this->intId)))
                return 0;

            return Menu::CountByContentBlock($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific Menu
         * @param Menu $objMenu
         * @return bool
        */
        public function IsMenuAssociated(Menu $objMenu) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsMenuAssociated on this unsaved ContentBlock.');
            if ((is_null($objMenu->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsMenuAssociated on this ContentBlock with an unsaved Menu.');

            $intRowCount = ContentBlock::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::ContentBlock()->Id, $this->intId),
                    QQ::Equal(QQN::ContentBlock()->Menu->MenuId, $objMenu->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a Menu
         * @param Menu $objMenu
         * @return void
        */ 
        public function AssociateMenu(Menu $objMenu) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenu on this unsaved ContentBlock.');
            if ((is_null($objMenu->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenu on this ContentBlock with an unsaved Menu.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `menu_content_block_assn` (
                    `content_block_id`,
                    `menu_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objMenu->Id) . '
                )
            ');
        }

        /**
         * Unassociates a Menu
         * @param Menu $objMenu
         * @return void
        */ 
        public function UnassociateMenu(Menu $objMenu) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenu on this unsaved ContentBlock.');
            if ((is_null($objMenu->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenu on this ContentBlock with an unsaved Menu.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_content_block_assn`
                WHERE
                    `content_block_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `menu_id` = ' . $objDatabase->SqlVariable($objMenu->Id) . '
            ');
        }

        /**
         * Unassociates all Menus
         * @return void
        */ 
        public function UnassociateAllMenus() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllMenuArray on this unsaved ContentBlock.');

            // Get the Database Object for this Class
            $objDatabase = ContentBlock::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_content_block_assn`
                WHERE
                    `content_block_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }



    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeContentBlockPage extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'page';

        protected $strTableName = 'content_block_page_assn';
        protected $strPrimaryKey = 'content_block_id';
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

    class QQNodeContentBlockContentItem extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'contentitem';

        protected $strTableName = 'content_item_content_block_assn';
        protected $strPrimaryKey = 'content_block_id';
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

    class QQNodeContentBlockMenu extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'menu';

        protected $strTableName = 'menu_content_block_assn';
        protected $strPrimaryKey = 'content_block_id';
        protected $strClassName = 'Menu';

        public function __get($strName) {
            switch ($strName) {
                case 'MenuId':
                    return new QQNode('menu_id', 'MenuId', 'integer', $this);
                case 'Menu':
                    return new QQNodeMenu('menu_id', 'MenuId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeMenu('menu_id', 'MenuId', 'integer', $this);
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

    class QQNodeContentBlock extends QQNode {
        protected $strTableName = 'content_block';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ContentBlock';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Cssclass':
                    return new QQNode('cssclass', 'Cssclass', 'string', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'ShowTitle':
                    return new QQNode('show_title', 'ShowTitle', 'boolean', $this);
                case 'ShowDescription':
                    return new QQNode('show_description', 'ShowDescription', 'boolean', $this);
                case 'Collapsable':
                    return new QQNode('collapsable', 'Collapsable', 'boolean', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'ParentContentBlockId':
                    return new QQNode('parent_content_block_id', 'ParentContentBlockId', 'integer', $this);
                case 'LocationId':
                    return new QQNode('location_id', 'LocationId', 'integer', $this);
                case 'Page':
                    return new QQNodeContentBlockPage($this);
                case 'ContentItem':
                    return new QQNodeContentBlockContentItem($this);
                case 'Menu':
                    return new QQNodeContentBlockMenu($this);
                case 'Module':
                    return new QQReverseReferenceNodeModule($this, 'module', 'reverse_reference', 'content_block_id');

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

    class QQReverseReferenceNodeContentBlock extends QQReverseReferenceNode {
        protected $strTableName = 'content_block';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ContentBlock';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Cssclass':
                    return new QQNode('cssclass', 'Cssclass', 'string', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'ShowTitle':
                    return new QQNode('show_title', 'ShowTitle', 'boolean', $this);
                case 'ShowDescription':
                    return new QQNode('show_description', 'ShowDescription', 'boolean', $this);
                case 'Collapsable':
                    return new QQNode('collapsable', 'Collapsable', 'boolean', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'ParentContentBlockId':
                    return new QQNode('parent_content_block_id', 'ParentContentBlockId', 'integer', $this);
                case 'LocationId':
                    return new QQNode('location_id', 'LocationId', 'integer', $this);
                case 'Page':
                    return new QQNodeContentBlockPage($this);
                case 'ContentItem':
                    return new QQNodeContentBlockContentItem($this);
                case 'Menu':
                    return new QQNodeContentBlockMenu($this);
                case 'Module':
                    return new QQReverseReferenceNodeModule($this, 'module', 'reverse_reference', 'content_block_id');

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