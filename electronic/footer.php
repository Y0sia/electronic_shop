		<footer class="footer-area">
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="footer-title">
								<h5>My Account</h5>
							</div>
							<?php	wp_nav_menu( [
									'theme_location'  => 'my_account_footer',
									'menu'            => 'Мой аккаунт подвал', 
									'container'       => 'nav', 
									'menu_class'      => 'footer-content', 
								] ); ?>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="footer-title">
								<h5>Customer Service</h5>
							</div>
							<?php	wp_nav_menu( [
									'theme_location'  => 'customer_service_footer',
									'menu'            => 'Обслуживание клиентов подвал', 
									'container'       => 'nav', 
									'menu_class'      => 'footer-content', 
								] ); ?>
						</div>
						<div class="col-xs-12 hidden-sm col-md-3">
							<div class="footer-title">
								<h5>Payment & Shipping</h5>
							</div>
								<?php	wp_nav_menu( [
									'theme_location'  => 'payment_shipping_footer_1',
									'menu'            => 'Оплата-Доставка подвал #1', 
									'container'       => 'nav', 
									'menu_class'      => 'footer-content', 
								] ); ?>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="footer-title">
								<h5>Payment & Shipping</h5>
							</div>
							<nav>
								<ul class="footer-content box-information">
									<li>
										<i class="fa fa-home"></i><span>Towerthemes, 1234 Stret Lorem, LPA States, Libero</span>
									</li>
									<li>
										<i class="fa fa-envelope-o"></i><p><a href="contact.html">admin@bootexperts.com</a></p>
									</li>
									<li>
										<i class="fa fa-phone"></i>
										<span>01234-56789</span> <br> <span> 01234-56789</span>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>				
			</div>
			<!-- Footer End -->
			<!-- Copyright-area Start -->
			<div class="copyright-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="copyright">
								<p>Copyright &copy; Взято с <a href="http://bayguzin.ru" target="_blank"> bayguzin.ru</a> All rights reserved.</p>
								<div class="payment">
									<a href="#"><img src="<?php echo wp_get_attachment_image_url( 56, 'full' )?>" alt="Payment"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
<?php wp_footer(); ?>

</body>
</html>
