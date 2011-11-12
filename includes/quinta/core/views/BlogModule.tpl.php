	<div class="BlogModuleInner">

<?php
		if(is_array($_CONTROL->aryContentItemControllers))
			foreach( $_CONTROL->aryContentItemControllers as $contentItemView )
				$contentItemView->Render();
?>

		<div class="spacer"></div>

	</div>

