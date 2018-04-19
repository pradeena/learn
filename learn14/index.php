<?php
$color = array('red','blue','green');
foreach ($color as $a) {
	echo "$a";
}
sort($color);
echo "<ul>";
foreach ($color as $b) {
	echo "<li>$b</li>";
}
echo "</ul>";
?>