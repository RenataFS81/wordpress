<?php
/**
 * MagNine Admin Class.
 *
 * @package MagNine
 * @since   1.0.0
 */
if (!defined('ABSPATH')) {
    exit;
}
if (!class_exists('MagNine_Admin')) :
    /**
     * MagNine_Admin Class.
     */
    class MagNine_Admin
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
            add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
        }

        /**
         * Localize array for import button AJAX request.
         */
        public function enqueue_scripts()
        {

            $suffix = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min';

            $file_name = is_rtl() ? 'admin-rtl' . $suffix . '.css' : 'admin' . $suffix . '.css';

            wp_enqueue_style(
                'magnine-admin-style',
                get_template_directory_uri() . '/inc/admin/dashboard/css/' . $file_name,
                array(),
                MAGNINE_VERSION
            );


            wp_enqueue_script('magnine-plugin-install-helper', get_template_directory_uri() . '/inc/admin/dashboard/js/admin.js', array('jquery'), MAGNINE_VERSION, true);
            $welcome_data = array(
                'uri' => esc_url(admin_url('/themes.php?page=magnine&tab=starter-templates')),
                'btn_text' => esc_html__('Processing...', 'magnine'),
                'nonce' => wp_create_nonce('magnine_demo_import_nonce'),
                'admin_url' => esc_url(admin_url()),
                'ajaxurl' => admin_url('admin-ajax.php'), // Include this line for using admin-ajax.php
            );
            wp_localize_script('magnine-plugin-install-helper', 'magnineRedirectDemoPage', $welcome_data);
        }
    }
endif;
return new MagNine_Admin();
