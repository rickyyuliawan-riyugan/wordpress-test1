<?php

/**
 * simple-press functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package simple_press
 */
if ( !session_id() ) {
    session_start();
}




if ( !defined( 'SIMPLE_PRESS_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( 'SIMPLE_PRESS_VERSION', '1.0.6' );
}
if ( !function_exists( 'simple_press_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function simple_press_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on simple-press, use a find and replace
         * to change 'simple-press' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'simple-press', get_template_directory() . '/languages' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'main-menu' => esc_html__( 'Main menu', 'simple-press' ),
        ) );
        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        ) );
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'simple_press_custom_background_args', array(
            'default-color' => 'f9fcff',
            'default-image' => '',
        ) ) );
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
        add_editor_style( get_stylesheet_uri() );
    }

}
add_action( 'after_setup_theme', 'simple_press_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function simple_press_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'simple_press_content_width', 900 );
}

add_action( 'after_setup_theme', 'simple_press_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function simple_press_widgets_init()
{
    for ( $i = 1 ;  $i < 5 ;  $i++ ) {
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Widget', 'simple-press' ) . " " . $i,
            'id'            => 'footer-' . $i . '',
            'description'   => esc_html__( 'Add widgets here.', 'simple-press' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h5 class="widget-title">',
            'after_title'   => '</h5>',
        ) );
    }
    register_sidebar( array(
        'name'          => esc_html__( 'Right Sidebar', 'simple-press' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Left Sidebar', 'simple-press' ),
        'id'            => 'left-sidebar',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'simple_press_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function simple_press_scripts()
{
    $font_family = get_theme_mod( 'font_family', 'Poppins' );
    $heading_font_family = get_theme_mod( 'heading_font_family', 'Inika' );
    $site_identity_font_family = esc_attr( get_theme_mod( 'site_identity_font_family', 'Cormorant Garamond' ) );
    wp_enqueue_style( 'fontello', get_template_directory_uri() . '/css/fontello.css' );
    wp_enqueue_style( 'simple-press-googlefonts', 'https://fonts.googleapis.com/css?family=' . esc_attr( $font_family ) . ':200,300,400,500,600,700,800,900|' . esc_attr( $heading_font_family ) . ':200,300,400,500,600,700,800,900|' . esc_attr( $site_identity_font_family ) . ':200,300,400,500,600,700,800,900|' );
    wp_enqueue_style(
        'simple-press-style',
        get_template_directory_uri() . '/style.css',
        array(),
        SIMPLE_PRESS_VERSION
    );
    wp_style_add_data( 'simple-press-style', 'rtl', 'replace' );
    wp_register_script(
        'simple-press-script',
        get_template_directory_uri() . '/js/script.js',
        array( 'jquery' ),
        'SIMPLE_PRESS_VERSION',
        true
    );
    wp_localize_script( 'simple-press-script', 'simple_press_js_vars', array(
        'ajaxurl' => esc_url( site_url() . '/wp-admin/admin-ajax.php' ),
    ) );
    wp_enqueue_script( 'simple-press-script' );
    wp_enqueue_script(
        'simple-press-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        array(),
        SIMPLE_PRESS_VERSION,
        true
    );
    wp_enqueue_script(
        'simple-press-skip-link-focus-fix',
        get_template_directory_uri() . '/js/skip-link-focus-fix.js',
        array(),
        SIMPLE_PRESS_VERSION,
        true
    );
    wp_enqueue_script(
        'simple-press-masonry',
        get_template_directory_uri() . '/js/masonry.pkgd.min.js',
        array(),
        SIMPLE_PRESS_VERSION,
        true
    );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'simple_press_scripts' );
// add async and defer attributes to enqueued scripts
function simple_press_script_loader_tag( $tag, $handle, $src )
{
    
    if ( $handle === 'all-fontawesome' ) {
        if ( false === stripos( $tag, 'async' ) ) {
            $tag = str_replace( ' src', ' async="async" src', $tag );
        }
        if ( false === stripos( $tag, 'defer' ) ) {
            $tag = str_replace( '<script ', '<script defer ', $tag );
        }
    }
    
    return $tag;
}

add_filter(
    'script_loader_tag',
    'simple_press_script_loader_tag',
    10,
    3
);
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/custom-controls/custom-control.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';
/**
 * Customizer changes css
 */
require get_template_directory() . '/inc/dynamic-css.php';
// Breadcrumbs
require get_template_directory() . '/inc/breadcrumbs.php';
/**
 * Recommended Plugins
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}
function simple_press_excerpt()
{
    $limit = get_theme_mod( 'excerpt_size', 25 );
    $excerpt = explode( ' ', get_the_excerpt(), absint( $limit ) );
    if ( count( $excerpt ) >= $limit ) {
        array_pop( $excerpt );
    }
    $excerpt = implode( " ", $excerpt ) . '...';
    $excerpt = preg_replace( '`[[^]]*]`', '', $excerpt );
    return esc_html( $excerpt );
}

function simple_press_thumbnail_size()
{
    $thumbnail_size = get_theme_mod( 'image_size', 'thumbnail' );
    return $thumbnail_size;
}

function simple_press_readmore_text()
{
    $readmore = get_theme_mod( 'readmore_text', 'Read More' );
    return $readmore;
}

/**
 * Social media share buttons
 */
function simple_press_share_buttons()
{
    $url = urlencode( get_the_permalink() );
    $title = html_entity_decode( get_the_title(), ENT_COMPAT, 'UTF-8' );
    $media = urlencode( get_the_post_thumbnail_url( get_the_ID(), 'full' ) );
    $twitter_id = get_theme_mod( 'twitter_id' );
    include locate_template( 'share-template.php', false, false );
}

function simple_press_load_more_scripts()
{
    $archive_cat = get_query_var( 'cat' );
    if ( is_front_page() && !is_home() ) {
        $archive_cat = get_theme_mod( 'homepage_blog_section_category' );
    }
    $args = array(
        'post_type' => 'post',
        'cat'       => absint( $archive_cat ),
        'paged'     => ( get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1 ),
    );
    $wp_query = new WP_Query( $args );
    wp_register_script( 'simple_press_loadmore', get_template_directory_uri() . '/js/loadmore.js', array( 'jquery' ) );
    wp_localize_script( 'simple_press_loadmore', 'simple_press_loadmore_params', array(
        'ajaxurl'      => esc_url( site_url() . '/wp-admin/admin-ajax.php' ),
        'current_page' => ( get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1 ),
        'max_page'     => absint( $wp_query->max_num_pages ),
        'cat'          => absint( $archive_cat ),
    ) );
    wp_enqueue_script( 'simple_press_loadmore' );
}

add_action( 'wp_enqueue_scripts', 'simple_press_load_more_scripts' );
function simple_press_load_more_ajax()
{
    if ( isset( $_POST['page'] ) ) {
        $args['paged'] = absint( $_POST['page'] + 1 );
    }
    $args['post_status'] = esc_html( 'publish' );
    $args['cat'] = absint( $_POST['cat'] );
    $wp_query = new WP_Query( $args );
    if ( $wp_query->have_posts() ) {
        while ( $wp_query->have_posts() ) {
            $wp_query->the_post();
            get_template_part( 'template-parts/content' );
        }
    }
    die;
    // here we exit the script and even no wp_reset_query() required!
}

add_action( 'wp_ajax_simple_press_loadmore', 'simple_press_load_more_ajax' );
add_action( 'wp_ajax_nopriv_simple_press_loadmore', 'simple_press_load_more_ajax' );