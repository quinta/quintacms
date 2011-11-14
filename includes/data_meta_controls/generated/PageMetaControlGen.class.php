<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the Page class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single Page object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a PageMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read Page $Page the actual Page data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QLabel $CreationDateControl
     * property-read QLabel $CreationDateLabel
     * property QLabel $LastModificationControl
     * property-read QLabel $LastModificationLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QTextBox $TitleControl
     * property-read QLabel $TitleLabel
     * property QTextBox $UriControl
     * property-read QLabel $UriLabel
     * property QCheckBox $HasHeaderControl
     * property-read QLabel $HasHeaderLabel
     * property QCheckBox $HasLeftColumnControl
     * property-read QLabel $HasLeftColumnLabel
     * property QCheckBox $HasRightColumnControl
     * property-read QLabel $HasRightColumnLabel
     * property QCheckBox $HasFooterControl
     * property-read QLabel $HasFooterLabel
     * property QListBox $TypeIdControl
     * property-read QLabel $TypeIdLabel
     * property QListBox $DocTypeIdControl
     * property-read QLabel $DocTypeIdLabel
     * property QListBox $StatusIdControl
     * property-read QLabel $StatusIdLabel
     * property QListBox $ContentBlockControl
     * property-read QLabel $ContentBlockLabel
     * property QListBox $ContentCategoryControl
     * property-read QLabel $ContentCategoryLabel
     * property QListBox $HtmlMetaTagControl
     * property-read QLabel $HtmlMetaTagLabel
     * property QListBox $JavaScriptControl
     * property-read QLabel $JavaScriptLabel
     * property QListBox $StyleSheetControl
     * property-read QLabel $StyleSheetLabel
     * property QListBox $UsergroupControl
     * property-read QLabel $UsergroupLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class PageMetaControlGen extends QBaseClass {
        // General Variables
        protected $objPage;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of Page's individual data fields
        protected $lblId;
        protected $lblCreationDate;
        protected $lblLastModification;
        protected $txtName;
        protected $txtTitle;
        protected $txtUri;
        protected $chkHasHeader;
        protected $chkHasLeftColumn;
        protected $chkHasRightColumn;
        protected $chkHasFooter;
        protected $lstType;
        protected $lstDocType;
        protected $lstStatus;

        // Controls that allow the viewing of Page's individual data fields
        protected $lblName;
        protected $lblTitle;
        protected $lblUri;
        protected $lblHasHeader;
        protected $lblHasLeftColumn;
        protected $lblHasRightColumn;
        protected $lblHasFooter;
        protected $lblTypeId;
        protected $lblDocTypeId;
        protected $lblStatusId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstContentBlocks;
        protected $lstContentCategories;
        protected $lstHtmlMetaTags;
        protected $lstJavaScripts;
        protected $lstStyleSheets;
        protected $lstUsergroups;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblContentBlocks;
        protected $lblContentCategories;
        protected $lblHtmlMetaTags;
        protected $lblJavaScripts;
        protected $lblStyleSheets;
        protected $lblUsergroups;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * PageMetaControl to edit a single Page object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single Page object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PageMetaControl
         * @param Page $objPage new or existing Page object
         */
         public function __construct($objParentObject, Page $objPage) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this PageMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked Page object
            $this->objPage = $objPage;

            // Figure out if we're Editing or Creating New
            if ($this->objPage->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this PageMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing Page object creation - defaults to CreateOrEdit
         * @return PageMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objPage = Page::Load($intId);

                // Page was found -- return it!
                if ($objPage)
                    return new PageMetaControl($objParentObject, $objPage);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a Page object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new PageMetaControl($objParentObject, new Page());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PageMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Page object creation - defaults to CreateOrEdit
         * @return PageMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return PageMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this PageMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing Page object creation - defaults to CreateOrEdit
         * @return PageMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return PageMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objPage->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
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
                $this->lblCreationDate->Text = $this->objPage->CreationDate;
            else
                $this->lblCreationDate->Text = 'N/A';
            return $this->lblCreationDate;
        }

        /**
         * Create and setup QLabel lblLastModification
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblLastModification_Create($strControlId = null) {
            $this->lblLastModification = new QLabel($this->objParentObject, $strControlId);
            $this->lblLastModification->Name = QApplication::Translate('Last Modification');
            if ($this->blnEditMode)
                $this->lblLastModification->Text = $this->objPage->LastModification;
            else
                $this->lblLastModification->Text = 'N/A';
            return $this->lblLastModification;
        }

        /**
         * Create and setup QTextBox txtName
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtName_Create($strControlId = null) {
            $this->txtName = new QTextBox($this->objParentObject, $strControlId);
            $this->txtName->Name = QApplication::Translate('Name');
            $this->txtName->Text = $this->objPage->Name;
            $this->txtName->MaxLength = Page::NameMaxLength;
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
            $this->lblName->Text = $this->objPage->Name;
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
            $this->txtTitle->Text = $this->objPage->Title;
            $this->txtTitle->MaxLength = Page::TitleMaxLength;
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
            $this->lblTitle->Text = $this->objPage->Title;
            return $this->lblTitle;
        }

        /**
         * Create and setup QTextBox txtUri
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtUri_Create($strControlId = null) {
            $this->txtUri = new QTextBox($this->objParentObject, $strControlId);
            $this->txtUri->Name = QApplication::Translate('Uri');
            $this->txtUri->Text = $this->objPage->Uri;
            $this->txtUri->MaxLength = Page::UriMaxLength;
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
            $this->lblUri->Text = $this->objPage->Uri;
            return $this->lblUri;
        }

        /**
         * Create and setup QCheckBox chkHasHeader
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkHasHeader_Create($strControlId = null) {
            $this->chkHasHeader = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkHasHeader->Name = QApplication::Translate('Has Header');
            $this->chkHasHeader->Checked = $this->objPage->HasHeader;
            return $this->chkHasHeader;
        }

        /**
         * Create and setup QLabel lblHasHeader
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblHasHeader_Create($strControlId = null) {
            $this->lblHasHeader = new QLabel($this->objParentObject, $strControlId);
            $this->lblHasHeader->Name = QApplication::Translate('Has Header');
            $this->lblHasHeader->Text = ($this->objPage->HasHeader) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblHasHeader;
        }

        /**
         * Create and setup QCheckBox chkHasLeftColumn
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkHasLeftColumn_Create($strControlId = null) {
            $this->chkHasLeftColumn = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkHasLeftColumn->Name = QApplication::Translate('Has Left Column');
            $this->chkHasLeftColumn->Checked = $this->objPage->HasLeftColumn;
            return $this->chkHasLeftColumn;
        }

        /**
         * Create and setup QLabel lblHasLeftColumn
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblHasLeftColumn_Create($strControlId = null) {
            $this->lblHasLeftColumn = new QLabel($this->objParentObject, $strControlId);
            $this->lblHasLeftColumn->Name = QApplication::Translate('Has Left Column');
            $this->lblHasLeftColumn->Text = ($this->objPage->HasLeftColumn) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblHasLeftColumn;
        }

        /**
         * Create and setup QCheckBox chkHasRightColumn
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkHasRightColumn_Create($strControlId = null) {
            $this->chkHasRightColumn = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkHasRightColumn->Name = QApplication::Translate('Has Right Column');
            $this->chkHasRightColumn->Checked = $this->objPage->HasRightColumn;
            return $this->chkHasRightColumn;
        }

        /**
         * Create and setup QLabel lblHasRightColumn
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblHasRightColumn_Create($strControlId = null) {
            $this->lblHasRightColumn = new QLabel($this->objParentObject, $strControlId);
            $this->lblHasRightColumn->Name = QApplication::Translate('Has Right Column');
            $this->lblHasRightColumn->Text = ($this->objPage->HasRightColumn) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblHasRightColumn;
        }

        /**
         * Create and setup QCheckBox chkHasFooter
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkHasFooter_Create($strControlId = null) {
            $this->chkHasFooter = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkHasFooter->Name = QApplication::Translate('Has Footer');
            $this->chkHasFooter->Checked = $this->objPage->HasFooter;
            return $this->chkHasFooter;
        }

        /**
         * Create and setup QLabel lblHasFooter
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblHasFooter_Create($strControlId = null) {
            $this->lblHasFooter = new QLabel($this->objParentObject, $strControlId);
            $this->lblHasFooter->Name = QApplication::Translate('Has Footer');
            $this->lblHasFooter->Text = ($this->objPage->HasFooter) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblHasFooter;
        }

        /**
         * Create and setup QListBox lstType
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstType_Create($strControlId = null) {
            $this->lstType = new QListBox($this->objParentObject, $strControlId);
            $this->lstType->Name = QApplication::Translate('Type');
            $this->lstType->AddItem(QApplication::Translate('- Select One -'), null);
            foreach (PageType::$NameArray as $intId => $strValue)
                $this->lstType->AddItem(new QListItem($strValue, $intId, $this->objPage->TypeId == $intId));
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
            $this->lblTypeId->Text = ($this->objPage->TypeId) ? PageType::$NameArray[$this->objPage->TypeId] : null;
            return $this->lblTypeId;
        }

        /**
         * Create and setup QListBox lstDocType
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstDocType_Create($strControlId = null) {
            $this->lstDocType = new QListBox($this->objParentObject, $strControlId);
            $this->lstDocType->Name = QApplication::Translate('Doc Type');
            $this->lstDocType->Required = true;
            foreach (PageDocType::$NameArray as $intId => $strValue)
                $this->lstDocType->AddItem(new QListItem($strValue, $intId, $this->objPage->DocTypeId == $intId));
            return $this->lstDocType;
        }

        /**
         * Create and setup QLabel lblDocTypeId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblDocTypeId_Create($strControlId = null) {
            $this->lblDocTypeId = new QLabel($this->objParentObject, $strControlId);
            $this->lblDocTypeId->Name = QApplication::Translate('Doc Type');
            $this->lblDocTypeId->Text = ($this->objPage->DocTypeId) ? PageDocType::$NameArray[$this->objPage->DocTypeId] : null;
            $this->lblDocTypeId->Required = true;
            return $this->lblDocTypeId;
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
            foreach (PageStatusType::$NameArray as $intId => $strValue)
                $this->lstStatus->AddItem(new QListItem($strValue, $intId, $this->objPage->StatusId == $intId));
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
            $this->lblStatusId->Text = ($this->objPage->StatusId) ? PageStatusType::$NameArray[$this->objPage->StatusId] : null;
            $this->lblStatusId->Required = true;
            return $this->lblStatusId;
        }

        /**
         * Create and setup QListBox lstContentBlocks
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstContentBlocks_Create($strControlId = null) {
            $this->lstContentBlocks = new QListBox($this->objParentObject, $strControlId);
            $this->lstContentBlocks->Name = QApplication::Translate('Content Blocks');
            $this->lstContentBlocks->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objPage->GetContentBlockArray();
            $objContentBlockArray = ContentBlock::LoadAll();
            if ($objContentBlockArray) foreach ($objContentBlockArray as $objContentBlock) {
                $objListItem = new QListItem($objContentBlock->__toString(), $objContentBlock->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objContentBlock->Id)
                        $objListItem->Selected = true;
                }
                $this->lstContentBlocks->AddItem($objListItem);
            }
            return $this->lstContentBlocks;
        }

        /**
         * Create and setup QLabel lblContentBlocks
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblContentBlocks_Create($strControlId = null, $strGlue = ', ') {
            $this->lblContentBlocks = new QLabel($this->objParentObject, $strControlId);
            $this->lblContentBlocks->Name = QApplication::Translate('Content Blocks');
            
            $objAssociatedArray = $this->objPage->GetContentBlockArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblContentBlocks->Text = implode($strGlue, $strItems);
            return $this->lblContentBlocks;
        }

        /**
         * Create and setup QListBox lstContentCategories
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstContentCategories_Create($strControlId = null) {
            $this->lstContentCategories = new QListBox($this->objParentObject, $strControlId);
            $this->lstContentCategories->Name = QApplication::Translate('Content Categories');
            $this->lstContentCategories->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objPage->GetContentCategoryArray();
            $objContentCategoryArray = ContentCategory::LoadAll();
            if ($objContentCategoryArray) foreach ($objContentCategoryArray as $objContentCategory) {
                $objListItem = new QListItem($objContentCategory->__toString(), $objContentCategory->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objContentCategory->Id)
                        $objListItem->Selected = true;
                }
                $this->lstContentCategories->AddItem($objListItem);
            }
            return $this->lstContentCategories;
        }

        /**
         * Create and setup QLabel lblContentCategories
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblContentCategories_Create($strControlId = null, $strGlue = ', ') {
            $this->lblContentCategories = new QLabel($this->objParentObject, $strControlId);
            $this->lblContentCategories->Name = QApplication::Translate('Content Categories');
            
            $objAssociatedArray = $this->objPage->GetContentCategoryArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblContentCategories->Text = implode($strGlue, $strItems);
            return $this->lblContentCategories;
        }

        /**
         * Create and setup QListBox lstHtmlMetaTags
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstHtmlMetaTags_Create($strControlId = null) {
            $this->lstHtmlMetaTags = new QListBox($this->objParentObject, $strControlId);
            $this->lstHtmlMetaTags->Name = QApplication::Translate('Html Meta Tags');
            $this->lstHtmlMetaTags->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objPage->GetHtmlMetaTagArray();
            $objHtmlMetaTagArray = HtmlMetaTag::LoadAll();
            if ($objHtmlMetaTagArray) foreach ($objHtmlMetaTagArray as $objHtmlMetaTag) {
                $objListItem = new QListItem($objHtmlMetaTag->__toString(), $objHtmlMetaTag->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objHtmlMetaTag->Id)
                        $objListItem->Selected = true;
                }
                $this->lstHtmlMetaTags->AddItem($objListItem);
            }
            return $this->lstHtmlMetaTags;
        }

        /**
         * Create and setup QLabel lblHtmlMetaTags
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblHtmlMetaTags_Create($strControlId = null, $strGlue = ', ') {
            $this->lblHtmlMetaTags = new QLabel($this->objParentObject, $strControlId);
            $this->lblHtmlMetaTags->Name = QApplication::Translate('Html Meta Tags');
            
            $objAssociatedArray = $this->objPage->GetHtmlMetaTagArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblHtmlMetaTags->Text = implode($strGlue, $strItems);
            return $this->lblHtmlMetaTags;
        }

        /**
         * Create and setup QListBox lstJavaScripts
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstJavaScripts_Create($strControlId = null) {
            $this->lstJavaScripts = new QListBox($this->objParentObject, $strControlId);
            $this->lstJavaScripts->Name = QApplication::Translate('Java Scripts');
            $this->lstJavaScripts->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objPage->GetJavaScriptArray();
            $objJavaScriptArray = JavaScript::LoadAll();
            if ($objJavaScriptArray) foreach ($objJavaScriptArray as $objJavaScript) {
                $objListItem = new QListItem($objJavaScript->__toString(), $objJavaScript->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objJavaScript->Id)
                        $objListItem->Selected = true;
                }
                $this->lstJavaScripts->AddItem($objListItem);
            }
            return $this->lstJavaScripts;
        }

        /**
         * Create and setup QLabel lblJavaScripts
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblJavaScripts_Create($strControlId = null, $strGlue = ', ') {
            $this->lblJavaScripts = new QLabel($this->objParentObject, $strControlId);
            $this->lblJavaScripts->Name = QApplication::Translate('Java Scripts');
            
            $objAssociatedArray = $this->objPage->GetJavaScriptArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblJavaScripts->Text = implode($strGlue, $strItems);
            return $this->lblJavaScripts;
        }

        /**
         * Create and setup QListBox lstStyleSheets
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstStyleSheets_Create($strControlId = null) {
            $this->lstStyleSheets = new QListBox($this->objParentObject, $strControlId);
            $this->lstStyleSheets->Name = QApplication::Translate('Style Sheets');
            $this->lstStyleSheets->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objPage->GetStyleSheetArray();
            $objStyleSheetArray = StyleSheet::LoadAll();
            if ($objStyleSheetArray) foreach ($objStyleSheetArray as $objStyleSheet) {
                $objListItem = new QListItem($objStyleSheet->__toString(), $objStyleSheet->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objStyleSheet->Id)
                        $objListItem->Selected = true;
                }
                $this->lstStyleSheets->AddItem($objListItem);
            }
            return $this->lstStyleSheets;
        }

        /**
         * Create and setup QLabel lblStyleSheets
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblStyleSheets_Create($strControlId = null, $strGlue = ', ') {
            $this->lblStyleSheets = new QLabel($this->objParentObject, $strControlId);
            $this->lblStyleSheets->Name = QApplication::Translate('Style Sheets');
            
            $objAssociatedArray = $this->objPage->GetStyleSheetArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblStyleSheets->Text = implode($strGlue, $strItems);
            return $this->lblStyleSheets;
        }

        /**
         * Create and setup QListBox lstUsergroups
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstUsergroups_Create($strControlId = null) {
            $this->lstUsergroups = new QListBox($this->objParentObject, $strControlId);
            $this->lstUsergroups->Name = QApplication::Translate('Usergroups');
            $this->lstUsergroups->SelectionMode = QSelectionMode::Multiple;
            $objAssociatedArray = $this->objPage->GetUsergroupArray();
            $objUsergroupArray = Usergroup::LoadAll();
            if ($objUsergroupArray) foreach ($objUsergroupArray as $objUsergroup) {
                $objListItem = new QListItem($objUsergroup->__toString(), $objUsergroup->Id);
                foreach ($objAssociatedArray as $objAssociated) {
                    if ($objAssociated->Id == $objUsergroup->Id)
                        $objListItem->Selected = true;
                }
                $this->lstUsergroups->AddItem($objListItem);
            }
            return $this->lstUsergroups;
        }

        /**
         * Create and setup QLabel lblUsergroups
         * @param string $strControlId optional ControlId to use
         * @param string $strGlue glue to display in between each associated object
         * @return QLabel
         */
        public function lblUsergroups_Create($strControlId = null, $strGlue = ', ') {
            $this->lblUsergroups = new QLabel($this->objParentObject, $strControlId);
            $this->lblUsergroups->Name = QApplication::Translate('Usergroups');
            
            $objAssociatedArray = $this->objPage->GetUsergroupArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblUsergroups->Text = implode($strGlue, $strItems);
            return $this->lblUsergroups;
        }



        /**
         * Refresh this MetaControl with Data from the local Page object.
         * @param boolean $blnReload reload Page from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objPage->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objPage->Id;

            if ($this->lblCreationDate) if ($this->blnEditMode) $this->lblCreationDate->Text = $this->objPage->CreationDate;

            if ($this->lblLastModification) if ($this->blnEditMode) $this->lblLastModification->Text = $this->objPage->LastModification;

            if ($this->txtName) $this->txtName->Text = $this->objPage->Name;
            if ($this->lblName) $this->lblName->Text = $this->objPage->Name;

            if ($this->txtTitle) $this->txtTitle->Text = $this->objPage->Title;
            if ($this->lblTitle) $this->lblTitle->Text = $this->objPage->Title;

            if ($this->txtUri) $this->txtUri->Text = $this->objPage->Uri;
            if ($this->lblUri) $this->lblUri->Text = $this->objPage->Uri;

            if ($this->chkHasHeader) $this->chkHasHeader->Checked = $this->objPage->HasHeader;
            if ($this->lblHasHeader) $this->lblHasHeader->Text = ($this->objPage->HasHeader) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkHasLeftColumn) $this->chkHasLeftColumn->Checked = $this->objPage->HasLeftColumn;
            if ($this->lblHasLeftColumn) $this->lblHasLeftColumn->Text = ($this->objPage->HasLeftColumn) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkHasRightColumn) $this->chkHasRightColumn->Checked = $this->objPage->HasRightColumn;
            if ($this->lblHasRightColumn) $this->lblHasRightColumn->Text = ($this->objPage->HasRightColumn) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkHasFooter) $this->chkHasFooter->Checked = $this->objPage->HasFooter;
            if ($this->lblHasFooter) $this->lblHasFooter->Text = ($this->objPage->HasFooter) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->lstType) $this->lstType->SelectedValue = $this->objPage->TypeId;
            if ($this->lblTypeId) $this->lblTypeId->Text = ($this->objPage->TypeId) ? PageType::$NameArray[$this->objPage->TypeId] : null;

            if ($this->lstDocType) $this->lstDocType->SelectedValue = $this->objPage->DocTypeId;
            if ($this->lblDocTypeId) $this->lblDocTypeId->Text = ($this->objPage->DocTypeId) ? PageDocType::$NameArray[$this->objPage->DocTypeId] : null;

            if ($this->lstStatus) $this->lstStatus->SelectedValue = $this->objPage->StatusId;
            if ($this->lblStatusId) $this->lblStatusId->Text = ($this->objPage->StatusId) ? PageStatusType::$NameArray[$this->objPage->StatusId] : null;

            if ($this->lstContentBlocks) {
                $this->lstContentBlocks->RemoveAllItems();
                $objAssociatedArray = $this->objPage->GetContentBlockArray();
                $objContentBlockArray = ContentBlock::LoadAll();
                if ($objContentBlockArray) foreach ($objContentBlockArray as $objContentBlock) {
                    $objListItem = new QListItem($objContentBlock->__toString(), $objContentBlock->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objContentBlock->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstContentBlocks->AddItem($objListItem);
                }
            }
            if ($this->lblContentBlocks) {
                $objAssociatedArray = $this->objPage->GetContentBlockArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblContentBlocks->Text = implode($strGlue, $strItems);
            }

            if ($this->lstContentCategories) {
                $this->lstContentCategories->RemoveAllItems();
                $objAssociatedArray = $this->objPage->GetContentCategoryArray();
                $objContentCategoryArray = ContentCategory::LoadAll();
                if ($objContentCategoryArray) foreach ($objContentCategoryArray as $objContentCategory) {
                    $objListItem = new QListItem($objContentCategory->__toString(), $objContentCategory->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objContentCategory->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstContentCategories->AddItem($objListItem);
                }
            }
            if ($this->lblContentCategories) {
                $objAssociatedArray = $this->objPage->GetContentCategoryArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblContentCategories->Text = implode($strGlue, $strItems);
            }

            if ($this->lstHtmlMetaTags) {
                $this->lstHtmlMetaTags->RemoveAllItems();
                $objAssociatedArray = $this->objPage->GetHtmlMetaTagArray();
                $objHtmlMetaTagArray = HtmlMetaTag::LoadAll();
                if ($objHtmlMetaTagArray) foreach ($objHtmlMetaTagArray as $objHtmlMetaTag) {
                    $objListItem = new QListItem($objHtmlMetaTag->__toString(), $objHtmlMetaTag->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objHtmlMetaTag->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstHtmlMetaTags->AddItem($objListItem);
                }
            }
            if ($this->lblHtmlMetaTags) {
                $objAssociatedArray = $this->objPage->GetHtmlMetaTagArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblHtmlMetaTags->Text = implode($strGlue, $strItems);
            }

            if ($this->lstJavaScripts) {
                $this->lstJavaScripts->RemoveAllItems();
                $objAssociatedArray = $this->objPage->GetJavaScriptArray();
                $objJavaScriptArray = JavaScript::LoadAll();
                if ($objJavaScriptArray) foreach ($objJavaScriptArray as $objJavaScript) {
                    $objListItem = new QListItem($objJavaScript->__toString(), $objJavaScript->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objJavaScript->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstJavaScripts->AddItem($objListItem);
                }
            }
            if ($this->lblJavaScripts) {
                $objAssociatedArray = $this->objPage->GetJavaScriptArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblJavaScripts->Text = implode($strGlue, $strItems);
            }

            if ($this->lstStyleSheets) {
                $this->lstStyleSheets->RemoveAllItems();
                $objAssociatedArray = $this->objPage->GetStyleSheetArray();
                $objStyleSheetArray = StyleSheet::LoadAll();
                if ($objStyleSheetArray) foreach ($objStyleSheetArray as $objStyleSheet) {
                    $objListItem = new QListItem($objStyleSheet->__toString(), $objStyleSheet->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objStyleSheet->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstStyleSheets->AddItem($objListItem);
                }
            }
            if ($this->lblStyleSheets) {
                $objAssociatedArray = $this->objPage->GetStyleSheetArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblStyleSheets->Text = implode($strGlue, $strItems);
            }

            if ($this->lstUsergroups) {
                $this->lstUsergroups->RemoveAllItems();
                $objAssociatedArray = $this->objPage->GetUsergroupArray();
                $objUsergroupArray = Usergroup::LoadAll();
                if ($objUsergroupArray) foreach ($objUsergroupArray as $objUsergroup) {
                    $objListItem = new QListItem($objUsergroup->__toString(), $objUsergroup->Id);
                    foreach ($objAssociatedArray as $objAssociated) {
                        if ($objAssociated->Id == $objUsergroup->Id)
                            $objListItem->Selected = true;
                    }
                    $this->lstUsergroups->AddItem($objListItem);
                }
            }
            if ($this->lblUsergroups) {
                $objAssociatedArray = $this->objPage->GetUsergroupArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblUsergroups->Text = implode($strGlue, $strItems);
            }

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////

        protected function lstContentBlocks_Update() {
            if ($this->lstContentBlocks) {
                $this->objPage->UnassociateAllContentBlocks();
                $objSelectedListItems = $this->lstContentBlocks->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objPage->AssociateContentBlock(ContentBlock::Load($objListItem->Value));
                }
            }
        }

        protected function lstContentCategories_Update() {
            if ($this->lstContentCategories) {
                $this->objPage->UnassociateAllContentCategories();
                $objSelectedListItems = $this->lstContentCategories->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objPage->AssociateContentCategory(ContentCategory::Load($objListItem->Value));
                }
            }
        }

        protected function lstHtmlMetaTags_Update() {
            if ($this->lstHtmlMetaTags) {
                $this->objPage->UnassociateAllHtmlMetaTags();
                $objSelectedListItems = $this->lstHtmlMetaTags->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objPage->AssociateHtmlMetaTag(HtmlMetaTag::Load($objListItem->Value));
                }
            }
        }

        protected function lstJavaScripts_Update() {
            if ($this->lstJavaScripts) {
                $this->objPage->UnassociateAllJavaScripts();
                $objSelectedListItems = $this->lstJavaScripts->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objPage->AssociateJavaScript(JavaScript::Load($objListItem->Value));
                }
            }
        }

        protected function lstStyleSheets_Update() {
            if ($this->lstStyleSheets) {
                $this->objPage->UnassociateAllStyleSheets();
                $objSelectedListItems = $this->lstStyleSheets->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objPage->AssociateStyleSheet(StyleSheet::Load($objListItem->Value));
                }
            }
        }

        protected function lstUsergroups_Update() {
            if ($this->lstUsergroups) {
                $this->objPage->UnassociateAllUsergroups();
                $objSelectedListItems = $this->lstUsergroups->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objPage->AssociateUsergroup(Usergroup::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC PAGE OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's Page instance,
         * updating only the fields which have had a control created for it.
         */
        public function SavePage() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objPage->Name = $this->txtName->Text;
                if ($this->txtTitle) $this->objPage->Title = $this->txtTitle->Text;
                if ($this->txtUri) $this->objPage->Uri = $this->txtUri->Text;
                if ($this->chkHasHeader) $this->objPage->HasHeader = $this->chkHasHeader->Checked;
                if ($this->chkHasLeftColumn) $this->objPage->HasLeftColumn = $this->chkHasLeftColumn->Checked;
                if ($this->chkHasRightColumn) $this->objPage->HasRightColumn = $this->chkHasRightColumn->Checked;
                if ($this->chkHasFooter) $this->objPage->HasFooter = $this->chkHasFooter->Checked;
                if ($this->lstType) $this->objPage->TypeId = $this->lstType->SelectedValue;
                if ($this->lstDocType) $this->objPage->DocTypeId = $this->lstDocType->SelectedValue;
                if ($this->lstStatus) $this->objPage->StatusId = $this->lstStatus->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the Page object
                $this->objPage->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstContentBlocks_Update();
                $this->lstContentCategories_Update();
                $this->lstHtmlMetaTags_Update();
                $this->lstJavaScripts_Update();
                $this->lstStyleSheets_Update();
                $this->lstUsergroups_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's Page instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeletePage() {
            $this->objPage->UnassociateAllContentBlocks();
            $this->objPage->UnassociateAllContentCategories();
            $this->objPage->UnassociateAllHtmlMetaTags();
            $this->objPage->UnassociateAllJavaScripts();
            $this->objPage->UnassociateAllStyleSheets();
            $this->objPage->UnassociateAllUsergroups();
            $this->objPage->Delete();
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
                case 'Page': return $this->objPage;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to Page fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'CreationDateControl':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'CreationDateLabel':
                    if (!$this->lblCreationDate) return $this->lblCreationDate_Create();
                    return $this->lblCreationDate;
                case 'LastModificationControl':
                    if (!$this->lblLastModification) return $this->lblLastModification_Create();
                    return $this->lblLastModification;
                case 'LastModificationLabel':
                    if (!$this->lblLastModification) return $this->lblLastModification_Create();
                    return $this->lblLastModification;
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
                case 'UriControl':
                    if (!$this->txtUri) return $this->txtUri_Create();
                    return $this->txtUri;
                case 'UriLabel':
                    if (!$this->lblUri) return $this->lblUri_Create();
                    return $this->lblUri;
                case 'HasHeaderControl':
                    if (!$this->chkHasHeader) return $this->chkHasHeader_Create();
                    return $this->chkHasHeader;
                case 'HasHeaderLabel':
                    if (!$this->lblHasHeader) return $this->lblHasHeader_Create();
                    return $this->lblHasHeader;
                case 'HasLeftColumnControl':
                    if (!$this->chkHasLeftColumn) return $this->chkHasLeftColumn_Create();
                    return $this->chkHasLeftColumn;
                case 'HasLeftColumnLabel':
                    if (!$this->lblHasLeftColumn) return $this->lblHasLeftColumn_Create();
                    return $this->lblHasLeftColumn;
                case 'HasRightColumnControl':
                    if (!$this->chkHasRightColumn) return $this->chkHasRightColumn_Create();
                    return $this->chkHasRightColumn;
                case 'HasRightColumnLabel':
                    if (!$this->lblHasRightColumn) return $this->lblHasRightColumn_Create();
                    return $this->lblHasRightColumn;
                case 'HasFooterControl':
                    if (!$this->chkHasFooter) return $this->chkHasFooter_Create();
                    return $this->chkHasFooter;
                case 'HasFooterLabel':
                    if (!$this->lblHasFooter) return $this->lblHasFooter_Create();
                    return $this->lblHasFooter;
                case 'TypeIdControl':
                    if (!$this->lstType) return $this->lstType_Create();
                    return $this->lstType;
                case 'TypeIdLabel':
                    if (!$this->lblTypeId) return $this->lblTypeId_Create();
                    return $this->lblTypeId;
                case 'DocTypeIdControl':
                    if (!$this->lstDocType) return $this->lstDocType_Create();
                    return $this->lstDocType;
                case 'DocTypeIdLabel':
                    if (!$this->lblDocTypeId) return $this->lblDocTypeId_Create();
                    return $this->lblDocTypeId;
                case 'StatusIdControl':
                    if (!$this->lstStatus) return $this->lstStatus_Create();
                    return $this->lstStatus;
                case 'StatusIdLabel':
                    if (!$this->lblStatusId) return $this->lblStatusId_Create();
                    return $this->lblStatusId;
                case 'ContentBlockControl':
                    if (!$this->lstContentBlocks) return $this->lstContentBlocks_Create();
                    return $this->lstContentBlocks;
                case 'ContentBlockLabel':
                    if (!$this->lblContentBlocks) return $this->lblContentBlocks_Create();
                    return $this->lblContentBlocks;
                case 'ContentCategoryControl':
                    if (!$this->lstContentCategories) return $this->lstContentCategories_Create();
                    return $this->lstContentCategories;
                case 'ContentCategoryLabel':
                    if (!$this->lblContentCategories) return $this->lblContentCategories_Create();
                    return $this->lblContentCategories;
                case 'HtmlMetaTagControl':
                    if (!$this->lstHtmlMetaTags) return $this->lstHtmlMetaTags_Create();
                    return $this->lstHtmlMetaTags;
                case 'HtmlMetaTagLabel':
                    if (!$this->lblHtmlMetaTags) return $this->lblHtmlMetaTags_Create();
                    return $this->lblHtmlMetaTags;
                case 'JavaScriptControl':
                    if (!$this->lstJavaScripts) return $this->lstJavaScripts_Create();
                    return $this->lstJavaScripts;
                case 'JavaScriptLabel':
                    if (!$this->lblJavaScripts) return $this->lblJavaScripts_Create();
                    return $this->lblJavaScripts;
                case 'StyleSheetControl':
                    if (!$this->lstStyleSheets) return $this->lstStyleSheets_Create();
                    return $this->lstStyleSheets;
                case 'StyleSheetLabel':
                    if (!$this->lblStyleSheets) return $this->lblStyleSheets_Create();
                    return $this->lblStyleSheets;
                case 'UsergroupControl':
                    if (!$this->lstUsergroups) return $this->lstUsergroups_Create();
                    return $this->lstUsergroups;
                case 'UsergroupLabel':
                    if (!$this->lblUsergroups) return $this->lblUsergroups_Create();
                    return $this->lblUsergroups;
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
                    // Controls that point to Page fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'CreationDateControl':
                        return ($this->lblCreationDate = QType::Cast($mixValue, 'QControl'));
                    case 'LastModificationControl':
                        return ($this->lblLastModification = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'TitleControl':
                        return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
                    case 'UriControl':
                        return ($this->txtUri = QType::Cast($mixValue, 'QControl'));
                    case 'HasHeaderControl':
                        return ($this->chkHasHeader = QType::Cast($mixValue, 'QControl'));
                    case 'HasLeftColumnControl':
                        return ($this->chkHasLeftColumn = QType::Cast($mixValue, 'QControl'));
                    case 'HasRightColumnControl':
                        return ($this->chkHasRightColumn = QType::Cast($mixValue, 'QControl'));
                    case 'HasFooterControl':
                        return ($this->chkHasFooter = QType::Cast($mixValue, 'QControl'));
                    case 'TypeIdControl':
                        return ($this->lstType = QType::Cast($mixValue, 'QControl'));
                    case 'DocTypeIdControl':
                        return ($this->lstDocType = QType::Cast($mixValue, 'QControl'));
                    case 'StatusIdControl':
                        return ($this->lstStatus = QType::Cast($mixValue, 'QControl'));
                    case 'ContentBlockControl':
                        return ($this->lstContentBlocks = QType::Cast($mixValue, 'QControl'));
                    case 'ContentCategoryControl':
                        return ($this->lstContentCategories = QType::Cast($mixValue, 'QControl'));
                    case 'HtmlMetaTagControl':
                        return ($this->lstHtmlMetaTags = QType::Cast($mixValue, 'QControl'));
                    case 'JavaScriptControl':
                        return ($this->lstJavaScripts = QType::Cast($mixValue, 'QControl'));
                    case 'StyleSheetControl':
                        return ($this->lstStyleSheets = QType::Cast($mixValue, 'QControl'));
                    case 'UsergroupControl':
                        return ($this->lstUsergroups = QType::Cast($mixValue, 'QControl'));
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