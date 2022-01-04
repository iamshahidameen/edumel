<?php

// Register Taxonomy Course Category
function create_coursecategory_tax() {

    $labels = array(
        'name'              => _x( 'Courses Categories', 'taxonomy general name', 'edumel' ),
        'singular_name'     => _x( 'Course Category', 'taxonomy singular name', 'edumel' ),
        'search_items'      => __( 'Search Courses Categories', 'edumel' ),
        'all_items'         => __( 'All Courses Categories', 'edumel' ),
        'parent_item'       => __( 'Parent Course Category', 'edumel' ),
        'parent_item_colon' => __( 'Parent Course Category:', 'edumel' ),
        'edit_item'         => __( 'Edit Course Category', 'edumel' ),
        'update_item'       => __( 'Update Course Category', 'edumel' ),
        'add_new_item'      => __( 'Add New Course Category', 'edumel' ),
        'new_item_name'     => __( 'New Course Category Name', 'edumel' ),
        'menu_name'         => __( 'Course Category', 'edumel' ),
    );
    $args = array(
        'labels' => $labels,
        'description' => __( 'Choose a field and it will show courses accordingly', 'edumel' ),
        'hierarchical' => false,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => false,
        'show_in_rest' => true,
    );
    register_taxonomy( 'coursecategory', array('course'), $args );

}
add_action( 'init', 'create_coursecategory_tax' );
