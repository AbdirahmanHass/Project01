<?php
	//include auth_session.php file on all user panel pages
	include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="CSS/index.css">
		<title>MY FIRST WEBSITE</title>
		<style>
			#logout {
				font-style: italic;
				font-weight: bold;
				color: black;
				font-size: 20px;
			}
			#copy {
				position: fixed;
				bottom: 5px;;
				left: 5px;
				font-size: 10px;
				font-style: italic;
				font-family: arial;
				color: yellow;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<a style="float: left;" href="home.php">BACK</a>
		<h4 id="copy">&copy; 2010-<?php echo date("Y");?></h4>
		<a href="/Project01/logout.php" id="logout">Logout</a><br>
		<h1><marquee><i>THIS IS MY FIRST HTML WEBSITE</i></marquee></h1>
		<h3>Welcome, <?php echo $_SESSION['username']; ?>!</h3>
		<div>
			<a id="menu" href="index4.html"><=></a>
			<p id="science">SCIENCE</p>
		</div>
		<h4>
			->This is one of the subjects taught at school.
			<br>
			->It has three branches:
		</h4>
		<h6>
			<ul class="ul_1">
				<li>PHYSICS</li>
				<li>CHEMISTRY</li>
				<li>BIOLOGY</li>
			</ul>
		</h6>
		<dl>
			<dt>
				<h2>1.PHYSICS</h2>
			</dt>
			<dd>
				<img src="images/236.jpg" alt="Image 236" height="300" width="350">
				<img align="right" src="images/251.jpg" alt="Image 251" height="300" width="350">
				<h4>
					->This is a very hard subject.
					<br>
					->Very very hard.
				</h4>
			</dd>
			<dt>
				<h2>2.CHEMISTRY</h2>
			</dt>
			<dd>
				<img src="images/237.jpg" alt="Image 237" height="300" width="350">
				<img align="right" src="images/252.jpg" alt="Image 252" height="300" width="350">
				<h4>
					->This is the study of matter.
					<br>
					->This is another hard one.
				</h4>
			</dd>
			<dt>
				<h2>3.BIOLOGY</h2>
			</dt>
			<dd>
				<img src="images/238.jpg" alt="Image 238" height="300" width="350">
				<img align="right" src="images/250.jpg" alt="Image 250" height="300" width="350">
				<h4>
					->This is the study of organisms.
					<br>
					->This is also a hard one.
				</h4>
			</dd>
		</dl>
		<ul class="ul_2">
			<li>
				INFORMATION
			</li>
			<li>
				<b>This is a heading(bold)</b>
			</li>
			<li>
				<strong>This is a heading(important)</strong>
			</li>
			<li>
				<i>This is a heading(italic)</i>
			</li>
			<li>
				<em>This is a heading(emphasis)</em>
			</li>
			<li>
				<mark>This is a heading(marked)</mark>
			</li>
			<li>
				<small>This is a heading(small)</small>
			</li>
			<li>
				<del>This is a heading(deleted)</del>
			</li>
			<li>
				<ins>This is a heading(inserted)</ins>
			</li>
			<li>
				This is
				<span style="color:green;"><sub> a heading</sub></span>
				(subscript)
			</li>
			<li>
				This is
				<span style="color:green;"><sup> a heading</sup></span>
				(superscript)
			</li>
			<li>
				<q>This is a heading</q>
			</li>
			<li>
				A building is made up of many rooms
				<br>
				which can all be easily accessible
			</li>
		</ul>
		<table class="table2">
			<tr>
				<th>ADMIN NO</th>
				<th>NAME</th>
				<th>SUBJECT</th>
				<th>CLASS</th>
				<th>AGE</th>
			</tr>
			<tr>
				<td>99384</td>
				<td>John</td>
				<td>Kiswahili</td>
				<td>East</td>
				<td>17</td>
			</tr>
			<tr>
				<td>99385</td>
				<td>Mary</td>
				<td>English</td>
				<td>West</td>
				<td>16</td>
			</tr>
			<tr>
				<td>99386</td>
				<td>Caleb</td>
				<td>Geography</td>
				<td>North</td>
				<td>19</td>
			</tr>
			<tr>
				<td>99387</td>
				<td>Marcus</td>
				<td>Computer</td>
				<td>South</td>
				<td>17</td>
			</tr>
		</table>
	</body>
</html>