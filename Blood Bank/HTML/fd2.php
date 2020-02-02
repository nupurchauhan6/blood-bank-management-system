<!DOCTYPE html>
<html lang="en"> 
<head>


<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="donor.js"></script>
<link rel="stylesheet" type="text/css" href="finddonor.css">
<style type="text/css">
#form
{
    margin-top: 10px;
    padding-top: 10px;
    padding-right: 0px;
    padding-bottom: 10px;
    padding-left: 0px;
}
</style>


</head>

<body >

<div class="container" >
 <div class="jumbotron" >
 <div class="row">
 <div class="col-lg-7">
 <font size="25px" > <a href="mainpage.php" style="color: #ff0000" id="header"><img  src="download.jpg" width="200" height="100" >Blood Blank</a> </font>
 </div>
</div>
</div>

<h5> SEARCH RESULT IS: </h5>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="bloodbank";

 //Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);

$bloodgroup=$_POST['bloodgroup'];
$state=$_POST['slct1'];
$city=$_POST['slct2'];





echo "Your Search -"."<br/>"."Blood group:"." ".$bloodgroup." "."State:"." ".$state." "."City:"." ".$city."<br/>";
 
 $sql="SELECT * FROM donor where city='$city'AND bloodgroup='$bloodgroup'";
 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    echo '<div class="container" style="background-color:white; color:black;">';
    echo '<form action="fd3.php" id="form">';
    echo '<div class="row">';

    echo '<div class="col-lg-5">';
    echo "Name:"." ". $row["fullname"]."<br/>";
    echo "Address:"." ".$row["address"]."<br/>";
    echo "Blood Group:"." ". $row["bloodgroup"]."<br/>";
    echo '</div>';
    
    echo '<div class="col-lg-5">';
    echo "Moblie no:"." " .$row["mobileno"]."<br/>";
    echo '</div>';
    
    echo '<div class="col-lg-2">';
    echo '<button type="submit" class="btn btn-success">Send Request</button>';
    echo '</div>';
     
    echo '</div>';
    echo '</form>';
    echo '</div>';

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>