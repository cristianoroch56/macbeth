<?php
/*
Widget Name: Macbeth Headers
Description: Display Headers.
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Headers extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-headers',
            __('Macbeth Headers', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Headers with different style.', 'macbeth-widgets'),
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
			'header_style' => array(
                'type' => 'select',
                'label' => __('Select Header Style', 'macbeth-widgets'),
                'options' => array(
                    'header1' => __('Header Style 1', 'macbeth-widgets'),
                    'header2' => __('Header Style 2', 'macbeth-widgets'),
                    'header3' => __('Header Style 3', 'macbeth-widgets'),
                ),
                'default' => 'header1',
            ),
			'header_content' => array(
				'type' => 'section',
				'label' => __('Header Contents', 'macbeth-widgets'),
				'fields' => array(
                    'header_title' => array(
                        'type' => 'text',
                        'label' => __('Header Title', 'macbeth-widgets'),
                    ),
                    'header_image' => array(
                        'type' => 'media',
                        'label' => __('Background Image', 'macbeth-widgets'),
                    ),
                    'header_description' => array(
						'type' => 'textarea',
						'label' => __('Header Content', 'macbeth-widgets'),
						'description' => __('Add header small content', 'macbeth-widgets'),
					),
				)
            ),
            'header_setting' => array(
				'type' => 'section',
				'label' => __('Header Settings', 'macbeth-widgets'),
				'fields' => array(
                    'header_text_color' => array(
                        'type' => 'color',
                        'label' => __('Text Color', 'macbeth-widgets'),
                    ),
                    'header_background_color' => array(
                        'type' => 'color',
                        'label' => __('Background Color', 'macbeth-widgets'),
                    ),
				)
            ),
            
		);
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }

	
}

siteorigin_widget_register( 'macbeth-headers', __FILE__, 'Macbeth_Headers' );
