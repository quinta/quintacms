<?php
if(!defined('QUINTACMS') ) die("No quinta.");
if (!defined("PAGECONTROLLER.CLASS.PHP")){
define("PAGECONTROLLER.CLASS.PHP",1);

	/**
	* PageController - handles the content block placement for a single page in Quinta.
	* 
	* This class is the manager for placing content blocks associated with a Page.
	* It sets up the ContentBlocks according to some default areas as defined in the
	* block_location_type table in the database, These are currently hard coded to offer
	* a default generic layout with a header, two side bars, a center content area and
	* a footer. Extra divs are also provided for extra flexibility. All divs loaded by this
	* class are contained within the master container div (see the template).
	*
	* You can modify the default layout via the style sheet associated with each Page
	* - the style sheet to use for a page can be set via the Quinta CMS administrative interface.
	* It is also not difficult to change the default areas - simply edit the template and ensure
	* that the associated div CSS id names are in the block_location_type table and then
	* you can associate ContentBlocks with those areas (again through the admin interface).
	*
	*NOTE: One course of development would be to subclass this for page types. This
	* is already in the database, but it is not used yet - an architectural decision to be made ...
	*     
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.1
	*
	* @package Quinta
	* @subpackage Views
	*/
	class PageController extends QPanel{
		protected $objParentObject;
		protected $objPage;
		
		public $aryHeaderContentBlocks;
		public $aryRightPanelContentBlocks;
		public $aryCenterPanelContentBlocks;
		public $aryLeftPanelContentBlocks;
		public $aryFooterContentBlocks;
		public $aryExtraContentBlocks;

		public function __construct($objParentObject, $objPage){
			///@todo  We should have an ErrorPage in the page table with an Error ContentBlock and
			// ContentItem attached!   quintadb.sql should insert these by default on install.
			// Thought: just redirect to a static page here, or we need a class ErrorPage .. but, this
			// is an unlikely scenario anyway as IndexPage should handle this - I am really thinking
			// of new developers using this class wrongly, for now just go home ..
			if(! $objPage )
				$this->objPage = $this->objPage = Page::LoadByName('Home');
			else
				$this->objPage = $objPage;
			
			//To have any actions, Parent must be a QForm - QuintaCMS uses class IndexPage
			// as the master page (index.php) that takes all requests and instantiates pages
			$this->objParentObject = $objParentObject;

			try {
				parent::__construct($this->objParentObject);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			if( $this->objPage)
				foreach ( $this->objPage->GetContentBlockArray(
														QQ::Clause (QQ::OrderBy(QQN::ContentBlock()->SortOrder) )
																	) as $objContentBlock )
				{
					if(! $objContentBlock)
						continue;
					$strLocation = $objContentBlock->Location;
					$strCssId = $strLocation . preg_replace('/\s/', '',$objContentBlock->Name);
					$strCssClass = $strLocation . 'ContentBlock';
					switch ($strLocation)
					{
						case 'PageHeader':
							$objContentBlockController = new ContentBlockController( $this, $objContentBlock, $strCssId);
							$this->aryHeaderContentBlocks[] = $objContentBlockController;
							break;
						case 'RightPanel':
							$objContentBlockController = new ContentBlockController( $this, $objContentBlock, $strCssId);
							$this->aryRightPanelContentBlocks[] = $objContentBlockController;
							break;
						case 'LeftPanel':
							$objContentBlockController = new ContentBlockController( $this, $objContentBlock, $strCssId);
							$this->aryLeftPanelContentBlocks[] = $objContentBlockController;
							break;
						case 'CenterPanel':
							$objContentBlockController = new ContentBlockController( $this, $objContentBlock, $strCssId);
							$this->aryCenterPanelContentBlocks[] = $objContentBlockController;
							break;
						case 'PageFooter':
							$objContentBlockController = new ContentBlockController( $this, $objContentBlock, $strCssId);
							$this->aryFooterContentBlocks[] = $objContentBlockController;
							break;

						default:
							$objContentBlockController = new ContentBlockController( $this, $objContentBlock, $strCssId);
							$this->aryExtraContentBlocks[] = $objContentBlockController;
							break;
					}

					$objContentBlockController->CssClass = $strCssClass;
					$objContentBlockController->Visible = true;
				}
			
			$this->Template = __QUINTA_CORE_VIEWS__ . '/PageView.tpl.php';
			
		}
		
		public function __get($strName){
			switch ($strName){
				case 'HeaderContentBlocks':
					return $this->aryHeaderContentBlocks ;
				case 'LeftPanelContentBlocks':
					return $this->aryLeftPanelContentBlocks ;
				case 'CenterPanelContentBlocks':
					return $this->aryCenterPanelContentBlocks ;
				case 'RightPanelContentBlocks':
					return $this->aryRightPanelContentBlocks ;
				case 'FooterContentBlocks':
					return $this->aryFooterContentBlocks ;
				case 'ExtraContentBlocks':
					return $this->aryExtraContentBlocks ;
				case 'HasHeader':
					return $this->objPage->HasHeader ;
				case 'HasLeftColumn':
					return $this->objPage->HasLeftColumn ;
				case 'HasRightColumn':
					return $this->objPage->HasRightColumn ;
				case 'HasFooter':
					return $this->objPage->HasFooter ;
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