<?php
/** 
 * @package Macbeth
**/

namespace Macbeth\Setup;

/**
 * Sidebar.
 */
class Sidebar
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'widgets_init', array( $this, 'widgets_init' ) );
    }

    /*
        Define the Macbeth Sidebar
    */
    public function widgets_init()
    {
        register_sidebar( array(
            'name' => esc_html__('Macbeth Search Page', 'macbeth'),
            'id' => 'macbeth-search-sidebar',
            'description' => esc_html__('Default sidebar for search page', 'macbeth'),
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ) );

        register_sidebar( array(
            'name' => esc_html__('Macbeth Blog Page', 'macbeth'),
            'id' => 'macbeth-blog-sidebar',
            'description' => esc_html__('Default sidebar for blog page', 'macbeth'),
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ) );
    }
}
