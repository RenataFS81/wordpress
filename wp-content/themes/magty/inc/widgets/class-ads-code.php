<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Magty_Ads_Code extends Magty_Widget_Base {
	/**
	 * Constructor.
	 */
	public function __construct() {

		$this->widget_cssclass    = 'magty_ads_code_widget';
		$this->widget_description = __( 'Advertisements or codes widget.', 'magty' );
		$this->widget_id          = 'magty_ads_code_widget';
		$this->widget_name        = __( 'Magty: Ads Code', 'magty' );
		$this->settings           = array(
			'ads_code'                  => array(
				'type'  => 'custom_html',
				'label' => __( 'Ads Code', 'magty' ),
				'rows'  => 10,
			),
			'align'                     => array(
				'type'    => 'select',
				'label'   => __( 'Alignment', 'magty' ),
				'desc'    => __( 'If you are using adsense code and it is not showing up, select "None" for the alignment.', 'magty' ),
				'options' => array(
					'unset'   => __( 'None', 'magty' ),
					'left'    => __( 'Left', 'magty' ),
					'center'  => __( 'Center', 'magty' ),
					'right'   => __( 'Right', 'magty' ),
					'stretch' => __( 'Stretch', 'magty' ),
				),
				'std'     => 'center',
			),
			'widget_visibility_heading' => array(
				'type'  => 'heading',
				'label' => __( 'Visibility Settings', 'magty' ),
			),
			'hide_on_desktop'           => array(
				'type'  => 'checkbox',
				'label' => __( 'Hide on Desktop', 'magty' ),
				'std'   => false,
			),
			'hide_on_tablet'            => array(
				'type'  => 'checkbox',
				'label' => __( 'Hide on Tablet', 'magty' ),
				'std'   => false,
			),
			'hide_on_mobile'            => array(
				'type'  => 'checkbox',
				'label' => __( 'Hide on Mobile', 'magty' ),
				'std'   => false,
			),
		);

		parent::__construct();
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

		$before_widget = $args['before_widget'];
		$after_widget  = $args['after_widget'];

		echo wp_kses_post( $before_widget );

		$ad_class = '';
		if ( isset( $instance['hide_on_desktop'] ) && $instance['hide_on_desktop'] ) {
			$ad_class .= ' hide-on-desktop';
		}
		if ( isset( $instance['hide_on_tablet'] ) && $instance['hide_on_tablet'] ) {
			$ad_class .= ' hide-on-tablet';
		}
		if ( isset( $instance['hide_on_mobile'] ) && $instance['hide_on_mobile'] ) {
			$ad_class .= ' hide-on-mobile';
		}

		do_action( 'magty_before_ads_code' );

		if ( isset( $instance['ads_code'] ) && $instance['ads_code'] ) {
			$content = apply_filters( 'widget_custom_html_content', $instance['ads_code'], $instance, $this );
			?>
			<div class="magty-ads-code-widget<?php echo esc_attr( $ad_class ); ?>" style="justify-items:<?php echo esc_attr( $instance['align'] ); ?>;" >
				<?php echo $content; ?>
			</div>
			<?php
		}

		do_action( 'magty_after_ads_code' );

		echo wp_kses_post( $after_widget );

		echo ob_get_clean();
	}
}
