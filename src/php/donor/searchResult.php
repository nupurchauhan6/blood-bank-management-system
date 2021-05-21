<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../script/donor.js"></script>
    <link rel="stylesheet" type="text/css" href="../../style/style.css">
    <style type="text/css">
        #form {
            margin-top: 10px;
            padding-top: 10px;
            padding-right: 0px;
            padding-bottom: 10px;
            padding-left: 0px;
        }
    </style>


</head>

<body>
<?php include('../common/header.html'); ?>
    <div class="container">
    <h5> SEARCH RESULT IS: </h5>

<?php
include('../database/config.php');

$bloodgroup=$_POST['bloodgroup'];
$state=$_POST['state'];
$city=$_POST['city'];

echo "Your Search -"."<br/>"."Blood group:"." ".$bloodgroup." "."State:"." ".$state." "."City:"." ".$city."<br/>";
 
$sql="SELECT * FROM donors where state='$state'AND bloodgroup='$bloodgroup'";
 
$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    echo '<div class="container">';
    echo '<form action="sendInfo.php" id="form">';
    echo "Name:"." ". $row["fullname"]."<br/>";
    echo "Address:"." ".$row["address"]."<br/>";
    echo "Blood Group:"." ". $row["bloodgroup"]."<br/>";
    echo "Moblie no:"." " .$row["mobileno"]."<br/>";
    echo '<button type="submit" class="btn btn-success">Send Request</button>';
    echo '</form>';
    echo '</div>';

}
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<div>
</body>

</html>