<?php
/**
 * Single Page (Default)
 * @package Macbeth
**/

get_header();
use Macbeth\Macbeth;
use Macbeth\Member;
global $macbeth;
?>
<div class="main-post-wrapper">
    <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();

    $author = get_field('author');
    if(isset($author->ID) && $author->ID != '') :
        $member = new Member($author->ID);
        $authorName = $member->name();
        $authorLink = $member->link();
        $authorImage = $member->image(array(150,150));
    endif;
        
?>
    <div class="blogpost-banner">
        <div class="topbanner">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
            <div class="bannertext">
                <div class="main">
                    <div class="textwrap">
                        <h3><?php echo get_the_title(); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>
    <div class="main">
        <div class="blogleftwrap">
            
            <?php the_content(); ?>

            <div class="pagesocial">
                <ul class="social_media">
                    <?php if($macbeth['email'] != '') : ?>
                    <li>
                        <a href="mail:<?php echo $macbeth['email']; ?>"><i class="fa fa-envelope"></i></a>
                    </li>
                    <?php endif; ?>

                    <?php if($macbeth['facebook'] != '') : ?>
                    <li>
                        <a href="<?php echo $macbeth['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <?php endif; ?>

                    <?php if($macbeth['twitter'] != '') : ?>
                    <li>
                        <a href="<?php echo $macbeth['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <?php endif; ?>


                    <?php if($macbeth['linkedin'] != '') : ?>
                    <li>
                        <a href="<?php echo $macbeth['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>

            <?php if(isset($author->ID) && $author->ID != '') : ?>
                <div class="authorbox">
                    <div><img src="<?php echo $authorImage; ?>"></div>
                    <h4>Author: <strong><?php echo $authorName; ?> | <?php echo get_the_date(); ?></strong></h4>
                    <a class="link" href="<?php echo $authorLink; ?>">Contact the author</a>
                </div>
            <?php endif; ?>

            <?php 
            $terms = get_terms( array(
                'taxonomy' => 'category',
                'hide_empty' => true,
            ) );
            ?>

            <div class="authorlink">
                <ul>
                    <?php foreach ($terms as $term) { ?>
                        <li><a href="#"><?php echo $term->name; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="blogrightwrap">
            <div class="blg-sidebar">
                <?php dynamic_sidebar('macbeth-blog-sidebar'); ?>
            </div>
        </div>

    </div>

    <?php
    endwhile; 
endif;
?>
</div>

<?php
get_footer();