<?php
// Code Attribution:
// Web Programming - Week 9: Tutorial 9 with Matt Bolger
// Web Programming - Week 9: Lab 9 with Trevor Reynolds
function salt_and_hash($salt) {
	$salt = bin2hex(openssl_random_pseudo_bytes(8));

	return $salt;
}

function generate_password_hash($password) {
	return crypt($password);
}

function verify_password_hash($password, $salt, $hash) {
	$tokens = explode('$', $hash);

	return $hash === generate_password_hash($password, $salt);
}
?>