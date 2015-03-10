<?php
/**
 * Template Name: Home Page
 *
 * @package Development
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="column half">
					<?php the_field('home_page_developers_name') ?>
				</div>
				<div class="column half">
					<?php the_field('home_page_welcome_slogan') ?>
				</div>
			</div>
			
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
