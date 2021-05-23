<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" type="text/css" href="../../style/style.css">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            padding-right: 65px;
            background-color: white;
            color: black;
            padding: 15px;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
        }

        td {
            height: 50px;
            vertical-align: bottom;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-7">
                    <a href="dashboard.html">
                        <img src="../../../resources/img/logo.jpg" width="200" height="100">
                        <span class="header">Blood Bank</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <table>
        <tr style="margin-bottom:10px;">
            <th>Full Name</th>
            <th>Email ID :</th>
            <th>Contact Number</th>
        </tr>

        <?php
include('../database/config.php');
$sql="SELECT * FROM donors";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo '<tr>';
echo '<td>';
echo  $row["fullname"];
echo '</td>';
echo '<td>';
echo  $row["email"];
echo '</td>';
echo '<td>';
echo  $row["mobileno"];
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