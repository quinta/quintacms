<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the ProductCategory class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single ProductCategory object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a ProductCategoryMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read ProductCategory $ProductCategory the actual ProductCategory data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QTextBox $TitleControl
     * property-read QLabel $TitleLabel
     * property QTextBox $DescriptionControl
     * property-read QLabel $DescriptionLabel
     * property QTextBox $ImageUriControl
     * property-read QLabel $ImageUriLabel
     * property QIntegerTextBox $ParentProductCategoryIdControl
     * property-read QLabel $ParentProductCategoryIdLabel
     * property QListBox $ProductControl
     * property-read QLabel $ProductLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class ProductCategoryMetaControlGen extends QBaseClass {
        // General Variables
        protected $objProductCategory;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of ProductCategory's individual data fields
        protected $lblId;
        protected $txtName;
        protected $txtTitle;
        protected $txtDescription;
        protected $txtImageUri;
        protected $txtParentProductCategoryId;

        // Controls that allow the viewing of ProductCategory's individual data fields
        protected $lblName;
        protected $lblTitle;
        protected $lblDescription;
        protected $lblImageUri;
        protected $lblParentProductCategoryId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstProducts;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblProducts;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * ProductCategoryMetaControl to edit a single ProductCategory object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single ProductCategory object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductCategoryMetaControl
         * @param ProductCategory $objProductCategory new or existing ProductCategory object
         */
         public function __construct($objParentObject, ProductCategory $objProductCategory) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this ProductCategoryMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked ProductCategory object
            $this->objProductCategory = $objProductCategory;

            // Figure out if we're Editing or Creating New
            if ($this->objProductCategory->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductCategoryMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing ProductCategory object creation - defaults to CreateOrEdit
         * @return ProductCategoryMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objProductCategory = ProductCategory::Load($intId);

                // ProductCategory was found -- return it!
                if ($objProductCategory)
                    return new ProductCategoryMetaControl($objParentObject, $objProductCategory);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a ProductCategory object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new ProductCategoryMetaControl($objParentObject, new ProductCategory());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductCategoryMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ProductCategory object creation - defaults to CreateOrEdit
         * @return ProductCategoryMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return ProductCategoryMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductCategoryMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ProductCategory object creation - defaults to CreateOrEdit
         * @return ProductCategoryMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return ProductCategoryMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objProductCategory->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
        }

        /**
         * Create and setup QTextBox txtName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtName_Create($strControlId = null) {
            $this->txtName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtName->Name = QApplication::Translate('Name');
            $this->txtName->Text = $this->objProductCategory->Name;
            $this->txtName->MaxLength = ProductCategory::NameMaxLength;
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
            $this->lblName->Text = $this->objProductCategory->Name;
            return $this->lblName;
        }

        /**
         * Create and setup QTextBox txtTitle
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtTitle_Create($strControlId = null) {
            $this->txtTitle = new QTextBox($this->objParentObject, $strControlId);
            $this->txtTitle->Name = QApplication::Translate('Title');
            $this->txtTitle->Text = $this->objProductCategory->Title;
            $this->txtTitle->MaxLength = ProductCategory::TitleMaxLength;
            return $this->txtTitle;
        }

        /**
         * Create and setup QLabel lblTitle
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblTitle_Create($strControlId = null) {
            $this->lblTitle = new QLabel($this->objParentObject, $strControlId);
            $this->lblTitle->Name = QApplication::Translate('Title');
            $this->lblTitle->Text = $this->objProductCategory->Title;
            return $this->lblTitle;
        }

        /**
         * Create and setup QTextBox txtDescription
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtDescription_Create($strControlId = null) {
            $this->txtDescription = new QTextBox($this->objParentObject, $strControlId);
            $this->txtDescription->Name = QApplication::Translate('Description');
            $this->txtDescription->Text = $this->objProductCategory->Description;
            $this->txtDescription->MaxLength = ProductCategory::DescriptionMaxLength;
            return $this->txtDescription;
        }

        /**
         * Create and setup QLabel lblDescription
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblDescription_Create($strControlId = null) {
            $this->lblDescription = new QLabel($this->objParentObject, $strControlId);
            $this->lblDescription->Name = QApplication::Translate('Description');
            $this->lblDescription->Text = $this->objProductCategory->Description;
            return $this->lblDescription;
        }

        /**
         * Create and setup QTextBox txtImageUri
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtImageUri_Create($strControlId = null) {
            $this->txtImageUri = new QTextBox($this->objParentObject, $strControlId);
            $this->txtImageUri->Name = QApplication::Translate('Image Uri');
            $this->txtImageUri->Text = $this->objProductCategory->ImageUri;
            $this->txtImageUri->MaxLength = ProductCategory::ImageUriMaxLength;
            return $this->txtImageUri;
        }

        /**
         * Create and setup QLabel lblImageUri
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblImageUri_Create($strControlId = null) {
            $this->lblImageUri = new QLabel($this->objParentObject, $strControlId);
            $this->lblImageUri->Name = QApplication::Translate('Image Uri');
            $this->lblImageUri->Text = $this->objProductCategory->ImageUri;
            return $this->lblImageUri;
        }

        /**
         * Create and setup QIntegerTextBox txtParentProductCategoryId
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtParentProductCategoryId_Create($strControlId = null) {
            $this->txtParentProductCategoryId = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtParentProductCategoryId->Name = QApplication::Translate('Parent Product Category Id');
            $this->txtParentProductCategoryId->Text = $this->objProductCategory->ParentProductCategoryId;
            return $this->txtParentProductCategoryId;
        }

        /**
         * Create and setup QLabel lblParentProductCategoryId
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblParentProductCategoryId_Create($strControlId = null, $strFormat = null) {
            $this->lblParentProductCategoryId = new QLabel($this->objParentObject, $strControlId);
            $this->lblParentProductCategoryId->Name = QApplication::Translate('Parent Product Category Id');
            $this->lblParentProductCategoryId->Text = $this->objProductCategory->ParentProductCategoryId;
            $this->lblParentProductCategoryId->Format = $strFormat;
            return $this->lblParentProductCategoryId;
        }

        /**
         * Create and setup QListBox lstProducts
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstProducts_Create($strControlId = null) {
            $this->lstProducts = new QListBox($this->objParentObject, $strControlId);
            $this->lstProducts->Name = QApplication::Translate('Products');
            $this->lstProducts->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objProductCategory->GetProductArray();
            $objProductArray = Product::LoadAll();
            if ($objProductArray) foreach ($objProductArray as $objProduct) {
                $objListItem = new QListItem($objProduct->__toString(), $objProduct->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objProduct->Id)
                        $objListItem->Selected = true;
                }
                $this->lstProducts->AddItem($objListItem);
            }
            return $this->lstProducts;
        }

        /**
         * Create and setup QLabel lblProducts
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblProducts_Create($strControlId = null, $strGlue = ', ') {
            $this->lblProducts = new QLabel($this->objParentObject, $strControlId);
            $this->lblProducts->Name = QApplication::Translate('Products');
            
            $objAssociatedArray = $this->objProductCategory->GetProductArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblProducts->Text = implode($strGlue, $strItems);
            return $this->lblProducts;
        }



        /**
         * Refresh this MetaControl with Data from the local ProductCategory object.
         * @param boolean $blnReload reload ProductCategory from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objProductCategory->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objProductCategory->Id;

            if ($this->txtName) $this->txtName->Text = $this->objProductCategory->Name;
            if ($this->lblName) $this->lblName->Text = $this->objProductCategory->Name;

            if ($this->txtTitle) $this->txtTitle->Text = $this->objProductCategory->Title;
            if ($this->lblTitle) $this->lblTitle->Text = $this->objProductCategory->Title;

            if ($this->txtDescription) $this->txtDescription->Text = $this->objProductCategory->Description;
            if ($this->lblDescription) $this->lblDescription->Text = $this->objProductCategory->Description;

            if ($this->txtImageUri) $this->txtImageUri->Text = $this->objProductCategory->ImageUri;
            if ($this->lblImageUri) $this->lblImageUri->Text = $this->objProductCategory->ImageUri;

            if ($this->txtParentProductCategoryId) $this->txtParentProductCategoryId->Text = $this->objProductCategory->ParentProductCategoryId;
            if ($this->lblParentProductCategoryId) $this->lblParentProductCategoryId->Text = $this->objProductCategory->ParentProductCategoryId;

            if ($this->lstProducts) {
                $this->lstProducts->RemoveAllItems();
                $objAssociatedArray = $this->objProductCategory->GetProductArray();
                $objProductArray = Product::LoadAll();
                if ($objProductArray) foreach ($objProductArray as $objProduct) {
                    $objListItem = new QListItem($objProduct->__toString(), $objProduct->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objProduct->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstProducts->AddItem($objListItem);
                }
            }
            if ($this->lblProducts) {
                $objAssociatedArray = $this->objProductCategory->GetProductArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblProducts->Text = implode($strGlue, $strItems);
            }

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////

        protected function lstProducts_Update() {
            if ($this->lstProducts) {
                $this->objProductCategory->UnassociateAllProducts();
                $objSelectedListItems = $this->lstProducts->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objProductCategory->AssociateProduct(Product::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC PRODUCTCATEGORY OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's ProductCategory instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveProductCategory() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objProductCategory->Name = $this->txtName->Text;
                if ($this->txtTitle) $this->objProductCategory->Title = $this->txtTitle->Text;
                if ($this->txtDescription) $this->objProductCategory->Description = $this->txtDescription->Text;
                if ($this->txtImageUri) $this->objProductCategory->ImageUri = $this->txtImageUri->Text;
                if ($this->txtParentProductCategoryId) $this->objProductCategory->ParentProductCategoryId = $this->txtParentProductCategoryId->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the ProductCategory object
                $this->objProductCategory->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstProducts_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's ProductCategory instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteProductCategory() {
            $this->objProductCategory->UnassociateAllProducts();
            $this->objProductCategory->Delete();
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
                case 'ProductCategory': return $this->objProductCategory;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to ProductCategory fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'NameControl':
                    if (!$this->txtName) return $this->txtName_Create();
                    return $this->txtName;
                case 'NameLabel':
                    if (!$this->lblName) return $this->lblName_Create();
                    return $this->lblName;
                case 'TitleControl':
                    if (!$this->txtTitle) return $this->txtTitle_Create();
                    return $this->txtTitle;
                case 'TitleLabel':
                    if (!$this->lblTitle) return $this->lblTitle_Create();
                    return $this->lblTitle;
                case 'DescriptionControl':
                    if (!$this->txtDescription) return $this->txtDescription_Create();
                    return $this->txtDescription;
                case 'DescriptionLabel':
                    if (!$this->lblDescription) return $this->lblDescription_Create();
                    return $this->lblDescription;
                case 'ImageUriControl':
                    if (!$this->txtImageUri) return $this->txtImageUri_Create();
                    return $this->txtImageUri;
                case 'ImageUriLabel':
                    if (!$this->lblImageUri) return $this->lblImageUri_Create();
                    return $this->lblImageUri;
                case 'ParentProductCategoryIdControl':
                    if (!$this->txtParentProductCategoryId) return $this->txtParentProductCategoryId_Create();
                    return $this->txtParentProductCategoryId;
                case 'ParentProductCategoryIdLabel':
                    if (!$this->lblParentProductCategoryId) return $this->lblParentProductCategoryId_Create();
                    return $this->lblParentProductCategoryId;
                case 'ProductControl':
                    if (!$this->lstProducts) return $this->lstProducts_Create();
                    return $this->lstProducts;
                case 'ProductLabel':
                    if (!$this->lblProducts) return $this->lblProducts_Create();
                    return $this->lblProducts;
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
                    // Controls that point to ProductCategory fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'TitleControl':
                        return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
                    case 'DescriptionControl':
                        return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
                    case 'ImageUriControl':
                        return ($this->txtImageUri = QType::Cast($mixValue, 'QControl'));
                    case 'ParentProductCategoryIdControl':
                        return ($this->txtParentProductCategoryId = QType::Cast($mixValue, 'QControl'));
                    case 'ProductControl':
                        return ($this->lstProducts = QType::Cast($mixValue, 'QControl'));
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