<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Magty
 */

get_header();

global $wp_query;

$page_layout   = magty_get_page_layout();
if( 'no-sidebar-narrow' == $page_layout ) {
	$class = ' default-max-width';
} else {
	$class = ' wide-max-width';
}

$archive_title = sprintf(
	'%1$s %2$s',
	'<span class="archive-title-prefix">' . __( 'You searched for', 'magty' ) . '</span>',
	get_search_query()
);
?>

<main id="site-content" role="main" class="wrapper<?php echo esc_attr( $class ); ?>">

	<div id="primary" class="content-area" data-template="archive_style_1">

		<div class="primary-content-area-wrapper">

				<?php if ( have_posts() ) : ?>

					<header class="archive-header">
						<h1 class="archive-title">
							<?php echo wp_kses_post( $archive_title ); ?>
						</h1>
					</header><!-- .page-header -->

					<?php

					echo '<div class="magty-posts-lists">';

					get_template_part( 'template-parts/content/content', 'search' );

					echo '</div><!-- .magty-posts-lists -->';

					get_template_part( 'template-parts/pagination' );

				else :

					?>
					<header class="archive-header">
						<h1 class="archive-title">
							<?php echo wp_kses_post( $archive_title ); ?>
						</h1>
						<div class="archive-subtitle"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'magty' ); ?></div>
					</header><!-- .page-header -->

					<div class="no-search-results-form">
						<?php
						get_search_form(
							array(
								'aria_label' => __( 'search again', 'magty' ),
							)
						);
						?>
					</div><!-- .no-search-results -->
					
					<?php

				endif;
				?>

		</div>
	</div> <!-- #primary -->

	<?php
	if ( 'no-sidebar' != $page_layout && 'no-sidebar-narrow' != $page_layout ) :
		get_sidebar();
	endif;
	?>

</main> <!-- #site-content -->

<?php
get_footer();