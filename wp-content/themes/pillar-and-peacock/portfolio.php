<?php 

/* Template Name: portfolio */

get_header(); ?>
	
		<section class="content clearfix">
		<section class="wrap clearfix">
			
			<section class="twelvecol first clearfix">
			<section class="image-tiles">
				<?php
					$args = array( 'post_type' => 'portfolio_posts', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					 
					while ( $loop->have_posts() ) : $loop->the_post(); ?>	
						<article class="post">
							 <?php $gallery_shortcode = '[gallery id="' . intval(the_content()) . '"]'; ?>
							<div class="rollover"><img src="<?php the_field('rolloverImage'); ?>"></div>
						</article>				
					<?php endwhile; ?>
			</section>
			</section>		

		</section>
	</section>

<?php get_footer(); ?>