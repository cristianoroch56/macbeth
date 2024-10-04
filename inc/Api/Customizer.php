<?php
/**
 * Theme Customizer
 *
 * @package Macbeth
 */

namespace Macbeth\Api;
use Macbeth\Api\Customizer\Contact;
use Macbeth\Api\Customizer\MessageBox;
use Macbeth\Api\Customizer\Footer;
use Macbeth\Api\Customizer\Popup;
use Macbeth\Api\Customizer\ProductColor;
use Macbeth\Api\Customizer\DefaultValues;
use Macbeth\Api\Customizer\_404;
/**
 * Customizer class
 */
class Customizer 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register() 
	{
		add_action( 'customize_register', array( $this, 'setup' ) );
	}

	/**
	 * Store all the classes inside an array
	 * @return array Full list of classes
	 */
	public function get_classes()
	{
		return [
			Contact::class,
			MessageBox::class,
			Footer::class,
			Popup::class,
			ProductColor::class,
			DefaultValues::class,
			_404::class,
		];
	}

	/**
	 * Add postMessage support for site title and description for the Theme Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	public function setup( $wp_customize ) 
	{
		foreach ( $this->get_classes() as $class ) {
			$service = new $class;
			if ( method_exists( $class, 'register') ) {
				$service->register( $wp_customize );
			}
		}
	}

}
