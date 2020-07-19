
<?php


if (isset($_POST['login'])) {







    $ID = $_POST['ID'];
    $Name = $_POST['Name'];
    $Test_id = $_POST['Test_id'];

    if (!empty($ID) && !empty($Name)  && !empty($Test_id)) {

        require 'dbh.inc.php';

        $sql = "SELECT * from student where Student_id= '$ID' AND Test_id='$Test_id' ";
        $result = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
          
            // studentd & test exisits
            session_start();


            // get the questions
            $sql = "SELECT * from questions  where Test_id='$Test_id'";
            $result = $conn->query($sql);

            if ($questions = $result->fetch_all(MYSQLI_ASSOC)) {

                $_SESSION['questions'] = $questions;
            } else {
                echo 'Server Error';
                exit();
            }




            // get test info
            $sql = "SELECT * from tests  where Test_id ='$Test_id'";
            $result = $conn->query($sql);

            if ($test = $result->fetch_assoc()) {

                $_SESSION['test'] = $test;
            } else {
                echo 'Test not found';
                exit();
            }


            date_default_timezone_set('Asia/Riyadh');

            $testDate = new DateTime($test['Test_Date']);
            $currentDate = new DateTime('now');
            $allowedWindo = clone $testDate;
            $allowedWindo = $allowedWindo->modify('+1 minute');

            // echo "<br> current: " . $currentDate->format('Y-m-d H:i:00');
            // echo "<br> new: " . $allowedWindo->format('Y-m-d H:i:00');
            // echo "<br> test: " . $testDate->format('Y-m-d H:i:00');;

            // ReMOVE THIS FOR CONTROL OVER TIME AND ERROR HANDLE

            header("Location: ../test.php");
            exit();

            if ($currentDate < $testDate) {
                // before test time
                echo '<br> test is not now ';
                header("Location: ../test.php");
                exit();
            } else if ($currentDate > $testDate && $currentDate <= $allowedWindo) {
                // in test window, allow student to enter
                header("Location: ../test.php");

                exit();
            } else if ($currentDate > $testDate && $currentDate > $allowedWindo) {
                // test window is due or whole test is due 
                echo '<br> test is due';
            }
        } else {
            // wrong info, student & test dont exisit
            header("Location: ../testLogin.php?error=wrongInfo&NAME=" . $Name);
            exit();
        }
    } else {
        // embty fileds
        header("Location: ../testLogin.php?error=embtyfields&NAME=" . $Name . "&ID=" . $ID . "&Test_id=" . $Test_id);
        exit();
    }




    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
