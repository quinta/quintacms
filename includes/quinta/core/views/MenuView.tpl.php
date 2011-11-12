
<div class="MenuBlockInner">

	<ul>

<?php
		if($_CONTROL->ShowTitle)
		   print '<div class="MenuTitle">' . $_CONTROL->Title . '</div>';

		if($_CONTROL->MenuItemControllers)
			foreach( $_CONTROL->aryMenuItemControllers as $MenuItemController )
			{
				if($MenuItemController->UseDivs)
					$strTag = 'div';
				else
					$strTag = 'li';
				
				print '<' . $strTag . ' ' . $MenuItemController->GetAttributes() . '>';
				print $MenuItemController->GetControlHtml();
				print '</' . $strTag . '>';
				
			}
?>

	</ul>
<!--  this pulls the div down below the list to make styling possible .. -->
<!--  <div class="spacer"></div>    -->
</div>
