<?php
/**
 * Theme Customizer - Contact
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
class Footer 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	**/
	public function register( $wp_customize ) 
	{
		/* Panel */
		$wp_customize->add_panel('macbeth-footer',array(
			'title'=>'Macbeth Footer',
			'description'=> 'Panel to save Macbeth Footer Details.',
			'priority'=> 30,
		));

		/* Top Section */
		$wp_customize->add_section('macbeth-top-footer', array(
			"title" => __( 'Top Footer', 'macbeth' ),
			"priority" => 30,
			'panel'=>'macbeth-footer',
			'sanitize_callback' => array( $this, 'macbeth_sanitize_text' ),
		));

		/* Top Image Setting */
		$wp_customize->add_setting('macbeth-top-footer-image', array(
			'transport'         => 'refresh',
			'height'         => 325,
		));
		  
		/* Top Image Control */
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'macbeth-top-footer-image', 
		array(
			'label'             => __('Footer Image'),
			'section'           => 'macbeth-top-footer',
			'settings'          => 'macbeth-top-footer-image',    
		)));

		/* Bottom Section */
		$wp_customize->add_section('macbeth-bottom-footer', array(
			"title" => __( 'Bottom Footer', 'macbeth' ),
			"priority" => 30,
			'panel'=>'macbeth-footer',
			'sanitize_callback' => array( $this, 'macbeth_sanitize_text' ),
		));

		/* Copyright Setting */
		$wp_customize->add_setting( 'macbeth-footer-copyright-field-top', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		/* Copyright Section */
		$wp_customize->add_control( 'macbeth-footer-copyright-field-top', array(
			'type' => 'text',
			'section' => 'macbeth-bottom-footer', 
			'label' => __( 'Text' ),
			'priority'    => 10,
		));

		/* Copyright Setting */
		$wp_customize->add_setting( 'macbeth-footer-copyright-field', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		/* Copyright Section */
		$wp_customize->add_control( 'macbeth-footer-copyright-field', array(
			'type' => 'textarea',
			'section' => 'macbeth-bottom-footer', 
			'label' => __( 'Copyright text' ),
			'priority'    => 20,
		));
		
	}

	public function macbeth_sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}

}