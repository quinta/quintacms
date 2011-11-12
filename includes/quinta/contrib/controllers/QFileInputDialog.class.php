<?php

//TODO: Autoload me ..
require(__QUINTA_CONTRIB_CONTROLLERS__ . '/QFileInput.class.php');

/**
* This class provides a dialog pop-up for uploading files.
*    
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.1
*
* @package QuintaContrib
* @subpackage Classes
*/
	class QFileInputDialog extends QDialogBox
	{
		public $ctlFileInput;
		public $lblErrorMessage;
		public $btnUpload;
		public $btnCancel;
		public $objSpinner;
		
		protected $objParentObject;

		protected $strFileUploadCallback;

		public function __construct($objParentObject, $strFileUploadCallback, $strControlId = null){
			$this->objParentObject = $objParentObject;
			try {
				parent::__construct($this->objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			$this->strFileUploadCallback = $strFileUploadCallback;

			$this->strTemplate = __QUINTA_CONTRIB_VIEWS__ . '/QFileInputDialog.tpl.php';

			$this->blnDisplay = false;
			$this->blnMatteClickable = false;

			$this->lblErrorMessage = new QLabel($this);
			$this->lblErrorMessage->HtmlEntities = false;

			$this->ctlFileInput = new QFileInput($this);

			$this->btnUpload = new QButton($this);
			$this->btnUpload->Text = QApplication::Translate('Upload');
			$this->btnUpload->CausesValidation = QCausesValidation::SiblingsOnly;
			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
					 
			$this->objSpinner = new QWaitIcon($this);
			// Events on the Dialog Box Controls
			$this->ctlFileInput->AddAction(new QEnterKeyEvent(), new QTerminateAction());

			$this->btnUpload->AddAction(new QClickEvent(), new QToggleEnableAction($this->btnUpload));
			$this->btnUpload->AddAction(new QClickEvent(), new QToggleEnableAction($this->btnCancel));
			$this->btnUpload->AddAction(new QClickEvent(), new QToggleDisplayAction($this->objSpinner));
			$this->btnUpload->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnUpload_Click'));

			$this->btnCancel->AddAction(new QClickEvent(), new QHideDialogBox($this));
		}
		
/*  fixme - figure out how to call this ..       
		public function Validate()
		{
			$this->strValidationError = "";
			if ($this->ErrorCode != 0)
			{
				$this->strValidationError = $this->ErrorMessage;
				return false;
			}
			if (! $this->blnRequired )
				return true;
			if (strlen($this->strFileName) > 0)
				return true;
			if(strlen( $this->Name ))
				$this->strValidationError = _t($this->strName) . ' ' . _t('is required');
			else
				$this->strValidationError = "Filename is required";
			
			return false;
		}*/
		
		
		public function btnUpload_Click($strFormId, $strControlId, $strParameter)
		{
			$this->btnUpload->Enabled = true;
			$this->btnCancel->Enabled = true;
			$this->objSpinner->Display = false;

			$strFileControlCallback = $this->strFileUploadCallback;
			$this->objParentControl->$strFileControlCallback($strFormId, $strControlId, $strParameter);
		}
		
		public function ShowErrorMessage($strErrorMessage=null)
		{
			if( null !== $strErrorMessage)
				$this->lblErrorMessage->Text = $strErrorMessage;
			else
				$this->lblErrorMessage->Text = $this->ErrorMessage;
			$this->ctlFileInput->Focus();
			$this->Blink();
		}
		
		public function __get($strName)
		{
			switch ($strName)
			{
				case 'TempUri':
					return $this->ctlFileInput->TempUri;
				case 'FileName':
					return $this->ctlFileInput->FileName;
				case 'Extension':
					return $this->ctlFileInput->Extension;
				case 'Size':
					return $this->ctlFileInput->Size;
				case 'MimeType':
					return $this->ctlFileInput->MimeType;
				case 'ErrorCode':
					return $this->ctlFileInput->ErrorCode;
				case 'ErrorMessage':
					return $this->ctlFileInput->ErrorMessage;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
?>