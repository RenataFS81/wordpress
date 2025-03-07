<?php
/**
 * Displays after home page posts widget area.
 *
 * @package Magty
 */

if ( is_active_sidebar( 'home-after-posts-widget-area' ) ) :

	$widget_style  = ' uf-wa-widget-' . get_theme_mod( 'after_home_posts_widgets_style', 'style_1' );
	$heading_style = ' saga-title-style-' . get_theme_mod( 'after_home_posts_widgetarea_heading_style', 'style_1' );
	$heading_align = ' saga-title-align-' . get_theme_mod( 'after_home_posts_widgetarea_heading_align', 'left' );
	$class         = $widget_style . $heading_style . $heading_align;
	$class         = apply_filters( 'after_home_posts_widgetarea_wrapper_class', $class );
	?>
	<div class="home-page-widget-region after-posts general-widget-area <?php echo esc_attr( $class ); ?>" role="complementary">
		<?php do_action( 'after_home_posts_widgetarea_top' ); ?>
		<?php dynamic_sidebar( 'home-after-posts-widget-area' ); ?>
		<?php do_action( 'after_home_posts_widgetarea_bottom' ); ?>
	</div>
	<?php

endif;
