<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();
?>

<div class="hero basic-hero jumbotron">
<h1>404 oh jeez</h1>
</div>


<div class="wrapper basic-page" id="404-wrapper">

	<div class="container" id="content">

		<div class="row">

			<div class="content-area col-md-12" id="primary">

				<main class="site-main" id="main" role="main">

					<section class="error-404 not-found">

						<header class="page-header">

							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.',
							'understrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">

							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
							'understrap' ); ?></p>

							<?php get_search_form(); ?>

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

							<?php if ( understrap_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

								<div class="widget widget_categories">

									<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'understrap' ); ?></h2>

									<ul>
										<?php
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
										?>
									</ul>

								</div><!-- .widget -->

							<?php endif; ?>

							

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div> <!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
