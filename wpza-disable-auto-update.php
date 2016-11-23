<?php

/**
 *
 * @link              https://wpza.co.za
 * @since             1.0.0
 * @package           wpza-disable-auto-update
 *
 * @wordpress-plugin
 * Plugin Name:       Disable Auto Updates
 * Plugin URI:        https://wpza.co.za/wpza-plugins
 * Description:       Disable all Core, Theme and Plugin Auto Updates.
 * Version:           1.0.0
 * Author:            Donovan Maidens
 * Author URI:        https://wpza.co.za
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
if(!class_exists("WPZADisableUpdatePlugin"))
{
   
    class WPZADisableUpdatePlugin
    {
       
        public function __construct()
        {

            require_once(sprintf("%s/includes/disable-auto-update.php", dirname(__FILE__)));

        } 

       
        public static function activate()
        {
            // Do something
        }

       
        public static function deactivate()
        {
            // Do something
        }
    } 
} 

if(class_exists('WPZADisableUpdatePlugin'))
{    
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('WPZADisableUpdatePlugin', 'activate'));
    register_deactivation_hook(__FILE__, array('WPZADisableUpdatePlugin', 'deactivate'));
    
    
    $plugin = new WPZADisableUpdatePlugin();
} 