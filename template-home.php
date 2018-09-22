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

<div class="hero home">

</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="container-fluid" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<section class="who-we-are home-top-section row">
						<div class="col-md-8">
							<h2>Who We <span>Are</span></h2>
							<p>
								Boston DSA is a local chapter of Democratic Socialists of America. 
								We are an activist organization — not a political party — 
								that works against oppression in its many forms. We see 
								these multiple oppressions — economic inequality, patriarchy, 
								white supremacy, and others — as interlinked, intersecting 
								and inseparable. DSA’s members are building mass movements 
								for social change while establishing an openly socialist 
								presence in communities and politics in the Greater Boston Area.
							</p>
						</div>

						<div class="col-md-4 rose">

						</div>
					</section>

					<section class="national home-middle-section row">
						<div class="col-md-6 offset-md-3">
							<h2 class="text-white text-center">Next Event</h2>
							
							<?php $proj_events = tribe_get_events( array(
								'posts_per_page' => 1,
								'eventDisplay' => 'list' // only upcoming
							), true ); ?>
							<?php if( $proj_events->have_posts() ) :
							?>
							<article class="card">
									<?php while( $proj_events->have_posts() ) : $proj_events->the_post(); ?>
										<?php $event_id = get_the_ID(); ?>
										<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
										<div class="card-block">

											<h3 class="card-title mb-4 mt-0"><?php the_title(); ?></h3>
											<div class="card-subtitle mb-2 text-muted"><span class="dashicons dashicons-clock"></span> <?php echo tribe_get_start_date( null, true, 'g:ia, F j' ); ?></div>
											<p>
												<?php echo tribe_events_get_the_excerpt(); ?>
											</p>

											<a class="btn btn-primary" href="<?php the_permalink(); ?>">Check it out <span class="dashicons dashicons-arrow-right-alt"></span></a>
										</div>
									<?php endwhile; ?>
							</article>
							<?php else: ?>
								<p>There are currently no upcoming events for <?php the_title(); ?>.</p>
							</div>
							<?php endif; wp_reset_postdata(); ?>
						</div>
					</section>

					<section class="feeds home-bottom-section row">
						<div class="col-md-6">
							<h2>Hear From <span>Us</span></h2>
							<p>Posts from the Boston DSA Political Education Working Group (PEWG).</p>
							<!--<?php echo do_shortcode("[fts_facebook type=page id=282734585192522 posts=2 posts_displayed=page_only]"); ?>-->
							<?php
								$args = array(
										'post_type' => 'political_education',
										'numberposts' => 2,
									);
							    $recent_posts = wp_get_recent_posts($args);
							    foreach( $recent_posts as $recent ){
							        echo '<h4>' . $recent["post_title"] . '</h4>';
							        $excerpt = '<p>' . wp_trim_words( $recent['post_content'], 30, '...</p> <a class="btn btn-primary" href="' . get_permalink($recent["ID"]) .'">Read More</a> <hr>'); // $excerpt contains the excerpt of the concerned post
							        echo $excerpt;
							    }
							?>

							<a href="https://bostonpewg.org/">View the Boston PEWG Blog</a>
						</div>
						<div class="col-md-6">
							<h2>News &amp; Announcements</h2>
							<?php
								$args = array(
										'numberposts' => 1,
									);
							    $recent_posts = wp_get_recent_posts($args);
							    foreach( $recent_posts as $recent ){
							        echo '<h4>' . $recent["post_title"] . '</h4>';
							        $excerpt = '<p>' . wp_trim_words( $recent['post_content'], 55, '...</p> <a class="btn btn-primary" href="' . get_permalink($recent["ID"]) .'">Read More</a>'); // $excerpt contains the excerpt of the concerned post
							        echo $excerpt;
							    }
							?>
							<p class="see-more">
								<a href="/press-releases">See all posts...</a>
							</p>

						</div>
					</section>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
