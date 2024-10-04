<?php
/**
 * Post Loop Content
 * @package Macbeth
 */

$terms = get_the_terms( $post->ID, 'category' );
$classId = "";
foreach($terms as $term){
    $classId .= $term->slug." ";
}
?>
<div class="gallery-box element-item transition <?php echo $classId; ?>" data-category="transition">
    <div class="gallery-box-2">
        <div class="gallery-img">

            <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
            <div class="gallery-inner">
                <h4><?php echo get_the_title(); ?></h4>
                <a href="<?php echo get_the_permalink(); ?>" class="read-more"><i class="fa fa-long-arrow-right"></i>Read more</a>
            </div>

        </div>
    </div>
</div>
