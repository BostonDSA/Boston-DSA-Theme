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

					<div class="who-we-are home-top-section row">
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
					</div>

					<div class="national home-middle-section row">
						<div class="col-md-8">
							<h2>National <span>DSA</span></h2>
							<p>
								DSA is the largest socialist organization in the United States today. Our work is driven by our chapters across the nation. We seek to make democratic socialism a reality in all of our communities.
							</p>
						</div>
						<div class="col-md-3">
							<a class="btn btn-primary" href="/join">Become a Member</a>
						</div>
						<div class="col-md-1">

						</div>
					</div>

					<div class="feeds home-bottom-section row">
						<div class="col-md-6">
							<h2>Hear From <span>Us</span></h2>
							<?php echo do_shortcode("[fts_facebook type=page id=282734585192522 posts=3 posts_displayed=page_only]"); ?>
						</div>
						<div class="col-md-6">
							<h2>From Our Writers</h2>
							<?php
							    $recent_posts = wp_get_recent_posts();
							    foreach( $recent_posts as $recent ){
							        echo '<h4>' . $recent["post_title"] . '</h4>';
							        $excerpt = '<p>' . wp_trim_words( $recent['post_content'], 55, '...</p> <a class="btn btn-primary" href="' . get_permalink($recent["ID"]) .'">Read More</a>'); // $excerpt contains the excerpt of the concerned post
							        echo $excerpt;
							    }
							?>
						</div>
					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
