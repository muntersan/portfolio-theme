<?php  


/**
 * add theme support
 */

 add_theme_support('post-thumbnails' );
 add_theme_support('menus');

/**
 * get style and scripts
 */

function portfolio_enqueue_scripts_and_styles(){
    wp_enqueue_style( 'portfolio_style', get_stylesheet_uri() );
    wp_enqueue_script( 'portfolio_menu', get_template_directory_uri(). '/js/menu.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts_and_styles');


/**
 * register post types
 */


function portfolio_custom_post_init() {
    $labels = array(
        'name'                  => _x( 'Projects', 'Post type general name', 'portfolio_theme' ),
        'singular_name'         => _x( 'Project', 'Post type singular name', 'portfolio_theme' ),
        'menu_name'             => _x( 'Projects', 'Admin Menu text', 'portfolio_theme' ),
        'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'portfolio_theme' ),
        'add_new'               => __( 'Add New', 'portfolio_theme' ),
        'add_new_item'          => __( 'Add New project', 'portfolio_theme' ),
        'new_item'              => __( 'New project', 'portfolio_theme' ),
        'edit_item'             => __( 'Edit project', 'portfolio_theme' ),
        'view_item'             => __( 'View project', 'portfolio_theme' ),
        'all_items'             => __( 'All projects', 'portfolio_theme' ),
        'search_items'          => __( 'Search projects', 'portfolio_theme' ),
        'parent_item_colon'     => __( 'Parent projects:', 'portfolio_theme' ),
        'not_found'             => __( 'No projects found.', 'portfolio_theme' ),
        'not_found_in_trash'    => __( 'No projects found in Trash.', 'portfolio_theme' ),
        'featured_image'        => _x( 'Project Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'portfolio_theme' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'portfolio_theme' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'portfolio_theme' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'portfolio_theme' ),
        'archives'              => _x( 'Project archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'portfolio_theme' ),
        'insert_into_item'      => _x( 'Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'portfolio_theme' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'portfolio_theme' ),
        'filter_items_list'     => _x( 'Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'portfolio_theme' ),
        'items_list_navigation' => _x( 'Projects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'portfolio_theme' ),
        'items_list'            => _x( 'Projects list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'portfolio_theme' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Project custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Project', $args );
}
add_action( 'init', 'portfolio_custom_post_init' );




/**
 * register menus
 */

 function portfolio_register_menus(){

    $args=[
        'main_menu' =>  'Huvudmeny',
        'footer_menu'   =>  'Footermeny'
    ];

    register_nav_menus( $args );

 }

 add_action('after_setup_theme', 'portfolio_register_menus');