<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/date_time.css">
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	<title>DATE & TIME</title>
</head>
<body>
	<a href="/Project01/myfiles/myphp.php">BACK</a><br>
	<a href="date_time.php">REFRESH</a>
<?php
	echo "<h1><ins>DATE AND TIME</ins></h1>";
	echo "<h2><ins>DATE</ins></h2>";
	echo "Today is ".date("Y/m/d")."<br>";
	echo "Today is ".date("Y.m.d")."<br>";
	echo "Today is ".date("Y-m-d")."<br>";
	echo "Today is ".date("d-m-Y")."<br>";
	echo "Today is ".date("m-d-Y")."<br>";
	echo "Today is ".date("l")."<br>";
	echo "Today is ".date("l-m-Y")."<br>";
	echo "<h2><ins>TIME</ins></h2>";
	echo "The time is ".date("H:i:s")."<br>";
	echo "The time is ".date("h:i:s")."<br>";
	echo "The time is ".date("h:i:sa")."<br>";
	echo "The hour is ".date("H")."<br>";
	echo "The minute is ".date("i")."<br>";
	echo "The second is ".date("s")."<br>";
	$month="";
	function monthName(){
		global $month;
		if (date("m")=="01"){$month="January";}
		elseif (date("m")=="02"){$month="Feruary";}
		elseif (date("m")=="03"){$month="March";}
		elseif (date("m")=="04"){$month="April";}
		elseif (date("m")=="05"){$month="May";}
		elseif (date("m")=="06"){$month="June";}
		elseif (date("m")=="07"){$month="July";}
		elseif (date("m")=="08"){$month="August";}
		elseif (date("m")=="09"){$month="September";}
		elseif (date("m")=="10"){$month="October";}
		elseif (date("m")=="11"){$month="November";}
		else {$month="December";}
	}
	monthName();
	echo "The ".date("m")."th month of ".$month."<br>";
	echo "<h1>".date("H..i..s..l/d..m..Y")."</h1>";
?>
</body>
</html>