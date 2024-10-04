<?php
/**
 * Theme Customizer - 404 Error
 * @package Macbeth
 */

namespace Macbeth\Api\Customizer;

use WP_Customize_Control;
use WP_Customize_Color_Control;
use WP_Customize_Image_Control;
use Macbeth\Api\Customizer;

/**
 * Customizer class
 */
class _404 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	**/
	public function register( $wp_customize ) 
	{

		/* 404 Section */
		$wp_customize->add_section('macbeth-404-error', array(
			"title" => __( 'Macbeth 404', 'macbeth' ),
			"priority" => 30,
			'sanitize_callback' => array( $this, 'macbeth_sanitize_text' ),
		));

		$wp_customize->add_control( 'macbeth-404-error-msg', array(
			'type' => 'text',
			'section' => 'macbeth-404-error', 
			'label' => __( 'Contact Form Shortcode' ),
		));

		
		$wp_customize->add_setting( 'macbeth-404-error-msg', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));

		
		$wp_customize->add_setting('macbeth-404-error-image', array(
			'transport'         => 'refresh',
			'height'         => 325,
		));
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'macbeth-404-error-image', 
		array(
			'label'             => __('404 Image'),
			'section'           => 'macbeth-404-error',
			'settings'          => 'macbeth-404-error-image',    
		)));
		
	}

	public function macbeth_sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}

}