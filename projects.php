<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/favicon.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<link rel="stylesheet" href="FlexSlider/flexslider.css" type="text/css">
<script src="FlexSlider/jquery.flexslider.js"></script>
<script src="myscripts.js"></script>
<title>Projects and Experience</title>
<meta name="description" content="Projects and work experience which Jadie Marshall has been involved in,
	including Agile and Scrum teams, Python, Web Development, and Saas projects.">
</head>

<body>
	<header id="top">
		<?php include __DIR__ . '/header.php'; ?>
	</header>
	<div class="body">
		<div class="top">
			<h1>Projects and Work Experience</h1>
		</div>

		<div class="jump">
			<img class="ji" src="pics/jump.jpg" alt="Arrow pointing down, indicating Projects below">
			<div class="wrapper">
				<ul>
					<li><a href="projects.php?project=eng#eng"><img src="pics/code.png" alt="circular icon, broken brackets">
							<p>Professional Experience</p>
						</a></li>
					<li><a href="projects.php?project=web#web"><img src="pics/web.png" alt="circular icon, symbol for web">
							<p>This Website</p>
						</a></li>
					<li><a href="projects.php?project=listen#listen"><img src="pics/listen.png" alt="circular icon, headphones">
							<p>Rubble Listening Device</p>
						</a></li>
					<li><a href="projects.php?project=saas#saas"><img src="pics/saas.png" alt="circular icon, sailboat">
							<p>Saas Sailing Inventory System</p>
						</a></li>
				</ul>
			</div>
		</div>

		<?php include __DIR__ . '/project_sections/render_projects.php'; ?>
	</div>
	<footer>
		<?php include __DIR__ . '/footer.php'; ?>
	</footer>
</body>

</html>