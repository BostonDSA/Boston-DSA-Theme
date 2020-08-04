<?php
/**
 * Template Name: Basic Page with Sidebar Template
 *
 * Template for displaying a basic page with a sidebar.
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
					<div class="card-body">
						<h2 class="card-title text-center pt-2">Amendments</h2>
						<div id="main-sidebar">
							<ul class="nav grid d-flex flex-wrap">
								<li class="nav-item"><a class="nav-link" href="#amendment-1">1</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-2">2</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-3">3</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-4">4</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-5">5</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-6">6</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-7">7</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-8">8</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-9">9</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-10">10</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-11">11</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-12">12</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-13">13</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-14">14</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-15">15</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-16">16</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-17">17</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-18">18</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-19">19</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-20">20</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-21">21</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-22">22</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-23">23</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-24">24</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-25">25</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-26">26</a></li>
								<li class="nav-item"><a class="nav-link" href="#amendment-27">27</a></li>
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
