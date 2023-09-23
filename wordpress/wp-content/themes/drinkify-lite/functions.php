<?php
/**
 * Drinkify Lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Drinkify Lite
 * @since 1.0
 */

if ( ! function_exists( 'drinkify_lite_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function drinkify_lite_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'drinkify_lite_support' );

if ( ! function_exists( 'drinkify_lite_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */

	function drinkify_lite_styles() {
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'drinkify-lite-style',
			get_template_directory_uri() . '/style.css',
			array(),
			filemtime( get_theme_file_path( 'style.css' ) )
		);
		
		wp_enqueue_script(
            'drinkify-lite-script',
            get_theme_file_uri( 'assets/js/custom.js' ),
            array(),
            filemtime( get_theme_file_path( 'assets/js/custom.js' ) ),
            true
        );
	}

endif;

add_action( 'wp_enqueue_scripts', 'drinkify_lite_styles' );

if ( ! function_exists( 'drinkify_lite_block_editor_styles' ) ) :
    
    /**
     * Enqueue rtl editor styles
     */
    
     function drinkify_lite_block_editor_styles() {
        if( is_rtl() ){
            wp_enqueue_style(
                'drinkify-lite-rtl',
                get_theme_file_uri( 'rtl.css' ),
                array(),
                filemtime( get_theme_file_path( 'rtl.css' ) )
            );
        }
    }

endif;

add_action( 'enqueue_block_editor_assets', 'drinkify_lite_block_editor_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';