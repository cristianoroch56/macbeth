<?php
/**
 * Theme Customizer - ProductColor
 * Dynamic Product Page Color
 * @package Macbeth
 */

namespace Macbeth\Api\Customizer;

use WP_Customize_Control;
use WP_Customize_Color_Control;
use Macbeth\Api\Customizer;

/**
 * Customizer class
 */
class ProductColor 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	**/
	public function register( $wp_customize ) 
	{
		/* Main Section (Product Color) */
		$wp_customize->add_section('productcolor', array(
			"title" => __( 'Macbeth Product Color', 'macbeth' ),
			"priority" => 30,
		));
		
		/* Commercial Setting */
		$wp_customize->add_setting('macbeth_commercial_color', array(
			'default'           => __( '', 'macbeth' )
	   	));
		
		/* Commercial Control */
	   	$wp_customize->add_control( new WP_Customize_Color_Control(
		   $wp_customize,
		   'macbeth_commercial_color',
			   array(
				   'label'    => __( 'Commercial', 'macbeth' ),
				   'section'  => 'productcolor',
				   'settings' => 'macbeth_commercial_color',
			   )
		));

		/* Private Setting */
		$wp_customize->add_setting('macbeth_private_color', array(
			'default'           => __( '', 'macbeth' )
	   	));
		
		/* Private Control */
	   	$wp_customize->add_control( new WP_Customize_Color_Control(
		   $wp_customize,
		   'macbeth_private_color',
			   array(
				   'label'    => __( 'Private', 'macbeth' ),
				   'section'  => 'productcolor',
				   'settings' => 'macbeth_private_color',
			   )
		));

		/* Sector Setting */
		$wp_customize->add_setting('macbeth_sector_color', array(
			'default'           => __( '', 'macbeth' )
	   	));
		
		/* Sector Control */
	   	$wp_customize->add_control( new WP_Customize_Color_Control(
		   $wp_customize,
		   'macbeth_sector_color',
			   array(
				   'label'    => __( 'Sector', 'macbeth' ),
				   'section'  => 'productcolor',
				   'settings' => 'macbeth_sector_color',
			   )
		));

	}

	public function macbeth_sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}

}