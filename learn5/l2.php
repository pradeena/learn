<?php

$food = array('best'=>array('chicken','curd', 'banana'), 'better'=>array('fruits','carrot', 'pickel'));

//echo $food['better'][1];

foreach ($food as $element => $inner_item) {
	echo $element. '<br>';
	foreach ($inner_item as $items) {
		echo $items. '<br>';
	}
}
?>