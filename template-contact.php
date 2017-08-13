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
							
							<p>Need to contact a specific working group? Use one of these.</p>

							<p>Coalition Working Group - <a href="mailto:coalition@bostondsa.org">coalition@bostondsa.org</a></p>
							<p>Eco Socialism Working Group - <a href="mailto:ecosocialism@bostondsa.org">ecosocialism@bostondsa.org</a></p>
							<p>Education Working Group - <a href="mailto:education@bostondsa.org">education@bostondsa.org</a></p>
							<p>Elections Working Group - <a href="mailto:elections@bostondsa.org">elections@bostondsa.org</a></p>
							<p>Electoral Working Group - <a href="mailto:electoral@bostondsa.org">electoral@bostondsa.org</a></p>
							<p>Labor Working Group - <a href="mailto:labor@bostondsa.org">labor@bostondsa.org</a></p>
							<p>Prison Abolition Working Group - <a href="mailto:prisonabolition@bostondsa.org">prisonabolition@bostondsa.org</a></p>
							<p>Protest Working Group - <a href="mailto:protest@bostondsa.org">protest@bostondsa.org</a></p>
							<p>Tech Working Group - <a href="mailto:tech@bostondsa.org">tech@bostondsa.org</a></p>
							<p>Women's Caucus Working Group - <a href="mailto:womenscaucus@bostondsa.org">womenscaucus@bostondsa.org</a></p>
						</div>
					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<div class="bottom-nav row">
	<div class="col-md-10 main-content offset-md-1">
		<h3><?php the_field('header'); ?></h3>
		<p><?php the_field('body'); ?></p>
		<a href="<?php the_field('link_url'); ?>" class="btn btn-primary"><?php the_field('link_text'); ?></a>
	</div>
</div>

<?php get_footer(); ?>