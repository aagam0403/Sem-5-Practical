<?php
session_start();
unset($_SESSION['email']);
echo "<h2>Email session variable unset.</h2>";
echo "Name: " . $_SESSION['name'] . "<br>";
echo "Email: " . (isset($_SESSION['email']) ? $_SESSION['email'] : "Email is unset") . "<br>";
?>
