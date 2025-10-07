<?php
$servername = "localhost";
$username = "root";
$password = "Arham@1234"; 
$dbname = "students";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO students (name, email, age) VALUES ('abcd', 'xyz@gmail.com', 20)";
if (mysqli_query($conn, $sql)) {
    echo "Values inserted into students table succesfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
