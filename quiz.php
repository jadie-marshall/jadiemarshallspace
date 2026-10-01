<!DOCTYPE html>
<html lang="en">
	<head>
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="FlexSlider/flexslider.css" type="text/css">
	<script src="FlexSlider/jquery.flexslider.js"></script>
	<script src="myscripts.js"></script>
	<script src="PapaParse/papaparse.min.js"></script>
	<?php include __DIR__ . '/favicon.php'; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JavaScript Quiz Showcase</title>
</head>
<body>
<header>
	<?php include 'header.php';?>
</header>
<div class="body">
	<div class="grid">
		<div id="quiz">
			<h1>JavaScript Quiz, Nerd Edition</h1>
			
			<h3 id="question">.</h3>
			
			<div class="answers">
				<button id="btn0"><span id="choice0"></span></button>
				<button id="btn1"><span id="choice1"></span></button>
				<button id="btn2"><span id="choice2"></span></button>
				<button id="btn3"><span id="choice3"></span></button>
			</div>
			
			<div class="foot">
				<h3 id="progress">Question x of y</h3>
			</div>
		</div>
	<form>
		<h3><button class="accordion" type="submit" formaction="projects.php">Back to Projects</button></h3>
	</form>	
	<h3><button onClick="window.location.reload();" class="accordion">Refresh Quiz</button></h3>
	<h3><button class="accordion">Project Description</button></h3>
	<div class="panel">
		<p>&emsp;For this element, I used the PapaParser library to read data from a CSV. This library is a CSV parser library that allows in-browser 
		parsing of CSV files. The quiz questions and answer choices are stored in this CSV. Storing the quiz in a CSV was used so that the right answer 
		would not be visible by inspecting the HTML or JavaScipt, and so that editing of the quiz questions and/or answers would be extremely easy. 
		The way this is written, I can add, change, or delete items from the CSV, and the quiz would automatically adapt to those changes. This file can
		be read, however, by going to its direct URL.
		<br><br>&emsp;I used JavaScript's object-oriented nature to create Question and Quiz objects to store the quiz data from the CSV file. I shuffled 
		the answers around when they are inserted into the HTML so that the quiz has a more dynamic element to it. This is done using the Fisher-Yates 
		shuffle algorithm, which is a randomization algorithm designed so that there is an equal chance for each permutation of the array to exist.
		</p>
	</div>


	</div>

</div>
<footer>
	<?php include 'footer.php';?>
	<script src="quiz.js"></script>
</footer>
</body>
</html>