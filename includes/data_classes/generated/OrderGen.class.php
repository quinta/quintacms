<?php
    /**
     * The abstract OrderGen class defined here is
     * code-generated and contains all the basic CRUD-type functionality as well as
     * basic methods to handle relationships and index-based loading.
     *
     * To use, you should use the Order subclass which
     * extends this OrderGen class.
     *
     * Because subsequent re-code generations will overwrite any changes to this
     * file, you should leave this file unaltered to prevent yourself from losing
     * any information or code changes.  All customizations should be done by
     * overriding existing or implementing new methods, properties and variables
     * in the Order class.
     * 
     * @package Quinta CMS
     * @subpackage GeneratedDataObjects
     * @property-read integer $Id the value for intId (Read-Only PK)
     * @property integer $AccountId the value for intAccountId (Not Null)
     * @property-read string $CreationDate the value for strCreationDate (Read-Only Timestamp)
     * @property-read string $LastModification the value for strLastModification (Read-Only Timestamp)
     * @property QDateTime $CompletionDate the value for dttCompletionDate 
     * @property double $ProductTotalCost the value for fltProductTotalCost 
     * @property double $ShippingCost the value for fltShippingCost 
     * @property double $ShippingCharged the value for fltShippingCharged 
     * @property double $HandlingCost the value for fltHandlingCost 
     * @property double $HandlingCharged the value for fltHandlingCharged 
     * @property double $Tax the value for fltTax 
     * @property double $ProductTotalCharged the value for fltProductTotalCharged 
     * @property string $Notes the value for strNotes 
     * @property integer $ShippingMethodId the value for intShippingMethodId 
     * @property integer $PaymentMethodId the value for intPaymentMethodId 
     * @property integer $StatusId the value for intStatusId (Not Null)
     * @property integer $TypeId the value for intTypeId 
     * @property Account $Account the value for the Account object referenced by intAccountId (Not Null)
     * @property ShippingMethod $ShippingMethod the value for the ShippingMethod object referenced by intShippingMethodId 
     * @property PaymentMethod $PaymentMethod the value for the PaymentMethod object referenced by intPaymentMethodId 
     * @property-read AuthorizeNetTransaction $_AuthorizeNetTransaction the value for the private _objAuthorizeNetTransaction (Read-Only) if set due to an expansion on the authorize_net_transaction.order_id reverse relationship
     * @property-read AuthorizeNetTransaction[] $_AuthorizeNetTransactionArray the value for the private _objAuthorizeNetTransactionArray (Read-Only) if set due to an ExpandAsArray on the authorize_net_transaction.order_id reverse relationship
     * @property-read OrderAddress $_OrderAddress the value for the private _objOrderAddress (Read-Only) if set due to an expansion on the order_address.order_id reverse relationship
     * @property-read OrderAddress[] $_OrderAddressArray the value for the private _objOrderAddressArray (Read-Only) if set due to an ExpandAsArray on the order_address.order_id reverse relationship
     * @property-read OrderChange $_OrderChange the value for the private _objOrderChange (Read-Only) if set due to an expansion on the order_change.order_id reverse relationship
     * @property-read OrderChange[] $_OrderChangeArray the value for the private _objOrderChangeArray (Read-Only) if set due to an ExpandAsArray on the order_change.order_id reverse relationship
     * @property-read OrderItem $_OrderItem the value for the private _objOrderItem (Read-Only) if set due to an expansion on the order_item.order_id reverse relationship
     * @property-read OrderItem[] $_OrderItemArray the value for the private _objOrderItemArray (Read-Only) if set due to an ExpandAsArray on the order_item.order_id reverse relationship
     * @property-read OrderStatusHistory $_OrderStatusHistory the value for the private _objOrderStatusHistory (Read-Only) if set due to an expansion on the order_status_history.order_id reverse relationship
     * @property-read OrderStatusHistory[] $_OrderStatusHistoryArray the value for the private _objOrderStatusHistoryArray (Read-Only) if set due to an ExpandAsArray on the order_status_history.order_id reverse relationship
     * @property-read PaypalTransaction $_PaypalTransaction the value for the private _objPaypalTransaction (Read-Only) if set due to an expansion on the paypal_transaction.order_id reverse relationship
     * @property-read PaypalTransaction[] $_PaypalTransactionArray the value for the private _objPaypalTransactionArray (Read-Only) if set due to an ExpandAsArray on the paypal_transaction.order_id reverse relationship
     * @property-read TrackingNumber $_TrackingNumber the value for the private _objTrackingNumber (Read-Only) if set due to an expansion on the tracking_number.order_id reverse relationship
     * @property-read TrackingNumber[] $_TrackingNumberArray the value for the private _objTrackingNumberArray (Read-Only) if set due to an ExpandAsArray on the tracking_number.order_id reverse relationship
     * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
     */
    class OrderGen extends QBaseClass
    {

        ///////////////////////////////////////////////////////////////////////
        // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
        ///////////////////////////////////////////////////////////////////////

        /////////// Object properties ////////////
        /**
         * Protected member variable that maps to the database PK Identity column order.id
         * @var integer intId
         *
         */
        protected $intId = null;


        /**
         * Protected member variable that maps to the database column order.account_id
         * @var integer intAccountId
         *
         */
        protected $intAccountId = null;


        /**
         * Protected member variable that maps to the database column order.creation_date
         * @var string strCreationDate
         *
         */
        protected $strCreationDate = null;


        /**
         * Protected member variable that maps to the database column order.last_modification
         * @var string strLastModification
         *
         */
        protected $strLastModification = null;


        /**
         * Protected member variable that maps to the database column order.completion_date
         * @var QDateTime dttCompletionDate
         *
         */
        protected $dttCompletionDate = null;


        /**
         * Protected member variable that maps to the database column order.product_total_cost
         * @var double fltProductTotalCost
         *
         */
        protected $fltProductTotalCost = null;


        /**
         * Protected member variable that maps to the database column order.shipping_cost
         * @var double fltShippingCost
         *
         */
        protected $fltShippingCost = null;


        /**
         * Protected member variable that maps to the database column order.shipping_charged
         * @var double fltShippingCharged
         *
         */
        protected $fltShippingCharged = null;


        /**
         * Protected member variable that maps to the database column order.handling_cost
         * @var double fltHandlingCost
         *
         */
        protected $fltHandlingCost = null;


        /**
         * Protected member variable that maps to the database column order.handling_charged
         * @var double fltHandlingCharged
         *
         */
        protected $fltHandlingCharged = null;


        /**
         * Protected member variable that maps to the database column order.tax
         * @var double fltTax
         *
         */
        protected $fltTax = null;


        /**
         * Protected member variable that maps to the database column order.product_total_charged
         * @var double fltProductTotalCharged
         *
         */
        protected $fltProductTotalCharged = null;


        /**
         * Protected member variable that maps to the database column order.notes
         * @var string strNotes
         *
         */
        protected $strNotes = null;


        /**
         * Protected member variable that maps to the database column order.shipping_method_id
         * @var integer intShippingMethodId
         *
         */
        protected $intShippingMethodId = null;


        /**
         * Protected member variable that maps to the database column order.payment_method_id
         * @var integer intPaymentMethodId
         *
         */
        protected $intPaymentMethodId = null;


        /**
         * Protected member variable that maps to the database column order.status_id
         * @var integer intStatusId
         *
         */
        protected $intStatusId = null;


        /**
         * Protected member variable that maps to the database column order.type_id
         * @var integer intTypeId
         *
         */
        protected $intTypeId = null;


        /**
         * Private member variable that stores a reference to a single AuthorizeNetTransaction object
         * (of type AuthorizeNetTransaction), if this Order object was restored with
         * an expansion on the authorize_net_transaction association table.
         * @var AuthorizeNetTransaction _objAuthorizeNetTransaction;
         */
        private $_objAuthorizeNetTransaction;

        /**
         * Private member variable that stores a reference to an array of AuthorizeNetTransaction objects
         * (of type AuthorizeNetTransaction[]), if this Order object was restored with
         * an ExpandAsArray on the authorize_net_transaction association table.
         * @var AuthorizeNetTransaction[] _objAuthorizeNetTransactionArray;
         */
        private $_objAuthorizeNetTransactionArray = array();

        /**
         * Private member variable that stores a reference to a single OrderAddress object
         * (of type OrderAddress), if this Order object was restored with
         * an expansion on the order_address association table.
         * @var OrderAddress _objOrderAddress;
         */
        private $_objOrderAddress;

        /**
         * Private member variable that stores a reference to an array of OrderAddress objects
         * (of type OrderAddress[]), if this Order object was restored with
         * an ExpandAsArray on the order_address association table.
         * @var OrderAddress[] _objOrderAddressArray;
         */
        private $_objOrderAddressArray = array();

        /**
         * Private member variable that stores a reference to a single OrderChange object
         * (of type OrderChange), if this Order object was restored with
         * an expansion on the order_change association table.
         * @var OrderChange _objOrderChange;
         */
        private $_objOrderChange;

        /**
         * Private member variable that stores a reference to an array of OrderChange objects
         * (of type OrderChange[]), if this Order object was restored with
         * an ExpandAsArray on the order_change association table.
         * @var OrderChange[] _objOrderChangeArray;
         */
        private $_objOrderChangeArray = array();

        /**
         * Private member variable that stores a reference to a single OrderItem object
         * (of type OrderItem), if this Order object was restored with
         * an expansion on the order_item association table.
         * @var OrderItem _objOrderItem;
         */
        private $_objOrderItem;

        /**
         * Private member variable that stores a reference to an array of OrderItem objects
         * (of type OrderItem[]), if this Order object was restored with
         * an ExpandAsArray on the order_item association table.
         * @var OrderItem[] _objOrderItemArray;
         */
        private $_objOrderItemArray = array();

        /**
         * Private member variable that stores a reference to a single OrderStatusHistory object
         * (of type OrderStatusHistory), if this Order object was restored with
         * an expansion on the order_status_history association table.
         * @var OrderStatusHistory _objOrderStatusHistory;
         */
        private $_objOrderStatusHistory;

        /**
         * Private member variable that stores a reference to an array of OrderStatusHistory objects
         * (of type OrderStatusHistory[]), if this Order object was restored with
         * an ExpandAsArray on the order_status_history association table.
         * @var OrderStatusHistory[] _objOrderStatusHistoryArray;
         */
        private $_objOrderStatusHistoryArray = array();

        /**
         * Private member variable that stores a reference to a single PaypalTransaction object
         * (of type PaypalTransaction), if this Order object was restored with
         * an expansion on the paypal_transaction association table.
         * @var PaypalTransaction _objPaypalTransaction;
         */
        private $_objPaypalTransaction;

        /**
         * Private member variable that stores a reference to an array of PaypalTransaction objects
         * (of type PaypalTransaction[]), if this Order object was restored with
         * an ExpandAsArray on the paypal_transaction association table.
         * @var PaypalTransaction[] _objPaypalTransactionArray;
         */
        private $_objPaypalTransactionArray = array();

        /**
         * Private member variable that stores a reference to a single TrackingNumber object
         * (of type TrackingNumber), if this Order object was restored with
         * an expansion on the tracking_number association table.
         * @var TrackingNumber _objTrackingNumber;
         */
        private $_objTrackingNumber;

        /**
         * Private member variable that stores a reference to an array of TrackingNumber objects
         * (of type TrackingNumber[]), if this Order object was restored with
         * an ExpandAsArray on the tracking_number association table.
         * @var TrackingNumber[] _objTrackingNumberArray;
         */
        private $_objTrackingNumberArray = array();

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
         * in the database column order.account_id.
         *
         * NOTE: Always use the Account property getter to correctly retrieve this Account object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var Account objAccount
         */
        protected $objAccount;

        /**
         * Protected member variable that contains the object pointed by the reference
         * in the database column order.shipping_method_id.
         *
         * NOTE: Always use the ShippingMethod property getter to correctly retrieve this ShippingMethod object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var ShippingMethod objShippingMethod
         */
        protected $objShippingMethod;

        /**
         * Protected member variable that contains the object pointed by the reference
         * in the database column order.payment_method_id.
         *
         * NOTE: Always use the PaymentMethod property getter to correctly retrieve this PaymentMethod object.
         * (Because this class implements late binding, this variable reference MAY be null.)
         * @var PaymentMethod objPaymentMethod
         */
        protected $objPaymentMethod;



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
         * Load a Order from PK Info
         * @param integer $intId
         * @return Order
         */
        public static function Load($intId) {
            // Use QuerySingle to Perform the Query
            return Order::QuerySingle(
                QQ::Equal(QQN::Order()->Id, $intId)
            );
        }

        /**
         * Load all Orders
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Order[]
         */
        public static function LoadAll($objOptionalClauses = null) {
            // Call Order::QueryArray to perform the LoadAll query
            try {
                return Order::QueryArray(QQ::All(), $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count all Orders
         * @return int
         */
        public static function CountAll() {
            // Call Order::QueryCount to perform the CountAll query
            return Order::QueryCount(QQ::All());
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
            $objDatabase = Order::GetDatabase();

            // Create/Build out the QueryBuilder object with Order-specific SELET and FROM fields
            $objQueryBuilder = new QQueryBuilder($objDatabase, 'order');
            Order::GetSelectFields($objQueryBuilder);
            $objQueryBuilder->AddFromItem('order');

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
         * Static Qcodo Query method to query for a single Order object.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Order the queried object
         */
        public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Order::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query, Get the First Row, and Instantiate a new Order object
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Order::InstantiateDbRow($objDbResult->GetNextRow(), null, null, null, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for an array of Order objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return Order[] the queried objects as an array
         */
        public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Order::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

            // Perform the Query and Instantiate the Array Result
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            return Order::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
        }

        /**
         * Static Qcodo Query method to query for a count of Order objects.
         * Uses BuildQueryStatment to perform most of the work.
         * @param QQCondition $objConditions any conditions on the query, itself
         * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
         * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
         * @return integer the count of queried objects as an integer
         */
        public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
            // Get the Query Statement
            try {
                $strQuery = Order::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
            $objDatabase = Order::GetDatabase();

            // Lookup the QCache for This Query Statement
            $objCache = new QCache('query', 'order_' . serialize($strConditions));
            if (!($strQuery = $objCache->GetData())) {
                // Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Order-specific fields
                $objQueryBuilder = new QQueryBuilder($objDatabase);
                Order::GetSelectFields($objQueryBuilder);
                Order::GetFromFields($objQueryBuilder);

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
            return Order::InstantiateDbResult($objDbResult);
        }*/

        /**
         * Updates a QQueryBuilder with the SELECT fields for this Order
         * @param QQueryBuilder $objBuilder the Query Builder object to update
         * @param string $strPrefix optional prefix to add to the SELECT fields
         */
        public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
            if ($strPrefix) {
                $strTableName = $strPrefix;
                $strAliasPrefix = $strPrefix . '__';
            } else {
                $strTableName = 'order';
                $strAliasPrefix = '';
            }

            $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
            $objBuilder->AddSelectItem($strTableName, 'account_id', $strAliasPrefix . 'account_id');
            $objBuilder->AddSelectItem($strTableName, 'creation_date', $strAliasPrefix . 'creation_date');
            $objBuilder->AddSelectItem($strTableName, 'last_modification', $strAliasPrefix . 'last_modification');
            $objBuilder->AddSelectItem($strTableName, 'completion_date', $strAliasPrefix . 'completion_date');
            $objBuilder->AddSelectItem($strTableName, 'product_total_cost', $strAliasPrefix . 'product_total_cost');
            $objBuilder->AddSelectItem($strTableName, 'shipping_cost', $strAliasPrefix . 'shipping_cost');
            $objBuilder->AddSelectItem($strTableName, 'shipping_charged', $strAliasPrefix . 'shipping_charged');
            $objBuilder->AddSelectItem($strTableName, 'handling_cost', $strAliasPrefix . 'handling_cost');
            $objBuilder->AddSelectItem($strTableName, 'handling_charged', $strAliasPrefix . 'handling_charged');
            $objBuilder->AddSelectItem($strTableName, 'tax', $strAliasPrefix . 'tax');
            $objBuilder->AddSelectItem($strTableName, 'product_total_charged', $strAliasPrefix . 'product_total_charged');
            $objBuilder->AddSelectItem($strTableName, 'notes', $strAliasPrefix . 'notes');
            $objBuilder->AddSelectItem($strTableName, 'shipping_method_id', $strAliasPrefix . 'shipping_method_id');
            $objBuilder->AddSelectItem($strTableName, 'payment_method_id', $strAliasPrefix . 'payment_method_id');
            $objBuilder->AddSelectItem($strTableName, 'status_id', $strAliasPrefix . 'status_id');
            $objBuilder->AddSelectItem($strTableName, 'type_id', $strAliasPrefix . 'type_id');
        }


        ///////////////////////////////
        // INSTANTIATION-RELATED METHODS
        ///////////////////////////////

        /**
         * Instantiate a Order from a Database Row.
         * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
         * is calling this Order::InstantiateDbRow in order to perform
         * early binding on referenced objects.
         * @param DatabaseRowBase $objDbRow
         * @param string $strAliasPrefix
         * @param string $strExpandAsArrayNodes
         * @param QBaseClass $objPreviousItem
         * @param string[] $strColumnAliasArray
         * @return Order
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
                    $strAliasPrefix = 'order__';


                $strAlias = $strAliasPrefix . 'authorizenettransaction__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objAuthorizeNetTransactionArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objAuthorizeNetTransactionArray[$intPreviousChildItemCount - 1];
                        $objChildItem = AuthorizeNetTransaction::InstantiateDbRow($objDbRow, $strAliasPrefix . 'authorizenettransaction__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objAuthorizeNetTransactionArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objAuthorizeNetTransactionArray[] = AuthorizeNetTransaction::InstantiateDbRow($objDbRow, $strAliasPrefix . 'authorizenettransaction__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'orderaddress__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objOrderAddressArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objOrderAddressArray[$intPreviousChildItemCount - 1];
                        $objChildItem = OrderAddress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderaddress__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objOrderAddressArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objOrderAddressArray[] = OrderAddress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderaddress__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'orderchange__order_id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objOrderChangeArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objOrderChangeArray[$intPreviousChildItemCount - 1];
                        $objChildItem = OrderChange::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderchange__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objOrderChangeArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objOrderChangeArray[] = OrderChange::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderchange__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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

                $strAlias = $strAliasPrefix . 'orderstatushistory__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objOrderStatusHistoryArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objOrderStatusHistoryArray[$intPreviousChildItemCount - 1];
                        $objChildItem = OrderStatusHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderstatushistory__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objOrderStatusHistoryArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objOrderStatusHistoryArray[] = OrderStatusHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderstatushistory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'paypaltransaction__id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objPaypalTransactionArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objPaypalTransactionArray[$intPreviousChildItemCount - 1];
                        $objChildItem = PaypalTransaction::InstantiateDbRow($objDbRow, $strAliasPrefix . 'paypaltransaction__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objPaypalTransactionArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objPaypalTransactionArray[] = PaypalTransaction::InstantiateDbRow($objDbRow, $strAliasPrefix . 'paypaltransaction__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                $strAlias = $strAliasPrefix . 'trackingnumber__order_id';
                $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                    (!is_null($objDbRow->GetColumn($strAliasName)))) {
                    if ($intPreviousChildItemCount = count($objPreviousItem->_objTrackingNumberArray)) {
                        $objPreviousChildItem = $objPreviousItem->_objTrackingNumberArray[$intPreviousChildItemCount - 1];
                        $objChildItem = TrackingNumber::InstantiateDbRow($objDbRow, $strAliasPrefix . 'trackingnumber__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
                        if ($objChildItem)
                            $objPreviousItem->_objTrackingNumberArray[] = $objChildItem;
                    } else
                        $objPreviousItem->_objTrackingNumberArray[] = TrackingNumber::InstantiateDbRow($objDbRow, $strAliasPrefix . 'trackingnumber__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                    $blnExpandedViaArray = true;
                }

                // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                if ($blnExpandedViaArray)
                    return false;
                else if ($strAliasPrefix == 'order__')
                    $strAliasPrefix = null;
            }

            // Create a new instance of the Order object
            $objToReturn = new Order();
            $objToReturn->__blnRestored = true;

            $strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
            $objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'account_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'account_id'] : $strAliasPrefix . 'account_id';
            $objToReturn->intAccountId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'creation_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'creation_date'] : $strAliasPrefix . 'creation_date';
            $objToReturn->strCreationDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'last_modification', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'last_modification'] : $strAliasPrefix . 'last_modification';
            $objToReturn->strLastModification = $objDbRow->GetColumn($strAliasName, 'VarChar');
            $strAliasName = array_key_exists($strAliasPrefix . 'completion_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'completion_date'] : $strAliasPrefix . 'completion_date';
            $objToReturn->dttCompletionDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
            $strAliasName = array_key_exists($strAliasPrefix . 'product_total_cost', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'product_total_cost'] : $strAliasPrefix . 'product_total_cost';
            $objToReturn->fltProductTotalCost = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'shipping_cost', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'shipping_cost'] : $strAliasPrefix . 'shipping_cost';
            $objToReturn->fltShippingCost = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'shipping_charged', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'shipping_charged'] : $strAliasPrefix . 'shipping_charged';
            $objToReturn->fltShippingCharged = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'handling_cost', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'handling_cost'] : $strAliasPrefix . 'handling_cost';
            $objToReturn->fltHandlingCost = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'handling_charged', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'handling_charged'] : $strAliasPrefix . 'handling_charged';
            $objToReturn->fltHandlingCharged = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'tax', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tax'] : $strAliasPrefix . 'tax';
            $objToReturn->fltTax = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'product_total_charged', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'product_total_charged'] : $strAliasPrefix . 'product_total_charged';
            $objToReturn->fltProductTotalCharged = $objDbRow->GetColumn($strAliasName, 'Float');
            $strAliasName = array_key_exists($strAliasPrefix . 'notes', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'notes'] : $strAliasPrefix . 'notes';
            $objToReturn->strNotes = $objDbRow->GetColumn($strAliasName, 'Blob');
            $strAliasName = array_key_exists($strAliasPrefix . 'shipping_method_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'shipping_method_id'] : $strAliasPrefix . 'shipping_method_id';
            $objToReturn->intShippingMethodId = $objDbRow->GetColumn($strAliasName, 'Integer');
            $strAliasName = array_key_exists($strAliasPrefix . 'payment_method_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'payment_method_id'] : $strAliasPrefix . 'payment_method_id';
            $objToReturn->intPaymentMethodId = $objDbRow->GetColumn($strAliasName, 'Integer');
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
                $strAliasPrefix = 'order__';

            // Check for Account Early Binding
            $strAlias = $strAliasPrefix . 'account_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objAccount = Account::InstantiateDbRow($objDbRow, $strAliasPrefix . 'account_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

            // Check for ShippingMethod Early Binding
            $strAlias = $strAliasPrefix . 'shipping_method_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objShippingMethod = ShippingMethod::InstantiateDbRow($objDbRow, $strAliasPrefix . 'shipping_method_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

            // Check for PaymentMethod Early Binding
            $strAlias = $strAliasPrefix . 'payment_method_id__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName)))
                $objToReturn->objPaymentMethod = PaymentMethod::InstantiateDbRow($objDbRow, $strAliasPrefix . 'payment_method_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




            // Check for AuthorizeNetTransaction Virtual Binding
            $strAlias = $strAliasPrefix . 'authorizenettransaction__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objAuthorizeNetTransactionArray[] = AuthorizeNetTransaction::InstantiateDbRow($objDbRow, $strAliasPrefix . 'authorizenettransaction__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objAuthorizeNetTransaction = AuthorizeNetTransaction::InstantiateDbRow($objDbRow, $strAliasPrefix . 'authorizenettransaction__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for OrderAddress Virtual Binding
            $strAlias = $strAliasPrefix . 'orderaddress__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objOrderAddressArray[] = OrderAddress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderaddress__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objOrderAddress = OrderAddress::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderaddress__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for OrderChange Virtual Binding
            $strAlias = $strAliasPrefix . 'orderchange__order_id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objOrderChangeArray[] = OrderChange::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderchange__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objOrderChange = OrderChange::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderchange__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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

            // Check for OrderStatusHistory Virtual Binding
            $strAlias = $strAliasPrefix . 'orderstatushistory__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objOrderStatusHistoryArray[] = OrderStatusHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderstatushistory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objOrderStatusHistory = OrderStatusHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'orderstatushistory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for PaypalTransaction Virtual Binding
            $strAlias = $strAliasPrefix . 'paypaltransaction__id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objPaypalTransactionArray[] = PaypalTransaction::InstantiateDbRow($objDbRow, $strAliasPrefix . 'paypaltransaction__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objPaypalTransaction = PaypalTransaction::InstantiateDbRow($objDbRow, $strAliasPrefix . 'paypaltransaction__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            // Check for TrackingNumber Virtual Binding
            $strAlias = $strAliasPrefix . 'trackingnumber__order_id';
            $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
            if (!is_null($objDbRow->GetColumn($strAliasName))) {
                if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                    $objToReturn->_objTrackingNumberArray[] = TrackingNumber::InstantiateDbRow($objDbRow, $strAliasPrefix . 'trackingnumber__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                else
                    $objToReturn->_objTrackingNumber = TrackingNumber::InstantiateDbRow($objDbRow, $strAliasPrefix . 'trackingnumber__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }

        /**
         * Instantiate an array of Orders from a Database Result
         * @param DatabaseResultBase $objDbResult
         * @param string $strExpandAsArrayNodes
         * @param string[] $strColumnAliasArray
         * @return Order[]
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
                    $objItem = Order::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
                    if ($objItem) {
                        $objToReturn[] = $objItem;
                        $objLastRowItem = $objItem;
                    }
                }
            } else {
                while ($objDbRow = $objDbResult->GetNextRow())
                    $objToReturn[] = Order::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
            }

            return $objToReturn;
        }


        ///////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Single Load and Array)
        ///////////////////////////////////////////////////
            
        /**
         * Load a single Order object,
         * by Id Index(es)
         * @param integer $intId
         * @return Order
        */
        public static function LoadById($intId) {
            return Order::QuerySingle(
                QQ::Equal(QQN::Order()->Id, $intId)
            );
        }
            
        /**
         * Load an array of Order objects,
         * by AccountId Index(es)
         * @param integer $intAccountId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Order[]
        */
        public static function LoadArrayByAccountId($intAccountId, $objOptionalClauses = null) {
            // Call Order::QueryArray to perform the LoadArrayByAccountId query
            try {
                return Order::QueryArray(
                    QQ::Equal(QQN::Order()->AccountId, $intAccountId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Orders
         * by AccountId Index(es)
         * @param integer $intAccountId
         * @return int
        */
        public static function CountByAccountId($intAccountId) {
            // Call Order::QueryCount to perform the CountByAccountId query
            return Order::QueryCount(
                QQ::Equal(QQN::Order()->AccountId, $intAccountId)
            );
        }
            
        /**
         * Load an array of Order objects,
         * by ShippingMethodId Index(es)
         * @param integer $intShippingMethodId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Order[]
        */
        public static function LoadArrayByShippingMethodId($intShippingMethodId, $objOptionalClauses = null) {
            // Call Order::QueryArray to perform the LoadArrayByShippingMethodId query
            try {
                return Order::QueryArray(
                    QQ::Equal(QQN::Order()->ShippingMethodId, $intShippingMethodId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Orders
         * by ShippingMethodId Index(es)
         * @param integer $intShippingMethodId
         * @return int
        */
        public static function CountByShippingMethodId($intShippingMethodId) {
            // Call Order::QueryCount to perform the CountByShippingMethodId query
            return Order::QueryCount(
                QQ::Equal(QQN::Order()->ShippingMethodId, $intShippingMethodId)
            );
        }
            
        /**
         * Load an array of Order objects,
         * by PaymentMethodId Index(es)
         * @param integer $intPaymentMethodId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Order[]
        */
        public static function LoadArrayByPaymentMethodId($intPaymentMethodId, $objOptionalClauses = null) {
            // Call Order::QueryArray to perform the LoadArrayByPaymentMethodId query
            try {
                return Order::QueryArray(
                    QQ::Equal(QQN::Order()->PaymentMethodId, $intPaymentMethodId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Orders
         * by PaymentMethodId Index(es)
         * @param integer $intPaymentMethodId
         * @return int
        */
        public static function CountByPaymentMethodId($intPaymentMethodId) {
            // Call Order::QueryCount to perform the CountByPaymentMethodId query
            return Order::QueryCount(
                QQ::Equal(QQN::Order()->PaymentMethodId, $intPaymentMethodId)
            );
        }
            
        /**
         * Load an array of Order objects,
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Order[]
        */
        public static function LoadArrayByStatusId($intStatusId, $objOptionalClauses = null) {
            // Call Order::QueryArray to perform the LoadArrayByStatusId query
            try {
                return Order::QueryArray(
                    QQ::Equal(QQN::Order()->StatusId, $intStatusId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Orders
         * by StatusId Index(es)
         * @param integer $intStatusId
         * @return int
        */
        public static function CountByStatusId($intStatusId) {
            // Call Order::QueryCount to perform the CountByStatusId query
            return Order::QueryCount(
                QQ::Equal(QQN::Order()->StatusId, $intStatusId)
            );
        }
            
        /**
         * Load an array of Order objects,
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return Order[]
        */
        public static function LoadArrayByTypeId($intTypeId, $objOptionalClauses = null) {
            // Call Order::QueryArray to perform the LoadArrayByTypeId query
            try {
                return Order::QueryArray(
                    QQ::Equal(QQN::Order()->TypeId, $intTypeId),
                    $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Count Orders
         * by TypeId Index(es)
         * @param integer $intTypeId
         * @return int
        */
        public static function CountByTypeId($intTypeId) {
            // Call Order::QueryCount to perform the CountByTypeId query
            return Order::QueryCount(
                QQ::Equal(QQN::Order()->TypeId, $intTypeId)
            );
        }



        ////////////////////////////////////////////////////
        // INDEX-BASED LOAD METHODS (Array via Many to Many)
        ////////////////////////////////////////////////////


        //////////////////////////
        // SAVE, DELETE AND RELOAD
        //////////////////////////

        /**
         * Save this Order
         * @param bool $blnForceInsert
         * @param bool $blnForceUpdate
         * @return int
         */
        public function Save($blnForceInsert = false, $blnForceUpdate = false) {
            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            $mixToReturn = null;

            try {
                if ((!$this->__blnRestored) || ($blnForceInsert)) {
                    // Perform an INSERT query
                    $objDatabase->NonQuery('
                        INSERT INTO `order` (
                            `account_id`,
                            `completion_date`,
                            `product_total_cost`,
                            `shipping_cost`,
                            `shipping_charged`,
                            `handling_cost`,
                            `handling_charged`,
                            `tax`,
                            `product_total_charged`,
                            `notes`,
                            `shipping_method_id`,
                            `payment_method_id`,
                            `status_id`,
                            `type_id`
                        ) VALUES (
                            ' . $objDatabase->SqlVariable($this->intAccountId) . ',
                            ' . $objDatabase->SqlVariable($this->dttCompletionDate) . ',
                            ' . $objDatabase->SqlVariable($this->fltProductTotalCost) . ',
                            ' . $objDatabase->SqlVariable($this->fltShippingCost) . ',
                            ' . $objDatabase->SqlVariable($this->fltShippingCharged) . ',
                            ' . $objDatabase->SqlVariable($this->fltHandlingCost) . ',
                            ' . $objDatabase->SqlVariable($this->fltHandlingCharged) . ',
                            ' . $objDatabase->SqlVariable($this->fltTax) . ',
                            ' . $objDatabase->SqlVariable($this->fltProductTotalCharged) . ',
                            ' . $objDatabase->SqlVariable($this->strNotes) . ',
                            ' . $objDatabase->SqlVariable($this->intShippingMethodId) . ',
                            ' . $objDatabase->SqlVariable($this->intPaymentMethodId) . ',
                            ' . $objDatabase->SqlVariable($this->intStatusId) . ',
                            ' . $objDatabase->SqlVariable($this->intTypeId) . '
                        )
                    ');

                    // Update Identity column and return its value
                    $mixToReturn = $this->intId = $objDatabase->InsertId('order', 'id');
                } else {
                    // Perform an UPDATE query

                    // First checking for Optimistic Locking constraints (if applicable)
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `creation_date`
                            FROM
                                `order`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strCreationDate)
                            throw new QOptimisticLockingException('Order');
                    }
                    if (!$blnForceUpdate) {
                        // Perform the Optimistic Locking check
                        $objResult = $objDatabase->Query('
                            SELECT
                                `last_modification`
                            FROM
                                `order`
                            WHERE
                                `id` = ' . $objDatabase->SqlVariable($this->intId) . '
                        ');
                        
                        $objRow = $objResult->FetchArray();
                        if ($objRow[0] != $this->strLastModification)
                            throw new QOptimisticLockingException('Order');
                    }

                    // Perform the UPDATE query
                    $objDatabase->NonQuery('
                        UPDATE
                            `order`
                        SET
                            `account_id` = ' . $objDatabase->SqlVariable($this->intAccountId) . ',
                            `completion_date` = ' . $objDatabase->SqlVariable($this->dttCompletionDate) . ',
                            `product_total_cost` = ' . $objDatabase->SqlVariable($this->fltProductTotalCost) . ',
                            `shipping_cost` = ' . $objDatabase->SqlVariable($this->fltShippingCost) . ',
                            `shipping_charged` = ' . $objDatabase->SqlVariable($this->fltShippingCharged) . ',
                            `handling_cost` = ' . $objDatabase->SqlVariable($this->fltHandlingCost) . ',
                            `handling_charged` = ' . $objDatabase->SqlVariable($this->fltHandlingCharged) . ',
                            `tax` = ' . $objDatabase->SqlVariable($this->fltTax) . ',
                            `product_total_charged` = ' . $objDatabase->SqlVariable($this->fltProductTotalCharged) . ',
                            `notes` = ' . $objDatabase->SqlVariable($this->strNotes) . ',
                            `shipping_method_id` = ' . $objDatabase->SqlVariable($this->intShippingMethodId) . ',
                            `payment_method_id` = ' . $objDatabase->SqlVariable($this->intPaymentMethodId) . ',
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

            // Update Local Timestamp
            $objResult = $objDatabase->Query('
                SELECT
                    `creation_date`
                FROM
                    `order`
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
                    `order`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
                        
            $objRow = $objResult->FetchArray();
            $this->strLastModification = $objRow[0];

            // Return 
            return $mixToReturn;
        }

        /**
         * Delete this Order
         * @return void
         */
        public function Delete() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Cannot delete this Order with an unset primary key.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();


            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($this->intId) . '');
        }

        /**
         * Delete all Orders
         * @return void
         */
        public static function DeleteAll() {
            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order`');
        }

        /**
         * Truncate order table
         * @return void
         */
        public static function Truncate() {
            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the Query
            $objDatabase->NonQuery('
                TRUNCATE `order`');
        }

        /**
         * Reload this Order from the database.
         * @return void
         */
        public function Reload() {
            // Make sure we are actually Restored from the database
            if (!$this->__blnRestored)
                throw new QCallerException('Cannot call Reload() on a new, unsaved Order object.');

            // Reload the Object
            $objReloaded = Order::Load($this->intId);

            // Update $this's local variables to match
            $this->AccountId = $objReloaded->AccountId;
            $this->strCreationDate = $objReloaded->strCreationDate;
            $this->strLastModification = $objReloaded->strLastModification;
            $this->dttCompletionDate = $objReloaded->dttCompletionDate;
            $this->fltProductTotalCost = $objReloaded->fltProductTotalCost;
            $this->fltShippingCost = $objReloaded->fltShippingCost;
            $this->fltShippingCharged = $objReloaded->fltShippingCharged;
            $this->fltHandlingCost = $objReloaded->fltHandlingCost;
            $this->fltHandlingCharged = $objReloaded->fltHandlingCharged;
            $this->fltTax = $objReloaded->fltTax;
            $this->fltProductTotalCharged = $objReloaded->fltProductTotalCharged;
            $this->strNotes = $objReloaded->strNotes;
            $this->ShippingMethodId = $objReloaded->ShippingMethodId;
            $this->PaymentMethodId = $objReloaded->PaymentMethodId;
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

                case 'AccountId':
                    /**
                     * Gets the value for intAccountId (Not Null)
                     * @return integer
                     */
                    return $this->intAccountId;

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

                case 'CompletionDate':
                    /**
                     * Gets the value for dttCompletionDate 
                     * @return QDateTime
                     */
                    return $this->dttCompletionDate;

                case 'ProductTotalCost':
                    /**
                     * Gets the value for fltProductTotalCost 
                     * @return double
                     */
                    return $this->fltProductTotalCost;

                case 'ShippingCost':
                    /**
                     * Gets the value for fltShippingCost 
                     * @return double
                     */
                    return $this->fltShippingCost;

                case 'ShippingCharged':
                    /**
                     * Gets the value for fltShippingCharged 
                     * @return double
                     */
                    return $this->fltShippingCharged;

                case 'HandlingCost':
                    /**
                     * Gets the value for fltHandlingCost 
                     * @return double
                     */
                    return $this->fltHandlingCost;

                case 'HandlingCharged':
                    /**
                     * Gets the value for fltHandlingCharged 
                     * @return double
                     */
                    return $this->fltHandlingCharged;

                case 'Tax':
                    /**
                     * Gets the value for fltTax 
                     * @return double
                     */
                    return $this->fltTax;

                case 'ProductTotalCharged':
                    /**
                     * Gets the value for fltProductTotalCharged 
                     * @return double
                     */
                    return $this->fltProductTotalCharged;

                case 'Notes':
                    /**
                     * Gets the value for strNotes 
                     * @return string
                     */
                    return $this->strNotes;

                case 'ShippingMethodId':
                    /**
                     * Gets the value for intShippingMethodId 
                     * @return integer
                     */
                    return $this->intShippingMethodId;

                case 'PaymentMethodId':
                    /**
                     * Gets the value for intPaymentMethodId 
                     * @return integer
                     */
                    return $this->intPaymentMethodId;

                case 'StatusId':
                    /**
                     * Gets the value for intStatusId (Not Null)
                     * @return integer
                     */
                    return $this->intStatusId;

                case 'TypeId':
                    /**
                     * Gets the value for intTypeId 
                     * @return integer
                     */
                    return $this->intTypeId;


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Account':
                    /**
                     * Gets the value for the Account object referenced by intAccountId (Not Null)
                     * @return Account
                     */
                    try {
                        if ((!$this->objAccount) && (!is_null($this->intAccountId)))
                            $this->objAccount = Account::Load($this->intAccountId);
                        return $this->objAccount;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ShippingMethod':
                    /**
                     * Gets the value for the ShippingMethod object referenced by intShippingMethodId 
                     * @return ShippingMethod
                     */
                    try {
                        if ((!$this->objShippingMethod) && (!is_null($this->intShippingMethodId)))
                            $this->objShippingMethod = ShippingMethod::Load($this->intShippingMethodId);
                        return $this->objShippingMethod;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'PaymentMethod':
                    /**
                     * Gets the value for the PaymentMethod object referenced by intPaymentMethodId 
                     * @return PaymentMethod
                     */
                    try {
                        if ((!$this->objPaymentMethod) && (!is_null($this->intPaymentMethodId)))
                            $this->objPaymentMethod = PaymentMethod::Load($this->intPaymentMethodId);
                        return $this->objPaymentMethod;
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }


                ////////////////////////////
                // Virtual Object References (Many to Many and Reverse References)
                // (If restored via a "Many-to" expansion)
                ////////////////////////////

                case '_AuthorizeNetTransaction':
                    /**
                     * Gets the value for the private _objAuthorizeNetTransaction (Read-Only)
                     * if set due to an expansion on the authorize_net_transaction.order_id reverse relationship
                     * @return AuthorizeNetTransaction
                     */
                    return $this->_objAuthorizeNetTransaction;

                case '_AuthorizeNetTransactionArray':
                    /**
                     * Gets the value for the private _objAuthorizeNetTransactionArray (Read-Only)
                     * if set due to an ExpandAsArray on the authorize_net_transaction.order_id reverse relationship
                     * @return AuthorizeNetTransaction[]
                     */
                    return (array) $this->_objAuthorizeNetTransactionArray;

                case '_OrderAddress':
                    /**
                     * Gets the value for the private _objOrderAddress (Read-Only)
                     * if set due to an expansion on the order_address.order_id reverse relationship
                     * @return OrderAddress
                     */
                    return $this->_objOrderAddress;

                case '_OrderAddressArray':
                    /**
                     * Gets the value for the private _objOrderAddressArray (Read-Only)
                     * if set due to an ExpandAsArray on the order_address.order_id reverse relationship
                     * @return OrderAddress[]
                     */
                    return (array) $this->_objOrderAddressArray;

                case '_OrderChange':
                    /**
                     * Gets the value for the private _objOrderChange (Read-Only)
                     * if set due to an expansion on the order_change.order_id reverse relationship
                     * @return OrderChange
                     */
                    return $this->_objOrderChange;

                case '_OrderChangeArray':
                    /**
                     * Gets the value for the private _objOrderChangeArray (Read-Only)
                     * if set due to an ExpandAsArray on the order_change.order_id reverse relationship
                     * @return OrderChange[]
                     */
                    return (array) $this->_objOrderChangeArray;

                case '_OrderItem':
                    /**
                     * Gets the value for the private _objOrderItem (Read-Only)
                     * if set due to an expansion on the order_item.order_id reverse relationship
                     * @return OrderItem
                     */
                    return $this->_objOrderItem;

                case '_OrderItemArray':
                    /**
                     * Gets the value for the private _objOrderItemArray (Read-Only)
                     * if set due to an ExpandAsArray on the order_item.order_id reverse relationship
                     * @return OrderItem[]
                     */
                    return (array) $this->_objOrderItemArray;

                case '_OrderStatusHistory':
                    /**
                     * Gets the value for the private _objOrderStatusHistory (Read-Only)
                     * if set due to an expansion on the order_status_history.order_id reverse relationship
                     * @return OrderStatusHistory
                     */
                    return $this->_objOrderStatusHistory;

                case '_OrderStatusHistoryArray':
                    /**
                     * Gets the value for the private _objOrderStatusHistoryArray (Read-Only)
                     * if set due to an ExpandAsArray on the order_status_history.order_id reverse relationship
                     * @return OrderStatusHistory[]
                     */
                    return (array) $this->_objOrderStatusHistoryArray;

                case '_PaypalTransaction':
                    /**
                     * Gets the value for the private _objPaypalTransaction (Read-Only)
                     * if set due to an expansion on the paypal_transaction.order_id reverse relationship
                     * @return PaypalTransaction
                     */
                    return $this->_objPaypalTransaction;

                case '_PaypalTransactionArray':
                    /**
                     * Gets the value for the private _objPaypalTransactionArray (Read-Only)
                     * if set due to an ExpandAsArray on the paypal_transaction.order_id reverse relationship
                     * @return PaypalTransaction[]
                     */
                    return (array) $this->_objPaypalTransactionArray;

                case '_TrackingNumber':
                    /**
                     * Gets the value for the private _objTrackingNumber (Read-Only)
                     * if set due to an expansion on the tracking_number.order_id reverse relationship
                     * @return TrackingNumber
                     */
                    return $this->_objTrackingNumber;

                case '_TrackingNumberArray':
                    /**
                     * Gets the value for the private _objTrackingNumberArray (Read-Only)
                     * if set due to an ExpandAsArray on the tracking_number.order_id reverse relationship
                     * @return TrackingNumber[]
                     */
                    return (array) $this->_objTrackingNumberArray;


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
                case 'AccountId':
                    /**
                     * Sets the value for intAccountId (Not Null)
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objAccount = null;
                        return ($this->intAccountId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'CompletionDate':
                    /**
                     * Sets the value for dttCompletionDate 
                     * @param QDateTime $mixValue
                     * @return QDateTime
                     */
                    try {
                        return ($this->dttCompletionDate = QType::Cast($mixValue, QType::DateTime));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ProductTotalCost':
                    /**
                     * Sets the value for fltProductTotalCost 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltProductTotalCost = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ShippingCost':
                    /**
                     * Sets the value for fltShippingCost 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltShippingCost = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ShippingCharged':
                    /**
                     * Sets the value for fltShippingCharged 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltShippingCharged = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'HandlingCost':
                    /**
                     * Sets the value for fltHandlingCost 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltHandlingCost = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'HandlingCharged':
                    /**
                     * Sets the value for fltHandlingCharged 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltHandlingCharged = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Tax':
                    /**
                     * Sets the value for fltTax 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltTax = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ProductTotalCharged':
                    /**
                     * Sets the value for fltProductTotalCharged 
                     * @param double $mixValue
                     * @return double
                     */
                    try {
                        return ($this->fltProductTotalCharged = QType::Cast($mixValue, QType::Float));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'Notes':
                    /**
                     * Sets the value for strNotes 
                     * @param string $mixValue
                     * @return string
                     */
                    try {
                        return ($this->strNotes = QType::Cast($mixValue, QType::String));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'ShippingMethodId':
                    /**
                     * Sets the value for intShippingMethodId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objShippingMethod = null;
                        return ($this->intShippingMethodId = QType::Cast($mixValue, QType::Integer));
                    } catch (QCallerException $objExc) {
                        $objExc->IncrementOffset();
                        throw $objExc;
                    }

                case 'PaymentMethodId':
                    /**
                     * Sets the value for intPaymentMethodId 
                     * @param integer $mixValue
                     * @return integer
                     */
                    try {
                        $this->objPaymentMethod = null;
                        return ($this->intPaymentMethodId = QType::Cast($mixValue, QType::Integer));
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


                ///////////////////
                // Member Objects
                ///////////////////
                case 'Account':
                    /**
                     * Sets the value for the Account object referenced by intAccountId (Not Null)
                     * @param Account $mixValue
                     * @return Account
                     */
                    if (is_null($mixValue)) {
                        $this->intAccountId = null;
                        $this->objAccount = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a Account object
                        try {
                            $mixValue = QType::Cast($mixValue, 'Account');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED Account object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved Account for this Order');

                        // Update Local Member Variables
                        $this->objAccount = $mixValue;
                        $this->intAccountId = $mixValue->Id;

                        // Return $mixValue
                        return $mixValue;
                    }
                    break;

                case 'ShippingMethod':
                    /**
                     * Sets the value for the ShippingMethod object referenced by intShippingMethodId 
                     * @param ShippingMethod $mixValue
                     * @return ShippingMethod
                     */
                    if (is_null($mixValue)) {
                        $this->intShippingMethodId = null;
                        $this->objShippingMethod = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a ShippingMethod object
                        try {
                            $mixValue = QType::Cast($mixValue, 'ShippingMethod');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED ShippingMethod object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved ShippingMethod for this Order');

                        // Update Local Member Variables
                        $this->objShippingMethod = $mixValue;
                        $this->intShippingMethodId = $mixValue->Id;

                        // Return $mixValue
                        return $mixValue;
                    }
                    break;

                case 'PaymentMethod':
                    /**
                     * Sets the value for the PaymentMethod object referenced by intPaymentMethodId 
                     * @param PaymentMethod $mixValue
                     * @return PaymentMethod
                     */
                    if (is_null($mixValue)) {
                        $this->intPaymentMethodId = null;
                        $this->objPaymentMethod = null;
                        return null;
                    } else {
                        // Make sure $mixValue actually is a PaymentMethod object
                        try {
                            $mixValue = QType::Cast($mixValue, 'PaymentMethod');
                        } catch (QInvalidCastException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                        } 

                        // Make sure $mixValue is a SAVED PaymentMethod object
                        if (is_null($mixValue->Id))
                            throw new QCallerException('Unable to set an unsaved PaymentMethod for this Order');

                        // Update Local Member Variables
                        $this->objPaymentMethod = $mixValue;
                        $this->intPaymentMethodId = $mixValue->Id;

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

            
        
        // Related Objects' Methods for AuthorizeNetTransaction
        //-------------------------------------------------------------------

        /**
         * Gets all associated AuthorizeNetTransactions as an array of AuthorizeNetTransaction objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return AuthorizeNetTransaction[]
        */ 
        public function GetAuthorizeNetTransactionArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return AuthorizeNetTransaction::LoadArrayByOrderId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated AuthorizeNetTransactions
         * @return int
        */ 
        public function CountAuthorizeNetTransactions() {
            if ((is_null($this->intId)))
                return 0;

            return AuthorizeNetTransaction::CountByOrderId($this->intId);
        }

        /**
         * Associates a AuthorizeNetTransaction
         * @param AuthorizeNetTransaction $objAuthorizeNetTransaction
         * @return void
        */ 
        public function AssociateAuthorizeNetTransaction(AuthorizeNetTransaction $objAuthorizeNetTransaction) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateAuthorizeNetTransaction on this unsaved Order.');
            if ((is_null($objAuthorizeNetTransaction->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateAuthorizeNetTransaction on this Order with an unsaved AuthorizeNetTransaction.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `authorize_net_transaction`
                SET
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objAuthorizeNetTransaction->Id) . '
            ');
        }

        /**
         * Unassociates a AuthorizeNetTransaction
         * @param AuthorizeNetTransaction $objAuthorizeNetTransaction
         * @return void
        */ 
        public function UnassociateAuthorizeNetTransaction(AuthorizeNetTransaction $objAuthorizeNetTransaction) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAuthorizeNetTransaction on this unsaved Order.');
            if ((is_null($objAuthorizeNetTransaction->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAuthorizeNetTransaction on this Order with an unsaved AuthorizeNetTransaction.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `authorize_net_transaction`
                SET
                    `order_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objAuthorizeNetTransaction->Id) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all AuthorizeNetTransactions
         * @return void
        */ 
        public function UnassociateAllAuthorizeNetTransactions() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAuthorizeNetTransaction on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `authorize_net_transaction`
                SET
                    `order_id` = null
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated AuthorizeNetTransaction
         * @param AuthorizeNetTransaction $objAuthorizeNetTransaction
         * @return void
        */ 
        public function DeleteAssociatedAuthorizeNetTransaction(AuthorizeNetTransaction $objAuthorizeNetTransaction) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAuthorizeNetTransaction on this unsaved Order.');
            if ((is_null($objAuthorizeNetTransaction->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAuthorizeNetTransaction on this Order with an unsaved AuthorizeNetTransaction.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `authorize_net_transaction`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objAuthorizeNetTransaction->Id) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated AuthorizeNetTransactions
         * @return void
        */ 
        public function DeleteAllAuthorizeNetTransactions() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAuthorizeNetTransaction on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `authorize_net_transaction`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for OrderAddress
        //-------------------------------------------------------------------

        /**
         * Gets all associated OrderAddresses as an array of OrderAddress objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return OrderAddress[]
        */ 
        public function GetOrderAddressArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return OrderAddress::LoadArrayByOrderId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated OrderAddresses
         * @return int
        */ 
        public function CountOrderAddresses() {
            if ((is_null($this->intId)))
                return 0;

            return OrderAddress::CountByOrderId($this->intId);
        }

        /**
         * Associates a OrderAddress
         * @param OrderAddress $objOrderAddress
         * @return void
        */ 
        public function AssociateOrderAddress(OrderAddress $objOrderAddress) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrderAddress on this unsaved Order.');
            if ((is_null($objOrderAddress->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrderAddress on this Order with an unsaved OrderAddress.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_address`
                SET
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrderAddress->Id) . '
            ');
        }

        /**
         * Unassociates a OrderAddress
         * @param OrderAddress $objOrderAddress
         * @return void
        */ 
        public function UnassociateOrderAddress(OrderAddress $objOrderAddress) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderAddress on this unsaved Order.');
            if ((is_null($objOrderAddress->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderAddress on this Order with an unsaved OrderAddress.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_address`
                SET
                    `order_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrderAddress->Id) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all OrderAddresses
         * @return void
        */ 
        public function UnassociateAllOrderAddresses() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderAddress on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_address`
                SET
                    `order_id` = null
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated OrderAddress
         * @param OrderAddress $objOrderAddress
         * @return void
        */ 
        public function DeleteAssociatedOrderAddress(OrderAddress $objOrderAddress) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderAddress on this unsaved Order.');
            if ((is_null($objOrderAddress->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderAddress on this Order with an unsaved OrderAddress.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_address`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrderAddress->Id) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated OrderAddresses
         * @return void
        */ 
        public function DeleteAllOrderAddresses() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderAddress on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_address`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for OrderChange
        //-------------------------------------------------------------------

        /**
         * Gets all associated OrderChanges as an array of OrderChange objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return OrderChange[]
        */ 
        public function GetOrderChangeArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return OrderChange::LoadArrayByOrderId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated OrderChanges
         * @return int
        */ 
        public function CountOrderChanges() {
            if ((is_null($this->intId)))
                return 0;

            return OrderChange::CountByOrderId($this->intId);
        }

        /**
         * Associates a OrderChange
         * @param OrderChange $objOrderChange
         * @return void
        */ 
        public function AssociateOrderChange(OrderChange $objOrderChange) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrderChange on this unsaved Order.');
            if ((is_null($objOrderChange->OrderId)) || (is_null($objOrderChange->Date)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrderChange on this Order with an unsaved OrderChange.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_change`
                SET
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($objOrderChange->OrderId) . ' AND
                    `date` = ' . $objDatabase->SqlVariable($objOrderChange->Date) . '
            ');
        }

        /**
         * Unassociates a OrderChange
         * @param OrderChange $objOrderChange
         * @return void
        */ 
        public function UnassociateOrderChange(OrderChange $objOrderChange) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderChange on this unsaved Order.');
            if ((is_null($objOrderChange->OrderId)) || (is_null($objOrderChange->Date)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderChange on this Order with an unsaved OrderChange.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_change`
                SET
                    `order_id` = null
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($objOrderChange->OrderId) . ' AND
                    `date` = ' . $objDatabase->SqlVariable($objOrderChange->Date) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all OrderChanges
         * @return void
        */ 
        public function UnassociateAllOrderChanges() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderChange on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_change`
                SET
                    `order_id` = null
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated OrderChange
         * @param OrderChange $objOrderChange
         * @return void
        */ 
        public function DeleteAssociatedOrderChange(OrderChange $objOrderChange) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderChange on this unsaved Order.');
            if ((is_null($objOrderChange->OrderId)) || (is_null($objOrderChange->Date)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderChange on this Order with an unsaved OrderChange.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_change`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($objOrderChange->OrderId) . ' AND
                    `date` = ' . $objDatabase->SqlVariable($objOrderChange->Date) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated OrderChanges
         * @return void
        */ 
        public function DeleteAllOrderChanges() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderChange on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_change`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
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
                return OrderItem::LoadArrayByOrderId($this->intId, $objOptionalClauses);
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

            return OrderItem::CountByOrderId($this->intId);
        }

        /**
         * Associates a OrderItem
         * @param OrderItem $objOrderItem
         * @return void
        */ 
        public function AssociateOrderItem(OrderItem $objOrderItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrderItem on this unsaved Order.');
            if ((is_null($objOrderItem->OrderId)) || (is_null($objOrderItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrderItem on this Order with an unsaved OrderItem.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_item`
                SET
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this unsaved Order.');
            if ((is_null($objOrderItem->OrderId)) || (is_null($objOrderItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this Order with an unsaved OrderItem.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_item`
                SET
                    `order_id` = null
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($objOrderItem->OrderId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objOrderItem->ProductId) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all OrderItems
         * @return void
        */ 
        public function UnassociateAllOrderItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_item`
                SET
                    `order_id` = null
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated OrderItem
         * @param OrderItem $objOrderItem
         * @return void
        */ 
        public function DeleteAssociatedOrderItem(OrderItem $objOrderItem) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this unsaved Order.');
            if ((is_null($objOrderItem->OrderId)) || (is_null($objOrderItem->ProductId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this Order with an unsaved OrderItem.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_item`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($objOrderItem->OrderId) . ' AND
                    `product_id` = ' . $objDatabase->SqlVariable($objOrderItem->ProductId) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated OrderItems
         * @return void
        */ 
        public function DeleteAllOrderItems() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderItem on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_item`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for OrderStatusHistory
        //-------------------------------------------------------------------

        /**
         * Gets all associated OrderStatusHistories as an array of OrderStatusHistory objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return OrderStatusHistory[]
        */ 
        public function GetOrderStatusHistoryArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return OrderStatusHistory::LoadArrayByOrderId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated OrderStatusHistories
         * @return int
        */ 
        public function CountOrderStatusHistories() {
            if ((is_null($this->intId)))
                return 0;

            return OrderStatusHistory::CountByOrderId($this->intId);
        }

        /**
         * Associates a OrderStatusHistory
         * @param OrderStatusHistory $objOrderStatusHistory
         * @return void
        */ 
        public function AssociateOrderStatusHistory(OrderStatusHistory $objOrderStatusHistory) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrderStatusHistory on this unsaved Order.');
            if ((is_null($objOrderStatusHistory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateOrderStatusHistory on this Order with an unsaved OrderStatusHistory.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_status_history`
                SET
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrderStatusHistory->Id) . '
            ');
        }

        /**
         * Unassociates a OrderStatusHistory
         * @param OrderStatusHistory $objOrderStatusHistory
         * @return void
        */ 
        public function UnassociateOrderStatusHistory(OrderStatusHistory $objOrderStatusHistory) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderStatusHistory on this unsaved Order.');
            if ((is_null($objOrderStatusHistory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderStatusHistory on this Order with an unsaved OrderStatusHistory.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_status_history`
                SET
                    `order_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrderStatusHistory->Id) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all OrderStatusHistories
         * @return void
        */ 
        public function UnassociateAllOrderStatusHistories() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderStatusHistory on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `order_status_history`
                SET
                    `order_id` = null
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated OrderStatusHistory
         * @param OrderStatusHistory $objOrderStatusHistory
         * @return void
        */ 
        public function DeleteAssociatedOrderStatusHistory(OrderStatusHistory $objOrderStatusHistory) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderStatusHistory on this unsaved Order.');
            if ((is_null($objOrderStatusHistory->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderStatusHistory on this Order with an unsaved OrderStatusHistory.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_status_history`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objOrderStatusHistory->Id) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated OrderStatusHistories
         * @return void
        */ 
        public function DeleteAllOrderStatusHistories() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateOrderStatusHistory on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `order_status_history`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for PaypalTransaction
        //-------------------------------------------------------------------

        /**
         * Gets all associated PaypalTransactions as an array of PaypalTransaction objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return PaypalTransaction[]
        */ 
        public function GetPaypalTransactionArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return PaypalTransaction::LoadArrayByOrderId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated PaypalTransactions
         * @return int
        */ 
        public function CountPaypalTransactions() {
            if ((is_null($this->intId)))
                return 0;

            return PaypalTransaction::CountByOrderId($this->intId);
        }

        /**
         * Associates a PaypalTransaction
         * @param PaypalTransaction $objPaypalTransaction
         * @return void
        */ 
        public function AssociatePaypalTransaction(PaypalTransaction $objPaypalTransaction) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePaypalTransaction on this unsaved Order.');
            if ((is_null($objPaypalTransaction->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociatePaypalTransaction on this Order with an unsaved PaypalTransaction.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `paypal_transaction`
                SET
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objPaypalTransaction->Id) . '
            ');
        }

        /**
         * Unassociates a PaypalTransaction
         * @param PaypalTransaction $objPaypalTransaction
         * @return void
        */ 
        public function UnassociatePaypalTransaction(PaypalTransaction $objPaypalTransaction) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePaypalTransaction on this unsaved Order.');
            if ((is_null($objPaypalTransaction->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePaypalTransaction on this Order with an unsaved PaypalTransaction.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `paypal_transaction`
                SET
                    `order_id` = null
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objPaypalTransaction->Id) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all PaypalTransactions
         * @return void
        */ 
        public function UnassociateAllPaypalTransactions() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePaypalTransaction on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `paypal_transaction`
                SET
                    `order_id` = null
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated PaypalTransaction
         * @param PaypalTransaction $objPaypalTransaction
         * @return void
        */ 
        public function DeleteAssociatedPaypalTransaction(PaypalTransaction $objPaypalTransaction) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePaypalTransaction on this unsaved Order.');
            if ((is_null($objPaypalTransaction->Id)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePaypalTransaction on this Order with an unsaved PaypalTransaction.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `paypal_transaction`
                WHERE
                    `id` = ' . $objDatabase->SqlVariable($objPaypalTransaction->Id) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated PaypalTransactions
         * @return void
        */ 
        public function DeleteAllPaypalTransactions() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePaypalTransaction on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `paypal_transaction`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

            
        
        // Related Objects' Methods for TrackingNumber
        //-------------------------------------------------------------------

        /**
         * Gets all associated TrackingNumbers as an array of TrackingNumber objects
         * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
         * @return TrackingNumber[]
        */ 
        public function GetTrackingNumberArray($objOptionalClauses = null) {
            if ((is_null($this->intId)))
                return array();

            try {
                return TrackingNumber::LoadArrayByOrderId($this->intId, $objOptionalClauses);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * Counts all associated TrackingNumbers
         * @return int
        */ 
        public function CountTrackingNumbers() {
            if ((is_null($this->intId)))
                return 0;

            return TrackingNumber::CountByOrderId($this->intId);
        }

        /**
         * Associates a TrackingNumber
         * @param TrackingNumber $objTrackingNumber
         * @return void
        */ 
        public function AssociateTrackingNumber(TrackingNumber $objTrackingNumber) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateTrackingNumber on this unsaved Order.');
            if ((is_null($objTrackingNumber->OrderId)) || (is_null($objTrackingNumber->Number)))
                throw new QUndefinedPrimaryKeyException('Unable to call AssociateTrackingNumber on this Order with an unsaved TrackingNumber.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `tracking_number`
                SET
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($objTrackingNumber->OrderId) . ' AND
                    `number` = ' . $objDatabase->SqlVariable($objTrackingNumber->Number) . '
            ');
        }

        /**
         * Unassociates a TrackingNumber
         * @param TrackingNumber $objTrackingNumber
         * @return void
        */ 
        public function UnassociateTrackingNumber(TrackingNumber $objTrackingNumber) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTrackingNumber on this unsaved Order.');
            if ((is_null($objTrackingNumber->OrderId)) || (is_null($objTrackingNumber->Number)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTrackingNumber on this Order with an unsaved TrackingNumber.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `tracking_number`
                SET
                    `order_id` = null
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($objTrackingNumber->OrderId) . ' AND
                    `number` = ' . $objDatabase->SqlVariable($objTrackingNumber->Number) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Unassociates all TrackingNumbers
         * @return void
        */ 
        public function UnassociateAllTrackingNumbers() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTrackingNumber on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                UPDATE
                    `tracking_number`
                SET
                    `order_id` = null
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes an associated TrackingNumber
         * @param TrackingNumber $objTrackingNumber
         * @return void
        */ 
        public function DeleteAssociatedTrackingNumber(TrackingNumber $objTrackingNumber) {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTrackingNumber on this unsaved Order.');
            if ((is_null($objTrackingNumber->OrderId)) || (is_null($objTrackingNumber->Number)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTrackingNumber on this Order with an unsaved TrackingNumber.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `tracking_number`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($objTrackingNumber->OrderId) . ' AND
                    `number` = ' . $objDatabase->SqlVariable($objTrackingNumber->Number) . ' AND
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }

        /**
         * Deletes all associated TrackingNumbers
         * @return void
        */ 
        public function DeleteAllTrackingNumbers() {
            if ((is_null($this->intId)))
                throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTrackingNumber on this unsaved Order.');

            // Get the Database Object for this Class
            $objDatabase = Order::GetDatabase();

            // Perform the SQL Query
            $objDatabase->NonQuery('
                DELETE FROM
                    `tracking_number`
                WHERE
                    `order_id` = ' . $objDatabase->SqlVariable($this->intId) . '
            ');
        }




    }

    /////////////////////////////////////
    // ADDITIONAL CLASSES for QCODO QUERY
    /////////////////////////////////////

    class QQNodeOrder extends QQNode {
        protected $strTableName = 'order';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Order';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'AccountId':
                    return new QQNode('account_id', 'AccountId', 'integer', $this);
                case 'Account':
                    return new QQNodeAccount('account_id', 'Account', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'LastModification':
                    return new QQNode('last_modification', 'LastModification', 'string', $this);
                case 'CompletionDate':
                    return new QQNode('completion_date', 'CompletionDate', 'QDateTime', $this);
                case 'ProductTotalCost':
                    return new QQNode('product_total_cost', 'ProductTotalCost', 'double', $this);
                case 'ShippingCost':
                    return new QQNode('shipping_cost', 'ShippingCost', 'double', $this);
                case 'ShippingCharged':
                    return new QQNode('shipping_charged', 'ShippingCharged', 'double', $this);
                case 'HandlingCost':
                    return new QQNode('handling_cost', 'HandlingCost', 'double', $this);
                case 'HandlingCharged':
                    return new QQNode('handling_charged', 'HandlingCharged', 'double', $this);
                case 'Tax':
                    return new QQNode('tax', 'Tax', 'double', $this);
                case 'ProductTotalCharged':
                    return new QQNode('product_total_charged', 'ProductTotalCharged', 'double', $this);
                case 'Notes':
                    return new QQNode('notes', 'Notes', 'string', $this);
                case 'ShippingMethodId':
                    return new QQNode('shipping_method_id', 'ShippingMethodId', 'integer', $this);
                case 'ShippingMethod':
                    return new QQNodeShippingMethod('shipping_method_id', 'ShippingMethod', 'integer', $this);
                case 'PaymentMethodId':
                    return new QQNode('payment_method_id', 'PaymentMethodId', 'integer', $this);
                case 'PaymentMethod':
                    return new QQNodePaymentMethod('payment_method_id', 'PaymentMethod', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'AuthorizeNetTransaction':
                    return new QQReverseReferenceNodeAuthorizeNetTransaction($this, 'authorizenettransaction', 'reverse_reference', 'order_id');
                case 'OrderAddress':
                    return new QQReverseReferenceNodeOrderAddress($this, 'orderaddress', 'reverse_reference', 'order_id');
                case 'OrderChange':
                    return new QQReverseReferenceNodeOrderChange($this, 'orderchange', 'reverse_reference', 'order_id');
                case 'OrderItem':
                    return new QQReverseReferenceNodeOrderItem($this, 'orderitem', 'reverse_reference', 'order_id');
                case 'OrderStatusHistory':
                    return new QQReverseReferenceNodeOrderStatusHistory($this, 'orderstatushistory', 'reverse_reference', 'order_id');
                case 'PaypalTransaction':
                    return new QQReverseReferenceNodePaypalTransaction($this, 'paypaltransaction', 'reverse_reference', 'order_id');
                case 'TrackingNumber':
                    return new QQReverseReferenceNodeTrackingNumber($this, 'trackingnumber', 'reverse_reference', 'order_id');

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

    class QQReverseReferenceNodeOrder extends QQReverseReferenceNode {
        protected $strTableName = 'order';
        protected $strPrimaryKey = 'id';
        protected $strClassName = 'Order';
        public function __get($strName) {
            switch ($strName) {
                case 'Id':
                    return new QQNode('id', 'Id', 'integer', $this);
                case 'AccountId':
                    return new QQNode('account_id', 'AccountId', 'integer', $this);
                case 'Account':
                    return new QQNodeAccount('account_id', 'Account', 'integer', $this);
                case 'CreationDate':
                    return new QQNode('creation_date', 'CreationDate', 'string', $this);
                case 'LastModification':
                    return new QQNode('last_modification', 'LastModification', 'string', $this);
                case 'CompletionDate':
                    return new QQNode('completion_date', 'CompletionDate', 'QDateTime', $this);
                case 'ProductTotalCost':
                    return new QQNode('product_total_cost', 'ProductTotalCost', 'double', $this);
                case 'ShippingCost':
                    return new QQNode('shipping_cost', 'ShippingCost', 'double', $this);
                case 'ShippingCharged':
                    return new QQNode('shipping_charged', 'ShippingCharged', 'double', $this);
                case 'HandlingCost':
                    return new QQNode('handling_cost', 'HandlingCost', 'double', $this);
                case 'HandlingCharged':
                    return new QQNode('handling_charged', 'HandlingCharged', 'double', $this);
                case 'Tax':
                    return new QQNode('tax', 'Tax', 'double', $this);
                case 'ProductTotalCharged':
                    return new QQNode('product_total_charged', 'ProductTotalCharged', 'double', $this);
                case 'Notes':
                    return new QQNode('notes', 'Notes', 'string', $this);
                case 'ShippingMethodId':
                    return new QQNode('shipping_method_id', 'ShippingMethodId', 'integer', $this);
                case 'ShippingMethod':
                    return new QQNodeShippingMethod('shipping_method_id', 'ShippingMethod', 'integer', $this);
                case 'PaymentMethodId':
                    return new QQNode('payment_method_id', 'PaymentMethodId', 'integer', $this);
                case 'PaymentMethod':
                    return new QQNodePaymentMethod('payment_method_id', 'PaymentMethod', 'integer', $this);
                case 'StatusId':
                    return new QQNode('status_id', 'StatusId', 'integer', $this);
                case 'TypeId':
                    return new QQNode('type_id', 'TypeId', 'integer', $this);
                case 'AuthorizeNetTransaction':
                    return new QQReverseReferenceNodeAuthorizeNetTransaction($this, 'authorizenettransaction', 'reverse_reference', 'order_id');
                case 'OrderAddress':
                    return new QQReverseReferenceNodeOrderAddress($this, 'orderaddress', 'reverse_reference', 'order_id');
                case 'OrderChange':
                    return new QQReverseReferenceNodeOrderChange($this, 'orderchange', 'reverse_reference', 'order_id');
                case 'OrderItem':
                    return new QQReverseReferenceNodeOrderItem($this, 'orderitem', 'reverse_reference', 'order_id');
                case 'OrderStatusHistory':
                    return new QQReverseReferenceNodeOrderStatusHistory($this, 'orderstatushistory', 'reverse_reference', 'order_id');
                case 'PaypalTransaction':
                    return new QQReverseReferenceNodePaypalTransaction($this, 'paypaltransaction', 'reverse_reference', 'order_id');
                case 'TrackingNumber':
                    return new QQReverseReferenceNodeTrackingNumber($this, 'trackingnumber', 'reverse_reference', 'order_id');

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