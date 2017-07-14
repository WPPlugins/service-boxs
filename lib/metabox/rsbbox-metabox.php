<?php

if( !defined( 'ABSPATH' ) ){
    exit;
}

function register_rsbbox_meta_boxes() {
    add_meta_box(
        'rsbbox_meta_id_01',                            # Metabox
        __( 'Service Box Details', 'rsbbox' ),          # Title
        'rsbbox_add_meta',                              # Call Back func
       	'tpwp_serviceboxs',                             # post type
        'normal'                                        # Text Content
    );
    add_meta_box(
        'rsbbox_meta_id_02',                            # Metabox
        __( 'Color Settings', 'rsbbox' ),           	# Title
        'rsbbox_add_meta2',                             # Call Back func
       	'tpwp_serviceboxs',                             # post type
        'normal'                                        # Text Content
    );
	
    add_meta_box(
        'rsbbox_meta_id_03',                            # Metabox
        __( 'Options Settings  - <a style="color: red;outline: none;text-decoration: none;box-shadow: none;font-size: 12px;" target="_blank" href="https://themepoints.com">Unlock All Features</a> - <a style="color: red;outline: none;text-decoration: none;box-shadow: none;font-size: 12px;" target="_blank" href="https://themepoints.com/questions-answer/">Need Support</a>', 'rsbbox' ),           	# Title
        'rsbbox_add_meta3',                             # Call Back func
       	'generateservices',                             # post type
        'normal'                                        # Text Content
    );
}
add_action( 'add_meta_boxes', 'register_rsbbox_meta_boxes' );

