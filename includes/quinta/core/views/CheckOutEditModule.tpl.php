<div id="CheckOutEditModule">
		<?php
			$_CONTROL->objCheckOutItemListModule->Render();
			$_CONTROL->objCheckOutTotalsController->Render();
		?>
		<div class="spacer"></div>
		<?php $_CONTROL->objShippingAddressController->Render(); ?>
		<?php $_CONTROL->objBillingAddressController->Render(); ?>
		<div class="spacer"></div>
</div>
