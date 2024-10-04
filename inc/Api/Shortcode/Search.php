<?php
/**
 * Shortcode: Search
 * @package Macbeth
 */

namespace Macbeth\Api\Shortcode;

use Macbeth\Api\Shortcode;


class Search 
{

	public function register() 
	{
		add_shortcode( 'demo', array( $this, 'demo' ) );
	}

	public function demo($atts) {
		$a = shortcode_atts( array(
			'title' => 'Current openings',
		), $atts );
	
		$html = '';
		$html = '<div class="testtt">'.$a['title'].'</div>';
		
		return $html;
	}

}