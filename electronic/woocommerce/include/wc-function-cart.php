<?php
if ( !defined('ABSPATH') ) {
	exit;
}

function total_price() {
	$total = 0;
	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
		$product = $product = wc_get_product($cart_item['product_id']);
		$total += $product->price * $cart_item['quantity'];
	}
	return $total;
}
remove_action('woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20);
add_action('woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20);
function woocommerce_button_proceed_to_checkout() {
	$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
	$checkout_page_url = get_permalink( woocommerce_get_page_id( 'checkout' ) );
	echo '<a href="'.$shop_page_url.'" class="btn btn-default pull-left">Continue Shopping</a>';
	echo '<a href="'.$checkout_page_url.'" class="checkout-button button alt wc-forward btn btn-primary pull-right">Checkout</a>';
}