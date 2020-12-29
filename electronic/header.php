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
								<!-- Start Language -->
								<ul class="language">
									<li><a href="#"><img class="right-5" src="img/flags/gb.png" alt="#">English<i class="fa fa-caret-down left-5"></i></a>
										<ul>
											<li><a href="#"><img class="right-5" src="img/flags/fr.png" alt="#">French</a></li>
											<li><a href="#"><img class="right-5" src="img/flags/gb.png" alt="#">English</a></li>
											<li><a href="#"><img class="right-5" src="img/flags/gb.png" alt="#">English</a></li>
										</ul>
									</li>
								</ul>
								<!-- End Language -->
								<!-- Start Currency -->
								<ul class="currency">
									<li><a href="#"><strong>$</strong> USD<i class="fa fa-caret-down left-5"></i></a>
										<ul>
											<li><a href="#">$ EUR</a></li>
											<li><a href="#">$ GBP</a></li>
											<li><a href="#">$ USD</a></li>
										</ul>
									</li>
								</ul>
								<!-- End Currency -->
								<p class="welcome-msg">Default welcome msg!</p>
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
		                    		<div class="search-container">
			                    		<?php category_search() ?>
		                    		</div>
		                    		<div class="header-search">
		                    			<form action="#">
			                    			<input type="text" placeholder="Search">
			                    			<button type="submit"><i class="fa fa-search"></i></button>
		                    			</form>
		                    		</div>
		                    	</div>
		                    	<div class="top-cart">
		                    		<ul>
		                    			<li>
			                    			<a href="cart.html">
			                    				<span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
			                    				<span class="cart-total">
			                    					<span class="cart-title">shopping cart</span>
				                    				<span class="cart-item">2 item(s)- </span>
				                    				<span class="top-cart-price">$365.00</span>
			                    				</span>
			                    			</a>
											<div class="mini-cart-content">
												<div class="cart-img-details">
													<div class="cart-img-photo">
														<a href="#"><img src="img/product/total-cart.jpg" alt="#"></a>
													</div>
													<div class="cart-img-content">
														<a href="#"><h4>Prod Aldults</h4></a>
														<span>
															<strong class="text-right">1 x</strong>
															<strong class="cart-price text-right">$180.00</strong>
														</span>
													</div>
													<div class="pro-del">
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div>
												<div class="clear"></div>
												<div class="cart-img-details">
													<div class="cart-img-photo">
														<a href="#"><img src="img/product/total-cart2.jpg" alt="#"></a>
													</div>
													<div class="cart-img-content">
														<a href="#"><h4>Fact Prone</h4></a>
														<span>
															<strong class="text-right">1 x</strong>
															<strong class="cart-price text-right">$185.00</strong>
														</span>
													</div>
													<div class="pro-del">
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div>
												<div class="cart-inner-bottom">
													<span class="total">
														Total:
														<span class="amount">$550.00</span>
													</span>
													<span class="cart-button-top">
														<a href="cart.html">View Cart</a>
														<a href="checkout.html">Checkout</a>
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
			<div class="mainmenu-area">
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
