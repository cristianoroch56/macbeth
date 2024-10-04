<?php
/**
 * Macbeth Site Origin Headers
 * @var $instance
 */
?>
<?php
$style = $instance['header_style'];
/* Content Variables */ 
$headerContent = $instance['header_content']; 
$headerTitle = $headerContent['header_title'];
$headerImage = $headerContent['header_image'];
$headerDescription = wp_kses_post($headerContent['header_description']);
/* Setting Variables */
$headerSetting = $instance['header_setting'];
$headerTextColor = $headerSetting['header_text_color'];
$headerBackgroundColor = $headerSetting['header_background_color'];
if($style == 'header2'){
	$extraClass = "textleft";
}elseif($style == 'header3'){
	$extraClass = "textright";
}else{
	$extraClass = "";
}
?>

<div class="topbanner <?php echo $extraClass; ?>">
	<img src="<?php echo wp_get_attachment_url($headerImage); ?>"/>
	<div class="bannertext">
		<div class="main">
			<div class="textwrap" style="background:<?php echo isset($headerBackgroundColor)?$headerBackgroundColor:''; ?>">
				<h3 style="color:<?php echo isset($headerTextColor)?$headerTextColor:''; ?>"><?php echo $headerTitle; ?></h3>
				<?php if($style != 'header1'): ?>
				<p style="color:<?php echo isset($headerTextColor)?$headerTextColor:''; ?>"><?php echo $headerDescription; ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>