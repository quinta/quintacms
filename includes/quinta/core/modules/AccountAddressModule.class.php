<?php

if (!defined('QUINTACMS'))
	die("No quinta.");

if (!defined("ACCOUNTADDRESSMODULE.CLASS.PHP")) {
	define("ACCOUNTADDRESSMODULE.CLASS.PHP", 1);

	/**
	 * Class AccountAddressModule - view/manage orders for a user account
	 * This class is a manager module; it creates a panel for a list of account addresses
	 * and/or a panel to edit or create an address. 
	 * @author Erik Winn <sidewalksoftware@gmail.com>
	 *
	 * @version 0.3
	 *
	 * @package Quinta
	 * @subpackage Modules
	 */
	class AccountAddressModule extends ListModuleBase {

		private $intAddressId;

		/**
		 * Note: the parameter array is derived from the request url string by AccountManagerModule.
		 * This array is passed by default to Account function modules, in this case it contains only
		 * one optional element - an address id.
		 *
		 * Module constructor
		 * @param ContentBlock - parent controller object.
		 * @param array - aryParameters, should contain one element with an address id or be empty
		 */
		public function __construct($objParentObject, $aryParameters) {
			$this->objParentObject = & $objParentObject;
			if (!empty($aryParameters))
				$this->intAddressId = $aryParameters[0];

			try {
				parent::__construct($this->objParentObject);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->AutoRenderChildren = true;
//            $this->strTemplate = __QUINTA_CORE_VIEWS__ . '/AccountAddressModule.tpl.php';

			if ($this->objAccount instanceof Account)
				$this->InitPanels();
		}

		protected function InitPanels() {
			///@todo  parse the parameters to accept going directly to edit a specific address ..
			//if($this->intAddressId) ...
			// Get rid of all child controls for list and edit panels - not sure we need to do this here, remove?
			$this->pnlListView->RemoveChildControls(true);
			$this->pnlItemView->RemoveChildControls(true);
			$this->pnlItemView->Visible = false;
			$objNewPanel = new AccountAddressListPanel($this->pnlListView,
					$this,
					'ShowItemPanel',
					'CloseItemPanel');
			$this->pnlListView->Visible = true;
		}

		/**
		 * Unused
		 */
		public function Validate() {
			$blnToReturn = true;
			// validate input here
			return $blnToReturn;
		}

		public function __get($strName) {
			switch ($strName) {
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

	}

	//end class
}//end define
?>