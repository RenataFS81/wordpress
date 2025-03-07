<?php
if (!defined('ABSPATH')) {
    exit;
}

class Magnine_Multi_Grid_Post extends Magnine_Widget_Base
{
    /**
     * Sets up a new widget instance.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->widget_cssclass = 'magnine-multi-grid-post';
        $this->widget_description = __("Shows post in multi grid layout", 'magnine');
        $this->widget_id = 'Magnine_Multi_Grid_Post';
        $this->widget_name = __('MagNine: Multi Grid Post', 'magnine');
        $this->settings = $this->get_widget_settings();
        parent::__construct();
    }

    /**
     * Define widget settings.
     */
    protected function get_widget_settings()
    {
        return array(
            'title' => array(
                'type' => 'text',
                'label' => __('Title', 'magnine'),
            ),
            'title_size_1' => array(
                'type' => 'select',
                'label' => __('Font size for Prime Article', 'magnine'),
                'options' => array(
                    'entry-title-medium' => __('Medium', 'magnine'),
                    'entry-title-small' => __('Small', 'magnine'),
                ),
                'std' => 'entry-title-medium',
            ),
            'title_size_2' => array(
                'type' => 'select',
                'label' => __('Font size for Sub Articles', 'magnine'),
                'options' => array(
                    'entry-title-medium' => __('Medium', 'magnine'),
                    'entry-title-small' => __('Small', 'magnine'),
                ),
                'std' => 'entry-title-small',
            ),
            'number' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 2,
                'max' => 12,
                'std' => 5,
                'label' => __('Number of posts to show', 'magnine'),
            ),
            'offset'                  => array(
                'type'  => 'number',
                'step'  => 1,
                'min'   => 0,
                'max'   => '',
                'std'   => '',
                'label' => __( 'Offset', 'magnine' ),
                'desc'  => __( 'Offsets are used to skip a certain number of WordPress posts before starting output. Set it to 0 if you do not wish to use this feature.', 'magnine' ),
            ),
            'image_size' => array(
                'type' => 'select',
                'label' => __('Image size', 'magnine'),
                'options' => array(
                    'entry-image-large' => __('Large', 'magnine'),
                    'entry-image-big' => __('Big', 'magnine'),
                    'entry-image-medium' => __('Medium', 'magnine'),
                    'entry-image-small' => __('Small', 'magnine'),
                ),
                'std' => 'entry-image-big',
            ),
            'show_description' => array(
                'type' => 'checkbox',
                'label' => __('Show Description', 'magnine'),
                'std' => true,
            ),
            'category' => array(
                'type' => 'dropdown-taxonomies',
                'label' => __('Select Category', 'magnine'),
                'desc' => __('Leave empty if you don\'t want the posts to be category specific', 'magnine'),
                'args' => array(
                    'taxonomy' => 'category',
                    'class' => 'widefat',
                    'hierarchical' => true,
                    'show_count' => 1,
                    'show_option_all' => __('&mdash; Select &mdash;', 'magnine'),
                ),
            ),
            'show_category' => array(
                'type' => 'checkbox',
                'label' => __('Show Category', 'magnine'),
                'std' => true,
            ),
            'category_text' => array(
                'type' => 'text',
                'label' => __('Category Text', 'magnine'),
            ),
            'display_category_option' => array(
                'type' => 'select',
                'label' => __('Category Option', 'magnine'),
                'options' => array(
                    'none' => __('None', 'magnine'),
                    'has-background' => __('Has background', 'magnine'),
                    'has-text-color' => __('Has text color', 'magnine'),
                ),
                'std' => 'has-text-color',
            ),
            'number_of_cat' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 1,
                'std' => 1,
                'label' => __('Number of Category to show', 'magnine'),
            ),
            'show_date' => array(
                'type' => 'checkbox',
                'label' => __('Show Date', 'magnine'),
                'std' => true,
            ),
            'date_format' => array(
                'type' => 'select',
                'label' => __('Date Format', 'magnine'),
                'options' => array(
                    'format_1' => __('Format 1', 'magnine'),
                    'format_2' => __('Format 2', 'magnine'),
                ),
                'std' => 'format_1',
            ),
            'show_author' => array(
                'type' => 'checkbox',
                'label' => __('Show Author', 'magnine'),
                'std' => true,
            ),
            'display_author_option' => array(
                'type' => 'select',
                'label' => __('Author Option', 'magnine'),
                'options' => array(
                    'with_label' => __('With Label', 'magnine'),
                    'with_icon' => __('With Icon', 'magnine'),
                    'with_avatar_image' => __('With Avatar Image', 'magnine'),
                ),
                'std' => 'with_icon',
            ),
            'author_text' => array(
                'type' => 'text',
                'label' => __('Author Text', 'magnine'),
                'std' => __('By:', 'magnine'),
                'desc' => __('This only works when the "With Label" option is selected under "Author Option"', 'magnine'),
            ),
            'style' => array(
                'type' => 'select',
                'label' => __('Style', 'magnine'),
                'options' => array(
                    'style_1' => __('Style 1', 'magnine'),
                    'style_2' => __('Style 2', 'magnine'),
                ),
                'std' => 'style_1',
            ),
        );
    }

    /**
     * Query the posts and return them.
     * @param array $args
     * @param array $instance
     * @return WP_Query
     */
    public function get_posts($args, $instance)
    {
        $number = !empty($instance['number']) ? absint($instance['number']) : $this->settings['number']['std'];
        $query_args = array(
            'posts_per_page' => $number,
            'post_status' => 'publish',
            'no_found_rows' => 1,
            'offset' => !empty($instance['offset']) ? sanitize_text_field($instance['offset']) : $this->settings['offset']['std'],
            'ignore_sticky_posts' => 1
        );

        if ( isset($instance['offset']) && absint($instance['offset']) != 0 ) {
            $query_args['offset'] = absint($instance['offset']);
        }

        if (!empty($instance['category']) && -1 != $instance['category'] && 0 != $instance['category']) {
            $query_args['tax_query'][] = array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $instance['category'],
            );
        }
        return new WP_Query(apply_filters('Magnine_Multi_Grid_Post_query_args', $query_args));
    }

    /**
     * Output widget.
     *
     * @param array $args
     * @param array $instance
     * @see WP_Widget
     *
     */
    public function widget($args, $instance)
    {
        ob_start();
        $count = 1;
        if (($posts = $this->get_posts($args, $instance)) && $posts->have_posts()) {
            echo $args['before_widget'];
            do_action('magnine_before_simplepost_widget');
            ?>
            <?php if ($instance['title']) : ?>
                <h2 class="widget-title">
                    <?php echo esc_html($instance['title']); ?>
                </h2>
            <?php endif; ?>
            <div class="multi-grid-content <?php echo esc_attr($instance['style']); ?>">
                <?php while ($posts->have_posts()):
                $posts->the_post();
                $category_text = !empty($instance['category_text']) ? $instance['category_text'] : '';
                $display_category_option = !empty($instance['display_category_option']) ? $instance['display_category_option'] : $this->settings['display_category_option']['std'];
                $number_of_cat = !empty($instance['number_of_cat']) ? absint($instance['number_of_cat']) : $this->settings['number_of_cat']['std'];
                $show_author = !empty($instance['show_author']) ? $instance['show_author'] : $this->settings['show_author']['std'];
                $author_text = !empty($instance['author_text']) ? $instance['author_text'] : $this->settings['author_text']['std'];
                $display_author_option = !empty($instance['display_author_option']) ? $instance['display_author_option'] : $this->settings['display_author_option']['std'];
                ?>
                <?php if ($count == 1) { ?>
                <div class="widget-content-prime">
                    <article id="multi-grid-prime-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-regular'); ?>>
                        <?php $this->output_prime_content($instance, $category_text, $display_category_option, $number_of_cat, $show_author, $author_text, $display_author_option); ?>
                    </article>
                </div>
                <div class="widget-content-regular">
                    <?php $count++;
                    } else { ?>
                        <article id="multi-grid-regular-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-regular'); ?>>
                            <?php $this->output_list_content($instance, $category_text, $display_category_option, $number_of_cat, $show_author, $author_text, $display_author_option); ?>
                        </article>
                    <?php } ?>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <?php
            do_action('magnine_after_simplepost_widget');
            echo $args['after_widget'];
        }
        echo ob_get_clean();
    }

    /**
     * Output post content.
     *
     * @param array $instance
     */
    private function output_prime_content($instance, $category_text, $display_category_option, $number_of_cat, $show_author, $author_text, $display_author_option)
    {
        ?>
        <?php if (has_post_thumbnail()): ?>
        <div class="entry-image <?php echo esc_attr($instance['image_size']); ?> image-hover-effect hover-effect-shine">
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
            if (!empty($instance['show_category']) && $instance['show_category']) {
                magnine_post_category($display_category_option, $category_text, $number_of_cat);
            }
            ?>
            <?php the_title('<h3 class="entry-title ' . $instance['title_size_1'] . '"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
            <div class="entry-meta-wrapper">
                <?php if (!empty($instance['show_date']) && $instance['show_date']) : ?>
                    <div class="entry-meta entry-date posted-on">
                        <span class="screen-reader-text"><?php _e('Post Date', 'magnine'); ?></span>
                        <?php magnine_the_theme_svg('calendar'); ?>
                        <?php
                        $date_format = !empty($instance['date_format']) ? $instance['date_format'] : 'format_1';
                        if ('format_1' === $date_format) {
                            echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'magnine'));
                        } else {
                            echo esc_html(get_the_date());
                        }
                        ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($instance['show_author']) && $instance['show_author']) : ?>
                    <?php
                    if ($show_author) {
                        magnine_posted_by($display_author_option, $author_text);
                    }
                    ?>
                <?php endif; ?>
            </div>
            <?php
            if ($instance['show_description'] && has_excerpt()): ?>
                <div class="entry-content limit-line-4">
                    <?php the_excerpt(); ?>
                </div>
            <?php elseif ($instance['show_description']): ?>
                <div class="entry-content limit-line-4">
                    <?php echo esc_html(wp_trim_words(get_the_content(), 40, '...')); ?>
                </div>
            <?php endif; ?>
        </div>

        <?php
    }

    /**
     * Output post content.
     *
     * @param array $instance
     */
    private function output_list_content($instance, $category_text, $display_category_option, $number_of_cat, $show_author, $author_text, $display_author_option)
    {
        ?>
        <?php if (has_post_thumbnail()): ?>
        <div class="entry-image entry-image-thumbnail image-hover-effect hover-effect-slide">
            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail(
                    'medium',
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
            if (!empty($instance['show_category']) && $instance['show_category']) {
                magnine_post_category($display_category_option, $category_text, $number_of_cat);
            }
            ?>
            <?php the_title('<h3 class="entry-title ' . $instance['title_size_2'] . '"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
            <div class="entry-meta-wrapper">
                <?php if (!empty($instance['show_date']) && $instance['show_date']) : ?>
                    <div class="entry-meta entry-date posted-on">
                        <span class="screen-reader-text"><?php _e('Post Date', 'magnine'); ?></span>
                        <?php magnine_the_theme_svg('calendar'); ?>
                        <?php
                        $date_format = !empty($instance['date_format']) ? $instance['date_format'] : 'format_1';
                        if ('format_1' === $date_format) {
                            echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'magnine'));
                        } else {
                            echo esc_html(get_the_date());
                        }
                        ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($instance['show_author']) && $instance['show_author']) : ?>
                    <?php
                    if ($show_author) {
                        magnine_posted_by($display_author_option, $author_text);
                    }
                    ?>
                <?php endif; ?>
            </div>
        </div>
        <?php
    }
}