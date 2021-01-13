<?php
/*
*	Template name: Contact us
*/
get_header();
?>
<section class="page-content">
	<div class="container">
		<div class="row">
			<?php kama_breadcrumbs(); ?>
		</div>
		<div class="row">
			<div class="col-md-3">
					<?php category_mega_menu() ?>
			</div>
			<div class="col-md-9">
				<div class="map-area">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d577336.7640295796!2d36.82512843432724!3d55.58074807310551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCw!5e0!3m2!1sru!2sru!4v1610551923279!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="contact-message">
					<fieldset>
						<?php echo do_shortcode('[contact-form-7 id="158" title="Contact us"]'); ?>
					</fieldset>
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
</section>

<?php
get_footer();