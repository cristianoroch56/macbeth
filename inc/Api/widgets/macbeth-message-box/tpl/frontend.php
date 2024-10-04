<?php
/**
 * Macbeth Site Origin Message Box
 * @var $instance
 */
?>

<?php 
$title = $instance['title'];
$subtitle = $instance['subtitle'];
$backgroundColor = $instance['background_color'];
$form = get_theme_mod('macbeth-message-box-form');
?>
<div class="contactfrmwrap">
	<div class="main">
		<div class="cntlft">
			<?php if($title != '') : ?>
				<h2><?php echo $title; ?></h2>	
			<?php endif; ?>

			<?php if($subtitle != '') : ?>
				<p><?php echo $subtitle; ?></p>
			<?php endif; ?>
		</div>
		<?php echo do_shortcode($form); ?>
	</div>
</div>