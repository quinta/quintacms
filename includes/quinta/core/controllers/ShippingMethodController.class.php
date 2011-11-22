<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("SHIPPINGMETHODCONTROLLER.CLASS.PHP")){
define("SHIPPINGMETHODCONTROLLER.CLASS.PHP",1);

/**
* Class ShippingMethodController - provides checkbox display of a shipping method
* This class shows a radiobutton that is a member of "ShippingMethods" group.
* It will optionally also display the description, transit time and rate for the method.
*
* When the method is selected, it will issue a callback passing the id of the paymentmethod
* as a parameter if the parent is a ShippingModule - Note that this requires the existance of
* the method "SelectMethod($intId)" in the parent.
*
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.3
*
*@package Quinta
* @subpackage View
*/
	class ShippingMethodController extends QPanel{
		/**
		* This is normally the ShippingModule
		* @var QPanel objControlBlock - the content block to which this module is assigned
		*/
		protected $objControlBlock;        
		/**
		* @var ShippingMethod objShippingMethod - local reference or instance of some relevant object ..
		*/
		protected $objShippingMethod;
		/**
		* @var boolean blnShowDescription - if true, display method description
		*/
		protected $blnShowDescription;
		/**
		* @var boolean blnShowTransitTime - if true, display method delivery time
		*/
		protected $blnShowTransitTime;
		/**
		* @var boolean blnShowRate - if true, display method price
		*/
		protected $blnShowRate;

		//Controls ..
		/**
		* @var QRadioButton ctlRadioButton - button for selecting this method
		*/
		public $ctlRadioButton;
		/**
		* @var QLabel lblDescription - label to display the description of the method
		*/
		public $lblDescription;
		/**
		* @var QLabel lblTransitTime - label to display estimated delivery time
		*/
		public $lblTransitTime;
		/**
		* @var QLabel lblRate - label to display price for this method
		*/
		public $lblRate;
		
		/**
		* Class constructor
		* NOTE: The ShippingMethod passed to this view is expected to have already been
		* initilized with an order and have the rate set 
		*@param QPanel objControlBlock - parent controller object.
		*@param ShippingMethod objShippingMethod
		*/
		public function __construct( QPanel $objControlBlock,
													   ShippingMethod $objShippingMethod,
													   $blnShowDescription = true,
													   $blnShowTransitTime = true,
													   $blnShowRate = true
													   )
		{
			//Normally assumed to be the ShippingModule
			$this->objControlBlock =& $objControlBlock;
			
			$this->objShippingMethod =& $objShippingMethod;
			$this->blnShowDescription =& $blnShowDescription;
			$this->blnShowTransitTime =& $blnShowTransitTime;
			$this->blnShowRate =& $blnShowRate;
			
			try {
				parent::__construct($this->objControlBlock);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/ShippingMethodView.tpl.php';
				
			$this->ctlRadioButton = new QRadioButton($this);
			$this->ctlRadioButton->AddCssClass('MethodRadioButton');
			$this->ctlRadioButton->GroupName = "ShippingMethods";

			if(IndexPage::$blnAjaxOk)
				$this->ctlRadioButton->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSelectMethod_Click'));
			else
				$this->ctlRadioButton->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSelectMethod_Click'));
			$this->ctlRadioButton->ActionParameter = $objShippingMethod->Id;

			if($this->blnShowDescription)
			{
				$this->lblDescription = new QLabel($this);
				$this->lblDescription->CssClass = 'MethodDescription';
				$this->lblDescription->HtmlEntities = false;
				$this->lblDescription->Text = $objShippingMethod->Description;
			}
			if($this->blnShowTransitTime)
			{
				$this->lblTransitTime = new QLabel($this);
				$this->lblTransitTime->CssClass = 'MethodTime';
				$this->lblTransitTime->HtmlEntities = false;
				$this->lblTransitTime->Text = $objShippingMethod->TransitTime;
			}
			if($this->blnShowRate)
			{
				$this->lblRate = new QLabel($this);
				$this->lblRate->CssClass = 'MethodPrice';
				$this->lblRate->HtmlEntities = false;
				$this->lblRate->Text = money_format('%n', $objShippingMethod->Rate);
			}
		}
		public function Validate() { return true; }

		/**
		* Called when this method is selected, only takes action if parent is ShippingModule
		*/
		public function btnSelectMethod_Click($strFormId, $strControlId, $intMethodId){
			if( $this->objControlBlock instanceof ShippingModule )
				$this->objControlBlock->SelectMethod($intMethodId);
		}

		public function __get($strName){
			switch ($strName){
				case 'ShippingMethod':
					return $this->objShippingMethod ;
				case 'Checked':
				case 'Selected':
					return $this->ctlRadioButton->Checked ;
				case 'ShowDescription':
					return $this->blnShowDescription;
				case 'ShowTransitTime':
					return $this->blnShowTransitTime;
				case 'ShowRate':
					return $this->blnShowRate;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
		public function __set($strName, $mixValue){
			switch ($strName){
				case 'ShippingMethod':
					try {
						return ($this->objShippingMethod = QType::Cast($mixValue, 'ShippingMethod' ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'Checked':
				case 'Selected':
					try {
						return ($this->ctlRadioButton->Checked = QType::Cast($mixValue, QType::Boolean ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'ShowDescription':
					try {
						return ($this->blnShowDescription = QType::Cast($mixValue, QType::Boolean ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'ShowTransitTime':
					try {
						return ($this->blnShowTransitTime = QType::Cast($mixValue, QType::Boolean ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'ShowRate':
					try {
						return ($this->blnShowRate = QType::Cast($mixValue, QType::Boolean ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
		
  }//end class
}//end define
?>