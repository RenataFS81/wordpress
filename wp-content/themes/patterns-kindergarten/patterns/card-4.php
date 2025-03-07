<?php
/**
 * Title: Card 4
 * Slug: patterns-kindergarten/card-4
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"150px"},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"100px"},"dimensions":{"minHeight":"90px"}},"backgroundColor":"primary","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:100px;min-height:90px"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-8.png"
style="width:50px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1","fontSize":"1.5rem"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"secondary"} -->
<h5 class="wp-block-heading has-text-align-left has-secondary-color has-text-color" style="margin-bottom:0px;font-size:1.5rem;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Transportation', 'patterns-kindergarten' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"0px"}},"typography":{"lineHeight":"1.4","fontSize":"17px"}},"textColor":"base"} -->
<p class="has-text-align-left has-base-color has-text-color" style="margin-bottom:0px;font-size:17px;line-height:1.4"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
