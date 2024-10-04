<?php
/**
 * Macbeth Site Origin Product PopUp
 * @var $instance
 */
use Macbeth\Macbeth;
?>
<?php 
$productType = $instance['product_type'];
$buttonTitle = $instance['btn_title'];
$popupTitle = $instance['popup_title'];

$bTilte = ($buttonTitle != '')?$buttonTitle:Macbeth::default('macbeth-popup-button');
$pTitle = ($popupTitle != '')?$popupTitle:Macbeth::default('macbeth-popup-title');

if($productType == "0"):

global $post;
$currentPost = $post->ID;
if( is_page() && $post->post_parent > 0 ) { 
    $parentIds = get_post_ancestors($post->ID);
    $parentId = $parentIds[0];
}else{
    $parentId = $post->ID;
}

$parent = new WP_Query(array(
	'post_type'      => 'page',
	'post_status'    => 'publish',
	'post_parent'    => $parentId,                               
	'order'          => 'ASC',
	'orderby'        => 'menu_order',
	'posts_per_page' => -1,
	'post__not_in' => array($currentPost),
));

$randNum = mt_rand(10,999);
?>
<a href="#related_product_<?php echo $randNum; ?>" class="large-btn popup"><?php echo $bTilte; ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
</a>
<div style="display:none">
<div id="related_product_<?php echo $randNum; ?>" class="related_product_popup popbox">
	<h3><?php echo $pTitle; ?></h3>
	<?php if($parent->have_posts()) : ?>
	<ul>
		<?php while ($parent->have_posts()) : $parent->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>

	</ul>
	<?php else: ?>
		<h1>Oops! No product found.</h1>
	<?php unset($parent); wp_reset_postdata(); endif; ?>

	</div>
</div>
<?php else : 
$parent = new WP_Query(array(
	'post_type'        => 'page',
	'posts_per_page'   => -1,
	'post_status'    => 'publish',                             
	'order'          => 'ASC',
	'orderby'        => 'menu_order',
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'page_type',
			'field'    => 'slug',
			'terms'    => $productType,
		),
	),
));

$randNum = mt_rand(10,999);
?>

<a href="#related_product_<?php echo $randNum; ?>" class="large-btn popup"><?php echo $bTilte; ?> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
</a>
<div style="display:none">
<div id="related_product_<?php echo $randNum; ?>" class="related_product_popup popbox">
	<h3><?php echo $pTitle; ?></h3>
	<?php if($parent->have_posts()) : ?>
	<ul>
		<?php while ($parent->have_posts()) : $parent->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; ?>

	</ul>
	<?php unset($parent); wp_reset_postdata(); endif; ?>

	</div>
</div>
<?php endif; ?>