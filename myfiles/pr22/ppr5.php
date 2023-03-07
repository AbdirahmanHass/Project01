<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="ppr5.css?v=1">
		<title>PPR5</title>
	</head>
	<body>
	
		<a href="ppr4.php">BACK</a><br>
		<div class="bulb">
			<button id="lightButton" onclick="toggleLight()">OFF</button>
			<img id="myImage" src="pic_bulboff.gif" style="width:100px">
			<script>
				var lightState = "off";
				function toggleLight() {
					if (lightState === "off") {
					  document.getElementById('myImage').src='pic_bulbon.gif';
					  document.getElementById('lightButton').innerHTML = "ON";
					  lightState = "on";
					} else {
					  document.getElementById('myImage').src='pic_bulboff.gif';
					  document.getElementById('lightButton').innerHTML = "OFF";
					  lightState = "off";
					}
				}
			</script>
		</div>
		<a href="ppr6.php">PPR6</a>
	</body>
</html>