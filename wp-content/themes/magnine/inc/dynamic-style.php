<?php
/* ------------------------------------------------------------------------- *
 *  Dynamic styles
/* ------------------------------------------------------------------------- */
/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if (!function_exists('magnine_hex2rgb')) {
    function magnine_hex2rgb($colour, $opacity = 1)
    {
        if ($colour[0] == '#') {
            $colour = substr($colour, 1);
        }
        if (strlen($colour) == 6) {
            list($r, $g, $b) = array($colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5]);
        } elseif (strlen($colour) == 3) {
            list($r, $g, $b) = array($colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2]);
        } else {
            return false;
        }
        $r = hexdec($r);
        $g = hexdec($g);
        $b = hexdec($b);
        return 'rgba(' . $r . ',' . $g . ',' . $b . ',' . $opacity . ')';
    }
}
if (!function_exists('magnine_get_inline_css')) :
    /**
     * Outputs theme custom CSS.
     *
     * @since 1.0.0
     */
    function magnine_get_inline_css()
    {
        $defaults = magnine_get_all_customizer_default_values();
        $background_color = get_theme_mod('background_color');

        $magnine_site_logo_height = magnine_get_option('magnine_site_logo_height');

        ob_start();
        ?>
        <?php if (!empty($background_color) && $background_color != 'ffffff') :
        ?>
        :root {
        --theme-bg-color: #<?php echo esc_attr($background_color); ?>;
        }
    <?php endif; ?>

        <?php if ($magnine_site_logo_height !== $defaults['magnine_site_logo_height']) : ?>
        .site-logo img {
        height:<?php echo absint($magnine_site_logo_height); ?>px;
        }
    <?php endif; ?>
        <?php
        return ob_get_clean();
    }
endif;
