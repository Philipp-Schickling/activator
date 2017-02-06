<?php

// include settings
include $_SERVER["DOCUMENT_ROOT"] . "/settings/settings.php";

// functions for dealing with database 
include M_LOGIN;

	$username = $_POST["username"];
	$password = $_POST["password"];
	$rPassword = $_POST["rPassword"];
	$department = $_POST["department"];




	/*

		handle register request

	*/


	// check if username available
	$getUser = getUser( $username );
	if( !empty($getUser) ) {

		echo "userexists";
		return;

	}

	// server-side check: passwords match? username & password given?
	$usernameGiven = !empty($username);
	$passwordGiven = !empty($password);
	$passwordsMatch = $password == $rPassword;
	$departmentGiven = !empty($department);

	if( $passwordsMatch && $usernameGiven && $departmentGiven && $passwordGiven ) {

		// hashed password
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		// create new user – hashed password
		$userData = array( $username, $hashedPassword, $department );
		new createUser( $userData );

		echo "usercreated";

	}



?>