<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
                integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
                crossorigin="anonymous">

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
        <style>
                table,
                th,
                td {
                        border: 1px solid black;
                        padding-right: 65px;
                        background-color: white;
                        color: black;
                }
        </style>
        <script type="text/javascript" src="../../script/donor.js"></script>
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
                <form method="post">
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
        <?php 
        $fullname = null;
        $email = null;
        $mobileno = null;
        $gender = null; 
        $state = null;
        $city = null;
        $address = null;
        $bdate = null;
        $ldate = null;
        $weight = null;
        $bloodgroup = null;
        if(isset($_POST['userEmail'])) {
                $userEmail = $_SESSION["userEmail"]=$_POST['userEmail'];
                include('../database/config.php');
                $sql="SELECT * FROM donors where email='$userEmail'";
                
                $result = $conn->query($sql);
                
                if (!empty($result) && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $fullname = $row["fullname"];
                        $email = $row["email"];
                        $mobileno = $row["mobileno"];
                        $gender = $row["gender"]; 
                        $state = $row["state"];
                        $city = $row["city"];
                        $address = $row["address"];
                        $bdate = $row["bdate"];
                        $ldate = $row["ldate"];
                        $weight = $row["weight"];
                        $bloodgroup = $row["bloodgroup"];
                } else {
                        echo "<div class='container'>No record found</div>";
                }
        }
        ?>
        <div class="container" style="margin-top: 10px;">
                <form name="myform" method="post" action="updateResult.php">
                        <h6>Donor Details</h6>
                        <div class="row">
                                <div class="col-5">
                                        <div class="form-group">
                                                Full Name:
                                                <input type="text" name="fullname" class="form-control"
                                                        value="<?php echo $fullname;?>" required>
                                        </div>
                                        <div class="form-group" onload="myFunction();">
                                                Gender: </br>
                                                <input type="radio" name="gender" id="male" value="Male">Male
                                                </br>
                                                <input type="radio" name="gender" id="female" value="Female">Female
                                        </div>

                                        <div class="form-group">
                                                Address:
                                                <textarea name="address" class="form-control"
                                                        required><?php echo $address;?></textarea>
                                        </div>
                                        <div class="form-group">
                                                Select State:
                                                <select id="state" name="state" onchange="populate('state','city')"
                                                        class="form-control">
                                                        <option value="">-Select State-</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Gujarat">Gujarat</option>
                                                </select>
                                        </div>

                                        <div class="form-group">
                                                Select City:
                                                <select id="city" name="city" class="form-control">
                                                        <option value="">-Select City-</option>
                                                </select>
                                        </div>

                                        <div class="form-group">
                                                <input type="submit" class="form-control btn btn-success"
                                                        value="Update Profile">
                                        </div>

                                </div>
                                <div class="col-5">
                                        <div class="form-group">
                                                Date Of Birth:
                                                <input type="Date" name="date" class="form-control"
                                                        value="<?php echo $bdate;?>" required>
                                        </div>

                                        <div class="form-group">
                                                Mobile No:
                                                <input type="text" name="mobileno" class="form-control"
                                                        value="<?php echo $mobileno;?>" required>
                                        </div>

                                        <div class="form-group">
                                                Weight:
                                                <input type="text" name="weight" class="form-control"
                                                        value="<?php echo $weight;?>" required>
                                        </div>

                                        <div class="form-group">
                                                Date of last blood donation :
                                                <input type="Date" name="ldate" class="form-control"
                                                        value="<?php echo $ldate;?>" required>
                                        </div>

                                        <div class="form-group">
                                                Blood Group:
                                                <select class="form-control" id="bloodgroup" name="bloodgroup" required>

                                                        <option value="">-Select Blood Group-</option>

                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                </select>
                                        </div>
                                </div>
                        </div>
                </form>
        </div>
        <?php
        echo "
        <script type='text/javascript'>
                function loadGender() {
                        if(document.getElementById('male').value === '$gender') {
                                document.getElementById('male').checked = true;
                        } else if(document.getElementById('female').value === '$gender') {
                                document.getElementById('female').checked = true;
                        }
                }
                function loadBloodGroup() {
                        for (let index = 0;  index < document.getElementById('bloodgroup').options.length; index++) {
                                const elem = document.getElementById('bloodgroup').options;
                                if(elem[index] && elem[index].text === '$bloodgroup') {
                                        document.getElementById('bloodgroup').selectedIndex = index;
                                }
                        }
                }
                function loadState() {
                        for (let index = 0;  index < document.getElementById('state').options.length; index++) {
                                const elem = document.getElementById('state').options;
                                if(elem[index].text === '$state') {
                                        document.getElementById('state').selectedIndex = index;
                                }
                        }
                        populate('state','city');
                }
                function loadCity() {
                        for (let index = 0;  index < document.getElementById('city').options.length; index++) {
                                const elem = document.getElementById('city').options;
                                if(elem[index].text === '$city') {
                                        document.getElementById('city').selectedIndex = index;
                                }
                        }
                }
                function onLoad() {
                        loadGender();
                        loadBloodGroup();
                        loadState();
                        loadCity();
                }
                onLoad();
        </script>"
        ?>
</body>

</html>