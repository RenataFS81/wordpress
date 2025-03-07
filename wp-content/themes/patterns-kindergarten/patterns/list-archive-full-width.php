<?php
/**
 * Title: Archive Full Width
 * Slug: patterns-kindergarten/list-archive-full-width
 * Template Types: archive, home, search, category, tag, author, date
 * Description: Full-width layout template for displaying archives without sidebars.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-absolute","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:template-part {"slug":"list-archive-header", "align":"full"} /-->
	<!-- wp:spacer {"height":"80px"} -->
	<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
		
		<!-- wp:pattern {"slug":"patterns-kindergarten/query-list"} /-->
	</div>
	<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
