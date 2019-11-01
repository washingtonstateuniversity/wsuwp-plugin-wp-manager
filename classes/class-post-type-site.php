<?php  namespace WSUWP\Plugin\WP_Manager;

/**
 * Manages the post type site.
 *
 * @since 0.0.1
 * 
 * @uses: Site /classes/class-site.php.
*/
class Post_Type_Site {

	/**
	 * Instance of site class
	 *
	 * @since 0.0.1
	 * @var null|Site $site.
	*/
	private $site;

	/**
	 * Setup class
	 *
	 * @since 0.0.1
	 *
	 * @param Site $site Instance of Site class.
	*/
	public function __construct( Site $site ) {

		$this->site = $site;

	} // End __construct


	/**
	 * Register post type and setup related hooks
	 *
	 * @since 0.0.1
	*/
	public function init() {

		add_action( 'init', array( $this, 'register_post_type' ) );

	} // End init


	/**
	 * Register the post type
	 *
	 * @since 0.0.1
	*/
	public function register_post_type() {

		$labels = array(
			'name'                  => _x( 'Sites', 'Post type general name', 'wsuwp-plugin-wp-manager' ),
			'singular_name'         => _x( 'Site', 'Post type singular name', 'wsuwp-plugin-wp-manager' ),
			'menu_name'             => _x( 'Sites', 'Admin Menu text', 'wsuwp-plugin-wp-manager' ),
			'name_admin_bar'        => _x( 'Site', 'Add New on Toolbar', 'wsuwp-plugin-wp-manager' ),
			'add_new'               => __( 'Add New', 'wsuwp-plugin-wp-manager' ),
			'add_new_item'          => __( 'Add New Site', 'wsuwp-plugin-wp-manager' ),
			'new_item'              => __( 'New Site', 'wsuwp-plugin-wp-manager' ),
			'edit_item'             => __( 'Edit Site', 'wsuwp-plugin-wp-manager' ),
			'view_item'             => __( 'View Site', 'wsuwp-plugin-wp-manager' ),
			'all_items'             => __( 'All Sites', 'wsuwp-plugin-wp-manager' ),
			'search_items'          => __( 'Search Sites', 'wsuwp-plugin-wp-manager' ),
			'parent_item_colon'     => __( 'Parent Sites:', 'wsuwp-plugin-wp-manager' ),
			'not_found'             => __( 'No sites found.', 'wsuwp-plugin-wp-manager' ),
			'not_found_in_trash'    => __( 'No sites found in Trash.', 'wsuwp-plugin-wp-manager' ),
			'archives'              => _x( 'Site archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'wsuwp-plugin-wp-manager' ),
			'insert_into_item'      => _x( 'Insert into site', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'wsuwp-plugin-wp-manager' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this site', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'wsuwp-plugin-wp-manager' ),
			'filter_items_list'     => _x( 'Filter sites list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'wsuwp-plugin-wp-manager' ),
			'items_list_navigation' => _x( 'Sites list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'wsuwp-plugin-wp-manager' ),
			'items_list'            => _x( 'Sites list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'wsuwp-plugin-wp-manager' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'site' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => null,
			'supports'           => array( 'title', 'excerpt' ),
		);

		\register_post_type( 'wsuwp_site', $args );

	} // End register_post_type

} // End Post_Type_Site
