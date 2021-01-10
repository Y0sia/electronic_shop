<?php
/*
* Template name: Без сайдбара
*/

get_header();
?>
	<section class="page-content">
		<div class="container">
				<div class="row">
						<?php kama_breadcrumbs(); ?>
				</div>
				<div class="col-md-3">
						<?php category_mega_menu() ?>
				</div>
				<div class="col-md-9">
						<!-- START PRODUCT-BANNER -->
						<div class="product-banner">
							<div class="row">
								<div class="col-xs-12">
									<div class="banner">
										<a href="#"><img src="<?php echo wp_get_attachment_image_url('139', 'full')?>" alt="Product Banner"></a>
									</div>
								</div>
							</div>
						</div>
					

					<?php while( have_posts() ) : the_post(); ?>
					<?php if(is_cart()) echo '<div class="shopping-cart">'; ?>
					<?php if(is_checkout()) echo '<div class="checkout-area">'; ?>
						<div class="row">
							<div class="col-md-12">
								<div class="cart-title">
									<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
								</div><!-- .entry-header -->
							<?php electronic_post_thumbnail(); ?>

							<div class="entry-content">
								<?php
								the_content();
								?>
							</div><!-- .entry-content -->
						</div>
					</div>
					<?php if(is_cart() || is_checkout()) echo '</div>'; ?>
					<?php endwhile; ?>
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
	</section>

<?php
get_footer();
