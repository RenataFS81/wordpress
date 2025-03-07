<?php
/**
 * Title: Featured Section 10
 * Slug: patterns-kindergarten/featured-section-10
 * Categories: featured, call-to-action
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","wideSize":"500px"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","textTransform":"uppercase"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-size:14px;text-transform:uppercase"><?php esc_html_e( 'Top Popular Courses', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'We collaborate with 200+Leading universities &amp; companies', 'patterns-kindergarten' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-1.png" style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-2.png" style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-3.png" style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-4.png" style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-5.png" style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
