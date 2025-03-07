<?php
/**
 * Displays header site branding
 *
 * @package MagNine
 */

$blog_info = get_bloginfo('name');
$description = get_bloginfo('description', 'display');
$hide_title = magnine_get_option('hide_title');
$hide_tagline = magnine_get_option('hide_tagline');
$header_class = $hide_title ? 'screen-reader-text' : 'site-title';
?>

<div class="site-branding">
    <?php
    if (has_custom_logo()) {
        ?>
        <div class="site-logo">
            <?php the_custom_logo(); ?>
        </div>
        <?php
    }
    if ($blog_info) {
        ?>
        <h1 class="<?php echo esc_attr($header_class); ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($blog_info); ?></a></h1>
        <?php
    }
    ?>

    <?php if ($description && !$hide_tagline) : ?>
        <div class="site-description">
            <?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
        </div>
    <?php endif; ?>
</div><!-- .site-branding -->
