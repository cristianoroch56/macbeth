<?php 
/** 
 * Main Header
 * @package Macbeth
**/
use Macbeth\Macbeth;
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=1" />

    <title><?php
			$site_description = get_bloginfo( 'description', 'display' );
			$site_name = get_bloginfo( 'name' );
			
			/* For home page */
			if ( $site_description && ( is_home() || is_front_page() ) ):
				echo $site_name.' | '.$site_description; 
			endif;
			
			/* For other post & pages */
			if (!( is_home() ) && ! is_404() ):
				echo get_the_title().' | '.$site_name;
			endif;
		?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <div class="fix_wrap">
            <?php echo Macbeth::logo(); ?>
            
            <ul class="header_menu">
               <?php ubermenu( 'main' , array( 'menu' => 2 ) ); ?>

                <li><a class="popup" href="#enpop"><i class="fa fa-envelope"></i></a>
                    <div style="display:none">
                        <div id="enpop" class="popbox">
                            <div class="titlebar">
                                <h2>Get in touch</h2>
                            </div>
                            <div class="get_form">
                                <form id="signupForm3602"
                                    action="https://www.intouchcrm.co.uk/app/api/dc/default.aspx?s=682968C9-74BA-4C62-93CF-BD67BA77AFA2"
                                    method="post" onsubmit="return validateSignUpForm3602();">
                                    <ul>
                                        <li>
                                            <label for="Firstname">First Name *</label>
                                            <input name="Firstname" type="text" maxlength="250" />
                                        </li>

                                        <li>
                                            <label for="Lastname">Last Name *</label>
                                            <input name="Lastname" type="text" maxlength="250" />
                                        </li>

                                        <li>
                                            <label for="EmailAddress">Email Address *</label>
                                            <input name="EmailAddress" type="text" maxlength="250" />
                                        </li>

                                        <li>
                                            <label for="WorkTel">Work Telephone *</label>
                                            <input name="WorkTel" type="text" maxlength="250" />
                                        </li>

                                        <li>
                                            <label for="CustomField:15085:1">Are you interested in? *</label>
                                            <select name="CustomField:15085:1">
                                                <option value="0"> -- Please Select -- </option>
                                                <option value="42144">Financial services & advice</option>
                                                <option value="42142">Insuring a business</option>
                                                <option value="42143">Insuring a privately owned asset</option>
                                            </select>
                                        </li>

                                        <li>
                                            <label for="Notes">How can we help?</label>
                                            <textarea name="Notes" cols="30" rows="2"></textarea>
                                        </li>

                                        <li>
                                            <label for="CommsEMail">Please tick to confirm not SPAM</label>
                                            <input name="CommsEMail" type="checkbox" />
                                        </li>

                                    </ul>
                                    <div class="sbtn">
                                        <input type="submit" value="Submit"
                                            class="md-trigger button redtrigger largetrigger submit" />
                                    </div>
                                    <div class="close"><a class="closebtn" href="#">Close</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>

                <li><a class="popup" href="#phonepop"><i class="fa fa-phone"></i></a>
                    <div style="display:none">
                        <div id="phonepop" class="popbox">
                            <div class="titlebar">
                                <h2>Give us a call</h2>
                            </div>
                            <div class="call_btn">
                                <a href="tel:<?php echo Macbeth::contact('macbeth-contact-reading-number'); ?>" class="btn1"><i class="fa fa-phone"></i> Call our Reading Office: <?php echo Macbeth::contact('macbeth-contact-reading-number'); ?></a>
                                <a href="tel:<?php echo Macbeth::contact('macbeth-contact-london-number'); ?>" class="btn2"><i class="fa fa-phone"></i> Call our London Office: <?php echo Macbeth::contact('macbeth-contact-london-number'); ?></a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </li>

                <li><a href="#searchbox" class="popup"><i class="fa fa-search"></i></a>
                    <div style="display:none">
                        <div id="searchbox">
                            <?php echo Macbeth::searchForm(1); ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>