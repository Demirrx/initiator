<?php
/**
 * Initiator ( content-single.php )
 *
 * @package     Initiator
 * @copyright   Copyright (C) 2018-2019. Benjamin Lu
 * @license     GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

use Backdrop\Entry\Entry as entry;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php entry::display( 'entry-title' ); ?>
	</header>
	<div class="entry-metadata">
		<?php entry::display( 'posted-on' ); ?>
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'initiator' ),
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'initiator' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">,</span> ',
				)
			);
			?>
	</div>
	<div class="entry-taxonomies">
		<?php entry::display( 'taxonomies' ); ?>
	</div>
</article>
