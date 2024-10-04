<?php
/** 
 * Page Template (Default)
 * @package Macbeth
**/

get_header();
?>
<div class="main-wrapper">
<?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            the_content();
        endwhile; 
    endif;
?>
</div>
<?php
get_footer();
?>