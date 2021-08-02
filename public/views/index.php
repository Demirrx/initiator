<?php
/**
 * Initiator ( index.php )
 *
 * @package   Initiator
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */
?>
<?php $engine = Benlumia007\Backdrop\App::resolve( 'view/engine' ); ?>
<?php $engine->display( 'header' ); ?>
	<section id="content" class="site-content">
		<div id="layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'no-sidebar' ) ); ?>">
			<main id="main" class="content-area">
				<?php
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							$engine->display( 'content', get_post_format()  );
						endwhile;
						the_posts_pagination();
					else :
							$engine->display( 'content/none' );
					endif;
				?>
			</main>
			<?php Benlumia007\Backdrop\View\display( 'sidebar', [ 'primary' ] ); ?>
		</div>
	</section>
<?php $engine->display( 'footer' ); ?>