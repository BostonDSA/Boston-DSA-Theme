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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<div class="card">
					<div class="card-body">
						<h1>2020 Priorities</h1>
						<p class="mt-2">
							Get involved in Boston DSA's 2020 priorities! Running for election and want an endorsement? Fill out our candidate questionnaire.
						</p>
						<ul class="fa-ul">
							<li><span class="fa-li" ><i class="fal fa-long-arrow-alt-right"></i></span>Build Tenant Power</li>
							<li><span class="fa-li" ><i class="fal fa-long-arrow-alt-right"></i></span>DSA for Bernie and Rent Control</li>
							<li><span class="fa-li" ><i class="fal fa-long-arrow-alt-right"></i></span>Anti-Harassment and Inclusion</li>
							<li><span class="fa-li" ><i class="fal fa-long-arrow-alt-right"></i></span>Boosting Member Participation and Capacity</li>
						</ul>
						<a class="btn btn-primary btn-large" href="https://www.bostondsa.org/priorities/">Get Involved</a>
						<a class="btn btn-secondary btn-large" href=" https://www.bostondsa.org/candidate-questionnaire-2020/">View 2020 Candidate Questionnaire</a>
					</div>
				</div>
			</div>
		</div>
	</div>
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
							
							<?php echo do_shortcode("[calendar id='3733']"); ?>
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
							<h2>Social Media</h2>
							<a class="twitter-timeline" data-height="500" href="https://twitter.com/Boston_DSA?ref_src=twsrc%5Etfw">Tweets by Boston_DSA</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

						</div>
					</section>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
