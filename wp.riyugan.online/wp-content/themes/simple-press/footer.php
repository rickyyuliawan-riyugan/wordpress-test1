<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple_press
 */
?>

</div>

<footer id="colophon" class="site-footer footer-one">
    <div class="container">
        <div class="footer-section">
            <?php 
for ( $i = 1 ;  $i < 5 ;  $i++ ) {
    ?>
            <div class="f-block">
                <?php 
    dynamic_sidebar( 'footer-' . $i . '' );
    ?>
            </div>
            <?php 
}
?>
        </div>
        <div class="site-info">
            <div class="copyright-info">
            <?php 
$copyright = get_theme_mod( 'footer_copyright_text', '' );
if ( $copyright ) {
    echo  wp_kses_post( $copyright ) . " | " ;
}
?>

                <?php 
esc_html_e( 'Developed by:', 'simple-press' );
?> <a href="<?php 
echo  esc_url( 'https://avidthemes.com/' ) ;
?>" target="_blank"  rel="nofollow"><?php 
esc_html_e( 'Avid Themes', 'simple-press' );
?></a>
                <br>
                <?php 
esc_html_e( "Powered by", 'simple-press' );
?> <a href="<?php 
echo  esc_url( 'https://wordpress.org/' ) ;
?>"><?php 
esc_html_e( "WordPress", 'simple-press' );
?></a> 
             
            <?php 
?>
            </div>
            <div class="footer-social"><?php 
get_template_part( 'template-parts/header-social', 'icon' );
?></div>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->


<button class="scroll-top-wrapper" id="scrollTop" title="<?php 
esc_attr_e( "Go to top", 'simple-press' );
?>"><span class="icon-up-open"></span></button>


</div><!-- #page -->

<?php 
wp_footer();
?>
</body>

</html>