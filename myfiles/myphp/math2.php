<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>
			math2
		</title>
		<style>
			body {
				background-color: black;
				color: white;
			}
			h1 {
				color: red;
				font-weight: bold;
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
		<dl>
			<dt>
				<h1><ins>CIRCLE</ins></h1>
			</dt>
			<dd>
				<img src="../images/circle.png"><br>
				<?php
					echo "radius=21<br>";
					$p=3.141592654;
					$r=21;
					$d=$r*2;
					$area=$p*($r*$r);
					$circumfrence=$p*$d;
					echo "The area of the circle is:".$area."<br>";
					echo "The circumfrence of the circle is:".$circumfrence."<br>";
				?>
			</dd>
			<dt>
				<h1><ins>RECTANGLE</ins></h1>
			</dt>
			<dd>
				<img src="../images/rectangle.png"><br>
				<?php
					echo "length=20m<br>";
					echo "width=10m<br>";
					$length=20;
					$width=10;
					$perimeter=(2*$length)+(2*$width);
					$area=$length*$width;
					echo "The perimeter of the rectangle is: ".$perimeter."<br>";
					echo "The area of the rectangle is: ".$area."<br>";
				?>
			</dd>
			<dt>
				<h1><ins>SQUARE</ins></h1>
			</dt>
			<dd>
				<img src="../images/square.png"><br>
				<?php
					echo "Length=10m<br>";
					$length=10;
					$area=10*10;
					$perimeter=10*4;
					echo "The area of the square is: ".$area."<br>";
					echo "The perimeter of the square is: ".$perimeter."<br>";
				?>
			</dd>
			<dt>
				<h1><ins>TRIANGLE</ins></h1>
			</dt>
			<dd>
				<img src="../images/triangle.png"><br>
				<?php
					echo "base=20m<br>";
					echo "height=10m<br>";
					$b=20;
					$h=10;
					$b2=(1/2)*$b;
					$x=$b2*$b2;
					$y=$h*$h;
					$z=$x+$y;
					$c=$z/14.1435;
					$peri=$b+(2*$c);
					$area=1/2*$b*$h;
					echo "The perimeter of the triangle is: ".$peri."<br>";
					echo "The area of the triangle is: ".$area."<br>";
				?>
			</dd>
		</dl>
	</body>
</html>
	