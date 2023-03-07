<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/new8.css">
	<title>MySQL1</title>
</head>
<body>
	<a href="/Project01/myfiles/myphp.php">BACK</a>
	<h1><ins>Creating MySQL connection and database</ins></h1>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	//Create connection!
	$conn = mysqli_connect($servername,$username,$password);
	//Check connection!
	if (!$conn){
		die("connection failed :".mysqli_connect_error());
	}
	//Create database!
	$sql="CREATE DATABASE MyDB";
	//Check database!
	if (mysqli_query($conn,$sql)){
		echo "Database created successfully";
	}
	else {
		echo "Error creating database :".mysqli_error($conn);
	}
	mysqli_close($conn);
?>
</body>
</html>