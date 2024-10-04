<?php
/**
 * Theme Customizer - Defaul Values
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
class DefaultValues 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	**/
	public function register( $wp_customize ) 
	{
		$wp_customize->add_panel('macbeth-default-values',array(
			'title'=>'Macbeth Default Values',
			'description'=> 'Panel to save Macbeth Defaul Values',
			'priority'=> 30,
		));
		
		/* Popup Section */
		$wp_customize->add_section('macbeth-popup', array(
			"title" => __( 'Pop Up', 'macbeth' ),
			"priority" => 30,
			'panel'=>'macbeth-default-values',
			'sanitize_callback' => array( $this, 'macbeth_sanitize_text' ),
		));

		/* Popup Button Setting */
		$wp_customize->add_setting( 'macbeth-popup-button', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		/* Popup Button Control */
		$wp_customize->add_control( 'macbeth-popup-button', array(
			'type' => 'text',
			'section' => 'macbeth-popup', 
			'label' => __( 'Popup button text (Related Product)' ),
		));

		/* Popup Button Setting */
		$wp_customize->add_setting( 'macbeth-popup-title', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		/* Popup Button Control */
		$wp_customize->add_control( 'macbeth-popup-title', array(
			'type' => 'text',
			'section' => 'macbeth-popup', 
			'label' => __( 'Popup title text (Related Product)' ),
		));

	}

	public function macbeth_sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}

}