<?php

namespace Macbeth\Setup;

/**
 * Enqueue Style & Scripts
 */
class Enqueue 
{

	public function register() 
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'macbeth_enqueue_scripts' ) );
	}

	public function macbeth_enqueue_scripts() 
	{
		
		// CSS's
		wp_enqueue_style('open-sans-font', 'https://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans:300,400,700');
		wp_enqueue_style('font-awesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('jquery-fancybox', get_template_directory_uri().'/assests/css/jquery.fancybox.css');
		wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assests/css/owl.carousel.min.css');
		wp_enqueue_style('compiled-main-css', get_template_directory_uri().'/assests/css/main.css');
		wp_enqueue_style('compiled-responsive-css', get_template_directory_uri().'/assests/css/responsive.css');

		// JS's
		wp_enqueue_script('jquery-min-js', get_template_directory_uri().'/assests/js/jquery.min.js', array(), '1.0.0', true);
		wp_enqueue_script('jquery-fancybox-js', get_template_directory_uri().'/assests/js/jquery.fancybox.js', array(), '1.0.0', true);
		wp_enqueue_script('owl-carousal-js', get_template_directory_uri().'/assests/js/owl.carousel.js', array(), '1.0.0', true);
		wp_enqueue_script('isotope-js', get_template_directory_uri().'/assests/js/isotope.pkgd.js', array(), '1.0.0', true);
		wp_enqueue_script('custom-js', get_template_directory_uri().'/assests/js/custom.js', array(), '1.0.0', true);

	}
}
