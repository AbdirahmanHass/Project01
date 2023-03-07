<?php error_reporting(E_ALL ^ E_NOTICE);?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/calc1.css">
		<title>CALC1</title>
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
			<fieldset>
				<legend>CALC1</legend>
				<input type="number" id="x" name="x"><br>
				<input type="number" id="y" name="y"><br>
				<input type="submit" id="submit1" value="+" formtarget="calc1/sum.php">
				<input type="submit" id="submit2" value="-" formtarget="calc1/sub.php"><br>
				<input type="submit" id="submit3" value="*" formtarget="calc1/mult.php">
				<input type="submit" id="submit4" value="/" formtarget="calc1/div.php">
			</fieldset>
		</form>
	</body>
</html>