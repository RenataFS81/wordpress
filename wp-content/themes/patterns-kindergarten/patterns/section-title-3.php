<?php
/**
 * Title: Section Title 3
 * Slug: patterns-kindergarten/section-title-3
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

	<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"14px","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary"} -->
	<p class="has-text-align-left has-primary-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;text-transform:uppercase"><?php esc_html_e( 'Facilities', 'patterns-kindergarten' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"secondary"} -->
<h2 class="wp-block-heading has-text-align-left has-secondary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40);font-size:3rem;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Best Facilities for Kids', 'patterns-kindergarten' ); ?></h3>
	<!-- /wp:heading -->

</div>
<!-- /wp:group -->
