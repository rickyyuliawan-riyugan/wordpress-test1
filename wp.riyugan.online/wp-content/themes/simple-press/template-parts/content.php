<?php
/**
 * Template part for displaying posts.
 *
 * @package simple_press
 */
?>


<?php
    $show_hide_image = get_theme_mod( 'hide_show_featured_image', true );
    $show_hide_date = get_theme_mod( 'hide_show_date', true );
    $show_hide_author = get_theme_mod( 'hide_show_author', true );
    $show_hide_comment = get_theme_mod( 'hide_show_number_of_comments', false );
    $show_hide_categories = get_theme_mod( 'hide_show_categories', false );
    $show_hide_tags = get_theme_mod( 'hide_show_tags', false );
?>


<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="news-snippet">
        <?php if ( $show_hide_image && has_post_thumbnail() ) : ?>
            <?php $thumbnail_size = get_theme_mod( 'image_size', 'thumbnail' ); ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="featured-image">
                <?php the_post_thumbnail( $thumbnail_size ); ?>
            </a>
        <?php endif; ?>
        <div class="summary">

            <?php if( $show_hide_categories ) { ?>
                                  
                    <?php $categories = get_the_category();
                    if( ! empty( $categories ) ) : ?>
                        <span class="category"> 
                            <?php foreach ( $categories as $category ) { ?>
                                <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
                            <?php } ?>
                        </span>
                    <?php endif; ?>
                   
            <?php } ?>
            <h3 class="news-title"><a href="<?php echo esc_url( get_permalink() ); ?>"
                rel="bookmark"><?php the_title(); ?></a></h3>
               
                <div class="info">
                    <ul class="list-inline">

                        

                        <?php if( $show_hide_date ) { ?>
                            
                            <?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day = get_the_time('d'); ?>
                            <li><i class="icon-calendar"></i> <a
                                href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>"><?php echo get_the_date(); ?></a>
                            </li>
                        <?php } ?>

                            
                        
                        <?php 
                        if( $show_hide_author ) { ?>
                                <li class="post-author"><i class="icon-user"></i>
                                    <a class="url fn n"
                                    href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
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


                            

                        </ul>
                    </div>
                

                <div><?php echo esc_html( simple_press_excerpt() ); ?></div>


                

            <div class="footer-info">
                <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title=""
                    class="readmore"><?php echo esc_html( simple_press_readmore_text() ); ?></a>
                    <?php if( get_theme_mod( 'show_hide_social_share', true ) ) { ?>
                        <div class="info">
                            <?php simple_press_share_buttons(); ?>                    
                        </div>
                    <?php } ?>
            </div>

<div class="closing-info info">
                    <ul class="list-inline">

                          <?php if( $show_hide_comment ) { ?>
                                <li><i class="icon-comment-empty"></i>
                                    <?php comments_popup_link( __( 'zero comment', 'simple-press' ), __( 'one comment', 'simple-press' ), __( '% comments', 'simple-press' ) ); ?>
                                </li>
                            <?php } ?>

                            <?php if( $show_hide_tags ) { ?>

                                <li>
                                    
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


                </div>
            </div>
        </div>