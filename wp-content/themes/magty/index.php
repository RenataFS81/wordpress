<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magty
 */

get_header();

$page_layout = magty_get_page_layout();

$archive_style = get_theme_mod( 'archive_style', 'archive_style_1' );
set_query_var( 'archive_style', $archive_style );

if ( ! is_paged() && is_front_page() ) {
	get_template_part( 'template-parts/home/home-before-columns' );
	get_template_part( 'template-parts/home/home-columns' );
	get_template_part( 'template-parts/home/before-home' );
}

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

			<?php
			if ( ! is_paged() && is_front_page() ) {
				get_template_part( 'template-parts/home/home-before-posts-widgets' );
			}
			?>

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				if ( ! is_paged() && is_front_page() ) :
					if ( get_theme_mod( 'enable_home_title' ) ) :
						$home_title_heading_style = get_theme_mod( 'home_title_heading_style', 'style_1' );
						$home_title_heading_align = get_theme_mod( 'home_title_heading_align', 'left' );
						?>
						<div class="saga-section-title">
							<div class="saga-element-header <?php echo esc_attr( $home_title_heading_style ); ?> saga-title-align-<?php echo esc_attr( $home_title_heading_align ); ?>">
								<div class="saga-element-title-wrapper">
									<h2 class="saga-element-title">
										<span><?php echo esc_html( get_theme_mod( 'front_page_content_title' ) ); ?></span>
									</h2>
								</div>
							</div>
						</div>
						<?php
					endif;
				endif;

				echo '<div id="magty-post-lists-wrapper" class="magty-posts-lists magty-' . esc_attr( $archive_wrapper ) . '">';
			
				get_template_part( 'template-parts/archive/styles/' . $archive_style );

				echo '</div><!-- .magty-posts-lists -->';

				get_template_part( 'template-parts/pagination' );

			else :

				get_template_part( 'template-parts/content/content', 'none' );

			endif;
			?>

			<?php
			if ( ! is_paged() && is_front_page() ) {
				get_template_part( 'template-parts/home/home-after-posts-widgets' );
			}
			?>
			
		</div>

	</div> <!-- #primary -->

	<?php
	if ( 'no-sidebar' != $page_layout && 'no-sidebar-narrow' != $page_layout ) {
		get_sidebar();
	}
	?>
	
</main> <!-- #site-content-->
<?php

if ( ! is_paged() && is_front_page() ) {
	get_template_part( 'template-parts/home/after-home' );
}
get_footer();
