<?php
$server = 'us-cdbr-east-02.cleardb.com';
$username = 'b29064eaa430d7';
$password = '10702318';
$db = 'heroku_b9123864f1692c6';

//$server = 'localhost';
//$username = 'root';
//$password = '';
//$db = 'heroku_b9123864f1692c6';

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$GLOBALS['conn'] = $conn;
