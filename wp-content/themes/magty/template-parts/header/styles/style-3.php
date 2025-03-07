<?php

if ( get_theme_mod( 'enable_top_bar', true ) ) :
	get_template_part( 'template-parts/header/top-bar' );
endif;

$class  = magty_get_sticky_menu();
$class .= magty_get_sub_menu_style();

$border_class = magty_get_menu_bar_border();
?>
<div class="site-header-row-wrapper magty-primary-bar-row<?php echo esc_attr( $class ); ?>">
	<div class="primary-bar-row-wrapper">
		<div class="uf-wrapper">
			<div class="magty-primary-bar-wrapper <?php echo esc_attr( $border_class ); ?>">
				<div class="saga-items items-left">
					<?php
					magty_primary_bar_offcanvas();
					magty_primary_bar_menu();
					?>
				</div>
				<div class="saga-items items-center centered has-text-align-center">
					<?php get_template_part( 'template-parts/header/site-branding' );?>
				</div>
				<div class="saga-items items-right">
					<div class="secondary-navigation magty-secondary-nav">
					<?php do_action( 'magty_secondary_nav_items' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>