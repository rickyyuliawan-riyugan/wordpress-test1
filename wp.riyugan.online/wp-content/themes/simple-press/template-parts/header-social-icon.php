<?php if( get_theme_mod( 'show_hide_social_media', true ) ) { ?>
<ul class="social-links">
    <?php if(get_theme_mod('abt_fb_url_setting_id')){ ?>
    <li><a target="_blank" rel="noreferrer noopener" href="<?php echo esc_url(get_theme_mod('abt_fb_url_setting_id'), 'simple-press'); ?>"><span
                class="icon-facebook"></span></a></li>
    <?php } ?>
    <?php if(get_theme_mod('abt_twitter_url_setting_id')){ ?>
    <li><a target="_blank" rel="noreferrer noopener"
            href="<?php echo esc_url(get_theme_mod('abt_twitter_url_setting_id'), 'simple-press'); ?>"><span class="icon-twitter"></span></a>
    </li>
    <?php } ?>
    <?php if(get_theme_mod('abt_instagram_url_setting_id')){ ?>
    <li><a target="_blank" rel="noreferrer noopener"
            href="<?php echo esc_url(get_theme_mod('abt_instagram_url_setting_id'), 'simple-press'); ?>"><span
                class="icon-instagram"></span></a></li>
    <?php } ?>
    <?php if(get_theme_mod('abt_linkedin_url_setting_id')){ ?>
    <li><a target="_blank" rel="noreferrer noopener"
            href="<?php echo esc_url(get_theme_mod('abt_linkedin_url_setting_id'), 'simple-press'); ?>"><span
                class="icon-linkedin"></span></a></li>
    <?php } ?>
    <?php if(get_theme_mod('abt_youtube_url_setting_id')){ ?>
    <li><a target="_blank" rel="noreferrer noopener"
            href="<?php echo esc_url(get_theme_mod('abt_youtube_url_setting_id'), 'simple-press'); ?>"><span
                class="icon-youtube-play"></span></a></li>
    <?php } ?>

    <?php if(get_theme_mod('abt_pinterest_url_setting_id')){ ?>
        <li>
            <a target="_blank" rel="noreferrer noopener" href="<?php echo esc_url(get_theme_mod('abt_pinterest_url_setting_id'), 'simple-press'); ?>">
                <span class="icon-pinterest"></span>
            </a>
        </li>
    <?php } ?>
    
</ul>

<?php }