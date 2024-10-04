<?php
/**
 * Shortcode
 * @package Macbeth
 */

namespace Macbeth\Api;

use Macbeth\Api\Shortcode\Search;

/**
 * Customizer class
 */
class Shortcode 
{
	/**
	 * Run setup class will run add_shortcode for all the
	 * shortcode created
	 * @return
	 */
	public function register() 
	{
		$this->setup();
	}

	/**
	 * Store all the classes(shortcode) inside an array
	 * @return array Full list of classes
	 */
	public function get_classes()
	{
		return [
			Search::class
		];
	}

	/**
	 * Run's all the Macbeth Shortcode Class
	 */
	public function setup() 
	{
		foreach ( $this->get_classes() as $class ) {
			$service = new $class;
			if ( method_exists( $class, 'register') ) {
				$service->register();
			}
		}
	}

}
