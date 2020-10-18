<?php
$hn = "localhost";
$un = "root";
$pw = "";
$db = "cs272";
$connection = new mysqli($hn, $un, $pw);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$connection->query("CREATE DATABASE $db");



//$exists = $connection->query("SELECT name FROM $db");
//if ($exists->num_rows === 0) {
//    echo 'xxxx';
////    $query = "INSERT INTO users VALUES('$fn', '$sn', '$un', '$pw')";
////    $result = $connection->query($query);
////    if (!$result) die($connection->error);
//}





