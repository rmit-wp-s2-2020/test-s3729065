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
		array($name_protected, $age_protected, $address_protected)
	);

	$json = json_encode($data, JSON_PRETTY_PRINT);

	file_put_contents("../data/details.json", $data);
}

function get_details() {
	$details = file_get_contents(../data/details.json");
	$json = decode($details, JSON_PRETTY_PRINT);

	echo $json;
}

function update_details() {
	$details = file_get_contents(../data/details.json");
	$json = decode($details, JSON_PRETTY_PRINT);

	for (array($json)) {
		$data = array($json);

		file_put_contents("../data/details.json", $data);
	}
}
?>