<!DOCTYPE html>
<html>
	<head>
		<title>Welcome page</title>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<style>
			body {
				background-color: black;
				color: yellow;
				font-weight: bold;
				font-size: 1.3vw;
			}
			table {
				background-color: cyan;
				width: 40%;
				text-align: center;
				padding: 0.4vw;
			}
			td {
				background-color: black;
			}
			.hhh {
				color: lime;
				font-size: 1.7vw;
				font-family: algerian;
			}
			h2 {
				color: cyan;
			}
		</style>
	</head>
	<body>
		<h2>
			Welcome 
			<?php
				echo $_POST["fname"]." ".$_POST["lname"];
			?>
		</h2>
		<table>
			<tr>
				<td><h3><span class="hhh">First Name</span></h3></td>
				<td><h3><?php echo $_POST["fname"];?></h3></td>
			</tr>
			<tr>
				<td><h3><span class="hhh">Last Name</span></h3></td>
				<td><h3><?php echo $_POST["lname"];?></h3></td>
			</tr>
			<tr>
				<td><h3><span class="hhh">Age</span></h3></td>
				<td><h3><?php echo $_POST["age"];?></h3></td>
			</tr>
			<tr>
				<td><h3><span class="hhh">Telephone</span></h3></td>
				<td><h3><?php echo $_POST["tel"];?></h3></td>
			</tr>
			<tr>
				<td><h3><span class="hhh">Email Address</span></h3></td>
				<td><h3><?php echo $_POST["email"];?></h3></td>
			</tr>
			<tr>
				<td><h3><span class="hhh">Password</span></h3></td>
				<td><h3><?php echo $_POST["pass"];?></h3></td>
				<br>
			</tr>
		</table>
	</body>
</html>