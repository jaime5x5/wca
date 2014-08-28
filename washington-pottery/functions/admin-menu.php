<?php
/* Thanks to http://www.sitepoint.com/wordpress-options-panel/ for the tutorial */
add_action('admin_menu', 'create_theme_options_page');

function create_theme_options_page() {  
	add_menu_page('Theme Options', 'Theme Options', 'administrator', __FILE__, 'build_options_page');
}
?>
<?php
function build_options_page() { 
?>  
	<div id="theme-options-wrap" class="widefat">   
		
 <span class="glyphicon glyphicon-star"></span>
 		<h2>My Theme Options</h2>    
 		<p>Take control of your theme, by overriding the default settings with your own specific preferences.</p>    
 		<form method="post" action="options.php" enctype="multipart/form-data">
		<?php settings_fields('plugin_options'); ?>  
		<?php do_settings_sections(__FILE__); ?>  
		<p class="submit">    
		<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />  
		</p>
		</form> 
 	</div>
<?php } ?>
<?php

add_action('admin_init', 'register_and_build_fields');

function register_and_build_fields() {   
	add_settings_section('main_section', 'Main Settings', 'section_cb', __FILE__);
	add_settings_field('mission_statement', 'Mission Statement:', 'mission_statement_setting', __FILE__, 'main_section');
	add_settings_field('logo', 'Logo:', 'logo_setting', __FILE__, 'main_section'); // LOGO
	add_settings_field('slide1', 'Cover Slide 1:', 'slide_setting1', __FILE__, 'main_section'); // slide1
	add_settings_field('slidecap1', 'Caption:', 'slide_cap1', __FILE__, 'main_section');

	add_settings_field('slide2', 'Cover Slide 2:', 'slide_setting2', __FILE__, 'main_section'); // slide2
	add_settings_field('slidecap2', 'Caption:', 'slide_cap2', __FILE__, 'main_section');
	
	add_settings_field('slide3', 'Cover Slide 3:', 'slide_setting3', __FILE__, 'main_section'); // slide3
	add_settings_field('slidecap3', 'Caption:', 'slide_cap3', __FILE__, 'main_section');
	
	add_settings_field('slide4', 'Cover Slide 4:', 'slide_setting4', __FILE__, 'main_section'); // slide4
	add_settings_field('slidecap4', 'Caption:', 'slide_cap4', __FILE__, 'main_section');
		
	add_settings_field('slide5', 'Cover Slide 5:', 'slide_setting5', __FILE__, 'main_section'); // slide5
	add_settings_field('slidecap5', 'Caption:', 'slide_cap5', __FILE__, 'main_section');
	
	add_settings_field('slide6', 'Cover Slide 6:', 'slide_setting6', __FILE__, 'main_section'); // slide6
	add_settings_field('slidecap6', 'Caption:', 'slide_cap6', __FILE__, 'main_section');	
	
	add_settings_field('slide7', 'Cover Slide 7:', 'slide_setting7', __FILE__, 'main_section'); // slide7
	add_settings_field('slidecap7', 'Caption:', 'slide_cap7', __FILE__, 'main_section');
	
	add_settings_field('slide8', 'Cover Slide 8:', 'slide_setting8', __FILE__, 'main_section'); // slide8
	add_settings_field('slidecap8', 'Caption:', 'slide_cap8', __FILE__, 'main_section');
	
	add_settings_field('slide9', 'Cover Slide 9:', 'slide_setting9', __FILE__, 'main_section'); // slide9
	add_settings_field('slidecap9', 'Caption:', 'slide_cap9', __FILE__, 'main_section');
	
	add_settings_field('slide10', 'Cover Slide 10:', 'slide_setting10', __FILE__, 'main_section'); // slide10	\
	add_settings_field('slidecap10', 'Caption:', 'slide_cap10', __FILE__, 'main_section');
	
	register_setting('plugin_options', 'plugin_options', 'validate_setting');
}


function section_cb() {
	
}


