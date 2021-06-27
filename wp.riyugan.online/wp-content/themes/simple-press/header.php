<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple_press
 */
?>
<!doctype html>
<html <?php 
language_attributes();
?>>
<?php 
$meta_color = "light";
$body_classes = array();
if ( isset( $_COOKIE['color_mode'] ) ) {
    $body_classes[] = $_COOKIE['color_mode'];
}
if ( isset( $_COOKIE['meta_color'] ) ) {
    $meta_color = $_COOKIE['meta_color'];
}
?>

<head>
    <meta charset="<?php 
bloginfo( 'charset' );
?>">
    <meta name="description" content="<?php 
echo  esc_attr( get_bloginfo( 'description', 'display' ) ) ;
?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="<?php 
echo  esc_attr( $meta_color ) ;
?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php 
wp_head();
?>
</head>


<body <?php 
body_class( $body_classes );
?>>
    <?php 
wp_body_open();
?>
    
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php 
esc_html_e( 'Skip to content', 'simple-press' );
?></a>

        <header id="masthead" class="site-header">
            <?php 
$layout = get_theme_mod( 'simple_press_header_layouts', 'four' );
get_template_part( 'layouts/header/header-layout', $layout );
?>
        </header><!-- #masthead -->

        

        
    </div>



    <div id="primary">


    <div class="top-banner-section">
        <img src="<?php 
header_image();
?>">
    </div>


    <?php 
?>


    <?php 
$dark_mode_enable = get_theme_mod( 'show_hide_color_theme', true );
?>

    <?php 

if ( $dark_mode_enable ) {
    ?>
        <div class="simple-press-light-dark-toggle">           
            <label class="switch simple-press-light-dark-toggle-label" for="simple-press-light-dark-toggle-btn">
            <input type="checkbox" name="checkbox" id="simple-press-light-dark-toggle-btn"<?php 
    echo  ( $meta_color == 'dark' ? ' checked' : "" ) ;
    ?>>
            <span class="slider round"></span>
            </label>
        </div>
    <?php 
}
