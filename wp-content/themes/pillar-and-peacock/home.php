<?php 

/* Template Name: home  */

get_header(); 
?>
	
	<section class="content clearfix">
		<section class="wrap clearfix">
			
			<section class="twelvecol first clearfix">
				<h2 class="text-frame">Featured Spaces</h2>

				<section class="image-tiles">
					<article class="post">
						<img src="<?php bloginfo('template_url'); ?>/images/bed_horz.jpg">
					</article>
					<article class="post">
						<img src="<?php bloginfo('template_url'); ?>/images/shelves_vert.png">
					</article>
					<article class="post">
						<img src="<?php bloginfo('template_url'); ?>/images/chair_vert.png">
					</article>
					<article class="post">
						<img src="<?php bloginfo('template_url'); ?>/images/chair_horz.jpg">
					</article>
				</section>
			
			<a href="/portfolio" class="text-link-frame">More Spaces</a>
				
		</section>
	  </section>
	</section>

<?php get_footer(); ?>