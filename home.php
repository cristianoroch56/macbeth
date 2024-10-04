<?php
/**
 * Home Template (Actually Blog Listing)
 * @package Macbeth
**/

use Macbeth\Macbeth;

get_header();
$catFilter = "";
if(isset($_GET['c']) && $_GET['c'] != ''){
    $catFilter = $_GET['c'];
}

$catArgs = array(
    'taxonomy'      => 'category',
    'parent'        => 0, // get top level categories
    'orderby'       => 'name',
    'order'         => 'ASC',
    'hierarchical'  => 1,
    'pad_counts'    => 0
);

$categoriesArray = get_categories( $catArgs );
$categories = wp_list_pluck($categoriesArray, 'name', 'slug');
?>


<div class="main">
    <div class="tab-filter">

        <!-- All Categories -->
        <div class="button-group filters-button-group">
            <button class="button"><a href="?c=" <?php echo ($catFilter == '')?'class="active"':''; ?>>All</a></button>
            <?php foreach($categories as $cKey => $cValue) : ?>
                <button class="button"><a href="?c=<?php echo $cKey ?>" <?php echo ($cKey == $catFilter)?'class="active"':''; ?>><?php echo $cValue ?></a></button>
            <?php endforeach; ?>
        </div>

        <h5>Filter articles:</h5>
        <div class="grid tab-left">
            <?php 
                if ( have_posts() ) : 
                global $wp_query;
                $args = $wp_query->query_vars;

                if ($catFilter != '') {
                    $taxQuery = array(
                        array (
                            'taxonomy'  => 'category',
                            'field'     => 'slug',
                            'terms'     => $catFilter,
                        )
                    );
                    $args = array_merge( $args, array( 'tax_query' => $taxQuery ) );
                }
                query_posts( $args );
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content/content', 'post' );

                endwhile;
                else:
            
                    get_template_part( 'template-parts/content/content', 'none' ); 

                endif;
            ?>
        </div>
        <div class="tab-right">
            <?php dynamic_sidebar('macbeth-blog-sidebar'); ?>
        </div>
    </div>
</div>

<?php
get_footer();