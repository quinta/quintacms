<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the ContentItem class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single ContentItem object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a ContentItemMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read ContentItem $ContentItem the actual ContentItem data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QTextBox $NameControl
     * property-read QLabel $NameLabel
     * property QTextBox $CssclassControl
     * property-read QLabel $CssclassLabel
     * property QTextBox $TitleControl
     * property-read QLabel $TitleLabel
     * property QTextBox $DescriptionControl
     * property-read QLabel $DescriptionLabel
     * property QTextBox $TextControl
     * property-read QLabel $TextLabel
     * property QIntegerTextBox $SortOrderControl
     * property-read QLabel $SortOrderLabel
     * property QCheckBox $ShowTitleControl
     * property-read QLabel $ShowTitleLabel
     * property QCheckBox $ShowDescriptionControl
     * property-read QLabel $ShowDescriptionLabel
     * property QCheckBox $ShowCreatorControl
     * property-read QLabel $ShowCreatorLabel
     * property QCheckBox $ShowCreationDateControl
     * property-read QLabel $ShowCreationDateLabel
     * property QCheckBox $ShowLastModificationControl
     * property-read QLabel $ShowLastModificationLabel
     * property QListBox $CreatorIdControl
     * property-read QLabel $CreatorIdLabel
     * property QTextBox $CopyrightNoticeControl
     * property-read QLabel $CopyrightNoticeLabel
     * property QLabel $CreationDateControl
     * property-read QLabel $CreationDateLabel
     * property QLabel $LastModificationControl
     * property-read QLabel $LastModificationLabel
     * property QListBox $TypeIdControl
     * property-read QLabel $TypeIdLabel
     * property QListBox $StatusIdControl
     * property-read QLabel $StatusIdLabel
     * property QListBox $ContentBlockControl
     * property-read QLabel $ContentBlockLabel
     * property QListBox $ContentCategoryControl
     * property-read QLabel $ContentCategoryLabel
     * property QListBox $UsergroupControl
     * property-read QLabel $UsergroupLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class ContentItemMetaControlGen extends QBaseClass {
        // General Variables
        protected $objContentItem;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of ContentItem's individual data fields
        protected $lblId;
        protected $txtName;
        protected $txtCssclass;
        protected $txtTitle;
        protected $txtDescription;
        protected $txtText;
        protected $txtSortOrder;
        protected $chkShowTitle;
        protected $chkShowDescription;
        protected $chkShowCreator;
        protected $chkShowCreationDate;
        protected $chkShowLastModification;
        protected $lstCreator;
        protected $txtCopyrightNotice;
        protected $lblCreationDate;
        protected $lblLastModification;
        protected $lstType;
        protected $lstStatus;

        // Controls that allow the viewing of ContentItem's individual data fields
        protected $lblName;
        protected $lblCssclass;
        protected $lblTitle;
        protected $lblDescription;
        protected $lblText;
        protected $lblSortOrder;
        protected $lblShowTitle;
        protected $lblShowDescription;
        protected $lblShowCreator;
        protected $lblShowCreationDate;
        protected $lblShowLastModification;
        protected $lblCreatorId;
        protected $lblCopyrightNotice;
        protected $lblTypeId;
        protected $lblStatusId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
        protected $lstContentBlocks;
        protected $lstContentCategories;
        protected $lstUsergroups;

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
        protected $lblContentBlocks;
        protected $lblContentCategories;
        protected $lblUsergroups;


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * ContentItemMetaControl to edit a single ContentItem object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single ContentItem object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentItemMetaControl
         * @param ContentItem $objContentItem new or existing ContentItem object
         */
         public function __construct($objParentObject, ContentItem $objContentItem) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this ContentItemMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked ContentItem object
            $this->objContentItem = $objContentItem;

            // Figure out if we're Editing or Creating New
            if ($this->objContentItem->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentItemMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing ContentItem object creation - defaults to CreateOrEdit
         * @return ContentItemMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objContentItem = ContentItem::Load($intId);

                // ContentItem was found -- return it!
                if ($objContentItem)
                    return new ContentItemMetaControl($objParentObject, $objContentItem);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a ContentItem object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new ContentItemMetaControl($objParentObject, new ContentItem());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentItemMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ContentItem object creation - defaults to CreateOrEdit
         * @return ContentItemMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return ContentItemMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this ContentItemMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing ContentItem object creation - defaults to CreateOrEdit
         * @return ContentItemMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return ContentItemMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objContentItem->Id;
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
            $this->txtName->Text = $this->objContentItem->Name;
            $this->txtName->Required = true;
            $this->txtName->MaxLength = ContentItem::NameMaxLength;
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
            $this->lblName->Text = $this->objContentItem->Name;
            $this->lblName->Required = true;
            return $this->lblName;
        }

        /**
         * Create and setup QTextBox txtCssclass
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCssclass_Create($strControlId = null) {
            $this->txtCssclass = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCssclass->Name = QApplication::Translate('Cssclass');
            $this->txtCssclass->Text = $this->objContentItem->Cssclass;
            $this->txtCssclass->MaxLength = ContentItem::CssclassMaxLength;
            return $this->txtCssclass;
        }

        /**
         * Create and setup QLabel lblCssclass
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCssclass_Create($strControlId = null) {
            $this->lblCssclass = new QLabel($this->objParentObject, $strControlId);
            $this->lblCssclass->Name = QApplication::Translate('Cssclass');
            $this->lblCssclass->Text = $this->objContentItem->Cssclass;
            return $this->lblCssclass;
        }

        /**
         * Create and setup QTextBox txtTitle
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtTitle_Create($strControlId = null) {
            $this->txtTitle = new QTextBox($this->objParentObject, $strControlId);
            $this->txtTitle->Name = QApplication::Translate('Title');
            $this->txtTitle->Text = $this->objContentItem->Title;
            $this->txtTitle->MaxLength = ContentItem::TitleMaxLength;
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
            $this->lblTitle->Text = $this->objContentItem->Title;
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
            $this->txtDescription->Text = $this->objContentItem->Description;
            $this->txtDescription->MaxLength = ContentItem::DescriptionMaxLength;
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
            $this->lblDescription->Text = $this->objContentItem->Description;
            return $this->lblDescription;
        }

        /**
         * Create and setup QTextBox txtText
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtText_Create($strControlId = null) {
            $this->txtText = new QTextBox($this->objParentObject, $strControlId);
            $this->txtText->Name = QApplication::Translate('Text');
            $this->txtText->Text = $this->objContentItem->Text;
            $this->txtText->TextMode = QTextMode::MultiLine;
            return $this->txtText;
        }

        /**
         * Create and setup QLabel lblText
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblText_Create($strControlId = null) {
            $this->lblText = new QLabel($this->objParentObject, $strControlId);
            $this->lblText->Name = QApplication::Translate('Text');
            $this->lblText->Text = $this->objContentItem->Text;
            return $this->lblText;
        }

        /**
         * Create and setup QIntegerTextBox txtSortOrder
         * @param string $strControlId optional ControlId to use
         * @return QIntegerTextBox
         */
        public function txtSortOrder_Create($strControlId = null) {
            $this->txtSortOrder = new QIntegerTextBox($this->objParentObject, $strControlId);
            $this->txtSortOrder->Name = QApplication::Translate('Sort Order');
            $this->txtSortOrder->Text = $this->objContentItem->SortOrder;
            return $this->txtSortOrder;
        }

        /**
         * Create and setup QLabel lblSortOrder
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblSortOrder_Create($strControlId = null, $strFormat = null) {
            $this->lblSortOrder = new QLabel($this->objParentObject, $strControlId);
            $this->lblSortOrder->Name = QApplication::Translate('Sort Order');
            $this->lblSortOrder->Text = $this->objContentItem->SortOrder;
            $this->lblSortOrder->Format = $strFormat;
            return $this->lblSortOrder;
        }

        /**
         * Create and setup QCheckBox chkShowTitle
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkShowTitle_Create($strControlId = null) {
            $this->chkShowTitle = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkShowTitle->Name = QApplication::Translate('Show Title');
            $this->chkShowTitle->Checked = $this->objContentItem->ShowTitle;
            return $this->chkShowTitle;
        }

        /**
         * Create and setup QLabel lblShowTitle
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblShowTitle_Create($strControlId = null) {
            $this->lblShowTitle = new QLabel($this->objParentObject, $strControlId);
            $this->lblShowTitle->Name = QApplication::Translate('Show Title');
            $this->lblShowTitle->Text = ($this->objContentItem->ShowTitle) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblShowTitle;
        }

        /**
         * Create and setup QCheckBox chkShowDescription
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkShowDescription_Create($strControlId = null) {
            $this->chkShowDescription = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkShowDescription->Name = QApplication::Translate('Show Description');
            $this->chkShowDescription->Checked = $this->objContentItem->ShowDescription;
            return $this->chkShowDescription;
        }

        /**
         * Create and setup QLabel lblShowDescription
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblShowDescription_Create($strControlId = null) {
            $this->lblShowDescription = new QLabel($this->objParentObject, $strControlId);
            $this->lblShowDescription->Name = QApplication::Translate('Show Description');
            $this->lblShowDescription->Text = ($this->objContentItem->ShowDescription) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblShowDescription;
        }

        /**
         * Create and setup QCheckBox chkShowCreator
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkShowCreator_Create($strControlId = null) {
            $this->chkShowCreator = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkShowCreator->Name = QApplication::Translate('Show Creator');
            $this->chkShowCreator->Checked = $this->objContentItem->ShowCreator;
            return $this->chkShowCreator;
        }

        /**
         * Create and setup QLabel lblShowCreator
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblShowCreator_Create($strControlId = null) {
            $this->lblShowCreator = new QLabel($this->objParentObject, $strControlId);
            $this->lblShowCreator->Name = QApplication::Translate('Show Creator');
            $this->lblShowCreator->Text = ($this->objContentItem->ShowCreator) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblShowCreator;
        }

        /**
         * Create and setup QCheckBox chkShowCreationDate
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkShowCreationDate_Create($strControlId = null) {
            $this->chkShowCreationDate = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkShowCreationDate->Name = QApplication::Translate('Show Creation Date');
            $this->chkShowCreationDate->Checked = $this->objContentItem->ShowCreationDate;
            return $this->chkShowCreationDate;
        }

        /**
         * Create and setup QLabel lblShowCreationDate
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblShowCreationDate_Create($strControlId = null) {
            $this->lblShowCreationDate = new QLabel($this->objParentObject, $strControlId);
            $this->lblShowCreationDate->Name = QApplication::Translate('Show Creation Date');
            $this->lblShowCreationDate->Text = ($this->objContentItem->ShowCreationDate) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblShowCreationDate;
        }

        /**
         * Create and setup QCheckBox chkShowLastModification
         * @param string $strControlId optional ControlId to use
         * @return QCheckBox
         */
        public function chkShowLastModification_Create($strControlId = null) {
            $this->chkShowLastModification = new QCheckBox($this->objParentObject, $strControlId);
            $this->chkShowLastModification->Name = QApplication::Translate('Show Last Modification');
            $this->chkShowLastModification->Checked = $this->objContentItem->ShowLastModification;
            return $this->chkShowLastModification;
        }

        /**
         * Create and setup QLabel lblShowLastModification
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblShowLastModification_Create($strControlId = null) {
            $this->lblShowLastModification = new QLabel($this->objParentObject, $strControlId);
            $this->lblShowLastModification->Name = QApplication::Translate('Show Last Modification');
            $this->lblShowLastModification->Text = ($this->objContentItem->ShowLastModification) ? QApplication::Translate('Yes') : QApplication::Translate('No');
            return $this->lblShowLastModification;
        }

        /**
         * Create and setup QListBox lstCreator
         * @param string $strControlId optional ControlId to use
         * @return QListBox
         */
        public function lstCreator_Create($strControlId = null) {
            $this->lstCreator = new QListBox($this->objParentObject, $strControlId);
            $this->lstCreator->Name = QApplication::Translate('Creator');
            $this->lstCreator->AddItem(QApplication::Translate('- Select One -'), null);
            $objCreatorArray = Person::LoadAll();
            if ($objCreatorArray) foreach ($objCreatorArray as $objCreator) {
                $objListItem = new QListItem($objCreator->__toString(), $objCreator->Id);
                if (($this->objContentItem->Creator) && ($this->objContentItem->Creator->Id == $objCreator->Id))
                    $objListItem->Selected = true;
                $this->lstCreator->AddItem($objListItem);
            }
            return $this->lstCreator;
        }

        /**
         * Create and setup QLabel lblCreatorId
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCreatorId_Create($strControlId = null) {
            $this->lblCreatorId = new QLabel($this->objParentObject, $strControlId);
            $this->lblCreatorId->Name = QApplication::Translate('Creator');
            $this->lblCreatorId->Text = ($this->objContentItem->Creator) ? $this->objContentItem->Creator->__toString() : null;
            return $this->lblCreatorId;
        }

        /**
         * Create and setup QTextBox txtCopyrightNotice
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtCopyrightNotice_Create($strControlId = null) {
            $this->txtCopyrightNotice = new QTextBox($this->objParentObject, $strControlId);
            $this->txtCopyrightNotice->Name = QApplication::Translate('Copyright Notice');
            $this->txtCopyrightNotice->Text = $this->objContentItem->CopyrightNotice;
            $this->txtCopyrightNotice->MaxLength = ContentItem::CopyrightNoticeMaxLength;
            return $this->txtCopyrightNotice;
        }

        /**
         * Create and setup QLabel lblCopyrightNotice
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblCopyrightNotice_Create($strControlId = null) {
            $this->lblCopyrightNotice = new QLabel($this->objParentObject, $strControlId);
            $this->lblCopyrightNotice->Name = QApplication::Translate('Copyright Notice');
            $this->lblCopyrightNotice->Text = $this->objContentItem->CopyrightNotice;
            return $this->lblCopyrightNotice;
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
                $this->lblCreationDate->Text = $this->objContentItem->CreationDate;
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
                $this->lblLastModification->Text = $this->objContentItem->LastModification;
            else
                $this->lblLastModification->Text = 'N/A';
            return $this->lblLastModification;
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
            foreach (ContentType::$NameArray as $intId => $strValue)
                $this->lstType->AddItem(new QListItem($strValue, $intId, $this->objContentItem->TypeId == $intId));
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
            $this->lblTypeId->Text = ($this->objContentItem->TypeId) ? ContentType::$NameArray[$this->objContentItem->TypeId] : null;
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
            foreach (ContentStatusType::$NameArray as $intId => $strValue)
                $this->lstStatus->AddItem(new QListItem($strValue, $intId, $this->objContentItem->StatusId == $intId));
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
            $this->lblStatusId->Text = ($this->objContentItem->StatusId) ? ContentStatusType::$NameArray[$this->objContentItem->StatusId] : null;
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
            $objAssociatedArray = $this->objContentItem->GetContentBlockArray();
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
            
            $objAssociatedArray = $this->objContentItem->GetContentBlockArray();
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
            $objAssociatedArray = $this->objContentItem->GetContentCategoryArray();
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
            
            $objAssociatedArray = $this->objContentItem->GetContentCategoryArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblContentCategories->Text = implode($strGlue, $strItems);
            return $this->lblContentCategories;
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
            $objAssociatedArray = $this->objContentItem->GetUsergroupArray();
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
            
            $objAssociatedArray = $this->objContentItem->GetUsergroupArray();
            $strItems = array();
            foreach ($objAssociatedArray as $objAssociated)
                $strItems[] = $objAssociated->__toString();
            $this->lblUsergroups->Text = implode($strGlue, $strItems);
            return $this->lblUsergroups;
        }



        /**
         * Refresh this MetaControl with Data from the local ContentItem object.
         * @param boolean $blnReload reload ContentItem from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objContentItem->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objContentItem->Id;

            if ($this->txtName) $this->txtName->Text = $this->objContentItem->Name;
            if ($this->lblName) $this->lblName->Text = $this->objContentItem->Name;

            if ($this->txtCssclass) $this->txtCssclass->Text = $this->objContentItem->Cssclass;
            if ($this->lblCssclass) $this->lblCssclass->Text = $this->objContentItem->Cssclass;

            if ($this->txtTitle) $this->txtTitle->Text = $this->objContentItem->Title;
            if ($this->lblTitle) $this->lblTitle->Text = $this->objContentItem->Title;

            if ($this->txtDescription) $this->txtDescription->Text = $this->objContentItem->Description;
            if ($this->lblDescription) $this->lblDescription->Text = $this->objContentItem->Description;

            if ($this->txtText) $this->txtText->Text = $this->objContentItem->Text;
            if ($this->lblText) $this->lblText->Text = $this->objContentItem->Text;

            if ($this->txtSortOrder) $this->txtSortOrder->Text = $this->objContentItem->SortOrder;
            if ($this->lblSortOrder) $this->lblSortOrder->Text = $this->objContentItem->SortOrder;

            if ($this->chkShowTitle) $this->chkShowTitle->Checked = $this->objContentItem->ShowTitle;
            if ($this->lblShowTitle) $this->lblShowTitle->Text = ($this->objContentItem->ShowTitle) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkShowDescription) $this->chkShowDescription->Checked = $this->objContentItem->ShowDescription;
            if ($this->lblShowDescription) $this->lblShowDescription->Text = ($this->objContentItem->ShowDescription) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkShowCreator) $this->chkShowCreator->Checked = $this->objContentItem->ShowCreator;
            if ($this->lblShowCreator) $this->lblShowCreator->Text = ($this->objContentItem->ShowCreator) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkShowCreationDate) $this->chkShowCreationDate->Checked = $this->objContentItem->ShowCreationDate;
            if ($this->lblShowCreationDate) $this->lblShowCreationDate->Text = ($this->objContentItem->ShowCreationDate) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->chkShowLastModification) $this->chkShowLastModification->Checked = $this->objContentItem->ShowLastModification;
            if ($this->lblShowLastModification) $this->lblShowLastModification->Text = ($this->objContentItem->ShowLastModification) ? QApplication::Translate('Yes') : QApplication::Translate('No');

            if ($this->lstCreator) {
                    $this->lstCreator->RemoveAllItems();
                $this->lstCreator->AddItem(QApplication::Translate('- Select One -'), null);
                $objCreatorArray = Person::LoadAll();
                if ($objCreatorArray) foreach ($objCreatorArray as $objCreator) {
                    $objListItem = new QListItem($objCreator->__toString(), $objCreator->Id);
                    if (($this->objContentItem->Creator) && ($this->objContentItem->Creator->Id == $objCreator->Id))
                        $objListItem->Selected = true;
                    $this->lstCreator->AddItem($objListItem);
                }
            }
            if ($this->lblCreatorId) $this->lblCreatorId->Text = ($this->objContentItem->Creator) ? $this->objContentItem->Creator->__toString() : null;

            if ($this->txtCopyrightNotice) $this->txtCopyrightNotice->Text = $this->objContentItem->CopyrightNotice;
            if ($this->lblCopyrightNotice) $this->lblCopyrightNotice->Text = $this->objContentItem->CopyrightNotice;

            if ($this->lblCreationDate) if ($this->blnEditMode) $this->lblCreationDate->Text = $this->objContentItem->CreationDate;

            if ($this->lblLastModification) if ($this->blnEditMode) $this->lblLastModification->Text = $this->objContentItem->LastModification;

            if ($this->lstType) $this->lstType->SelectedValue = $this->objContentItem->TypeId;
            if ($this->lblTypeId) $this->lblTypeId->Text = ($this->objContentItem->TypeId) ? ContentType::$NameArray[$this->objContentItem->TypeId] : null;

            if ($this->lstStatus) $this->lstStatus->SelectedValue = $this->objContentItem->StatusId;
            if ($this->lblStatusId) $this->lblStatusId->Text = ($this->objContentItem->StatusId) ? ContentStatusType::$NameArray[$this->objContentItem->StatusId] : null;

            if ($this->lstContentBlocks) {
                $this->lstContentBlocks->RemoveAllItems();
                $objAssociatedArray = $this->objContentItem->GetContentBlockArray();
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
                $objAssociatedArray = $this->objContentItem->GetContentBlockArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblContentBlocks->Text = implode($strGlue, $strItems);
            }

            if ($this->lstContentCategories) {
                $this->lstContentCategories->RemoveAllItems();
                $objAssociatedArray = $this->objContentItem->GetContentCategoryArray();
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
                $objAssociatedArray = $this->objContentItem->GetContentCategoryArray();
                $strItems = array();
                foreach ($objAssociatedArray as $objAssociated)
                    $strItems[] = $objAssociated->__toString();
                $this->lblContentCategories->Text = implode($strGlue, $strItems);
            }

            if ($this->lstUsergroups) {
                $this->lstUsergroups->RemoveAllItems();
                $objAssociatedArray = $this->objContentItem->GetUsergroupArray();
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
                $objAssociatedArray = $this->objContentItem->GetUsergroupArray();
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
                $this->objContentItem->UnassociateAllContentBlocks();
                $objSelectedListItems = $this->lstContentBlocks->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objContentItem->AssociateContentBlock(ContentBlock::Load($objListItem->Value));
                }
            }
        }

        protected function lstContentCategories_Update() {
            if ($this->lstContentCategories) {
                $this->objContentItem->UnassociateAllContentCategories();
                $objSelectedListItems = $this->lstContentCategories->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objContentItem->AssociateContentCategory(ContentCategory::Load($objListItem->Value));
                }
            }
        }

        protected function lstUsergroups_Update() {
            if ($this->lstUsergroups) {
                $this->objContentItem->UnassociateAllUsergroups();
                $objSelectedListItems = $this->lstUsergroups->SelectedItems;
                if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
                    $this->objContentItem->AssociateUsergroup(Usergroup::Load($objListItem->Value));
                }
            }
        }





        ///////////////////////////////////////////////
        // PUBLIC CONTENTITEM OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's ContentItem instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveContentItem() {
            try {
                // Update any fields for controls that have been created
                if ($this->txtName) $this->objContentItem->Name = $this->txtName->Text;
                if ($this->txtCssclass) $this->objContentItem->Cssclass = $this->txtCssclass->Text;
                if ($this->txtTitle) $this->objContentItem->Title = $this->txtTitle->Text;
                if ($this->txtDescription) $this->objContentItem->Description = $this->txtDescription->Text;
                if ($this->txtText) $this->objContentItem->Text = $this->txtText->Text;
                if ($this->txtSortOrder) $this->objContentItem->SortOrder = $this->txtSortOrder->Text;
                if ($this->chkShowTitle) $this->objContentItem->ShowTitle = $this->chkShowTitle->Checked;
                if ($this->chkShowDescription) $this->objContentItem->ShowDescription = $this->chkShowDescription->Checked;
                if ($this->chkShowCreator) $this->objContentItem->ShowCreator = $this->chkShowCreator->Checked;
                if ($this->chkShowCreationDate) $this->objContentItem->ShowCreationDate = $this->chkShowCreationDate->Checked;
                if ($this->chkShowLastModification) $this->objContentItem->ShowLastModification = $this->chkShowLastModification->Checked;
                if ($this->lstCreator) $this->objContentItem->CreatorId = $this->lstCreator->SelectedValue;
                if ($this->txtCopyrightNotice) $this->objContentItem->CopyrightNotice = $this->txtCopyrightNotice->Text;
                if ($this->lstType) $this->objContentItem->TypeId = $this->lstType->SelectedValue;
                if ($this->lstStatus) $this->objContentItem->StatusId = $this->lstStatus->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the ContentItem object
                $this->objContentItem->Save();

                // Finally, update any ManyToManyReferences (if any)
                $this->lstContentBlocks_Update();
                $this->lstContentCategories_Update();
                $this->lstUsergroups_Update();
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's ContentItem instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteContentItem() {
            $this->objContentItem->UnassociateAllContentBlocks();
            $this->objContentItem->UnassociateAllContentCategories();
            $this->objContentItem->UnassociateAllUsergroups();
            $this->objContentItem->Delete();
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
                case 'ContentItem': return $this->objContentItem;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to ContentItem fields -- will be created dynamically if not yet created
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
                case 'CssclassControl':
                    if (!$this->txtCssclass) return $this->txtCssclass_Create();
                    return $this->txtCssclass;
                case 'CssclassLabel':
                    if (!$this->lblCssclass) return $this->lblCssclass_Create();
                    return $this->lblCssclass;
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
                case 'TextControl':
                    if (!$this->txtText) return $this->txtText_Create();
                    return $this->txtText;
                case 'TextLabel':
                    if (!$this->lblText) return $this->lblText_Create();
                    return $this->lblText;
                case 'SortOrderControl':
                    if (!$this->txtSortOrder) return $this->txtSortOrder_Create();
                    return $this->txtSortOrder;
                case 'SortOrderLabel':
                    if (!$this->lblSortOrder) return $this->lblSortOrder_Create();
                    return $this->lblSortOrder;
                case 'ShowTitleControl':
                    if (!$this->chkShowTitle) return $this->chkShowTitle_Create();
                    return $this->chkShowTitle;
                case 'ShowTitleLabel':
                    if (!$this->lblShowTitle) return $this->lblShowTitle_Create();
                    return $this->lblShowTitle;
                case 'ShowDescriptionControl':
                    if (!$this->chkShowDescription) return $this->chkShowDescription_Create();
                    return $this->chkShowDescription;
                case 'ShowDescriptionLabel':
                    if (!$this->lblShowDescription) return $this->lblShowDescription_Create();
                    return $this->lblShowDescription;
                case 'ShowCreatorControl':
                    if (!$this->chkShowCreator) return $this->chkShowCreator_Create();
                    return $this->chkShowCreator;
                case 'ShowCreatorLabel':
                    if (!$this->lblShowCreator) return $this->lblShowCreator_Create();
                    return $this->lblShowCreator;
                case 'ShowCreationDateControl':
                    if (!$this->chkShowCreationDate) return $this->chkShowCreationDate_Create();
                    return $this->chkShowCreationDate;
                case 'ShowCreationDateLabel':
                    if (!$this->lblShowCreationDate) return $this->lblShowCreationDate_Create();
                    return $this->lblShowCreationDate;
                case 'ShowLastModificationControl':
                    if (!$this->chkShowLastModification) return $this->chkShowLastModification_Create();
                    return $this->chkShowLastModification;
                case 'ShowLastModificationLabel':
                    if (!$this->lblShowLastModification) return $this->lblShowLastModification_Create();
                    return $this->lblShowLastModification;
                case 'CreatorIdControl':
                    if (!$this->lstCreator) return $this->lstCreator_Create();
                    return $this->lstCreator;
                case 'CreatorIdLabel':
                    if (!$this->lblCreatorId) return $this->lblCreatorId_Create();
                    return $this->lblCreatorId;
                case 'CopyrightNoticeControl':
                    if (!$this->txtCopyrightNotice) return $this->txtCopyrightNotice_Create();
                    return $this->txtCopyrightNotice;
                case 'CopyrightNoticeLabel':
                    if (!$this->lblCopyrightNotice) return $this->lblCopyrightNotice_Create();
                    return $this->lblCopyrightNotice;
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
                    // Controls that point to ContentItem fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'NameControl':
                        return ($this->txtName = QType::Cast($mixValue, 'QControl'));
                    case 'CssclassControl':
                        return ($this->txtCssclass = QType::Cast($mixValue, 'QControl'));
                    case 'TitleControl':
                        return ($this->txtTitle = QType::Cast($mixValue, 'QControl'));
                    case 'DescriptionControl':
                        return ($this->txtDescription = QType::Cast($mixValue, 'QControl'));
                    case 'TextControl':
                        return ($this->txtText = QType::Cast($mixValue, 'QControl'));
                    case 'SortOrderControl':
                        return ($this->txtSortOrder = QType::Cast($mixValue, 'QControl'));
                    case 'ShowTitleControl':
                        return ($this->chkShowTitle = QType::Cast($mixValue, 'QControl'));
                    case 'ShowDescriptionControl':
                        return ($this->chkShowDescription = QType::Cast($mixValue, 'QControl'));
                    case 'ShowCreatorControl':
                        return ($this->chkShowCreator = QType::Cast($mixValue, 'QControl'));
                    case 'ShowCreationDateControl':
                        return ($this->chkShowCreationDate = QType::Cast($mixValue, 'QControl'));
                    case 'ShowLastModificationControl':
                        return ($this->chkShowLastModification = QType::Cast($mixValue, 'QControl'));
                    case 'CreatorIdControl':
                        return ($this->lstCreator = QType::Cast($mixValue, 'QControl'));
                    case 'CopyrightNoticeControl':
                        return ($this->txtCopyrightNotice = QType::Cast($mixValue, 'QControl'));
                    case 'CreationDateControl':
                        return ($this->lblCreationDate = QType::Cast($mixValue, 'QControl'));
                    case 'LastModificationControl':
                        return ($this->lblLastModification = QType::Cast($mixValue, 'QControl'));
                    case 'TypeIdControl':
                        return ($this->lstType = QType::Cast($mixValue, 'QControl'));
                    case 'StatusIdControl':
                        return ($this->lstStatus = QType::Cast($mixValue, 'QControl'));
                    case 'ContentBlockControl':
                        return ($this->lstContentBlocks = QType::Cast($mixValue, 'QControl'));
                    case 'ContentCategoryControl':
                        return ($this->lstContentCategories = QType::Cast($mixValue, 'QControl'));
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