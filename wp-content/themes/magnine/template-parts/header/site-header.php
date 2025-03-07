<?php
/**
 * Displays the site header.
 *
 * @package MagNine
 */
do_action('magnine_before_header');

$select_header_layout_style = magnine_get_option('select_header_layout_style');

switch ($select_header_layout_style) {
    case 'header_style_1':
        get_template_part('template-parts/header/styles/style-1');
        break;
    case 'header_style_2':
        get_template_part('template-parts/header/styles/style-2');
        break;
    case 'header_style_3':
        get_template_part('template-parts/header/styles/style-3');
        break;
    case 'header_style_4':
        get_template_part('template-parts/header/styles/style-4');
        break;
    default:
        return;
}


do_action('magnine_after_header');