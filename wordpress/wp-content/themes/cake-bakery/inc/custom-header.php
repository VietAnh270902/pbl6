<?php
/**
 * @package Cake Bakery
 * Setup the WordPress core custom header feature.
 *
*/
function cake_bakery_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'cake_bakery_custom_header_args', array(
		'default-text-color'    => 'fff',
		'header-text' 		    => false,
		'width'                 => 1600,
		'height'                => 515,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
	) ) );
}
add_action( 'after_setup_theme', 'cake_bakery_custom_header_setup' );