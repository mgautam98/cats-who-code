<?php get_header(); ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <p>THIS IS A SINGLE PAGE</p>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content();?>
					<span class="post-meta">Posted by <a href="#"><?php the_author(' ');?></a> on <?php the_time('l, F jS, Y')?></span>
					<p><?php the_tags(); ?></p>
					<?php the_category( '&bull;' ); ?>
					<?php edit_post_link(__('Edit This Post'));?>
				</div><!-- .post --> 
			<?php endwhile; else: ?>
				<p><?php _e("Sorry, no posts matched you're criteria."); ?></p>
			<?php endif; ?>

            <?php comments_template( '', true );;?>

<?php get_footer(); ?>