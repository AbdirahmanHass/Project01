<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="ppr4.css">
		<title>PPR4</title>
	</head>
	<body>
	<a href="ppr3.php">BACK</a><br>
		<div class="bulb">
			<button id="chan" onclick="toggleAnime()">KITTEN</button>
			<img id="myImage" src="kitten.png" style="width:500px">
			<script>
				var animalState = "kitten";
				function toggleAnime() {
					if (animalState === "kitten") {
					  document.getElementById('myImage').src='puppy.png';
					  document.getElementById('chan').innerHTML = "PUPPY";
					  animalState = "puppy";
					} else {
					  document.getElementById('myImage').src='kitten.png';
					  document.getElementById('chan').innerHTML = "KITTEN";
					  animalState = "kitten";
					}
				}
			</script>
		</div>
		<a href="ppr5.php">PPR5</a>
	</body>
</html>