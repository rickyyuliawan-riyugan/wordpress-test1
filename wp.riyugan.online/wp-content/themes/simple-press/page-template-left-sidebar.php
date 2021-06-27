<?php
/**
 * The template for displaying left sidebar pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simple_press
 */

// Template Name: Left Sidebar

get_header();
?>

<div class="inside-page search-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 sticky-sidebar"><?php dynamic_sidebar('left-sidebar'); ?></div>
			<div class="col-sm-8">
				<main class="site-main">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
					endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div>
			
		</div>
	</div>
</div>

<?php
get_footer();