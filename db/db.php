<?php
$hn = "localhost";
$un = "root";
$pw = "";
$db = "user";
$connection = new mysqli($hn, $un, $pw);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

 $connection->query("CREATE DATABASE cmpe272");


$sqlSource = file_get_contents("./db/cmpe272.sql");
mysqli_multi_query($connection,$sqlSource);

$sql = "SELECT * FROM $db";  //edit your table name here
$res = $connection->query($sql) or die($connection->error);;
echo $res;
while ($row = $res->fetch_assoc()) {
    // print_r($row);
}


//$exists = $connection->query("SELECT name FROM $db");
//if ($exists->num_rows === 0) {
//    echo 'xxxx';
////    $query = "INSERT INTO users VALUES('$fn', '$sn', '$un', '$pw')";
////    $result = $connection->query($query);
////    if (!$result) die($connection->error);
//}





