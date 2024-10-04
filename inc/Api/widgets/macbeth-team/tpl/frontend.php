<?php
/**
 * Macbeth Site Origin Team
 * @var $instance
 */
?>
<?php
$members = new WP_Query(array(
	'post_type'      => 'member',                              
	'order'          => 'ASC',
	'orderby'        => 'date',
	'posts_per_page' => -1
));
?>

<?php if ($members->have_posts()) : ?>
<div class="teamwrap">
	<?php while ($members->have_posts()) : $members->the_post(); 
	print_r($posts);
	$id = get_the_ID();
	$thumbnail = get_the_post_thumbnail_url();
	$title = get_the_title();
	$content = get_the_content();
	$additionalFields = get_field('additional_details', $members->ID);
	$designation = $additionalFields['designation'];
	$email = $additionalFields['email'];
	$facebook = $additionalFields['facebook'];
	$twitter = $additionalFields['twitter'];
	$linkedin = $additionalFields['linkedin'];
	?>
    <div class="cl">
        <a class="popup" href="#popup1_<?php echo $id; ?>"><img src="<?php echo $thumbnail; ?>" /></a>
        <div style="display:none">
            <div id="popup1_<?php echo $id; ?>" class="popbox teampopup" style="display: none;">
                <div class="titlebar">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $designation; ?></p>
                </div>
                <div class="testimonials-inner">
                    <div class="left-box">
						<?php the_content(); ?>
                    </div>
                    <div class="right-box">
                        <div class="test imonials-img">
                            <img
                                src="<?php echo $thumbnail; ?>" />
                        </div>
                        <footer>
                            <ul class="social_media">

								<?php if($email != ''): ?>
									<li>
										<a href="mail:<?php echo $email; ?>"><i class="fa fa-envelope"></i></a>
									</li>
								<?php endif; ?>

								<?php if($facebook != ''): ?>
									<li>
										<a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
									</li>
								<?php endif; ?>
								
								<?php if($twitter != ''): ?>
									<li>
										<a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
									</li>
								<?php endif; ?>

								<?php if($linkedin != ''): ?>
									<li>
										<a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
									</li>
								<?php endif; ?>
                            </ul>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<?php endif; wp_reset_query(); ?>