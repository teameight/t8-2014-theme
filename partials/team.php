<?php
/**
 * The template for listing the team members
 *
 * Displays the team members in rows of two
 *
 */
?>
<section class="section g team cf">
	<h2 class="ghead"><span>Team</span></h2>
<?php 
	$i = 1;
	while($i <= 2):
?>
	<div class="team-member">
		<img src="<?php bloginfo('template_directory'); ?>/images/fpo_3x4.png" alt="3x4 Image">
			<div class="team-deets cf">
				<h4>Teammate Name</h4>
				<p class="email">email@team-eight.com</p>
				<ul class="nav-social">
					<li><a href="#" class="github">GitHub</a></li>
					<li><a href="#" class="linkedin">LinkedIn</a></li>
					<li><a href="#" class="facebook">Facebook</a></li>
					<li><a href="#" class="twitter">Twitter</a></li>
				</ul>
			</div>
	</div>
<?php 
		$i++; 
	endwhile; 
?>
</section>