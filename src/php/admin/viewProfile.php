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

    <link rel="stylesheet" type="text/css" href="../../style/style.css">

</head>

<body>

    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-7">
                    <a href="dashboard.html"><img src="../../../resources/img/logo.jpg" width="200" height="100">
                        <span class="header">Blood Bank</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <form method="post" action="viewProfile.php">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        Email id:
                        <input type="text" name="userEmail" class="form-control" required>
                    </div>
                    <input type="Submit" class="form-control btn btn-success">
                </div>
            </div>
        </form>
    </div>

    <div class="container">
<table>
<?php
if(isset($_POST['userEmail'])) {
$email=$_POST['userEmail'];
include('../database/config.php');
$sql="SELECT * FROM donors where email='$email'";

$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
    // output data of each row
while($row = $result->fetch_assoc()) {

echo '<tr style="margin-bottom:10px;">';
echo '<th>Name:</th>';
echo '<td>';
echo  $row["fullname"];
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<th>Gender:</th>';
echo '<td>';
echo  $row["gender"];
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<th>Weight:</th>';
echo '<td>';
echo  $row["weight"];
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<th>Email:</th>';
echo '<td>';
echo  $row["email"];
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<th>Date of birth:</th>';
echo '<td>';
echo  $row["bdate"];
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<th>Last date of donation:</th>';
echo '<td>';
echo  $row["ldate"];
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<th>Mobile No:</th>';
echo '<td>';
echo  $row["mobileno"];
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<th>Address:</th>';
echo '<td>';
echo  $row["address"];
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<th>Blood Group:</th>';
echo '<td>';
echo  $row["bloodgroup"];
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<th>State:</th>';
echo '<td>';
echo  $row["state"];
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<th>City:</th>';
echo '<td>';
echo  $row["city"];
echo '</td>';
echo '</tr>';
}
} else {
   echo "0 records found!";
}
}

?>
</table>
</div>
</body>
</html>