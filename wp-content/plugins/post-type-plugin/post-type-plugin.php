<?php
/**
* Plugin name: Post Type Plugin
* Plugin URI: https://github.com/ygarzonu/pluginChallenge
* Description: This plugin allows you to add custom sport posts to your Wordpress website.  
* Author: Yeiny Garzón
* Version: 0.1
*/

//Exit if accessed directly
if ( !defined('ABSPATH') ) {
	exit;
}

//ensure allways puts the file in the correct path
require ( plugin_dir_path( __FILE__ ) . 'sport-listing.php' ); 
require ( plugin_dir_path( __FILE__ ) . 'sport-fields.php' ); 
