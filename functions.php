<?php
/**
 * Theme functions.
 *
 * @package Internee_Profile
 */

define( 'INTERNEE_PROFILE_VERSION', '1.1.0' );
define( 'INTERNEE_PROFILE_DIR', get_template_directory() );
define( 'INTERNEE_PROFILE_URI', get_template_directory_uri() );

/**
 * Set up theme features.
 */
function internee_profile_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'internee-profile' ),
    ) );
}
add_action( 'after_setup_theme', 'internee_profile_setup' );

/**
 * Enqueue styles and scripts.
 */
function internee_profile_enqueue_assets() {
    wp_enqueue_style(
        'internee-profile-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Space+Grotesk:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'internee-profile-style',
        INTERNEE_PROFILE_URI . '/style.css',
        array( 'internee-profile-fonts' ),
        INTERNEE_PROFILE_VERSION,
        'all'
    );

    wp_enqueue_script(
        'internee-profile-script',
        INTERNEE_PROFILE_URI . '/js/main.js',
        array(),
        INTERNEE_PROFILE_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'internee_profile_enqueue_assets' );

/**
 * Resource hints for faster font loading.
 */
function internee_profile_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' !== $relation_type ) {
        return $urls;
    }

    $urls[] = 'https://fonts.googleapis.com';
    $urls[] = array(
        'href' => 'https://fonts.gstatic.com',
        'crossorigin' => 'anonymous',
    );

    return $urls;
}
add_filter( 'wp_resource_hints', 'internee_profile_resource_hints', 10, 2 );
