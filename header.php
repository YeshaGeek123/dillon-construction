<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dillon-construction
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/fonts/Helvetica.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/fonts/Helvetica-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/fonts/Helvetica-Light.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/fonts/OpenSans-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/dillon-construction/assets/fonts/OpenSans-Regular.woff2" as="font" type="font/woff2" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="site-branding">
							<?php
							the_custom_logo();
							?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-12">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<div class="header-menu">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
							</div>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</header><!-- #masthead -->