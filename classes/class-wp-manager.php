<?php  namespace WSUWP\Plugin\WP_Manager;

/**
 * Main Plugin class
 *
 * @since 0.0.1
 *
 * @uses: Post_Type_Site /classes/class-post-type-site.php
 * @uses: Post_Type_Site /classes/class-site.php
 *
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

		require_once __DIR__ . '/class-site.php';

		// Is this a network manager site?
		if ( defined( 'WSUWP_IS_NETWORK_MANAGER' ) ) {

			require_once __DIR__ . '/class-post-type-site.php';

		} else { // Just an ordinary network/site


		} // End if

	}


	/**
	 * Primary method for setting up plugin. Call this to activate plugin.
	 *
	 * @since 0.0.1
	*/
	public function init_plugin() {

		// Make sure the access key is set in wp-config
		if ( defined( 'WSUWP_WP_MANAGER_KEY' ) ) {

			$site = new Site();

			// Is this a network manager site?
			if ( defined( 'WSUWP_IS_NETWORK_MANAGER' ) ) {

				// Do the network manager stuff
				$this->init_manager( $site );

			} else { // Just an ordinary network/site

				// Do the site stuff
				$this->init_site( $site );

			}// End if
		} // End if

	} // init_plugin


	/**
	 * Init the site features of the plugin. Based on a check for
	 * the constant WSUWP_IS_NETWORK_MANAGER
	 *
	 * @since 0.0.1
	*/
	private function init_site( Site $site ) {

	}


	/**
	 * Init manager features of the plugin. Based on a check for
	 * the constant WSUWP_IS_NETWORK_MANAGER
	 *
	 * @since 0.0.1
	 *
	*/
	private function init_manager( Site $site ) {

		$site_post_type = new Post_Type_Site( $site );
		$site_post_type->init();

	} // End init_manager


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

	} // End get_plugin_url


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

	} // End get_plugin_dir

}
