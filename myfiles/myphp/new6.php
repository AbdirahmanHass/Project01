<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/new6.css">
	<title>new6</title>
	<style>a.back {color: red;font-size: 2.5vw;font-family: algerian;}</style>
</head>
<body>
	<a class="back" href="/Project01/myfiles/myphp.php">BACK</a><br>
<?php
	$uname=$fname=$lname=$age=$gender=$nation=$tel=$email=$pass=$cpass="";
	$unameErr=$fnameErr=$lnameErr=$ageErr=$genderErr=$nationErr=$telErr=$emailErr=$passErr=$cpassErr1=$cpassErr2="";
	$unameErr2=$fnameErr2=$lnameErr2=$emailErr2="";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){//Checks if the request method is 'get' or 'post'.
		if (empty ($_POST["uname"])){$unameErr = "*Username is required!";}//Checks if the input is empty which then gives the error variable an error message.
			else {
				//preg_match function checks for the defined characters, digits and symbols.
				if(!preg_match("/^[a-z0-9A-Z-' ]*$/",$_POST["uname"])) {$unameErr2 = "*Only letters,numbers and white space allowed!";}
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
				//filter_varfunction filters the input for the defined parameter(email)
				if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {$emailErr2 = "*Invalid Email format!";}
					else {$email = test_input($_POST["email"]);}
			}
		if (empty ($_POST["pass"])){$passErr = "*Password is required!";}
			else {$pass = test_input($_POST["pass"]);}
		if (empty ($_POST["cpass"])){$cpassErr1 = "*Confirm Your Password!";}
			elseif ($_POST["pass"] != $_POST["cpass"]) {$cpassErr2 = "*The Passwords Do Not Match!";}
			else {$cpass = test_input($_POST["cpass"]);}
	}
	
	function test_input($data){
		$data = trim($data);//Removes double spaces, tabs and new lines.
		$data = stripslashes($data);//Removes slashes.
		$data = htmlspecialchars($data);//replaces '>' and '<' with '&gt;' and '&lt;'.
		return $data;
	}
?>
	<form method="post" action="insert1.php" autocomplete="on">
		<fieldset>
			<legend>SIGN IN</legend>
			<table>
				<tr>
					<td><label for="uname">Username:</label></td>
					<td>
						<input type="text" id="uname" name="uname" value="<?php echo $uname; ?>" required><br>
						<span class="error"><?php echo $unameErr;?>
						<span class="error"><?php echo $unameErr2;?>
					</td>
				</tr>
				<tr>
					<td><label for="fname">First Name:</label></td>
					<td>
						<input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" required><br>
						<span class="error"><?php echo $fnameErr;?>
						<span class="error"><?php echo $fnameErr2;?>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Last Name:</label></td>
					<td>
						<input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" required><br>
						<span class="error"><?php echo $lnameErr;?>
						<span class="error"><?php echo $lnameErr2;?>
					</td>
				</tr>
				<tr>
					<td><label for="age">Age:</label></td>
					<td><input type="number" id="age" name="age" value="<?php echo $age; ?>"><br><span class="error" required><?php echo $ageErr;?></td>
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
						<select id="nation" name="nation" required>
							<option value="Kenya" <?php if(isset($nation)&&$nation=="Kenya")echo"selected"; ?> >Kenya</option>
							<option value="Uganda" <?php if(isset($nation)&&$nation=="Uganda")echo"selected"; ?> >Uganda</option>
							<option value="Sudan" <?php if(isset($nation)&&$nation=="Sudan")echo"selected"; ?> >Sudan</option>
							<option value="Ethiopia" <?php if(isset($nation)&&$nation=="Ethiopia")echo"selected"; ?> >Ethiopia</option>
							<option value="Eritrea" <?php if(isset($nation)&&$nation=="Eritrea")echo"selected"; ?> >Eritrea</option>
							<option value="Tanzania" <?php if(isset($nation)&&$nation=="Tanzania")echo"selected"; ?> >Tanzania</option>
							<option value="Somalia" <?php if(isset($nation)&&$nation=="Somalia")echo"selected"; ?> >Somalia</option>
							<option value="Djibouti" <?php if(isset($nation)&&$nation=="Djibouti")echo"selected"; ?> >Djibouti</option>
							<option value="Ruanda" <?php if(isset($nation)&&$nation=="Ruanda")echo"selected"; ?> >Ruanda</option>
							<option value="Burundi" <?php if(isset($nation)&&$nation=="Burundi")echo"selected"; ?> >Burundi</option>
							<option value="Congo" <?php if(isset($nation)&&$nation=="Congo")echo"selected"; ?> >Congo</option>
							<option value="Egypt" <?php if(isset($nation)&&$nation=="Egypt")echo"selected"; ?> >Egypt</option>
							<option value="Zambia" <?php if(isset($nation)&&$nation=="Zambia")echo"selected"; ?> >Zambia</option>
							<option value="Zimbabwe" <?php if(isset($nation)&&$nation=="Zimbabwe")echo"selected"; ?> >Zimbabwe</option>
							<option value="Angola" <?php if(isset($nation)&&$nation=="Angola")echo"selected"; ?> >Angola</option>
							<option value="Nigeria" <?php if(isset($nation)&&$nation=="Nigeria")echo"selected"; ?> >Nigeria</option>
							<option value="Algeria" <?php if(isset($nation)&&$nation=="Algeria")echo"selected"; ?> >Algeria</option>
							<option value="SouthAfrica" <?php if(isset($nation)&&$nation=="SouthAfrica")echo"selected"; ?> >South Africa</option>
							<option value="Madagascar" <?php if(isset($nation)&&$nation=="Madagascar")echo"selected"; ?> >Madagascar</option>
							<option value="Libya" <?php if(isset($nation)&&$nation=="Libya")echo"selected"; ?> >Libya</option>
							<option value="Tunisia" <?php if(isset($nation)&&$nation=="Tunisia")echo"selected"; ?> >Tunisia</option>
							<option value="Chad" <?php if(isset($nation)&&$nation=="Chad")echo"selected"; ?> >Chad</option>
						</select><br><span class="error"><?php echo $nationErr;?>
					</td>
				</tr>
				<tr>
					<td><label for="tel">Telephone:</label></td>
					<td>
						<input type="tel" id="tel" name="tel" value="<?php echo $tel; ?>" required><br>
						<span class="error"><?php echo $telErr;?>
					</td>
				</tr>
				<tr>
					<td><label for="email">Email Address:</label></td>
					<td>
						<input type="text" id="email" name="email" value="<?php echo $email; ?>" required><br>
						<span class="error"><?php echo $emailErr;?>
						<span class="error"><?php echo $emailErr2;?>
					</td>
				</tr>
				<tr>
					<td><label for="pass">Password:</label></td>
					<td>
						<input type="password" id="pass" name="pass" value="<?php echo $pass; ?>" required><br>
						<span class="error"><?php echo $passErr;?>
					</td>
				</tr>
				<tr>
					<td><label for="cpass">Confirm Password:</label></td>
					<td>
						<input type="password" id="cpass" name="cpass" value="<?php echo $cpass; ?>" required><br>
						<span class="error"><?php echo $cpassErr1;?>
						<span class="error"><?php echo $cpassErr2;?>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" class="submit" name="submit" value="SUBMIT">
			<input type="reset" class="reset" name="reset" value="RESET">
		</fieldset>
	</form>
</body>
</html>