<?php
Kirki::add_config( 'macbeth_kirki_config_ig', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );

Kirki::add_field( 'macbeth_kirki_config_ig', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Footer Links', 'macbeth' ),
    'section'     => 'macbeth-bottom-footer',
    'priority'    => 10,
    'row_label' => [
        'type'  => 'text',
        'value' => esc_html__('Link', 'macbeth' ),
    ],
    'button_label' => esc_html__("Add Link", 'macbeth' ),
    'settings'     => 'macbeth_footer_links',
    'fields' => [
        'link_text' => [
            'type'        => 'text',
            'label'    => esc_html__( 'Link Title', 'macbeth' ),
        ],
        'link_url' => [
            'type'        => 'link',
            'label'    => esc_html__( 'Link URL', 'macbeth' ),
        ],
    ]
] );