<?php
/**
 * Plugin Name: WP Config-urator
 * Description: Plugin to allow configuration of WordPress via wp-config.
 * Version:     1.0.0
 * Author:      Cross Media Cloud
 * Author URI:  https://www.cross-media-cloud.de
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-config-urator
 * Domain Path: /languages/
 */

 if( ! defined( 'ABSPATH' ) ) {
 	exit;
 }

/**
  * Load plugin text domain
  *
  * @since 1.0.0
  */
function wp_config_urator_load_textdomain() {

	load_plugin_textdomain( 'wp-config-urator', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );

}
add_action( 'plugins_loaded', 'wp_config_urator_load_textdomain' );
