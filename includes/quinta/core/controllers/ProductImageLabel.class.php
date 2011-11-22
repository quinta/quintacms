<?php
if(!defined('QUINTACMS') ) die('No Quinta.');

if (!defined("PRODUCTIMAGELABEL.CLASS.PHP")){
define("PRODUCTIMAGELABEL.CLASS.PHP",1);

/**
* Class ProductImageLabel - class to display Product images
* This class queries the ProductImage table for an image associated with the given
* Product - it returns a QControl that displays the image. If no image is found it
* defaults to showing "default_product.png". The default size is Small and height
* and width are either set from the ProductImage if possible or left unspecified.
*
* All attributes except Product Id can be manually set - ProductId must be passed
* to the constructor
*
*@author Erik Winn <sidewalksoftware@gmail.com>
*
*@version 0.3
*
*@package Quinta
* @subpackage CMS
*/

	class ProductImageLabel extends QControl{
		/**
		*@var Product member object
		*/
		protected $objProduct;
		/**
		*@var string strImageUri - URI for the image to display
		*/
		protected $strImageUri;
		/**
		*@var string strAlternateText - ALT text for the image to display
		*/
		protected $strAlternateText;
		/**
		*@var integer intHeight - image height in pixels
		*/
		protected $intHeight;
		/**
		*@var integer intWidth - image width in pixels
		*/
		protected $intWidth;
		/**
		*@var integer intSizeType - the ImageSizeType of image to look for: Icon, Thumb, Small, Large ..etc.
		*/
		protected $intSizeType = ImageSizeType::Small;
		/**
		* ProductImageLabel Constructor
		*
		* @param QControl objParentObject - the parent of this control
		* @param integer intProductId - id of the product for which the image is displayed
		* @param integer intSizeType - optional ImageSizeType flag (Small, Large, etc..)
		* @param integer intHeight - optional height specification
		* @param integer intWidth - optional width specification
		* @param string strControlId - optional string to use as CSS Id
		*/
		public function __construct($objParentObject,
													  $intProductId,
													  $intSizeType = null,
													  $intHeight = null,
													  $intWidth = null,
													  $strControlId = null)
		{
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			if($intSizeType)
				$this->intSizeType = $intSizeType;
			else
				$this->intSizeType = ImageSizeType::Small;
				
			$aryImages = ProductImage::QueryArray( QQ::AndCondition(
																	QQ::Equal( QQN::ProductImage()->ProductId, $intProductId ),
																	QQ::Equal( QQN::ProductImage()->SizeType, $this->intSizeType )
																	 ));

			$this->strImageUri = __QUINTA_SUBDIRECTORY__;

			///@todo we take the first image of size type - allow specification of which image if more than one
			if( is_array($aryImages) && ! empty($aryImages)){
				$objProductImage = $aryImages[0];

				if($intHeight)
					$this->intHeight = $intHeight;
				elseif( $objProductImage->XSize )               
					$this->intHeight = $objProductImage->XSize;                
				if($intWidth)
					$this->intWidth = $intWidth;
				elseif( $objProductImage->YSize )
					$this->intWidth = $objProductImage->YSize;
				
				$strFileUri = $objProductImage->Uri;
				
				if( file_exists( __QUINTA_ROOT__ . $strFileUri ) )
					$this->strImageUri .=  $strFileUri;
				else                   
					$this->strImageUri .=  "/core/assets/images/default_product.png";
			}else{
				if($intHeight)
					$this->intHeight = $intHeight;
				if($intWidth)
					$this->intWidth = $intWidth;
				$this->strImageUri .= "/core/assets/images/default_product.png";
			}
		}
		
		public function GetJavaScriptAction() {return "onclick";}
		public function Validate() {return true;}
		public function ParsePostData(){}
		
		public function GetAttributes($blnIncludeCustom = true, $blnIncludeAction = true){
			
			$strToReturn = parent::GetAttributes($blnIncludeCustom, $blnIncludeAction);

			if ($this->strAlternateText)
				$strToReturn .= sprintf('alt="%s" ', $this->strAlternateText);
			if ($this->strImageUri)
				$strToReturn .= sprintf('src="%s" ', $this->strImageUri);
			if ($this->intHeight)
				$strToReturn .= sprintf('height="%s" ', $this->intHeight);
			if ($this->strWidth)
				$strToReturn .= sprintf('width="%s" ', $this->intWidth);

			return $strToReturn;
		}
		
		protected function GetControlHtml(){
			$strStyle = $this->GetStyleAttributes();
			if ($strStyle)
				$strStyle = sprintf('style="%s"', $strStyle);

				$strToReturn = sprintf('<img name="%s" id="%s" %s%s />',
					$this->strControlId,
					$this->strControlId,
					$this->GetAttributes(),
					$strStyle);
			
			return $strToReturn;
		}

		public function __get($strName){
			switch ($strName){
				case 'Product':
					return $this->objProduct ;
				case 'ImageUri':
					return $this->strImageUri ;
				case 'AlternateText':
					return $this->strAlternateText ;
				case 'Height':
					return $this->intHeight ;
				case 'Width':
					return $this->intWidth ;
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
				case 'Product':
					try {
						return ($this->objProduct = QType::Cast($mixValue, 'Product' ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'ImageUri':
					try {
						return ($this->strImageUri = QType::Cast($mixValue, QType::String ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'AlternateText':
					try {
						return ($this->strAlternateText = QType::Cast($mixValue, QType::String ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'Height':
					try {
						return ($this->intHeight = QType::Cast($mixValue, QType::Integer ));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case 'Width':
					try {
						return ($this->intWidth = QType::Cast($mixValue, QType::Integer ));
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