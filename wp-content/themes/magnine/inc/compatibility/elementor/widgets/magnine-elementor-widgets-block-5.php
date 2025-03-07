<?php
/**
 * MagNine Elementor Widget Block 5.
 *
 * @package    MagNine
 * @since      MagNine 1.0.0
 */

namespace Elementor\Widgets;

use Elementor\Widgets\Magnine_Elementor_Widget_Base;
use Elementor\Controls_Manager;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * MagNine Elementor Widget Block 5.
 *
 * Class MagNine_Elementor_Widgets_Block_5
 */
class MagNine_Elementor_Widgets_Block_5 extends Magnine_Elementor_Widget_Base
{

    /**
     * Post number.
     *
     * @var int
     */
    public $post_number = 4;

    /**
     * Retrieve MagNine_Elementor_Widgets_Block_5 widget name.
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name()
    {
        return 'MagNine-Posts-Block-5';
    }

    /**
     * Retrieve MagNine_Elementor_Widgets_Block_5 widget title.
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title()
    {
        return esc_html__('Block Style 5', 'magnine');
    }

    /**
     * Retrieve MagNine_Elementor_Widgets_Block_5 widget icon.
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'magnine-econs-block-5';
    }

    /**
     * Retrieve the list of categories the MagNine_Elementor_Widgets_Block_5 widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return array('magnine-widget-blocks');
    }

    /**
     * Extra option control related to widget Excerpt section.
     */
    public function posts_controls_excerpt() {
        $this->add_control(
            'enable_post_excerpt',
            [
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label' => esc_html__('Post Excerpt', 'magnine'),
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'post_line_limit',
            [
                'type' => \Elementor\Controls_Manager::SELECT,
                'label' => esc_html__('Content Line Limit', 'magnine'),
                'options' => [
                    'limit-line-1' => esc_html__( '1 Line', 'magnine' ),
                    'limit-line-2' => esc_html__( '2 Lines', 'magnine' ),
                    'limit-line-3' => esc_html__( '3 Lines', 'magnine' ),
                    'limit-line-4' => esc_html__( '4 Lines', 'magnine' ),
                    'limit-line-5' => esc_html__( '5 Lines', 'magnine' ),
                ],
                'default' => 'limit-line-3',
            ]
        );
    }

    /**
     * Render MagNine_Elementor_Widgets_Block_5 widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @access protected
     */
    protected function render()
    {

        $widget_title = $this->get_settings('widget_title');
        $posts_number = $this->get_settings('posts_number');
        $enable_post_excerpt = $this->get_settings('enable_post_excerpt');
        $post_line_limit = $this->get_settings('post_line_limit');

        $enable_category_meta = $this->get_settings('enable_category_meta');
        $category_meta_text = $this->get_settings('category_meta_text');
        $display_category_option = $this->get_settings('display_category_option');
        $number_of_cat = $this->get_settings('number_of_cat');

        $enable_author_meta = $this->get_settings('enable_author_meta');
        $display_author_option = $this->get_settings('display_author_option');
        $author_text = $this->get_settings('author_text');

        $enable_date_meta = $this->get_settings('enable_date_meta');
        $date_format = $this->get_settings('date_format');

        $display_type = $this->get_settings('display_type');
        $offset_posts_number = $this->get_settings('offset_posts_number');
        $categories_selected = $this->get_settings('categories_selected');

        // Create the posts query.
        $get_featured_posts = $this->query_posts($posts_number, $display_type, $categories_selected, $offset_posts_number);

        ?>

        <div class="magnine-module-block magnine-module-block-style-5 magnine-element-wrapper wrapper-gutter-medium">
            <?php
            // Display the widget title.
            $this->widget_title($widget_title);
            ?>

            <?php
            $count = 1;
            while ($get_featured_posts->have_posts()) :
                $get_featured_posts->the_post();
                $featured_image_size = 'medium_large';
                if (1 === $count) :
                    echo '<article class="wpi-post-module-block wpi-post wpi-post-regular">'; // phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped
                elseif (2 <= $count) : // add grid style after first post.
                    echo '<article class="wpi-post-module-block wpi-post wpi-post-list post-list-bullet">'; // phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped
                endif;

                if ((1 === $count) && (has_post_thumbnail())) :
                    ?>
                    <div class="elementor-entry-image entry-image image-hover-effect hover-effect-shine entry-image-big">
                        <?php
                        $this->the_post_thumbnail($featured_image_size);
                        ?>
                    </div>
                <?php endif; ?>

                <div class="elementor-entry-details entry-details">
                    <?php
                    if ($count === 1 && $enable_category_meta === 'yes') {
                        magnine_post_category($display_category_option, $category_meta_text, $number_of_cat);
                    }
                    ?>

                    <?php

                    // Display the post title.
                    $this->the_title();

                    if (1 === $count) { ?>
                        <div class="entry-meta-wrapper">
                            <?php
                            // Displays the entry meta.
                            if ($enable_date_meta == 'yes') { ?>
                                <div class="entry-meta entry-date posted-on">
                                    <span class="screen-reader-text"><?php _e('Post Date', 'magnine'); ?></span>
                                    <?php magnine_the_theme_svg('calendar'); ?>
                                    <?php
                                    if ('format_1' === $date_format) {
                                        echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'magnine'));
                                    } else {
                                        echo esc_html(get_the_date());
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            if ($enable_author_meta == 'yes') {
                                magnine_posted_by($display_author_option, $author_text);
                            } ?>
                        </div>


                        <?php if ($enable_post_excerpt == 'yes') { ?>
                            <div class="entry-content <?php echo esc_attr($post_line_limit); ?>">
                                <?php
                                // Displays the post excerpts.
                                the_excerpt();
                                ?>
                            </div>
                        <?php } ?>

                    <?php } ?>
                </div>

                <?php
                if (1 === $count || 2 <= $count) {
                    echo '</article>';
                }

                $count++;
            endwhile;

            // Reset the postdata.
            wp_reset_postdata();
            ?>
        </div>

        <?php
    }

}

