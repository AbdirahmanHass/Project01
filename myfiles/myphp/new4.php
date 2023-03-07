<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>
			NEW4
		</title>
		<style>
			body {
				background-color: black;
				color: lime;
				font-weight: bold;
				font-size: 1.4;
			}
			h1,h2,h3,h4 {
				color: red;
				font-family: algerian;
			}
			form {
				background-color: brown;
				padding: 0.5vw;
			}
			fieldset {
				border-color: black;
				border-width: 0.3vw;
				width: 60%;
			}
			legend {
				font-size: 3vw;
				font-family: algerian;
				font-weight: bold;
				font-style: italic;
				color: yellow;
				text-align: right;
			}
			label {
				font-weight: bold;
				color: aqua;
			}
			input {
				height: 30;
				width: auto;
				font-size: 2vw;
				background-color: black;
				color: white;
			}
			select {
				height: 35;
				width: 200;
				font-size: 2vw;
				color: white;
				background-color: black;
			}
			.submit {
				height: 40;
				width: 140;
				font-weight: bold;
				background-color: green;
				color: yellow;
				font-family: arial;
			}
			.reset {
				height: 40;
				width: 140;
				font-weight: bold;
				background-color: yellow;
				color: green;
				font-family: arial;
			}
			a {
				color: red;
				font-family: algerian;
				font-size: 2.5vw;
			}
		</style>
	</head>
	<body>
		<a href="/Project01/myfiles/myphp.php">BACK</a>
		<form action="welcome.php" method="post">
			<fieldset>
				<legend>CONTACTS</legend>
				<label for="fname">First Name:</label><br>
				<input type="text" id="fname" name="fname" required><br>
				<label for="lname">Last Name:</label><br>
				<input type="text" id="lname" name="lname" required><br>
				<label for="age">Age:</label><br>
				<input type="number" id="age" name="age" required><br>
				<label for="tel">Telephone::</label><br>
				<input type="tel" id="tel" name="tel" required><br>
				<label for="email">Email Address:</label><br>
				<input type="email" id="email" name="email" required><br>
				<label for="pass">Password:</label><br>
				<input type="password" id="pass" name="pass" required><br>
				<input type="submit" class="submit" value="SUBMIT">
				<input type="reset" class="reset" value="RESET">
			</fieldset>
		</form>
	</body>
</html>