<?php
function add($number1, $number2){
	$result = $number1 + $number2;
	return $result;
}

function divide($number1, $number2){
	$result = $number1 / $number2;
	return $result;
}
function multiply($number1, $number2){
	$result = $number1 * $number2;
	return $result;
}
//echo add(10 , 10);
$sum = multiply(add(10, 10), divide(5, 5));
echo $sum;
?>