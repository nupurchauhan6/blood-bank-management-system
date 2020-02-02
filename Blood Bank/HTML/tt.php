
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
#container{
	width:1120px;
height: 450px;
border:0;
margin: 0 auto;
position: relative;
margin-top: 10px;
}
#container>img{
width:100%;
height: 100%;
position: absolute;
}
#container>.btn{
position: absolute;
width:50px;
height: 50px;
border: none;
border-radius: 25px;
top:200px;
background: white;
color:  #5cb85c;
font-size: 20px;
}
#container>#btn1:hover{
box-shadow: 10px 0px 20px 0px black;
}
#container>#btn2:hover{
box-shadow: -10px 0px 20px 0px black;
}
#container>#btn2{
position: relative;
float: right;
}
ul li
{
list-style:none;display:block;
display:inline;
}

a:link, a:visited {
   
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}
.jumbotron{
	padding-bottom:10px;
	padding-top: 10px;
	margin: 0;
	 background-color: #fff;
}

#header {
    text-decoration: none;
    size:100px;
    margin-top: auto;
    background-color: #fff;
}

	

#menu {
text-align:left;
margin:0px;padding:0px;
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
 <font size="25px" > <a href="mainpage.php" style="color: #ff0000" id="header">Tour and Travel</a> </font>
 </div>
</div>
</div>
 </div>


<div class="container">
 <form method="post"  style="padding-top: 10px;padding-bottom:10px;" >
<div class="row">
<div class="col-lg-10">
</div>
 <div class="col-lg-2" align="right">
<input type="Submit" class='btn btn-success' value="Logout"> 
 </div>
 </div>
 </form>
 </div>






 

<div class="container" style="padding-top: 10px;">
<ul id="menu" >
<li>
<a  style="background-color: #5cb85c;"  class='btn btn-success'>Home </a>
</li>
<li>
<a  style="background-color: #5cb85c;"  class='btn btn-success'>Package Management</a>
</li>
<li>
<a style="background-color: #5cb85c;"  class='btn btn-success'>View Feedback</a>
</li>
<li>
<a  style="background-color: #5cb85c;"  class='btn btn-success'>View Booking Info </a>
</li>

</ul>
</div>

</body>
</html>