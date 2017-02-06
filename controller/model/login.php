<?php

/* 

	Get the user from the database

*/

function getUser( $username ) {

	$sql = "SELECT * FROM " . TAB_USER . " WHERE " . USER_COL1 . " = :" . USER_COL1;
	$validate = new DB_action( $sql, array( ":username" => $username ) );
	$result = $validate -> result;

	return $result;

}





/*

	Check login data

*/

function checkLoginData( $username, $password ) {


	$result = getUser( $username );

	if( empty( $result ) ) {

		return "noUser";

	}

	if( !empty($result) ) {

		// hash-password stored in database 
		$storedPasswordHash = $result[0]["password"];

		// verify password
		if ( password_verify( $password, $storedPasswordHash ) ) {
			
			return "correct";

		} else {

			return "incorrect";

		}

	}

}

?>