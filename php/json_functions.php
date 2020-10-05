<?php

$url = "/~s3729065/wp/a2/data/users.json";

function key_value_itemizer($key, $value) {
	foreach($json_data as $key => $value) {

		if ($value[$index_code] == $compared_value)
			$json_data[$key][$inputted_value] = $assigned_value;
	} // The TODO we wanted to do stated inside edit_insert_json_data(){}
}

function read_json_file($url) {
	$url = "/home/sh5/S3729065/public_html/wp/a2/data/users.json";

	$json_data = file_get_contents($url);

	return json_decode($json_data);
}

function update_json_file($data, $url) {
	$json = json_encode($data);

	file_put_contents($url, $json_data);
}
// TODO Create. Read. Update. Delete
function edit_insert_json_data($data, $filename, $key, $value) { // TODO Could replace $key, $value as their own function parameters
	$json_data = file_get_contents('/~s3729065/wp/a2/data/' . $filename . '.json'); // And then call it after $data is let'ed in run-time.

	key_value_itemizer($key, $value); // The TODO code function that is for reuse in these cases.

	$json_data = json_decode($data, true);
	$json_data[] = array($key => $value);
	$decoded = $json_data;

	file_put_contents('/~s3729065/wp/a2/data/' . $filename . '.json', $decoded);
}

function delete_json_data($data, $filename, $key, $value) {
	$data = file_get_contents('/~s3729065/wp/a2/data/' . $filename . '.json');
	
	$json_data = json_decode($data, true);

	foreach ($json_data as $key => $value) {
		# code...
		if ($value[$index_code] == $compared_value)
			$array_index[] = $key;

		foreach ($array_index as $i)
			unset($json_data[$i]);
	}

	$json_data = array_values($json_data);
	$json_encoded_data = json_encode($json_data);

	file_put_contents('/~s3729065/wp/a2/data/' . $filename . '.json', $json_encoded_data);
}

?>

<!-- Note to self:
	Parameter Values: then must follow suit to their usage.
	PHP variables must be employed inside HTML appropriate code and functions.
	This way code is re-used and used effectively.
-->