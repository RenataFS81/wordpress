<?php
/**
 * Custom Customizer Controls.
 *
 * @package Magty
 */


/**
 * Customize Control for Taxonomy Checkbox.
 *
 * @since 1.0.0
 *
 * @see WP_Customize_Control
 */
class Magty_Checkbox_Taxonomies_Control extends WP_Customize_Control {

	/**
	 * Control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'checkbox-taxonomies';

	/**
	 * Checkbox Arguments.
	 *
	 * @access protected
	 * @var array
	 */
	protected $checkbox_args = array();

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
			'taxonomy' => $this->taxonomy,
		);

		$categories = get_categories( $tax_args );

		$category_list = array();
		foreach ( $categories as $category ) {
			$category_list[ $category->term_id ] = $category->name;
		}

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

		$multi_values = ! is_array( $this->value() ) ? explode( ',', $this->value() ) : $this->value();
		?>

		<ul>
		<?php foreach ( $category_list as $value => $label ) : ?>

				<li>
					<label>
						<input type="checkbox" value="<?php echo esc_attr( $value ); ?>" <?php checked( in_array( $value, $multi_values ) ); ?> />
						<?php echo esc_html( $label ); ?>
					</label>
				</li>

			<?php endforeach; ?>
		</ul>

		<input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr( implode( ',', $multi_values ) ); ?>" />

		<?php
	}
}
