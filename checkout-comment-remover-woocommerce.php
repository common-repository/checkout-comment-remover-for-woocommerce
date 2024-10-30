<?php
/** * Plugin Name: Checkout Comment Remover for WooCommerce 
	* Version: 1.0.0
 	* Plugin URI: https://gplchimp.com/ 
	* Author: toddgassaway
	* Author URI: https://gplchimp.com/
	* Description: Remove order comment section from WooCommerce checkout page.
	* Requires at least: 3.7 
	* Tested up to: 4.9.4  */
	
add_filter( 'woocommerce_checkout_fields' , 'easy_ccr_override_checkout_fields' );
  
function easy_ccr_override_checkout_fields( $fields ) {
	unset($fields['order']['order_comments']);
    return $fields;}
?>