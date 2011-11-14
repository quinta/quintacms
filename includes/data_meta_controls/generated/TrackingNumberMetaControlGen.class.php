<?php
    /**
     * This is a MetaControl class, providing a QForm or QPanel access to event handlers
     * and QControls to perform the Create, Edit, and Delete functionality
     * of the TrackingNumber class.  This code-generated class
     * contains all the basic elements to help a QPanel or QForm display an HTML form that can
     * manipulate a single TrackingNumber object.
     *
     * To take advantage of some (or all) of these control objects, you
     * must create a new QForm or QPanel which instantiates a TrackingNumberMetaControl
     * class.
     *
     * Any and all changes to this file will be overwritten with any subsequent
     * code re-generation.
     * 
     * @package Quinta CMS
     * @subpackage MetaControls
     * property-read TrackingNumber $TrackingNumber the actual TrackingNumber data class being edited
     * property QListBox $OrderIdControl
     * property-read QLabel $OrderIdLabel
     * property QTextBox $NumberControl
     * property-read QLabel $NumberLabel
     * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
     * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
     */

    class TrackingNumberMetaControlGen extends QBaseClass {
        // General Variables
        protected $objTrackingNumber;
        protected $objParentObject;
        protected $strTitleVerb;
        protected $blnEditMode;

        // Controls that allow the editing of TrackingNumber's individual data fields
        protected $lstOrder;
        protected $txtNumber;

        // Controls that allow the viewing of TrackingNumber's individual data fields
        protected $lblOrderId;
        protected $lblNumber;

        // QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

        // QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


        /**
         * Main constructor.  Constructor OR static create methods are designed to be called in either
         * a parent QPanel or the main QForm when wanting to create a
         * TrackingNumberMetaControl to edit a single TrackingNumber object within the
         * QPanel or QForm.
         *
         * This constructor takes in a single TrackingNumber object, while any of the static
         * create methods below can be used to construct based off of individual PK ID(s).
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this TrackingNumberMetaControl
         * @param TrackingNumber $objTrackingNumber new or existing TrackingNumber object
         */
         public function __construct($objParentObject, TrackingNumber $objTrackingNumber) {
            // Setup Parent Object (e.g. QForm or QPanel which will be using this TrackingNumberMetaControl)
            $this->objParentObject = $objParentObject;

            // Setup linked TrackingNumber object
            $this->objTrackingNumber = $objTrackingNumber;

            // Figure out if we're Editing or Creating New
            if ($this->objTrackingNumber->__Restored) {
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
         * @param mixed $objParentObject QForm or QPanel which will be using this TrackingNumberMetaControl
         * @param integer $intOrderId primary key value
         * @param string $strNumber primary key value
         * @param QMetaControlCreateType $intCreateType rules governing TrackingNumber object creation - defaults to CreateOrEdit
         * @return TrackingNumberMetaControl
         */
        public static function Create($objParentObject, $intOrderId = null, $strNumber = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            // Attempt to Load from PK Arguments
            if (strlen($intOrderId) && strlen($strNumber)) {
                $objTrackingNumber = TrackingNumber::Load($intOrderId, $strNumber);

                // TrackingNumber was found -- return it!
                if ($objTrackingNumber)
                    return new TrackingNumberMetaControl($objParentObject, $objTrackingNumber);

                // If CreateOnRecordNotFound not specified, throw an exception
                else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
                    throw new QCallerException('Could not find a TrackingNumber object with PK arguments: ' . $intOrderId . ', ' . $strNumber);

            // If EditOnly is specified, throw an exception
            } else if ($intCreateType == QMetaControlCreateType::EditOnly)
                throw new QCallerException('No PK arguments specified');

            // If we are here, then we need to create a new record
            return new TrackingNumberMetaControl($objParentObject, new TrackingNumber());
        }

        /**
         * Static Helper Method to Create using PathInfo arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this TrackingNumberMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing TrackingNumber object creation - defaults to CreateOrEdit
         * @return TrackingNumberMetaControl
         */
        public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intOrderId = QApplication::PathInfo(0);
            $strNumber = QApplication::PathInfo(1);
            return TrackingNumberMetaControl::Create($objParentObject, $intOrderId, $strNumber, $intCreateType);
        }

        /**
         * Static Helper Method to Create using QueryString arguments
         *
         * @param mixed $objParentObject QForm or QPanel which will be using this TrackingNumberMetaControl
         * @param QMetaControlCreateType $intCreateType rules governing TrackingNumber object creation - defaults to CreateOrEdit
         * @return TrackingNumberMetaControl
         */
        public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
            $intOrderId = QApplication::QueryString('intOrderId');
            $strNumber = QApplication::QueryString('strNumber');
            return TrackingNumberMetaControl::Create($objParentObject, $intOrderId, $strNumber, $intCreateType);
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
                if (($this->objTrackingNumber->Order) && ($this->objTrackingNumber->Order->Id == $objOrder->Id))
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
            $this->lblOrderId->Text = ($this->objTrackingNumber->Order) ? $this->objTrackingNumber->Order->__toString() : null;
            $this->lblOrderId->Required = true;
            return $this->lblOrderId;
        }

        /**
         * Create and setup QTextBox txtNumber
         * @param string $strControlId optional ControlId to use
         * @return QTextBox
         */
        public function txtNumber_Create($strControlId = null) {
            $this->txtNumber = new QTextBox($this->objParentObject, $strControlId);
            $this->txtNumber->Name = QApplication::Translate('Number');
            $this->txtNumber->Text = $this->objTrackingNumber->Number;
            $this->txtNumber->Required = true;
            $this->txtNumber->MaxLength = TrackingNumber::NumberMaxLength;
            return $this->txtNumber;
        }

        /**
         * Create and setup QLabel lblNumber
         * @param string $strControlId optional ControlId to use
         * @return QLabel
         */
        public function lblNumber_Create($strControlId = null) {
            $this->lblNumber = new QLabel($this->objParentObject, $strControlId);
            $this->lblNumber->Name = QApplication::Translate('Number');
            $this->lblNumber->Text = $this->objTrackingNumber->Number;
            $this->lblNumber->Required = true;
            return $this->lblNumber;
        }



        /**
         * Refresh this MetaControl with Data from the local TrackingNumber object.
         * @param boolean $blnReload reload TrackingNumber from the database
         * @return void
         */
        public function Refresh($blnReload = false) {
            if ($blnReload)
                $this->objTrackingNumber->Reload();

            if ($this->lstOrder) {
                    $this->lstOrder->RemoveAllItems();
                if (!$this->blnEditMode)
                    $this->lstOrder->AddItem(QApplication::Translate('- Select One -'), null);
                $objOrderArray = Order::LoadAll();
                if ($objOrderArray) foreach ($objOrderArray as $objOrder) {
                    $objListItem = new QListItem($objOrder->__toString(), $objOrder->Id);
                    if (($this->objTrackingNumber->Order) && ($this->objTrackingNumber->Order->Id == $objOrder->Id))
                        $objListItem->Selected = true;
                    $this->lstOrder->AddItem($objListItem);
                }
            }
            if ($this->lblOrderId) $this->lblOrderId->Text = ($this->objTrackingNumber->Order) ? $this->objTrackingNumber->Order->__toString() : null;

            if ($this->txtNumber) $this->txtNumber->Text = $this->objTrackingNumber->Number;
            if ($this->lblNumber) $this->lblNumber->Text = $this->objTrackingNumber->Number;

        }



        ///////////////////////////////////////////////
        // PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
        ///////////////////////////////////////////////





        ///////////////////////////////////////////////
        // PUBLIC TRACKINGNUMBER OBJECT MANIPULATORS
        ///////////////////////////////////////////////

        /**
         * This will save this object's TrackingNumber instance,
         * updating only the fields which have had a control created for it.
         */
        public function SaveTrackingNumber() {
            try {
                // Update any fields for controls that have been created
                if ($this->lstOrder) $this->objTrackingNumber->OrderId = $this->lstOrder->SelectedValue;
                if ($this->txtNumber) $this->objTrackingNumber->Number = $this->txtNumber->Text;

                // Update any UniqueReverseReferences (if any) for controls that have been created for it

                // Save the TrackingNumber object
                $this->objTrackingNumber->Save();

                // Finally, update any ManyToManyReferences (if any)
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
        }

        /**
         * This will DELETE this object's TrackingNumber instance from the database.
         * It will also unassociate itself from any ManyToManyReferences.
         */
        public function DeleteTrackingNumber() {
            $this->objTrackingNumber->Delete();
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
                case 'TrackingNumber': return $this->objTrackingNumber;
                case 'TitleVerb': return $this->strTitleVerb;
                case 'EditMode': return $this->blnEditMode;

                // Controls that point to TrackingNumber fields -- will be created dynamically if not yet created
                case 'OrderIdControl':
                    if (!$this->lstOrder) return $this->lstOrder_Create();
                    return $this->lstOrder;
                case 'OrderIdLabel':
                    if (!$this->lblOrderId) return $this->lblOrderId_Create();
                    return $this->lblOrderId;
                case 'NumberControl':
                    if (!$this->txtNumber) return $this->txtNumber_Create();
                    return $this->txtNumber;
                case 'NumberLabel':
                    if (!$this->lblNumber) return $this->lblNumber_Create();
                    return $this->lblNumber;
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
                    // Controls that point to TrackingNumber fields
                    case 'OrderIdControl':
                        return ($this->lstOrder = QType::Cast($mixValue, 'QControl'));
                    case 'NumberControl':
                        return ($this->txtNumber = QType::Cast($mixValue, 'QControl'));
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