<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles.css">
	<?php include __DIR__ . '/favicon.php'; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jadie Marshall Portfolio</title>
	<meta name="description" content="Meet Jadie Marshall, a full-stack software engineer and Texas A&M Computer Engineering graduate who builds practical, user-focused solutions.">
</head> 
<body>
<header>
	<?php include 'header.php';?>
</header>
<div class="body">
	<section class="about-section">
		<div class="about-portrait">
			<img src="pics/biopic.png" alt="Profile image for Jadie Marshall.">
		</div>
		<div class="about-copy">
			<?php include __DIR__ . '/project_sections/render_about.php'; ?>
		</div>
	</section>

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