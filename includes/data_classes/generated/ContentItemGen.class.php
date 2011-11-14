<?php
    /**
     * The abstract ContentItemGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the ContentItem subclass which
     * extends this ContentItemGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ContentItem class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Name the value for strName (Unique)
     * @property string $Cssclass the value for strCssclass 
     * @property string $Title the value for strTitle 
     * @property string $Description the value for strDescription 
     * @property string $Text the value for strText 
     * @property integer $SortOrder the value for intSortOrder 
     * @property boolean $ShowTitle the value for blnShowTitle (Not Null)
     * @property boolean $ShowDescription the value for blnShowDescription (Not Null)
     * @property boolean $ShowCreator the value for blnShowCreator (Not Null)
     * @property boolean $ShowCreationDate the value for blnShowCreationDate (Not Null)
     * @property boolean $ShowLastModification the value for blnShowLastModification (Not Null)
     * @property integer $CreatorId the value for intCreatorId 
     * @property string $CopyrightNotice the value for strCopyrightNotice 
     * @property-read string $CreationDate the value for strCreationDate (Read-Only Timestamp)
     * @property-read string $LastModification the value for strLastModification (Read-Only Timestamp)
     * @property integer $TypeId the value for intTypeId (Not Null)
     * @property integer $StatusId the value for intStatusId (Not Null)
     * @property Person $Creator the value for the Person object referenced by intCreatorId 
     * @property-read ContentBlock $_ContentBlock the value for the private _objContentBlock (Read-Only) if set due to an expansion on the content_item_content_block_assn association table
     * @property-read ContentBlock[] $_ContentBlockArray the value for the private _objContentBlockArray (Read-Only) if set due to an ExpandAsArray on the content_item_content_block_assn association table
     * @property-read ContentCategory $_ContentCategory the value for the private _objContentCategory (Read-Only) if set due to an expansion on the content_item_content_category_assn association table
     * @property-read ContentCategory[] $_ContentCategoryArray the value for the private _objContentCategoryArray (Read-Only) if set due to an ExpandAsArray on the content_item_content_category_assn association table
     * @property-read Usergroup $_Usergroup the value for the private _objUsergroup (Read-Only) if set due to an expansion on the content_item_usergroup_assn association table
     * @property-read Usergroup[] $_UsergroupArray the value for the private _objUsergroupArray (Read-Only) if set due to an ExpandAsArray on the content_item_usergroup_assn association table
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class ContentItemGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column content_item.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column content_item.name
         * @var string strName
         *
         */
        protected $strName = null;
        const NameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column content_item.cssclass
         * @var string strCssclass
         *
         */
        protected $strCssclass = null;
        const CssclassMaxLength = 128;


        /**
         * Protected member variable that maps to the database column content_item.title
         * @var string strTitle
         *
         */
        protected $strTitle = null;
        const TitleMaxLength = 128;


        /**
         * Protected member variable that maps to the database column content_item.description
         * @var string strDescription
         *
         */
        protected $strDescription = null;
        const DescriptionMaxLength = 256;


        /**
         * Protected member variable that maps to the database column content_item.text
         * @var string strText
         *
         */
        protected $strText = null;


        /**
         * Protected member variable that maps to the database column content_item.sort_order
         * @var integer intSortOrder
         *
         */
        protected $intSortOrder = null;


        /**
         * Protected member variable that maps to the database column content_item.show_title
         * @var boolean blnShowTitle
         *
         */
        protected $blnShowTitle = null;


        /**
         * Protected member variable that maps to the database column content_item.show_description
         * @var boolean blnShowDescription
         *
         */
        protected $blnShowDescription = null;


        /**
         * Protected member variable that maps to the database column content_item.show_creator
         * @var boolean blnShowCreator
         *
         */
        protected $blnShowCreator = null;


        /**
         * Protected member variable that maps to the database column content_item.show_creation_date
         * @var boolean blnShowCreationDate
         *
         */
        protected $blnShowCreationDate = null;


        /**
         * Protected member variable that maps to the database column content_item.show_last_modification
         * @var boolean blnShowLastModification
         *
         */
        protected $blnShowLastModification = null;


        /**
         * Protected member variable that maps to the database column content_item.creator_id
         * @var integer intCreatorId
         *
         */
        protected $intCreatorId = null;


        /**
         * Protected member variable that maps to the database column content_item.copyright_notice
         * @var string strCopyrightNotice
         *
         */
        protected $strCopyrightNotice = null;
        const CopyrightNoticeMaxLength = 256;


        /**
         * Protected member variable that maps to the database column content_item.creation_date
         * @var string strCreationDate
         *
         */
        protected $strCreationDate = null;


        /**
         * Protected member variable that maps to the database column content_item.last_modification
         * @var string strLastModification
         *
         */
        protected $strLastModification = null;


        /**
         * Protected member variable that maps to the database column content_item.type_id
         * @var integer intTypeId
         *
         */
        protected $intTypeId = null;


        /**
         * Protected member variable that maps to the database column content_item.status_id
         * @var integer intStatusId
         *
         */
        protected $intStatusId = null;


        /**
         * Private member variable that stores a reference to a single ContentBlock object
         * (of type ContentBlock), if this ContentItem object was restored with
         * an expansion on the content_item_content_block_assn association table.
         * @var ContentBlock _objContentBlock;
         */
        private $_objContentBlock;

        /**
         * Private member variable that stores a reference to an array of ContentBlock objects
         * (of type ContentBlock[]), if this ContentItem object was restored with
         * an ExpandAsArray on the content_item_content_block_assn association table.
         * @var ContentBlock[] _objContentBlockArray;
         */
        private $_objContentBlockArray = array();

        /**
         * Private member variable that stores a reference to a single ContentCategory object
         * (of type ContentCategory), if this ContentItem object was restored with
         * an expansion on the content_item_content_category_assn association table.
         * @var ContentCategory _objContentCategory;
         */
        private $_objContentCategory;

        /**
         * Private member variable that stores a reference to an array of ContentCategory objects
         * (of type ContentCategory[]), if this ContentItem object was restored with
         * an ExpandAsArray on the content_item_content_category_assn association table.
         * @var ContentCategory[] _objContentCategoryArray;
         */
        private $_objContentCategoryArray = array();

        /**
         * Private member variable that stores a reference to a single Usergroup object
         * (of type Usergroup), if this ContentItem object was restored with
         * an expansion on the content_item_usergroup_assn association table.
         * @var Usergroup _objUsergroup;
         */
        private $_objUsergroup;

        /**
         * Private member variable that stores a reference to an array of Usergroup objects
         * (of type Usergroup[]), if this ContentItem object was restored with
         * an ExpandAsArray on the content_item_usergroup_assn association table.
         * @var Usergroup[] _objUsergroupArray;
         */
        private $_objUsergroupArray = array();

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
         * in the database column content_item.creator_id.
         *
         * NOTE: Always use the Creator property getter to correctly retrieve this Person object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Person objCreator
         */
        protected $objCreator;



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
         * Load a ContentItem from PK Info
         * @param integer $intId
         * @return ContentItem
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return ContentItem::QuerySingle(
                QQ::Equal(QQN::ContentItem()->Id, $intId)
            );
        }

        /**
         * Load all ContentItems
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentItem[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call ContentItem::QueryArray to perform the LoadAll query
            try {
                return ContentItem::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all ContentItems
         * @return int
         */
        public static function CountAll() {
            // Call ContentItem::QueryCount to perform the CountAll query
            return ContentItem::QueryCount(QQ::All());
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
            $objDatabase = ContentItem::GetDatabase();

            // Create/Build out the QueryBuilder object with ContentItem-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'content_item');
            ContentItem::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('content_item');

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
         * Static Qcodo Query method to query for a single ContentItem object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ContentItem the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ContentItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new ContentItem object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ContentItem::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of ContentItem objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ContentItem[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ContentItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ContentItem::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of ContentItem objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ContentItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = ContentItem::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'content_item_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ContentItem-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                ContentItem::GetSelectFields($objQueryBuilder);
                ContentItem::GetFromFields($objQueryBuilder);

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
            return ContentItem::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this ContentItem
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'content_item';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            $objBuilder->AddSelectItem($strTableName, 'cssclass', $strAliasPrefix . 'cssclass');
            $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
            $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
            $objBuilder->AddSelectItem($strTableName, 'text', $strAliasPrefix . 'text');
            $objBuilder->AddSelectItem($strTableName, 'sort_order', $strAliasPrefix . 'sort_order');
            $objBuilder->AddSelectItem($strTableName, 'show_title', $strAliasPrefix . 'show_title');
            $objBuilder->AddSelectItem($strTableName, 'show_description', $strAliasPrefix . 'show_description');
            $objBuilder->AddSelectItem($strTableName, 'show_creator', $strAliasPrefix . 'show_creator');
            $objBuilder->AddSelectItem($strTableName, 'show_creation_date', $strAliasPrefix . 'show_creation_date');
            $objBuilder->AddSelectItem($strTableName, 'show_last_modification', $strAliasPrefix . 'show_last_modification');
            $objBuilder->AddSelectItem($strTableName, 'creator_id', $strAliasPrefix . 'creator_id');
            $objBuilder->AddSelectItem($strTableName, 'copyright_notice', $strAliasPrefix . 'copyright_notice');
            $objBuilder->AddSelectItem($strTableName, 'creation_date', $strAliasPrefix . 'creation_date');
            $objBuilder->AddSelectItem($strTableName, 'last_modification', $strAliasPrefix . 'last_modification');
            $objBuilder->AddSelectItem($strTableName, 'type_id', $strAliasPrefix . 'type_id');
            $objBuilder->AddSelectItem($strTableName, 'status_id', $strAliasPrefix . 'status_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a ContentItem from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this ContentItem::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return ContentItem
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
                    $strAliasPrefix = 'content_item__';

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


                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'content_item__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the ContentItem object
            $objToReturn = new ContentItem();
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
            $strAliasName = array_key_exists($strAliasPrefix . 'text', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'text'] : $strAliasPrefix . 'text';
            $objToReturn->strText = $objDbRow->GetColumn($strAliasName, 'Blob');
            $strAliasName = array_key_exists($strAliasPrefix . 'sort_order', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'sort_order'] : $strAliasPrefix . 'sort_order';
            $objToReturn->intSortOrder = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'show_title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'show_title'] : $strAliasPrefix . 'show_title';
            $objToReturn->blnShowTitle = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'show_description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'show_description'] : $strAliasPrefix . 'show_description';
            $objToReturn->blnShowDescription = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'show_creator', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'show_creator'] : $strAliasPrefix . 'show_creator';
            $objToReturn->blnShowCreator = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'show_creation_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'show_creation_date'] : $strAliasPrefix . 'show_creation_date';
            $objToReturn->blnShowCreationDate = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'show_last_modification', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'show_last_modification'] : $strAliasPrefix . 'show_last_modification';
            $objToReturn->blnShowLastModification = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'creator_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'creator_id'] : $strAliasPrefix . 'creator_id';
            $objToReturn->intCreatorId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'copyright_notice', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'copyright_notice'] : $strAliasPrefix . 'copyright_notice';
            $objToReturn->strCopyrightNotice = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'creation_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'creation_date'] : $strAliasPrefix . 'creation_date';
            $objToReturn->strCreationDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'last_modification', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'last_modification'] : $strAliasPrefix . 'last_modification';
            $objToReturn->strLastModification = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'type_id'] : $strAliasPrefix . 'type_id';
            $objToReturn->intTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
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
                $strAliasPrefix = 'content_item__';

            // Check for Creator Early Binding
            $strAlias = $strAliasPrefix . 'creator_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objCreator = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'creator_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



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

            // Check for Usergroup Virtual Binding
            $strAlias = $strAliasPrefix . 'usergroup__usergroup_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objUsergroupArray[] = Usergroup::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usergroup__usergroup_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objUsergroup = Usergroup::InstantiateDbRow($objDbRow, $strAliasPrefix . 'usergroup__usergroup_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }


            return $objToReturn;
        }

        /**
         * Instantiate an array of ContentItems from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return ContentItem[]
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
                    $objItem = ContentItem::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = ContentItem::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single ContentItem object,
         * by Id Index(es)
         * @param integer $intId
         * @return ContentItem
        */
        public static function LoadById($intId) {
            return ContentItem::QuerySingle(
                QQ::Equal(QQN::ContentItem()->Id, $intId)
            );
        }
            
        /**
         * Load a single ContentItem object,
         * by Name Index(es)
         * @param string $strName
         * @return ContentItem
        */
        public static function LoadByName($strName) {
            return ContentItem::QuerySingle(
                QQ::Equal(QQN::ContentItem()->Name, $strName)
            );
        }
            
        /**
         * Load an array of ContentItem objects,
         * by Title Index(es)
         * @param string $strTitle
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentItem[]
        */
        public static function LoadArrayByTitle($strTitle, $objOptionalClauses = null) {
            // Call ContentItem::QueryArray to perform the LoadArrayByTitle query
            try {
                return ContentItem::QueryArray(
                    QQ::Equal(QQN::ContentItem()->Title, $strTitle),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentItems
         * by Title Index(es)
         * @param string $strTitle
         * @return int
        */
        public static function CountByTitle($strTitle) {
            // Call ContentItem::QueryCount to perform the CountByTitle query
            return ContentItem::QueryCount(
                QQ::Equal(QQN::ContentItem()->Title, $strTitle)
            );
        }
            
        /**
         * Load an array of ContentItem objects,
         * by CreatorId Index(es)
         * @param integer $intCreatorId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentItem[]
        */
        public static function LoadArrayByCreatorId($intCreatorId, $objOptionalClauses = null) {
            // Call ContentItem::QueryArray to perform the LoadArrayByCreatorId query
            try {
                return ContentItem::QueryArray(
                    QQ::Equal(QQN::ContentItem()->CreatorId, $intCreatorId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentItems
         * by CreatorId Index(es)
         * @param integer $intCreatorId
         * @return int
        */
        public static function CountByCreatorId($intCreatorId) {
            // Call ContentItem::QueryCount to perform the CountByCreatorId query
            return ContentItem::QueryCount(
                QQ::Equal(QQN::ContentItem()->CreatorId, $intCreatorId)
            );
        }
            
        /**
         * Load an array of ContentItem objects,
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentItem[]
        */
        public static function LoadArrayByTypeId($intTypeId, $objOptionalClauses = null) {
            // Call ContentItem::QueryArray to perform the LoadArrayByTypeId query
            try {
                return ContentItem::QueryArray(
                    QQ::Equal(QQN::ContentItem()->TypeId, $intTypeId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentItems
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @return int
        */
        public static function CountByTypeId($intTypeId) {
            // Call ContentItem::QueryCount to perform the CountByTypeId query
            return ContentItem::QueryCount(
                QQ::Equal(QQN::ContentItem()->TypeId, $intTypeId)
            );
        }
            
        /**
         * Load an array of ContentItem objects,
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentItem[]
        */
        public static function LoadArrayByStatusId($intStatusId, $objOptionalClauses = null) {
            // Call ContentItem::QueryArray to perform the LoadArrayByStatusId query
            try {
                return ContentItem::QueryArray(
                    QQ::Equal(QQN::ContentItem()->StatusId, $intStatusId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentItems
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @return int
        */
        public static function CountByStatusId($intStatusId) {
            // Call ContentItem::QueryCount to perform the CountByStatusId query
            return ContentItem::QueryCount(
                QQ::Equal(QQN::ContentItem()->StatusId, $intStatusId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////
            /**
         * Load an array of ContentBlock objects for a given ContentBlock
         * via the content_item_content_block_assn table
         * @param integer $intContentBlockId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentItem[]
        */
        public static function LoadArrayByContentBlock($intContentBlockId, $objOptionalClauses = null) {
            // Call ContentItem::QueryArray to perform the LoadArrayByContentBlock query
            try {
                return ContentItem::QueryArray(
                    QQ::Equal(QQN::ContentItem()->ContentBlock->ContentBlockId, $intContentBlockId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentItems for a given ContentBlock
         * via the content_item_content_block_assn table
         * @param integer $intContentBlockId
         * @return int
        */
        public static function CountByContentBlock($intContentBlockId) {
            return ContentItem::QueryCount(
                QQ::Equal(QQN::ContentItem()->ContentBlock->ContentBlockId, $intContentBlockId)
            );
        }
            /**
         * Load an array of ContentCategory objects for a given ContentCategory
         * via the content_item_content_category_assn table
         * @param integer $intContentCategoryId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentItem[]
        */
        public static function LoadArrayByContentCategory($intContentCategoryId, $objOptionalClauses = null) {
            // Call ContentItem::QueryArray to perform the LoadArrayByContentCategory query
            try {
                return ContentItem::QueryArray(
                    QQ::Equal(QQN::ContentItem()->ContentCategory->ContentCategoryId, $intContentCategoryId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentItems for a given ContentCategory
         * via the content_item_content_category_assn table
         * @param integer $intContentCategoryId
         * @return int
        */
        public static function CountByContentCategory($intContentCategoryId) {
            return ContentItem::QueryCount(
                QQ::Equal(QQN::ContentItem()->ContentCategory->ContentCategoryId, $intContentCategoryId)
            );
        }
            /**
         * Load an array of Usergroup objects for a given Usergroup
         * via the content_item_usergroup_assn table
         * @param integer $intUsergroupId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ContentItem[]
        */
        public static function LoadArrayByUsergroup($intUsergroupId, $objOptionalClauses = null) {
            // Call ContentItem::QueryArray to perform the LoadArrayByUsergroup query
            try {
                return ContentItem::QueryArray(
                    QQ::Equal(QQN::ContentItem()->Usergroup->UsergroupId, $intUsergroupId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ContentItems for a given Usergroup
         * via the content_item_usergroup_assn table
         * @param integer $intUsergroupId
         * @return int
        */
        public static function CountByUsergroup($intUsergroupId) {
            return ContentItem::QueryCount(
                QQ::Equal(QQN::ContentItem()->Usergroup->UsergroupId, $intUsergroupId)
            );
        }


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this ContentItem
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `content_item` (
                            `name`,
                            `cssclass`,
                            `title`,
                            `description`,
                            `text`,
                            `sort_order`,
                            `show_title`,
                            `show_description`,
                            `show_creator`,
                            `show_creation_date`,
                            `show_last_modification`,
                            `creator_id`,
                            `copyright_notice`,
                            `type_id`,
                            `status_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strName) . ',
                            ' . $objDatabase->SqlVariable($this->strCssclass) . ',
                            ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            ' . $objDatabase->SqlVariable($this->strText) . ',
                            ' . $objDatabase->SqlVariable($this->intSortOrder) . ',
                            ' . $objDatabase->SqlVariable($this->blnShowTitle) . ',
                            ' . $objDatabase->SqlVariable($this->blnShowDescription) . ',
                            ' . $objDatabase->SqlVariable($this->blnShowCreator) . ',
                            ' . $objDatabase->SqlVariable($this->blnShowCreationDate) . ',
                            ' . $objDatabase->SqlVariable($this->blnShowLastModification) . ',
                            ' . $objDatabase->SqlVariable($this->intCreatorId) . ',
                            ' . $objDatabase->SqlVariable($this->strCopyrightNotice) . ',
                            ' . $objDatabase->SqlVariable($this->intTypeId) . ',
                            ' . $objDatabase->SqlVariable($this->intStatusId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('content_item', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `creation_date`
                            FROM
                                `content_item`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strCreationDate)
                            throw new QOptimisticLockingException('ContentItem');
                    }
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `last_modification`
                            FROM
                                `content_item`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strLastModification)
                            throw new QOptimisticLockingException('ContentItem');
                    }

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `content_item`
                        SET
                            `name` = ' . $objDatabase->SqlVariable($this->strName) . ',
                            `cssclass` = ' . $objDatabase->SqlVariable($this->strCssclass) . ',
                            `title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            `description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            `text` = ' . $objDatabase->SqlVariable($this->strText) . ',
                            `sort_order` = ' . $objDatabase->SqlVariable($this->intSortOrder) . ',
                            `show_title` = ' . $objDatabase->SqlVariable($this->blnShowTitle) . ',
                            `show_description` = ' . $objDatabase->SqlVariable($this->blnShowDescription) . ',
                            `show_creator` = ' . $objDatabase->SqlVariable($this->blnShowCreator) . ',
                            `show_creation_date` = ' . $objDatabase->SqlVariable($this->blnShowCreationDate) . ',
                            `show_last_modification` = ' . $objDatabase->SqlVariable($this->blnShowLastModification) . ',
                            `creator_id` = ' . $objDatabase->SqlVariable($this->intCreatorId) . ',
                            `copyright_notice` = ' . $objDatabase->SqlVariable($this->strCopyrightNotice) . ',
                            `type_id` = ' . $objDatabase->SqlVariable($this->intTypeId) . ',
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
                    `content_item`
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
                    `content_item`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
                        
            $objRow = $objResult->FetchArray();
            $this->strLastModification = $objRow[0];

            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this ContentItem
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this ContentItem with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all ContentItems
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item`');
        }

        /**
         * Truncate content_item table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `content_item`');
        }

        /**
         * Reload this ContentItem from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved ContentItem object.');

            // Reload the Object
            $objReloaded = ContentItem::Load($this->intId);

            // Update $this's local variables to match
            $this->strName = $objReloaded->strName;
            $this->strCssclass = $objReloaded->strCssclass;
            $this->strTitle = $objReloaded->strTitle;
            $this->strDescription = $objReloaded->strDescription;
            $this->strText = $objReloaded->strText;
            $this->intSortOrder = $objReloaded->intSortOrder;
            $this->blnShowTitle = $objReloaded->blnShowTitle;
            $this->blnShowDescription = $objReloaded->blnShowDescription;
            $this->blnShowCreator = $objReloaded->blnShowCreator;
            $this->blnShowCreationDate = $objReloaded->blnShowCreationDate;
            $this->blnShowLastModification = $objReloaded->blnShowLastModification;
            $this->CreatorId = $objReloaded->CreatorId;
            $this->strCopyrightNotice = $objReloaded->strCopyrightNotice;
            $this->strCreationDate = $objReloaded->strCreationDate;
            $this->strLastModification = $objReloaded->strLastModification;
            $this->TypeId = $objReloaded->TypeId;
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

                case 'Text':
                    /**
                     * Gets the value for strText 
                     * @return string
                     */
                    return $this->strText;

                case 'SortOrder':
                    /**
                     * Gets the value for intSortOrder 
                     * @return integer
                     */
                    return $this->intSortOrder;

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

                case 'ShowCreator':
                    /**
                     * Gets the value for blnShowCreator (Not Null)
                     * @return boolean
                     */
                    return $this->blnShowCreator;

                case 'ShowCreationDate':
                    /**
                     * Gets the value for blnShowCreationDate (Not Null)
                     * @return boolean
                     */
                    return $this->blnShowCreationDate;

                case 'ShowLastModification':
                    /**
                     * Gets the value for blnShowLastModification (Not Null)
                     * @return boolean
                     */
                    return $this->blnShowLastModification;

                case 'CreatorId':
                    /**
                     * Gets the value for intCreatorId 
                     * @return integer
                     */
                    return $this->intCreatorId;

                case 'CopyrightNotice':
                    /**
                     * Gets the value for strCopyrightNotice 
                     * @return string
                     */
                    return $this->strCopyrightNotice;

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


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Creator':
                    /**
                     * Gets the value for the Person object referenced by intCreatorId 
                     * @return Person
                     */
                    try {
                        if ((!$this->objCreator) && (!is_null($this->intCreatorId)))
                            $this->objCreator = Person::Load($this->intCreatorId);
                        return $this->objCreator;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_ContentBlock':
                    /**
                     * Gets the value for the private _objContentBlock (Read-Only)
                     * if set due to an expansion on the content_item_content_block_assn association table
                     * @return ContentBlock
                     */
                    return $this->_objContentBlock;

                case '_ContentBlockArray':
                    /**
                     * Gets the value for the private _objContentBlockArray (Read-Only)
                     * if set due to an ExpandAsArray on the content_item_content_block_assn association table
                     * @return ContentBlock[]
                     */
                    return (array) $this->_objContentBlockArray;

                case '_ContentCategory':
                    /**
                     * Gets the value for the private _objContentCategory (Read-Only)
                     * if set due to an expansion on the content_item_content_category_assn association table
                     * @return ContentCategory
                     */
                    return $this->_objContentCategory;

                case '_ContentCategoryArray':
                    /**
                     * Gets the value for the private _objContentCategoryArray (Read-Only)
                     * if set due to an ExpandAsArray on the content_item_content_category_assn association table
                     * @return ContentCategory[]
                     */
                    return (array) $this->_objContentCategoryArray;

                case '_Usergroup':
                    /**
                     * Gets the value for the private _objUsergroup (Read-Only)
                     * if set due to an expansion on the content_item_usergroup_assn association table
                     * @return Usergroup
                     */
                    return $this->_objUsergroup;

                case '_UsergroupArray':
                    /**
                     * Gets the value for the private _objUsergroupArray (Read-Only)
                     * if set due to an ExpandAsArray on the content_item_usergroup_assn association table
                     * @return Usergroup[]
                     */
                    return (array) $this->_objUsergroupArray;


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

                case 'Text':
                    /**
                     * Sets the value for strText 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strText = QType::Cast($mixValue, QType::String));
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

                case 'ShowCreator':
                    /**
                     * Sets the value for blnShowCreator (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnShowCreator = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ShowCreationDate':
                    /**
                     * Sets the value for blnShowCreationDate (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnShowCreationDate = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ShowLastModification':
                    /**
                     * Sets the value for blnShowLastModification (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnShowLastModification = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'CreatorId':
                    /**
                     * Sets the value for intCreatorId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objCreator = null;
                        return ($this->intCreatorId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'CopyrightNotice':
                    /**
                     * Sets the value for strCopyrightNotice 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strCopyrightNotice = QType::Cast($mixValue, QType::String));
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


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Creator':
                    /**
                     * Sets the value for the Person object referenced by intCreatorId 
                     * @param Person $mixValue
                     * @return Person
                     */
                    if (is_null($mixValue)) {
                        $this->intCreatorId = null;
                        $this->objCreator = null;
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
                            throw new QCallerException('Unable to set an unsaved Creator for this ContentItem');

                        // Update Local Member Variables
                        $this->objCreator = $mixValue;
                        $this->intCreatorId = $mixValue->Id;

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
                return ContentBlock::LoadArrayByContentItem($this->intId, $objOptionalClauses);
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

            return ContentBlock::CountByContentItem($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific ContentBlock
         * @param ContentBlock $objContentBlock
         * @return bool
        */
        public function IsContentBlockAssociated(ContentBlock $objContentBlock) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentBlockAssociated on this unsaved ContentItem.');
            if ((is_null($objContentBlock->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentBlockAssociated on this ContentItem with an unsaved ContentBlock.');

            $intRowCount = ContentItem::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::ContentItem()->Id, $this->intId),
                    QQ::Equal(QQN::ContentItem()->ContentBlock->ContentBlockId, $objContentBlock->Id)
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
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentBlock on this unsaved ContentItem.');
            if ((is_null($objContentBlock->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentBlock on this ContentItem with an unsaved ContentBlock.');

            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `content_item_content_block_assn` (
                    `content_item_id`,
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentBlock on this unsaved ContentItem.');
            if ((is_null($objContentBlock->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentBlock on this ContentItem with an unsaved ContentBlock.');

            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item_content_block_assn`
                WHERE
                    `content_item_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `content_block_id` = ' . $objDatabase->SqlVariable($objContentBlock->Id) . '
            ');
        }

        /**
         * Unassociates all ContentBlocks
         * @return void
        */ 
        public function UnassociateAllContentBlocks() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllContentBlockArray on this unsaved ContentItem.');

            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item_content_block_assn`
                WHERE
                    `content_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
                return ContentCategory::LoadArrayByContentItem($this->intId, $objOptionalClauses);
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

            return ContentCategory::CountByContentItem($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific ContentCategory
         * @param ContentCategory $objContentCategory
         * @return bool
        */
        public function IsContentCategoryAssociated(ContentCategory $objContentCategory) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentCategoryAssociated on this unsaved ContentItem.');
            if ((is_null($objContentCategory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentCategoryAssociated on this ContentItem with an unsaved ContentCategory.');

            $intRowCount = ContentItem::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::ContentItem()->Id, $this->intId),
                    QQ::Equal(QQN::ContentItem()->ContentCategory->ContentCategoryId, $objContentCategory->Id)
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
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentCategory on this unsaved ContentItem.');
            if ((is_null($objContentCategory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentCategory on this ContentItem with an unsaved ContentCategory.');

            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `content_item_content_category_assn` (
                    `content_item_id`,
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentCategory on this unsaved ContentItem.');
            if ((is_null($objContentCategory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentCategory on this ContentItem with an unsaved ContentCategory.');

            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item_content_category_assn`
                WHERE
                    `content_item_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `content_category_id` = ' . $objDatabase->SqlVariable($objContentCategory->Id) . '
            ');
        }

        /**
         * Unassociates all ContentCategories
         * @return void
        */ 
        public function UnassociateAllContentCategories() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllContentCategoryArray on this unsaved ContentItem.');

            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item_content_category_assn`
                WHERE
                    `content_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
                return Usergroup::LoadArrayByContentItem($this->intId, $objOptionalClauses);
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

            return Usergroup::CountByContentItem($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific Usergroup
         * @param Usergroup $objUsergroup
         * @return bool
        */
        public function IsUsergroupAssociated(Usergroup $objUsergroup) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsUsergroupAssociated on this unsaved ContentItem.');
            if ((is_null($objUsergroup->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsUsergroupAssociated on this ContentItem with an unsaved Usergroup.');

            $intRowCount = ContentItem::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::ContentItem()->Id, $this->intId),
                    QQ::Equal(QQN::ContentItem()->Usergroup->UsergroupId, $objUsergroup->Id)
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
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsergroup on this unsaved ContentItem.');
            if ((is_null($objUsergroup->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateUsergroup on this ContentItem with an unsaved Usergroup.');

            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `content_item_usergroup_assn` (
                    `content_item_id`,
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsergroup on this unsaved ContentItem.');
            if ((is_null($objUsergroup->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateUsergroup on this ContentItem with an unsaved Usergroup.');

            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item_usergroup_assn`
                WHERE
                    `content_item_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `usergroup_id` = ' . $objDatabase->SqlVariable($objUsergroup->Id) . '
            ');
        }

        /**
         * Unassociates all Usergroups
         * @return void
        */ 
        public function UnassociateAllUsergroups() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllUsergroupArray on this unsaved ContentItem.');

            // Get the Database Object for this Class
            $objDatabase = ContentItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `content_item_usergroup_assn`
                WHERE
                    `content_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }



    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeContentItemContentBlock extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'contentblock';

        protected $strTableName = 'content_item_content_block_assn';
        protected $strPrimaryKey = 'content_item_id';
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

    class QQNodeContentItemContentCategory extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'contentcategory';

        protected $strTableName = 'content_item_content_category_assn';
        protected $strPrimaryKey = 'content_item_id';
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

    class QQNodeContentItemUsergroup extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'usergroup';

        protected $strTableName = 'content_item_usergroup_assn';
        protected $strPrimaryKey = 'content_item_id';
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

    class QQNodeContentItem extends QQNode {
        protected $strTableName = 'content_item';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ContentItem';
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
                case 'Text':
                    return new QQNode('text', 'Text', 'string', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'ShowTitle':
                    return new QQNode('show_title', 'ShowTitle', 'boolean', $this);
                case 'ShowDescription':
                    return new QQNode('show_description', 'ShowDescription', 'boolean', $this);
                case 'ShowCreator':
                    return new QQNode('show_creator', 'ShowCreator', 'boolean', $this);
                case 'ShowCreationDate':
                    return new QQNode('show_creation_date', 'ShowCreationDate', 'boolean', $this);
                case 'ShowLastModification':
                    return new QQNode('show_last_modification', 'ShowLastModification', 'boolean', $this);
                case 'CreatorId':
                    return new QQNode('creator_id', 'CreatorId', 'integer', $this);
                case 'Creator':
                    return new QQNodePerson('creator_id', 'Creator', 'integer', $this);
                case 'CopyrightNotice':
                    return new QQNode('copyright_notice', 'CopyrightNotice', 'string', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'LastModification':
                    return new QQNode('last_modification', 'LastModification', 'string', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'ContentBlock':
                    return new QQNodeContentItemContentBlock($this);
                case 'ContentCategory':
                    return new QQNodeContentItemContentCategory($this);
                case 'Usergroup':
                    return new QQNodeContentItemUsergroup($this);

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

    class QQReverseReferenceNodeContentItem extends QQReverseReferenceNode {
        protected $strTableName = 'content_item';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ContentItem';
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
                case 'Text':
                    return new QQNode('text', 'Text', 'string', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'ShowTitle':
                    return new QQNode('show_title', 'ShowTitle', 'boolean', $this);
                case 'ShowDescription':
                    return new QQNode('show_description', 'ShowDescription', 'boolean', $this);
                case 'ShowCreator':
                    return new QQNode('show_creator', 'ShowCreator', 'boolean', $this);
                case 'ShowCreationDate':
                    return new QQNode('show_creation_date', 'ShowCreationDate', 'boolean', $this);
                case 'ShowLastModification':
                    return new QQNode('show_last_modification', 'ShowLastModification', 'boolean', $this);
                case 'CreatorId':
                    return new QQNode('creator_id', 'CreatorId', 'integer', $this);
                case 'Creator':
                    return new QQNodePerson('creator_id', 'Creator', 'integer', $this);
                case 'CopyrightNotice':
                    return new QQNode('copyright_notice', 'CopyrightNotice', 'string', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'LastModification':
                    return new QQNode('last_modification', 'LastModification', 'string', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'ContentBlock':
                    return new QQNodeContentItemContentBlock($this);
                case 'ContentCategory':
                    return new QQNodeContentItemContentCategory($this);
                case 'Usergroup':
                    return new QQNodeContentItemUsergroup($this);

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