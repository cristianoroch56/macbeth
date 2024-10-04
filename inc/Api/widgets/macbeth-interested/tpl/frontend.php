<?php
/**
 * Macbeth Site Origin Interested
 * @var $instance
 */

 use Macbeth\Macbeth;
?>

<?php
$title = $instance['title'];
$subTitle = $instance['sub-title'];
$contacts = $instance['contact_repeater'];
$email = ($instance['email'] != '')?$instance['email']:Macbeth::contact('macbeth-contact-email');
?>
<div class="intbox">
    <h3><?php echo $title; ?></h3>
    <h4><?php echo $subTitle; ?></h4>
	<?php foreach($contacts as $contact) : ?>
    	<p><?php echo $contact['contact_text'] ?></p>
	<?php endforeach; ?>
    <a class="emailbtn" href="<?php echo $email; ?>">Email <i class="fa fa-envelope"></i></a>
</div>