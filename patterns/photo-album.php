<?php
/**
 * Title: Photo Album
 * Slug: thelattens-theme/photo-album
 * Categories: thelattens-theme
 * Block Types: core/post-content
 * Post Types: thelattens_album
 * Description: A short intro followed by a wide photo gallery with lightbox.
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

<!-- wp:paragraph {"placeholder":"Set the scene: where and when was this?","fontSize":"large"} -->
<p class="has-large-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"linkTo":"none","align":"wide"} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-default is-cropped"></figure>
<!-- /wp:gallery -->
