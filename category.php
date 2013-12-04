<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<section class="section g g-3up cf">
				<h2 class="ghead"><span><?php echo single_cat_title( '', false ); ?></span></h2>
			<?php 
				$i = 1;
				while($i <= 6):
			?>
				<div class="gi">
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/images/fpo_4x3.png" alt="4x3 Image">
						<div class="title-card tcrd">
							<div>
								<h3>Thing Title</h3>
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

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>