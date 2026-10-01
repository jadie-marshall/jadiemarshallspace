<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles.css">
	<?php include __DIR__ . '/favicon.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jadie Marshall Portfolio</title>
  <meta name="description" content="Home page and About information on Jadie Marshall. Includes education
	and programming languages known.">
</head> 
<body>
<header>
	<?php include 'header.php';?>
</header>
<div class="body">
	<div class="twoup">
		<div class="pic left">
			<div class="imgwrapper"><img src="pics/biopic.png" alt="Profile image for Jadie Marshall."></div>
		</div>
		<div class="info">
			<div class="textwrapper">
				<h1>Howdy!</h1>
				<h3>My name is Jadie Marshall. I am a Software Engineer seeking a fully remote, full-time position. <br>An ideal position would be one which has upward mobility and growth
					both within the company, as well as in my overall career.
				</h3>
			</div>
		</div>
	</div>

	<div class="twoup">
		<div class="pic right">
			<div class="imgwrapper"><img src="pics/tamu.png" alt="Texas A&M University logo"></div>
		</div>
		<div class="info">
			<div class="textwrapper">
				<h1>Education</h1>
				<h3>B.S. of Computer Engineering, December 2019</h3>
			</div>
		</div>
	</div>

	<div class="twoup">
		<div class="pic left">
			<div class="imgwrapper"><img src="pics/code.png" alt="Icon representing code with pointed brackets."></div>
		</div>
		<div class="info">
			<div class="textwrapper">
				<h1>Languages</h1>
				<h3>
					Java &emsp; C++/C# &emsp; Python 
					<br><br>HTML & CSS  &emsp; JavaScript
					<br><br>Ruby/Ruby on Rails &emsp; SQL &emsp; Verilog HDL
				</h3>
			</div>
		</div>
	</div>

	<div class="twoup">
		<div class="pic right">
			<div class="imgwrapper"><img src="pics/tools.png" alt="Icon with Git cat"></div>
		</div>
		<div class="info">
			<div class="textwrapper">
				<h1>Tools</h1>
				<h3>
					Git/Github &emsp; SVN &emsp; MySQL &emsp; Mongo DB &emsp; SQuirreL &emsp; WebSphere & Other IBM Tools
				</h3>
			</div>
		</div>
	</div>

</div>
<footer>
	<?php include 'footer.php';?>
</footer>
</body>
</html>