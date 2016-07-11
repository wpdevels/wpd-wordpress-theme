<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/** Register Menus **/
function register_menus(){
    register_nav_menus( array('main-menu' => 'Header menu for the theme.') );
}
add_action('init', 'register_menus');



/**
 * This function removes unnecesary menus from the WP Admin
 * (Except for administrators)
 */
function remove_menus(){

    /*
    if( is_admin() && !current_user_can( 'manage_options' )){
        remove_menu_page( 'index.php' );                  //Dashboard
        remove_menu_page( 'edit.php' );                   //Posts
        remove_menu_page( 'upload.php' );                 //Media
        remove_menu_page( 'edit.php?post_type=page' );    //Pages
        remove_menu_page( 'edit-comments.php' );          //Comments
        remove_menu_page( 'themes.php' );                 //Appearance
        remove_menu_page( 'plugins.php' );                //Plugins
        remove_menu_page( 'users.php' );                  //Users
        remove_menu_page( 'tools.php' );                  //Tools
        remove_menu_page( 'options-general.php' );        //Settings
    }*/

}
add_action( 'admin_menu', 'remove_menus' );


/** Disable the Admin Bar in the frontend **/
add_filter('show_admin_bar', '__return_false');