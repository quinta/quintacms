<?php
    /**
     * The abstract MenuGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the Menu subclass which
     * extends this MenuGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the Menu class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Name the value for strName (Unique)
     * @property string $Title the value for strTitle 
     * @property string $CssClass the value for strCssClass 
     * @property integer $SortOrder the value for intSortOrder 
     * @property boolean $ShowTitle the value for blnShowTitle 
     * @property integer $ParentMenuItemId the value for intParentMenuItemId 
     * @property integer $StatusId the value for intStatusId (Not Null)
     * @property integer $TypeId the value for intTypeId (Not Null)
     * @property MenuItem $ParentMenuItem the value for the MenuItem object referenced by intParentMenuItemId 
     * @property-read ContentBlock $_ContentBlock the value for the private _objContentBlock (Read-Only) if set due to an expansion on the menu_content_block_assn association table
     * @property-read ContentBlock[] $_ContentBlockArray the value for the private _objContentBlockArray (Read-Only) if set due to an ExpandAsArray on the menu_content_block_assn association table
     * @property-read MenuItem $_MenuItem the value for the private _objMenuItem (Read-Only) if set due to an expansion on the menu_item_menu_assn association table
     * @property-read MenuItem[] $_MenuItemArray the value for the private _objMenuItemArray (Read-Only) if set due to an ExpandAsArray on the menu_item_menu_assn association table
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class MenuGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column menu.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column menu.name
         * @var string strName
         *
         */
        protected $strName = null;
        const NameMaxLength = 64;


        /**
         * Protected member variable that maps to the database column menu.title
         * @var string strTitle
         *
         */
        protected $strTitle = null;
        const TitleMaxLength = 32;


        /**
         * Protected member variable that maps to the database column menu.css_class
         * @var string strCssClass
         *
         */
        protected $strCssClass = null;
        const CssClassMaxLength = 32;


        /**
         * Protected member variable that maps to the database column menu.sort_order
         * @var integer intSortOrder
         *
         */
        protected $intSortOrder = null;


        /**
         * Protected member variable that maps to the database column menu.show_title
         * @var boolean blnShowTitle
         *
         */
        protected $blnShowTitle = null;


        /**
         * Protected member variable that maps to the database column menu.parent_menu_item_id
         * @var integer intParentMenuItemId
         *
         */
        protected $intParentMenuItemId = null;


        /**
         * Protected member variable that maps to the database column menu.status_id
         * @var integer intStatusId
         *
         */
        protected $intStatusId = null;


        /**
         * Protected member variable that maps to the database column menu.type_id
         * @var integer intTypeId
         *
         */
        protected $intTypeId = null;


        /**
         * Private member variable that stores a reference to a single ContentBlock object
         * (of type ContentBlock), if this Menu object was restored with
         * an expansion on the menu_content_block_assn association table.
         * @var ContentBlock _objContentBlock;
         */
        private $_objContentBlock;

        /**
         * Private member variable that stores a reference to an array of ContentBlock objects
         * (of type ContentBlock[]), if this Menu object was restored with
         * an ExpandAsArray on the menu_content_block_assn association table.
         * @var ContentBlock[] _objContentBlockArray;
         */
        private $_objContentBlockArray = array();

        /**
         * Private member variable that stores a reference to a single MenuItem object
         * (of type MenuItem), if this Menu object was restored with
         * an expansion on the menu_item_menu_assn association table.
         * @var MenuItem _objMenuItem;
         */
        private $_objMenuItem;

        /**
         * Private member variable that stores a reference to an array of MenuItem objects
         * (of type MenuItem[]), if this Menu object was restored with
         * an ExpandAsArray on the menu_item_menu_assn association table.
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

        /**
         * Protected member variable that contains the object pointed by the reference
         * in the database column menu.parent_menu_item_id.
         *
         * NOTE: Always use the ParentMenuItem property getter to correctly retrieve this MenuItem object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var MenuItem objParentMenuItem
         */
        protected $objParentMenuItem;



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
         * Load a Menu from PK Info
         * @param integer $intId
         * @return Menu
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return Menu::QuerySingle(
                QQ::Equal(QQN::Menu()->Id, $intId)
            );
        }

        /**
         * Load all Menus
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Menu[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call Menu::QueryArray to perform the LoadAll query
            try {
                return Menu::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all Menus
         * @return int
         */
        public static function CountAll() {
            // Call Menu::QueryCount to perform the CountAll query
            return Menu::QueryCount(QQ::All());
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
            $objDatabase = Menu::GetDatabase();

            // Create/Build out the QueryBuilder object with Menu-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'menu');
            Menu::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('menu');

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
         * Static Qcodo Query method to query for a single Menu object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Menu the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new Menu object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Menu::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of Menu objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Menu[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Menu::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of Menu objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = Menu::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'menu_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Menu-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                Menu::GetSelectFields($objQueryBuilder);
                Menu::GetFromFields($objQueryBuilder);

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
            return Menu::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this Menu
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'menu';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
            $objBuilder->AddSelectItem($strTableName, 'css_class', $strAliasPrefix . 'css_class');
            $objBuilder->AddSelectItem($strTableName, 'sort_order', $strAliasPrefix . 'sort_order');
            $objBuilder->AddSelectItem($strTableName, 'show_title', $strAliasPrefix . 'show_title');
            $objBuilder->AddSelectItem($strTableName, 'parent_menu_item_id', $strAliasPrefix . 'parent_menu_item_id');
            $objBuilder->AddSelectItem($strTableName, 'status_id', $strAliasPrefix . 'status_id');
            $objBuilder->AddSelectItem($strTableName, 'type_id', $strAliasPrefix . 'type_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a Menu from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this Menu::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return Menu
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
                    $strAliasPrefix = 'menu__';

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

                $strAlias = $strAliasPrefix . 'menuitem__menu_item_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objMenuItemArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objMenuItemArray[$intPreviousChildItemCount - 1];
                        $objChildItem = MenuItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuitem__menu_item_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objMenuItemArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objMenuItemArray[] = MenuItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuitem__menu_item_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }


                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'menu__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the Menu object
            $objToReturn = new Menu();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
            $objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'title'] : $strAliasPrefix . 'title';
            $objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'css_class', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'css_class'] : $strAliasPrefix . 'css_class';
            $objToReturn->strCssClass = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'sort_order', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'sort_order'] : $strAliasPrefix . 'sort_order';
            $objToReturn->intSortOrder = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'show_title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'show_title'] : $strAliasPrefix . 'show_title';
            $objToReturn->blnShowTitle = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'parent_menu_item_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'parent_menu_item_id'] : $strAliasPrefix . 'parent_menu_item_id';
            $objToReturn->intParentMenuItemId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'status_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'status_id'] : $strAliasPrefix . 'status_id';
            $objToReturn->intStatusId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'type_id'] : $strAliasPrefix . 'type_id';
            $objToReturn->intTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'menu__';

            // Check for ParentMenuItem Early Binding
            $strAlias = $strAliasPrefix . 'parent_menu_item_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objParentMenuItem = MenuItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parent_menu_item_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



            // Check for ContentBlock Virtual Binding
            $strAlias = $strAliasPrefix . 'contentblock__content_block_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objContentBlockArray[] = ContentBlock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentblock__content_block_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objContentBlock = ContentBlock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'contentblock__content_block_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for MenuItem Virtual Binding
            $strAlias = $strAliasPrefix . 'menuitem__menu_item_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objMenuItemArray[] = MenuItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuitem__menu_item_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objMenuItem = MenuItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuitem__menu_item_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }


            return $objToReturn;
        }

        /**
         * Instantiate an array of Menus from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return Menu[]
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
                    $objItem = Menu::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = Menu::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single Menu object,
         * by Id Index(es)
         * @param integer $intId
         * @return Menu
        */
        public static function LoadById($intId) {
            return Menu::QuerySingle(
                QQ::Equal(QQN::Menu()->Id, $intId)
            );
        }
            
        /**
         * Load a single Menu object,
         * by Name Index(es)
         * @param string $strName
         * @return Menu
        */
        public static function LoadByName($strName) {
            return Menu::QuerySingle(
                QQ::Equal(QQN::Menu()->Name, $strName)
            );
        }
            
        /**
         * Load an array of Menu objects,
         * by ParentMenuItemId Index(es)
         * @param integer $intParentMenuItemId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Menu[]
        */
        public static function LoadArrayByParentMenuItemId($intParentMenuItemId, $objOptionalClauses = null) {
            // Call Menu::QueryArray to perform the LoadArrayByParentMenuItemId query
            try {
                return Menu::QueryArray(
                    QQ::Equal(QQN::Menu()->ParentMenuItemId, $intParentMenuItemId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Menus
         * by ParentMenuItemId Index(es)
         * @param integer $intParentMenuItemId
         * @return int
        */
        public static function CountByParentMenuItemId($intParentMenuItemId) {
            // Call Menu::QueryCount to perform the CountByParentMenuItemId query
            return Menu::QueryCount(
                QQ::Equal(QQN::Menu()->ParentMenuItemId, $intParentMenuItemId)
            );
        }
            
        /**
         * Load an array of Menu objects,
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Menu[]
        */
        public static function LoadArrayByTypeId($intTypeId, $objOptionalClauses = null) {
            // Call Menu::QueryArray to perform the LoadArrayByTypeId query
            try {
                return Menu::QueryArray(
                    QQ::Equal(QQN::Menu()->TypeId, $intTypeId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Menus
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @return int
        */
        public static function CountByTypeId($intTypeId) {
            // Call Menu::QueryCount to perform the CountByTypeId query
            return Menu::QueryCount(
                QQ::Equal(QQN::Menu()->TypeId, $intTypeId)
            );
        }
            
        /**
         * Load an array of Menu objects,
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Menu[]
        */
        public static function LoadArrayByStatusId($intStatusId, $objOptionalClauses = null) {
            // Call Menu::QueryArray to perform the LoadArrayByStatusId query
            try {
                return Menu::QueryArray(
                    QQ::Equal(QQN::Menu()->StatusId, $intStatusId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Menus
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @return int
        */
        public static function CountByStatusId($intStatusId) {
            // Call Menu::QueryCount to perform the CountByStatusId query
            return Menu::QueryCount(
                QQ::Equal(QQN::Menu()->StatusId, $intStatusId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////
            /**
         * Load an array of ContentBlock objects for a given ContentBlock
         * via the menu_content_block_assn table
         * @param integer $intContentBlockId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Menu[]
        */
        public static function LoadArrayByContentBlock($intContentBlockId, $objOptionalClauses = null) {
            // Call Menu::QueryArray to perform the LoadArrayByContentBlock query
            try {
                return Menu::QueryArray(
                    QQ::Equal(QQN::Menu()->ContentBlock->ContentBlockId, $intContentBlockId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Menus for a given ContentBlock
         * via the menu_content_block_assn table
         * @param integer $intContentBlockId
         * @return int
        */
        public static function CountByContentBlock($intContentBlockId) {
            return Menu::QueryCount(
                QQ::Equal(QQN::Menu()->ContentBlock->ContentBlockId, $intContentBlockId)
            );
        }
            /**
         * Load an array of MenuItem objects for a given MenuItem
         * via the menu_item_menu_assn table
         * @param integer $intMenuItemId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Menu[]
        */
        public static function LoadArrayByMenuItem($intMenuItemId, $objOptionalClauses = null) {
            // Call Menu::QueryArray to perform the LoadArrayByMenuItem query
            try {
                return Menu::QueryArray(
                    QQ::Equal(QQN::Menu()->MenuItem->MenuItemId, $intMenuItemId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Menus for a given MenuItem
         * via the menu_item_menu_assn table
         * @param integer $intMenuItemId
         * @return int
        */
        public static function CountByMenuItem($intMenuItemId) {
            return Menu::QueryCount(
                QQ::Equal(QQN::Menu()->MenuItem->MenuItemId, $intMenuItemId)
            );
        }


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this Menu
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = Menu::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `menu` (
                            `name`,
                            `title`,
                            `css_class`,
                            `sort_order`,
                            `show_title`,
                            `parent_menu_item_id`,
                            `status_id`,
                            `type_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strName) . ',
                            ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            ' . $objDatabase->SqlVariable($this->strCssClass) . ',
                            ' . $objDatabase->SqlVariable($this->intSortOrder) . ',
                            ' . $objDatabase->SqlVariable($this->blnShowTitle) . ',
                            ' . $objDatabase->SqlVariable($this->intParentMenuItemId) . ',
                            ' . $objDatabase->SqlVariable($this->intStatusId) . ',
                            ' . $objDatabase->SqlVariable($this->intTypeId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('menu', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `menu`
                        SET
                            `name` = ' . $objDatabase->SqlVariable($this->strName) . ',
                            `title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            `css_class` = ' . $objDatabase->SqlVariable($this->strCssClass) . ',
                            `sort_order` = ' . $objDatabase->SqlVariable($this->intSortOrder) . ',
                            `show_title` = ' . $objDatabase->SqlVariable($this->blnShowTitle) . ',
                            `parent_menu_item_id` = ' . $objDatabase->SqlVariable($this->intParentMenuItemId) . ',
                            `status_id` = ' . $objDatabase->SqlVariable($this->intStatusId) . ',
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


            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this Menu
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this Menu with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = Menu::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all Menus
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = Menu::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu`');
        }

        /**
         * Truncate menu table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = Menu::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `menu`');
        }

        /**
         * Reload this Menu from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved Menu object.');

            // Reload the Object
            $objReloaded = Menu::Load($this->intId);

            // Update $this's local variables to match
            $this->strName = $objReloaded->strName;
            $this->strTitle = $objReloaded->strTitle;
            $this->strCssClass = $objReloaded->strCssClass;
            $this->intSortOrder = $objReloaded->intSortOrder;
            $this->blnShowTitle = $objReloaded->blnShowTitle;
            $this->ParentMenuItemId = $objReloaded->ParentMenuItemId;
            $this->StatusId = $objReloaded->StatusId;
            $this->TypeId = $objReloaded->TypeId;
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

                case 'CssClass':
                    /**
                     * Gets the value for strCssClass 
                     * @return string
                     */
                    return $this->strCssClass;

                case 'SortOrder':
                    /**
                     * Gets the value for intSortOrder 
                     * @return integer
                     */
                    return $this->intSortOrder;

                case 'ShowTitle':
                    /**
                     * Gets the value for blnShowTitle 
                     * @return boolean
                     */
                    return $this->blnShowTitle;

                case 'ParentMenuItemId':
                    /**
                     * Gets the value for intParentMenuItemId 
                     * @return integer
                     */
                    return $this->intParentMenuItemId;

                case 'StatusId':
                    /**
                     * Gets the value for intStatusId (Not Null)
                     * @return integer
                     */
                    return $this->intStatusId;

                case 'TypeId':
                    /**
                     * Gets the value for intTypeId (Not Null)
                     * @return integer
                     */
                    return $this->intTypeId;


                ///////////////////
                // Member Objects
                ///////////////////
                case 'ParentMenuItem':
                    /**
                     * Gets the value for the MenuItem object referenced by intParentMenuItemId 
                     * @return MenuItem
                     */
                    try {
                        if ((!$this->objParentMenuItem) && (!is_null($this->intParentMenuItemId)))
                            $this->objParentMenuItem = MenuItem::Load($this->intParentMenuItemId);
                        return $this->objParentMenuItem;
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
                     * if set due to an expansion on the menu_content_block_assn association table
                     * @return ContentBlock
                     */
                    return $this->_objContentBlock;

                case '_ContentBlockArray':
                    /**
                     * Gets the value for the private _objContentBlockArray (Read-Only)
                     * if set due to an ExpandAsArray on the menu_content_block_assn association table
                     * @return ContentBlock[]
                     */
                    return (array) $this->_objContentBlockArray;

                case '_MenuItem':
                    /**
                     * Gets the value for the private _objMenuItem (Read-Only)
                     * if set due to an expansion on the menu_item_menu_assn association table
                     * @return MenuItem
                     */
                    return $this->_objMenuItem;

                case '_MenuItemArray':
                    /**
                     * Gets the value for the private _objMenuItemArray (Read-Only)
                     * if set due to an ExpandAsArray on the menu_item_menu_assn association table
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

                case 'CssClass':
                    /**
                     * Sets the value for strCssClass 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strCssClass = QType::Cast($mixValue, QType::String));
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
                     * Sets the value for blnShowTitle 
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnShowTitle = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ParentMenuItemId':
                    /**
                     * Sets the value for intParentMenuItemId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objParentMenuItem = null;
                        return ($this->intParentMenuItemId = QType::Cast($mixValue, QType::Integer));
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
                case 'ParentMenuItem':
                    /**
                     * Sets the value for the MenuItem object referenced by intParentMenuItemId 
                     * @param MenuItem $mixValue
                     * @return MenuItem
                     */
                    if (is_null($mixValue)) {
                        $this->intParentMenuItemId = null;
                        $this->objParentMenuItem = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a MenuItem object
                        try {
                            $mixValue = QType::Cast($mixValue, 'MenuItem');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED MenuItem object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved ParentMenuItem for this Menu');

                        // Update Local Member Variables
                        $this->objParentMenuItem = $mixValue;
                        $this->intParentMenuItemId = $mixValue->Id;

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
                return ContentBlock::LoadArrayByMenu($this->intId, $objOptionalClauses);
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

            return ContentBlock::CountByMenu($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific ContentBlock
         * @param ContentBlock $objContentBlock
         * @return bool
        */
        public function IsContentBlockAssociated(ContentBlock $objContentBlock) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentBlockAssociated on this unsaved Menu.');
            if ((is_null($objContentBlock->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsContentBlockAssociated on this Menu with an unsaved ContentBlock.');

            $intRowCount = Menu::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Menu()->Id, $this->intId),
                    QQ::Equal(QQN::Menu()->ContentBlock->ContentBlockId, $objContentBlock->Id)
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
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentBlock on this unsaved Menu.');
            if ((is_null($objContentBlock->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateContentBlock on this Menu with an unsaved ContentBlock.');

            // Get the Database Object for this Class
            $objDatabase = Menu::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `menu_content_block_assn` (
                    `menu_id`,
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentBlock on this unsaved Menu.');
            if ((is_null($objContentBlock->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateContentBlock on this Menu with an unsaved ContentBlock.');

            // Get the Database Object for this Class
            $objDatabase = Menu::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_content_block_assn`
                WHERE
                    `menu_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `content_block_id` = ' . $objDatabase->SqlVariable($objContentBlock->Id) . '
            ');
        }

        /**
         * Unassociates all ContentBlocks
         * @return void
        */ 
        public function UnassociateAllContentBlocks() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllContentBlockArray on this unsaved Menu.');

            // Get the Database Object for this Class
            $objDatabase = Menu::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_content_block_assn`
                WHERE
                    `menu_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }
            
        // Related Many-to-Many Objects' Methods for MenuItem
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated MenuItems as an array of MenuItem objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return MenuItem[]
        */ 
        public function GetMenuItemArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return MenuItem::LoadArrayByMenu($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated MenuItems
         * @return int
        */ 
        public function CountMenuItems() {
            if ((is_null($this->intId)))
                return 0;

            return MenuItem::CountByMenu($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific MenuItem
         * @param MenuItem $objMenuItem
         * @return bool
        */
        public function IsMenuItemAssociated(MenuItem $objMenuItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsMenuItemAssociated on this unsaved Menu.');
            if ((is_null($objMenuItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsMenuItemAssociated on this Menu with an unsaved MenuItem.');

            $intRowCount = Menu::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Menu()->Id, $this->intId),
                    QQ::Equal(QQN::Menu()->MenuItem->MenuItemId, $objMenuItem->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a MenuItem
         * @param MenuItem $objMenuItem
         * @return void
        */ 
        public function AssociateMenuItem(MenuItem $objMenuItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenuItem on this unsaved Menu.');
            if ((is_null($objMenuItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenuItem on this Menu with an unsaved MenuItem.');

            // Get the Database Object for this Class
            $objDatabase = Menu::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `menu_item_menu_assn` (
                    `menu_id`,
                    `menu_item_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objMenuItem->Id) . '
                )
            ');
        }

        /**
         * Unassociates a MenuItem
         * @param MenuItem $objMenuItem
         * @return void
        */ 
        public function UnassociateMenuItem(MenuItem $objMenuItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuItem on this unsaved Menu.');
            if ((is_null($objMenuItem->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuItem on this Menu with an unsaved MenuItem.');

            // Get the Database Object for this Class
            $objDatabase = Menu::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_item_menu_assn`
                WHERE
                    `menu_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `menu_item_id` = ' . $objDatabase->SqlVariable($objMenuItem->Id) . '
            ');
        }

        /**
         * Unassociates all MenuItems
         * @return void
        */ 
        public function UnassociateAllMenuItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllMenuItemArray on this unsaved Menu.');

            // Get the Database Object for this Class
            $objDatabase = Menu::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_item_menu_assn`
                WHERE
                    `menu_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }



    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeMenuContentBlock extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'contentblock';

        protected $strTableName = 'menu_content_block_assn';
        protected $strPrimaryKey = 'menu_id';
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

    class QQNodeMenuMenuItem extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'menuitem';

        protected $strTableName = 'menu_item_menu_assn';
        protected $strPrimaryKey = 'menu_id';
        protected $strClassName = 'MenuItem';

        public function __get($strName) {
            switch ($strName) {
                case 'MenuItemId':
                    return new QQNode('menu_item_id', 'MenuItemId', 'integer', $this);
                case 'MenuItem':
                    return new QQNodeMenuItem('menu_item_id', 'MenuItemId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeMenuItem('menu_item_id', 'MenuItemId', 'integer', $this);
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

    class QQNodeMenu extends QQNode {
        protected $strTableName = 'menu';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Menu';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'CssClass':
                    return new QQNode('css_class', 'CssClass', 'string', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'ShowTitle':
                    return new QQNode('show_title', 'ShowTitle', 'boolean', $this);
                case 'ParentMenuItemId':
                    return new QQNode('parent_menu_item_id', 'ParentMenuItemId', 'integer', $this);
                case 'ParentMenuItem':
                    return new QQNodeMenuItem('parent_menu_item_id', 'ParentMenuItem', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'ContentBlock':
                    return new QQNodeMenuContentBlock($this);
                case 'MenuItem':
                    return new QQNodeMenuMenuItem($this);

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

    class QQReverseReferenceNodeMenu extends QQReverseReferenceNode {
        protected $strTableName = 'menu';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Menu';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'CssClass':
                    return new QQNode('css_class', 'CssClass', 'string', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'ShowTitle':
                    return new QQNode('show_title', 'ShowTitle', 'boolean', $this);
                case 'ParentMenuItemId':
                    return new QQNode('parent_menu_item_id', 'ParentMenuItemId', 'integer', $this);
                case 'ParentMenuItem':
                    return new QQNodeMenuItem('parent_menu_item_id', 'ParentMenuItem', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'ContentBlock':
                    return new QQNodeMenuContentBlock($this);
                case 'MenuItem':
                    return new QQNodeMenuMenuItem($this);

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