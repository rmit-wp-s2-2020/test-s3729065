<?php
require_once('../user_session_manager.php');
require_once('../user_session_functions.php');
require_once('../workouts_functions.php');
$user = is_logged_in($session);
$workout = list_workouts();
$activity = get_user_activity($user['email'], $workout['workout']);
?>

<!doctype html>
<title>Adrenaline Buzz Club | Form</title>

<html lang="en">
<meta charset="utf-8">

<?php include("../includes/navigator.php") ?>

<body>
<main class="container">

	<section>
		<form action="../success.php" method="post">
		<div><input type="text" class="form-control" id="name-input" placeholder="Name"></div><br>

			<div><input type="text" class="form-control" id="description-input" placeholder="Description"></div><br>

			<div><input type="datetime-local" name="" class="form-control" id="date-time-input"></div><br>

			<div><button type="submit" class="btn btn-success btn-submit" id="form-button-submit">Submit</button></div><br>

			<div><a href="workouts.php" class="btn btn-outline-secondary btn-cancel">Cancel and Return</a></div><br>
		</form>
	</section>

	<script>
var name = document.getElementById("name-input");
var desc = document.getElementById("description-input");
var dateTime = document.getElementById("date-time-input");

$(document).ready(function () {

$(".btn-submit").click(function() {

	$.ajax({
		
		type: "POST",
		url: "../../data/workouts.json",
		contentType: "application/json; charset=utf-8",
		dataType: 'json',
		data: { Workout Name: name, Workout Description: desc, Date/Time: dateTime },
		success: function(data) { console.log("Data, on success: " + data) },
		error: function(err) { console.error("An error had occurred, and may have failed the POST method: " + err); }
	});
});

});
// Code Attribution:
// Jquery Ajax Posting json to webservice: https://stackoverflow.com/a/6323528
// How to submit a form with AJAX/JSON?: https://stackoverflow.com/a/3515004
</script>

</main>
</body>

<footer>
<?php require_once("../includes/sitemap.php") ?>
</footer>

</html>

<?php
/* TODO Usage of JSON Create, Read, Update; and Delete of User Data. Implement here:
 * Use our "json_functions.php" file here.
 * Need to capture the HTML attributes as PHP values.
*/

// TODO code ...

// Breakline with commend here to pretty up code.
?>