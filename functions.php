<?php
/**
 * Team Eight functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 */

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function teameight_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// Loads JavaScript file with functionality specific to Team Eight.
	wp_enqueue_script( 'teameight-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '2013-07-18', true );

	// Add Source Sans Pro and Bitter fonts, used in the main stylesheet.
	wp_enqueue_style( 'teameight-fonts', teameight_fonts_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/fonts/genericons.css', array(), '2.09' );
	 */

	// Loads our main stylesheet.
	wp_enqueue_style( 'teameight-style', get_template_directory_uri() . '/css/style.css', array(), '2013-12-02' );

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'teameight-ie', get_template_directory_uri() . '/css/ie.css', array( 'teameight-style' ), '2013-07-18' );
	wp_style_add_data( 'teameight-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'teameight_scripts_styles' );
