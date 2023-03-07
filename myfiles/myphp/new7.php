<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css/new7.css">
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>NEW7</title>
	</head>
	<body>
		<a href="/Project01/myfiles/myphp.php">BACK</a>
		<h1><ins>NEW7</ins></h1>
<?php
	$uname=$fname=$lname=$age=$gender=$nation=$tel=$email=$pass=$cpass=$web="";
	$unameErr=$fnameErr=$lnameErr=$ageErr=$genderErr=$nationErr=$telErr=$emailErr=$passErr=$cpassErr1=$webErr="";
	$unameErr2=$fnameErr2=$lnameErr2=$emailErr2=$cpassErr2=$webErr2="";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty ($_POST["uname"])){$unameErr = "*Username is required!";}
			else {
				if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST["uname"])) {$unameErr2 = "*Only letters and white space allowed!";}
					else {$uname = test_input($_POST["uname"]);}
			}
		if (empty ($_POST["fname"])){$fnameErr = "*First Name is required!";}
			else {
				if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST["fname"])) {$fnameErr2 = "*Only letters and white space allowed!";}
					else {$fname = test_input($_POST["fname"]);}
			}
		if (empty ($_POST["lname"])){$lnameErr = "*Last Name is required!";}
			else {
				if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST["lname"])) {$lnameErr2 = "*Only letters and white space allowed!";}
					else {$lname = test_input($_POST["lname"]);}
			}
		if (empty ($_POST["age"])){$ageErr = "*Age is required!";}
			else {$age = test_input($_POST["age"]);}
		if (empty ($_POST["gender"])){$genderErr = "*Gender is required!";}
			else {$gender = test_input($_POST["gender"]);}
		if (empty ($_POST["nation"])){$nationErr = "*Nationality is required!";}
			else {$nation = test_input($_POST["nation"]);}
		if (empty ($_POST["tel"])){$telErr = "*Telephone Number is required!";}
			else {$tel = test_input($_POST["tel"]);}
		if (empty ($_POST["email"])){$emailErr = "*Email Address is required!";}
			else {
				if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {$emailErr2 = "*Invalid Email format!";}
					else {$email = test_input($_POST["email"]);}
			}
		if (empty ($_POST["pass"])){$passErr = "*Password is required!";}
			else {$pass = test_input($_POST["pass"]);}
		if (empty ($_POST["cpass"])){$cpassErr1 = "*Confirm Your Password!";}
			elseif ($_POST["pass"] != $_POST["cpass"]) {$cpassErr2 = "*The Passwords Do Not Match!";}
			else {$cpass = test_input($_POST["cpass"]);}
		if (empty ($_POST["web"])){$webErr = "*Web Address is required!";}
			else {
				if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST["web"])) {
					$webErr2 = "*Invalid URL!";
				}
					else {$web = test_input($_POST["web"]);}
			}
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">
		<fieldset>
			<legend>SIGN IN</legend>
			<table>
				<tr>
					<td><label for="uname">Username:</label></td>
					<td>
						<input type="text" id="uname" name="uname" value="<?php echo $uname; ?>"><br>
						<span class="error"><?php echo $unameErr;?>
						<span class="error"><?php echo $unameErr2;?>
					</td>
				</tr>
				<tr>
					<td><label for="fname">First Name:</label></td>
					<td>
						<input type="text" id="fname" name="fname" value="<?php echo $fname; ?>"><br>
						<span class="error"><?php echo $fnameErr;?>
						<span class="error"><?php echo $fnameErr2;?>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Last Name:</label></td>
					<td>
						<input type="text" id="lname" name="lname" value="<?php echo $lname; ?>"><br>
						<span class="error"><?php echo $lnameErr;?>
						<span class="error"><?php echo $lnameErr2;?>
					</td>
				</tr>
				<tr>
					<td><label for="age">Age:</label></td>
					<td><input type="number" id="age" name="age" value="<?php echo $age; ?>"><br><span class="error"><?php echo $ageErr;?></td>
				</tr>
				<tr>
					<td><label for="gender">Gender:</label></td>
					<td>
						<input type="radio" id="male" name="gender" <?php if(isset($gender)&&$gender=="male")echo"checked"; ?> value="male">
						<label for="male" class="gender">Male</label><br>
						<input type="radio" id="female" name="gender" <?php if(isset($gender)&&$gender=="female")echo"checked"; ?> value="female">
						<label for="female" class="gender">Female</label><br>
						<input type="radio" id="other" name="gender" <?php if(isset($gender)&&$gender=="other")echo"checked"; ?> value="other">
						<label for="other" class="gender">Other</label><br>
						<span class="error"><?php echo $genderErr;?>
					</td>
				</tr>
				<tr>
					<td><label for="nation">Nationality:</label></td>
					<td>
						<select id="nation" name="nation">
							<option value="Kenya">Kenya</option>
							<option value="Uganda">Uganda</option>
							<option value="Sudan">Sudan</option>
							<option value="Ethiopia">Ethiopia</option>
							<option value="Eritrea">Eritrea</option>
							<option value="Tanzania">Tanzania</option>
							<option value="Somalia">Somalia</option>
							<option value="Djibouti">Djibouti</option>
							<option value="Ruanda">Ruanda</option>
							<option value="Burundi">Burundi</option>
							<option value="Congo">Congo</option>
							<option value="Egypt">Egypt</option>
							<option value="Zambia">Zambia</option>
							<option value="Zimbabwe">Zimbabwe</option>
							<option value="Angola">Angola</option>
							<option value="Nigeria">Nigeria</option>
							<option value="Algeria">Algeria</option>
							<option value="SouthAfrica">South Africa</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Libya">Libya</option>
							<option value="Tunisia">Tunisia</option>
							<option value="Chad">Chad</option>
						</select><br><span class="error"><?php echo $nationErr;?>
					</td>
				</tr>
				<tr>
					<td><label for="tel">Telephone:</label></td>
					<td>
						<input type="tel" id="tel" name="tel" value="<?php echo $tel; ?>"><br>
						<span class="error"><?php echo $telErr;?>
					</td>
				</tr>
				<tr>
					<td><label for="email">Email Address:</label></td>
					<td>
						<input type="text" id="email" name="email" value="<?php echo $email; ?>"><br>
						<span class="error"><?php echo $emailErr;?>
						<span class="error"><?php echo $emailErr2;?>
					</td>
				</tr>
				<tr>
					<td><label for="pass">Password:</label></td>
					<td>
						<input type="password" id="pass" name="pass" value="<?php echo $pass; ?>"><br>
						<span class="error"><?php echo $passErr;?>
					</td>
				</tr>
				<tr>
					<td><label for="cpass">Confirm Password:</label></td>
					<td>
						<input type="password" id="cpass" name="cpass" value="<?php echo $cpass; ?>"><br>
						<span class="error"><?php echo $cpassErr1;?>
						<span class="error"><?php echo $cpassErr2;?>
					</td>
				</tr>
				<tr>
					<td><label for="uname">Website:</label></td>
					<td>
						<input type="text" id="web" name="web" value="<?php echo $web; ?>"><br>
						<span class="error"><?php echo $webErr;?>
						<span class="error"><?php echo $webErr2;?>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" class="submit" name="submit" value="SUBMIT">
			<input type="reset" class="reset" name="reset" value="RESET">
		</fieldset>
	</form>
<?php
	if ($uname!=""&&$fname!=""&&$lname!=""&&$age!=""&&$gender!=""&&$nation!=""&&$tel!=""&&$email!=""&&$pass!=""&&$cpass!=""&&$pass==$cpass){
		outputy();
	}
	function outputy(){
		global $uname,$fname,$lname,$age,$gender,$nation,$tel,$email,$pass,$cpass;
		echo "<h2>Your input is:</h2><br>";
		echo "<span>Username: </span>".$uname."<br>";
		echo "<span>First Name: </span>".$fname."<br>";
		echo "<span>Last Name: </span>".$lname."<br>";
		echo "<span>Age: </span>".$age."<br>";
		echo "<span>Gender: </span>".$gender."<br>";
		echo "<span>Nationality: </span>".$nation."<br>";
		echo "<span>Telephone Number: </span>".$tel."<br>";
		echo "<span>Email Address: </span>".$email."<br>";
		echo "<span>Password: </span>".$pass."<br>";
		echo "<span>Confirmed Password: </span>".$cpass."<br>";
	}
?>
	</body>
</html>