
<?php
function startwordpress_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');
		}

add_action('wp_print_styles', 'startwordpress_google_fonts');


function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'github', 'GitHub URL', 'setting_github', 'theme-options', 'section' );

  register_setting('section', 'twitter');
  register_setting( 'section', 'github' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );



 ?>
