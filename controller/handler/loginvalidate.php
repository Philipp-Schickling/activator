<?php

// include settings
include $_SERVER["DOCUMENT_ROOT"] . "/settings/settings.php";

// functions for dealing with database 
include M_LOGIN;

	$username = $_POST["username"];
	$password = $_POST["password"];
	$salt = $_POST["salt"];




	/*

		handle login request

	*/

	$validate = checkLoginData( $username, $password );

	// set ID_user if login data correct
	if( $validate == "correct" ) {

		$sql = "SELECT " . USER_COL4 . " FROM " . TAB_USER . " WHERE " . USER_COL1 . " = :" . USER_COL1;
		$data = array( ":" . USER_COL1 => $username );
		$_ = new DB_action( $sql, $data );
		$id = $_ -> result[0]["id"];

		if( isset($id) ) {

			// set session id
			$_SESSION["id"] = $id;
			// set session logged
			$_SESSION["logged"] = true;

		} else {

			new ErrorLog( "Fehler: loginvalidate" );

		}

	}

	// outputs "correct" or "incorrect"
	echo $validate;

?>