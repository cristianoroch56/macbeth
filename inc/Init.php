<?php
/** 
 * @package Macbeth
**/

namespace Macbeth;
use Macbeth\PostType\PostType;

final class Init
{
	/**
	 * Store all the classes inside an array
	 * @return array Full list of classes
	 */
	public static function get_services()
	{
		return [
			Setup\Setup::class,
			Setup\Menus::class,
			Setup\Enqueue::class,
			Setup\Sidebar::class,
			Api\Customizer::class,
			Api\Shortcode::class,
			Api\Widget::class,
			Custom\Macbeth_Functions::class
		];
	}

	/**
	 * Loop through the classes, initialize them, and call the register() method if it exists
	 * @return
	 */
	public static function register_services()
	{
		foreach ( self::get_services() as $class ) {
			$service = self::instantiate( $class );
			if ( method_exists( $service, 'register') ) {
				$service->register();
			}
		}

		/** 
		 * Registration of Macbeth Custom Post Type 
		 * Note: Please use Singular name
		**/
		$testimonial = new PostType('Testimonial', 'dashicons-format-quote');
		$member = new PostType('member', 'dashicons-admin-users');
	}

	/**
	 * Initialize the class
	**/
	private static function instantiate( $class )
	{
		return new $class();
	}

}
