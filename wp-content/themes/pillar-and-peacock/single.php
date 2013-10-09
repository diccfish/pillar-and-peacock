<?php get_header(); ?>
	
	<div class="content clearfix">
		<div class="wrap wide clearfix">
			
			<aside class="twocol last floatbox">
				<?php wp_list_categories('title_li=<h4>' . __('Categories') . '</h4>' ); ?>
			</aside>	
			
			<div class="tencol first clearfix">			
				<?php while ( have_posts() ) : the_post(); ?>		
						<article class="post-content clearfix">
								<h3 class="post-title"><?php the_title(); ?></h3>
								<div class="post-comments">
									<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
								</div>
								<?php the_content(); ?>
								<hr>
								<?php comments_template( '', true ); ?>
						</article>
				<?php endwhile; ?>
						<nav class="post-next-nav"><?php next_post('%', 'next', 'no'); ?></nav>
						
						<nav class="post-prev-nav"><?php previous_post('%', 'previous', 'no'); ?></nav>
			</div>
		</div>
	</div>

<?php get_footer(); ?>