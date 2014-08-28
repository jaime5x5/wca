<?php
/* Wordpress.org example */
// create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu');

function baw_create_menu() {

	//create new top-level menu
	add_menu_page('BAW Plugin Settings', 'BAW Settings', 'administrator', __FILE__, 'baw_settings_page',plugins_url('', __FILE__));

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}


function register_mysettings() {
	//register our settings
	register_setting( 'baw-settings-group', 'new_option_name' );
	register_setting( 'baw-settings-group', 'some_other_option' );
	register_setting( 'baw-settings-group', 'option_etc' );
}

function baw_settings_page() {





function logo_setting() {  echo '<input type="file" name="logo" />';}









function my_admin_scripts() {
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
wp_register_script('my-upload', WP_PLUGIN_URL.'/my-script.js', array('jquery','media-upload','thickbox'));
wp_enqueue_script('my-upload');
}
 
function my_admin_styles() {
wp_enqueue_style('thickbox');
}
 
if (isset($_GET['page']) && $_GET['page'] == 'my_plugin_page') {
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');
}

?>






<div class="wrap">
<h2>Your Plugin Name</h2>

<form method="post" action="options.php" enctype="multipart/form-data">
    <?php settings_fields( 'baw-settings-group' ); ?>
    <?php do_settings_sections( 'baw-settings-group' ); ?>
    <?php add_settings_field('logo', 'Logo:', 'logo_setting', __FILE__, 'main_section'); // LOGO ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">New Option Name</th>
        <td><input type="text" name="new_option_name" value="<?php echo get_option('new_option_name'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Some Other Option</th>
        <td><input type="text" name="some_other_option" value="<?php echo get_option('some_other_option'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Options, Etc.</th>
        <td><input type="text" name="option_etc" value="<?php echo get_option('option_etc'); ?>" /></td>
        </tr>


        <tr valign="top">
        <th scope="row">Upload Image</th>
        <td><label for="upload_image">
        <input id="upload_image" type="text" size="36" name="upload_image" value="" />
        <input id="upload_image_button" type="button" value="Upload Image" />
        <br />Enter an URL or upload an image for the banner.
        </label></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>
