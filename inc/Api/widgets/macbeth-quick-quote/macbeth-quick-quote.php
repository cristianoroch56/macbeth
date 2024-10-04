<?php
/*
Widget Name: Macbeth Quick Quote
Description: Display Quick Quote
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Quick_Quote extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-quick-quote',
            __('Macbeth Quick Quote', 'macbeth-widgets'),
            array(
                'description' => __('Quick Quote Widget', 'macbeth-widgets'),
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
            'style' => array(
                'type' => 'select',
                'label' => __('Select Style', 'macbeth-widgets'),
                'options' => array(
                    'liststyle' => __('List Style', 'macbeth-widgets'),
                    'imagestyle' => __('Image Style', 'macbeth-widgets'),
                ),
                'default' => 'liststyle',
            ),
			'title' => array(
                'type' => 'text',
                'label' => __('Top Title', 'macbeth-widgets'),
            ),
            'listsetting' => array(
				'type' => 'section',
				'label' => __('List Style Settings', 'macbeth-widgets'),
				'fields' => array(
                    'title' => array(
                        'type' => 'text',
                        'label' => __('Title', 'macbeth-widgets'),
                    ),
                    'item_repeater' => array(
                        'type' => 'repeater',
                        'label' => __( 'Interested Items List' , 'macbeth-widgets' ),
                        'item_name'  => __( 'Interested Items', 'macbeth-widgets' ),
                        'fields' => array(
                            'item_text' => array(
                                'type' => 'text',
                                'label' => __( 'Title', 'macbeth-widgets' )
                            ),
                            'item_url' => array(
                                'type' => 'link',
                                'label' => __( 'Url', 'macbeth-widgets' )
                            )
                        )
                    )
				)
            ),
            'imagesetting' => array(
				'type' => 'section',
				'label' => __('Image Style Settings', 'macbeth-widgets'),
				'fields' => array(
                    'image' => array(
                        'type' => 'media',
                        'label' => __('Image', 'macbeth-widgets'),
                    ),
                    'title' => array(
                        'type' => 'text',
                        'label' => __('Title', 'macbeth-widgets'),
                    ),
                    'url_text' => array(
                        'type' => 'text',
                        'label' => __('URL Text', 'macbeth-widgets'),
                    ),
                    'url' => array(
                        'type' => 'link',
                        'label' => __('URL', 'macbeth-widgets'),
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

siteorigin_widget_register( 'macbeth-quick-quote', __FILE__, 'Macbeth_Quick_Quote' );
