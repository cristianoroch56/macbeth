<?php
/**
 * Theme Customizer - Contact
 * @package Macbeth
 */

namespace Macbeth\Api\Customizer;

use WP_Customize_Control;
use WP_Customize_Color_Control;
use Macbeth\Api\Customizer;

/**
 * Customizer class
 */
class Contact 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	**/
	public function register( $wp_customize ) 
	{
		$wp_customize->add_panel('macbeth-contact',array(
			'title'=>'Macbeth Contact',
			'description'=> 'Panel to save Macbeth Contact Details.',
			'priority'=> 30,
		));

		/**
		 * Section: Contact Details
		 */
		$wp_customize->add_section('macbeth-contact-details', array(
			"title" => __( 'Contact Details', 'macbeth' ),
			"priority" => 30,
			'panel'=>'macbeth-contact',
			'sanitize_callback' => array( $this, 'macbeth_sanitize_text' ),
		));

		// Add setting for Reading Office Contact Number
		$wp_customize->add_setting( 'macbeth-contact-reading-number', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		// Add control for Reading Office Contact Number
		$wp_customize->add_control( 'macbeth-contact-reading-number', array(
			'type' => 'text',
			'section' => 'macbeth-contact-details', 
			'label' => __( 'Reading Office Contact Number' ),
		));

		// Add setting for London Office Contact Number
		$wp_customize->add_setting( 'macbeth-contact-london-number', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		// Add control for Reading Office Contact Number
		$wp_customize->add_control( 'macbeth-contact-london-number', array(
			'type' => 'text',
			'section' => 'macbeth-contact-details', 
			'label' => __( 'London Office Contact Number' ),
		));

		// Add setting for Contact Email
		$wp_customize->add_setting( 'macbeth-contact-email', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		// Add control for Contact Email
		$wp_customize->add_control( 'macbeth-contact-email', array(
			'type' => 'text',
			'section' => 'macbeth-contact-details', 
			'label' => __( 'Contact Email' ),
		));

		// Add setting for Recruitment Email
		$wp_customize->add_setting( 'macbeth-contact-recruitment-email', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		// Add control for Recruitment Email
		$wp_customize->add_control( 'macbeth-contact-recruitment-email', array(
			'type' => 'text',
			'section' => 'macbeth-contact-details', 
			'label' => __( 'Recruitment Email' ),
		));
		
		/**
		 * Section: Social Media Details
		 */
		$wp_customize->add_section('macbeth-social', array(
			"title" => __( 'Social Media', 'macbeth' ),
			"priority" => 30,
			'panel'=>'macbeth-contact',
			'sanitize_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		
		// Add setting for Facebook
		$wp_customize->add_setting( 'macbeth-social-facebook', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		// Add control for Facebook
		$wp_customize->add_control( 'macbeth-social-facebook', array(
			'type' => 'text',
			'section' => 'macbeth-social', 
			'label' => __( 'Facebook' ),
		));

		// Add setting for Twitter
		$wp_customize->add_setting( 'macbeth-social-twitter', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		// Add control for Twitter
		$wp_customize->add_control( 'macbeth-social-twitter', array(
			'type' => 'text',
			'section' => 'macbeth-social', 
			'label' => __( 'Twitter' ),
		));

		// Add setting for LinkedIn
		$wp_customize->add_setting( 'macbeth-social-linkedin', array(
			'capability' => 'edit_theme_options',
			'render_callback' => array( $this, 'macbeth_sanitize_text' ),
		));
		  
		// Add control for LinkedIn
		$wp_customize->add_control( 'macbeth-social-linkedin', array(
			'type' => 'text',
			'section' => 'macbeth-social', 
			'label' => __( 'LinkedIn' ),
		));
		
	}

	public function macbeth_sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}

}