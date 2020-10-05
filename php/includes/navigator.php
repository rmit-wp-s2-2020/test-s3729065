<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<header id="navigator-header">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script><!--MaxCDN (script and link sources/URLs from): https://www.w3schools.com/bootstrap4/bootstrap_get_started.asp-->

	<script src="plugins/breadcrumbs/dist/jquery.breadcrumbs-generator.js"></script>

	<link rel="stylesheet" href="../css/fragments.css">

	<section class="navigate-links">

		<nav class="navbar navbar-light bg-light">
		<a href="/~s3729065/wp/a2/homepage.php"><img class="mh-100" id="icon-image"
			style="height: 100px;"
			src="/~s3729065/wp/a2/images/abc_logo_by_daniel_surla.png" alt="ABC Logo illustrated by Daniel Surla"></a>
			<ul>

				<a class="nav-link" id="homepage-hyperlink" href="homepage.php">Home</a>
				<a class="nav-link" id="services-hyperlink" href="services.php">Services</a>
				<a class="nav-link" id="location-hyperlink" href="location.php">Location</a>
			</ul>

			<span>
				<a class="btn btn-outline-success" href="/~s3729065/wp/a2/php/states/login.php">Login</a>
				
				<a class="btn btn-outline-danger" href="/~s3729065/wp/a2/php/states/logout.php">Logout</a>
			</span>

			<span class="row">
				<form>
				<div class="form-group">
				
					<input type="text" class="form-control" placeholder="Search for something here ...">
				</div>

				<button type="submit" class="btn btn-outline-success btn-search-item">Search</button>
				</form>
			</span>
		</nav>

	</section>
</header>
</html>
<!--
Attribution:
Code Attribution:
	MaxCDN (script and link sources/URLs from): https://www.w3schools.com/bootstrap4/bootstrap_get_started.asp
	Navbar - Search (bar) function: Shekhar Kelra: Lecture 10 - Example 3: search.php
Bootstrap:
	Bootstrap Image sizing for image attribute class="mh-100": https://getbootstrap.com/docs/4.0/utilities/sizing/
	Bootstrap Navbar: https://getbootstrap.com/docs/4.0/components/navbar/


TODO:
	Need to code PHP to change attribute-link button for login and logout-
		-make it as one A-tag instead of two separate A-tags.
-->