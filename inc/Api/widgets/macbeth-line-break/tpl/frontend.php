<?php
/**
 * Macbeth Site Origin Button
 * @var $instance
 */
?>
<?php
$lineBreakCount = $instance['line_break'];
if($lineBreakCount == ''){
	$lineBreakCount = 1;
}
for($i=1; $i<=$lineBreakCount; $i++)
{
	echo "<br/>";
}