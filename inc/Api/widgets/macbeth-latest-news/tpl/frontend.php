<?php
/**
 * Macbeth Site Origin Latest News
 * @var $instance
 */
?>
<?php
$sectionTitle = $instance['section_title'];
$postInLoop = $instance['post_in_loop'];
$postQuery = $instance['post_query_loop'];
$processedQuery = siteorigin_widget_post_selector_process_query( $postQuery );
$query_result = new WP_Query( $processedQuery );
?>

<?php if($query_result->have_posts()) : ?>
<div class="latest-news">
	<h3><?php echo $sectionTitle; ?></h3>
	<div class="main">
		<div class="owl-carousel">
			<?php while($query_result->have_posts()) : $query_result->the_post(); ?>
			<div class="newscl">
				<div class="newsimg">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
				</div>
				<div class="newscnt">
					<p><?php echo wp_trim_words( get_the_content(), 15 ) ?></p>
					<a class="readmore" href="<?php the_permalink(); ?>"><i class="fa fa-long-arrow-right"></i> Read more</a>
				</div>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</div>
<?php endif; ?>