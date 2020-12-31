<?php
if ( !defined('ABSPATH') ) {
	exit;
}


function woocommerce_category_image($id_cat) {
    $thumbnail_id = get_woocommerce_term_meta( $id_cat, 'thumbnail_id', true );
    $image = wp_get_attachment_url( $thumbnail_id );
    if ( $image ) {
       return $image;
  }
}
