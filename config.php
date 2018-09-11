<?php
session_start();

$host='localhost';
$db = 'richard';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db";
 
try{
 // create a PDO connection with the configuration data
 $conn = new PDO($dsn, $username, $password);
 
 // display a message if connected to database successfully
 if($conn){
     //
        }
}catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}

if (isset($_SESSION["user_id"])) {
    define("AUTH", true);
} else {
    define("AUTH", false);
}

# Check Auth Middleware
if (defined('AUTH_REQUIRED') && AUTH==false) {
    die("<h1>Login to see page-content</h1>");
}