<?php
/**
 * Title: Featured Section 2
 * Slug: patterns-kindergarten/featured-section-2
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background"
	style="padding-top:120px;padding-bottom:120px;"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"15px","left":"15px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">

<!-- wp:pattern {"slug":"patterns-kindergarten/section-title-2"} /-->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">

<!-- wp:pattern {"slug":"patterns-kindergarten/card-2"} /-->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:cover {"overlayColor":"default","minHeight":300,"contentPosition":"center center","isDark":false,"style":{"border":{"radius":"5px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"%"}} -->
<div class="wp-block-cover is-light" style="border-radius:5px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-default-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color" style="border-radius:5px"><!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-6.png"
style="width:64px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-bottom:0px;font-size:18px;font-style:normal;font-weight:400"><?php esc_html_e( 'Sports Training', 'patterns-kindergarten' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quaternary","fontSize":"small"} -->
<p class="has-text-align-center has-quaternary-color has-text-color has-link-color has-small-font-size" style="margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas', 'patterns-kindergarten' ); ?> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:cover {"overlayColor":"default","minHeight":300,"contentPosition":"center center","isDark":false,"style":{"border":{"radius":"5px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"%"}} -->
<div class="wp-block-cover is-light" style="border-radius:5px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-default-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color" style="border-radius:5px"><!-- wp:image {"width":"64px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-7.png"
style="width:64px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"0px"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-bottom:0px;font-size:18px;font-style:normal;font-weight:400"><?php esc_html_e( 'Music Training', 'patterns-kindergarten' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"quaternary","fontSize":"small"} -->
<p class="has-text-align-center has-quaternary-color has-text-color has-link-color has-small-font-size" style="margin-bottom:0px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
