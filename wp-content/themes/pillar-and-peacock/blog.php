<?php 

/* Template Name: blog */

get_header(); ?>
	
		<section class="content clearfix">
		<section class="wrap clearfix">
			
			<section class="twelvecol first clearfix">	
					<?php query_posts ('posts_per_page=2');
						while ( have_posts() ) : the_post(); ?>
							<article class="post-content clearfix">
								<h3 class="post-title"><?php the_title(); ?></h3>
								<section class="post-comments"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></section>
								<section class="post-img"><?php the_post_thumbnail( 'featured-thumb' ); ?></section>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="text-link-frame">Read More</a>
							</article>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
			</section>		

		</section>
	</section>

<?php get_footer(); ?>