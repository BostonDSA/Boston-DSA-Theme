<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					<div class="social-media-links clearfix">
						<div class="social-media-links-inner">
							<h3>Follow Us</h3>
							<a href="https://www.facebook.com/BostonDSA/"><span class="fa fa-facebook-official fa-2x"></span></a>
							<a href="https://twitter.com/boston_dsa"><span class="fa fa-twitter-square fa-2x"></span></a>
						</div>
					</div>
					<div class="site-info">
						<p class="copyright">© 2017 Boston Democratic Socialists of America.</p>
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => '',
								'container_id'    => 'footerNavbarNavDropdown',
								'menu_class'      => 'navbar-nav footer-nav',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						); ?>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

