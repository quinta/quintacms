<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("PAYMENTMETHODCONTROLLER.CLASS.PHP")){
define("PAYMENTMETHODCONTROLLER.CLASS.PHP",1);

/**
* Class PaymentMethodController - provides checkbox display of a payment method
* This class shows a radiobutton that is a member of "PaymentMethods" group.
* It will optionally also display the description, instructions and an image for the method.
*
* When the method is selected, it will issue a callback passing the id of the paymentmethod
* as a parameter if the parent is a PaymentModule - Note that this requires the existance of
* the method "SelectMethod($intId)" in the parent.
*
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.3
*
*@package Quinta
* @subpackage View
*/
 class PaymentMethodController extends QPanel{
		/**
		* This is normally the ShippingModule
		* @var QPanel objControlBlock - the content block to which this module is assigned
		*/
		protected $objControlBlock;        
		/**
		* @var PaymentMethod objPaymentMethod - local reference or instance of some relevant object ..
		*/
		protected $objPaymentMethod;
		/**
		* @var boolean blnShowDescription - if true, display method description
		*/
		protected $blnShowDescription;
		/**
		* @var boolean blnShowImage - if true, display method delivery time
		*/
		protected $blnShowImage;

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
		* @var QLabel lblTitle - label to display the Title of the method
		*/
		public $lblTitle;
		/**
		* @var QPanel pnlImage - label to display an image for the payment provider
		*/
		public $pnlImage;
		
		/**
		* Class constructor
		* NOTE: The PaymentMethod passed to this view is expected to have already been
		* initilized with an order and have the rate set 
		*@param QPanel objControlBlock - parent controller object.
		*@param PaymentMethod objPaymentMethod
		*@param boolean blnShowDescription - whether to display the description
		*@param boolean blnShowImage - whether to display the image
		*/
		public function __construct( QPanel $objControlBlock,
													   PaymentMethod $objPaymentMethod,
													   $blnShowDescription = true,
													   $blnShowImage = true
													   )
		{
			//Normally assumed to be the PaymentModule
			$this->objControlBlock =& $objControlBlock;
			
			$this->objPaymentMethod =& $objPaymentMethod;
			$this->blnShowDescription =& $blnShowDescription;
			$this->blnShowImage =& $blnShowImage;
			
			try {
				parent::__construct($this->objControlBlock);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/PaymentMethodView.tpl.php';
				
			$this->ctlRadioButton = new QRadioButton($this);
			$this->ctlRadioButton->AddCssClass('MethodRadioButton');
			$this->ctlRadioButton->GroupName = "PaymentMethods";

			if(IndexPage::$blnAjaxOk)
				$this->ctlRadioButton->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSelectMethod_Click'));
			else
				$this->ctlRadioButton->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSelectMethod_Click'));
			$this->ctlRadioButton->ActionParameter = $objPaymentMethod->Id;

			$this->lblTitle = new QLabel($this);
			$this->lblTitle->Text = $objPaymentMethod->Title;

			if($this->blnShowDescription){
				$this->lblDescription = new QLabel($this);
				$this->lblDescription->CssClass = 'MethodDescription';
				$this->lblDescription->HtmlEntities = false;
				$this->lblDescription->Text = $objPaymentMethod->Description;
			}
			if($this->blnShowImage){
				$this->pnlImage = new QPanel($this);
				$this->pnlImage->CssClass = 'MethodImage';
				$this->pnlImage->HtmlEntities = false;
				if( '' != $objPaymentMethod->ImageUri ){
					if( false !== strpos( $objPaymentMethod->ImageUri, 'http' ) )
						$this->pnlImage->Text = sprintf('<img src="%s">', $objPaymentMethod->ImageUri);
					else{    
						foreach( array( __QUINTA_LOCAL__ . '/assets/images/',
												__QUINTA_CONTRIB__ . '/assets/images/',
												__QUINTA_CORE__ . '/assets/images/') as $strBase  )
						{
							$strUri = $strBase . $objPaymentMethod->ImageUri;
							if( file_exists($strUri) ){
								if(false !== strpos( $strBase, 'local/' ))
									$strRelativeBase = __QUINTA_LOCAL_IMAGES__ . '/';
								elseif(false !== strpos( $strBase, 'contrib/' ))
									$strRelativeBase = __QUINTA_CONTRIB_IMAGES__ . '/';
								elseif(false !== strpos( $strBase, 'core/' ))
									$strRelativeBase = __QUINTA_CORE_IMAGES__ . '/';
								else//fall back to QCodo images ..
									$strRelativeBase = __IMAGE_ASSETS__ . '/';
								$strUri = $strRelativeBase . $objPaymentMethod->ImageUri;
								$this->pnlImage->Text = sprintf('<img src="%s">', $strUri);

								break;
							}
						}
					}
				}
			}
		}
		
		public function Validate() { return true; }

		/**
		* Called when this method is selected, only takes action if parent is PaymentModule
		*/
		public function btnSelectMethod_Click($strFormId, $strControlId, $intMethodId){
			if( $this->objControlBlock instanceof PaymentModule )
				$this->objControlBlock->SelectMethod($intMethodId);
		}
		
		public function __get($strName){
			switch ($strName){
				case 'PaymentMethod':
					return $this->objPaymentMethod ;
				case 'Checked':
				case 'Selected':
					return $this->ctlRadioButton->Checked ;
				case 'ShowDescription':
					return $this->blnShowDescription;
				case 'ShowImage':
					return $this->blnShowImage;
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
				case 'PaymentMethod':
					try {
						return ($this->objPaymentMethod = QType::Cast($mixValue, 'PaymentMethod' ));
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
				case 'ShowImage':
					try {
						return ($this->blnShowImage = QType::Cast($mixValue, QType::Boolean ));
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