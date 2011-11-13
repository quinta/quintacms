<?php

if(!defined('QUINTACMS') ) die("No quinta.");

/**
	* This is the Controller class for display functionality of the Menu class.
	*  It provides a div based area for content with hierarchy, css id and class
	* and a relationship to the basic areas managed by ContentBlockController. It is to a
	* Menu that a MenuItem is assigned. This class will render any child Menus
	* and all associated Items.
	*  These associations may configured via the QuintaCMS Dashboard interface and
	* will then automatically be reflected in the associated ContentBlockController display.
	*
	*@author Erik Winn <sidewalksoftware@gmail.com>
	*
	*@version 0.1
	*
	* @package Quinta
	* @subpackage Views
	*
	*/

	class MenuController extends QPanel{
		// Local instances of the Parent object, Menu and MenuItems
		protected $objParentObject;
		protected $objMenu;
		public $aryMenuItemControllers;

		protected $strTitle;
		protected $intLevel = 0;

		// This Menu block's CSS id
		protected $strCssId;
		protected $strCssclass;

		public function __construct($objParentObject, Menu $objMenu/*, $strCssId*/){
			//Parent must always be a ContentBlock or a MenuController
			$this->objParentObject = $objParentObject;
			$this->strCssId = preg_replace('/\s/', '',$objMenu->Name);
//            $this->strCssId = $strCssId;

			try {
				parent::__construct($this->objParentObject, $this->strCssId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			if( !$objMenu )
				throw new QCallerException(sprintf("Menu %s created without a MenuItem!", $strCssId) );
		   else
				$this->objMenu =  $objMenu;

			$this->strTitle = $this->objMenu->Title;
			if($objMenu->CssClass)
				$this->AddCssClass($objMenu->CssClass);

			$this->AddCssClass($objMenu->Type);

			$this->Template = __QUINTA_CORE_VIEWS__ . '/MenuView.tpl.php';

			$aryMenuItems = $this->objMenu->GetMenuItemArray( QQ::Clause(
														QQ::OrderBy(QQN::MenuItem()->SortOrder)
																 ));
			foreach($aryMenuItems as $objMenuItem ){
				$objMenuItemController = new MenuItemController( $this, $objMenuItem );

				//Note: this will increment
				$objMenuItemController->Level = $this->Level + 1;

				$this->aryMenuItemControllers[] = $objMenuItemController;
			}

/*            if(!$this->mctMenu || !$this->objMenu  )
				$this->Template = 'BasicMenu.tpl.php';
			else
				switch( $this->objMenu->Type )
				{
					case 'Menu':
						$this->Template = 'MenuMenu.tpl.php';
						break;
					case 'MenuItem':
						$this->Template = 'MenuItemMenu.tpl.php';
						break;
					case 'Header':
						$this->Template = 'HeaderMenu.tpl.php';
						break;
					case 'RightPanel':
						$this->Template = 'RightPanelMenu.tpl.php';
						break;
					case 'LeftPanel':
						$this->Template = 'LeftPanelMenu.tpl.php';
						break;
					case 'CenterPanel':
						$this->Template = 'CenterPanelMenu.tpl.php';
						break;
					case 'Footer':
						$this->Template = 'FooterMenu.tpl.php';
						break;
					case 'BlockHeader':
						$this->Template = 'BlockHeaderMenu.tpl.php';
						break;
					case 'BlockFooter':
						$this->Template = 'BlockFooterMenu.tpl.php';
						break;
					default:
						$this->Template = 'BasicMenu.tpl.php';
				}*/

		}

		public function __get($strName){
			switch ($strName){
				case 'Level':
					return $this->intLevel ;
				case 'CssId':
					return $this->strCssId ;
				case 'Title':
					return $this->strTitle ;
				case 'ShowTitle':
					return $this->objMenu->ShowTitle ;
				case 'Name':
					return $this->objMenu->Name ;
				case 'MenuItemControllers':
					return $this->aryMenuItemControllers ;
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
				case 'Level':
					try {
						return ($this->intLevel = QType::Cast($mixValue, QType::Integer));
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
	}
?>