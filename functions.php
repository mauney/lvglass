<?php

function lvglass_resources() {
    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/normalize.css' );
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('lvglass_js', get_template_directory_uri() .'/js/lvglass.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'lvglass_resources');

// Get Top Ancestor
function get_top_ancestor_id() {

    global $post;

    if ($post->post_parent) {
        $ancestors = array_reverse( get_post_ancestors($post->ID) );
        return $ancestors[0];
    }

    return $post->ID;
}

// Does Page Have Children?
function has_children() {

    global $post;

    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);

}

// Theme Setup
function lvglass_setup() {

    // Navigation Menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu' ),
    ));

    // unstyle galleries
    add_theme_support( 'html5', array( 'gallery', 'caption' ) );

    // Add Featured Image Support
    add_theme_support('post-thumbnails');
    add_image_size('mobile', 400);
    add_image_size('mobile-square', 400, 400, array('center', 'center'));

    // Register image sizes for use in Add Media modal
    add_filter( 'image_size_names_choose', 'lvglass_custom_sizes' );
    function lvglass_custom_sizes( $sizes ) {
        return array_merge( $sizes, array(
            'mobile' => __( 'Mobile Full' ),
            'mobile-square' => __( 'Mobile Square' )
        ) );
    }

    // Start new posts with a default image gallery
    add_filter( 'default_content', 'initial_post_content' );
    function initial_post_content( $content ) {
        $content = '[gallery link="file" size="mobile" ids="175"]';
        return $content;
}

}

add_action('after_setup_theme', 'lvglass_setup');

// jpeg compression setting
function custom_jpeg_quality( $quality ) {
    return 95;
}

add_filter( 'jpeg_quality', 'custom_jpeg_quality' );