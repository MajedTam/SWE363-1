<?php

if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($username)) {
        header("Location: ../Login.php?error=emptyfields");
        exit();
    } else {
        $sql  = "SELECT * FROM instructor WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../Login.php?error=sqlerror");
            exit();
        } else {

            mysqli_stmt_bind_param($stmt, "ss", $username, $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $passwordCheck = password_verify($password , $row['password']);
                if($passwordCheck == false){
                    header("Location: ../Login.php?error=wrongPassword");
                    exit();
                }
                else if ($passwordCheck == true){
                    // login session 
                    session_start();
                    $_SESSION['id'] = $row['instructor_id'];
                    $_SESSION['username'] = $row['username']; 
                    header("Location: ../Dashboard.php?login=success");
                    exit();
                

                }
                else{
                    header("Location: ../Login.php?error=wrongPassword");
                    exit();
                }




            } else {
                header("Location: ../Login.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
