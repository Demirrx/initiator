<?php
/**
 * Theme - scripts
 *
 * @package   Initiator
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2024. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/initiator
 */

/**
 * Define namespace
 */
namespace Initiator;
use Backdrop\App;
use function Backdrop\Mix\asset;

/**
 * Enqueue Scripts and Styles
 *
 * @since  1.0.0
 * @access public
 * @return void
 *
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
add_action( 'wp_enqueue_scripts', function() {
	/**
	 * Rather than enqueue the main stylesheet, we are going to enqueue sceen.css since all of the styles will
	 * go here. We only need parse the information for the Theme in style.css so that it can be activated.
	 */
	wp_enqueue_style( 'initiator-screen', asset( 'assets/css/screen.css' ), null, null );
	wp_enqueue_script( 'initiator-app', asset( 'assets/js/app.js' ), [ 'jquery' ], null, true );

	/**
	 * This allows users to comment by clicking on reply so that it gets nested.
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );

add_action( 'wp_enqueue_scripts', function() {
	$text_color = get_header_textcolor();
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $text_color ) {
		return;
	}
	$value      = display_header_text() ? sprintf( 'color: #%s', esc_html( $text_color ) ) : 'display: none;';
	$custom_css = "
		.site-branding .site-title a,
		.site-description {
			{$value}
		}
	";
	wp_add_inline_style( 'initiator-screen', $custom_css );
} );