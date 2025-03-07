<?php
/**
 * Custom Customizer Controls.
 *
 * @package Magty
 */


/**
 * Customize Control for Taxonomy Select.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Control
 */
class Magty_Dropdown_Taxonomies_Control extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'dropdown-taxonomies';

	/**
	 * Dropdown Arguments.
	 *
	 * @access protected
	 * @var array
	 */
	protected $dropdown_args = array();

	/**
	 * Taxonomy.
	 *
	 * @access public
	 * @var string
	 */
	public $taxonomy = '';

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 *
	 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
	 * @param string               $id      Control ID.
	 * @param array                $args    Optional. Arguments to override class property defaults.
	 */
	public function __construct( $manager, $id, $args = array() ) {

		$our_taxonomy = 'category';
		if ( isset( $args['taxonomy'] ) ) {
			$taxonomy_exist = taxonomy_exists( esc_attr( $args['taxonomy'] ) );
			if ( true === $taxonomy_exist ) {
				$our_taxonomy = esc_attr( $args['taxonomy'] );
			}
		}
		$args['taxonomy'] = $our_taxonomy;
		$this->taxonomy   = esc_attr( $our_taxonomy );

		parent::__construct( $manager, $id, $args );
	}

	/**
	 * Render content.
	 *
	 * @since 1.0.0
	 */
	public function render_content() {

		$tax_args = array(
			'hierarchical' => 0,
			'taxonomy'     => $this->taxonomy,
		);
		?>
	<label>
		<?php
		if ( ! empty( $this->label ) ) :
			?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php
		endif;

		if ( ! empty( $this->description ) ) :
			?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
			<?php
		endif;

		$dropdown_args = wp_parse_args(
			$this->dropdown_args,
			array(
				'taxonomy'          => $tax_args['taxonomy'],
				'show_option_none'  => __( '&mdash; Select &mdash;', 'magty' ),
				'selected'          => $this->value(),
				'show_option_all'   => '',
				'orderby'           => 'id',
				'order'             => 'ASC',
				'show_count'        => 1,
				'hide_empty'        => 1,
				'child_of'          => 0,
				'exclude'           => '',
				'hierarchical'      => 1,
				'depth'             => 0,
				'tab_index'         => 0,
				'hide_if_empty'     => false,
				'option_none_value' => '',
				'value_field'       => 'term_id',
			)
		);

		$dropdown_args['echo'] = false;

		$dropdown = wp_dropdown_categories( $dropdown_args );
		$dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
		echo $dropdown;
		?>
	</label>
		<?php
	}
}