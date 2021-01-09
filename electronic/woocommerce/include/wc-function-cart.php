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