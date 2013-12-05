<?php
/**
 * The template for listing two in a row in a grid
 *
 *
 */
?>

	<div class="gi" id="gi-<?php the_ID(); ?>">
		<a href="<?php the_permalink(); ?>">
			<?php 
			if ( '' != get_the_post_thumbnail() ) {
			    the_post_thumbnail( 'large' );
			} else {
			    echo '<img src="'. get_bloginfo('template_directory'). '/images/fpo_4x3.png" alt="4x3 Image">';
			}
			?>
			<?php get_template_part( 'atoms/titlecard' ); ?>
		</a>
	</div>