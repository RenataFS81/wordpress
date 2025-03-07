<?php
/**
 * Title: Hero Banner Content
 * Slug: patterns-kindergarten/hero-banner-content
 * Categories: featured
 * Description: A layout that displays a title, content, and button group, suited for showcasing a hero banner.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","textTransform":"uppercase"}},"textColor":"primary","className":"has-base-color"} -->
<p class="has-base-color has-primary-color has-text-color" style="font-size:14px;text-transform:uppercase"><?php esc_html_e( 'Baby Care &amp; Kindergarten School', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"0.9","fontStyle":"normal","fontWeight":"900","fontSize":"4rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"default"} -->
<h2 class="wp-block-heading has-default-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:4rem;font-style:normal;font-weight:900;line-height:0.9"><?php esc_html_e( 'We Care Child Study ', 'patterns-kindergarten' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.7"}},"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40);line-height:1.7"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"width":"2px"},"typography":{"textTransform":"uppercase","fontSize":"13px","letterSpacing":"0.5px"}},"borderColor":"primary","className":"is-style-fill"} -->
<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:13px;letter-spacing:0.5px;text-transform:uppercase"><a class="wp-block-button__link has-border-color has-primary-border-color wp-element-button" style="border-width:2px"><?php esc_html_e( 'Start Learning', 'patterns-kindergarten' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
