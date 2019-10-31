<?php
/*
Plugin Name: WSUWP WP Manager
Version: 0.0.1
Description: Manage and Report on WSU WP Networks
Author: washingtonstateuniversity, Danial Bleile
Author URI: https://github.com/washingtonstateuniversity/
Plugin URI: https://github.com/washingtonstateuniversity/wsuwp-plugin-wp-manager
Text Domain: wsuwp-plugin-wp-manager
Requires at least: 4.7
Tested up to: 5.2.0
Requires PHP: 7.0
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Require the main class
require_once __DIR__ . '/classes/class-wp-manager.php';

// Create an instance of it.
$wsuwp_wp_manager = new WSUWP\Plugin\WP_Manager\WP_Manager();

// Tell the main class to init.
$wsuwp_wp_manager->init_plugin();
