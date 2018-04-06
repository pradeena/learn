<?php  
// $rand=0;
if(isset($_POST['dice'])){
	$rand = rand(1, 6);
	echo "rolled".$rand;
}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>dice rol</title>
</head>
<body>
<form action="index.php" method="POST">
	<input type="submit" name="dice" value="roll a dice">
</form>
</body>
</html>