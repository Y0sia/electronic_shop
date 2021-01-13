<?php
if ( !defined('ABSPATH') ) {
	exit;
}
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

add_action('woocommerce_single_product_summary', 'electronic_template_single_rating', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 15);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 20);

add_action('woocommerce_before_single_product', 'electronic_wrapper_start', 5);
function electronic_wrapper_start() { ?>
	<div class="col-md-9 col-sm-12 col-xs-12">
		<div class="toch-prond-area">
			<div class="row">
<?php }
add_action('woocommerce_before_single_product_summary', 'electronic_wrapper_image_start', 15);
function electronic_wrapper_image_start() { ?>
	<div class="col-md-5 col-sm-5 col-xs-12">	
		<div class="clear"></div>
<?php }

add_action('woocommerce_single_product_summary', 'electronic_short_description_wrapper_start', 13);
function electronic_short_description_wrapper_start() { ?>
	<hr>
<?php }

add_action('woocommerce_single_product_summary', 'electronic_short_description_wrapper_end', 17);
function electronic_short_description_wrapper_end() { ?>
	<hr>
<?php }

add_action('woocommerce_before_single_product_summary', 'electronic_wrapper_image_end', 25);
function electronic_wrapper_image_end() { ?>
	</div>
	<div class="col-md-7 col-sm-7 col-xs-12">
<?php }

add_action('woocommerce_single_product_summary', 'electronic_wrapper_product_end', 65);
function electronic_wrapper_product_end() { ?>
			</div>
		</div>
	</div>
<?php }

add_action('woocommerce_after_single_product_summary', 'electronic_wrapper_end', 25);
function electronic_wrapper_end() { ?>
	</div>
		</div>
	</div>
</div>
	
<?php }

add_action('woocommerce_after_single_product_summary', 'electronic_tabs_start', 7);
function electronic_tabs_start() { ?>
	<div class="toch-box">
		<div class="row">
			<div class="col-xs-12">
<?php }

add_action('woocommerce_after_single_product_summary', 'electronic_tabs_end', 13);
function electronic_tabs_end() { ?>
				</div>
			</div>
		</div>
	</div>
<?php }

add_action('woocommerce_single_product_summary', 'electronic_rating_description_wrapper_start', 7);
function electronic_rating_description_wrapper_start() { ?>
	<div class="about-toch-prond">
<?php }
add_action('woocommerce_single_product_summary', 'electronic_rating_description_wrapper_end', 25);
function electronic_rating_description_wrapper_end() { ?>
	</div>
<?php }

function electronic_template_single_rating() {

	global $product;

if ( ! wc_review_ratings_enabled() ) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating(); ?>


	<div>
		<?php echo '<div class="star-rating" role="img" aria-label="' . esc_attr( $label ) . '">' . wc_get_star_rating_html( $rating, $count ) . '</div>'; ?>
		<?php if ( comments_open() ) : ?>
			<?php //phpcs:disable ?>
			<div class="electronic_review">
				<a href="#reviews" rel="nofollow"><?php echo $review_count ?> reviews</a>
				 / 
				<a href="#reviews" rel="nofollow">Write a review</a>
			</div>
			<?php // phpcs:enable ?>
		<?php endif ?>
	</div>

<?php }

add_action('woocommerce_before_add_to_cart_button', 'electronic_before_add_to_cart');
function electronic_before_add_to_cart() { ?>
	<div class="product-form">
<?php }

add_action('woocommerce_after_add_to_cart_button', 'electronic_after_add_to_cart');
function electronic_after_add_to_cart() { ?>
	</div> 
<?php }