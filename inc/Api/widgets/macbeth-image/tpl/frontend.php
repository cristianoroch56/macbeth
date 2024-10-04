<?php
/**
 * Macbeth Site Origin Image
 * @var $instance
 */
?>
<?php
$image = wp_get_attachment_url($instance['image_box']);
$imageTitle = $instance['image_title'];
$imageUrl = $instance['image_url'];
/* Settings Variable */
$imageSettings = $instance['image_setting'];
$titleColor = $imageSettings['title_color'];
$backgroundColor = $imageSettings['title_background_color'];
?>

<div class="boxwrp">
	<img src="<?php echo $image; ?>"/>
	<?php if($imageTitle != '') : ?>
		<a href="<?php echo $imageUrl; ?>" style="background:<?php echo isset($backgroundColor)?$backgroundColor:''; ?>; color:<?php echo isset($titleColor)?$titleColor:''; ?>" class="boxbtn"><?php echo $imageTitle; ?>  <i class="fa fa-long-arrow-right"></i></a>
	<?php endif; ?>
</div>