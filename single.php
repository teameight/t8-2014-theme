<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="phead cf">
                        <header class="article-header tcrd cf">
                            <h1><?php the_title(); ?></h1>
                            <?php if( get_field('subtitle') ): ?>
                                <h5 class="subheading"><?php the_field('subtitle'); ?></h5>
                            <?php endif; ?>
                        </header>
                        <div class="pcont entry-content">
                            <div class="text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php if( get_field('images') ): ?>
                        <section class="section cont-wrap">
                            <?php get_template_part( 'partials/postimages' ); ?>
                        </section>
                    <?php endif; ?>
                    <?php if( get_field('video') ): ?>
                        <section class="section cont-wrap">
                            <?php get_template_part( 'partials/video' ); ?>
                        </section>
                    <?php endif; ?>
                </article><!-- #post -->
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>