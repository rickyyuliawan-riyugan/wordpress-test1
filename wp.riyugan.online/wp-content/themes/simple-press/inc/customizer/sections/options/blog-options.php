<?php

/**
 * Blog List Settings
 * 
 * @package simple_press
 */
add_action( 'customize_register', 'simple_press_customize_blog_option' );
function simple_press_customize_blog_option( $wp_customize )
{
    $wp_customize->add_section( 'simple_press_customize_blog_option', array(
        'title'    => esc_html__( 'Blog Options', 'simple-press' ),
        'priority' => 15,
    ) );
    $wp_customize->add_setting( 'blog_post_layout', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'simple_press_sanitize_choices',
        'default'           => 'no-sidebar',
    ) );
    $wp_customize->add_control( new Simple_Press_Buttonset_Control( $wp_customize, 'blog_post_layout', array(
        'label'    => esc_html__( 'Layouts :', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'blog_post_layout',
        'type'     => 'radio-buttonset',
        'choices'  => array(
        'sidebar-left'  => esc_html__( 'Sidebar at left', 'simple-press' ),
        'no-sidebar'    => esc_html__( 'No sidebar', 'simple-press' ),
        'sidebar-right' => esc_html__( 'Sidebar at right', 'simple-press' ),
    ),
    ) ) );
    $wp_customize->add_setting( 'blog_post_view', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'simple_press_sanitize_choices',
        'default'           => 'grid-view',
    ) );
    $wp_customize->add_control( new Simple_Press_Buttonset_Control( $wp_customize, 'blog_post_view', array(
        'label'    => esc_html__( 'Post View :', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'blog_post_view',
        'type'     => 'radio-buttonset',
        'choices'  => array(
        'grid-view'       => esc_html__( 'Masonry View', 'simple-press' ),
        'list-view'       => esc_html__( 'List View', 'simple-press' ),
        'col-3-view'      => esc_html__( 'Grid', 'simple-press' ),
        'full-width-view' => esc_html__( 'Fullwidth View', 'simple-press' ),
    ),
    ) ) );
    // Post Snippet Options :
    $wp_customize->add_setting( 'post_snippet_options_text', array(
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( new Simple_Press_Custom_Text( $wp_customize, 'post_snippet_options_text', array(
        'label'    => '<hr/><span>' . esc_html__( 'Post Snippet Options :', 'simple-press' ) . '</span>',
        'section'  => 'simple_press_customize_blog_option',
        'Settings' => 'post_snippet_options_text',
    ) ) );
    $wp_customize->add_setting( 'hide_show_featured_image', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_featured_image', array(
        'label'    => esc_html__( 'Show/Hide Featured Image', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_featured_image',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'show_hide_social_share', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'show_hide_social_share', array(
        'label'    => esc_html__( 'Enable Social Share', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'show_hide_social_share',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'hide_show_date', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_date', array(
        'label'    => esc_html__( 'Show/Hide Date', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_date',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'hide_show_author', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_author', array(
        'label'    => esc_html__( 'Show/Hide Author', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_author',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'hide_show_number_of_comments', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => false,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_number_of_comments', array(
        'label'    => esc_html__( 'Show/Hide Comment Number', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_number_of_comments',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'hide_show_categories', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => false,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_categories', array(
        'label'    => esc_html__( 'Show/Hide Categories', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_categories',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'hide_show_tags', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => false,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_tags', array(
        'label'    => esc_html__( 'Show/Hide Tags', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_tags',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'image_size', array(
        'default'           => 'thumbnail',
        'sanitize_callback' => 'simple_press_sanitize_select',
    ) );
    $wp_customize->add_control( 'image_size', array(
        'settings' => 'image_size',
        'label'    => esc_html__( 'Post Thumbnail Options:', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'type'     => 'select',
        'choices'  => array(
        'thumbnail' => esc_html__( 'Thumbnail', 'simple-press' ),
        'medium'    => esc_html__( 'Medium', 'simple-press' ),
        'large'     => esc_html__( 'Large', 'simple-press' ),
        'full'      => esc_html__( 'Full / Original', 'simple-press' ),
    ),
    ) );
    $wp_customize->add_setting( 'excerpt_size', array(
        'sanitize_callback' => 'absint',
        'default'           => 25,
    ) );
    $wp_customize->add_control( 'excerpt_size', array(
        'settings' => 'excerpt_size',
        'type'     => 'text',
        'section'  => 'simple_press_customize_blog_option',
        'label'    => esc_html__( 'Excerpt Size', 'simple-press' ),
    ) );
    $wp_customize->add_setting( 'readmore_text', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Read More', 'simple-press' ),
    ) );
    $wp_customize->add_control( 'readmore_text', array(
        'settings' => 'readmore_text',
        'type'     => 'text',
        'section'  => 'simple_press_customize_blog_option',
        'label'    => esc_html__( 'Readmore Text', 'simple-press' ),
    ) );
    // Detail Page Options:
    $wp_customize->add_setting( 'post_details_title_text', array(
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( new Simple_Press_Custom_Text( $wp_customize, 'post_details_title_text', array(
        'label'    => '<hr/><span>' . esc_html__( 'Detail Post Options :', 'simple-press' ) . '</span>',
        'section'  => 'simple_press_customize_blog_option',
        'Settings' => 'post_details_title_text',
    ) ) );
    $wp_customize->add_setting( 'hide_show_detail_page_featured_image', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_detail_page_featured_image', array(
        'label'    => esc_html__( 'Show/Hide Featured Image', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_detail_page_featured_image',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'show_hide_detail_page_social_share', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'show_hide_detail_page_social_share', array(
        'label'    => esc_html__( 'Enable Social Share', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'show_hide_detail_page_social_share',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'hide_show_detail_page_date', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_detail_page_date', array(
        'label'    => esc_html__( 'Show/Hide Date', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_detail_page_date',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'hide_show_detail_page_author', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_detail_page_author', array(
        'label'    => esc_html__( 'Show/Hide Author', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_detail_page_author',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'hide_show_detail_page_number_of_comments', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => false,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_detail_page_number_of_comments', array(
        'label'    => esc_html__( 'Show/Hide Comment Number', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_detail_page_number_of_comments',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'hide_show_detail_page_categories', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => false,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_detail_page_categories', array(
        'label'    => esc_html__( 'Show/Hide Categories', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_detail_page_categories',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'hide_show_detail_page_tags', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => false,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_detail_page_tags', array(
        'label'    => esc_html__( 'Show/Hide Tags', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_detail_page_tags',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'hide_show_detail_page_author_block', array(
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'hide_show_detail_page_author_block', array(
        'label'    => esc_html__( 'Show/Hide Author Block', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'hide_show_detail_page_author_block',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'show_hide_related_posts', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'simple_press_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new Simple_Press_Toggle_Control( $wp_customize, 'show_hide_related_posts', array(
        'label'    => esc_html__( 'Related Articles', 'simple-press' ),
        'section'  => 'simple_press_customize_blog_option',
        'settings' => 'show_hide_related_posts',
        'type'     => 'toggle',
    ) ) );
    $wp_customize->add_setting( 'related_posts_title', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
    ) );
    $wp_customize->add_control( 'related_posts_title', array(
        'label'           => esc_html__( 'Related Articles Title', 'simple-press' ),
        'section'         => 'simple_press_customize_blog_option',
        'settings'        => 'related_posts_title',
        'type'            => 'text',
        'active_callback' => function () {
        return get_theme_mod( 'show_hide_related_posts', true );
    },
    ) );
}
