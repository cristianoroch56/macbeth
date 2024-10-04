<?php
/*
Widget Name: Macbeth Latest News
Description: Display Latest News.
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Latest_News extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-latest-news',
            __('Macbeth Latest News & Articles', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Latest News & Articles Slider', 'macbeth-widgets'),
            ),
            array(
            ),
            /* Rather all the field for Macbeth Latest News call in get_widget_form() */
            false,
            plugin_dir_path(__FILE__)
        );
    }

    function get_widget_form()
    {
		return array(
			'section_title' => array(
                'type' => 'text',
                'label' => __('Section Title', 'macbeth-widgets'),
            ),
            'post_query_loop' => array(
                'type' => 'posts',
                'label' => __('Query Setting', 'macbeth-widgets'),
            )
		);
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }
	
}

siteorigin_widget_register( 'macbeth-latest-news', __FILE__, 'Macbeth_Latest_News' );
