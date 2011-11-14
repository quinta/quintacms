<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the OrderItem class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single OrderItem object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a OrderItemMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read OrderItem $OrderItem the actual OrderItem data class being edited
     * property QListBox $OrderIdControl
     * property-read QLabel $OrderIdLabel
     * property QListBox $ProductIdControl
     * property-read QLabel $ProductIdLabel
     * property QIntegerTextBox $QuantityControl
     * property-read QLabel $QuantityLabel
     * property QListBox $StatusIdControl
     * property-read QLabel $StatusIdLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class OrderItemMetaControlGen extends QBaseClass {
        // General Variables
        protected $objOrderItem;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of OrderItem's individual data fields
        protected $lstOrder;
        protected $lstProduct;
        protected $txtQuantity;
        protected $lstStatus;

        // Controls that allow the viewing of OrderItem's individual data fields
        protected $lblOrderId;
        protected $lblProductId;
        protected $lblQuantity;
        protected $lblStatusId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * OrderItemMetaControl to edit a single OrderItem object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single OrderItem object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderItemMetaControl
         * @param OrderItem $objOrderItem new or existing OrderItem object
         */
         public function __construct($objParentObject, OrderItem $objOrderItem) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this OrderItemMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked OrderItem object
            $this->objOrderItem = $objOrderItem;

            // Figure out if we're Editing or Creating New
            if ($this->objOrderItem->__Restored) {
                $this->strTitleVerb = QApplication::Translate('Edit');
                $this->blnEditMode = true;
            } else {
                $this->strTitleVerb = QApplication::Translate('Create');
                $this->blnEditMode = false;
            }
         }

        /**
         * Static Helper Method to Create using PK arguments
         * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
         * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
         * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
         * edit, or if we are also allowed to create a new one, etc.
         * 
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderItemMetaControl
         * @param integer $intOrderId primary key value
         * @param integer $intProductId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing OrderItem object creation - defaults to CreateOrEdit
         * @return OrderItemMetaControl
         */
        public static function Create($objParentObject, $intOrderId = null, $intProductId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intOrderId) && strlen($intProductId)) {
                $objOrderItem = OrderItem::Load($intOrderId, $intProductId);

                // OrderItem was found -- return it!
                if ($objOrderItem)
                    return new OrderItemMetaControl($objParentObject, $objOrderItem);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a OrderItem object with PK arguments: ' . $intOrderId . ', ' . $intProductId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new OrderItemMetaControl($objParentObject, new OrderItem());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderItemMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing OrderItem object creation - defaults to CreateOrEdit
         * @return OrderItemMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intOrderId = QApplication::PathInfo(0);
            $intProductId = QApplication::PathInfo(1);
            return OrderItemMetaControl::Create($objParentObject, $intOrderId, $intProductId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderItemMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing OrderItem object creation - defaults to CreateOrEdit
         * @return OrderItemMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intOrderId = QApplication::QueryString('intOrderId');
            $intProductId = QApplication::QueryString('intProductId');
            return OrderItemMetaControl::Create($objParentObject, $intOrderId, $intProductId, $intCreateType);
        }



        ///////////////////////////////////////////////
        // PUBLIC CREATE and REFRESH METHODS
        ///////////////////////////////////////////////

        /**
         * Create and setup QListBox lstOrder
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstOrder_Create($strControlId = null) {
            $this->lstOrder = new QListBox($this->objParentObject, $strControlId);
            $this->lstOrder->Name = QApplication::Translate('Order');
            $this->lstOrder->Required = true;
            if (!$this->blnEditMode)
                $this->lstOrder->AddItem(QApplication::Translate('- Select One -'), null);
            $objOrderArray = Order::LoadAll();
            if ($objOrderArray) foreach ($objOrderArray as $objOrder) {
                $objListItem = new QListItem($objOrder->__toString(), $objOrder->Id);
                if (($this->objOrderItem->Order) && ($this->objOrderItem->Order->Id == $objOrder->Id))
                    $objListItem->Selected = true;
                $this->lstOrder->AddItem($objListItem);
            }
            return $this->lstOrder;
        }

        /**
         * Create and setup QLabel lblOrderId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblOrderId_Create($strControlId = null) {
            $this->lblOrderId = new QLabel($this->objParentObject, $strControlId);
            $this->lblOrderId->Name = QApplication::Translate('Order');
            $this->lblOrderId->Text = ($this->objOrderItem->Order) ? $this->objOrderItem->Order->__toString() : null;
            $this->lblOrderId->Required = true;
            return $this->lblOrderId;
        }

        /**
         * Create and setup QListBox lstProduct
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstProduct_Create($strControlId = null) {
            $this->lstProduct = new QListBox($this->objParentObject, $strControlId);
            $this->lstProduct->Name = QApplication::Translate('Product');
            $this->lstProduct->Required = true;
            if (!$this->blnEditMode)
                $this->lstProduct->AddItem(QApplication::Translate('- Select One -'), null);
            $objProductArray = Product::LoadAll();
            if ($objProductArray) foreach ($objProductArray as $objProduct) {
                $objListItem = new QListItem($objProduct->__toString(), $objProduct->Id);
                if (($this->objOrderItem->Product) && ($this->objOrderItem->Product->Id == $objProduct->Id))
                    $objListItem->Selected = true;
                $this->lstProduct->AddItem($objListItem);
            }
            return $this->lstProduct;
        }

        /**
         * Create and setup QLabel lblProductId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblProductId_Create($strControlId = null) {
            $this->lblProductId = new QLabel($this->objParentObject, $strControlId);
            $this->lblProductId->Name = QApplication::Translate('Product');
            $this->lblProductId->Text = ($this->objOrderItem->Product) ? $this->objOrderItem->Product->__toString() : null;
            $this->lblProductId->Required = true;
            return $this->lblProductId;
        }

        /**
         * Create and setup QIntegerTextBox txtQuantity
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtQuantity_Create($strControlId = null) {
            $this->txtQuantity = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtQuantity->Name = QApplication::Translate('Quantity');
            $this->txtQuantity->Text = $this->objOrderItem->Quantity;
            $this->txtQuantity->Required = true;
            return $this->txtQuantity;
        }

        /**
         * Create and setup QLabel lblQuantity
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblQuantity_Create($strControlId = null, $strFormat = null) {
            $this->lblQuantity = new QLabel($this->objParentObject, $strControlId);
            $this->lblQuantity->Name = QApplication::Translate('Quantity');
            $this->lblQuantity->Text = $this->objOrderItem->Quantity;
            $this->lblQuantity->Required = true;
            $this->lblQuantity->Format = $strFormat;
            return $this->lblQuantity;
        }

        /**
         * Create and setup QListBox lstStatus
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstStatus_Create($strControlId = null) {
            $this->lstStatus = new QListBox($this->objParentObject, $strControlId);
            $this->lstStatus->Name = QApplication::Translate('Status');
            $this->lstStatus->Required = true;
            foreach (OrderItemStatusType::$NameArray as $intId => $strValue)
                $this->lstStatus->AddItem(new QListItem($strValue, $intId, $this->objOrderItem->StatusId == $intId));
            return $this->lstStatus;
        }

        /**
         * Create and setup QLabel lblStatusId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblStatusId_Create($strControlId = null) {
            $this->lblStatusId = new QLabel($this->objParentObject, $strControlId);
            $this->lblStatusId->Name = QApplication::Translate('Status');
            $this->lblStatusId->Text = ($this->objOrderItem->StatusId) ? OrderItemStatusType::$NameArray[$this->objOrderItem->StatusId] : null;
            $this->lblStatusId->Required = true;
            return $this->lblStatusId;
        }



        /**
         * Refresh this MetaControl with Data from the local OrderItem object.
         * @param boolean $blnReload reload OrderItem from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objOrderItem->Reload();

            if ($this->lstOrder) {
                    $this->lstOrder->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstOrder->AddItem(QApplication::Translate('- Select One -'), null);
                $objOrderArray = Order::LoadAll();
                if ($objOrderArray) foreach ($objOrderArray as $objOrder) {
                    $objListItem = new QListItem($objOrder->__toString(), $objOrder->Id);
                    if (($this->objOrderItem->Order) && ($this->objOrderItem->Order->Id == $objOrder->Id))
                        $objListItem->Selected = true;
                    $this->lstOrder->AddItem($objListItem);
                }
            }
            if ($this->lblOrderId) $this->lblOrderId->Text = ($this->objOrderItem->Order) ? $this->objOrderItem->Order->__toString() : null;

            if ($this->lstProduct) {
                    $this->lstProduct->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstProduct->AddItem(QApplication::Translate('- Select One -'), null);
                $objProductArray = Product::LoadAll();
                if ($objProductArray) foreach ($objProductArray as $objProduct) {
                    $objListItem = new QListItem($objProduct->__toString(), $objProduct->Id);
                    if (($this->objOrderItem->Product) && ($this->objOrderItem->Product->Id == $objProduct->Id))
                        $objListItem->Selected = true;
                    $this->lstProduct->AddItem($objListItem);
                }
            }
            if ($this->lblProductId) $this->lblProductId->Text = ($this->objOrderItem->Product) ? $this->objOrderItem->Product->__toString() : null;

            if ($this->txtQuantity) $this->txtQuantity->Text = $this->objOrderItem->Quantity;
            if ($this->lblQuantity) $this->lblQuantity->Text = $this->objOrderItem->Quantity;

            if ($this->lstStatus) $this->lstStatus->SelectedValue = $this->objOrderItem->StatusId;
            if ($this->lblStatusId) $this->lblStatusId->Text = ($this->objOrderItem->StatusId) ? OrderItemStatusType::$NameArray[$this->objOrderItem->StatusId] : null;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC ORDERITEM OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's OrderItem instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveOrderItem() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstOrder) $this->objOrderItem->OrderId = $this->lstOrder->SelectedValue;
                if ($this->lstProduct) $this->objOrderItem->ProductId = $this->lstProduct->SelectedValue;
                if ($this->txtQuantity) $this->objOrderItem->Quantity = $this->txtQuantity->Text;
                if ($this->lstStatus) $this->objOrderItem->StatusId = $this->lstStatus->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the OrderItem object
                $this->objOrderItem->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's OrderItem instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteOrderItem() {
            $this->objOrderItem->Delete();
        }       



        ///////////////////////////////////////////////
        // PUBLIC GETTERS and SETTERS
        ///////////////////////////////////////////////

        /**
         * Override method to perform a property "Get"
         * This will get the value of $strName
         *
         * @param string $strName Name of the property to get
         * @return mixed
         */
        public function __get($strName) {
            switch ($strName) {
                // General MetaControlVariables
                case 'OrderItem': return $this->objOrderItem;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to OrderItem fields -- will be created dynamically if not yet created
                case 'OrderIdControl':
                    if (!$this->lstOrder) return $this->lstOrder_Create();
                    return $this->lstOrder;
                case 'OrderIdLabel':
                    if (!$this->lblOrderId) return $this->lblOrderId_Create();
                    return $this->lblOrderId;
                case 'ProductIdControl':
                    if (!$this->lstProduct) return $this->lstProduct_Create();
                    return $this->lstProduct;
                case 'ProductIdLabel':
                    if (!$this->lblProductId) return $this->lblProductId_Create();
                    return $this->lblProductId;
                case 'QuantityControl':
                    if (!$this->txtQuantity) return $this->txtQuantity_Create();
                    return $this->txtQuantity;
                case 'QuantityLabel':
                    if (!$this->lblQuantity) return $this->lblQuantity_Create();
                    return $this->lblQuantity;
                case 'StatusIdControl':
                    if (!$this->lstStatus) return $this->lstStatus_Create();
                    return $this->lstStatus;
                case 'StatusIdLabel':
                    if (!$this->lblStatusId) return $this->lblStatusId_Create();
                    return $this->lblStatusId;
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
            try {
                switch ($strName) {
                    // Controls that point to OrderItem fields
                    case 'OrderIdControl':
                        return ($this->lstOrder = QType::Cast($mixValue, 'QControl'));
                    case 'ProductIdControl':
                        return ($this->lstProduct = QType::Cast($mixValue, 'QControl'));
                    case 'QuantityControl':
                        return ($this->txtQuantity = QType::Cast($mixValue, 'QControl'));
                    case 'StatusIdControl':
                        return ($this->lstStatus = QType::Cast($mixValue, 'QControl'));
                    default:
                        return parent::__set($strName, $mixValue);
                }
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }
    }
?>