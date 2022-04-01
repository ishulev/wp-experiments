<?php

class Poslushen_Dogs
{

    private static $initiated = false;

    public static function init()
    {
        if (!self::$initiated) {
            self::init_hooks();
        }
    }

    /**
     * Initializes WordPress hooks
     */
    private static function init_hooks()
    {
        self::$initiated = true;
        self::add_dog_type();
    }

    private static function add_dog_type()
    {
        $labels = array(
            'name'                  => _x('Dogs', 'Post type general name', 'textdomain'),
            'singular_name'         => _x('Dog', 'Post type singular name', 'textdomain'),
            'menu_name'             => _x('Dogs', 'Admin Menu text', 'textdomain'),
            'name_admin_bar'        => _x('Dog', 'Add New on Toolbar', 'textdomain'),
            'add_new'               => __('Add New', 'textdomain'),
            'add_new_item'          => __('Add New Dog', 'textdomain'),
            'new_item'              => __('New Dog', 'textdomain'),
            'edit_item'             => __('Edit Dog', 'textdomain'),
            'view_item'             => __('View Dog', 'textdomain'),
            'all_items'             => __('All Dogs', 'textdomain'),
            'search_items'          => __('Search Dogs', 'textdomain'),
            'parent_item_colon'     => __('Parent Dogs:', 'textdomain'),
            'not_found'             => __('No Dogs found.', 'textdomain'),
            'not_found_in_trash'    => __('No Dogs found in Trash.', 'textdomain'),
            'featured_image'        => _x('Dog Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
            'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
            'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
            'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
            'archives'              => _x('Dog archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
            'insert_into_item'      => _x('Insert into Dog', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
            'uploaded_to_this_item' => _x('Uploaded to this Dog', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
            'filter_items_list'     => _x('Filter Dogs list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
            'items_list_navigation' => _x('Dogs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
            'items_list'            => _x('Dogs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_rest'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'Dog'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-pets',
            'supports'           => array('title', 'author', 'thumbnail', 'excerpt', 'comments'),
        );

        echo "Testtiing2";
        register_post_type('Dog', $args);
    }
}
