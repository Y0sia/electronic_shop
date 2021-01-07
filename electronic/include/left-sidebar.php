<?php
if ( !defined('ABSPATH') ) {
	exit;
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_custom_hot_deals' );
function crb_custom_hot_deals() {
	Container::make( 'theme_options', __( 'Hot_deals', 'electronic' ) )
	  ->add_fields( array(
	    Field::make( 'complex', 'crb_hot_deals', __( 'Hot_deals', 'electronic' ) )
	      ->add_fields( array(
	        Field::make( 'image', 'crb_hot_image', __( 'Slide Image', 'electronic' ) ),
	        Field::make( 'text', 'crb_title', __( 'Slide Title', 'electronic' ) ),
	        Field::make( 'text', 'crb_subtitle', __( 'Slide Subtitle', 'electronic' ) ),
	        Field::make( 'text', 'crb_description', __( 'Slide Description', 'electronic' ) ),
	        Field::make( 'text', 'crb_link', __( 'Slide Link', 'electronic' ) ),
	        Field::make( 'text', 'crb_price', __( 'Slide Price', 'electronic' ) ),
	      ) )
	  ) );
}

function hot_deals_area() { ?>
	<div class="hot-deals-area carosel-circle">
	            			<div class="row">
								<div class="col-md-12">
									<div class="area-title">
										<h3 class="title-group border-red gfont-1">Hot Deals</h3>
									</div>
								</div>
							</div>
	                    	<div class="row">
		                    	<div class="active-hot-deals">
		                    		<!-- Start Single-hot-deals -->
		                    		<div class="col-xs-12">
			                    		<div class="single-hot-deals">
			                    			<div class="hot-deals-photo">
			                    				<a href="#"><img src="img/hot-deals/1.jpg" alt="Product"></a>
			                    			</div>
			                    			<div class="count-down">
							                    <div class="timer">
							                        <div data-countdown="2017/12/31"></div>
								                </div> 
			                    			</div>
			                   <div class="hot-deals-text">
				                    <h5><a href="#" class="name-group">Various Versions</a></h5>
				                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
			                   <div class="price-box">
				                   <span class="price gfont-2">$99.00</span>
				                   <span class="old-price gfont-2">$110.00</span>
			                  </div>
			                </div>
			            </div>
		            </div>
		        </div>
	         </div>
	     </div>
<?php }