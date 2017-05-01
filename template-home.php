<?php
/**
 * Template Name: Boston DSA Home
 *
 * Template for displaying the Boston DSA Homepage.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class=""

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div class="who-we-are home-top-section">
						<h2>Who We <span>Are</span></h2>
						<p>
							Democratic Socialists are radical democrats who believe 
							that all aspects of the economy and society should be run 
							democratically to meet human needs, not to heap profits on 
							the few. We are a political and activist organization, 
							committed to educate, agitate and advocate for social and 
							economic justice – for a world free of prejudice, 
							discrimination and exploitation, where all people of good 
							will are free to realize their fullest potential.
						</p>
					</div>

					<div class="national home-middle-section row">
						<div class="col-md-9">
							<h2>National <span>DSA</span></h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="col-md-3">
							<a class="btn btn-primary" href="/join">Become a Member</a>
						</div>
					</div>

					<div class="feeds home-bottom-section row">
						<div class="col-md-6">
							<h2>Hear From <span>Us</span></h2>
						</div>
						<div class="col-md-6">
							<h2>From Our Writers</h2>
						</div>
					</div>
					
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
