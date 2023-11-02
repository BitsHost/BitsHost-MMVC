<?php
/*
 * Created on Tue Oct 31 2023
 *
 * Copyright (c) 2023 BitsHost
 * 
 * Here you may host your app for free:
 * https://bitshost.biz/
 */


require 'vendor/autoload.php';

use MVC\Routes;

/////////////////////////////////////
//error
error_reporting(0);
/////////////////////////////////////

//initialize session/test////////////
session_start();
$_SESSION["username"] = "defaultAppUser";
//session_unset(); // logout
//session_write_close();
/////////////////////////////////////

define('THIS_DIR', str_replace("\\", "/", dirname(__FILE__, 2)));
define('BASE_URL', 'http://localhost/crud/MVC/mvc');

$sitePath = "/crud/MVC/mvc";
//should be empty if domain location is root; e.g. public_html
$url = $_SERVER['REQUEST_URI'];
$url = str_replace($sitePath, "", $url);

if (strpos($url, "?") !== false) {
    $url = substr($url, 0, strpos($url, "?"));
}


$start = new Routes();
$start->startRoutes($url);

