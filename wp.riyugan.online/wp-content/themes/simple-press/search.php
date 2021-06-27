<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package simple_press
 */

get_header();
?>

<?php global $wp_query; ?>
<div class="inside-page search-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<main class="site-main">

					<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'simple-press' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</header><!-- .page-header -->

					<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					else :

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
			<div class="col-sm-4"><?php get_sidebar(); ?></div>
		</div>
	</div>
</div>

<?php
get_footer();