<?php
/**
 * Plugin Name: Wrapper click
 * Plugin URI:
 * Description: Trigger a click on a link from the given wrapper
 * Version: 1.0.0
 * Author: Oswald Prince
 * Author Github URI: https://github.com/oswaldpr
 * License: GPL2 or later
 */


define('PLUGIN_ROOT', dirname(__FILE__));

$pluginExplodedName = explode('/', PLUGIN_ROOT);
$pluginName = end($pluginExplodedName);
define('PLUGIN_NAME', 'Wrapper Click');
define('PLUGIN_SLUG', 'wrapper-click');
define('PLUGIN_DIR', plugins_url() . '/' . $pluginName);

add_action( 'wp_enqueue_scripts', 'loadScripts' );
function loadScripts() {
    //enqueue js libraries
    if (!wp_script_is( 'jquery', 'enqueued' )) {
        wp_enqueue_script( 'jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" , array(), true, true );
    }
    wp_enqueue_style(PLUGIN_SLUG . '_style', PLUGIN_DIR . '/' . PLUGIN_SLUG . '.css',false);
    wp_enqueue_script(PLUGIN_SLUG . '_js', PLUGIN_DIR . '/' . PLUGIN_SLUG . '.js', array('jquery'), null, true );
}