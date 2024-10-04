<?php
/** 
 * @package Macbeth
**/

include( get_template_directory().'/inc/Api/kirki/kirki.php' );
include( get_template_directory().'/inc/Api/Kirki.php' );
include( get_template_directory().'/inc/Api/Macbeth_Related_Posts.php' );

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

if ( class_exists( 'Macbeth\\Init' ) ) :
	Macbeth\Init::register_services();
endif;

 

