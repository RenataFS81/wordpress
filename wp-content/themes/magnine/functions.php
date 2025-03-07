<?php
/**
 * MagNine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MagNine
 */

if (!defined('MAGNINE_VERSION')) {
    // Replace the version number of the theme on each release.
    define('MAGNINE_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function magnine_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on MagNine, use a find and replace
        * to change 'magnine' to the name of your theme in all the template files.
        */
    load_theme_textdomain('magnine', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');


    /**
     * Register navigation menus uses wp_nav_menu in five places.
     *
     * @since MagNine MagNine 1.0.0
     */
    function magnine_menus()
    {

        $locations = array(
            'primary' => __('Primary Menu', 'magnine'),
            'footer' => __('Footer Menu', 'magnine'),
            'social' => __('Social Menu', 'magnine'),
        );

        register_nav_menus($locations);
    }

    add_action('init', 'magnine_menus');


    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'magnine_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles');
}

add_action('after_setup_theme', 'magnine_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function magnine_content_width()
{
    $GLOBALS['content_width'] = apply_filters('magnine_content_width', 640);
}

add_action('after_setup_theme', 'magnine_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function magnine_scripts()
{

    $min = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';

    $fonts_url = magnine_load_fonts_url();
    if ($fonts_url) {

        require_once get_theme_file_path('assets/webfont/class-theme-webfont-loader.php');
        wp_enqueue_style(
            'magnine-load-google-fonts',
            wptt_get_webfont_url($fonts_url),
            array(),
            MAGNINE_VERSION
        );
    }


    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle' . $min . '.css');

    wp_enqueue_style('magnine-style', get_stylesheet_uri(), array(), MAGNINE_VERSION);
    wp_style_add_data('magnine-style', 'rtl', 'replace');

    wp_add_inline_style('magnine-style', magnine_get_inline_css());

    wp_enqueue_script('magnine-navigation', get_template_directory_uri() . '/assets/js/navigation' . $min . '.js', array(), MAGNINE_VERSION, true);

    // Scripts
    $dependencies = array('swiper');
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle' . $min . '.js', array(), MAGNINE_VERSION, true);
    wp_enqueue_script('magnine-script', get_template_directory_uri() . '/assets/js/script' . $min . '.js', $dependencies, MAGNINE_VERSION, true);

    //Ajax Load Posts Scripts
    wp_enqueue_script('magnine-load-posts', get_template_directory_uri() . '/template-parts/pagination/pagination.js', array(), MAGNINE_VERSION, true);

    // Localized variables.
    global $wp_query;
    wp_localize_script(
        'magnine-load-posts',
        'MagnineVars',
        array(
            'load_post_nonce_wp' => wp_create_nonce('magnine-load-posts-nonce'),
            'ajaxurl' => admin_url('admin-ajax.php'),
            'query_vars' => wp_json_encode($wp_query->query_vars),
        )
    );

    if (is_singular() && (comments_open() || '0' != get_comments_number())) {
        wp_enqueue_style('magnine-comments', get_template_directory_uri() . '/assets/css/comments' . $min . '.css', array(), MAGNINE_VERSION);
    }

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'magnine_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Implement the Dynamic Style.
 */
require get_template_directory() . '/inc/dynamic-style.php';
require get_template_directory() . '/template-parts/pagination/pagination-option.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/admin/customizer/customizer-init.php';

// Custom page walker.
require get_template_directory() . '/classes/class-walker-page.php';


// Handle SVG icons.
require get_template_directory() . '/classes/class-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';

//widget-initialization.
require get_template_directory() . '/inc/admin/widgets/widget-init.php';

// category-meta-box
require get_template_directory() . '/inc/admin/meta-box/category-meta-box.php';

// single-meta-box
require get_template_directory() . '/inc/admin/meta-box/meta-box.php';


/**
 * Calling in the admin area for the Welcome Page as well as for the new theme notice too.
 */
if (is_admin()) {
    require get_template_directory() . '/inc/admin/dashboard/class-admin.php';
    require get_template_directory() . '/inc/admin/dashboard/class-dashboard.php';
    require get_template_directory() . '/inc/admin/dashboard/class-welcome-notice.php';
    require get_template_directory() . '/inc/admin/dashboard/class-theme-review-notice.php';
}

require get_template_directory() . '/inc/admin/dashboard/class-changelog-parser.php';

/**
 * Enqueue scripts and styles.
 */
function magnine_preloader_scripts()
{
    $preloader_style = magnine_get_option('magnine_preloader_style');
    wp_enqueue_style('magnine-preloader', get_template_directory_uri() . '/assets/css/preloader-' . $preloader_style . '.css');

}

add_action('wp_enqueue_scripts', 'magnine_preloader_scripts');

if (!class_exists('MagNine_Constants')) {

    /**
     * MagNine_Constants class.
     */
    class MagNine_Constants
    {

        /**
         * The single instance of the class.
         *
         * @var MagNine_Constants
         */
        private static $instance = null;

        /**
         * Constants array.
         *
         * @var array
         */
        private $constants = array();

        /**
         * Constructor.
         */
        private function __construct()
        {

            // Define constants here.
            $this->constants = array(
                /**
                 * Define URL Location Constants
                 */
                'MAGNINE_PARENT_URL' => get_template_directory_uri(),
            );

            foreach ($this->constants as $name => $value) {
                $this->define_constant($name, $value);
            }
        }

        /**
         * Gets the single instance of the class.
         *
         * @return MagNine_Constants
         */
        public static function get_instance()
        {
            if (null === self::$instance) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        /**
         * Define constant safely.
         *
         * @param string $name Constant name.
         * @param mixed $value Constant value.
         *
         * @return void
         */
        private function define_constant($name, $value)
        {
            if (!defined($name)) {
                define($name, $value);
            }
        }
    }
}

// Initialize the class instance.
MagNine_Constants::get_instance();

add_action('wp_ajax_install_plugin', 'magnine_plugin_action_callback');
add_action('wp_ajax_activate_plugin', 'magnine_plugin_action_callback');

function magnine_plugin_action_callback()
{
    if (!isset($_POST['security']) || !wp_verify_nonce($_POST['security'], 'magnine_demo_import_nonce')) {
        wp_send_json_error(array('message' => 'Security check failed.'));
    }
    if (!current_user_can('install_plugins')) {
        wp_send_json_error(array('message' => 'You are not allowed to perform this action.'));
    }

    $plugin = sanitize_text_field($_POST['plugin']);
    $plugin_slug = sanitize_text_field($_POST['slug']);

    if (magnine_is_plugin_installed($plugin)) {
        if (is_plugin_active($plugin)) {
            wp_send_json_success(array('message' => 'Plugin is already activated.'));
        } else {
            // Activate the plugin
            $result = activate_plugin($plugin);

            if (is_wp_error($result)) {
                wp_send_json_error(array('message' => 'Error activating the plugin.'));
            } else {
                wp_send_json_success(array('message' => 'Plugin activated successfully!'));
            }
        }
    } else {
        // Install and activate the plugin
        include_once ABSPATH . 'wp-admin/includes/plugin-install.php';
        include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
        $plugin_info = plugins_api('plugin_information', array('slug' => $plugin_slug));
        $upgrader = new Plugin_Upgrader(new WP_Ajax_Upgrader_Skin());
        $result = $upgrader->install($plugin_info->download_link);

        if (is_wp_error($result)) {
            wp_send_json_error(array('message' => 'Error installing the plugin.'));
        }

        $result = activate_plugin($plugin);

        if (is_wp_error($result)) {
            wp_send_json_error(array('message' => 'Error activating the plugin.'));
        } else {
            wp_send_json_success(array('message' => 'Plugin installed and activated successfully!'));
        }
    }
}

function magnine_is_plugin_installed($plugin_path)
{
    $plugins = get_plugins();
    return isset($plugins[$plugin_path]);
}


/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/compatibility/jetpack/jetpack.php';
}

/** Add the WooCommerce plugin support */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/compatibility/woocommerce/woocommerce.php';
}

/** Add the Elementor compatibility file */
if (defined('ELEMENTOR_VERSION')) {
    require get_template_directory() . '/inc/compatibility/elementor/elementor.php';
    require get_template_directory() . '/inc/compatibility/elementor/elementor-functions.php';
}