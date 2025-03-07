<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Kindergarten functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Kindergarten
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_KINDERGARTEN_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_KINDERGARTEN_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_KINDERGARTEN_VERSION', '1.0.0' );
define( 'PATTERNS_KINDERGARTEN_THEME_NAME', 'patterns-kindergarten' );
define( 'PATTERNS_KINDERGARTEN_OPTION_NAME', 'patterns-kindergarten' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_KINDERGARTEN_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_kindergarten_run() {
	new Patterns_Kindergarten();
}
patterns_kindergarten_run();
