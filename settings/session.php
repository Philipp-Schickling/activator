<?php

/*

	// Start session

*/

	// prevent form-data to be triggered when refreshing or backwards-redirecting
	ob_start();

	error_reporting(1);

	// determine the way session id is generated - more entropy than the PHP's default randomizer
	ini_set("session.entropy_file", "/dev/urandom");
	ini_set("session.entropy_length", "512");

	// Prevents javascript XSS attacks aimed to steal the session ID – preventing session hijacking
	ini_set('session.cookie_httponly', 1);

	// Session ID cannot be passed through URLs – prevent session fixation
	ini_set('session.use_only_cookies', 1);

	// // Uses a secure connection (HTTPS) if possible
	// ini_set('session.cookie_secure', 1);

	// Uses a strong hash
	ini_set('session.hash_function', 'whirlpool');






/*

	Regenerate session every 300 seconds

*/
	// set regenerate-session on first approach
	if( !isset($_SESSION['rg']) ) {
	
	    session_regenerate_id( true );

	    $_SESSION['rg'] = time();
	
	}

	// Regenerate id every five minutes:
	if( $_SESSION['rg'] < time() - 0 ) {
	
		// new session id
	    session_regenerate_id( true );
	    // new canary
	    $_SESSION['rg'] = time();
	
	}

?>