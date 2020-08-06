<?php
/**
 * Template Name: Electoral Question Template
 *
 * Template for displaying an electoral question page.
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
						<h2 class="card-title text-center pt-2">Electoral Questions</h2>
						<div id="main-sidebar">
							<ul class="nav flex-column">
								<li class="nav-item"><a class="nav-link" href="https://www.bostondsa.org/electoral-questions/general-values">General Values</a></li>
								<li class="nav-item"><a class="nav-link" href="https://www.bostondsa.org/electoral-questions/accountability-and-the-electoral-system">Accountability and the Electoral System</a></li>
								<li class="nav-item"><a class="nav-link" href="https://www.bostondsa.org/electoral-questions/criminal-punishment-system">The Criminal Punishment System</a></li>
								<li class="nav-item"><a class="nav-link" href="https://www.bostondsa.org/electoral-questions/immigration">Immigration</a></li>
								<li class="nav-item"><a class="nav-link" href="https://www.bostondsa.org/electoral-questions/housing">Housing</a></li>
								<li class="nav-item"><a class="nav-link" href="https://www.bostondsa.org/electoral-questions/sex-work-gender-and-reproductive-rights">Sex Work, Gender, and Reproductive Rights</a></li>
								<li class="nav-item"><a class="nav-link" href="https://www.bostondsa.org/electoral-questions/healthcare">Healthcare</a></li>
								<li class="nav-item"><a class="nav-link" href="https://www.bostondsa.org/electoral-questions/the-environment-and-climate-change">The Environment and Climate Change</a></li>
								<li class="nav-item"><a class="nav-link" href="https://www.bostondsa.org/electoral-questions/labor-issues">Labor Issues</a></li>
								<li class="nav-item"><a class="nav-link" href="/electoral-questions/foreign-affairs">Foreign Affairs</a></li>
								<li class="nav-item"><a class="nav-link" href="/electoral-questions/education-social-services">Education and Social Services</a></li>
								<li class="nav-item"><a class="nav-link" href="/electoral-questions/revenue">Revenue</a></li>
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
