<?php
$match = 'pradeena';

if(isset($_POST['password'])){
	$password = $_POST['password'];
    if(!empty($password)){
    	if($password == $match){
    		echo "correct";
    	}
    	else{
    		echo "incorrect";
    	}
    }
    else{
    	echo "fill";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<form method="POST" action="index.php">
	Password:<br>
	<input type="password" name="password">
	<input type="submit" value="submit">
</form>
</body>
</html>