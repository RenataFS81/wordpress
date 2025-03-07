<?php
/**
 * Displays the site navigation.
 *
 * @package Magty
 */

$class     = magty_get_sticky_menu();
$class    .= magty_get_sub_menu_style();

$border_class = magty_get_menu_bar_border();
?>
<div class="site-header-row-wrapper magty-primary-bar-row<?php echo esc_attr( $class ); ?>">
	<div class="primary-bar-row-wrapper">
		<div class="uf-wrapper">
			<div class="magty-primary-bar-wrapper <?php echo esc_attr( $border_class ); ?>">

				<?php do_action( 'magty_primary_nav_items' ); ?>

				<div class="secondary-navigation magty-secondary-nav">
					<?php do_action( 'magty_secondary_nav_items' ); ?>
				</div>

			</div>
		</div>
	</div>
</div>