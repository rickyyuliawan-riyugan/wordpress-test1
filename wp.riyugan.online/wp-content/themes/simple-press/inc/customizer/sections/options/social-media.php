<?php
/**
 * Social Media Sections

 */
add_action( 'customize_register', 'simple_press_social_media' );

function simple_press_social_media( $wp_customize ) {

    $wp_customize->add_section( 'simple_press_social_media', array(
        'title'          => esc_html__( 'Social Media', 'simple-press' ),
        'priority'       => 16,
       
    ) );

    $wp_customize->add_setting( 'show_hide_social_media', array(
        'sanitize_callback'     =>  'simple_press_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'show_hide_social_media', array(
        'label' => esc_html__( 'Enable Social Media','simple-press' ),
        'section' => 'simple_press_social_media',
        'settings' => 'show_hide_social_media',
        'type'=> 'toggle',
    ) ) );
    
    $wp_customize->add_setting( 'abt_fb_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'abt_fb_url_setting_id', array(
        'type' => 'url',
        'section' => 'simple_press_social_media', // Add a default or your own section
        'label' => __( 'Facebook URL', 'simple-press' ),
        'description' => __( 'This is a custom url input.', 'simple-press' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.google.com', 'simple-press'  ),
    ),
    ) );

    $wp_customize->add_setting( 'abt_twitter_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'abt_twitter_url_setting_id', array(
        'type' => 'url',
        'section' => 'simple_press_social_media', // Add a default or your own section
        'label' => __( 'Twitter URL', 'simple-press' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.twitter.com', 'simple-press'  ),
    ),
    ) );
    $wp_customize->add_setting( 'abt_instagram_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'abt_instagram_url_setting_id', array(
        'type' => 'url',
        'section' => 'simple_press_social_media', // Add a default or your own section
        'label' => __( 'Instagram URL', 'simple-press' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.instagram.com', 'simple-press'  ),
    ),
    ) );
    $wp_customize->add_setting( 'abt_linkedin_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'abt_linkedin_url_setting_id', array(
        'type' => 'url',
        'section' => 'simple_press_social_media', // Add a default or your own section
        'label' => __( 'LinkedIn URL', 'simple-press' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.linkedin.com', 'simple-press'  ),
    ),
    ) );

    $wp_customize->add_setting( 'abt_youtube_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'abt_youtube_url_setting_id', array(
        'type' => 'url',
        'section' => 'simple_press_social_media', // Add a default or your own section
        'label' => __( 'Youtube URL', 'simple-press' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.youtube.com', 'simple-press'  ),
    ),
    ) );

    $wp_customize->add_setting( 'abt_pinterest_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ) );
  
    $wp_customize->add_control( 'abt_pinterest_url_setting_id', array(
        'type' => 'url',
        'section' => 'simple_press_social_media', // Add a default or your own section
        'label' => __( 'Pinterest URL', 'simple-press' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.pinterest.com', 'simple-press'  ),
    ),
    ) );


    $wp_customize->add_setting( 'social_share_profile_text', array(
        'sanitize_callback' =>  'wp_kses_post',        
    ) );

    $wp_customize->add_control( new Simple_Press_Custom_Text( $wp_customize, 'social_share_profile_text', array(
        'label' =>  '<hr/><span>'.esc_html__( 'Social Profile :', 'simple-press' ).'</span>',
        'section'   =>  'simple_press_social_media',
        'Settings'  =>  'social_share_profile_text'
    ) ) );


    $wp_customize->add_setting( 'simple_press_social_share', array(
        'sanitize_callback' => 'simple_press_sanitize_array',
        'default'     => ''
    ) );

    $wp_customize->add_control( new Simple_Press_Multi_Check_Control( $wp_customize, 'simple_press_social_share', array(
        'label' => esc_html__( 'Social Shares', 'simple-press' ),
        'section' => 'simple_press_social_media',
        'settings' => 'simple_press_social_share',
        'type'=> 'multi-check',
        'choices'     => array(
            'facebook' => esc_html__( 'Facebook', 'simple-press' ),
            'twitter' => esc_html__( 'Twitter', 'simple-press' ),     
            'pinterest' => esc_html__( 'Pinterest', 'simple-press' ),
            'linkedin' => esc_html__( 'LinkedIn', 'simple-press' ),
            'email' => esc_html__( 'Email', 'simple-press' ),
        ),
    ) ) );

    $wp_customize->add_setting( 'twitter_id', array(
        'sanitize_callback' =>  'wp_kses_post',
    ) );

    $wp_customize->add_control( 'twitter_id', array(
        'label' =>  esc_html__( 'Twitter ID:', 'simple-press' ),
        'section'   =>  'simple_press_social_media',
        'Settings'  =>  'twitter_id',
        'type'=> 'text',
    ) );


}