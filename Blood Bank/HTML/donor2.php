<!DOCTYPE html>
<html lang="en"> 
<head>


<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<style type="text/css">
	
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

<div class="container" >
 <div class="jumbotron" >
 <div class="row">
 <div class="col-lg-7">
 <font size="25px" > <a href="mainpage.php" style="color: #ff0000" id="header"><img  src="download.jpg" width="200" height="100" >Blood Blank</a> </font>
 </div>
</div>
</div>


<div class="container">
<h5 style="padding-top: 10px;"> Thank You for registration!</h5>
</div>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="bloodbank";

 //Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);



$fullname=$_POST['fullname'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];
$residentno=$_POST['residentno'];
$weight=$_POST['weight'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$ldate=$_POST['ldate'];
$bloodgroup=$_POST['bloodgroup'];
$state=$_POST['slct1'];
$city=$_POST['slct2'];




$sql = "INSERT INTO donor(fullname,password,cpassword,email,mobileno,residentno,address,weight,gender,date,ldate,bloodgroup,state,city)
VALUES ('$fullname', '$password','$cpassword','$email','$mobileno','$residentno','$address','$weight','$gender','$date','$ldate','$bloodgroup','$state','$city')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "";//"Error: " . $sql . "<br>" . $conn->error;
}

 
?>

</body>
</html>