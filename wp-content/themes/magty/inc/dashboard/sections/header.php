<?php
/**
 * Theme Dashboard Header
 *
 * @package Magty
 */

?>
<div class="magty-dashboard-header" >
	<div class="header-nav-wrapper">
		<div class="header-tabs-wrapper">
			<?php

			$num = 0;

			$section = ( isset( $_GET['section'] ) ) ? sanitize_text_field( wp_unslash( $_GET['section'] ) ) : '';
			foreach ( $this->tab_sections as $tab_key => $tab_title ) {

				$tab_link   = add_query_arg(
					array(
						'page'    => $this->page_slug,
						'section' => $tab_key,
					),
					admin_url( 'themes.php' )
				);
				$tab_active = ( ( $section && $section === $tab_key ) || ( ! $section && $num === 0 ) ) ? 'active' : '';

				echo sprintf( '<a href="%s" class="magty-dashboard-nav-tab %s">%s</a>', esc_url( $tab_link ), esc_attr( $tab_active ), esc_html( $tab_title ) );

				$num++;
			}
			?>
		</div>
	</div>
</div>
