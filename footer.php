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

<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<div id="mc_embed_signup">
	<form action="https://bostondsa.us17.list-manage.com/subscribe/post?u=f7ccb68e6f65b7f64c09b76f7&amp;id=c13b7543ee" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    <div id="mc_embed_signup_scroll">
		<h2><label for="mce-EMAIL">Socialism in Your Inbox</label></h2>
		<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
	    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f7ccb68e6f65b7f64c09b76f7_c13b7543ee" tabindex="-1" value=""></div>
	    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	    </div>
	</form>
</div>

<?php get_sidebar( 'footerfull' ); ?>

<!--End mc_embed_signup-->

<div class="wrapper" id="wrapper-footer">

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					<div class="policy-menu">
						<?php wp_nav_menu(
							array(
								'menu' 			  => 'policies',
								'theme_location'  => 'primary',
								'container_class' => '',
								'container_id'    => 'footerNavbarNavDropdown',
								'menu_class'      => 'navbar-nav footer-nav',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						); ?>
					</div>
					<div class="social-media-links clearfix">
						<div class="social-media-links-inner">
							<h3>Follow Us</h3>
							<a href="https://www.facebook.com/BostonDSA/"><span class="fab fa-facebook fa-2x"></span></a>
							<a href="https://twitter.com/boston_dsa"><span class="fab fa-twitter fa-2x"></span></a>
						</div>
					</div>
					<div class="site-info">
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
						<p class="copyright">
							© <?php echo date('Y') ?> Boston Democratic Socialists of America.<br>
							<small>made with <i class="far fa-hammer text-danger"></i> by BDSA</small>
						</p>
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

