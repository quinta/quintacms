<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the ProductImage class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single ProductImage object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a ProductImageMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read ProductImage $ProductImage the actual ProductImage data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QListBox $ProductIdControl
     * property-read QLabel $ProductIdLabel
     * property QTextBox $TitleControl
     * property-read QLabel $TitleLabel
     * property QTextBox $AltTagControl
     * property-read QLabel $AltTagLabel
     * property QTextBox $DescriptionControl
     * property-read QLabel $DescriptionLabel
     * property QTextBox $UriControl
     * property-read QLabel $UriLabel
     * property QIntegerTextBox $XSizeControl
     * property-read QLabel $XSizeLabel
     * property QIntegerTextBox $YSizeControl
     * property-read QLabel $YSizeLabel
     * property QListBox $SizeTypeControl
     * property-read QLabel $SizeTypeLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class ProductImageMetaControlGen extends QBaseClass {
        // General Variables
        protected $objProductImage;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of ProductImage's individual data fields
        protected $lblId;
        protected $lstProduct;
        protected $txtTitle;
        protected $txtAltTag;
        protected $txtDescription;
        protected $txtUri;
        protected $txtXSize;
        protected $txtYSize;
        protected $lstSizeTypeObject;

        // Controls that allow the viewing of ProductImage's individual data fields
        protected $lblProductId;
        protected $lblTitle;
        protected $lblAltTag;
        protected $lblDescription;
        protected $lblUri;
        protected $lblXSize;
        protected $lblYSize;
        protected $lblSizeType;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * ProductImageMetaControl to edit a single ProductImage object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single ProductImage object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductImageMetaControl
         * @param ProductImage $objProductImage new or existing ProductImage object
         */
         public function __construct($objParentObject, ProductImage $objProductImage) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this ProductImageMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked ProductImage object
            $this->objProductImage = $objProductImage;

            // Figure out if we're Editing or Creating New
            if ($this->objProductImage->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductImageMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing ProductImage object creation - defaults to CreateOrEdit
         * @return ProductImageMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objProductImage = ProductImage::Load($intId);

                // ProductImage was found -- return it!
                if ($objProductImage)
                    return new ProductImageMetaControl($objParentObject, $objProductImage);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a ProductImage object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new ProductImageMetaControl($objParentObject, new ProductImage());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductImageMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ProductImage object creation - defaults to CreateOrEdit
         * @return ProductImageMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return ProductImageMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ProductImageMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ProductImage object creation - defaults to CreateOrEdit
         * @return ProductImageMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return ProductImageMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objProductImage->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
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
                if (($this->objProductImage->Product) && ($this->objProductImage->Product->Id == $objProduct->Id))
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
            $this->lblProductId->Text = ($this->objProductImage->Product) ? $this->objProductImage->Product->__toString() : null;
            $this->lblProductId->Required = true;
            return $this->lblProductId;
        }

        /**
         * Create and setup QTextBox txtTitle
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtTitle_Create($strControlId = null) {
            $this->txtTitle = new QTextBox($this->objParentObject, $strControlId);
            $this->txtTitle->Name = QApplication::Translate('Title');
            $this->txtTitle->Text = $this->objProductImage->Title;
            $this->txtTitle->MaxLength = ProductImage::TitleMaxLength;
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
            $this->lblTitle->Text = $this->objProductImage->Title;
            return $this->lblTitle;
        }

        /**
         * Create and setup QTextBox txtAltTag
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtAltTag_Create($strControlId = null) {
            $this->txtAltTag = new QTextBox($this->objParentObject, $strControlId);
            $this->txtAltTag->Name = QApplication::Translate('Alt Tag');
            $this->txtAltTag->Text = $this->objProductImage->AltTag;
            $this->txtAltTag->MaxLength = ProductImage::AltTagMaxLength;
            return $this->txtAltTag;
        }

        /**
         * Create and setup QLabel lblAltTag
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblAltTag_Create($strControlId = null) {
            $this->lblAltTag = new QLabel($this->objParentObject, $strControlId);
            $this->lblAltTag->Name = QApplication::Translate('Alt Tag');
            $this->lblAltTag->Text = $this->objProductImage->AltTag;
            return $this->lblAltTag;
        }

        /**
         * Create and setup QTextBox txtDescription
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtDescription_Create($strControlId = null) {
            $this->txtDescription = new QTextBox($this->objParentObject, $strControlId);
            $this->txtDescription->Name = QApplication::Translate('Description');
            $this->txtDescription->Text = $this->objProductImage->Description;
            $this->txtDescription->MaxLength = ProductImage::DescriptionMaxLength;
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
            $this->lblDescription->Text = $this->objProductImage->Description;
            return $this->lblDescription;
        }

        /**
         * Create and setup QTextBox txtUri
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtUri_Create($strControlId = null) {
            $this->txtUri = new QTextBox($this->objParentObject, $strControlId);
            $this->txtUri->Name = QApplication::Translate('Uri');
            $this->txtUri->Text = $this->objProductImage->Uri;
            $this->txtUri->MaxLength = ProductImage::UriMaxLength;
            return $this->txtUri;
        }

        /**
         * Create and setup QLabel lblUri
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblUri_Create($strControlId = null) {
            $this->lblUri = new QLabel($this->objParentObject, $strControlId);
            $this->lblUri->Name = QApplication::Translate('Uri');
            $this->lblUri->Text = $this->objProductImage->Uri;
            return $this->lblUri;
        }

        /**
         * Create and setup QIntegerTextBox txtXSize
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtXSize_Create($strControlId = null) {
            $this->txtXSize = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtXSize->Name = QApplication::Translate('X Size');
            $this->txtXSize->Text = $this->objProductImage->XSize;
            return $this->txtXSize;
        }

        /**
         * Create and setup QLabel lblXSize
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblXSize_Create($strControlId = null, $strFormat = null) {
            $this->lblXSize = new QLabel($this->objParentObject, $strControlId);
            $this->lblXSize->Name = QApplication::Translate('X Size');
            $this->lblXSize->Text = $this->objProductImage->XSize;
            $this->lblXSize->Format = $strFormat;
            return $this->lblXSize;
        }

        /**
         * Create and setup QIntegerTextBox txtYSize
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtYSize_Create($strControlId = null) {
            $this->txtYSize = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtYSize->Name = QApplication::Translate('Y Size');
            $this->txtYSize->Text = $this->objProductImage->YSize;
            return $this->txtYSize;
        }

        /**
         * Create and setup QLabel lblYSize
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblYSize_Create($strControlId = null, $strFormat = null) {
            $this->lblYSize = new QLabel($this->objParentObject, $strControlId);
            $this->lblYSize->Name = QApplication::Translate('Y Size');
            $this->lblYSize->Text = $this->objProductImage->YSize;
            $this->lblYSize->Format = $strFormat;
            return $this->lblYSize;
        }

        /**
         * Create and setup QListBox lstSizeTypeObject
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstSizeTypeObject_Create($strControlId = null) {
            $this->lstSizeTypeObject = new QListBox($this->objParentObject, $strControlId);
            $this->lstSizeTypeObject->Name = QApplication::Translate('Size Type Object');
            $this->lstSizeTypeObject->AddItem(QApplication::Translate('- Select One -'), null);
            foreach (ImageSizeType::$NameArray as $intId => $strValue)
                $this->lstSizeTypeObject->AddItem(new QListItem($strValue, $intId, $this->objProductImage->SizeType == $intId));
            return $this->lstSizeTypeObject;
        }

        /**
         * Create and setup QLabel lblSizeType
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblSizeType_Create($strControlId = null) {
            $this->lblSizeType = new QLabel($this->objParentObject, $strControlId);
            $this->lblSizeType->Name = QApplication::Translate('Size Type Object');
            $this->lblSizeType->Text = ($this->objProductImage->SizeType) ? ImageSizeType::$NameArray[$this->objProductImage->SizeType] : null;
            return $this->lblSizeType;
        }



        /**
         * Refresh this MetaControl with Data from the local ProductImage object.
         * @param boolean $blnReload reload ProductImage from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objProductImage->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objProductImage->Id;

            if ($this->lstProduct) {
                    $this->lstProduct->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstProduct->AddItem(QApplication::Translate('- Select One -'), null);
                $objProductArray = Product::LoadAll();
                if ($objProductArray) foreach ($objProductArray as $objProduct) {
                    $objListItem = new QListItem($objProduct->__toString(), $objProduct->Id);
                    if (($this->objProductImage->Product) && ($this->objProductImage->Product->Id == $objProduct->Id))
                        $objListItem->Selected = true;
                    $this->lstProduct->AddItem($objListItem);
                }
            }
            if ($this->lblProductId) $this->lblProductId->Text = ($this->objProductImage->Product) ? $this->objProductImage->Product->__toString() : null;

            if ($this->txtTitle) $this->txtTitle->Text = $this->objProductImage->Title;
            if ($this->lblTitle) $this->lblTitle->Text = $this->objProductImage->Title;

            if ($this->txtAltTag) $this->txtAltTag->Text = $this->objProductImage->AltTag;
            if ($this->lblAltTag) $this->lblAltTag->Text = $this->objProductImage->AltTag;

            if ($this->txtDescription) $this->txtDescription->Text = $this->objProductImage->Description;
            if ($this->lblDescription) $this->lblDescription->Text = $this->objProductImage->Description;

            if ($this->txtUri) $this->txtUri->Text = $this->objProductImage->Uri;
            if ($this->lblUri) $this->lblUri->Text = $this->objProductImage->Uri;

            if ($this->txtXSize) $this->txtXSize->Text = $this->objProductImage->XSize;
            if ($this->lblXSize) $this->lblXSize->Text = $this->objProductImage->XSize;

            if ($this->txtYSize) $this->txtYSize->Text = $this->objProductImage->YSize;
            if ($this->lblYSize) $this->lblYSize->Text = $this->objProductImage->YSize;

            if ($this->lstSizeTypeObject) $this->lstSizeTypeObject->SelectedValue = $this->objProductImage->SizeType;
            if ($this->lblSizeType) $this->lblSizeType->Text = ($this->objProductImage->SizeType) ? ImageSizeType::$NameArray[$this->objProductImage->SizeType] : null;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC PRODUCTIMAGE OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's ProductImage instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveProductImage() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstProduct) $this->objProductImage->ProductId = $this->lstProduct->SelectedValue;
                if ($this->txtTitle) $this->objProductImage->Title = $this->txtTitle->Text;
                if ($this->txtAltTag) $this->objProductImage->AltTag = $this->txtAltTag->Text;
                if ($this->txtDescription) $this->objProductImage->Description = $this->txtDescription->Text;
                if ($this->txtUri) $this->objProductImage->Uri = $this->txtUri->Text;
                if ($this->txtXSize) $this->objProductImage->XSize = $this->txtXSize->Text;
                if ($this->txtYSize) $this->objProductImage->YSize = $this->txtYSize->Text;
                if ($this->lstSizeTypeObject) $this->objProductImage->SizeType = $this->lstSizeTypeObject->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the ProductImage object
                $this->objProductImage->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's ProductImage instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteProductImage() {
            $this->objProductImage->Delete();
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
                case 'ProductImage': return $this->objProductImage;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to ProductImage fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'ProductIdControl':
                    if (!$this->lstProduct) return $this->lstProduct_Create();
                    return $this->lstProduct;
                case 'ProductIdLabel':
                    if (!$this->lblProductId) return $this->lblProductId_Create();
                    return $this->lblProductId;
                case 'TitleControl':
                    if (!$this->txtTitle) return $this->txtTitle_Create();
                    return $this->txtTitle;
                case 'TitleLabel':
                    if (!$this->lblTitle) return $this->lblTitle_Create();
                    return $this->lblTitle;
                case 'AltTagControl':
                    if (!$this->txtAltTag) return $this->txtAltTag_Create();
                    return $this->txtAltTag;
                case 'AltTagLabel':
                    if (!$this->lblAltTag) return $this->lblAltTag_Create();
                    return $this->lblAltTag;
                case 'DescriptionControl':
                    if (!$this->txtDescription) return $this->txtDescription_Create();
                    return $this->txtDescription;
                case 'DescriptionLabel':
                    if (!$this->lblDescription) return $this->lblDescription_Create();
                    return $this->lblDescription;
                case 'UriControl':
                    if (!$this->txtUri) return $this->txtUri_Create();
                    return $this->txtUri;
                case 'UriLabel':
                    if (!$this->lblUri) return $this->lblUri_Create();
                    return $this->lblUri;
                case 'XSizeControl':
                    if (!$this->txtXSize) return $this->txtXSize_Create();
                    return $this->txtXSize;
                case 'XSizeLabel':
                    if (!$this->lblXSize) return $this->lblXSize_Create();
                    return $this->lblXSize;
                case 'YSizeControl':
                    if (!$this->txtYSize) return $this->txtYSize_Create();
                    return $this->txtYSize;
                case 'YSizeLabel':
                    if (!$this->lblYSize) return $this->lblYSize_Create();
                    return $this->lblYSize;
                case 'SizeTypeControl':
                    if (!$this->lstSizeTypeObject) return $this->lstSizeTypeObject_Create();
                    return $this->lstSizeTypeObject;
                case 'SizeTypeLabel':
                    if (!$this->lblSizeType) return $this->lblSizeType_Create();
                    return $this->lblSizeType;
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
                    // Controls that point to ProductImage fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'ProductIdControl':
                        return ($this->lstProduct = QType::Cast($mixValue, 'QControl'));
                    case 'TitleControl':
                        return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
                    case 'AltTagControl':
                        return ($this->txtAltTag = QType::Cast($mixValue, 'QControl'));
                    case 'DescriptionControl':
                        return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
                    case 'UriControl':
                        return ($this->txtUri = QType::Cast($mixValue, 'QControl'));
                    case 'XSizeControl':
                        return ($this->txtXSize = QType::Cast($mixValue, 'QControl'));
                    case 'YSizeControl':
                        return ($this->txtYSize = QType::Cast($mixValue, 'QControl'));
                    case 'SizeTypeControl':
                        return ($this->lstSizeTypeObject = QType::Cast($mixValue, 'QControl'));
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