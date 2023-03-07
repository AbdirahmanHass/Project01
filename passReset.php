<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PASSWORD RESET</title>
		<style>
			body {
				background-color: #55aa22;
			}
			h1 {
				font-size: 2vw;
				font-family: algerian;
				color: #22ff22;
				font-weight: bold;
			}
			label {
				font-weight: bold;
				color: #ff44ff;
				font-size: 1.5vw;
			}
			input {
				background-color: #000000;
				color: #ff0000;
				height: 2vw;
				width: 24vw;
				font-size: 1.5vw;
			}
			.error {
				color: #ff0000;
				font-style: italic;
			}
			.camp {
				background-color: #816654;
				color: #ff5481;
				height: 3vw;
				width: 10vw;
			}
			#ram {
				background-color: #000000;
				margin: 10vw 30vw auto 10vw;
				border: 0.2vw groove #22aaff;
				box-shadow: 0px 16px 32px 0px rgba(256,0,0,0.7);
				padding: 1vw;
			}
			p.link,.form {
				font-size: 2vw;
				font-weight: bold;
				color: #000000
				font-style: italic;
				margin-left: 10vw;
			}
			#back {
				font-size: 3vw;
				font-weight: bold;
				color: #ff0000;
				background-color: #000000;
				border: 0.2vw ridge #0000ff;
				position: fixed;
				top: 2vw;
				left: 2vw;
				box-shadow: 0px 8px 16px 0px rgba(0,0,256,0.7);
				width: 3vw;
				text-align: center;
				box-sizing: border-box;
			}
		</style>
	</head>
	<body>
<?php
	$uname=$email=$npass=$cnpass="";
	$unameErr=$emailErr=$npassErr=$cnpassErr="";
	$unameErr2=$emailErr2=$cnpassErr2="";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["uname"])){$unameErr = "*Username is required!";}
			else {if(!preg_match("/^[a-z0-9A-Z-' ]*$/",$_POST["uname"])) {$unameErr2 = "*Only letters,numbers and white space allowed!";}
				else {
					$uname = test_input($_POST["uname"]);
				}
		}
		if (empty ($_POST["email"])){$emailErr = "*Email Address is required!";}
			else {if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {$emailErr2 = "*Invalid Email format!";}
				else {$email = test_input($_POST["email"]);}
		}
		if (empty ($_POST["npass"])){$npassErr = "*Password is required!";}
			else {$npass = test_input($_POST["npass"]);}
		if (empty ($_POST["cnpass"])){$cnpassErr1 = "*Confirm Your Password!";}
			elseif ($_POST["npass"] != $_POST["cnpass"]) {$cnpassErr2 = "*The Passwords Do Not Match!";}
			else {$cnpass = test_input($_POST["cnpass"]);}
	}
	function test_input($data){
		$data = stripslashes($data);
		$data = trim($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
		<a id="back" href="login.php">=</a>
		<div id="ram">
			<h1>PASSWORD RESET</h1>
			<form method="post" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<label for="uname">Username</label><br>
				<input type="text" id="uname" name="uname" value="<?php echo $uname; ?>"><br>
				<span class="error"><?php echo $unameErr; ?></span>
				<span class="error"><?php echo $unameErr2; ?></span><br>
				<label for="email">Email Address</label><br>
				<input type="text" id="email" name="email" value="<?php echo $email; ?>"><br>
				<span class="error"><?php echo $emailErr; ?></span>
				<span class="error"><?php echo $emailErr2; ?></span><br>
				<label for="npass">New Password</label><br>
				<input type="password" id="npass" name="npass" value="<?php echo $npass; ?>"><br>
				<span class="error"><?php echo $npassErr; ?></span>
				<label for="cnpass">Confirm Password</label><br>
				<input type="password" id="cnpass" name="cnpass" value="<?php echo $cnpass; ?>"><br>
				<span class="error"><?php echo $cnpassErr; ?></span>
				<span class="error"><?php echo $cnpassErr2; ?></span><br>
				<input type="submit" class="camp" name="submit" value="SUBMIT">
				<input type="reset" class="camp" name="reset" value="RESET">
			</form>
		</div>
		<?php
			if ($uname!=""&&$email!=""&&$npass!=""&&$cnpass!=""&&$npass==$cnpass){
				kala();
			}
			function kala(){
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "college";
				$conn = mysqli_connect($servername,$username,$password,$dbname);
				if (!$conn){
					die ("Connection failed!".mysqli_connect_error());
				}
				global $uname,$email,$npass,$cnpass;
				$query    = "SELECT * FROM `signin` WHERE username='$uname'
							AND email='$email'";
				$result = mysqli_query($conn, $query)or die(mysql_error());
				$rows = mysqli_num_rows($result);
				if ($rows != 0) {
					global $uname,$email,$npass,$cnpass;
					$sql = "UPDATE signin
							SET password='$npass'
							WHERE username='$uname'
							";
					if (mysqli_query($conn,$sql)){
						echo "<p class='link'>Click here to <a href='login.php'>Login</a></p>";
					}
					else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
					echo "<p class='link'>Click here to <a href='passReset.php'>reset password</a> again!</p>";
					}
				} else {
					echo "<div class='form'>
						  <h3>Incorrect Username/Email.</h3><br/>
						  <p class='link'>Click here to <a href='passReset.php'>reset password</a> again.</p>
						  </div>";
				}
			}
		?>
	</body>
</html>