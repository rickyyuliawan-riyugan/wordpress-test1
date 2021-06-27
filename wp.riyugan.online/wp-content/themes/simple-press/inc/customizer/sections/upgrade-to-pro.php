<?php
/**
 * Simple Press Pro Theme Info
 *
 * @package Simple Press
 */

function simple_press_customizer_upgrade_to_pro( $wp_customize ) {

	$wp_customize->add_section( new Simple_Press_Customize_Section_Pro_Control( $wp_customize, 'upgrade-to-pro',	array(
			'title'    => esc_html__( 'Simple Press Pro', 'simple-press' ),
			'type'	=> 'upgrade-to-pro',
			'pro_text' => esc_html__( 'Upgrade to Pro', 'simple-press' ),
			'pro_url'  => esc_url( 'https://avidthemes.com/simple-press-pro/' ),
			'priority' => 1
		) )	);

	
}
add_action( 'customize_register', 'simple_press_customizer_upgrade_to_pro' );