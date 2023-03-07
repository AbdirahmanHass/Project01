<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="pps4.css">
		<title>PPS4</title>
	</head>
	<body>
		<a href="ppr1.php">BACK</a><br><br>
		<a href="pps3.php">BACK</a><br><br>
		<button onclick="disSum()">13+32</button>
		<p id="ansSum"></p><br>
		<button onclick="disSub()">13-32</button>
		<p id="ansSub"></p><br>
		<button onclick="disDiv()">13/32</button>
		<p id="ansDiv"></p><br>
		<button onclick="disMult()">13*32</button>
		<p id="ansMult"></p><br>
		<div id="van">
			<table id="tab1">
				<tr><th>FIRST NAME:</th><th class="info" id="fname"></th></tr>
				<tr><th>LAST NAME:</th><th class="info" id="lname"></th></tr>
				<tr><th>AGE:</th><th class="info" id="age"></th></tr>
				<tr><th>GENDER:</th><th class="info" id="gender"></th></tr>
				<tr><th>NATIONALITY:</th><th class="info" id="nationality"></th></tr>
				<tr><th>WORK EXPERIENCE:</th><th class="info" id="workExp"></th></tr>
				<tr><th>TELEPHONE NUMBER:</th><th class="info" id="tele"></th></tr>
			</table>
			<table id="tab2">
				<tr><th>PERSONEL</th></tr>
				<tr><td><button onclick="funId001()">ID001</button></td></tr>
				<tr><td><button onclick="funId002()">ID002</button></td></tr>
				<tr><td><button onclick="funId003()">ID003</button></td></tr>
				<tr><td><button onclick="funId004()">ID004</button></td></tr>
				<tr><td><button onclick="funId005()">ID005</button></td></tr>
				<tr><td><button onclick="funId006()">ID006</button></td></tr>
				<tr><td><button onclick="funId007()">ID007</button></td></tr>
				<tr><td><button onclick="funId008()">ID008</button></td></tr>
				<tr><td><button onclick="funId009()">ID009</button></td></tr>
				<tr><td><button onclick="funId010()">ID010</button></td></tr>
				<tr><td><button onclick="clear101()">CLEAR</button></td></tr>
			</table>
		</div>
		<a href="pps5.php">PPS5</a><br><br>
		<script src="pps4.js"></script>
	</body>
</html>