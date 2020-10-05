<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>Adrenaline Buzz Club | Join Us</title>

<?php include("php/includes/navigator.php"); ?>

<head class="">

	<script src="plugins/validation/dist/jquery.validate.js"></script>

	<link rel="stylesheet" href="css/contract.css">

	<title>Adrenaline Buzz Club | Join Us</title>

	<img id="icon-image" src="images/abc_logo_by_daniel_surla.png" alt="ABC Logo illustrated by Daniel Surla">
	<button id="button-return-home" onclick="document.location='homepage.php'">Return</button> <!--W3Schools.com: https://www.w3schools.com/html/tryit.asp?filename=tryhtml_links_button_element-->

	<h1>Come and Join Us!</h1>

</head>


<body>
<main class="container">

	<div class="jumbotron">

	<form class="form-group" method="post" action="php/states/success.php">

		<label for="firstname">First Name</label>
		<input class="form-control" id="contractFirstName" name="firstname" type="text" required/><br/>

		<label for="lastname">Surname</label>
		<input class="form-control" id="contractSurname" name="lastname" type="text" required/><br/>

		<label for="emailaddress">Email Address</label>
		<input class="form-control" id="contractEmailAddress" name="email" type="email" required/><br/>

		<label for="homeaddress">Home Address</label>
		<input class="form-control" id="contractHomeAddress" name="home" type="text"/><br/>

		<label for="phonenumber">Phone Number</label>
		<input class="form-control" id="contractPhoneNumber" name="phone" type="text" required/><br/>

		<label for="ageof">Age: <span id="agesInSlider"></span></label>
		<input class="form-control" id="contractAgeInYears" min="16" max="64" name="yearsold" type="range" required/><br/>

		<label for="password">Password: <span id="contractPassword"></span></label>
		<input class="form-control" id="contractPassword" type="password" name="password" required/>

		<label for="membership">Membership</label>
		<select class="" id="contractMembership" name="membership" required/>
			<option value="ongoing">Ongoing</option>
			<option value="months3">3 Months</option>
			<option value="months6">6 Months</option>
			<option value="yearly">Yearly</option>
		</select>

		<label for="comment">Comment</label>
		<input class="form-control" id="contractCommentBox" name="contractCommentBox" type="textarea"/><br/>

		<button class="btn btn-primary" id="button-submit-contract" name="contract_button_on_submit" type="submit">Submit</button>
	</form>

	<?php
			require_once("php/user_session_manager.php");
			// Password validation with Regular Expression

			/* The password must:
				start with a capital alphabet,
				must have at least 6 characters,
				one of these characters must be either !, ^, &
				and omust end with a number
			*/
			function retrieve()
			{
				$get = file_get_contents("data/users.json");
				
				$decode = json_decode($get);

				return $decode;
			}

			function register($form) {
				$firstname = $_POST["firstname"];
				$lastname = $_POST["lastname"];
				$email = $_POST["email"];
				$home = $_POST["home"];
				$phone = $_POST["phone"];
				$age = $_POST["yearsold"];
				$password = $_POST["password"];
				$membership = $_POST["membership"];

				if(filter_var($form[$email], FILTER_VALIDATE_EMAIL))
					print_r("Please try again. Email contains invalid input.");

				if(!isset($form[$email]) == false)
					print_r("Please try again. Email contains invalid input.");
				
				if(!preg_match("/^(.*[A-Z])(.*[a-z])(.*[0-9])(.*[1^&])[a-zA-Z0-9!^&]{6,24}$/", $password))
					print_r("Password does not match wanted criteria: Minimum of 6 characters.");
					// Regular Epression for Password - Attribution: https://stackoverflow.com/a/21456918
				else
					error_log("An error had occurred with the method statement[!?]");
				// TODO: Age and Phone Number validation:=
				$user = [
					"firstname" => $firstname,
					"lastname" => $lastname,
					"emai" => $email,
					"home" => $home,
					"phone" => $phone,
					"age" => $age,
					"membership" => $membership
				];

				$encode = json_encode($user);
				$puts = file_put_contents("data/user.json", $encode);

				$data = retrieve();

				login($data);
			}
		?>

	<script>
	$("#button-submit-contract").click(function() {

		$.ajax({
			
			type: "POST",
			url: "./data/users.json",
			contentType: "application/json; charset=utf-8",
			dataType: 'json',
			data: {},
			success: function(data) { console.log("Datasets, on success: " + data); },
			error: function(err) { console.error("An error had occurred, and may have failed the POST method: " + err); }
		}); // Attribution: https://stackoverflow.com/a/6323528
	});
	</script>

	<script>$(".form-group").validate();</script>
	</div>

	<?php require_once(includes/sitemap.php); ?>
</main>
</body>

</html>