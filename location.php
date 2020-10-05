<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<title>Adrenaline Buzz Club | Location</title>

<?php include("php/includes/navigator.php"); ?>
<link rel="stylesheet" href="css/location.css">
	<head class="location-header">
	
		<div class="location-banner"
			style="background-image: url('images/pexels-pixabay-39671.jpg'); height: 32vh;"
			alt="Background image of weights/gym equipment by user 'pixabay' from Pexels">
			
		<img id="icon-image" src="images/abc_logo_by_daniel_surla.png" alt="ABC Logo illustrated by Daniel Surla">
		<button id="button-return-home" onclick="document.location='homepage.html'">Return</button>
	</head>

	<body>
		<div class="geo-location-image">
			<img id="abc-ltd-map" src="images/abc_ltd_map.png" alt="Image location of ABC on Google Maps">
		</div>
	</body>

	<footer>
	<?php require_once("includes/sitemap.php"); ?>
	</footer>
</html>