<?php
/**
 * Macbeth Site Origin Button
 * @var $instance
 */
?>
<?php
$title = $instance['title'];
$subtitle = $instance['subtitle'];
$url = ($instance['url'] != '')?sow_esc_url_raw($instance['url']):'#';
$setting = $instance['button_setting'];
$size = $setting['size'];
$backgroundColor = $setting['background_color'];
$textColor = $setting['text_color'];
$showIcon = $setting['show_icon'];

if($size == 'small'){
	$extraClass = 'smallbtn';
}else{
	$extraClass = 'large-btn';
}


/* Style Button */
$styleBtn = '';
$styleBtn = 'style="';
if($textColor != ''){
	$styleBtn .= 'color: '.$textColor.'; ';
}

if($backgroundColor != ''){
	$styleBtn .= 'background: '.$backgroundColor.'; ';
}
$styleBtn .= '"';
?>

<?php if($size != 'extralarge'): ?>
<a href="<?php echo $url; ?>" class="<?php echo $extraClass; ?>" <?php echo $styleBtn; ?>><?php echo $title; ?> <?php if($showIcon != 1){ ?><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php } ?>
</a>
<?php endif; ?>

<?php if($size == 'extralarge'): ?>
<a href="<?php echo $url; ?>" class="widebtn">
<div><strong><?php echo $title; ?></strong></div>
	<span><?php echo $subtitle; ?> <?php if($showIcon != 1){ ?><i class="fa fa-long-arrow-right"></i><?php } ?></span>
</a>
<?php endif; ?>