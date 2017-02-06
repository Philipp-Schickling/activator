<?php


/*
* 
*/
class ErrorLog {

	function __construct( $message ) {

		$errorFile = explode(DIR_ROOT, __FILE__);
		$errorMessage = "Message: " . $message . ".\nFile: " . $errorFile[1] . "\n\n";

		error_log( $errorMessage, 3, DIR_ERRORLOG );

	}

}



?>