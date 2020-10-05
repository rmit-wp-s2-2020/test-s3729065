<footer>
	<div>
		<ol class="list-group list-group-horizontal" id="breadcrumbs-generator"></ol>

		<script src="../plugins/breadcrumbs/dist/jquery.breadcrumbs-generator.min.js">
		$(document).ready(function () {

			$("#breadcrumbs-generator").breadcrumbsGenerator();
		});
		</script>

	</div>

	<div class="">

		<nav id="sitemap-footer-nav">
			<h6><i>Adrenaline Buzz Club</i> | <i>Sitemap</i></h6>
			
			<ul>
				
				<li><a href="homepage.php">Home</a></li>
				<li><a href="services.php">Our Services</a></li>
				<li><a href="location.php">Where To Find Us?</a></li>
			</ul>

			<ul>

				<li><a href="contract.php">Join Us</a></li>
			</ul>

		</nav>
		<div id="email-address"><p><i>Email: customer-enquiry@adrenaline-buzz-club-mail.com</i></p></div>
		
		<div id="location-address"><p><i>X1st and Madison Avenue, Kirtwright, XXXX, Victoria</i></p></div>
	</div>
</footer>
<!--B R E A K L I N E-->
<?php
include("../user_session_functions.php");
include("../security_functions.php");
include("../general_functions.php");
?>
<!--
Code Attribution:
		Shekhar Kelra: Lecture 10 - Example 4: Services.php
-->