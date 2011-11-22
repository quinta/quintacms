<?php
if(!defined('QUINTACMS') ) die("No quinta.");

	if (!defined("ACCOUNTPASSWORDEDITPANEL.CLASS.PHP")){
define("ACCOUNTPASSWORDEDITPANEL.CLASS.PHP",1);

	/**
	* AccountPasswordEditPanel provides a panel in which the user may
	* change their password and username.
	*
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.3
	*
	* @package Quinta
	* @subpackage Classes
	*/
	class AccountPasswordEditPanel extends QPanel
	{
		// Local instance of the AccountMetaControl
		protected $objAccount;
		protected $objControlBlock;

		// Controls for Account's Data Fields
		public $txtUsername;
		public $txtPassword;
		public $txtPassword2;

		// Buttons
		public $btnSave;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject,
													$objControlBlock,
													$strClosePanelMethod,
													$intId = null,
													$strControlId = null)
		{

			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->objControlBlock = $objControlBlock;

			$this->objAccount =& IndexPage::$objAccount;

			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/AccountPasswordEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			$this->txtUsername = new QTextBox($this, 'username');
			$this->txtUsername->Text = $this->objAccount->Username;
			$this->txtUsername->Required = true;
			$this->txtUsername->MaxLength = Account::UsernameMaxLength;
			$this->txtUsername->Name = QApplication::Translate('Login Name');

			$this->txtPassword = new QTextBox($this, 'password');
			$this->txtPassword->TextMode = QTextMode::Password;
			$this->txtPassword->Name = QApplication::Translate('New Password');
			$this->txtPassword->Required = true;
			$this->txtPassword2 = new QTextBox($this, 'password2');
			$this->txtPassword2->TextMode = QTextMode::Password;
			$this->txtPassword2->Name = QApplication::Translate('Confirm Password');
			$this->txtPassword2->Required = true;

			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			if(IndexPage::$blnAjaxOk)
				$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			else
				$this->btnSave->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSave_Click'));

			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			if(IndexPage::$blnAjaxOk)
				$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));
			else
				$this->btnCancel->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnCancel_Click'));

		}
		public function Validate(){
			$blnToReturn = true;
			if($this->txtPassword->Text !== $this->txtPassword2->Text )
			{
				$this->txtPassword->Warning = 'Passwords do not match!';
				$blnToReturn = false;
			}

			return $blnToReturn;
		}

		public function btnSave_Click($strFormId, $strControlId, $strParameter){
			$this->objAccount->Username = $this->txtUsername->Text;

			//paranoid about PHP array/object handling now .. assign first, _then manipulate.
			$strPassword = $this->txtPassword->Text;
			$this->objAccount->Password = sha1($strPassword);
			$this->objAccount->OnetimePassword = false;
			$this->objAccount->ValidPassword = true;
			$this->objAccount->Save();

			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter){
			$this->CloseSelf(false);
		}

		protected function CloseSelf($blnChangesMade){
			$strMethod = $this->strClosePanelMethod;
			$this->objControlBlock->$strMethod($blnChangesMade);
		}
		public function __get($strName){
			switch ($strName){
				case 'Account':
					return $this->objAccount ;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

	}//end class
 }//end define
?>