<?php
/*
Widget Name: Macbeth Testimonials
Description: Display testimonials.
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Testimonials extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-testimonials',
            __('Macbeth Testimonials', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Testimonials', 'macbeth-widgets'),
            ),
            array(
            ),
            /* Rather all the field for Macbeth Header call in get_widget_form() */
            false,
            plugin_dir_path(__FILE__)
            );
    }

    function get_widget_form()
    {
		return array(
			'testimonial_style' => array(
                'type' => 'select',
                'label' => __('Select Testomonial Style', 'macbeth-widgets'),
                'options' => array(
                    'testimonial1' => __('Style 1', 'macbeth-widgets'),
                    'testimonial2' => __('Style 2', 'macbeth-widgets'),
                ),
                'default' => 'testimonial1',
            ),
            'testimonial_background' => array(
                'type' => 'color',
                'label' => __('Testomonial Background', 'macbeth-widgets'),
            ),
		);
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }
	
}

siteorigin_widget_register( 'macbeth-testimonials', __FILE__, 'Macbeth_Testimonials' );
