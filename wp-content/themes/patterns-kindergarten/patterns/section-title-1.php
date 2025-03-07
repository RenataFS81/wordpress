<?php
/**
 * Title: Section Title 1
 * Slug: patterns-kindergarten/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;text-transform:uppercase"><?php esc_html_e( 'Start a New Journey', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","className":"has-base-color","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"secondary"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-secondary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:3rem;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'Welcome to Baby Care &amp; Kindergarten', 'patterns-kindergarten' ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->
