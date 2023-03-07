<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>
			new3
		</title>
		<style>
			body {
				background-color: black;
				color: lime;
				font-weight: bold;
				font-size: 1.4;
			}
			h1,h2,h3,h3 {
				color: red;
				font-family: algerian;
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
		<?php
			echo "<h2><ins>PHP CONSTANT</ins></h2><br>";
			define("greeting","Welcome to CAT College!<br>");
			echo greeting;
			echo "<h2><ins>CONSTANT ARRAYS</ins></h2><br>";
			define("cars",[
				"Toyota",
				"Mazda",
				"BMW",
				"Chevrolet"
			]);
			echo cars[0];
			echo "<br>";
			echo cars[1];
			echo "<br>";
			echo cars[2];
			echo "<br>";
			echo cars[3];
			echo "<br>";
			echo "<h2><ins>CONSTANTS ARE GLOBAL VARIABLES</ins></h2><br>";
			define ("pass","Congratulations, you passed the test!");
			function myTest(){
				echo pass;
			}
			myTest();
			echo "<br>";
			$x=45;
			$y=16;
			echo "<h2><ins>ADDITION</ins></h2><br>";
			$sum=$x + $y;
			echo $sum."<br>";
			echo "<h2><ins>SUBTRACTION</ins></h2><br>";
			$diff=$x - $y;
			echo $diff."<br>";
			echo "<h2><ins>MULTIPLICATION</ins></h2><br>";
			$prod=$x * $y;
			echo $prod."<br>";
			echo "<h2><ins>DIVISION</ins></h2><br>";
			$quo=$x / $y;
			echo $quo."<br>";
			echo "<h2><ins>MODULUS</ins></h2><br>";
			$rem=$x % $y;
			echo $rem."<br>";
			echo "<h2><ins>EXPONENTIATION</ins></h2><br>";
			$expo=$x ** $y;
			echo $expo."<br>";
			function equal1(){
				echo "<h2><ins>EQUAL:VALUE</ins></h2><br><h3>==</h3><br>";
				$x=23;
				$y=27;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x == $y);
				$x=48;
				$y=48;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x == $y);
				$x=550;
				$y="550";
				echo $x." =>integer<br>";
				echo $y." =>string<br>";
				var_dump ($x == $y);
			}
			equal1();
			function equal2(){
				echo "<h2><ins>EQUAL:VALUE/TYPE</ins></h2><br><h3>===</h3><br>";
				$x=100;
				$y="100";
				echo $x." =>integer<br>";
				echo $y." =>string<br>";
				var_dump ($x === $y);
				$x=73;
				$y=73;
				echo $x." =>integer<br>";
				echo $y." =>integer<br>";
				var_dump ($x === $y);
			}
			equal2();
			function notEqual1(){
				echo "<h2><ins>NOT EQUAL:VALUE</ins></h2><br><h3>!=</h3><br>";
				$x=35;
				$y=76;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x != $y);
				$x=35;
				$y=76;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x != $y);
			}
			notEqual1();
			function notEqual2(){
				echo "<h2><ins>NOT EQUAL:VALUE/TYPE</ins></h2><br><h3>!==</h3><br>";
				$x=35;
				$y="35";
				echo $x." =>integer<br>";
				echo $y." =>string<br>";
				var_dump ($x !== $y);
				$x=35;
				$y=35;
				echo $x." =>integer<br>";
				echo $y." =>integer<br>";
				var_dump ($x !== $y);
			}
			notEqual2();
			function greaterThan(){
				echo "<h2><ins>GREATER THAN</ins></h2><br><h3>&gt;</h3><br>";
				$x=75;
				$y=43;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x > $y);
				$x=55;
				$y=55;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x > $y);
				$x=21;
				$y=76;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x > $y);
			}
			greaterThan();
			function lessThan(){
				echo "<h2><ins>LESS THAN</ins></h2><br><h3>&lt;</h3><br>";
				$x=42;
				$y=67;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x < $y);
				$x=77;
				$y=77;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x < $y);
				$x=99;
				$y=14;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x < $y);
			}
			lessThan();
			function greaterEqual(){
				echo "<h2><ins>GREATER OR EQUAL</ins></h2><br><h3>&gt;=</h3><br>";
				$x=543;
				$y=222;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x >= $y);
				$x=878;
				$y=878;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x >= $y);
				$x=544;
				$y=999;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x >= $y);
			}
			greaterEqual();
			function lessEqual(){
				echo "<h2><ins>LESS OR EQUAL</ins></h2><br><h3>&lt;=</h3><br>";
				$x=421;
				$y=887;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x <= $y);
				$x=333;
				$y=333;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x <= $y);
				$x=761;
				$y=142;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x <= $y);
			}
			lessEqual();
			function spaceship(){
				echo "<h2><ins>SPACESHIP</ins></h2><br><h3>&lt;=&gt;</h3><br>";
				$x=7;
				$y=5;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x <=> $y);
				$x=4;
				$y=4;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x <=> $y);
				$x=2;
				$y=6;
				echo $x."<br>";
				echo $y."<br>";
				var_dump ($x <=> $y);
			}
			spaceship();
		?>
	</body>
</html>