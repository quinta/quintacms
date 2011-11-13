	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
   <br />
   <br />
   <hr>
	<div id="formControls">
	<table width="100%">
		<tr>
			<td width="50%" valign="top">
				<hr> <strong>     General Information: </strong> <br />
				<?php $_CONTROL->lblId->RenderWithName(); ?>

				<?php $_CONTROL->lblAccount->RenderWithName(); ?>

				<?php $_CONTROL->lstStatus->RenderWithName(); ?>

				<?php $_CONTROL->lblCreationDate->RenderWithName(); ?>

				<?php $_CONTROL->lblLastModification->RenderWithName(); ?>

				<?php $_CONTROL->calCompletionDate->RenderWithName(); ?>

				<?php $_CONTROL->lblOrderTotal->RenderWithName(); ?>
			</td>
			<td>
				<hr> <strong>     Notes: </strong> <br />
				<?php $_CONTROL->txtNotes->Render(); ?>
			</td>
		</tr>
		<tr>
			<td>
				<hr> <strong>     Order Items: </strong> <br />
				<?php
//                    if( $_CONTROL->dtgOrderItems->TotalItemCount )
						$_CONTROL->dtgOrderItems->Render();
				?>
			</td>
		</tr>
		<tr>
			<td>
			   <hr> <strong>     Charges: </strong> <br />
				<?php $_CONTROL->txtShippingCost->RenderWithName(); ?>

				<?php $_CONTROL->txtProductTotalCost->RenderWithName(); ?>

				<?php $_CONTROL->txtShippingCharged->RenderWithName(); ?>

				<?php $_CONTROL->txtHandlingCharged->RenderWithName(); ?>

				<?php $_CONTROL->txtTax->RenderWithName(); ?>

				<?php $_CONTROL->txtProductTotalCharged->RenderWithName(); ?>

				<?php $_CONTROL->lstShippingMethod->RenderWithName(); ?>

				<?php $_CONTROL->lstPaymentMethod->RenderWithName(); ?>

				<?php $_CONTROL->lstType->RenderWithName(); ?>
			</td>
		</tr>
	</table>
	</div>
