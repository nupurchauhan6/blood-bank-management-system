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

    <?php include('../common/header.html'); ?>
    <div class="container">
        <h6> Thank you for your feedback! </h6>


    <?php
include('../database/config.php');

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
$suggestions=$_POST['suggestions'];
$comments=$_POST['comments'];

$sql = "INSERT INTO feedback(fullname,email,rating,suggestions,comments)
VALUES ('$fullname', '$email','$feedback','$suggestions','$comments')";

if ($conn->query($sql) === TRUE) {
    echo  "";//"New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</div>
</body>

</html>