<?php
//to display errors
ini_set('display_errors', 1); 
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn =  mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("connection failed" . mysqli_connect_error() );
}

//echo "connection successful.";

?>