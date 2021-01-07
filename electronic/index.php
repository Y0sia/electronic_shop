<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Electronic
 */

get_header();
?>
	<div class="category-slider-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<?php category_mega_menu() ?>
					</div>
						<div class="col-md-9">
							<div class="slider-area">
								<div class="bend niceties preview-1">
									<?php crb_custom_slider_view() ?>
								</div>
							</div>
						</div>
	         </div>
			</div>
		</div>
<section class="page-content">
<div class = "container">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			 <!-- START HOT-DEALS-AREA -->
	            <?php hot_deals_area() ?>
	        <!-- END HOT-DEALS-AREA -->
		</div>
		<div class="col-md-9 col-sm-9">
			<div class="product-banner home1-banner">
									<div class="row">
										<div class="col-md-7 banner-box1">
											<div class="single-product-banner">
												<a href="#"><img src="<?php echo wp_get_attachment_image_url( 123, 'full' ) ?>" alt="Product Banner"></a>
												<div class="banner-text banner-1">
													<h2>head phone 2015</h2>
												</div>
											</div>
										</div>
										<div class="col-md-5 banner-box2">
											<div class="single-product-banner">
												<a href="#"><img src="<?php echo wp_get_attachment_image_url( 125, ' full' ) ?>" alt="Product Banner"></a>
												<div class="banner-text banner-2">
													<h2>Deals <span>50%</span></h2>
													<p>lumina n85</p>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
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
				<div class="subscribe-area">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-7 col-xs-12">
								<label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
								<div class="subscribe">
									<form action="#">
										<input type="text" placeholder="Enter Your E-mail">
										<button type="submit">Subscribe</button>
									</form>
								</div>
							</div>
							<div class="col-md-4 col-sm-5 col-xs-12">
								<div class="social-media">
									<a href="#"><i class="fa fa-facebook fb"></i></a>
									<a href="#"><i class="fa fa-google-plus gp"></i></a>
									<a href="#"><i class="fa fa-twitter tt"></i></a>
									<a href="#"><i class="fa fa-youtube yt"></i></a>
									<a href="#"><i class="fa fa-linkedin li"></i></a>
									<a href="#"><i class="fa fa-rss rs"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>	
			<!-- END SUBSCRIBE-AREA -->
		</div>
</div>
</section>
<?php
get_footer();
