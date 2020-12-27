<?php
if ( !defined('ABSPATH') ) {
	exit;
}

add_action('wp_enqueue_scripts', 'electronic_script');

function electronic_script() {
	wp_enqueue_script( 'electronic-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( defined( 'JETPACK__VERSION' ) ) {
		require get_template_directory() . '/include/jetpack.php';
	}
	wp_enqueue_script('JQuery', get_template_directory_uri() . '/assets/js/jquery-1.11.3.min.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js');
	wp_enqueue_script('JQueryMeanMenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js');
	wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
	wp_enqueue_script('JQueryScrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js');
	wp_enqueue_script('countdon', get_template_directory_uri() . '/assets/js/countdon.min.js');
	wp_enqueue_script('Price', get_template_directory_uri() . '/assets/js/jquery-price-slider.js');
	wp_enqueue_script('Slider', get_template_directory_uri() . '/assets/js/jquery.nivo.slider.js');
	wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js');
	//wp_enqueue_script('imagezoom', get_template_directory_uri() . 'assets/js/imagezoom.js');
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}

add_action('wp_enqueue_scripts', 'electronic_style');

function electronic_style() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/owl.theme.css');
	wp_enqueue_style('transition', get_template_directory_uri() . '/assets/css/owl.transitions.css');
	wp_enqueue_style('Slider', get_template_directory_uri() . '/assets/css/nivo-slider.css');
	wp_enqueue_style('MeanMenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css');
	wp_enqueue_style('JQuery', get_template_directory_uri() . '/assets/css/jquery-ui.css');
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('Main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style( 'electronic-style', get_stylesheet_uri(), array(), _S_VERSION );
}

