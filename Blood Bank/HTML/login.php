<?php


session_start();
?>
<!DOCTYPE html>
<head>


<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="mainpage.css">
<style>

.jumbotron{
	padding-bottom:10px;
	padding-top: 10px;
	margin: 0;
	 background-color: #fff;
}
img
{
	 left: 8px;
}

#header {
    text-decoration: none;
    size:100px;
    margin-top: auto;
    background-color: #fff;
}

	


</style>
</head>
<body style="background-image:url('try1.jpg');-webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        color:#fff;">



<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="bloodbank";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
else {
echo "";
}


$email=$_POST['email'];
$password=$_POST['password'];


$_SESSION["email"]=$email;
$_SESSION["password"]=$password;


if($email=="admin@gmail.com"&&$password=="admin")
{
    include 'admin.php';
}
else
{

 $sql="SELECT * FROM donor where email='$email'AND password='$password'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


include 'mainpage2.php';



    }
}
 else {

    echo '<div class="container" >';
 echo '<div class="jumbotron" >';
 echo '<div class="row">';
echo  '<font size="25px" > <a href="mainpage.php" style="color: #ff0000" id="header"><img  src="download.jpg" width="200" height="100" >Blood Blank</a> </font>';
echo  '</div>';
echo '</div>';
echo '</div>';

echo  '</div>';
    echo "NO SUCH USERNAME FOUND! ";
}

}

?>










































