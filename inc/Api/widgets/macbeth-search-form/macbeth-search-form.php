<?php
/*
Widget Name: Macbeth Search Form
Description: Display Search Form
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Search_Form extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-search-form',
            __('Macbeth Search Form', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Search Form', 'macbeth-widgets'),
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
		return array();
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }
	
}

siteorigin_widget_register( 'macbeth-search-form', __FILE__, 'Macbeth_Search_Form' );
