<?php
function verify_details($form) {
	$name = $_POST["details-name"];
	$age = $_POST["details-age"];
	$address = $_POST["details-address"];

	if(filter_var($age, FILTER_VALIDATE_INT) > 16 || filter_var($age, FILTER_VALIDATE_INT) < 90)
		echo "Age is a validated integer, and is within the required range.";
	else echo "Age is not a valid number, please re-do.";

	if(!preg_match("/^(.*[0-9]\d{1,3}\s\w\s)(.*[A-Za-z]\s\w\s)(.*[A-Za-z]\s\w\s)(.*[A-Za-z]\d{3,}\s\w\s)(.*[0-9]\d{4,}\s\w\s)(.*[A-Z]\d{2,})$/", $address))
	/*	First Regex Pattern: (.*[0-9]\d{1,3}\s\w\s) -- Up to 3 digits for a street number,
			then escape characters for whitespace.
		Second Regex Pattern: (.*[A-Za-z]\s\w\s) -- Any alphabet,
			lower or uppercase, consisting of any possible number limit.
		Third Regex Pattern: (.*[A-Za-z]\d{3,}\s\w\s) -- for State codes.
		Fourth Regex Pattern: (.*[0-9]\d{4,}\s\w\s) -- Postcode.
		Fifth Regex Pattern: (.*[A-Z]\d{2,}) -- Country code.
	*/
		echo "Address is not valid, must redo.";
	else echo "Address is valid.";

	$name_protected = htmlspecialchars($name);
	$age_protected = htmlspecialchars($age);
	$address_protected = htmlspecialchars($address);

	$data = array(
		array($name_protected => 1, $age_protected => 2, $address_protected => 3)
	);

	$json = json_encode($data, JSON_PRETTY_PRINT);

	file_put_contents("data/details.json", $data);
}

function get_details() {
	$details = file_get_contents("data/details.json");
	$json = json_decode($details, JSON_PRETTY_PRINT);

	echo $json;
}

function update_details() {
	$details = file_get_contents("data/details.json");
	$json = decode($details, JSON_PRETTY_PRINT);

	foreach ($item as $key => $value) {
		if($value[1] == 1)
			$item[$key][1] = $_POST["details-name"];
		elseif($value[2] == 2)
			$item[$key][2] = $_POST["details-age"];
		elseif($value[3] == 3)
			$item[$key][2] = $_POST["details-age"];

		$data = array_push($data, $json);

		file_put_contents("data/details.json", $data);
	}
}
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">

<head>
	<link rel="stylesheet" href="css/details.css">
</head>

<body class="grid">
	<div id="details-form-group">

		<form id="details-form" action="php/action.php">
			<label for="details-name">Name:</label>
			<input type="text" id="details-name" value="details-name" name="details-name" required>
			
			<label for="details-age">Age:</label>
			<input type="number" id="details-age" value="details-age" name="details-age">

			<label for="details-address">Address:</label>
			<input type="text" id="details-address" value="details-address" name="details-address" required>

			<label for="details-submit">Submit:</label>
			<input type="submit" id="details-submit" value="details-submit" name="details-submit">
		</form>
	
	</div>

	<div>

		<ul>

			<?php get_details();
				//echo "<li>"; echo $name; echo "</li>";
				//if(get_details()) echo "<a href="php/update.php">Edit Detail</a>"; // May comment out for debuggin purposes.
			?>
			
		</ul>

	</div>
</body>


<footer>

</footer>
</html>