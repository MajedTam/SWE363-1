<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "examplatform";


// $servername = "sql12.freesqldatabase.com";
// $dbUsername = "sql12355404";
// $dbPassword = "AZt3eWtPaR";
// $dbName = "sql12355404";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection fialed: ".mysqli_connect_error());
}