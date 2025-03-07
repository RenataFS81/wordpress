<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Magty
 */

get_header();

global $post;

// Set some query vars to be used on templates.
// Post Style.
$single_post_style = get_post_meta( $post->ID, 'magty_single_post_style', true );
if ( empty( $single_post_style ) ) {
	$single_post_style = get_theme_mod( 'single_post_style', 'single_style_1' );
}
set_query_var( 'single_post_style', $single_post_style );

// Enabled Post Meta.
$enabled_post_meta = magty_get_single_post_metas( $post->ID );
set_query_var( 'enabled_post_meta', $enabled_post_meta );

// Page Layout.
$class = $container_class = '';

$page_layout = magty_get_page_layout();
if ( 'no-sidebar-narrow' != $page_layout ) {
	$class .= ' wide-max-width ';
}
set_query_var( 'page_layout', $page_layout );

$class .= $single_post_style;

// Center Align header meta.
$center_align_header_meta = get_post_meta( get_the_ID(), 'center_align_post_header_meta', true );
if ( '0' == $center_align_header_meta ) {
	$center_align_header_meta = false;
} elseif ( '1' == $center_align_header_meta ) {
	$center_align_header_meta = true;
} else {
	$center_align_header_meta = get_theme_mod( 'center_align_single_header_meta', true );
}
if( $center_align_header_meta ) {
	$container_class .= ' header-meta-center';
}
?>
<main id="site-content" role="main" class="wrapper <?php echo esc_attr( $class ); ?>">

	<div id="primary" class="content-area <?php echo esc_attr( $container_class ); ?>">

		<div class="primary-content-area-wrapper">
			<?php get_template_part( 'template-parts/header/breadcrumb' ); ?>

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', get_post_type() );

				if ( 'post' === get_post_type() ) :

					// Get Author Info & related/Author posts
					$show_author_info   = magty_show_author_info( get_the_ID() );
					$show_author_posts  = magty_show_author_posts( get_the_ID() );

					if ( $show_author_info ) :
						get_template_part( 'template-parts/single/author-info' );
					endif;

					if ( $show_author_posts ) :
						get_template_part( 'template-parts/single/author-posts' );
					endif;

					get_template_part( 'template-parts/navigation' );

				endif;

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				if ( 'post' === get_post_type() ) :

					$show_related_posts = magty_show_related_posts( get_the_ID() );

					if ( $show_related_posts ) :
						get_template_part( 'template-parts/single/related-posts' );
					endif;

				endif;

			endwhile; // End of the loop.
			?>
		</div>
	</div><!--  #primary -->

	<?php
	if ( 'no-sidebar' != $page_layout && 'no-sidebar-narrow' != $page_layout ) :
		get_sidebar();
	endif;
	?>
	
</main> <!-- #site-content -->
<?php
get_footer();
