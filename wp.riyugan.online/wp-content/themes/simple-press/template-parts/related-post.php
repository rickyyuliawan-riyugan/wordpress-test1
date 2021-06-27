<?php
$page_template = get_page_template_slug( get_queried_object_id() );
if($page_template == 'single-sidebar.php' || $page_template == 'single-thumbnail.php' ){
    $post_count = '2';
} else {
    $post_count = '3';
}
?>

<div class="related-posts">
    <?php
    $args = array (
        'posts_per_page' => $post_count,
        'post_type' => 'post',
        'category__in' => wp_get_post_categories($post->ID),
        'post__not_in' => array($post->ID)
    );

    
    $query = new WP_Query( $args ); 
    if( $query->have_posts() ) {
        ?>          
        <h2 class="main-title"><?php echo esc_html( get_theme_mod( 'related_posts_title', "" ) ); ?></h2>          
        <div class="post-holder">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="news-snippet">

                    <?php if( get_theme_mod( 'hide_show_featured_image', true ) && has_post_thumbnail() ) : ?>

                        <?php $thumbnail_size = get_theme_mod( 'image_size', 'thumbnail' ); ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="featured-image">
                            <?php the_post_thumbnail( $thumbnail_size ); ?>
                        </a>      

                    <?php endif; ?>       

                    <div class="summary">
                        <h5 class="news-title">
                            <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
                                <?php the_title(); ?>
                            </a>
                        </h5>                                

                        <div class="info">
                    <ul class="list-inline">

                        

                            
                            <?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day = get_the_time('d'); ?>
                            <li><i class="icon-calendar"></i> <a
                                href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>"><?php echo get_the_date(); ?></a>
                            </li>


                            

                        </ul>
                    </div>


                        <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title="" class="readmore">
                            <?php echo esc_html( simple_press_readmore_text() ); ?>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php } ?>
</div>