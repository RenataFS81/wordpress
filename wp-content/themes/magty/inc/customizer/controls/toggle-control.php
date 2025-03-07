<?php
/**
 * Toggle control
 *
 * @package Magty
 */

class Magty_Toggle_Control extends WP_Customize_Control {

	public $type = 'toggle-control';

	/**
	 * Render the control in the customizer
	 */
	public function render_content() {
		?>
		<div class="toggle-switch-control">
			
			<div class="toggle-switch">
				<input type="checkbox" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" class="toggle-switch-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() );?>>
				<label class="toggle-switch-label" for="<?php echo esc_attr( $this->id ); ?>">
					<span class="toggle-switch-inner"></span>
					<span class="toggle-switch-switch"></span>
				</label>
			</div>

			<span class="customize-control-title">
				<?php echo esc_attr( $this->label ); ?>
			</span>

			<?php if ( ! empty( $this->description ) ) : ?>
				<span class="description customize-control-description"><?php echo ( $this->description ); ?></span>
			<?php endif; ?>

		</div>
		<?php
	}
}
