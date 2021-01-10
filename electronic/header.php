<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
    </head>
    <body>
		<!-- HEADER-AREA START -->
		<header class="header-area">
			<!-- HEADER-TOP START -->
			<div class="header-top hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="top-menu">
								<p class="welcome-msg">Welcome!</p>
							</div>
							<!-- Start Top-Link -->
						<?php	wp_nav_menu( [
									'theme_location'  => 'top',
									'menu'            => 'Верхнее меню', 
									'container'       => 'div', 
									'container_class' => 'top-link', 
									'menu_class'      => 'link', 
									'walker'          => new Walker_Nav_Menu_Top(),
								] ); ?>
							<!-- End Top-Link -->
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER-TOP END -->
			<!-- HEADER-MIDDLE START -->
			<div class="header-middle">
				<div class="container">
					<!-- Start Support-Client -->
					<div class="support-client hidden-xs">
						<div class="row">
							<!-- Start Single-Support -->
							<div class="col-md-3 hidden-sm">
								<div class="single-support">
									<div class="support-content">
										<i class="fa fa-clock-o"></i>
										<div class="support-text">
											<h1 class="zero gfont-1">working time</h1>
											<p>Mon- Sun: 8.00 - 18.00</p>
										</div>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-truck"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Free shipping</h1>
										<p>On order over $199</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-money"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Money back 100%</h1>
										<p>Within 30 Days after delivery</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-phone-square"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Phone: 0123456789</h1>
										<p>Order Online Now !</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
						</div>
					</div>
					<!-- End Support-Client -->
					<!-- Start logo & Search Box -->
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="logo">
								<?php the_custom_logo( 12 ); ?>
							</div>
						</div>
						<div class="col-md-9 col-sm-12">
		                    <div class="quick-access">
		                    	<div class="search-by-category">
		                    		<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
			                    		<div class="search-container">
				                    		<?php category_search() ?>
			                    		</div>
		                    		<div class="header-search">
			                    			<input type="text" placeholder="Search" value="<?php get_search_query() ?>" name="s">
			                    			<button type="submit"><i class="fa fa-search"></i></button>
		                    			<div class="header-result"></div>
		                    		</div>
		                    	</form>
		                    	</div>
		                    	<div class="top-cart">
		                    		<ul>
		                    			<li>
			                    			<a href="<?php echo WC()->cart->get_cart_url() ?>">
			                    				<span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
			                    				<span class="cart-total">
			                    					<span class="cart-title">shopping cart</span>
				                    				<span class="cart-item"><?php echo WC()->cart->cart_contents_count ?> item(s)- </span>
				                    				<span class="top-cart-price">$<?php echo total_price() ?></span>
			                    				</span>
			                    			</a>
											<div class="mini-cart-content">
						<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
													$product = wc_get_product($cart_item['product_id']);
													$quantity = $cart_item['quantity'];
													//get_pr($cart_item['product_id'], false);
													//get_pr($product->sku, false); ?>

												<div class="cart-img-details">
													<div class="cart-img-photo">
												<a href="#"><?php echo get_the_post_thumbnail($cart_item['product_id']) ?></a>
													</div>
													<div class="cart-img-content">
														<a href="<?php echo $product->permalink ?>"><h4><?php echo $product->name ?></h4></a>
														<span>
															<strong class="text-right"><?php echo $quantity?> x</strong>
															<strong class="cart-price text-right">$<?php echo $product->price?></strong>
														</span>
													</div>
													<div class="pro-del">
														<a href="<?php echo wc_get_cart_remove_url( $cart_item_key ) ?>" data-product_id="<?php echo $cart_item['product_id']?>" data-cart_item_key="<?php echo $cart_item_key ?>" data-product_sku="<?php echo $product->sku ?>"><i class="fa fa-times"></i></a>
													</div>
												</div>
									<?php }?>
												<div class="clear"></div>
												<div class="cart-inner-bottom">
													<span class="total">
														Total:
														<span class="amount">$<?php echo total_price() ?></span>
													</span>
													<span class="cart-button-top">
														<a href="<?php echo WC()->cart->get_cart_url() ?>">View Cart</a>
														<a href="<?php echo WC()->cart->get_checkout_url() ?>">Checkout</a>
													</span>
												</div>
											</div>
		                    			</li>
		                    		</ul>
		                    	</div>
		                    </div>
		                </div>
					</div>
					<!-- End logo & Search Box -->
				</div> 
			</div>
			<!-- HEADER-MIDDLE END -->
			<!-- START MAINMENU-AREA -->
			<div class="mainmenu-area <?php if(!is_front_page()) echo 'shop-page'; ?>">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mainmenu hidden-sm hidden-xs">
								<?php	wp_nav_menu( [
									'theme_location'  => 'main',
									'menu'            => 'Главное меню', 
									'container'       => 'nav',
									'walker'				=> new Walker_Nav_Menu_Main(), 
								] ); ?>
						</div>
					</div>
				</div>
			</div>
			<!-- End Mobile-menu -->
		</header>
