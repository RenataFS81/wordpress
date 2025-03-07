<?php
/**
 * Displays progressbar
 *
 * @package Magty
 */

$progressbar_position = get_theme_mod( 'progressbar_position', 'bottom' );
?>
<div id="magty-progress-bar" class="<?php echo esc_attr( $progressbar_position ); ?>"></div>