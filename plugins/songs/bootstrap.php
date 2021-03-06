<?php
/**
 *  Loads the Songs plugin.
 *
 * @package    spiralWebDb\Songs
 * @since      1.0.0
 * @author     Robert A. Gadon
 * @link       http://spiralwebdb.com
 * @license    GNU-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:     Songs
 * Plugin URI:      https://gitlab.com/Hamammelis/songs
 * Description:     Songs is a WordPress plugin that manages song files rendered on the Bel Canto Chorus website.
 * Version:         1.0.0
 * Author:          Robert A. Gadon
 * Author URI:      http://spiralwebdb.com
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     songs
 * Requires WP:     4.9
 * Requires PHP:    5.6
 */

namespace spiralWebDb\Songs;

use spiralWebDb\Module\Custom;

/**
 * Gets this plugin's absolute directory path.
 *
 * @since  1.0.0
 * @ignore
 * @access private
 *
 * @return string
 */
function _get_plugin_directory() {
	return __DIR__;
}

/**
 * Autoload the plugin's files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload_files() {
	$files = [
//		'/src/plugin.php',
		'/src/config-loader.php',
		'/src/admin/edit-form-advanced.php',
		'/src/admin/wp-list-table.php',
		'/src/template/helpers.php',
		'/src/shortcode/songs.php',
	];

	foreach ( $files as $filename ) {
		require __DIR__ . $filename;
	}
}

/**
 * Launch the plugin.
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	autoload_files();

	Custom\register_plugin( __FILE__ );

}

launch();