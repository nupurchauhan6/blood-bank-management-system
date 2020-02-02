
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
 <font size="25px" > <a href="mainpage.php" style="color: #ff0000" id="header"><img  src="download.jpg" width="200" height="100" >Blood Blank</a> </font>
 </div>
</div>
</div>
 </div>


<div class="container">
 <form method="post" action="login.php"  style="padding-top: 10px;padding-bottom:10px;" >
<div class="row">
<div class="col-lg-3">
</div>
<div class="col-lg-3" >
 <input type="text" class="form-control" name="email" placeholder="Email ID" required>
 </div>
<div class="col-lg-3" >
 <input type="Password" class="form-control" name="password" placeholder="Password" required>
 </div>
 <div class="col-lg-3" align="right">
 Registered already?
<input type="Submit" class='btn btn-success' value="Login"> 
 </div>
 </div>
 </form>
 </div>



 

<div class="container" style="padding-top: 10px;">
<ul id="menu" >
<li>
<a href="donor.php" style="background-color: #5cb85c;"> Register as a donor </a>
</li>
<li>
<a href="finddonor.php" style="background-color: #5cb85c;"> Find a donor </a>
</li>
<li>
<a href="bloodbank.php" style="background-color: #5cb85c;"> Hospitals </a>
</li>
<li>
<a href="tips.php" style="background-color: #5cb85c;"> Blood Donation Tips </a>
</li>
<li>
<a href="feedback.php" style="background-color: #5cb85c;"> Feedback</a>
</li>
<li>
<a href="events.php" style="background-color: #5cb85c;"> Upcoming events</a>
</li>
</ul>
</div>

<div id="container">
<img class="slides" src="bd3.png"/>
<img class="slides" src="bd6.jpg"/>
<img class="slides" src="bd5.png"/>
<img class="slides" src="bd1.jpg"/>
<img class="slides" src="bd2.jpg"/>
<button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
<button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>
</div>
<script>
var index = 1;

function plusIndex(n){
index = index + 1;
showImage(index);
}

showImage(1);

function showImage(n){
var i;
var x = document.getElementsByClassName("slides");
if(n > x.length){ index = 1};
if(n < 1){ index = x.length};
for(i=0;i<x.length;i++)
{
x[i].style.display = "none";
}
x[index-1].style.display = "block";
}
autoSlide();
function autoSlide(){
var i;
var x = document.getElementsByClassName("slides");
for(i=0;i<x.length;i++){
x[i].style.display = "none";
}
index++;
if(index > x.length){index = 1}
x[index-1].style.display = "block";
setTimeout(autoSlide,6000);

}
</script>

</body>
</html>