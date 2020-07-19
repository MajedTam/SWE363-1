<!-- connection to local host -->
<!-- 
<?php
$dsn = "mysql:host=sql12.freesqldatabase.com;dbname=sql12355404";
$username = "sql12355404";
$password = "AZt3eWtPaR";


// $servername = "sql12.freesqldatabase.com";
// $dbUsername = "sql12355404";
// $dbPassword = "AZt3eWtPaR";
// $dbName = "sql12355404";


try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "you have connected! </br>";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}


?> -->