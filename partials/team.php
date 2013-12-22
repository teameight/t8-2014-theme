<?php
/**
 * The template for listing the team members
 *
 * Displays the team members in rows of two
 *
 */
?>
<section class="section g team cf">
    <a class="anchor" name="team"></a>
	<h2 class="ghead"><span>Team</span></h2>
	<?php 
	$args = array( 
		'cat'		=> 46, // team cat id
		'posts_per_page' 	=> 2,
		'no_found_rows' => true
	);
	$teamposts = new WP_Query( $args );
		
		if($teamposts->have_posts()) : 
		      while($teamposts->have_posts()) : 
		         $teamposts->the_post();
 ?>
	<div class="team-member">
		<?php 
		if ( '' != get_the_post_thumbnail() ) {
		    the_post_thumbnail( 'medium' );
		} else {
		    echo '<img src="'. get_template_directory_uri() . '/images/fpo_3x4.png" alt="3x4 Image">';
		}
		?>
		<div class="team-deets cf">
			<h4><?php the_title(); ?></h4>
			<?php 
				$email = get_field( "email" );
				
				if( $email ) {
				
					echo '<p class="email">'. $email .'</p>';
				
				}
			?>

		<?php if( get_field('social') ): ?>
			<ul class="nav-social">
			<?php while( has_sub_field('social') ): ?>
				<li><a href="<?php the_sub_field('link'); ?>" class="<?php the_sub_field('platform'); ?>"><span class="genericon genericon-<?php the_sub_field('platform'); ?>"></span></a></li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		</div>
	</div>
		<?php endwhile; endif; 
	wp_reset_postdata();
	?>
</section>