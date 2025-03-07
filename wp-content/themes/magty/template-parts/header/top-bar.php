<?php
$class = $border_class = '';

$hide_top_bar_mobile = get_theme_mod( 'hide_top_bar_mobile', true );
if ( $hide_top_bar_mobile ) {
	$class .= ' hide-on-mobile';
}
$enable_topbar_border_bottom = get_theme_mod( 'enable_topbar_border_bottom', true );
if ( $enable_topbar_border_bottom ) {
	$class .= ' saga-item-border-bottom';
}
$stack_top_bar_col_responsive = get_theme_mod( 'stack_top_bar_col_responsive' );
if ( $stack_top_bar_col_responsive ) {
	$class .= ' saga-stack-column';
}

// Inverted.
if ( 'dark' == get_theme_mod( 'top_bar_theme', 'dark' ) ) {
	$class .= ' saga-block-inverted-color';
}
?>
<div class="site-header-row-wrapper magty-topbar-row <?php echo esc_attr( $class ); ?>">
	<div class="uf-wrapper">
		<div class="magty-topbar-wrapper">
			<div class="magty-topbar-first">
				<?php do_action( 'magty_topbar_first_col_items' ); ?>
			</div>
			<div class="magty-topbar-last">
				<?php do_action( 'magty_topbar_last_col_items' ); ?>
			</div>
		</div> 
	</div>
</div>
