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
<div class="row">
<div class="col-lg-5">
<h6 style="padding-top: 10px;"> Send mail to donor </h6>
<form class="form-group">
Your Email:
<input type="text" name="mailrecp" class="form-control"><br/>

<button type="Submit"  class='btn btn-success'> Send Mail </button>
</div>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="bloodbank";

 //Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);



$mail=$_POST['mailrecp'];
// Multiple recipients
$to = $mail; // note the comma

// Subject
$subject = 'Donor Information';

// Message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
$headers[] = 'From: Birthday Reminder <birthday@example.com>';
$headers[] = 'Cc: birthdayarchive@example.com';
$headers[] = 'Bcc: birthdaycheck@example.com';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
?>
</div>
</div>

</body>
</html>