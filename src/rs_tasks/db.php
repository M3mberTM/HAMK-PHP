<?php
// shell.hamk.fi server name >>> localhost
//$servername = "localhost";
//$username = "richard23001";
//$password = "z0zBIlZz";
//$dbname = "wp_richard23001";

// local server
$servername = "php24-db-1";
$username = "crud_app";
$password = "test0406";
$dbname = "crud_app";


// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>