<?php
/**
 * Theme Customizer - Popup
 * @package Macbeth
 */

namespace Macbeth\Api\Customizer;

use WP_Customize_Control;
use WP_Customize_Color_Control;
use Macbeth\Api\Customizer;

/**
 * Customizer class
 */
class Popup 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	**/
	public function register( $wp_customize ) 
	{
		/* Panel */
		$wp_customize->add_panel('macbeth-popup',array(
			'title'=>'Macbeth Popup',
			'description'=> 'Panel to save Macbeth Popup Details.',
			'priority'=> 30,
		));

		/* Section */
		$wp_customize->add_section('macbeth-popup-contact', array(
			"title" => __( 'Copyrights', 'macbeth' ),
			"priority" => 30,
			'panel'=>'macbeth-popup',
			'sanitize_callback' => array( $this, 'macbeth_sanitize_text' ),
		));		

	}

	public function macbeth_sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}

}