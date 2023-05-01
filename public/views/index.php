<?php
/**
 * Default index template
 *
 * @package   Initiator
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/initiator
 */

// Loads header/*.php template
Backdrop\Template\View\display( 'header', Backdrop\Template\Hierarchy\hierarchy() );

// Loads content/*.php template
Backdrop\Template\View\display( 'content', Backdrop\Template\Hierarchy\hierarchy() );

// Loads footer/*.php template
Backdrop\Template\View\display( 'footer', Backdrop\Template\Hierarchy\hierarchy() );