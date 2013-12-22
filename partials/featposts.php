<?php
/**
 * The template for listing featured projects
 *
 * Displays the four most recent featured projects
 *
 */
?>
    <section class="section g g-2up cf">
	    <a class="anchor" name="featured"></a>
		<h2 class="ghead"><span>Featured Sites</span></h2>
		<?php 
		$args = array( 
			'posts_per_page' 	=> 4,
			'cat'		=> 47, // featured cat id
			'no_found_rows' => true
		);
		$featposts = new WP_Query( $args );
		
		if($featposts->have_posts()) : 
		      while($featposts->have_posts()) : 
		         $featposts->the_post();
 ?>
		<div class="gi" id="gi-<?php the_ID(); ?>">
			<a href="<?php the_permalink(); ?>">
				<?php 
				if ( '' != get_the_post_thumbnail() ) {
				    the_post_thumbnail( 'large' );
				} else {
				    echo '<img src="'. get_template_directory_uri() . '/images/fpo_4x3.png" alt="4x3 Image">';
				}
				?>
				<?php get_template_part( 'partials/titlecard' ); ?>
			</a>
		</div>
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
<!--		<a class="more" href="#">View More</a>-->
	</section>
