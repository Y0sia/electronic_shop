<?php
if ( !defined('ABSPATH') ) {
	exit;
}

add_action('wp_enqueue_scripts', 'electronic_fonts');

function electronic_fonts() {
	wp_register_style('Google-Raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,600');
	wp_register_style('Google-Roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,700');
	wp_enqueue_style('Google-Raleway');
	wp_enqueue_style('Google-Roboto');
}

