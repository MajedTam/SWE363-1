<?php

    
    require('connection.php');

    //retrieve user input and put it in vars
    $test_name = $_POST['testName'];
    $test_date = $_POST['date'];
    $test_hours = $_POST['durationHours'];
    $test_mins = $_POST['durationMinutes'];
    $test_duration = $test_hours * 60 + $test_mins;
    $test_display = $_POST['selection1'];
    $test_backtrack = $_POST['selection2'];

    
    echo nl2br($test_name . "\n" . $test_date . "\n" . $test_duration . "\n" . $test_display . "\n" . $test_backtrack ."\n");
    

    //statment below puts the retrieved data into the database
    $statment = $db->prepare("INSERT INTO 
    newtests(Test_Name,
    Test_Date,
    Test_Duration,
    Display,
    Backtrack)
    VALUES(:test_name,
    :test_date,
    :test_duration,
    :test_display,
    :test_backtrack)");
    try{
        $statment->execute(['test_name'  => $test_name,
        'test_date'=> $test_date, 
        'test_duration' => $test_duration,
        'test_display' => $test_display,
        'test_backtrack'=> $test_backtrack]);
    }
    catch(PDOException $e) {
        echo "Error1: " . $e->getMessage();
      }


    ?>