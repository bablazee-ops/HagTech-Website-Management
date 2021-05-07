<?php

/*

functions.php

Global functions used throughout the application.

*/

function safe_string($str)
{

	return preg_replace("/[^A-Za-z0-9_]/", '', $str);

}