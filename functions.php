<?php
/*
*   =================================================================================================
*   INSTALLATION
*   Create in this file all the needed pages, posts for the website
*   =================================================================================================
*/
include __DIR__ . "/includes/installation.php";


/*
*   =================================================================================================
*   BASIC CONFIGURATION
*   Register in this file the needed sidebars, widgets, menus.
*   =================================================================================================
*/
include __DIR__ . "/includes/config.php";



/*
*   =================================================================================================
*   SCRIPTS AND STYLES
*   Register the JS Scripts and CSS Styles in the 'includes/enqueues/' folder and they will be loaded
*   automatically.
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/includes/enqueues/*.php") as $filename)
    include $filename;


/*
*   ================================================================================================= 
*   CUSTOM POST TYPES
*   Include all the Custom Post Types you need in the 'includes/cpts/' folder and they will be loaded
*   automatically.
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/includes/cpts/*.php") as $filename)
    include $filename;



/*
*   ================================================================================================= 
*   METABOXES
*   Include all the Metaboxes you need in the 'includes/metaboxes/' folder and they will be loaded
*   automatically.
*   =================================================================================================
*/
foreach (glob(__DIR__ . "/includes/metaboxes/*.php") as $filename)
    include $filename;




/*
*   ================================================================================================= 
*   3RD PARTIES PLUGINS
*   Include all the plugins you need in the 'includes/pluins/' folder and loaded them manually
*   =================================================================================================
*/
function wpd_load_3rd_plugins() {
    // Check to see if your plugin has already been loaded. This can be done in several
	// ways - here are a few examples:
	//
	// Check for a class:
	//	if (!class_exists('MyPluginClass')) {
	//
	// Check for a function:
	//	if (!function_exists('my_plugin_function_name')) {
	//
	// Check for a constant:
	//	if (!defined('MY_PLUGIN_CONSTANT')) {


    /*if (!class_exists('PluginClassName')) {
        include_once(TEMPLATEPATH.'plugins/my-plugin/my-plugin.php');
    }*/
    
}
add_action('after_setup_theme', 'wpd_load_3rd_plugins');


?>
