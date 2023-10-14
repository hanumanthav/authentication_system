<?php

$sname = "localhost";
$uname = "root";  // Corrected variable name
$password = "hanumantha@123";
$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
?>
