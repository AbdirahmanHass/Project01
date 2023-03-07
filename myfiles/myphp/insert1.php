<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/insert1.css">
	<title>MySQL3</title>
</head>
<body>
	<a href="new6.php">BACK</a>
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
	
	$uname = $_REQUEST["uname"];
	$fname = $_REQUEST["fname"];
	$lname = $_REQUEST["lname"];
	$age = $_REQUEST["age"];
	$gender = $_REQUEST["gender"];
	$nation = $_REQUEST["nation"];
	$tel = $_REQUEST["tel"];
	$email = $_REQUEST["email"];
	$pass = $_REQUEST["pass"];
	
	$sql = "INSERT INTO signin VALUES ('0','$uname','$fname','$lname','$age','$gender','$nation','$tel','$email','$pass')";
	
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