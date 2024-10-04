<?php
/*
Widget Name: Macbeth Line Break
Description: Add Line Break
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Line_Break extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-line-break',
            __('Macbeth Line Break', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Line Break', 'macbeth-widgets'),
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
            'line_break' => array(
                'type' => 'number',
				'label' => __('Add number of line break', 'macbeth-widgets'),
				'description' => __('Default 1', 'macbeth-widgets'),
			),
		);
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }
	
}

siteorigin_widget_register( 'macbeth-line-break', __FILE__, 'Macbeth_Line_Break' );
