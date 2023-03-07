<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/new12.css">
	<title>MySQL4</title>
</head>
<body>
	<a href="/myfiles/mysql.php">BACK</a>
	<h1><ins></ins></h1>
	<form method="post" action="new12.php">
		<fieldset>
			<legend>SIGN IN</legend>
			<label for="fname">First Name:</label><br>
			<input type="text" name="fname" id="fname" required size="15" maxlength="15"><br>
			<label for="lname">Last Name:</label><br>
			<input type="text" name="lname" id="lname" required size="15" maxlength="15"><br>
			<label for="age">Age:</label><br>
			<input type="number" name="age" id="age" required><br>
			<label for="add">Address:</label><br>
			<input type="text" name="add" id="add" required size="15" maxlength="15"><br>
			<label for="email">Email Address:</label><br>
			<input type="email" name="email" id="email" required><br><br>
			<input type="submit" name="submit" value="SUBMIT">
			<input type="reset" name="reset" value="RESET">
		</fieldset>
	</form>
</body>
</html>