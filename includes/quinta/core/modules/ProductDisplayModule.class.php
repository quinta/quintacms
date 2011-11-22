<?php
if(!defined('QUINTACMS') ) die("No quinta.");

if (!defined("PRODUCTDISPLAYMODULE.CLASS.PHP")){
define("PRODUCTDISPLAYMODULE.CLASS.PHP",1);
 
/**
* Class ProductDisplayModule - A managing module for views of products by list and by item
* 
*
*  This module provides the center or main panel for display of products in the database. It
* utilizes two main panels to do this, one a list of products and one an individual product view.
* See ListModuleBase for more on the internals.
*
*
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.3
*
*@package Quinta
* @subpackage Modules
*/ 
class ProductDisplayModule extends ListModuleBase{
		private $strViewMode = 'None';
		private $intProductId = null;        
		private $intProductCount = 0;
		private $objProductListView = null;
		private $objProductItemController = null;
		/**
		* Module constructor
		* NOTE: This module ignores the required extra parameters ..
		*@param ContentBlock - parent controller object.
		*@param mixed - extra parameters, ignored
		*/
		public function __construct( ContentBlockController $objParentObject, $mixParameters=null){
			//Parent should always be a ContentBlockController
			$this->objParentObject =& $objParentObject;
			
			try {
				parent::__construct($this->objParentObject);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			$this->AutoRenderChildren = true;
//            $this->strTemplate = __QUINTA_CORE_VIEWS__ . '/ProductDisplayModule.tpl.php';
			
			$this->countProducts();
			$this->createDisplay();
		}
		
		private function countProducts(){
			///@todo  implement display by Model for pretty urls ..
			///@todo  check permissions here - stop on failure. redirect or limit the count to permissable ...
			
			$this->intProductCount = 0;
			
			$strParams = urldecode(IndexPage::$strPageParameters);
			$aryParameters = explode('/', $strParams);
			//really we are only concerned with the last parameter as this is the
			// category of items to be listed ..
			$strParam = array_pop($aryParameters);
			if(! $strParam){
				$this->intProductCount = Product::CountAll();
				$this->strViewMode = 'List';
			}elseif( is_numeric($strParam) ){
				//last part may also be a product id
				$objProduct = Product::Load($strParam);
				if( $objProduct instanceof Product){
					$this->intProductId = $strParam;
					$this->intProductCount = 1;
					$this->strViewMode = 'Item';
				}else{
					$this->intProductCount = 0;
					$this->intProductId = null;
				}
			}else{
				//otherwise, it must be a category ..
				$objCategory = ProductCategory::LoadByName($strParam);
				if($objCategory)
					$this->intProductCount = Product::CountByProductCategoryAsCategory( $objCategory->Id );
			}
		}
		
		private function createDisplay(){
			if( $this->intProductCount > 1 ){
				$this->strViewMode = 'List';
				if(!$this->objProductListView)
					$this->objProductListView = new ProductListView( $this->pnlListView, $this, 'ShowItemPanel', 'CloseItemPanel'  );
				$this->pnlListView->Visible = true;
			}else{
				$this->strViewMode = 'Item';
				new ProductItemController( $this->pnlItemView, $this, 'CloseItemPanel', $this->intProductId );
				$this->pnlItemView->Visible = true;
			}
		}
		//Overrides the parent to ensure that the list view is populated
		public function CloseItemPanel($blnUpdatesMade){
			if(!$this->objProductListView)
				$this->objProductListView = new ProductListView( $this->pnlListView, $this, 'ShowItemPanel', 'CloseItemPanel'  );
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