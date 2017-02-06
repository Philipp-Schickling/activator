<?php

/*

	SETTINGS – require settings.php -> Database, Error-Log, Constants, Functions, Language

*/

require "settings/settings.php";

/*

	REQUIRE PAGE – Depending on $_GET: include the appropriate page

*/


$url = new URL();
$include = $url -> getUrl( $_GET );

require $include;


?>