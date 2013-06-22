<?php 

/* Template Name: home  */

get_header(); 
?>
	
	<section class="content-wrapper clearfix">
		<section class="twelvecol first clearfix">
			<h2 class="text-frame">Featured Spaces</h2>

				<section class="image-tiles">
					<img src="<?php bloginfo('template_url'); ?>/images/bed_horz.jpg">
					<img src="<?php bloginfo('template_url'); ?>/images/shelves_vert.png">
					<img src="<?php bloginfo('template_url'); ?>/images/chair_vert.png">
					<img src="<?php bloginfo('template_url'); ?>/images/chair_horz.jpg">
				</section>
			
			<a href="/portfolio" class="text-link-frame">More Spaces</a>
				
		</section>
	</section>

<?php get_footer(); ?>