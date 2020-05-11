<?php

function load_stylesheets(){
    wp_register_style('main', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('main');

    wp_register_style('blog', get_template_directory_uri() . '/css/blog.css', array(), false, 'all');
    wp_enqueue_style('blog');

    wp_register_style('checkout', get_template_directory_uri() . '/css/checkout.css', array(), false, 'all');
    wp_enqueue_style('checkout');

    wp_register_style('packages', get_template_directory_uri() . '/css/packages.css', array(), false, 'all');
    wp_enqueue_style('packages');

    wp_register_style('singlePackage', get_template_directory_uri() . '/css/singlePackage.css', array(), false, 'all');
    wp_enqueue_style('singlePackage');

    wp_register_style('bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1.0, 'all');
    wp_enqueue_style('bootstrap_min');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
require_once('wp-bootstrap-navwalker.php');

/** =============
	THEME OPTIONS
	=============
*/
add_theme_support('menus');
add_theme_support('post-thumbnails');

/** =====
	MENUS
	=====
*/
register_nav_menus(

    array(

        'top-menu' => 'Top Menu',
        'footer-menu' => 'Footer Menu',
    )

    );

/** ====================
	REMOVE TOP ADMIN BAR
	====================
*/
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action( 'get_header', "remove_admin_login_header");

/** =================
 * ==================
	CUSTOM POST TYPES
	=================
	=================
*/

/** =====================
	BLOG CUSTOM POST TYPE
	=====================
*/
function cptui_register_my_cpts_blog() {

	/**
	 * Post Type: packages.
	 */

	$labels = [
		"name" => __( "blogs", "zyp" ),
		"singular_name" => __( "blog", "zyp" ),
	];

	$args = [
		"label" => __( "blogs", "zyp" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "blog", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
	];

	register_post_type( "blog", $args );
}

add_action( 'init', 'cptui_register_my_cpts_blog' );

/** =========================
	PACKAGES CUSTOM POST TYPE
	=========================
*/
function cptui_register_my_cpts_package() {

	/**
	 * Post Type: packages.
	 */

	$labels = [
		"name" => __( "packages", "zyp" ),
		"singular_name" => __( "package", "zyp" ),
	];

	$args = [
		"label" => __( "packages", "zyp" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "package", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
	];

	register_post_type( "package", $args );
}

add_action( 'init', 'cptui_register_my_cpts_package' );

/** ========================
	CAREERS CUSTOM POST TYPE
	========================
*/
function cptui_register_my_cpts_career() {

	/**
	 * Post Type: careers.
	 */

	$labels = [
		"name" => __( "careers", "zyp" ),
		"singular_name" => __( "career", "zyp" ),
	];

	$args = [
		"label" => __( "careers", "zyp" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "career", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
	];

	register_post_type( "career", $args );
}

add_action( 'init', 'cptui_register_my_cpts_career' );

/** ============
 * ============
	TAXONOMIES
	============
	===========
*/
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: package_categories.
	 */

	$labels = [
		"name" => __( "package_categories", "zyp" ),
		"singular_name" => __( "package_category", "zyp" ),
	];

	$args = [
		"label" => __( "package_categories", "zyp" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'package_category', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "package_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		];
	register_taxonomy( "package_category", [ "package" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

?>

