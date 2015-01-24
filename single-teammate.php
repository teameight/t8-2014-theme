<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>
<?php $teammate_slug = "other-things"; ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'partials/teammate' ); ?>
                <?php $teammate_slug = $post->post_name; ?>

			<?php endwhile; ?>

            <section class="section g g-3up cf">
                <h2 class="ghead"><span>Recent Projects</span></h2>
                <?php 
                    $args = array( 
                        'posts_per_page'    => 9,
                        'tag'     => $teammate_slug
                    );
                    $featposts = get_posts( $args );
                    ?>
                    <?php foreach ( $featposts as $post ) : ?>
                        <?php setup_postdata( $post ); ?>
                        <?php include(locate_template('partials/threerow.php' )); ?>
                    <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </section>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>