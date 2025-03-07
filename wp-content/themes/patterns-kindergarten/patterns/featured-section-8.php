<?php
/**
 * Title: Featured Section 8
 * Slug: patterns-kindergarten/featured-section-8
 * Categories: featured, call-to-action
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background"><!-- wp:cover {"dimRatio":0,"minHeight":60,"minHeightUnit":"vh","isDark":false,"style":{"border":{"radius":"5px"}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-cover is-light" style="border-radius:5px;min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"14px","letterSpacing":"1px","lineHeight":"1.4"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"default"} -->
<h6 class="wp-block-heading has-text-align-left has-default-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:14px;font-style:normal;font-weight:400;letter-spacing:1px;line-height:1.4;text-transform:uppercase"><?php esc_html_e( 'Join with Us', 'patterns-kindergarten' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"default"} -->
<h3 class="wp-block-heading has-text-align-center has-default-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:3rem;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'Enroll Your Children in Our Kindergarten', 'patterns-kindergarten' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);letter-spacing:1px;text-transform:uppercase"><!-- wp:button {"textAlign":"center","backgroundColor":"secondary","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-background-color has-background has-text-align-center wp-element-button"><?php esc_html_e( 'Know More', 'patterns-kindergarten' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
