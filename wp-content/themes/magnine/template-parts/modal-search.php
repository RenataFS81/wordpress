<?php
/**
 * Displays the search icon and modal
 *
 * @package MagNine
 */
?>
<div class="search-modal cover-modal" data-modal-target-string=".search-modal" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e('Search', 'magnine'); ?>">
    <div class="search-modal-inner modal-inner">
        <div class="wrapper">
            <div class="search-modal-panel">
                <h2><?php esc_html_e('What are You Looking For?', 'magnine'); ?></h2>
                <div class="search-modal-form">
                    <?php
                    get_search_form(
                        array(
                            'aria_label' => __('Search for:', 'magnine'),
                        )
                    );
                    ?>
                </div>

                <?php get_template_part('template-parts/header/search-trending-post'); ?>

                <button class="toggle search-untoggle close-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field">
                    <span class="screen-reader-text">
                        <?php _e('Close search', 'magnine'); ?>
                    </span>
                    <?php magnine_the_theme_svg('cross'); ?>
                </button><!-- .search-toggle -->
            </div>
        </div>
    </div><!-- .search-modal-inner -->
</div><!-- .menu-modal -->
