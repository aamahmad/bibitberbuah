<?php

// WordPress Titles
add_theme_support( 'title-tag' );

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap_theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
	wp_enqueue_style( 'ie10', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css');
	wp_enqueue_style( 'custome_css', get_template_directory_uri() . '/custome.css');
	wp_enqueue_script( 'js_ie0emulation', get_template_directory_uri() . '/js/ie-emulation-modes-warning.js', array('jquery'), '3.3.6', true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );	