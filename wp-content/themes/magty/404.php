<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Magty
 */

get_header();
?>

<main id="site-content" role="main">

	<div id="primary" class="content-area">
		
		<div class="wrapper default-max-width">

			<h1 class="archive-title"><?php esc_html_e( 'Something\'s wrong...', 'magty' ); ?></h1>

			<div class="archive-subtitle">
				<p>
					<?php esc_html_e( 'Sorry, we can\'t find the page you are looking for. Maybe try search?', 'magty' ); ?>
				</p>
			</div>

			<?php get_search_form(); ?>

			<div class="page404-btn">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="button text-decoration-none">
					<?php esc_html_e( 'Return to Homepage', 'magty' ); ?>
				</a>
			</div>

		</div>

	</div>

</main><!-- #site-content -->

<?php
get_footer();
