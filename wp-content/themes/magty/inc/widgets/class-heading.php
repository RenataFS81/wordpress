<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Magty_Heading extends Magty_Widget_Base {
	/**
	 * Constructor.
	 */
	public function __construct() {

		$this->widget_cssclass    = 'magty_heading_widget';
		$this->widget_description = __( 'Displays widget heading style to match the theme styles. It helps if you\'re using blocks in widgets but want a heading style of the theme.', 'magty' );
		$this->widget_id          = 'magty_heading_widget';
		$this->widget_name        = __( 'Magty: Heading', 'magty' );
		$this->settings           = array(
			'title'               => array(
				'type'  => 'text',
				'label' => __( 'Title', 'magty' ),
			),
			'title_tag'       => array(
				'type'    => 'select',
				'label'   => __( 'Title HTML Tag', 'magty' ),
				'options' => array(
					'h1' => 'H1',
					'h2' => 'H2',
					'h3' => 'H3',
					'h4' => 'H4',
					'h5' => 'H5',
					'h6' => 'H6',
					'div' => 'div',
					'span' => 'span',
					'p' => 'p',
				),
				'std'     => 'h2',
			),
			'subtitle'            => array(
				'type'  => 'text',
				'label' => __( 'Subtitle', 'magty' ),
			),
			'heading_style'       => array(
				'type'    => 'select',
				'label'   => __( 'Heading Style', 'magty' ),
				'options' => magty_get_title_styles(),
				'std'     => 'style_1',
			),
			'heading_alignment'   => array(
				'type'    => 'select',
				'label'   => __( 'Heading Alignment', 'magty' ),
				'options' => magty_get_title_alignments(),
				'std'     => 'left',
			),
			'inverted_text_color' => array(
				'type'  => 'checkbox',
				'label' => __( 'Inverted Text Color', 'magty' ),
				'desc'  => __( 'Can be used if you have dark background and want lighter color on the text.', 'magty' ),
				'std'   => false,
			),
			'accent_color'        => array(
				'type'  => 'color',
				'label' => __( 'Accent Color', 'magty' ),
				'std'   => '',
				'desc'  => __( 'Choose if you want different accent color. Only works on heading styles that use accent color.', 'magty' ),
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

		$title_tag         = isset( $instance['title_tag'] ) ? $instance['title_tag'] : $this->settings['title_tag']['std'];
		$heading_style     = isset( $instance['heading_style'] ) ? $instance['heading_style'] : $this->settings['heading_style']['std'];
		$heading_alignment = isset( $instance['heading_alignment'] ) ? $instance['heading_alignment'] : $this->settings['heading_alignment']['std'];

		$wrapper_class  = 'saga-element-header ' . $heading_style;
		$wrapper_class .= ' saga-title-align-' . $heading_alignment;

		$subtitle            = isset( $instance['subtitle'] ) ? $instance['subtitle'] : '';
		$inverted_text_color = isset( $instance['inverted_text_color'] ) ? $instance['inverted_text_color'] : $this->settings['inverted_text_color']['std'];

		if ( $inverted_text_color ) {
			$wrapper_class .= ' magty-inverted-title-color';
		}

		echo wp_kses_post( $before_widget );

		if ( $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base ) ) {

			$widget_inline_styles = '';
			$widget_id            = isset( $args['widget_id'] ) ? $args['widget_id'] : '';

			if ( $widget_id ) {
				$accent_color = isset( $instance['accent_color'] ) ? $instance['accent_color'] : $this->settings['accent_color']['std'];
				if ( $accent_color ) {
					$widget_inline_styles .= "
						#{$widget_id} .saga-element-header.{$heading_style} {
							--heading-accent-color:{$accent_color} !important;
						}
					";
				}
				if ( $widget_inline_styles ) {
					echo '<style>' . wp_strip_all_tags( magty_refactor_css( $widget_inline_styles ) ) . '</style>';
				}
			}
			?>
			<div class="<?php echo esc_attr( $wrapper_class ); ?>">
				<div class="saga-element-title-wrapper">
					<?php 
					$title_html = sprintf( '<%1$s class="saga-element-title"><span>%2$s</span></%1$s>', $title_tag, esc_html( $title ) );
					// PHPCS - the variable $title_html holds safe data.
					echo $title_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					?>
				</div>
				<?php
				if ( $subtitle ) {
					?>
					<p class="saga-element-subtitle"><?php echo esc_html( $subtitle ); ?></p>
					<?php
				}
				?>
			</div>
			<?php
		}

		echo wp_kses_post( $after_widget );

		echo ob_get_clean();
	}
}
