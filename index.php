<?php

/*

index.php

Loads views and controllers.

*/

require_once("api/functions.php");

$request = safe_string($_SERVER['REQUEST_URI']);

if (file_exists("views/customer/".$request.".html"))
{
    include("./views/customer/".$request.".html");
} else {

    $headers  = "HTTP/1.0 404 Not Found\r\nContent-Type: text/html";
    header($headers);

    echo "Page not found. (404)";
    die();

}
