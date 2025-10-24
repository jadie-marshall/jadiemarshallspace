<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="styles.css">
  <link href="pics/biopic.png" rel="shortcut icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Me</title>
  <meta name="description" content="Email and phone number contact information for Jadie Marshall">
</head>
<body>
<header>
	<?php include 'header.php';?>
</header>
<div class="body">
	<div class="contact">
		<div class="cIcon"><div class="cwrap"><div class="brwap"><img src="pics/email.png" alt="Email icon, outline of an envelope."></div></div></div>
		<div class="cInfo"><div class="wrapper"><h3>Email: jmarshall@aggienetwork.com</h3></div></div>
	</div>
		<div class="cButton">
			<div class="cwrap">
				<div class="bwrap">
					<form action="mailto:jmarshall@aggienetwork.com">
						<button class="contactbutton" type="submit" title="mailto:jmarshall@aggienetwork.com">Send me an email!</button>
					</form>
				</div>
			</div>
		</div>
		
	<div class="contact">
		<div class="cIcon"><img src="pics/phone.png" alt="Phone icon, outline of a telephone."></div>
		<div class="cInfo"><div class="wrapper"><h3>Cell: (325) 226-0055</h3></div></div>
	</div>
		<div class="cButton">
			<div class="cwrap">
				<div class="bwrap">
					<form>
						<button class="contactbutton" type="submit" formaction="tel:+13252260055" title="tel:+13252260055">Give me a call!</button>
					</form>
				</div>
			</div>
		</div>
		<div class="contact">
		<div class="cIcon"><img src="pics/calendar.png" alt="Calendar icon, outline of a calendar."></div>
		<div class="cInfo"><div class="wrapper"><h3>Schedule a 30-minute call with me!</h3></div></div>
	</div>
		<div class="cButton">
			<div class="cwrap">
				<div class="bwrap">
					<form method="POST" action="https://calendly.com/marshall-jadie/30min" target="_blank">
						<button class="contactbutton" type="submit" title="https://calendly.com/marshall-jadie/30min">Schedule a Call!</button>
					</form>
				</div>
			</div>
		</div>
</div>
<footer>
	<?php include 'footer.php';?>
</footer>
</body>
</html>