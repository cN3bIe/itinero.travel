<?php
/**
 * itinero Theme Customizer
 *
 * @package itinero
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function itinero_customize_register( $wp_customize ) {/*
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';*/

	/*cN3bIe*/
	$wp_customize->add_section( 'section_social' , array('title'=>__( 'Social section', 'itinero' ),'priority'=>30));
	$wp_customize->add_setting( 'social_vk' , array('default'=>'https://vk.com/','transport'=>'refresh'));
	$wp_customize->add_control('social_vk',array(
			'label'    => __( 'VK account', 'itinero' ),
			'section'  => 'section_social',
			'settings' => 'social_vk',
			'type'     => 'text',
			)
		);
	$wp_customize->add_setting( 'social_inst' , array('default'=>'https://www.instagram.com/','transport'=>'refresh'));
	$wp_customize->add_control('social_inst',array(
			'label'    => __( 'Instagram account', 'itinero' ),
			'section'  => 'section_social',
			'settings' => 'social_inst',
			'type'     => 'text',
			)
		);
	$wp_customize->add_setting( 'social_fb' , array('default'=>'https://www.facebook.com/c','transport'=>'refresh'));
	$wp_customize->add_control('social_fb',array(
			'label'    => __( 'Facebook account', 'itinero' ),
			'section'  => 'section_social',
			'settings' => 'social_fb',
			'type'     => 'text',
			)
		);
}
add_action( 'customize_register', 'itinero_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
/*
function itinero_customize_preview_js() {
	wp_enqueue_script( 'itinero_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'itinero_customize_preview_js' );
*/