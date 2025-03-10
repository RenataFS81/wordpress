<div class="bottom-footer">
	<div class="container">
		<!-- social links area -->
		<?php if( !get_theme_mod( 'bosa_clinic_disable_footer_social_links', false ) && bosa_clinic_has_social() ){
			echo '<div class="social-profile">';
				bosa_clinic_social();
			echo '</div>'; 
		} ?> <!-- social links area -->
		<?php get_template_part( 'template-parts/site', 'info' ); ?>
		<?php if ( has_nav_menu( 'menu-2' ) && !get_theme_mod( 'bosa_clinic_disable_footer_menu', false )){ ?>
			<div class="footer-menu"><!-- Footer Menu-->
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
					'depth'          => 1,
				) );
				?>
			</div><!-- footer Menu-->
		<?php } ?>
		<?php bosa_clinic_footer_image(); ?>
	</div> 
</div>

