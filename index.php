<?php
/**
 * The main template file, also the homepage
 *
 */

get_header(); ?>

	<section class="section cf home-main">
		<h1>Team Eight</h1>
		<p>We make <a href="#">websites</a>... and <a href="#">other things.</a></p>
	</section>
	
	<?php get_template_part( 'molecules/featposts' ); ?>

	<section class="section g g-3up cf">
		<h2 class="ghead"><span>Other Things</span></h2>
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'molecules/threerow' ); ?>
		<?php endwhile; ?>
		<a href="#">View More</a>
	</section>

	<?php get_template_part( 'molecules/team' ); ?>

<?php get_footer(); ?>