<!-- retrieving user input on TESTs -->

<?php


// require('connection.php');

require 'dbh.inc.php';


//retrieve user input and put it in vars
$test_name = $_POST['testName'];
$test_date = $_POST['date'];
$test_hours = $_POST['durationHours'];
$test_mins = $_POST['durationMinutes'];
$test_duration = $test_hours * 60 + $test_mins;
$test_display = $_POST['selection1'];
$test_backtrack = $_POST['selection2'];


echo nl2br($test_name . "\n" . $test_date . "\n" . $test_duration . "\n" . $test_display . "\n" . $test_backtrack);


//statment below puts the retrieved data into the database
// $statment = $db->prepare("INSERT INTO 
// tests(Test_Name,
// Test_Date,
// Test_Duration,
// Display,
// Backtrack)
// VALUES(:test_name,
// :test_date,
// :test_duration,
// :test_display,
// :test_backtrack)");
// try{
//     $statment->execute(['test_name'  => $test_name,
//     'test_date'=> $test_date, 
//     'test_duration' => $test_duration,
//     'test_display' => $test_display,
//     'test_backtrack'=> $test_backtrack]);
// }
// catch(PDOException $e) {
//     echo "Error1: " . $e->getMessage();
//   }

$sql = "INSERT INTO 
    tests(Test_Name,
    Test_Date,
    Test_Duration,
    Display,
    Backtrack)
    VALUES('$test_name',
     ' $test_date', 
       '  $test_duration',
      '  $test_display',
     '   $test_backtrack' )";
     $stmt = mysqli_prepare($conn,$sql);
     mysqli_stmt_execute($stmt);

$Test_id = mysqli_insert_id($conn);








// <!-- ------------------------------ Regisiter students from xlsx file ---------------------- -->



require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST['submit'])) {
    require 'dbh.inc.php';

    $target_dir = '../uploads/';
    $target_file = $target_dir . basename($_FILES["import_excel"]["name"]);
    $FileType = pathinfo($target_file, PATHINFO_EXTENSION);

  if ($FileType != 'xlsx'){
    header("Location: ../dp.php?error=wrongfile");
    exit();
  }

    move_uploaded_file($_FILES["import_excel"]["tmp_name"], $target_file);


    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($target_file);


    $sheet = $spreadsheet->getActiveSheet();

    $rows = $sheet->toArray();
    $name = "";
    $id   = null;


    foreach ($rows as $key => $value) {
        // key is the row count(starts from 0)
        // array of values

        foreach ($value as $iter => $column_value) {
            //$column_value the value of row
            if ($iter == 0 && ($column_value != 'name' &&  $column_value != 'Name' &&  $column_value != 'NAME'))
                $name = $column_value;
            else if ($iter == 1 && ($column_value != 'id' &&  $column_value != 'Id' &&  $column_value != 'ID'))
                $id = $column_value;
        };
        echo $name . "     " . $id;

        $sql = "insert into student(Student_name,Student_id,Test_id) values ('$name','$id','$Test_id')";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_execute($stmt);
    };




    if (unlink($target_file))
        echo 'Deleted';
    else
        echo "not deleted";
} else {
    echo 'hi';
}


mysqli_stmt_close($stmt);
mysqli_close($conn);