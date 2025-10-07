<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "testdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection Successful";
mysqli_close($conn);
?>