<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the ShoppingCartItem class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single ShoppingCartItem object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a ShoppingCartItemMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read ShoppingCartItem $ShoppingCartItem the actual ShoppingCartItem data class being edited
     * property QListBox $ShoppingCartIdControl
     * property-read QLabel $ShoppingCartIdLabel
     * property QListBox $ProductIdControl
     * property-read QLabel $ProductIdLabel
     * property QIntegerTextBox $QuantityControl
     * property-read QLabel $QuantityLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class ShoppingCartItemMetaControlGen extends QBaseClass {
        // General Variables
        protected $objShoppingCartItem;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of ShoppingCartItem's individual data fields
        protected $lstShoppingCart;
        protected $lstProduct;
        protected $txtQuantity;

        // Controls that allow the viewing of ShoppingCartItem's individual data fields
        protected $lblShoppingCartId;
        protected $lblProductId;
        protected $lblQuantity;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * ShoppingCartItemMetaControl to edit a single ShoppingCartItem object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single ShoppingCartItem object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShoppingCartItemMetaControl
         * @param ShoppingCartItem $objShoppingCartItem new or existing ShoppingCartItem object
         */
         public function __construct($objParentObject, ShoppingCartItem $objShoppingCartItem) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this ShoppingCartItemMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked ShoppingCartItem object
            $this->objShoppingCartItem = $objShoppingCartItem;

            // Figure out if we're Editing or Creating New
            if ($this->objShoppingCartItem->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this ShoppingCartItemMetaControl
         * @param integer $intShoppingCartId primary key value
         * @param integer $intProductId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing ShoppingCartItem object creation - defaults to CreateOrEdit
         * @return ShoppingCartItemMetaControl
         */
        public static function Create($objParentObject, $intShoppingCartId = null, $intProductId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intShoppingCartId) && strlen($intProductId)) {
                $objShoppingCartItem = ShoppingCartItem::Load($intShoppingCartId, $intProductId);

                // ShoppingCartItem was found -- return it!
                if ($objShoppingCartItem)
                    return new ShoppingCartItemMetaControl($objParentObject, $objShoppingCartItem);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a ShoppingCartItem object with PK arguments: ' . $intShoppingCartId . ', ' . $intProductId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new ShoppingCartItemMetaControl($objParentObject, new ShoppingCartItem());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShoppingCartItemMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ShoppingCartItem object creation - defaults to CreateOrEdit
         * @return ShoppingCartItemMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intShoppingCartId = QApplication::PathInfo(0);
            $intProductId = QApplication::PathInfo(1);
            return ShoppingCartItemMetaControl::Create($objParentObject, $intShoppingCartId, $intProductId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ShoppingCartItemMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ShoppingCartItem object creation - defaults to CreateOrEdit
         * @return ShoppingCartItemMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intShoppingCartId = QApplication::QueryString('intShoppingCartId');
            $intProductId = QApplication::QueryString('intProductId');
            return ShoppingCartItemMetaControl::Create($objParentObject, $intShoppingCartId, $intProductId, $intCreateType);
        }



        ///////////////////////////////////////////////
        // PUBLIC CREATE and REFRESH METHODS
        ///////////////////////////////////////////////

        /**
         * Create and setup QListBox lstShoppingCart
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstShoppingCart_Create($strControlId = null) {
            $this->lstShoppingCart = new QListBox($this->objParentObject, $strControlId);
            $this->lstShoppingCart->Name = QApplication::Translate('Shopping Cart');
            $this->lstShoppingCart->Required = true;
            if (!$this->blnEditMode)
                $this->lstShoppingCart->AddItem(QApplication::Translate('- Select One -'), null);
            $objShoppingCartArray = ShoppingCart::LoadAll();
            if ($objShoppingCartArray) foreach ($objShoppingCartArray as $objShoppingCart) {
                $objListItem = new QListItem($objShoppingCart->__toString(), $objShoppingCart->Id);
                if (($this->objShoppingCartItem->ShoppingCart) && ($this->objShoppingCartItem->ShoppingCart->Id == $objShoppingCart->Id))
                    $objListItem->Selected = true;
                $this->lstShoppingCart->AddItem($objListItem);
            }
            return $this->lstShoppingCart;
        }

        /**
         * Create and setup QLabel lblShoppingCartId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblShoppingCartId_Create($strControlId = null) {
            $this->lblShoppingCartId = new QLabel($this->objParentObject, $strControlId);
            $this->lblShoppingCartId->Name = QApplication::Translate('Shopping Cart');
            $this->lblShoppingCartId->Text = ($this->objShoppingCartItem->ShoppingCart) ? $this->objShoppingCartItem->ShoppingCart->__toString() : null;
            $this->lblShoppingCartId->Required = true;
            return $this->lblShoppingCartId;
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
                if (($this->objShoppingCartItem->Product) && ($this->objShoppingCartItem->Product->Id == $objProduct->Id))
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
            $this->lblProductId->Text = ($this->objShoppingCartItem->Product) ? $this->objShoppingCartItem->Product->__toString() : null;
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
            $this->txtQuantity->Text = $this->objShoppingCartItem->Quantity;
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
            $this->lblQuantity->Text = $this->objShoppingCartItem->Quantity;
            $this->lblQuantity->Required = true;
            $this->lblQuantity->Format = $strFormat;
            return $this->lblQuantity;
        }



        /**
         * Refresh this MetaControl with Data from the local ShoppingCartItem object.
         * @param boolean $blnReload reload ShoppingCartItem from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objShoppingCartItem->Reload();

            if ($this->lstShoppingCart) {
                    $this->lstShoppingCart->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstShoppingCart->AddItem(QApplication::Translate('- Select One -'), null);
                $objShoppingCartArray = ShoppingCart::LoadAll();
                if ($objShoppingCartArray) foreach ($objShoppingCartArray as $objShoppingCart) {
                    $objListItem = new QListItem($objShoppingCart->__toString(), $objShoppingCart->Id);
                    if (($this->objShoppingCartItem->ShoppingCart) && ($this->objShoppingCartItem->ShoppingCart->Id == $objShoppingCart->Id))
                        $objListItem->Selected = true;
                    $this->lstShoppingCart->AddItem($objListItem);
                }
            }
            if ($this->lblShoppingCartId) $this->lblShoppingCartId->Text = ($this->objShoppingCartItem->ShoppingCart) ? $this->objShoppingCartItem->ShoppingCart->__toString() : null;

            if ($this->lstProduct) {
                    $this->lstProduct->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstProduct->AddItem(QApplication::Translate('- Select One -'), null);
                $objProductArray = Product::LoadAll();
                if ($objProductArray) foreach ($objProductArray as $objProduct) {
                    $objListItem = new QListItem($objProduct->__toString(), $objProduct->Id);
                    if (($this->objShoppingCartItem->Product) && ($this->objShoppingCartItem->Product->Id == $objProduct->Id))
                        $objListItem->Selected = true;
                    $this->lstProduct->AddItem($objListItem);
                }
            }
            if ($this->lblProductId) $this->lblProductId->Text = ($this->objShoppingCartItem->Product) ? $this->objShoppingCartItem->Product->__toString() : null;

            if ($this->txtQuantity) $this->txtQuantity->Text = $this->objShoppingCartItem->Quantity;
            if ($this->lblQuantity) $this->lblQuantity->Text = $this->objShoppingCartItem->Quantity;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC SHOPPINGCARTITEM OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's ShoppingCartItem instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveShoppingCartItem() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstShoppingCart) $this->objShoppingCartItem->ShoppingCartId = $this->lstShoppingCart->SelectedValue;
                if ($this->lstProduct) $this->objShoppingCartItem->ProductId = $this->lstProduct->SelectedValue;
                if ($this->txtQuantity) $this->objShoppingCartItem->Quantity = $this->txtQuantity->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the ShoppingCartItem object
                $this->objShoppingCartItem->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's ShoppingCartItem instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteShoppingCartItem() {
            $this->objShoppingCartItem->Delete();
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
                case 'ShoppingCartItem': return $this->objShoppingCartItem;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to ShoppingCartItem fields -- will be created dynamically if not yet created
                case 'ShoppingCartIdControl':
                    if (!$this->lstShoppingCart) return $this->lstShoppingCart_Create();
                    return $this->lstShoppingCart;
                case 'ShoppingCartIdLabel':
                    if (!$this->lblShoppingCartId) return $this->lblShoppingCartId_Create();
                    return $this->lblShoppingCartId;
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
                    // Controls that point to ShoppingCartItem fields
                    case 'ShoppingCartIdControl':
                        return ($this->lstShoppingCart = QType::Cast($mixValue, 'QControl'));
                    case 'ProductIdControl':
                        return ($this->lstProduct = QType::Cast($mixValue, 'QControl'));
                    case 'QuantityControl':
                        return ($this->txtQuantity = QType::Cast($mixValue, 'QControl'));
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