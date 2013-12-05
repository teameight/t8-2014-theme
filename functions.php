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
 * Team Eight setup.
 *
 * Sets up theme defaults and registers the various WordPress features 
 *
 * @uses add_theme_support() To add support for post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @return void
 */
function teameight_setup() {
	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Navigation Menu', 'teameight' ) );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'teameight_setup' );

/**
 * Enqueue scripts and styles for the front end.
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

/**
 * Alter the main query on the home page
 *
 * limits the main query to the 6 most recent posts in the home category
 */
function exclude_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'category_name', 'home' );
        $query->set( 'posts_per_page', 6 );
    }
}
add_action( 'pre_get_posts', 'exclude_category' );
