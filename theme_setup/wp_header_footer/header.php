<?php 
// Enqueue main scripts and styles
add_action( 'wp_enqueue_scripts', 'main_css_js' );
function main_css_js() {
  echo '<script defer type="text/javascript" src="' . get_theme_file_uri( "/build/index.js" ) . '"></script>';
	wp_enqueue_script( "main_script", get_theme_file_uri( "/build/index.js" ), array(""), "1.0", true );
	wp_enqueue_style( "main_styles", get_theme_file_uri( "/build/style-index.css" ), array(), '1.0' );
}
