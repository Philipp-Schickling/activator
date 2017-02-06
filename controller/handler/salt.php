<?php

/*

	class to
		- create salt to use with 'dangerous' links pointing to sites that either should not be executed twice (such as deleting posts) or should not be misused (e.g. attacker sending delete-post to victim) – storing them in the db afterwards
		- verifying salt on those 'dangerous' sites and stop script from being executed when hashes do not match

	How to use it:	
		// create salt in order to avoid redirecting same link/form twice – designate it to 'dangerous' links as get parameter
		$newSalt = new Salt();
		$salt = $newSalt->createSalt( $_SESSION["id"] );


*/

class Salt {

	// create random salt based on timestamp
	function cSalt() {
		
		// include current timestamp in order to create a unique salt every time
		$timestamp = $_SERVER['REQUEST_TIME'];
		// create salt
	    $salt = $timestamp . md5(uniqid(rand(), true));   
	    return $salt;

	}

	// called on site with unique link
	function createSalt( $id ) {

		$salt = md5( $this::cSalt() );
		$hash = md5( $salt . $id );

		// store hash in db
		$data = array( ":id" => $id, ":hash" => $hash );
		$id = array( ":id" => $id );
		new DB_action( "DELETE FROM salt WHERE id = :id", $id );
		new DB_action( "INSERT INTO salt(id, hash) VALUES(:id, :hash)", $data );
		return $salt;

	}

	// called on target-page – function returns 1 if hashes match
	// parameters: $cId = $_SESSION["id"], $gSalt = $_GET["salt"], $hash = md5( $_GET["salt"] . $_SESSION["id"] )
	function verifySalt( $cId, $gSalt, $hash ) {

		// get hash from db and delete it
		$dbHash = $this::getHashFromDB( $cId );

		// compare the hashs
		$verify = $dbHash == $hash;

		return $verify;

	}

	function getHashFromDB( $cId ) {

		$data = array(":id" => $cId );
		$getDbHash = new DB_action( "SELECT hash FROM salt WHERE id = :id", $data );

		$result = $getDbHash -> result;
		$dbHash = $result[0]["hash"];

		// delete hash in order to prevent it from being reused
		new DB_action( "DELETE FROM salt WHERE id = :id", $data );

		return $dbHash;

	}

}

?>