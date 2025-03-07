<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MagNine
 */
get_header();
$archive_layout = magnine_get_option('archive_layout');
?>
    <main id="site-content" class="wpi-section wpi-latest-section" role="main">
        <div class="wrapper">
            <?php get_template_part('template-parts/archive/archive-header'); ?>

            <div class="row-group">
                <div id="primary" class="primary-area">
                    <div class="article-groups <?php echo esc_attr($archive_layout); ?>">
                        <?php if (have_posts()) : ?>
                            <?php
                            /* Start the Loop */
                            while (have_posts()) :
                                the_post();
                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part('template-parts/archive/archive-content');
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
get_footer();
