<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Electronic
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
		<section class="error-404 not-found">
			<div class="page-header">
				<h1 class="page-title" style="text-align: center;"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'electronic' ); ?></h1>
			</div><!-- .page-header -->
			<div class="button_return">
				<a href="<?php echo esc_url(home_url('/')) ?>" style="font-size: 24px; color: #000;">Back to home..</a>
			</div>
		</section><!-- .error-404 -->
		</div>
	</main><!-- #main -->

<?php
get_footer();
