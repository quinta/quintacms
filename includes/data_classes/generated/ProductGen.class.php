<?php
    /**
     * The abstract ProductGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the Product subclass which
     * extends this ProductGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the Product class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property integer $ManufacturerId the value for intManufacturerId 
     * @property integer $SupplierId the value for intSupplierId 
     * @property-read string $CreationDate the value for strCreationDate (Read-Only Timestamp)
     * @property string $Name the value for strName (Not Null)
     * @property string $Model the value for strModel (Unique)
     * @property string $ShortDescription the value for strShortDescription 
     * @property string $LongDescription the value for strLongDescription 
     * @property double $Msrp the value for fltMsrp 
     * @property double $WholesalePrice the value for fltWholesalePrice 
     * @property double $RetailPrice the value for fltRetailPrice 
     * @property double $Cost the value for fltCost 
     * @property double $Weight the value for fltWeight 
     * @property double $Height the value for fltHeight 
     * @property double $Width the value for fltWidth 
     * @property double $Depth the value for fltDepth 
     * @property boolean $IsVirtual the value for blnIsVirtual (Not Null)
     * @property integer $TypeId the value for intTypeId (Not Null)
     * @property integer $StatusId the value for intStatusId (Not Null)
     * @property integer $ViewCount the value for intViewCount 
     * @property Person $Manufacturer the value for the Person object referenced by intManufacturerId 
     * @property Person $Supplier the value for the Person object referenced by intSupplierId 
     * @property-read ProductCategory $_ProductCategory the value for the private _objProductCategory (Read-Only) if set due to an expansion on the product_product_category_assn association table
     * @property-read ProductCategory[] $_ProductCategoryArray the value for the private _objProductCategoryArray (Read-Only) if set due to an ExpandAsArray on the product_product_category_assn association table
     * @property-read Product $_ParentProductAsRelated the value for the private _objParentProductAsRelated (Read-Only) if set due to an expansion on the related_product_assn association table
     * @property-read Product[] $_ParentProductAsRelatedArray the value for the private _objParentProductAsRelatedArray (Read-Only) if set due to an ExpandAsArray on the related_product_assn association table
     * @property-read Product $_ProductAsRelated the value for the private _objProductAsRelated (Read-Only) if set due to an expansion on the related_product_assn association table
     * @property-read Product[] $_ProductAsRelatedArray the value for the private _objProductAsRelatedArray (Read-Only) if set due to an ExpandAsArray on the related_product_assn association table
     * @property-read OrderItem $_OrderItem the value for the private _objOrderItem (Read-Only) if set due to an expansion on the order_item.product_id reverse relationship
     * @property-read OrderItem[] $_OrderItemArray the value for the private _objOrderItemArray (Read-Only) if set due to an ExpandAsArray on the order_item.product_id reverse relationship
     * @property-read ProductImage $_ProductImage the value for the private _objProductImage (Read-Only) if set due to an expansion on the product_image.product_id reverse relationship
     * @property-read ProductImage[] $_ProductImageArray the value for the private _objProductImageArray (Read-Only) if set due to an ExpandAsArray on the product_image.product_id reverse relationship
     * @property-read ShoppingCartItem $_ShoppingCartItem the value for the private _objShoppingCartItem (Read-Only) if set due to an expansion on the shopping_cart_item.product_id reverse relationship
     * @property-read ShoppingCartItem[] $_ShoppingCartItemArray the value for the private _objShoppingCartItemArray (Read-Only) if set due to an ExpandAsArray on the shopping_cart_item.product_id reverse relationship
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class ProductGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column product.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column product.manufacturer_id
         * @var integer intManufacturerId
         *
         */
        protected $intManufacturerId = null;


        /**
         * Protected member variable that maps to the database column product.supplier_id
         * @var integer intSupplierId
         *
         */
        protected $intSupplierId = null;


        /**
         * Protected member variable that maps to the database column product.creation_date
         * @var string strCreationDate
         *
         */
        protected $strCreationDate = null;


        /**
         * Protected member variable that maps to the database column product.name
         * @var string strName
         *
         */
        protected $strName = null;
        const NameMaxLength = 128;


        /**
         * Protected member variable that maps to the database column product.model
         * @var string strModel
         *
         */
        protected $strModel = null;
        const ModelMaxLength = 128;


        /**
         * Protected member variable that maps to the database column product.short_description
         * @var string strShortDescription
         *
         */
        protected $strShortDescription = null;
        const ShortDescriptionMaxLength = 128;


        /**
         * Protected member variable that maps to the database column product.long_description
         * @var string strLongDescription
         *
         */
        protected $strLongDescription = null;


        /**
         * Protected member variable that maps to the database column product.msrp
         * @var double fltMsrp
         *
         */
        protected $fltMsrp = null;


        /**
         * Protected member variable that maps to the database column product.wholesale_price
         * @var double fltWholesalePrice
         *
         */
        protected $fltWholesalePrice = null;


        /**
         * Protected member variable that maps to the database column product.retail_price
         * @var double fltRetailPrice
         *
         */
        protected $fltRetailPrice = null;


        /**
         * Protected member variable that maps to the database column product.cost
         * @var double fltCost
         *
         */
        protected $fltCost = null;


        /**
         * Protected member variable that maps to the database column product.weight
         * @var double fltWeight
         *
         */
        protected $fltWeight = null;


        /**
         * Protected member variable that maps to the database column product.height
         * @var double fltHeight
         *
         */
        protected $fltHeight = null;


        /**
         * Protected member variable that maps to the database column product.width
         * @var double fltWidth
         *
         */
        protected $fltWidth = null;


        /**
         * Protected member variable that maps to the database column product.depth
         * @var double fltDepth
         *
         */
        protected $fltDepth = null;


        /**
         * Protected member variable that maps to the database column product.is_virtual
         * @var boolean blnIsVirtual
         *
         */
        protected $blnIsVirtual = null;


        /**
         * Protected member variable that maps to the database column product.type_id
         * @var integer intTypeId
         *
         */
        protected $intTypeId = null;


        /**
         * Protected member variable that maps to the database column product.status_id
         * @var integer intStatusId
         *
         */
        protected $intStatusId = null;


        /**
         * Protected member variable that maps to the database column product.view_count
         * @var integer intViewCount
         *
         */
        protected $intViewCount = null;


        /**
         * Private member variable that stores a reference to a single ProductCategory object
         * (of type ProductCategory), if this Product object was restored with
         * an expansion on the product_product_category_assn association table.
         * @var ProductCategory _objProductCategory;
         */
        private $_objProductCategory;

        /**
         * Private member variable that stores a reference to an array of ProductCategory objects
         * (of type ProductCategory[]), if this Product object was restored with
         * an ExpandAsArray on the product_product_category_assn association table.
         * @var ProductCategory[] _objProductCategoryArray;
         */
        private $_objProductCategoryArray = array();

        /**
         * Private member variable that stores a reference to a single ParentProductAsRelated object
         * (of type Product), if this Product object was restored with
         * an expansion on the related_product_assn association table.
         * @var Product _objParentProductAsRelated;
         */
        private $_objParentProductAsRelated;

        /**
         * Private member variable that stores a reference to an array of ParentProductAsRelated objects
         * (of type Product[]), if this Product object was restored with
         * an ExpandAsArray on the related_product_assn association table.
         * @var Product[] _objParentProductAsRelatedArray;
         */
        private $_objParentProductAsRelatedArray = array();

        /**
         * Private member variable that stores a reference to a single ProductAsRelated object
         * (of type Product), if this Product object was restored with
         * an expansion on the related_product_assn association table.
         * @var Product _objProductAsRelated;
         */
        private $_objProductAsRelated;

        /**
         * Private member variable that stores a reference to an array of ProductAsRelated objects
         * (of type Product[]), if this Product object was restored with
         * an ExpandAsArray on the related_product_assn association table.
         * @var Product[] _objProductAsRelatedArray;
         */
        private $_objProductAsRelatedArray = array();

        /**
         * Private member variable that stores a reference to a single OrderItem object
         * (of type OrderItem), if this Product object was restored with
         * an expansion on the order_item association table.
         * @var OrderItem _objOrderItem;
         */
        private $_objOrderItem;

        /**
         * Private member variable that stores a reference to an array of OrderItem objects
         * (of type OrderItem[]), if this Product object was restored with
         * an ExpandAsArray on the order_item association table.
         * @var OrderItem[] _objOrderItemArray;
         */
        private $_objOrderItemArray = array();

        /**
         * Private member variable that stores a reference to a single ProductImage object
         * (of type ProductImage), if this Product object was restored with
         * an expansion on the product_image association table.
         * @var ProductImage _objProductImage;
         */
        private $_objProductImage;

        /**
         * Private member variable that stores a reference to an array of ProductImage objects
         * (of type ProductImage[]), if this Product object was restored with
         * an ExpandAsArray on the product_image association table.
         * @var ProductImage[] _objProductImageArray;
         */
        private $_objProductImageArray = array();

        /**
         * Private member variable that stores a reference to a single ShoppingCartItem object
         * (of type ShoppingCartItem), if this Product object was restored with
         * an expansion on the shopping_cart_item association table.
         * @var ShoppingCartItem _objShoppingCartItem;
         */
        private $_objShoppingCartItem;

        /**
         * Private member variable that stores a reference to an array of ShoppingCartItem objects
         * (of type ShoppingCartItem[]), if this Product object was restored with
         * an ExpandAsArray on the shopping_cart_item association table.
         * @var ShoppingCartItem[] _objShoppingCartItemArray;
         */
        private $_objShoppingCartItemArray = array();

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
         * in the database column product.manufacturer_id.
         *
         * NOTE: Always use the Manufacturer property getter to correctly retrieve this Person object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Person objManufacturer
         */
        protected $objManufacturer;

        /**
         * Protected member variable that contains the object pointed by the reference
         * in the database column product.supplier_id.
         *
         * NOTE: Always use the Supplier property getter to correctly retrieve this Person object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Person objSupplier
         */
        protected $objSupplier;



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
         * Load a Product from PK Info
         * @param integer $intId
         * @return Product
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return Product::QuerySingle(
                QQ::Equal(QQN::Product()->Id, $intId)
            );
        }

        /**
         * Load all Products
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call Product::QueryArray to perform the LoadAll query
            try {
                return Product::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all Products
         * @return int
         */
        public static function CountAll() {
            // Call Product::QueryCount to perform the CountAll query
            return Product::QueryCount(QQ::All());
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
            $objDatabase = Product::GetDatabase();

            // Create/Build out the QueryBuilder object with Product-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'product');
            Product::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('product');

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
         * Static Qcodo Query method to query for a single Product object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Product the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Product::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new Product object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Product::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of Product objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Product[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Product::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Product::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of Product objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Product::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = Product::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'product_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Product-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                Product::GetSelectFields($objQueryBuilder);
                Product::GetFromFields($objQueryBuilder);

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
            return Product::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this Product
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'product';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'manufacturer_id', $strAliasPrefix . 'manufacturer_id');
            $objBuilder->AddSelectItem($strTableName, 'supplier_id', $strAliasPrefix . 'supplier_id');
            $objBuilder->AddSelectItem($strTableName, 'creation_date', $strAliasPrefix . 'creation_date');
            $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            $objBuilder->AddSelectItem($strTableName, 'model', $strAliasPrefix . 'model');
            $objBuilder->AddSelectItem($strTableName, 'short_description', $strAliasPrefix . 'short_description');
            $objBuilder->AddSelectItem($strTableName, 'long_description', $strAliasPrefix . 'long_description');
            $objBuilder->AddSelectItem($strTableName, 'msrp', $strAliasPrefix . 'msrp');
            $objBuilder->AddSelectItem($strTableName, 'wholesale_price', $strAliasPrefix . 'wholesale_price');
            $objBuilder->AddSelectItem($strTableName, 'retail_price', $strAliasPrefix . 'retail_price');
            $objBuilder->AddSelectItem($strTableName, 'cost', $strAliasPrefix . 'cost');
            $objBuilder->AddSelectItem($strTableName, 'weight', $strAliasPrefix . 'weight');
            $objBuilder->AddSelectItem($strTableName, 'height', $strAliasPrefix . 'height');
            $objBuilder->AddSelectItem($strTableName, 'width', $strAliasPrefix . 'width');
            $objBuilder->AddSelectItem($strTableName, 'depth', $strAliasPrefix . 'depth');
            $objBuilder->AddSelectItem($strTableName, 'is_virtual', $strAliasPrefix . 'is_virtual');
            $objBuilder->AddSelectItem($strTableName, 'type_id', $strAliasPrefix . 'type_id');
            $objBuilder->AddSelectItem($strTableName, 'status_id', $strAliasPrefix . 'status_id');
            $objBuilder->AddSelectItem($strTableName, 'view_count', $strAliasPrefix . 'view_count');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a Product from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this Product::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return Product
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
                    $strAliasPrefix = 'product__';

                $strAlias = $strAliasPrefix . 'productcategory__product_category_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objProductCategoryArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objProductCategoryArray[$intPreviousChildItemCount - 1];
                        $objChildItem = ProductCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productcategory__product_category_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objProductCategoryArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objProductCategoryArray[] = ProductCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productcategory__product_category_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'parentproductasrelated__related_product_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objParentProductAsRelatedArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objParentProductAsRelatedArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentproductasrelated__related_product_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objParentProductAsRelatedArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objParentProductAsRelatedArray[] = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentproductasrelated__related_product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'productasrelated__product_id__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objProductAsRelatedArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objProductAsRelatedArray[$intPreviousChildItemCount - 1];
                        $objChildItem = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productasrelated__product_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objProductAsRelatedArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objProductAsRelatedArray[] = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productasrelated__product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }


                $strAlias = $strAliasPrefix . 'orderitem__order_id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objOrderItemArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objOrderItemArray[$intPreviousChildItemCount - 1];
                        $objChildItem = OrderItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderitem__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objOrderItemArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objOrderItemArray[] = OrderItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'productimage__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objProductImageArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objProductImageArray[$intPreviousChildItemCount - 1];
                        $objChildItem = ProductImage::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productimage__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objProductImageArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objProductImageArray[] = ProductImage::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productimage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'shoppingcartitem__shopping_cart_id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objShoppingCartItemArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objShoppingCartItemArray[$intPreviousChildItemCount - 1];
                        $objChildItem = ShoppingCartItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcartitem__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objShoppingCartItemArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objShoppingCartItemArray[] = ShoppingCartItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcartitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'product__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the Product object
            $objToReturn = new Product();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'manufacturer_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'manufacturer_id'] : $strAliasPrefix . 'manufacturer_id';
            $objToReturn->intManufacturerId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'supplier_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'supplier_id'] : $strAliasPrefix . 'supplier_id';
            $objToReturn->intSupplierId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'creation_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'creation_date'] : $strAliasPrefix . 'creation_date';
            $objToReturn->strCreationDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
            $objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'model', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'model'] : $strAliasPrefix . 'model';
            $objToReturn->strModel = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'short_description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'short_description'] : $strAliasPrefix . 'short_description';
            $objToReturn->strShortDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'long_description', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'long_description'] : $strAliasPrefix . 'long_description';
            $objToReturn->strLongDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
            $strAliasName = array_key_exists($strAliasPrefix . 'msrp', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'msrp'] : $strAliasPrefix . 'msrp';
            $objToReturn->fltMsrp = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'wholesale_price', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'wholesale_price'] : $strAliasPrefix . 'wholesale_price';
            $objToReturn->fltWholesalePrice = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'retail_price', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'retail_price'] : $strAliasPrefix . 'retail_price';
            $objToReturn->fltRetailPrice = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'cost', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cost'] : $strAliasPrefix . 'cost';
            $objToReturn->fltCost = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'weight', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'weight'] : $strAliasPrefix . 'weight';
            $objToReturn->fltWeight = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'height', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'height'] : $strAliasPrefix . 'height';
            $objToReturn->fltHeight = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'width', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'width'] : $strAliasPrefix . 'width';
            $objToReturn->fltWidth = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'depth', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'depth'] : $strAliasPrefix . 'depth';
            $objToReturn->fltDepth = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'is_virtual', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'is_virtual'] : $strAliasPrefix . 'is_virtual';
            $objToReturn->blnIsVirtual = $objDbRow->GetColumn($strAliasName, 'Bit');
            $strAliasName = array_key_exists($strAliasPrefix . 'type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'type_id'] : $strAliasPrefix . 'type_id';
            $objToReturn->intTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'status_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'status_id'] : $strAliasPrefix . 'status_id';
            $objToReturn->intStatusId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'view_count', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'view_count'] : $strAliasPrefix . 'view_count';
            $objToReturn->intViewCount = $objDbRow->GetColumn($strAliasName, 'Integer');

            // Instantiate Virtual Attributes
            foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
                $strVirtualPrefix = $strAliasPrefix . '__';
                $strVirtualPrefixLength = strlen($strVirtualPrefix);
                if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                    $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
            }

            // Prepare to Check for Early/Virtual Binding
            if (!$strAliasPrefix)
                $strAliasPrefix = 'product__';

            // Check for Manufacturer Early Binding
            $strAlias = $strAliasPrefix . 'manufacturer_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objManufacturer = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'manufacturer_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

            // Check for Supplier Early Binding
            $strAlias = $strAliasPrefix . 'supplier_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objSupplier = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'supplier_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



            // Check for ProductCategory Virtual Binding
            $strAlias = $strAliasPrefix . 'productcategory__product_category_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objProductCategoryArray[] = ProductCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productcategory__product_category_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objProductCategory = ProductCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productcategory__product_category_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for ParentProductAsRelated Virtual Binding
            $strAlias = $strAliasPrefix . 'parentproductasrelated__related_product_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objParentProductAsRelatedArray[] = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentproductasrelated__related_product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objParentProductAsRelated = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentproductasrelated__related_product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for ProductAsRelated Virtual Binding
            $strAlias = $strAliasPrefix . 'productasrelated__product_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objProductAsRelatedArray[] = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productasrelated__product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objProductAsRelated = Product::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productasrelated__product_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }


            // Check for OrderItem Virtual Binding
            $strAlias = $strAliasPrefix . 'orderitem__order_id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objOrderItemArray[] = OrderItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objOrderItem = OrderItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for ProductImage Virtual Binding
            $strAlias = $strAliasPrefix . 'productimage__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objProductImageArray[] = ProductImage::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productimage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objProductImage = ProductImage::InstantiateDbRow($objDbRow, $strAliasPrefix . 'productimage__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for ShoppingCartItem Virtual Binding
            $strAlias = $strAliasPrefix . 'shoppingcartitem__shopping_cart_id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objShoppingCartItemArray[] = ShoppingCartItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcartitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objShoppingCartItem = ShoppingCartItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shoppingcartitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }

        /**
         * Instantiate an array of Products from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return Product[]
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
                    $objItem = Product::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = Product::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single Product object,
         * by Id Index(es)
         * @param integer $intId
         * @return Product
        */
        public static function LoadById($intId) {
            return Product::QuerySingle(
                QQ::Equal(QQN::Product()->Id, $intId)
            );
        }
            
        /**
         * Load a single Product object,
         * by Model Index(es)
         * @param string $strModel
         * @return Product
        */
        public static function LoadByModel($strModel) {
            return Product::QuerySingle(
                QQ::Equal(QQN::Product()->Model, $strModel)
            );
        }
            
        /**
         * Load an array of Product objects,
         * by RetailPrice Index(es)
         * @param double $fltRetailPrice
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */
        public static function LoadArrayByRetailPrice($fltRetailPrice, $objOptionalClauses = null) {
            // Call Product::QueryArray to perform the LoadArrayByRetailPrice query
            try {
                return Product::QueryArray(
                    QQ::Equal(QQN::Product()->RetailPrice, $fltRetailPrice),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Products
         * by RetailPrice Index(es)
         * @param double $fltRetailPrice
         * @return int
        */
        public static function CountByRetailPrice($fltRetailPrice) {
            // Call Product::QueryCount to perform the CountByRetailPrice query
            return Product::QueryCount(
                QQ::Equal(QQN::Product()->RetailPrice, $fltRetailPrice)
            );
        }
            
        /**
         * Load an array of Product objects,
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */
        public static function LoadArrayByTypeId($intTypeId, $objOptionalClauses = null) {
            // Call Product::QueryArray to perform the LoadArrayByTypeId query
            try {
                return Product::QueryArray(
                    QQ::Equal(QQN::Product()->TypeId, $intTypeId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Products
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @return int
        */
        public static function CountByTypeId($intTypeId) {
            // Call Product::QueryCount to perform the CountByTypeId query
            return Product::QueryCount(
                QQ::Equal(QQN::Product()->TypeId, $intTypeId)
            );
        }
            
        /**
         * Load an array of Product objects,
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */
        public static function LoadArrayByStatusId($intStatusId, $objOptionalClauses = null) {
            // Call Product::QueryArray to perform the LoadArrayByStatusId query
            try {
                return Product::QueryArray(
                    QQ::Equal(QQN::Product()->StatusId, $intStatusId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Products
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @return int
        */
        public static function CountByStatusId($intStatusId) {
            // Call Product::QueryCount to perform the CountByStatusId query
            return Product::QueryCount(
                QQ::Equal(QQN::Product()->StatusId, $intStatusId)
            );
        }
            
        /**
         * Load an array of Product objects,
         * by ManufacturerId Index(es)
         * @param integer $intManufacturerId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */
        public static function LoadArrayByManufacturerId($intManufacturerId, $objOptionalClauses = null) {
            // Call Product::QueryArray to perform the LoadArrayByManufacturerId query
            try {
                return Product::QueryArray(
                    QQ::Equal(QQN::Product()->ManufacturerId, $intManufacturerId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Products
         * by ManufacturerId Index(es)
         * @param integer $intManufacturerId
         * @return int
        */
        public static function CountByManufacturerId($intManufacturerId) {
            // Call Product::QueryCount to perform the CountByManufacturerId query
            return Product::QueryCount(
                QQ::Equal(QQN::Product()->ManufacturerId, $intManufacturerId)
            );
        }
            
        /**
         * Load an array of Product objects,
         * by SupplierId Index(es)
         * @param integer $intSupplierId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */
        public static function LoadArrayBySupplierId($intSupplierId, $objOptionalClauses = null) {
            // Call Product::QueryArray to perform the LoadArrayBySupplierId query
            try {
                return Product::QueryArray(
                    QQ::Equal(QQN::Product()->SupplierId, $intSupplierId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Products
         * by SupplierId Index(es)
         * @param integer $intSupplierId
         * @return int
        */
        public static function CountBySupplierId($intSupplierId) {
            // Call Product::QueryCount to perform the CountBySupplierId query
            return Product::QueryCount(
                QQ::Equal(QQN::Product()->SupplierId, $intSupplierId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////
            /**
         * Load an array of ProductCategory objects for a given ProductCategory
         * via the product_product_category_assn table
         * @param integer $intProductCategoryId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */
        public static function LoadArrayByProductCategory($intProductCategoryId, $objOptionalClauses = null) {
            // Call Product::QueryArray to perform the LoadArrayByProductCategory query
            try {
                return Product::QueryArray(
                    QQ::Equal(QQN::Product()->ProductCategory->ProductCategoryId, $intProductCategoryId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Products for a given ProductCategory
         * via the product_product_category_assn table
         * @param integer $intProductCategoryId
         * @return int
        */
        public static function CountByProductCategory($intProductCategoryId) {
            return Product::QueryCount(
                QQ::Equal(QQN::Product()->ProductCategory->ProductCategoryId, $intProductCategoryId)
            );
        }
            /**
         * Load an array of Product objects for a given ParentProductAsRelated
         * via the related_product_assn table
         * @param integer $intRelatedProductId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */
        public static function LoadArrayByParentProductAsRelated($intRelatedProductId, $objOptionalClauses = null) {
            // Call Product::QueryArray to perform the LoadArrayByParentProductAsRelated query
            try {
                return Product::QueryArray(
                    QQ::Equal(QQN::Product()->ParentProductAsRelated->RelatedProductId, $intRelatedProductId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Products for a given ParentProductAsRelated
         * via the related_product_assn table
         * @param integer $intRelatedProductId
         * @return int
        */
        public static function CountByParentProductAsRelated($intRelatedProductId) {
            return Product::QueryCount(
                QQ::Equal(QQN::Product()->ParentProductAsRelated->RelatedProductId, $intRelatedProductId)
            );
        }
            /**
         * Load an array of Product objects for a given ProductAsRelated
         * via the related_product_assn table
         * @param integer $intProductId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */
        public static function LoadArrayByProductAsRelated($intProductId, $objOptionalClauses = null) {
            // Call Product::QueryArray to perform the LoadArrayByProductAsRelated query
            try {
                return Product::QueryArray(
                    QQ::Equal(QQN::Product()->ProductAsRelated->ProductId, $intProductId),
                    $objOptionalClauses
                );
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Products for a given ProductAsRelated
         * via the related_product_assn table
         * @param integer $intProductId
         * @return int
        */
        public static function CountByProductAsRelated($intProductId) {
            return Product::QueryCount(
                QQ::Equal(QQN::Product()->ProductAsRelated->ProductId, $intProductId)
            );
        }


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this Product
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `product` (
                            `manufacturer_id`,
                            `supplier_id`,
                            `name`,
                            `model`,
                            `short_description`,
                            `long_description`,
                            `msrp`,
                            `wholesale_price`,
                            `retail_price`,
                            `cost`,
                            `weight`,
                            `height`,
                            `width`,
                            `depth`,
                            `is_virtual`,
                            `type_id`,
                            `status_id`,
                            `view_count`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->intManufacturerId) . ',
                            ' . $objDatabase->SqlVariable($this->intSupplierId) . ',
                            ' . $objDatabase->SqlVariable($this->strName) . ',
                            ' . $objDatabase->SqlVariable($this->strModel) . ',
                            ' . $objDatabase->SqlVariable($this->strShortDescription) . ',
                            ' . $objDatabase->SqlVariable($this->strLongDescription) . ',
                            ' . $objDatabase->SqlVariable($this->fltMsrp) . ',
                            ' . $objDatabase->SqlVariable($this->fltWholesalePrice) . ',
                            ' . $objDatabase->SqlVariable($this->fltRetailPrice) . ',
                            ' . $objDatabase->SqlVariable($this->fltCost) . ',
                            ' . $objDatabase->SqlVariable($this->fltWeight) . ',
                            ' . $objDatabase->SqlVariable($this->fltHeight) . ',
                            ' . $objDatabase->SqlVariable($this->fltWidth) . ',
                            ' . $objDatabase->SqlVariable($this->fltDepth) . ',
                            ' . $objDatabase->SqlVariable($this->blnIsVirtual) . ',
                            ' . $objDatabase->SqlVariable($this->intTypeId) . ',
                            ' . $objDatabase->SqlVariable($this->intStatusId) . ',
                            ' . $objDatabase->SqlVariable($this->intViewCount) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('product', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `creation_date`
                            FROM
                                `product`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strCreationDate)
                            throw new QOptimisticLockingException('Product');
                    }

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `product`
                        SET
                            `manufacturer_id` = ' . $objDatabase->SqlVariable($this->intManufacturerId) . ',
                            `supplier_id` = ' . $objDatabase->SqlVariable($this->intSupplierId) . ',
                            `name` = ' . $objDatabase->SqlVariable($this->strName) . ',
                            `model` = ' . $objDatabase->SqlVariable($this->strModel) . ',
                            `short_description` = ' . $objDatabase->SqlVariable($this->strShortDescription) . ',
                            `long_description` = ' . $objDatabase->SqlVariable($this->strLongDescription) . ',
                            `msrp` = ' . $objDatabase->SqlVariable($this->fltMsrp) . ',
                            `wholesale_price` = ' . $objDatabase->SqlVariable($this->fltWholesalePrice) . ',
                            `retail_price` = ' . $objDatabase->SqlVariable($this->fltRetailPrice) . ',
                            `cost` = ' . $objDatabase->SqlVariable($this->fltCost) . ',
                            `weight` = ' . $objDatabase->SqlVariable($this->fltWeight) . ',
                            `height` = ' . $objDatabase->SqlVariable($this->fltHeight) . ',
                            `width` = ' . $objDatabase->SqlVariable($this->fltWidth) . ',
                            `depth` = ' . $objDatabase->SqlVariable($this->fltDepth) . ',
                            `is_virtual` = ' . $objDatabase->SqlVariable($this->blnIsVirtual) . ',
                            `type_id` = ' . $objDatabase->SqlVariable($this->intTypeId) . ',
                            `status_id` = ' . $objDatabase->SqlVariable($this->intStatusId) . ',
                            `view_count` = ' . $objDatabase->SqlVariable($this->intViewCount) . '
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
                    `product`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
                        
            $objRow = $objResult->FetchArray();
            $this->strCreationDate = $objRow[0];

            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this Product
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this Product with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all Products
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product`');
        }

        /**
         * Truncate product table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `product`');
        }

        /**
         * Reload this Product from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved Product object.');

            // Reload the Object
            $objReloaded = Product::Load($this->intId);

            // Update $this's local variables to match
            $this->ManufacturerId = $objReloaded->ManufacturerId;
            $this->SupplierId = $objReloaded->SupplierId;
            $this->strCreationDate = $objReloaded->strCreationDate;
            $this->strName = $objReloaded->strName;
            $this->strModel = $objReloaded->strModel;
            $this->strShortDescription = $objReloaded->strShortDescription;
            $this->strLongDescription = $objReloaded->strLongDescription;
            $this->fltMsrp = $objReloaded->fltMsrp;
            $this->fltWholesalePrice = $objReloaded->fltWholesalePrice;
            $this->fltRetailPrice = $objReloaded->fltRetailPrice;
            $this->fltCost = $objReloaded->fltCost;
            $this->fltWeight = $objReloaded->fltWeight;
            $this->fltHeight = $objReloaded->fltHeight;
            $this->fltWidth = $objReloaded->fltWidth;
            $this->fltDepth = $objReloaded->fltDepth;
            $this->blnIsVirtual = $objReloaded->blnIsVirtual;
            $this->TypeId = $objReloaded->TypeId;
            $this->StatusId = $objReloaded->StatusId;
            $this->intViewCount = $objReloaded->intViewCount;
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

                case 'ManufacturerId':
                    /**
                     * Gets the value for intManufacturerId 
                     * @return integer
                     */
                    return $this->intManufacturerId;

                case 'SupplierId':
                    /**
                     * Gets the value for intSupplierId 
                     * @return integer
                     */
                    return $this->intSupplierId;

                case 'CreationDate':
                    /**
                     * Gets the value for strCreationDate (Read-Only Timestamp)
                     * @return string
                     */
                    return $this->strCreationDate;

                case 'Name':
                    /**
                     * Gets the value for strName (Not Null)
                     * @return string
                     */
                    return $this->strName;

                case 'Model':
                    /**
                     * Gets the value for strModel (Unique)
                     * @return string
                     */
                    return $this->strModel;

                case 'ShortDescription':
                    /**
                     * Gets the value for strShortDescription 
                     * @return string
                     */
                    return $this->strShortDescription;

                case 'LongDescription':
                    /**
                     * Gets the value for strLongDescription 
                     * @return string
                     */
                    return $this->strLongDescription;

                case 'Msrp':
                    /**
                     * Gets the value for fltMsrp 
                     * @return double
                     */
                    return $this->fltMsrp;

                case 'WholesalePrice':
                    /**
                     * Gets the value for fltWholesalePrice 
                     * @return double
                     */
                    return $this->fltWholesalePrice;

                case 'RetailPrice':
                    /**
                     * Gets the value for fltRetailPrice 
                     * @return double
                     */
                    return $this->fltRetailPrice;

                case 'Cost':
                    /**
                     * Gets the value for fltCost 
                     * @return double
                     */
                    return $this->fltCost;

                case 'Weight':
                    /**
                     * Gets the value for fltWeight 
                     * @return double
                     */
                    return $this->fltWeight;

                case 'Height':
                    /**
                     * Gets the value for fltHeight 
                     * @return double
                     */
                    return $this->fltHeight;

                case 'Width':
                    /**
                     * Gets the value for fltWidth 
                     * @return double
                     */
                    return $this->fltWidth;

                case 'Depth':
                    /**
                     * Gets the value for fltDepth 
                     * @return double
                     */
                    return $this->fltDepth;

                case 'IsVirtual':
                    /**
                     * Gets the value for blnIsVirtual (Not Null)
                     * @return boolean
                     */
                    return $this->blnIsVirtual;

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

                case 'ViewCount':
                    /**
                     * Gets the value for intViewCount 
                     * @return integer
                     */
                    return $this->intViewCount;


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Manufacturer':
                    /**
                     * Gets the value for the Person object referenced by intManufacturerId 
                     * @return Person
                     */
                    try {
                        if ((!$this->objManufacturer) && (!is_null($this->intManufacturerId)))
                            $this->objManufacturer = Person::Load($this->intManufacturerId);
                        return $this->objManufacturer;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Supplier':
                    /**
                     * Gets the value for the Person object referenced by intSupplierId 
                     * @return Person
                     */
                    try {
                        if ((!$this->objSupplier) && (!is_null($this->intSupplierId)))
                            $this->objSupplier = Person::Load($this->intSupplierId);
                        return $this->objSupplier;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_ProductCategory':
                    /**
                     * Gets the value for the private _objProductCategory (Read-Only)
                     * if set due to an expansion on the product_product_category_assn association table
                     * @return ProductCategory
                     */
                    return $this->_objProductCategory;

                case '_ProductCategoryArray':
                    /**
                     * Gets the value for the private _objProductCategoryArray (Read-Only)
                     * if set due to an ExpandAsArray on the product_product_category_assn association table
                     * @return ProductCategory[]
                     */
                    return (array) $this->_objProductCategoryArray;

                case '_ParentProductAsRelated':
                    /**
                     * Gets the value for the private _objParentProductAsRelated (Read-Only)
                     * if set due to an expansion on the related_product_assn association table
                     * @return Product
                     */
                    return $this->_objParentProductAsRelated;

                case '_ParentProductAsRelatedArray':
                    /**
                     * Gets the value for the private _objParentProductAsRelatedArray (Read-Only)
                     * if set due to an ExpandAsArray on the related_product_assn association table
                     * @return Product[]
                     */
                    return (array) $this->_objParentProductAsRelatedArray;

                case '_ProductAsRelated':
                    /**
                     * Gets the value for the private _objProductAsRelated (Read-Only)
                     * if set due to an expansion on the related_product_assn association table
                     * @return Product
                     */
                    return $this->_objProductAsRelated;

                case '_ProductAsRelatedArray':
                    /**
                     * Gets the value for the private _objProductAsRelatedArray (Read-Only)
                     * if set due to an ExpandAsArray on the related_product_assn association table
                     * @return Product[]
                     */
                    return (array) $this->_objProductAsRelatedArray;

                case '_OrderItem':
                    /**
                     * Gets the value for the private _objOrderItem (Read-Only)
                     * if set due to an expansion on the order_item.product_id reverse relationship
                     * @return OrderItem
                     */
                    return $this->_objOrderItem;

                case '_OrderItemArray':
                    /**
                     * Gets the value for the private _objOrderItemArray (Read-Only)
                     * if set due to an ExpandAsArray on the order_item.product_id reverse relationship
                     * @return OrderItem[]
                     */
                    return (array) $this->_objOrderItemArray;

                case '_ProductImage':
                    /**
                     * Gets the value for the private _objProductImage (Read-Only)
                     * if set due to an expansion on the product_image.product_id reverse relationship
                     * @return ProductImage
                     */
                    return $this->_objProductImage;

                case '_ProductImageArray':
                    /**
                     * Gets the value for the private _objProductImageArray (Read-Only)
                     * if set due to an ExpandAsArray on the product_image.product_id reverse relationship
                     * @return ProductImage[]
                     */
                    return (array) $this->_objProductImageArray;

                case '_ShoppingCartItem':
                    /**
                     * Gets the value for the private _objShoppingCartItem (Read-Only)
                     * if set due to an expansion on the shopping_cart_item.product_id reverse relationship
                     * @return ShoppingCartItem
                     */
                    return $this->_objShoppingCartItem;

                case '_ShoppingCartItemArray':
                    /**
                     * Gets the value for the private _objShoppingCartItemArray (Read-Only)
                     * if set due to an ExpandAsArray on the shopping_cart_item.product_id reverse relationship
                     * @return ShoppingCartItem[]
                     */
                    return (array) $this->_objShoppingCartItemArray;


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
                case 'ManufacturerId':
                    /**
                     * Sets the value for intManufacturerId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objManufacturer = null;
                        return ($this->intManufacturerId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'SupplierId':
                    /**
                     * Sets the value for intSupplierId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objSupplier = null;
                        return ($this->intSupplierId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Name':
                    /**
                     * Sets the value for strName (Not Null)
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strName = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Model':
                    /**
                     * Sets the value for strModel (Unique)
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strModel = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ShortDescription':
                    /**
                     * Sets the value for strShortDescription 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strShortDescription = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'LongDescription':
                    /**
                     * Sets the value for strLongDescription 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strLongDescription = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Msrp':
                    /**
                     * Sets the value for fltMsrp 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltMsrp = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'WholesalePrice':
                    /**
                     * Sets the value for fltWholesalePrice 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltWholesalePrice = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'RetailPrice':
                    /**
                     * Sets the value for fltRetailPrice 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltRetailPrice = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Cost':
                    /**
                     * Sets the value for fltCost 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltCost = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Weight':
                    /**
                     * Sets the value for fltWeight 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltWeight = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Height':
                    /**
                     * Sets the value for fltHeight 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltHeight = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Width':
                    /**
                     * Sets the value for fltWidth 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltWidth = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Depth':
                    /**
                     * Sets the value for fltDepth 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltDepth = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'IsVirtual':
                    /**
                     * Sets the value for blnIsVirtual (Not Null)
                     * @param boolean $mixValue
                     * @return boolean
                     */
                    try {
                        return ($this->blnIsVirtual = QType::Cast($mixValue, QType::Boolean));
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

                case 'ViewCount':
                    /**
                     * Sets the value for intViewCount 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        return ($this->intViewCount = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Manufacturer':
                    /**
                     * Sets the value for the Person object referenced by intManufacturerId 
                     * @param Person $mixValue
                     * @return Person
                     */
                    if (is_null($mixValue)) {
                        $this->intManufacturerId = null;
                        $this->objManufacturer = null;
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
                            throw new QCallerException('Unable to set an unsaved Manufacturer for this Product');

                        // Update Local Member Variables
                        $this->objManufacturer = $mixValue;
                        $this->intManufacturerId = $mixValue->Id;

                        // Return $mixValue
                        return $mixValue;
                    }
                    break;

                case 'Supplier':
                    /**
                     * Sets the value for the Person object referenced by intSupplierId 
                     * @param Person $mixValue
                     * @return Person
                     */
                    if (is_null($mixValue)) {
                        $this->intSupplierId = null;
                        $this->objSupplier = null;
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
                            throw new QCallerException('Unable to set an unsaved Supplier for this Product');

                        // Update Local Member Variables
                        $this->objSupplier = $mixValue;
                        $this->intSupplierId = $mixValue->Id;

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

            
        
        // Related Objects' Methods for OrderItem
        //-------------------------------------------------------------------

        /**
         * Gets all associated OrderItems as an array of OrderItem objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return OrderItem[]
        */ 
        public function GetOrderItemArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return OrderItem::LoadArrayByProductId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated OrderItems
         * @return int
        */ 
        public function CountOrderItems() {
            if ((is_null($this->intId)))
                return 0;

            return OrderItem::CountByProductId($this->intId);
        }

        /**
         * Associates a OrderItem
         * @param OrderItem $objOrderItem
         * @return void
        */ 
        public function AssociateOrderItem(OrderItem $objOrderItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrderItem on this unsaved Product.');
            if ((is_null($objOrderItem->OrderId)) || (is_null($objOrderItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrderItem on this Product with an unsaved OrderItem.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_item`
                SET
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($objOrderItem->OrderId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objOrderItem->ProductId) . '
            ');
        }

        /**
         * Unassociates a OrderItem
         * @param OrderItem $objOrderItem
         * @return void
        */ 
        public function UnassociateOrderItem(OrderItem $objOrderItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this unsaved Product.');
            if ((is_null($objOrderItem->OrderId)) || (is_null($objOrderItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this Product with an unsaved OrderItem.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_item`
                SET
                    `product_id` = null
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($objOrderItem->OrderId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objOrderItem->ProductId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all OrderItems
         * @return void
        */ 
        public function UnassociateAllOrderItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_item`
                SET
                    `product_id` = null
                WHERE
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated OrderItem
         * @param OrderItem $objOrderItem
         * @return void
        */ 
        public function DeleteAssociatedOrderItem(OrderItem $objOrderItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this unsaved Product.');
            if ((is_null($objOrderItem->OrderId)) || (is_null($objOrderItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this Product with an unsaved OrderItem.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_item`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($objOrderItem->OrderId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objOrderItem->ProductId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated OrderItems
         * @return void
        */ 
        public function DeleteAllOrderItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_item`
                WHERE
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for ProductImage
        //-------------------------------------------------------------------

        /**
         * Gets all associated ProductImages as an array of ProductImage objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ProductImage[]
        */ 
        public function GetProductImageArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return ProductImage::LoadArrayByProductId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated ProductImages
         * @return int
        */ 
        public function CountProductImages() {
            if ((is_null($this->intId)))
                return 0;

            return ProductImage::CountByProductId($this->intId);
        }

        /**
         * Associates a ProductImage
         * @param ProductImage $objProductImage
         * @return void
        */ 
        public function AssociateProductImage(ProductImage $objProductImage) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProductImage on this unsaved Product.');
            if ((is_null($objProductImage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProductImage on this Product with an unsaved ProductImage.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `product_image`
                SET
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objProductImage->Id) . '
            ');
        }

        /**
         * Unassociates a ProductImage
         * @param ProductImage $objProductImage
         * @return void
        */ 
        public function UnassociateProductImage(ProductImage $objProductImage) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductImage on this unsaved Product.');
            if ((is_null($objProductImage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductImage on this Product with an unsaved ProductImage.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `product_image`
                SET
                    `product_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objProductImage->Id) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all ProductImages
         * @return void
        */ 
        public function UnassociateAllProductImages() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductImage on this unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `product_image`
                SET
                    `product_id` = null
                WHERE
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated ProductImage
         * @param ProductImage $objProductImage
         * @return void
        */ 
        public function DeleteAssociatedProductImage(ProductImage $objProductImage) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductImage on this unsaved Product.');
            if ((is_null($objProductImage->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductImage on this Product with an unsaved ProductImage.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product_image`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objProductImage->Id) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated ProductImages
         * @return void
        */ 
        public function DeleteAllProductImages() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductImage on this unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product_image`
                WHERE
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for ShoppingCartItem
        //-------------------------------------------------------------------

        /**
         * Gets all associated ShoppingCartItems as an array of ShoppingCartItem objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ShoppingCartItem[]
        */ 
        public function GetShoppingCartItemArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return ShoppingCartItem::LoadArrayByProductId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated ShoppingCartItems
         * @return int
        */ 
        public function CountShoppingCartItems() {
            if ((is_null($this->intId)))
                return 0;

            return ShoppingCartItem::CountByProductId($this->intId);
        }

        /**
         * Associates a ShoppingCartItem
         * @param ShoppingCartItem $objShoppingCartItem
         * @return void
        */ 
        public function AssociateShoppingCartItem(ShoppingCartItem $objShoppingCartItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateShoppingCartItem on this unsaved Product.');
            if ((is_null($objShoppingCartItem->ShoppingCartId)) || (is_null($objShoppingCartItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateShoppingCartItem on this Product with an unsaved ShoppingCartItem.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `shopping_cart_item`
                SET
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ShoppingCartId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ProductId) . '
            ');
        }

        /**
         * Unassociates a ShoppingCartItem
         * @param ShoppingCartItem $objShoppingCartItem
         * @return void
        */ 
        public function UnassociateShoppingCartItem(ShoppingCartItem $objShoppingCartItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this unsaved Product.');
            if ((is_null($objShoppingCartItem->ShoppingCartId)) || (is_null($objShoppingCartItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this Product with an unsaved ShoppingCartItem.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `shopping_cart_item`
                SET
                    `product_id` = null
                WHERE
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ShoppingCartId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ProductId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all ShoppingCartItems
         * @return void
        */ 
        public function UnassociateAllShoppingCartItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `shopping_cart_item`
                SET
                    `product_id` = null
                WHERE
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated ShoppingCartItem
         * @param ShoppingCartItem $objShoppingCartItem
         * @return void
        */ 
        public function DeleteAssociatedShoppingCartItem(ShoppingCartItem $objShoppingCartItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this unsaved Product.');
            if ((is_null($objShoppingCartItem->ShoppingCartId)) || (is_null($objShoppingCartItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this Product with an unsaved ShoppingCartItem.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shopping_cart_item`
                WHERE
                    `shopping_cart_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ShoppingCartId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objShoppingCartItem->ProductId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated ShoppingCartItems
         * @return void
        */ 
        public function DeleteAllShoppingCartItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateShoppingCartItem on this unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `shopping_cart_item`
                WHERE
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        // Related Many-to-Many Objects' Methods for ProductCategory
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated ProductCategories as an array of ProductCategory objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return ProductCategory[]
        */ 
        public function GetProductCategoryArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return ProductCategory::LoadArrayByProduct($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated ProductCategories
         * @return int
        */ 
        public function CountProductCategories() {
            if ((is_null($this->intId)))
                return 0;

            return ProductCategory::CountByProduct($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific ProductCategory
         * @param ProductCategory $objProductCategory
         * @return bool
        */
        public function IsProductCategoryAssociated(ProductCategory $objProductCategory) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsProductCategoryAssociated on this unsaved Product.');
            if ((is_null($objProductCategory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsProductCategoryAssociated on this Product with an unsaved ProductCategory.');

            $intRowCount = Product::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Product()->Id, $this->intId),
                    QQ::Equal(QQN::Product()->ProductCategory->ProductCategoryId, $objProductCategory->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a ProductCategory
         * @param ProductCategory $objProductCategory
         * @return void
        */ 
        public function AssociateProductCategory(ProductCategory $objProductCategory) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProductCategory on this unsaved Product.');
            if ((is_null($objProductCategory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProductCategory on this Product with an unsaved ProductCategory.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `product_product_category_assn` (
                    `product_id`,
                    `product_category_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objProductCategory->Id) . '
                )
            ');
        }

        /**
         * Unassociates a ProductCategory
         * @param ProductCategory $objProductCategory
         * @return void
        */ 
        public function UnassociateProductCategory(ProductCategory $objProductCategory) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductCategory on this unsaved Product.');
            if ((is_null($objProductCategory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductCategory on this Product with an unsaved ProductCategory.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product_product_category_assn`
                WHERE
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `product_category_id` = ' . $objDatabase->SqlVariable($objProductCategory->Id) . '
            ');
        }

        /**
         * Unassociates all ProductCategories
         * @return void
        */ 
        public function UnassociateAllProductCategories() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllProductCategoryArray on this unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `product_product_category_assn`
                WHERE
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }
            
        // Related Many-to-Many Objects' Methods for ParentProductAsRelated
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated ParentProductsAsRelated as an array of Product objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */ 
        public function GetParentProductAsRelatedArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Product::LoadArrayByProductAsRelated($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated ParentProductsAsRelated
         * @return int
        */ 
        public function CountParentProductsAsRelated() {
            if ((is_null($this->intId)))
                return 0;

            return Product::CountByProductAsRelated($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific ParentProductAsRelated
         * @param Product $objProduct
         * @return bool
        */
        public function IsParentProductAsRelatedAssociated(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsParentProductAsRelatedAssociated on this unsaved Product.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsParentProductAsRelatedAssociated on this Product with an unsaved Product.');

            $intRowCount = Product::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Product()->Id, $this->intId),
                    QQ::Equal(QQN::Product()->ParentProductAsRelated->RelatedProductId, $objProduct->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a ParentProductAsRelated
         * @param Product $objProduct
         * @return void
        */ 
        public function AssociateParentProductAsRelated(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateParentProductAsRelated on this unsaved Product.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateParentProductAsRelated on this Product with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `related_product_assn` (
                    `product_id`,
                    `related_product_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objProduct->Id) . '
                )
            ');
        }

        /**
         * Unassociates a ParentProductAsRelated
         * @param Product $objProduct
         * @return void
        */ 
        public function UnassociateParentProductAsRelated(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateParentProductAsRelated on this unsaved Product.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateParentProductAsRelated on this Product with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `related_product_assn`
                WHERE
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `related_product_id` = ' . $objDatabase->SqlVariable($objProduct->Id) . '
            ');
        }

        /**
         * Unassociates all ParentProductsAsRelated
         * @return void
        */ 
        public function UnassociateAllParentProductsAsRelated() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllParentProductAsRelatedArray on this unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `related_product_assn`
                WHERE
                    `product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }
            
        // Related Many-to-Many Objects' Methods for ProductAsRelated
        //-------------------------------------------------------------------

        /**
         * Gets all many-to-many associated ProductsAsRelated as an array of Product objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Product[]
        */ 
        public function GetProductAsRelatedArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return Product::LoadArrayByParentProductAsRelated($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all many-to-many associated ProductsAsRelated
         * @return int
        */ 
        public function CountProductsAsRelated() {
            if ((is_null($this->intId)))
                return 0;

            return Product::CountByParentProductAsRelated($this->intId);
        }

        /**
         * Checks to see if an association exists with a specific ProductAsRelated
         * @param Product $objProduct
         * @return bool
        */
        public function IsProductAsRelatedAssociated(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsProductAsRelatedAssociated on this unsaved Product.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call IsProductAsRelatedAssociated on this Product with an unsaved Product.');

            $intRowCount = Product::QueryCount(
                QQ::AndCondition(
                    QQ::Equal(QQN::Product()->Id, $this->intId),
                    QQ::Equal(QQN::Product()->ProductAsRelated->ProductId, $objProduct->Id)
                )
            );

            return ($intRowCount > 0);
        }

        /**
         * Associates a ProductAsRelated
         * @param Product $objProduct
         * @return void
        */ 
        public function AssociateProductAsRelated(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProductAsRelated on this unsaved Product.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateProductAsRelated on this Product with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                INSERT INTO `related_product_assn` (
                    `related_product_id`,
                    `product_id`
                ) VALUES (
                    ' . $objDatabase->SqlVariable($this->intId) . ',
                    ' . $objDatabase->SqlVariable($objProduct->Id) . '
                )
            ');
        }

        /**
         * Unassociates a ProductAsRelated
         * @param Product $objProduct
         * @return void
        */ 
        public function UnassociateProductAsRelated(Product $objProduct) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsRelated on this unsaved Product.');
            if ((is_null($objProduct->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProductAsRelated on this Product with an unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `related_product_assn`
                WHERE
                    `related_product_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objProduct->Id) . '
            ');
        }

        /**
         * Unassociates all ProductsAsRelated
         * @return void
        */ 
        public function UnassociateAllProductsAsRelated() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllProductAsRelatedArray on this unsaved Product.');

            // Get the Database Object for this Class
            $objDatabase = Product::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `related_product_assn`
                WHERE
                    `related_product_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }



    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeProductProductCategory extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'productcategory';

        protected $strTableName = 'product_product_category_assn';
        protected $strPrimaryKey = 'product_id';
        protected $strClassName = 'ProductCategory';

        public function __get($strName) {
            switch ($strName) {
                case 'ProductCategoryId':
                    return new QQNode('product_category_id', 'ProductCategoryId', 'integer', $this);
                case 'ProductCategory':
                    return new QQNodeProductCategory('product_category_id', 'ProductCategoryId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeProductCategory('product_category_id', 'ProductCategoryId', 'integer', $this);
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

    class QQNodeProductParentProductAsRelated extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'parentproductasrelated';

        protected $strTableName = 'related_product_assn';
        protected $strPrimaryKey = 'product_id';
        protected $strClassName = 'Product';

        public function __get($strName) {
            switch ($strName) {
                case 'RelatedProductId':
                    return new QQNode('related_product_id', 'RelatedProductId', 'integer', $this);
                case 'Product':
                    return new QQNodeProduct('related_product_id', 'RelatedProductId', 'integer', $this);
                case '_ChildTableNode':
                    return new QQNodeProduct('related_product_id', 'RelatedProductId', 'integer', $this);
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

    class QQNodeProductProductAsRelated extends QQAssociationNode {
        protected $strType = 'association';
        protected $strName = 'productasrelated';

        protected $strTableName = 'related_product_assn';
        protected $strPrimaryKey = 'related_product_id';
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

    class QQNodeProduct extends QQNode {
        protected $strTableName = 'product';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Product';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'ManufacturerId':
                    return new QQNode('manufacturer_id', 'ManufacturerId', 'integer', $this);
                case 'Manufacturer':
                    return new QQNodePerson('manufacturer_id', 'Manufacturer', 'integer', $this);
                case 'SupplierId':
                    return new QQNode('supplier_id', 'SupplierId', 'integer', $this);
                case 'Supplier':
                    return new QQNodePerson('supplier_id', 'Supplier', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Model':
                    return new QQNode('model', 'Model', 'string', $this);
                case 'ShortDescription':
                    return new QQNode('short_description', 'ShortDescription', 'string', $this);
                case 'LongDescription':
                    return new QQNode('long_description', 'LongDescription', 'string', $this);
                case 'Msrp':
                    return new QQNode('msrp', 'Msrp', 'double', $this);
                case 'WholesalePrice':
                    return new QQNode('wholesale_price', 'WholesalePrice', 'double', $this);
                case 'RetailPrice':
                    return new QQNode('retail_price', 'RetailPrice', 'double', $this);
                case 'Cost':
                    return new QQNode('cost', 'Cost', 'double', $this);
                case 'Weight':
                    return new QQNode('weight', 'Weight', 'double', $this);
                case 'Height':
                    return new QQNode('height', 'Height', 'double', $this);
                case 'Width':
                    return new QQNode('width', 'Width', 'double', $this);
                case 'Depth':
                    return new QQNode('depth', 'Depth', 'double', $this);
                case 'IsVirtual':
                    return new QQNode('is_virtual', 'IsVirtual', 'boolean', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'ViewCount':
                    return new QQNode('view_count', 'ViewCount', 'integer', $this);
                case 'ProductCategory':
                    return new QQNodeProductProductCategory($this);
                case 'ParentProductAsRelated':
                    return new QQNodeProductParentProductAsRelated($this);
                case 'ProductAsRelated':
                    return new QQNodeProductProductAsRelated($this);
                case 'OrderItem':
                    return new QQReverseReferenceNodeOrderItem($this, 'orderitem', 'reverse_reference', 'product_id');
                case 'ProductImage':
                    return new QQReverseReferenceNodeProductImage($this, 'productimage', 'reverse_reference', 'product_id');
                case 'ShoppingCartItem':
                    return new QQReverseReferenceNodeShoppingCartItem($this, 'shoppingcartitem', 'reverse_reference', 'product_id');

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

    class QQReverseReferenceNodeProduct extends QQReverseReferenceNode {
        protected $strTableName = 'product';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Product';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'ManufacturerId':
                    return new QQNode('manufacturer_id', 'ManufacturerId', 'integer', $this);
                case 'Manufacturer':
                    return new QQNodePerson('manufacturer_id', 'Manufacturer', 'integer', $this);
                case 'SupplierId':
                    return new QQNode('supplier_id', 'SupplierId', 'integer', $this);
                case 'Supplier':
                    return new QQNodePerson('supplier_id', 'Supplier', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'Name':
                    return new QQNode('name', 'Name', 'string', $this);
                case 'Model':
                    return new QQNode('model', 'Model', 'string', $this);
                case 'ShortDescription':
                    return new QQNode('short_description', 'ShortDescription', 'string', $this);
                case 'LongDescription':
                    return new QQNode('long_description', 'LongDescription', 'string', $this);
                case 'Msrp':
                    return new QQNode('msrp', 'Msrp', 'double', $this);
                case 'WholesalePrice':
                    return new QQNode('wholesale_price', 'WholesalePrice', 'double', $this);
                case 'RetailPrice':
                    return new QQNode('retail_price', 'RetailPrice', 'double', $this);
                case 'Cost':
                    return new QQNode('cost', 'Cost', 'double', $this);
                case 'Weight':
                    return new QQNode('weight', 'Weight', 'double', $this);
                case 'Height':
                    return new QQNode('height', 'Height', 'double', $this);
                case 'Width':
                    return new QQNode('width', 'Width', 'double', $this);
                case 'Depth':
                    return new QQNode('depth', 'Depth', 'double', $this);
                case 'IsVirtual':
                    return new QQNode('is_virtual', 'IsVirtual', 'boolean', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'ViewCount':
                    return new QQNode('view_count', 'ViewCount', 'integer', $this);
                case 'ProductCategory':
                    return new QQNodeProductProductCategory($this);
                case 'ParentProductAsRelated':
                    return new QQNodeProductParentProductAsRelated($this);
                case 'ProductAsRelated':
                    return new QQNodeProductProductAsRelated($this);
                case 'OrderItem':
                    return new QQReverseReferenceNodeOrderItem($this, 'orderitem', 'reverse_reference', 'product_id');
                case 'ProductImage':
                    return new QQReverseReferenceNodeProductImage($this, 'productimage', 'reverse_reference', 'product_id');
                case 'ShoppingCartItem':
                    return new QQReverseReferenceNodeShoppingCartItem($this, 'shoppingcartitem', 'reverse_reference', 'product_id');

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