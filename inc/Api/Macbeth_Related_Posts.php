<?php
/**
 * Macbeth Related Post Widget
 * @package Macbeth
 */

class Macbeth_Related_Posts extends WP_Widget {
 
	function __construct() 
	{
		parent::__construct(
		
		// Base ID of your widget
		'mb_related_posts', 
		
		// Widget name will appear in UI
		__('Macbeth Related Post', 'macbeth_related_posts'), 
		
		// Widget description
		array( 'description' => __( 'Related post as per current post.', 'macbeth_related_posts' ), ) );
	}
 
	public function widget( $args, $instance ) 
	{
		$title = apply_filters( 'widget_title', $instance['title'] );
		$num = $instance['num'];
		
		echo '<h4>';
		if ( ! empty( $title ) ) :
			echo $args['before_title'] . $title . $args['after_title'];
		endif;
		echo '</h4>';

		global $post;
		$cats = get_the_category($post->ID);
		$postNotIn = explode(',', $post->ID);
		$categories = wp_list_pluck($cats, 'slug');
		$pArgs = array(
			'post_type' => 'post',
			'posts_per_page' => ($num)?$num:5,
			'post__not_in'	=> $postNotIn,
			'tax_query' => array(
				array(
				'taxonomy' => 'category',
				'terms' => $categories,
				'field' => 'slug',
				)
			)

		);
		
		$the_query = new WP_Query( $pArgs );
		if ( $the_query->have_posts() ) {
			echo '<ul>';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<li><a href="'.get_the_permalink().'">' . get_the_title() . '</a></li>';
			}
			echo '</ul>';
			wp_reset_postdata();
		} else {

		}
	}

	public function form( $instance ) 
	{
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( '', 'macbeth_related_posts' );
		}

		if ( isset( $instance[ 'num' ] ) ) {
			$num = $instance[ 'num' ];
		}
		else {
			$num = __( '5', 'macbeth_related_posts' );
		}

	?>
	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>

	<p>
		<label for="<?php echo $this->get_field_id("num"); ?>">
			<?php _e('Number of Posts to Show'); ?>:
			<input style="text-align: center;" id="<?php echo $this->get_field_id("num"); ?>" name="<?php echo $this->get_field_name("num"); ?>" type="text" value="<?php echo absint($instance["num"]); ?>" size='3' />
		</label>
	</p>
	<?php 
	}
     
	public function update( $new_instance, $old_instance ) 
	{
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['num'] = ( ! empty( $new_instance['num'] ) ) ? strip_tags( $new_instance['num'] ) : '';
		return $instance;
	}
}

function mb_load_widget() {
    register_widget( 'Macbeth_Related_Posts' );
}

add_action( 'widgets_init', 'mb_load_widget' );