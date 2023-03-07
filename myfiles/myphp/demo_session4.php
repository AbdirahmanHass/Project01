<?php
	//Start the session
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/demo_session4.css">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title>DEMO SESSION4</title>
</head>
<body>
	<a href="/myfiles/index4.html">HOME</a><br>
	<a href="demo_session1.php">BACK</a><br>
	<h1><ins>DESTROYING SESSION</ins></h1>
<?php
	//Removes all session variables
	session_unset();
	//Destroys the session
	session_destroy();
	//Checking if session is working
	echo "<h3>CHECKING IF SESSION IS WORKING</h3>";
	print_r($_SESSION);
?>
</body>
</html>