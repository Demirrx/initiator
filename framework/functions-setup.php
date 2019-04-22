<?php
/**
 * Initiator ( functions-setup.php )
 *
 * @package     Initiator
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

/**
 * Define namespace
 */
namespace Initiator;

/**
 * Setup Theme Support.
 *
 * This is where all of the add_theme_support(); will happen.
 *
 * @since  1.0.0
 * @access public
 * @return void
 *
 * @link   https://developer.wordpress.org/reference/functions/add_theme_support/
 * @link   https://developer.wordpress.org/themes/basics/theme-functions/
 * @link   https://developer.wordpress.org/reference/functions/load_theme_textdomain/
 */
add_action(
	'after_setup_theme',
	function() {
		/**
		 * Content width is a theme feature, when set, it can set the maximum allow width for any content in teh theme like
		 * oEmbeds and images added to posts.
		 */
		$GLOBALS['content_width'] = 810;

		/**
		 * By adding add_theme_support( 'post-thumbnails' );, this feature when enabled allows you to setup featured images
		 * also known as featured image. If you need to use conditional, please consider using has_post_thumbnail.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * By add_image_size( 'initiator-small-thumbnails', 324, 324, true );. This should be used for content in the home for blogs.
		 */
		add_image_size( 'initiator-small-thumbnails', 324, 324, true );

		/**
		 * By add_image_size( 'initiator-medium-thumbnails', 810, 396, true );. This should be used for content that has sidebars.
		 */
		add_image_size( 'initiator-medium-thumbnails', 810, 396, true );

		/**
		 * By add_image_size( 'initiator-large-thumbnails', 1170, 614, true );. This should be used for content that has no sidebars.
		 */
		add_image_size( 'initiator-large-thumbnails', 1170, 614, true );

		/**
		 * Load theme translation.
		 */
		load_theme_textdomain( 'initiator', get_parent_theme_file_path( '/languages ' ) );
	}
);

/**
 * Add support for custom header.
 */
add_action(
	'after_setup_theme',
	function() {
		add_theme_support(
			'custom-header',
			[
				'default-text-color' => 'ffffff',
				'default-image'      => get_theme_file_uri( '/assets/images/header-image.jpg' ),
				'height'             => 1200,
				'max-width'          => 2000,
				'width'              => 2000,
				'flex-height'        => false,
				'flex-width'         => false,
			]
		);

		register_default_headers(
			array(
				'header-image' => array(
					'url'           => '%s/assets/images/header-image.jpg',
					'thumbnail_url' => '%s/assets/images/header-image.jpg',
					'description'   => esc_html__( 'Header Image', 'initiator' ),
				),
			)
		);
	}
);

