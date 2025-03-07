<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Clinic
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-clinic' ) ) );
		echo esc_html( date( 'Y' ) . ' ' . get_bloginfo( 'name' ) );
		echo esc_html__( '. Powered by', 'bosa-clinic' );
	?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bosa-clinic' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'WordPress', 'bosa-clinic' ) );
		?>
	</a>
</div><!-- .site-info -->