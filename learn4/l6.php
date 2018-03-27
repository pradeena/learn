<?php
$string = "This is our house.";
$string_word_count = str_word_count($string, 2);


$string_reversed =strrev($string);
$string_shuffled = str_shuffle($string);
$half = substr($string_shuffled, 0, 5);
echo $string_reversed;
?>