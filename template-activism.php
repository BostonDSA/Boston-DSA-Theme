<?php
/**
 * Template Name: Activism Page Template
 *
 * Template for displaying the Activism page.
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

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<div class="row">
						<div class="col-md-10 main-content offset-md-1">
							<p class="intro">
								Boston DSA has a variety of working groups for you to be involved in, whatever your 
								interests. Below are the names, descriptions, and contact e-mail of our current working groups. 
							</p>

							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="working-group">
										<h3><span class="fa fa-users"></span>Coalition-Building</h3>
										<p>
											The coalition working group works on building Boston DSA’s ties 
											with other community organizations so that we can work together 
											for change. The coalition building working group also has a number 
											of sub-working groups, which focus on immigration, legislative work, 
											ecosocialism, prison abolition and labor.
										</p>
										<a href="mailto:coalition@bostondsa.org">coalition@bostondsa.org</a>
									</div>
									<div class="working-group">
										<h3><span class="fa fa-globe"></span>Immigration</h3>
										<p>
											The immigration sub-working group works in solidarity with (im)migrant-led 
											groups in Boston to help build a broad cultural and legislative campaign 
											in the name of dignity, respect, and political protection for the 
											(im)migrant working class.
										</p>
										<a href="mailto:immigration@bostondsa.org">immigration@bostondsa.org</a>
									</div>
									<div class="working-group">
										<h3><span class="fa fa-wrench"></span>Labor</h3>
										<p>
											Labor solidarity is at the core of democratic socialist politics. 
											Without a strong and organized working class movement we can’t 
											hope to build the power necessary to challenge capitalism. To 
											that end, the labor sub-working group works to identify ways 
											DSA can work to support our comrades involved in local labor 
											struggles, to talk with DSAers in unions about what it means 
											to be a democratic socialist in the labor movement, and to work 
											with new DSAers to help form unions in their workplaces.
										</p>
										<a href="mailto:labor@bostondsa.org">labor@bostondsa.org</a>
									</div>
									<div class="working-group">
										<h3><span class="fa fa-check"></span>Electoral</h3>
										<p>
											We seek to influence electoral politics in the greater Boston area 
											through endorsing candidates, volunteering for campaigns, and 
											training on skills and issues.
										</p>
										<a href="mailto:electoral@bostondsa.org">electoral@bostondsa.org</a>
									</div>
									<div class="working-group">
										<h3><span class="fa fa-leaf"></span>Eco-socialism</h3>
										<p>
											The Boston DSA eco-socialism working group aims to promote a 
											socialist analysis amongst environmentalists and an ecological 
											analysis among socialists. It does this by organizing winning 
											campaigns that: 1) build solidarity among community members and 
											key allies; 2) recognize and challenge the capitalist origins 
											of our modern environmental crisis.
										</p>
										<a href="mailto:ecosocialism@bostondsa.org">ecosocialism@bostondsa.org</a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="working-group">
										<h3><span class="fa fa-chain-broken"></span>Prison Abolition</h3>
										<p>
											The recently formed prison abolition sub-working group has the 
											long-term goal of eliminating imprisonment and policing, and 
											creating lasting alternatives to punishment and imprisonment. 
											We will collaborate with a coalition of community and abolition 
											groups to work towards this future.
										</p>
										<a href="mailto:prisonabolition@bostondsa.org">prisonabolition@bostondsa.org</a>
									</div>
									<!--<div class="working-group">
										<h3><span class="fa fa-file-text-o"></span>Legislative</h3>
										<p>
											The goal of the legislative sub-working group is to work to 
											pass laws that make Massachusetts a great place to live for 
											all people, not just the very wealthy. We work with a broad 
											coalition of groups and bring a socialist analysis to their 
											campaigns.
										</p>
										<a href="">prisonabolition@bostondsa.org</a>
									</div>-->
									<div class="working-group">
										<h3><span class="fa fa-graduation-cap"></span>Political Education</h3>
										<p>
											The goal of this group is to provide our members with the 
											practical skills and theoretical knowledge to undertake 
											effective organizing work and to educate the general public 
											on DSA’s vision of a socialist future, our approach to achieving, 
											and our perspectives on relevant issues.
										</p>
										<a href="mailto:education@bostondsa.org">education@bostondsa.org</a>
									</div>
									<div class="working-group">
										<h3><span class="fa fa-terminal"></span>Tech</h3>
										<p>
											The Technology Working Group aims to support and protect 
											DSA operations, and organize and radicalize technology 
											workers. We are providing as-needed assistance to other 
											working groups inside DSA, reviewing the security practices 
											of the organization, and training members. Technology and 
											automation have important implications for the power balance 
											between governments and citizens, and between capital and 
											labor, and are essential to robust socialist economic and 
											social policy.
										</p>
										<a href="mailto:tech@bostondsa.org">tech@bostondsa.org</a>
									</div>
									<div class="working-group">
										<h3><span class="fa fa-bullhorn"></span>Protest Team</h3>
										<p>
											The protest team organizes DSA contingents at rallies, 
											marches and direct actions across the city, and trains 
											DSA members in the to-dos of organizing contingents, 
											from legal trainings and sign making to flyering and 
											speaking for DSA at actions. We seek to use protest 
											as a means of coalition building with other movement 
											groups and educating people about the socialist 
											theory of demonstrations.
										</p>
										<a href="mailto:protest@bostondsa.org">protest@bostondsa.org</a>
									</div>
								</div>
							</div>
							<?php while ( have_posts() ) : the_post(); ?>

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
		<h3>Interested in one of these working groups?</h3>
		<p>Check if they have any events planned.</p>
		<a href="/events" class="btn btn-primary">See our events</a>
	</div>
</div>
<?php get_footer(); ?>
