<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>
			VARIABLES
		</title>
		<style>
			body {
				background-color: black;
				color: cyan;
				font-weight: bold;
				font-size: 1.5vw;
				text-align: center;
			}
			h1 {
				color: yellow;
				font-family: algerian;
			}
			h2,h3 {
				font-family: algerian;
				color: red;
				font-style: italic;
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
		<h1><ins>VARIABLES</ins></h1>
		<h2><ins>OUTPUT VARIABLES</ins></h2>
		<?php
			$txt="College of Advanced Technology";
			echo "I love $txt!<br>";
			echo "I love ".$txt."!";
		?>
		<h2><ins>GLOBAL AND LOCAL SCOPE</ins></h2>
		<?php
			$x=72;
			function myTest(){
				$x=84;
			echo "My score is: $x<br>";
			}
			myTest();
			echo "My score is not: $x";
		?>
		<h2><ins>GLOBAL KEYWORD</ins></h2>
		<h3><ins>CUBE</ins></h3>
		<?php
			echo "Length=13m<br>";
			echo "Width=17m<br>";
			echo "Height=15m<br>";
			$x=13;
			$y=17;
			$z=15;
			$volume;
			$s_area;
			function cubeArea(){
				global $x, $y, $z, $volume, $s_area;
				$volume=$x*$y*$z;
				$s_area=2*($x*$y)+2*($x*$z)+2*($y*$z);
			}
			cubeArea();
			echo "The volume of the cube is $volume<br>";
			echo "The surface-area of the cube is $s_area";
		?>
	</body>
</html>