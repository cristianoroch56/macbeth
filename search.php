<?php

get_header();
?>

<div class="main-wrapper">
	<div class="searchtitle">
		<div class="main">
			<h1>
				<?php _e( 'Search results: ', 'macbeth' ); ?> <?php echo '<strong>'.get_search_query().'</strong>'; ?>	
			</h1>
		</div>
	</div>

	<div class="main">
    	<div class="searchboxleft">
        	<ul>

			<?php 
			if ( have_posts() ) : 

				/* Start the Loop. */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content/content', 'search' );

				endwhile;
				
			else :

				get_template_part( 'template-parts/content/content', 'none' );

			endif;
			?>
			</ul>
		</div>

		<div class="searchright">

			<?php dynamic_sidebar('macbeth-search-sidebar'); ?>
			
		</div>
	</div>
</div>

<?php
get_footer();
