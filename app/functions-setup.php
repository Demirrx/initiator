<?php
/**
 * Theme setup functions.
 *
 * This file holds basic theme setup functions executed on appropriate hooks
 * with some opinionated priorities based on theme dev, particularly working
 * with child theme devs/users, over the years. I've also decided to use
 * anonymous functions to keep these from being easily unhooked. WordPress has
 * an appropriate API for unregistering, removing, or modifying all of the
 * things in this file. Those APIs should be used instead of attempting to use
 * `remove_action()`.
 *
 * @package   Initiator
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2024. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/initiator
 */

namespace Initiator;

/**
 * Set up theme support.  This is where calls to `add_theme_support()` happen.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'after_setup_theme', function() {

	// Sets the theme content width.
	$GLOBALS['content_width'] = 640;

	// Load theme translations.
	load_theme_textdomain( 'initiator', get_parent_theme_file_path( 'public/lang' ) );

	// Automatically add the `<title>` tag.
	add_theme_support( 'title-tag' );

	// Automatically add feed links to `<head>`.
	add_theme_support( 'automatic-feed-links' );

	// Outputs HTML5 markup for core features.
	add_theme_support( 'html5', [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form'
	] );

	// Adds featured image support.
	add_theme_support( 'post-thumbnails' );

		/**
		 * By add_theme_support( 'wp-block-styles' );. This should enable block styles on the frontend.
		 */
		add_theme_support( 'wp-block-styles' );

		/**
		 * By adding add_theme_support( 'editor-styles' ); and add_editor_style(); to enable styles in the backend of the editor.
		 */
		add_theme_support( 'editor-styles' );
		add_editor_style( 'public/assets/css/editor.css' );

		/**
		 * By adding add_theme_support( 'align-wide' );. This will enable alignwide and alignfull.
		 */
		add_theme_support( 'align-wide' );
	}
);

/**
 * Register menus.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'init', function() {

	register_nav_menus( [
		'primary' => esc_html_x( 'Primary', 'nav menu location', 'initiator' ),
		'footer'  => esc_html_x( 'Footer',  'nav menu location', 'initiator' ),
		'social'  => esc_html_x( 'Social',  'nav menu location', 'initiator' )
	] );

}, 5 );

/**
 * Register sidebars.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'widgets_init', function() {

	$args = [
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>'
	];

	foreach ( range( 1, 4 ) as $num ) {

		register_sidebar( [
			'id'   => "footer-{$num}",
			'name' => sprintf( __( 'Footer %d', 'initiator' ), $num )
		] + $args );
	}

}, 5 ); 

/**
 * Registers custom templates with WordPress.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $templates
 * @return void
 */
add_action( 'backdrop/templates/register', function( $templates ) {
	$templates->add( 'template-left-sidebar.php', [
		'label' => esc_html__( 'Left Sidebar', 'initiator' )
	] );

	$templates->add( 'template-right-sidebar.php', [
		'label' => esc_html__( 'Right Sidebar', 'initiator' )
	] );
} );