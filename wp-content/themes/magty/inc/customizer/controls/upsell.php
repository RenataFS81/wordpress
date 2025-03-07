<?php
/**
 * Custom Customizer Controls.
 *
 * @package Magty
 */

/**
 * Customize Control for upsell.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Control
 */
class Magty_Upsell extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'upsell';

	/**
	 * Displays the control content.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function render_content() {
		?>
		<div>
			<div class="customize-control">
				<h3><?php esc_html_e( 'Need More Features?', 'magty' ); ?> <span>*</span></h3>
				<ul class="theme-features">
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Premium Modules', 'magty' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Extended Typography Options', 'magty' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'More Color Options', 'magty' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Beautiful Dark Mode', 'magty' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'More Header Options', 'magty' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'More Footer Options', 'magty' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'More Blog Layouts', 'magty' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'More Widget Options', 'magty' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Extended Post Formats', 'magty' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Premium Support', 'magty' ); ?></li>
					<li><span class="dashicons dashicons-plus"></span><?php esc_html_e( 'Many More', 'magty' ); ?></li>
				</ul>
				<a href="<?php echo esc_url( 'https://unfoldwp.com/products/magty/?utm_source=wp&utm_medium=customizer&utm_campaign=upgrade' ); ?>" target="_blank" class="button upgrade-now"><?php esc_html_e( 'Upgrade Now', 'magty' ); ?></a>
			</div>
			<div class="customize-control">
				<h3><?php esc_html_e( 'Need Support?', 'magty' ); ?></h3>
				<p><?php esc_html_e( 'If you have any questions related to the theme, feel free to ask us.', 'magty' ); ?></p>
				<a href="<?php echo esc_url( 'https://unfoldwp.com/contact-us/' ); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Contact Us', 'magty' ); ?></a>
			</div>
		</div>
		<?php
	}
}
