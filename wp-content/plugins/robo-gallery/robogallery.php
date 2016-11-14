<?php
/*
Plugin Name: Robo Gallery
Plugin URI: http://robosoft.co/gallery
Description: Gallery it's easy and elegant way to publish images on page. Responsive, stylish and simple gallery.
Author: RoboSoft
Version: 2.5.4
Author URI: http://robosoft.co/gallery
License: GPLv3 or later
*/

if(!defined('WPINC'))die;
if(!defined("ABSPATH"))exit;

define("ROBO_GALLERY", 1); 
define("ROBO_GALLERY_VERSION", '2.5.4'); 

if( !defined("ROBO_GALLERY_PATH") ) define("ROBO_GALLERY_PATH", plugin_dir_path( __FILE__ ));

define("ROBO_GALLERY_SPECIAL", 1); 

add_action( 'plugins_loaded', 'rbs_gallery_load_textdomain' );
function rbs_gallery_load_textdomain() {
  load_plugin_textdomain( 'rbs_gallery', false, dirname(plugin_basename( __FILE__ )) . '/languages' ); 
}

if(!function_exists('rbs_gallery_pro_check')){
	function rbs_gallery_pro_check(){
		$proPath 	= '';
		$key_dir  	= 'robogallerykey';
		$key_file 	= $key_dir.'.php';
		$proPath = ROBO_GALLERY_PATH.$key_file;
		if( file_exists($proPath) ) return $proPath;
		for($i=-1;$i<6;$i++){ 
			$proPath = WP_PLUGIN_DIR.'/'.$key_dir.($i!=-1?'-'.$i:'').'/'.$key_file;
			if ( file_exists($proPath) ) return $proPath;
		}
		return false;
	}
}

if( $keyResult=rbs_gallery_pro_check() ){
	define("ROBO_GALLERY_PRO", 1);
	define("ROBO_GALLERY_KEY_PATH", $keyResult );
	include_once( ROBO_GALLERY_KEY_PATH );
} else {
	define("ROBO_GALLERY_PRO", 0);
}

define("ROBO_GALLERY_INCLUDES_PATH", 	ROBO_GALLERY_PATH.'includes/');
define("ROBO_GALLERY_FRONTEND_PATH", 	ROBO_GALLERY_INCLUDES_PATH.'frontend/');
define("ROBO_GALLERY_OPTIONS_PATH", 	ROBO_GALLERY_INCLUDES_PATH.'options/');
define("ROBO_GALLERY_EXTENSIONS_PATH", 	ROBO_GALLERY_INCLUDES_PATH.'extensions/');
define("ROBO_GALLERY_CMB_PATH", 		ROBO_GALLERY_PATH.'cmb2/');
define("ROBO_GALLERY_CMB_FILEDS_PATH", 	ROBO_GALLERY_CMB_PATH.'fields/');

define("ROBO_GALLERY_URL", 				plugin_dir_url( __FILE__ ));

function activateRoboGallery() {
	require_once ROBO_GALLERY_INCLUDES_PATH.'rbs_class_activator.php';
	RoboGalleryActivator::activate();
}
register_activation_hook( __FILE__, 'activateRoboGallery' );

function deactivateRoboGallery() {
	require_once ROBO_GALLERY_INCLUDES_PATH.'rbs_class_activator.php';
	RoboGalleryActivator::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivateRoboGallery' );

if( file_exists(ROBO_GALLERY_INCLUDES_PATH.'rbs_gallery_init.php') )  
		require_once ROBO_GALLERY_INCLUDES_PATH.'rbs_gallery_init.php';