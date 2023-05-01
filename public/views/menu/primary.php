<?php

if ( has_nav_menu( $data->location ) ) { ?>
	<nav id="primary" class="primary-menu">
		<button class="menu-toggle" aria-conrol="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'rejuvenate' ); ?></button>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => $data->location,
					'container'      => '',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'menu-items',
					'depth'          => 3
				)
			);
		?>
	</nav>
<?php }