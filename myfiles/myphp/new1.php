<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>
			New1
		</title>
	</head>
	<style>
		body {
			background-color: black;
			color: lime;
			font-size: 1.4vw;
			font-weight: bold;
			font-style: italic;
		}
		h1,h2,h3 {
			color: red;
			font-family: algerian;
		}
		a {
			color: red;
			font-family: algerian;
			font-size: 2.5vw;
		}
	</style>
	<body>
		<a href="/Project01/myfiles/myphp.php">BACK</a>
		<?php
			echo "<h1>PHP is fun(ECHO)</h1>";
			echo "Hello world!<br>";
			echo "I'm about to learn PHP<br>";
			echo "This ","string ","was ","made ","with ","multiple ","parameters!<br>";
		?>
		<?php
			print "<h1>PHP is fun(PRINT)</h1>";
			print "Hello world!<br>";
			print "I'm about to learn PHP<br>";
			print "Print statement cannot handle multiple parameters!<br>";
		?>
		<?php
			$txt1="PHP programming";
			$txt2="College of Advanced Technology";
			$x=43;
			$y=71;
			$z=33;
			function myFunction(){
				global $txt1,$txt2,$x,$y,$z;
				print "<h1>USING PRINT</h1>";
				print $txt1."<br>";
				print "I study at ".$txt2."<br>";
				print $x+$y+$z."<br>";
			}
			myFunction();
		?>
		<h2>STRING</h2>
		<?php
			$x="Hello world!";
			$y="I live in Nairobi!";
			echo $x;
			echo "<br>";
			echo $y;
			var_dump($x);
			var_dump($y);
		?>
		<h2>BOOLEAN</h2>
		<?php
			$a=true;
			$b=false;
			echo $a;
			echo "<br>";
			echo $b;
			var_dump($a);
			var_dump($b);
		?>
		<h2>ARRAY</h2>
		<?php
			$cars=array("Toyota","Mazda","Lexus","Nissan","Chevrolet");
			var_dump($cars);
		?>
	</body>
</html>