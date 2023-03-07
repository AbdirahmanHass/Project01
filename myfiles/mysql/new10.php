<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/new10.css">
	<title>MySQL3</title>
</head>
<body>
	<a href="/myfiles/mysql.php">BACK</a>
	<h1><ins>INSERTING VALUES INTO THE TABLE</ins></h1>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Bank2";
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if (!$conn){
		die("Connection failed: ".mysqli_connect_error());
	}
	$sql = "INSERT INTO myclients (id,firstname,lastname,email,age)
			VALUES ('254766','Abdirahman','Hassan','carbide75@gmail.com',26),
			('388263','Kevin','Wamalua','sorfmore@gmail.com',31),
			('290852','Janet','Kalamba','janetico@gmail.com',21),
			('692347','Mary','Kotini','mobila75@gmail.com',24),
			('245873','Karen','Fabiano','crabgama75@gmail.com',26),
			('976512','Ben','Cole','gotinmburg@gmail.com',23),
			('900347','Caleb','Baraza','probo65@gmail.com',25),
			('654253','Shadrack','Kipchumba','marathimbia@gmail.com',29),
			('652543','Charles','Onada','glatabada@gmail.com',23),
			('743365','Brandon','Yeri','moistimia@gmail.com',23),
			('543234','Arnold','Shawn','shawnama67@gmail.com',31),
			('652453','Martin','Makau','martinez98@gmail.com',32),
			('234535','Rajab','Kumar','limponia@gmail.com',23),
			('256788','Colins','Vivi','castvio@gmail.com',24),
			('756476','Mouris','Maina','maina090@gmail.com',27),
			('765445','Amir','Said','cargobondo@gmail.com',21),
			('834564','Peter','Parker','spidernama@gmail.com',20),
			('134643','Chris','Evans','captainamara@gmail.com',27),
			('282826','Bruce','Wayne','batjedu@gmail.com',24),
			('724565','Clark','Kent','likerian@gmail.com',28),
			('644456','Joshua','Razor','ctrimi98@gmail.com',26)";
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