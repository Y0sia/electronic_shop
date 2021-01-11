<?php
if ( !defined('ABSPATH') ) {
	exit;
}
add_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 9);
function woocommerce_output_content_wrapper() { ?>

<?php }
add_action('woocommerce_before_main_content', 'electronic_output_content_wrapper_start', 5);
function electronic_output_content_wrapper_start(){ ?>
	<section class="page-content">
		<div class="container">
			<div class="row">
					<?php kama_breadcrumbs(); ?>
			</div>
			<div class="row">
			<div class="col-md-3">
					<?php category_mega_menu() ?>
			</div>
			<div class="col-md-9">
						<!-- START PRODUCT-BANNER -->
						<div class="product-banner">
							<div class="row">
								<div class="col-xs-12">
									<div class="banner">
										<a href="#"><img src="<?php echo wp_get_attachment_image_url('139', 'full')?>" alt="Product Banner"></a>
									</div>
								</div>
							</div>
						</div>
			<div class="product-area">
				<div class="row">
					
					
<?php }

add_action('woocommerce_before_main_content', 'electronic_output_content_wrapper_end', 35);
function electronic_output_content_wrapper_end() { ?>
	<div class="col-xs-12">
		<div class="product-menu">
			<div class="product-title">
<?php }

add_action('woocommerce_before_shop_loop', 'electronic_output_all_notices', 5);
function electronic_output_all_notices() { ?>
		</div>
	</div>
	<div class="product-filter">
<?php }

add_action('woocommerce_before_shop_loop', 'electronic_before_shop_loop_start', 35);
function electronic_before_shop_loop_start() { ?>
		</div>
	</div>
<?php }

add_action('woocommerce_before_shop_loop', 'electronic_catalog_ordering_start', 25);
function electronic_catalog_ordering_start() { ?>
	<div class="sort">
		<label>Sort By:</label>
<?php }

add_action('woocommerce_before_shop_loop', 'electronic_catalog_ordering_end', 35);
function electronic_catalog_ordering_end() { ?>
	</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="product">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in  active" id="display 1-1">
						
<?php }

add_action('woocommerce_after_shop_loop', 'electronic_before_pagination', 5);
function electronic_before_pagination() { ?>
		
	<div>
		<div>
<?php }

add_action('woocommerce_after_shop_loop', 'electronic_after_pagination', 15);
function electronic_after_pagination() { ?>
	</div>
		</div>
				</div>
				</div>
			</div>
		</div>
	</div>
<?php }

add_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end_end', 15);
function woocommerce_output_content_wrapper_end_end() { ?>
			<div class="brand-logo-area carosel-navigation">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="area-title">
									<h3 class="title-group border-red gfont-1">Brand Logo</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="active-brand-logo">
								<div class="col-md-2">
									<div class="single-brand-logo">
										<a href="#"><img src="<?php echo wp_get_attachment_image_url( 57 ) ?>" alt=""></a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="single-brand-logo">
										<a href="#"><img src="<?php echo wp_get_attachment_image_url( 58 ) ?>" alt=""></a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="single-brand-logo">
										<a href="#"><img src="<?php echo wp_get_attachment_image_url( 59 ) ?>" alt=""></a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="single-brand-logo">
										<a href="#"><img src="<?php echo wp_get_attachment_image_url( 60 ) ?>" alt=""></a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="single-brand-logo">
										<a href="#"><img src="<?php echo wp_get_attachment_image_url( 61 ) ?>" alt=""></a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="single-brand-logo">
										<a href="#"><img src="<?php echo wp_get_attachment_image_url( 62 ) ?>" alt=""></a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="single-brand-logo">
										<a href="#"><img src="<?php echo wp_get_attachment_image_url( 57 ) ?>" alt=""></a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="single-brand-logo">
										<a href="#"><img src="<?php echo wp_get_attachment_image_url( 58 ) ?>" alt=""></a>
									</div>
								</div>
								<div class="col-md-2">
									<div class="single-brand-logo">
										<a href="#"><img src="<?php echo wp_get_attachment_image_url( 59 ) ?>" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	</section>
<?php }

add_action('woocommerce_after_shop_loop', 'woocommerce_catalog_ordering_end', 5);
function woocommerce_catalog_ordering_end() { ?>

		</div>
	</div>
<?php }
add_filter('woocommerce_show_page_title', 'remove_h1');
function remove_h1($bool) {
	$bool = false;
	return $bool;
}
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);


