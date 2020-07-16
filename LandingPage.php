<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Assests/CSS/navbar.css">
    <link rel="stylesheet" href="Assests/CSS/LandingPage.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    
 
</head>
<body>


<?php
require 'header.php';
?>

  <main>

  <div class="box1">

    <div class="Textwrap"> 
      <p id="landingpageSlogan"> <br>We make 
        <br>exams easy</p>

        <p id="landingpageP" >An online Exam Preparation and Learning Management System 
         <br> that’s easy to use, and easy to manage</p>

         
         <?php

if (isset($_SESSION['id'])) {
    echo '<button > <a class="ab" href="ConfigreTest.php">Create Test</a>  </button>';  
        
} else {
    echo '<button > <a class="ab" href="login.php">Create Test</a>  </button>';  
}

?>
        
      </div>
   
  </div>

        
  


  <div class="box2">
    
    <img id="humans" src="Assests/humaaans/homehuman.svg" alt="">

  </div>




</main>







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>