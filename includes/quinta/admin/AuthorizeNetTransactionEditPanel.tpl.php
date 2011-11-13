<?php
	// This is the HTML template include file (.tpl.php) for authorize_net_transactionEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->lstOrder->RenderWithName(); ?>

		<?php $_CONTROL->lblCreationDate->RenderWithName(); ?>

		<?php $_CONTROL->txtResponseCode->RenderWithName(); ?>

		<?php $_CONTROL->txtResponseSubcode->RenderWithName(); ?>

		<?php $_CONTROL->txtResponseReasonCode->RenderWithName(); ?>

		<?php $_CONTROL->txtResponseReasonText->RenderWithName(); ?>

		<?php $_CONTROL->txtAuthorizationCode->RenderWithName(); ?>

		<?php $_CONTROL->txtTransactionId->RenderWithName(); ?>

		<?php $_CONTROL->txtTransactionType->RenderWithName(); ?>

		<?php $_CONTROL->txtAmount->RenderWithName(); ?>

		<?php $_CONTROL->txtAvsResponseCode->RenderWithName(); ?>

		<?php $_CONTROL->txtCcvResponseCode->RenderWithName(); ?>

		<?php $_CONTROL->txtCavResponseCode->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
