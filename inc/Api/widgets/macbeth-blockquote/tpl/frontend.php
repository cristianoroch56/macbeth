<?php
/**
 * Macbeth Site Origin Blockquote
 * @var $instance
 */
?>
<?php
$blockQuote = $instance['macbeth_blockquote'];
$blockQuoteColor = $instance['macbeth_blockquote_color'];
if($blockQuoteColor != ''){
    $styleText = 'style="border-left: 4px solid '.$blockQuoteColor.'; color: '.$blockQuoteColor.';"';
}
?>

<?php if($blockQuote != '') : ?>
<blockquote <?php echo $styleText; ?>>
<?php echo $blockQuote; ?> 
</blockquote>
<?php endif; ?>