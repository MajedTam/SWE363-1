<?php 
  

if(isset($_POST['login'])){

require 'localDB.php';


$sql = "SELECT * from questions  where Test_id=1";
$result = $conn -> query($sql);

$questions = $result -> fetch_all(MYSQLI_ASSOC);
print_r($questions[1]);
session_start();
$_SESSION['questions'] = $questions; 
header("Location: ../test.php");
exit();






//     $ID = $_POST['ID'];
//     $Name = $_POST['Name'];

// if(!empty($ID) || !empty($Name)){

//     require 'dbh.inc.php';

// $sql = "SELECT * from StudentsDB  where Name='".$Name."'AND ID='".$ID."'limit 1";

//   $result = mysqli_query($conn,$sql);





// if($row = mysqli_fetch_assoc($result)){
//     $db_id = $row['ID'];

//    // $db_name = $row['ID'];

//     if(md5($ID)==$db_id)
// { echo 'Your test is ready';
// }
// else {
//     echo 'incorrect id';
// }
// }
// else {
//     echo 'Check your query';
// }
// }
// else {
//     echo 'all fields are requiered';
// }
  


}
else{
    echo 'here 2 ';
}
?>