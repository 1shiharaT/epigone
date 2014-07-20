<?php
/**
 * Navbar module
 * =====================================================
 * @package  epigone
 * @license  GPLv2 or later
 * =====================================================
 */
?>
	<nav class="navbar navbar--default" role="navigation">
		<div class="container">

			<?php
				wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse cf navbar-collapse',
					'container_id'      => 'header-navbar-collapse',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Nav_Walker::fallback',
					'walker'            => new WP_Bootstrap_Nav_Walker())
				);
			?>

		</div>
	</nav>
