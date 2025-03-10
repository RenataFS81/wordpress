<?php
/**
 * Title: Query List
 * Slug: patterns-kindergarten/query-list
 * Categories: query
 * Block Types: core/query
 * Description: Display a query block in a list layout.
 *
 * @package    Patterns_Kindergarten
 * @subpackage Patterns_Kindergarten/patterns
 * @since      1.0.0
 */

?>
<!-- wp:query {"query":{"inherit":true,"postType":"post"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">
<!-- wp:post-template {"align":"wide","layout":{"type":"default"}} -->
<!-- wp:post-title {"isLink":true} /-->

<!-- wp:pattern {"slug":"patterns-kindergarten/post-meta"} /-->

<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"clamp(15vw, 30vh, 400px)","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->

<!-- wp:post-excerpt {"moreText":""} /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<?php
	// Need to include from PHP since wp:pattern not working
	// <!-- wp:pattern {"slug":"patterns-kindergarten/pagination"} /-->
	// <!-- wp:pattern {"slug":"patterns-kindergarten/hidden-query-no-results"} /--> .
	require 'pagination.php';
	require 'hidden-query-no-results.php';
?>

</div>
<!-- /wp:query -->
