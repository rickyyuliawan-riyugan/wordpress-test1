<?php

/**
 * Container width Settings
 *
 * @package simple_press
 */


add_action( 'customize_register', 'simple_press_customize_container_width' );

function simple_press_customize_container_width( $wp_customize ) {

    $wp_customize->add_section( 'simple_press_container_width', array(
        'title'          => esc_html__( 'Container Width', 'simple-press' ),
        'description'    => esc_html__( 'Container Width :', 'simple-press' ), 
        'priority'       => 17,       
    ) );
            
    $wp_customize->add_setting( 'container_width', array(
        'default'           => 1400,
        'sanitize_callback' => 'absint',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new Simple_Press_Slider_Control( $wp_customize, 'container_width', array(
        'section' => 'simple_press_container_width',
        'settings' => 'container_width',
        'label'   => esc_html__( 'Container Width', 'simple-press' ),
        'choices'     => array(
            'min'   => 1024,
            'max'   => 1600,
            'step'  => 1,
        )
    ) ) );

    
}

