<?php
/**
 * Title: Our Story
 * Slug: thelattens-theme/our-story
 * Categories: thelattens-theme
 * Block Types: core/post-content
 * Post Types: page
 * Description: An "About us" page: how you met, the proposal, the wedding, and a days-married counter.
 *
 * @package   FoundryFrame
 * @subpackage TheLattensTheme
 * @author    James Latten <hello@jameslatten.com>
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://foundryframe.com
 * @since     1.0.0
 * @requires  PHP 8.0
 */

?>

<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">About us</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"placeholder":"Introduce the two of you in a sentence or two.","fontSize":"large"} -->
<p class="has-large-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card">
	<!-- wp:thelattens/days-together {"align":"center"} /-->
</div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">How we met</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Where were you, and what do you remember?"} -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">The proposal</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Tell the story of the question."} -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:pullquote -->
<figure class="wp-block-pullquote"><blockquote><p></p><cite></cite></blockquote></figure>
<!-- /wp:pullquote -->

<!-- wp:heading -->
<h2 class="wp-block-heading">The wedding</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Your favorite moments from the day."} -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"linkTo":"none","align":"wide"} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-default is-cropped"></figure>
<!-- /wp:gallery -->
