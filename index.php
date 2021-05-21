<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
            integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
            crossorigin="anonymous"
        >
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="src/style/style.css">
    </head>
    <body>
        <div class="container">
            <ul id="menu">
                <li>
                    <a href="src/php/donor/registerDonor.php" style="background-color: #5cb85c;"> Donate Blood </a>
                </li>
                <li>
                    <a href="src/php/donor/searchDonor.php" style="background-color: #5cb85c;"> Find a donor</a>
                </li>
                <li>
                    <a href="tips.html" style="background-color: #5cb85c;"> Blood Donation Tips</a>
                </li>
                <li>
                    <a href="src/php/feedback/shareFeedback.php" style="background-color: #5cb85c;"> Feedback</a>
                </li>
            </ul>
        </div>
        <div id="container">
            <img class="slides" src="resources/img/slide1.jpg">
            <img class="slides" src="resources/img/slide2.jpg">
            <img class="slides" src="resources/img/slide3.png">
            <img class="slides" src="resources/img/slide4.png">
            <img class="slides" src="resources/img/slide5.jpg">
            <button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
            <button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>
        </div>
        <script>
                var index = 1;

                function plusIndex(n) {
                        index = index + 1;
                        showImage(index);
                }

                showImage(0);

                function showImage(n) {
                        var i;
                        var x = document.getElementsByClassName("slides");
                        if (n > x.length) { index = 1 };
                        if (n < 1) { index = x.length };
                        for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                        }
                        x[index - 1].style.display = "block";
                }
                autoSlide();
                function autoSlide() {
                        var i;
                        var x = document.getElementsByClassName("slides");
                        for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                        }
                        index++;
                        if (index > x.length) { index = 1 }
                        x[index - 1].style.display = "block";
                        setTimeout(autoSlide, 6000);

                }
        </script>
    </body>
</html>
