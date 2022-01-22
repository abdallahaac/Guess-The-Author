<?php
//connection to the database

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "gta";
$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$con) {
    echo "Error connecting" . mysqli_connect_error();
} 

// else {
//     echo "Connected";
// }