<?php
/**
 * Macbeth Site Origin Testimonials
 * @var $instance
 */
?>
<?php
$testimonials = new WP_Query(array(
	'post_type'      => 'testimonial',                              
	'order'          => 'DESC',
	'orderby'        => 'date',
	'posts_per_page' => -1
));
$style = $instance['testimonial_style']; 
$color = $instance['testimonial_background']; 
if($style == 'testimonial1'){
	$extraClass = "";
}else{
	$extraClass = "centertext";
}
?>

<div class="testimonials_wrap <?php echo $extraClass; ?>" style="background:<?php echo isset($color)?$color:''; ?>">
 	<div class="main">
	 	<div class="owl-carousel testimonialslide">
		 
			<?php 
				if ($testimonials->have_posts()) :
					while ($testimonials->have_posts()) : $testimonials->the_post();

					$thumbnail = get_the_post_thumbnail_url();
					$title = get_the_title();
					$content = get_the_content();
					$designation = get_field('designation', $testimonials->ID);
			?>		<div class="slide">
						<div class="test-left">
							<img src="<?php echo $thumbnail; ?>"/>
						</div>
						<div class="test-right">
							<p><?php echo $content; ?></p>
							<h4><?php echo $title; ?></h4>
							<h4><?php echo $designation; ?></h4>
						</div>	
					</div>
			<?php		
					endwhile;
				endif;
			?>
			
		</div>
	</div>
</div>