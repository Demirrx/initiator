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
 *
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$initiator = new Benlumia007\Backdrop\Core\Framework();

/**
 * Register Service Provider with the Framework
 */
$initiator->provider( Initiator\Aside\SidebarServiceProvider::class );
$initiator->provider( Initiator\Navigation\MenuServiceProvider::class );

/**
 * Boot the Framework
 */
$initiator->boot();