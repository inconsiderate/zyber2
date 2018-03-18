<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zyber
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-branding">
			<a href="/" alt="Go back to the homepage"><img src="<?php echo get_template_directory_uri(); ?>/img/zyber_logo.png" /></a>
		</div>
		<div class="site-info">
			&copy; 2016 Zyber 
		</div><!-- .site-info -->
		<div class="social-media">
			<ul>
				<li><a href="https://www.youtube.com/channel/UCInLdRIzGrW5poQrZjCCeMQ" alt="Watch Zyber product and tutorial videos on YouTube" class="uk-icon-hover uk-icon-youtube uk-icon-small" rel="nofollow" target="_blank">Watch & learn about Zyber on <i class="fa fa-youtube" aria-hidden="true"></i></a></li>
				<li><a href="https://itunes.apple.com/us/app/zyber/id1262757962?mt=8" alt="Get the app on the iTunes store">Download the app today <i class="fa fa-apple" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<nav id="mobile-nav">
	<?php
		wp_nav_menu( array(
			'theme_location' => 'header-menu',
			'menu_class' => 'mobile-nav',
			'container'      => '',
			// 'items_wrap'    => '%3$s',
		) );
	?>
	<span class="mobile-toggle-nav">Close panel &rarr;</span>
</nav>

<?php wp_footer(); ?>

</body>
</html>
