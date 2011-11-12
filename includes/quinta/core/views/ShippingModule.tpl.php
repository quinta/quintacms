<div id="ShippingModule">

<?php if($_CONTROL->HasActiveMethods)
			{ 
				print '<div class="heading">' . Quinta::Translate('Shipping Address') . ': </div>';
	
				$_CONTROL->objAddressSelectionModule->Render();
						
				print '<div class="heading">' . Quinta::Translate('Shipping Options') . ': </div>';
				
				if( is_array($_CONTROL->aryShippingProviders ) )
					foreach($_CONTROL->aryShippingProviders as $strTitle => $aryShippingMethodControllers)
					{
						print '<div class="ShippingProviderTitle">' . $strTitle . "</div>\n";
						foreach($aryShippingMethodControllers as $objShippingMethodController)
							$objShippingMethodController->Render();
						print '<div class="spacer"></div>';
					}

			}
			print '<hr>';
			print '<div class="heading">' . Quinta::Translate('Add comments about your order') . ': </div>';
			$_CONTROL->txtNotes->Render();
						
?>

</div>