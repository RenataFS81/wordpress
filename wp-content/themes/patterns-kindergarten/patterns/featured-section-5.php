<?php
/**
 * Title: Featured Section 5
 * Slug: patterns-kindergarten/featured-section-5
 * Categories: featured,testimonials
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"14px","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary"} -->
<p class="has-text-align-left has-primary-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:14px;text-transform:uppercase"><?php esc_html_e( 'Testimonials', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem","lineHeight":"1"}},"textColor":"secondary"} -->
<h2 class="wp-block-heading has-text-align-left has-secondary-color has-text-color" style="font-size:3rem;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Happy Parents Say', 'patterns-kindergarten' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0px"},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","className":"has-base-color"} -->
<h5 class="wp-block-heading has-text-align-left has-base-color has-primary-color has-text-color has-link-color" style="font-size:15px;font-style:normal;font-weight:600"><?php esc_html_e( 'Donald Mark', 'patterns-kindergarten' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","className":"has-base-color"} -->
<p class="has-text-align-left has-base-color has-default-color has-text-color has-link-color" style="font-size:14px"><?php esc_html_e( '/ Kids Father', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"20px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-11.png" style="width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"20px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-11.png" style="width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"20px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-11.png" style="width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"20px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-11.png" style="width:20px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"20px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-11.png" style="width:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"400","lineHeight":1.6},"spacing":{"margin":{"top":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} -->
<p class="has-text-align-left has-default-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);font-size:20px;font-style:normal;font-weight:400;line-height:1.6"><?php esc_html_e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"70px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(0, 0, 0)","rgb(243, 243, 243)"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.png" style="width:auto;height:70px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.png"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"auto","height":"70px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(0, 0, 0)","rgb(255, 255, 255)"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.png" style="width:auto;height:70px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
