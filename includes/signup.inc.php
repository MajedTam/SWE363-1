<?php

if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';


    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($password_repeat)) {
        header("Location: ../signup.php?error=embtyfields&username=" . $username . "&email=" . $email);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invlaidusername&email");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invlaidmail&username=" . $username);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invlaidusername&email=" . $email);
        exit();
    } else if ($password !== $password_repeat) {
        header("Location: ../signup.php?error=passwordcheck&username=" . $username . "&email=" . $email);
        exit();
    } else {


        
        $sql = "SELECT username FROM instructor WHERE username=?";                // DATABESE QUERY\
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) { 
            header("Location: ../signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck =   mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&email=" . $email);
                exit();
            }



            //      signing up to db
            else {
                $sql = "INSERT INTO instructor (username, email, password) VALUES(?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {
                    $hashPwd = password_hash($password, PASSWORD_DEFAULT);


                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../login.php?signup=success");
                    exit();
                }
            }
        }
    }


mysqli_stmt_close($stmt);
mysqli_close($conn);


}

else{
    header("Location: ../signup.php");
    exit();
}
