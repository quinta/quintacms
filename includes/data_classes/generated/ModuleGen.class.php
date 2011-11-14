<?php
    /**
     * The abstract ModuleGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the Module subclass which
     * extends this ModuleGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the Module class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Name the value for strName (Unique)
     * @property string $Cssclass the value for strCssclass 
     * @property string $Title the value for strTitle 
     * @property string $Description the value for strDescription 
     * @property string $ClassName the value for strClassName 
     * @property boolean $ShowTitle the value for blnShowTitle (Not Null)
     * @property boolean $ShowDescription the value for blnShowDescription (Not Null)
     * @property integer $ContentBlockId the value for intContentBlockId 
     * @property integer $ParentModuleId the value for intParentModuleId 
     * @property ContentBlock $ContentBlock the value for the ContentBlock object referenced by intContentBlockId 
     * @property Module $ParentModule the value for the Module object referenced by intParentModuleId 
     * @property-read Module $_ChildModule the value for the private _objChildModule (Read-Only) if set due to an expansion on the module.parent_module_id reverse relationship
     * @property-read Module[] $_ChildModuleArray the value for the private _objChildModuleArray (Read-Only) if set due to an ExpandAsArray on the module.parent_module_id reverse relationship
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class ModuleGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column module.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column module.name
         * @var string strName
         *
         */
        protected $strName = null;
        const NameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column module.cssclass
         * @var string strCssclass
         *
         */
        protected $strCssclass = null;
        const CssclassMaxLength = 128;


        /**
         * Protected member variable that maps to the database column module.title
         * @var string strTitle
         *
         */
        protected $strTitle = null;
        const TitleMaxLength = 128;


        /**
         * Protected member variable that maps to the database column module.description
         * @var string strDescription
         *
         */
        protected $strDescription = null;
        const DescriptionMaxLength = 256;


        /**
         * Protected member variable that maps to the database column module.class_name
         * @var string strClassName
         *
         */
        protected $strClassName = null;
        const ClassNameMaxLength = 256;


        /**
         * Protected member variable that maps to the database column module.show_title
         * @var boolean blnShowTitle
         *
         */
        protected $blnShowTitle = null;


        /**
         * Protected member variable that maps to the database column module.show_description
         * @var boolean blnShowDescription
         *
         */
        protected $blnShowDescription = null;


        /**
         * Protected member variable that maps to the database column module.content_block_id
         * @var integer intContentBlockId
         *
         */
        protected $intContentBlockId = null;


        /**
         * Protected member variable that maps to the database column module.parent_module_id
         * @var integer intParentModuleId
         *
         */
        protected $intParentModuleId = null;


        /**
         * Private member variable that stores a reference to a single ChildModule object
         * (of type Module), if this Module object was restored with
         * an expansion on the module association table.
         * @var Module _objChildModule;
         */
        private $_objChildModule;

        /**
         * Private member variable that stores a reference to an array of ChildModule objects
         * (of type Module[]), if this Module object was restored with
         * an ExpandAsArray on the module association table.
         * @var Module[] _objChildModuleArray;
         */
        private $_objChildModuleArray = array();

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
         * in the database column module.content_block_id.
         *
         * NOTE: Always use the ContentBlock property getter to correctly retrieve this ContentBlock object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var ContentBlock objContentBlock
         */
        protected $objContentBlock;

        /**
         * Protected member variable that contains the object pointed by the reference
         * in the database column module.parent_module_id.
         *
         * NOTE: Always use the ParentModule property getter to correctly retrieve this Module object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Module objParentModule
         */
        protected $objParentModule;



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
         * Load a Module from PK Info
         * @param integer $intId
         * @return Module
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return Module::QuerySingle(
                QQ::Equal(QQN::Module()->Id, $intId)
            );
        }

        /**
         * Load all Modules
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Module[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call Module::QueryArray to perform the LoadAll query
            try {
                return Module::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all Modules
         * @return int
         */
        public static function CountAll() {
            // Call Module::QueryCount to perform the CountAll query
            return Module::QueryCount(QQ::All());
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
            $objDatabase = Module::GetDatabase();

            // Create/Build out the QueryBuilder object with Module-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'module');
            Module::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('module');

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
         * Static Qcodo Query method to query for a single Module object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Module the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Module::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new Module object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Module::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of Module objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Module[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Module::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Module::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of Module objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Module::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = Module::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'module_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Module-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                Module::GetSelectFields($objQueryBuilder);
                Module::GetFromFields($objQueryBuilder);

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
            return Module::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this Module
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'module';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            $objBuilder->AddSelectItem($strTableName, 'cssclass', $strAliasPrefix . 'cssclass');
            $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
            $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
            $objBuilder->AddSelectItem($strTableName, 'class_name', $strAliasPrefix . 'class_name');
            $objBuilder->AddSelectItem($strTableName, 'show_title', $strAliasPrefix . 'show_title');
            $objBuilder->AddSelectItem($strTableName, 'show_description', $strAliasPrefix . 'show_description');
            $objBuilder->AddSelectItem($strTableName, 'content_block_id', $strAliasPrefix . 'content_block_id');
            $objBuilder->AddSelectItem($strTableName, 'parent_module_id', $strAliasPrefix . 'parent_module_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a Module from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this Module::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return Module
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
                    $strAliasPrefix = 'module__';


                $strAlias = $strAliasPrefix . 'childmodule__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objChildModuleArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objChildModuleArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Module::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childmodule__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objChildModuleArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objChildModuleArray[] = Module::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childmodule__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'module__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the Module object
            $objToReturn = new Module();
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
            $strAliasName = array_key_exists($strAliasPrefix . 'class_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'class_name'] : $strAliasPrefix . 'class_name';
            $objToReturn->strClassName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'show_title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'show_title'] : $strAliasPrefix . 'show_title';
            $objToReturn->blnShowTitle = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'show_description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'show_description'] : $strAliasPrefix . 'show_description';
            $objToReturn->blnShowDescription = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'content_block_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'content_block_id'] : $strAliasPrefix . 'content_block_id';
            $objToReturn->intContentBlockId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'parent_module_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'parent_module_id'] : $strAliasPrefix . 'parent_module_id';
            $objToReturn->intParentModuleId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'module__';

            // Check for ContentBlock Early Binding
            $strAlias = $strAliasPrefix . 'content_block_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objContentBlock = ContentBlock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'content_block_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

            // Check for ParentModule Early Binding
            $strAlias = $strAliasPrefix . 'parent_module_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objParentModule = Module::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parent_module_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            // Check for ChildModule Virtual Binding
            $strAlias = $strAliasPrefix . 'childmodule__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objChildModuleArray[] = Module::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childmodule__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objChildModule = Module::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childmodule__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }

        /**
         * Instantiate an array of Modules from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return Module[]
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
                    $objItem = Module::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = Module::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single Module object,
         * by Id Index(es)
         * @param integer $intId
         * @return Module
        */
        public static function LoadById($intId) {
            return Module::QuerySingle(
                QQ::Equal(QQN::Module()->Id, $intId)
            );
        }
            
        /**
         * Load a single Module object,
         * by Name Index(es)
         * @param string $strName
         * @return Module
        */
        public static function LoadByName($strName) {
            return Module::QuerySingle(
                QQ::Equal(QQN::Module()->Name, $strName)
            );
        }
            
        /**
         * Load an array of Module objects,
         * by ContentBlockId Index(es)
         * @param integer $intContentBlockId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Module[]
        */
        public static function LoadArrayByContentBlockId($intContentBlockId, $objOptionalClauses = null) {
            // Call Module::QueryArray to perform the LoadArrayByContentBlockId query
            try {
                return Module::QueryArray(
                    QQ::Equal(QQN::Module()->ContentBlockId, $intContentBlockId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Modules
         * by ContentBlockId Index(es)
         * @param integer $intContentBlockId
         * @return int
        */
        public static function CountByContentBlockId($intContentBlockId) {
            // Call Module::QueryCount to perform the CountByContentBlockId query
            return Module::QueryCount(
                QQ::Equal(QQN::Module()->ContentBlockId, $intContentBlockId)
            );
        }
            
        /**
         * Load an array of Module objects,
         * by Title Index(es)
         * @param string $strTitle
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Module[]
        */
        public static function LoadArrayByTitle($strTitle, $objOptionalClauses = null) {
            // Call Module::QueryArray to perform the LoadArrayByTitle query
            try {
                return Module::QueryArray(
                    QQ::Equal(QQN::Module()->Title, $strTitle),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Modules
         * by Title Index(es)
         * @param string $strTitle
         * @return int
        */
        public static function CountByTitle($strTitle) {
            // Call Module::QueryCount to perform the CountByTitle query
            return Module::QueryCount(
                QQ::Equal(QQN::Module()->Title, $strTitle)
            );
        }
            
        /**
         * Load an array of Module objects,
         * by ParentModuleId Index(es)
         * @param integer $intParentModuleId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Module[]
        */
        public static function LoadArrayByParentModuleId($intParentModuleId, $objOptionalClauses = null) {
            // Call Module::QueryArray to perform the LoadArrayByParentModuleId query
            try {
                return Module::QueryArray(
                    QQ::Equal(QQN::Module()->ParentModuleId, $intParentModuleId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Modules
         * by ParentModuleId Index(es)
         * @param integer $intParentModuleId
         * @return int
        */
        public static function CountByParentModuleId($intParentModuleId) {
            // Call Module::QueryCount to perform the CountByParentModuleId query
            return Module::QueryCount(
                QQ::Equal(QQN::Module()->ParentModuleId, $intParentModuleId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this Module
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = Module::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `module` (
                            `name`,
                            `cssclass`,
                            `title`,
                            `description`,
                            `class_name`,
                            `show_title`,
                            `show_description`,
                            `content_block_id`,
                            `parent_module_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strName) . ',
                            ' . $objDatabase->SqlVariable($this->strCssclass) . ',
                            ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            ' . $objDatabase->SqlVariable($this->strClassName) . ',
                            ' . $objDatabase->SqlVariable($this->blnShowTitle) . ',
                            ' . $objDatabase->SqlVariable($this->blnShowDescription) . ',
                            ' . $objDatabase->SqlVariable($this->intContentBlockId) . ',
                            ' . $objDatabase->SqlVariable($this->intParentModuleId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('module', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `module`
                        SET
                            `name` = ' . $objDatabase->SqlVariable($this->strName) . ',
                            `cssclass` = ' . $objDatabase->SqlVariable($this->strCssclass) . ',
                            `title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            `description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            `class_name` = ' . $objDatabase->SqlVariable($this->strClassName) . ',
                            `show_title` = ' . $objDatabase->SqlVariable($this->blnShowTitle) . ',
                            `show_description` = ' . $objDatabase->SqlVariable($this->blnShowDescription) . ',
                            `content_block_id` = ' . $objDatabase->SqlVariable($this->intContentBlockId) . ',
                            `parent_module_id` = ' . $objDatabase->SqlVariable($this->intParentModuleId) . '
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
         * Delete this Module
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this Module with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = Module::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `module`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all Modules
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = Module::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `module`');
        }

        /**
         * Truncate module table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = Module::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `module`');
        }

        /**
         * Reload this Module from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved Module object.');

            // Reload the Object
            $objReloaded = Module::Load($this->intId);

            // Update $this's local variables to match
            $this->strName = $objReloaded->strName;
            $this->strCssclass = $objReloaded->strCssclass;
            $this->strTitle = $objReloaded->strTitle;
            $this->strDescription = $objReloaded->strDescription;
            $this->strClassName = $objReloaded->strClassName;
            $this->blnShowTitle = $objReloaded->blnShowTitle;
            $this->blnShowDescription = $objReloaded->blnShowDescription;
            $this->ContentBlockId = $objReloaded->ContentBlockId;
            $this->ParentModuleId = $objReloaded->ParentModuleId;
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

                case 'ClassName':
                    /**
                     * Gets the value for strClassName 
                     * @return string
                     */
                    return $this->strClassName;

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

                case 'ContentBlockId':
                    /**
                     * Gets the value for intContentBlockId 
                     * @return integer
                     */
                    return $this->intContentBlockId;

                case 'ParentModuleId':
                    /**
                     * Gets the value for intParentModuleId 
                     * @return integer
                     */
                    return $this->intParentModuleId;


                ///////////////////
                // Member Objects
                ///////////////////
                case 'ContentBlock':
                    /**
                     * Gets the value for the ContentBlock object referenced by intContentBlockId 
                     * @return ContentBlock
                     */
                    try {
                        if ((!$this->objContentBlock) && (!is_null($this->intContentBlockId)))
                            $this->objContentBlock = ContentBlock::Load($this->intContentBlockId);
                        return $this->objContentBlock;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ParentModule':
                    /**
                     * Gets the value for the Module object referenced by intParentModuleId 
                     * @return Module
                     */
                    try {
                        if ((!$this->objParentModule) && (!is_null($this->intParentModuleId)))
                            $this->objParentModule = Module::Load($this->intParentModuleId);
                        return $this->objParentModule;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_ChildModule':
                    /**
                     * Gets the value for the private _objChildModule (Read-Only)
                     * if set due to an expansion on the module.parent_module_id reverse relationship
                     * @return Module
                     */
                    return $this->_objChildModule;

                case '_ChildModuleArray':
                    /**
                     * Gets the value for the private _objChildModuleArray (Read-Only)
                     * if set due to an ExpandAsArray on the module.parent_module_id reverse relationship
                     * @return Module[]
                     */
                    return (array) $this->_objChildModuleArray;


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

                case 'ClassName':
                    /**
                     * Sets the value for strClassName 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strClassName = QType::Cast($mixValue, QType::String));
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

                case 'ContentBlockId':
                    /**
                     * Sets the value for intContentBlockId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objContentBlock = null;
                        return ($this->intContentBlockId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ParentModuleId':
                    /**
                     * Sets the value for intParentModuleId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objParentModule = null;
                        return ($this->intParentModuleId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ///////////////////
                // Member Objects
                ///////////////////
                case 'ContentBlock':
                    /**
                     * Sets the value for the ContentBlock object referenced by intContentBlockId 
                     * @param ContentBlock $mixValue
                     * @return ContentBlock
                     */
                    if (is_null($mixValue)) {
                        $this->intContentBlockId = null;
                        $this->objContentBlock = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a ContentBlock object
                        try {
                            $mixValue = QType::Cast($mixValue, 'ContentBlock');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED ContentBlock object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved ContentBlock for this Module');

                        // Update Local Member Variables
                        $this->objContentBlock = $mixValue;
                        $this->intContentBlockId = $mixValue->Id;

                        // Return $mixValue
                        return $mixValue;
                    }
                    break;

                case 'ParentModule':
                    /**
                     * Sets the value for the Module object referenced by intParentModuleId 
                     * @param Module $mixValue
                     * @return Module
                     */
                    if (is_null($mixValue)) {
                        $this->intParentModuleId = null;
                        $this->objParentModule = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a Module object
                        try {
                            $mixValue = QType::Cast($mixValue, 'Module');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED Module object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved ParentModule for this Module');

                        // Update Local Member Variables
                        $this->objParentModule = $mixValue;
                        $this->intParentModuleId = $mixValue->Id;

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

            
        
        // Related Objects' Methods for ChildModule
        //-------------------------------------------------------------------

        /**
         * Gets all associated ChildModules as an array of Module objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Module[]
        */ 
        public function GetChildModuleArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Module::LoadArrayByParentModuleId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated ChildModules
         * @return int
        */ 
        public function CountChildModules() {
            if ((is_null($this->intId)))
                return 0;

            return Module::CountByParentModuleId($this->intId);
        }

        /**
         * Associates a ChildModule
         * @param Module $objModule
         * @return void
        */ 
        public function AssociateChildModule(Module $objModule) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateChildModule on this unsaved Module.');
            if ((is_null($objModule->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateChildModule on this Module with an unsaved Module.');

            // Get the Database Object for this Class
            $objDatabase = Module::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `module`
                SET
                    `parent_module_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objModule->Id) . '
            ');
        }

        /**
         * Unassociates a ChildModule
         * @param Module $objModule
         * @return void
        */ 
        public function UnassociateChildModule(Module $objModule) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildModule on this unsaved Module.');
            if ((is_null($objModule->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildModule on this Module with an unsaved Module.');

            // Get the Database Object for this Class
            $objDatabase = Module::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `module`
                SET
                    `parent_module_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objModule->Id) . ' AND
                    `parent_module_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all ChildModules
         * @return void
        */ 
        public function UnassociateAllChildModules() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildModule on this unsaved Module.');

            // Get the Database Object for this Class
            $objDatabase = Module::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `module`
                SET
                    `parent_module_id` = null
                WHERE
                    `parent_module_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated ChildModule
         * @param Module $objModule
         * @return void
        */ 
        public function DeleteAssociatedChildModule(Module $objModule) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildModule on this unsaved Module.');
            if ((is_null($objModule->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildModule on this Module with an unsaved Module.');

            // Get the Database Object for this Class
            $objDatabase = Module::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `module`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objModule->Id) . ' AND
                    `parent_module_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated ChildModules
         * @return void
        */ 
        public function DeleteAllChildModules() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildModule on this unsaved Module.');

            // Get the Database Object for this Class
            $objDatabase = Module::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `module`
                WHERE
                    `parent_module_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }




    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeModule extends QQNode {
        protected $strTableName = 'module';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Module';
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
                case 'ClassName':
                    return new QQNode('class_name', 'ClassName', 'string', $this);
                case 'ShowTitle':
                    return new QQNode('show_title', 'ShowTitle', 'boolean', $this);
                case 'ShowDescription':
                    return new QQNode('show_description', 'ShowDescription', 'boolean', $this);
                case 'ContentBlockId':
                    return new QQNode('content_block_id', 'ContentBlockId', 'integer', $this);
                case 'ContentBlock':
                    return new QQNodeContentBlock('content_block_id', 'ContentBlock', 'integer', $this);
                case 'ParentModuleId':
                    return new QQNode('parent_module_id', 'ParentModuleId', 'integer', $this);
                case 'ParentModule':
                    return new QQNodeModule('parent_module_id', 'ParentModule', 'integer', $this);
                case 'ChildModule':
                    return new QQReverseReferenceNodeModule($this, 'childmodule', 'reverse_reference', 'parent_module_id');

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

    class QQReverseReferenceNodeModule extends QQReverseReferenceNode {
        protected $strTableName = 'module';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Module';
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
                case 'ClassName':
                    return new QQNode('class_name', 'ClassName', 'string', $this);
                case 'ShowTitle':
                    return new QQNode('show_title', 'ShowTitle', 'boolean', $this);
                case 'ShowDescription':
                    return new QQNode('show_description', 'ShowDescription', 'boolean', $this);
                case 'ContentBlockId':
                    return new QQNode('content_block_id', 'ContentBlockId', 'integer', $this);
                case 'ContentBlock':
                    return new QQNodeContentBlock('content_block_id', 'ContentBlock', 'integer', $this);
                case 'ParentModuleId':
                    return new QQNode('parent_module_id', 'ParentModuleId', 'integer', $this);
                case 'ParentModule':
                    return new QQNodeModule('parent_module_id', 'ParentModule', 'integer', $this);
                case 'ChildModule':
                    return new QQReverseReferenceNodeModule($this, 'childmodule', 'reverse_reference', 'parent_module_id');

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