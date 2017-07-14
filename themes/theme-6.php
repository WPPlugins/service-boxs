<?php

    if( !defined( 'ABSPATH' ) ){
        exit;
    }

	$html.='
	<style type="text/css">

	</style>
	';

	$html .='<div class="servicearea'.$post_id.'">';
    while ($query->have_posts()) : $query->the_post();

	$shortdetails 			= get_post_meta( $post->ID, 'tup_biography', true );
	$rsbboxurl 				= get_post_meta( $post->ID, 'rsbbox_url', true );
	$rsbboxicons 			= get_post_meta( $post->ID, 'ftw_icon', true );
	$rsbbox_back_color 		= get_post_meta( $post->ID, 'rsbbox_back_color', true );
	$rsbbox_icon_color 		= get_post_meta( $post->ID, 'rsbbox_icon_color', true );
	$rsbbox_iconbg_color 	= get_post_meta( $post->ID, 'rsbbox_iconbg_color', true );
	$rsbbox_title_color 	= get_post_meta( $post->ID, 'rsbbox_title_color', true );
	$rsbbox_content_color 	= get_post_meta( $post->ID, 'rsbbox_content_color', true );
	
	

	
	$html.='<div class="serviceboxs-col-lg-'.$rsbbox_columns.' serviceboxs-col-md-4 serviceboxs-col-sm-2 serviceboxs-col-xs-1">';

		$html.='
            <div class="rs_servicebox_style6" style="background-color:#'.$rsbbox_back_color.'">
                <div class="rs_servicebox_style6_icon" style="background-color:#'.$rsbbox_iconbg_color.'">
                    <i style="color:#'.$rsbbox_icon_color.'" class="fa '.$rsbboxicons.'"></i>
                </div>
                <div class="rs_servicebox_style6_content">
                    <h3 style="color:#'.$rsbbox_title_color.'">'.get_the_title().'</h3>
					<p style="color:#'.$rsbbox_content_color.'">
						'.$shortdetails.'
					</p>
                </div>
                <a style="color:#'.$rsbbox_content_color.'" href="'.esc_url($rsbboxurl).'" class="rs_servicebox_style6_readmore">Read more</a>
            </div>
		';

	$html.='</div>';	

    endwhile;
	$html.='</div>';