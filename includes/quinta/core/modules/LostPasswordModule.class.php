<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("LOSTPASSWORDMODULE.CLASS.PHP")){
define("LOSTPASSWORDMODULE.CLASS.PHP",1);

/**
* Class LostPasswordModule - provides a module to retrieve lost passwords
* This module will prompt the user for a username or an email address and attempt
* to retrieve the corresponding Account. If successful, it will create a onetime password
* and send it to the email address for the Person (account.person_id). account.onetime_password
* will be set true. The user is sent directly to change the password on login if onetime is true.
* If onetime is true at logout, valid_password is set to false, which will trigger failure and a
* redirect to this module if a second login is attempted - this is to enforce that the user reset
* the password after retrieval.
*
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.3
*
*@package Quinta
* @subpackage Modules
*/
	class LostPasswordModule extends QPanel{
		/**
		* @var ContentBlockController objContentBlock - the content block to which this module is assigned
		*/
		protected $objContentBlock;        
		/**
		* @var Account objAccount - local  instance of the Account
		*/
		protected $objAccount = null;
		/**
		* @var Person objPerson - local  instance of the Person
		*/
		protected $objPerson = null;
		/**
		* Note: this will accept a username or an email address, an account will be retrieved for either
		* if possible.
		* @var QTextBox txtUserName - input for password retrieval
		*/
		public $txtUserName;

		public $lblInstructions;
		public $lblMessage;
		public $btnSubmit;
		
		/**
		* Module constructor
		* NOTE: This module ignores the required extra parameters ..
		*@param ContentBlock - parent controller object.
		*@param mixed - extra parameters, ignored
		*/
		public function __construct( ContentBlockController $objContentBlock, $mixParameters=null){
			//Parent should always be a ContentBlockController
			$this->objContentBlock =& $objContentBlock;
			
			try {
				parent::__construct($this->objContentBlock);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->strTemplate = __QUINTA_CORE_VIEWS__ . '/LostPasswordModule.tpl.php';
			$this->txtUserName = new QTextBox($this);
			$this->txtUserName->Name = Quinta::Translate('Username or Email'); 
			$this->txtUserName->Required = true;
			
			$this->lblMessage = new QLabel($this);
			$this->lblMessage->HtmlEntities = false;
			
			$this->lblInstructions = new QLabel($this);
			$this->lblInstructions->HtmlEntities = false;
			$this->lblInstructions->Text = Quinta::Translate('Please enter your username or primary email address') .':<br />';
			$this->btnSubmit = new QButton($this);
			$this->btnSubmit->Text = QApplication::Translate('Submit');
			if(IndexPage::$blnAjaxOk)
				$this->btnSubmit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSubmit_Click'));
			else
				$this->btnSubmit->AddAction(new QClickEvent(), new QServerControlAction($this, 'btnSubmit_Click'));
			$this->btnSubmit->CausesValidation = $this;
		}
		/**
		 * This Function is called when any input is sent - on failure the
		 * fields are redrawn with optional error messages.
		 */
		public function Validate(){
			$blnToReturn = true;
			// validate input here
			return $blnToReturn;
		}

		public function btnSubmit_Click($strFormId, $strControlId, $strParameter){
			$strInput = $this->txtUserName->Text;
			$this->objAccount = Account::LoadByUsername($strInput);
			if( ! $this->objAccount instanceof Account ){
				$aryPersons = Person::LoadArrayByEmailAddress($strInput);
				foreach($aryPersons as $objPerson){
					$this->objAccount = Account::LoadByPersonId($objPerson->Id);
					if( $this->objAccount instanceof Account  ){
						$this->objPerson = $objPerson;
						break;
					}
				}
			}
			
			//Still no good? sorry ..
			if( ! $this->objAccount instanceof Account ){
				$strMessage = Quinta::Translate('I am sorry, I can not find an account for this username or email') . '! <br />'
											. Quinta::Translate('Please contact support at ')
											. Quinta::$SupportEmailLink . Quinta::Translate(' for further assistance')
											. '.' ;
			}else{
				$strMessage = Quinta::Translate('Thank You ') . $this->objAccount->Name . '! <br />'
										. Quinta::Translate('You will receive an email in a few minutes containing a onetime password to use to login and reset your password.');

				$this->lblInstructions->Visible = false;
				$this->txtUserName->Visible = false;
				$this->btnSubmit->Visible = false;
				$this->setRandomPassword();
			}           
			$this->lblMessage->Text =  $strMessage;
		}
		
		private function setRandomPassword(){
			$strPassword = self::CreatePassword();
			$this->objAccount->Password = sha1($strPassword);
			$this->objAccount->OnetimePassword = true;
			$this->objAccount->ValidPassword = true;
			$this->objAccount->Save();
			
			if(null == $this->objPerson)
				$this->objPerson = Person::LoadById( $this->objAccount->PersonId );
				
			$strEmailText = Quinta::Translate('Hi ') . $this->objAccount->Name . ", \n"
				. Quinta::Translate('  Here is a temporary password you can use to log in to your account ') . ". \n\n"
				. Quinta::Translate(' Username') . ': ' . $this->objAccount->Username . " \n"
				. Quinta::Translate(' Password') . ': ' . $strPassword . " \n\n"
				. Quinta::Translate('PLEASE NOTE: This password can only be used once. You MUST RESET YOUR PASSWORD after logging in!')
				. Quinta::Translate('Warm Regards') . ", \n\n" . STORE_NAME . Quinta::Translate('Support Team') . "\n"
				. STORE_EMAIL_ADDRESS . "\n .\n";
				
			$objEmail = new QEmailMessage();
			$objEmail->From = STORE_NAME . ' <' . STORE_EMAIL_ADDRESS . '>';
			$objEmail->Subject = STORE_NAME . ' Important Information ';
			$objEmail->To = $this->objPerson->FullName . ' <' . $this->objPerson->EmailAddress . '>';
			$objEmail->Body = $strEmailText;
			 
			QEmailServer::Send($objEmail);
		}
		
		public static function CreatePassword($intLength = 8, $blnHard = true) {
			if($blnHard)
				$strChars = "0123456789_!@#$%&*()-=+/abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			else
				$strChars = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			
			$strToReturn  = '';
			$intCtr = 0;
			
			$intSelectionLength = strlen($strChars) - 1;
			while ($intCtr < $intLength) {
				$strChar = substr($strChars, rand(0, $intSelectionLength), 1);
				if (false === strpos($strToReturn, $strChar)){
					$strToReturn .= $strChar;
					$intCtr++;
				}
			}            
			return $strToReturn;
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
		public function __set($strName, $mixValue){
			switch ($strName){
				case 'Account':
					try {
						return ($this->objAccount = QType::Cast($mixValue, 'Account' ));
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