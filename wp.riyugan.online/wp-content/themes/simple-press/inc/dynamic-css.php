<?php
function simple_press_dynamic_css() {
	wp_enqueue_style( 'simple-press-style', get_stylesheet_uri(), array(), SIMPLE_PRESS_VERSION );
        $site_title_size = absint( get_theme_mod( 'site_title_size', 4) );
        $logo_size = absint( $site_title_size * 3 );
        $site_identity_font_family = esc_attr( get_theme_mod( 'site_identity_font_family', 'Cormorant Garamond') );
        $container_width = absint ( get_theme_mod('container_width', 1400) );


        $site_title_color = esc_attr( get_theme_mod( 'site_title_color_option', '#755fbf' ) );
        
        $primary_color = esc_attr( get_theme_mod( 'primary_color', '#755fbf' ) );
        $secondary_color = esc_attr( get_theme_mod( 'secondary_color', '#3a458c' ) );
        $text_color = esc_attr( get_theme_mod( 'text_color', '#333333' ) );
        $light_color = esc_attr( get_theme_mod( 'light_color', '#ffffff' ) );
        $dark_color = esc_attr( get_theme_mod( 'dark_color', '#374359' ) );
        $grey_color = esc_attr( get_theme_mod( 'grey_color', '#a0b2bc' ) );
        

        $font_family = esc_attr( get_theme_mod( 'font_family', 'Poppins' ) );
        $font_size = esc_attr( get_theme_mod( 'font_size', '16px' ) );
        $body_font_weight = esc_attr( get_theme_mod( 'body_font_weight', 400 ) );
        $body_line_height = ( get_theme_mod( 'body_line_height', 1.7) );


        $heading_font_family = esc_attr( get_theme_mod( 'heading_font_family', 'Inika' ) );

        $dynamic_css = "

                :root {
                        --primary-color: $primary_color;
                        --secondary-color: $secondary_color;
                        --text-color: $text_color;
                        --light-color: $light_color;
                        --dark-color: $dark_color;
                        --grey-color: $grey_color;
                }
                
                /* font family */
                body{ font: $body_font_weight"." $font_size"." $font_family; line-height: {$body_line_height};}

                h1,h2,h3,h4,h5,h6{ font-family: $heading_font_family }                


                /* site title size */
                .site-title a{color: $site_title_color;}
                .site-title{font-size: $site_title_size"."rem; font-family: {$site_identity_font_family}; }

                header .custom-logo{ width: {$logo_size}"."rem; }

                /* container width */
                .container{max-width: {$container_width}"."px; }

                
        ";
        wp_add_inline_style( 'simple-press-style', $dynamic_css );
}
add_action( 'wp_enqueue_scripts', 'simple_press_dynamic_css' );
