<?php

if(isset($_GET['date']) && isset($_GET['month']) && isset($_GET['day'])){
	$date = $_GET['date'];
	$month = $_GET['month'];
	$day = $_GET['day'];

	if(!empty($date) && !empty($month) && !empty($day)){
		echo "Today is" .$day. ' ' .$month. ' ' .$date;
	}
		else{
			echo "fill the fields.";
		}
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>

<form action="index.php" method="GET">
	Date:<br>
    <input type="text" name="date"><br>
    Month:<br>
    <input type="text" name="month"><br>
    Day:<br>
    <input type="text" name="day"><br>
    <input type="submit" value="submit">
</form>



</body>
</html>