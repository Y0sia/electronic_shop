<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );
$counter_temp = 0;
if ( ! empty( $product_tabs ) ) : ?>

	<div class="toch-menu">
		<ul role="tablist">
			<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
				<li class="<?php echo esc_attr( $key ); ?>_tab <?php if($counter_temp == 0) {
					echo ' active';
					$counter_temp = 1;
				} ?>" id="tab-title-<?php echo esc_attr( $key ); ?>" role="presentation" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
					<a href="#tab-<?php echo esc_attr( $key ); ?>" role="tab" data-toggle="tab">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="tab-content toch-description-review">
		<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
			<div class="tab-pane fade <?php if($counter_temp == 1) {
				echo ' in active';
				$counter_temp = 2;
			} ?>" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
				<div class="row">
					<div class="col-xs-12">
				<?php
				if ( isset( $product_tab['callback'] ) ) {
					call_user_func( $product_tab['callback'], $key, $product_tab );
				}
				?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

		<?php do_action( 'woocommerce_product_after_tabs' ); ?>

<?php endif; ?>
