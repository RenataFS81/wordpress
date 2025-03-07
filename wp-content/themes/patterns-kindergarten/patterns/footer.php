<?php
/**
 * Title: Footer
 * Slug: patterns-kindergarten/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"
	style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/patternswp-logo-white.png" style="width:40px"/></figure>
<!-- /wp:image -->
<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px","lineHeight":"1.2"},"layout":{"selfStretch":"fixed","flexSize":"100px"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-tertiary-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10)"><?php esc_html_e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","className":"has-base-color","fontSize":"medium"} -->
<h6 class="wp-block-heading has-base-color has-default-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Contact Info', 'patterns-kindergarten' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"25px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:25px"><!-- wp:image {"width":"18px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-12.png"
style="width:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} -->
<p class="pwp-txt-dec-non has-link-color has-small-font-size" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-kindergarten' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"18px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-13.png"
style="width:18px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} -->
<p class="pwp-txt-dec-non has-link-color has-small-font-size" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-kindergarten' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:25px">

	<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only"} -->
	<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

	<!-- wp:social-link {"url":"#","service":"instagram"} /-->

	<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
	<!-- /wp:social-links -->

</div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","className":"has-base-color","fontSize":"medium"} -->
<h6 class="wp-block-heading has-base-color has-default-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Offices Hour', 'patterns-kindergarten' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-tertiary-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:700"><?php esc_html_e( 'Sunday - Friday', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-tertiary-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;margin-bottom:0px"><strong> <?php esc_html_e( '8.00am 6.00pm', 'patterns-kindergarten' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|default","style":"dashed","width":"2px"}},"spacing":{"margin":{"top":"15px","bottom":"15px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--default);border-top-style:dashed;border-top-width:2px;margin-top:15px;margin-bottom:15px"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|10"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-tertiary-color has-text-color has-link-color has-small-font-size" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'Every Saturday and Govt Holiday', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:0px;margin-bottom:0px"><strong><?php esc_html_e( 'Closed', 'patterns-kindergarten' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","className":"has-base-color","fontSize":"medium"} -->
<h6 class="wp-block-heading has-base-color has-default-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Recent News', 'patterns-kindergarten' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":2,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true,"style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|default"}}},"typography":{"fontSize":"0.94rem"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"color":{"background":"#1f1f1f4d"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background"
	style="background-color:#1f1f1f4d;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide">
<!-- wp:pattern {"slug":"patterns-kindergarten/copyright"} /-->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"patterns-kindergarten/scroll-to-top-button"} /-->
</div>
<!-- /wp:group -->
