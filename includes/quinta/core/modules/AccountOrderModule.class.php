<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("ACCOUNTORDERMODULE.CLASS.PHP")){
define("ACCOUNTORDERMODULE.CLASS.PHP",1);

/**
* Class AccountOrderModule - view/manage orders for a user account
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.3
*
*@package Quinta
* @subpackage Modules
*/ 
 class AccountOrderModule extends ListModuleBase{
		private $intOrderId;
		private $objOrderListView = null;
		private $objOrderItemView = null;
		/**
		* Module constructor
		*@param ContentBlockController - objParentObject parent controller object.
		*@param array - aryParameters, should contain one element with an order id or be empty
		*/
		public function __construct( $objParentObject, $aryParameters){
			$this->objParentObject =& $objParentObject;
			if(!empty($aryParameters))
				$this->intOrderId = array_pop($aryParameters);
			
			try {
				parent::__construct($this->objParentObject);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->AutoRenderChildren = true;
//            $this->strTemplate = __QUINTA_CORE_VIEWS__ . '/AccountOrderModule.tpl.php';
			
			if($this->objAccount instanceof Account)
				$this->InitPanels();
		}
		protected function InitPanels(){
/*            $this->pnlListView->RemoveChildControls(false);
			$this->pnlItemView->RemoveChildControls(false);*/
			$this->pnlItemView->Visible = false;
			$this->pnlListView->Visible = false;
			if($this->intOrderId){
				$this->objOrderItemView = new AccountOrderViewPanel($this->pnlItemView, $this, 'CloseItemPanel', $this->intOrderId);
				$this->pnlItemView->Visible = true;
			}else{
				$this->objOrderListView = new AccountOrderListPanel($this->pnlListView, $this, 'ShowItemPanel', 'CloseItemPanel');
				$this->pnlListView->Visible = true;
			}
		}
		
		 //Overrides the parent to ensure that the list view is populated
		public function CloseItemPanel($blnUpdatesMade){
			if(!$this->objOrderListView)
				$this->objOrderListView = new AccountOrderListPanel( $this->pnlListView, $this, 'ShowItemPanel', 'CloseItemPanel');
			parent::CloseItemPanel($blnUpdatesMade);            
		}
		
		public function __get($strName){
			switch ($strName){
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