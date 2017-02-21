<?php

/*

	// define DIR(ECTORIES)

*/

	// host 
	define( "DIR_HOST", "http://localhost:8888/" );

	// root directory
	define( "DIR_ROOT", dirname(__DIR__) . "/" );

		// directory "controller"
		define( "DIR_CONTROLLER", DIR_ROOT . "controller/");

			define( "DIR_MODEL", DIR_CONTROLLER . "model/" );
				define( "DATABASE", DIR_MODEL . "database.php" );
				define( "M_LOGIN", DIR_MODEL . "login.php" );
				
			define( "DIR_HANDLER", DIR_CONTROLLER . "handler/" );
				define( "GENERAL_PHP", DIR_HANDLER . "general.php" );
				define( "H_LOGIN", DIR_HANDLER . "login.php" );
				define( "SALT", DIR_HANDLER . "salt.php" );

			define( "DIR_ASSETS", DIR_CONTROLLER . "assets/");

				// define PHP, CSS and Javscript Directories - rewritten by .htaccess, that's why those files are called by e.g. href="assets/css/general.css"
				// exception: DIR_PHP (included, no echo on html-page)
				define( "DIR_CSS", "assets/css/" );
					define( "GENERAL_CSS", DIR_CSS . "general.css" );
					define( "GENERAL_GRID", DIR_CSS . "grid.css" );
					define( "RESET_CSS", DIR_CSS . "reset.min.css" );
					define( "LOGIN_CSS", DIR_CSS . "login.css" );
				define( "DIR_JS", "assets/js/" );
					define( "JQUERY", DIR_JS . "jquery.min.js" );
					define( "MASONRY", DIR_JS . "masonry.js" );

					define( "LOGIN_JS", DIR_JS . "login.js" );
				define( "DIR_PHP", DIR_CONTROLLER . "assets/php/"); // exception: debug.php is included
					define( "DEBUG", DIR_PHP . "debug.php");

		// directory "settings"
		define( "DIR_SETTINGS", DIR_ROOT . "settings/");
			define( "CONSTANTS", DIR_SETTINGS . "constants.php");
			define( "LANGUAGE", DIR_SETTINGS . "language.php");
			define( "ERROR_LOG", DIR_SETTINGS . "error_log.php");
			define( "SESSION", DIR_SETTINGS . "session.php");

		// directory "pages"
		define( "DIR_PAGES", DIR_ROOT . "pages/");
			// subdirectory "templates"
			define( "DIR_TEMPLATES", DIR_PAGES . "templates/");
				define( "PAGE_TEMPLATE_HEAD", DIR_TEMPLATES . "head.php");
				define( "PAGE_TEMPLATE_HEADER", DIR_TEMPLATES . "header.php");
				define( "PAGE_TEMPLATE_METADATA", DIR_TEMPLATES . "metadata.php");

			// subdirectory "error"
			define( "DIR_ERROR", DIR_PAGES . "error/");
				define( "DIR_ERROR_VIEW", DIR_ERROR . "view/");
					define( "PAGE_ERROR", DIR_ERROR_VIEW . "error.php");

			// subdirectory "login"	
			define( "DIR_LOGIN", DIR_PAGES . "login/");
				define( "PAGE_LOGIN_VIEW", DIR_LOGIN . "view/");
					define( "PAGE_LOGIN", PAGE_LOGIN_VIEW . "login.php");
				define( "PAGE_LOGIN_CONTROLLER", DIR_LOGIN . "controller/");
					define( "CONTROLLER_LOGIN", PAGE_LOGIN_CONTROLLER . "login.php");

			// subdirectory Startseite	
			define( "DIR_STARTSEITE", DIR_PAGES . "startseite/");
				define( "PAGE_STARTSEITE_VIEW", DIR_STARTSEITE . "view/");
					define( "PAGE_STARTSEITE", PAGE_STARTSEITE_VIEW . "startseite.php");
				define( "PAGE_STARTSEITE_CONTROLLER", DIR_STARTSEITE . "controller/");
					define( "CONTROLLER_STARTSEITE", PAGE_STARTSEITE_CONTROLLER . "startseite.php");





/* 

	Define database

*/

// General database setting
define( "DB_HOST", "localhost" );
define( "DB_NAME", "TestDatabase" );
define( "DB_USER", "root" );
define( "DB_PASSWORD", "root" );

	// table – user
	define( "TAB_USER", "user" );
		define( "USER_COL1", "username" );
		define( "USER_COL2", "password" );
		define( "USER_COL3", "department" );
		define( "USER_COL4", "id" );

	// table – session id
	define( "TAB_SESSION", "session" );





/* 

	define logs

*/

	define( "DIR_ERRORLOG", "/Volumes/Akz1/mev/060000_abtlg_intern/mev060008ausbildung%0/3_philipp_schickling/Sonstiges:nicht_Aktuelles/php/settings/logs/php_error.log" );
	
	define( "DIR_DBLOG", "/Volumes/Akz1/mev/060000_abtlg_intern/mev060008ausbildung%0/3_philipp_schickling/Sonstiges:nicht_Aktuelles/php/settings/logs/DB_actions.log" );





/*

	list of used SESSION-variables

*/

	// $_SESSION["id"]
	// $_SESSION["user"]
	// $_SESSION["salt"]






/*

	list of html elements for debugging

*/

	define( "br", "<br>" );
	
?>