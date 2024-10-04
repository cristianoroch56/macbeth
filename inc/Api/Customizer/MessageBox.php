<?php
/**
 * Theme Customizer - Message Box
 * @package Macbeth
 */

namespace Macbeth\Api\Customizer;

use WP_Customize_Control;
use WP_Customize_Color_Control;
use Macbeth\Api\Customizer;

/**
 * Customizer class
 */
class MessageBox 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	**/
	public function register( $wp_customize ) 
	{

		/**
		 * Section: Message Box
		 */
		$wp_customize->add_section('macbeth-message-box', array(
			"title" => __( 'Message Box Form', 'macbeth' ),
			"priority" => 30,
			'sanitize_callback' => array( $this, 'macbeth_sanitize_text' ),
		));

		// Add setting for Reading Office Contact Number
		$wp_customize->add_setting( 'macbeth-message-box-form', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		// Add control for Reading Office Contact Number
		$wp_customize->add_control( 'macbeth-message-box-form', array(
			'type' => 'text',
			'section' => 'macbeth-message-box', 
			'label' => __( 'Contact Form Shortcode' ),
		));
		
	}

	public function macbeth_sanitize_text( $text ) 
	{
	    return sanitize_text_field( $text );
	}

}