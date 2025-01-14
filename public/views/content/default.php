<?php
/**
 * Initiator ( content.php )
 *
 * @package   Initiator
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://benjlu.com )
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
			<?php printf( '<span class="sticky-post">%1$s</span>', esc_html__( 'Featured', 'initiator' ) ); ?>
		<?php } ?>
		<?php Backdrop\Theme\Entry\display_title(); ?>
		<div class="entry-metadata">
			<?php Backdrop\Theme\Entry\display_author(); ?>
			<?php Backdrop\Theme\Entry\display_date(); ?>
			<?php Backdrop\Theme\Entry\display_comments_link(); ?>
		</div>
	</header>
	<div class="entry-excerpt">
		<?php the_excerpt(); ?>
	</div>
</article>
