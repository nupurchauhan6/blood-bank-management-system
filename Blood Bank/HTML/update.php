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
}



</style>
<script type="text/javascript" src="donor.js"></script>
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
 <font size="25px" > <a href="mainpage2.php" style="color: #ff0000" id="header"><img  src="download.jpg" width="200" height="100" >Blood Blank</a> </font>
 </div>
</div>
</div>
 </div>


<div class="container" style="margin-top: 10px;">
<div class="row">








<div class="col-lg-8">
<form name="myform" method="post"  action="update2.php" onsubmit="return(validate());"  style="background-color: white; color:black; ">
<h6>Donor Details</h6>  


<div class="row">
<div class="col-lg-1">
</div>

<div class="col-lg-5">
<div class="form-group">
Full Name: 
<input type="text" name="fullname" class="form-control"   required>
</div>


<div class="form-group">
Gender: </br>
<input type="radio" name ="gender" value="Male"   checked>Male </br>
<input type="radio" name="gender" value="Female">Female
</div>

<div class="form-group">
Mobile No:
<input type="text" name="mobileno" class="form-control"  required>
</div>

<div class="form-group">
Address:
<textarea name="address" class="form-control"  required></textarea>
</div>

<div class="form-group">
Blood Group:
<select class="form-control" name="bloodgroup" required>

                               <option value="">-Select Blood Group-</option>
                                    
                                <option  value="A+">A+</option>
                                <option  value="A-">A-</option>
                                <option  value="B+">B+</option>
                                <option  value="B-">B-</option>
                                <option  value="AB+">AB+</option>
                                <option  value="AB-">AB-</option>
                                <option  value="O+">O+</option>
                                <option  value="O-">O-</option>
                              </select>
</div>



<div class="form-group">
Select State:
<select  id="slct1" name="slct1" onchange="populate('slct1','slct2')" class="form-control">
<option  value="">-Select State-</option>
<option  value="Maharashtra">Maharashtra</option>
<option  value="Gujarat">Gujarat</option>
</select>
</div>

<div class="form-group">
Select City:
<select id="slct2" name="slct2" class="form-control" >
<option  value="">-Select City-</option>
</select>
</div>

</div>



<div class="col-lg-5">


<div class="form-group">


<div class="form-group">
Residential No:
<input type="text" name="residentno" class="form-control"  required>
</div>

<div class="form-group">
Date Of Birth:
<input type="Date" name="date" class="form-control"  required>
</div>

<div class="form-group">
Weight:
<input type="text" name="weight" class="form-control"  required>
</div>



<div class="form-group">
Date of last blood donation :
<input type="Date" name="ldate" class="form-control">
</div>

<div class="form-group">
How often do you donate blood?
<select class="form-control"  required> 
<option  placeholder= "select">select<br>
     <option value="Yet to donate">Yet to donate<br>
     <option value="regular donar">regular donar<br>
     <option value="on need basis">on need basis<br>
     </select>
</div>

</div>
</div>


<hr/>
<div class="row" >
<div class="col-lg-1">
</div>
<div class="col-lg-11">           
<h6>Please check your eligibility to donate blood.</h6>
<div class="form-group">
<input type="checkbox"  required>Overall health- The donor must be fit and healthy, and should not be suffering from transmittable diseases.  </br>
<input type="checkbox" required>Age and weight- The donor must be 18–60 years old and should weight a minimum of 50 kg. </br>
<input type="checkbox" required>Pulse rate- Between 50 and 100 without irregularities. </br>
<input type="checkbox" required>Hemoglobin level- A minimum of 12.5 g/dL. </br>
<input type="checkbox" required>Blood pressure- Diastolic: 50–100 mm Hg, Systolic: 100–180 mm Hg.</br>
<input type="checkbox" required>Hemoglobin level- A minimum of 12.5 g/dL. </br>
<input type="checkbox" required>Body temperature- Should be normal, with an oral temperature not exceeding 37.5 °C.</br>
<input type="checkbox" required>The time period between successive blood donations should be more than 3 months. </br>
</div>
<input type="Submit" class='btn btn-success' value="Update" > 
</div>
</div>
</form>
</div>
</div>
</div>

</body>
</html>