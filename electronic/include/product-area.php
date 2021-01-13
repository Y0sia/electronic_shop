<?php
if ( !defined('ABSPATH') ) {
	exit;
}
function product_area($title, $color = "") { 
		$categories = array();
		$categories = woocommerce_category($title); ?>
        <div class="product-area">
				<div class="row">
					<div class="col-xs-12 col-md-12">
									<!-- Start Product-Menu -->
									<div class="product-menu <?php echo $color; ?>">
										<div class="product-title">
											<h3 class="title-group-2 gfont-1"><?php echo $title ?></h3>
										</div>
										
										<ul role="tablist">
											<?php for($i=0;$i<count($categories);$i++) { ?>
										    <li role="presentation" class=" <?php if ($i == 0) echo 'active'; ?>"><a href="#display-1-<?php echo ($i+1) ?>" role="tab" data-toggle="tab"><?php echo $categories[$i] ?></a></li>
										 <?php } ?>
										</ul>
									</div>
								</div>
							</div> 
							<!-- End Product-Menu -->
							<div class="clear"></div>
							<!-- Start Product -->
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="product carosel-navigation">
										<div class="tab-content">
										<?php for($i=0;$i<count($categories);$i++) { 
													$args = array( 'post_type' => 'product', 'posts_per_page' => 8, 'product_cat' => $categories[$i]);
       											$loop = new WP_Query( $args ); ?>
											<!-- Product = display-1-1 -->
											<div role="tabpanel" class="tab-pane fade<?php if($i == 0) echo 'in active'; ?>" id="display-1-<?php echo ($i+1) ?>">
												<div class="row">
													<div class="active-product-carosel">
											      <?php while ( $loop->have_posts() ) {
											         	$loop->the_post();
											         	$product = wc_get_product($loop->post->ID);
											         	//get_pr($loop->post, false); ?>
														<!-- Start Single-Product -->
														<div class="col-xs-12">
															<div class="single-product">
																<?php if(has_term( 'new', 'product_cat', $loop->post->ID )) { ?>
																<div class="label_new">
																	<span class="new"><?php echo "new" ?></span>
																</div>
															<?php } ?>
																<?php if($product->sale_price) { 
																	$sale = round(((1-($product->sale_price / $product->regular_price))*100))?>
																<div class="sale-off">
																	<span class="sale-percent">-<?php echo $sale; echo '%';?></span>
																</div>
															<?php } ?>
																<div class="product-img">
																	<a href="<?php echo get_permalink()?>">
																		<?php  echo get_the_post_thumbnail($loop->post->ID) ?>
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="#"><?php echo $loop->post->post_title ?></a></h5>
																	<div class="price-box">
																		<span class="price">$<?php echo $product->price;
																		if(!strripos($product->price, '.')) echo '.00';?></span>
																		<?php if($product->sale_price) { ?>
																		<span class="old-price">$<?php echo $product->regular_price;
																		if(!strripos($product->regular_price, '.')) echo '.00'; ?></span>
																	<?php } ?>
																	</div>
				<?php $rating_count = $product->get_rating_count();
						$average      = $product->get_average_rating();
						$html  = '<div class="star-rating" role="img" aria-label="">' . wc_get_star_rating_html( $average, $rating_count ) . '</div>'; ?>

														<span class="rating">
																<?php echo $html; ?>
														</span>
																</div>
																<div class="product-action">
																	<div class="button-group">
																		<div class="product-button">
																			<?php simple_button($product) ?>
																		</div>
																		<div class="product-button-2">
																			<?php echo do_shortcode('[ti_wishlists_addtowishlist]'); ?>
																		</div>
																	</div>
																</div>												
															</div>
														</div>
														<?php } ?>
													
													</div>
												</div>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>
							</div>
					</div>
<?php }