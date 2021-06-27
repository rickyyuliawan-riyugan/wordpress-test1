<?php
if( ! function_exists( 'simple_press_register_custom_controls' ) ) :
/**
 * Register Custom Controls
*/
function simple_press_register_custom_controls( $wp_customize ) {
    
    // Load our custom control.
    
    require_once get_template_directory() . '/inc/custom-controls/slider/class-slider-control.php';

   
    require_once get_template_directory() . '/inc/custom-controls/radiobtn/class-radio-buttonset-control.php';

    
    require_once get_template_directory() . '/inc/custom-controls/radioimg/class-radio-image-control.php';

    
    require_once get_template_directory() . '/inc/custom-controls/toggle/class-toggle-control.php';

   
    require_once get_template_directory() . '/inc/custom-controls/notes.php';
    require_once get_template_directory() . '/inc/custom-controls/upgrade-to-pro/class-section-pro-control.php';
    require_once get_template_directory() . '/inc/custom-controls/multicheck/class-multi-check-control.php';
            
    // Register the control type.
    $wp_customize->register_control_type( 'Simple_Press_Slider_Control' );
    $wp_customize->register_control_type( 'Simple_Press_Buttonset_Control' );
    $wp_customize->register_control_type( 'Simple_Press_Radio_Image_Control' );
    $wp_customize->register_control_type( 'Simple_Press_Toggle_Control' );
    $wp_customize->register_section_type( 'Simple_Press_Customize_Section_Pro_Control' );
    $wp_customize->register_control_type( 'Simple_Press_Multi_Check_Control' );
}
endif;
add_action( 'customize_register', 'simple_press_register_custom_controls' );


function simple_press_enqueue_custom_admin_style() {
        wp_register_style( 'simple-press-upgrade-to-pro', get_template_directory_uri() . '/inc/custom-controls/upgrade-to-pro/upgrade-to-pro.css', false );
        wp_enqueue_style( 'simple-press-upgrade-to-pro' );

        wp_enqueue_script( 'simple-press-upgrade-to-pro', get_template_directory_uri() . '/inc/custom-controls/upgrade-to-pro/upgrade-to-pro.js', array( 'jquery' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'simple_press_enqueue_custom_admin_style' );