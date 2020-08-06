<?php
/**
 * Template Name: Basic Page Template
 *
 * Template for displaying a basic page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="hero basic-hero jumbotron">
<div class="container">
    <h1><?php the_title(''); ?></h1>
	<?php the_field('hero')?>
	</div>
</div>

<div class="wrapper basic-page" id="full-width-page-wrapper">

	<div class="fluid-container" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div class="row">
						<div class="col-md-10 main-content offset-md-1">
							<?php while ( have_posts() ) : the_post(); ?>

								<p class="intro"><?php the_field('intro'); ?></p>

								<p><?php the_field('sub_intro'); ?></p>

								<?php get_template_part( 'loop-templates/content', 'page' ); ?>

							<?php endwhile; // end of the loop. ?>
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
