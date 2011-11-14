<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the Product class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single Product object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a ProductMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read Product $Product the actual Product data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QListBox $ManufacturerIdControl
     * property-read QLabel $ManufacturerIdLabel
     * property QListBox $SupplierIdControl
     * property-read QLabel $SupplierIdLabel
     * property QLabel $CreationDateControl
     * property-read QLabel $CreationDateLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QTextBox $ModelControl
     * property-read QLabel $ModelLabel
     * property QTextBox $ShortDescriptionControl
     * property-read QLabel $ShortDescriptionLabel
     * property QTextBox $LongDescriptionControl
     * property-read QLabel $LongDescriptionLabel
     * property QFloatTextBox $MsrpControl
     * property-read QLabel $MsrpLabel
     * property QFloatTextBox $WholesalePriceControl
     * property-read QLabel $WholesalePriceLabel
     * property QFloatTextBox $RetailPriceControl
     * property-read QLabel $RetailPriceLabel
     * property QFloatTextBox $CostControl
     * property-read QLabel $CostLabel
     * property QFloatTextBox $WeightControl
     * property-read QLabel $WeightLabel
     * property QFloatTextBox $HeightControl
     * property-read QLabel $HeightLabel
     * property QFloatTextBox $WidthControl
     * property-read QLabel $WidthLabel
     * property QFloatTextBox $DepthControl
     * property-read QLabel $DepthLabel
     * property QCheckBox $IsVirtualControl
     * property-read QLabel $IsVirtualLabel
     * property QListBox $TypeIdControl
     * property-read QLabel $TypeIdLabel
     * property QListBox $StatusIdControl
     * property-read QLabel $StatusIdLabel
     * property QIntegerTextBox $ViewCountControl
     * property-read QLabel $ViewCountLabel
     * property QListBox $ProductCategoryControl
     * property-read QLabel $ProductCategoryLabel
     * property QListBox $ParentProductAsRelatedControl
     * property-read QLabel $ParentProductAsRelatedLabel
     * property QListBox $ProductAsRelatedControl
     * property-read QLabel $ProductAsRelatedLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class ProductMetaControlGen extends QBaseClass {
        // General Variables
        protected $objProduct;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of Product's individual data fields
        protected $lblId;
        protected $lstManufacturer;
        protected $lstSupplier;
        protected $lblCreationDate;
        protected $txtName;
        protected $txtModel;
        protected $txtShortDescription;
        protected $txtLongDescription;
        protected $txtMsrp;
        protected $txtWholesalePrice;
        protected $txtRetailPrice;
        protected $txtCost;
        protected $txtWeight;
        protected $txtHeight;
        protected $txtWidth;
        protected $txtDepth;
        protected $chkIsVirtual;
        protected $lstType;
        protected $lstStatus;
        protected $txtViewCount;

        // Controls that allow the viewing of Product's individual data fields
        protected $lblManufacturerId;
        protected $lblSupplierId;
        protected $lblName;
        protected $lblModel;
        protected $lblShortDescription;
        protected $lblLongDescription;
        protected $lblMsrp;
        protected $lblWholesalePrice;
        protected $lblRetailPrice;
        protected $lblCost;
        protected $lblWeight;
        protected $lblHeight;
        protected $lblWidth;
        protected $lblDepth;
        protected $lblIsVirtual;
        protected $lblTypeId;
        protected $lblStatusId;
        protected $lblViewCount;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstProductCategories;
        protected $lstParentProductsAsRelated;
        protected $lstProductsAsRelated;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblProductCategories;
        protected $lblParentProductsAsRelated;
        protected $lblProductsAsRelated;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * ProductMetaControl to edit a single Product object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single Product object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductMetaControl
         * @param Product $objProduct new or existing Product object
         */
         public function __construct($objParentObject, Product $objProduct) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this ProductMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked Product object
            $this->objProduct = $objProduct;

            // Figure out if we're Editing or Creating New
            if ($this->objProduct->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing Product object creation - defaults to CreateOrEdit
         * @return ProductMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objProduct = Product::Load($intId);

                // Product was found -- return it!
                if ($objProduct)
                    return new ProductMetaControl($objParentObject, $objProduct);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a Product object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new ProductMetaControl($objParentObject, new Product());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Product object creation - defaults to CreateOrEdit
         * @return ProductMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return ProductMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Product object creation - defaults to CreateOrEdit
         * @return ProductMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return ProductMetaControl::Create($objParentObject, $intId, $intCreateType);
        }



        ///////////////////////////////////////////////
        // PUBLIC CREATE and REFRESH METHODS
        ///////////////////////////////////////////////

        /**
         * Create and setup QLabel lblId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblId_Create($strControlId = null) {
            $this->lblId = new QLabel($this->objParentObject, $strControlId);
            $this->lblId->Name = QApplication::Translate('Id');
            if ($this->blnEditMode)
                $this->lblId->Text = $this->objProduct->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
        }

        /**
         * Create and setup QListBox lstManufacturer
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstManufacturer_Create($strControlId = null) {
            $this->lstManufacturer = new QListBox($this->objParentObject, $strControlId);
            $this->lstManufacturer->Name = QApplication::Translate('Manufacturer');
            $this->lstManufacturer->AddItem(QApplication::Translate('- Select One -'), null);
            $objManufacturerArray = Person::LoadAll();
            if ($objManufacturerArray) foreach ($objManufacturerArray as $objManufacturer) {
                $objListItem = new QListItem($objManufacturer->__toString(), $objManufacturer->Id);
                if (($this->objProduct->Manufacturer) && ($this->objProduct->Manufacturer->Id == $objManufacturer->Id))
                    $objListItem->Selected = true;
                $this->lstManufacturer->AddItem($objListItem);
            }
            return $this->lstManufacturer;
        }

        /**
         * Create and setup QLabel lblManufacturerId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblManufacturerId_Create($strControlId = null) {
            $this->lblManufacturerId = new QLabel($this->objParentObject, $strControlId);
            $this->lblManufacturerId->Name = QApplication::Translate('Manufacturer');
            $this->lblManufacturerId->Text = ($this->objProduct->Manufacturer) ? $this->objProduct->Manufacturer->__toString() : null;
            return $this->lblManufacturerId;
        }

        /**
         * Create and setup QListBox lstSupplier
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstSupplier_Create($strControlId = null) {
            $this->lstSupplier = new QListBox($this->objParentObject, $strControlId);
            $this->lstSupplier->Name = QApplication::Translate('Supplier');
            $this->lstSupplier->AddItem(QApplication::Translate('- Select One -'), null);
            $objSupplierArray = Person::LoadAll();
            if ($objSupplierArray) foreach ($objSupplierArray as $objSupplier) {
                $objListItem = new QListItem($objSupplier->__toString(), $objSupplier->Id);
                if (($this->objProduct->Supplier) && ($this->objProduct->Supplier->Id == $objSupplier->Id))
                    $objListItem->Selected = true;
                $this->lstSupplier->AddItem($objListItem);
            }
            return $this->lstSupplier;
        }

        /**
         * Create and setup QLabel lblSupplierId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblSupplierId_Create($strControlId = null) {
            $this->lblSupplierId = new QLabel($this->objParentObject, $strControlId);
            $this->lblSupplierId->Name = QApplication::Translate('Supplier');
            $this->lblSupplierId->Text = ($this->objProduct->Supplier) ? $this->objProduct->Supplier->__toString() : null;
            return $this->lblSupplierId;
        }

        /**
         * Create and setup QLabel lblCreationDate
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCreationDate_Create($strControlId = null) {
            $this->lblCreationDate = new QLabel($this->objParentObject, $strControlId);
            $this->lblCreationDate->Name = QApplication::Translate('Creation Date');
            if ($this->blnEditMode)
                $this->lblCreationDate->Text = $this->objProduct->CreationDate;
            else
                $this->lblCreationDate->Text = 'N/A';
            return $this->lblCreationDate;
        }

        /**
         * Create and setup QTextBox txtName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtName_Create($strControlId = null) {
            $this->txtName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtName->Name = QApplication::Translate('Name');
            $this->txtName->Text = $this->objProduct->Name;
            $this->txtName->Required = true;
            $this->txtName->MaxLength = Product::NameMaxLength;
            return $this->txtName;
        }

        /**
         * Create and setup QLabel lblName
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblName_Create($strControlId = null) {
            $this->lblName = new QLabel($this->objParentObject, $strControlId);
            $this->lblName->Name = QApplication::Translate('Name');
            $this->lblName->Text = $this->objProduct->Name;
            $this->lblName->Required = true;
            return $this->lblName;
        }

        /**
         * Create and setup QTextBox txtModel
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtModel_Create($strControlId = null) {
            $this->txtModel = new QTextBox($this->objParentObject, $strControlId);
            $this->txtModel->Name = QApplication::Translate('Model');
            $this->txtModel->Text = $this->objProduct->Model;
            $this->txtModel->Required = true;
            $this->txtModel->MaxLength = Product::ModelMaxLength;
            return $this->txtModel;
        }

        /**
         * Create and setup QLabel lblModel
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblModel_Create($strControlId = null) {
            $this->lblModel = new QLabel($this->objParentObject, $strControlId);
            $this->lblModel->Name = QApplication::Translate('Model');
            $this->lblModel->Text = $this->objProduct->Model;
            $this->lblModel->Required = true;
            return $this->lblModel;
        }

        /**
         * Create and setup QTextBox txtShortDescription
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtShortDescription_Create($strControlId = null) {
            $this->txtShortDescription = new QTextBox($this->objParentObject, $strControlId);
            $this->txtShortDescription->Name = QApplication::Translate('Short Description');
            $this->txtShortDescription->Text = $this->objProduct->ShortDescription;
            $this->txtShortDescription->MaxLength = Product::ShortDescriptionMaxLength;
            return $this->txtShortDescription;
        }

        /**
         * Create and setup QLabel lblShortDescription
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblShortDescription_Create($strControlId = null) {
            $this->lblShortDescription = new QLabel($this->objParentObject, $strControlId);
            $this->lblShortDescription->Name = QApplication::Translate('Short Description');
            $this->lblShortDescription->Text = $this->objProduct->ShortDescription;
            return $this->lblShortDescription;
        }

        /**
         * Create and setup QTextBox txtLongDescription
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtLongDescription_Create($strControlId = null) {
            $this->txtLongDescription = new QTextBox($this->objParentObject, $strControlId);
            $this->txtLongDescription->Name = QApplication::Translate('Long Description');
            $this->txtLongDescription->Text = $this->objProduct->LongDescription;
            $this->txtLongDescription->TextMode = QTextMode::MultiLine;
            return $this->txtLongDescription;
        }

        /**
         * Create and setup QLabel lblLongDescription
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblLongDescription_Create($strControlId = null) {
            $this->lblLongDescription = new QLabel($this->objParentObject, $strControlId);
            $this->lblLongDescription->Name = QApplication::Translate('Long Description');
            $this->lblLongDescription->Text = $this->objProduct->LongDescription;
            return $this->lblLongDescription;
        }

        /**
         * Create and setup QFloatTextBox txtMsrp
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtMsrp_Create($strControlId = null) {
            $this->txtMsrp = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtMsrp->Name = QApplication::Translate('Msrp');
            $this->txtMsrp->Text = $this->objProduct->Msrp;
            return $this->txtMsrp;
        }

        /**
         * Create and setup QLabel lblMsrp
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblMsrp_Create($strControlId = null, $strFormat = null) {
            $this->lblMsrp = new QLabel($this->objParentObject, $strControlId);
            $this->lblMsrp->Name = QApplication::Translate('Msrp');
            $this->lblMsrp->Text = $this->objProduct->Msrp;
            $this->lblMsrp->Format = $strFormat;
            return $this->lblMsrp;
        }

        /**
         * Create and setup QFloatTextBox txtWholesalePrice
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtWholesalePrice_Create($strControlId = null) {
            $this->txtWholesalePrice = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtWholesalePrice->Name = QApplication::Translate('Wholesale Price');
            $this->txtWholesalePrice->Text = $this->objProduct->WholesalePrice;
            return $this->txtWholesalePrice;
        }

        /**
         * Create and setup QLabel lblWholesalePrice
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblWholesalePrice_Create($strControlId = null, $strFormat = null) {
            $this->lblWholesalePrice = new QLabel($this->objParentObject, $strControlId);
            $this->lblWholesalePrice->Name = QApplication::Translate('Wholesale Price');
            $this->lblWholesalePrice->Text = $this->objProduct->WholesalePrice;
            $this->lblWholesalePrice->Format = $strFormat;
            return $this->lblWholesalePrice;
        }

        /**
         * Create and setup QFloatTextBox txtRetailPrice
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtRetailPrice_Create($strControlId = null) {
            $this->txtRetailPrice = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtRetailPrice->Name = QApplication::Translate('Retail Price');
            $this->txtRetailPrice->Text = $this->objProduct->RetailPrice;
            return $this->txtRetailPrice;
        }

        /**
         * Create and setup QLabel lblRetailPrice
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblRetailPrice_Create($strControlId = null, $strFormat = null) {
            $this->lblRetailPrice = new QLabel($this->objParentObject, $strControlId);
            $this->lblRetailPrice->Name = QApplication::Translate('Retail Price');
            $this->lblRetailPrice->Text = $this->objProduct->RetailPrice;
            $this->lblRetailPrice->Format = $strFormat;
            return $this->lblRetailPrice;
        }

        /**
         * Create and setup QFloatTextBox txtCost
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtCost_Create($strControlId = null) {
            $this->txtCost = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtCost->Name = QApplication::Translate('Cost');
            $this->txtCost->Text = $this->objProduct->Cost;
            return $this->txtCost;
        }

        /**
         * Create and setup QLabel lblCost
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblCost_Create($strControlId = null, $strFormat = null) {
            $this->lblCost = new QLabel($this->objParentObject, $strControlId);
            $this->lblCost->Name = QApplication::Translate('Cost');
            $this->lblCost->Text = $this->objProduct->Cost;
            $this->lblCost->Format = $strFormat;
            return $this->lblCost;
        }

        /**
         * Create and setup QFloatTextBox txtWeight
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtWeight_Create($strControlId = null) {
            $this->txtWeight = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtWeight->Name = QApplication::Translate('Weight');
            $this->txtWeight->Text = $this->objProduct->Weight;
            return $this->txtWeight;
        }

        /**
         * Create and setup QLabel lblWeight
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblWeight_Create($strControlId = null, $strFormat = null) {
            $this->lblWeight = new QLabel($this->objParentObject, $strControlId);
            $this->lblWeight->Name = QApplication::Translate('Weight');
            $this->lblWeight->Text = $this->objProduct->Weight;
            $this->lblWeight->Format = $strFormat;
            return $this->lblWeight;
        }

        /**
         * Create and setup QFloatTextBox txtHeight
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtHeight_Create($strControlId = null) {
            $this->txtHeight = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtHeight->Name = QApplication::Translate('Height');
            $this->txtHeight->Text = $this->objProduct->Height;
            return $this->txtHeight;
        }

        /**
         * Create and setup QLabel lblHeight
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblHeight_Create($strControlId = null, $strFormat = null) {
            $this->lblHeight = new QLabel($this->objParentObject, $strControlId);
            $this->lblHeight->Name = QApplication::Translate('Height');
            $this->lblHeight->Text = $this->objProduct->Height;
            $this->lblHeight->Format = $strFormat;
            return $this->lblHeight;
        }

        /**
         * Create and setup QFloatTextBox txtWidth
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtWidth_Create($strControlId = null) {
            $this->txtWidth = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtWidth->Name = QApplication::Translate('Width');
            $this->txtWidth->Text = $this->objProduct->Width;
            return $this->txtWidth;
        }

        /**
         * Create and setup QLabel lblWidth
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblWidth_Create($strControlId = null, $strFormat = null) {
            $this->lblWidth = new QLabel($this->objParentObject, $strControlId);
            $this->lblWidth->Name = QApplication::Translate('Width');
            $this->lblWidth->Text = $this->objProduct->Width;
            $this->lblWidth->Format = $strFormat;
            return $this->lblWidth;
        }

        /**
         * Create and setup QFloatTextBox txtDepth
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtDepth_Create($strControlId = null) {
            $this->txtDepth = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtDepth->Name = QApplication::Translate('Depth');
            $this->txtDepth->Text = $this->objProduct->Depth;
            return $this->txtDepth;
        }

        /**
         * Create and setup QLabel lblDepth
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblDepth_Create($strControlId = null, $strFormat = null) {
            $this->lblDepth = new QLabel($this->objParentObject, $strControlId);
            $this->lblDepth->Name = QApplication::Translate('Depth');
            $this->lblDepth->Text = $this->objProduct->Depth;
            $this->lblDepth->Format = $strFormat;
            return $this->lblDepth;
        }

        /**
         * Create and setup QCheckBox chkIsVirtual
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkIsVirtual_Create($strControlId = null) {
            $this->chkIsVirtual = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkIsVirtual->Name = QApplication::Translate('Is Virtual');
            $this->chkIsVirtual->Checked = $this->objProduct->IsVirtual;
            return $this->chkIsVirtual;
        }

        /**
         * Create and setup QLabel lblIsVirtual
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblIsVirtual_Create($strControlId = null) {
            $this->lblIsVirtual = new QLabel($this->objParentObject, $strControlId);
            $this->lblIsVirtual->Name = QApplication::Translate('Is Virtual');
            $this->lblIsVirtual->Text = ($this->objProduct->IsVirtual) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblIsVirtual;
        }

        /**
         * Create and setup QListBox lstType
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstType_Create($strControlId = null) {
            $this->lstType = new QListBox($this->objParentObject, $strControlId);
            $this->lstType->Name = QApplication::Translate('Type');
            $this->lstType->Required = true;
            foreach (ProductType::$NameArray as $intId => $strValue)
                $this->lstType->AddItem(new QListItem($strValue, $intId, $this->objProduct->TypeId == $intId));
            return $this->lstType;
        }

        /**
         * Create and setup QLabel lblTypeId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblTypeId_Create($strControlId = null) {
            $this->lblTypeId = new QLabel($this->objParentObject, $strControlId);
            $this->lblTypeId->Name = QApplication::Translate('Type');
            $this->lblTypeId->Text = ($this->objProduct->TypeId) ? ProductType::$NameArray[$this->objProduct->TypeId] : null;
            $this->lblTypeId->Required = true;
            return $this->lblTypeId;
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
            foreach (ProductStatusType::$NameArray as $intId => $strValue)
                $this->lstStatus->AddItem(new QListItem($strValue, $intId, $this->objProduct->StatusId == $intId));
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
            $this->lblStatusId->Text = ($this->objProduct->StatusId) ? ProductStatusType::$NameArray[$this->objProduct->StatusId] : null;
            $this->lblStatusId->Required = true;
            return $this->lblStatusId;
        }

        /**
         * Create and setup QIntegerTextBox txtViewCount
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtViewCount_Create($strControlId = null) {
            $this->txtViewCount = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtViewCount->Name = QApplication::Translate('View Count');
            $this->txtViewCount->Text = $this->objProduct->ViewCount;
            return $this->txtViewCount;
        }

        /**
         * Create and setup QLabel lblViewCount
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblViewCount_Create($strControlId = null, $strFormat = null) {
            $this->lblViewCount = new QLabel($this->objParentObject, $strControlId);
            $this->lblViewCount->Name = QApplication::Translate('View Count');
            $this->lblViewCount->Text = $this->objProduct->ViewCount;
            $this->lblViewCount->Format = $strFormat;
            return $this->lblViewCount;
        }

        /**
         * Create and setup QListBox lstProductCategories
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstProductCategories_Create($strControlId = null) {
            $this->lstProductCategories = new QListBox($this->objParentObject, $strControlId);
            $this->lstProductCategories->Name = QApplication::Translate('Product Categories');
            $this->lstProductCategories->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objProduct->GetProductCategoryArray();
            $objProductCategoryArray = ProductCategory::LoadAll();
            if ($objProductCategoryArray) foreach ($objProductCategoryArray as $objProductCategory) {
                $objListItem = new QListItem($objProductCategory->__toString(), $objProductCategory->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objProductCategory->Id)
                        $objListItem->Selected = true;
                }
                $this->lstProductCategories->AddItem($objListItem);
            }
            return $this->lstProductCategories;
        }

        /**
         * Create and setup QLabel lblProductCategories
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblProductCategories_Create($strControlId = null, $strGlue = ', ') {
            $this->lblProductCategories = new QLabel($this->objParentObject, $strControlId);
            $this->lblProductCategories->Name = QApplication::Translate('Product Categories');
            
            $objAssociatedArray = $this->objProduct->GetProductCategoryArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblProductCategories->Text = implode($strGlue, $strItems);
            return $this->lblProductCategories;
        }

        /**
         * Create and setup QListBox lstParentProductsAsRelated
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstParentProductsAsRelated_Create($strControlId = null) {
            $this->lstParentProductsAsRelated = new QListBox($this->objParentObject, $strControlId);
            $this->lstParentProductsAsRelated->Name = QApplication::Translate('Parent Products As Related');
            $this->lstParentProductsAsRelated->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objProduct->GetParentProductAsRelatedArray();
            $objProductArray = Product::LoadAll();
            if ($objProductArray) foreach ($objProductArray as $objProduct) {
                $objListItem = new QListItem($objProduct->__toString(), $objProduct->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objProduct->Id)
                        $objListItem->Selected = true;
                }
                $this->lstParentProductsAsRelated->AddItem($objListItem);
            }
            return $this->lstParentProductsAsRelated;
        }

        /**
         * Create and setup QLabel lblParentProductsAsRelated
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblParentProductsAsRelated_Create($strControlId = null, $strGlue = ', ') {
            $this->lblParentProductsAsRelated = new QLabel($this->objParentObject, $strControlId);
            $this->lblParentProductsAsRelated->Name = QApplication::Translate('Parent Products As Related');
            
            $objAssociatedArray = $this->objProduct->GetParentProductAsRelatedArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblParentProductsAsRelated->Text = implode($strGlue, $strItems);
            return $this->lblParentProductsAsRelated;
        }

        /**
         * Create and setup QListBox lstProductsAsRelated
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstProductsAsRelated_Create($strControlId = null) {
            $this->lstProductsAsRelated = new QListBox($this->objParentObject, $strControlId);
            $this->lstProductsAsRelated->Name = QApplication::Translate('Products As Related');
            $this->lstProductsAsRelated->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objProduct->GetProductAsRelatedArray();
            $objProductArray = Product::LoadAll();
            if ($objProductArray) foreach ($objProductArray as $objProduct) {
                $objListItem = new QListItem($objProduct->__toString(), $objProduct->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objProduct->Id)
                        $objListItem->Selected = true;
                }
                $this->lstProductsAsRelated->AddItem($objListItem);
            }
            return $this->lstProductsAsRelated;
        }

        /**
         * Create and setup QLabel lblProductsAsRelated
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblProductsAsRelated_Create($strControlId = null, $strGlue = ', ') {
            $this->lblProductsAsRelated = new QLabel($this->objParentObject, $strControlId);
            $this->lblProductsAsRelated->Name = QApplication::Translate('Products As Related');
            
            $objAssociatedArray = $this->objProduct->GetProductAsRelatedArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblProductsAsRelated->Text = implode($strGlue, $strItems);
            return $this->lblProductsAsRelated;
        }



        /**
         * Refresh this MetaControl with Data from the local Product object.
         * @param boolean $blnReload reload Product from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objProduct->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objProduct->Id;

            if ($this->lstManufacturer) {
                    $this->lstManufacturer->RemoveAllItems();
                $this->lstManufacturer->AddItem(QApplication::Translate('- Select One -'), null);
                $objManufacturerArray = Person::LoadAll();
                if ($objManufacturerArray) foreach ($objManufacturerArray as $objManufacturer) {
                    $objListItem = new QListItem($objManufacturer->__toString(), $objManufacturer->Id);
                    if (($this->objProduct->Manufacturer) && ($this->objProduct->Manufacturer->Id == $objManufacturer->Id))
                        $objListItem->Selected = true;
                    $this->lstManufacturer->AddItem($objListItem);
                }
            }
            if ($this->lblManufacturerId) $this->lblManufacturerId->Text = ($this->objProduct->Manufacturer) ? $this->objProduct->Manufacturer->__toString() : null;

            if ($this->lstSupplier) {
                    $this->lstSupplier->RemoveAllItems();
                $this->lstSupplier->AddItem(QApplication::Translate('- Select One -'), null);
                $objSupplierArray = Person::LoadAll();
                if ($objSupplierArray) foreach ($objSupplierArray as $objSupplier) {
                    $objListItem = new QListItem($objSupplier->__toString(), $objSupplier->Id);
                    if (($this->objProduct->Supplier) && ($this->objProduct->Supplier->Id == $objSupplier->Id))
                        $objListItem->Selected = true;
                    $this->lstSupplier->AddItem($objListItem);
                }
            }
            if ($this->lblSupplierId) $this->lblSupplierId->Text = ($this->objProduct->Supplier) ? $this->objProduct->Supplier->__toString() : null;

            if ($this->lblCreationDate) if ($this->blnEditMode) $this->lblCreationDate->Text = $this->objProduct->CreationDate;

            if ($this->txtName) $this->txtName->Text = $this->objProduct->Name;
            if ($this->lblName) $this->lblName->Text = $this->objProduct->Name;

            if ($this->txtModel) $this->txtModel->Text = $this->objProduct->Model;
            if ($this->lblModel) $this->lblModel->Text = $this->objProduct->Model;

            if ($this->txtShortDescription) $this->txtShortDescription->Text = $this->objProduct->ShortDescription;
            if ($this->lblShortDescription) $this->lblShortDescription->Text = $this->objProduct->ShortDescription;

            if ($this->txtLongDescription) $this->txtLongDescription->Text = $this->objProduct->LongDescription;
            if ($this->lblLongDescription) $this->lblLongDescription->Text = $this->objProduct->LongDescription;

            if ($this->txtMsrp) $this->txtMsrp->Text = $this->objProduct->Msrp;
            if ($this->lblMsrp) $this->lblMsrp->Text = $this->objProduct->Msrp;

            if ($this->txtWholesalePrice) $this->txtWholesalePrice->Text = $this->objProduct->WholesalePrice;
            if ($this->lblWholesalePrice) $this->lblWholesalePrice->Text = $this->objProduct->WholesalePrice;

            if ($this->txtRetailPrice) $this->txtRetailPrice->Text = $this->objProduct->RetailPrice;
            if ($this->lblRetailPrice) $this->lblRetailPrice->Text = $this->objProduct->RetailPrice;

            if ($this->txtCost) $this->txtCost->Text = $this->objProduct->Cost;
            if ($this->lblCost) $this->lblCost->Text = $this->objProduct->Cost;

            if ($this->txtWeight) $this->txtWeight->Text = $this->objProduct->Weight;
            if ($this->lblWeight) $this->lblWeight->Text = $this->objProduct->Weight;

            if ($this->txtHeight) $this->txtHeight->Text = $this->objProduct->Height;
            if ($this->lblHeight) $this->lblHeight->Text = $this->objProduct->Height;

            if ($this->txtWidth) $this->txtWidth->Text = $this->objProduct->Width;
            if ($this->lblWidth) $this->lblWidth->Text = $this->objProduct->Width;

            if ($this->txtDepth) $this->txtDepth->Text = $this->objProduct->Depth;
            if ($this->lblDepth) $this->lblDepth->Text = $this->objProduct->Depth;

            if ($this->chkIsVirtual) $this->chkIsVirtual->Checked = $this->objProduct->IsVirtual;
            if ($this->lblIsVirtual) $this->lblIsVirtual->Text = ($this->objProduct->IsVirtual) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->lstType) $this->lstType->SelectedValue = $this->objProduct->TypeId;
            if ($this->lblTypeId) $this->lblTypeId->Text = ($this->objProduct->TypeId) ? ProductType::$NameArray[$this->objProduct->TypeId] : null;

            if ($this->lstStatus) $this->lstStatus->SelectedValue = $this->objProduct->StatusId;
            if ($this->lblStatusId) $this->lblStatusId->Text = ($this->objProduct->StatusId) ? ProductStatusType::$NameArray[$this->objProduct->StatusId] : null;

            if ($this->txtViewCount) $this->txtViewCount->Text = $this->objProduct->ViewCount;
            if ($this->lblViewCount) $this->lblViewCount->Text = $this->objProduct->ViewCount;

            if ($this->lstProductCategories) {
                $this->lstProductCategories->RemoveAllItems();
                $objAssociatedArray = $this->objProduct->GetProductCategoryArray();
                $objProductCategoryArray = ProductCategory::LoadAll();
                if ($objProductCategoryArray) foreach ($objProductCategoryArray as $objProductCategory) {
                    $objListItem = new QListItem($objProductCategory->__toString(), $objProductCategory->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objProductCategory->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstProductCategories->AddItem($objListItem);
                }
            }
            if ($this->lblProductCategories) {
                $objAssociatedArray = $this->objProduct->GetProductCategoryArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblProductCategories->Text = implode($strGlue, $strItems);
            }

            if ($this->lstParentProductsAsRelated) {
                $this->lstParentProductsAsRelated->RemoveAllItems();
                $objAssociatedArray = $this->objProduct->GetParentProductAsRelatedArray();
                $objProductArray = Product::LoadAll();
                if ($objProductArray) foreach ($objProductArray as $objProduct) {
                    $objListItem = new QListItem($objProduct->__toString(), $objProduct->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objProduct->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstParentProductsAsRelated->AddItem($objListItem);
                }
            }
            if ($this->lblParentProductsAsRelated) {
                $objAssociatedArray = $this->objProduct->GetParentProductAsRelatedArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblParentProductsAsRelated->Text = implode($strGlue, $strItems);
            }

            if ($this->lstProductsAsRelated) {
                $this->lstProductsAsRelated->RemoveAllItems();
                $objAssociatedArray = $this->objProduct->GetProductAsRelatedArray();
                $objProductArray = Product::LoadAll();
                if ($objProductArray) foreach ($objProductArray as $objProduct) {
                    $objListItem = new QListItem($objProduct->__toString(), $objProduct->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objProduct->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstProductsAsRelated->AddItem($objListItem);
                }
            }
            if ($this->lblProductsAsRelated) {
                $objAssociatedArray = $this->objProduct->GetProductAsRelatedArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblProductsAsRelated->Text = implode($strGlue, $strItems);
            }

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////

        protected function lstProductCategories_Update() {
            if ($this->lstProductCategories) {
                $this->objProduct->UnassociateAllProductCategories();
                $objSelectedListItems = $this->lstProductCategories->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objProduct->AssociateProductCategory(ProductCategory::Load($objListItem->Value));
                }
            }
        }

        protected function lstParentProductsAsRelated_Update() {
            if ($this->lstParentProductsAsRelated) {
                $this->objProduct->UnassociateAllParentProductsAsRelated();
                $objSelectedListItems = $this->lstParentProductsAsRelated->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objProduct->AssociateParentProductAsRelated(Product::Load($objListItem->Value));
                }
            }
        }

        protected function lstProductsAsRelated_Update() {
            if ($this->lstProductsAsRelated) {
                $this->objProduct->UnassociateAllProductsAsRelated();
                $objSelectedListItems = $this->lstProductsAsRelated->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objProduct->AssociateProductAsRelated(Product::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC PRODUCT OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's Product instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveProduct() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstManufacturer) $this->objProduct->ManufacturerId = $this->lstManufacturer->SelectedValue;
                if ($this->lstSupplier) $this->objProduct->SupplierId = $this->lstSupplier->SelectedValue;
                if ($this->txtName) $this->objProduct->Name = $this->txtName->Text;
                if ($this->txtModel) $this->objProduct->Model = $this->txtModel->Text;
                if ($this->txtShortDescription) $this->objProduct->ShortDescription = $this->txtShortDescription->Text;
                if ($this->txtLongDescription) $this->objProduct->LongDescription = $this->txtLongDescription->Text;
                if ($this->txtMsrp) $this->objProduct->Msrp = $this->txtMsrp->Text;
                if ($this->txtWholesalePrice) $this->objProduct->WholesalePrice = $this->txtWholesalePrice->Text;
                if ($this->txtRetailPrice) $this->objProduct->RetailPrice = $this->txtRetailPrice->Text;
                if ($this->txtCost) $this->objProduct->Cost = $this->txtCost->Text;
                if ($this->txtWeight) $this->objProduct->Weight = $this->txtWeight->Text;
                if ($this->txtHeight) $this->objProduct->Height = $this->txtHeight->Text;
                if ($this->txtWidth) $this->objProduct->Width = $this->txtWidth->Text;
                if ($this->txtDepth) $this->objProduct->Depth = $this->txtDepth->Text;
                if ($this->chkIsVirtual) $this->objProduct->IsVirtual = $this->chkIsVirtual->Checked;
                if ($this->lstType) $this->objProduct->TypeId = $this->lstType->SelectedValue;
                if ($this->lstStatus) $this->objProduct->StatusId = $this->lstStatus->SelectedValue;
                if ($this->txtViewCount) $this->objProduct->ViewCount = $this->txtViewCount->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the Product object
                $this->objProduct->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstProductCategories_Update();
                $this->lstParentProductsAsRelated_Update();
                $this->lstProductsAsRelated_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's Product instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteProduct() {
            $this->objProduct->UnassociateAllProductCategories();
            $this->objProduct->UnassociateAllParentProductsAsRelated();
            $this->objProduct->UnassociateAllProductsAsRelated();
            $this->objProduct->Delete();
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
                case 'Product': return $this->objProduct;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to Product fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'ManufacturerIdControl':
                    if (!$this->lstManufacturer) return $this->lstManufacturer_Create();
                    return $this->lstManufacturer;
                case 'ManufacturerIdLabel':
                    if (!$this->lblManufacturerId) return $this->lblManufacturerId_Create();
                    return $this->lblManufacturerId;
                case 'SupplierIdControl':
                    if (!$this->lstSupplier) return $this->lstSupplier_Create();
                    return $this->lstSupplier;
                case 'SupplierIdLabel':
                    if (!$this->lblSupplierId) return $this->lblSupplierId_Create();
                    return $this->lblSupplierId;
                case 'CreationDateControl':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'CreationDateLabel':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'NameControl':
                    if (!$this->txtName) return $this->txtName_Create();
                    return $this->txtName;
                case 'NameLabel':
                    if (!$this->lblName) return $this->lblName_Create();
                    return $this->lblName;
                case 'ModelControl':
                    if (!$this->txtModel) return $this->txtModel_Create();
                    return $this->txtModel;
                case 'ModelLabel':
                    if (!$this->lblModel) return $this->lblModel_Create();
                    return $this->lblModel;
                case 'ShortDescriptionControl':
                    if (!$this->txtShortDescription) return $this->txtShortDescription_Create();
                    return $this->txtShortDescription;
                case 'ShortDescriptionLabel':
                    if (!$this->lblShortDescription) return $this->lblShortDescription_Create();
                    return $this->lblShortDescription;
                case 'LongDescriptionControl':
                    if (!$this->txtLongDescription) return $this->txtLongDescription_Create();
                    return $this->txtLongDescription;
                case 'LongDescriptionLabel':
                    if (!$this->lblLongDescription) return $this->lblLongDescription_Create();
                    return $this->lblLongDescription;
                case 'MsrpControl':
                    if (!$this->txtMsrp) return $this->txtMsrp_Create();
                    return $this->txtMsrp;
                case 'MsrpLabel':
                    if (!$this->lblMsrp) return $this->lblMsrp_Create();
                    return $this->lblMsrp;
                case 'WholesalePriceControl':
                    if (!$this->txtWholesalePrice) return $this->txtWholesalePrice_Create();
                    return $this->txtWholesalePrice;
                case 'WholesalePriceLabel':
                    if (!$this->lblWholesalePrice) return $this->lblWholesalePrice_Create();
                    return $this->lblWholesalePrice;
                case 'RetailPriceControl':
                    if (!$this->txtRetailPrice) return $this->txtRetailPrice_Create();
                    return $this->txtRetailPrice;
                case 'RetailPriceLabel':
                    if (!$this->lblRetailPrice) return $this->lblRetailPrice_Create();
                    return $this->lblRetailPrice;
                case 'CostControl':
                    if (!$this->txtCost) return $this->txtCost_Create();
                    return $this->txtCost;
                case 'CostLabel':
                    if (!$this->lblCost) return $this->lblCost_Create();
                    return $this->lblCost;
                case 'WeightControl':
                    if (!$this->txtWeight) return $this->txtWeight_Create();
                    return $this->txtWeight;
                case 'WeightLabel':
                    if (!$this->lblWeight) return $this->lblWeight_Create();
                    return $this->lblWeight;
                case 'HeightControl':
                    if (!$this->txtHeight) return $this->txtHeight_Create();
                    return $this->txtHeight;
                case 'HeightLabel':
                    if (!$this->lblHeight) return $this->lblHeight_Create();
                    return $this->lblHeight;
                case 'WidthControl':
                    if (!$this->txtWidth) return $this->txtWidth_Create();
                    return $this->txtWidth;
                case 'WidthLabel':
                    if (!$this->lblWidth) return $this->lblWidth_Create();
                    return $this->lblWidth;
                case 'DepthControl':
                    if (!$this->txtDepth) return $this->txtDepth_Create();
                    return $this->txtDepth;
                case 'DepthLabel':
                    if (!$this->lblDepth) return $this->lblDepth_Create();
                    return $this->lblDepth;
                case 'IsVirtualControl':
                    if (!$this->chkIsVirtual) return $this->chkIsVirtual_Create();
                    return $this->chkIsVirtual;
                case 'IsVirtualLabel':
                    if (!$this->lblIsVirtual) return $this->lblIsVirtual_Create();
                    return $this->lblIsVirtual;
                case 'TypeIdControl':
                    if (!$this->lstType) return $this->lstType_Create();
                    return $this->lstType;
                case 'TypeIdLabel':
                    if (!$this->lblTypeId) return $this->lblTypeId_Create();
                    return $this->lblTypeId;
                case 'StatusIdControl':
                    if (!$this->lstStatus) return $this->lstStatus_Create();
                    return $this->lstStatus;
                case 'StatusIdLabel':
                    if (!$this->lblStatusId) return $this->lblStatusId_Create();
                    return $this->lblStatusId;
                case 'ViewCountControl':
                    if (!$this->txtViewCount) return $this->txtViewCount_Create();
                    return $this->txtViewCount;
                case 'ViewCountLabel':
                    if (!$this->lblViewCount) return $this->lblViewCount_Create();
                    return $this->lblViewCount;
                case 'ProductCategoryControl':
                    if (!$this->lstProductCategories) return $this->lstProductCategories_Create();
                    return $this->lstProductCategories;
                case 'ProductCategoryLabel':
                    if (!$this->lblProductCategories) return $this->lblProductCategories_Create();
                    return $this->lblProductCategories;
                case 'ParentProductAsRelatedControl':
                    if (!$this->lstParentProductsAsRelated) return $this->lstParentProductsAsRelated_Create();
                    return $this->lstParentProductsAsRelated;
                case 'ParentProductAsRelatedLabel':
                    if (!$this->lblParentProductsAsRelated) return $this->lblParentProductsAsRelated_Create();
                    return $this->lblParentProductsAsRelated;
                case 'ProductAsRelatedControl':
                    if (!$this->lstProductsAsRelated) return $this->lstProductsAsRelated_Create();
                    return $this->lstProductsAsRelated;
                case 'ProductAsRelatedLabel':
                    if (!$this->lblProductsAsRelated) return $this->lblProductsAsRelated_Create();
                    return $this->lblProductsAsRelated;
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
                    // Controls that point to Product fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'ManufacturerIdControl':
                        return ($this->lstManufacturer = QType::Cast($mixValue, 'QControl'));
                    case 'SupplierIdControl':
                        return ($this->lstSupplier = QType::Cast($mixValue, 'QControl'));
                    case 'CreationDateControl':
                        return ($this->lblCreationDate = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'ModelControl':
                        return ($this->txtModel = QType::Cast($mixValue, 'QControl'));
                    case 'ShortDescriptionControl':
                        return ($this->txtShortDescription = QType::Cast($mixValue, 'QControl'));
                    case 'LongDescriptionControl':
                        return ($this->txtLongDescription = QType::Cast($mixValue, 'QControl'));
                    case 'MsrpControl':
                        return ($this->txtMsrp = QType::Cast($mixValue, 'QControl'));
                    case 'WholesalePriceControl':
                        return ($this->txtWholesalePrice = QType::Cast($mixValue, 'QControl'));
                    case 'RetailPriceControl':
                        return ($this->txtRetailPrice = QType::Cast($mixValue, 'QControl'));
                    case 'CostControl':
                        return ($this->txtCost = QType::Cast($mixValue, 'QControl'));
                    case 'WeightControl':
                        return ($this->txtWeight = QType::Cast($mixValue, 'QControl'));
                    case 'HeightControl':
                        return ($this->txtHeight = QType::Cast($mixValue, 'QControl'));
                    case 'WidthControl':
                        return ($this->txtWidth = QType::Cast($mixValue, 'QControl'));
                    case 'DepthControl':
                        return ($this->txtDepth = QType::Cast($mixValue, 'QControl'));
                    case 'IsVirtualControl':
                        return ($this->chkIsVirtual = QType::Cast($mixValue, 'QControl'));
                    case 'TypeIdControl':
                        return ($this->lstType = QType::Cast($mixValue, 'QControl'));
                    case 'StatusIdControl':
                        return ($this->lstStatus = QType::Cast($mixValue, 'QControl'));
                    case 'ViewCountControl':
                        return ($this->txtViewCount = QType::Cast($mixValue, 'QControl'));
                    case 'ProductCategoryControl':
                        return ($this->lstProductCategories = QType::Cast($mixValue, 'QControl'));
                    case 'ParentProductAsRelatedControl':
                        return ($this->lstParentProductsAsRelated = QType::Cast($mixValue, 'QControl'));
                    case 'ProductAsRelatedControl':
                        return ($this->lstProductsAsRelated = QType::Cast($mixValue, 'QControl'));
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