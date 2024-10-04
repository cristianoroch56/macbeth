<?php
/*
Widget Name: Macbeth Interested
Description: Display Interested Sidebar
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Interested extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-interested',
            __('Macbeth Interested', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Interested Sidebar', 'macbeth-widgets'),
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
            'sub-title' => array(
                'type' => 'text',
                'label' => __('Sub Title', 'macbeth-widgets'),
            ),
            'contact_repeater' => array(
                'type' => 'repeater',
                'label' => __( 'Add Contact' , 'macbeth-widgets' ),
                'item_name'  => __( 'Contacts', 'macbeth-widgets' ),
                'fields' => array(
                    'contact_text' => array(
                        'type' => 'text',
                        'label' => __( 'Title', 'macbeth-widgets' )
                    ),
                )
            ),
            'email' => array(
                'type' => 'text',
                'label' => __('Email', 'macbeth-widgets'),
            ),
		);
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }

}

siteorigin_widget_register( 'macbeth-interested', __FILE__, 'Macbeth_Interested' );
