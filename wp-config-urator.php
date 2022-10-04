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

/**
 * @param mixed $pre_option The value to return instead of the option value. This differs
 *                            from `$default`, which is used as the fallback value in the event
 *                            the option doesn't exist elsewhere in get_option().
 *                            Default false (to skip past the short-circuit).
 * @param string $option Name of the option.
 * @param mixed $default The fallback value to return if the option does not exist.
 *                            Default false.
 *
 * @return mixed
 */
function wp_config_urator_main_function( $pre_option, string $option, $default ) {


	return $default;
}

add_filter( 'pre_option', 'wp_config_urator_main_function', 999, 3 );
