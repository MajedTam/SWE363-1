<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Assests/CSS/navbar.css">
    <link rel="stylesheet" href="Assests/CSS/Dashboard.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>


    <?php
    require 'header.php';
    ?>





    <div class="mainBox">
        <main>

            <?php

            if (isset($_SESSION['id'])) {
                echo '<p> logged in ! </p>';
            } else {
                echo '<p> logged out ! </p>';
            }

            ?>


            <button id="plus">+</button>

            <div id="line1"></div>
            <div id="line2"></div>

            <div class="box1">
                <div class="testCard">
                    <div class="testInfo">
                        <p>
                            <p class="testName">Test 1</p>
                            SWE 363
                            <br>
                            <p class="date">4/23/2020</p>
                        </p>

                    </div>

                </div>

                <div class="testCard">
                    <div class="testInfo">
                        <p>
                            <p class="testName">Test 1</p>
                            SWE 363
                            <br>
                            <p class="date">4/23/2020</p>
                        </p>

                    </div>

                </div>
                <div class="testCard">
                    <div class="testInfo">
                        <p>
                            <p class="testName">Test 1</p>
                            SWE 363
                            <br>
                            <p class="date">4/23/2020</p>
                        </p>

                    </div>

                </div>



                <div class="testCard">
                    <div class="testInfo">
                        <p>
                            <p class="testName">Test 1</p>
                            SWE 363
                            <br>
                            <p class="date">4/23/2020</p>
                        </p>

                    </div>

                </div>

                <div class="testCard">
                    <div class="testInfo">
                        <p>
                            <p class="testName">Test 1</p>
                            SWE 363
                            <br>
                            <p class="date">4/23/2020</p>
                        </p>

                    </div>

                </div>

                <div class="testCard">
                    <div class="testInfo">
                        <p>
                            <p class="testName">Test 1</p>
                            SWE 363
                            <br>
                            <p class="date">4/23/2020</p>
                        </p>

                    </div>

                </div>

                <div class="testCard">
                    <div class="testInfo">
                        <p>
                            <p class="testName">Test 1</p>
                            SWE 363
                            <br>
                            <p class="date">4/23/2020</p>
                        </p>

                    </div>

                </div>
            </div>

        </main>






    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>