<?php
/**
 * Title: Featured Section 13
 * Slug: patterns-kindergarten/featured-section-13
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;text-transform:uppercase"><?php esc_html_e( 'Get in Touch with Us', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"secondary","className":"has-base-color"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-secondary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:3rem;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'Leave a Message', 'patterns-kindergarten' ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:shortcode -->
<?php esc_html_e( 'Add Contact form shortcode', 'patterns-kindergarten' ); ?>
<!-- /wp:shortcode --></div>
<!-- /wp:group -->
