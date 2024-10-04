<?php
/*
Widget Name: Macbeth Working Feedback
Description: Add Line Break
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Working_Feedback extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-working-feedback',
            __('Macbeth Working Feedback', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Working Feedback Carousal', 'macbeth-widgets'),
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
                'type' => 'number',
				'label' => __('Add the title', 'macbeth-widgets'),
				'description' => __('Default "What people are saying about us"', 'macbeth-widgets'),
			),
		);
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }
	
}

siteorigin_widget_register( 'macbeth-working-feedback', __FILE__, 'Macbeth_Working_Feedback' );
