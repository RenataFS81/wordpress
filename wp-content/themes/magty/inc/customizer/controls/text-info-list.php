<?php
/**
 * Custom Customizer Controls.
 *
 * @package Magty
 */

/**
 * Customize Control for Text Info with List.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Control
 */
class Magty_Text_Info_List extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'text-info-list';

	/**
	 * Info url.
	 *
	 * @access public
	 * @var string
	 */
	public $info_url  = '';

	/**
	 * Info text.
	 *
	 * @access public
	 * @var string
	 */
	public $info_text = '';

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
			<span class="dashicons dashicons-info"></span>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<a href="<?php echo esc_url( $this->info_url ); ?>" target="_blank"> <strong><?php echo esc_html( $this->info_text ); ?></strong></a>
		<?php endif; ?>

		<?php if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
		<?php endif; ?>

		<?php if ( $this->items ) : ?>
			<ul>
				<?php
				foreach ( $this->items as $item ) :
					echo '<li><span class="dashicons dashicons-yes"></span>' . esc_html( $item ) . '</li>';
				endforeach;
				?>
			</ul>
		<?php endif; ?>

		<?php
	}
}
