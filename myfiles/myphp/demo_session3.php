<?php
	//Start the session
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/demo_session3.css">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title>DEMO SESSION3</title>
</head>
<body>
	<a href="demo_session1.php">BACK</a><br>
	<h1><ins>MODIFYING SESSION VARIABLES</ins></h1>
<?php
	//modifying a variable is done by simply overwriting it
	echo "<h3>PREVIOUSLY SET VARIABLES</h3>";
		echo "Your favourite color is ".$_SESSION["favcolor"].".<br>";
		echo "Your favourite animal is ".$_SESSION["favanimal"].".<br>";
		print_r($_SESSION);
	echo "<h3>MODIFYING COLOR</h3>";
		$_SESSION["favcolor"]="Yellow";
		echo "Your favourite color is ".$_SESSION["favcolor"].".<br>";
		echo "Your favourite animal is ".$_SESSION["favanimal"].".<br>";
		print_r($_SESSION);
	echo "<h3>MODIFYING ANIMAL</h3>";
		$_SESSION["favanimal"]="Cheetah";
		echo "Your favourite color is ".$_SESSION["favcolor"].".<br>";
		echo "Your favourite animal is ".$_SESSION["favanimal"].".<br>";
		print_r($_SESSION);
?>
	<br>
	<br>
	<br>
	<br>
	<a href="demo_session4.php" align="right">NEXT</a>
</body>
</html>