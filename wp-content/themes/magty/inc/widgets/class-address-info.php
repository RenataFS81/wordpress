<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Magty_Address_info extends Magty_Widget_Base {

	/**
	 * Constructor.
	 */
	public function __construct() {

		$this->widget_cssclass    = 'magty_address_info_widget';
		$this->widget_description = __( 'Displays address and contact info', 'magty' );
		$this->widget_id          = 'magty_address_info';
		$this->widget_name        = __( 'Magty: Address Info', 'magty' );
		$this->settings           = array(
			'title'                   => array(
				'type'  => 'text',
				'label' => __( 'Title', 'magty' ),
			),
			'desc'                    => array(
				'type'  => 'textarea',
				'label' => __( 'Description', 'magty' ),
			),
			'address'                 => array(
				'type'  => 'textarea',
				'label' => __( 'Address', 'magty' ),
			),
			'phone'                   => array(
				'type'  => 'text',
				'label' => __( 'Phone', 'magty' ),
			),
			'site'                    => array(
				'type'  => 'text',
				'label' => __( 'Website', 'magty' ),
			),
			'fax'                     => array(
				'type'  => 'text',
				'label' => __( 'Fax', 'magty' ),
			),
			'email'                   => array(
				'type'  => 'text',
				'label' => __( 'Email', 'magty' ),
			),
			'widget_settings_heading' => array(
				'type'  => 'heading',
				'label' => __( 'Widget Settings', 'magty' ),
			),
			'style'                   => array(
				'type'    => 'select',
				'label'   => __( 'Style', 'magty' ),
				'options' => array(
					'style_1' => __( 'Stack', 'magty' ),
					'style_2' => __( 'Inline', 'magty' ),
				),
				'std'     => 'style_1',
			),
			'show_icons'              => array(
				'type'  => 'checkbox',
				'label' => __( 'Show Icons', 'magty' ),
				'std'   => false,
			),
			'show_label'              => array(
				'type'  => 'checkbox',
				'label' => __( 'Show Label', 'magty' ),
				'std'   => false,
			),
			'icon_color'              => array(
				'type'  => 'color',
				'label' => __( 'Icon Color', 'magty' ),
				'std'   => '',
			),
			'inverted_block_color'    => array(
				'type'  => 'checkbox',
				'label' => __( 'Inverted Color', 'magty' ),
				'desc'  => __( 'Can be used if you have dark background and want lighter color on the text.', 'magty' ),
				'std'   => false,
			),
		);

		parent::__construct();

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_assets' ) );
	}

	/**
	 * Output widget.
	 *
	 * @see WP_Widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {

		ob_start();

		$this->widget_start( $args, $instance );

		do_action( 'magty_before_address_info' );

		$widget_class = '';

		$desc       = isset( $instance['desc'] ) ? $instance['desc'] : '';
		$address    = isset( $instance['address'] ) ? $instance['address'] : '';
		$phone      = isset( $instance['phone'] ) ? $instance['phone'] : '';
		$site       = isset( $instance['site'] ) ? $instance['site'] : '';
		$fax        = isset( $instance['fax'] ) ? $instance['fax'] : '';
		$email      = isset( $instance['email'] ) ? $instance['email'] : '';
		$show_icons = isset( $instance['show_icons'] ) ? $instance['show_icons'] : $this->settings['show_icons']['std'];
		$show_label = isset( $instance['show_label'] ) ? $instance['show_label'] : $this->settings['show_label']['std'];
		$style      = isset( $instance['style'] ) ? $instance['style'] : $this->settings['inverted_block_color']['std'];

		$inverted_block_color = isset( $instance['inverted_block_color'] ) ? $instance['inverted_block_color'] : $this->settings['inverted_block_color']['std'];

		$widget_class .= ' ' . $style;

		// Inverted Color.
		if ( $inverted_block_color ) {
			$widget_class .= ' saga-block-inverted-color';
		}

		$widget_inline_styles = '';
		$widget_id            = isset( $args['widget_id'] ) ? $args['widget_id'] : '';

		if ( $widget_id ) {
			$icon_color = isset( $instance['icon_color'] ) ? $instance['icon_color'] : $this->settings['icon_color']['std'];
			if ( $icon_color ) {
				$widget_inline_styles .= "
					#{$widget_id} .magty-address-info-widget svg {
						fill:{$icon_color} !important;
					}
				";
			}
			if ( $widget_inline_styles ) {
				echo '<style>' . wp_strip_all_tags( magty_refactor_css( $widget_inline_styles ) ) . '</style>';
			}
		}
		?>

		<div class="magty-address-info-widget <?php echo esc_attr( $widget_class ); ?>">
			<?php if ( ! empty( $desc ) ) : ?>
				<div class="magty-address-desc">
					<?php echo wp_kses_post( nl2br( $desc ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</div>
			<?php endif; ?>
			<address>
				<?php if ( ! empty( $address ) ) : ?>
					<div class="magty-address-field">
						<?php
						if ( $show_icons ) :
							echo '<span class="address-icon">' . magty_get_theme_svg( 'geo-alt-fill' ) . '</span>';
						endif;
						if ( $show_label ) :
							esc_html_e('Address:', 'magty');
						endif;
						?>
						<span class="address-meta"><?php echo wp_kses_post( nl2br( $address ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
					</div>
				<?php endif; ?>
				<?php if ( ! empty( $phone ) ) : ?>
					<div class="magty-address-field">
						<?php
						if ( $show_icons ) :
							echo '<span class="address-icon">' . magty_get_theme_svg( 'phone' ) . '</span>';
						endif;
						if ( $show_label ) :
							esc_html_e('Phone:', 'magty');
						endif;
						?>
						<span class="address-meta">
							<a href="tel:<?php echo esc_attr( preg_replace( '/\D/', '', esc_attr( $phone ) ) ); ?>" ><?php echo esc_html( $phone ); ?></a>
						</span>
					</div>
				<?php endif; ?>
				<?php if ( ! empty( $site ) ) : ?>
					<div class="magty-address-field">
						<?php
						if ( $show_icons ) :
							echo '<span class="address-icon">' . magty_get_theme_svg( 'globe' ) . '</span>';
						endif;
						if ( $show_label ) :
							esc_html_e( 'Website:', 'magty' );
						endif;
						?>
						<span class="address-meta">
							<a href="<?php echo esc_url( $site ); ?>" target="_blank"><?php echo esc_html( $site ); ?></a>
						</span>
					</div>
				<?php endif; ?>
				<?php if ( ! empty( $fax ) ) : ?>
					<div class="magty-address-field">
						<?php
						if ( $show_icons ) :
							echo '<span class="address-icon">' . magty_get_theme_svg( 'printer-fill' ) . '</span>';
						endif;
						if ( $show_label ) :
							esc_html_e('Fax:', 'magty');
						endif;
						?>
						<span class="address-meta"><?php echo esc_html( $fax ); ?></span>
					</div>
				<?php endif; ?>
				<?php
				if ( ! empty( $email ) ) :
					$email = sanitize_email( $email );
					?>
					<div class="magty-address-field">
						<?php
						if ( $show_icons ) :
							echo '<span class="address-icon">' . magty_get_theme_svg( 'envelope-fill' ) . '</span>';
						endif;
						if ( $show_label ) :
							esc_html_e('E-mail:', 'magty');
						endif;
						?>
						<span class="address-meta">
							<a href="mailto:<?php echo esc_attr( antispambot( $email ) ); ?>" ><?php echo esc_html( antispambot( $email ) ); ?></a>
						</span>
					</div>
				<?php endif; ?>
			</address>
		</div>
		<?php

		do_action( 'magty_after_address_info' );

		$this->widget_end( $args );

		echo ob_get_clean();
	}

	public function enqueue_assets() {
		magty_widget_css( $this->id_base, 'address-info' );
	}
}
