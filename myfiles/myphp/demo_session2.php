<?php
	//Start the session
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/demo_session2.css">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title>DEMO SESSION2</title>
</head>
<body>
	<a href="demo_session1.php">BACK</a><br>
	<h1><ins>PRINTING SESSION VARIABLES</ins></h1>
<?php
	//Calling variables that were set in demo_session1
	//Using echo
	echo "<h3>ECHO</h3>";
	echo "Your favourite color is ".$_SESSION["favcolor"].".<br>";
	echo "Your favourite animal is ".$_SESSION["favanimal"].".<br>";
	//Using print_r() function
	echo "<h3>PRINT_R</h3>";
	print_r($_SESSION);
?>
	<br>
	<br>
	<br>
	<br>
	<a href="demo_session3.php" align="right">NEXT</a>
</body>
</html>