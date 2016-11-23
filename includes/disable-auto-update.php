<?php

/* 
 * @link              https://wpza.co.za
 * @since             1.0.0
 * @package           wpza-disable-auto-update
 * 
 * This disables all the updates for WordPress.
 * This plugin should only be used on a WordPress site that is actively maintained.
 * 
 */


// Disable all Automatic Core Updates

add_filter( 'allow_dev_auto_core_updates', '__return_false' );          
add_filter( 'allow_minor_auto_core_updates', '__return_false' );         
add_filter( 'allow_major_auto_core_updates', '__return_false' );

// Disable All Automatic Plugin Updates
add_filter( 'auto_update_plugin', '__return_false' );

// Disable All Automatic Theme Updates
add_filter( 'auto_update_theme', '__return_false' );