function mission_statement_setting() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[mission_statement]' type='text' value='{$options['mission_statement']}' />";
}
function slide_cap1() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[slidecap1]' type='text' value='{$options['slidecap1']}' />";
}
function slide_cap2() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[slidecap2]' type='text' value='{$options['slidecap2']}' />";
}
function slide_cap3() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[slidecap3]' type='text' value='{$options['slidecap3']}' />";
}
function slide_cap4() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[slidecap4]' type='text' value='{$options['slidecap4']}' />";
}
function slide_cap5() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[slidecap5]' type='text' value='{$options['slidecap5']}' />";
}
function slide_cap6() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[slidecap6]' type='text' value='{$options['slidecap6']}' />";
}
function slide_cap7() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[slidecap7]' type='text' value='{$options['slidecap7']}' />";
}
function slide_cap8() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[slidecap8]' type='text' value='{$options['slidecap8']}' />";
}
function slide_cap9() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[slidecap9]' type='text' value='{$options['slidecap9']}' />";
}
function slide_cap10() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[slidecap10]' type='text' value='{$options['slidecap10']}' />";
}
// Add stylesheet
add_action('admin_head', 'admin_register_head');
function admin_register_head() {  
	$url = get_bloginfo('template_directory') . '/functions/options_page.css';  
	echo "<link rel='stylesheet' href='$url' />";
}

function slide_setting1() {
	$options = get_option('plugin_options'); 
	echo '<input type="file" name="slide1" />';
	if($options['slide1']){
		echo $options['slide1'];
	}
}

function slide_setting2() {
	$options = get_option('plugin_options'); 
	echo '<input type="file" name="slide2" />';
	if($options['slide2']){
		echo $options['slide2'];
	}
}


function slide_setting3() {
	$options = get_option('plugin_options'); 
	echo '<input type="file" name="slide3" />';
	if($options['slide3']){
		echo $options['slide3'];
	}
}


function slide_setting4() {
	$options = get_option('plugin_options'); 
	echo '<input type="file" name="slide4" />';
	if($options['slide4']){
		echo $options['slide4'];
	}
}
function slide_setting5() {
	$options = get_option('plugin_options'); 
	echo '<input type="file" name="slide5" />';
	if($options['slide5']){
		echo $options['slide5'];
	}
}
function slide_setting6() {
	$options = get_option('plugin_options'); 
	echo '<input type="file" name="slide6" />';
	if($options['slide6']){
		echo $options['slide6'];
	}
}
function slide_setting7() {
	$options = get_option('plugin_options'); 
	echo '<input type="file" name="slide7" />';
	if($options['slide7']){
		echo $options['slide7'];
	}
}
function slide_setting8() {
	$options = get_option('plugin_options'); 
	echo '<input type="file" name="slide8" />';
	if($options['slide8']){
		echo $options['slide8'];
	}
}
function slide_setting9() {
	$options = get_option('plugin_options'); 
	echo '<input type="file" name="slide9" />';
	if($options['slide9']){
		echo $options['slide9'];
	}
}
function slide_setting10() {
	$options = get_option('plugin_options'); 
	echo '<input type="file" name="slide10" />';
	if($options['slide10']){
		echo $options['slide10'];
	}
}

function logo_setting() {
	$options = get_option('plugin_options'); 
	echo '<input type="file" name="logo" />';
	if($options['logo']){
		echo $options['logo'];
	}
}

function validate_setting($plugin_options) {
	register_setting('plugin_options', 'plugin_options', 'validate_setting');
	$keys = array_keys($_FILES); $i = 0; foreach ( $_FILES as $image ) {   
		// if a files was upload   
		if ($image['size']) {     
			// if it is an image     
			if ( preg_match('/(jpg|jpeg|png|gif)$/', $image['type']) ) {  
			//var_dump($keys);die;     
				$override = array('test_form' => false);       
				// save the file, and store an array, containing its location in $file       
				$file = wp_handle_upload( $image, $override );       
				$plugin_options[$keys[$i]] = $file['url'];     
			} else {       
				// Not an image.        
				$options = get_option('plugin_options');       
				$plugin_options[$keys[$i]] = $options[$logo];       
				// Die and let the user know that they made a mistake.       
				wp_die('No image was uploaded.');     
			}   
		}   // Else, the user didn't upload a file.   // Retain the image that's already on file.   
		else {     
			$options = get_option('plugin_options');     
			$plugin_options[$keys[$i]] = $options[$keys[$i]];   
		}   
		$i++; 
	} 
		//var_dump($plugin_options);die;
		return $plugin_options;
	}
?>