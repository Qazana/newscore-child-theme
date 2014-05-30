<?php
/**
* Example on how to Disable some features
* refer to the main theme's function.php for all the features array in radium_feature_setup()
* @returns $args
*/
function radium_remove_features( $args ) {

	$args['primary']['portfolio'] = false;

 	return $args;
}
//add_filter( 'radium_theme_config_args', 'radium_remove_features' );

//*-----------------------------------------------------------------------------------*/
/*	Load child files
/*-----------------------------------------------------------------------------------*/
function radium_load_child_files() {

	if(!defined( 'CHILD_DIR' )) define( 'CHILD_DIR', get_stylesheet_directory() );
   	if(!defined( 'CHILD_URL' )) define( 'CHILD_URL', get_stylesheet_directory_uri() );

	// We've separated admin and frontend files where possible for the best performance
	if( is_admin() ) {

		//Load admin file here

	} else {

		/* Load frontend files here */

 	}


}
add_action( 'radium_init', 'radium_load_child_files', 20 );


 /*-----------------------------------------------------------------------------------
  Add our scripts
-----------------------------------------------------------------------------------*/

function radiumone_add_our_scripts() {

	//$framework = radium_framework(); //you can access framework data with this

	wp_enqueue_style( 'main-style-child',  get_stylesheet_uri(), false,'1.0','all'); //the child theme stylesheet


}
add_action( 'wp_enqueue_scripts', 'radiumone_add_our_scripts', 20 );