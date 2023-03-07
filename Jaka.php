<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>JAKA</title>
		<style>
			body {
				background-color: black;
				color: cyan;
				font-weight: bold;
			}
			a {
				color: red;
				font-size: 2.4vw;
				font-family: algerian;
				text-align: right;
			}
			h1 {
				background-color: gray;
				padding: 0.2vw;
				text-align: center;
				font-family: algerian;
				color: red;
				font-style: italic;
				font-size: 4vw;
			}
			fieldset {
				border-width: 0.7vw;
				border-color: yellow;
				width: 70%;
			}
			legend {
				color: lime;
				font-size: 3vw;
				text-align: center;
				font-family: arial;
			}
			label {
				font-size: 2vw;
				font-weight: bold;
			}
			table {
				padding: 0.2vw;
			}
			input {
				height: 2.4vw;
				font-size: 2vw;
				width: auto;
				background-color: black;
				color: white;
			}
			select {
				background-color: black;
				color: white;
				height: 3vw;
				width: 18vw;
				font-size: 2vw;
			}
			.gender {
				font-size: 2vw;
				color: white;
			}
			.error {
				color: red;
				font-style: italic;
			}
			.submit,.reset {
				background-color: green;
				color: navy;
				height: 4vw;
				width: auto;
				font-weight: bold;
				font-size: 3vw;
				border-width: 0.3vw;
			}
			.submit {
				border-color: lime;
			}
			.reset {
				border-color: lime;
				float: right;
			}
			#ahaa {
				font-size: 2vw;
				color: yellow;
				font-style: normal;
				font-family: calibri;
			}
		</style>
	</head>
	<body>
		<h1><ins>JAKA</ins></h1>
<?php
	$uname=$fname=$lname=$age=$gender=$nation=$tel=$email=$pass=$cpass="";
	$unameErr=$fnameErr=$lnameErr=$ageErr=$genderErr=$nationErr=$telErr=$emailErr=$passErr=$cpassErr1="";
	$unameErr2=$fnameErr2=$lnameErr2=$ageErr2=$emailErr2=$cpassErr2="";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty ($_POST["uname"])){$unameErr = "*Username is required!";}
			else {
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
			else {
				if($_POST["age"] < 18){$ageErr2 = "*Under the age of 18 are not allowed!";}
					else {$age = test_input($_POST["age"]);}
			}
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
			else {
				$pass = test_input($_POST["pass"]);
			}
		if (empty ($_POST["cpass"])){$cpassErr1 = "*Confirm Your Password!";}
			elseif ($_POST["pass"] != $_POST["cpass"]) {$cpassErr2 = "*The Passwords Do Not Match!";}
			else {
				$cpass = test_input($_POST["cpass"]);
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
						<input type="text" id="uname" name="uname" value="<?php echo $uname; ?>" size="20"><br>
						<span class="error"><?php echo $unameErr;?></span>
						<span class="error"><?php echo $unameErr2;?></span>
					</td>
				</tr>
				<tr>
					<td><label for="fname">First Name:</label></td>
					<td>
						<input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" size="20"><br>
						<span class="error"><?php echo $fnameErr;?></span>
						<span class="error"><?php echo $fnameErr2;?></span>
					</td>
				</tr>
				<tr>
					<td><label for="lname">Last Name:</label></td>
					<td>
						<input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" size="20"><br>
						<span class="error"><?php echo $lnameErr;?></span>
						<span class="error"><?php echo $lnameErr2;?></span>
					</td>
				</tr>
				<tr>
					<td><label for="age">Age:</label></td>
					<td>
						<input type="number" id="age" name="age" value="<?php echo $age; ?>" size="15"><br>
						<span class="error"><?php echo $ageErr;?></span>
						<span class="error"><?php echo $ageErr2;?></span>
					</td>
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
						<span class="error"><?php echo $genderErr;?></span>
					</td>
				</tr>
				<tr>
					<td><label for="nation">Nationality:</label></td>
					<td>
						<select id="nation" name="nation">
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
						</select><br><span class="error"><?php echo $nationErr;?></span>
					</td>
				</tr>
				<tr>
					<td><label for="tel">Telephone:</label></td>
					<td>
						<input type="tel" id="tel" name="tel" value="<?php echo $tel; ?>" size="20"><br>
						<span class="error"><?php echo $telErr;?></span>
					</td>
				</tr>
				<tr>
					<td><label for="email">Email Address:</label></td>
					<td>
						<input type="text" id="email" name="email" value="<?php echo $email; ?>" size="30"><br>
						<span class="error"><?php echo $emailErr;?></span>
						<span class="error"><?php echo $emailErr2;?></span>
					</td>
				</tr>
				<tr>
					<td><label for="pass">Password:</label></td>
					<td>
						<input type="password" id="pass" name="pass" value="<?php echo $pass; ?>" size="25"><br>
						<span class="error"><?php echo $passErr;?></span>
					</td>
				</tr>
				<tr>
					<td><label for="cpass">Confirm Password:</label></td>
					<td>
						<input type="password" id="cpass" name="cpass" value="<?php echo $cpass; ?>" size="25"><br>
						<span class="error"><?php echo $cpassErr1;?></span>
						<span class="error"><?php echo $cpassErr2;?></span>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" class="submit" name="submit" value="SUBMIT">
			<input type="reset" class="reset" name="reset" value="RESET">
		</fieldset>
	</form>
<?php
	$king = 1;
	if ($uname!=""&&$fname!=""&&$lname!=""&&$age!=""&&$gender!=""&&$nation!=""&&$tel!=""&&$email!=""&&$pass!=""&&$cpass!=""&&$pass==$cpass){
		outputy();
	}
	function outputy(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "college";
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if (!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}
		global $uname,$fname,$lname,$age,$gender,$nation,$tel,$email,$pass;
		//SQL CODE !!!!!
		$sql = "INSERT INTO signin 
				VALUES ('0','$uname','$fname','$lname','$age','$gender','$nation','$tel','$email','$pass')";
		//SQL CODE !!!!!
		if (mysqli_query($conn,$sql)){
			$name = $fname." ".$lname;
			echo "<h3>Welcome, $name</h3><br>";
			echo "<p class='link'>Click here to <a href='login.php'>Login</a></p>";
			global $king;
			$king = 2;
		}
		else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
		echo "<p class='link'>Click here to <a href='jaka.php'>register</a> again.</p>";
		}
		mysqli_close($conn);
	}
	if ($king != 2){
		echo ("<h3 id='ahaa'>Already have an account? <span id='signinLink'><a href='login.php'>SIGNIN</a></span></h3>");
	}
?>
	</body>
</html>