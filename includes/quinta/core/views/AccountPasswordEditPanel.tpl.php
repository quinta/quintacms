<div class="PasswordEditPanel">	
	<div class="formControls">
	
		<?php
		if($_CONTROL->Account->OnetimePassword)
			print '<div class="warning"><br /><br /> <strong>' . Quinta::Translate('Please Note') .': ' 
					. Quinta::Translate('Your current password is for one use only') . '! </strong><br /><br  /><i>'
					. Quinta::Translate('You must reset your password before logging out') . '.</i><br /><br /></div>';
		
		$_CONTROL->txtUsername->RenderWithName();
		$_CONTROL->txtPassword->RenderWithName();
		$_CONTROL->txtPassword2->RenderWithName();
		?>

	</div>

	<div class="formActions">
		<div class="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div class="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
	</div>
</div>
