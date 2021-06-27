<?php

add_action( 'customize_register', 'simple_press_site_identity_options' );
function simple_press_site_identity_options( $wp_customize )
{
    $wp_customize->get_section( 'title_tagline' )->priority = 10;
    $wp_customize->add_setting( 'site_title_color_option', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#755fbf',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_title_color_option', array(
        'label'    => esc_html__( 'Site Title Color', 'simple-press' ),
        'section'  => 'title_tagline',
        'settings' => 'site_title_color_option',
        'priority' => 60,
    ) ) );
    $wp_customize->add_setting( 'site_title_size', array(
        'default'           => 4,
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new Simple_Press_Slider_Control( $wp_customize, 'site_title_size', array(
        'section'  => 'title_tagline',
        'settings' => 'site_title_size',
        'label'    => esc_html__( 'Logo Size', 'simple-press' ),
        'choices'  => array(
        'min'  => 1,
        'max'  => 4,
        'step' => 0.5,
    ),
        'priority' => 61,
    ) ) );
    $wp_customize->add_setting( 'site_identity_font_family', array(
        'transport'         => 'postMessage',
        'sanitize_callback' => 'simple_press_sanitize_google_fonts',
        'default'           => 'Cormorant Garamond',
    ) );
    $wp_customize->add_control( 'site_identity_font_family', array(
        'settings' => 'site_identity_font_family',
        'label'    => esc_html__( 'Site Identity Font Family', 'simple-press' ),
        'section'  => 'title_tagline',
        'type'     => 'select',
        'choices'  => simple_press_google_fonts(),
        'priority' => 62,
    ) );
    $wp_customize->add_setting( 'simple_press_header_layouts', array(
        'sanitize_callback' => 'simple_press_sanitize_choices',
        'default'           => 'four',
    ) );
    $choices = array(
        'four' => get_template_directory_uri() . '/images/homepage/header-layouts/header-layout-four.jpg',
    );
    $wp_customize->add_control( new Simple_Press_Radio_Image_Control( $wp_customize, 'simple_press_header_layouts', array(
        'label'    => esc_html__( 'Header Layout', 'simple-press' ),
        'section'  => 'title_tagline',
        'settings' => 'simple_press_header_layouts',
        'type'     => 'radio-image',
        'choices'  => $choices,
        'priority' => 65,
    ) ) );
    $wp_customize->add_setting( 'header_options_upgrade_to_pro_text', array(
        'default'           => '',
        'type'              => 'customtext',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new Simple_Press_Custom_Text( $wp_customize, 'header_options_upgrade_to_pro_text', array(
        'description' => esc_html__( 'You will get more header layouts, sticky header, enable/disable breadcrumb options in PRO version.', 'simple-press' ),
        'section'     => 'title_tagline',
        'settings'    => 'header_options_upgrade_to_pro_text',
        'priority'    => 500,
    ) ) );
}
