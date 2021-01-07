<?php

require get_template_directory() . '/include/custom-header.php';
require get_template_directory() . '/include/template-tags.php';
require get_template_directory() . '/include/template-functions.php';
require get_template_directory() . '/include/customizer.php';
require get_template_directory() . '/include/enqueue-style-script.php';
require get_template_directory() . '/include/theme-settings.php';
require get_template_directory() . '/include/fonts.php';
require get_template_directory() . '/include/helpers.php';
require get_template_directory() . '/include/theme-menus.php';
require get_template_directory() . '/include/custom-slider.php';
require get_template_directory() . '/include/left-sidebar.php';

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/woocommerce/include/wc-function.php';
	require get_template_directory() . '/woocommerce/include/wc-categories.php';
	require get_template_directory() . '/include/woocommerce.php';
}
