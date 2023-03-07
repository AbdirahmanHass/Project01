<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/new10.css">
	<title>MySQL3</title>
</head>
<body>
	<a href="new11.php">BACK</a>
	<h1><ins>INSERTING VALUES INTO THE TABLE</ins></h1>
	
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "college";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if (!$conn){
		die("Connection failed: ".mysqli_connect_error());
	}
	
	$fname = $_REQUEST["fname"];
	$lname = $_REQUEST["lname"];
	$age = $_REQUEST["age"];
	$add = $_REQUEST["add"];
	$email = $_REQUEST["email"];
	
	$sql = "INSERT INTO staff VALUES ('$fname','$lname','$age','$add','$email')";
	
	if (mysqli_query($conn,$sql)){
	  echo "New record created successfully";
	}
	else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	
?>

</body>
</html>