<?php
/**
 * Template part for displaying single posts.
 *
 * @package simple_press
 */
?>
<?php
    $show_hide_image = get_theme_mod( 'hide_show_detail_page_featured_image', true );
    $show_hide_date = get_theme_mod( 'hide_show_detail_page_date', true );
    $show_hide_author = get_theme_mod( 'hide_show_detail_page_author', true );
    $show_hide_comment = get_theme_mod( 'hide_show_detail_page_number_of_comments', false );
    $show_hide_author_block = get_theme_mod( 'hide_show_detail_page_author_block', true );
    $show_hide_categories = get_theme_mod( 'hide_show_detail_page_categories', false );
    $show_hide_tags = get_theme_mod( 'hide_show_detail_page_tags', false );
?>
<h1 class="page-title"><?php the_title(); ?></h1>

<div class="single-post">

    
    <div class="info">
        <ul class="list-inline">
            <?php 
            if( $show_hide_date ) { ?>
             
                <?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day = get_the_time('d'); ?>
                <li class="post-date"><i class="icon-calendar"></i> <a
                    href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>"><?php echo get_the_date(); ?></a>
                </li>
            <?php } ?>

            <?php 
            if( $show_hide_author ) { ?>                
                <li class="post-author"><i class="icon-user"></i>
                    <a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                        <?php $avatar = get_avatar( get_the_author_meta( 'ID' ), $size = 60 ); ?>
                        <?php if( $avatar ) : ?>
                            <div class="author-image">
                                <?php echo esc_url($avatar); ?>
                            </div>
                        <?php endif; ?>
                        <?php echo esc_html( get_the_author() ); ?>
                    </a>
                </li>
            <?php } ?>


                <?php if( $show_hide_categories ) { ?>
                
                    <?php $categories = get_the_category();
                    if( ! empty( $categories ) ) : ?>
                        <li class="category-items">
                            <?php foreach ( $categories as $category ) { ?>
                                <span class="category">
                                    <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
                                </span>
                            <?php } ?>
                        </li>
                    <?php endif; ?>

                <?php } ?>
               

                
               

        </ul>
        <ul class="list-inline">

            <?php if( $show_hide_comment ) { ?>
                <li><i class="icon-comment-empty"></i>
                    <?php comments_popup_link( __( 'zero comment', 'simple-press' ), __( 'one comment', 'simple-press' ), __( '% comments', 'simple-press' ) ); ?>
                </li>
            <?php } ?>



            <?php if( $show_hide_tags ) { ?>

                <li class="tag-lists">
                    
                    <?php $tags = get_the_tags();
                    if( ! empty( $tags ) ) : ?>

                        <i class="icon-tags"></i>

                        <?php foreach ( $tags as $post_tag ) { ?>
                            <a href="<?php echo esc_url( get_category_link( $post_tag->term_id ) ); ?>"><?php echo esc_html( $post_tag->name ); ?></a>
                            
                        <?php }

                    endif; ?>
                </li>
            <?php } ?>

            

        </ul>
    </div>





<div class="post-content">
    <?php
    $page_template = get_page_template_slug( get_queried_object_id() );
    if($page_template != 'single-thumbnail.php'){
    ?>

        <?php if( $show_hide_image && has_post_thumbnail() ) : ?>
            <figure class="feature-image">
                <?php the_post_thumbnail( 'full' ); ?>
            </figure>
        <?php endif; ?>
    <?php } ?>    

    <article>
        <div class="inner-social">
            <?php if( get_theme_mod( 'show_hide_detail_page_social_share', true ) ) { ?>
                <div class="inner-social-share">
                    <div class="info">
                            <?php simple_press_share_buttons(); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="inner-article-content">
        <?php the_content(); ?>
        </div>

        <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'simple-press' ),
          'after'  => '</div>',
      ) );
      ?>
  </article>

</div>



<?php if( $show_hide_author_block ) : ?>
<div class="author-post clearfix">
    <?php $avatar = get_avatar( get_the_author_meta( 'ID' ), $size = 75 ); ?>
    <?php if( $avatar ) : ?>
        <div class="author-image">
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo $avatar; ?></a>
        </div>
    <?php endif; ?>
    <div class="author-details">
        <h4><a
            href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a>
        </h4>
        <p><?php echo esc_html( get_the_author_meta('description') ); ?></p>
    </div>
</div>
<?php endif; ?>

</div>