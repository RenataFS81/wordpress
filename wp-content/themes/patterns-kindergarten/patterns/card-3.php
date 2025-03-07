<?php
/**
 * Title: Card 3
 * Slug: patterns-kindergarten/card-3
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:5px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg" style="border-top-left-radius:5px;border-top-right-radius:5px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":5,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base","className":"has-base-color"} -->
<h5 class="wp-block-heading alignwide has-base-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:700"><?php esc_html_e( 'Cooking Fun Cake', 'patterns-kindergarten' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.5"}},"textColor":"quaternary","fontSize":"small"} -->
<p class="has-text-align-left has-quaternary-color has-text-color has-small-font-size" style="margin-bottom:0px;line-height:1.5"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"top":{"color":"#c8e1f0","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="border-top-color:#c8e1f0;border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<p style="margin-top:0px;margin-bottom:0px;font-size:13px"><?php esc_html_e( 'Age:', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"13px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-size:13px"><?php esc_html_e( '2-3 years', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<p style="margin-top:0px;margin-bottom:0px;font-size:13px"><?php esc_html_e( 'Time:', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"13px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-size:13px"><?php esc_html_e( '9:00-11:00', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
