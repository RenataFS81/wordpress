<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                    <div class="article-groups <?php echo esc_attr($archive_layout);?>">

                    <?php if (have_posts()) : ?>
                        <header class="page-header">
                            <h1 class="page-title">
                                <?php
                                /* translators: %s: search query. */
                                printf(esc_html__('Search Results for: %s', 'magnine'), '<span>' . get_search_query() . '</span>');
                                ?>
                            </h1>
                        </header><!-- .page-header -->
                        <?php
                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();
                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part('template-parts/content', 'search');
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
