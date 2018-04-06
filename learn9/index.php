<?php
$offset = 0;
if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])){
	 $text = $_POST['text'];
     $search = $_POST['searchfor'];
     $replace =  $_POST['replacewith'];

     $search_length = strlen($search);

    if (!empty($text) && !empty($searchfor) && !empty($replacewith)) {
    	while ($strpos = strpos($text, $search, $offset)) {
    		echo $strpos. '<br>';
    		echo $offset = $strpos + $search_length . '<br>';
    	}
    }
}
?>

<form action="index.php" method="POST">
	<textarea name="text" rows="6", cols="30"></textarea><br>
	Search for:<br>
	<input type="text" name="searchfor"><br>
	Replace with:<br>
	<input type="test" name="replacewith"><br>
	<input type="submit" name="Find and Replace">
</form>