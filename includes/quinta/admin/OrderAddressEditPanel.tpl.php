<?php
	// This is the HTML template include file (.tpl.php) for order_addressEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->lstOrder->RenderWithName(); ?>

		<?php $_CONTROL->txtNamePrefix->RenderWithName(); ?>

		<?php $_CONTROL->txtFirstName->RenderWithName(); ?>

		<?php $_CONTROL->txtMiddleName->RenderWithName(); ?>

		<?php $_CONTROL->txtLastName->RenderWithName(); ?>

		<?php $_CONTROL->txtNameSuffix->RenderWithName(); ?>

		<?php $_CONTROL->txtCompany->RenderWithName(); ?>

		<?php $_CONTROL->txtStreet1->RenderWithName(); ?>

		<?php $_CONTROL->txtStreet2->RenderWithName(); ?>

		<?php $_CONTROL->txtSuburb->RenderWithName(); ?>

		<?php $_CONTROL->txtCity->RenderWithName(); ?>

		<?php $_CONTROL->txtCounty->RenderWithName(); ?>

		<?php $_CONTROL->lstZone->RenderWithName(); ?>

		<?php $_CONTROL->lstCountry->RenderWithName(); ?>

		<?php $_CONTROL->txtPostalCode->RenderWithName(); ?>

		<?php $_CONTROL->lstType->RenderWithName(); ?>

		<?php $_CONTROL->lblCreationDate->RenderWithName(); ?>

		<?php $_CONTROL->lblLastModification->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
