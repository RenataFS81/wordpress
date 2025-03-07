<?php
global $post;
$post_id = $post->ID;

$author_posts_text = magnine_get_option('author_posts_text');
$no_of_author_posts = absint(magnine_get_option('no_of_author_posts'));
$order = esc_attr(magnine_get_option('author_posts_order'));
$orderby = esc_attr(magnine_get_option('author_posts_orderby'));

$enable_author_posts_author_meta = magnine_get_option('enable_author_posts_author_meta');
$select_author_posts_author_meta = magnine_get_option('select_author_posts_author_meta');
$author_posts_author_meta_title = magnine_get_option('author_posts_author_meta_title');
$author_posts_number_of_post_offsets = magnine_get_option('author_posts_number_of_post_offsets');

$enable_author_posts_date_meta = magnine_get_option('enable_author_posts_date_meta');
$select_author_posts_date = magnine_get_option('select_author_posts_date');
$single_author_post_date_meta_title = magnine_get_option('single_author_post_date_meta_title');
$select_author_posts_date_format = magnine_get_option('select_author_posts_date_format');

$enable_author_posts_category_meta = magnine_get_option('enable_author_posts_category_meta');
$author_posts_category_label = magnine_get_option('author_posts_category_label');
$select_author_posts_category_color = magnine_get_option('select_author_posts_category_color');
$select_author_posts_number_of_category = magnine_get_option('select_author_posts_number_of_category');

if ($author_posts_number_of_post_offsets) {
    $author_post_offset = $author_posts_number_of_post_offsets;
} else {
    $author_post_offset = '';
}

// Covert id to ID to make it work with query
if ('id' == $orderby) {
    $orderby = 'ID';
}

$author_posts_args = array(
    'author' => get_the_author_meta('ID'),
    'post_type' => 'post',
    'post__not_in' => array($post_id),
    'posts_per_page' => $no_of_author_posts,
    'offset' => $author_post_offset,
    'ignore_sticky_posts' => 1,
    'orderby' => $orderby,
    'order' => $order,
);
$author_posts_query = new WP_Query($author_posts_args);

if ($author_posts_query->have_posts()):
    ?>
    <section class="wpi-section wpi-single-section single-author-posts">
        <header class="section-header header-has-border">
            <h2 class="section-title">
                <?php echo esc_html($author_posts_text); ?>
            </h2>
        </header>
        <div class="wpi-section-content author-posts-content">
            <?php while ($author_posts_query->have_posts()):$author_posts_query->the_post(); ?>
                <article id="author-post-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>
                    <?php if (has_post_thumbnail()): ?>
                        <div class="entry-image entry-image-small image-hover-effect hover-effect-shine">
                            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                <?php
                                the_post_thumbnail(
                                    'medium_large',
                                    array(
                                        'alt' => the_title_attribute(
                                            array(
                                                'echo' => false,
                                            )
                                        ),
                                    )
                                );
                                ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="entry-details">
                        <?php 
                        if ($enable_author_posts_category_meta) {
                            magnine_post_category( $select_author_posts_category_color, $author_posts_category_label,$select_author_posts_number_of_category );
                        }
                        ?>
                        <header class="entry-header">
                            <?php the_title('<h3 class="entry-title entry-title-small"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                        </header>
                        <div class="entry-meta">
                            
                            <?php
                            if ($enable_author_posts_date_meta) {
                                magnine_posted_on($select_author_posts_date_format, $single_author_post_date_meta_title ,$select_author_posts_date);
                            }
                            ?>
                            <div class="entry-meta-separator"></div>
                            <?php
                            if ($enable_author_posts_author_meta) {
                                magnine_posted_by($select_author_posts_author_meta , $author_posts_author_meta_title);
                            }
                            ?>
                        </div>
                    </div>
                </article>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </section>
<?php
endif;