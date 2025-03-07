<?php
/**
 * Displays before footer no container widget area.
 *
 * @package Magty
 */

if ( is_active_sidebar( 'before-footer-widgetarea-nc' ) ) :

	$heading_style = ' saga-title-style-' . get_theme_mod( 'above_footer_nc_widgetarea_heading_style', 'style_1' );
	$heading_align = ' saga-title-align-' . get_theme_mod( 'above_footer_nc_widgetarea_heading_align', 'left' );
	$class         = $heading_style . $heading_align;
	$class         = apply_filters( 'above_footer_nc_widgetarea_wrapper_class', $class );
	?>
	<div class="before-footer-nc-widget-region magty-full-width-section nc-widget-area full-max-width <?php echo esc_attr( $class ); ?>" role="complementary">
		<?php do_action( 'above_footer_nc_widgetarea_top' ); ?>
		<?php dynamic_sidebar( 'before-footer-widgetarea-nc' ); ?>
		<?php do_action( 'above_footer_nc_widgetarea_bottom' ); ?>
	</div>
	<?php

endif;
