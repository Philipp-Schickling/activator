<?php

/*

	Class to get
		- requested URL
		- requested file title

	$get = $_GET;

*/

class URL {

	/* Function to get the HTML-title of the page */
	function getTitle( $get ) {

		// call to login-page
		if( !isset( $get["request"] ) ) {
			return "login";
		}

		$request = explode("/", $get["request"]);

		// e.g. (DIR_ROOT)/pages/startseite/
		$page = strtolower( $request[0] );
		$requestedPage = DIR_PAGES . $page;

		if( file_exists( $requestedPage ) ) {
			return $page;
		} else {
			return "error";
		}
	
	}

	function getSecondArgument( $get ) {

		$request = explode("/", $get["request"]);
		return $request[1];

	}

	/* Function to get the URL of the page */
	function getURL( $get ) {

		$title = $this -> getTitle( $get );
	
		// $request = explode("/", $get["request"]);

		return DIR_PAGES . $title . "/view/" . $title . ".php";
	
	}

} /* - class URL { ... } - */






/*

	function to translate content

*/

function __tr( $string ) {

	// contains all words to be translated
	global $language;


	/*

		check preferred language

	*/

	// users browser languagge
	$browserLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	// default set language
	if( isset( $_SESSION["user"]["defaultLanguage"] ) ) {
		$defaultLanguage = $_SESSION["user"]["defaultLanguage"];
	} else {
		$defaultLanguage = '';
	}

	/*

		translate appropriate word

	*/

	// translate to german if german is preferred ... else return english value
	if( $browserLanguage == 'de' || $defaultLanguage == 'de' ) {
		foreach ($language as $key => $value) {
			if( $key == $string ) {
				return $value;
			}
		}
<<<<<<< HEAD

		// if no value gets returned
		$error = new ErrorLog( "Word can not be translated. Please check language.php" );
		return $string;

	} else {

		$error = new ErrorLog( "browser language could not be determined" );

=======
	} else {

>>>>>>> 7a5aa1ca15ae325d8010aeabd9497db555093563
		return $string;

	}

<<<<<<< HEAD
=======
	// if no value gets returned
	$error = new ErrorLog();
	$error->log_error( "Word can not be translated. Please check language.php");
>>>>>>> 7a5aa1ca15ae325d8010aeabd9497db555093563

} // END OF __tr()








?>