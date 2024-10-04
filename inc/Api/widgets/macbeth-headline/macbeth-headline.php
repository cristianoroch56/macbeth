<?php
/*
Widget Name: Macbeth Headline
Description: Display headline and sub-heading.
Author: Macbeth
Author URI: https://macbeths.co.uk/
*/

class Macbeth_Headline extends SiteOrigin_Widget 
{

    function __construct() 
    {
        parent::__construct(
            /* The unique id */
            'macbeth-headline',
            __('Macbeth Headline', 'macbeth-widgets'),
            array(
                'description' => __('Macbeth Headline', 'macbeth-widgets'),
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
            'back_color' => array(
                'type' => 'color',
                'label' => __('Color', 'macbeth-widgets'),
            ),
            'headline_text' => array(
				'type' => 'section',
				'label'  => __( 'Headline', 'macbeth-widgets' ),
				'hide'   => false,
				'fields' => array(
					'text' => array(
						'type' => 'text',
						'label' => __( 'Text', 'macbeth-widgets' ),
					),
					'tag' => array(
						'type' => 'select',
						'label' => __( 'HTML Tag', 'macbeth-widgets' ),
						'default' => 'h2',
						'options' => array(
							'h1' => __( 'H1', 'macbeth-widgets' ),
							'h2' => __( 'H2', 'macbeth-widgets' ),
							'h3' => __( 'H3', 'macbeth-widgets' ),
							'h4' => __( 'H4', 'macbeth-widgets' ),
							'h5' => __( 'H5', 'macbeth-widgets' ),
							'h6' => __( 'H6', 'macbeth-widgets' ),
							'p' => __( 'Paragraph', 'macbeth-widgets' ),
						)
					),
					'font_weight' => array(
						'type' => 'select',
						'label' => __( 'HTML Tag', 'macbeth-widgets' ),
						'default' => '500',
						'options' => array(
							'100' => __( '100', 'macbeth-widgets' ),
							'200' => __( '200', 'macbeth-widgets' ),
							'300' => __( '300', 'macbeth-widgets' ),
							'400' => __( '400', 'macbeth-widgets' ),
							'500' => __( '500', 'macbeth-widgets' ),
							'600' => __( '600', 'macbeth-widgets' ),
							'700' => __( '700', 'macbeth-widgets' ),
							'800' => __( '800', 'macbeth-widgets' ),
							'900' => __( '900', 'macbeth-widgets' ),
						)
					),
					'color' => array(
						'type' => 'color',
						'label' => __('Color', 'macbeth-widgets'),
					),
					'font_size' => array(
						'type' => 'measurement',
						'label' => __('Font Size', 'macbeth-widgets')
					),
					'align' => array(
						'type' => 'select',
						'label' => __( 'Alignment', 'macbeth-widgets' ),
						'default' => 'center',
						'options' => array(
							'center' => __( 'Center', 'macbeth-widgets' ),
							'left' => __( 'Left', 'macbeth-widgets' ),
							'right' => __( 'Right', 'macbeth-widgets' ),
							'justify' => __( 'Justify', 'macbeth-widgets' )
						)
					),
				)
            ),
            'sub_headline_text' => array(
				'type' => 'section',
				'label'  => __( 'Sub headline', 'macbeth-widgets' ),
				'hide'   => true,
				'fields' => array(
					'text' => array(
						'type' => 'text',
						'label' => __( 'Text', 'macbeth-widgets' ),
					),
					'tag' => array(
						'type' => 'select',
						'label' => __( 'HTML Tag', 'macbeth-widgets' ),
						'default' => 'p',
						'options' => array(
							'h1' => __( 'H1', 'macbeth-widgets' ),
							'h2' => __( 'H2', 'macbeth-widgets' ),
							'h3' => __( 'H3', 'macbeth-widgets' ),
							'h4' => __( 'H4', 'macbeth-widgets' ),
							'h5' => __( 'H5', 'macbeth-widgets' ),
							'h6' => __( 'H6', 'macbeth-widgets' ),
							'p' => __( 'Paragraph', 'macbeth-widgets' ),
						)
					),
					'font_weight' => array(
						'type' => 'select',
						'label' => __( 'HTML Tag', 'macbeth-widgets' ),
						'default' => '500',
						'options' => array(
							'100' => __( '100', 'macbeth-widgets' ),
							'200' => __( '200', 'macbeth-widgets' ),
							'300' => __( '300', 'macbeth-widgets' ),
							'400' => __( '400', 'macbeth-widgets' ),
							'500' => __( '500', 'macbeth-widgets' ),
							'600' => __( '600', 'macbeth-widgets' ),
							'700' => __( '700', 'macbeth-widgets' ),
							'800' => __( '800', 'macbeth-widgets' ),
							'900' => __( '900', 'macbeth-widgets' ),
						)
					),
					'color' => array(
						'type' => 'color',
						'label' => __('Color', 'macbeth-widgets'),
					),
					'font_size' => array(
						'type' => 'measurement',
						'label' => __('Font Size', 'macbeth-widgets')
					),
					'align' => array(
						'type' => 'select',
						'label' => __( 'Alignment', 'macbeth-widgets' ),
						'default' => 'center',
						'options' => array(
							'center' => __( 'Center', 'macbeth-widgets' ),
							'left' => __( 'Left', 'macbeth-widgets' ),
							'right' => __( 'Right', 'macbeth-widgets' ),
							'justify' => __( 'Justify', 'macbeth-widgets' )
						)
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

siteorigin_widget_register( 'macbeth-headline', __FILE__, 'Macbeth_Headline' );
