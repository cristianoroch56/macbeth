<?php
/*
Widget Name: Macbeth Editor
Description: Macbeth Editor
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Editor extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-editor',
            __('Macbeth Editor', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Editor', 'macbeth-widgets'),
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
            'macbeth_editor' => array(
                'type' => 'tinymce',
                'label' => __('Blockquote', 'macbeth-widgets'),
            ),
		);
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }

	
}

siteorigin_widget_register( 'macbeth-editor', __FILE__, 'Macbeth_Editor' );
