<?php
/**
 * Template Name: Contact Page Template
 *
 * Template for displaying the Contact page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="hero basic-hero">
<h1><?php wp_title(''); ?></h1>
</div>

<div class="wrapper basic-page" id="full-width-page-wrapper">

	<div class="fluid-container" id="content">

		<div class="row">

			<div class="col-md-10 content-area offset-md-1" id="primary">

				<main class="site-main" id="main" role="main">

					<div class="row">
						<div class="col-md-6 main-content">
							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'loop-templates/content', 'page' ); ?>

							<?php endwhile; // end of the loop. ?>
						</div>
						<div class="col-md-6 main-content">
							<h3>Other E-mail Contacts</h3>
							<p>Example 1 - <a href="">placeholder@bostondsa.org</a></p>
							<p>Example 2 - <a href="">placeholder@bostondsa.org</a></p>
							<p>Example 3 - <a href="">placeholder@bostondsa.org</a></p>
							<p>Example 4 - <a href="">placeholder@bostondsa.org</a></p>
						</div>
					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>