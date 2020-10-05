<?php

require_once('json_functions.php');

function read_user() {
	return read_json_file('../data/users.json');
}

function update_user($user) {
	update_json_file($user, '../data/users.json');
}

function get_user($email) {
	$user = read_user();

	return $user[$email];
}

function get_user_activity($email, $workout) {
	$user = get_user($email);

	return $user[$workout];
}

?>