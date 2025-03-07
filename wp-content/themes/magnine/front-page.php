<?php
/**
 * The front page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package magnine
 */
get_header(); ?>

<div class="wpi-frontline-beginning"></div>
<?php
if ('posts' == get_option('show_on_front')) {
    if (!is_paged() && is_front_page()) {
        get_template_part('template-parts/section/frontline');
        get_template_part('template-parts/section/main-banner');
        get_template_part('template-parts/section/slider-banner');
        get_template_part('template-parts/section/article-list');
        get_template_part('template-parts/section/dual-insights');
        get_template_part('template-parts/section/split-block');
        get_template_part('template-parts/section/grid-list');
        get_template_part('template-parts/section/article-group');
        get_template_part('template-parts/section/must-read');
        get_template_part('template-parts/section/featured-category');
        get_template_part('template-parts/widgetarea/homepage-fullwidth-before-two-column');
        get_template_part('template-parts/widgetarea/homepage-two-column');
        get_template_part('template-parts/widgetarea/homepage-fullwidth-after-two-column');
    }
    include get_home_template();
} else {
    get_template_part('template-parts/section/frontline');
    get_template_part('template-parts/section/main-banner');
    get_template_part('template-parts/section/slider-banner');
    get_template_part('template-parts/section/article-list');
    get_template_part('template-parts/section/dual-insights');
    get_template_part('template-parts/section/split-block');
    get_template_part('template-parts/section/grid-list');
    get_template_part('template-parts/section/article-group');
    get_template_part('template-parts/section/must-read');
    get_template_part('template-parts/section/featured-category');
    if (!is_paged() && is_front_page()) {
        get_template_part('template-parts/widgetarea/homepage-fullwidth-before-two-column');
        get_template_part('template-parts/widgetarea/homepage-two-column');
        get_template_part('template-parts/widgetarea/homepage-fullwidth-after-two-column');
    }
    do_action('magnine_home_before_widget_area');
    ?>
    <main id="site-content" class="wpi-section wpi-latest-section" role="main">
        <div class="wrapper">
            <div class="row-group">
                <div id="primary" class="primary-area">
                    <div class="article-groups <?php echo esc_attr($archive_layout); ?>">
                        <?php
                        if (have_posts()) :
                            /* Start the Loop */
                            while (have_posts()) :
                                the_post();
                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part('template-parts/archive/archive', 'content');
                            endwhile;
                        else :
                            get_template_part('template-parts/content', 'none');
                        endif;
                        ?>
                    </div>
                    <?php
                    magnine_pagination_style();
                    ?>
                </div>
                <?php
                get_sidebar();
                ?>
            </div>
        </div>
    </main><!-- #main -->
    <?php
    if (!is_paged() && is_front_page()) {
        get_template_part('template-parts/widgetarea/homepage-fullwidth-bottom');
        get_template_part('template-parts/footer/footer-recommended');
    }
}
get_footer();
