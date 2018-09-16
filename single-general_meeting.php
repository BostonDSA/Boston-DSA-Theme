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
<div class="meeting">
<div class="hero basic-hero jumbotron jumbotron-fluid mb-0">
	<div class="container">
		<h1><?php echo str_replace(' | ', '<br />', get_the_title()); ?></h1>
		<?php the_field('hero')?>
	</div>
</div>

<div class="wrapper basic-page" id="full-width-page-wrapper">

	<div class="fluid-container" id="content">

		<div class="row">

			<aside class="main col-lg-3">
				<section class="card">
					<div class="card-block">
						<h2 class="card-title text-center pt-2">Important Info</h2>
						<div id="main-sidebar">
							<h3>Date, Time &amp; Location</h3>
							<?php 
								$date = get_field('date', false, false);
								$date = new DateTime($date);
							 ?>
							<p><span class="fa fa-calendar"></span> <?php the_field('time'); ?> <?php echo $date->format('j M, Y'); ?></p>
							<p><a href="https://goo.gl/maps/3kCfmpyQDGP2" target="_blank"><span class="fa fa-map-pin"></span> Church of the Covenant, <br>67 Newbury St, Boston, MA 02116</a></p>

							<p><a class="btn btn-secondary btn-block" target="_blank" href="<?php the_field('slide_show_link'); ?>"><span class="fa fa-file-image-o"></span> View the Slides</a></p>

							<p><a class="btn btn-secondary btn-block" target="_blank" href="http://bit.ly/bdsaaccess"><span class="fa fa-universal-access"></span> Request Accomodations</a></p>
						</div>
					</div>
				</section>
			</aside>

			<div class="col-lg-9 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<section class="row bg-grey-rose intro mb-0">
						<div class="col-md-10 main-content offset-md-1">
							<?php while ( have_posts() ) : the_post(); ?>

								<?php the_field('intro'); ?>

								<?php get_template_part( 'loop-templates/content', 'page' ); ?>

							<?php endwhile; // end of the loop. ?>
						</div>
					</section>

					<section class="bg-warning-gradient row meeting-schedule">
						<div class="col-md-10 main-content offset-md-1">
							<h2><span>Schedule</span>
								<div class="holder">
								    <div class="smallLine smallLine1"></div>
								    <div class="smallLine smallLine2"></div>
								</div>
							</h2>
							<div class="schedule-container">
								<?php the_field('agenda_schedule'); ?>
							</div>
						</div>
					</section>

					<section class="row meeting-agenda">
						<div class="col-md-10 main-content offset-md-1">
							<h2>
								<span>Agenda</span>
								<div class="holder">
								    <div class="smallLine smallLine1"></div>
								    <div class="smallLine smallLine2"></div>
								</div>
							</h2>
							<?php the_field('agenda_items'); ?>
						</div>
					</section>

					<section class="row meeting-announcement bg-red-gradient">
						<div class="col-md-10 main-content offset-md-1">
							<div class="card">
								<header class="card-header">
									<h2 class="mb-0 text-center"><div class="holder">
								    <div class="smallLine smallLine1"></div>
								    <div class="smallLine smallLine2"></div>
								</div><span><span class="fa fa-bullhorn flip-horizontal"></span> Announcements <span class="fa fa-bullhorn"></span></span><div class="holder">
								    <div class="smallLine smallLine1"></div>
								    <div class="smallLine smallLine2"></div>
								</div></h2>
								</header>
								<div class="card-block">
									<?php the_field('more_announcements'); ?>
								</div>
							</div>
						</div>

						<span class="fa fa-long-arrow-down text-white"></span>
					</section>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<div class="wrapper text-center">
<div class="bottom-nav row">
	<div class="col-md-10 main-content offset-md-1">
		<h3><?php the_field('header'); ?></h3>
		<p><?php the_field('body'); ?></p>
		<a href="<?php the_field('link_url'); ?>" class="btn btn-primary"><?php the_field('link_text'); ?></a>
	</div>
</div>
</div>
</div>
<?php get_footer(); ?>
