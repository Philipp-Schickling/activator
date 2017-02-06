<?php
	
	session_start();
	
/* 

	File gets included on every (view-)page (contained in template.php)

*/

	// Defined constants, e.g. DIR_ROOT 
	include "constants.php";

	// include session settings
	include SESSION;

	// include database classes
	include DATABASE;

	// include Error-Log & debug functions
	include ERROR_LOG;
	include DEBUG;

	// translator
	include LANGUAGE;

	// functions
	include GENERAL_PHP;

?>