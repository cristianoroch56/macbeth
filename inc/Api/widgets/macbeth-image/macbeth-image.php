<?php
/*
Widget Name: Macbeth Image
Description: Display Image
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Image extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-images',
            __('Macbeth Image', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Image', 'macbeth-widgets'),
            ),
            array(
            ),
            /* Rather all the field for Macbeth Image call in get_widget_form() */
            false,
            plugin_dir_path(__FILE__)
        );
    }

    function get_widget_form()
    {
		return array(
			'image_box' => array(
                'type' => 'media',
                'label' => __('Image', 'macbeth-widgets'),
            ),
            'image_title' => array(
                'type' => 'text',
                'label' => __('Title', 'macbeth-widgets'),
            ),
            'image_url' => array(
                'type' => 'link',
                'label' => __('URL', 'macbeth-widgets'),
            ),
            'image_setting' => array(
				'type' => 'section',
				'label' => __('Settings', 'macbeth-widgets'),
				'fields' => array(
                    'title_color' => array(
                        'type' => 'color',
                        'label' => __('Text Color', 'macbeth-widgets'),
                    ),
                    'title_background_color' => array(
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

siteorigin_widget_register( 'macbeth-images', __FILE__, 'Macbeth_Image' );
