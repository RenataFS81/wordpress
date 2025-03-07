<?php
/**
 * Custom Customizer Controls.
 *
 * @package Magty
 */

/**
 * Customize Control for Heading.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Control
 */
class Magty_Heading_Control extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'heading-control';

	/**
	 * Displays the control content.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function render_content() {
		?>
		<?php if ( ! empty( $this->label ) ) : ?>
			<h3 class="customize-control-title"><?php echo esc_html( $this->label ); ?></h3>
		<?php endif; ?>
		<?php if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
		<?php endif; ?>
		<?php
	}
}