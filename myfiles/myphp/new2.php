<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>
			NEW2
		</title>
		<style>
			body {
				background-color: black;
				color: lime;
				font-weight: bold;
				font-size: 1.4vw;
			}
			h1,h2,h3,h4 {
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
			echo "<h3>NULL VALUE</h3>";
			echo "<br>";
			$x="Hello world!";
			echo $x;
			echo "<br>";
			var_dump($x);
			$x=null;
			echo $x;
			echo "<br>";
			var_dump($x);
			echo "<br>";
			echo "<h3>STRING LENGTH</h3>";
			echo "<br>";
			$a="My cat has seven legs";
			echo $a;
			echo "<br>";
			echo strlen($a);
			echo "<br>";
			echo "<h3>STRING WORD COUNT</h3>";
			echo "<br>";
			$b="The first person to land on the moon!";
			echo $b;
			echo "<br>";
			echo str_word_count($b);
			echo "<br>";
			echo "<h3>STRING REVERSE</h3>";
			echo "<br>";
			$c="mitochondria";
			echo $c;
			echo "<br>";
			echo strrev($c);
			echo "<br>";
			echo "<h3>STRING POSITION</h3>";
			echo "<br>";
			$d="A spider has eight legs.";
			echo $d;
			echo "<br>";
			echo strpos($d,"eight");
			echo "<br>";
			echo "<h3>STRING REPLACE</h3>";
			echo "<br>";
			$e="Russia invading Ukraine could potentially be the start of world war 3!";
			echo $e;
			echo "<br>";
			echo str_replace("world war 3","the third world war",$e);
			echo "<br>";
			function mathPi(){
				echo "<h3>PI</h3>";
				echo "<br>";
				$r=21;
				$di=2*$r;
				$circumference=pi()*$di;
				$area=pi()*($r*$r);
				echo $r;
				echo "<br>";
				echo $di;
				echo "<br>";
				echo $circumference;
				echo "<br>";
				echo $area;
				echo "<br>";
			}
			mathPi();
			function mathMinMax(){
				echo "<h3>MIN AND MAX</h3>";
				echo "<br>";
				$i=array(17,21,22,36,65,37,884,4,345,36,388,434,678,988,989);
				var_dump($i);
				echo "<br>";
				echo min($i);
				echo "<br>";
				echo max($i);
				echo "<br>";
			}
			mathMinMax();
			function mathAbs(){
				echo "<h3>ABSOLUTE</h3>";
				echo "<br>";
				$j=-463;
				echo $j;
				echo "<br>";
				echo abs($j);
				echo "<br>";
			}
			mathAbs();
			function mathSqrt(){
				echo "<h3>SQUARE ROOT</h3>";
				echo "<br>";
				$k=225;
				echo $k;
				echo "<br>";
				echo sqrt($k);
				echo "<br>";
			}
			mathSqrt();
			function mathRound(){
				echo "<h3>ROUND</h3>";
				echo "<br>";
				$l=1.74783;
				$m=43.87782;
				$n=0.88372;
				$o=pi();
				echo $l;
				echo "<br>";
				echo $m;
				echo "<br>";
				echo $n;
				echo "<br>";
				echo $o;
				echo "<br>";
				echo round($l);
				echo "<br>";
				echo round($m);
				echo "<br>";
				echo round($n);
				echo "<br>";
				echo round($o);
				echo "<br>";
			}
			mathRound();
			function mathRand(){
				echo "<h3>RANDOM</h3>";
				echo "<br>";
				echo rand();
				echo "<br>";
				echo rand(100,1000);
				echo "<br>";
				echo rand(100,1000);
				echo "<br>";
				echo rand(100,1000);
				echo "<br>";
				echo rand(100,1000);
			}
			function mathPower(){
				echo "<h3>POWERS</h3>";
				echo "<br>";
				$p=17;
				echo $p;
				echo "<br>";
				echo "Power: 2";
				echo "<br>";
				echo pow($p,2);
				echo "<br>";
				echo "Power: 3";
				echo "<br>";
				echo pow($p,3);
				echo "<br>";
				echo "Power: 4";
				echo "<br>";
				echo pow($p,4);
				echo "<br>";
				echo "Power: 5";
				echo "<br>";
				echo pow($p,5);
				echo "<br>";
			}
			mathPower();
		?>
	</body>
</html>