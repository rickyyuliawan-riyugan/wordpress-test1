<?php

/**
 * Color and Fonts options
 */
add_action( 'customize_register', 'simple_press_colors_panel' );
function simple_press_colors_panel( $wp_customize )
{
    $wp_customize->get_section( 'colors' )->priority = 14;
    $wp_customize->get_section( 'colors' )->title = esc_html__( 'Color & Fonts', 'simple-press' );
}

add_action( 'customize_register', 'simple_press_color_fonts_options_section' );
function simple_press_color_fonts_options_section( $wp_customize )
{
    $wp_customize->add_setting( 'show_hide_color_theme', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'show_hide_color_theme', array(
        'label'    => esc_html__( 'Show/Hide Toggle Light & Dark Mode Button', 'simple-press' ),
        'section'  => 'colors',
        'settings' => 'show_hide_color_theme',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->selective_refresh->add_partial( 'show_hide_color_theme', array(
        'selector' => 'div.simple-press-light-dark-toggle',
    ) );
    $wp_customize->add_setting( 'font_family', array(
        'transport'         => 'postMessage',
        'default'           => 'Poppins',
        'sanitize_callback' => 'simple_press_sanitize_google_fonts',
    ) );
    $wp_customize->add_control( 'font_family', array(
        'settings' => 'font_family',
        'label'    => esc_html__( 'Choose Font Family For Your Site', 'simple-press' ),
        'section'  => 'colors',
        'type'     => 'select',
        'choices'  => simple_press_google_fonts(),
    ) );
    $wp_customize->add_setting( 'font_size', array(
        'transport'         => 'postMessage',
        'default'           => '16px',
        'sanitize_callback' => 'simple_press_sanitize_select',
    ) );
    $wp_customize->add_control( 'font_size', array(
        'settings' => 'font_size',
        'label'    => esc_html__( 'Choose Font Size', 'simple-press' ),
        'section'  => 'colors',
        'type'     => 'select',
        'default'  => '13px',
        'choices'  => array(
        '13px' => '13px',
        '14px' => '14px',
        '15px' => '15px',
        '16px' => '16px',
        '17px' => '17px',
        '18px' => '18px',
        '19px' => '19px',
        '20px' => '20px',
    ),
    ) );
    $wp_customize->add_setting( 'body_font_weight', array(
        'default'           => 400,
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new Simple_Press_Slider_Control( $wp_customize, 'body_font_weight', array(
        'section'  => 'colors',
        'settings' => 'body_font_weight',
        'label'    => esc_html__( 'Font Weight', 'simple-press' ),
        'choices'  => array(
        'min'  => 100,
        'max'  => 900,
        'step' => 100,
    ),
    ) ) );
    $wp_customize->add_setting( 'body_line_height', array(
        'default'           => 1.7,
        'sanitize_callback' => 'simple_press_sanitize_float',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new Simple_Press_Slider_Control( $wp_customize, 'body_line_height', array(
        'section'  => 'colors',
        'settings' => 'body_line_height',
        'label'    => esc_html__( 'Line Height', 'simple-press' ),
        'choices'  => array(
        'min'  => 0.1,
        'max'  => 10,
        'step' => 0.1,
    ),
    ) ) );
    $wp_customize->add_setting( 'heading_font_family', array(
        'transport'         => 'postMessage',
        'sanitize_callback' => 'simple_press_sanitize_google_fonts',
        'default'           => 'Inika',
    ) );
    $wp_customize->add_control( 'heading_font_family', array(
        'settings' => 'heading_font_family',
        'label'    => esc_html__( 'Heading Font Family', 'simple-press' ),
        'section'  => 'colors',
        'type'     => 'select',
        'choices'  => simple_press_google_fonts(),
    ) );
    // Color Options:
    $wp_customize->add_setting( 'color_options_text', array(
        'default'           => '',
        'type'              => 'customtext',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new Simple_Press_Custom_Text( $wp_customize, 'color_options_text', array(
        'label'    => esc_html__( 'Color Options:', 'simple-press' ),
        'section'  => 'colors',
        'settings' => 'color_options_text',
    ) ) );
    $wp_customize->get_control( 'background_color' )->priority = 200;
    $wp_customize->add_setting( 'primary_color', array(
        'default'           => '#755fbf',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'    => esc_html__( 'Primary Color', 'simple-press' ),
        'section'  => 'colors',
        'settings' => 'primary_color',
    ) ) );
    $wp_customize->add_setting( 'color_options_upgrade_to_pro_text', array(
        'default'           => '',
        'type'              => 'customtext',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new Simple_Press_Custom_Text( $wp_customize, 'color_options_upgrade_to_pro_text', array(
        'description' => esc_html__( 'More Color Options and 600+ Google Fonts are available in PRO version.', 'simple-press' ),
        'section'     => 'colors',
        'settings'    => 'color_options_upgrade_to_pro_text',
        'priority'    => 500,
    ) ) );
}
