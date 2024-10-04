<?php
/** 
 * Macbeth Helper Class
 * @package Macbeth
**/
namespace Macbeth;

class Macbeth
{
	
	public static function logo()
    {
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		if($custom_logo_id != ''):
			$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
			$logo = '<a href="' .get_site_url(). '" class="logo"><img src="' . esc_url( $custom_logo_url ) . '"/></a>';
		else:
			$logo = '<h2>' .get_bloginfo(). '</h2>';
		endif;

		return $logo;
	}
	
	public static function searchForm($style)
	{
		if($style == 1):
		$search = ' <form role="search" method="get" class="search-form" action="/">
					<input name="s" class="searchfld" placeholder="Start typing..." type="search" required>
						<div class="searchbtndv">
							<button type="submit" class="searchbtn"><i class="fa fa-search"></i>Search</button>
						</div>
					</form>';
		endif;

		if($style == 2):
		$search = ' <form role="search" method="get" class="search-form" action="/">
					<div class="search_box">
						<input name="s" class="searchfld" placeholder="Search now" type="search" required>
						<button type="submit" class="search_btn"><i class="fa fa-search"></i> Search</button>
					</div>
					</form>';
		endif;

		if($style == 3):
		$search = ' <form role="search" method="get" class="search-form" action="/">
					<input name="s" class="searchfld" placeholder="Start typing..." type="search" required>
						<div class="searchbtndv">
							<button type="submit" class="searchbtn"><i class="fa fa-search"></i>Search</button>
						</div>
					</form>';
		endif;
		
		return $search;
	}

	public static function contact($id)
	{
		$link = get_theme_mod($id);
		return $link;
	}

	public static function footer($id)
	{
		$link = get_theme_mod($id);
		return $link;
	}

	public static function default($id)
	{
		$link = get_theme_mod($id);
		return $link;
	}

	public static function macbeth_posts_pagination() {
		the_posts_pagination( array(
			'mid_size'  => 2,
			'prev_text' => __( 'Back', 'macbeth' ),
			'next_text' => __( 'Onward', 'macbeth' ),
		) );
	}

}