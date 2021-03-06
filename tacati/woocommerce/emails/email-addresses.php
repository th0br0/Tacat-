<?php
/**
 * Email Addresses
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     1.6.4
 */

?><table cellspacing="0" cellpadding="0" style="width: 100%; vertical-align: top;" border="0">

	<tr>

		<td valign="top" width="50%">

			<h3><?php _e('Billing address', TACATI_TD); ?></h3>

			<p><?php echo $order->get_formatted_billing_address(); ?></p>

		</td>

		<?php if ( get_option( 'woocommerce_ship_to_billing_address_only' ) == 'no' ) : ?>

		<td valign="top" width="50%">

			<h3><?php _e('Shipping address', TACATI_TD); ?></h3>

			<p><?php 
				$shipping_location = $order->get_shipping_method();
				switch($shipping_location){
				case 'Ufficio':
				case 'Casa':
				case 'Corriere':
					echo $order->get_formatted_shipping_address();
				break;
				default:	
					echo $shipping_location;
				break;}?>
			</p>

		</td>

		<?php endif; ?>

	</tr>

</table>