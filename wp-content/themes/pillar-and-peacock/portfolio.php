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
						while ( $loop->have_posts() ) : $loop->the_post();
							echo '<article class="post"><article class="text-link-block">';
							the_title();
							echo '</article>';
							the_content();
							the_post_thumbnail( 'featured-thumb' );
							echo '</article>';
						endwhile;
					?>
			</section>
			</section>		

		</section>
	</section>

<?php get_footer(); ?>