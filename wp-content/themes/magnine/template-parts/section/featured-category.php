<?php 
$enable_featured_category = magnine_get_option('enable_featured_category');
$featured_category_title = magnine_get_option('featured_category_title');
?>
<?php if ($enable_featured_category ) { ?>
<section class="wpi-section wpi-categories-section">
    <div class="wrapper">
        <?php if ($featured_category_title): ?>
            <header class="section-header header-has-border">
                <h2 class="section-title">
                    <?php echo esc_html($featured_category_title); ?>
                </h2>
            </header>
        <?php endif; ?>
        <div class="wpi-section-content categories-section-content">
            <?php for ($i=1; $i <= 4 ; $i++) { 
            $featured_category = magnine_get_option('featured_category_'.$i);
                    $cat_info = get_category($featured_category);
                    if (!empty($cat_info)) {
                        $term_link = get_category_link($cat_info);
                        if (!empty( $cat_info->count)) {
                          $post_count = $cat_info->count;
                        } else {
                          $post_count = '';
                        }
                        if (!empty( $cat_info->name)) {
                          $term_name = $cat_info->name;
                        }else {
                          $term_name = '';
                        }
                        if (!empty( $cat_info->term_id)) {
                          $thumbnail_id = get_term_meta($cat_info->term_id, 'thumbnail_id', true);
                        }else {
                          $thumbnail_id = '';
                        }
                    ?>
                    <div class="wpi-category-panel">
                        <div class="entry-category-image">
                            <a class="post-thumbnail" href="<?php echo esc_url($term_link); ?>" aria-hidden="true" tabindex="-1">
                                <?php
                                echo wp_get_attachment_image($thumbnail_id, 'medium_large');
                                ?>
                            </a>
                        </div>
                        <div class="entry-category-details category-details-vertical">
                    
                            <span class="entry-category-count"><?php echo absint($post_count); echo __(' Articles','magnine');?> </span>
                            <h2 class="entry-category-title">
                                <a href="<?php echo esc_url($term_link); ?>" rel="bookmark"><?php echo esc_html($term_name); ?></a>
                            </h2>
                        </div>
                        <?php
                        $category_post_args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'no_found_rows' => 1,
                            'ignore_sticky_posts' => 1,
                            'posts_per_page' => 1,
                        );
                        $category_post_args['tax_query'][] = array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => absint($cat_info->term_id),
                        );
                        $category_post = new WP_Query($category_post_args);
                        while ($category_post->have_posts()) :
                        $category_post->the_post(); ?>
                            <div class="entry-category-details category-details-horizontal">
                                <span class="entry-category-label"> <?php echo __('Latest:','magnine');?> </span>
                                <header class="entry-header">
                                    <?php the_title('<h3 class="entry-title entry-title-small"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                </header>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>