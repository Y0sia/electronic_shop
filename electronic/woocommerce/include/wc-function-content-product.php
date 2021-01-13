<?php
if ( !defined('ABSPATH') ) {
	exit;
}

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
function electronic_template_loop_rating() {
	global $product;

	$rating = $product->get_average_rating();
	$count = 0;
	$html = '';


		$html  = '<div class="star-rating rating" role="img">' . wc_get_star_rating_html( $rating, $count ) . '</div>';

	 echo $html;

}

function woocommerce_template_loop_product_title() {
	echo '<h5 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '"><a href="'. get_permalink() .'">' . get_the_title() . '</a></h5>';
}

add_filter('single_product_archive_thumbnail_size', 'size_product');
function size_product($size) {
	//get_pr($size, false);
	$size = 'full';
	return $size;
}

add_filter('post_class', 'electronic_add_class_loop_item');
function electronic_add_class_loop_item($classes) {
	if (is_shop() || is_product_taxonomy()) {
		$classes[] = 'single-product';
	}
	return $classes;
}

add_action('woocommerce_before_shop_loop_item_title', 'electronic_template_loop_product_thumbnail_start' , 5);
function electronic_template_loop_product_thumbnail_start() { ?>
	<div class="product-img">
<?php }

add_action('woocommerce_before_shop_loop_item_title', 'electronic_template_loop_product_thumbnail_end' , 15);
function electronic_template_loop_product_thumbnail_end() { ?>
	</div>
<?php }

add_action('woocommerce_shop_loop_item_title', 'electronic_template_loop_product_description_start', 5);
function electronic_template_loop_product_description_start() { ?>
	<div class="product-description">
<?php }

add_action('woocommerce_shop_loop_item_title', 'electronic_template_loop_product_description_end', 15);
function electronic_template_loop_product_description_end() { ?>
	<div class="price-box">
<?php }

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
add_action('woocommerce_after_shop_loop_item_title', 'electronic_template_loop_price_end', 15);
function electronic_template_loop_price_end() { ?>
		</div>
		<?php electronic_template_loop_rating() ?>
	</div>
<?php }

add_action('woocommerce_after_shop_loop_item', 'electronic_template_loop_add_to_cart_start', 7);
function electronic_template_loop_add_to_cart_start() { ?>
	<div class="product-action">
		<div class="button-group">
			<div class="product-button">
				<button>
					<i class="fa fa-shopping-cart"></i>
<?php }

add_action('woocommerce_after_shop_loop_item', 'electronic_template_loop_add_to_cart_end', 15);
function electronic_template_loop_add_to_cart_end() { ?>
				</button>
			</div>
			<div class="product-button-2">
				<?php echo do_shortcode('[ti_wishlists_addtowishlist]'); ?>
			</div>
		</div>
	</div>
<?php }

