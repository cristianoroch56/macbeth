<?php
/**
 * Single Page (Member)
 * @package Macbeth
**/

get_header();
use Macbeth\Macbeth;
$details = get_field('additional_details');
$bnrImg = get_field('main_header_image');
?>
<div class="main-post-wrapper">
 
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();        
?>

<?php if($bnrImg != '') : ?>
    <div class="memberpost-banner">
        <div class="topbanner">
            <img src="<?php echo $bnrImg; ?>" />
            <div class="bannertext">
                <div class="main">
                    <div class="textwrap">
                        <h3><?php echo get_the_title(); ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="titlewrap" style="background:#f2f2f2">
            <h2><?php echo $details['designation']; ?></h2>
        </div>
    </div>
<?php endif; ?>

    <div class="clear"></div>
    <div class="main">

        <div class="memberleftwrap">

            <?php the_content(); ?>

        </div>

        <div class="memberrightwrap">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
            <div class="connectwith_wrap">
                <h4>Connect with <?php echo get_the_title(); ?></h4>
                <div class="pagesocial">
                    <ul class="social_media">
                        <?php if($details['email'] != '') : ?>
                        <li>
                            <a href="mail:<?php echo $details['email']; ?>"><i class="fa fa-envelope"></i></a>
                        </li>
                        <?php endif; ?>

                        <?php if($details['facebook'] != '') : ?>
                        <li>
                            <a href="<?php echo $details['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <?php endif; ?>

                        <?php if($details['twitter'] != '') : ?>
                        <li>
                            <a href="<?php echo $details['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <?php endif; ?>

                        <?php if($details['linkedin'] != '') : ?>
                        <li>
                            <a href="<?php echo $details['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
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