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
?>
<section id="content" class="site-content">
	<main id="main" class="content-area">
		<?php
			while ( have_posts() ) : the_post();
				Backdrop\Template\View\display( 'entry/single' );
                comments_template();
			endwhile;
		?>
	</main>
</section>