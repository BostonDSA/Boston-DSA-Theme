<?php
/**
 * Template Name: Bylaws Page Template
 *
 * Template for Bylaws Page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div id="convention">
<div class="hero basic-hero jumbotron jumbotron-fluid">
	<div class="container">
		<h1><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h1>
		<?php the_field('hero')?>
	</div>
</div>

<div class="wrapper basic-page" id="full-width-page-wrapper">

	<div class="fluid-container" id="content">

		<div class="row">

			<div class="col-md-9 content-area" id="primary">

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

			<aside class="main col">
				<section class="card">
					<div class="card-block">
						<h2 class="card-title text-center pt-2">Articles</h2>
						<div id="main-sidebar">
							<ul class="nav d-flex flex-wrap">
								<li class="nav-item"><a class="nav-link" href="#art-1">I</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-2">II</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-3">III</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-4">IV</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-5">V</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-6">VI</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-7">VII</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-8">VIII</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-9">IX</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-10">X</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-11">XI</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-12">XII</a></li>
								<li class="nav-item"><a class="nav-link" href="#art-13">XIII</a></li>
							</ul>
						</div>
					</div>
				</section>
			</aside>

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
</div>
<?php get_footer(); ?>
