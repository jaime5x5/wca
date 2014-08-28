<?php 


function theme_styles() {
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
//add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {
	global $wp_scripts;
	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', get_template_directory_uri() . '/js/respond.js', '', '', false );
	wp_enqueue_script( 'gsap_scroll', get_template_directory_uri() . '/js/gsap/plugins/ScrollToPlugin.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'gsap', get_template_directory_uri() . '/js/gsap/TweenMax.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'viewport', get_template_directory_uri() . '/js/viewport.mini.js', array('jquery'), '', true );
	wp_enqueue_script( 'vide', get_template_directory_uri() . '/js/jquery.vide.js', array('jquery'), '', true );
	wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'gsap_scroll', 'viewport', 'bootstrap_js', 'masonry', 'gsap'), '', true );
	//$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	//$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );


function register_theme_menus() {
	register_nav_menus(
		array(
				'header-menu' => __( 'Header Menu' )
			)
		);
}
add_action( 'init', 'register_theme_menus');

function blog_sidebar_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
blog_sidebar_widget( 'Blog Sidebar', 'blog', 'Displays on the side of the blog page' );


function front_page_calendar( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
front_page_calendar( 'Front Page Calendar', 'front_page', 'Displays the Calendar on the front page.' );



function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'<br><a class="news-feed-more" href="'. get_permalink($post->ID) . '"> read more &#187;</a>';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }



add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

//create_widget( 'Latest News', 'blog', 'Displays on the side of the blog page' );

//tutorial care of http://www.sitepoint.com/wordpress-options-panel/
require_once(TEMPLATEPATH . '/functions/admin-menu.php');








?>