<?php
/**
 * Boot the framework
 *
 * @package   Initiator
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2024. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/initiator
 */

/**
 * Create a new framework instance
 *x
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$initiator = Backdrop\booted() ? Backdrop\app() : new Backdrop\Core\Application();

/**
 * Register default providers.
 */
$initiator->provider( Backdrop\Fonts\Provider::class );
$initiator->provider( Backdrop\Mix\Provider::class );
$initiator->provider( Backdrop\Template\Hierarchy\Provider::class );
$initiator->provider( Backdrop\Template\Manager\Provider::class );
$initiator->provider( Backdrop\View\Provider::class );

/**
 * Register custom providers for the theme.
 */

/**
 * Create an action hook for child themes.
 */
do_action( 'initiator/child/theme', $initiator );

/**
 * Boot the Framework
 */
$initiator->boot();