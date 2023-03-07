<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/new9.css">
	<title>MySQL2</title>
</head>
<body>
	<a href="/myfiles/mysql.php">BACK</a>
	<h1><ins>Creating MySQL table</ins></h1>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="Bank2";
	//Create connection!
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	//Check connection!
	if (!$conn){
		die("connection failed :".mysqli_connect_error());
	}
	//Create table with fields!
	$sql = "CREATE TABLE MyClients(
		id INT (6) UNSIGNED PRIMARY KEY,
		firstname VARCHAR (30) NOT NULL,
		lastname VARCHAR (30) NOT NULL,
		email VARCHAR (50) NOT NULL,
		age INT (2) NOT NULL
	)";
	//Check table!
	if (mysqli_query($conn, $sql)) {
		echo "Table MyClients created successfully";
	}
	else {
		echo "Error creating table: " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>
</body>
</html>