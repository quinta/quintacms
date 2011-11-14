<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the OrderChange class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single OrderChange object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a OrderChangeMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read OrderChange $OrderChange the actual OrderChange data class being edited
     * property QListBox $OrderIdControl
     * property-read QLabel $OrderIdLabel
     * property QLabel $DateControl
     * property-read QLabel $DateLabel
     * property QTextBox $NotesControl
     * property-read QLabel $NotesLabel
     * property QFloatTextBox $ValueControl
     * property-read QLabel $ValueLabel
     * property QListBox $TypeIdControl
     * property-read QLabel $TypeIdLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class OrderChangeMetaControlGen extends QBaseClass {
        // General Variables
        protected $objOrderChange;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of OrderChange's individual data fields
        protected $lstOrder;
        protected $lblDate;
        protected $txtNotes;
        protected $txtValue;
        protected $lstType;

        // Controls that allow the viewing of OrderChange's individual data fields
        protected $lblOrderId;
        protected $lblNotes;
        protected $lblValue;
        protected $lblTypeId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * OrderChangeMetaControl to edit a single OrderChange object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single OrderChange object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderChangeMetaControl
         * @param OrderChange $objOrderChange new or existing OrderChange object
         */
         public function __construct($objParentObject, OrderChange $objOrderChange) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this OrderChangeMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked OrderChange object
            $this->objOrderChange = $objOrderChange;

            // Figure out if we're Editing or Creating New
            if ($this->objOrderChange->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderChangeMetaControl
         * @param integer $intOrderId primary key value
         * @param string $strDate primary key value
         * @param QMetaControlCreateType $intCreateType rules governing OrderChange object creation - defaults to CreateOrEdit
         * @return OrderChangeMetaControl
         */
        public static function Create($objParentObject, $intOrderId = null, $strDate = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intOrderId) && strlen($strDate)) {
                $objOrderChange = OrderChange::Load($intOrderId, $strDate);

                // OrderChange was found -- return it!
                if ($objOrderChange)
                    return new OrderChangeMetaControl($objParentObject, $objOrderChange);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a OrderChange object with PK arguments: ' . $intOrderId . ', ' . $strDate);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new OrderChangeMetaControl($objParentObject, new OrderChange());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderChangeMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing OrderChange object creation - defaults to CreateOrEdit
         * @return OrderChangeMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intOrderId = QApplication::PathInfo(0);
            $strDate = QApplication::PathInfo(1);
            return OrderChangeMetaControl::Create($objParentObject, $intOrderId, $strDate, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderChangeMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing OrderChange object creation - defaults to CreateOrEdit
         * @return OrderChangeMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intOrderId = QApplication::QueryString('intOrderId');
            $strDate = QApplication::QueryString('strDate');
            return OrderChangeMetaControl::Create($objParentObject, $intOrderId, $strDate, $intCreateType);
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
                if (($this->objOrderChange->Order) && ($this->objOrderChange->Order->Id == $objOrder->Id))
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
            $this->lblOrderId->Text = ($this->objOrderChange->Order) ? $this->objOrderChange->Order->__toString() : null;
            $this->lblOrderId->Required = true;
            return $this->lblOrderId;
        }

        /**
         * Create and setup QLabel lblDate
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblDate_Create($strControlId = null) {
            $this->lblDate = new QLabel($this->objParentObject, $strControlId);
            $this->lblDate->Name = QApplication::Translate('Date');
            if ($this->blnEditMode)
                $this->lblDate->Text = $this->objOrderChange->Date;
            else
                $this->lblDate->Text = 'N/A';
            return $this->lblDate;
        }

        /**
         * Create and setup QTextBox txtNotes
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtNotes_Create($strControlId = null) {
            $this->txtNotes = new QTextBox($this->objParentObject, $strControlId);
            $this->txtNotes->Name = QApplication::Translate('Notes');
            $this->txtNotes->Text = $this->objOrderChange->Notes;
            $this->txtNotes->TextMode = QTextMode::MultiLine;
            return $this->txtNotes;
        }

        /**
         * Create and setup QLabel lblNotes
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblNotes_Create($strControlId = null) {
            $this->lblNotes = new QLabel($this->objParentObject, $strControlId);
            $this->lblNotes->Name = QApplication::Translate('Notes');
            $this->lblNotes->Text = $this->objOrderChange->Notes;
            return $this->lblNotes;
        }

        /**
         * Create and setup QFloatTextBox txtValue
         * @param string $strControlId optional ControlId to use
         * @return QFloatTextBox
         */
        public function txtValue_Create($strControlId = null) {
            $this->txtValue = new QFloatTextBox($this->objParentObject, $strControlId);
            $this->txtValue->Name = QApplication::Translate('Value');
            $this->txtValue->Text = $this->objOrderChange->Value;
            return $this->txtValue;
        }

        /**
         * Create and setup QLabel lblValue
         * @param string $strControlId optional ControlId to use
         * @param string $strFormat optional sprintf format to use
         * @return QLabel
         */
        public function lblValue_Create($strControlId = null, $strFormat = null) {
            $this->lblValue = new QLabel($this->objParentObject, $strControlId);
            $this->lblValue->Name = QApplication::Translate('Value');
            $this->lblValue->Text = $this->objOrderChange->Value;
            $this->lblValue->Format = $strFormat;
            return $this->lblValue;
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
            foreach (OrderChangeType::$NameArray as $intId => $strValue)
                $this->lstType->AddItem(new QListItem($strValue, $intId, $this->objOrderChange->TypeId == $intId));
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
            $this->lblTypeId->Text = ($this->objOrderChange->TypeId) ? OrderChangeType::$NameArray[$this->objOrderChange->TypeId] : null;
            $this->lblTypeId->Required = true;
            return $this->lblTypeId;
        }



        /**
         * Refresh this MetaControl with Data from the local OrderChange object.
         * @param boolean $blnReload reload OrderChange from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objOrderChange->Reload();

            if ($this->lstOrder) {
                    $this->lstOrder->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstOrder->AddItem(QApplication::Translate('- Select One -'), null);
                $objOrderArray = Order::LoadAll();
                if ($objOrderArray) foreach ($objOrderArray as $objOrder) {
                    $objListItem = new QListItem($objOrder->__toString(), $objOrder->Id);
                    if (($this->objOrderChange->Order) && ($this->objOrderChange->Order->Id == $objOrder->Id))
                        $objListItem->Selected = true;
                    $this->lstOrder->AddItem($objListItem);
                }
            }
            if ($this->lblOrderId) $this->lblOrderId->Text = ($this->objOrderChange->Order) ? $this->objOrderChange->Order->__toString() : null;

            if ($this->lblDate) if ($this->blnEditMode) $this->lblDate->Text = $this->objOrderChange->Date;

            if ($this->txtNotes) $this->txtNotes->Text = $this->objOrderChange->Notes;
            if ($this->lblNotes) $this->lblNotes->Text = $this->objOrderChange->Notes;

            if ($this->txtValue) $this->txtValue->Text = $this->objOrderChange->Value;
            if ($this->lblValue) $this->lblValue->Text = $this->objOrderChange->Value;

            if ($this->lstType) $this->lstType->SelectedValue = $this->objOrderChange->TypeId;
            if ($this->lblTypeId) $this->lblTypeId->Text = ($this->objOrderChange->TypeId) ? OrderChangeType::$NameArray[$this->objOrderChange->TypeId] : null;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC ORDERCHANGE OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's OrderChange instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveOrderChange() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstOrder) $this->objOrderChange->OrderId = $this->lstOrder->SelectedValue;
                if ($this->txtNotes) $this->objOrderChange->Notes = $this->txtNotes->Text;
                if ($this->txtValue) $this->objOrderChange->Value = $this->txtValue->Text;
                if ($this->lstType) $this->objOrderChange->TypeId = $this->lstType->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the OrderChange object
                $this->objOrderChange->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's OrderChange instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteOrderChange() {
            $this->objOrderChange->Delete();
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
                case 'OrderChange': return $this->objOrderChange;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to OrderChange fields -- will be created dynamically if not yet created
                case 'OrderIdControl':
                    if (!$this->lstOrder) return $this->lstOrder_Create();
                    return $this->lstOrder;
                case 'OrderIdLabel':
                    if (!$this->lblOrderId) return $this->lblOrderId_Create();
                    return $this->lblOrderId;
                case 'DateControl':
                    if (!$this->lblDate) return $this->lblDate_Create();
                    return $this->lblDate;
                case 'DateLabel':
                    if (!$this->lblDate) return $this->lblDate_Create();
                    return $this->lblDate;
                case 'NotesControl':
                    if (!$this->txtNotes) return $this->txtNotes_Create();
                    return $this->txtNotes;
                case 'NotesLabel':
                    if (!$this->lblNotes) return $this->lblNotes_Create();
                    return $this->lblNotes;
                case 'ValueControl':
                    if (!$this->txtValue) return $this->txtValue_Create();
                    return $this->txtValue;
                case 'ValueLabel':
                    if (!$this->lblValue) return $this->lblValue_Create();
                    return $this->lblValue;
                case 'TypeIdControl':
                    if (!$this->lstType) return $this->lstType_Create();
                    return $this->lstType;
                case 'TypeIdLabel':
                    if (!$this->lblTypeId) return $this->lblTypeId_Create();
                    return $this->lblTypeId;
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
                    // Controls that point to OrderChange fields
                    case 'OrderIdControl':
                        return ($this->lstOrder = QType::Cast($mixValue, 'QControl'));
                    case 'DateControl':
                        return ($this->lblDate = QType::Cast($mixValue, 'QControl'));
                    case 'NotesControl':
                        return ($this->txtNotes = QType::Cast($mixValue, 'QControl'));
                    case 'ValueControl':
                        return ($this->txtValue = QType::Cast($mixValue, 'QControl'));
                    case 'TypeIdControl':
                        return ($this->lstType = QType::Cast($mixValue, 'QControl'));
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