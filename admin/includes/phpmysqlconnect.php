<?php
require_once 'dbconfig.php';
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected to $dbname at $host successfully.";
}