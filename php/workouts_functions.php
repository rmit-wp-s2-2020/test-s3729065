<?php
/*	Code Attribution:
		Shekhar Kalra: Lectures: 7 - Lecture 9. Example Code provided in Canvas
		Matt Bolger: Tutorials: 7 - Tutorial 9. Example Code provided in Canvas
		Trevor Reynolds: Labs: 7 - Lab 9. Example Code provided in Canvas
*/

require_once('json_functions.php');
require_once('user_session_functions.php');

function list_workouts() {
	return read_json_file('../data/workouts.json');
}

function create_workout($form, $email, $workout) {

	$date = 'date';
	$time = 'time';

	$workout = [
		'date' => htmlspecialchars(trim($form['date'])),
		'time' => $form['time']
	];

	if ($form[$date])
		$errors = 'Required: Date. Formatted in: Day | Month | Year';

	else $form[$date] = (int) $form[$date];
	
	if ($form[$time])
		$errors[$time] = 'Time (of workout activity) is required in order to proceed.';

	else $form[$time] = (int) $form[time];

	$user = read_user();
	update_user($user);
}

function delete_workout() {
	// TODO: Create a delete workout activity/category function
	$json = read_json_file('../data/workouts.json');
}

?>