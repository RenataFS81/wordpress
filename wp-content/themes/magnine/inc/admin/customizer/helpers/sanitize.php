<?php
/**
 * Sanitization functions.
 *
 * @package MagNine
 */
if ( ! function_exists( 'magnine_sanitize_checkbox' ) ) :

    /**
     * Sanitize checkbox.
     *
     * @since 1.0.0
     *
     * @param mixed $checked Whether the checkbox is checked.
     * @return bool Whether the checkbox is checked.
     */
    function magnine_sanitize_checkbox( $checked ) {
        // Return true if the checkbox is checked, otherwise false.
        return (bool) $checked;
    }

endif;

if ( ! function_exists( 'magnine_sanitize_select' ) ) :

    /**
     * Sanitize select.
     *
     * @since 1.0.0
     *
     * @param mixed                $input   The value to sanitize.
     * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
     * @return mixed Sanitized value.
     */
    function magnine_sanitize_select( $input, $setting ) {
        // Ensure input is a slug.
        $input = sanitize_key( $input );

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return array_key_exists( $input, $choices ) ? $input : $setting->default;
    }

endif;

if ( ! function_exists( 'magnine_sanitize_radio' ) ) :
    /**
     * Sanitize radio.
     *
     * @since 1.0.0
     *
     * @param mixed                $input The value to sanitize.
     * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
     * @return mixed Sanitized value.
     */
    function magnine_sanitize_radio( $input, $setting ) {

        // input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only.
        $input = sanitize_key( $input );

        // get the list of possible radio box options.
        $choices = $setting->manager->get_control( $setting->id )->choices;

        // return input if valid or return default option.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

    }

endif;  


if( !function_exists( 'magnine_sanitize_archive_layout' ) ) :

    // Single Layout Option Sanitize.
    function magnine_sanitize_archive_layout( $magnine_input ){

        $magnine_single_layout = array( 'archive_style_1','archive_style_2','archive_style_3' );
        if( in_array( $magnine_input,$magnine_single_layout ) ){

            return $magnine_input;

        }

        return;

    }

endif;



if ( ! function_exists( 'magnine_sanitize_image' ) ) :

    /**
     * Sanitize image.
     *
     * @since 1.0.0
     *
     * @see wp_check_filetype() https://developer.wordpress.org/reference/functions/wp_check_filetype/
     *
     * @param string               $image Image filename.
     * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
     * @return string The image filename if the extension is allowed; otherwise, the setting default.
     */
    function magnine_sanitize_image( $image, $setting ) {

        /**
         * Array of valid image file types.
         *
         * The array includes image mime types that are included in wp_get_mime_types().
        */
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png',
            'bmp'          => 'image/bmp',
            'tiff|tif'     => 'image/tiff',
            'webp'         => 'image/webp',
            'ico'          => 'image/x-icon',
            'heic'         => 'image/heic',
        );

        // Return an array with file extension and mime_type.
        $file = wp_check_filetype( $image, $mimes );

        // If $image has a valid mime_type, return it; otherwise, return the default.
        return ( $file['ext'] ? $image : $setting->default );

    }

endif;


if ( ! function_exists( 'magnine_sanitize_number_range' ) ) :

    /**
     * Sanitize number range.
     *
     * @since 1.0.0
     *
     * @see absint() https://developer.wordpress.org/reference/functions/absint/
     *
     * @param int $input Number to check within the numeric range defined by the setting.
     * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
     * @return int|string The number, if it is zero or greater and falls within the defined range; otherwise, the setting default.
     */
    function magnine_sanitize_number_range( $input, $setting ) {

        // Ensure input is an absolute integer.
        $input = absint( $input );

        // Get the input attributes associated with the setting.
        $atts = $setting->manager->get_control( $setting->id )->input_attrs;

        // Get min.
        $min = ( isset( $atts['min'] ) ? $atts['min'] : $input );

        // Get max.
        $max = ( isset( $atts['max'] ) ? $atts['max'] : $input );

        // Get Step.
        $step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

        // If the input is within the valid range, return it; otherwise, return the default.
        return ( $min <= $input && $input <= $max && is_int( $input / $step ) ? $input : $setting->default );

    }

endif;