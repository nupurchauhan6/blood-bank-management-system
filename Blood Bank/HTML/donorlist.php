<?php


session_start();
?>
<!DOCTYPE html>
<html lang="en"> 
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

    table,th,td
{
border:1px solid black;
padding-right: 65px;
background-color: white;
color: black;
padding: 15px;
}
table
{
    border-collapse: collapse;
    width:50%;
    margin-top: 10px;

}
td
{
    height: 50px;
    vertical-align: bottom;
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
 <font size="25px" > <a href="admin.php" style="color: #ff0000" id="header"><img  src="download.jpg" width="200" height="100" >Blood Blank</a> </font>
 </div>
</div>
</div>
 </div>


<table align="center">
<tr style="margin-bottom:10px;">
<th>Email ID :</th>
<th>Profile</th>
<th>Donor details</th>
</tr>



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



 $sql="SELECT * FROM donor";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {




echo '<tr>';
echo '<td>';
echo  $row["email"];
echo '</td>';
echo '<td>';
echo '<form action="details.php">';
echo  '<input type="Submit" class="btn btn-success"  value=" View details">' ;
$_SESSION["name"]=$row["email"];
echo  '</form>';
echo '</td>';
echo '<td>';
echo '<form action="donor.php">';
echo  '<input type="Submit" class="btn btn-success" value=" View Records" > ';
echo  '</form>';
echo '</td>';
echo '</tr>';



 




    }
} else {

   echo "ok";
}


?>



</table>

</body>
</html>