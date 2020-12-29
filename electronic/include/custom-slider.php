<?php
if ( !defined('ABSPATH') ) {
	exit;
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_custom_slider' );
function crb_custom_slider() {
	Container::make( 'theme_options', __( 'Slider', 'electronic' ) )
	  ->add_fields( array(
	    Field::make( 'complex', 'crb_slider', __( 'Slider', 'electronic' ) )
	      ->add_fields( array(
	        Field::make( 'image', 'crb_image', __( 'Slide Image', 'electronic' ) ),
	        Field::make( 'text', 'crb_title', __( 'Slide Title', 'electronic' ) ),
	        Field::make( 'text', 'crb_subtitle', __( 'Slide Subtitle', 'electronic' ) ),
	        Field::make( 'text', 'crb_description', __( 'Slide Description', 'electronic' ) ),
	        Field::make( 'text', 'crb_link', __( 'Slide Link', 'electronic' ) ),
	        Field::make( 'text', 'crb_price', __( 'Slide Price', 'electronic' ) ),
	      ) )
	  ) );
}
function crb_custom_slider_view() {
	$attr = carbon_get_theme_option('crb_slider');
	$counter = 1;
	$counter_temp = 1;
	?><div id="ensign-nivoslider" class="slides"><?php
		foreach($attr as $value) {
			if (!empty($value['crb_image'])) {
				?><img src="<?php echo wp_get_attachment_image_url($value['crb_image'], 'full')?>" alt="Malias" title="#slider-direction-<?php echo $counter?>"/><?php
			}
			$counter++;
		}
		$counter = 1;
		?></div><?php
	foreach($attr as $value) {
		?><div id="slider-direction-<?php echo $counter?>" class="t-lfr slider-direction">
		<div class="slider-progress"></div><?php
		if (!empty($value['crb_title'])){
			?>
				<div class="layer-<?php echo $counter?>-<?php echo $counter_temp?> ">
					<h1 class="title<?php echo $counter_temp?>"><?php echo $value['crb_title'] ?></h1>
				</div><?php
				$counter_temp++;
		}
		if (!empty($value['crb_subtitle'])) {
			?><div class="layer-<?php echo $counter?>-<?php echo $counter_temp?>">
				<p class="title<?php echo $counter_temp?>"><?php echo $value['crb_subtitle'] ?></p>
			</div><?php
			$counter_temp++;
		}
		if (!empty($value['crb_description'])) {
			?><div class="layer-<?php echo $counter?>-<?php echo $counter_temp?>">
				<p class="title<?php echo $counter_temp?>"><?php echo $value['crb_description'] ?></p>
			</div><?php
			$counter_temp++;
		}
		if (!empty($value['crb_price'])) {
			?><div class="layer-<?php echo $counter?>-<?php echo $counter_temp?>">
				<h2 class="title<?php echo $counter_temp?>"><?php echo $value['crb_price'] ?></h2>
			</div><?php
			$counter_temp++;
		}
		if (!empty($value['crb_link'])) {
			?><div class="layer-<?php echo $counter?>-<?php echo $counter_temp?>">
				<a href="#" class="title<?php echo $counter_temp?>"><?php echo $value['crb_link'] ?></a>
			</div><?php
			$counter_temp++;
		}
		?></div><?php
		$counter++;
		$counter_temp = 1;
	}
}
