<?php
    /**
     * The abstract ProductCategoryGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the ProductCategory subclass which
     * extends this ProductCategoryGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ProductCategory class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property string $Name the value for strName (Unique)
     * @property string $Title the value for strTitle 
     * @property string $Description the value for strDescription 
     * @property string $ImageUri the value for strImageUri 
     * @property integer $ParentProductCategoryId the value for intParentProductCategoryId 
     * @property-read Product $_Product the value for the private _objProduct (Read-Only) if set due to an expansion on the product_product_category_assn association table
     * @property-read Product[] $_ProductArray the value for the private _objProductArray (Read-Only) if set due to an ExpandAsArray on the product_product_category_assn association table
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class ProductCategoryGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column product_category.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column product_category.name
         * @var string strName
         *
         */
        protected $strName = null;
        const NameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column product_category.title
         * @var string strTitle
         *
         */
        protected $strTitle = null;
        const TitleMaxLength = 128;


        /**
         * Protected member variable that maps to the database column product_category.description
         * @var string strDescription
         *
         */
        protected $strDescription = null;
        const DescriptionMaxLength = 256;


        /**
         * Protected member variable that maps to the database column product_category.image_uri
         * @var string strImageUri
         *
         */
        protected $strImageUri = null;
        const ImageUriMaxLength = 256;


        /**
         * Protected member variable that maps to the database column product_category.parent_product_category_id
         * @var integer intParentProductCategoryId
         *
         */
        protected $intParentProductCategoryId = null;


        /**
         * Private member variable that stores a reference to a single Product object
         * (of type Product), if this ProductCategory object was restored with
         * an expansion on the product_product_category_assn association table.
         * @var Product _objProduct;
         */
        private $_objProduct;

        /**
         * Private member variable that stores a reference to an array of Product objects
         * (of type Product[]), if this ProductCategory object was restored with
         * an ExpandAsArray on the product_product_category_assn association table.
         * @var Product[] _objProductArray;
         */
        private $_objProductArray = array();

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
         * Load a ProductCategory from PK Info
         * @param integer $intId
         * @return ProductCategory
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return ProductCategory::QuerySingle(
                QQ::Equal(QQN::ProductCategory()->Id, $intId)
            );
        }

        /**
         * Load all ProductCategories
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ProductCategory[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call ProductCategory::QueryArray to perform the LoadAll query
            try {
                return ProductCategory::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all ProductCategories
         * @return int
         */
        public static function CountAll() {
            // Call ProductCategory::QueryCount to perform the CountAll query
            return ProductCategory::QueryCount(QQ::All());
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
            $objDatabase = ProductCategory::GetDatabase();

            // Create/Build out the QueryBuilder object with ProductCategory-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'product_category');
            ProductCategory::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('product_category');

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
         * Static Qcodo Query method to query for a single ProductCategory object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ProductCategory the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ProductCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new ProductCategory object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ProductCategory::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of ProductCategory objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ProductCategory[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ProductCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ProductCategory::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of ProductCategory objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ProductCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = ProductCategory::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'product_category_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ProductCategory-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                ProductCategory::GetSelectFields($objQueryBuilder);
                ProductCategory::GetFromFields($objQueryBuilder);

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
            return ProductCategory::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this ProductCategory
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'product_category';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
            $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
            $objBuilder->AddSelectItem($strTableName, 'image_uri', $strAliasPrefix . 'image_uri');
            $objBuilder->AddSelectItem($strTableName, 'parent_product_category_id', $strAliasPrefix . 'parent_product_category_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a ProductCategory from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this ProductCategory::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return ProductCategory
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
                    $strAliasPrefix = 'product_category__';

                $strAlias = $strAliasPrefix . 'product__product_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objProductArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objProductArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'product__product_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objProductArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objProductArray[] = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'product__product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }


                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'product_category__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the ProductCategory object
            $objToReturn = new ProductCategory();
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
            $strAliasName = array_key_exists($strAliasPrefix . 'parent_product_category_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'parent_product_category_id'] : $strAliasPrefix . 'parent_product_category_id';
            $objToReturn->intParentProductCategoryId = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'product_category__';



            // Check for Product Virtual Binding
            $strAlias = $strAliasPrefix . 'product__product_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objProductArray[] = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'product__product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objProduct = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'product__product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }


            return $objToReturn;
        }

        /**
         * Instantiate an array of ProductCategories from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return ProductCategory[]
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
                    $objItem = ProductCategory::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = ProductCategory::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single ProductCategory object,
         * by Id Index(es)
         * @param integer $intId
         * @return ProductCategory
        */
        public static function LoadById($intId) {
            return ProductCategory::QuerySingle(
                QQ::Equal(QQN::ProductCategory()->Id, $intId)
            );
        }
            
        /**
         * Load a single ProductCategory object,
         * by Name Index(es)
         * @param string $strName
         * @return ProductCategory
        */
        public static function LoadByName($strName) {
            return ProductCategory::QuerySingle(
                QQ::Equal(QQN::ProductCategory()->Name, $strName)
            );
        }
            
        /**
         * Load an array of ProductCategory objects,
         * by ParentProductCategoryId Index(es)
         * @param integer $intParentProductCategoryId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ProductCategory[]
        */
        public static function LoadArrayByParentProductCategoryId($intParentProductCategoryId, $objOptionalClauses = null) {
            // Call ProductCategory::QueryArray to perform the LoadArrayByParentProductCategoryId query
            try {
                return ProductCategory::QueryArray(
                    QQ::Equal(QQN::ProductCategory()->ParentProductCategoryId, $intParentProductCategoryId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ProductCategories
         * by ParentProductCategoryId Index(es)
         * @param integer $intParentProductCategoryId
         * @return int
        */
        public static function CountByParentProductCategoryId($intParentProductCategoryId) {
            // Call ProductCategory::QueryCount to perform the CountByParentProductCategoryId query
            return ProductCategory::QueryCount(
                QQ::Equal(QQN::ProductCategory()->ParentProductCategoryId, $intParentProductCategoryId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////
            /**
         * Load an array of Product objects for a given Product
         * via the product_product_category_assn table
         * @param integer $intProductId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ProductCategory[]
        */
        public static function LoadArrayByProduct($intProductId, $objOptionalClauses = null) {
            // Call ProductCategory::QueryArray to perform the LoadArrayByProduct query
            try {
                return ProductCategory::QueryArray(
                    QQ::Equal(QQN::ProductCategory()->Product->ProductId, $intProductId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ProductCategories for a given Product
         * via the product_product_category_assn table
         * @param integer $intProductId
         * @return int
        */
        public static function CountByProduct($intProductId) {
            return ProductCategory::QueryCount(
                QQ::Equal(QQN::ProductCategory()->Product->ProductId, $intProductId)
            );
        }


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this ProductCategory
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = ProductCategory::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `product_category` (
                            `name`,
                            `title`,
                            `description`,
                            `image_uri`,
                            `parent_product_category_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->strName) . ',
                            ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            ' . $objDatabase->SqlVariable($this->strImageUri) . ',
                            ' . $objDatabase->SqlVariable($this->intParentProductCategoryId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('product_category', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `product_category`
                        SET
                            `name` = ' . $objDatabase->SqlVariable($this->strName) . ',
                            `title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            `description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            `image_uri` = ' . $objDatabase->SqlVariable($this->strImageUri) . ',
                            `parent_product_category_id` = ' . $objDatabase->SqlVariable($this->intParentProductCategoryId) . '
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
         * Delete this ProductCategory
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this ProductCategory with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = ProductCategory::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product_category`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all ProductCategories
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = ProductCategory::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product_category`');
        }

        /**
         * Truncate product_category table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = ProductCategory::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `product_category`');
        }

        /**
         * Reload this ProductCategory from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved ProductCategory object.');

            // Reload the Object
            $objReloaded = ProductCategory::Load($this->intId);

            // Update $this's local variables to match
            $this->strName = $objReloaded->strName;
            $this->strTitle = $objReloaded->strTitle;
            $this->strDescription = $objReloaded->strDescription;
            $this->strImageUri = $objReloaded->strImageUri;
            $this->intParentProductCategoryId = $objReloaded->intParentProductCategoryId;
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

                case 'ParentProductCategoryId':
                    /**
                     * Gets the value for intParentProductCategoryId 
                     * @return integer
                     */
                    return $this->intParentProductCategoryId;


                ///////////////////
                // Member Objects
                ///////////////////

                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_Product':
                    /**
                     * Gets the value for the private _objProduct (Read-Only)
                     * if set due to an expansion on the product_product_category_assn association table
                     * @return Product
                     */
                    return $this->_objProduct;

                case '_ProductArray':
                    /**
                     * Gets the value for the private _objProductArray (Read-Only)
                     * if set due to an ExpandAsArray on the product_product_category_assn association table
                     * @return Product[]
                     */
                    return (array) $this->_objProductArray;


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

                case 'ParentProductCategoryId':
                    /**
                     * Sets the value for intParentProductCategoryId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intParentProductCategoryId = QType::Cast($mixValue, QType::Integer));
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

            
        // Related Many-to-Many Objects' Methods for Product
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated Products as an array of Product objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */ 
        public function GetProductArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Product::LoadArrayByProductCategory($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated Products
         * @return int
        */ 
        public function CountProducts() {
            if ((is_null($this->intId)))
                return 0;

            return Product::CountByProductCategory($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific Product
         * @param Product $objProduct
         * @return bool
        */
        public function IsProductAssociated(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsProductAssociated on this unsaved ProductCategory.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsProductAssociated on this ProductCategory with an unsaved Product.');

            $intRowCount = ProductCategory::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::ProductCategory()->Id, $this->intId),
                    QQ::Equal(QQN::ProductCategory()->Product->ProductId, $objProduct->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a Product
         * @param Product $objProduct
         * @return void
        */ 
        public function AssociateProduct(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProduct on this unsaved ProductCategory.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProduct on this ProductCategory with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = ProductCategory::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `product_product_category_assn` (
                    `product_category_id`,
                    `product_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objProduct->Id) . '
                )
            ');
        }

        /**
         * Unassociates a Product
         * @param Product $objProduct
         * @return void
        */ 
        public function UnassociateProduct(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProduct on this unsaved ProductCategory.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProduct on this ProductCategory with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = ProductCategory::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product_product_category_assn`
                WHERE
                    `product_category_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objProduct->Id) . '
            ');
        }

        /**
         * Unassociates all Products
         * @return void
        */ 
        public function UnassociateAllProducts() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllProductArray on this unsaved ProductCategory.');

            // Get the Database Object for this Class
            $objDatabase = ProductCategory::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product_product_category_assn`
                WHERE
                    `product_category_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }



    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeProductCategoryProduct extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'product';

        protected $strTableName = 'product_product_category_assn';
        protected $strPrimaryKey = 'product_category_id';
        protected $strClassName = 'Product';

        public function __get($strName) {
            switch ($strName) {
                case 'ProductId':
                    return new QQNode('product_id', 'ProductId', 'integer', $this);
                case 'Product':
                    return new QQNodeProduct('product_id', 'ProductId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeProduct('product_id', 'ProductId', 'integer', $this);
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

    class QQNodeProductCategory extends QQNode {
        protected $strTableName = 'product_category';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ProductCategory';
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
                case 'ParentProductCategoryId':
                    return new QQNode('parent_product_category_id', 'ParentProductCategoryId', 'integer', $this);
                case 'Product':
                    return new QQNodeProductCategoryProduct($this);

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

    class QQReverseReferenceNodeProductCategory extends QQReverseReferenceNode {
        protected $strTableName = 'product_category';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ProductCategory';
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
                case 'ParentProductCategoryId':
                    return new QQNode('parent_product_category_id', 'ParentProductCategoryId', 'integer', $this);
                case 'Product':
                    return new QQNodeProductCategoryProduct($this);

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