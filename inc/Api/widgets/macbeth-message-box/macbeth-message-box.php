<?php
/*
Widget Name: Macbeth Message Box
Description: Display Message Box
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Message_Box extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-message-box',
            __('Macbeth Message Box', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Message Box', 'macbeth-widgets'),
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
            'title' => array(
                'type' => 'text',
                'label' => __('Title', 'macbeth-widgets'),
            ),
            'subtitle' => array(
                'type' => 'tinymce',
                'label' => __('Sub Title', 'macbeth-widgets'),
            ),
            'background_color' => array(
                'type' => 'color',
                'label' => __('Background Color', 'macbeth-widgets'),
            ),
        );
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }
	
}

siteorigin_widget_register( 'macbeth-message-box', __FILE__, 'Macbeth_Message_Box' );
