<?php
/**
 * Title: Primary Header
 * Slug: patterns-kindergarten/hidden-primary-header
 * Inserter: no
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--10); padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-default-color has-text-color has-link-color"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png"
style="width:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"13px"}}} -->
<p style="margin-top:0px;margin-bottom:0px;font-size:13px"><?php esc_html_e( 'Mon - Fri 9:00 -17:00', 'patterns-kindergarten' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-default-color has-text-color has-link-color"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png"
style="width:16px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"13px"}}} -->
<p class="pwp-txt-dec-non" style="margin-top:0px;margin-bottom:0px;font-size:13px"><a href="<?php echo esc_url( 'callto:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-kindergarten' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-default-color has-text-color has-link-color"><!-- wp:image {"width":"16px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-3.png"
style="width:16px"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"13px"}}} -->
<p class="pwp-txt-dec-non" style="margin-top:0px;margin-bottom:0px;font-size:13px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-kindergarten' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
	<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-small-icon-size","align":"center","className":"is-style-logos-only"} -->
	<ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

	<!-- wp:social-link {"url":"#","service":"instagram"} /-->

	<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
	<!-- /wp:social-links -->

<!-- wp:loginout /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">	
		
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group"> 
				<!-- wp:pattern {"slug":"patterns-kindergarten/site-identity"} /-->
				<!-- wp:pattern {"slug":"patterns-kindergarten/navigation-menu"} /-->
			</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Enroll Now', 'patterns-kindergarten' ); ?></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
	

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
