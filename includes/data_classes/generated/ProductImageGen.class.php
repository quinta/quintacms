<?php
    /**
     * The abstract ProductImageGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the ProductImage subclass which
     * extends this ProductImageGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the ProductImage class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property integer $ProductId the value for intProductId (Not Null)
     * @property string $Title the value for strTitle 
     * @property string $AltTag the value for strAltTag 
     * @property string $Description the value for strDescription 
     * @property string $Uri the value for strUri 
     * @property integer $XSize the value for intXSize 
     * @property integer $YSize the value for intYSize 
     * @property integer $SizeType the value for intSizeType 
     * @property Product $Product the value for the Product object referenced by intProductId (Not Null)
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class ProductImageGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column product_image.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column product_image.product_id
         * @var integer intProductId
         *
         */
        protected $intProductId = null;


        /**
         * Protected member variable that maps to the database column product_image.title
         * @var string strTitle
         *
         */
        protected $strTitle = null;
        const TitleMaxLength = 128;


        /**
         * Protected member variable that maps to the database column product_image.alt_tag
         * @var string strAltTag
         *
         */
        protected $strAltTag = null;
        const AltTagMaxLength = 128;


        /**
         * Protected member variable that maps to the database column product_image.description
         * @var string strDescription
         *
         */
        protected $strDescription = null;
        const DescriptionMaxLength = 256;


        /**
         * Protected member variable that maps to the database column product_image.uri
         * @var string strUri
         *
         */
        protected $strUri = null;
        const UriMaxLength = 256;


        /**
         * Protected member variable that maps to the database column product_image.x_size
         * @var integer intXSize
         *
         */
        protected $intXSize = null;


        /**
         * Protected member variable that maps to the database column product_image.y_size
         * @var integer intYSize
         *
         */
        protected $intYSize = null;


        /**
         * Protected member variable that maps to the database column product_image.size_type
         * @var integer intSizeType
         *
         */
        protected $intSizeType = null;


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
         * in the database column product_image.product_id.
         *
         * NOTE: Always use the Product property getter to correctly retrieve this Product object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Product objProduct
         */
        protected $objProduct;



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
         * Load a ProductImage from PK Info
         * @param integer $intId
         * @return ProductImage
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return ProductImage::QuerySingle(
                QQ::Equal(QQN::ProductImage()->Id, $intId)
            );
        }

        /**
         * Load all ProductImages
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ProductImage[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call ProductImage::QueryArray to perform the LoadAll query
            try {
                return ProductImage::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all ProductImages
         * @return int
         */
        public static function CountAll() {
            // Call ProductImage::QueryCount to perform the CountAll query
            return ProductImage::QueryCount(QQ::All());
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
            $objDatabase = ProductImage::GetDatabase();

            // Create/Build out the QueryBuilder object with ProductImage-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'product_image');
            ProductImage::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('product_image');

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
         * Static Qcodo Query method to query for a single ProductImage object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ProductImage the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ProductImage::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new ProductImage object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ProductImage::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of ProductImage objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return ProductImage[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ProductImage::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return ProductImage::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of ProductImage objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = ProductImage::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = ProductImage::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'product_image_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with ProductImage-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                ProductImage::GetSelectFields($objQueryBuilder);
                ProductImage::GetFromFields($objQueryBuilder);

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
            return ProductImage::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this ProductImage
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'product_image';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'product_id', $strAliasPrefix . 'product_id');
            $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
            $objBuilder->AddSelectItem($strTableName, 'alt_tag', $strAliasPrefix . 'alt_tag');
            $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
            $objBuilder->AddSelectItem($strTableName, 'uri', $strAliasPrefix . 'uri');
            $objBuilder->AddSelectItem($strTableName, 'x_size', $strAliasPrefix . 'x_size');
            $objBuilder->AddSelectItem($strTableName, 'y_size', $strAliasPrefix . 'y_size');
            $objBuilder->AddSelectItem($strTableName, 'size_type', $strAliasPrefix . 'size_type');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a ProductImage from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this ProductImage::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return ProductImage
        */
        public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
            // If blank row, return null
            if (!$objDbRow)
                return null;


            // Create a new instance of the ProductImage object
            $objToReturn = new ProductImage();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'product_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'product_id'] : $strAliasPrefix . 'product_id';
            $objToReturn->intProductId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'title', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'title'] : $strAliasPrefix . 'title';
            $objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'alt_tag', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'alt_tag'] : $strAliasPrefix . 'alt_tag';
            $objToReturn->strAltTag = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'description'] : $strAliasPrefix . 'description';
            $objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'uri', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'uri'] : $strAliasPrefix . 'uri';
            $objToReturn->strUri = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'x_size', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'x_size'] : $strAliasPrefix . 'x_size';
            $objToReturn->intXSize = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'y_size', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'y_size'] : $strAliasPrefix . 'y_size';
            $objToReturn->intYSize = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'size_type', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'size_type'] : $strAliasPrefix . 'size_type';
            $objToReturn->intSizeType = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'product_image__';

            // Check for Product Early Binding
            $strAlias = $strAliasPrefix . 'product_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objProduct = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            return $objToReturn;
        }

        /**
         * Instantiate an array of ProductImages from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return ProductImage[]
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
                    $objItem = ProductImage::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = ProductImage::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single ProductImage object,
         * by Id Index(es)
         * @param integer $intId
         * @return ProductImage
        */
        public static function LoadById($intId) {
            return ProductImage::QuerySingle(
                QQ::Equal(QQN::ProductImage()->Id, $intId)
            );
        }
            
        /**
         * Load an array of ProductImage objects,
         * by SizeType Index(es)
         * @param integer $intSizeType
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ProductImage[]
        */
        public static function LoadArrayBySizeType($intSizeType, $objOptionalClauses = null) {
            // Call ProductImage::QueryArray to perform the LoadArrayBySizeType query
            try {
                return ProductImage::QueryArray(
                    QQ::Equal(QQN::ProductImage()->SizeType, $intSizeType),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ProductImages
         * by SizeType Index(es)
         * @param integer $intSizeType
         * @return int
        */
        public static function CountBySizeType($intSizeType) {
            // Call ProductImage::QueryCount to perform the CountBySizeType query
            return ProductImage::QueryCount(
                QQ::Equal(QQN::ProductImage()->SizeType, $intSizeType)
            );
        }
            
        /**
         * Load an array of ProductImage objects,
         * by ProductId Index(es)
         * @param integer $intProductId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ProductImage[]
        */
        public static function LoadArrayByProductId($intProductId, $objOptionalClauses = null) {
            // Call ProductImage::QueryArray to perform the LoadArrayByProductId query
            try {
                return ProductImage::QueryArray(
                    QQ::Equal(QQN::ProductImage()->ProductId, $intProductId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count ProductImages
         * by ProductId Index(es)
         * @param integer $intProductId
         * @return int
        */
        public static function CountByProductId($intProductId) {
            // Call ProductImage::QueryCount to perform the CountByProductId query
            return ProductImage::QueryCount(
                QQ::Equal(QQN::ProductImage()->ProductId, $intProductId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this ProductImage
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = ProductImage::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `product_image` (
                            `product_id`,
                            `title`,
                            `alt_tag`,
                            `description`,
                            `uri`,
                            `x_size`,
                            `y_size`,
                            `size_type`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->intProductId) . ',
                            ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            ' . $objDatabase->SqlVariable($this->strAltTag) . ',
                            ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            ' . $objDatabase->SqlVariable($this->strUri) . ',
                            ' . $objDatabase->SqlVariable($this->intXSize) . ',
                            ' . $objDatabase->SqlVariable($this->intYSize) . ',
                            ' . $objDatabase->SqlVariable($this->intSizeType) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('product_image', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `product_image`
                        SET
                            `product_id` = ' . $objDatabase->SqlVariable($this->intProductId) . ',
                            `title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
                            `alt_tag` = ' . $objDatabase->SqlVariable($this->strAltTag) . ',
                            `description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
                            `uri` = ' . $objDatabase->SqlVariable($this->strUri) . ',
                            `x_size` = ' . $objDatabase->SqlVariable($this->intXSize) . ',
                            `y_size` = ' . $objDatabase->SqlVariable($this->intYSize) . ',
                            `size_type` = ' . $objDatabase->SqlVariable($this->intSizeType) . '
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
         * Delete this ProductImage
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this ProductImage with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = ProductImage::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product_image`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all ProductImages
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = ProductImage::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product_image`');
        }

        /**
         * Truncate product_image table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = ProductImage::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `product_image`');
        }

        /**
         * Reload this ProductImage from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved ProductImage object.');

            // Reload the Object
            $objReloaded = ProductImage::Load($this->intId);

            // Update $this's local variables to match
            $this->ProductId = $objReloaded->ProductId;
            $this->strTitle = $objReloaded->strTitle;
            $this->strAltTag = $objReloaded->strAltTag;
            $this->strDescription = $objReloaded->strDescription;
            $this->strUri = $objReloaded->strUri;
            $this->intXSize = $objReloaded->intXSize;
            $this->intYSize = $objReloaded->intYSize;
            $this->SizeType = $objReloaded->SizeType;
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

                case 'ProductId':
                    /**
                     * Gets the value for intProductId (Not Null)
                     * @return integer
                     */
                    return $this->intProductId;

                case 'Title':
                    /**
                     * Gets the value for strTitle 
                     * @return string
                     */
                    return $this->strTitle;

                case 'AltTag':
                    /**
                     * Gets the value for strAltTag 
                     * @return string
                     */
                    return $this->strAltTag;

                case 'Description':
                    /**
                     * Gets the value for strDescription 
                     * @return string
                     */
                    return $this->strDescription;

                case 'Uri':
                    /**
                     * Gets the value for strUri 
                     * @return string
                     */
                    return $this->strUri;

                case 'XSize':
                    /**
                     * Gets the value for intXSize 
                     * @return integer
                     */
                    return $this->intXSize;

                case 'YSize':
                    /**
                     * Gets the value for intYSize 
                     * @return integer
                     */
                    return $this->intYSize;

                case 'SizeType':
                    /**
                     * Gets the value for intSizeType 
                     * @return integer
                     */
                    return $this->intSizeType;


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Product':
                    /**
                     * Gets the value for the Product object referenced by intProductId (Not Null)
                     * @return Product
                     */
                    try {
                        if ((!$this->objProduct) && (!is_null($this->intProductId)))
                            $this->objProduct = Product::Load($this->intProductId);
                        return $this->objProduct;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////


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
                case 'ProductId':
                    /**
                     * Sets the value for intProductId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objProduct = null;
                        return ($this->intProductId = QType::Cast($mixValue, QType::Integer));
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

                case 'AltTag':
                    /**
                     * Sets the value for strAltTag 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strAltTag = QType::Cast($mixValue, QType::String));
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

                case 'XSize':
                    /**
                     * Sets the value for intXSize 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intXSize = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'YSize':
                    /**
                     * Sets the value for intYSize 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intYSize = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'SizeType':
                    /**
                     * Sets the value for intSizeType 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intSizeType = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Product':
                    /**
                     * Sets the value for the Product object referenced by intProductId (Not Null)
                     * @param Product $mixValue
                     * @return Product
                     */
                    if (is_null($mixValue)) {
                        $this->intProductId = null;
                        $this->objProduct = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a Product object
                        try {
                            $mixValue = QType::Cast($mixValue, 'Product');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED Product object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved Product for this ProductImage');

                        // Update Local Member Variables
                        $this->objProduct = $mixValue;
                        $this->intProductId = $mixValue->Id;

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




    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeProductImage extends QQNode {
        protected $strTableName = 'product_image';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ProductImage';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'ProductId':
                    return new QQNode('product_id', 'ProductId', 'integer', $this);
                case 'Product':
                    return new QQNodeProduct('product_id', 'Product', 'integer', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'AltTag':
                    return new QQNode('alt_tag', 'AltTag', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'Uri':
                    return new QQNode('uri', 'Uri', 'string', $this);
                case 'XSize':
                    return new QQNode('x_size', 'XSize', 'integer', $this);
                case 'YSize':
                    return new QQNode('y_size', 'YSize', 'integer', $this);
                case 'SizeType':
                    return new QQNode('size_type', 'SizeType', 'integer', $this);

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

    class QQReverseReferenceNodeProductImage extends QQReverseReferenceNode {
        protected $strTableName = 'product_image';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'ProductImage';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'ProductId':
                    return new QQNode('product_id', 'ProductId', 'integer', $this);
                case 'Product':
                    return new QQNodeProduct('product_id', 'Product', 'integer', $this);
                case 'Title':
                    return new QQNode('title', 'Title', 'string', $this);
                case 'AltTag':
                    return new QQNode('alt_tag', 'AltTag', 'string', $this);
                case 'Description':
                    return new QQNode('description', 'Description', 'string', $this);
                case 'Uri':
                    return new QQNode('uri', 'Uri', 'string', $this);
                case 'XSize':
                    return new QQNode('x_size', 'XSize', 'integer', $this);
                case 'YSize':
                    return new QQNode('y_size', 'YSize', 'integer', $this);
                case 'SizeType':
                    return new QQNode('size_type', 'SizeType', 'integer', $this);

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