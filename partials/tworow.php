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
			    echo '<img src="'. get_template_directory_uri() . '/images/fpo_4x3.png" alt="4x3 Image">';
			}
			?>
			<?php get_template_part( 'partials/titlecard' ); ?>
		</a>
	</div>
