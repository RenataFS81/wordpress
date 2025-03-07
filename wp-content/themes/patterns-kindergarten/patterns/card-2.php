<?php
/**
 * Title: Card 2
 * Slug: patterns-kindergarten/card-2
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"overlayColor":"default","minHeight":300,"isDark":false,"style":{"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:5px;min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-default-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color" style="border-radius:5px"><!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-5.png"
style="width:64px"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-bottom:0px;font-size:18px;font-style:normal;font-weight:400"><?php esc_html_e( 'Bus Service', 'patterns-kindergarten' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quaternary","fontSize":"small"} -->
<p class="has-text-align-center has-quaternary-color has-text-color has-link-color has-small-font-size" style="margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
