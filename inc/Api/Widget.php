<?php
/**
 * SiteOrigin Widgets
 * @package Macbeth
 */

namespace Macbeth\Api;

class Widget 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register() 
	{
		add_action( 'siteorigin_widgets_widget_folders', array( $this, 'macbeth_siteorigin_widgets' ) );
	}

	/**
	 * List's all the Macbeth SiteOrigin Widgets
	 * @return array Full list of widgets
	 */
	public function macbeth_siteorigin_widgets( $folders ){
		$folders[] = get_template_directory() . '/inc/Api/widgets/';
		return $folders;
	}

}
