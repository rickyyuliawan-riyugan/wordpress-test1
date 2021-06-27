<?php
/**
 * Template Name: Post with sidebar
 * Template Post Type: post
 */
get_header();
?>


<div class="inside-page content-area">
    <div class="container">
        <div class="row">

            <div class="col-sm-8" id="main-content">
                <section class="page-section">
                    <div class="detail-content">

                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'template-parts/content', 'single' ); ?>
                        <?php endwhile; // End of the loop. ?>
                        <?php comments_template(); ?>

                    </div><!-- /.end of deatil-content -->

                    <?php get_template_part('template-parts/related', 'post'); ?>
                    </section> <!-- /.end of section -->
                </div>

                <div class="col-sm-4 sticky-sidebar"><?php get_sidebar(); ?></div>

            </div>
        </div>
    </div>

    <?php
    get_footer();