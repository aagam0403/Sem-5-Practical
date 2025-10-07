<?php
session_start();
if (isset($_SESSION['email'])) {
    $_SESSION['email'] = "xyz@gmail.com";
}
echo "<h2>Email modified.</h2>";
echo "Name: " . $_SESSION['name'] . "<br>";
echo "Email: " . $_SESSION['email'] . "<br>";
echo '<a href="3_3.php">Go to next page to unset email</a>';
?>
