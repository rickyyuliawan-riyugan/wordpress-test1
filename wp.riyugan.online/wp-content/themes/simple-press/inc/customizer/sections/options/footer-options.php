<?php

/**
 * footer Fonts Settings
 *
 * @package simple_press
 */
add_action( 'customize_register', 'simple_press_customize_register_footer_options_section' );
function simple_press_customize_register_footer_options_section( $wp_customize )
{
    $wp_customize->add_section( 'simple_press_customize_register_footer_options_section', array(
        'title'    => esc_html__( 'Footer Options', 'simple-press' ),
        'priority' => 18,
    ) );
    $wp_customize->add_setting( 'footer_copyright_text', array(
        'transport'         => 'postMessage',
        'sanitize_callback' => 'wp_kses_post',
        'default'           => '',
    ) );
    $wp_customize->add_control( 'footer_copyright_text', array(
        'label'    => esc_html__( 'Copyright :', 'simple-press' ),
        'section'  => 'simple_press_customize_register_footer_options_section',
        'settings' => 'footer_copyright_text',
        'type'     => 'textarea',
    ) );
    $wp_customize->selective_refresh->add_partial( 'footer_copyright_text', array(
        'selector' => 'footer .site-info',
    ) );
    $wp_customize->add_setting( 'copyright_upgrade_to_pro_text', array(
        'default'           => '',
        'type'              => 'customtext',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new Simple_Press_Custom_Text( $wp_customize, 'copyright_upgrade_to_pro_text', array(
        'description' => esc_html__( 'You can edit the entire footer copyright text in PRO version.', 'simple-press' ),
        'section'     => 'simple_press_customize_register_footer_options_section',
        'settings'    => 'copyright_upgrade_to_pro_text',
        'priority'    => 500,
    ) ) );
}
