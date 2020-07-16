<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="Assests/CSS/navbar.css">
  <link rel="stylesheet" href="Assests/CSS/login.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>


  <?php
  require 'header.php';
  ?>

  <main class="mainBox">
    <div class="boxa"> <img src="humaaans/signUpHuman1.svg" alt=""></div>



    <div class="boxb">


      <form action="includes/login.inc.php" method="POST">

        <h1 id="formLogo">ExamPlatform</h1>

        <?php

        if (isset($_GET['signup'])) 
          if ($_GET['signup'] == 'success') {
            echo '<span class="success animate__animated animate__fadeIn" >You have been signed up ! <br>Please login now</span>';
        }

        ?>




        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <button type="submit" name="login-submit" id="login">Login</button>


      </form>
      <!-- <a href="signup.php">Signup</a> -->
      <!-- logout form should be in nav -->


    </div>

    <div class="boxc">
      <img src="humaaans/signUpHuman2.svg" alt="">
    </div>


  </main>











  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>