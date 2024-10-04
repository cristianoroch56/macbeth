<?php

namespace Macbeth\Setup;

/**
 * Menus
**/
class Menus
{
    public function register()
    {
        add_action( 'after_setup_theme', array( $this, 'macbeth_menus' ) );
    }

    public function macbeth_menus()
    {
        /*
            Register all your menus here
        */
        register_nav_menus(
            array(
              'main_menu' => __( 'Main Menu' ),
              'footer_menu' => __( 'Footer Menu' ),
              'extra_menu' => __( 'Extra Menu' )
            )
        );
    }
}
