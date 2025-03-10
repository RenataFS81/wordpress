<?php
/**
 * Template part for displaying site branding.
 *
 * @since Bosa Clinic 1.0.0
 */

?>

<div class="site-branding">
	<?php
		if( ( is_front_page() || ( !get_theme_mod( 'bosa_clinic_disable_transparent_header_post', true ) && is_single() ) || ( !get_theme_mod( 'bosa_clinic_disable_transparent_header_page', true ) && is_page() ) ) && get_theme_mod( 'bosa_clinic_header_layout', 'header_one' ) == 'header_two' && get_theme_mod( 'bosa_clinic_header_separate_logo', '' ) ){ ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'bosa_clinic_header_separate_logo', '' ) ) ); ?>" id="headerLogo">
			</a>
		<?php
		} else{
			$bosa_clinic_the_custom_logo_url = bosa_clinic_get_custom_logo_url();
			if ( $bosa_clinic_the_custom_logo_url !== '' || get_theme_mod( 'bosa_clinic_fixed_header_separate_logo', '' ) ) {
	?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo esc_url(  $bosa_clinic_the_custom_logo_url ); ?>" id="headerLogo">
				</a>
	<?php
			}	
		}
		if( !get_theme_mod( 'bosa_clinic_disable_site_title', false ) ){
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
		}
		$bosa_clinic_description = get_bloginfo( 'description', 'display' );
		if( !get_theme_mod( 'bosa_clinic_disable_site_tagline', false ) ){
			if ( $bosa_clinic_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo esc_html( $bosa_clinic_description ); ?></p>
			<?php endif;
		}
	?>
</div><!-- .site-branding -->