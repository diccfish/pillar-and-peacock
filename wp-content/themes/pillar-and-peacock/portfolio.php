<?php 

/* Template Name: portfolio */

get_header(); ?>
	
		<div class="content clearfix">
		<div class="wrap clearfix">
			
			<div class="twelvecol first clearfix">
			<div id="container" class="js-masonry">
				<?php
					$args = array( 'post_type' => 'portfolio_posts', 'posts_per_page' => -1 );
					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); 	
					
					$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portfolio-img'); ?>
					
						<article class="post brick">
							 <a href="<?php echo $image[0]; ?>" rel="lightbox"><?php the_post_thumbnail('portfolio-thumb'); ?>
							<div class="label-box clear fix"><span><?php the_title();?></span></div></a>
						</article>				
					<?php endwhile; ?>
			</div>
			</div>		

		</div>
	</div>

<?php get_footer(); ?>