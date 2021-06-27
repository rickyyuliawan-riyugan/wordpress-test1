<?php
/**
 * Header options
 */

add_action( 'customize_register', 'simple_press_header_options_section' );

function simple_press_header_options_section( $wp_customize ) {

    $wp_customize->add_section( 'simple_press_header_options_section', array(
        'title'          => esc_html__( 'Banner Image', 'simple-press' ),
        'priority'       => 11,
        'capability'     => 'edit_theme_options',
    ) );

    $wp_customize->get_control( 'header_image' )->section = 'simple_press_header_options_section';    
   
}