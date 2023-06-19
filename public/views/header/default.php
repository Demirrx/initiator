
<?php
/**
 * Default header template
 *
 * @package   Initiator
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2019-2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/initiator
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="container" class="site-container">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'initiator' ) ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php Initiator\Site\display_site_title(); ?>
			<?php Initiator\Site\display_site_description(); ?>
		</div>
		<?php Backdrop\View\display( 'menu', 'primary', [ 'location' => 'primary'] ); ?>
	</header>