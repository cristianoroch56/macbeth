<?php
/** 
 * Macbeth Helper Class
 * @package Macbeth
**/
namespace Macbeth;

class Member
{
	
    public $id;

    public function __construct($memberId)
    {
        $this->id = $memberId;
    }
    
    public function name()
    {
        return get_the_title($this->id);
    }

    public function link()
    {
        return get_the_permalink($this->id);
    }

    public function image($size = array())
    {
        return get_the_post_thumbnail_url($this->id, $size);
    }

}