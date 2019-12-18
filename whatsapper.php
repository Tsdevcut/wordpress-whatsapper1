<?php
/**
 * @package Whatsapper
 */
/**
 * Plugin Name: Whatsapper
 * Plugin URI: http://www.tsdevcut.co.za/
 * Description: This plugin permits a user to be able to contact the owner of the website via a whatsap message
 * Version: 1.0
 * Author: Tshepo Makhaola
 * Author URI: http://www.tsdevcut.co.za/
 * Licence: GPLv2 or later
 * Text Domain: tsdevcut.co.za
 */

 defined('ABSPATH') or die('Hi, You are not permitted to gain any further access by these means');


//adim enquire
function add_admin_script_options(){
  wp_enqueue_style('adminstyle', plugins_url('/assets/admin_style.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'add_admin_script_options' );


function add_frontend_sectipts_option(){
  wp_enqueue_style('wp_style', plugins_url('/assets/wp_style.css', __FILE__));
  wp_enqueue_script('wp_script', plugins_url('/assets/wp_script.js', __FILE__));
}
add_action( 'wp_enqueue_scripts', 'add_frontend_sectipts_option' );


//Admin Pages
function add_admin_pages(){
   add_menu_page( 'Whatsapper Plugin', 'Whatsapper', 'manage_options', 'whatsapper_plugin', 'whatsap_admin_page_block', plugins_url('/img/whats-dash.png', __FILE__), 110 );
}
add_action('admin_menu', 'add_admin_pages');

function whatsap_admin_page_block(){
    require_once( plugin_dir_path( __FILE__ ) . 'admin-content-page.php');
}

function whatsaper_shortcode_function($atts, $content= null){
   $directoryInf = dirname(__FILE__);
   $wNumber = esc_attr(get_option('whatsappnumber'));

    $content = '<div class="whatsap-item">';
    $content .= '    <div class="wict"><button id="whatsnumber" data-whatsnumber="+27'.$wNumber.'" class="lk-whatsapper">';
    $content .= '                  <img src="'.plugins_url('/img/Whatsapp-Icon-use-original.png', __FILE__).'" class="lk-icon"/> Book Now </button>';
    $content .= '          </div>';
    $content .= '</div>';

    return $content;
}

add_shortcode('whatsapper-block', 'whatsaper_shortcode_function');
