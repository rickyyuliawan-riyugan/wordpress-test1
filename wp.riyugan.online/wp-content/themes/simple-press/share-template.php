<?php
	$social_share = get_theme_mod( 'simple_press_social_share' );
?>
<script type="text/javascript">
	var fb = '<?php echo esc_html__( "Facebook", "simple-press" ); ?>';
	var twitter = '<?php echo esc_html__( "Twitter", "simple-press" ); ?>';
	var pinterest = '<?php echo esc_html__( "Pinterest", "simple-press" ); ?>';
	var linkedin = '<?php echo esc_html__( "Linkedin", "simple-press" ); ?>';
</script>

<?php if( $social_share ) : ?>

	<ul class="list-inline">

		<li><?php esc_html_e( "Share", 'simple-press' ); ?>:</li>

		<?php if( in_array( 'facebook', $social_share ) ) { ?>
			<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" onclick="return ! window.open( this.href, fb, 'width=500, height=500' )">
			    <i class="icon-facebook"></i></a>
			</li>
		<?php } ?>

		<?php if( in_array( 'twitter', $social_share ) ) { ?>
			<li><a href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo $url; ?>&amp;via=<?php echo esc_html( $twitter_id ); ?>" onclick="return ! window.open( this.href, twitter, 'width=500, height=500' )">
			   <i class="icon-twitter"></i></a>
			</li>
		<?php } ?>

		<?php if( in_array( 'pinterest', $social_share ) ) { ?>
			<li><a href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&amp;media=<?php echo $media;   ?>&amp;description=<?php echo esc_html( $title ); ?>" onclick="return ! window.open( this.href, pinterest, 'width=500, height=500' )">
			    <i class="icon-pinterest"></i></a>
			</li>
		<?php } ?>

		<?php if( in_array( 'linkedin', $social_share ) ) { ?>
			<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>&title=<?php echo esc_html( $title ); ?>" onclick="return ! window.open( this.href, linkedin, 'width=500, height=500' )">
			    <i class="icon-linkedin"></i></a>
			</li>
		<?php } ?>
		<?php if( in_array( 'email', $social_share ) ) { ?>
			<li><a href="mailto:?subject=<?php echo esc_attr( $title ); ?>&body=<?php echo $title . " " . $url; ?>" target="_blank">
			    <i class="icon-mail"></i></a>
			</li>
		<?php } ?>


	</ul>

<?php endif;