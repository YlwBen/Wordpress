<?php

require TEMPLATEPATH.'/Framework/theme.php';
$theme = new Theme(array(
    'menu' => array(
        'nav' => 'Navigation'
    ),
    'images' => array(
        'post' => array(
            array('thumb', 1562, 1160, true)
        ),
        'work' => array(
            array('thumb',350,466, true)
        )
    )
));

// -----------

if ( ! function_exists( 'wpt_setup' ) ):
    function wpt_setup() {
        register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
    }
endif;
add_action( 'after_setup_theme', 'wpt_setup' );

function theme_scripts(){
	global $wp_scripts;
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/librairie/bootstrap/js/bootstrap.min.js');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts');

function theme_styles(){
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/librairie/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'bootstrap_file', get_stylesheet_directory_uri() . '/librairie/bootstrap/css/bootstrap.min.css' );
	//wp_enqueue_style('bootstrap_cdn', 'https//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	//wp_enqueue_style('bootstrap', 'bootstrap_cdn');
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles');

// Register Custom Navigation Walker
require_once('class-wp-bootstrap-navwalker.php');
	?>
