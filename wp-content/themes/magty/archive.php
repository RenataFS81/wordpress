<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magty
 */

get_header();

$page_layout = magty_get_page_layout();

$archive_style = get_theme_mod( 'archive_style', 'archive_style_1' );
set_query_var( 'archive_style', $archive_style );

if ( 'no-sidebar-narrow' == $page_layout ) {
	$class = ' default-max-width';
} else {
	$class = ' wide-max-width';
}

$archive_wrapper = $archive_style;
?>
<main id="site-content" role="main" class="wrapper<?php echo esc_attr( $class ); ?>">

	<div id="primary" class="content-area" data-template="<?php echo esc_attr( $archive_style ); ?>">

		<div class="primary-content-area-wrapper">

			<?php get_template_part( 'template-parts/header/breadcrumb' ); ?>
			
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php

				echo '<div class="magty-posts-lists magty-' . esc_attr( $archive_wrapper ) . '">';

				get_template_part( 'template-parts/archive/styles/' . $archive_style );

				echo '</div><!-- .magty-posts-lists -->';

				get_template_part( 'template-parts/pagination' );

			else :

				get_template_part( 'template-parts/content/content', 'none' );

			endif;
			?>

		</div>

	</div><!-- #primary -->

	<?php
	if ( 'no-sidebar' != $page_layout && 'no-sidebar-narrow' != $page_layout ) {
		get_sidebar();
	}
	?>

</main><!-- #site-content-->
<?php
get_footer();
