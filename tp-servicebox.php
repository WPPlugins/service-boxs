<?php
	/*
	Plugin Name: Service Boxs
	Plugin URI: https://themepoints.com/servicebox
	Description: Service Box is yet another simple, responsive, lightweight plugin for creating responsive service section with unlimited options.
	Version: 1.2
	Author: Themepoints
	Author URI: http://themepoints.com/
	TextDomain: rsbbox
	License: GPLv2
	*/

	if( !defined( 'ABSPATH' ) ){
	    exit;
	}

	define('RSBBOX_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
	define('rsbbox_plugin_dir', plugin_dir_path(__FILE__) );

	function rsbbox_admin_load_init(){
		wp_enqueue_script( 'jquery' );
		wp_enqueue_style( 'rsbbox_fontawesome', RSBBOX_PLUGIN_PATH.'assets/css/font-awesome.min.css' );
		wp_enqueue_style( 'rsbbox_iconpicker-css', RSBBOX_PLUGIN_PATH.'assets/css/ftw-iconpicker.min.css' );
		wp_enqueue_style( 'rsbbox_main-css', RSBBOX_PLUGIN_PATH.'assets/css/rsbbox.css' );
		wp_enqueue_script( 'rsbbox_colorpicker_js', plugins_url( '/assets/js/jscolor.js' , __FILE__ ) , array( 'jquery' ) );
		wp_enqueue_script( 'rsbbox_service_js', plugins_url( '/assets/js/rsbbox.js' , __FILE__ ) , array( 'jquery' ) );
		wp_enqueue_script( 'rsbbox_iconpicker-js', plugins_url( '/assets/js/ftw-iconpicker.min.js' , __FILE__ ) , array( 'jquery' ));
	}
	add_action( 'init', 'rsbbox_admin_load_init' );

	# Load plugin Translations
	function rsbbox_admin_load_textdomain(){

		load_plugin_textdomain('rsbbox', false, dirname( plugin_basename( __FILE__ ) ) .'/languages/' );

	}
	add_action('plugins_loaded', 'rsbbox_admin_load_textdomain');

	# Post Type
	require_once( 'lib/post-type/rsbbox-post-type.php' );

	# Metabox
	require_once( 'lib/metabox/rsbbox-metabox.php' );

	#Shortcode
	require_once( 'lib/shortcode/rsbbox-shortcode.php' );

?>