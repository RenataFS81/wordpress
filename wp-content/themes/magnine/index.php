<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
            <div class="row-group">
                <div id="primary" class="primary-area">
                    <?php magnine_get_breadcrumb(); ?>
                    <?php if ( ! is_paged() && is_front_page() ) { 
                        if ( is_active_sidebar( 'homepage-before-posts' ) ) {
                            dynamic_sidebar('homepage-before-posts');
                        }
                    }?>
                    <div class="article-groups <?php echo esc_attr($archive_layout);?>">
                    <?php
                    if (have_posts()) :
                        if (is_home() && !is_front_page()) :
                            ?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                        <?php
                        endif;
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();
                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part('template-parts/archive/archive','content');
                        endwhile;

                    else :
                        get_template_part('template-parts/content', 'none');
                    endif;
                    ?>
                    </div>

                    <?php
                    magnine_pagination_style();
                     ?>
                     <?php if ( ! is_paged() && is_front_page() ) { 
                         if ( is_active_sidebar( 'homepage-after-posts' ) ) {
                             dynamic_sidebar('homepage-after-posts');
                         }
                     }?>
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
get_footer();
