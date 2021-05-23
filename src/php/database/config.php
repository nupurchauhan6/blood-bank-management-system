<?php
$servername = "localhost";
$username = "root";
$password = "root";
$databasename="bloodbank";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>