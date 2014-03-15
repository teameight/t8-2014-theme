<?php
/**
 * The main template file, also the homepage
 *
 */

get_header(); ?>

	<section class="section cf home-main">
		<h1><?php bloginfo('name'); ?></h1>
		<?php 
		$args = array( 
			'pagename'		=> 'home', // home page id
		);
		$homep = new WP_Query( $args );
		
		if($homep->have_posts()) : 
		    while($homep->have_posts()) : 
		    	$homep->the_post();
 		?>
			<?php the_content(); ?>
			<?php if( get_field('big_notice') ) { ?>

	</section>

	<section class="section cf big-notice">
		<?php the_field('big_notice'); ?>
	</section>

			<?php } ?>
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
	</section>
	
	<?php get_template_part( 'partials/featposts' ); ?>

	<section class="section g g-3up cf">
	    <a class="anchor" name="other"></a>
		<h2 class="ghead"><span>Other Things</span></h2>
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'partials/threerow' ); ?>
		<?php endwhile; ?>
<!--		<a class="more" href="#">View More</a>-->
	</section>

	<?php get_template_part( 'partials/team' ); ?>

<?php get_footer(); ?>