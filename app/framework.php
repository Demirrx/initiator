<?php
/**
 * Initiator ( app/framework.php )
 *
 * @package   Initiator
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */

/**
 * Create a new framework instance
 *x
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$initiator = new Benlumia007\Backdrop\Framework();

/**
 * Register default providers
 */
$initiator->provider( Benlumia007\Backdrop\FontAwesome\Provider::class );
$initiator->provider( Benlumia007\Backdrop\GoogleFonts\Provider::class );
$initiator->provider( Benlumia007\Backdrop\Template\Hierarchy\Provider::class );
$initiator->provider( Benlumia007\Backdrop\Template\Manager\Provider::class );
$initiator->provider( Benlumia007\Backdrop\Template\View\Provider::class );

/**
 * Register custom providers
 */
$initiator->provider( Initiator\Menu\Provider::class );
$initiator->provider( Initiator\Sidebar\Provider::class );

/**
 * Boot the Framework
 */
$initiator->boot();