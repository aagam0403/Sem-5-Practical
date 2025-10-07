<?php
session_start();
$_SESSION['name'] = "John";
$_SESSION['email'] = "abcd@gmail.com";
echo "<h2>Session variables set.</h2>";
echo "Name: " . $_SESSION['name'] . "<br>";
echo "Email: " . $_SESSION['email'] . "<br>";
echo '<a href="3_2.php">Go to next page to modify email</a>';
?>
