<?php 

if ( ! defined( 'ABSPATH' ) )
	exit; # Exit if accessed directly


# rsbbox shortocde
function rsbbox_shortcode_register($atts, $content = null){
	$atts = shortcode_atts(
		array(
			'id' => '',
		), $atts);
		global $post;
		$post_id = $atts['id'];

	
		
	$rsbbox_catnames   		= get_post_meta($post_id, 'rsbbox_catnames', true);
	$rsbbox_theme_id      	= get_post_meta($post_id, 'rsbbox_theme_id', true);
	$rsbbox_columns      	= get_post_meta($post_id, 'rsbbox_columns', true);




	$rsbbox_cats =  array();
	$num = count($rsbbox_catnames);
	for($j=0; $j<$num; $j++){
		array_push($rsbbox_cats, $rsbbox_catnames[$j]);
	}

	$args = array(
		'post_type' 	 	=> 'tpwp_serviceboxs',
		'post_status'	 	=> 'publish',
		'posts_per_page' 	=> 3,
		'tax_query' 	 	=> array(
			array(
				'taxonomy' => 'rsbboxcat',
				'field' => 'id',
				'terms' => $rsbbox_cats,
			)
		)
	);

	$query = new WP_Query($args);

	$html.='';

	switch ($rsbbox_theme_id) {
	    case '1':
	        require_once(rsbbox_plugin_dir.'themes/theme-1.php');
	        break;
	    case '2':
	        require_once(rsbbox_plugin_dir.'themes/theme-2.php');
	        break;
	    case '3':
	        require_once(rsbbox_plugin_dir.'themes/theme-3.php');
	        break;
	    case '4':
	        require_once(rsbbox_plugin_dir.'themes/theme-4.php');
	        break;
	    case '5':
	        require_once(rsbbox_plugin_dir.'themes/theme-5.php');
	        break;
	    case '6':
	        require_once(rsbbox_plugin_dir.'themes/theme-6.php');
	        break;
	    case '7':
	        require_once(rsbbox_plugin_dir.'themes/theme-7.php');
	        break;
	    case '8':
	        require_once(rsbbox_plugin_dir.'themes/theme-8.php');
	        break;
	    case '9':
	        require_once(rsbbox_plugin_dir.'themes/theme-9.php');
	        break;
	    case '10':
	        require_once(rsbbox_plugin_dir.'themes/theme-10.php');
	        break;
	    case '11':
	        require_once(rsbbox_plugin_dir.'themes/theme-11.php');
	        break;
	    case '12':
	        require_once(rsbbox_plugin_dir.'themes/theme-12.php');
	        break;
	    case '13':
	        require_once(rsbbox_plugin_dir.'themes/theme-13.php');
	        break;
	    case '14':
	        require_once(rsbbox_plugin_dir.'themes/theme-14.php');
	        break;
	    case '15':
	        require_once(rsbbox_plugin_dir.'themes/theme-15.php');
	        break;
	    case '16':
	        require_once(rsbbox_plugin_dir.'themes/theme-16.php');
	        break;
	    case '17':
	        require_once(rsbbox_plugin_dir.'themes/theme-17.php');
	        break;
	    case '18':
	        require_once(rsbbox_plugin_dir.'themes/theme-18.php');
	        break;
	    case '19':
	        require_once(rsbbox_plugin_dir.'themes/theme-19.php');
	        break;
	    case '20':
	        require_once(rsbbox_plugin_dir.'themes/theme-20.php');
	        break;
	    case '21':
	        require_once(rsbbox_plugin_dir.'themes/theme-21.php');
	        break;
	    case '22':
	        require_once(rsbbox_plugin_dir.'themes/theme-22.php');
	        break;
	    case '23':
	        require_once(rsbbox_plugin_dir.'themes/theme-23.php');
	        break;
	}

	return $html;
}
add_shortcode('tpservicebox', 'rsbbox_shortcode_register');