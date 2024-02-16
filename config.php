<?php 
session_start();
$error_reporting=1;
ini_set("display_errors",$error_reporting);
$error_reporting = 1;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homedecor_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Database Connection failed: " . $conn->connect_error);
}



?>