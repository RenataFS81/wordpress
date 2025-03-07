<?php
/**
 * Title: Featured Section 9
 * Slug: patterns-kindergarten/featured-section-9
 * Categories: featured, call-to-action
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"default","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","wideSize":"500px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;text-transform:uppercase"><?php esc_html_e( 'Top Popular Courses', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"base","className":"has-base-color"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-base-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:3rem;font-style:normal;font-weight:700"><?php esc_html_e( 'Get from our news &amp; article', 'patterns-kindergarten' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"1","width":"","height":"250px","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"background":"#f3f4fd"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f3f4fd;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-date {"displayType":"modified","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"13px"}},"textColor":"primary"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"20px"}}} /-->

<!-- wp:post-excerpt {"excerptLength":10,"style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"15px"}}},"textColor":"quaternary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
