
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
form {
    padding-top: 100px;
    padding-right: 80px;
    padding-bottom: 100px;
    padding-left: 80px;

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
</div>





<div class="container">
<form method="post" action="feedback2.php">
<div class="row">
<div class="col-lg-3">
</div>
<div class="col-lg-6" >
<h5> Rate this website! </h5>
<p> Please let us know your experience with our website. </p>


Full name:
<input type="text" class="form-control" name="fullname" required></br>



Email:
<input type="text" class="form-control" name="email" required></br>

Overall,how satisfied were you with the service?</br>
<input type="radio" name="feedback" value="Very satified." >Very satified. </br>
<input type="radio" name="feedback" value="Satified.">Satisied.</br>
<input type="radio" name="feedback" value="Neutral.">Neutral.</br>
<input type="radio" name="feedback" value="Unsatisfied.">Unsatisfied.</br>

Any suggestions for improvement?
<textarea class="form-control" name="suggestions"> </textarea></br>

Your comments, complaints or acknowledgments:
<textarea class="form-control" name="comments"> </textarea></br>


<input type="Submit" class='btn btn-success' >


</div>
</div>
</form>
</div>

</body>
</html>