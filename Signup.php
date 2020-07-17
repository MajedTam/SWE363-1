<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="Assests/CSS/navbar.css">
  <link rel="stylesheet" href="Assests/CSS/signup.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
</head>

<body>


  <?php
  require 'header.php';
  ?>


  <main class="mainBox">
    <div class="boxa"> <img src="Assests/humaaans/signUpHuman1.svg" alt=""></div>



    <div class="boxb">


      <form action="includes/signup.inc.php" method="POST">

        <h1 id="formLogo">ExamPlatform</h1>

        <?php
        if (isset($_GET['error'])) {
          if ($_GET['error'] == 'embtyfields') {
            echo '<span class="error animate__animated animate__fadeIn" >Please fill the empty fields</span>';
          } else if ($_GET['error'] == 'invlaidusername') {
            echo '<span class="error animate__animated animate__fadeIn" >invalid username, please use letters&numbers only</span>';
          } else if ($_GET['error'] == 'invlaidmail') {
            echo '<span class="error animate__animated animate__fadeIn" >Invalid email, please re-enter your email</span>';
          } else if ($_GET['error'] == 'passwordcheck') {
            echo '<span class="error animate__animated animate__fadeIn" >Passwords does not match, please re-enter your password</span>';
          } else if ($_GET['error'] == 'usertaken') {
            echo '<span class="error animate__animated animate__fadeIn" >Username is already taken, please choose another one</span>';
          } else if ($_GET['error'] == 'sqlerror') {
            echo '<span class="error animate__animated animate__fadeIn" >Server error, please try again later</span>';
          }
        }



        ?>




        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">
        <label for="password">Re-enter Password</label>
        <input type="password" name="password-repeat">
        <button type="submit" name="signup-submit" id="signup">Sign Up !</button>


      </form>

    </div>
    <div class="boxc">
      <img src="Assests/humaaans/signUpHuman2.svg" alt="">
    </div>


  </main>











  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>