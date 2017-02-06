<?php

	// check if user is logged in
		if( !$_SESSION["logged"] === true ) {
		header( "Location: login" );
	}

	$_ = new URL;
	$pageTitle = $_ -> getTitle( $_GET );

?>
