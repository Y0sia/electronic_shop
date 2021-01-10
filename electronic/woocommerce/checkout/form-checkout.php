<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
<div class="panel-group" id="accordion">
<form name="checkout" method="post" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="panel panel_default">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	<div id="order_review" class="panel panel_default">
	<div class="panel-heading">
		<h4 id="order_review_heading" class="panel-title">
			<a href="#checkout-confirm" class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Step 2: Confirm Order 
				<i class="fa fa-caret-down"></i></a>
		</h4>
	</div>
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
		<div class="collapse" id="checkout-confirm" aria-expanded="true" style>
			<div class="panel-body">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
				</div>
		</div>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>
</div>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
