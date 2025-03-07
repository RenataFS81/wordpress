<?php
/**
 * Title: Landing
 * Slug: patterns-kindergarten/landing
 * Template Types: front-page
 * Post Types: page
 * Description: A layout template for displaying the main landing front page.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->
<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:pattern {"slug":"patterns-kindergarten/hero-banner"} /-->
	<!-- wp:pattern {"slug":"patterns-kindergarten/featured-section-1"} /-->
	<!-- wp:pattern {"slug":"patterns-kindergarten/featured-section-2"} /-->
	<!-- wp:pattern {"slug":"patterns-kindergarten/featured-section-3"} /-->
	<!-- wp:pattern {"slug":"patterns-kindergarten/featured-section-4"} /-->

	
	<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":""}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"top":"0px","bottom":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:0px;padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top"><!-- wp:pattern {"slug":"patterns-kindergarten/featured-section-5"} /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top"><!-- wp:pattern {"slug":"patterns-kindergarten/featured-section-6"} /--></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:pattern {"slug":"patterns-kindergarten/featured-section-7"} /-->

		</div>
		<!-- /wp:group --> 

	<!-- wp:pattern {"slug":"patterns-kindergarten/featured-section-8"} /-->
	<!-- wp:pattern {"slug":"patterns-kindergarten/featured-section-9"} /-->
	<!-- wp:pattern {"slug":"patterns-kindergarten/featured-section-10"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
