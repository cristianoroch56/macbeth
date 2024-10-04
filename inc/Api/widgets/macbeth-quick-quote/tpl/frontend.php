<?php
/**
 * Macbeth Site Origin Quick Quote
 * @var $instance
 */
?>

<?php
$style = $instance['style'];
$title = $instance['title'];
$listStyle = $instance['listsetting'];
$imageStyle = $instance['imagesetting'];

$readingNumber = get_theme_mod('macbeth-contact-reading-number');
$londonNumber = get_theme_mod('macbeth-contact-london-number');
?>
<div class="get_qwrap">
	<div class="titlebgwrap">
		<h3><?php echo $title; ?></h3>	
		<p>Reading: <?php echo $readingNumber; ?> / London: <?php echo $londonNumber; ?></p>
	</div>

	<?php if($style == 'imagestyle' && $imageStyle['image'] != ''): ?>
		<div class="imagewrap">
			<img src="<?php echo wp_get_attachment_url($imageStyle['image']); ?>" />
		</div>
	<?php endif; ?>

	<?php if($style == 'liststyle'): ?>
	<div class="get_gray">
		<h3><?php echo $listStyle['title']; ?></h3>
		<ul>
			<?php
			if ( ! empty( $listStyle['item_repeater'] ) ) {
				$repeater_items = $listStyle['item_repeater'];
				foreach( $repeater_items as $index => $repeater_item ) {
			?>
			
			<li><a href="<?php echo $repeater_item['item_url']; ?>"><?php echo $repeater_item['item_text']; ?> <i class="fa fa-long-arrow-right"></i></a></li>
			<?php
				}
			}
			?>
		</ul>
	</div>
	<?php endif; ?>


	<?php if($style == 'imagestyle'): ?>
	<div class="get_gray img_qck_qt">
		<h3><?php echo $imageStyle['title']; ?></h3>
		<ul>
			<li><a href="<?php echo $imageStyle['url']; ?>"><?php echo $imageStyle['url_text']; ?> <i class="fa fa-long-arrow-right"></i></a></li>
		</ul>
	</div>
	<?php endif; ?>

</div>