function rsbbox_add_meta( $post, $args ) {
	$ftw_icon            = get_post_meta($post->ID, 'ftw_icon', true);
	$rsbbox_url          = get_post_meta($post->ID, 'rsbbox_url', true);
	$tup_biography       = get_post_meta($post->ID, 'tup_biography', true);
 ?>
	<table class="form-table">
		<tbody>
			<tr valign="top" class="ui-state-default">
				<th scope="row">
					<label for="tup_biography"><?php _e('Description', 'tup')?></label>
				</th>
				<td style="vertical-align: middle;">
					<div>
						<textarea maxlength="147" name="tup_biography" id="tup_biography" class="widefat widefat_custom" cols="25" rows="3"><?php echo $tup_biography; ?></textarea>		
					</div>
				</td>
			</tr> <!-- End Description -->
		
			<tr valign="top">
				<th scope="row">
					<label for="ftw_icon"><?php _e('Icon', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<input type="text" name="ftw_icon" id="ftw_icon" class="input1 input timezone_string"  placeholder="Select Icon" required="required" value="<?php if(!empty($ftw_icon)){ echo $ftw_icon; } ?>">
					<script type="text/javascript">
						jQuery(document).ready(function($){
							'use strict';
							$(".input1").iconpicker('.input1');
						});
					</script>
				</td>
			</tr> <!-- End Icons -->
		
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_url"><?php _e('URL', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<input type="text" name="rsbbox_url" value="<?php if($rsbbox_url !=''){echo $rsbbox_url;} else{ echo "";} ?>">
				</td>
			</tr> <!-- End URL -->
			
			
			
		</tbody>
	</table>
<?php }

function rsbbox_add_meta2( $post, $args ) {

	$rsbbox_icon_color       	= get_post_meta($post->ID, 'rsbbox_icon_color', true);
	$rsbbox_iconbg_color       	= get_post_meta($post->ID, 'rsbbox_iconbg_color', true);
	$rsbbox_back_color       	= get_post_meta($post->ID, 'rsbbox_back_color', true);
	$rsbbox_title_color      	= get_post_meta($post->ID, 'rsbbox_title_color', true);
	$rsbbox_content_color      	= get_post_meta($post->ID, 'rsbbox_content_color', true);

 ?>
	<table class="form-table">
		<tbody>
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_back_color"><?php _e('Background Color', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<input type="text" class="jscolor" value="<?php if($rsbbox_back_color !=''){echo $rsbbox_back_color;} else{ echo "#fff";} ?>" id="rsbbox_back_color" name="rsbbox_back_color">
				</td>
			</tr> <!-- End Background Color -->	
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_icon_color"><?php _e('Icon Color', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<input type="text" class="jscolor" id="rsbbox_icon_color" name="rsbbox_icon_color" value="<?php if($rsbbox_icon_color !=''){echo $rsbbox_icon_color;} else{ echo "#000";} ?>">
				</td>
			</tr> <!-- End Icon Color -->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_iconbg_color"><?php _e('Icon Bg Color', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<input type="text" class="jscolor" id="rsbbox_iconbg_color" name="rsbbox_iconbg_color" value="<?php if($rsbbox_iconbg_color !=''){echo $rsbbox_iconbg_color;} else{ echo "#ddd";} ?>">
				</td>
			</tr> <!-- End Icon Bg Color -->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_title_color"><?php _e('Title Color', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<input type="text" class="jscolor" id="rsbbox_title_color" name="rsbbox_title_color" value="<?php if($rsbbox_title_color !=''){echo $rsbbox_title_color;} else{ echo "#000";} ?>">
				</td>
			</tr> <!-- End Title Color -->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_content_color"><?php _e('Content Color', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<input type="text" class="jscolor" id="rsbbox_content_color" name="rsbbox_content_color" value="<?php if($rsbbox_content_color !=''){echo $rsbbox_content_color;} else{ echo "#000";} ?>">
				</td>
			</tr> <!-- End Content Color -->

	
			
		</tbody>
	</table>
<?php }


function rsbbox_add_meta3($post, $args){

	#Call get post meta.
	$rsbbox_catnames 	= get_post_meta($post->ID, 'rsbbox_catnames', true);
	if(empty($rsbbox_catnames)){
		$rsbbox_catnames = array();
	}
	$rsbbox_theme_id 		= get_post_meta($post->ID, 'rsbbox_theme_id', true);
	$rsbbox_columns 		= get_post_meta($post->ID, 'rsbbox_columns', true);
	$rsbbox_itemsicons 		= get_post_meta($post->ID, 'rsbbox_itemsicons', true);
	$rsbbox_hideicons 		= get_post_meta($post->ID, 'rsbbox_hideicons', true);
	$rsbbox_hidetitle 		= get_post_meta($post->ID, 'rsbbox_hidetitle', true);
	$rsbbox_titlesize 		= get_post_meta($post->ID, 'rsbbox_titlesize', true);
	$rsbbox_contentsize 	= get_post_meta($post->ID, 'rsbbox_contentsize', true);
	$rsbbox_hidereadmore 	= get_post_meta($post->ID, 'rsbbox_hidereadmore', true);
	$rsbbox_moresize_color 	= get_post_meta($post->ID, 'rsbbox_moresize_color', true);
	$rsbbox_morehover_color = get_post_meta($post->ID, 'rsbbox_morehover_color', true);
	$rsbbox_moresize 		= get_post_meta($post->ID, 'rsbbox_moresize', true);

?>
	<div class="wrap">
		<table class="form-table"> 
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_catnames"><?php _e('Categories', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<?php
						$args = array(
							'taxonomy'     => 'rsbboxcat',
							'orderby'      => 'name',
							'show_count'   => 1,
							'pad_counts'   => 1,
							'hierarchical' => 1,
							'echo'         => 0
						);
						$allthecats = get_categories( $args );
					?>

					<select required="" style="min-width:162px !important" class="timezone_string" name="rsbbox_catnames[]" multiple="multiple" size="10" style="height: 100px;">
						<?php
							foreach( $allthecats as $category ):
							$cat_id = $category->cat_ID;
							if(in_array($category->cat_ID, $rsbbox_catnames)){
								echo 	$selected = 'selected';
							}
							else
							{
								echo	$selected = '';
							}
						?>
						<option <?php echo $selected; ?> value="<?php echo $cat_id; ?>"><?php echo $category->cat_name; ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<!-- End Categories -->


			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_theme_id"><?php _e('Styles', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<select name="rsbbox_theme_id" id="rsbbox_theme_id" class="timezone_string">
						<option disabled value="1" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '1' ); ?>><?php _e('Style 1 (Only Pro)', 'rsbbox')?></option>
						<option value="21" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '21' ); ?>><?php _e('Style 01 (Free)', 'rsbbox')?></option>
						<option value="22" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '22' ); ?>><?php _e('Style 02 (Free)', 'rsbbox')?></option>
						<option value="23" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '23' ); ?>><?php _e('Style 03 (Free)', 'rsbbox')?></option>
						<option disabled value="2" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '2' ); ?>><?php _e('Style 2 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="3" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '3' ); ?>><?php _e('Style 3 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="4" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '4' ); ?>><?php _e('Style 4 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="5" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '5' ); ?>><?php _e('Style 5 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="6" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '6' ); ?>><?php _e('Style 6 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="7" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '7' ); ?>><?php _e('Style 7 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="8" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '8' ); ?>><?php _e('Style 8 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="9" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '9' ); ?>><?php _e('Style 9 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="10" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '10' ); ?>><?php _e('Style 10 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="11" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '11' ); ?>><?php _e('Style 11 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="12" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '12' ); ?>><?php _e('Style 12 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="13" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '13' ); ?>><?php _e('Style 13 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="14" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '14' ); ?>><?php _e('Style 14 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="15" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '15' ); ?>><?php _e('Style 15 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="16" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '16' ); ?>><?php _e('Style 16 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="17" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '17' ); ?>><?php _e('Style 17 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="18" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '18' ); ?>><?php _e('Style 18 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="19" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '19' ); ?>><?php _e('Style 19 (Only Pro)', 'rsbbox')?></option>
						<option disabled value="20" <?php if ( isset ( $rsbbox_theme_id ) ) selected( $rsbbox_theme_id, '20' ); ?>><?php _e('Style 20 (Only Pro)', 'rsbbox')?></option>
					</select>
				</td>
			</tr>
			<!-- End Service Styles -->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_columns"><?php _e('Service Column', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<select name="rsbbox_columns" id="rsbbox_columns" class="timezone_string">
						<option value="3" <?php if ( isset ( $rsbbox_columns ) ) selected( $rsbbox_columns, '3' ); ?>><?php _e('3 Column', 'rsbbox')?></option>
						<option value="2" <?php if ( isset ( $rsbbox_columns ) ) selected( $rsbbox_columns, '2' ); ?>><?php _e('2 Column', 'rsbbox')?></option>
						<option value="1" <?php if ( isset ( $rsbbox_columns ) ) selected( $rsbbox_columns, '1' ); ?>><?php _e('1 Column', 'rsbbox')?></option>
						<option disabled value="4" <?php if ( isset ( $rsbbox_columns ) ) selected( $rsbbox_columns, '4' ); ?>><?php _e('4 Column (Only Pro)', 'rsbbox')?></option>
						<option disabled value="5" <?php if ( isset ( $rsbbox_columns ) ) selected( $rsbbox_columns, '5' ); ?>><?php _e('5 Column (Only Pro)', 'rsbbox')?></option>
						<option disabled value="6" <?php if ( isset ( $rsbbox_columns ) ) selected( $rsbbox_columns, '6' ); ?>><?php _e('6 Column (Only Pro)', 'rsbbox')?></option>
					</select>
				</td>
			</tr>
			<!-- End Team Column -->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_itemsicons"><?php _e('Total Items (Only Pro)', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<select name="rsbbox_itemsicons" id="rsbbox_itemsicons">
						<?php for($i=1; $i<=72; $i++){?>
						<option value="<?php echo $i; ?>" <?php if ( isset ( $rsbbox_itemsicons ) ) selected( $rsbbox_itemsicons, $i ); ?>><?php echo $i."";?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<!-- End Total Items -->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_hideicons"><?php _e('Hide Icon (Only Pro)', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<select name="rsbbox_hideicons" id="rsbbox_hideicons" class="timezone_string">
						<option value="1" <?php if ( isset ( $rsbbox_hideicons ) ) selected( $rsbbox_hideicons, '1' ); ?>><?php _e('Show', 'rsbbox')?></option>
						<option value="2" <?php if ( isset ( $rsbbox_hideicons ) ) selected( $rsbbox_hideicons, '2' ); ?>><?php _e('Hide', 'rsbbox')?></option>
					</select>
				</td>
			</tr>
			<!-- End Icon Show/Hide -->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_iconsize"><?php _e('Icon Font Size (Only Pro)', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<select name="rsbbox_iconsize" id="rsbbox_iconsize">
						<?php for($i=12; $i<=72; $i++){?>
						<option value="<?php echo $i; ?>" <?php if ( isset ( $rsbbox_iconsize ) ) selected( $rsbbox_iconsize, $i ); ?>><?php echo $i."px";?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<!-- End Icon Font Size-->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_hidetitle"><?php _e('Hide Title (Only Pro)', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<select name="rsbbox_hidetitle" id="rsbbox_hidetitle" class="timezone_string">
						<option value="1" <?php if ( isset ( $rsbbox_hidetitle ) ) selected( $rsbbox_hidetitle, '1' ); ?>><?php _e('Show', 'rsbbox')?></option>
						<option value="2" <?php if ( isset ( $rsbbox_hidetitle ) ) selected( $rsbbox_hidetitle, '2' ); ?>><?php _e('Hide', 'rsbbox')?></option>
					</select>
				</td>
			</tr>
			<!-- End Title Show/Hide -->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_titlesize"><?php _e('Title Font Size (Only Pro)', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<select name="rsbbox_titlesize" id="rsbbox_titlesize">
						<?php for($i=12; $i<=72; $i++){?>
						<option value="<?php echo $i; ?>" <?php if ( isset ( $rsbbox_titlesize ) ) selected( $rsbbox_titlesize, $i ); ?>><?php echo $i."px";?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<!-- End Title Font Size-->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_contentsize"><?php _e('Content Font Size (Only Pro)', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<select name="rsbbox_contentsize" id="rsbbox_contentsize">
						<?php for($i=12; $i<=72; $i++){?>
						<option value="<?php echo $i; ?>" <?php if ( isset ( $rsbbox_contentsize ) ) selected( $rsbbox_contentsize, $i ); ?>><?php echo $i."px";?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<!-- End Title Font Size-->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_hidereadmore"><?php _e('Hide Button (Only Pro)', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<select name="rsbbox_hidereadmore" id="rsbbox_hidereadmore" class="timezone_string">
						<option value="1" <?php if ( isset ( $rsbbox_hidereadmore ) ) selected( $rsbbox_hidereadmore, '1' ); ?>><?php _e('Show', 'rsbbox')?></option>
						<option value="2" <?php if ( isset ( $rsbbox_hidereadmore ) ) selected( $rsbbox_hidereadmore, '2' ); ?>><?php _e('Hide', 'rsbbox')?></option>
					</select>
				</td>
			</tr>
			<!-- End Read More Show/Hide -->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_moresize_color"><?php _e('Button Font Color (Only Pro)', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<input name="rsbbox_moresize_color" value="<?php if($rsbbox_moresize_color !=''){echo $rsbbox_moresize_color;} else{ echo "#000";} ?>" class="jscolor" />
				</td>
			</tr>
			<!-- End Excerpt Color -->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_morehover_color"><?php _e('Button Hover Color (Only Pro)', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<input name="rsbbox_morehover_color" value="<?php if($rsbbox_morehover_color !=''){echo $rsbbox_morehover_color;} else{ echo "#ddd";} ?>" class="jscolor" />
				</td>
			</tr>
			<!-- End Excerpt Color -->
			
			<tr valign="top">
				<th scope="row">
					<label for="rsbbox_moresize"><?php _e('Button Font Size (Only Pro)', 'rsbbox')?></label>
				</th>
				<td style="vertical-align: middle;">
					<select name="rsbbox_moresize" id="rsbbox_moresize">
						<?php for($i=12; $i<=72; $i++){?>
						<option value="<?php echo $i; ?>" <?php if ( isset ( $rsbbox_moresize ) ) selected( $rsbbox_moresize, $i ); ?>><?php echo $i."px";?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<!-- End Title Font Size-->
			
			
		</table>
	</div>
<?php  }





# Data save in custom metabox field
function rsbboxsave_meta_value($post_id){

	# Doing autosave then return.
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;

	#Checks for input and saves if needed	
	if( isset( $_POST['rsbbox_catnames'] ) ) {
		update_post_meta( $post_id, 'rsbbox_catnames', $_POST[ 'rsbbox_catnames' ]  );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'rsbbox_theme_id' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_theme_id', $_POST['rsbbox_theme_id'] );
	}

	#Value check and saves if needed
	if( isset( $_POST[ 'rsbbox_columns' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_columns', esc_html($_POST[ 'rsbbox_columns' ]) );
	}

	#Value check and saves if needed
	if( isset( $_POST['ftw_icon'] ) ) {
		update_post_meta( $post_id, 'ftw_icon', $_POST[ 'ftw_icon' ]  );
	}

	#Value check and saves if needed
	if( isset( $_POST['rsbbox_url'] ) ) {
		update_post_meta( $post_id, 'rsbbox_url', $_POST[ 'rsbbox_url' ]  );
	}

	#Value check and saves if needed
	if( isset( $_POST[ 'tup_biography' ] ) && strlen($_POST[ 'tup_biography' ]) > 2  && strlen($_POST[ 'tup_biography' ]) < 1500) {
		update_post_meta( $post_id, 'tup_biography', $_POST['tup_biography'] );
	}

	#Value check and saves if needed
	if( isset( $_POST[ 'tup_biographys' ] ) && strlen($_POST[ 'tup_biographys' ]) > 2  && strlen($_POST[ 'tup_biographys' ]) < 1500) {
		update_post_meta( $post_id, 'tup_biographys', $_POST['tup_biographys'] );
	}

	#Value check and saves if needed
	if( isset( $_POST['rsbbox_icon_color'] ) ) {
		update_post_meta( $post_id, 'rsbbox_icon_color', $_POST[ 'rsbbox_icon_color' ]  );
	}

	#Value check and saves if needed
	if( isset( $_POST['rsbbox_iconbg_color'] ) ) {
		update_post_meta( $post_id, 'rsbbox_iconbg_color', $_POST[ 'rsbbox_iconbg_color' ]  );
	}

	#Value check and saves if needed
	if( isset( $_POST['rsbbox_back_color'] ) ) {
		update_post_meta( $post_id, 'rsbbox_back_color', $_POST[ 'rsbbox_back_color' ]  );
	}

	#Value check and saves if needed
	if( isset( $_POST['rsbbox_title_color'] ) ) {
		update_post_meta( $post_id, 'rsbbox_title_color', $_POST[ 'rsbbox_title_color' ]  );
	}

	#Value check and saves if needed
	if( isset( $_POST['rsbbox_content_color'] ) ) {
		update_post_meta( $post_id, 'rsbbox_content_color', $_POST[ 'rsbbox_content_color' ]  );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'rsbbox_hideicons' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_hideicons', $_POST[ 'rsbbox_hideicons' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'rsbbox_iconsize' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_iconsize', $_POST[ 'rsbbox_iconsize' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'rsbbox_hidetitle' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_hidetitle', $_POST[ 'rsbbox_hidetitle' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'rsbbox_titlesize' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_titlesize', $_POST[ 'rsbbox_titlesize' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'rsbbox_contentsize' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_contentsize', $_POST[ 'rsbbox_contentsize' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'rsbbox_hidereadmore' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_hidereadmore', $_POST[ 'rsbbox_hidereadmore' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'rsbbox_moresize' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_moresize', $_POST[ 'rsbbox_moresize' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'rsbbox_moresize_color' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_moresize_color', $_POST[ 'rsbbox_moresize_color' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'rsbbox_morehover_color' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_morehover_color', $_POST[ 'rsbbox_morehover_color' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'rsbbox_itemsicons' ] ) ) {
	    update_post_meta( $post_id, 'rsbbox_itemsicons', $_POST[ 'rsbbox_itemsicons' ] );
	}
	
}			
add_action( 'save_post', 'rsbboxsave_meta_value' );