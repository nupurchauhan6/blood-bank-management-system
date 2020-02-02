<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="bloodbank";

 //Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);

 $sql = "UPDATE donor SET fullname='$fullname' WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


?>