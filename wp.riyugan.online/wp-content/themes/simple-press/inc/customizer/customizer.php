<?php

/**
 * simple-press Theme Customizer
 *
 * @package simple_press
 */
add_action( 'customize_register', 'simple_press_change_homepage_settings_options' );
function simple_press_change_homepage_settings_options( $wp_customize )
{
    $wp_customize->get_section( 'static_front_page' )->priority = 20;
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.site-title a',
    ) );
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description',
    ) );
    $wp_customize->remove_control( 'header_textcolor' );
    require get_template_directory() . '/inc/google-fonts.php';
}

require get_template_directory() . '/inc/customizer/sections/options/site-identity.php';
$sections = array(
    'banner-options',
    'color-options',
    'blog-options',
    'social-media',
    'container-width',
    'footer-options'
);
require get_template_directory() . '/inc/customizer/sections/upgrade-to-pro.php';
if ( !empty($sections) ) {
    foreach ( $sections as $section ) {
        require get_template_directory() . '/inc/customizer/sections/options/' . $section . '.php';
    }
}
/**
 * Enqueue the customizer stylesheet.
 */
function simple_press_customizer_stylesheet()
{
    wp_register_style( 'simple-press-customizer-css', get_template_directory_uri() . '/css/customizer.css' );
    wp_enqueue_style( 'simple-press-customizer-css' );
}

add_action( 'customize_controls_print_styles', 'simple_press_customizer_stylesheet' );
/**
 * Enqueue the customizer javascript.
 */
function simple_press_customize_preview_js()
{
    wp_enqueue_script(
        'simple-press-customizer-preview',
        get_template_directory_uri() . '/js/customizer.js',
        array( 'jquery' ),
        '1.0.0',
        true
    );
}

add_action( 'customize_preview_init', 'simple_press_customize_preview_js' );
/**
 * Sanitization Functions
*/
require get_template_directory() . '/inc/customizer/sanitization-functions.php';