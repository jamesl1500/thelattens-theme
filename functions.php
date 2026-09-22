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
		register_block_pattern_category(
			'thelattens-theme',
			array( 'label' => __( 'The Lattens', 'thelattens' ) )
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'polaroid',
				'label' => __( 'Polaroid', 'thelattens' ),
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'card',
				'label' => __( 'Card', 'thelattens' ),
			)
		);

		register_block_style(
			'core/paragraph',
			array(
				'name'  => 'eyebrow',
				'label' => __( 'Eyebrow', 'thelattens' ),
			)
		);

		wp_enqueue_block_style(
			'core/image',
			array(
				'handle' => 'thelattens-core-image-style',
				'src'    => get_theme_file_uri( 'assets/css/blocks/core-image.css' ),
				'path'   => get_theme_file_path( 'assets/css/blocks/core-image.css' ),
			)
		);
	}
}

if ( ! function_exists( __NAMESPACE__ . '\enqueue_assets' ) ) {
	/**
	 * Loads the shared theme stylesheet on the front end and inside the editor.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function enqueue_assets() {
		$path = get_theme_file_path( 'assets/css/theme.css' );

		wp_enqueue_style(
			'thelattens-theme',
			get_theme_file_uri( 'assets/css/theme.css' ),
			array(),
			file_exists( $path ) ? (string) filemtime( $path ) : wp_get_theme()->get( 'Version' )
		);
	}
}

if ( ! function_exists( __NAMESPACE__ . '\preload_fonts' ) ) {
	/**
	 * Preloads the fonts used above the fold on every page.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function preload_fonts() {
		$fonts = array(
			'fraunces-variable.woff2',
			'fraunces-variable-italic.woff2',
			'figtree-variable.woff2',
		);

		foreach ( $fonts as $font ) {
			printf(
				'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
				esc_url( get_theme_file_uri( 'assets/fonts/' . $font ) )
			);
		}
	}
}

add_action( 'init', __NAMESPACE__ . '\init' );
add_action( 'wp_head', __NAMESPACE__ . '\preload_fonts', 1 );
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\enqueue_assets' );
