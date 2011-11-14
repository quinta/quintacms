<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the OrderStatusHistory class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single OrderStatusHistory object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a OrderStatusHistoryMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read OrderStatusHistory $OrderStatusHistory the actual OrderStatusHistory data class being edited
     * property QLabel $IdControl
     * property-read QLabel $IdLabel
     * property QListBox $OrderIdControl
     * property-read QLabel $OrderIdLabel
     * property QLabel $DateControl
     * property-read QLabel $DateLabel
     * property QTextBox $NotesControl
     * property-read QLabel $NotesLabel
     * property QListBox $StatusIdControl
     * property-read QLabel $StatusIdLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class OrderStatusHistoryMetaControlGen extends QBaseClass {
        // General Variables
        protected $objOrderStatusHistory;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of OrderStatusHistory's individual data fields
        protected $lblId;
        protected $lstOrder;
        protected $lblDate;
        protected $txtNotes;
        protected $lstStatus;

        // Controls that allow the viewing of OrderStatusHistory's individual data fields
        protected $lblOrderId;
        protected $lblNotes;
        protected $lblStatusId;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * OrderStatusHistoryMetaControl to edit a single OrderStatusHistory object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single OrderStatusHistory object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderStatusHistoryMetaControl
         * @param OrderStatusHistory $objOrderStatusHistory new or existing OrderStatusHistory object
         */
         public function __construct($objParentObject, OrderStatusHistory $objOrderStatusHistory) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this OrderStatusHistoryMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked OrderStatusHistory object
            $this->objOrderStatusHistory = $objOrderStatusHistory;

            // Figure out if we're Editing or Creating New
            if ($this->objOrderStatusHistory->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderStatusHistoryMetaControl
         * @param integer $intId primary key value
         * @param QMetaControlCreateType $intCreateType rules governing OrderStatusHistory object creation - defaults to CreateOrEdit
         * @return OrderStatusHistoryMetaControl
         */
        public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intId)) {
                $objOrderStatusHistory = OrderStatusHistory::Load($intId);

                // OrderStatusHistory was found -- return it!
                if ($objOrderStatusHistory)
                    return new OrderStatusHistoryMetaControl($objParentObject, $objOrderStatusHistory);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a OrderStatusHistory object with PK arguments: ' . $intId);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new OrderStatusHistoryMetaControl($objParentObject, new OrderStatusHistory());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderStatusHistoryMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing OrderStatusHistory object creation - defaults to CreateOrEdit
         * @return OrderStatusHistoryMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::PathInfo(0);
            return OrderStatusHistoryMetaControl::Create($objParentObject, $intId, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this OrderStatusHistoryMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing OrderStatusHistory object creation - defaults to CreateOrEdit
         * @return OrderStatusHistoryMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intId = QApplication::QueryString('intId');
            return OrderStatusHistoryMetaControl::Create($objParentObject, $intId, $intCreateType);
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
                $this->lblId->Text = $this->objOrderStatusHistory->Id;
            else
                $this->lblId->Text = 'N/A';
            return $this->lblId;
        }

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
                if (($this->objOrderStatusHistory->Order) && ($this->objOrderStatusHistory->Order->Id == $objOrder->Id))
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
            $this->lblOrderId->Text = ($this->objOrderStatusHistory->Order) ? $this->objOrderStatusHistory->Order->__toString() : null;
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
                $this->lblDate->Text = $this->objOrderStatusHistory->Date;
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
            $this->txtNotes->Text = $this->objOrderStatusHistory->Notes;
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
            $this->lblNotes->Text = $this->objOrderStatusHistory->Notes;
            return $this->lblNotes;
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
            foreach (OrderStatusType::$NameArray as $intId => $strValue)
                $this->lstStatus->AddItem(new QListItem($strValue, $intId, $this->objOrderStatusHistory->StatusId == $intId));
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
            $this->lblStatusId->Text = ($this->objOrderStatusHistory->StatusId) ? OrderStatusType::$NameArray[$this->objOrderStatusHistory->StatusId] : null;
            $this->lblStatusId->Required = true;
            return $this->lblStatusId;
        }



        /**
         * Refresh this MetaControl with Data from the local OrderStatusHistory object.
         * @param boolean $blnReload reload OrderStatusHistory from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objOrderStatusHistory->Reload();

            if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objOrderStatusHistory->Id;

            if ($this->lstOrder) {
                    $this->lstOrder->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstOrder->AddItem(QApplication::Translate('- Select One -'), null);
                $objOrderArray = Order::LoadAll();
                if ($objOrderArray) foreach ($objOrderArray as $objOrder) {
                    $objListItem = new QListItem($objOrder->__toString(), $objOrder->Id);
                    if (($this->objOrderStatusHistory->Order) && ($this->objOrderStatusHistory->Order->Id == $objOrder->Id))
                        $objListItem->Selected = true;
                    $this->lstOrder->AddItem($objListItem);
                }
            }
            if ($this->lblOrderId) $this->lblOrderId->Text = ($this->objOrderStatusHistory->Order) ? $this->objOrderStatusHistory->Order->__toString() : null;

            if ($this->lblDate) if ($this->blnEditMode) $this->lblDate->Text = $this->objOrderStatusHistory->Date;

            if ($this->txtNotes) $this->txtNotes->Text = $this->objOrderStatusHistory->Notes;
            if ($this->lblNotes) $this->lblNotes->Text = $this->objOrderStatusHistory->Notes;

            if ($this->lstStatus) $this->lstStatus->SelectedValue = $this->objOrderStatusHistory->StatusId;
            if ($this->lblStatusId) $this->lblStatusId->Text = ($this->objOrderStatusHistory->StatusId) ? OrderStatusType::$NameArray[$this->objOrderStatusHistory->StatusId] : null;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC ORDERSTATUSHISTORY OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's OrderStatusHistory instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveOrderStatusHistory() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstOrder) $this->objOrderStatusHistory->OrderId = $this->lstOrder->SelectedValue;
                if ($this->txtNotes) $this->objOrderStatusHistory->Notes = $this->txtNotes->Text;
                if ($this->lstStatus) $this->objOrderStatusHistory->StatusId = $this->lstStatus->SelectedValue;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the OrderStatusHistory object
                $this->objOrderStatusHistory->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's OrderStatusHistory instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteOrderStatusHistory() {
            $this->objOrderStatusHistory->Delete();
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
                case 'OrderStatusHistory': return $this->objOrderStatusHistory;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to OrderStatusHistory fields -- will be created dynamically if not yet created
                case 'IdControl':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
                case 'IdLabel':
                    if (!$this->lblId) return $this->lblId_Create();
                    return $this->lblId;
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
                    // Controls that point to OrderStatusHistory fields
                    case 'IdControl':
                        return ($this->lblId = QType::Cast($mixValue, 'QControl'));
                    case 'OrderIdControl':
                        return ($this->lstOrder = QType::Cast($mixValue, 'QControl'));
                    case 'DateControl':
                        return ($this->lblDate = QType::Cast($mixValue, 'QControl'));
                    case 'NotesControl':
                        return ($this->txtNotes = QType::Cast($mixValue, 'QControl'));
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