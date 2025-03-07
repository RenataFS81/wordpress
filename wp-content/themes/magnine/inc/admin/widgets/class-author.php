<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Adds Magnine_Author_Widget widget.
 */
class Magnine_Author_Widget extends WP_Widget {

    /**
     * Sets up a new widget instance.
     */
    function __construct() {
        parent::__construct(
            'magnine_author_widget',
            esc_html__( 'MagNine: Author Widget', 'magnine' ),
            array( 'description' => esc_html__( 'Displays author information.', 'magnine' ) )
        );

        $this->social_networks = apply_filters(
            'magnine_author_widget_social_networks',
            array(
                'facebook',
                'twitter',
                'linkedin',
                'instagram',
                'pinterest',
                'youtube',
                'threads',
                'tiktok',
                'twitch',
                'vk',
                'whatsapp',
                'amazon',
                'codepen',
                'dropbox',
                'flickr',
                'vimeo',
                'spotify',
                'github',
                'reddit',
                'skype',
                'soundcloud',
            )
        );
    }

    /**
     * Outputs the content for the current widget instance.
     */
    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

        $image_border_radius = ! empty( $instance['image_border_radius'] ) ? ' has-border-radius' : '';

        echo '<div class="wpi-author-widget' . esc_attr( $image_border_radius ) . '">';

        if ( ! empty( $instance['author_img'] ) ) {
            echo '<div class="author-widget-image">';
            echo wp_get_attachment_image( absint( $instance['author_img'] ), 'medium_large', '', array( 'class' => 'img-responsive' ) );
            echo '</div>';
        }

        if ( ! empty( $instance['author_name'] ) ) {
            echo '<h3 class="author-widget-name">' . esc_html( $instance['author_name'] ) . '</h3>';
        }

        if ( ! empty( $instance['author_pos'] ) ) {
            echo '<p class="author-position">' . esc_html( $instance['author_pos'] ) . '</p>';
        }

        $this->display_social_links( $instance );

        if ( ! empty( $instance['author_desc'] ) ) {
            echo '<div class="author-desc">' . wpautop( wp_kses_post( $instance['author_desc'] ) ) . '</div>';
        }

        echo '</div>';

