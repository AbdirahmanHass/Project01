<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="ppr3.css">
		<title>PPR3</title>
	</head>
	<body>
	
		<a href="ppr2.php">BACK</a>
		
		<h2>What Can JavaScript Do?</h2>
		
		<p>JavaScript can change HTML attribute values.</p>
		
		<p>In this case JavaScript changes the value of the src (source) attribute of an image.</p>
		
		<button onclick="document.getElementById('myImage').src='pic_bulbon.gif'">
			Turn on the light
		</button>
		<img id="myImage" src="pic_bulboff.gif" style="width:100px">
		<button onclick="document.getElementById('myImage').src='pic_bulboff.gif'">
			Turn off the light
		</button>
		
		<a href="ppr4.php">PPR4</a>
	</body>
</html>