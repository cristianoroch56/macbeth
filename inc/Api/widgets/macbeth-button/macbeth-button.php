<?php
/*
Widget Name: Macbeth Button
Description: Add button
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Button extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-button',
            __('Macbeth Button', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Button', 'macbeth-widgets'),
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
            'title' => array(
                'type' => 'text',
                'label' => __('Button Text', 'macbeth-widgets'),
			),
			'subtitle' => array(
                'type' => 'text',
				'label' => __('Button Sub Text', 'macbeth-widgets'),
				'description' => __('For extra large size only', 'macbeth-widgets'),
			),
			'url' => array(
                'type' => 'link',
                'label' => __('Text URL', 'macbeth-widgets'),
            ),
            'button_setting' => array(
				'type' => 'section',
				'label'  => __( 'Button Setting', 'macbeth-widgets' ),
				'hide'   => false,
				'fields' => array(
					'size' => array(
						'type' => 'select',
						'label' => __('Button Size', 'macbeth-widgets'),
						'options' => array(
							'small' => __('Small', 'macbeth-widgets'),
							'large' => __('Large', 'macbeth-widgets'),
							'extralarge' => __('Extra Large', 'macbeth-widgets'),
						),
						'default' => 'large',
					),
					'background_color' => array(
						'type' => 'color',
						'label' => __('Background Color', 'macbeth-widgets'),
					),
					'text_color' => array(
						'type' => 'color',
						'label' => __( 'Text Color', 'macbeth-widgets' ),
					),
					'show_icon' => array(
						'type' => 'checkbox',
						'label' => __( 'Hide Icon', 'macbeth-widgets' ),
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

siteorigin_widget_register( 'macbeth-button', __FILE__, 'Macbeth_Button' );
