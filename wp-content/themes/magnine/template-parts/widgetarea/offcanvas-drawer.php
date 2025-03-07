<?php
/**
 * Widgets placed in this region will be displayed below the header and above the main content.
 *
 * @package MagNine
 */

if (is_active_sidebar('offcanvas-drawer')) :
    ?>
    <div class="site-drawer-wrapper">
        <?php
        do_action('offcanvas_drawer_widgetarea_start');
        dynamic_sidebar('offcanvas-drawer');
        do_action('offcanvas_drawer_widgetarea_end');
        ?>
    </div>
<?php
endif;
