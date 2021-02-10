<?php
/**
 * @package Helper
 * @version 1.0.0
 */
/*
Plugin Name: Helper
Plugin URI: http://wordpress.org/plugins/helper
Description: A simple plugin to remove Wp-Rocket notifications when server side cacheing is enabled.
Author: Jorge Munoz
Version: 1.0.0
Author URI: http://sixaxisweb.com
*/

/**
 * This removes the .httaccess not  writable notification
 */
remove_action( 'admin_notices', 'rocket_warning_htaccess_permissions' );

/**
 * This removes the cache dir not  writable notification
 */

remove_action( 'admin_notices', 'rocket_warning_cache_dir_permissions' );
