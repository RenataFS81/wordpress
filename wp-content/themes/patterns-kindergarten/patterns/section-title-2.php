<?php
/**
 * Title: Section Title 2
 * Slug: patterns-kindergarten/section-title-2
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
	<p class="has-text-align-left has-primary-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;text-transform:uppercase"><?php esc_html_e( 'Services', 'patterns-kindergarten' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","className":"has-base-color"} -->
	<h3 class="wp-block-heading has-text-align-left has-base-color has-default-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:3rem;font-style:normal;font-weight:700;line-height:1.2"><?php esc_html_e( 'Best Services for Kids', 'patterns-kindergarten' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"tertiary","fontSize":"small"} -->
	<p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-small-font-size" style="margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas', 'patterns-kindergarten' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);letter-spacing:1px;text-transform:uppercase"><!-- wp:button {"textAlign":"center","className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e( 'View More', 'patterns-kindergarten' ); ?></a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
