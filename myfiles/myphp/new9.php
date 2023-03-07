<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/new9.css">
	<title>MySQL2</title>
</head>
<body>
	<a href="/Project01/myfiles/myphp.php">BACK</a>
	<h1><ins>Creating MySQL table</ins></h1>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="MyDB";
	//Create connection!
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	//Check connection!
	if (!$conn){
		die("connection failed :".mysqli_connect_error());
	}
	//Create table with fields!
	$sql = "CREATE TABLE MyGuest(
		id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR (30) NOT NULL,
		lastname VARCHAR (30) NOT NULL,
		email VARCHAR (50),
		reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";
	//Check table!
	if (mysqli_query($conn, $sql)) {
		echo "Table MyGuests created successfully";
	}
	else {
		echo "Error creating table: " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>
</body>
</html>