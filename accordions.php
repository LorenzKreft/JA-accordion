<?php
/*
Plugin Name: Accordions
Plugin URI: http://paratheme.com/items/accordions-html-css3-responsive-accordion-grid-for-wordpress/
Description: Fully responsive and mobile ready accordion grid for wordpress.
Version: 1.2
Author: paratheme
Author URI: http://paratheme.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

define('accordions_plugin_url', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('accordions_plugin_dir', plugin_dir_path( __FILE__ ) );
define('accordions_wp_url', 'https://wordpress.org/plugins/accordions/' );
define('accordions_wp_reviews', 'http://wordpress.org/support/view/plugin-reviews/accordions' );
define('accordions_pro_url','http://paratheme.com/items/accordions-html-css3-responsive-accordion-grid-for-wordpress/' );
define('accordions_demo_url', 'http://paratheme.com' );
define('accordions_conatct_url', 'http://paratheme.com/contact' );
define('accordions_qa_url', 'http://paratheme.com/qa/' );
define('accordions_plugin_name', 'Accordions' );
define('accordions_share_url', 'https://wordpress.org/plugins/accordions/' );
define('accordions_tutorial_video_url', '//www.youtube.com/embed/8OiNCDavSQg?rel=0' );

require_once( plugin_dir_path( __FILE__ ) . 'includes/accordions-meta.php');
require_once( plugin_dir_path( __FILE__ ) . 'includes/accordions-functions.php');


//Themes php files
require_once( plugin_dir_path( __FILE__ ) . 'themes/flat/index.php');




function accordions_paratheme_init_scripts()
	{
		
		
		
		wp_enqueue_script('jquery');
		
		wp_enqueue_script('accordions_js', plugins_url( '/js/scripts.js' , __FILE__ ) , array( 'jquery' ));

		wp_enqueue_style('accordions_style', accordions_plugin_url.'css/style.css');		
		wp_enqueue_style('responsive-accordion', accordions_plugin_url.'css/responsive-accordion.css');	
		
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'accordions_color_picker', plugins_url('/js/color-picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
		wp_enqueue_script('jquery-accordion', plugins_url( '/js/responsive-accordion.js' , __FILE__ ) , array( 'jquery' ));


		//ParaAdmin
		wp_enqueue_style('ParaAdmin', accordions_plugin_url.'ParaAdmin/css/ParaAdmin.css');
		wp_enqueue_style('ParaIcons', accordions_plugin_url.'ParaAdmin/css/ParaIcons.css');		
		wp_enqueue_script('ParaAdmin', plugins_url( 'ParaAdmin/js/ParaAdmin.js' , __FILE__ ) , array( 'jquery' ));




		
		// Style for themes
		wp_enqueue_style('accordions-style-flat', accordions_plugin_url.'themes/flat/style.css');			
	
		
	}
add_action("init","accordions_paratheme_init_scripts");


register_activation_hook(__FILE__, 'accordions_paratheme_activation');


function accordions_paratheme_activation()
	{
		$accordions_version= "1.2";
		update_option('accordions_version', $accordions_version); //update plugin version.
		
		$accordions_customer_type= "free"; //customer_type "free"
		update_option('accordions_customer_type', $accordions_customer_type); //update plugin version.
	}


function accordions_paratheme_display($atts, $content = null ) {
		$atts = shortcode_atts(
			array(
				'id' => "",

				), $atts);


			$post_id = $atts['id'];

			$accordions_themes = get_post_meta( $post_id, 'accordions_themes', true );

			$accordions_paratheme_display ="";

			if($accordions_themes== "flat")
				{
					$accordions_paratheme_display.= accordions_themes_flat($post_id);
				}
			elseif($accordions_themes== "rounded")
				{
					$accordions_paratheme_display.= accordions_themes_rounded($post_id);
				}	
			elseif($accordions_themes== "rounded_top")
				{
					$accordions_paratheme_display.= accordions_themes_rounded_top($post_id);
				}					
				
							
				
				

return $accordions_paratheme_display;



}

add_shortcode('accordions', 'accordions_paratheme_display');









add_action('admin_menu', 'accordions_paratheme_menu_init');


	
function accordions_paratheme_menu_help(){
	include('accordions-help.php');	
}





function accordions_paratheme_menu_init()
	{

			
		add_submenu_page('edit.php?post_type=accordions', __('Help & Upgrade','menu-wpt'), __('Help & Upgrade','menu-wpt'), 'manage_options', 'accordions_paratheme_menu_help', 'accordions_paratheme_menu_help');

	}





?>