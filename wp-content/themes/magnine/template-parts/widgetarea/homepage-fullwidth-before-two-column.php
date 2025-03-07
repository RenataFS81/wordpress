<?php
/**
 * Widget area positioned at the top of homepage layouts, above the two-column widget area.
 *
 * @package MagNine
 */

if (is_active_sidebar('homepage-fullwidth-before-two-column')) :
    ?>
    <section class="wpi-section wpi-widgets-section wpi-widget-area fullwidth-widget-area">
        <div class="wrapper">
            <?php
            do_action('homepage_fullwidth_before_two_column_widgetarea_start');
            dynamic_sidebar('homepage-fullwidth-before-two-column');
            do_action('homepage_fullwidth_before_two_column_widgetarea_end');
            ?>
        </div>
    </section>
<?php
endif;
