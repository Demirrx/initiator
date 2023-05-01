<?php
/**
 * Default menu provider
 *
 * @package   Initiator
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2019-2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/initiator
 */

/**
 * Define namespace
 */
namespace Initiator\Menu;

use Backdrop\Core\ServiceProvider;
use Initiator\Menu\Component;

/**
 * Attr provider class.
 *
 * @since  5.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds the implementation of the attributes contract to the container.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->app->singleton( 'initiator/menu', Component::class );
    }
    
    public function boot() {
        $this->app->resolve( 'initiator/menu' )->boot();
    }
}