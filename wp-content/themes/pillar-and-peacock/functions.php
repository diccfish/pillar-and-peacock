<?php 

//---- Enqueue Styles & Scripts ----//


function theme_styles()  
{ 
  wp_register_style( 'style', 
  	get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'style' );
}

add_action('wp_enqueue_scripts', 'theme_styles');

/* function theme_scripts() {
	wp_enqueue_script(
		'scripts',
		get_template_directory_uri() . '/js/scripts.js',
		array( 'jquery' ),
		void,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
*/


//---- Register Menus ----//
register_nav_menus( array(
	'primary_menu' => 'Primary Menu'
) );

//---- Add Thumbnail Support ----//

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'featured-thumb', 860, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'homepage-thumb', 220, 180, true ); //(cropped)
}


//---- Register Section Post Type ----//

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'portfolio_posts',
		array(
			'labels' => array(
				'name' => __( 'Portfolios' ),
				'singular_name' => __( 'Portfolio' )
			),
		'public' => true,
		'show_ui' => true,
		'publicly_queryable' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'has_archive' => true
		)
	);
}


//---- Register Sidebar in Footer ----//


if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Footer',
'before_widget' => '<li class="widget">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h3>',
));


//---- Customize Excerpt ----//
   
function custom_excerpt_length( $length ) {
	return 120;
}
	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


?>