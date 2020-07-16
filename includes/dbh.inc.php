<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "examplatform";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection fialed: ".mysqli_connect_error());
}