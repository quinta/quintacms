<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the HtmlMetaTag class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single HtmlMetaTag object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a HtmlMetaTagMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read HtmlMetaTag $HtmlMetaTag the actual HtmlMetaTag data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QTextBox $ContentControl
     * property-read QLabel $ContentLabel
     * property QTextBox $TypeControl
     * property-read QLabel $TypeLabel
     * property QListBox $PageControl
     * property-read QLabel $PageLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class HtmlMetaTagMetaControlGen extends QBaseClass {
        // General Variables
        protected $objHtmlMetaTag;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of HtmlMetaTag's individual data fields
        protected $lblId;
        protected $txtName;
        protected $txtContent;
        protected $txtType;

        // Controls that allow the viewing of HtmlMetaTag's individual data fields
        protected $lblName;
        protected $lblContent;
        protected $lblType;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstPages;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblPages;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * HtmlMetaTagMetaControl to edit a single HtmlMetaTag object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single HtmlMetaTag object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this HtmlMetaTagMetaControl
         * @param HtmlMetaTag $objHtmlMetaTag new or existing HtmlMetaTag object
         */
         public function __construct($objParentObject, HtmlMetaTag $objHtmlMetaTag) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this HtmlMetaTagMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked HtmlMetaTag object
            $this->objHtmlMetaTag = $objHtmlMetaTag;

            // Figure out if we're Editing or Creating New
            if ($this->objHtmlMetaTag->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this HtmlMetaTagMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing HtmlMetaTag object creation - defaults to CreateOrEdit
         * @return HtmlMetaTagMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objHtmlMetaTag = HtmlMetaTag::Load($intId);

                // HtmlMetaTag was found -- return it!
                if ($objHtmlMetaTag)
                    return new HtmlMetaTagMetaControl($objParentObject, $objHtmlMetaTag);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a HtmlMetaTag object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new HtmlMetaTagMetaControl($objParentObject, new HtmlMetaTag());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this HtmlMetaTagMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing HtmlMetaTag object creation - defaults to CreateOrEdit
         * @return HtmlMetaTagMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return HtmlMetaTagMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this HtmlMetaTagMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing HtmlMetaTag object creation - defaults to CreateOrEdit
         * @return HtmlMetaTagMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return HtmlMetaTagMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objHtmlMetaTag->Id;
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
            $this->txtName->Text = $this->objHtmlMetaTag->Name;
            $this->txtName->MaxLength = HtmlMetaTag::NameMaxLength;
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
            $this->lblName->Text = $this->objHtmlMetaTag->Name;
            return $this->lblName;
        }

        /**
         * Create and setup QTextBox txtContent
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtContent_Create($strControlId = null) {
            $this->txtContent = new QTextBox($this->objParentObject, $strControlId);
            $this->txtContent->Name = QApplication::Translate('Content');
            $this->txtContent->Text = $this->objHtmlMetaTag->Content;
            $this->txtContent->MaxLength = HtmlMetaTag::ContentMaxLength;
            return $this->txtContent;
        }

        /**
         * Create and setup QLabel lblContent
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblContent_Create($strControlId = null) {
            $this->lblContent = new QLabel($this->objParentObject, $strControlId);
            $this->lblContent->Name = QApplication::Translate('Content');
            $this->lblContent->Text = $this->objHtmlMetaTag->Content;
            return $this->lblContent;
        }

        /**
         * Create and setup QTextBox txtType
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtType_Create($strControlId = null) {
            $this->txtType = new QTextBox($this->objParentObject, $strControlId);
            $this->txtType->Name = QApplication::Translate('Type');
            $this->txtType->Text = $this->objHtmlMetaTag->Type;
            return $this->txtType;
        }

        /**
         * Create and setup QLabel lblType
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblType_Create($strControlId = null) {
            $this->lblType = new QLabel($this->objParentObject, $strControlId);
            $this->lblType->Name = QApplication::Translate('Type');
            $this->lblType->Text = $this->objHtmlMetaTag->Type;
            return $this->lblType;
        }

        /**
         * Create and setup QListBox lstPages
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstPages_Create($strControlId = null) {
            $this->lstPages = new QListBox($this->objParentObject, $strControlId);
            $this->lstPages->Name = QApplication::Translate('Pages');
            $this->lstPages->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objHtmlMetaTag->GetPageArray();
            $objPageArray = Page::LoadAll();
            if ($objPageArray) foreach ($objPageArray as $objPage) {
                $objListItem = new QListItem($objPage->__toString(), $objPage->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objPage->Id)
                        $objListItem->Selected = true;
                }
                $this->lstPages->AddItem($objListItem);
            }
            return $this->lstPages;
        }

        /**
         * Create and setup QLabel lblPages
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblPages_Create($strControlId = null, $strGlue = ', ') {
            $this->lblPages = new QLabel($this->objParentObject, $strControlId);
            $this->lblPages->Name = QApplication::Translate('Pages');
            
            $objAssociatedArray = $this->objHtmlMetaTag->GetPageArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblPages->Text = implode($strGlue, $strItems);
            return $this->lblPages;
        }



        /**
         * Refresh this MetaControl with Data from the local HtmlMetaTag object.
         * @param boolean $blnReload reload HtmlMetaTag from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objHtmlMetaTag->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objHtmlMetaTag->Id;

            if ($this->txtName) $this->txtName->Text = $this->objHtmlMetaTag->Name;
            if ($this->lblName) $this->lblName->Text = $this->objHtmlMetaTag->Name;

            if ($this->txtContent) $this->txtContent->Text = $this->objHtmlMetaTag->Content;
            if ($this->lblContent) $this->lblContent->Text = $this->objHtmlMetaTag->Content;

            if ($this->txtType) $this->txtType->Text = $this->objHtmlMetaTag->Type;
            if ($this->lblType) $this->lblType->Text = $this->objHtmlMetaTag->Type;

            if ($this->lstPages) {
                $this->lstPages->RemoveAllItems();
                $objAssociatedArray = $this->objHtmlMetaTag->GetPageArray();
                $objPageArray = Page::LoadAll();
                if ($objPageArray) foreach ($objPageArray as $objPage) {
                    $objListItem = new QListItem($objPage->__toString(), $objPage->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objPage->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstPages->AddItem($objListItem);
                }
            }
            if ($this->lblPages) {
                $objAssociatedArray = $this->objHtmlMetaTag->GetPageArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblPages->Text = implode($strGlue, $strItems);
            }

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////

        protected function lstPages_Update() {
            if ($this->lstPages) {
                $this->objHtmlMetaTag->UnassociateAllPages();
                $objSelectedListItems = $this->lstPages->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objHtmlMetaTag->AssociatePage(Page::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC HTMLMETATAG OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's HtmlMetaTag instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveHtmlMetaTag() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objHtmlMetaTag->Name = $this->txtName->Text;
                if ($this->txtContent) $this->objHtmlMetaTag->Content = $this->txtContent->Text;
                if ($this->txtType) $this->objHtmlMetaTag->Type = $this->txtType->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the HtmlMetaTag object
                $this->objHtmlMetaTag->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstPages_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's HtmlMetaTag instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteHtmlMetaTag() {
            $this->objHtmlMetaTag->UnassociateAllPages();
            $this->objHtmlMetaTag->Delete();
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
                case 'HtmlMetaTag': return $this->objHtmlMetaTag;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to HtmlMetaTag fields -- will be created dynamically if not yet created
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
                case 'ContentControl':
                    if (!$this->txtContent) return $this->txtContent_Create();
                    return $this->txtContent;
                case 'ContentLabel':
                    if (!$this->lblContent) return $this->lblContent_Create();
                    return $this->lblContent;
                case 'TypeControl':
                    if (!$this->txtType) return $this->txtType_Create();
                    return $this->txtType;
                case 'TypeLabel':
                    if (!$this->lblType) return $this->lblType_Create();
                    return $this->lblType;
                case 'PageControl':
                    if (!$this->lstPages) return $this->lstPages_Create();
                    return $this->lstPages;
                case 'PageLabel':
                    if (!$this->lblPages) return $this->lblPages_Create();
                    return $this->lblPages;
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
                    // Controls that point to HtmlMetaTag fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'ContentControl':
                        return ($this->txtContent = QType::Cast($mixValue, 'QControl'));
                    case 'TypeControl':
                        return ($this->txtType = QType::Cast($mixValue, 'QControl'));
                    case 'PageControl':
                        return ($this->lstPages = QType::Cast($mixValue, 'QControl'));
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