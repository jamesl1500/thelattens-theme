<?php

/**
 * The Lattens Theme
 * ------------------------------
 * function.php file for The Lattens Theme.
 *
 * @category   Theme
 * @package    FoundryFrame
 * @subpackage TheLattensTheme
 * @author     James Latten <hello@jameslatten.com>
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://foundryframe.com
 * @since      1.0.0
 * @requires   PHP 8.0
 */

namespace TheLattensTheme;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( __NAMESPACE__ . '\init' ) ) {
	/**
	 * Initializes the theme.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function init() {
		// Register Block Patterns
		register_block_pattern_category(
			'thelattens-theme',
			array( 'label' => __( 'The Lattens Theme', 'thelattens' ) )
		);

		// Register block style
		register_block_style(
			'core/image',
			array(
				'name'  => 'thelattens-theme-image-style',
				'label' => __( 'Polaroid', 'thelattens' ),
			)
		);

		wp_enqueue_block_style(
			'core/image',
			array(
				'handle' => 'thelattens-core-image-style',
				'src'    => get_theme_file_uri( 'assets/css/block/core-image.css' ),
				'path'   => get_theme_file_path( 'assets/css/block/core-image.css' ),
			)
		);
	}
}

add_action(
	'init',
	__NAMESPACE__ . '\init'
);
