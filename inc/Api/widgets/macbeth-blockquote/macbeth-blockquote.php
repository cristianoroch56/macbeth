<?php
/*
Widget Name: Macbeth Blockquote
Description: Display Blockquote
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Blockquote extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-blockquote',
            __('Macbeth Blockquote', 'macbeth-widgets'),
            array(
                'description' => __('Blockquote Widget', 'macbeth-widgets'),
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
            'macbeth_blockquote' => array(
                'type' => 'text',
                'label' => __('Blockquote', 'macbeth-widgets'),
            ),
            'macbeth_blockquote_color' => array(
                'type' => 'color',
                'label' => __('Blockquote Color', 'macbeth-widgets'),
            ),
		);
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }

}

siteorigin_widget_register( 'macbeth-blockquote', __FILE__, 'Macbeth_Blockquote' );
