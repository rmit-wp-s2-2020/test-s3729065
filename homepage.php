<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<title>Adrenaline Buzz Club | Homepage</title>

<?php include("php/includes/navigator.php"); ?>

<link rel="stylesheet" href="css/homepage.css">
<div class="grid-container">
	<head class="header">

		<div class="banner"
				style="background-image: url('images/lukas-bg-1.jpg'); height: 32vh;"
				alt="Background image of weights/gym equipment by Lukas from Pexels">
			
			<img id="icon-image" src="images/abc_logo_by_daniel_surla.png" alt="ABC Logo illustrated by Daniel Surla">
		
			<div id="header-title"><h1>Welcome to the Adrenaline Buzz Club!</h1></div>
			<div id="header-subtitle"><h2>A Place for Gym and Fitness</h2></div>
			<button id="button-contract-us" onclick="document.location='contract.php'">Join Us</button> <!--W3Schools.com: https://www.w3schools.com/html/tryit.asp?filename=tryhtml_links_button_element-->

		</div>

		<div class="navigate-links">
			<a id="homepage-hyperlink" href="homepage.php">Home</a>
			<a id="services-hyperlink" href="services.php">Services</a>
			<a id="location-hyperlink" href="location.php">Location</a>
		</div>
	</head>

	<body class="\main">

		<div id="introduction">
		<p><h1>Hello, and welcome!</h1></p>
		<p>An online gym and fitness website containing <b>small, easy-to-do exercises</b>
			to get you and your day up and running! These exercises contain stretches which are recommended to be done first
			before jumping into some surmounting number of workouts.
			<p>Join us during times like these!</p>
			<p>No need to go outside! You can stay safe, warm and fit right at home.</p>
			<p>Be able to cook meals while working out!</p>
			<p>Author documents while working out!</p>
			<p>Walk the dog while working out; staying in place!</p>
			<p> Come out of quarantine fit and ready to tackle the world. Meet up with friends in a new look.
			Be able to participate in activities you'd never see yourself in before.
			Party at the front, and never at the back again.
			Make your opponents eat your dust in races and be able to ditch old friends for new friends.
			And once you've survived quarantine, come on in to our real, tangible and physical location.</p>
			<p>(<i>Information can be found at the bottom</i>)</p>
		</div>

		<div class="btm-image-set">
			<img id="small-dumbells-image" src="images/pexels-cottonbro-4753891.jpg" alt="Image of small dumbells on a shelf by user 'cottonbro' from Pexels (website)">
			<img id="ab-cruncher-image" src="images/pexels-ivan-samkov-4162547.jpg" alt="Image of a ab crunching gym equipment by user 'Ivan Samkov' from Pexels (website)">
			<img id="solo-dumbell-image" src="images/pexels-cottonbro-4753987.jpg" alt="Image of one dumbell on the floor by user 'cottonbro' from Pexels (website)">

			<a class="btn btn-outline-secondary" href="/php/states/login.php">Login?</a>
		</div>
	</body>

	<footer class="feet">
		<?php require_once("includes/sitemap.php"); ?>

		<div id="email-address"><p><i>Email: customer-enquiry@adrenaline-buzz-club-mail.com</i></p></div>
		<div id="location-address"><p><i>X1st and Madison Avenue, Kirtwright, XXXX, Victoria</i></p></div>
	</footer>

</div>
</html>