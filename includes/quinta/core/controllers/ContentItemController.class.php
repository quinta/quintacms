<?php

if(!defined('QUINTACMS') ) die("No quinta.");

	/**
	* Class ContentItemController - provids display of a content item
	* This class provides display of a ContentItem from the database - it is rendered
	* by a ContentBlockController template, which must always exist as a parent. The content
	* block view creates this with a reference to itself and a ContentItem ORM object drawn
	* from the content_item table. Here we instantiate the panels that display the content item
	* fields which are rendered in the template according to active flags. Title, Author, Description
	* and the other fields are optionally rendered - this behaviour can be configured from the
	* administrative interface.
	*
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.1
	*
	* @package Quinta
	* @subpackage Views
	 */

	class ContentItemController extends QPanel{
		// Local instances of the ContentItemMetaControl, Parent object, child ContentItems and ContentItems
		protected $objParentObject;
		protected $objContentItem;

		///NOTE: in future, i want to implement an edit mode to allow inline editing, hence the
		/// meta control here ..
		protected $mctContentItem;

		// Panels for ContentItem's individual data fields
		protected $pnlTitle;
		protected $pnlDescription;
		protected $pnlText;
		protected $pnlCreator;
		protected $pnlCreationDate;
		protected $pnlLastModification;


		// This blocks CSS -  note that Cssclass has a lower case c to avoid conflict with QCodo core ..
		protected $strCssId;
		protected $strCssclass;

		public function __construct($objParentObject, $objContentItem )
		{
			//Parent must always be a child of QForm or Qcontrol
			$this->objParentObject = $objParentObject;

			try {
				parent::__construct($this->objParentObject, $this->strCssId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			if(  $objContentItem ){
				$this->mctContentItem =  new ContentItemMetaControl($this, $objContentItem);
				$this->objContentItem =  $objContentItem;
			}else { ///@todo just in case, make _something_  ... todo, error out?
				$this->mctContentItem = ContentItemMetaControl::Create($this);
				$this->objContentItem =  $this->mctContentItem->ContentItem;
			}

			$this->strCssId = preg_replace('/\s/', '',$objContentItem->Name);
			$this->AddCssClass($objContentItem->Cssclass);

			$this->pnlTitle = $this->mctContentItem->pnlTitle_Create($this->CssId );
			$this->pnlTitle->CssClass = "ContentItemTitle";
			$this->pnlDescription = $this->mctContentItem->pnlDescription_Create($this->CssId);
			$this->pnlDescription->CssClass = "ContentItemDescription";
			$this->pnlText = $this->mctContentItem->pnlText_Create($this->CssId );
			$this->pnlText->CssClass = "ContentItemText";
			$this->pnlCreator = $this->mctContentItem->pnlCreatorId_Create($this->CssId);
			$this->pnlCreator->Name = "Written by:";
			$this->pnlCreator->CssClass = "ContentItemCreator";
			$this->pnlCreationDate = $this->mctContentItem->pnlCreationDate_Create($this->CssId);
			$this->pnlCreationDate->Name = "Created On:";
			$this->pnlCreationDate->CssClass = "ContentItemCreationDate";
			$this->pnlLastModification = $this->mctContentItem->pnlLastModification_Create($this->CssId);
			$this->pnlLastModification->Name = "Last Modification:";
			$this->pnlLastModification->CssClass = "ContentItemLastModification";

			// Setup the Template
			$this->Template = __QUINTA_CORE_VIEWS__ . '/ContentItemView.tpl.php';

/* just thinking here ..
		   if(!$this->mctContentItem || !$this->objContentItem  )
				$this->Template = 'BasicContentItem.tpl.php';
			else
				switch( $this->objContentItem->Type )
				{
					case 'Menu':
						$this->Template = 'MenuContentItem.tpl.php';
						break;
					case 'MenuItem':
						$this->Template = 'MenuItemContentItem.tpl.php';
						break;
					case 'Header':
						$this->Template = 'HeaderContentItem.tpl.php';
						break;
					case 'RightPanel':
						$this->Template = 'RightPanelContentItem.tpl.php';
						break;
					case 'LeftPanel':
						$this->Template = 'LeftPanelContentItem.tpl.php';
						break;
					case 'CenterPanel':
						$this->Template = 'CenterPanelContentItem.tpl.php';
						break;
					case 'Footer':
						$this->Template = 'FooterContentItem.tpl.php';
						break;
					case 'BlockHeader':
						$this->Template = 'BlockHeaderContentItem.tpl.php';
						break;
					case 'BlockFooter':
						$this->Template = 'BlockFooterContentItem.tpl.php';
						break;
					default:
						$this->Template = 'BasicContentItem.tpl.php';
				}*/
 //               $this->AutoRenderChildren = false;
		}


		///@todo  provide defualt contstruction or errors for these
		public function __get($strName){
			switch ($strName){
				case 'CssId':
					return $this->strCssId ;
				case 'Cssclass':
					return $this->strCssclass ;
				case 'Title':
					return $this->pnlTitle ;
				case 'Description':
					return $this->pnlDescription ;
				case 'Text':
					return $this->pnlText ;
				case 'Creator':
					return $this->pnlCreator ;
				case 'CreationDate':
					return $this->pnlCreationDate ;
				case 'LastModification':
					return $this->pnlLastModification ;
				case 'ContentItem':
					return $this->objContentItem;
				case 'ShowTitle':
					return $this->objContentItem->ShowTitle ;
				case 'ShowDescription':
					return $this->objContentItem->ShowDescription ;
				case 'ShowCreator':
					return $this->objContentItem->ShowCreator ;
				case 'ShowCreationDate':
					return $this->objContentItem->ShowCreationDate ;
				case 'ShowLastModification':
					return $this->objContentItem->ShowLastModification ;
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
	}
?>