<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
	<style>
		body {
			background-color: purple;
			color: lime;
		}
		input {
			background-color: black;
			color: white;
		}
		a {
			color: red;
			font-family: calibri;
			font-size: 20px;
		}
		input {
			height: 30px;
			width: 400px;
			font-size: 25px;
		}
		#login-button {
			height: 30px;
			width: 100px;
			background-color: cyan;
			color: navy;
			font-weight: bold;
			font-size: 20px;
		}
		legend {
			font-size: 40px;
			font-family: calibri;
			font-weight: bold;
			font-style: italic;
		}
		label {
			color: yellow;
			font-size: 20px;
			font-weight: bold;
		}
		fieldset {
			border-width: 10px;
			width: 60%;
		}
		#pst {
			color: #ffff88;
			margin-left: 4vw;
		}
	</style>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['uname'])) {
        $username = stripslashes($_REQUEST['uname']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['pass']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `signin` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query)or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows != 0) {
			$myName=$username;
            $_SESSION['username'] = $myName;
            // Redirect to user dashboard page
            header("Location: myfiles/home.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {?>
    <form class="form" method="post" name="login">
		<fieldset>
			<legend>LOGIN</legend>
			<label for="uname">USERNAME:</label><br>
			<input type="text" class="login-input" id="uname" name="uname" autofocus="true"/><br>
			<label for="pass">PASSWORD:</label><br>
			<input type="password" class="login-input" id="pass" name="pass"/><br><br>
			<input type="submit" value="Login" name="submit" id="login-button"/><br>
			<p class="link"><a href="jaka.php">New Registration</a><a href="passReset.php" id="pst">Forgot Password?</a></p>
		</fieldset>
  </form><?php
    }?>
</body>
</html>
