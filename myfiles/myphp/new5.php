<?php error_reporting (E_ALL ^ E_NOTICE);?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/new5.css">
		<title>new5</title>
	</head>
	<body>
		<a href="/Project01/myfiles/myphp.php">BACK</a>
		<?php
			$fname = $lname = $age = $gender = $tel = $email = $pass = "";
			function test_input($data){
				$data=trim($data);
				$data=stripslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}
			if ($_SERVER["REQUEST_METHOD"] = "POST") {
				$fname=test_input($_POST["fname"]);
				$lname=test_input($_POST["lname"]);
				$age=test_input($_POST["age"]);
				$gender=test_input($_POST["gender"]);
				$tel=test_input($_POST["tel"]);
				$email=test_input($_POST["email"]);
				$pass=test_input($_POST["pass"]);
			}
		?>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="on">
			<fieldset>
				<legend>CONTACTS</legend>
				<label for="fname">First Name:</label><br>
				<input type="text" id="fname" name="fname" required size="12" maxlength="12"><br>
				<label for="lname">Last Name:</label><br>
				<input type="text" id="lname" name="lname" required size="12" maxlength="12"><br>
				<label for="age">Age:</label><br>
				<input type="number" id="age" name="age" required><br>
				<label for="tel">Telephone::</label><br>
				<input type="tel" id="tel" name="tel" required size="10" maxlength="10"><br>
				<label for="email">Email Address:</label><br>
				<input type="email" id="email" name="email" required><br>
				<label for="gender">Gender:</label><br>
					<input type="radio" id="male" name="gender" value="Male">
					<label class="gender" for="male">Male</label><br>
					<input type="radio" id="female" name="gender" value="Female">
					<label class="gender" for="female">Female</label><br>
					<input type="radio" id="other" name="gender" value="Other">
					<label class="gender" for="other">Other</label><br>
				<label for="pass">Password:</label><br>
				<input type="password" id="pass" name="pass" required size="16" maxlength="16"><br>
				<input type="submit" class="submit" value="SUBMIT">
				<input type="reset" class="reset" value="RESET">
			</fieldset>
		</form>
		<?php
			echo "<h2>Your input is:</h2><br>";
			echo $fname."<br>";
			echo $lname."<br>";
			echo $age."<br>";
			echo $gender."<br>";
			echo $tel."<br>";
			echo $email."<br>";
			echo $pass."<br>";
		?>
	</body>
</html>