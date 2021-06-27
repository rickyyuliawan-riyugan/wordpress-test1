<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simple_press
 */

get_header();
?>

<?php
	global $wp_query;

    $layout = get_theme_mod( 'blog_post_layout', 'no-sidebar' );
    $content_column_class = 'col-sm-8';

    $sidebar_left_class = 'col-sm-4 sticky-sidebar';
    $sidebar_right_class = 'col-sm-4 sticky-sidebar';

    if( $layout == 'no-sidebar' ) {
        $content_column_class = 'col-sm-12';
    }
    $view = get_theme_mod( 'blog_post_view', 'col-3-view' );
?>


<div class="inside-page search-page">
	<div class="container">
		<div class="row">
			<?php if( $layout == 'sidebar-left' ) { ?>
                    <div class="<?php echo esc_attr( $sidebar_left_class ); ?> sidebar"><?php dynamic_sidebar( 'left-sidebar' ); ?></div>
                <?php } ?>
			<div class="<?php echo esc_attr( $content_column_class ); ?>">
				<main class="site-main">

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<div class="<?php echo esc_attr( $view ); ?> blog-list-block">

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_type() );

							endwhile;

							?>

						</div>

					<?php else :

							get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

					<?php                                    
			          if (  $wp_query->max_num_pages > 1 ) {
			            if( get_theme_mod( 'pagination_type', 'number-pagination' ) == 'ajax-loadmore' ) { ?>
			              	<button class="loadmore"><?php esc_html_e( 'More posts', 'simple-press' ); ?></button>
			            <?php }
			            if( get_theme_mod( 'pagination_type', 'number-pagination' ) == 'number-pagination' ) {
			              	the_posts_pagination();
			            }
			          }
			        ?>

				</main><!-- #main -->
			</div>
			<?php if( $layout == 'sidebar-right' ) { ?>
                <div class="<?php echo esc_attr( $sidebar_right_class ); ?> sticky-sidebar"><?php get_sidebar(); ?></div>
            <?php } ?>
		</div>
	</div>
</div>

<?php get_footer();