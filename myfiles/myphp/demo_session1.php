<?php
	//Start the session
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/demo_session1.css">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title>DEMO SESSION1</title>
</head>
<body>
	<a href="/myfiles/myphp.php">BACK</a><br>
	<h1><ins>SETTING SESSION VARIABLES</ins></h1>
<?php
	//Set session variables
	$_SESSION["favcolor"]="Green";
	$_SESSION["favanimal"]="Cat";
	echo "Session variables are set!";
?>
	<br>
	<br>
	<br>
	<br>
	<a href="demo_session2.php" align="right">NEXT</a>
</body>
</html>