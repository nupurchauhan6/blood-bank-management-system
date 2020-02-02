<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="bloodbank";

 //Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);

$sql = "DELETE FROM donor WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>