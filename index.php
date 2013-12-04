<?php
/**
 * The main template file, also the homepage
 *
 */

get_header(); ?>

	<section class="section cf home-main">
		<h1>Team Eight</h3>
		<p>We make <a href="#">websites</a>... and <a href="#">other things.</a></p>
	</section>
	<?php get_template_part( 'partials/featprojs', 'home' ); ?>
	<?php get_template_part( 'partials/otherthings', 'home' ); ?>
	<?php get_template_part( 'partials/team' ); ?>

<?php get_footer(); ?>