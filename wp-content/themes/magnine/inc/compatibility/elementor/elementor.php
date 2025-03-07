<?php
/**
 * Implements the compatibility for the Elementor plugin in MagNine theme.
 *
 * @package    MagNine
 * @since      MagNine 1.0.0
 */

use elementor\widgets\MagNine_Elementor_Global_Widgets_Title;
use elementor\widgets\MagNine_Elementor_Widgets_Block_1;
use elementor\widgets\MagNine_Elementor_Widgets_Block_2;
use elementor\widgets\MagNine_Elementor_Widgets_Block_3;
use elementor\widgets\MagNine_Elementor_Widgets_Block_4;
use elementor\widgets\MagNine_Elementor_Widgets_Block_5;
use elementor\widgets\MagNine_Elementor_Widgets_Grid_1;
use elementor\widgets\MagNine_Elementor_Widgets_Grid_2;
use elementor\widgets\MagNine_Elementor_Widgets_Grid_3;
use elementor\widgets\MagNine_Elementor_Widgets_Grid_4;
use elementor\widgets\MagNine_Elementor_Widgets_Grid_5;

/**
 * Load the MagNine Elementor widgets file and registers it
 */
if ( ! function_exists( 'magnine_elementor_widgets_registered' ) ) :

	/**
	 * Load and register the required Elementor widgets file.
	 *
	 * @param Elementor\Widgets_Manager $widgets_manager The widgets manager instance.
	 *
	 * @since MagNine 1.0.0
	 */
	function magnine_elementor_widgets_registered( $widgets_manager ) {

		// Require the Widget Base class.
		require get_template_directory()  . '/inc/compatibility/elementor/widgets/class-magnine-elementor-widget-base.php';

		// Require the files.
		// 1. Block Widgets.
		require get_template_directory()  . '/inc/compatibility/elementor/widgets/magnine-elementor-widgets-block-1.php';
		require get_template_directory()  . '/inc/compatibility/elementor/widgets/magnine-elementor-widgets-block-2.php';
        require get_template_directory()  . '/inc/compatibility/elementor/widgets/magnine-elementor-widgets-block-3.php';
		require get_template_directory()  . '/inc/compatibility/elementor/widgets/magnine-elementor-widgets-block-4.php';
		require get_template_directory()  . '/inc/compatibility/elementor/widgets/magnine-elementor-widgets-block-5.php';

		// 2. Grid Widgets.
		require get_template_directory()  . '/inc/compatibility/elementor/widgets/magnine-elementor-widgets-grid-1.php';
		require get_template_directory()  . '/inc/compatibility/elementor/widgets/magnine-elementor-widgets-grid-2.php';
		require get_template_directory()  . '/inc/compatibility/elementor/widgets/magnine-elementor-widgets-grid-3.php';
		require get_template_directory()  . '/inc/compatibility/elementor/widgets/magnine-elementor-widgets-grid-4.php';
		require get_template_directory()  . '/inc/compatibility/elementor/widgets/magnine-elementor-widgets-grid-5.php';

		// 3. Global Widgets.
		require get_template_directory()  . '/inc/compatibility/elementor/widgets/magnine-elementor-global-widgets-title.php';

		// Register the widgets
		// 1. Block Widgets.
		$widgets_manager->register_widget_type( new MagNine_Elementor_Widgets_Block_1() );
		$widgets_manager->register_widget_type( new MagNine_Elementor_Widgets_Block_2() );
        $widgets_manager->register_widget_type( new MagNine_Elementor_Widgets_Block_3() );
		$widgets_manager->register_widget_type( new MagNine_Elementor_Widgets_Block_4() );
		$widgets_manager->register_widget_type( new MagNine_Elementor_Widgets_Block_5() );

		// 2. Grid Widgets.
		$widgets_manager->register_widget_type( new MagNine_Elementor_Widgets_Grid_1() );
		$widgets_manager->register_widget_type( new MagNine_Elementor_Widgets_Grid_2() );
		$widgets_manager->register_widget_type( new MagNine_Elementor_Widgets_Grid_3() );
		$widgets_manager->register_widget_type( new MagNine_Elementor_Widgets_Grid_4() );
		$widgets_manager->register_widget_type( new MagNine_Elementor_Widgets_Grid_5() );

		// 3. Global Widgets.
		$widgets_manager->register_widget_type( new MagNine_Elementor_Global_Widgets_Title() );

	}

endif;

add_action( 'elementor/widgets/widgets_registered', 'magnine_elementor_widgets_registered' );

if ( ! function_exists( 'magnine_elementor_category' ) ) :

	/**
	 * Add the Elementor category for use in MagNine widgets as separator.
	 *
	 * @since MagNine 1.0.0
	 */
	function magnine_elementor_category() {

		// Register widget block category for Elementor section.
		\Elementor\Plugin::instance()->elements_manager->add_category(
			'magnine-widget-blocks',
			array(
				'title' => esc_html__( 'MagNine Widget Blocks', 'magnine' ),
			),
			1
		);

		// Register widget grid category for Elementor section.
		\Elementor\Plugin::instance()->elements_manager->add_category(
			'magnine-widget-grid',
			array(
				'title' => esc_html__( 'MagNine Widget Grid', 'magnine' ),
			),
			1
		);

		// Register widget global category for Elementor section.
		\Elementor\Plugin::instance()->elements_manager->add_category(
			'magnine-widget-global',
			array(
				'title' => esc_html__( 'MagNine Global Widgets', 'magnine' ),
			),
			1
		);
	}

endif;

add_action( 'elementor/init', 'magnine_elementor_category' );

if ( ! function_exists( 'magnine_elementor_enqueue_style' ) ) :

	/**
	 * Enqueue the styles for use within Elementor only.
	 *
	 * @since MagNine 1.0.0
	 */
	function magnine_elementor_enqueue_style() {

        $suffix = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min';

        $file_name = is_rtl() ? 'elementor-rtl' . $suffix . '.css' : 'elementor' . $suffix . '.css';

        wp_enqueue_style(
            'magnine-elementor',
            get_template_directory_uri() . '/inc/compatibility/elementor/assets/css/' . $file_name,
            array(),
            MAGNINE_VERSION
        );

	}

endif;

add_action( 'elementor/frontend/after_enqueue_styles', 'magnine_elementor_enqueue_style' );
