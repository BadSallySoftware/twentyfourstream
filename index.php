<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './Core/Config.php';
include './Core/Controller.php';
include './Core/Database.php';
include './Core/Router.php';
include './Core/Authenticator.php';
include './Core/Helpers.php';

global $db;
global $auth;

$db = new DatabaseConnection();
$auth = new Authenticator();

$path = $_SERVER['PATH_INFO'];

$path = ltrim($path, '/');

//Set default page title
$title = "Bad Sally - MVC";


//Send the path to the router
Router::dispatch($path);
