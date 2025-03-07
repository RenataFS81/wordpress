<?php
/**
 * Customizer panel for upsell.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Panel
 */
class Magty_Panel_Upsell extends WP_Customize_Panel {
		
	 /**
	 * Control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'magty-panel-upsell';

	/**
	 * An Underscore (JS) template for rendering this panel's container.
	 *
	 * Class variables for this panel class are available in the `data` JS object;
	 * export custom variables by overriding WP_Customize_Panel::json().
	 *
	 * @see WP_Customize_Panel::print_template()
	 *
	 * @since 1.0.0
	 */
	protected function render_template() {
		?>
		<li id="accordion-panel-{{ data.id }}" class="accordion-section control-section control-panel control-panel-{{ data.type }}">
			<h3 class="accordion-section-title" tabindex="0">
				{{ data.title }}
				<span class="screen-reader-text"><?php esc_html_e( 'Press return or enter to open this panel', 'magty' );?></span>
				<span class="magty-pro-badge"><?php echo esc_html__( 'PRO', 'magty' ); ?></span>
				<span class="magty-pro-lock-icon">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pro-lock.svg" loading="lazy" alt="<?php echo esc_attr__( 'Magty Pro', 'magty' ); ?>" />
				</span>
			</h3>
			<ul class="accordion-sub-container control-panel-content"></ul>
		</li>
		<?php
	}
}
