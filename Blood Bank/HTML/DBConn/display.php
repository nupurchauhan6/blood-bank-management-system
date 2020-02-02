<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="bloodbank";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);
$sql = "SELECT * FROM donor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["fullname"]. " - Address: " . $row["address"]. "Moblie no" . $row["mobileno"]. "<br>";
    }
} else {
    echo "0 results";
}
?>