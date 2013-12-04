<?php
/**
 * The template for listing featured projects
 *
 * Displays the four most recent (sticky)? featured projects
 *
 */
?>
<section class="section g g-2up cf">
	<h2 class="ghead"><span>Featured Projects</span></h2>
<?php 
	$i = 1;
	while($i <= 4):
?>
	<div class="gi">
		<a href="#">
			<img src="<?php bloginfo('template_directory'); ?>/images/fpo_4x3.png" alt="4x3 Image">
			<div class="title-card tcrd">
				<div>
					<h3>Proj Title</h3>
					<h5 class="subheading">service + service</h5><?php // these are either categories or tags? ?>
				</div>
			</div>
		</a>
	</div>
<?php 
		$i++; 
	endwhile; 
?>
	<a href="#">View More</a>
</section>