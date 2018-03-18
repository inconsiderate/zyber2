<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zyber
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://use.fontawesome.com/5db422e131.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zyber' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<a href="/" alt="Go back to the homepage"><img src="<?php echo get_template_directory_uri(); ?>/img/zyber_logo.png" /></a>
		</div><!-- .site-branding -->

		<div class="mobile-nav-toggle">
			<button class="toggle-button"><i class="fa fa-bars"></i></button>
		</div>
		
		<nav id="site-navigation" class="main-navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'header-menu',
					'menu_class' => 'main-nav',
					'container'      => '',
					// 'items_wrap'    => '%3$s',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">



