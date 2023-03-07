<?php
	function cookieSet(){
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			$x = $_REQUEST["fname"];
			$y = $_REQUEST["lname"];
			$value = $x." ".$y;
			$cookie_name = "Salamanda";
			$cookie_value = $value;
			setcookie($cookie_name , $cookie_value , time()+(86400*30),"/");
		}
	}
	cookieSet();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/cookies_page.css">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title>COOKIES PAGE</title>
</head>
<body>
	<a href="cookies2.php">BACK</a><br>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$fname = $_REQUEST["fname"];
		$lname = $_REQUEST["lname"];
		function cookie1(){
			if (!isset($_COOKIE["$cookie_name"])){
				echo "Cookie named ".$cookie_name."is not set!<br>";
			}
				else {
					echo "Cookie ".$cookie_name."is set!<br>";
					echo "Value is: ".$_COOKIE["$cookie_name"];
				}
		}
		echo "<h1>WELCOME ".$fname." ".$lname."</h1><br>";
		cookie1();
	}
?>
</body>
</html>