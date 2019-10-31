<?php  namespace WSUWP\Plugin\WP_Manager;

/**
 * Main Plugin class
 *
 * @since 0.0.1
*/
class WP_Manager {

	/**
	 * Version of the plugin
	 *
	 * @since 0.0.1
	 * @var string $version.
	*/
	protected $version = '0.0.1';

	/**
	 * Require classes and assets
	 *
	 * @since 0.0.1
	*/
	public function __construct() {

	}


	/**
	 * Primary method for setting up plugin. Call this to activate plugin.
	 *
	 * @since 0.0.1
	*/
	public function init_plugin() {

	}


	/**
	 * Medthod for setting up plugin called on the after_theme_setup hook
	 *
	 * @since 0.0.1
	*/
	public function after_theme_init() {

	}

	/**
	 * Get the plugin version.
	 *
	 * @since 0.0.1
	 *
	 * @return string Plugin version.
	*/
	public static function get_version() {

		return self::$version;

	}

	/**
	 * Get the plugin url.
	 *
	 * @since 0.0.1
	 *
	 * @param string $path Path to append to url.
	 *
	 * @return string Full url.
	*/
	public static function get_plugin_url( $path = '' ) {

		return plugin_dir_url( dirname( __FILE__ ) ) . $path;

	}

	/**
	 * Get the plugin base directory path.
	 *
	 * @since 0.0.1
	 *
	 * @param string $path Path to append to base.
	 *
	 * @return string Full path.
	*/
	public static function get_plugin_dir( $path = '' ) {

		return plugin_dir_path( dirname( __FILE__ ) ) . $path;

	}

}