        echo $args['after_widget'];
    }

    /**
     * Display social links.
     */
    private function display_social_links( $instance ) {
        $social_networks = $this->social_networks;
        if ( empty( $social_networks ) || ! is_array( $social_networks ) ) {
            return;
        }

        $social_links = '';
        foreach ( $social_networks as $network ) {
            if ( ! empty( $instance[ $network ] ) ) {
                $svg = Magnine_SVG_Icons::get_social_link_svg( $instance[ $network ] );
                if ( $svg ) {
                    $social_links .= '<li><a href="' . esc_url( $instance[ $network ] ) . '" target="_blank">' . $svg . '</a></li>';
                }
            }
        }

        if ( ! empty( $social_links ) ) {
            $social_link_class = 'reset-list-style social-icons ' . $this->get_social_link_class( $instance );
            echo '<div class="author-social"><ul class="' . esc_attr( $social_link_class ) . '">' . $social_links . '</ul></div>';
        }
    }

    /**
     * Get social link class based on instance settings.
     */
    private function get_social_link_class( $instance ) {
        $social_border_radius = ! empty( $instance['social_border_radius'] ) ? ' has-border-radius' : '';
        $color = ! empty( $instance['social_links_color'] ) ? $instance['social_links_color'] : 'has-brand-background';

        return $social_border_radius . ' ' . $color;
    }

    /**
     * Back-end widget form.
     */
    public function form( $instance ) {
        $fields = array(
            'title'               => esc_html__( 'Title:', 'magnine' ),
            'author_name'         => esc_html__( 'Author Name:', 'magnine' ),
            'author_pos'          => esc_html__( 'Author Position:', 'magnine' ),
            'author_desc'         => esc_html__( 'Description:', 'magnine' ),
            'author_img'          => esc_html__( 'Image:', 'magnine' ),
            'image_border_radius' => esc_html__( 'Enable Image Border Radius', 'magnine' ),
            'social_border_radius' => esc_html__( 'Circular Social Icon', 'magnine' ),
            'social_links_color'  => esc_html__( 'Social Icon Color', 'magnine' ),
        );

        foreach ( $fields as $field => $label ) {
            $value = ! empty( $instance[ $field ] ) ? $instance[ $field ] : '';
            $this->render_field( $field, $label, $value, $instance );
        }

        $this->render_social_network_fields( $instance );
    }

    /**
     * Render a field in the form.
     */
    private function render_field( $field, $label, $value, $instance ) {
        $field_id = $this->get_field_id( $field );
        $field_name = $this->get_field_name( $field );

        switch ( $field ) {
            case 'author_desc':
                echo '<p><label for="' . esc_attr( $field_id ) . '">' . esc_html( $label ) . '</label>';
                echo '<textarea class="widefat" id="' . esc_attr( $field_id ) . '" name="' . esc_attr( $field_name ) . '">' . esc_textarea( $value ) . '</textarea></p>';
                break;

            case 'author_img': ?>

                <div class="image-field">
                    <label for="<?php echo esc_attr( $field_id ); ?>">
                        <?php echo esc_html( $label ); ?>
                    </label><br/>
                    <?php $remove_button_style = ( $value ) ? 'display:inline-block' : 'display:none;'; ?>
                    <div class="image-preview">
                        <?php
                        if ( ! empty( $value ) ) {
                            $image_attributes = wp_get_attachment_image_src( $value );
                            if ( $image_attributes ) {
                                echo '<img src="' . esc_url( $image_attributes[0] ) . '" />';
                            }
                        }
                        ?>
                    </div>
                    <p>
                        <input type="hidden" class="img" name="<?php echo esc_attr($field_name ); ?>" id="<?php echo esc_attr( $field_id ); ?>" value="<?php echo esc_attr( $value ); ?>" />
                        <button type="button" class="upload_image_button button" data-uploader-title-txt="<?php esc_attr_e( 'Use Image', 'magnine' ); ?>" data-uploader-btn-txt="<?php esc_attr_e( 'Choose an Image', 'magnine' ); ?>">
                            <?php esc_html_e( 'Upload/Add image', 'magnine' ); ?>
                        </button>
                        <button type="button" class="remove_image_button button" style="<?php echo esc_attr( $remove_button_style ); ?>"><?php esc_html_e( 'Remove image', 'magnine' ); ?></button>
                    </p>
                </div>

                <?php break;

            case 'image_border_radius':
                echo '<p><input class="checkbox" type="checkbox" ' . checked( $value, 'on', false ) . ' id="' . esc_attr( $field_id ) . '" name="' . esc_attr( $field_name ) . '" />';
                echo '<label for="' . esc_attr( $field_id ) . '">' . esc_html( $label ) . '</label></p>';
                break;

            case 'social_border_radius':
                echo '<p><input type="checkbox" ' . checked( $value, 'on', false ) . ' id="' . esc_attr( $field_id ) . '" class="checkbox" name="' . esc_attr( $field_name ) . '" />';
                echo '<label for="' . esc_attr( $field_id ) . '">' . esc_html( $label ) . '</label></p>';
                break;

            case 'social_links_color':
                $default_value = 'has-brand-background'; // Set your default value here
                $selected_value = empty($value) ? $default_value : $value;
                echo '<p><label for="' . esc_attr($field_id) . '">' . esc_html($label) . '</label>';
                echo '<select class="widefat" id="' . esc_attr($field_id) . '" name="' . esc_attr($field_name) . '">';
                foreach ($this->get_select_options($field) as $option_value => $option_label) {
                    echo '<option value="' . esc_attr($option_value) . '" ' . selected($selected_value, $option_value, false) . '>' . esc_html($option_label) . '</option>';
                }
                echo '</select></p>';
                break;

            default:
                echo '<p><label for="' . esc_attr( $field_id ) . '">' . esc_html( $label ) . '</label>';
                echo '<input class="widefat" id="' . esc_attr( $field_id ) . '" name="' . esc_attr( $field_name ) . '" type="text" value="' . esc_attr( $value ) . '" /></p>';
                break;
        }
    }

    /**
     * Render social network fields in the form.
     */
    private function render_social_network_fields( $instance ) {
        foreach ( $this->social_networks as $network ) {
            $value = ! empty( $instance[ $network ] ) ? $instance[ $network ] : '';
            ?>
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( $network ) ); ?>">
                    <?php echo esc_html( ucwords( $network ) . ' URL:' ); ?>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( $network ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( $network ) ); ?>" type="text" value="<?php echo esc_url( $value ); ?>">
            </p>
            <?php
        }
    }

    /**
     * Get options for select fields.
     */
    private function get_select_options( $field ) {
        switch ( $field ) {
            case 'social_links_color':
                return array(
                    'has-brand-background'  => esc_html__( 'Has Brand Background', 'magnine' ),
                    'has-default-color'   => esc_html__( 'Theme Color', 'magnine' ),
                    'has-brand-color'  => esc_html__( 'Has Brand Color', 'magnine' ),
                );

            default:
                return array();
        }
    }

    /**
     * Sanitize widget form values as they are saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();

        $fields = array(
            'title', 'author_name', 'author_pos', 'author_desc', 'author_img',
            'image_border_radius', 'social_border_radius', 'social_links_color',
        );

        foreach ( $fields as $field ) {
            $instance[ $field ] = ! empty( $new_instance[ $field ] ) ? strip_tags( $new_instance[ $field ] ) : '';
        }

        foreach ( $this->social_networks as $network ) {
            $instance[ $network ] = ! empty( $new_instance[ $network ] ) ? esc_url_raw( $new_instance[ $network ] ) : '';
        }

        return $instance;
    }
}
