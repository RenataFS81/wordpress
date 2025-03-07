<?php
/**
 * Custom Customizer Controls.
 *
 * @package Magty
 */

/**
 * Customize Control for Radio Image.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Control
 */
class Magty_Radio_Image_Control extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'radio-image';

	/**
	 * Render content.
	 *
	 * @since 1.0.0
	 */
	public function render_content() {
		if ( empty( $this->choices ) ) {
			return;
		}

		$name = '_customize-radio-' . $this->id;
		?>

		<span class="customize-control-title">
			<?php echo esc_attr( $this->label ); ?>
		</span>

		<?php if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
		<?php endif; ?>

		<div id="input_<?php echo esc_attr( $this->id ); ?>" class="radio-image-wrapper">
			<?php foreach ( $this->choices as $value => $option ) : ?>
				<input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" id="<?php echo esc_attr( $this->id . $value ); ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value );?>>
				<label for="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>">
					<img src="<?php echo esc_html( $option['url'] ); ?>" alt="<?php echo esc_attr( $option['label'] ); ?>" title="<?php echo esc_attr( $option['label'] ); ?>">
				</label>
			<?php endforeach; ?>
		</div>
		<?php
	}
}