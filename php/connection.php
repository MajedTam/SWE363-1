<?php
$dsn = "mysql:host=localhost;dbname=db";
$username = "root";
$password = "";

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "you have connected! </br>";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}


?>