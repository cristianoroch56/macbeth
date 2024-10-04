<?php
/**
 * 404 Template (Page not found)
 * @package Macbeth
**/

get_header();

$image404 = get_theme_mod('macbeth-404-error-image');
?>
<div class="main-wrapper mbeth-404">
    <img src="<?php echo ($image404 != '')?$image404:get_stylesheet_directory_uri().'/assests/images/404_error.jpg'; ?>" alt="" class="mbeth-404-err">
</div>
<?php
get_footer();