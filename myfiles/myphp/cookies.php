<?php
	$cookie_name = "Cookie101";
	$cookie_value = "Abdirahman Hassan";
	setcookie($cookie_name , $cookie_value , time()+(86400*30),"/");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/cookies.css">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title>COOKIES</title>
</head>
<body>
	<a href="/Project01/myfiles/myphp.php">BACK</a><br>
<?php
	if (!isset($_COOKIE["$cookie_name"])){
		echo "Cookie named ".$cookie_name." is not set!<br>";
	}
		else {
			echo "Cookie ".$cookie_name." is set!<br>";
			echo "Value is: ".$_COOKIE["$cookie_name"];
		}
?>
</body>
</html>