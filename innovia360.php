<?php
/**
 * Plugin Name
 * @package           PluginPackage
 * @author            Hadi chouaieb
 * @copyright         Viss
 * @license           GPL-2.0-or-later
 * @wordpress-plugin
 * Plugin Name:       innovia360
 * Description:       plugin with ia
 * Version:           1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Viss
 */
    define( 'INNO_PATH', dirname( __FILE__ ) ); 
    require(ABSPATH . 'wp-admin/includes/upgrade.php');
    require(ABSPATH . 'wp-includes/pluggable.php');
    require(ABSPATH . 'wp-content/plugins/innovia360/vendor/autoload.php');
    require __DIR__ . '/api/api_service.php';
    require __DIR__ . '/api/api_service_Generate_images.php'; //the api for serve the requests

    add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_scripts');
    add_action('init', 'enqueue_my_styles_and_scripts');
    function enqueue_my_styles_and_scripts() {
        // Enqueue CSS file
        wp_enqueue_style('chatboats', plugins_url('assets/css/chatbot.css', __FILE__), array(), '1.0.0', 'all');

        wp_enqueue_style('BootstrapStyle', plugins_url('assets/css/bootstrap.css', __FILE__), array(), '1.0.0', 'all');
        wp_enqueue_style('contentStyle', plugins_url('assets/css/content.css', __FILE__), array(), '1.0.0', 'all');
        wp_enqueue_style('dashboardStyle', plugins_url('assets/css/dashboard.css', __FILE__), array(), '1.0.0', 'all');
        wp_enqueue_style('imagesStyle', plugins_url('assets/css/images.css', __FILE__), array(), '1.0.0', 'all');
        wp_enqueue_style('playgroundStyle', plugins_url('assets/css/playground.css', __FILE__), array(), '1.0.0', 'all');

        // Enqueue JS file
        wp_enqueue_script('my-plugin-scripts1', plugins_url('assets/js/jeliver.js', __FILE__), array('jquery'), '1.0.0', true);

        wp_enqueue_script('my-plugin-scripts4', plugins_url('assets/js/controle.js', __FILE__), array('jquery'), '1.0.0', true);

        wp_enqueue_script('my-plugin-scripts', plugins_url('assets/js/bootstrap.js', __FILE__), array('jquery'), '1.0.0', true);
    }

    // Add the action hook to register the menu item
add_action('admin_menu', 'register_my_plugin_menu');


// include(__DIR__ ."/class/content.php");
global $diractory;
function display_my_plugin_page() {
    // Your plugin dashboard content goes here
    include(INNO_PATH."/class/index.php");
}



// Callback function to register the menu item
function register_my_plugin_menu() {
    add_menu_page(
        'Plugin Dashboard',// Page title
        'innovIA360',     // Menu title
        'manage_options',// Capability
        'innovia_dashboard',  // Menu slug
        'display_my_plugin_page', // Callback function to display content
        plugins_url('innovia360/assets/image/logo.png'),
    );

}


function innovia_content() {
    add_management_page(
        'Innovia Content',          // Page title
        'Innovia Content',          // Menu title
        'manage_options',           // Capability
        'innovia360_content',     // Menu slug
        'display_innovia_content'   // Callback function to display content
    );
}



function innovia_images() {
    add_management_page(
        'Innovia images',          // Page title
        'Innovia images',          // Menu title
        'manage_options',           // Capability
        'innovia360_images',     // Menu slug
        'display_innovia_images'   // Callback function to display content
    );
}

function innovia_playground() {
    add_management_page(
        'Innovia playground',          // Page title
        'Innovia playground',          // Menu title
        'manage_options',           // Capability
        'innovia360_playground',     // Menu slug
        'display_innovia_playground'   // Callback function to display content
    );
}
function display_innovia_content(){
    include(INNO_PATH . "/class/content.php");
}
function display_innovia_images(){
    
    include(INNO_PATH . "/class/images.php");
}
function display_innovia_playground(){
    include(INNO_PATH . "/class/playground.php");
}

add_action('admin_menu', 'innovia_content');
add_action('admin_menu', 'innovia_images');
add_action('admin_menu', 'innovia_playground');

?>