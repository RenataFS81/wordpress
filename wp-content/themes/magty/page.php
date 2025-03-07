<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magty
 */

get_header();

$class = $container_class = '';
$page_layout = magty_get_page_layout();
if ( 'no-sidebar-narrow' != $page_layout ) {
	$class = ' wide-max-width';
}
set_query_var( 'page_layout', $page_layout );

// Center Align header meta.
if( get_post_meta( get_the_ID(), 'center_align_page_header_meta', true ) ) {
	$container_class .= ' header-meta-center';
}
?>
<main id="site-content" role="main" class="wrapper <?php echo esc_attr( $class ); ?>">

	<div id="primary" class="content-area <?php echo esc_attr( $container_class ); ?>">

		<div class="primary-content-area-wrapper">

			<?php
			$disable_page_breadcrumb = get_post_meta( get_the_ID(), 'magty_disable_page_breadcrumb', true );
			if ( ! $disable_page_breadcrumb ) :
				?>
				<?php get_template_part( 'template-parts/header/breadcrumb' ); ?>
			<?php endif; ?>

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
		</div>

	</div><!-- .#primary -->

	<?php
	if ( 'no-sidebar' != $page_layout && 'no-sidebar-narrow' != $page_layout ) :
		get_sidebar();
	endif;
	?>

</main><!-- #site-content -->

<?php
get_footer();
