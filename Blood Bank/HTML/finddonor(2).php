
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



</head>

<body >

<div class="container" >
 <div class="jumbotron" >
 <div class="row">
 <div class="col-lg-7">
 <font size="25px" > <a href="mainpage2.php" style="color: #ff0000" id="header"><img  src="download.jpg" width="200" height="100" >Blood Blank</a> </font>
 </div>
</div>
</div>


<div class="container">
<form method="post" action="fd(2).php">
<div class="row">
<div class="col-lg-3">
</div>
<div class="col-lg-6">
<h4> Find a donor </h4>
Select Blood Group:
<select class="form-control"  name="bloodgroup" required>

                               <option value="">-Select Blood Group-</option>
									
								<option  value="A+">A+</option>
								<option  value="A-">A-</option>
								<option  value="B+">B+</option>
								<option  value="B-">B-</option>
								<option  value="AB+">AB+</option>
								<option  value="AB-">AB-</option>
								<option  value="O+">O+</option>
								<option  value="O-">O-</option>>
								
								</select>

Select State:
<select  id="slct1" name="slct1" onchange="populate('slct1','slct2')" class="form-control">
<option  value="">-Select State-</option>
<option  value="Maharashtra">Maharashtra</option>
<option  value="Gujarat">Gujarat</option>
</select>

Select City:
<select id="slct2" name="slct2" class="form-control" >
<option  value="">-Select City-</option>
</select>

<input type="Submit" class='btn btn-success' > 

</div>
</div>
</form>
</div>

</body>
</html>