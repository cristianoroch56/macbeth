<?php
/*
Widget Name: Macbeth Product Popup
Description: Display Product List in pop-up
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Product_PopUp extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-product-popup',
            __('Macbeth Product Popup', 'macbeth-widgets'),
            array(
                'description' => __('Display Product List in pop-up', 'macbeth-widgets'),
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
            'btn_title' => array(
                'type' => 'text',
                'label' => __('Button Title', 'macbeth-widgets'),
                'description' => __('Default value can be changed from the customizer.', 'macbeth-widgets'),
            ),
            'popup_title' => array(
                'type' => 'text',
                'label' => __('Popup Title', 'macbeth-widgets'),
                'description' => __('Default value can be changed from the customizer.', 'macbeth-widgets'),
            ),
            'product_type' => array(
                'type' => 'select',
                'label' => __('Product Type', 'macbeth-widgets'),
                'options' => array(
                    '0' => __('Default', 'macbeth-widgets'),
                    'commercial-product' => __('Commercial Product', 'macbeth-widgets'),
                    'private-product' => __('Private Product', 'macbeth-widgets'),
                    'sectors' => __('Sector', 'macbeth-widgets'),
                ),
                'default' => '0',
            ),
		);
	}

    function get_template_name($instance) 
    {
        return 'frontend';
    }

	
}

siteorigin_widget_register( 'macbeth-product-popup', __FILE__, 'Macbeth_Product_PopUp' );
