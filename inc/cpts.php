<?php

// Register Custom Post Type Course
function create_course_cpt() {

    $labels = array(
        'name' => _x( 'Courses', 'Post Type General Name', 'edumel' ),
        'singular_name' => _x( 'Course', 'Post Type Singular Name', 'edumel' ),
        'menu_name' => _x( 'Courses', 'Admin Menu text', 'edumel' ),
        'name_admin_bar' => _x( 'Course', 'Add New on Toolbar', 'edumel' ),
        'archives' => __( 'Course Archives', 'edumel' ),
        'attributes' => __( 'Course Attributes', 'edumel' ),
        'parent_item_colon' => __( 'Parent Course:', 'edumel' ),
        'all_items' => __( 'All Courses', 'edumel' ),
        'add_new_item' => __( 'Add New Course', 'edumel' ),
        'add_new' => __( 'Add New', 'edumel' ),
        'new_item' => __( 'New Course', 'edumel' ),
        'edit_item' => __( 'Edit Course', 'edumel' ),
        'update_item' => __( 'Update Course', 'edumel' ),
        'view_item' => __( 'View Course', 'edumel' ),
        'view_items' => __( 'View Courses', 'edumel' ),
        'search_items' => __( 'Search Course', 'edumel' ),
        'not_found' => __( 'Not found', 'edumel' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'edumel' ),
        'featured_image' => __( 'Featured Image', 'edumel' ),
        'set_featured_image' => __( 'Set featured image', 'edumel' ),
        'remove_featured_image' => __( 'Remove featured image', 'edumel' ),
        'use_featured_image' => __( 'Use as featured image', 'edumel' ),
        'insert_into_item' => __( 'Insert into Course', 'edumel' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Course', 'edumel' ),
        'items_list' => __( 'Courses list', 'edumel' ),
        'items_list_navigation' => __( 'Courses list navigation', 'edumel' ),
        'filter_items_list' => __( 'Filter Courses list', 'edumel' ),
    );
    $args = array(
        'label' => __( 'Course', 'edumel' ),
        'description' => __( 'Perfect Programs in Edumel', 'edumel' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-book-alt',
        'supports' => array('title', 'excerpt', 'thumbnail'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'course', $args );

}
add_action( 'init', 'create_course_cpt', 0 );

// Register Custom Post Type Instructor
function create_instructor_cpt() {

    $labels = array(
        'name' => _x( 'Instructors', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'Instructor', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'Instructors', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'Instructor', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'Instructor Archives', 'textdomain' ),
        'attributes' => __( 'Instructor Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Instructor:', 'textdomain' ),
        'all_items' => __( 'All Instructors', 'textdomain' ),
        'add_new_item' => __( 'Add New Instructor', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Instructor', 'textdomain' ),
        'edit_item' => __( 'Edit Instructor', 'textdomain' ),
        'update_item' => __( 'Update Instructor', 'textdomain' ),
        'view_item' => __( 'View Instructor', 'textdomain' ),
        'view_items' => __( 'View Instructors', 'textdomain' ),
        'search_items' => __( 'Search Instructor', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Instructor', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Instructor', 'textdomain' ),
        'items_list' => __( 'Instructors list', 'textdomain' ),
        'items_list_navigation' => __( 'Instructors list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter Instructors list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Instructor', 'textdomain' ),
        'description' => __( 'Our Top Rated Instructors', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'supports' => array('title', 'thumbnail', 'author'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'instructor', $args );

}
add_action( 'init', 'create_instructor_cpt', 0 );

// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

    $labels = array(
        'name' => _x( 'Testimonials', 'Post Type General Name', 'edumel' ),
        'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'edumel' ),
        'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'edumel' ),
        'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'edumel' ),
        'archives' => __( 'Testimonial Archives', 'edumel' ),
        'attributes' => __( 'Testimonial Attributes', 'edumel' ),
        'parent_item_colon' => __( 'Parent Testimonial:', 'edumel' ),
        'all_items' => __( 'All Testimonials', 'edumel' ),
        'add_new_item' => __( 'Add New Testimonial', 'edumel' ),
        'add_new' => __( 'Add New', 'edumel' ),
        'new_item' => __( 'New Testimonial', 'edumel' ),
        'edit_item' => __( 'Edit Testimonial', 'edumel' ),
        'update_item' => __( 'Update Testimonial', 'edumel' ),
        'view_item' => __( 'View Testimonial', 'edumel' ),
        'view_items' => __( 'View Testimonials', 'edumel' ),
        'search_items' => __( 'Search Testimonial', 'edumel' ),
        'not_found' => __( 'Not found', 'edumel' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'edumel' ),
        'featured_image' => __( 'Featured Image', 'edumel' ),
        'set_featured_image' => __( 'Set featured image', 'edumel' ),
        'remove_featured_image' => __( 'Remove featured image', 'edumel' ),
        'use_featured_image' => __( 'Use as featured image', 'edumel' ),
        'insert_into_item' => __( 'Insert into Testimonial', 'edumel' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'edumel' ),
        'items_list' => __( 'Testimonials list', 'edumel' ),
        'items_list_navigation' => __( 'Testimonials list navigation', 'edumel' ),
        'filter_items_list' => __( 'Filter Testimonials list', 'edumel' ),
    );
    $args = array(
        'label' => __( 'Testimonial', 'edumel' ),
        'description' => __( 'What are students says about us', 'edumel' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-universal-access',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );

