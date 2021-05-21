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
                    <a href="dashboard.html"><img src="../../../resources/img/logo.jpg" width="200"
                            height="100">
                        <span class="header">Blood Bank</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <form method="post" action="removeDonor.php">
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
<?php
if(isset($_POST['userEmail'])) {
$email=$_POST['userEmail'];
include('../database/config.php');
$sql = "DELETE FROM donors WHERE email='$email'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}
?>
</div>
</body>

</html>