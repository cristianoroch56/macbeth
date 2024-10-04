<?php
/**
 * Macbeth Site Origin Headline
 * @var $instance
 */
?>
<?php
$backgroundColor = $instance['back_color'];
$headLine = $instance['headline_text'];
$subHeadLine = $instance['sub_headline_text'];

/* Style Headline */
$styleHeadLine = '';
$styleHeadLine = 'style="';
if($headLine['color'] != ''){
	$styleHeadLine .= 'color: '.$headLine['color'].'; ';
}

if($headLine['font_size'] != ''){
	$styleHeadLine .= 'font-size: '.$headLine['font_size'].'; ';
}

if($headLine['align'] != ''){
	$styleHeadLine .= 'text-align: '.$headLine['align'].'; ';
}
if($headLine['font_weight'] != ''){
	$styleHeadLine .= 'font-weight: '.$headLine['font_weight'].'; ';
}
$styleHeadLine .= '"';

/* Style Sub-Headline */
$styleSubHeadLine = '';
$styleSubHeadLine = 'style="';
if($subHeadLine['color'] != ''){
	$styleSubHeadLine .= 'color: '.$subHeadLine['color'].'; ';
}

if($subHeadLine['font_size'] != ''){
	$styleSubHeadLine .= 'font-size: '.$subHeadLine['font_size'].'; ';
}

if($subHeadLine['align'] != ''){
	$styleSubHeadLine .= 'text-align: '.$subHeadLine['align'].'; ';
}
if($subHeadLine['font_weight'] != ''){
	$styleSubHeadLine .= 'font-weight: '.$subHeadLine['font_weight'].'; ';
}
$styleSubHeadLine .= '"';

?>

<div class="titlewrap" style="background: <?php echo isset($backgroundColor)?$backgroundColor:''; ?>">
	<?php if($headLine['text'] != '') : ?>
		<<?php echo $headLine['tag'].' '.$styleHeadLine; ?>><?php echo $headLine['text']; ?></<?php echo $headLine['tag']; ?>>
	<?php endif; ?>

	<?php if($subHeadLine['text'] != '') : ?>
		<<?php echo $subHeadLine['tag'].' '.$styleSubHeadLine; ?>><?php echo $subHeadLine['text']; ?></<?php echo $subHeadLine['tag']; ?>>
	<?php endif; ?>
</div>