<?php 
/** 
 * Main Footer
 * @package Macbeth
**/
use Macbeth\Macbeth;
global $macbeth;
global $footerMenu;
?>

<div class="search_btm">
    <div class="fix_wrap">
        <img src="<?php echo get_site_icon_url('', get_stylesheet_directory_uri().'/assests/images/m-logo.png)') ?>" />
        <p><span>Talk to us today, we’re here to help:</span> Reading: <a
                href="tel:<?php echo Macbeth::contact('macbeth-contact-reading-number'); ?>">
                <?php echo Macbeth::contact('macbeth-contact-reading-number'); ?></a>
            London: <a
                href="tel:<?php echo Macbeth::contact('macbeth-contact-london-number'); ?>"><?php echo Macbeth::contact('macbeth-contact-london-number'); ?></a>
        </p>
        <?php 
        /* Search Form */
        echo Macbeth::searchForm(2);

        /* Footer Menu */
        $footerMenuArg = array( 
            'theme_location' => 'footer_menu', 
            'menu_class' => 'search_menu', 
            'menu_id' => 'search_menu',
        );

        if($footerMenu['footerMenu'] != '') : 
            $footerMenuArg['menu'] = $footerMenu['footerMenu'];
        endif;
        
        wp_nav_menu( $footerMenuArg );
        ?>

        <div class="chartered_icon">
            <img src="<?php echo Macbeth::footer('macbeth-top-footer-image') ?>" />
        </div>
    </div>
</div>

<footer>
    <div class="fix_wrap">
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

        <?php
        $footerLinks = get_theme_mod('macbeth_footer_links', '');
        $links = "";
        if(count($footerLinks) > 0) :
            foreach ($footerLinks as $footerLinks) {
                $links .= ' | ';
                $links .= '<a href="'.$footerLinks['link_url'].'">'.$footerLinks['link_text'].'</a>';
            }
        endif;
        ?>

        <p>
            <?php echo Macbeth::footer('macbeth-footer-copyright-field-top'); ?> <?php echo $links; ?>
        </p>

        <!-- Bottom Footer -->
        <p>
            <?php echo Macbeth::footer('macbeth-footer-copyright-field'); ?>
        </p>

    </div>
</footer>
<script type="text/javascript">
function validateSignUpForm3602() {
    var signupForm3602 = document.getElementById('signupForm3602');
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (signupForm3602['Firstname'].value == '') {
        alert('First Name is required.');
        signupForm3602['Firstname'].focus();
        return false;
    }
    if (signupForm3602['Lastname'].value == '') {
        alert('Last Name is required.');
        signupForm3602['Lastname'].focus();
        return false;
    }
    if (signupForm3602['EmailAddress'].value == '') {
        alert('Email Address is required.');
        signupForm3602['EmailAddress'].focus();
        return false;
    }
    if (reg.test(signupForm3602['EmailAddress'].value) == false) {
        alert('Invalid Email Address format.');
        return false;
    }
    if (signupForm3602['WorkTel'].value == '') {
        alert('Work Telephone is required.');
        signupForm3602['WorkTel'].focus();
        return false;
    }
    if (signupForm3602['trap'].value != '') {
        return false;
    }
    return true;
}
</script>

<?php wp_footer(); ?>
</body>

</html>