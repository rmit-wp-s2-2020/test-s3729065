<?php
function display_errors($errors, $values) {
	$errors = [];

	echo "Errors in Value(s):\n" . "\"" . $errors[$values] . "\"";
}

function display_special_values($form, $values) {
	echo "Displayed Form Value(s):\n" . "\"" . htmlspecialchars($form[$values]) . "\"";
	return htmlspecialchars($form[$values]);
}
// TODO Trun display_special_values as a global variable
function decode_special_values() {
	display_special_values($form, $values);

	return htmlspecialchars_decode($form[$values]);
}
?>