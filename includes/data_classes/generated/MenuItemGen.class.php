<?php
    /**
     * The abstract MenuItemGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the MenuItem subclass which
     * extends this MenuItemGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the MenuItem class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Name the value for strName (Unique)
     * @property string $CssClass the value for strCssClass 
     * @property string $Label the value for strLabel 
     * @property string $Uri the value for strUri (Not Null)
     * @property boolean $IsLocal the value for blnIsLocal (Not Null)
     * @property boolean $IsSsl the value for blnIsSsl (Not Null)
     * @property integer $SortOrder the value for intSortOrder (Not Null)
     * @property integer $StatusId the value for intStatusId (Not Null)
     * @property integer $TypeId the value for intTypeId (Not Null)
     * @property integer $PageId the value for intPageId 
     * @property Page $Page the value for the Page object referenced by intPageId 
     * @property-read Menu $_Menu the value for the private _objMenu (Read-Only) if set due to an expansion on the menu_item_menu_assn association table
     * @property-read Menu[] $_MenuArray the value for the private _objMenuArray (Read-Only) if set due to an ExpandAsArray on the menu_item_menu_assn association table
     * @property-read Menu $_MenuAsParent the value for the private _objMenuAsParent (Read-Only) if set due to an expansion on the menu.parent_menu_item_id reverse relationship
     * @property-read Menu[] $_MenuAsParentArray the value for the private _objMenuAsParentArray (Read-Only) if set due to an ExpandAsArray on the menu.parent_menu_item_id reverse relationship
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class MenuItemGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column menu_item.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column menu_item.name
         * @var string strName
         *
         */
        protected $strName = null;
        const NameMaxLength = 64;


        /**
         * Protected member variable that maps to the database column menu_item.css_class
         * @var string strCssClass
         *
         */
        protected $strCssClass = null;
        const CssClassMaxLength = 32;


        /**
         * Protected member variable that maps to the database column menu_item.label
         * @var string strLabel
         *
         */
        protected $strLabel = null;
        const LabelMaxLength = 32;


        /**
         * Protected member variable that maps to the database column menu_item.uri
         * @var string strUri
         *
         */
        protected $strUri = null;
        const UriMaxLength = 256;


        /**
         * Protected member variable that maps to the database column menu_item.is_local
         * @var boolean blnIsLocal
         *
         */
        protected $blnIsLocal = null;


        /**
         * Protected member variable that maps to the database column menu_item.is_ssl
         * @var boolean blnIsSsl
         *
         */
        protected $blnIsSsl = null;


        /**
         * Protected member variable that maps to the database column menu_item.sort_order
         * @var integer intSortOrder
         *
         */
        protected $intSortOrder = null;


        /**
         * Protected member variable that maps to the database column menu_item.status_id
         * @var integer intStatusId
         *
         */
        protected $intStatusId = null;


        /**
         * Protected member variable that maps to the database column menu_item.type_id
         * @var integer intTypeId
         *
         */
        protected $intTypeId = null;


        /**
         * Protected member variable that maps to the database column menu_item.page_id
         * @var integer intPageId
         *
         */
        protected $intPageId = null;


        /**
         * Private member variable that stores a reference to a single Menu object
         * (of type Menu), if this MenuItem object was restored with
         * an expansion on the menu_item_menu_assn association table.
         * @var Menu _objMenu;
         */
        private $_objMenu;

        /**
         * Private member variable that stores a reference to an array of Menu objects
         * (of type Menu[]), if this MenuItem object was restored with
         * an ExpandAsArray on the menu_item_menu_assn association table.
         * @var Menu[] _objMenuArray;
         */
        private $_objMenuArray = array();

        /**
         * Private member variable that stores a reference to a single MenuAsParent object
         * (of type Menu), if this MenuItem object was restored with
         * an expansion on the menu association table.
         * @var Menu _objMenuAsParent;
         */
        private $_objMenuAsParent;

        /**
         * Private member variable that stores a reference to an array of MenuAsParent objects
         * (of type Menu[]), if this MenuItem object was restored with
         * an ExpandAsArray on the menu association table.
         * @var Menu[] _objMenuAsParentArray;
         */
        private $_objMenuAsParentArray = array();

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
         * in the database column menu_item.page_id.
         *
         * NOTE: Always use the Page property getter to correctly retrieve this Page object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Page objPage
         */
        protected $objPage;



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
         * Load a MenuItem from PK Info
         * @param integer $intId
         * @return MenuItem
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return MenuItem::QuerySingle(
                QQ::Equal(QQN::MenuItem()->Id, $intId)
            );
        }

        /**
         * Load all MenuItems
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return MenuItem[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call MenuItem::QueryArray to perform the LoadAll query
            try {
                return MenuItem::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all MenuItems
         * @return int
         */
        public static function CountAll() {
            // Call MenuItem::QueryCount to perform the CountAll query
            return MenuItem::QueryCount(QQ::All());
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
            $objDatabase = MenuItem::GetDatabase();

            // Create/Build out the QueryBuilder object with MenuItem-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'menu_item');
            MenuItem::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('menu_item');

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
         * Static Qcodo Query method to query for a single MenuItem object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return MenuItem the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = MenuItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new MenuItem object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return MenuItem::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of MenuItem objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return MenuItem[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = MenuItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return MenuItem::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of MenuItem objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = MenuItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = MenuItem::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'menu_item_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with MenuItem-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                MenuItem::GetSelectFields($objQueryBuilder);
                MenuItem::GetFromFields($objQueryBuilder);

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
            return MenuItem::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this MenuItem
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'menu_item';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            $objBuilder->AddSelectItem($strTableName, 'css_class', $strAliasPrefix . 'css_class');
            $objBuilder->AddSelectItem($strTableName, 'label', $strAliasPrefix . 'label');
            $objBuilder->AddSelectItem($strTableName, 'uri', $strAliasPrefix . 'uri');
            $objBuilder->AddSelectItem($strTableName, 'is_local', $strAliasPrefix . 'is_local');
            $objBuilder->AddSelectItem($strTableName, 'is_ssl', $strAliasPrefix . 'is_ssl');
            $objBuilder->AddSelectItem($strTableName, 'sort_order', $strAliasPrefix . 'sort_order');
            $objBuilder->AddSelectItem($strTableName, 'status_id', $strAliasPrefix . 'status_id');
            $objBuilder->AddSelectItem($strTableName, 'type_id', $strAliasPrefix . 'type_id');
            $objBuilder->AddSelectItem($strTableName, 'page_id', $strAliasPrefix . 'page_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a MenuItem from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this MenuItem::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return MenuItem
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
                    $strAliasPrefix = 'menu_item__';

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


                $strAlias = $strAliasPrefix . 'menuasparent__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objMenuAsParentArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objMenuAsParentArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasparent__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objMenuAsParentArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objMenuAsParentArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasparent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'menu_item__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the MenuItem object
            $objToReturn = new MenuItem();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
            $objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'css_class', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'css_class'] : $strAliasPrefix . 'css_class';
            $objToReturn->strCssClass = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'label', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'label'] : $strAliasPrefix . 'label';
            $objToReturn->strLabel = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'uri', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'uri'] : $strAliasPrefix . 'uri';
            $objToReturn->strUri = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'is_local', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'is_local'] : $strAliasPrefix . 'is_local';
            $objToReturn->blnIsLocal = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'is_ssl', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'is_ssl'] : $strAliasPrefix . 'is_ssl';
            $objToReturn->blnIsSsl = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'sort_order', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'sort_order'] : $strAliasPrefix . 'sort_order';
            $objToReturn->intSortOrder = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'status_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'status_id'] : $strAliasPrefix . 'status_id';
            $objToReturn->intStatusId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'type_id'] : $strAliasPrefix . 'type_id';
            $objToReturn->intTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'page_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'page_id'] : $strAliasPrefix . 'page_id';
            $objToReturn->intPageId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'menu_item__';

            // Check for Page Early Binding
            $strAlias = $strAliasPrefix . 'page_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objPage = Page::InstantiateDbRow($objDbRow, $strAliasPrefix . 'page_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



            // Check for Menu Virtual Binding
            $strAlias = $strAliasPrefix . 'menu__menu_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objMenuArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu__menu_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objMenu = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu__menu_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }


            // Check for MenuAsParent Virtual Binding
            $strAlias = $strAliasPrefix . 'menuasparent__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objMenuAsParentArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasparent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objMenuAsParent = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasparent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }

        /**
         * Instantiate an array of MenuItems from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return MenuItem[]
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
                    $objItem = MenuItem::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = MenuItem::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single MenuItem object,
         * by Id Index(es)
         * @param integer $intId
         * @return MenuItem
        */
        public static function LoadById($intId) {
            return MenuItem::QuerySingle(
                QQ::Equal(QQN::MenuItem()->Id, $intId)
            );
        }
            
        /**
         * Load a single MenuItem object,
         * by Name Index(es)
         * @param string $strName
         * @return MenuItem
        */
        public static function LoadByName($strName) {
            return MenuItem::QuerySingle(
                QQ::Equal(QQN::MenuItem()->Name, $strName)
            );
        }
            
        /**
         * Load an array of MenuItem objects,
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return MenuItem[]
        */
        public static function LoadArrayByTypeId($intTypeId, $objOptionalClauses = null) {
            // Call MenuItem::QueryArray to perform the LoadArrayByTypeId query
            try {
                return MenuItem::QueryArray(
                    QQ::Equal(QQN::MenuItem()->TypeId, $intTypeId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count MenuItems
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @return int
        */
        public static function CountByTypeId($intTypeId) {
            // Call MenuItem::QueryCount to perform the CountByTypeId query
            return MenuItem::QueryCount(
                QQ::Equal(QQN::MenuItem()->TypeId, $intTypeId)
            );
        }
            
        /**
         * Load an array of MenuItem objects,
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return MenuItem[]
        */
        public static function LoadArrayByStatusId($intStatusId, $objOptionalClauses = null) {
            // Call MenuItem::QueryArray to perform the LoadArrayByStatusId query
            try {
                return MenuItem::QueryArray(
                    QQ::Equal(QQN::MenuItem()->StatusId, $intStatusId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count MenuItems
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @return int
        */
        public static function CountByStatusId($intStatusId) {
            // Call MenuItem::QueryCount to perform the CountByStatusId query
            return MenuItem::QueryCount(
                QQ::Equal(QQN::MenuItem()->StatusId, $intStatusId)
            );
        }
            
        /**
         * Load an array of MenuItem objects,
         * by PageId Index(es)
         * @param integer $intPageId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return MenuItem[]
        */
        public static function LoadArrayByPageId($intPageId, $objOptionalClauses = null) {
            // Call MenuItem::QueryArray to perform the LoadArrayByPageId query
            try {
                return MenuItem::QueryArray(
                    QQ::Equal(QQN::MenuItem()->PageId, $intPageId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count MenuItems
         * by PageId Index(es)
         * @param integer $intPageId
         * @return int
        */
        public static function CountByPageId($intPageId) {
            // Call MenuItem::QueryCount to perform the CountByPageId query
            return MenuItem::QueryCount(
                QQ::Equal(QQN::MenuItem()->PageId, $intPageId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////
            /**
         * Load an array of Menu objects for a given Menu
         * via the menu_item_menu_assn table
         * @param integer $intMenuId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return MenuItem[]
        */
        public static function LoadArrayByMenu($intMenuId, $objOptionalClauses = null) {
            // Call MenuItem::QueryArray to perform the LoadArrayByMenu query
            try {
                return MenuItem::QueryArray(
                    QQ::Equal(QQN::MenuItem()->Menu->MenuId, $intMenuId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count MenuItems for a given Menu
         * via the menu_item_menu_assn table
         * @param integer $intMenuId
         * @return int
        */
        public static function CountByMenu($intMenuId) {
            return MenuItem::QueryCount(
                QQ::Equal(QQN::MenuItem()->Menu->MenuId, $intMenuId)
            );
        }


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this MenuItem
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `menu_item` (
                            `name`,
                            `css_class`,
                            `label`,
                            `uri`,
                            `is_local`,
                            `is_ssl`,
                            `sort_order`,
                            `status_id`,
                            `type_id`,
                            `page_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strName) . ',
                            ' . $objDatabase->SqlVariable($this->strCssClass) . ',
                            ' . $objDatabase->SqlVariable($this->strLabel) . ',
                            ' . $objDatabase->SqlVariable($this->strUri) . ',
                            ' . $objDatabase->SqlVariable($this->blnIsLocal) . ',
                            ' . $objDatabase->SqlVariable($this->blnIsSsl) . ',
                            ' . $objDatabase->SqlVariable($this->intSortOrder) . ',
                            ' . $objDatabase->SqlVariable($this->intStatusId) . ',
                            ' . $objDatabase->SqlVariable($this->intTypeId) . ',
                            ' . $objDatabase->SqlVariable($this->intPageId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('menu_item', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `menu_item`
                        SET
                            `name` = ' . $objDatabase->SqlVariable($this->strName) . ',
                            `css_class` = ' . $objDatabase->SqlVariable($this->strCssClass) . ',
                            `label` = ' . $objDatabase->SqlVariable($this->strLabel) . ',
                            `uri` = ' . $objDatabase->SqlVariable($this->strUri) . ',
                            `is_local` = ' . $objDatabase->SqlVariable($this->blnIsLocal) . ',
                            `is_ssl` = ' . $objDatabase->SqlVariable($this->blnIsSsl) . ',
                            `sort_order` = ' . $objDatabase->SqlVariable($this->intSortOrder) . ',
                            `status_id` = ' . $objDatabase->SqlVariable($this->intStatusId) . ',
                            `type_id` = ' . $objDatabase->SqlVariable($this->intTypeId) . ',
                            `page_id` = ' . $objDatabase->SqlVariable($this->intPageId) . '
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
         * Delete this MenuItem
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this MenuItem with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_item`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all MenuItems
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_item`');
        }

        /**
         * Truncate menu_item table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `menu_item`');
        }

        /**
         * Reload this MenuItem from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved MenuItem object.');

            // Reload the Object
            $objReloaded = MenuItem::Load($this->intId);

            // Update $this's local variables to match
            $this->strName = $objReloaded->strName;
            $this->strCssClass = $objReloaded->strCssClass;
            $this->strLabel = $objReloaded->strLabel;
            $this->strUri = $objReloaded->strUri;
            $this->blnIsLocal = $objReloaded->blnIsLocal;
            $this->blnIsSsl = $objReloaded->blnIsSsl;
            $this->intSortOrder = $objReloaded->intSortOrder;
            $this->StatusId = $objReloaded->StatusId;
            $this->TypeId = $objReloaded->TypeId;
            $this->PageId = $objReloaded->PageId;
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

                case 'CssClass':
                    /**
                     * Gets the value for strCssClass 
                     * @return string
                     */
                    return $this->strCssClass;

                case 'Label':
                    /**
                     * Gets the value for strLabel 
                     * @return string
                     */
                    return $this->strLabel;

                case 'Uri':
                    /**
                     * Gets the value for strUri (Not Null)
                     * @return string
                     */
                    return $this->strUri;

                case 'IsLocal':
                    /**
                     * Gets the value for blnIsLocal (Not Null)
                     * @return boolean
                     */
                    return $this->blnIsLocal;

                case 'IsSsl':
                    /**
                     * Gets the value for blnIsSsl (Not Null)
                     * @return boolean
                     */
                    return $this->blnIsSsl;

                case 'SortOrder':
                    /**
                     * Gets the value for intSortOrder (Not Null)
                     * @return integer
                     */
                    return $this->intSortOrder;

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

                case 'PageId':
                    /**
                     * Gets the value for intPageId 
                     * @return integer
                     */
                    return $this->intPageId;


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Page':
                    /**
                     * Gets the value for the Page object referenced by intPageId 
                     * @return Page
                     */
                    try {
                        if ((!$this->objPage) && (!is_null($this->intPageId)))
                            $this->objPage = Page::Load($this->intPageId);
                        return $this->objPage;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_Menu':
                    /**
                     * Gets the value for the private _objMenu (Read-Only)
                     * if set due to an expansion on the menu_item_menu_assn association table
                     * @return Menu
                     */
                    return $this->_objMenu;

                case '_MenuArray':
                    /**
                     * Gets the value for the private _objMenuArray (Read-Only)
                     * if set due to an ExpandAsArray on the menu_item_menu_assn association table
                     * @return Menu[]
                     */
                    return (array) $this->_objMenuArray;

                case '_MenuAsParent':
                    /**
                     * Gets the value for the private _objMenuAsParent (Read-Only)
                     * if set due to an expansion on the menu.parent_menu_item_id reverse relationship
                     * @return Menu
                     */
                    return $this->_objMenuAsParent;

                case '_MenuAsParentArray':
                    /**
                     * Gets the value for the private _objMenuAsParentArray (Read-Only)
                     * if set due to an ExpandAsArray on the menu.parent_menu_item_id reverse relationship
                     * @return Menu[]
                     */
                    return (array) $this->_objMenuAsParentArray;


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

                case 'Label':
                    /**
                     * Sets the value for strLabel 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strLabel = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Uri':
                    /**
                     * Sets the value for strUri (Not Null)
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strUri = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'IsLocal':
                    /**
                     * Sets the value for blnIsLocal (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnIsLocal = QType::Cast($mixValue, QType::Boolean));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'IsSsl':
                    /**
                     * Sets the value for blnIsSsl (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnIsSsl = QType::Cast($mixValue, QType::Boolean));
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

                case 'PageId':
                    /**
                     * Sets the value for intPageId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objPage = null;
                        return ($this->intPageId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Page':
                    /**
                     * Sets the value for the Page object referenced by intPageId 
                     * @param Page $mixValue
                     * @return Page
                     */
                    if (is_null($mixValue)) {
                        $this->intPageId = null;
                        $this->objPage = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a Page object
                        try {
                            $mixValue = QType::Cast($mixValue, 'Page');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED Page object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved Page for this MenuItem');

                        // Update Local Member Variables
                        $this->objPage = $mixValue;
                        $this->intPageId = $mixValue->Id;

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

            
        
        // Related Objects' Methods for MenuAsParent
        //-------------------------------------------------------------------

        /**
         * Gets all associated MenusAsParent as an array of Menu objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Menu[]
        */ 
        public function GetMenuAsParentArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Menu::LoadArrayByParentMenuItemId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated MenusAsParent
         * @return int
        */ 
        public function CountMenusAsParent() {
            if ((is_null($this->intId)))
                return 0;

            return Menu::CountByParentMenuItemId($this->intId);
        }

        /**
         * Associates a MenuAsParent
         * @param Menu $objMenu
         * @return void
        */ 
        public function AssociateMenuAsParent(Menu $objMenu) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenuAsParent on this unsaved MenuItem.');
            if ((is_null($objMenu->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenuAsParent on this MenuItem with an unsaved Menu.');

            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `menu`
                SET
                    `parent_menu_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objMenu->Id) . '
            ');
        }

        /**
         * Unassociates a MenuAsParent
         * @param Menu $objMenu
         * @return void
        */ 
        public function UnassociateMenuAsParent(Menu $objMenu) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParent on this unsaved MenuItem.');
            if ((is_null($objMenu->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParent on this MenuItem with an unsaved Menu.');

            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `menu`
                SET
                    `parent_menu_item_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objMenu->Id) . ' AND
                    `parent_menu_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all MenusAsParent
         * @return void
        */ 
        public function UnassociateAllMenusAsParent() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParent on this unsaved MenuItem.');

            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `menu`
                SET
                    `parent_menu_item_id` = null
                WHERE
                    `parent_menu_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated MenuAsParent
         * @param Menu $objMenu
         * @return void
        */ 
        public function DeleteAssociatedMenuAsParent(Menu $objMenu) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParent on this unsaved MenuItem.');
            if ((is_null($objMenu->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParent on this MenuItem with an unsaved Menu.');

            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objMenu->Id) . ' AND
                    `parent_menu_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated MenusAsParent
         * @return void
        */ 
        public function DeleteAllMenusAsParent() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParent on this unsaved MenuItem.');

            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu`
                WHERE
                    `parent_menu_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
                return Menu::LoadArrayByMenuItem($this->intId, $objOptionalClauses);
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

            return Menu::CountByMenuItem($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific Menu
         * @param Menu $objMenu
         * @return bool
        */
        public function IsMenuAssociated(Menu $objMenu) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsMenuAssociated on this unsaved MenuItem.');
            if ((is_null($objMenu->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsMenuAssociated on this MenuItem with an unsaved Menu.');

            $intRowCount = MenuItem::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::MenuItem()->Id, $this->intId),
                    QQ::Equal(QQN::MenuItem()->Menu->MenuId, $objMenu->Id)
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
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenu on this unsaved MenuItem.');
            if ((is_null($objMenu->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenu on this MenuItem with an unsaved Menu.');

            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `menu_item_menu_assn` (
                    `menu_item_id`,
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenu on this unsaved MenuItem.');
            if ((is_null($objMenu->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenu on this MenuItem with an unsaved Menu.');

            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_item_menu_assn`
                WHERE
                    `menu_item_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `menu_id` = ' . $objDatabase->SqlVariable($objMenu->Id) . '
            ');
        }

        /**
         * Unassociates all Menus
         * @return void
        */ 
        public function UnassociateAllMenus() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllMenuArray on this unsaved MenuItem.');

            // Get the Database Object for this Class
            $objDatabase = MenuItem::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `menu_item_menu_assn`
                WHERE
                    `menu_item_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }



    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeMenuItemMenu extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'menu';

        protected $strTableName = 'menu_item_menu_assn';
        protected $strPrimaryKey = 'menu_item_id';
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

    class QQNodeMenuItem extends QQNode {
        protected $strTableName = 'menu_item';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'MenuItem';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'CssClass':
                    return new QQNode('css_class', 'CssClass', 'string', $this);
                case 'Label':
                    return new QQNode('label', 'Label', 'string', $this);
                case 'Uri':
                    return new QQNode('uri', 'Uri', 'string', $this);
                case 'IsLocal':
                    return new QQNode('is_local', 'IsLocal', 'boolean', $this);
                case 'IsSsl':
                    return new QQNode('is_ssl', 'IsSsl', 'boolean', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'PageId':
                    return new QQNode('page_id', 'PageId', 'integer', $this);
                case 'Page':
                    return new QQNodePage('page_id', 'Page', 'integer', $this);
                case 'Menu':
                    return new QQNodeMenuItemMenu($this);
                case 'MenuAsParent':
                    return new QQReverseReferenceNodeMenu($this, 'menuasparent', 'reverse_reference', 'parent_menu_item_id');

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

    class QQReverseReferenceNodeMenuItem extends QQReverseReferenceNode {
        protected $strTableName = 'menu_item';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'MenuItem';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'CssClass':
                    return new QQNode('css_class', 'CssClass', 'string', $this);
                case 'Label':
                    return new QQNode('label', 'Label', 'string', $this);
                case 'Uri':
                    return new QQNode('uri', 'Uri', 'string', $this);
                case 'IsLocal':
                    return new QQNode('is_local', 'IsLocal', 'boolean', $this);
                case 'IsSsl':
                    return new QQNode('is_ssl', 'IsSsl', 'boolean', $this);
                case 'SortOrder':
                    return new QQNode('sort_order', 'SortOrder', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'PageId':
                    return new QQNode('page_id', 'PageId', 'integer', $this);
                case 'Page':
                    return new QQNodePage('page_id', 'Page', 'integer', $this);
                case 'Menu':
                    return new QQNodeMenuItemMenu($this);
                case 'MenuAsParent':
                    return new QQReverseReferenceNodeMenu($this, 'menuasparent', 'reverse_reference', 'parent_menu_item_id');

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