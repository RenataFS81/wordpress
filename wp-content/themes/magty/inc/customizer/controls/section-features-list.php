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

class Magty_Section_Features_List extends WP_Customize_Section {

	/**
	 * Control Type.
	 */
	public $type              = 'section-features-list';
	public $features_list     = array();
	public $is_upsell_feature = true;
	public $upsell_link       = 'https://unfoldwp.com/products/magty/?utm_source=wp&utm_medium=customizer&utm_campaign=ft_upgrade';
	public $upsell_text       = '';
	public $button_link       = '';
	public $button_text       = '';
	public $class             = '';

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function json() {
		$json = parent::json();

		$json['title']             = $this->title;
		$json['description']       = $this->description;
		$json['features_list']     = $this->features_list;
		$json['is_upsell_feature'] = $this->is_upsell_feature;
		$json['upsell_link']       = $this->upsell_link;
		$json['upsell_text']       = __( 'Upgrade Now', 'magty' );
		$json['button_link']       = $this->button_link;
		$json['button_text']       = $this->button_text;
		$json['class']             = $this->class;

		return $json;
	}

	/**
	 * Outputs the Underscore.js template.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	protected function render_template() {
		?>

		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} {{data.class}}">
			
			<# if ( data.title ) { #>
				<h3>{{ data.title }}</h3>
			<# } #>

			<# if ( data.description ) { #>
				<span class="feature-desc">{{{ data.description }}}</span>
			<# } #>

			<# if ( !_.isEmpty(data.features_list) ) { #>
				<ul class="magty-features-list">
					<# _.each( data.features_list, function(key, value) { #>
						<li><span class="dashicons dashicons-arrow-right-alt2"></span>{{{ key }}}</li>
					<# }) #>
				</ul>
			<# } #>

			<# if ( data.is_upsell_feature ) { #>
				<a href="{{ data.upsell_link }}" role="button" class="magty-features-cta-btn button button-primary" target="_blank">{{ data.upsell_text }}</a>
			<# } else { #>
				<# if ( data.button_text && data.button_link ) { #>
					<a href="{{ data.button_link }}" role="button" class="magty-features-cta-btn button button-primary" target="_blank">{{ data.button_text }}</a>
				<# } #>
			<# } #>

		</li>
		<?php
	}
}
