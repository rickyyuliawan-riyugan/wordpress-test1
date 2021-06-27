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
    
    <div id="page" class="site quorse-navbar">
        <a class="skip-link screen-reader-text" href="#primary"><?php 
esc_html_e( 'Skip to content', 'simple-press' );
?></a>

        <header id="masthead" class="site-header">
		    <div class="header-layout-4">
				<div class="header-wrapper">
					<div class="container">
						<div style="width: 15%;">
							<div class="site-title">
                				<a href="https://wp.riyugan.online" rel="home"><img src="https://quorse.com/wp-content/uploads/elementor/thumbs/quorse-logo@2x-oru03i2islpdccaztetshwra56wjwpwizv49ydixog.png" title="quorse-logo@2x" alt="quorse-logo@2x"></a>
							</div>
						</div>
						<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
							<i class="eicon-menu-bar" aria-hidden="true"></i>
							<span class="elementor-screen-only" style="top: 22px;width: initial;height: initial;clip: initial;margin: 0 0 0 10px;text-transform: uppercase;font-size: 0.85em;">Categories</span>
						</div>
						<form class="header-search" action="https://wp.riyugan.online">
							<input type="text" placeholder="" name="s">
							<button type="submit"><i class="icon-search"></i></button>
						</form>
						<nav id="site-navigation" class="main-navigation">
							<div id="primary-menu" class="menu">
								<ul class=" nav-menu">
									<li class="page_item page-item-2"><a href="#">Signature Series</a></li>
									<li class="page_item page-item-2"><a href="#">Promos</a></li>
									<li class="page_item page-item-2"><a href="#">Blog</a></li>
									<li class="page_item page-item-2"><a href="#">Sign Up</a></li>
									<li class="page_item page-item-2"><a href="#" class="login-button">Login</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>     
    </div>
	<section class="quorse-under-header">
		<div class="quorse-header-container">
			<div class="qCourseBreadcrumbs">
				<h4 style="font: 1.05em 'Open Sans', sans-serif;"><a href="https://quorse.com/live-virtual-training/">Live Virtual Training (Most Popular!)</a></h4>
			</div>
		</div>
	</section>
	
	
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
