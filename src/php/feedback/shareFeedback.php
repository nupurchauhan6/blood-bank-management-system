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
</head>

<body>

    <?php include('../common/header.html'); ?>
    <div class="container">
        <form method="post" action="saveFeedback.php">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <h5> Rate this website! </h5>
                    <p> Please let us know your experience with our website. </p>
                    Full name:
                    <input type="text" class="form-control" name="fullname" required></br>
                    Email:
                    <input type="text" class="form-control" name="email" required></br>
                    Overall,how satisfied were you with the service?</br>
                    <input type="radio" name="feedback" value="Very satified.">Very satified. </br>
                    <input type="radio" name="feedback" value="Satified.">Satisied.</br>
                    <input type="radio" name="feedback" value="Neutral.">Neutral.</br>
                    <input type="radio" name="feedback" value="Unsatisfied.">Unsatisfied.</br>
                    Any suggestions for improvement?
                    <textarea class="form-control" name="suggestions"> </textarea></br>
                    Any comments, complaints or acknowledgments?
                    <textarea class="form-control" name="comments"> </textarea></br>
                    <input type="Submit" class='btn btn-success'>
                </div>
            </div>
        </form>
    </div>

</body>

</html>