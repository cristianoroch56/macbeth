<?php
/*
Widget Name: Macbeth Team 
Description: Display team.
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Team extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-team',
            __('Macbeth Team', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Team', 'macbeth-widgets'),
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
			
		);
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }
	
}

siteorigin_widget_register( 'macbeth-team', __FILE__, 'Macbeth_Team' );
