<?php
/**
 * Custom Customizer Controls.
 *
 * @package Magty
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Magty_Features_List extends WP_Customize_Control {

	/**
	 * Control Type.
	 */
	public $type              = 'features-list';
	public $features_list     = array();
	public $is_upsell_feature = true;
	public $upsell_link       = 'https://unfoldwp.com/products/magty/?utm_source=wp&utm_medium=customizer&utm_campaign=ft_upgrade';
	public $button_text       = '';
	public $button_link       = '';

	/**
	 * Constructor.
	 */
	public function __construct( $manager, $id, $args = array(), $options = array() ) {
		parent::__construct( $manager, $id, $args );
	}

	/**
	 * Render the control in the customizer
	 */
	public function render_content() {
		?>
		<div class="magty-features-list-wrapper">

			<?php if ( ! empty( $this->label ) ) : ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php endif; ?>

			<?php if ( ! empty( $this->description ) ) : ?>
				<span class="description customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
			<?php endif; ?>

			<?php if ( ! empty( $this->features_list ) ) : ?>
				<ul class="magty-features-list">
					<?php foreach ( $this->features_list as $feature ) : ?>
						<li><span class="dashicons dashicons-arrow-right-alt2"></span><?php echo esc_html( $feature ); ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<?php if ( $this->is_upsell_feature ) : ?>
				<a href="<?php echo esc_url( $this->upsell_link ); ?>" role="button" class="magty-features-cta-btn button button-primary" target="_blank">
					<?php esc_html_e( 'Upgrade Now', 'magty' ); ?>
				</a>
			<?php else : ?>
				<?php if ( ! empty( $this->button_text ) && ! empty( $this->button_link ) ) : ?>
					<a href="<?php echo esc_url( $this->button_link ); ?>" role="button" class="magty-features-cta-btn button button-primary" target="_blank">
						<?php echo esc_html( $this->button_text ); ?>
					</a>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<?php
	}
}
