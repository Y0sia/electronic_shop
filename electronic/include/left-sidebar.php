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

function small_product_area() { ?>
							<div class="small-product-area carosel-navigation">
							<div class="row">
								<div class="col-md-12">
									<div class="area-title">
										<h3 class="title-group gfont-1">Bestseller</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="active-bestseller sidebar">
									<div class="col-xs-12">
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="img/product/small/1.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Various Versions</a></h5>
												<div class="price-box">
													<span class="price">$99.00</span>
													<span class="old-price">$120.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>

									</div>
									<div class="col-xs-12">

									</div>
								</div>
							</div>
						</div>
<?php }
function left_banners() { ?>
			        	<div class="sidebar-banner">
	                    	<div class="active-sidebar-banner">
	                    		<div class="single-sidebar-banner">
	                    			<a href="#"><img src="<?php echo wp_get_attachment_image_url(128, 'full') ?>" alt="Product Banner"></a>
	                    		</div>
	                    		<div class="single-sidebar-banner">
	                    			<a href="#"><img src="<?php echo wp_get_attachment_image_url(127, 'full') ?>" alt="Product Banner"></a>
	                    		</div>
	                    	</div>
	                    </div>
<?php }
function left_posts() {?>
		        		<div class="shop-blog-area sidebar">
	                    	<div class="row">
	                    		<div class="col-md-12">
	                    			<h3 class="title-group border-red gfont-1">RECENT POSTS </h3>
	                    		</div>
	                    	</div>
	                    	<div class="row">
		                    	<div class="active-recent-posts carosel-circle">
		                    		<?php if ( have_posts() ){
		                    			$counter = 0;
												while ( have_posts() && $counter < 4){
													$counter++;
													the_post(); ?>
													<div class="col-xs-12">
			                    		<div class="single-recent-posts">
			                    			<div class="recent-posts-photo">
			                    				<?php echo get_the_post_thumbnail(get_the_ID()); ?>
			                    			</div>
			                    			<div class="recent-posts-text">
			                    				<h5><a href="<?php the_permalink(); ?>" class="recent-posts-title"><?php the_title(); ?></a></h5>
			                    				<span class="recent-posts-date"><?php the_date() ?> | <?php the_author() ?></span>
			                    				<p class="posts-short-brif"><?php echo wp_trim_words( get_the_content(), 20, '...' );?></p>
			                    				<a href="<?php the_permalink(); ?>" class="posts-read-more">Read more ...</a>
			                    			</div>
			                    		</div>
		                    		</div>
		                    			<?php }
		                    		} ?>
		                    	</div>
	                    	</div>
	                    </div>
<?php }