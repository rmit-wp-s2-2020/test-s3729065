<?php //Code Attribution: Shekhar Kalra: Week 8 Lecture: Example 10
	// TODO: create user_session_generate() {}
	$create_read_user_session = session_start();

	$session = isset($_SESSION[$create_read_user_session]); // User Session

	function is_logged_in() { return $session; }

	function login($form) {
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		if(filter_var($form[$email], FILTER_VALIDATE_EMAIL) == false)
			print_r("Please try again. Email contains invalid input.");

		elseif($_SERVER["REQUEST_METHOD"] == "POST") {
			// TODO: Do something...
			return $email;
		}

		elseif ($form[$email])
			print_r("Please try again. Email contains invalid input.");

		if(filter_var($form[$password], FILTER_VALIDATE_REGEXP) == false)
			var_dump("Please try again. Password or Email are invalid input.");

		if($form[$password])
			var_dump("Please try again. Password or Email are invalid input.");

		elseif($_SERVER["REQUEST_METHOD"] == "POST") {
			return $password;
		}

		if(!preg_match("/^(.*[A-Z])(.*[a-z])(.*[0-9])(.*[1^&])[a-zA-Z0-9!^&]{6,24}$/", $password))
			print_r("Password does not match wanted criteria: Minimum of 6 characters.");
		// Regular Epression for Password - Attribution: https://stackoverflow.com/a/21456918

		else
			return error_log("An error had occurred with the method statement[!?]");
	}

	function user_session_out() {
		session_destroy();
	} // Parse error: syntax error, unexpected ')', expecting :: (T_PAAMAYIM_NEKUDOTAYIM) in /home/sh5/S3729065/public_html/wp/a2/php/user_session_manager.php on line 48 
?>